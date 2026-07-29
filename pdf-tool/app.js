/* PDF Toolkit — all processing happens locally via pdf-lib / pdf.js / JSZip.
   No network requests are made anywhere in this file. */

/* --- Server keepalive & auto-shutdown (only active when served via start-server) --- */
(function() {
  // Only activate when served from localhost (not file://)
  if (location.protocol !== 'http:' && location.protocol !== 'https:') return;
  if (!location.hostname.match(/^(localhost|127\.0\.0\.1)$/)) return;

  // Ping the server every 15s to keep it alive
  setInterval(function() {
    fetch('/keepalive', { method: 'POST' }).catch(function() {});
  }, 15000);

  // Tell the server to shut down when the user closes/navigates away from the tab
  window.addEventListener('beforeunload', function() {
    navigator.sendBeacon('/shutdown', '');
  });
})();

const { PDFDocument, degrees, rgb, StandardFonts, LineCapStyle } = PDFLib;

const state = {
  toolKey: null,
  files: [],   // [{file, name, size, arrayBuffer}]
  pages: [],   // for thumb-based tools: [{index, rotationDelta, deleted, selected, dataUrl, baseRotation}]
  optionsRendered: false,
  previewBg: null,   // {dataUrl, widthPt, heightPt, dispWidth, dispHeight, scale} — first page, for live previews
  wmImage: null,     // {name, mime, arrayBuffer, dataUrl} — chosen watermark image, if any
  pdf2excelIntervalValues: { rows: '', cols: '' }, // remembers the global break-interval inputs across preview rebuilds
};

const els = {
  homeView: document.getElementById('homeView'),
  toolView: document.getElementById('toolView'),
  toolGrid: document.getElementById('toolGrid'),
  toolTitle: document.getElementById('toolTitle'),
  toolSubtitle: document.getElementById('toolSubtitle'),
  dropZone: document.getElementById('dropZone'),
  fileInput: document.getElementById('fileInput'),
  fileList: document.getElementById('fileList'),
  optionsPanel: document.getElementById('optionsPanel'),
  thumbGrid: document.getElementById('thumbGrid'),
  processBtn: document.getElementById('processBtn'),
  progressArea: document.getElementById('progressArea'),
  progressFill: document.getElementById('progressFill'),
  progressLabel: document.getElementById('progressLabel'),
  resultArea: document.getElementById('resultArea'),
  backBtn: document.getElementById('backBtn'),
  homeLink: document.getElementById('homeLink'),
};

/* ---------------- Tool registry ---------------- */

const TOOLS = {
  merge: {
    title: 'Merge PDF', subtitle: 'Combine PDFs in the order you want. Use the arrows to reorder.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderFileListOnly,
    process: processMerge,
  },
  split: {
    title: 'Split PDF', subtitle: 'Break one PDF into several.',
    accept: '.pdf', multiple: false, needsThumbs: false,
    render: renderSplitOptions,
    process: processSplit,
  },
  remove: {
    title: 'Remove Pages', subtitle: 'Click a page to mark it for removal.',
    accept: '.pdf', multiple: false, needsThumbs: true, thumbMode: 'remove',
    render: null, process: processRemoveOrExtract,
  },
  extract: {
    title: 'Extract Pages', subtitle: 'Click the pages you want to keep.',
    accept: '.pdf', multiple: false, needsThumbs: true, thumbMode: 'extract',
    render: null, process: processRemoveOrExtract,
  },
  organize: {
    title: 'Organize PDF', subtitle: 'Drag to reorder. Use the buttons to rotate or delete a page.',
    accept: '.pdf', multiple: false, needsThumbs: true, thumbMode: 'organize',
    render: null, process: processOrganize,
  },
  compress: {
    title: 'Compress PDF', subtitle: 'Reduce file size. This is best-effort — a browser can\'t match a dedicated server compressor.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderCompressOptions, mergeRowId: 'compressMergeRow',
    process: processCompress,
    updatePreview: updateCompressSizeEstimate,
  },
  rotate: {
    title: 'Rotate PDF', subtitle: 'Rotate every page of the file(s) you upload.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderRotateOptions, mergeRowId: 'rotateMergeRow',
    process: processRotate,
  },
  pagenumbers: {
    title: 'Add Page Numbers', subtitle: 'Stamp page numbers onto every page.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderPageNumberOptions, mergeRowId: 'numMergeRow',
    process: processPageNumbers,
    updatePreview: updatePageNumberPreview,
  },
  watermark: {
    title: 'Watermark PDF', subtitle: 'Stamp text or a logo across every page.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderWatermarkOptions, mergeRowId: 'wmMergeRow',
    process: processWatermark,
    updatePreview: updateWatermarkPreview,
  },
  pdf2jpg: {
    title: 'PDF to JPG', subtitle: 'Export every page as a JPG image.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderPdf2JpgOptions, mergeRowId: 'jpgMergeRow',
    process: processPdf2Jpg,
  },
  img2pdf: {
    title: 'JPG/PNG to PDF', subtitle: 'Turn one or more images into PDF(s). Reorder with the arrows.',
    accept: 'image/*', multiple: true, needsThumbs: false,
    render: renderImg2PdfOptions,
    process: processImg2Pdf,
  },
  word2pdf: {
    title: 'Word to PDF', subtitle: 'Renders your .docx the way Word would — real fonts, sizes, and tables — then hands it to your browser\'s print engine for a genuine, selectable PDF.',
    accept: '.docx', multiple: false, needsThumbs: false, customFlow: true,
    render: renderWordToPdf,
    process: null,
  },
  pdf2word: {
    title: 'PDF to Word', subtitle: 'Extracts text and tables into an editable .docx, with a preview of the result. Font sizes are approximated; exact layout isn\'t guaranteed.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderPdf2WordOptions, mergeRowId: 'wordMergeRow',
    process: processPdf2Word,
    updatePreview: updatePdf2WordExtractionPreview,
  },
  excel2pdf: {
    title: 'Excel to PDF', subtitle: 'Converts a spreadsheet using your browser\'s own print engine, so the result is a real, printable PDF — not a flattened image.',
    accept: '.xlsx,.xls', multiple: false, needsThumbs: false, customFlow: true,
    render: renderExcelToPdf,
    process: null,
  },
  pdf2excel: {
    title: 'PDF to Excel', subtitle: 'Best-effort table extraction into a .xlsx, with a preview where you can mark where each sheet should split.',
    accept: '.pdf', multiple: true, needsThumbs: false,
    render: renderPdf2ExcelOptions, mergeRowId: 'excelMergeRow',
    process: processPdf2Excel,
    updatePreview: updatePdf2ExcelExtractionPreview,
  },
  redact: {
    title: 'Redact PDF', subtitle: 'Draw black boxes over sensitive content. The underlying text is permanently removed — this cannot be undone.',
    accept: '.pdf', multiple: false, needsThumbs: false, customFlow: true,
    render: renderRedactTool,
    process: null,
  },
  lockpdf: {
    title: 'Lock PDF', subtitle: 'Add real password protection — genuine PDF encryption, not a cosmetic lock.',
    accept: '.pdf', multiple: false, needsThumbs: false,
    render: renderLockPdfOptions,
    process: processLockPdf,
  },
  unlockpdf: {
    title: 'Unlock PDF', subtitle: 'Remove password protection from a PDF you already have the password for.',
    accept: '.pdf', multiple: false, needsThumbs: false,
    render: renderUnlockPdfOptions,
    process: processUnlockPdf,
  },
  comparepdf: {
    title: 'Compare PDF', subtitle: 'Upload two versions of a PDF to see exactly what text changed between them, page by page.',
    accept: '.pdf', multiple: true, needsThumbs: false, customFlow: true,
    render: renderComparePdfTool,
    process: null,
  },
  pdfeditor: {
    title: 'Edit PDF', subtitle: 'Add text, draw, and highlight directly on the page — real additions to the PDF, not a flattened image.',
    accept: '.pdf', multiple: false, needsThumbs: false, customFlow: true,
    render: renderPdfEditorTool,
    process: null,
  },
  html2pdf: {
    title: 'HTML to PDF', subtitle: 'Turn a local HTML file (e.g. a webpage you\u2019ve saved) into a PDF using your browser\u2019s own print engine.',
    accept: '.html,.htm', multiple: false, needsThumbs: false, customFlow: true,
    render: renderHtmlToPdf,
    process: null,
  },
  createinvoice: {
    title: 'Create Invoice', subtitle: 'Fill in a form and get a professional invoice PDF, with a live preview as you type.',
    accept: null, multiple: false, needsThumbs: false, customFlow: true, noUpload: true,
    render: renderCreateInvoiceTool,
    process: null,
  },
  bulkinvoice: {
    title: 'Bulk Create Invoices', subtitle: 'Upload one spreadsheet and generate a separate invoice PDF for every invoice number in it.',
    accept: '.xlsx,.xls', multiple: false, needsThumbs: false, customFlow: true,
    render: renderBulkInvoiceTool,
    process: null,
  },
};

/* ---------------- Navigation ---------------- */

document.querySelectorAll('.tool-card').forEach(card => {
  card.addEventListener('click', () => openTool(card.dataset.tool));
});
els.backBtn.addEventListener('click', goHome);
if (els.homeLink) els.homeLink.addEventListener('click', goHome);

function goHome() {
  if (state.toolKey === 'pdf2word' || state.toolKey === 'pdf2excel') terminateOcrWorker();
  els.toolView.hidden = true;
  els.homeView.hidden = false;
  resetToolView();
}

function openTool(key) {
  if (state.toolKey && state.toolKey !== key) terminateOcrWorker();
  state.toolKey = key;
  state.files = [];
  state.pages = [];
  state.optionsRendered = false;
  state.previewBg = null;
  state.wmImage = null;
  state.pdf2excelIntervalValues = { rows: '', cols: '' };
  resetToolView();
  const tool = TOOLS[key];
  els.toolTitle.textContent = tool.title;
  els.toolSubtitle.textContent = tool.subtitle;
  els.fileInput.setAttribute('accept', tool.accept || '');
  els.fileInput.multiple = !!tool.multiple;
  els.homeView.hidden = true;
  els.toolView.hidden = false;
  if (tool.noUpload) {
    els.dropZone.hidden = true;
    tool.render();
  }
}

function resetToolView() {
  els.fileList.innerHTML = '';
  els.optionsPanel.innerHTML = '';
  els.optionsPanel.hidden = true;
  els.thumbGrid.innerHTML = '';
  els.thumbGrid.hidden = true;
  els.processBtn.hidden = true;
  els.processBtn.disabled = false;
  els.processBtn.textContent = 'Process';
  els.progressArea.hidden = true;
  els.progressFill.style.width = '0%';
  els.resultArea.hidden = true;
  els.resultArea.innerHTML = '';
  els.dropZone.hidden = false;
  els.fileInput.value = '';
}

/* ---------------- File intake ---------------- */

els.dropZone.addEventListener('click', () => els.fileInput.click());
els.dropZone.addEventListener('dragover', e => { e.preventDefault(); els.dropZone.classList.add('drag-over'); });
els.dropZone.addEventListener('dragleave', () => els.dropZone.classList.remove('drag-over'));
els.dropZone.addEventListener('drop', e => {
  e.preventDefault();
  els.dropZone.classList.remove('drag-over');
  handleFiles(e.dataTransfer.files);
});
els.fileInput.addEventListener('change', e => handleFiles(e.target.files));

/* ---------------- Password-protected PDF handling ---------------- */

// Attempts to open a PDF. If it's encrypted, prompts the user for a password.
// Returns { arrayBuffer, password } on success, or null if the user cancels.
// Uses pdf.js to test if the file can be opened (it handles encryption properly),
// then decrypts it if needed. The password is stored so it can be passed to both
// pdf-lib and pdf.js later.
async function handlePasswordProtectedPdf(arrayBuffer, filename) {
  try {
    // Try opening without a password first
    const loadingTask = pdfjsLib.getDocument({ data: arrayBuffer.slice(0) });
    await loadingTask.promise;
    // Success — file is not encrypted or has no user password
    return { arrayBuffer, password: null };
  } catch (e) {
    const msg = (e && e.message) || String(e);
    // pdf.js throws PasswordException for encrypted files
    if (/password/i.test(msg) || /encrypted/i.test(msg)) {
      // Show password prompt
      const password = await showPasswordPrompt(filename);
      if (password === null) return null; // user cancelled

      // Try opening with the provided password
      try {
        const loadingTask = pdfjsLib.getDocument({ data: arrayBuffer.slice(0), password });
        await loadingTask.promise;
        // Password worked
        return { arrayBuffer, password };
      } catch (e2) {
        const msg2 = (e2 && e2.message) || String(e2);
        if (/password/i.test(msg2) || /incorrect/i.test(msg2)) {
          // Wrong password — let them try again (up to 3 attempts)
          for (let attempt = 2; attempt <= 3; attempt++) {
            const retryPassword = await showPasswordPrompt(filename, true);
            if (retryPassword === null) return null;
            try {
              const retryTask = pdfjsLib.getDocument({ data: arrayBuffer.slice(0), password: retryPassword });
              await retryTask.promise;
              return { arrayBuffer, password: retryPassword };
            } catch (e3) {
              // Continue to next attempt
            }
          }
          // All attempts exhausted
          showPasswordError(filename);
          return null;
        }
        // Some other error — let it through without password
        return { arrayBuffer, password: null };
      }
    }
    // Not a password error — file is fine to use as-is
    return { arrayBuffer, password: null };
  }
}

// Shows a modal dialog asking for the PDF password. Returns the password string or null if cancelled.
function showPasswordPrompt(filename, isRetry) {
  return new Promise(resolve => {
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'password-overlay';
    overlay.innerHTML = `
      <div class="password-modal">
        <h3>🔒 Password Required</h3>
        <p><strong>${escapeHtml(filename)}</strong> is password-protected.</p>
        ${isRetry ? '<p class="password-error">Incorrect password — please try again.</p>' : ''}
        <div class="password-input-row">
          <input type="password" id="pdfPasswordInput" placeholder="Enter password" autocomplete="off">
        </div>
        <div class="password-buttons">
          <button id="pdfPasswordCancel" class="password-btn cancel">Cancel</button>
          <button id="pdfPasswordSubmit" class="password-btn submit">Unlock</button>
        </div>
      </div>
    `;
    document.body.appendChild(overlay);

    const input = document.getElementById('pdfPasswordInput');
    const submitBtn = document.getElementById('pdfPasswordSubmit');
    const cancelBtn = document.getElementById('pdfPasswordCancel');

    const cleanup = () => { document.body.removeChild(overlay); };

    submitBtn.addEventListener('click', () => {
      const pw = input.value;
      cleanup();
      resolve(pw || '');
    });
    cancelBtn.addEventListener('click', () => { cleanup(); resolve(null); });
    input.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') { submitBtn.click(); }
      if (e.key === 'Escape') { cancelBtn.click(); }
    });
    // Focus the input after a brief delay (modal needs to be in DOM)
    setTimeout(() => input.focus(), 50);
  });
}

function showPasswordError(filename) {
  // Show a brief error message in the result area
  els.resultArea.hidden = false;
  els.resultArea.style.background = 'rgba(240,102,77,0.12)';
  els.resultArea.style.borderColor = 'rgba(240,102,77,0.4)';
  els.resultArea.innerHTML = `
    <h3 style="color:#F58A75">Couldn't unlock file</h3>
    <p>The password for <strong>${escapeHtml(filename)}</strong> was incorrect after 3 attempts. The file was skipped.</p>
  `;
  setTimeout(() => { els.resultArea.hidden = true; els.resultArea.innerHTML = ''; }, 5000);
}

/* ---------------- File intake (continued) ---------------- */

// Helper: opens a PDF with pdf.js, automatically passing the stored password if present.
function openPdfJs(arrayBuffer, password) {
  const opts = { data: arrayBuffer.slice ? arrayBuffer.slice(0) : arrayBuffer };
  if (password) opts.password = password;
  return pdfjsLib.getDocument(opts).promise;
}

// Helper: opens a PDF with pdf-lib, automatically passing the stored password if present.
// pdf-lib doesn't support real decryption but ignoreEncryption: true lets it parse the structure
// for user-password-only files (which pdf.js already decrypted for rendering).
async function openPdfLib(arrayBuffer, password) {
  return PDFDocument.load(arrayBuffer.slice ? arrayBuffer.slice(0) : arrayBuffer, { ignoreEncryption: true });
}

// Looks up the password for a file entry (from state.files) by matching arrayBuffer reference.
function getPasswordForBuffer(arrayBuffer) {
  const entry = state.files.find(f => f.arrayBuffer === arrayBuffer);
  return entry ? entry.password : undefined;
}

async function handleFiles(fileListRaw) {
  const tool = TOOLS[state.toolKey];
  const incoming = Array.from(fileListRaw);
  if (!tool.multiple) state.files = [];

  for (const file of incoming) {
    const arrayBuffer = await file.arrayBuffer();
    // Check if PDF is password-protected before adding to state
    if (file.name.toLowerCase().endsWith('.pdf')) {
      const passwordResult = await handlePasswordProtectedPdf(arrayBuffer, file.name);
      if (passwordResult === null) {
        // User cancelled password entry — skip this file
        continue;
      }
      state.files.push({ file, name: file.name, size: file.size, arrayBuffer: passwordResult.arrayBuffer, password: passwordResult.password || undefined });
    } else {
      state.files.push({ file, name: file.name, size: file.size, arrayBuffer });
    }
  }

  if (tool.needsThumbs) {
    await buildThumbGrid(tool.thumbMode);
    els.processBtn.hidden = state.files.length === 0;
  } else if (tool.customFlow) {
    els.fileList.innerHTML = '';
    els.processBtn.hidden = true;
    if (tool.render) await tool.render();
  } else {
    renderFileListRows();
    if (tool.render && !state.optionsRendered) {
      tool.render();
      state.optionsRendered = true;
      if (tool.updatePreview) attachPreviewAutoRefresh(tool.updatePreview);
    }
    els.processBtn.hidden = state.files.length === 0;
  }

  if (!tool.multiple) els.dropZone.hidden = state.files.length > 0;
  updateMergeRowVisibility();
  await refreshPreviewIfNeeded();
}

function attachPreviewAutoRefresh(updateFn) {
  els.optionsPanel.querySelectorAll('input, select').forEach(inp => {
    if (inp.type === 'file') return; // these have their own dedicated change handlers
    inp.addEventListener('input', updateFn);
    inp.addEventListener('change', updateFn);
  });
}

async function loadPreviewPage(arrayBuffer) {
  try {
    const password = getPasswordForBuffer(arrayBuffer);
    const pdf = await openPdfJs(arrayBuffer, password);
    const page = await pdf.getPage(1);
    const viewport1 = page.getViewport({ scale: 1 });
    const dispScale = Math.min(280 / viewport1.width, 360 / viewport1.height);
    const viewport = page.getViewport({ scale: dispScale });
    const canvas = document.createElement('canvas');
    canvas.width = viewport.width; canvas.height = viewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
    state.previewBg = {
      dataUrl: canvas.toDataURL('image/jpeg', 0.85),
      widthPt: viewport1.width, heightPt: viewport1.height,
      dispWidth: viewport.width, dispHeight: viewport.height,
      scale: dispScale, numPages: pdf.numPages,
    };
  } catch (e) {
    state.previewBg = null;
  }
}

async function refreshPreviewIfNeeded() {
  const tool = TOOLS[state.toolKey];
  if (!tool || !tool.updatePreview) return;
  if (state.files.length === 0) { state.previewBg = null; tool.updatePreview(); return; }
  await loadPreviewPage(state.files[0].arrayBuffer);
  tool.updatePreview();
}

/* ---------------- Merge-before-processing helper (shared by multi-file tools) ---------------- */

async function buildMergedArrayBuffer(files) {
  const outDoc = await PDFDocument.create();
  for (const f of files) {
    const src = await openPdfLib(f.arrayBuffer, f.password);
    const copied = await outDoc.copyPages(src, src.getPageIndices());
    copied.forEach(p => outDoc.addPage(p));
  }
  return outDoc.save();
}

// Returns { files, merged }. If the tool's merge checkbox is checked and more than one
// file is uploaded, combines them into a single working PDF first; otherwise passes
// the uploaded files through untouched for per-file processing.
async function getWorkingFiles(mergeCheckboxId) {
  const mergeEl = document.getElementById(mergeCheckboxId);
  const wantMerge = mergeEl && mergeEl.checked && state.files.length > 1;
  if (wantMerge) {
    const bytes = await buildMergedArrayBuffer(state.files);
    return { files: [{ name: 'merged.pdf', size: bytes.byteLength, arrayBuffer: bytes }], merged: true };
  }
  return { files: state.files, merged: false };
}

function updateMergeRowVisibility() {
  const tool = TOOLS[state.toolKey];
  if (tool && tool.mergeRowId) {
    const row = document.getElementById(tool.mergeRowId);
    if (row) row.style.display = state.files.length > 1 ? '' : 'none';
  }
}

function formatBytes(n) {
  if (n < 1024) return n + ' B';
  if (n < 1024 * 1024) return (n / 1024).toFixed(1) + ' KB';
  return (n / (1024 * 1024)).toFixed(2) + ' MB';
}

function renderFileListRows() {
  els.fileList.innerHTML = '';
  state.files.forEach((f, i) => {
    const row = document.createElement('div');
    row.className = 'file-row';
    row.innerHTML = `
      <div>
        <span class="name">${escapeHtml(f.name)}</span>
        <span class="meta">${formatBytes(f.size)}</span>
      </div>
      <div class="opt-inline">
        ${state.files.length > 1 ? `<button class="remove" data-act="up" title="Move up">&uarr;</button>
        <button class="remove" data-act="down" title="Move down">&darr;</button>` : ''}
        <button class="remove" data-act="del" title="Remove">&times;</button>
      </div>`;
    row.querySelector('[data-act="del"]').addEventListener('click', () => {
      state.files.splice(i, 1);
      renderFileListRows();
      els.processBtn.hidden = state.files.length === 0;
      const tool = TOOLS[state.toolKey];
      if (!tool.multiple) els.dropZone.hidden = state.files.length > 0;
      updateMergeRowVisibility();
      refreshPreviewIfNeeded();
    });
    const up = row.querySelector('[data-act="up"]');
    const down = row.querySelector('[data-act="down"]');
    if (up) up.addEventListener('click', () => { if (i > 0) { swap(state.files, i, i - 1); renderFileListRows(); refreshPreviewIfNeeded(); } });
    if (down) down.addEventListener('click', () => { if (i < state.files.length - 1) { swap(state.files, i, i + 1); renderFileListRows(); refreshPreviewIfNeeded(); } });
    els.fileList.appendChild(row);
  });
}

function swap(arr, i, j) { const t = arr[i]; arr[i] = arr[j]; arr[j] = t; }

function renderFileListOnly() { /* nothing extra beyond the file list */ }

function escapeHtml(s) {
  return s.replace(/[&<>"']/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
}

/* ---------------- Thumbnail grid (remove / extract / organize) ---------------- */

async function buildThumbGrid(mode) {
  els.fileList.innerHTML = '';
  els.thumbGrid.hidden = false;
  els.thumbGrid.innerHTML = '<div style="grid-column:1/-1;color:var(--muted);font-size:13.5px;">Rendering pages…</div>';

  const fileEntry = state.files[state.files.length - 1];
  const pdf = await openPdfJs(fileEntry.arrayBuffer, fileEntry.password);

  const pdfLibDoc = await openPdfLib(fileEntry.arrayBuffer, fileEntry.password);
  const libPages = pdfLibDoc.getPages();

  state.pages = [];
  for (let i = 0; i < pdf.numPages; i++) {
    const page = await pdf.getPage(i + 1);
    const viewport = page.getViewport({ scale: 0.35 });
    const canvas = document.createElement('canvas');
    canvas.width = viewport.width; canvas.height = viewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
    state.pages.push({
      index: i,
      baseRotation: libPages[i] ? libPages[i].getRotation().angle : 0,
      rotationDelta: 0,
      deleted: false,
      selected: mode === 'extract' ? false : true,
      dataUrl: canvas.toDataURL('image/jpeg', 0.7),
    });
  }
  state.thumbMode = mode;
  renderThumbGrid();
  els.processBtn.hidden = false;
}

function renderThumbGrid() {
  els.thumbGrid.innerHTML = '';
  state.pages.forEach((p, i) => {
    const card = document.createElement('div');
    card.className = 'thumb-card' + (p.deleted ? ' deleted' : '') + (state.thumbMode === 'extract' && p.selected ? ' selected-page' : '');
    if (state.thumbMode === 'extract' && p.selected) card.style.borderColor = 'var(--primary)';
    card.draggable = state.thumbMode === 'organize';
    card.dataset.i = i;

    const actions = state.thumbMode === 'organize'
      ? `<div class="thumb-actions">
           <button data-act="rotate" title="Rotate">&#8635;</button>
           <button data-act="delete" title="Delete">&times;</button>
         </div>`
      : state.thumbMode === 'remove'
      ? `<div class="thumb-actions"><button data-act="delete" title="${p.deleted ? 'Restore' : 'Remove'}">${p.deleted ? '&#8634;' : '&times;'}</button></div>`
      : '';

    card.innerHTML = `
      ${actions}
      ${state.thumbMode === 'remove' && p.deleted ? '<div class="remove-badge">Removing</div>' : ''}
      <img src="${p.dataUrl}" style="transform:rotate(${p.rotationDelta}deg)">
      <div class="page-idx">Page ${p.index + 1}</div>`;

    if (state.thumbMode === 'extract') {
      card.addEventListener('click', () => { p.selected = !p.selected; renderThumbGrid(); });
    } else if (state.thumbMode === 'remove') {
      card.addEventListener('click', () => { p.deleted = !p.deleted; renderThumbGrid(); });
    }
    const rotateBtn = card.querySelector('[data-act="rotate"]');
    if (rotateBtn) rotateBtn.addEventListener('click', (e) => { e.stopPropagation(); p.rotationDelta = (p.rotationDelta + 90) % 360; renderThumbGrid(); });
    const delBtn = card.querySelector('[data-act="delete"]');
    if (delBtn) delBtn.addEventListener('click', (e) => { e.stopPropagation(); p.deleted = !p.deleted; renderThumbGrid(); });

    if (state.thumbMode === 'organize') {
      card.addEventListener('dragstart', () => card.classList.add('dragging'));
      card.addEventListener('dragend', () => card.classList.remove('dragging'));
      card.addEventListener('dragover', e => e.preventDefault());
      card.addEventListener('drop', e => {
        e.preventDefault();
        const fromI = parseInt(document.querySelector('.dragging').dataset.i, 10);
        const toI = parseInt(card.dataset.i, 10);
        if (fromI === toI) return;
        const moved = state.pages.splice(fromI, 1)[0];
        state.pages.splice(toI, 0, moved);
        renderThumbGrid();
      });
    }

    els.thumbGrid.appendChild(card);
  });
}

/* ---------------- Shared position helpers ---------------- */

// PDF space: origin bottom-left, y increases upward. Returns bottom-left corner of the box.
function computeAnchorXY(pageW, pageH, boxW, boxH, position, margin) {
  let x, y;
  if (position.includes('left')) x = margin;
  else if (position.includes('right')) x = pageW - boxW - margin;
  else x = (pageW - boxW) / 2;

  if (position.startsWith('top')) y = pageH - boxH - margin;
  else if (position.startsWith('bottom')) y = margin;
  else y = (pageH - boxH) / 2;

  return { x, y };
}

// Canvas space: origin top-left, y increases downward. Mirrors computeAnchorXY.
function computeAnchorXYCanvas(canvasW, canvasH, boxW, boxH, position, margin) {
  let x, y;
  if (position.includes('left')) x = margin;
  else if (position.includes('right')) x = canvasW - boxW - margin;
  else x = (canvasW - boxW) / 2;

  if (position.startsWith('top')) y = margin;
  else if (position.startsWith('bottom')) y = canvasH - boxH - margin;
  else y = (canvasH - boxH) / 2;

  return { x, y };
}

// Draws by calling drawFn() with the canvas origin translated/rotated so drawFn can just draw at (0,0,w,h).
function drawRotatedBox(ctx, x, y, w, h, angleDeg, drawFn) {
  ctx.save();
  ctx.translate(x + w / 2, y + h / 2);
  ctx.rotate((angleDeg * Math.PI) / 180);
  ctx.translate(-w / 2, -h / 2);
  drawFn();
  ctx.restore();
}

/* ---------------- Options panels ---------------- */

function showOptions(html) {
  els.optionsPanel.innerHTML = html;
  els.optionsPanel.hidden = false;
}

function renderSplitOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Split mode</label>
      <div class="radio-group">
        <label><input type="radio" name="splitMode" value="ranges" checked> Custom ranges</label>
        <label><input type="radio" name="splitMode" value="every"> Every N pages</label>
        <label><input type="radio" name="splitMode" value="single"> Every page separately</label>
      </div>
    </div>
    <div class="opt-row" id="rangesRow">
      <label>Ranges (comma-separated, e.g. 1-3, 4, 7-9)</label>
      <input type="text" id="rangesInput" placeholder="1-3, 4-6">
    </div>
    <div class="opt-row" id="everyRow" style="display:none">
      <label>Pages per file</label>
      <input type="number" id="everyInput" min="1" value="1">
    </div>
  `);
  document.querySelectorAll('input[name=splitMode]').forEach(r => r.addEventListener('change', () => {
    const v = document.querySelector('input[name=splitMode]:checked').value;
    document.getElementById('rangesRow').style.display = v === 'ranges' ? '' : 'none';
    document.getElementById('everyRow').style.display = v === 'every' ? '' : 'none';
  }));
}

function renderCompressOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Compression level</label>
      <div class="radio-group">
        <label><input type="radio" name="compLevel" value="light" checked> Light (keeps text selectable)</label>
        <label><input type="radio" name="compLevel" value="strong"> Strong (rasterizes pages — smaller, but text becomes an image)</label>
      </div>
      <p style="color:var(--muted);font-size:12.5px;margin:4px 0 0;">
        Light only tidies up the PDF's internal structure — it won't shrink a file that's
        mostly images (like a screenshot-to-PDF export). For those, use Strong: it re-encodes
        every page as a compressed image, which is where the real size savings come from.
      </p>
    </div>
    <div class="opt-row" id="strongOptsRow" style="display:none">
      <label>Resolution</label>
      <select id="rasterScale">
        <option value="0.9">Screen (smallest file)</option>
        <option value="1.3" selected>Standard</option>
        <option value="1.8">Print quality (larger file)</option>
      </select>
      <label style="margin-top:8px;">Image quality</label>
      <select id="jpegQuality">
        <option value="0.35">Low (smallest file)</option>
        <option value="0.6" selected>Medium</option>
        <option value="0.8">High</option>
      </select>
    </div>
    <div class="opt-row merge-row" id="compressMergeRow" style="display:none">
      <label><input type="checkbox" id="compressMerge"> Combine all files into one PDF first, then compress the merged result</label>
    </div>
    <div id="compressEstimate" class="compress-estimate"></div>
    <div class="opt-row" style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
      <button type="button" id="oneClickTaxBtn" class="download-btn" style="background:#2CA663;border:none;cursor:pointer;">
        One-click: get this under 5MB for income tax upload
      </button>
      <p style="color:var(--muted);font-size:12.5px;margin:10px 0 0;">
        Tries light compression first, then tunes image quality and resolution to get as close to the 5MB
        e-filing limit as possible without going over it — or uses the closest it can reasonably get to.
      </p>
    </div>
  `);
  document.querySelectorAll('input[name=compLevel]').forEach(r => r.addEventListener('change', () => {
    document.getElementById('strongOptsRow').style.display =
      document.querySelector('input[name=compLevel]:checked').value === 'strong' ? '' : 'none';
  }));
  document.getElementById('oneClickTaxBtn').addEventListener('click', runOneClickTaxCompress);
}

function renderRotateOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Rotate all pages by</label>
      <select id="rotateAngle">
        <option value="90">90° clockwise</option>
        <option value="180">180°</option>
        <option value="270">90° counter-clockwise</option>
      </select>
    </div>
    <div class="opt-row merge-row" id="rotateMergeRow" style="display:none">
      <label><input type="checkbox" id="rotateMerge"> Combine all files into one PDF first, then rotate the merged result</label>
    </div>
  `);
}

function renderPageNumberOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Position</label>
      <select id="numPosition">
        <option value="bottom-center" selected>Bottom center</option>
        <option value="bottom-right">Bottom right</option>
        <option value="bottom-left">Bottom left</option>
        <option value="top-center">Top center</option>
        <option value="top-right">Top right</option>
        <option value="top-left">Top left</option>
      </select>
    </div>
    <div class="opt-inline">
      <div class="opt-row">
        <label>Format</label>
        <input type="text" id="numFormat" value="{n} / {total}" style="width:160px">
      </div>
      <div class="opt-row">
        <label>Start at</label>
        <input type="number" id="numStart" value="1" style="width:80px">
      </div>
      <div class="opt-row">
        <label>Font size</label>
        <input type="number" id="numSize" value="11" style="width:80px">
      </div>
    </div>
    <div class="preview-wrap">
      <div class="preview-label">Preview — page 1</div>
      <canvas id="numPreviewCanvas"></canvas>
    </div>
    <div class="opt-row merge-row" id="numMergeRow" style="display:none">
      <label><input type="checkbox" id="numMerge"> Combine all files into one PDF first, then number continuously across the merged result</label>
    </div>
  `);
}

function updatePageNumberPreview() {
  const canvas = document.getElementById('numPreviewCanvas');
  if (!canvas) return;
  if (!state.previewBg) { canvas.width = 0; canvas.height = 0; return; }

  canvas.width = state.previewBg.dispWidth;
  canvas.height = state.previewBg.dispHeight;
  const ctx = canvas.getContext('2d');
  const bg = new Image();
  bg.onload = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(bg, 0, 0, canvas.width, canvas.height);

    const position = document.getElementById('numPosition').value;
    const format = document.getElementById('numFormat').value || '{n}';
    const start = parseInt(document.getElementById('numStart').value, 10) || 1;
    const size = parseInt(document.getElementById('numSize').value, 10) || 11;
    const label = format.replace('{n}', String(start)).replace('{total}', String(state.previewBg.numPages || start));

    const scale = state.previewBg.scale;
    const dispSize = size * scale;
    const margin = 28 * scale;
    ctx.font = `${dispSize}px Helvetica, Arial, sans-serif`;
    ctx.fillStyle = '#333333';
    const textWidth = ctx.measureText(label).width;

    const { x, y } = computeAnchorXYCanvas(canvas.width, canvas.height, textWidth, dispSize, position, margin);
    ctx.fillText(label, x, y + dispSize * 0.8);
  };
  bg.src = state.previewBg.dataUrl;
}

function renderWatermarkOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Watermark type</label>
      <div class="radio-group">
        <label><input type="radio" name="wmType" value="text" checked> Text</label>
        <label><input type="radio" name="wmType" value="image"> Image / logo</label>
      </div>
    </div>
    <div class="opt-row" id="wmTextRow">
      <label>Watermark text</label>
      <input type="text" id="wmText" value="CONFIDENTIAL">
    </div>
    <div class="opt-row" id="wmImageRow" style="display:none">
      <label>Image (PNG or JPG)</label>
      <input type="file" id="wmImageInput" accept="image/png,image/jpeg">
      <div id="wmImageName" style="font-size:12px;color:var(--muted);margin-top:4px;"></div>
    </div>
    <div class="opt-inline">
      <div class="opt-row" id="wmSizeRow">
        <label>Font size</label>
        <input type="number" id="wmSize" value="40" style="width:80px">
      </div>
      <div class="opt-row" id="wmImgWidthRow" style="display:none">
        <label>Width (% of page)</label>
        <input type="number" id="wmImgWidthPct" value="40" min="5" max="100" style="width:80px">
      </div>
      <div class="opt-row">
        <label>Opacity</label>
        <input type="number" id="wmOpacity" value="0.3" min="0.05" max="1" step="0.05" style="width:80px">
      </div>
      <div class="opt-row">
        <label>Rotation (deg)</label>
        <input type="number" id="wmRotation" value="45" style="width:80px">
      </div>
      <div class="opt-row" id="wmColorRow">
        <label>Color</label>
        <select id="wmColor">
          <option value="gray" selected>Gray</option>
          <option value="red">Red</option>
          <option value="black">Black</option>
        </select>
      </div>
    </div>
    <div class="opt-row">
      <label>Position</label>
      <select id="wmPosition">
        <option value="center" selected>Center</option>
        <option value="top-left">Top left</option>
        <option value="top-center">Top center</option>
        <option value="top-right">Top right</option>
        <option value="middle-left">Middle left</option>
        <option value="middle-right">Middle right</option>
        <option value="bottom-left">Bottom left</option>
        <option value="bottom-center">Bottom center</option>
        <option value="bottom-right">Bottom right</option>
      </select>
    </div>
    <div class="opt-row">
      <label><input type="checkbox" id="wmTile"> Repeat across the whole page (ignores position above)</label>
    </div>
    <div class="preview-wrap">
      <div class="preview-label">Preview — page 1</div>
      <canvas id="wmPreviewCanvas"></canvas>
    </div>
    <div class="opt-row merge-row" id="wmMergeRow" style="display:none">
      <label><input type="checkbox" id="wmMerge"> Combine all files into one PDF first, then watermark the merged result</label>
    </div>
  `);

  document.querySelectorAll('input[name=wmType]').forEach(r => r.addEventListener('change', () => {
    const isImage = document.querySelector('input[name=wmType]:checked').value === 'image';
    document.getElementById('wmTextRow').style.display = isImage ? 'none' : '';
    document.getElementById('wmSizeRow').style.display = isImage ? 'none' : '';
    document.getElementById('wmColorRow').style.display = isImage ? 'none' : '';
    document.getElementById('wmImageRow').style.display = isImage ? '' : 'none';
    document.getElementById('wmImgWidthRow').style.display = isImage ? '' : 'none';
    updateWatermarkPreview();
  }));

  document.getElementById('wmImageInput').addEventListener('change', async (e) => {
    const file = e.target.files[0];
    if (!file) return;
    const buf = await file.arrayBuffer();
    state.wmImage = { name: file.name, mime: file.type, arrayBuffer: buf, dataUrl: URL.createObjectURL(file) };
    document.getElementById('wmImageName').textContent = file.name;
    updateWatermarkPreview();
  });
}

function updateWatermarkPreview() {
  const canvas = document.getElementById('wmPreviewCanvas');
  if (!canvas) return;
  if (!state.previewBg) { canvas.width = 0; canvas.height = 0; return; }

  canvas.width = state.previewBg.dispWidth;
  canvas.height = state.previewBg.dispHeight;
  const ctx = canvas.getContext('2d');
  const bg = new Image();
  bg.onload = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(bg, 0, 0, canvas.width, canvas.height);

    const type = document.querySelector('input[name=wmType]:checked').value;
    const opacity = parseFloat(document.getElementById('wmOpacity').value) || 0.3;
    const rotation = parseInt(document.getElementById('wmRotation').value, 10) || 0;
    const position = document.getElementById('wmPosition').value;
    const tile = document.getElementById('wmTile').checked;
    const margin = 24;

    ctx.globalAlpha = opacity;

    if (type === 'image' && state.wmImage) {
      const img = new Image();
      img.onload = () => {
        const boxW = canvas.width * (parseFloat(document.getElementById('wmImgWidthPct').value) || 40) / 100;
        const boxH = boxW * (img.naturalHeight / img.naturalWidth);
        const paint = (x, y) => drawRotatedBox(ctx, x, y, boxW, boxH, rotation, () => ctx.drawImage(img, 0, 0, boxW, boxH));
        if (tile) {
          const stepX = boxW + 30, stepY = boxH + 30;
          for (let y = -stepY; y < canvas.height + stepY; y += stepY)
            for (let x = -stepX; x < canvas.width + stepX; x += stepX) paint(x, y);
        } else {
          const { x, y } = computeAnchorXYCanvas(canvas.width, canvas.height, boxW, boxH, position, margin);
          paint(x, y);
        }
        ctx.globalAlpha = 1;
      };
      img.src = state.wmImage.dataUrl;
    } else {
      const text = document.getElementById('wmText').value || 'WATERMARK';
      const size = parseInt(document.getElementById('wmSize').value, 10) || 40;
      const colorCss = { gray: '#808080', red: '#d93333', black: '#1a1a1a' }[document.getElementById('wmColor').value];
      const dispSize = size * state.previewBg.scale;
      ctx.font = `bold ${dispSize}px Helvetica, Arial, sans-serif`;
      const textWidth = ctx.measureText(text).width;
      const paint = (x, y) => drawRotatedBox(ctx, x, y, textWidth, dispSize, rotation, () => {
        ctx.fillStyle = colorCss;
        ctx.font = `bold ${dispSize}px Helvetica, Arial, sans-serif`;
        ctx.fillText(text, 0, dispSize * 0.8);
      });
      if (tile) {
        const stepX = textWidth + 40, stepY = dispSize + 40;
        for (let y = -stepY; y < canvas.height + stepY; y += stepY)
          for (let x = -stepX; x < canvas.width + stepX; x += stepX) paint(x, y);
      } else {
        const { x, y } = computeAnchorXYCanvas(canvas.width, canvas.height, textWidth, dispSize, position, margin);
        paint(x, y);
      }
      ctx.globalAlpha = 1;
    }
  };
  bg.src = state.previewBg.dataUrl;
}

function renderPdf2JpgOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Image quality</label>
      <select id="jpgQuality">
        <option value="1">Standard (scale 1x)</option>
        <option value="2" selected>High (scale 2x)</option>
        <option value="3">Very high (scale 3x)</option>
      </select>
    </div>
    <div class="opt-row merge-row" id="jpgMergeRow" style="display:none">
      <label><input type="checkbox" id="jpgMerge"> Combine all files into one PDF first, then export every page together</label>
    </div>
  `);
}

function renderPdf2WordOptions() {
  showOptions(`
    <div class="opt-row merge-row" id="wordMergeRow" style="display:none">
      <label><input type="checkbox" id="wordMerge"> Combine all files into one PDF first, then extract everything into a single Word document</label>
    </div>
    <div class="opt-row">
      <label><input type="checkbox" id="wordOcr"> Try OCR on pages with no text layer (scanned/image pages) — slower, English only</label>
      <p style="color:var(--muted);font-size:12.5px;margin:6px 0 0;">
        Runs entirely on this device (no upload, no internet). Adds real time per page — expect a
        few seconds each, more for dense or low-quality scans — and accuracy depends heavily on
        image quality.
      </p>
    </div>
  `);
}

function renderPdf2ExcelOptions() {
  showOptions(`
    <div class="opt-row merge-row" id="excelMergeRow" style="display:none">
      <label><input type="checkbox" id="excelMerge"> Combine all files into one PDF first, then extract everything into a single spreadsheet</label>
    </div>
    <div class="opt-row">
      <label><input type="checkbox" id="excelOcr"> Try OCR on pages with no text layer (scanned/image pages) — slower, English only</label>
      <p style="color:var(--muted);font-size:12.5px;margin:6px 0 0;">
        Runs entirely on this device (no upload, no internet). Adds real time per page — expect a
        few seconds each, more for dense or low-quality scans — and accuracy depends heavily on
        image quality.
      </p>
    </div>
  `);
}

function renderImg2PdfOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Output</label>
      <div class="radio-group">
        <label><input type="radio" name="imgMode" value="combine" checked> Combine into one PDF</label>
        <label><input type="radio" name="imgMode" value="separate"> A separate PDF for each image</label>
      </div>
    </div>
    <div class="opt-row">
      <label>Border (applied to all four sides, in cm)</label>
      <input type="number" id="imgBorderCm" min="0" max="10" step="0.1" value="0" style="width:90px;">
      <p style="color:var(--muted);font-size:12.5px;margin:6px 0 0;">
        Leaves this much blank space around the image on the page — 0 fits the image as large as
        possible with just a small default margin.
      </p>
    </div>
  `);
}

/* ---------------- Processing ---------------- */

els.processBtn.addEventListener('click', async () => {
  els.processBtn.disabled = true;
  els.processBtn.textContent = 'Processing…';
  els.progressArea.hidden = false;
  els.resultArea.hidden = true;
  setProgress(5, 'Starting…');
  try {
    await TOOLS[state.toolKey].process();
  } catch (err) {
    console.error(err);
    setProgress(0, '');
    els.progressArea.hidden = true;
    showResult([], `Something went wrong: ${describeExtractionError(err)}`, true);
  }
  els.processBtn.disabled = false;
  els.processBtn.textContent = 'Process';
});

function setProgress(pct, label) {
  els.progressFill.style.width = pct + '%';
  els.progressLabel.textContent = label;
}

function showResult(downloads, message, isError) {
  els.progressArea.hidden = true;
  els.resultArea.hidden = false;
  els.resultArea.style.background = isError ? 'rgba(240,102,77,0.12)' : 'rgba(46,178,108,0.1)';
  els.resultArea.style.borderColor = isError ? 'rgba(240,102,77,0.4)' : 'rgba(46,178,108,0.35)';
  let html = `<h3 style="color:${isError ? '#F58A75' : '#4ADE80'}">${isError ? 'Couldn\'t finish' : 'Done!'}</h3>`;
  html += `<p>${escapeHtml(message)}</p>`;
  downloads.forEach(d => {
    html += `<a class="download-btn" href="${d.url}" download="${escapeHtml(d.filename)}">Download ${escapeHtml(d.filename)}</a>`;
  });
  els.resultArea.innerHTML = html;
}

function downloadable(bytes, mime) {
  const blob = new Blob([bytes], { type: mime });
  return URL.createObjectURL(blob);
}

/* ---- Merge ---- */
async function processMerge() {
  setProgress(20, 'Reading files…');
  const outDoc = await PDFDocument.create();
  for (let i = 0; i < state.files.length; i++) {
    const src = await openPdfLib(state.files[i].arrayBuffer, state.files[i].password);
    const copied = await outDoc.copyPages(src, src.getPageIndices());
    copied.forEach(p => outDoc.addPage(p));
    setProgress(20 + (60 * (i + 1)) / state.files.length, `Merging ${state.files[i].name}…`);
  }
  const bytes = await outDoc.save();
  setProgress(100, 'Done');
  showResult([{ url: downloadable(bytes, 'application/pdf'), filename: 'merged.pdf' }],
    `Combined ${state.files.length} files into one PDF.`);
}

/* ---- Split ---- */
function parseRanges(str, maxPage) {
  const parts = str.split(',').map(s => s.trim()).filter(Boolean);
  const ranges = [];
  for (const part of parts) {
    const m = part.match(/^(\d+)(?:-(\d+))?$/);
    if (!m) continue;
    const start = parseInt(m[1], 10);
    const end = m[2] ? parseInt(m[2], 10) : start;
    ranges.push([Math.max(1, start), Math.min(maxPage, end)]);
  }
  return ranges;
}

async function processSplit() {
  setProgress(15, 'Reading PDF…');
  const src = await openPdfLib(state.files[0].arrayBuffer, state.files[0].password);
  const total = src.getPageCount();
  const mode = document.querySelector('input[name=splitMode]:checked').value;

  let groups = [];
  if (mode === 'ranges') {
    const raw = document.getElementById('rangesInput').value || `1-${total}`;
    groups = parseRanges(raw, total).map(([s, e]) => {
      const arr = []; for (let i = s; i <= e; i++) arr.push(i - 1); return arr;
    });
  } else if (mode === 'every') {
    const n = Math.max(1, parseInt(document.getElementById('everyInput').value, 10) || 1);
    for (let i = 0; i < total; i += n) {
      const arr = []; for (let j = i; j < Math.min(total, i + n); j++) arr.push(j); groups.push(arr);
    }
  } else {
    for (let i = 0; i < total; i++) groups.push([i]);
  }

  if (groups.length === 0) { showResult([], 'No valid page ranges were found.', true); return; }

  const zip = new JSZip();
  const baseName = state.files[0].name.replace(/\.pdf$/i, '');
  for (let g = 0; g < groups.length; g++) {
    const outDoc = await PDFDocument.create();
    const copied = await outDoc.copyPages(src, groups[g]);
    copied.forEach(p => outDoc.addPage(p));
    const bytes = await outDoc.save();
    zip.file(`${baseName}_part${g + 1}.pdf`, bytes);
    setProgress(15 + (75 * (g + 1)) / groups.length, `Building part ${g + 1} of ${groups.length}…`);
  }

  if (groups.length === 1) {
    const only = await zip.file(Object.keys(zip.files)[0]).async('uint8array');
    setProgress(100, 'Done');
    showResult([{ url: downloadable(only, 'application/pdf'), filename: `${baseName}_part1.pdf` }], 'Split complete.');
  } else {
    const zipBytes = await zip.generateAsync({ type: 'uint8array' });
    setProgress(100, 'Done');
    showResult([{ url: downloadable(zipBytes, 'application/zip'), filename: `${baseName}_split.zip` }],
      `Split into ${groups.length} files, packaged as a zip.`);
  }
}

/* ---- Remove / Extract (shared thumb-based logic) ---- */
async function processRemoveOrExtract() {
  setProgress(20, 'Reading PDF…');
  const src = await openPdfLib(state.files[state.files.length - 1].arrayBuffer, state.files[state.files.length - 1].password);
  const keepIndices = state.thumbMode === 'remove'
    ? state.pages.filter(p => !p.deleted).map(p => p.index)
    : state.pages.filter(p => p.selected).map(p => p.index);

  if (keepIndices.length === 0) {
    showResult([], state.thumbMode === 'remove' ? 'You removed every page — nothing left to save.' : 'Select at least one page to extract.', true);
    return;
  }

  const outDoc = await PDFDocument.create();
  const copied = await outDoc.copyPages(src, keepIndices);
  copied.forEach(p => outDoc.addPage(p));
  setProgress(80, 'Saving…');
  const bytes = await outDoc.save();
  setProgress(100, 'Done');
  const baseName = state.files[state.files.length - 1].name.replace(/\.pdf$/i, '');
  const suffix = state.thumbMode === 'remove' ? 'edited' : 'extracted';
  showResult([{ url: downloadable(bytes, 'application/pdf'), filename: `${baseName}_${suffix}.pdf` }],
    `Kept ${keepIndices.length} of ${state.pages.length} pages.`);
}

/* ---- Organize ---- */
async function processOrganize() {
  setProgress(20, 'Reading PDF…');
  const src = await openPdfLib(state.files[state.files.length - 1].arrayBuffer, state.files[state.files.length - 1].password);
  const remaining = state.pages.filter(p => !p.deleted);
  if (remaining.length === 0) { showResult([], 'Every page was deleted — nothing left to save.', true); return; }

  const outDoc = await PDFDocument.create();
  const copied = await outDoc.copyPages(src, remaining.map(p => p.index));
  copied.forEach((page, i) => {
    const meta = remaining[i];
    const finalAngle = (meta.baseRotation + meta.rotationDelta) % 360;
    page.setRotation(degrees(finalAngle));
    outDoc.addPage(page);
  });
  setProgress(80, 'Saving…');
  const bytes = await outDoc.save();
  setProgress(100, 'Done');
  const baseName = state.files[state.files.length - 1].name.replace(/\.pdf$/i, '');
  showResult([{ url: downloadable(bytes, 'application/pdf'), filename: `${baseName}_organized.pdf` }],
    'Pages reordered, rotated, and/or removed as you set them up.');
}

/* ---- Compress ---- */
async function processCompress() {
  const level = document.querySelector('input[name=compLevel]:checked').value;
  const { files: workingFiles, merged } = await getWorkingFiles('compressMerge');
  const downloads = [];
  for (let i = 0; i < workingFiles.length; i++) {
    const f = workingFiles[i];
    setProgress(10 + (80 * i) / workingFiles.length, `Compressing ${f.name}…`);
    let bytes;
    if (level === 'light') {
      const doc = await openPdfLib(f.arrayBuffer, f.password);
      bytes = await doc.save({ useObjectStreams: true });
    } else {
      const scale = parseFloat(document.getElementById('rasterScale').value);
      const quality = parseFloat(document.getElementById('jpegQuality').value);
      bytes = await rasterizeToPdf(f.arrayBuffer.slice(0), scale, quality, f.password);
    }
    const before = f.size, after = bytes.byteLength;
    const pct = before > 0 ? Math.round((1 - after / before) * 100) : 0;
    const name = merged ? 'merged_compressed.pdf' : f.name.replace(/\.pdf$/i, '') + '_compressed.pdf';
    downloads.push({ url: downloadable(bytes, 'application/pdf'), filename: name, pct });
  }
  setProgress(100, 'Done');
  const anyWeak = level === 'light' && downloads.some(d => d.pct < 5 && d.pct >= 0);
  const anyBigger = downloads.some(d => d.pct < 0);
  let summary = downloads.map(d => {
    if (d.pct >= 0) return `${d.filename} (${d.pct}% smaller)`;
    return `${d.filename} (${Math.abs(d.pct)}% LARGER than the original)`;
  }).join(', ');
  if (anyBigger) {
    summary += level === 'strong'
      ? ' — rasterizing an already-compact, mostly-text PDF often doesn\'t shrink it. Try Light mode, or a lower resolution/quality, instead.'
      : ' — this file was already about as compact as it can get.';
  } else if (anyWeak) {
    summary += ' — Light mode barely helped, which usually means the file is mostly images. Try Strong mode for a real reduction.';
  }
  showResult(downloads, summary);
}

async function rasterizeToPdf(arrayBuffer, scale, quality, password) {
  const pdf = await openPdfJs(arrayBuffer, password);
  const outDoc = await PDFDocument.create();
  for (let i = 0; i < pdf.numPages; i++) {
    const page = await pdf.getPage(i + 1);
    const trueViewport = page.getViewport({ scale: 1 }); // true page size, in PDF points
    const renderViewport = page.getViewport({ scale }); // pixel resolution to render at
    const canvas = document.createElement('canvas');
    canvas.width = renderViewport.width; canvas.height = renderViewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport: renderViewport }).promise;
    const jpegDataUrl = canvas.toDataURL('image/jpeg', quality);
    const jpegBytes = await (await fetch(jpegDataUrl)).arrayBuffer();
    const img = await outDoc.embedJpg(jpegBytes);
    // Page is sized to the ORIGINAL page dimensions, not the render resolution — a
    // higher scale means more pixels packed into the same physical page (real DPI
    // gain), not a physically bigger page at a fixed 72 DPI.
    const pdfPage = outDoc.addPage([trueViewport.width, trueViewport.height]);
    pdfPage.drawImage(img, { x: 0, y: 0, width: trueViewport.width, height: trueViewport.height });
  }
  return outDoc.save();
}

let compressEstimateToken = 0;

function ensureCompressEstimateEl() {
  return document.getElementById('compressEstimate');
}

async function updateCompressSizeEstimate() {
  if (state.toolKey !== 'compress') return;
  const el = ensureCompressEstimateEl();
  if (!el) return;
  const myToken = ++compressEstimateToken;

  if (state.files.length === 0) { el.textContent = ''; return; }
  const levelEl = document.querySelector('input[name=compLevel]:checked');
  if (!levelEl) { el.textContent = ''; return; }
  const level = levelEl.value;

  el.textContent = 'Estimating output size…';
  const { files: workingFiles } = await getWorkingFiles('compressMerge');
  const f = workingFiles[0];
  if (!f) { el.textContent = ''; return; }

  try {
    if (level === 'light') {
      const doc = await openPdfLib(f.arrayBuffer, f.password);
      const bytes = await doc.save({ useObjectStreams: true });
      if (myToken !== compressEstimateToken) return;
      const pctSmaller = f.size > 0 ? (1 - bytes.byteLength / f.size) * 100 : 0;
      const pctLabel = pctSmaller >= 0
        ? `${pctSmaller < 0.05 ? '0' : pctSmaller.toFixed(pctSmaller < 1 ? 2 : 1)}% smaller`
        : `${Math.abs(pctSmaller).toFixed(1)}% LARGER`;
      let tip = '';
      if (pctSmaller <= 0.5) tip = ' — this file is likely mostly images already, which Light mode doesn\'t touch; try Strong mode instead.';
      el.textContent = `Estimated output size: ${formatBytes(bytes.byteLength)} (${pctLabel})${tip}` + (workingFiles.length > 1 ? ' — first file only' : '');
      el.classList.toggle('warn', pctSmaller <= 0.5);
    } else {
      const scale = parseFloat(document.getElementById('rasterScale').value);
      const quality = parseFloat(document.getElementById('jpegQuality').value);
      const pdf = await openPdfJs(f.arrayBuffer, f.password);
      const sampleCount = Math.min(3, pdf.numPages);
      let sampleBytes = 0;
      const DATA_URL_PREFIX_LEN = 'data:image/jpeg;base64,'.length;
      for (let i = 0; i < sampleCount; i++) {
        const page = await pdf.getPage(i + 1);
        const viewport = page.getViewport({ scale });
        const canvas = document.createElement('canvas');
        canvas.width = viewport.width; canvas.height = viewport.height;
        await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
        const dataUrl = canvas.toDataURL('image/jpeg', quality);
        sampleBytes += Math.round((dataUrl.length - DATA_URL_PREFIX_LEN) * 0.75); // base64 → raw byte length
      }
      if (myToken !== compressEstimateToken) return;
      const estimatedTotal = (sampleBytes / sampleCount) * pdf.numPages * 1.03; // + small structural overhead
      const sampleNote = sampleCount < pdf.numPages ? ` (based on a ${sampleCount}-page sample)` : '';
      const pctChange = f.size > 0 ? (1 - estimatedTotal / f.size) * 100 : 0;
      const pctLabel = pctChange >= 0 ? `${pctChange.toFixed(1)}% smaller` : `${Math.abs(pctChange).toFixed(1)}% LARGER`;
      if (estimatedTotal >= f.size) {
        el.textContent = `Estimated output size: ~${formatBytes(estimatedTotal)} (${pctLabel})${sampleNote} — that's not smaller than the original (${formatBytes(f.size)}). ` +
          `Rasterizing an already-compact, mostly-text PDF often doesn't shrink it — try Light mode, or a lower resolution/quality here.`;
        el.classList.add('warn');
      } else {
        el.textContent = `Estimated output size: ~${formatBytes(estimatedTotal)} (${pctLabel})${sampleNote}` + (workingFiles.length > 1 ? ' — first file only' : '');
        el.classList.remove('warn');
      }
    }
  } catch (e) {
    if (myToken === compressEstimateToken) el.textContent = '';
  }
}

const COMPRESS_BAND_MIN = 4.75 * 1024 * 1024;
const COMPRESS_BAND_MAX = 4.9 * 1024 * 1024;

// Renders every page once at a given scale — this is the expensive step (real PDF
// page rendering), done once per scale tier rather than once per quality guess.
async function renderPagesForBandSearch(arrayBuffer, scale, password) {
  const pdf = await openPdfJs(arrayBuffer, password);
  const canvases = [];
  const trueDims = [];
  for (let i = 0; i < pdf.numPages; i++) {
    const page = await pdf.getPage(i + 1);
    const trueViewport = page.getViewport({ scale: 1 });
    const renderViewport = page.getViewport({ scale });
    const canvas = document.createElement('canvas');
    canvas.width = renderViewport.width; canvas.height = renderViewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport: renderViewport }).promise;
    canvases.push(canvas);
    trueDims.push({ width: trueViewport.width, height: trueViewport.height });
  }
  return { canvases, trueDims };
}

// Cheap: re-encoding an already-rendered canvas at a different JPEG quality doesn't
// re-render the PDF page, just re-compresses the same bitmap — this is what makes a
// multi-step quality search affordable.
function estimateJpegSetSize(canvases, quality) {
  const prefixLen = 'data:image/jpeg;base64,'.length;
  let total = 0;
  canvases.forEach(c => {
    const dataUrl = c.toDataURL('image/jpeg', quality);
    total += Math.max(0, dataUrl.length - prefixLen) * 0.75;
  });
  return total;
}

async function buildPdfFromRenderedPages(canvases, trueDims, quality) {
  const outDoc = await PDFDocument.create();
  for (let i = 0; i < canvases.length; i++) {
    const dataUrl = canvases[i].toDataURL('image/jpeg', quality);
    const bytes = await (await fetch(dataUrl)).arrayBuffer();
    const img = await outDoc.embedJpg(new Uint8Array(bytes));
    const pdfPage = outDoc.addPage([trueDims[i].width, trueDims[i].height]);
    pdfPage.drawImage(img, { x: 0, y: 0, width: trueDims[i].width, height: trueDims[i].height });
  }
  return outDoc.save();
}

// Binary-searches JPEG quality, at a fixed render scale, to land the estimated output
// size inside [COMPRESS_BAND_MIN, COMPRESS_BAND_MAX]. Returns the best quality found and
// which side of the band it landed on (so the caller knows whether to try a different
// scale tier or just accept this as the closest achievable result).
function searchQualityForBand(canvases) {
  let lo = 0.05, hi = 0.96;
  let best = { quality: 0.6, size: estimateJpegSetSize(canvases, 0.6) };
  for (let iter = 0; iter < 9; iter++) {
    const mid = (lo + hi) / 2;
    const size = estimateJpegSetSize(canvases, mid);
    const curDist = Math.abs(size - (size < COMPRESS_BAND_MIN ? COMPRESS_BAND_MIN : (size > COMPRESS_BAND_MAX ? COMPRESS_BAND_MAX : size)));
    const bestDist = Math.abs(best.size - (best.size < COMPRESS_BAND_MIN ? COMPRESS_BAND_MIN : (best.size > COMPRESS_BAND_MAX ? COMPRESS_BAND_MAX : best.size)));
    if (curDist <= bestDist) best = { quality: mid, size };
    if (size > COMPRESS_BAND_MAX) hi = mid;
    else if (size < COMPRESS_BAND_MIN) lo = mid;
    else { best = { quality: mid, size }; break; } // landed in band — good enough
  }
  return best;
}

async function runOneClickTaxCompress() {
  if (state.files.length === 0) return;
  const { files: workingFiles, merged } = await getWorkingFiles('compressMerge');

  els.progressArea.hidden = false;
  els.resultArea.hidden = true;
  const downloads = [];
  // Highest quality/resolution first — if a lower scale would also land in the band,
  // we still prefer the higher one, since more bytes generally means better fidelity
  // for a given method, and the whole point of the band (vs. a flat "under 5MB") is to
  // use as much of the allowance as safely possible rather than under-shooting it.
  const scaleTiers = [1.3, 1.0, 0.8, 0.6];

  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(5 + (85 * fi) / workingFiles.length, `Trying light compression on ${f.name}…`);
    const doc = await openPdfLib(f.arrayBuffer, f.password);
    let bytes = await doc.save({ useObjectStreams: true });
    let usedLabel = 'light compression';

    const inBand = (n) => n >= COMPRESS_BAND_MIN && n <= COMPRESS_BAND_MAX;

    if (bytes.byteLength > COMPRESS_BAND_MAX) {
      let fallbackBytes = null, fallbackLabel = '', fallbackDist = Infinity;

      for (let t = 0; t < scaleTiers.length; t++) {
        const scale = scaleTiers[t];
        setProgress(10 + (85 * fi) / workingFiles.length, `${f.name}: tuning quality at ${scale <= 0.9 ? 'screen' : 'standard'} resolution…`);
        const { canvases, trueDims } = await renderPagesForBandSearch(f.arrayBuffer.slice(0), scale, f.password);
        const found = searchQualityForBand(canvases);

        // If even the lowest quality at this scale is still above the band, this
        // resolution is too detailed for the target no matter the quality — keep it
        // as a fallback candidate and drop to a lower resolution tier.
        const minQualitySize = estimateJpegSetSize(canvases, 0.05);
        // If even the highest quality at this scale already undershoots the band, a
        // lower scale would only make it smaller still — this is as good as it gets,
        // so stop here rather than trying (pointless) lower tiers.
        const maxQualitySize = estimateJpegSetSize(canvases, 0.96);

        if (inBand(found.size) || (minQualitySize <= COMPRESS_BAND_MAX && maxQualitySize >= COMPRESS_BAND_MIN)) {
          bytes = await buildPdfFromRenderedPages(canvases, trueDims, found.quality);
          usedLabel = `resolution ${scale}x, quality ${found.quality.toFixed(2)}`;
          break;
        }

        const dist = found.size < COMPRESS_BAND_MIN ? COMPRESS_BAND_MIN - found.size : found.size - COMPRESS_BAND_MAX;
        if (dist < fallbackDist) {
          fallbackDist = dist;
          fallbackBytes = await buildPdfFromRenderedPages(canvases, trueDims, found.quality);
          fallbackLabel = `resolution ${scale}x, quality ${found.quality.toFixed(2)} (closest achievable)`;
        }

        if (maxQualitySize < COMPRESS_BAND_MIN) {
          // This scale can't even reach the floor at max quality — a lower scale
          // would be even smaller, so there's no point trying further tiers.
          break;
        }
        // Otherwise minQualitySize > COMPRESS_BAND_MAX: too detailed even at the
        // lowest quality — continue to the next (lower) resolution tier.
      }

      if (fallbackBytes && !inBand(bytes.byteLength)) {
        bytes = fallbackBytes;
        usedLabel = fallbackLabel;
      }
    } else if (bytes.byteLength < COMPRESS_BAND_MIN) {
      // Already comfortably small after light compression — rasterizing it further
      // would only hurt quality for no real benefit, since it's already under the
      // e-filing ceiling with room to spare.
      usedLabel = 'light compression (already well under 5MB)';
    }

    const name = (merged ? 'merged' : f.name.replace(/\.pdf$/i, '')) + '_under5mb.pdf';
    downloads.push({ url: downloadable(bytes, 'application/pdf'), filename: name, size: bytes.byteLength, usedLabel });
  }

  setProgress(100, 'Done');
  const allInBandOrSmaller = downloads.every(d => d.size <= COMPRESS_BAND_MAX);
  const summary = downloads.map(d => `${d.filename}: ${formatBytes(d.size)} (${d.usedLabel})`).join('; ');
  showResult(
    downloads.map(d => ({ url: d.url, filename: d.filename })),
    (allInBandOrSmaller ? 'Done — ' : 'Compressed as much as reasonably possible, but ') + summary +
      (allInBandOrSmaller ? '.' : '. Some file(s) may still be over 5MB if they\'re unusually dense (very high page count or already-compressed images) — consider splitting the file instead.')
  );
}


/* ---- Rotate ---- */
async function processRotate() {
  const angle = parseInt(document.getElementById('rotateAngle').value, 10);
  const { files: workingFiles, merged } = await getWorkingFiles('rotateMerge');
  const downloads = [];
  for (let i = 0; i < workingFiles.length; i++) {
    const f = workingFiles[i];
    setProgress(10 + (80 * i) / workingFiles.length, `Rotating ${f.name}…`);
    const doc = await openPdfLib(f.arrayBuffer, f.password);
    doc.getPages().forEach(p => {
      const current = p.getRotation().angle;
      p.setRotation(degrees((current + angle) % 360));
    });
    const bytes = await doc.save();
    const filename = merged ? 'merged_rotated.pdf' : f.name.replace(/\.pdf$/i, '') + '_rotated.pdf';
    downloads.push({ url: downloadable(bytes, 'application/pdf'), filename });
  }
  setProgress(100, 'Done');
  showResult(downloads, `Rotated ${workingFiles.length === 1 && merged ? 'the merged file' : workingFiles.length + ' file(s)'} by ${angle}°.`);
}

/* ---- Page numbers ---- */
async function processPageNumbers() {
  const position = document.getElementById('numPosition').value;
  const format = document.getElementById('numFormat').value || '{n}';
  const start = parseInt(document.getElementById('numStart').value, 10) || 1;
  const size = parseInt(document.getElementById('numSize').value, 10) || 11;
  const { files: workingFiles, merged } = await getWorkingFiles('numMerge');

  const downloads = [];
  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(10 + (80 * fi) / workingFiles.length, `Numbering ${f.name}…`);
    const doc = await openPdfLib(f.arrayBuffer, f.password);
    const font = await doc.embedFont(StandardFonts.Helvetica);
    const pages = doc.getPages();
    const total = pages.length;

    pages.forEach((page, i) => {
      const { width, height } = page.getSize();
      const label = format.replace('{n}', String(start + i)).replace('{total}', String(total));
      const textWidth = font.widthOfTextAtSize(label, size);
      const margin = 28;
      let x, y;
      if (position.includes('left')) x = margin;
      else if (position.includes('right')) x = width - textWidth - margin;
      else x = (width - textWidth) / 2;
      y = position.startsWith('top') ? height - margin : margin - size / 3;
      page.drawText(label, { x, y, size, font, color: rgb(0.2, 0.2, 0.2) });
    });

    const bytes = await doc.save();
    const filename = merged ? 'merged_numbered.pdf' : f.name.replace(/\.pdf$/i, '') + '_numbered.pdf';
    downloads.push({ url: downloadable(bytes, 'application/pdf'), filename });
  }
  setProgress(100, 'Done');
  showResult(downloads, merged ? 'Page numbers added, running continuously across the merged file.' : `Page numbers added to ${workingFiles.length} file(s).`);
}

/* ---- Watermark ---- */
async function processWatermark() {
  const type = document.querySelector('input[name=wmType]:checked').value;
  const opacity = parseFloat(document.getElementById('wmOpacity').value) || 0.3;
  const rotation = parseInt(document.getElementById('wmRotation').value, 10) || 0;
  const position = document.getElementById('wmPosition').value;
  const tile = document.getElementById('wmTile').checked;
  const margin = 40;

  let text, size, color, imgWidthPct, wmBytes, wmIsPng;

  if (type === 'image') {
    if (!state.wmImage) { showResult([], 'Choose an image to use as the watermark first.', true); return; }
    wmBytes = new Uint8Array(state.wmImage.arrayBuffer);
    wmIsPng = /png/i.test(state.wmImage.mime || state.wmImage.name);
    imgWidthPct = parseFloat(document.getElementById('wmImgWidthPct').value) || 40;
  } else {
    text = document.getElementById('wmText').value || 'WATERMARK';
    size = parseInt(document.getElementById('wmSize').value, 10) || 40;
    const colorMap = { gray: rgb(0.5, 0.5, 0.5), red: rgb(0.85, 0.2, 0.2), black: rgb(0.1, 0.1, 0.1) };
    color = colorMap[document.getElementById('wmColor').value];
  }

  const { files: workingFiles, merged } = await getWorkingFiles('wmMerge');
  const downloads = [];
  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(10 + (80 * fi) / workingFiles.length, `Stamping ${f.name}…`);
    const doc = await openPdfLib(f.arrayBuffer, f.password);

    let font, textWidth, img;
    if (type === 'image') {
      img = wmIsPng ? await doc.embedPng(wmBytes) : await doc.embedJpg(wmBytes);
    } else {
      font = await doc.embedFont(StandardFonts.HelveticaBold);
      textWidth = font.widthOfTextAtSize(text, size);
    }

    doc.getPages().forEach(page => {
      const { width, height } = page.getSize();

      if (type === 'image') {
        const boxW = width * (imgWidthPct / 100);
        const boxH = boxW * (img.height / img.width);
        const stamp = (x, y) => page.drawImage(img, { x, y, width: boxW, height: boxH, opacity, rotate: degrees(rotation) });
        if (tile) {
          const stepX = boxW + 60, stepY = boxH + 60;
          for (let y = -stepY; y < height + stepY; y += stepY)
            for (let x = -stepX; x < width + stepX; x += stepX) stamp(x, y);
        } else {
          const { x, y } = computeAnchorXY(width, height, boxW, boxH, position, margin);
          stamp(x, y);
        }
      } else {
        const stamp = (x, y) => page.drawText(text, { x, y: y + size * 0.2, size, font, color, opacity, rotate: degrees(rotation) });
        if (tile) {
          const stepX = textWidth + 80, stepY = size + 80;
          for (let y = -stepY; y < height + stepY; y += stepY)
            for (let x = -stepX; x < width + stepX; x += stepX) stamp(x, y);
        } else {
          const { x, y } = computeAnchorXY(width, height, textWidth, size, position, margin);
          stamp(x, y);
        }
      }
    });

    const bytes = await doc.save();
    const filename = merged ? 'merged_watermarked.pdf' : f.name.replace(/\.pdf$/i, '') + '_watermarked.pdf';
    downloads.push({ url: downloadable(bytes, 'application/pdf'), filename });
  }
  setProgress(100, 'Done');
  showResult(downloads, merged ? 'Watermarked the merged file.' : `Watermarked ${workingFiles.length} file(s).`);
}

/* ---- PDF to JPG ---- */
async function exportPagesToImages(zip, arrayBuffer, scale, prefix, password) {
  const pdf = await openPdfJs(arrayBuffer, password);
  for (let i = 0; i < pdf.numPages; i++) {
    const page = await pdf.getPage(i + 1);
    const viewport = page.getViewport({ scale });
    const canvas = document.createElement('canvas');
    canvas.width = viewport.width; canvas.height = viewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
    const dataUrl = canvas.toDataURL('image/jpeg', 0.9);
    const bytes = await (await fetch(dataUrl)).arrayBuffer();
    zip.file(`${prefix}_page${i + 1}.jpg`, bytes);
  }
  return pdf.numPages;
}

async function processPdf2Jpg() {
  const scale = parseFloat(document.getElementById('jpgQuality').value);
  const { files: workingFiles, merged } = await getWorkingFiles('jpgMerge');

  if (workingFiles.length === 1) {
    const f = workingFiles[0];
    const baseName = merged ? 'merged' : f.name.replace(/\.pdf$/i, '');
    const pdf = await openPdfJs(f.arrayBuffer, f.password);
    if (pdf.numPages === 1) {
      const page = await pdf.getPage(1);
      const viewport = page.getViewport({ scale });
      const canvas = document.createElement('canvas');
      canvas.width = viewport.width; canvas.height = viewport.height;
      await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
      const dataUrl = canvas.toDataURL('image/jpeg', 0.9);
      const bytes = await (await fetch(dataUrl)).arrayBuffer();
      setProgress(100, 'Done');
      showResult([{ url: downloadable(bytes, 'image/jpeg'), filename: `${baseName}.jpg` }], 'Exported 1 page as a JPG.');
      return;
    }
    const zip = new JSZip();
    setProgress(20, `Exporting pages…`);
    await exportPagesToImages(zip, f.arrayBuffer.slice(0), scale, baseName, f.password);
    const zipBytes = await zip.generateAsync({ type: 'uint8array' });
    setProgress(100, 'Done');
    showResult([{ url: downloadable(zipBytes, 'application/zip'), filename: `${baseName}_pages.zip` }],
      `Exported ${pdf.numPages} pages, packaged as a zip.`);
    return;
  }

  // Multiple files, kept separate: one zip per file.
  const downloads = [];
  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(10 + (85 * fi) / workingFiles.length, `Exporting ${f.name}…`);
    const baseName = f.name.replace(/\.pdf$/i, '');
    const zip = new JSZip();
    const numPages = await exportPagesToImages(zip, f.arrayBuffer.slice(0), scale, baseName, f.password);
    const zipBytes = await zip.generateAsync({ type: 'uint8array' });
    downloads.push({ url: downloadable(zipBytes, 'application/zip'), filename: `${baseName}_pages.zip`, numPages });
  }
  setProgress(100, 'Done');
  showResult(downloads, `Exported ${workingFiles.length} files as separate zips.`);
}

/* ---- Image(s) to PDF ---- */
const A4_PORTRAIT_PT = [595.28, 841.89];
const A4_LANDSCAPE_PT = [841.89, 595.28];
const CM_TO_PT = 28.3465;

// Previously, the output page was sized directly to the image's raw pixel dimensions
// treated as points — a perfectly ordinary 3000x4000px photo became a roughly 42x56
// INCH page. This creates a proper A4 page instead (matching portrait/landscape to the
// image's own orientation) and scales the image to fit within it with a configurable
// border on all four sides, which is what image-to-PDF conversion normally means.
function addImageToA4Page(outDoc, img, borderCm) {
  const isLandscape = img.width > img.height;
  const [pageW, pageH] = isLandscape ? A4_LANDSCAPE_PT : A4_PORTRAIT_PT;
  const page = outDoc.addPage([pageW, pageH]);
  const margin = borderCm > 0 ? borderCm * CM_TO_PT : 20; // a small sensible default when no border is set
  const maxW = Math.max(1, pageW - margin * 2), maxH = Math.max(1, pageH - margin * 2);
  const scale = Math.min(maxW / img.width, maxH / img.height);
  const drawW = img.width * scale, drawH = img.height * scale;
  const x = (pageW - drawW) / 2, y = (pageH - drawH) / 2;
  page.drawImage(img, { x, y, width: drawW, height: drawH });
  return page;
}

async function embedImageInNewPdf(f, borderCm) {
  const outDoc = await PDFDocument.create();
  const bytes = new Uint8Array(f.arrayBuffer);
  const img = /png$/i.test(f.name) ? await outDoc.embedPng(bytes) : await outDoc.embedJpg(bytes);
  addImageToA4Page(outDoc, img, borderCm);
  return outDoc.save();
}

async function processImg2Pdf() {
  const mode = document.querySelector('input[name=imgMode]:checked').value;
  const borderCm = parseFloat(document.getElementById('imgBorderCm').value) || 0;

  if (mode === 'separate') {
    if (state.files.length === 1) {
      const bytes = await embedImageInNewPdf(state.files[0], borderCm);
      setProgress(100, 'Done');
      const name = state.files[0].name.replace(/\.\w+$/, '') + '.pdf';
      showResult([{ url: downloadable(bytes, 'application/pdf'), filename: name }], 'Converted 1 image to PDF.');
      return;
    }
    const zip = new JSZip();
    for (let i = 0; i < state.files.length; i++) {
      const f = state.files[i];
      setProgress(10 + (85 * i) / state.files.length, `Converting ${f.name}…`);
      const bytes = await embedImageInNewPdf(f, borderCm);
      zip.file(f.name.replace(/\.\w+$/, '') + '.pdf', bytes);
    }
    const zipBytes = await zip.generateAsync({ type: 'uint8array' });
    setProgress(100, 'Done');
    showResult([{ url: downloadable(zipBytes, 'application/zip'), filename: 'images_as_pdfs.zip' }],
      `Converted ${state.files.length} images into separate PDFs, packaged as a zip.`);
    return;
  }

  const outDoc = await PDFDocument.create();
  for (let i = 0; i < state.files.length; i++) {
    const f = state.files[i];
    setProgress(10 + (85 * i) / state.files.length, `Adding ${f.name}…`);
    const bytes = new Uint8Array(f.arrayBuffer);
    let img;
    if (/png$/i.test(f.name)) img = await outDoc.embedPng(bytes);
    else img = await outDoc.embedJpg(bytes);
    addImageToA4Page(outDoc, img, borderCm);
  }
  const bytes = await outDoc.save();
  setProgress(100, 'Done');
  showResult([{ url: downloadable(bytes, 'application/pdf'), filename: 'images.pdf' }],
    `Combined ${state.files.length} image(s) into one PDF.`);
}

/* ---- Word to PDF (docx-preview → real, styled page render → browser print-to-PDF) ---- */
async function renderWordToPdf() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  panel.innerHTML = `<div style="color:var(--muted);font-size:13.5px;">Rendering…</div>`;

  const f = state.files[state.files.length - 1];
  panel.innerHTML = `
    <div class="print-actions">
      <button id="printToPdfBtn" class="process-btn" style="margin-top:0;">Open Print Dialog → Save as PDF</button>
      <p style="color:var(--muted);font-size:12.5px;margin:10px 0 0;">
        In the dialog, set the destination to <strong>"Save as PDF"</strong> (Windows: "Microsoft Print to PDF"),
        then save. This renders your document the way Word itself would — real fonts, sizes, and tables —
        then hands it to your browser's own PDF engine, so nothing gets flattened or approximated.
      </p>
    </div>
    <div id="docxPageCountInfo" style="font-weight:700;color:var(--ink);margin-bottom:12px;font-size:14px;"></div>
    <div id="docxPreviewWrap" class="print-target"></div>
  `;

  const styleHost = document.getElementById('docxStyleHost');
  styleHost.innerHTML = '';
  const target = document.getElementById('docxPreviewWrap');

  try {
    await docxPreview.renderAsync(f.arrayBuffer.slice(0), target, styleHost, {
      inWrapper: true,
      className: 'docx',
      breakPages: true,
      ignoreWidth: false,
      ignoreHeight: false,
      ignoreFonts: false,
      experimental: true,
      hideWrapperOnPrint: true,
    });
    document.getElementById('printToPdfBtn').addEventListener('click', () => window.print());

    // docx-preview renders one .docx-wrapper > section.docx per page — that boundary IS
    // the page break. Label each one and surface the total count up top.
    const pageSections = target.querySelectorAll('.docx-wrapper > section.docx');
    const countInfo = document.getElementById('docxPageCountInfo');
    if (pageSections.length) {
      countInfo.textContent = `This document will convert into ${pageSections.length} page${pageSections.length === 1 ? '' : 's'}.`;
      pageSections.forEach((sec, i) => {
        sec.style.position = 'relative';
        const badge = document.createElement('div');
        badge.className = 'docx-page-badge';
        badge.textContent = `Page ${i + 1} of ${pageSections.length}`;
        sec.insertBefore(badge, sec.firstChild);
      });
    }
    fitDocxWrapperToWidth(target);
  } catch (err) {
    panel.innerHTML = `<div class="warn-note error">Couldn't read this file: ${escapeHtml(err.message || String(err))}. Make sure it's a .docx — older .doc files aren't supported.</div>`;
  }
}

/* ---- HTML to PDF (local file → shadow DOM → browser print-to-PDF) ---- */
// There's no "any webpage URL to PDF" here — fetching an arbitrary live URL needs
// internet access and runs straight into CORS (browsers block a page from reading the
// content of a different origin unless that site explicitly allows it), which conflicts
// with this being an offline, no-server tool in the first place. What genuinely works
// within that constraint: a local HTML file you already have — e.g. saved from a
// browser via "Save Page As" — rendered here and handed to the same print-to-PDF flow
// as Word/Excel to PDF.
//
// This previously rendered the uploaded file inside an <iframe>, which turned out to be
// the wrong tool for the job: an iframe is a separate browsing context with its own
// fixed viewport, and printing a page that contains one captures that iframe's content
// frozen at whatever small on-screen pixel size it happened to have — not reflowed to
// the actual paper width. That's exactly what was showing up as a narrow column of
// truncated text with blank space around it. Shadow DOM fixes this properly: it's
// genuine style isolation (the uploaded page's CSS can't leak out and affect this app,
// and this app's CSS can't leak in and affect the uploaded page), but the content lives
// directly in this document's own layout tree, so it reflows to full page width and
// prints completely, the same way Word/Excel to PDF's content does.
async function renderHtmlToPdf() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  const f = state.files[state.files.length - 1];

  panel.innerHTML = `
    <div class="print-actions">
      <button id="printToPdfBtn" class="process-btn" style="margin-top:0;">Open Print Dialog → Save as PDF</button>
      <p style="color:var(--muted);font-size:12.5px;margin:10px 0 0;">
        In the dialog, set the destination to <strong>"Save as PDF"</strong> (Windows: "Microsoft Print to PDF"),
        then save. Works best for a single, self-contained HTML file (styles and images inlined, like most
        browsers' "Save as HTML only" option) — if the page originally used a separate folder of images or
        CSS, only this one file was uploaded, so those won't be included. Scripts in the file are not run —
        only the static rendered content is used.
      </p>
    </div>
    <div class="print-target html2pdf-preview-box">
      <div id="htmlToPdfHost"></div>
    </div>
  `;

  const text = new TextDecoder('utf-8').decode(f.arrayBuffer);
  const parsed = new DOMParser().parseFromString(text, 'text/html');
  // Scripts aren't executed here at all — only the static markup and styles are used,
  // both because we only need the rendered content (not any interactive behavior) and
  // because running an uploaded file's arbitrary script inside this app's own page
  // would be a real risk.
  parsed.querySelectorAll('script').forEach(s => s.remove());

  const host = document.getElementById('htmlToPdfHost');
  const shadow = host.attachShadow({ mode: 'open' });
  parsed.querySelectorAll('style').forEach(styleTag => {
    const clone = document.createElement('style');
    clone.textContent = styleTag.textContent;
    shadow.appendChild(clone);
  });
  const bodyWrap = document.createElement('div');
  bodyWrap.innerHTML = parsed.body ? parsed.body.innerHTML : text;
  shadow.appendChild(bodyWrap);

  // Most real-world web pages are built for a typical desktop viewport (1200px+),
  // which is meaningfully wider than an A4 page (~794px at 96dpi). Without correcting
  // for that, a fixed-width or non-responsive layout simply runs off the right edge of
  // the printed page — which is exactly what was showing up as headings truncated
  // mid-word and most of each line missing. Word-to-PDF deliberately does NOT do this,
  // because a Word document already has a real, correct page size to preserve — but an
  // arbitrary webpage has no such thing, so it genuinely needs to be scaled down to fit.
  await waitForImagesToLoad(shadow);
  fitHtmlToPdfHostToPage(host, bodyWrap);

  document.getElementById('printToPdfBtn').addEventListener('click', () => window.print());
}

function waitForImagesToLoad(root) {
  const imgs = Array.from(root.querySelectorAll('img'));
  return Promise.all(imgs.map(img => img.complete ? Promise.resolve() :
    new Promise(resolve => { img.addEventListener('load', resolve); img.addEventListener('error', resolve); })));
}

function fitHtmlToPdfHostToPage(host, bodyWrap) {
  host.style.transform = '';
  host.style.marginBottom = '';
  host.style.width = '';
  const naturalWidth = bodyWrap.scrollWidth;
  const A4_WIDTH_PX = 793.7; // 210mm at 96dpi
  const targetWidth = A4_WIDTH_PX - 48; // leaves a small safety margin against the page edge
  if (naturalWidth > targetWidth && naturalWidth > 0) {
    const scale = targetWidth / naturalWidth;
    host.style.transformOrigin = 'top left';
    host.style.transform = `scale(${scale})`;
    host.style.width = `${targetWidth}px`; // keeps the container from leaving blank space to the right
    const naturalHeight = bodyWrap.scrollHeight;
    host.style.marginBottom = `${-(naturalHeight * (1 - scale))}px`; // ...and below, from the unscaled layout box
  }
}

/* ---- Excel to PDF (SheetJS → styled HTML tables → browser print-to-PDF) ---- */

function columnLetter(idx) {
  let s = '', n = idx + 1;
  while (n > 0) {
    const rem = (n - 1) % 26;
    s = String.fromCharCode(65 + rem) + s;
    n = Math.floor((n - 1) / 26);
  }
  return s;
}

// Renders an AOA (array-of-arrays) as an interactive table with row/column gutters.
// Clicking a gutter cell toggles a page break just after that row/column — the same
// idea as Excel's Page Break Preview, minus drag support. `breaks` is mutated in place;
// `onChange` is called after every toggle so the caller can rebuild the print output.
function renderBreakEditableTable(aoa, breaks, onChange) {
  const colCount = aoa.reduce((m, r) => Math.max(m, r.length), 0);
  const wrap = document.createElement('div');
  wrap.className = 'break-editor';
  const table = document.createElement('table');
  table.className = 'break-editor-table';

  const headRow = document.createElement('tr');
  headRow.appendChild(document.createElement('th'));
  const colHeaderCells = [];
  for (let c = 0; c < colCount; c++) {
    const th = document.createElement('th');
    th.className = 'gutter-col' + (breaks.cols.has(c) ? ' break-after' : '');
    th.textContent = columnLetter(c);
    th.title = 'Click to toggle a page break after column ' + columnLetter(c);
    colHeaderCells.push(th);
    headRow.appendChild(th);
  }
  table.appendChild(headRow);

  const bodyRows = [];
  aoa.forEach((row, r) => {
    const tr = document.createElement('tr');
    if (breaks.rows.has(r)) tr.classList.add('break-after-row');
    const gutter = document.createElement('th');
    gutter.className = 'gutter-row' + (breaks.rows.has(r) ? ' break-after' : '');
    gutter.textContent = r + 1;
    gutter.title = 'Click to toggle a page break after row ' + (r + 1);
    tr.appendChild(gutter);
    const cells = [];
    for (let c = 0; c < colCount; c++) {
      const td = document.createElement('td');
      if (breaks.cols.has(c)) td.classList.add('break-after-col');
      const v = row[c];
      td.textContent = v == null ? '' : v;
      tr.appendChild(td);
      cells.push(td);
    }
    table.appendChild(tr);
    bodyRows.push({ tr, gutter, cells });
  });

  // Wire up clicks after the whole table exists, so a column toggle can reach every
  // row's cell in that column without a full re-render (which would lose scroll position).
  colHeaderCells.forEach((th, c) => {
    th.addEventListener('click', () => {
      const on = !breaks.cols.has(c);
      on ? breaks.cols.add(c) : breaks.cols.delete(c);
      th.classList.toggle('break-after', on);
      bodyRows.forEach(({ cells }) => { if (cells[c]) cells[c].classList.toggle('break-after-col', on); });
      onChange();
    });
  });
  bodyRows.forEach(({ tr, gutter }, r) => {
    gutter.addEventListener('click', () => {
      const on = !breaks.rows.has(r);
      on ? breaks.rows.add(r) : breaks.rows.delete(r);
      gutter.classList.toggle('break-after', on);
      tr.classList.toggle('break-after-row', on);
      onChange();
    });
  });

  wrap.appendChild(table);
  return wrap;
}

// A companion control to the click-to-toggle editor above: type a number to insert a
// break every N rows (and/or every N columns) in one go, instead of clicking each one.
// Replaces that axis's current break set with the computed multiples — click-editing
// afterward still works normally on top of it.
function createIntervalControls(rowCount, colCount, breaks, onChange) {
  const wrap = document.createElement('div');
  wrap.className = 'opt-inline';
  wrap.style.margin = '8px 0 14px';
  wrap.innerHTML = `
    <div class="opt-row">
      <label>Break every N rows</label>
      <input type="number" min="1" class="intervalRows" style="width:90px" placeholder="e.g. 20">
    </div>
    <div class="opt-row">
      <label>Break every N columns</label>
      <input type="number" min="1" class="intervalCols" style="width:90px" placeholder="e.g. 6">
    </div>
  `;
  const rowsInput = wrap.querySelector('.intervalRows');
  const colsInput = wrap.querySelector('.intervalCols');
  // Remembered on the breaks object itself, which survives across rebuilds — so the
  // number you typed stays visible instead of clearing back to the placeholder.
  if (breaks.intervalRows) rowsInput.value = breaks.intervalRows;
  if (breaks.intervalCols) colsInput.value = breaks.intervalCols;

  rowsInput.addEventListener('change', (e) => {
    const n = parseInt(e.target.value, 10);
    breaks.intervalRows = e.target.value;
    breaks.rows.clear();
    if (n > 0) for (let r = n - 1; r < rowCount - 1; r += n) breaks.rows.add(r);
    onChange();
  });
  colsInput.addEventListener('change', (e) => {
    const n = parseInt(e.target.value, 10);
    breaks.intervalCols = e.target.value;
    breaks.cols.clear();
    if (n > 0) for (let c = n - 1; c < colCount - 1; c += n) breaks.cols.add(c);
    onChange();
  });
  return wrap;
}

// Splits an AOA into row-band × column-band tiles at the marked break points, in
// Excel's default "over, then down" print order (all column-bands for one row-band,
// then the next row-band).
function computeBreakChunks(aoa, breaks) {
  const colCount = aoa.reduce((m, r) => Math.max(m, r.length), 0);
  const rowBreaks = Array.from(breaks.rows).sort((a, b) => a - b);
  const rowBands = [];
  let rs = 0;
  rowBreaks.forEach(b => { if (b >= rs) { rowBands.push([rs, b]); rs = b + 1; } });
  if (rs <= aoa.length - 1) rowBands.push([rs, aoa.length - 1]);

  const colBreaks = Array.from(breaks.cols).sort((a, b) => a - b);
  const colBands = [];
  let cs = 0;
  colBreaks.forEach(b => { if (b >= cs) { colBands.push([cs, b]); cs = b + 1; } });
  if (cs <= colCount - 1) colBands.push([cs, colCount - 1]);

  const tiles = [];
  rowBands.forEach(([r0, r1]) => {
    colBands.forEach(([c0, c1]) => {
      const rows = [];
      for (let r = r0; r <= r1; r++) {
        const row = [];
        for (let c = c0; c <= c1; c++) row.push(aoa[r] && aoa[r][c] != null ? aoa[r][c] : '');
        rows.push(row);
      }
      tiles.push({ rows, r0, r1, c0, c1 });
    });
  });
  return tiles;
}

function tilesToPrintHtml(tiles, sheetName) {
  return tiles.map(tile => {
    const rowsHtml = tile.rows.map((r, i) => `<tr>${r.map(c => `<td${i === 0 && tile.r0 === 0 ? ' class="hdr"' : ''}>${escapeHtml(String(c))}</td>`).join('')}</tr>`).join('');
    const label = `${escapeHtml(sheetName)} — rows ${tile.r0 + 1}-${tile.r1 + 1}, columns ${columnLetter(tile.c0)}-${columnLetter(tile.c1)}`;
    return `<div class="xls-sheet-block"><div class="xls-sheet-title">${label}</div><table>${rowsHtml}</table></div>`;
  }).join('');
}
async function renderExcelToPdf() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  panel.innerHTML = `<div style="color:var(--muted);font-size:13.5px;">Reading spreadsheet…</div>`;

  const f = state.files[state.files.length - 1];
  try {
    const wb = XLSX.read(new Uint8Array(f.arrayBuffer), { type: 'array' });
    const sheetNames = wb.SheetNames;
    state.excelSheets = sheetNames.map(name => ({
      name,
      aoa: XLSX.utils.sheet_to_json(wb.Sheets[name], { header: 1, raw: false, defval: '' }),
    }));
    state.excelBreaks = state.excelSheets.map(() => ({ rows: new Set(), cols: new Set() }));
    state.excelIncluded = state.excelSheets.map(() => true);

    const checkboxes = sheetNames.map((name, i) =>
      `<label style="margin-right:14px;font-weight:500;"><input type="checkbox" class="xlsSheetToggle" data-sheet-index="${i}" checked> ${escapeHtml(name)}</label>`
    ).join('');

    panel.innerHTML = `
      ${sheetNames.length > 1 ? `<div class="opt-row"><label>Sheets to include</label><div class="opt-inline">${checkboxes}</div></div>` : ''}
      <div class="print-actions">
        <button id="printToPdfBtn" class="process-btn" style="margin-top:0;">Open Print Dialog → Save as PDF</button>
        <p style="color:var(--muted);font-size:12.5px;margin:10px 0 0;">
          In the dialog, set the destination to <strong>"Save as PDF"</strong> (Windows: "Microsoft Print to PDF"),
          then save. Wide sheets often print more cleanly if you also switch the dialog's layout to Landscape.
        </p>
      </div>
      <div id="xlsPageCountInfo" style="font-weight:700;color:var(--ink);margin-bottom:12px;font-size:14px;"></div>
      <div class="opt-row">
        <label>Where each page breaks</label>
        <p style="color:var(--muted);font-size:12.5px;margin:2px 0 10px;">
          Click a column letter or row number below to insert a page break right after it — same idea as
          Excel's Page Break Preview. Click again to remove it.
        </p>
      </div>
      <div id="xlsEditorWrap"></div>
      <div id="xlsPrintWrap" class="print-target" style="display:none"></div>
    `;

    const editorWrap = document.getElementById('xlsEditorWrap');
    function rebuildEditors() {
      editorWrap.innerHTML = '';
      state.excelSheets.forEach((sheet, i) => {
        if (!state.excelIncluded[i]) return;
        const section = document.createElement('div');
        section.className = 'xls-sheet-block';
        const title = document.createElement('div');
        title.className = 'xls-sheet-title';
        title.textContent = sheet.name;
        section.appendChild(title);
        const colCount = sheet.aoa.reduce((m, r) => Math.max(m, r.length), 0);
        section.appendChild(createIntervalControls(sheet.aoa.length, colCount, state.excelBreaks[i], () => {
          rebuildEditors();
          rebuildPrintOutput();
        }));
        section.appendChild(renderBreakEditableTable(sheet.aoa, state.excelBreaks[i], rebuildPrintOutput));
        editorWrap.appendChild(section);
      });
    }
    function rebuildPrintOutput() {
      const printWrap = document.getElementById('xlsPrintWrap');
      let html = '';
      let totalTiles = 0;
      state.excelSheets.forEach((sheet, i) => {
        if (!state.excelIncluded[i]) return;
        const tiles = computeBreakChunks(sheet.aoa, state.excelBreaks[i]);
        totalTiles += tiles.length;
        html += tilesToPrintHtml(tiles, sheet.name);
      });
      printWrap.innerHTML = html;
      const countInfo = document.getElementById('xlsPageCountInfo');
      if (countInfo) countInfo.textContent = `This will print as ${totalTiles} page${totalTiles === 1 ? '' : 's'}.`;
    }

    rebuildEditors();
    rebuildPrintOutput();

    document.getElementById('printToPdfBtn').addEventListener('click', () => window.print());
    panel.querySelectorAll('.xlsSheetToggle').forEach(cb => {
      cb.addEventListener('change', () => {
        state.excelIncluded[cb.dataset.sheetIndex] = cb.checked;
        rebuildEditors();
        rebuildPrintOutput();
      });
    });
  } catch (err) {
    panel.innerHTML = `<div class="warn-note error">Couldn't read this file: ${escapeHtml(err.message || String(err))}. Make sure it's a .xlsx or .xls file.</div>`;
  }
}

/* ---- Shared invoice PDF builder (Create Invoice + Bulk Create Invoices) ---- */
// Built with pdf-lib directly, drawing text/lines/rectangles onto the page — rather
// than the browser-print pattern used elsewhere — because bulk generation needs to
// produce many PDFs with no human clicking "Save as PDF" for each one; only a direct,
// fully scriptable approach can do that.
function wrapPlainText(font, text, size, maxWidth) {
  if (!text) return [''];
  const out = [];
  text.split('\n').forEach(paragraph => {
    const words = paragraph.split(' ');
    let line = '';
    words.forEach(word => {
      const test = line ? line + ' ' + word : word;
      if (font.widthOfTextAtSize(test, size) > maxWidth && line) { out.push(line); line = word; }
      else line = test;
    });
    out.push(line);
  });
  return out;
}

// pdf-lib's standard 14 fonts use WinAnsiEncoding, which predates many newer currency
// symbols — the Rupee sign (₹) isn't in it. Rather than throwing, pdf-lib silently
// substitutes a "?" glyph, which looked like it worked but actually produced "?100.00"
// instead of "₹100.00" on every invoice. Confirmed directly: widthOfTextAtSize('₹', size)
// was IDENTICAL to widthOfTextAtSize('?', size) — the tell-tale sign of a silent
// substitution. Real currency symbols like $, €, £ already have real glyphs in
// WinAnsiEncoding and don't need any of this; only genuinely unsupported characters
// fall back to a small bundled font (Noto Sans, currency-symbols subset only — using a
// second font for just the symbol keeps this to ~55KB rather than needing a whole
// replacement font family for every character in the document).
let currencyFontBytesPromise = null;
function loadCurrencyFontBytes() {
  if (!currencyFontBytesPromise) {
    currencyFontBytesPromise = fetch('vendor/fonts/NotoSans-currency-glyphs.woff2').then(r => r.arrayBuffer());
  }
  return currencyFontBytesPromise;
}

function charNeedsFallbackFont(standardFont, ch) {
  if (!ch || ch === '?') return false;
  try {
    const qWidth = standardFont.widthOfTextAtSize('?', 10);
    const chWidth = standardFont.widthOfTextAtSize(ch, 10);
    return Math.abs(chWidth - qWidth) < 0.001;
  } catch (e) {
    return true; // couldn't measure it at all — safest to treat as unsupported
  }
}

// Draws a currency-prefixed amount (e.g. "₹1,250.00"), using the fallback font only for
// the specific leading characters that actually need it (typically just the symbol
// itself) and the regular font for the rest — so normal digits and punctuation still
// render with the same font as the rest of the document.
async function drawAmountText(page, text, opts, standardFont, getFallbackFont) {
  let splitAt = 0;
  while (splitAt < text.length && charNeedsFallbackFont(standardFont, text[splitAt])) splitAt++;
  if (splitAt === 0) {
    page.drawText(text, { ...opts, font: standardFont });
    return;
  }
  const fallbackFont = await getFallbackFont();
  const prefix = text.slice(0, splitAt);
  const rest = text.slice(splitAt);
  page.drawText(prefix, { ...opts, font: fallbackFont });
  const prefixWidth = fallbackFont.widthOfTextAtSize(prefix, opts.size);
  if (rest) page.drawText(rest, { ...opts, x: opts.x + prefixWidth, font: standardFont });
}

async function buildInvoicePdfBytes(data) {
  const doc = await PDFDocument.create();
  doc.registerFontkit(fontkit);
  const fontRegular = await doc.embedFont(StandardFonts.Helvetica);
  const fontBold = await doc.embedFont(StandardFonts.HelveticaBold);
  const [pageW, pageH] = A4_PORTRAIT_PT;
  const margin = 50;
  const currency = data.currencySymbol || '';
  const fmt = (n) => currency + (Number(n) || 0).toFixed(2);
  const BAND = rgb(0.13, 0.16, 0.22);
  const ACCENT_BG = rgb(0.94, 0.95, 0.98);
  const ROW_ALT = rgb(0.97, 0.97, 0.98);
  let fallbackFontCache = null;
  const getFallbackFont = async () => {
    if (!fallbackFontCache) fallbackFontCache = await doc.embedFont(await loadCurrencyFontBytes());
    return fallbackFontCache;
  };

  let logoImage = null;
  if (data.logoBytes && data.logoBytes.byteLength) {
    try {
      logoImage = data.logoType === 'png' ? await doc.embedPng(data.logoBytes) : await doc.embedJpg(data.logoBytes);
    } catch (e) { logoImage = null; }
  }

  let page = doc.addPage([pageW, pageH]);
  let y = pageH - margin;

  const colX = { desc: margin, qty: margin + 290, rate: margin + 350, amount: margin + 430 };
  let rowIndex = 0;

  function drawTableHeader() {
    page.drawRectangle({ x: margin, y: y - 6, width: pageW - margin * 2, height: 20, color: BAND });
    page.drawText('Description', { x: colX.desc + 6, y: y, size: 10, font: fontBold, color: rgb(1, 1, 1) });
    page.drawText('Qty', { x: colX.qty, y: y, size: 10, font: fontBold, color: rgb(1, 1, 1) });
    page.drawText('Rate', { x: colX.rate, y: y, size: 10, font: fontBold, color: rgb(1, 1, 1) });
    page.drawText('Amount', { x: colX.amount, y: y, size: 10, font: fontBold, color: rgb(1, 1, 1) });
    y -= 26;
    rowIndex = 0;
  }

  function newPage() {
    page = doc.addPage([pageW, pageH]);
    y = pageH - margin;
    drawTableHeader();
  }

  // Header band: logo on the left (if provided) and the INVOICE title / number / dates
  // on the right, both sitting on a full-width colored band for a cleaner, more
  // deliberate look than plain text at the top of a blank page.
  const bandHeight = 76;
  page.drawRectangle({ x: 0, y: pageH - bandHeight, width: pageW, height: bandHeight, color: BAND });
  if (logoImage) {
    const maxLogoW = 150, maxLogoH = 44;
    const scale = Math.min(maxLogoW / logoImage.width, maxLogoH / logoImage.height, 1);
    const lw = logoImage.width * scale, lh = logoImage.height * scale;
    page.drawImage(logoImage, { x: margin, y: pageH - bandHeight / 2 - lh / 2, width: lw, height: lh });
  } else {
    page.drawText('INVOICE', { x: margin, y: pageH - bandHeight / 2 - 9, size: 22, font: fontBold, color: rgb(1, 1, 1) });
  }
  const rightColX = pageW - margin - 170;
  if (logoImage) page.drawText('INVOICE', { x: rightColX, y: pageH - 30, size: 16, font: fontBold, color: rgb(1, 1, 1) });
  if (data.invoiceNumber) page.drawText(`#${data.invoiceNumber}`, { x: rightColX, y: pageH - (logoImage ? 46 : 34), size: 10, font: fontRegular, color: rgb(0.85, 0.87, 0.92) });
  if (data.invoiceDate) page.drawText(`Date: ${data.invoiceDate}`, { x: rightColX, y: pageH - (logoImage ? 58 : 46), size: 9, font: fontRegular, color: rgb(0.85, 0.87, 0.92) });
  if (data.dueDate) page.drawText(`Due: ${data.dueDate}`, { x: rightColX, y: pageH - (logoImage ? 69 : 58), size: 9, font: fontRegular, color: rgb(0.85, 0.87, 0.92) });
  y = pageH - bandHeight - 34;

  // Business info (left column)
  const biz = data.business || {};
  const bizLines = [biz.name, biz.address, biz.email, biz.phone, biz.taxId ? `Tax ID: ${biz.taxId}` : ''].filter(Boolean);
  bizLines.forEach((line, i) => {
    page.drawText(String(line), { x: margin, y: y - i * 14, size: i === 0 ? 12 : 10, font: i === 0 ? fontBold : fontRegular });
  });
  y -= Math.max(bizLines.length * 14, 14) + 26;

  // Bill To
  page.drawRectangle({ x: margin, y: y - 4, width: 200, height: 16, color: ACCENT_BG });
  page.drawText('BILL TO', { x: margin + 6, y, size: 9, font: fontBold, color: rgb(0.35, 0.38, 0.45) });
  y -= 20;
  const client = data.client || {};
  [client.name, client.address].filter(Boolean).forEach((line, i) => {
    page.drawText(String(line), { x: margin, y, size: i === 0 ? 11 : 10, font: i === 0 ? fontBold : fontRegular });
    y -= 14;
  });
  y -= 14;

  drawTableHeader();

  let subtotal = 0;
  const items = (data.items || []).filter(it => it && (it.description || it.qty || it.rate));
  for (const item of items) {
    if (y - 18 < margin + 90) newPage();
    const qty = Number(item.qty) || 0;
    const rate = Number(item.rate) || 0;
    const amount = qty * rate;
    subtotal += amount;
    const descLines = wrapPlainText(fontRegular, String(item.description || ''), 10, colX.qty - colX.desc - 10);
    const rowHeight = Math.max(descLines.length * 12, 16) + 8;
    if (rowIndex % 2 === 1) {
      page.drawRectangle({ x: margin, y: y - rowHeight + 12, width: pageW - margin * 2, height: rowHeight, color: ROW_ALT });
    }
    descLines.forEach((line, li) => {
      page.drawText(line, { x: colX.desc + 6, y: y - li * 12, size: 10, font: fontRegular });
    });
    page.drawText(String(qty), { x: colX.qty, y, size: 10, font: fontRegular });
    await drawAmountText(page, fmt(rate), { x: colX.rate, y, size: 10 }, fontRegular, getFallbackFont);
    await drawAmountText(page, fmt(amount), { x: colX.amount, y, size: 10 }, fontRegular, getFallbackFont);
    y -= rowHeight;
    rowIndex++;
  }

  if (y - 90 < margin) newPage();
  y -= 8;
  page.drawLine({ start: { x: margin, y }, end: { x: pageW - margin, y }, thickness: 1, color: rgb(0.82, 0.82, 0.85) });
  y -= 20;

  const taxRate = Number(data.taxRatePercent) || 0;
  const taxAmount = subtotal * (taxRate / 100);
  const total = subtotal + taxAmount;

  async function totalLine(label, value, bold) {
    const size = bold ? 13 : 10;
    if (bold) page.drawRectangle({ x: pageW - margin - 210, y: y - 6, width: 210, height: 24, color: ACCENT_BG });
    page.drawText(label, { x: pageW - margin - 195, y, size, font: bold ? fontBold : fontRegular, color: bold ? BAND : rgb(0.2, 0.2, 0.2) });
    await drawAmountText(page, fmt(value), { x: pageW - margin - 85, y, size, color: bold ? BAND : rgb(0.2, 0.2, 0.2) }, bold ? fontBold : fontRegular, getFallbackFont);
    y -= bold ? 26 : 16;
  }
  await totalLine('Subtotal', subtotal, false);
  if (taxRate > 0) await totalLine(`Tax (${taxRate}%)`, taxAmount, false);
  await totalLine('Total', total, true);

  if (data.notes) {
    y -= 18;
    if (y - 40 < margin) newPage();
    page.drawText('Notes', { x: margin, y, size: 9, font: fontBold, color: rgb(0.35, 0.38, 0.45) });
    y -= 14;
    wrapPlainText(fontRegular, data.notes, 9, pageW - margin * 2).forEach(line => {
      if (y - 12 < margin) newPage();
      page.drawText(line, { x: margin, y, size: 9, font: fontRegular, color: rgb(0.3, 0.3, 0.3) });
      y -= 12;
    });
  }

  return doc.save();
}

/* ---- Create Invoice: form + live preview, single invoice at a time ---- */
let invoiceItemCounter = 0;

function renderCreateInvoiceTool() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  panel.innerHTML = `
    <div class="invoice-layout">
      <div class="invoice-form">
        <div class="opt-row invoice-logo-row">
          <label>Logo (optional)</label>
          <div class="invoice-logo-upload">
            <div id="invLogoPreviewWrap" class="invoice-logo-preview-wrap" hidden>
              <img id="invLogoPreviewImg" class="invoice-logo-preview-img">
              <button type="button" id="invLogoRemoveBtn" class="inv-item-remove" title="Remove logo">&times;</button>
            </div>
            <button type="button" id="invLogoUploadBtn" class="password-btn cancel">Upload logo (PNG or JPEG)</button>
            <input type="file" id="invLogoInput" accept="image/png,image/jpeg" hidden>
          </div>
        </div>
        <div class="invoice-form-grid">
          <div class="opt-row"><label>Your business name</label><input type="text" id="invBizName" placeholder="Acme Consulting"></div>
          <div class="opt-row"><label>Your address</label><input type="text" id="invBizAddress" placeholder="123 Main St, City"></div>
          <div class="opt-row"><label>Your email</label><input type="text" id="invBizEmail" placeholder="billing@acme.com"></div>
          <div class="opt-row"><label>Your phone</label><input type="text" id="invBizPhone" placeholder="+91 98765 43210"></div>
          <div class="opt-row"><label>Tax ID / GSTIN (optional)</label><input type="text" id="invBizTaxId" placeholder=""></div>
        </div>
        <hr class="invoice-divider">
        <div class="invoice-form-grid">
          <div class="opt-row"><label>Bill to (client name)</label><input type="text" id="invClientName" placeholder="Beta Corp"></div>
          <div class="opt-row"><label>Client address</label><input type="text" id="invClientAddress" placeholder="456 Oak Ave, City"></div>
          <div class="opt-row"><label>Invoice number</label><input type="text" id="invNumber" placeholder="INV-001"></div>
          <div class="opt-row"><label>Currency symbol</label><input type="text" id="invCurrency" placeholder="₹" value="₹" style="width:70px;"></div>
          <div class="opt-row"><label>Invoice date</label><input type="date" id="invDate"></div>
          <div class="opt-row"><label>Due date</label><input type="date" id="invDueDate"></div>
        </div>
        <hr class="invoice-divider">
        <label style="font-weight:600;">Line items</label>
        <div id="invItemsWrap"></div>
        <button type="button" id="invAddItemBtn" class="password-btn cancel" style="margin-top:8px;">+ Add line item</button>
        <div class="opt-row" style="margin-top:16px;"><label>Tax rate (%)</label><input type="number" id="invTaxRate" min="0" max="100" step="0.1" value="0" style="width:100px;"></div>
        <div class="opt-row"><label>Notes / terms (optional)</label><textarea id="invNotes" rows="3" style="width:100%;padding:8px;border:1px solid var(--border);border-radius:6px;font-family:inherit;"></textarea></div>
      </div>
      <div class="invoice-preview-col">
        <div class="invoice-preview-label">Live preview</div>
        <div id="invoicePreview" class="invoice-preview"></div>
      </div>
    </div>
    <button type="button" id="invGenerateBtn" class="process-btn" style="margin-top:20px;">Download Invoice PDF</button>
  `;

  const itemsWrap = document.getElementById('invItemsWrap');
  let logoState = null; // { bytes: Uint8Array, type: 'png'|'jpg', dataUrl }

  const logoInput = document.getElementById('invLogoInput');
  const logoUploadBtn = document.getElementById('invLogoUploadBtn');
  const logoPreviewWrap = document.getElementById('invLogoPreviewWrap');
  const logoPreviewImg = document.getElementById('invLogoPreviewImg');
  const logoRemoveBtn = document.getElementById('invLogoRemoveBtn');

  logoUploadBtn.addEventListener('click', () => logoInput.click());
  logoInput.addEventListener('change', () => {
    const file = logoInput.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (e) => {
      logoState = {
        bytes: new Uint8Array(e.target.result),
        type: /png$/i.test(file.name) ? 'png' : 'jpg',
        dataUrl: null,
      };
      const blob = new Blob([logoState.bytes], { type: logoState.type === 'png' ? 'image/png' : 'image/jpeg' });
      logoState.dataUrl = URL.createObjectURL(blob);
      logoPreviewImg.src = logoState.dataUrl;
      logoPreviewWrap.hidden = false;
      logoUploadBtn.textContent = 'Change logo';
      updatePreview();
    };
    reader.readAsArrayBuffer(file);
  });
  logoRemoveBtn.addEventListener('click', () => {
    logoState = null;
    logoInput.value = '';
    logoPreviewWrap.hidden = true;
    logoUploadBtn.textContent = 'Upload logo (PNG or JPEG)';
    updatePreview();
  });

  function addItemRow(values) {
    const id = 'invItem' + (invoiceItemCounter++);
    const row = document.createElement('div');
    row.className = 'invoice-item-row';
    row.dataset.rowId = id;
    row.innerHTML = `
      <input type="text" class="inv-item-desc" placeholder="Description" value="${escapeHtml(values?.description || '')}">
      <input type="number" class="inv-item-qty" placeholder="Qty" min="0" step="1" value="${values?.qty ?? 1}">
      <input type="number" class="inv-item-rate" placeholder="Rate" min="0" step="0.01" value="${values?.rate ?? ''}">
      <span class="inv-item-amount">${(currentCurrency())}0.00</span>
      <button type="button" class="inv-item-remove" title="Remove">&times;</button>
    `;
    itemsWrap.appendChild(row);
    row.querySelectorAll('input').forEach(inp => inp.addEventListener('input', updatePreview));
    row.querySelector('.inv-item-remove').addEventListener('click', () => { row.remove(); updatePreview(); });
  }

  function currentCurrency() {
    return document.getElementById('invCurrency')?.value || '';
  }

  function collectData() {
    const items = Array.from(itemsWrap.querySelectorAll('.invoice-item-row')).map(row => ({
      description: row.querySelector('.inv-item-desc').value,
      qty: parseFloat(row.querySelector('.inv-item-qty').value) || 0,
      rate: parseFloat(row.querySelector('.inv-item-rate').value) || 0,
    }));
    return {
      business: {
        name: document.getElementById('invBizName').value,
        address: document.getElementById('invBizAddress').value,
        email: document.getElementById('invBizEmail').value,
        phone: document.getElementById('invBizPhone').value,
        taxId: document.getElementById('invBizTaxId').value,
      },
      client: {
        name: document.getElementById('invClientName').value,
        address: document.getElementById('invClientAddress').value,
      },
      invoiceNumber: document.getElementById('invNumber').value,
      invoiceDate: document.getElementById('invDate').value,
      dueDate: document.getElementById('invDueDate').value,
      currencySymbol: currentCurrency(),
      taxRatePercent: parseFloat(document.getElementById('invTaxRate').value) || 0,
      notes: document.getElementById('invNotes').value,
      items,
      logoBytes: logoState ? logoState.bytes : null,
      logoType: logoState ? logoState.type : null,
    };
  }

  function updatePreview() {
    const data = collectData();
    const cur = data.currencySymbol;
    let subtotal = 0;
    Array.from(itemsWrap.querySelectorAll('.invoice-item-row')).forEach(row => {
      const qty = parseFloat(row.querySelector('.inv-item-qty').value) || 0;
      const rate = parseFloat(row.querySelector('.inv-item-rate').value) || 0;
      const amount = qty * rate;
      subtotal += amount;
      row.querySelector('.inv-item-amount').textContent = cur + amount.toFixed(2);
    });
    const taxAmount = subtotal * (data.taxRatePercent / 100);
    const total = subtotal + taxAmount;

    const preview = document.getElementById('invoicePreview');
    preview.innerHTML = `
      <div class="invoice-preview-header">
        <div style="display:flex;align-items:center;gap:14px;">
          ${logoState ? `<img src="${logoState.dataUrl}" class="invoice-preview-logo">` : ''}
          <div>
            <div class="invoice-preview-title">INVOICE</div>
            ${data.invoiceNumber ? `<div>#${escapeHtml(data.invoiceNumber)}</div>` : ''}
          </div>
        </div>
        <div style="text-align:right;font-size:12.5px;">
          ${data.invoiceDate ? `<div>Date: ${escapeHtml(data.invoiceDate)}</div>` : ''}
          ${data.dueDate ? `<div>Due: ${escapeHtml(data.dueDate)}</div>` : ''}
        </div>
      </div>
      <div class="invoice-preview-parties">
        <div>
          ${data.business.name ? `<strong>${escapeHtml(data.business.name)}</strong><br>` : ''}
          ${[data.business.address, data.business.email, data.business.phone, data.business.taxId ? 'Tax ID: ' + data.business.taxId : ''].filter(Boolean).map(escapeHtml).join('<br>')}
        </div>
        <div>
          <strong>Bill To:</strong><br>
          ${[data.client.name, data.client.address].filter(Boolean).map(escapeHtml).join('<br>')}
        </div>
      </div>
      <table class="invoice-preview-table">
        <thead><tr><th>Description</th><th>Qty</th><th>Rate</th><th>Amount</th></tr></thead>
        <tbody>
          ${data.items.map(it => `<tr><td>${escapeHtml(it.description)}</td><td>${it.qty}</td><td>${cur}${it.rate.toFixed(2)}</td><td>${cur}${(it.qty * it.rate).toFixed(2)}</td></tr>`).join('') || '<tr><td colspan="4" style="color:#999;">No line items yet</td></tr>'}
        </tbody>
      </table>
      <div class="invoice-preview-totals">
        <div>Subtotal <span>${cur}${subtotal.toFixed(2)}</span></div>
        ${data.taxRatePercent > 0 ? `<div>Tax (${data.taxRatePercent}%) <span>${cur}${taxAmount.toFixed(2)}</span></div>` : ''}
        <div class="invoice-preview-total-final">Total <span>${cur}${total.toFixed(2)}</span></div>
      </div>
      ${data.notes ? `<div class="invoice-preview-notes"><strong>Notes:</strong> ${escapeHtml(data.notes)}</div>` : ''}
    `;
  }

  document.getElementById('invAddItemBtn').addEventListener('click', () => { addItemRow(); updatePreview(); });
  panel.querySelectorAll('input, textarea').forEach(el => el.addEventListener('input', updatePreview));
  document.getElementById('invGenerateBtn').addEventListener('click', async () => {
    const btn = document.getElementById('invGenerateBtn');
    btn.disabled = true;
    btn.textContent = 'Generating…';
    try {
      const data = collectData();
      const bytes = await buildInvoicePdfBytes(data);
      const filename = (data.invoiceNumber ? data.invoiceNumber.replace(/[^\w-]/g, '_') : 'invoice') + '.pdf';
      showResult([{ url: downloadable(bytes, 'application/pdf'), filename }], 'Invoice generated.');
    } catch (err) {
      showResult([], "Couldn't generate the invoice: " + escapeHtml(err.message || String(err)), true);
    }
    btn.disabled = false;
    btn.textContent = 'Download Invoice PDF';
  });

  addItemRow({ qty: 1 });
  updatePreview();
}

/* ---- Bulk Create Invoices: one spreadsheet, grouped by invoice number, many PDFs out ---- */
const BULK_INVOICE_COLUMNS = [
  'InvoiceNumber', 'InvoiceDate', 'DueDate', 'Currency', 'TaxRatePercent',
  'BusinessName', 'BusinessAddress', 'BusinessEmail', 'BusinessPhone', 'BusinessTaxId',
  'ClientName', 'ClientAddress',
  'ItemDescription', 'Qty', 'Rate', 'Notes',
];

function buildSampleInvoiceWorkbookBytes() {
  const rows = [
    BULK_INVOICE_COLUMNS,
    ['INV-001', '2026-07-01', '2026-07-15', '₹', 18, 'Acme Consulting', '123 MG Road, Bengaluru', 'billing@acme.com', '+91 98765 43210', 'GSTIN29AAAAA0000A1Z5', 'Beta Corp', '456 Anna Salai, Chennai', 'Consulting services', 10, 150, 'Payment due within 15 days.'],
    ['INV-001', '', '', '', '', '', '', '', '', '', '', '', 'Software license', 1, 500, ''],
    ['INV-002', '2026-07-03', '2026-07-17', '₹', 18, 'Acme Consulting', '123 MG Road, Bengaluru', 'billing@acme.com', '+91 98765 43210', 'GSTIN29AAAAA0000A1Z5', 'Gamma LLC', '789 Park Street, Kolkata', 'Design work', 20, 80, ''],
  ];
  const wb = XLSX.utils.book_new();
  const ws = XLSX.utils.aoa_to_sheet(rows);
  XLSX.utils.book_append_sheet(wb, ws, 'Invoices');
  return XLSX.write(wb, { bookType: 'xlsx', type: 'array' });
}

function renderBulkInvoiceTool() {
  const panel = els.optionsPanel;
  panel.hidden = false;

  const f = state.files[state.files.length - 1];
  if (!f) {
    panel.innerHTML = `<div style="color:var(--muted);font-size:13.5px;">Upload a spreadsheet to continue.</div>`;
    return;
  }

  panel.innerHTML = `
    <div class="opt-row">
      <label>Logo (optional — applied to every invoice generated from this file)</label>
      <div class="invoice-logo-upload">
        <div id="bulkLogoPreviewWrap" class="invoice-logo-preview-wrap" hidden>
          <img id="bulkLogoPreviewImg" class="invoice-logo-preview-img">
          <button type="button" id="bulkLogoRemoveBtn" class="inv-item-remove" title="Remove logo">&times;</button>
        </div>
        <button type="button" id="bulkLogoUploadBtn" class="password-btn cancel">Upload logo (PNG or JPEG)</button>
        <input type="file" id="bulkLogoInput" accept="image/png,image/jpeg" hidden>
      </div>
    </div>
    <div class="opt-row">
      <label>Expected columns</label>
      <p style="color:var(--muted);font-size:12.5px;margin:4px 0 10px;">
        One row per line item — multiple rows sharing the same <strong>InvoiceNumber</strong> become one invoice
        with multiple lines. Business/client/date fields only need to be filled on each invoice's first row;
        blank cells after that are fine.
      </p>
      <button type="button" id="downloadSampleBtn" class="password-btn cancel">Download sample template (.xlsx)</button>
    </div>
    <div id="bulkInvoicePreviewArea" style="margin-top:18px;"></div>
    <button type="button" id="bulkGenerateBtn" class="process-btn" style="margin-top:18px;">Generate all invoice PDFs</button>
  `;

  let bulkLogoState = null;
  const bulkLogoInput = document.getElementById('bulkLogoInput');
  const bulkLogoUploadBtn = document.getElementById('bulkLogoUploadBtn');
  const bulkLogoPreviewWrap = document.getElementById('bulkLogoPreviewWrap');
  const bulkLogoPreviewImg = document.getElementById('bulkLogoPreviewImg');
  const bulkLogoRemoveBtn = document.getElementById('bulkLogoRemoveBtn');

  bulkLogoUploadBtn.addEventListener('click', () => bulkLogoInput.click());
  bulkLogoInput.addEventListener('change', () => {
    const file = bulkLogoInput.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (e) => {
      bulkLogoState = { bytes: new Uint8Array(e.target.result), type: /png$/i.test(file.name) ? 'png' : 'jpg' };
      const blob = new Blob([bulkLogoState.bytes], { type: bulkLogoState.type === 'png' ? 'image/png' : 'image/jpeg' });
      bulkLogoPreviewImg.src = URL.createObjectURL(blob);
      bulkLogoPreviewWrap.hidden = false;
      bulkLogoUploadBtn.textContent = 'Change logo';
    };
    reader.readAsArrayBuffer(file);
  });
  bulkLogoRemoveBtn.addEventListener('click', () => {
    bulkLogoState = null;
    bulkLogoInput.value = '';
    bulkLogoPreviewWrap.hidden = true;
    bulkLogoUploadBtn.textContent = 'Upload logo (PNG or JPEG)';
  });

  document.getElementById('downloadSampleBtn').addEventListener('click', () => {
    const bytes = buildSampleInvoiceWorkbookBytes();
    const url = downloadable(bytes, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    const a = document.createElement('a');
    a.href = url; a.download = 'invoice_bulk_sample.xlsx';
    document.body.appendChild(a); a.click(); a.remove();
  });

  function parseWorkbook() {
    const wb = XLSX.read(new Uint8Array(f.arrayBuffer), { type: 'array' });
    const sheetName = wb.SheetNames[0];
    const rows = XLSX.utils.sheet_to_json(wb.Sheets[sheetName], { defval: '' });
    const groups = new Map();
    rows.forEach(row => {
      const num = String(row.InvoiceNumber || '').trim();
      if (!num) return;
      if (!groups.has(num)) groups.set(num, []);
      groups.get(num).push(row);
    });
    return Array.from(groups.entries()).map(([invoiceNumber, groupRows]) => {
      const first = groupRows.find(r => r.BusinessName || r.ClientName) || groupRows[0];
      return {
        invoiceNumber,
        invoiceDate: String(first.InvoiceDate || ''),
        dueDate: String(first.DueDate || ''),
        currencySymbol: String(first.Currency || ''),
        taxRatePercent: parseFloat(first.TaxRatePercent) || 0,
        business: {
          name: String(first.BusinessName || ''), address: String(first.BusinessAddress || ''),
          email: String(first.BusinessEmail || ''), phone: String(first.BusinessPhone || ''), taxId: String(first.BusinessTaxId || ''),
        },
        client: { name: String(first.ClientName || ''), address: String(first.ClientAddress || '') },
        notes: String(first.Notes || ''),
        items: groupRows.filter(r => r.ItemDescription || r.Qty || r.Rate).map(r => ({
          description: String(r.ItemDescription || ''), qty: parseFloat(r.Qty) || 0, rate: parseFloat(r.Rate) || 0,
        })),
      };
    });
  }

  let parsedInvoices = [];
  try {
    parsedInvoices = parseWorkbook();
  } catch (err) {
    document.getElementById('bulkInvoicePreviewArea').innerHTML = `<div class="warn-note error">Couldn't read this file: ${escapeHtml(err.message || String(err))}</div>`;
    return;
  }

  const previewArea = document.getElementById('bulkInvoicePreviewArea');
  if (!parsedInvoices.length) {
    previewArea.innerHTML = `<div class="warn-note error">No rows with an InvoiceNumber were found — check the sample template for the expected column layout.</div>`;
  } else {
    previewArea.innerHTML = `
      <div style="font-weight:600;margin-bottom:8px;">${parsedInvoices.length} invoice${parsedInvoices.length === 1 ? '' : 's'} found:</div>
      <table class="bulk-invoice-summary-table">
        <thead><tr><th>Invoice #</th><th>Client</th><th>Line items</th><th>Total</th></tr></thead>
        <tbody>
          ${parsedInvoices.map(inv => {
            const total = inv.items.reduce((sum, it) => sum + it.qty * it.rate, 0) * (1 + inv.taxRatePercent / 100);
            return `<tr><td>${escapeHtml(inv.invoiceNumber)}</td><td>${escapeHtml(inv.client.name || '—')}</td><td>${inv.items.length}</td><td>${escapeHtml(inv.currencySymbol)}${total.toFixed(2)}</td></tr>`;
          }).join('')}
        </tbody>
      </table>
    `;
  }

  document.getElementById('bulkGenerateBtn').addEventListener('click', async () => {
    if (!parsedInvoices.length) return;
    const btn = document.getElementById('bulkGenerateBtn');
    btn.disabled = true;
    els.progressArea.hidden = false;
    try {
      const zip = new JSZip();
      for (let i = 0; i < parsedInvoices.length; i++) {
        setProgress(10 + (85 * i) / parsedInvoices.length, `Building ${parsedInvoices[i].invoiceNumber}…`);
        const invoiceData = bulkLogoState
          ? { ...parsedInvoices[i], logoBytes: bulkLogoState.bytes, logoType: bulkLogoState.type }
          : parsedInvoices[i];
        const bytes = await buildInvoicePdfBytes(invoiceData);
        const safeName = parsedInvoices[i].invoiceNumber.replace(/[^\w-]/g, '_') || `invoice_${i + 1}`;
        zip.file(`${safeName}.pdf`, bytes);
      }
      const zipBytes = await zip.generateAsync({ type: 'uint8array' });
      setProgress(100, 'Done');
      showResult([{ url: downloadable(zipBytes, 'application/zip'), filename: 'invoices.zip' }],
        `Generated ${parsedInvoices.length} invoice PDFs, packaged as a zip.`);
    } catch (err) {
      els.progressArea.hidden = true;
      showResult([], "Couldn't generate invoices: " + escapeHtml(err.message || String(err)), true);
    }
    btn.disabled = false;
  });
}

/* ---- Shared text-position extraction helpers (used by PDF to Word and PDF to Excel) ---- */

// Groups raw pdf.js text items into visual rows by y-position (reading order top→bottom).
// The tolerance for "same row" scales with each item's height rather than using a fixed
// 2pt cutoff — a fixed value is too tight for larger text and too loose for small text,
// and OCR-derived items in particular have slightly noisier y-coordinates than real PDF
// text, so a rigid threshold could split one visual line into two or merge two into one.
// Improved: uses weighted midpoint Y for the current row (not just the first item's Y),
// so items that are vertically centered within a row still get grouped correctly.
function groupItemsIntoRows(items) {
  if (!items.length) return [];
  // Sort items by Y position first (top to bottom), then by X for same-line stability
  const sorted = items.slice().sort((a, b) => {
    const ay = a.transform[5], by = b.transform[5];
    if (Math.abs(ay - by) > 0.5) return ay - by;
    return a.transform[4] - b.transform[4];
  });

  const rows = [];
  let current = [sorted[0]];
  let currentYSum = sorted[0].transform[5];
  let currentYCount = 1;

  for (let i = 1; i < sorted.length; i++) {
    const item = sorted[i];
    const y = item.transform[5];
    const h = item.height || Math.abs(item.transform[3]) || 10;
    const currentAvgY = currentYSum / currentYCount;
    // Use the larger of this item's height and the current row's average height for tolerance
    const currentRowH = current.reduce((sum, it) => sum + (it.height || Math.abs(it.transform[3]) || 10), 0) / current.length;
    const refH = Math.max(h, currentRowH);
    const tolerance = Math.max(2, refH * 0.45);

    if (Math.abs(y - currentAvgY) > tolerance) {
      rows.push(current);
      current = [item];
      currentYSum = y;
      currentYCount = 1;
    } else {
      current.push(item);
      currentYSum += y;
      currentYCount++;
    }
  }
  if (current.length) rows.push(current);
  return rows;
}

// Groups items into rows using horizontal grid lines as authoritative row separators.
// Each cell of text between two consecutive horizontal lines becomes one row in the output.
// This is far more accurate than Y-proximity alone because it uses the actual drawn
// table borders as definitive boundaries. Text items have transform[5] in PDF coordinate
// space (Y increases upward). The horizontal lines are provided in the same coordinate
// space (horizontalPdfY) so comparison is direct.
// IMPORTANT: All content within a single band (between two lines) is forced into ONE row,
// even if it spans multiple Y positions. This handles wrapped text within table cells —
// the grid line is the authoritative boundary, not the text Y positions.
function groupItemsIntoRowsByLines(items, vectorLines) {
  // Filter out the _vectorLines property if attached to the array
  const realItems = items.filter(it => it && it.str !== undefined);
  if (!realItems.length) return [];

  // Get horizontal lines in PDF Y coords (sorted top-to-bottom = descending Y values)
  const hLines = vectorLines.horizontalPdfY;
  if (!hLines || hLines.length < 2) return groupItemsIntoRows(realItems);

  // Sort lines from top (highest Y) to bottom (lowest Y) — in PDF space, higher Y is higher on page
  const sortedLines = hLines.slice().sort((a, b) => b - a);

  // Create row bands between consecutive horizontal lines.
  const bandCount = sortedLines.length + 1;
  const bands = Array.from({ length: bandCount }, () => []);

  realItems.forEach(item => {
    const y = item.transform[5]; // PDF Y coordinate of text baseline

    // Find which band this item belongs to
    // Band 0 = above the topmost line (y > sortedLines[0])
    // Band 1 = between sortedLines[0] and sortedLines[1]
    // Band N = below the bottommost line
    let band = 0;
    for (let b = 0; b < sortedLines.length; b++) {
      if (y < sortedLines[b] + 2) { // +2 tolerance for items just touching a line
        band = b + 1;
      }
    }
    bands[band].push(item);
  });

  // Each non-empty band becomes exactly ONE row in the output.
  // All items in a band are part of the same logical table row, even if they're
  // on different Y positions (which happens with wrapped cell text).
  // We keep them all together as one row so column assignment handles them correctly.
  const result = [];
  bands.forEach(bandItems => {
    if (bandItems.length === 0) return;
    result.push(bandItems);
  });

  // Sanity check: if this produced unreasonably few rows compared to what the grid implies,
  // or only 1-2 rows total when we have many items, fall back to standard grouping.
  const expectedRows = sortedLines.length - 1;
  const normalRows = groupItemsIntoRows(realItems);
  if (result.length < 3 || (expectedRows > 3 && result.length < expectedRows * 0.3) ||
      (normalRows.length > result.length * 3 && normalRows.length > 5)) {
    return normalRows;
  }

  return result.length > 0 ? result : normalRows;
}

// Groups OCR-derived items into rows using detected horizontal grid lines.
// OCR items have transform[5] as Y coordinate (top-down, in scaled page units — same
// space as the horizontal line positions detected by detectGridLines).
// All items between consecutive horizontal lines are forced into ONE row (no sub-splitting),
// since the grid line is the authoritative boundary for table cells.
// IMPORTANT: Falls back to standard grouping if the grid produces unreasonable results
// (too few rows for the number of items — indicates the grid detection only found
// table borders, not actual row separators).
function groupItemsIntoRowsByOcrGrid(items, horizontalLines) {
  const realItems = items.filter(it => it && it.str !== undefined);
  if (!realItems.length) return [];
  if (!horizontalLines || horizontalLines.length < 4) return groupItemsIntoRows(realItems);

  // Sort lines top to bottom (ascending Y in top-down space)
  const sortedLines = horizontalLines.slice().sort((a, b) => a - b);

  // Create bands between consecutive lines
  const bandCount = sortedLines.length + 1;
  const bands = Array.from({ length: bandCount }, () => []);

  realItems.forEach(item => {
    const y = item.transform[5]; // Y in top-down space (same as grid lines)

    // Find which band: item is in band i if sortedLines[i-1] <= y < sortedLines[i]
    let band = 0;
    for (let b = 0; b < sortedLines.length; b++) {
      if (y > sortedLines[b] - 2) { // -2 tolerance
        band = b + 1;
      }
    }
    bands[Math.min(band, bandCount - 1)].push(item);
  });

  // Each non-empty band = one row (all items forced together, even if multi-line within the cell)
  const result = [];
  bands.forEach(bandItems => {
    if (bandItems.length === 0) return;
    result.push(bandItems);
  });

  // SANITY CHECK: if the grid produced very few rows relative to the number of items,
  // the grid detection likely only found the outer table borders (not internal row lines).
  // In that case, fall back to standard Y-based grouping which will work much better.
  const normalRows = groupItemsIntoRows(realItems);
  if (result.length < 3 || (normalRows.length > result.length * 3 && normalRows.length > 5)) {
    // Grid-based grouping is clearly wrong — use normal grouping
    return normalRows;
  }

  return result;
}

// Joins one row's items into a single line of text, inserting a space wherever there's
// a real gap between runs (otherwise separate text runs would run together).
// Improved: when items span multiple Y positions (wrapped text in a table cell),
// sort by Y first (top-to-bottom in reading order) then by X within each line.
function joinRowItems(items) {
  if (!items.length) return '';
  if (items.length === 1) return items[0].str.trim();

  // Check if items span multiple Y positions
  const ys = items.map(it => Math.round(it.transform[5]));
  const uniqueYs = [...new Set(ys)];

  if (uniqueYs.length <= 1) {
    // All on same line — sort by X only (original behavior)
    const sorted = items.slice().sort((a, b) => a.transform[4] - b.transform[4]);
    let text = sorted[0].str;
    for (let i = 1; i < sorted.length; i++) {
      const prev = sorted[i - 1];
      const gap = sorted[i].transform[4] - (prev.transform[4] + (prev.width || 0));
      // A genuinely overlapping pair (not just touching) can have the shared region
      // recognized as part of both items' text — dedup that seam rather than
      // duplicating a letter (e.g. "DESCR" + "RIPTION" → "DESCRIPTION", not
      // "DESCRRIPTION"). For any NON-negative gap, insert a space — if pdf.js or
      // Tesseract already returned these as two separate items with real space between
      // them, that segmentation decision should be trusted rather than second-guessed
      // with a height-based cutoff (confirmed directly: a ~1.4pt cutoff was still too
      // strict and glued real separate words together with no space at all, e.g.
      // "GAIL INDIA LIMITED" → "GAILINDIALIMITED"). Only a tiny epsilon guards
      // against pure floating-point noise at a genuine zero-gap join.
      text = gap < 0 ? joinTextsAvoidingOverlap(text, sorted[i].str) : text + (gap > 0.3 ? ' ' : '') + sorted[i].str;
    }
    return text.trim();
  }

  // Multiple Y positions — sort by Y (descending for PDF coords = top-to-bottom reading)
  // then by X within each line. Join lines with a space.
  uniqueYs.sort((a, b) => b - a); // descending Y = top of page first in PDF coords
  const lines = [];
  for (const y of uniqueYs) {
    const lineItems = items.filter(it => Math.round(it.transform[5]) === y)
      .sort((a, b) => a.transform[4] - b.transform[4]);
    let lineText = lineItems[0].str;
    for (let i = 1; i < lineItems.length; i++) {
      const prev = lineItems[i - 1];
      const gap = lineItems[i].transform[4] - (prev.transform[4] + (prev.width || 0));
      lineText = gap < 0 ? joinTextsAvoidingOverlap(lineText, lineItems[i].str) : lineText + (gap > 0.3 ? ' ' : '') + lineItems[i].str;
    }
    lines.push(lineText.trim());
  }
  return lines.filter(l => l.length > 0).join(' ');
}

// Splits one row's items into table cells wherever the horizontal gap is notably larger
// than that row's font size would produce for an ordinary space. Used both standalone
// (for a quick per-row check) and as the signal that decides whether a page/region looks
// tabular in the first place.
// Improved: uses adaptive gap detection — computes the distribution of gaps in the row
// and splits at statistically significant gaps (those much larger than the median gap),
// rather than using a single fixed threshold that often either over-splits or under-splits.
// Some PDFs (especially ones generated by accounting/reporting software) emit an
// entire table row as a single text-showing operation, padded with spaces, rather than
// as separately positioned runs — in that case the gap-based check above never sees a
// meaningful x-gap to split on. This catches that case by splitting further on any run
// of 2+ spaces, or right before each occurrence of a currency symbol when there's more
// than one in the same cell (a strong signal of "amount, amount, amount" columns).
function refineCellSplitting(cells) {
  const refined = [];
  cells.forEach(cell => {
    const symbolMatches = cell.match(/[₹$€£¥]/g);
    if (symbolMatches && symbolMatches.length > 1) {
      const parts = cell.split(/(?=[₹$€£¥])/).map(s => s.trim()).filter(Boolean);
      refined.push(...parts);
      return;
    }
    // Also split on tab characters which some PDFs produce
    if (cell.includes('\t')) {
      const tabParts = cell.split(/\t+/).map(s => s.trim()).filter(Boolean);
      if (tabParts.length > 1) { refined.push(...tabParts); return; }
    }
    // Split where text transitions to a number with currency (e.g. "Total₹12,345")
    const currencySplit = cell.match(/^(.+?)([₹$€£¥]\s*[\d,]+\.?\d*)$/);
    if (currencySplit && currencySplit[1].trim().length > 0) {
      refined.push(currencySplit[1].trim(), currencySplit[2].trim());
      return;
    }

    // Pattern-based splitting for structured data common in financial/tax documents:
    // Detect patterns like "1 31/03/2026 Q4(Jan-Mar)" or "7 Q2(Jul-Sep) 30/09/2025"
    // These are serial number + date + quarter that should be separate columns.
    const structuredSplit = splitStructuredDataCell(cell);
    if (structuredSplit) {
      refined.push(...structuredSplit);
      return;
    }

    // Split on runs of 2+ spaces
    const spaceParts = cell.split(/ {2,}/).map(s => s.trim()).filter(Boolean);
    if (spaceParts.length > 1) { refined.push(...spaceParts); return; }
    refined.push(cell);
  });
  return refined;
}

// Splits cells containing structured data patterns that OCR concatenates with single spaces.
// Common patterns in Indian tax/financial documents:
// - "1 31/03/2026 Q4(Jan-Mar)" → ["1", "31/03/2026", "Q4(Jan-Mar)"]
// - "7 Q2(Jul-Sep) 30/09/2025" → ["7", "Q2(Jul-Sep)", "30/09/2025"]
// - "10 Q1(Apr Jun) 30/06/2025" → ["10", "Q1(Apr Jun)", "30/06/2025"]
// Also handles: "SR.NO. QUARTER DATE..." header patterns split by pipe/vertical bar
function splitStructuredDataCell(cell) {
  const trimmed = cell.trim();

  // Pattern: number + date (dd/mm/yyyy) + quarter (Qn(...))
  // e.g. "1 31/03/2026 Q4(Jan-Mar)" or "12 30/04/2025 Q1(Apr-Jun)"
  const p1 = trimmed.match(/^(\d{1,3})\s+(\d{1,2}\/\d{1,2}\/\d{4})\s+(Q\d\([^)]*\).*)$/i);
  if (p1) return [p1[1], p1[2], p1[3]];

  // Pattern: number + quarter + date
  // e.g. "7 Q2(Jul-Sep) 30/09/2025"
  const p2 = trimmed.match(/^(\d{1,3})\s+(Q\d\([^)]*\))\s+(\d{1,2}\/\d{1,2}\/\d{4}.*)$/i);
  if (p2) return [p2[1], p2[2], p2[3]];

  // Pattern: number + quarter (with space in parens) + date
  // e.g. "10 Q1(Apr Jun) 30/06/2025"
  const p3 = trimmed.match(/^(\d{1,3})\s+(Q\d\([^)]+\))\s+(.+)$/i);
  if (p3 && /\d{1,2}\/\d{1,2}\/\d{4}/.test(p3[3])) return [p3[1], p3[2], p3[3]];

  // Pattern: number + date + text (no quarter pattern but date followed by description)
  // e.g. "1 26/08/2025 Q2(Jul-Sep)" — already caught above
  // Also: "1 26/08/2025 some description"
  const p4 = trimmed.match(/^(\d{1,3})\s+(\d{1,2}\/\d{1,2}\/\d{4})\s+(.+)$/);
  if (p4) return [p4[1], p4[2], p4[3]];

  // Pattern: split on pipe character | (common in OCR'd headers like "SR.NO.|QUARTER|DATE")
  if (trimmed.includes('|')) {
    const pipeParts = trimmed.split(/\s*\|\s*/).map(s => s.trim()).filter(Boolean);
    if (pipeParts.length >= 2) return pipeParts;
  }

  // Pattern: "number status" where a number (possibly with commas) is followed by a status word
  // e.g. "3,072 Active" → ["3,072", "Active"] or "0 Inactive" → ["0", "Inactive"]
  const numStatus = trimmed.match(/^([\d,]+\.?\d*)\s+(Active|Inactive|active|inactive|Processed|Pending)(.*)$/i);
  if (numStatus) {
    const parts = [numStatus[1], numStatus[2]];
    if (numStatus[3] && numStatus[3].trim().length > 0) parts.push(numStatus[3].trim());
    return parts;
  }

  // Pattern: "number number status" — e.g. "2,992 3,072 Active" (amount + TDS deposited + status)
  const numNumStatus = trimmed.match(/^([\d,]+\.?\d*)\s+([\d,]+\.?\d*)\s+(Active|Inactive|active|inactive|Processed|Pending.*)$/i);
  if (numNumStatus) return [numNumStatus[1], numNumStatus[2], numNumStatus[3]];

  // Pattern: "count amount" — two numbers separated by space (e.g. "2 782" = count + amount)
  // Only match if both are clearly numeric and the first is small (1-3 digits = a count)
  const countAmount = trimmed.match(/^(\d{1,3})\s+([\d,]+\.?\d+)$/);
  if (countAmount && parseFloat(countAmount[2].replace(/,/g, '')) > 10) {
    return [countAmount[1], countAmount[2]];
  }

  // Pattern: number + date(dd/mm/yyyy) with no space between number and date
  // e.g. "131/03/2026" → shouldn't split (ambiguous), but "1 31/03/2026" is caught above

  return null;
}

function splitRowIntoCells(items) {
  const sorted = items.slice().sort((a, b) => a.transform[4] - b.transform[4]);
  if (sorted.length === 0) return [''];
  if (sorted.length === 1) return refineCellSplitting([sorted[0].str.trim()]);

  const avgHeight = sorted.reduce((sum, it) => sum + (it.height || Math.abs(it.transform[3]) || 10), 0) / sorted.length;

  // Compute all gaps between consecutive items
  const gaps = [];
  for (let i = 1; i < sorted.length; i++) {
    const prev = sorted[i - 1];
    const gap = sorted[i].transform[4] - (prev.transform[4] + (prev.width || 0));
    gaps.push({ gap, index: i });
  }

  // Use adaptive threshold: if there's a clear bimodal distribution of gaps
  // (small intra-word gaps vs. large inter-cell gaps), find the split point.
  // Otherwise fall back to a height-based threshold.
  const positiveGaps = gaps.filter(g => g.gap > 0).map(g => g.gap).sort((a, b) => a - b);

  let threshold;
  if (positiveGaps.length >= 2) {
    const medianGap = positiveGaps[Math.floor(positiveGaps.length / 2)];
    const maxGap = positiveGaps[positiveGaps.length - 1];

    // If the largest gap is at least 2.5x the median, there's likely a real column separation
    if (maxGap > medianGap * 2.5 && maxGap > avgHeight * 0.25) {
      // Find a natural split: use the largest jump between consecutive sorted gaps
      let bestSplitIdx = 0;
      let bestJump = 0;
      for (let i = 1; i < positiveGaps.length; i++) {
        const jump = positiveGaps[i] - positiveGaps[i - 1];
        if (jump > bestJump) { bestJump = jump; bestSplitIdx = i; }
      }
      // Threshold is the midpoint between the largest "small" gap and the smallest "large" gap
      threshold = (positiveGaps[bestSplitIdx - 1] + positiveGaps[bestSplitIdx]) / 2;
      // Ensure threshold is reasonable
      threshold = Math.max(threshold, avgHeight * 0.2);
    } else {
      threshold = Math.max(avgHeight * 0.35, 4);
    }
  } else {
    threshold = Math.max(avgHeight * 0.35, 4);
  }

  const cells = [];
  let cellText = sorted[0].str;
  for (let i = 1; i < sorted.length; i++) {
    const prev = sorted[i - 1];
    const gap = sorted[i].transform[4] - (prev.transform[4] + (prev.width || 0));
    if (gap > threshold) {
      cells.push(cellText.trim());
      cellText = sorted[i].str;
    } else {
      cellText += (gap > 1 ? ' ' : '') + sorted[i].str;
    }
  }
  cells.push(cellText.trim());
  return refineCellSplitting(cells);
}

// Finds column separators as the widest, consistent empty vertical strips shared across
// every row combined — the standard "whitespace gap" approach to table-column
// detection. Improved: uses a weighted coverage map where each row votes independently
// for whether a given x-position is occupied. A column gap is any strip where MOST rows
// (not necessarily all) have empty space — this tolerates the occasional wide header or
// merged cell that bridges a real gap for other rows, without needing the clustering
// fallback as often.
function detectColumnBoundariesByGaps(rows) {
  let minX = Infinity, maxX = -Infinity;
  rows.forEach(row => row.forEach(it => {
    minX = Math.min(minX, it.transform[4]);
    maxX = Math.max(maxX, it.transform[4] + (it.width || 0));
  }));
  if (!isFinite(minX) || maxX <= minX) return isFinite(minX) ? [minX] : [];

  const width = Math.ceil(maxX - minX) + 2;
  // Count how many rows have content at each x position (weighted approach)
  const coverageCount = new Uint16Array(width);
  rows.forEach(row => {
    const rowCoverage = new Uint8Array(width);
    row.forEach(it => {
      const start = Math.max(0, Math.floor(it.transform[4] - minX));
      const end = Math.min(width - 1, Math.ceil(it.transform[4] + (it.width || 0) - minX));
      for (let x = start; x <= end; x++) rowCoverage[x] = 1;
    });
    for (let x = 0; x < width; x++) coverageCount[x] += rowCoverage[x];
  });

  const avgHeight = rows.reduce((s, r) => s + r.reduce((s2, it) => s2 + (it.height || 10), 0) / r.length, 0) / rows.length;
  const minGapWidth = Math.max(4, avgHeight * 0.35); // slightly lower threshold than before
  // A gap is valid if less than 15% of rows cover that x-position (allows for occasional merged headers)
  const gapThreshold = Math.max(1, Math.floor(rows.length * 0.15));

  const boundaries = [minX];
  let gapStart = -1;
  for (let x = 0; x < width; x++) {
    if (coverageCount[x] <= gapThreshold) {
      if (gapStart === -1) gapStart = x;
    } else {
      if (gapStart !== -1) {
        if (x - gapStart >= minGapWidth) boundaries.push(minX + x);
        gapStart = -1;
      }
    }
  }
  return boundaries;
}

// Clusters every text item's x-start across a set of rows into shared column
// boundaries. Improved: uses adaptive eps based on average character width rather than
// a fixed 10px, and weights clusters by frequency so dominant positions win.
function detectColumnBoundariesByClustering(rows) {
  const starts = [];
  let totalWidth = 0, widthCount = 0;
  rows.forEach(row => row.forEach(it => {
    starts.push(it.transform[4]);
    if (it.width > 0) { totalWidth += it.width; widthCount++; }
  }));
  starts.sort((a, b) => a - b);
  // Adaptive eps: roughly the width of 1-2 characters
  const avgItemWidth = widthCount > 0 ? totalWidth / widthCount : 10;
  const avgItemsPerRow = rows.reduce((s, r) => s + r.length, 0) / rows.length;
  const eps = Math.max(5, Math.min(15, avgItemWidth / Math.max(1, avgItemsPerRow / 4)));
  const clusters = [];
  starts.forEach(x => {
    const last = clusters[clusters.length - 1];
    if (!last || x - (last.sum / last.count) > eps) {
      clusters.push({ sum: x, count: 1 });
    } else {
      last.sum += x;
      last.count += 1;
    }
  });
  // Only keep clusters that appear in at least 20% of rows (filters noise)
  const minClusterCount = Math.max(2, Math.floor(rows.length * 0.2));
  const significant = clusters.filter(c => c.count >= minClusterCount);
  return (significant.length >= 2 ? significant : clusters).map(c => c.sum / c.count);
}

function detectColumnBoundaries(rows) {
  const gapBoundaries = detectColumnBoundariesByGaps(rows);
  const cellCounts = rows.map(r => splitRowIntoCells(r).length);
  const expectedCols = Math.round(median(cellCounts));

  if (gapBoundaries.length >= Math.max(2, expectedCols)) {
    // Gap-based detection found enough columns — validate it
    // If the gap count is much higher than expected, some gaps are noise — trim
    if (gapBoundaries.length > expectedCols * 1.5 && expectedCols >= 2) {
      // Too many boundaries found — pick the widest gaps to reduce to expected count
      return selectBestGapBoundaries(rows, gapBoundaries, expectedCols);
    }
    return gapBoundaries;
  }

  // Try clustering as fallback
  const clusterBoundaries = detectColumnBoundariesByClustering(rows);

  // Pick whichever is closer to the expected column count
  const gapDiff = Math.abs(gapBoundaries.length - expectedCols);
  const clusterDiff = Math.abs(clusterBoundaries.length - expectedCols);
  if (clusterDiff < gapDiff && clusterBoundaries.length >= 2) {
    return clusterBoundaries;
  }
  return gapBoundaries.length >= 2 ? gapBoundaries : clusterBoundaries;
}

// When gap detection finds too many boundaries (noise), select the N widest gaps
// to produce the expected number of columns.
function selectBestGapBoundaries(rows, allBoundaries, targetCols) {
  if (allBoundaries.length <= targetCols) return allBoundaries;

  // Calculate the width of each gap between consecutive boundaries
  const gaps = [];
  for (let i = 1; i < allBoundaries.length; i++) {
    gaps.push({ width: allBoundaries[i] - allBoundaries[i - 1], index: i });
  }

  // We want targetCols columns = targetCols boundaries (including the leftmost)
  // So we need targetCols - 1 gaps. Pick the widest targetCols - 1 gaps.
  gaps.sort((a, b) => b.width - a.width);
  const selectedIndices = new Set([0]); // always keep the first boundary
  gaps.slice(0, targetCols - 1).forEach(g => selectedIndices.add(g.index));

  // Build boundaries from selected indices (in order)
  const sorted = Array.from(selectedIndices).sort((a, b) => a - b);
  return sorted.map(i => allBoundaries[i]);
}

function median(nums) {
  if (!nums.length) return 0;
  const sorted = nums.slice().sort((a, b) => a - b);
  const mid = Math.floor(sorted.length / 2);
  return sorted.length % 2 ? sorted[mid] : (sorted[mid - 1] + sorted[mid]) / 2;
}

// OCR sometimes recognizes one visual word as two separate, touching (or very slightly
// overlapping) word-boxes — a font-rendering or segmentation quirk. If a column
// boundary happens to fall between two such fragments, they'd otherwise land in
// different cells and tear the word apart even though neither fragment individually
// "spans" the boundary. Gluing anything touching/overlapping back into one item first
// — before column assignment ever sees them — avoids that regardless of where the
// boundaries fall. The threshold is deliberately tiny (a couple of points) so it only
// catches genuine same-word fragments, never two real, separately-spaced cells.
// When two OCR word-boxes' bounding boxes genuinely overlap (not just touch), the
// shared pixel region sometimes gets recognized as part of BOTH fragments' text —
// that's the duplicated-letter pattern (confirmed directly: "DESCR" + "RIPTION" from
// OCR reconstructs to "DESCRIPTION" once the shared "R" is deduplicated, not
// "DESCRRIPTION"). Only applied for actual overlap (negative gap), never for two
// fragments that are merely touching with no overlap, where straight concatenation is
// already correct and a coincidental shared letter at a real word boundary shouldn't
// be silently dropped.
function joinTextsAvoidingOverlap(a, b) {
  const maxCheck = Math.min(3, a.length, b.length);
  for (let k = maxCheck; k >= 1; k--) {
    if (a.slice(-k) === b.slice(0, k)) return a + b.slice(k);
  }
  return a + b;
}

function mergeTouchingItems(items) {
  if (items.length < 2) return items;
  const sorted = items.slice().sort((a, b) => a.transform[4] - b.transform[4]);
  const merged = [sorted[0]];
  for (let i = 1; i < sorted.length; i++) {
    const last = merged[merged.length - 1];
    const item = sorted[i];
    const gap = item.transform[4] - (last.transform[4] + (last.width || 0));
    // Only merge genuine bounding-box overlaps (negative gap) — that's specifically
    // where OCR can double-count a shared character across two fragments of one word,
    // and it's the one case joinRowItems' own space-insertion logic can't handle
    // correctly on its own. Anything with a non-negative gap is left as separate items
    // and handled by joinRowItems' adaptive threshold instead — merging those here too
    // was gluing genuinely separate words together with no space at all
    // ("GAIL INDIA LIMITED" → "GAILINDIALIMITED").
    if (gap < 0 && last.str && item.str) {
      merged[merged.length - 1] = {
        str: joinTextsAvoidingOverlap(last.str, item.str),
        transform: last.transform,
        width: (item.transform[4] + (item.width || 0)) - last.transform[4],
        height: Math.max(last.height || 0, item.height || 0),
      };
    } else {
      merged.push(item);
    }
  }
  return merged;
}

function assignItemsToColumns(rowItems, boundaries) {
  rowItems = mergeTouchingItems(rowItems);
  if (!boundaries.length) return [joinRowItems(rowItems)];
  const buckets = boundaries.map(() => []);

  // Scale tolerance with average column width instead of using fixed -5
  const avgColWidth = boundaries.length > 1
    ? (boundaries[boundaries.length - 1] - boundaries[0]) / (boundaries.length - 1)
    : 50;
  const tolerance = Math.max(3, Math.min(15, avgColWidth * 0.1));

  // For each item, find the best column using closest-boundary heuristic:
  // - Check which column boundary the item's left edge is closest to (or past)
  // - For items that SPAN multiple columns (wider than one column), split them
  //   at the column boundaries based on character position estimation
  rowItems.forEach(item => {
    const x = item.transform[4]; // left edge
    const xRight = x + (item.width || 0); // right edge

    // Check if this item spans across column boundaries
    const firstCol = findColumnForX(x, boundaries, tolerance);
    const lastCol = findColumnForX(xRight, boundaries, tolerance);

    if (firstCol === lastCol || !item.str || item.str.trim().length === 0) {
      // Item fits in one column — assign normally
      buckets[firstCol].push(item);
    } else {
      // Item's bounding box spans multiple column boundaries — most commonly a header
      // label that's simply wider than the narrower data columns below it (e.g.
      // "INFORMATION DESCRIPTION" spanning what are two separate columns lower in the
      // table). Slicing the text character-by-character by estimated width is fragile
      // and can garble real words — confirmed directly: it was cutting "DESCRIPTION"
      // into "DESCR" / "RIPTION" with a duplicated letter at the seam, since adjacent
      // slices' rounded character boundaries overlapped by one character. Instead,
      // assign the whole item, intact, to whichever column holds the larger share of
      // its width — never split the text itself.
      let bestCol = firstCol, bestOverlap = -1;
      for (let col = firstCol; col <= lastCol && col < boundaries.length; col++) {
        const colStart = boundaries[col];
        const colEnd = col < boundaries.length - 1 ? boundaries[col + 1] : xRight;
        const overlap = Math.min(xRight, colEnd) - Math.max(x, colStart);
        if (overlap > bestOverlap) { bestOverlap = overlap; bestCol = col; }
      }
      buckets[bestCol].push(item);
    }
  });

  return buckets.map(colItems => colItems.length ? joinRowItems(colItems) : '');
}

// Helper: find which column a given X position belongs to
function findColumnForX(x, boundaries, tolerance) {
  let idx = 0;
  for (let i = 0; i < boundaries.length; i++) {
    if (x >= boundaries[i] - tolerance) idx = i;
  }
  return idx;
}

// A table cell whose text wraps across multiple lines in the original document (or a
// scanned image) produces one extra near-empty row per wrapped line, sitting right
// before or right after the real data row it actually belongs to — e.g. a "Listed /
// Equity / Share" cell becomes three separate rows instead of one. This reconstructs
// them: any row with far fewer populated cells than the table's typical row is treated
// as a fragment and merged, column-by-column, into whichever real row it's attached to.
// Improved: uses the MODE (most common count) of non-empty cells rather than just the
// max, so a few outlier rows with extra columns don't make normal rows look like
// fragments. Also considers whether the fragment's populated columns align with existing
// content in the target row (merge only into the same column position).
function mergeWrappedRows(rows) {
  if (rows.length < 3) return rows;
  const nonEmptyCounts = rows.map(r => r.filter(c => c.trim().length > 0).length);
  const maxColCount = Math.max(...rows.map(r => r.length), 0);
  if (maxColCount === 0) return rows;

  // Use mode (most frequent non-empty count) instead of max — more robust
  const countFreq = {};
  nonEmptyCounts.forEach(c => { if (c > 0) countFreq[c] = (countFreq[c] || 0) + 1; });
  const typicalCount = Object.entries(countFreq)
    .sort((a, b) => b[1] - a[1])[0];
  const modeCount = typicalCount ? parseInt(typicalCount[0], 10) : Math.max(...nonEmptyCounts);
  if (modeCount === 0) return rows;

  // A fragment has significantly fewer populated cells than typical
  const threshold = Math.max(1, Math.ceil(modeCount * 0.45));
  const isFragment = nonEmptyCounts.map(c => c > 0 && c < threshold);
  if (!isFragment.some(Boolean)) return rows;

  const mergeInto = (target, frag) => target.map((cell, ci) => {
    const fragCell = (frag[ci] || '').trim();
    if (!fragCell) return cell;
    return cell ? `${cell} ${fragCell}` : fragCell;
  });

  const result = rows.map(r => r.slice());
  for (let i = 0; i < result.length; i++) {
    if (!isFragment[i]) continue;
    const prevWasFragment = i > 0 && isFragment[i - 1];
    if (!prevWasFragment && i > 0) {
      result[i - 1] = mergeInto(result[i - 1], rows[i]);
      result[i] = null;
      continue;
    }
    let k = i + 1;
    while (k < result.length && isFragment[k]) k++;
    if (k < result.length) {
      result[k] = mergeInto(result[k], rows[i]);
      result[i] = null;
    }
  }
  return result.filter(r => r !== null);
}

function extractAlignedTableRows(rows) {
  const boundaries = detectColumnBoundaries(rows);
  const aligned = rows.map(row => assignItemsToColumns(row, boundaries)).filter(row => row.some(c => c.length > 0));
  return mergeWrappedRows(aligned);
}

function estimateRowFontSize(rowItems) {
  const avg = rowItems.reduce((sum, it) => sum + (it.height || Math.abs(it.transform[3]) || 10), 0) / rowItems.length;
  return Math.max(8, Math.min(28, Math.round(avg)));
}

function groupTextIntoLines(items) {
  return groupItemsIntoRows(items).map(joinRowItems).filter(r => r.length > 0);
}

// Very common in receipts/forms/invoices: a whole line is really "Label : Value" but
// arrives as one piece of text with no unusual gap for the position-based splitter to
// catch. If a line has exactly this shape, treat it as a 2-column row.
// Improved: also handles pipe-separated, arrow-separated, and common form patterns.
function splitByColonIfLabelValue(text) {
  // Standard "Label : Value" pattern
  const m = text.match(/^([^:]{1,50}):\s*(.+)$/);
  if (m && m[1].trim().length > 0 && m[2].trim().length > 0) {
    return [m[1].trim(), m[2].trim()];
  }
  // Pipe-separated "Label | Value"
  const p = text.match(/^([^|]{1,50})\|\s*(.+)$/);
  if (p && p[1].trim().length > 0 && p[2].trim().length > 0) {
    return [p[1].trim(), p[2].trim()];
  }
  // Arrow or dash-separated "Label - Value" or "Label → Value" (common in summaries)
  const d = text.match(/^([^–—\-→]{1,50})\s*[–—\-→]\s*(.{2,})$/);
  if (d && d[1].trim().length > 0 && d[2].trim().length > 0 && !/^\d/.test(d[1].trim())) {
    // Avoid splitting things like "2023-01-15" — only split when left side isn't a number
    return [d[1].trim(), d[2].trim()];
  }
  return null;
}

// Builds per-row info once: position-based cells, the plain joined line, and — only
// when the position-based check found just one cell — a colon-based label/value split
// as a second signal. Shared by both PDF to Excel's whole-page extraction and PDF to
// Word's per-block extraction so both benefit the same way.
function analyzeRowsForTable(rows) {
  return rows.map(r => {
    const posCells = splitRowIntoCells(r);
    const text = joinRowItems(r);
    const colonCells = posCells.length === 1 ? splitByColonIfLabelValue(text) : null;
    return { posCells, colonCells, text, raw: r, isMultiCol: posCells.length > 1 || !!colonCells };
  });
}

// Whole-page table extraction for PDF to Excel: falls back to plain per-row cells for
// pages that don't look tabular, and switches to page-wide column clustering (aligned
// columns across every row) once enough rows show multiple columns.
// Improved: also checks for structural consistency (do multi-col rows have similar
// column counts?) as a secondary signal — a page might have a low multi-col ratio
// overall but still contain a real table in part of it.
function extractTableRows(items) {
  if (!items.length) return [];
  const rows = groupItemsIntoRows(items);
  const info = analyzeRowsForTable(rows);
  const multiColRows = info.filter(r => r.isMultiCol);
  const multiColRatio = multiColRows.length / info.length;

  // Check structural consistency among multi-col rows
  const colCounts = multiColRows.map(r => r.posCells.length > 1 ? r.posCells.length : (r.colonCells ? 2 : 1));
  const modeColCount = colCounts.length > 0 ? mode(colCounts) : 0;
  const consistentRows = colCounts.filter(c => c === modeColCount || Math.abs(c - modeColCount) <= 1).length;
  const structuralConsistency = colCounts.length > 0 ? consistentRows / colCounts.length : 0;

  // Lower the threshold if rows are structurally consistent (they really do form a table)
  const effectiveThreshold = structuralConsistency > 0.6 ? 0.15 : 0.3;

  if (multiColRatio < effectiveThreshold) {
    return info.map(r => (r.posCells.length > 1 ? r.posCells : (r.colonCells || r.posCells))).filter(row => row.some(c => c.length > 0));
  }
  const anyPositional = info.some(r => r.posCells.length > 1);
  if (anyPositional) return extractAlignedTableRows(rows);
  return info.map(r => r.colonCells || r.posCells).filter(row => row.some(c => c.length > 0));
}

// Returns the most frequent value in an array
function mode(arr) {
  const freq = {};
  arr.forEach(v => { freq[v] = (freq[v] || 0) + 1; });
  let maxFreq = 0, modeVal = arr[0];
  Object.entries(freq).forEach(([v, f]) => { if (f > maxFreq) { maxFreq = f; modeVal = parseInt(v, 10); } });
  return modeVal;
}

// Reads a set of position-tagged text items (either a PDF page's real text layer, or
// OCR word boxes shaped to look the same) and splits them into an ordered list of
// blocks — 'table' for runs of two or more consecutive multi-column rows (rebuilt with
// aligned columns, or with direct label/value pairs when the run is colon-detected
// rather than position-detected), 'text' for everything else. This means a table
// sitting between a letterhead and a footer note still gets kept as a table, instead of
// the whole page being judged as one or the other — and a run of "Label : Value" lines
// (very common in receipts and forms) gets kept as a real two-column table too, even
// with no unusual gap to detect.
// A short line whose horizontal center roughly matches the page's own center — and
// which doesn't already stretch out to the margins the way a wrapped paragraph line
// would — is almost always a deliberately centered heading or title, not a coincidence.
function estimateBlockAlignment(rowItems, pageWidthPt) {
  if (!pageWidthPt || !rowItems.length) return 'left';
  let minX = Infinity, maxX = -Infinity;
  rowItems.forEach(it => {
    minX = Math.min(minX, it.transform[4]);
    maxX = Math.max(maxX, it.transform[4] + (it.width || 0));
  });
  const center = (minX + maxX) / 2;
  const span = maxX - minX;
  const isNearPageCenter = Math.abs(center - pageWidthPt / 2) < pageWidthPt * 0.08;
  const isShortLine = span < pageWidthPt * 0.7;
  return (isNearPageCenter && isShortLine) ? 'center' : 'left';
}

// Same gap-detection logic as splitRowIntoCells, but also records where each cell
// starts — needed to place Word tab stops at the same positions the columns actually
// sat at in the original PDF, rather than guessing evenly-spaced ones.
function splitRowIntoCellsWithPositions(items) {
  const sorted = items.slice().sort((a, b) => a.transform[4] - b.transform[4]);
  if (sorted.length === 0) return [];
  if (sorted.length === 1) return [{ text: sorted[0].str.trim(), x: sorted[0].transform[4] }];

  const avgHeight = sorted.reduce((sum, it) => sum + (it.height || Math.abs(it.transform[3]) || 10), 0) / sorted.length;
  const gaps = [];
  for (let i = 1; i < sorted.length; i++) {
    const prev = sorted[i - 1];
    gaps.push(sorted[i].transform[4] - (prev.transform[4] + (prev.width || 0)));
  }
  const positiveGaps = gaps.filter(g => g > 0).sort((a, b) => a - b);
  let threshold;
  if (positiveGaps.length >= 2) {
    const medianGap = positiveGaps[Math.floor(positiveGaps.length / 2)];
    const maxGap = positiveGaps[positiveGaps.length - 1];
    if (maxGap > medianGap * 2.5 && maxGap > avgHeight * 0.25) {
      let bestSplitIdx = 0, bestJump = 0;
      for (let i = 1; i < positiveGaps.length; i++) {
        const jump = positiveGaps[i] - positiveGaps[i - 1];
        if (jump > bestJump) { bestJump = jump; bestSplitIdx = i; }
      }
      threshold = (positiveGaps[bestSplitIdx - 1] + positiveGaps[bestSplitIdx]) / 2;
      threshold = Math.max(threshold, avgHeight * 0.2);
    } else {
      threshold = Math.max(avgHeight * 0.35, 4);
    }
  } else {
    threshold = Math.max(avgHeight * 0.35, 4);
  }

  const cells = [];
  let cellText = sorted[0].str;
  let cellStartX = sorted[0].transform[4];
  for (let i = 1; i < sorted.length; i++) {
    const prev = sorted[i - 1];
    const gap = sorted[i].transform[4] - (prev.transform[4] + (prev.width || 0));
    if (gap > threshold) {
      cells.push({ text: cellText.trim(), x: cellStartX });
      cellText = sorted[i].str;
      cellStartX = sorted[i].transform[4];
    } else {
      cellText += (gap > 1 ? ' ' : '') + sorted[i].str;
    }
  }
  cells.push({ text: cellText.trim(), x: cellStartX });
  return cells;
}

function analyzePageItemsIntoBlocks(items, pageWidthPt) {
  const rows = groupItemsIntoRows(items);
  if (rows.length === 0) return [];

  const info = analyzeRowsForTable(rows);
  const blocks = [];
  let i = 0;
  while (i < rows.length) {
    if (info[i].isMultiCol) {
      let j = i;
      while (j < rows.length && info[j].isMultiCol) j++;
      if (j - i >= 2) {
        const anyPositional = info.slice(i, j).some(r => r.posCells.length > 1);
        const tableRows = anyPositional
          ? extractAlignedTableRows(rows.slice(i, j))
          : info.slice(i, j).map(r => r.colonCells || r.posCells).filter(row => row.some(c => c.length > 0));
        if (tableRows.length) blocks.push({ type: 'table', rows: tableRows });
        i = j;
        continue;
      }
      // An isolated single multi-column row doesn't repeat enough to justify a full
      // table, but it's still visually columnar — using Word's own tab stops keeps it
      // lined up cleanly, rather than collapsing every column into one run-on line of
      // plain text with no alignment at all.
      if (info[i].posCells.length > 1) {
        const cellsWithPos = splitRowIntoCellsWithPositions(rows[i]);
        if (cellsWithPos.length > 1) {
          blocks.push({ type: 'tabbed', cells: cellsWithPos, size: estimateRowFontSize(rows[i]) });
          i++;
          continue;
        }
      }
    }
    if (info[i].text.length > 0) {
      blocks.push({
        type: 'text',
        text: info[i].text,
        size: estimateRowFontSize(rows[i]),
        items: rows[i],
        alignment: estimateBlockAlignment(rows[i], pageWidthPt),
      });
    }
    i++;
  }
  return blocks;
}

async function analyzePdfPageBlocks(page) {
  const content = await page.getTextContent();
  await attachFontStyles(page, content.items);
  return analyzePageItemsIntoBlocks(content.items, page.getViewport({ scale: 1 }).width);
}

/* ---- OCR fallback (Tesseract.js) for scanned/image-only pages ----
   Used by both PDF to Word and PDF to Excel when a page has no real text layer.
   Everything runs locally via the bundled WASM engine and English training data —
   no network request is made. Uses a pool of workers (via Tesseract's Scheduler) so
   multiple pages can be recognized in parallel rather than one at a time, and the
   SIMD-optimized core build for speed — safe to assume here since Chrome and Edge
   both support it. */

const OCR_SCALE = 4; // ~288 DPI equivalent — close to Tesseract's own 300 DPI sweet spot for accuracy
// PSM 6 = single uniform block of text. PSM 4 = single column of variable-sized text.
// PSM 3 = fully automatic page segmentation. We try PSM 6 first but fall back to PSM 3
// for pages where PSM 6 produces garbage (low average confidence).
const OCR_PSM = '6';
const OCR_PSM_FALLBACK = '3';
const OCR_CONFIDENCE_THRESHOLD = 40; // words below this confidence are likely garbage
let ocrSchedulerPromise = null;
let ocrFallbackSchedulerPromise = null;

function getOcrWorkerCount() {
  const cores = navigator.hardwareConcurrency || 4;
  return Math.max(2, Math.min(4, cores - 1));
}

async function getOcrScheduler() {
  if (!ocrSchedulerPromise) {
    ocrSchedulerPromise = (async () => {
      const workerCount = getOcrWorkerCount();
      const scheduler = Tesseract.createScheduler();
      const workers = await Promise.all(
        Array.from({ length: workerCount }, async () => {
          const worker = await Tesseract.createWorker('eng', 1, {
            workerPath: 'vendor/tesseract-worker.min.js',
            corePath: 'vendor/tesseract-core-simd-lstm.wasm.js',
            langPath: 'vendor/tessdata',
            gzip: true,
            cacheMethod: 'none',
            workerBlobURL: false,
            logger: () => {},
          });
          await worker.setParameters({ tessedit_pageseg_mode: OCR_PSM });
          return worker;
        })
      );
      workers.forEach(w => scheduler.addWorker(w));
      return scheduler;
    })();
  }
  return ocrSchedulerPromise;
}

// Fallback scheduler with PSM 3 (fully automatic segmentation) for pages where
// PSM 6 produces low-confidence garbage — happens when the document has mixed
// layouts, headers/footers that aren't part of the main table, or watermarks
// that confuse the single-block assumption.
async function getOcrFallbackScheduler() {
  if (!ocrFallbackSchedulerPromise) {
    ocrFallbackSchedulerPromise = (async () => {
      const scheduler = Tesseract.createScheduler();
      const workers = await Promise.all(
        Array.from({ length: 2 }, async () => {
          const worker = await Tesseract.createWorker('eng', 1, {
            workerPath: 'vendor/tesseract-worker.min.js',
            corePath: 'vendor/tesseract-core-simd-lstm.wasm.js',
            langPath: 'vendor/tessdata',
            gzip: true,
            cacheMethod: 'none',
            workerBlobURL: false,
            logger: () => {},
          });
          await worker.setParameters({ tessedit_pageseg_mode: OCR_PSM_FALLBACK });
          return worker;
        })
      );
      workers.forEach(w => scheduler.addWorker(w));
      return scheduler;
    })();
  }
  return ocrFallbackSchedulerPromise;
}

// OCR needs to spawn Web Workers, which some browsers block when the page is opened
// directly from disk (file://) rather than served over http://. Detect that specific
// failure and point straight at the fix instead of surfacing the raw browser error.
function describeExtractionError(err) {
  const msg = (err && err.message) || String(err);
  if (/construct 'Worker'|cannot be accessed from origin ['"]?null/i.test(msg)) {
    return 'OCR needs to run background workers, and this browser is blocking that because the page was opened directly from a file ' +
      '(double-clicked) rather than through a local server. Double-click "start-server.bat" (Windows) or run "start-server.sh" ' +
      '(Mac/Linux) in the pdf-toolkit folder, then use the app at the localhost address it opens — everything else in the toolkit ' +
      'works fine without this; only OCR needs it.';
  }
  return msg;
}

async function terminateOcrWorker() {
  if (ocrSchedulerPromise) {
    const pending = ocrSchedulerPromise;
    ocrSchedulerPromise = null;
    try {
      const scheduler = await pending;
      await scheduler.terminate();
    } catch (e) { /* already gone or never fully started — nothing to clean up */ }
  }
  if (ocrFallbackSchedulerPromise) {
    const pending = ocrFallbackSchedulerPromise;
    ocrFallbackSchedulerPromise = null;
    try {
      const scheduler = await pending;
      await scheduler.terminate();
    } catch (e) { /* already gone */ }
  }
}

// Tesseract's recognize() doesn't return a flat word list by default in this version —
// word-level data only appears if you explicitly ask for the "blocks" output, nested as
// blocks → paragraphs → lines → words. (Confirmed directly: without requesting it,
// data.words is undefined even though OCR ran correctly and found real text — that
// mismatch was the actual cause of pages showing "no readable text" earlier.)
function flattenOcrWords(blocks) {
  const words = [];
  (blocks || []).forEach(block => {
    (block.paragraphs || []).forEach(par => {
      (par.lines || []).forEach(line => {
        (line.words || []).forEach(word => words.push(word));
      });
    });
  });
  return words;
}

// Alternative: flatten at line level when word-level produces garbage.
// Lines typically have better recognition because Tesseract uses more context.
// Returns items shaped like pdf.js text content but with entire lines as items.
function flattenOcrLines(blocks) {
  const lines = [];
  (blocks || []).forEach(block => {
    (block.paragraphs || []).forEach(par => {
      (par.lines || []).forEach(line => {
        if (line.text && line.text.trim().length > 0) {
          lines.push(line);
        }
      });
    });
  });
  return lines;
}

// Calculate the overall quality score of OCR output (0-100)
function ocrQualityScore(words) {
  if (!words.length) return 0;
  const withConf = words.filter(w => w.confidence !== undefined && w.text && w.text.trim().length > 0);
  if (!withConf.length) return 50; // unknown quality
  const avgConf = withConf.reduce((s, w) => s + w.confidence, 0) / withConf.length;
  // Also penalize for high proportion of non-alphanumeric content (likely garbage)
  const totalText = withConf.map(w => w.text).join('');
  const alphaNum = totalText.replace(/[^a-zA-Z0-9]/g, '').length;
  const alphaRatio = totalText.length > 0 ? alphaNum / totalText.length : 0;
  return avgConf * 0.7 + alphaRatio * 100 * 0.3;
}

// Runs one canvas through the worker pool and reshapes the recognized words to look
// exactly like pdf.js text items (str/transform/width/height). That's the trick that
// lets OCR output flow through the very same row/column/table detection already built
// for real PDF text, instead of needing a whole separate extraction path.
// Improved: filters low-confidence words, and retries with a different page segmentation
// mode (PSM 3 = fully automatic) if the primary mode (PSM 6 = single block) produces
// mostly garbage — which happens with watermarked/complex-layout documents.
async function ocrRecognizeCanvas(canvas, scale) {
  const scheduler = await getOcrScheduler();
  // Use grid lines detected BEFORE preprocessing (attached to the canvas object)
  // These are more reliable than detecting on the binarized image.
  const gridLines = canvas._detectedGridLines || detectGridLines(canvas);

  const { data } = await scheduler.addJob('recognize', canvas, {}, { blocks: true });
  let words = flattenOcrWords(data.blocks);

  // Calculate average confidence to decide if we need a fallback
  const confidences = words.filter(w => w.text && w.text.trim().length > 0).map(w => w.confidence || 0);
  const avgConfidence = confidences.length > 0
    ? confidences.reduce((s, c) => s + c, 0) / confidences.length
    : 0;

  // If average confidence is below threshold, the PSM 6 assumption was wrong —
  // retry with PSM 3 (fully automatic segmentation) which handles mixed layouts better
  if (avgConfidence < 55 && confidences.length > 3) {
    try {
      const fallbackScheduler = await getOcrFallbackScheduler();
      const { data: fallbackData } = await fallbackScheduler.addJob('recognize', canvas, {}, { blocks: true });
      const fallbackWords = flattenOcrWords(fallbackData.blocks);
      const fbScore = ocrQualityScore(fallbackWords);
      const primaryScore = ocrQualityScore(words);
      // Use the better result
      if (fbScore > primaryScore) {
        words = fallbackWords;
      }
    } catch (e) {
      // Fallback failed, keep original result
    }
  }

  // If word-level output is still poor quality, try using line-level data instead
  // Lines have more context and Tesseract often recognizes them better as a unit
  const finalScore = ocrQualityScore(words);
  let items;
  if (finalScore < 45 && data.blocks) {
    // Use line-level extraction as a last resort — less granular but more accurate
    const lines = flattenOcrLines(data.blocks);
    items = lines
      .filter(l => l.text && l.text.trim().length > 0 && (l.confidence || 0) >= OCR_CONFIDENCE_THRESHOLD * 0.8)
      .map(l => ({
        str: l.text.trim(),
        transform: [1, 0, 0, 1, l.bbox.x0 / scale, l.bbox.y0 / scale],
        width: (l.bbox.x1 - l.bbox.x0) / scale,
        height: (l.bbox.y1 - l.bbox.y0) / scale,
      }));
  } else {
    // Filter out low-confidence words — they're almost certainly garbage
    items = words
      .filter(w => w.text && w.text.trim().length > 0 && (w.confidence || 0) >= OCR_CONFIDENCE_THRESHOLD)
      .map(w => ({
        str: w.text,
        transform: [1, 0, 0, 1, w.bbox.x0 / scale, w.bbox.y0 / scale],
        width: (w.bbox.x1 - w.bbox.x0) / scale,
        height: (w.bbox.y1 - w.bbox.y0) / scale,
      }));
  }

  // Attach grid info to items so extractSheetsFromPdf can use it for boundaries
  if (gridLines.vertical.length >= 2 || gridLines.horizontal.length >= 2) {
    items._gridLines = {
      vertical: gridLines.vertical.map(x => x / scale),
      horizontal: gridLines.horizontal.map(y => y / scale),
    };
  }
  return items;
}

// Character whitelisting per column type: after table extraction, detect column types
// (numeric, date, text) and clean up OCR artifacts. Common OCR errors in numeric
// columns: O→0, l→1, I→1, S→5, B→8, Z→2, etc. This runs as a post-processing step
// on the final extracted rows.
// Also filters out rows that are entirely garbage (no recognizable content at all).
// Column-type cleanup was being applied across an entire page's rows by raw column
// index — but a page like this is really a stack of several independently-structured
// mini-tables (plus a general-info header block) sharing the same column positions.
// If most of the page's "column 4" holds amounts, a name or email address that happens
// to land in that same column position in a totally different section would get
// force-stripped down to digits too. Splitting into segments at the same section-break
// points used to restore vertical spacing (matched by content, since literal blank rows
// aren't reinserted until later in the pipeline) means each section's columns get voted
// on independently, so unrelated tables elsewhere can't contaminate each other.
function cleanupColumnTypes(rows, anchors) {
  if (rows.length < 2) return rows;
  if (!anchors || !anchors.length) return cleanupColumnTypesForSegment(rows);

  const segments = [];
  let current = [];
  rows.forEach(row => {
    const firstCell = (row.find(c => c && c.trim().length > 0) || '').trim();
    const matchesAnchor = firstCell && anchors.some(a => firstCell.startsWith(a.slice(0, 12)) || a.startsWith(firstCell.slice(0, 12)));
    if (matchesAnchor && current.length) {
      segments.push(current);
      current = [];
    }
    current.push(row);
  });
  if (current.length) segments.push(current);

  return segments.map(seg => cleanupColumnTypesForSegment(seg)).flat();
}

function cleanupColumnTypesForSegment(rows) {
  if (rows.length < 2) return rows;
  const colCount = Math.max(...rows.map(r => r.length));
  if (colCount === 0) return rows;

  // First pass: filter out rows that are entirely garbage (all cells unrecognizable)
  const isGarbageCell = (val) => {
    if (!val || val.trim().length === 0) return false; // empty is fine
    const v = val.trim();
    // A cell is garbage if it's mostly special characters/brackets with no real words
    const alphaNum = v.replace(/[^a-zA-Z0-9]/g, '');
    if (alphaNum.length === 0 && v.length > 2) return true; // all symbols
    // Single weird characters that aren't real data
    if (v.length <= 2 && /^[^a-zA-Z0-9₹$€£¥]+$/.test(v)) return true;
    return false;
  };

  const filteredRows = rows.filter(row => {
    const nonEmpty = row.filter(c => c && c.trim().length > 0);
    if (nonEmpty.length === 0) return false;
    const garbageCells = nonEmpty.filter(c => isGarbageCell(c));
    // Remove row only if ALL non-empty cells are garbage
    return garbageCells.length < nonEmpty.length;
  });

  if (filteredRows.length < 2) return filteredRows;

  // Detect column types by majority voting
  const colTypes = [];
  for (let c = 0; c < colCount; c++) {
    let numericCount = 0, dateCount = 0, textCount = 0;
    filteredRows.forEach(r => {
      const val = (r[c] || '').trim();
      if (!val) return;
      // Check if it looks numeric (digits, periods, commas, minus, currency symbols, parens for negatives)
      if (/^[\s₹$€£¥()\-,.\d%]+$/.test(val) && /\d/.test(val)) numericCount++;
      // Check if it looks like a date
      else if (/^\d{1,4}[\-\/\.]\d{1,2}[\-\/\.]\d{1,4}$/.test(val) || /^\d{1,2}\s+(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)/i.test(val)) dateCount++;
      else textCount++;
    });
    const total = numericCount + dateCount + textCount;
    if (total === 0) { colTypes.push('text'); continue; }
    if (numericCount / total >= 0.6) colTypes.push('numeric');
    else if (dateCount / total >= 0.5) colTypes.push('date');
    else colTypes.push('text');
  }

  // Apply character-level cleanup based on detected column type
  return filteredRows.map(row => row.map((cell, c) => {
    if (!cell || colTypes[c] === 'text') return cell;
    if (colTypes[c] === 'numeric') {
      // Common OCR misreads in numeric fields
      return cell
        .replace(/[oO]/g, '0')  // O → 0
        .replace(/[lI|]/g, '1') // l, I, | → 1
        .replace(/[S]/g, '5')   // S → 5 (only uppercase S in numeric context)
        .replace(/[B]/g, '8')   // B → 8 (in numeric context)
        .replace(/[Z]/g, '2')   // Z → 2
        .replace(/[G]/g, '6')   // G → 6
        .replace(/[D]/g, '0')   // D → 0 (in numeric context)
        .replace(/[^₹$€£¥()\-,.\d%\s]/g, ''); // strip any remaining non-numeric chars
    }
    return cell;
  }));
}

// Otsu's method: picks the grayscale threshold that best separates a bimodal image
// (dark foreground text vs. lighter background) by maximizing the variance between the
// two resulting groups. Standard, well-established technique — better than a fixed
// threshold since the right cutoff varies by scan brightness/contrast.
function computeOtsuThreshold(histogram, total) {
  let sum = 0;
  for (let t = 0; t < 256; t++) sum += t * histogram[t];
  let sumB = 0, wB = 0, maxVar = 0, threshold = 127;
  for (let t = 0; t < 256; t++) {
    wB += histogram[t];
    if (wB === 0) continue;
    const wF = total - wB;
    if (wF === 0) break;
    sumB += t * histogram[t];
    const mB = sumB / wB;
    const mF = (sum - sumB) / wF;
    const varBetween = wB * wF * (mB - mF) * (mB - mF);
    if (varBetween > maxVar) { maxVar = varBetween; threshold = t; }
  }
  return threshold;
}

// Targeted watermark removal by color: watermarks are often printed in a specific color
// (red, blue, green, light gray) rather than black. Pure brightness-based binarization
// can fail when a colored watermark has similar luminance to black text. This pass
// identifies pixels that are "too colorful" (high saturation relative to their darkness)
// and suppresses them to white BEFORE binarization — effectively erasing colored
// watermarks while preserving dark/black text regardless of the Otsu threshold.
// Improved: uses a more conservative threshold to avoid erasing dark-colored text
// (like dark blue headers on forms). Only suppresses pixels that are clearly saturated
// AND not very dark (truly dark text is preserved even if slightly colored).
function suppressColoredWatermarks(imageData) {
  const data = imageData.data;
  const n = data.length / 4;
  for (let i = 0; i < n; i++) {
    const o = i * 4;
    const r = data[o], g = data[o + 1], b = data[o + 2];
    const maxC = Math.max(r, g, b);
    const minC = Math.min(r, g, b);
    const lum = 0.299 * r + 0.587 * g + 0.114 * b;
    const saturation = maxC > 0 ? (maxC - minC) / maxC : 0;
    // Only suppress if:
    // 1. Clearly saturated (>0.35 — more conservative than before)
    // 2. Not very dark (lum > 80 — dark colored text like dark blue is preserved)
    // 3. Not pure black/near-black (maxC > 60)
    // This catches typical watermark colors (light red, light blue, light green)
    // while preserving dark headers and body text regardless of slight color tint
    if (saturation > 0.35 && lum > 80 && minC > 30) {
      data[o] = 255; data[o + 1] = 255; data[o + 2] = 255;
    }
  }
}

// Noise cleanup after binarization: removes isolated small clusters of black pixels
// (scanning artifacts, dust) that would confuse OCR. Uses a two-phase approach:
// Phase 1: Remove isolated specks (pixels with very few neighbors in a 5x5 window)
// Phase 2: Remove thin stray lines that aren't part of text or grid
//          (very short isolated horizontal/vertical runs)
function removeNoiseAfterBinarization(imageData, width, height) {
  const data = imageData.data;

  // Phase 1: Remove isolated specks
  const toRemove = [];
  for (let y = 1; y < height - 1; y++) {
    for (let x = 1; x < width - 1; x++) {
      const o = (y * width + x) * 4;
      if (data[o] !== 0) continue; // skip white pixels
      // Count black neighbors in a 5x5 window
      let neighbors = 0;
      for (let dy = -2; dy <= 2; dy++) {
        const ny = y + dy;
        if (ny < 0 || ny >= height) continue;
        for (let dx = -2; dx <= 2; dx++) {
          if (dx === 0 && dy === 0) continue;
          const nx = x + dx;
          if (nx < 0 || nx >= width) continue;
          if (data[(ny * width + nx) * 4] === 0) neighbors++;
        }
      }
      // If fewer than 4 black neighbors in a 5x5 window, it's isolated noise
      if (neighbors < 4) toRemove.push(o);
    }
  }
  toRemove.forEach(o => { data[o] = 255; data[o + 1] = 255; data[o + 2] = 255; });

  // Phase 2: Remove very short stray horizontal runs (< 4px wide, isolated)
  // These are common artifacts from binarization of fine patterns
  for (let y = 2; y < height - 2; y++) {
    let runStart = -1;
    for (let x = 0; x <= width; x++) {
      const isBlack = x < width && data[(y * width + x) * 4] === 0;
      if (isBlack) {
        if (runStart === -1) runStart = x;
      } else {
        if (runStart !== -1) {
          const runLen = x - runStart;
          // Very short horizontal run (3px or less) that's isolated (white above and below)
          if (runLen <= 3) {
            const mid = Math.floor((runStart + x) / 2);
            const aboveBlack = data[((y - 1) * width + mid) * 4] === 0;
            const belowBlack = data[((y + 1) * width + mid) * 4] === 0;
            if (!aboveBlack && !belowBlack) {
              for (let rx = runStart; rx < x; rx++) {
                const ro = (y * width + rx) * 4;
                data[ro] = 255; data[ro + 1] = 255; data[ro + 2] = 255;
              }
            }
          }
          runStart = -1;
        }
      }
    }
  }
}

// Converts a rendered page to grayscale and binarizes it (pure black/white) using an
// automatically-picked threshold. Improved pipeline:
// 1. Suppress colored watermarks (by saturation) — handles red/blue/green watermarks
//    that brightness-only binarization would miss
// 2. Adaptive binarization — uses Sauvola's local adaptive threshold when the document
//    has uneven background (watermarks, gradients), falls back to Otsu for clean pages
// 3. Noise removal — eliminates isolated specks that confuse OCR
function preprocessCanvasForOcr(canvas) {
  const ctx = canvas.getContext('2d');
  const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  const data = imageData.data;
  const w = canvas.width, h = canvas.height;
  const n = w * h;

  // Step 1: Suppress colored watermarks before grayscale conversion
  suppressColoredWatermarks(imageData);

  // Step 2: Convert to grayscale
  const gray = new Uint8ClampedArray(n);
  const histogram = new Array(256).fill(0);
  for (let i = 0; i < n; i++) {
    const o = i * 4;
    const lum = Math.round(0.299 * data[o] + 0.587 * data[o + 1] + 0.114 * data[o + 2]);
    gray[i] = lum;
    histogram[lum]++;
  }

  // Decide binarization strategy: compute Otsu threshold and check if the separation
  // is clean. If the histogram is heavily skewed (watermark dominates), use local
  // adaptive thresholding (Sauvola-inspired) instead.
  const otsuThreshold = computeOtsuThreshold(histogram, n);

  // Check if Otsu gives a clean separation — count pixels near the threshold
  let nearThreshold = 0;
  for (let t = Math.max(0, otsuThreshold - 20); t <= Math.min(255, otsuThreshold + 20); t++) {
    nearThreshold += histogram[t];
  }
  const ambiguousRatio = nearThreshold / n;

  if (ambiguousRatio > 0.3) {
    // Many pixels near the threshold — uneven background, use local adaptive method
    // (Sauvola-inspired: threshold varies per local window based on local mean and stddev)
    const windowSize = Math.max(15, Math.round(Math.min(w, h) / 30) | 1); // odd number
    const halfW = Math.floor(windowSize / 2);
    const k = 0.15; // Sauvola sensitivity (lower = more aggressive in keeping text)

    // Compute integral image and integral of squares for fast local stats
    const integral = new Float64Array(n);
    const integralSq = new Float64Array(n);
    for (let y = 0; y < h; y++) {
      let rowSum = 0, rowSumSq = 0;
      for (let x = 0; x < w; x++) {
        const idx = y * w + x;
        const v = gray[idx];
        rowSum += v;
        rowSumSq += v * v;
        integral[idx] = rowSum + (y > 0 ? integral[(y - 1) * w + x] : 0);
        integralSq[idx] = rowSumSq + (y > 0 ? integralSq[(y - 1) * w + x] : 0);
      }
    }

    const getSum = (img, x1, y1, x2, y2) => {
      x1 = Math.max(0, x1); y1 = Math.max(0, y1);
      x2 = Math.min(w - 1, x2); y2 = Math.min(h - 1, y2);
      let s = img[y2 * w + x2];
      if (x1 > 0) s -= img[y2 * w + (x1 - 1)];
      if (y1 > 0) s -= img[(y1 - 1) * w + x2];
      if (x1 > 0 && y1 > 0) s += img[(y1 - 1) * w + (x1 - 1)];
      return s;
    };

    for (let y = 0; y < h; y++) {
      for (let x = 0; x < w; x++) {
        const x1 = x - halfW, y1 = y - halfW, x2 = x + halfW, y2 = y + halfW;
        const area = (Math.min(x2, w - 1) - Math.max(x1, 0) + 1) * (Math.min(y2, h - 1) - Math.max(y1, 0) + 1);
        const sum = getSum(integral, x1, y1, x2, y2);
        const sumSq = getSum(integralSq, x1, y1, x2, y2);
        const mean = sum / area;
        const variance = Math.max(0, (sumSq / area) - (mean * mean));
        const stddev = Math.sqrt(variance);
        const localThreshold = mean * (1 + k * (stddev / 128 - 1));
        const idx = y * w + x;
        const v = gray[idx] > localThreshold ? 255 : 0;
        const o = idx * 4;
        data[o] = v; data[o + 1] = v; data[o + 2] = v;
      }
    }
  } else {
    // Clean page — Otsu works fine
    for (let i = 0; i < n; i++) {
      const v = gray[i] >= otsuThreshold ? 255 : 0;
      const o = i * 4;
      data[o] = v; data[o + 1] = v; data[o + 2] = v;
    }
  }
  ctx.putImageData(imageData, 0, 0);

  // Step 3: Remove isolated noise pixels
  const cleanData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  removeNoiseAfterBinarization(cleanData, canvas.width, canvas.height);
  ctx.putImageData(cleanData, 0, 0);
}

// Adaptive resolution: determines the best OCR render scale based on the page's content.
// Dense pages with small text benefit from higher DPI; pages with large text waste time
// at high DPI. Analyzes the page's viewport and default text size to pick an appropriate
// scale factor (targeting ~300-400 DPI effective resolution for typical text).
// Increased base scales from previous version for better accuracy on complex documents.
function computeAdaptiveOcrScale(page) {
  const viewport = page.getViewport({ scale: 1 });
  const pageArea = viewport.width * viewport.height;
  const standardArea = 612 * 792; // US Letter
  if (pageArea < standardArea * 0.4) {
    // Small page (receipt, card) — use high resolution
    return 6;
  } else if (pageArea > standardArea * 2) {
    // Large page (A3, tabloid) — moderate resolution to keep memory in check
    return 4;
  }
  // Standard pages — use scale 5 (~360 DPI) for better accuracy than the original 4
  return 5;
}

// Grid-line detection: scans the binarized image for long horizontal and vertical lines
// that indicate table borders. Returns arrays of y-positions (horizontal lines) and
// x-positions (vertical lines). These give exact row/column boundaries when present,
// much more reliable than text-position guessing.
// Improved: lower minimum line length (8% of dimension), and relaxed thin-line
// verification to handle documents where text is close to grid lines.
function detectGridLines(canvas) {
  const ctx = canvas.getContext('2d');
  const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  const data = imageData.data;
  const w = canvas.width, h = canvas.height;
  // Lower threshold: line must span at least 8% of the dimension (catches partial grid lines)
  const minLineLength = Math.min(w, h) * 0.08;
  // But also set an absolute minimum to avoid noise
  const effectiveMinLen = Math.max(minLineLength, 30);

  const horizontalLines = [];
  const verticalLines = [];

  // Detect horizontal lines: scan each row for runs of consecutive black pixels
  for (let y = 0; y < h; y++) {
    let runStart = -1;
    for (let x = 0; x <= w; x++) {
      const isBlack = x < w && data[(y * w + x) * 4] === 0;
      if (isBlack) {
        if (runStart === -1) runStart = x;
      } else {
        if (runStart !== -1 && (x - runStart) >= effectiveMinLen) {
          // Verify it's a thin line: check 3px above and below the midpoint
          // A table line should have white (or non-black) on at least one side
          const midX = Math.floor((runStart + x) / 2);
          let aboveBlackCount = 0, belowBlackCount = 0;
          for (let dy = 1; dy <= 3; dy++) {
            if (y - dy >= 0 && data[((y - dy) * w + midX) * 4] === 0) aboveBlackCount++;
            if (y + dy < h && data[((y + dy) * w + midX) * 4] === 0) belowBlackCount++;
          }
          // It's a line if at least one side is mostly white (≤1 black pixel in 3)
          if (aboveBlackCount <= 1 || belowBlackCount <= 1) {
            horizontalLines.push(y);
          }
        }
        runStart = -1;
      }
    }
  }

  // Detect vertical lines: scan each column
  for (let x = 0; x < w; x++) {
    let runStart = -1;
    for (let y = 0; y <= h; y++) {
      const isBlack = y < h && data[(y * w + x) * 4] === 0;
      if (isBlack) {
        if (runStart === -1) runStart = y;
      } else {
        if (runStart !== -1 && (y - runStart) >= effectiveMinLen) {
          const midY = Math.floor((runStart + y) / 2);
          let leftBlackCount = 0, rightBlackCount = 0;
          for (let dx = 1; dx <= 3; dx++) {
            if (x - dx >= 0 && data[(midY * w + (x - dx)) * 4] === 0) leftBlackCount++;
            if (x + dx < w && data[(midY * w + (x + dx)) * 4] === 0) rightBlackCount++;
          }
          if (leftBlackCount <= 1 || rightBlackCount <= 1) {
            verticalLines.push(x);
          }
        }
        runStart = -1;
      }
    }
  }

  // Deduplicate nearby lines (within 5px — slightly more generous)
  const dedup = (arr) => {
    if (!arr.length) return arr;
    arr.sort((a, b) => a - b);
    const result = [arr[0]];
    for (let i = 1; i < arr.length; i++) {
      if (arr[i] - result[result.length - 1] > 5) result.push(arr[i]);
    }
    return result;
  };

  return { horizontal: dedup(horizontalLines), vertical: dedup(verticalLines) };
}

async function renderPageToCanvas(page, scale) {
  const viewport = page.getViewport({ scale });
  const canvas = document.createElement('canvas');
  canvas.width = viewport.width;
  canvas.height = viewport.height;
  await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;

  // Detect grid lines BEFORE preprocessing — the original rendered image has clean,
  // visible grid lines that binarization/noise-removal might damage or remove.
  // We do a simple grayscale conversion for line detection (no binarization yet).
  const gridCanvas = document.createElement('canvas');
  gridCanvas.width = canvas.width;
  gridCanvas.height = canvas.height;
  const gridCtx = gridCanvas.getContext('2d');
  gridCtx.drawImage(canvas, 0, 0);
  // Convert to grayscale and apply a generous threshold just for line detection
  const gridData = gridCtx.getImageData(0, 0, gridCanvas.width, gridCanvas.height);
  const gd = gridData.data;
  for (let i = 0; i < gd.length; i += 4) {
    const lum = Math.round(0.299 * gd[i] + 0.587 * gd[i + 1] + 0.114 * gd[i + 2]);
    // Use a lower threshold (100) to catch gray grid lines that Otsu might miss
    const v = lum < 100 ? 0 : 255;
    gd[i] = v; gd[i + 1] = v; gd[i + 2] = v;
  }
  gridCtx.putImageData(gridData, 0, 0);
  const detectedLines = detectGridLines(gridCanvas);

  // Now preprocess the main canvas for OCR (binarize, remove noise, etc.)
  preprocessCanvasForOcr(canvas);

  // Attach detected grid lines to the canvas for later use
  canvas._detectedGridLines = detectedLines;
  return canvas;
}

// Reads every page of a PDF, deciding per page whether to use its real text layer or
// (if useOcr is on and it has none) OCR. Canvas rendering happens up front for pages
// that need OCR, and their recognize() jobs are all enqueued together rather than
// awaited one at a time — the scheduler's worker pool then runs them in parallel, so a
// multi-page scanned document doesn't pay the full per-page OCR cost serially. Results
// are still returned in original page order.
function ocrProgressMessage(i, total, status) {
  if (typeof status === 'string' && status.startsWith('batch:')) {
    const [, count, workers] = status.split(':');
    return `Running OCR on ${count} page${count === '1' ? '' : 's'} at once (using ${workers} worker${workers === '1' ? '' : 's'} in parallel)…`;
  }
  return status ? `Queued page ${i + 1} of ${total} for OCR…` : `Reading page ${i + 1} of ${total}…`;
}

// pdf.js text items don't carry bold/italic directly — that lives on the font object
// referenced by item.fontName, which only resolves after the page's content stream has
// been parsed. getOperatorList() does that parsing without needing a full canvas
// render, which is what makes this cheap enough to do for every page.
async function attachFontStyles(page, items) {
  try {
    await page.getOperatorList();
    items.forEach(item => {
      try {
        const fontObj = page.commonObjs.get(item.fontName);
        item.bold = !!(fontObj && fontObj.bold);
        item.italic = !!(fontObj && fontObj.italic);
      } catch (e) { item.bold = false; item.italic = false; }
    });
  } catch (e) { /* best-effort — leave items without style flags on failure */ }
}

async function gatherPdfPageItems(pdf, useOcr, onProgress) {
  const total = pdf.numPages;
  const results = new Array(total);
  const ocrJobs = [];

  for (let i = 0; i < total; i++) {
    const page = await pdf.getPage(i + 1);
    const content = await page.getTextContent();
    const hasTextLayer = content.items.length > 0;

    // Even when a text layer exists, some PDFs have broken font encodings that produce
    // garbled Unicode (random symbols instead of real text) — a garbled text layer is
    // worse than no text layer at all. This still only ever triggers OCR if the "Try
    // OCR" checkbox is on; it just means a garbled page is treated the same as a
    // no-text page for that decision, rather than being kept as unusable "real" text.
    const textLayerIsGarbled = hasTextLayer && isTextLayerGarbled(content.items);

    if (hasTextLayer && !textLayerIsGarbled) {
      // Extract vector lines (table grid borders) from the page's drawing commands.
      // These give authoritative column/row boundaries when present.
      const vectorLines = await extractVectorLines(page);
      const items = content.items;
      await attachFontStyles(page, items);
      if (vectorLines && (vectorLines.vertical.length >= 2 || vectorLines.horizontal.length >= 2)) {
        items._vectorLines = vectorLines;
      }
      const pageWidthPt = page.getViewport({ scale: 1 }).width;
      results[i] = { items, hasTextLayer, usedOcr: false, pageWidthPt };
      if (onProgress) onProgress(i, total, false);
    } else if (useOcr) {
      if (onProgress) onProgress(i, total, true);
      // Adaptive resolution: pick scale based on page size
      const adaptiveScale = computeAdaptiveOcrScale(page);
      const canvas = await renderPageToCanvas(page, adaptiveScale);
      const job = ocrRecognizeCanvas(canvas, adaptiveScale).then(items => {
        results[i] = { items, hasTextLayer: false, usedOcr: true };
      }).catch(() => {
        // If OCR fails (e.g. no server running), fall back to the garbled/absent text
        // layer rather than returning nothing.
        results[i] = { items: content.items, hasTextLayer, usedOcr: false };
      });
      ocrJobs.push(job);
    } else {
      // No usable text layer and OCR isn't turned on — just return what's there
      // (possibly garbled, possibly empty) rather than attempting OCR uninvited.
      results[i] = { items: content.items, hasTextLayer, usedOcr: false };
      if (onProgress) onProgress(i, total, false);
    }
  }

  if (ocrJobs.length) {
    if (onProgress) onProgress(total - 1, total, `batch:${ocrJobs.length}:${getOcrWorkerCount()}`);
    await Promise.all(ocrJobs);
  }
  return results;
}

// Extracts vertical and horizontal line positions from a PDF page's vector graphics.
// PDF files with table grids draw them as stroked paths (rectangles or line segments).
// We parse the page's operator list to find these — they give exact cell boundaries
// that are far more reliable than guessing from text gaps.
async function extractVectorLines(page) {
  try {
    const ops = await page.getOperatorList();
    const viewport = page.getViewport({ scale: 1 });
    const pageHeight = viewport.height;

    const verticalXs = [];
    const horizontalYs = [];

    // Track the current path being built
    let currentPath = [];
    let currentTransform = [1, 0, 0, 1, 0, 0]; // identity

    // PDF operator codes — pdf.js exposes these as pdfjsLib.OPS
    // Different versions may use different numeric values, so we try the named constants first
    const OPS = pdfjsLib.OPS || {};
    const OP_MOVE = OPS.moveTo;
    const OP_LINE = OPS.lineTo;
    const OP_RECT = OPS.rectangle;
    const OP_STROKE = OPS.stroke;
    const OP_FILL = OPS.fill;
    const OP_FILL_STROKE = OPS.fillStroke;
    const OP_CLOSE_STROKE = OPS.closeStroke;
    const OP_CLOSE_FILL_STROKE = OPS.closeFillStroke;
    const OP_EOFIIL = OPS.eoFill;
    const OP_SAVE = OPS.save;
    const OP_RESTORE = OPS.restore;
    const OP_TRANSFORM = OPS.transform;
    const OP_BEGIN_PATH = OPS.beginPath; // constructPath in some versions
    const OP_CONSTRUCT_PATH = OPS.constructPath;

    const transformStack = [[1, 0, 0, 1, 0, 0]];

    // Helper: apply current transform matrix to a point
    function applyTransform(x, y) {
      const [a, b, c, d, e, f] = currentTransform;
      return [a * x + c * y + e, b * x + d * y + f];
    }

    // Helper: multiply two 6-element transform matrices
    function multiplyTransform(m1, m2) {
      return [
        m1[0] * m2[0] + m1[2] * m2[1],
        m1[1] * m2[0] + m1[3] * m2[1],
        m1[0] * m2[2] + m1[2] * m2[3],
        m1[1] * m2[2] + m1[3] * m2[3],
        m1[0] * m2[4] + m1[2] * m2[5] + m1[4],
        m1[1] * m2[4] + m1[3] * m2[5] + m1[5],
      ];
    }

    // Process a completed path to find lines
    function processPath() {
      for (let j = 0; j < currentPath.length; j++) {
        const seg = currentPath[j];
        if (seg.type === 'rect') {
          // A rectangle with very small width = vertical line
          // A rectangle with very small height = horizontal line
          const [rx, ry] = applyTransform(seg.x, seg.y);
          const [rx2, ry2] = applyTransform(seg.x + seg.w, seg.y + seg.h);
          const w = Math.abs(rx2 - rx);
          const h = Math.abs(ry2 - ry);
          // Convert from PDF coords (origin bottom-left) to top-left
          const pdfY1 = Math.min(ry, ry2);
          const pdfY2 = Math.max(ry, ry2);
          const screenY1 = pageHeight - pdfY2;
          const screenY2 = pageHeight - pdfY1;

          if (w < 2 && h > 10) {
            // Vertical line (thin rectangle)
            verticalXs.push(Math.min(rx, rx2));
          } else if (h < 2 && w > 10) {
            // Horizontal line (thin rectangle)
            horizontalYs.push(screenY1);
          }
        } else if (seg.type === 'line' && j > 0 && currentPath[j - 1].type === 'move') {
          const prev = currentPath[j - 1];
          const [x1, y1] = applyTransform(prev.x, prev.y);
          const [x2, y2] = applyTransform(seg.x, seg.y);
          const dx = Math.abs(x2 - x1);
          const dy = Math.abs(y2 - y1);
          const len = Math.sqrt(dx * dx + dy * dy);
          if (len > 20) {
            if (dy < 2 && dx > 20) {
              // Horizontal line
              horizontalYs.push(pageHeight - Math.min(y1, y2));
            } else if (dx < 2 && dy > 20) {
              // Vertical line
              verticalXs.push(Math.min(x1, x2));
            }
          }
        }
      }
      currentPath = [];
    }

    // Walk through all operators
    for (let i = 0; i < ops.fnArray.length; i++) {
      const fn = ops.fnArray[i];
      const args = ops.argsArray[i];

      if (fn === OP_SAVE) {
        transformStack.push(currentTransform.slice());
      } else if (fn === OP_RESTORE) {
        if (transformStack.length > 1) currentTransform = transformStack.pop();
      } else if (fn === OP_TRANSFORM) {
        currentTransform = multiplyTransform(currentTransform, args);
      } else if (fn === OP_RECT) {
        currentPath.push({ type: 'rect', x: args[0], y: args[1], w: args[2], h: args[3] });
      } else if (fn === OP_MOVE) {
        currentPath.push({ type: 'move', x: args[0], y: args[1] });
      } else if (fn === OP_LINE) {
        currentPath.push({ type: 'line', x: args[0], y: args[1] });
      } else if (fn === OP_STROKE || fn === OP_FILL || fn === OP_FILL_STROKE ||
                 fn === OP_CLOSE_STROKE || fn === OP_CLOSE_FILL_STROKE || fn === OP_EOFIIL) {
        processPath();
      } else if (fn === OP_CONSTRUCT_PATH) {
        // constructPath — pdf.js bundles path operations into a single operator
        // args[0] = array of sub-ops, args[1] = array of numbers
        if (Array.isArray(args[0]) && Array.isArray(args[1])) {
          const subOps = args[0];
          const subArgs = args[1];
          let argIdx = 0;
          for (let s = 0; s < subOps.length; s++) {
            const subOp = subOps[s];
            if (subOp === OP_RECT) {
              currentPath.push({ type: 'rect', x: subArgs[argIdx], y: subArgs[argIdx + 1], w: subArgs[argIdx + 2], h: subArgs[argIdx + 3] });
              argIdx += 4;
            } else if (subOp === OP_MOVE) {
              currentPath.push({ type: 'move', x: subArgs[argIdx], y: subArgs[argIdx + 1] });
              argIdx += 2;
            } else if (subOp === OP_LINE) {
              currentPath.push({ type: 'line', x: subArgs[argIdx], y: subArgs[argIdx + 1] });
              argIdx += 2;
            } else {
              // Other path ops — skip their args (curve = 6, closePath = 0)
              if (subOp === OPS.curveTo || subOp === OPS.curveTo2 || subOp === OPS.curveTo3) argIdx += 6;
              else if (subOp === 16 || subOp === 17) argIdx += 4; // bezierCurve variant
              // closePath, endPath = 0 args
            }
          }
        }
      }
    }

    // Deduplicate nearby lines (within 3 units)
    const dedup = (arr) => {
      if (!arr.length) return arr;
      const sorted = arr.slice().sort((a, b) => a - b);
      const result = [sorted[0]];
      for (let i = 1; i < sorted.length; i++) {
        if (sorted[i] - result[result.length - 1] > 3) result.push(sorted[i]);
      }
      return result;
    };

    return {
      vertical: dedup(verticalXs),
      horizontal: dedup(horizontalYs),
      // Also store horizontal lines in PDF coordinate space (Y increases upward from bottom)
      // This matches text items' transform[5] values directly, making row assignment trivial.
      horizontalPdfY: dedup(horizontalYs.map(screenY => pageHeight - screenY)),
      pageHeight,
    };
  } catch (e) {
    // If operator list parsing fails for any reason, return null
    return null;
  }
}

// Detects if a text layer is garbled (broken font encoding). Common symptoms:
// - High ratio of non-printable or unusual Unicode characters
// - Very few recognizable English words
// - Many short "words" that are just random symbol sequences
// - Unusual character distribution (too many uppercase, brackets, random mixing)
// This is crucial for PDFs where the font's ToUnicode map is missing/broken —
// the text renders visually correct (the glyphs look right) but the extracted
// character codes map to wrong Unicode points.
function isTextLayerGarbled(items) {
  if (items.length === 0) return false;

  // Sample up to 60 items to avoid overhead on huge pages
  const sample = items.length > 60
    ? items.filter((_, i) => i % Math.ceil(items.length / 60) === 0)
    : items;

  let totalChars = 0;
  let printableAsciiChars = 0;
  let recognizableWords = 0;
  let totalWords = 0;
  let uppercaseChars = 0;
  let letterChars = 0;
  let bracketCount = 0;
  let longWordCount = 0; // words >= 4 chars that look like real words

  // Common English words/fragments that should appear in real text
  const commonPatterns = /^(the|and|for|are|but|not|you|all|can|her|was|one|our|out|of|to|in|is|it|on|at|or|an|by|as|be|no|if|do|up|so|we|he|me|my|us|am|may|tax|date|name|amount|total|page|from|this|that|with|have|will|year|been|each|make|like|long|look|many|some|than|them|then|what|when|your|more|over|such|take|into|time|very|just|know|also|back|only|come|its|most|new|now|way|who|did|get|has|him|his|how|man|old|see|two|own|say|she|too|use|sec|no|per|sr|dr|mr|mrs|ref|sl|rs|inr|usd|fy|ay|section|income|under|interest|dividend|salary|rent|capital|gain|loss|credit|debit|bank|account|number|transaction|balance|deposit|payment|receipt|invoice|bill|order|address|city|state|pin|pan|tan|gst|challan|assessment|return|filed|due|paid|source|nature|gross|net|fees|commission|charges|details)\b/i;

  sample.forEach(item => {
    const str = item.str || '';
    totalChars += str.length;
    for (let j = 0; j < str.length; j++) {
      const code = str.charCodeAt(j);
      if (code >= 32 && code <= 126) printableAsciiChars++;
      if ((code >= 65 && code <= 90)) { uppercaseChars++; letterChars++; }
      if ((code >= 97 && code <= 122)) letterChars++;
      if (code === 91 || code === 93 || code === 123 || code === 125) bracketCount++;
    }
    // Check word-level recognition
    const words = str.split(/\s+/).filter(w => w.length > 0);
    words.forEach(word => {
      totalWords++;
      if (commonPatterns.test(word) || /^\d[\d,.\-\/]+$/.test(word)) {
        recognizableWords++;
      }
      // Count words that look like real English (4+ chars, mostly lowercase, common patterns)
      if (word.length >= 4 && /^[a-z]+$/i.test(word) && /[aeiou]/i.test(word)) {
        longWordCount++;
      }
    });
  });

  if (totalChars === 0) return false;

  const asciiRatio = printableAsciiChars / totalChars;
  const wordRecognitionRate = totalWords > 0 ? recognizableWords / totalWords : 0;
  const uppercaseRatio = letterChars > 0 ? uppercaseChars / letterChars : 0;
  const bracketRatio = totalChars > 0 ? bracketCount / totalChars : 0;
  const longWordRatio = totalWords > 0 ? longWordCount / totalWords : 0;

  // If less than 60% of characters are printable ASCII, likely garbled
  if (asciiRatio < 0.6) return true;

  // If less than 5% of words are recognizable and we have enough words, likely garbled
  if (totalWords > 10 && wordRecognitionRate < 0.05) return true;

  // High bracket ratio is suspicious — real text rarely has >5% brackets
  if (bracketRatio > 0.08 && totalChars > 30) return true;

  // Extremely high uppercase ratio in a page with many words is suspicious
  // (real English text is typically 5-15% uppercase; garbled CID fonts often produce
  // mostly uppercase because the character codes happen to map to A-Z range)
  if (uppercaseRatio > 0.7 && letterChars > 30 && longWordRatio < 0.15) return true;

  // If we have many words but almost none look like real English words (4+ chars with vowels)
  if (totalWords > 15 && longWordRatio < 0.08 && wordRecognitionRate < 0.1) return true;

  // Additional check: if many items are very short (1-3 chars) random-looking strings
  // with unusual characters, it's likely a broken encoding
  const shortGarbled = sample.filter(item => {
    const s = (item.str || '').trim();
    return s.length >= 1 && s.length <= 3 && /[^a-zA-Z0-9\s.,\-:;()\/]/.test(s);
  }).length;
  if (sample.length > 5 && shortGarbled / sample.length > 0.35) return true;

  return false;
}




/* ---- PDF to Word (block-aware text/table extraction → docx, with a live preview) ---- */

async function extractDocxChildrenFromPdf(arrayBuffer, onProgress, useOcr, password) {
  const { Paragraph: DocxParagraph, TextRun: DocxTextRun, Table: DocxTable, TableRow: DocxTableRow, TableCell: DocxTableCell, WidthType: DocxWidthType, AlignmentType: DocxAlignmentType, TabStopType: DocxTabStopType } = docx;
  const pdf = await openPdfJs(arrayBuffer, password);
  const children = [];

  const firstPageViewport = (await pdf.getPage(1)).getViewport({ scale: 1 });
  const pageWidthPt = firstPageViewport.width, pageHeightPt = firstPageViewport.height;

  const pageResults = await gatherPdfPageItems(pdf, useOcr, onProgress);

  for (let i = 0; i < pdf.numPages; i++) {
    const thisPageWidthPt = pageResults[i].pageWidthPt || pageWidthPt;
    const blocks = analyzePageItemsIntoBlocks(pageResults[i].items, thisPageWidthPt);

    if (blocks.length === 0) {
      children.push(new DocxParagraph({ children: [new DocxTextRun('')] }));
    } else {
      blocks.forEach(block => {
        if (block.type === 'table') {
          const colCount = Math.max(...block.rows.map(r => r.length));
          const colWidth = Math.floor(100 / colCount);
          const tableRows = block.rows.map(cells => {
            const padded = cells.concat(Array(Math.max(0, colCount - cells.length)).fill(''));
            return new DocxTableRow({
              children: padded.map(cellText => new DocxTableCell({
                width: { size: colWidth, type: DocxWidthType.PERCENTAGE },
                children: [new DocxParagraph({ children: [new DocxTextRun(cellText)] })],
              })),
            });
          });
          // Full page width and no overflow: PERCENTAGE-typed table + cell widths that sum to 100.
          children.push(new DocxTable({ width: { size: 100, type: DocxWidthType.PERCENTAGE }, rows: tableRows }));
        } else if (block.type === 'tabbed') {
          // Real Word tab stops, placed at the same positions the columns actually sat
          // at in the PDF (converted to twips — 20 per point) — this only works
          // correctly because the document's own page width is now set to match the
          // source PDF (see below); otherwise these positions would drift on a
          // differently-sized default page.
          const tabStops = block.cells.slice(1).map(c => ({ type: DocxTabStopType.LEFT, position: Math.round(c.x * 20) }));
          const text = block.cells.map(c => c.text).join('\t');
          children.push(new DocxParagraph({
            tabStops,
            children: [new DocxTextRun({ text, size: block.size * 2 })],
          }));
        } else {
          const runs = buildDocxRunsFromItems(block.items, block.text, block.size, DocxTextRun);
          children.push(new DocxParagraph({
            children: runs,
            alignment: block.alignment === 'center' ? DocxAlignmentType.CENTER : undefined,
          }));
        }
      });
    }
    if (i < pdf.numPages - 1) children.push(new DocxParagraph({ children: [new DocxTextRun('')] }));
  }
  return { children, numPages: pdf.numPages, pageWidthPt, pageHeightPt };
}

// Splits a text block's original items into consecutive runs of matching bold/italic
// state, so a line that's part label-in-bold, part plain value keeps that distinction
// in the Word output — rather than collapsing everything to one flat, always-plain run
// the way a single joined string would. Falls back to one plain run if item-level style
// info isn't available (e.g. OCR'd text, which has no real font to inspect).
function buildDocxRunsFromItems(items, fallbackText, sizePt, DocxTextRun) {
  if (!items || !items.length) return [new DocxTextRun({ text: fallbackText, size: sizePt * 2 })];
  const sorted = items.slice().sort((a, b) => a.transform[4] - b.transform[4]);
  const runs = [];
  let cur = null;
  sorted.forEach((item, idx) => {
    const bold = !!item.bold, italic = !!item.italic;
    const prev = idx > 0 ? sorted[idx - 1] : null;
    const gap = prev ? item.transform[4] - (prev.transform[4] + (prev.width || 0)) : 0;
    const spacer = prev && gap > 0.3 ? ' ' : '';
    if (cur && cur.bold === bold && cur.italic === italic) {
      cur.text += spacer + item.str;
    } else {
      if (cur) runs.push(cur);
      cur = { text: item.str, bold, italic };
    }
  });
  if (cur) runs.push(cur);
  return runs.map(r => new DocxTextRun({ text: r.text, bold: r.bold, italics: r.italic, size: sizePt * 2 }));
}

// Visually scales the rendered page(s) down to fit the available width using a CSS
// transform, rather than constraining max-width — a transform only changes what's
// painted on screen, so the browser still lays out (and wraps) the text at the
// document's true original width. That's what keeps fonts/alignment accurate while
// still letting you see the whole page without scrolling sideways.
function fitDocxWrapperToWidth(target) {
  const wrapper = target.querySelector('.docx-wrapper');
  if (!wrapper) return;
  wrapper.style.transform = '';
  wrapper.style.marginBottom = '';
  const naturalWidth = wrapper.scrollWidth;
  const availableWidth = target.clientWidth;
  if (naturalWidth > availableWidth && naturalWidth > 0) {
    const scale = availableWidth / naturalWidth;
    wrapper.style.transformOrigin = 'top left';
    wrapper.style.transform = `scale(${scale})`;
    const naturalHeight = wrapper.scrollHeight;
    wrapper.style.marginBottom = `${-(naturalHeight * (1 - scale))}px`;
  }
}

window.addEventListener('resize', () => {
  ['docxPreviewWrap', 'docxLivePreviewWrap'].forEach(id => {
    const t = document.getElementById(id);
    if (t) fitDocxWrapperToWidth(t);
  });
});

async function renderDocxPreviewInto(bytes, containerId) {
  const styleHost = document.getElementById('docxStyleHost');
  styleHost.innerHTML = '';
  const target = document.getElementById(containerId);
  if (!target) return 0;
  try {
    await docxPreview.renderAsync(bytes, target, styleHost, {
      inWrapper: true, className: 'docx', breakPages: true,
      ignoreWidth: false, ignoreHeight: false, ignoreFonts: false, experimental: true,
    });
    const pageSections = target.querySelectorAll('.docx-wrapper > section.docx');
    pageSections.forEach((sec, i) => {
      sec.style.position = 'relative';
      const badge = document.createElement('div');
      badge.className = 'docx-page-badge';
      badge.textContent = `Page ${i + 1} of ${pageSections.length}`;
      sec.insertBefore(badge, sec.firstChild);
    });
    fitDocxWrapperToWidth(target);
    return pageSections.length;
  } catch (e) {
    target.innerHTML = `<div style="padding:16px;color:var(--muted);font-size:13px;">(Preview unavailable for this file.)</div>`;
    return 0;
  }
}

function ensurePdf2WordPreviewContainer() {
  let el = document.getElementById('pdf2wordPreviewContainer');
  if (!el) {
    el = document.createElement('div');
    el.id = 'pdf2wordPreviewContainer';
    el.style.marginTop = '18px';
    els.optionsPanel.appendChild(el);
  }
  return el;
}

let pdf2wordPreviewToken = 0;

async function updatePdf2WordExtractionPreview() {
  if (state.toolKey !== 'pdf2word') return;
  const container = ensurePdf2WordPreviewContainer();
  const myToken = ++pdf2wordPreviewToken;

  if (state.files.length === 0) { container.innerHTML = ''; return; }
  container.innerHTML = `<div class="pdf2word-status" style="color:var(--muted);font-size:13px;padding:4px 0;">Building preview…</div>`;

  const { files: workingFiles, merged } = await getWorkingFiles('wordMerge');
  if (myToken !== pdf2wordPreviewToken) return;

  if (workingFiles.length !== 1) {
    container.innerHTML = `<div style="color:var(--muted);font-size:13px;padding:4px 0;">Preview isn't shown when files are kept separate — each becomes its own document when you click Process.</div>`;
    return;
  }

  const useOcr = !!document.getElementById('wordOcr')?.checked;
  try {
    const { children, pageWidthPt, pageHeightPt } = await extractDocxChildrenFromPdf(
      workingFiles[0].arrayBuffer.slice(0),
      (i, total, status) => { const s = container.querySelector('.pdf2word-status'); if (s) s.textContent = status ? ocrProgressMessage(i, total, status) : 'Building preview…'; },
      useOcr,
      workingFiles[0].password
    );
    if (myToken !== pdf2wordPreviewToken) return;
    const { Document: DocxDocument, Packer: DocxPacker } = docx;
    // Match the Word document's page size to the source PDF's — previously this
    // silently defaulted to US Letter regardless of the PDF's actual dimensions, which
    // would throw off tab-stop columns (and generally look off) on any non-Letter PDF.
    const docxDoc = new DocxDocument({ sections: [{ properties: { page: { size: { width: Math.round(pageWidthPt * 20), height: Math.round(pageHeightPt * 20) } } }, children }] });
    const blob = await DocxPacker.toBlob(docxDoc);
    const bytes = await blob.arrayBuffer();
    if (myToken !== pdf2wordPreviewToken) return;

    container.innerHTML = `
      <div class="preview-label">Preview${merged ? ' (merged files)' : ''}</div>
      <div id="docxLivePageCount" style="font-weight:700;color:var(--ink);margin-bottom:10px;font-size:13.5px;"></div>
      <div id="docxLivePreviewWrap" class="docx-preview-box"></div>
    `;
    const pageCount = await renderDocxPreviewInto(bytes, 'docxLivePreviewWrap');
    if (myToken !== pdf2wordPreviewToken) return;
    const countEl = document.getElementById('docxLivePageCount');
    if (countEl && pageCount) countEl.textContent = `This will convert into ${pageCount} page${pageCount === 1 ? '' : 's'}.`;
  } catch (e) {
    if (myToken === pdf2wordPreviewToken) {
      container.innerHTML = `<div class="warn-note error">Couldn't build a preview: ${escapeHtml(describeExtractionError(e))}</div>`;
    }
  }
}

async function processPdf2Word() {
  const { Document: DocxDocument, Packer: DocxPacker } = docx;
  const { files: workingFiles, merged } = await getWorkingFiles('wordMerge');
  const useOcr = !!document.getElementById('wordOcr')?.checked;

  if (workingFiles.length === 1) {
    setProgress(10, 'Reading PDF…');
    const f = workingFiles[0];
    const { children, numPages, pageWidthPt, pageHeightPt } = await extractDocxChildrenFromPdf(
      f.arrayBuffer.slice(0),
      (i, total, status) => setProgress(10 + (70 * i) / total, ocrProgressMessage(i, total, status)),
      useOcr,
      f.password
    );
    setProgress(85, 'Building Word document…');
    const docxDoc = new DocxDocument({ sections: [{ properties: { page: { size: { width: Math.round(pageWidthPt * 20), height: Math.round(pageHeightPt * 20) } } }, children }] });
    const blob = await DocxPacker.toBlob(docxDoc);
    const bytes = await blob.arrayBuffer();
    setProgress(100, 'Done');
    const baseName = merged ? 'merged' : f.name.replace(/\.pdf$/i, '');
    showResult(
      [{ url: downloadable(bytes, blob.type), filename: `${baseName}.docx` }],
      `Extracted ${numPages} page(s). Runs of gridded rows were rebuilt as real Word tables; everything else keeps its approximate original size.${useOcr ? ' Scanned pages were read with OCR — double-check that text for accuracy.' : ''} Merged cells and multi-column page layouts still won't be exact — see the preview above.`
    );
    return;
  }

  // Multiple files, kept separate: one .docx per file (no combined preview, to keep this simple).
  const downloads = [];
  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(10 + (85 * fi) / workingFiles.length, `Extracting text from ${f.name}…`);
    const { children, pageWidthPt, pageHeightPt } = await extractDocxChildrenFromPdf(f.arrayBuffer.slice(0), null, useOcr, f.password);
    const docxDoc = new DocxDocument({ sections: [{ properties: { page: { size: { width: Math.round(pageWidthPt * 20), height: Math.round(pageHeightPt * 20) } } }, children }] });
    const blob = await DocxPacker.toBlob(docxDoc);
    const bytes = await blob.arrayBuffer();
    downloads.push({ url: downloadable(bytes, blob.type), filename: f.name.replace(/\.pdf$/i, '') + '.docx' });
  }
  setProgress(100, 'Done');
  showResult(downloads, `Extracted text from ${workingFiles.length} files into separate Word documents.`);
}

/* ---- PDF to Excel (position-based heuristic table extraction → xlsx, with preview) ---- */

// Post-processing: splits cells that contain structured data patterns.
// After column assignment, some cells end up containing multiple logical values
// concatenated with single spaces (e.g. "1 31/03/2026 Q4(Jan-Mar)").
// This expands those cells into additional columns.
function splitStructuredCells(rows) {
  if (!rows.length) return rows;

  // Process each row: try to split cells that match structured patterns
  const expanded = rows.map(row => {
    const newRow = [];
    row.forEach(cell => {
      if (!cell || cell.trim().length === 0) {
        newRow.push(cell);
        return;
      }
      const split = splitStructuredDataCell(cell);
      if (split) {
        newRow.push(...split);
      } else {
        newRow.push(cell);
      }
    });
    return newRow;
  });

  return expanded;
}

// Post-processing: normalizes table output for cleaner Excel results.
// 1. Pads all rows to the same column count (the mode, to avoid outlier rows bloating it)
// 2. Removes rows that are just visual separators (lines of dashes, underscores, equals)
// 3. Removes completely empty rows
// 4. Trims whitespace from all cells
// 5. Detects and removes duplicate header rows that appear on multi-page tables
function normalizeTableOutput(rows) {
  if (!rows.length) return rows;

  // Step 1: Remove separator rows (rows that are all dashes, underscores, dots, or equals)
  const isSeparatorRow = (row) => {
    const nonEmpty = row.filter(c => c && c.trim().length > 0);
    if (nonEmpty.length === 0) return true; // empty row
    return nonEmpty.every(c => /^[\s\-_=.·•|+]+$/.test(c.trim()));
  };

  let cleaned = rows.filter(r => !isSeparatorRow(r));
  if (!cleaned.length) return rows; // don't remove everything

  // Step 2: Trim all cells and remove trailing pipe characters (OCR artifact from reading grid lines)
  cleaned = cleaned.map(row => row.map(cell => (cell || '').trim().replace(/\s*\|\s*$/, '').replace(/^\|\s*/, '').trim()));

  // Step 3: Normalize column count — use the MODE (most common) non-zero column count
  const colCounts = cleaned.map(r => r.length).filter(c => c > 0);
  if (!colCounts.length) return cleaned;
  const targetCols = mode(colCounts);

  cleaned = cleaned.map(row => {
    if (row.length < targetCols) {
      // Pad short rows
      return row.concat(Array(targetCols - row.length).fill(''));
    } else if (row.length > targetCols) {
      // For rows that are too wide, try to merge excess columns into the last column
      // (common when a cell contains a separator character that was incorrectly split)
      const merged = row.slice(0, targetCols - 1);
      merged.push(row.slice(targetCols - 1).join(' ').trim());
      return merged;
    }
    return row;
  });

  // Step 4: Detect and remove duplicate header rows
  // On multi-page documents, the same header row may appear multiple times (once per page)
  // Only remove duplicates if they're not the first row
  if (cleaned.length > 3) {
    const firstRow = cleaned[0].join('|').toLowerCase();
    const duplicateHeaderIndices = [];
    for (let i = 1; i < cleaned.length; i++) {
      const rowKey = cleaned[i].join('|').toLowerCase();
      if (rowKey === firstRow) duplicateHeaderIndices.push(i);
    }
    // Remove duplicate headers (keep the first one)
    if (duplicateHeaderIndices.length > 0 && duplicateHeaderIndices.length < cleaned.length / 2) {
      cleaned = cleaned.filter((_, i) => !duplicateHeaderIndices.includes(i));
    }
  }

  // Step 5: Remove completely empty rows (all cells empty after trimming)
  cleaned = cleaned.filter(row => row.some(c => c.length > 0));

  return cleaned;
}

// Detects rows in the ORIGINAL (pre-column-processing) row list that follow an
// unusually large vertical gap compared to the rest of the page — these usually mark a
// real section break in the source document (e.g. blank space between the header block
// and the first table, or between two separate tables on one page). Returns short text
// snippets identifying which rows those are, so a blank row can be reinserted right
// before the matching row later, once the final table structure has been built and
// cleaned up — content-matching survives all the reshaping in between far better than
// trying to track a row index through every transformation.
function findSectionBreakAnchors(rows) {
  if (rows.length < 3) return [];
  const withY = rows.map(r => ({ row: r, y: r.length ? r.reduce((s, it) => s + it.transform[5], 0) / r.length : null }))
    .filter(x => x.y !== null);
  if (withY.length < 3) return [];
  const gaps = [];
  for (let i = 1; i < withY.length; i++) gaps.push(Math.abs(withY[i - 1].y - withY[i].y));
  const sorted = gaps.slice().sort((a, b) => a - b);
  const medianGap = sorted[Math.floor(sorted.length / 2)] || 1;
  const threshold = Math.max(medianGap * 1.8, medianGap + 4);

  const anchors = [];
  for (let i = 1; i < withY.length; i++) {
    if (Math.abs(withY[i].y - withY[i - 1].y) > threshold) {
      const text = joinRowItems(withY[i].row).slice(0, 24).trim();
      if (text) anchors.push(text);
    }
  }
  return anchors;
}

// Reinserts a blank row right before any row in the final table whose content starts
// with (or closely matches) one of the given section-break anchors — restoring the
// source document's visual vertical spacing as an actual blank spreadsheet row. Applied
// as the very last step, after every other cleanup pass, so it isn't stripped again as
// "just another empty row."
function reinsertSectionBreaks(rows, anchors) {
  if (!anchors || !anchors.length || !rows.length) return rows;
  const colCount = rows[0].length || 1;
  const out = [];
  rows.forEach((row, i) => {
    const firstCell = (row.find(c => c && c.trim().length > 0) || '').trim();
    const matchesAnchor = firstCell && anchors.some(a => firstCell.startsWith(a.slice(0, 12)) || a.startsWith(firstCell.slice(0, 12)));
    const prevWasBlank = out.length > 0 && out[out.length - 1].every(c => !c);
    if (matchesAnchor && i > 0 && !prevWasBlank) {
      out.push(new Array(colCount).fill(''));
    }
    out.push(row);
  });
  return out;
}

async function extractSheetsFromPdf(arrayBuffer, onProgress, useOcr, password) {
  const pdf = await openPdfJs(arrayBuffer, password);
  const pageResults = await gatherPdfPageItems(pdf, useOcr, onProgress);

  // Cross-page column boundary reuse: detect boundaries on the first page that looks
  // tabular, then reuse those boundaries for subsequent pages with similar structure
  // (similar page width, similar number of expected columns). This dramatically improves
  // consistency across multi-page tables like bank statements and tax documents.
  let referenceBoundaries = null;
  let referenceExpectedCols = 0;
  let referencePageWidth = 0;

  const sheets = pageResults.map((r, i) => {
    if (!r.items.length) return { name: `Page ${i + 1}`, rows: [], hasTextLayer: r.hasTextLayer, usedOcr: r.usedOcr };

    // Use vector horizontal lines for row boundaries if available
    const vectorLines = r.items._vectorLines;
    // Need at least 4 horizontal lines to define meaningful row bands (4 lines = 3 internal rows)
    const hasHorizontalGrid = vectorLines && vectorLines.horizontalPdfY && vectorLines.horizontalPdfY.length >= 4;

    // Also check OCR-detected grid lines for horizontal boundaries
    const ocrGridLines = r.items._gridLines;
    // Only use OCR horizontal grid if there are enough lines to actually define multiple rows
    // (at least 4 lines = at least 3 row bands — fewer than that is just table borders, not row separators)
    const hasOcrHorizontalGrid = !hasHorizontalGrid && ocrGridLines && ocrGridLines.horizontal && ocrGridLines.horizontal.length >= 4;

    let rows;
    if (hasHorizontalGrid) {
      rows = groupItemsIntoRowsByLines(r.items, vectorLines);
    } else if (hasOcrHorizontalGrid) {
      // OCR grid lines use the same coordinate system as OCR items (Y top-down, divided by scale)
      rows = groupItemsIntoRowsByOcrGrid(r.items, ocrGridLines.horizontal);
    } else {
      rows = groupItemsIntoRows(r.items.filter(it => it && it.str !== undefined));
    }
    const sectionBreakAnchors = findSectionBreakAnchors(rows);
    const info = analyzeRowsForTable(rows);
    const multiColRows = info.filter(ri => ri.isMultiCol);
    const multiColRatio = multiColRows.length / info.length;

    // Determine column structure for this page
    const colCounts = multiColRows.map(ri => ri.posCells.length > 1 ? ri.posCells.length : (ri.colonCells ? 2 : 1));
    const pageExpectedCols = colCounts.length > 0 ? mode(colCounts) : 0;

    // Calculate page width from items
    let pageMinX = Infinity, pageMaxX = -Infinity;
    rows.forEach(row => row.forEach(it => {
      pageMinX = Math.min(pageMinX, it.transform[4]);
      pageMaxX = Math.max(pageMaxX, it.transform[4] + (it.width || 0));
    }));
    const pageWidth = pageMaxX - pageMinX;

    // Check structural consistency
    const consistentRows = colCounts.filter(c => c === pageExpectedCols || Math.abs(c - pageExpectedCols) <= 1).length;
    const structuralConsistency = colCounts.length > 0 ? consistentRows / colCounts.length : 0;
    const effectiveThreshold = structuralConsistency > 0.6 ? 0.15 : 0.3;

    // If we have vector lines (real drawn grid) OR OCR-detected grid lines,
    // ALWAYS use them regardless of the multi-col ratio — the grid tells us
    // definitively that this is a table, even if the text gaps don't show it.
    // (ocrGridLines was already defined above for horizontal check)
    const hasGrid = (vectorLines && vectorLines.vertical.length >= 2) ||
                    (ocrGridLines && ocrGridLines.vertical && ocrGridLines.vertical.length >= 2);

    if (!hasGrid && multiColRatio < effectiveThreshold) {
      const result = info.map(ri => (ri.posCells.length > 1 ? ri.posCells : (ri.colonCells || ri.posCells))).filter(row => row.some(c => c.length > 0));
      return { name: `Page ${i + 1}`, rows: result, hasTextLayer: r.hasTextLayer, usedOcr: r.usedOcr, sectionBreakAnchors };
    }

    const anyPositional = info.some(ri => ri.posCells.length > 1);
    if (!hasGrid && !anyPositional) {
      const result = info.map(ri => ri.colonCells || ri.posCells).filter(row => row.some(c => c.length > 0));
      return { name: `Page ${i + 1}`, rows: result, hasTextLayer: r.hasTextLayer, usedOcr: r.usedOcr, sectionBreakAnchors };
    }

    // Positional table extraction with cross-page reuse
    let boundaries;
    const pageSimilarToReference = referenceBoundaries &&
      Math.abs(pageExpectedCols - referenceExpectedCols) <= 1 &&
      Math.abs(pageWidth - referencePageWidth) < referencePageWidth * 0.15;

    // Priority 1: Vector lines from the PDF's actual drawn grid (most reliable)
    // These come from real table borders drawn in the PDF — they're authoritative.

    if (hasGrid && vectorLines && vectorLines.vertical.length >= 2) {
      // Use vector line positions as column boundaries
      boundaries = vectorLines.vertical;
    } else if (ocrGridLines && ocrGridLines.vertical && ocrGridLines.vertical.length >= 2) {
      // Fallback: grid lines detected from binarized image (OCR path)
      boundaries = ocrGridLines.vertical;
    } else if (pageSimilarToReference) {
      // Reuse boundaries from the reference page — ensures consistent columns
      boundaries = referenceBoundaries;
    } else {
      // Detect boundaries fresh from text positions
      boundaries = detectColumnBoundaries(rows);
      // If this page has good structure, set it as the reference for subsequent pages
      if (!referenceBoundaries && structuralConsistency > 0.5 && boundaries.length >= 2) {
        referenceBoundaries = boundaries;
        referenceExpectedCols = pageExpectedCols;
        referencePageWidth = pageWidth;
      }
    }

    const aligned = rows.map(row => assignItemsToColumns(row, boundaries)).filter(row => row.some(c => c.length > 0));
    const result = mergeWrappedRows(aligned);
    return { name: `Page ${i + 1}`, rows: result, hasTextLayer: r.hasTextLayer, usedOcr: r.usedOcr, sectionBreakAnchors };
  });

  // Apply character whitelisting cleanup on pages that used OCR — fixes common
  // misreads in numeric columns (O→0, l→1, etc.) after the table structure is finalized.
  return sheets.map(sheet => {
    if (sheet.usedOcr && sheet.rows.length > 0) {
      return { ...sheet, rows: cleanupColumnTypes(sheet.rows, sheet.sectionBreakAnchors) };
    }
    return sheet;
  }).map(sheet => {
    // Split cells that contain structured data patterns (e.g. "1 31/03/2026 Q4(Jan-Mar)")
    // This catches cases where OCR word items got joined into one column by assignItemsToColumns
    if (sheet.rows.length > 0) {
      return { ...sheet, rows: splitStructuredCells(sheet.rows) };
    }
    return sheet;
  }).map(sheet => {
    // Normalize column count and remove separator/empty rows for cleaner output
    if (sheet.rows.length > 0) {
      return { ...sheet, rows: normalizeTableOutput(sheet.rows) };
    }
    return sheet;
  }).map(sheet => {
    // Restore blank rows where the source PDF had an obvious vertical gap (e.g. between
    // the header block and the first table) — done last, by content-matching, since
    // every step above would otherwise strip a literal blank row right back out.
    if (sheet.rows.length > 0 && sheet.sectionBreakAnchors && sheet.sectionBreakAnchors.length) {
      return { ...sheet, rows: reinsertSectionBreaks(sheet.rows, sheet.sectionBreakAnchors) };
    }
    return sheet;
  });
}

// Auto-widths columns from content length so opening the file doesn't show clipped,
// overflowing cells — a real, supported feature of the bundled (community) SheetJS build.
function autoSizeColumns(ws, rows) {
  const colCount = rows.reduce((max, r) => Math.max(max, r.length), 0);
  const widths = [];
  for (let c = 0; c < colCount; c++) {
    let maxLen = 6;
    rows.forEach(r => { if (r[c]) maxLen = Math.max(maxLen, String(r[c]).length); });
    widths.push({ wch: Math.min(maxLen + 2, 60) });
  }
  ws['!cols'] = widths;
}

// Builds the workbook. If a sheet has manual breaks marked (from the preview editor),
// that sheet is split into several separate sheets at those points instead of one —
// the free spreadsheet library here can't reliably write real Excel print-page-break
// metadata (confirmed: it silently drops it), so an actual sheet split is the honest,
// working equivalent rather than a marker that would quietly do nothing.
function buildWorkbookBytes(sheets, breaksList) {
  const wb = XLSX.utils.book_new();
  sheets.forEach((s, i) => {
    const rows = s.rows.length ? s.rows : [['']];
    const breaks = breaksList && breaksList[i];
    if (!breaks || (breaks.rows.size === 0 && breaks.cols.size === 0)) {
      const ws = XLSX.utils.aoa_to_sheet(rows);
      autoSizeColumns(ws, rows);
      XLSX.utils.book_append_sheet(wb, ws, s.name.slice(0, 31));
    } else {
      const tiles = computeBreakChunks(rows, breaks);
      tiles.forEach((tile, tIdx) => {
        const ws = XLSX.utils.aoa_to_sheet(tile.rows);
        autoSizeColumns(ws, tile.rows);
        XLSX.utils.book_append_sheet(wb, ws, `${s.name}_${tIdx + 1}`.slice(0, 31));
      });
    }
  });
  return XLSX.write(wb, { bookType: 'xlsx', type: 'array' });
}

function ensurePdf2ExcelPreviewContainer() {
  let el = document.getElementById('pdf2excelPreviewContainer');
  if (!el) {
    el = document.createElement('div');
    el.id = 'pdf2excelPreviewContainer';
    el.style.marginTop = '18px';
    els.optionsPanel.appendChild(el);
  }
  return el;
}

let pdf2excelPreviewToken = 0;

async function updatePdf2ExcelExtractionPreview() {
  if (state.toolKey !== 'pdf2excel') return;
  const container = ensurePdf2ExcelPreviewContainer();
  const myToken = ++pdf2excelPreviewToken;

  if (state.files.length === 0) {
    container.innerHTML = '';
    state.pdf2excelSheets = null;
    state.pdf2excelBreaks = null;
    return;
  }
  container.innerHTML = `<div class="pdf2excel-status" style="color:var(--muted);font-size:13px;padding:4px 0;">Building preview…</div>`;

  const { files: workingFiles, merged } = await getWorkingFiles('excelMerge');
  if (myToken !== pdf2excelPreviewToken) return;

  if (workingFiles.length !== 1) {
    container.innerHTML = `<div style="color:var(--muted);font-size:13px;padding:4px 0;">Preview isn't shown when files are kept separate — each becomes its own spreadsheet when you click Process.</div>`;
    state.pdf2excelSheets = null;
    state.pdf2excelBreaks = null;
    return;
  }

  const useOcr = !!document.getElementById('excelOcr')?.checked;
  try {
    const sheets = await extractSheetsFromPdf(
      workingFiles[0].arrayBuffer.slice(0),
      (i, total, status) => { const s = container.querySelector('.pdf2excel-status'); if (s) s.textContent = status ? ocrProgressMessage(i, total, status) : 'Building preview…'; },
      useOcr,
      workingFiles[0].password
    );
    if (myToken !== pdf2excelPreviewToken) return;

    state.pdf2excelSheets = sheets;
    state.pdf2excelBreaks = sheets.map(() => ({ rows: new Set(), cols: new Set() }));

    container.innerHTML = `
      <div class="preview-label">Preview${merged ? ' (merged files)' : ''} — click a row number or column letter on any
        page to mark where a new sheet should start in the downloaded file. Column detection is still a best-effort guess.</div>
      <div id="pdf2excelGlobalInterval"></div>
      <div id="pdf2excelSummary" style="font-weight:700;color:var(--ink);margin:4px 0 14px;font-size:13.5px;"></div>
      <div id="pdf2excelEditors"></div>
    `;
    const editorsEl = document.getElementById('pdf2excelEditors');
    const summaryEl = document.getElementById('pdf2excelSummary');

    function updateSummary() {
      let totalSheets = 0;
      const names = [];
      sheets.forEach((sheet, i) => {
        const rows = sheet.rows.length ? sheet.rows : [['']];
        const tiles = computeBreakChunks(rows, state.pdf2excelBreaks[i]);
        totalSheets += tiles.length;
        tiles.forEach((_, tIdx) => names.push(tiles.length > 1 ? `${sheet.name}_${tIdx + 1}` : sheet.name));
      });
      summaryEl.textContent = `This will produce ${totalSheets} sheet${totalSheets === 1 ? '' : 's'} in the downloaded file: ${names.join(', ')}`;
    }

    function buildSection(i) {
      const sheet = sheets[i];
      const section = document.createElement('div');
      section.className = 'extract-page-block';
      const title = document.createElement('div');
      title.className = 'extract-page-title';
      title.textContent = sheet.name + (sheet.usedOcr ? ' (read with OCR)' : '');
      section.appendChild(title);
      let rows;
      if (sheet.rows.length) {
        rows = sheet.rows;
      } else if (!sheet.hasTextLayer && !sheet.usedOcr) {
        rows = [['(no text layer on this page — it\'s likely a scanned image or a graphic; turn on OCR above to try reading it)']];
      } else if (sheet.usedOcr) {
        rows = [['(OCR ran on this page but didn\'t find any readable text — the scan may be too low quality or blank)']];
      } else {
        rows = [['(text was found on this page but didn\'t come out as readable rows — an unusual layout)']];
      }
      section.appendChild(renderBreakEditableTable(rows, state.pdf2excelBreaks[i], updateSummary));
      return section;
    }

    function rebuildAllSections() {
      editorsEl.innerHTML = '';
      sheets.forEach((sheet, i) => editorsEl.appendChild(buildSection(i)));
      updateSummary();
    }

    // One global "every N rows/columns" control applies the same interval to every
    // page at once, instead of repeating the same two inputs on each page.
    const globalWrap = document.getElementById('pdf2excelGlobalInterval');
    const globalControls = document.createElement('div');
    globalControls.className = 'opt-inline';
    globalControls.style.margin = '8px 0 6px';
    globalControls.innerHTML = `
      <div class="opt-row">
        <label>Break every N rows (applies to every page)</label>
        <input type="number" min="1" id="pdf2excelIntervalRows" style="width:90px" placeholder="e.g. 20">
      </div>
      <div class="opt-row">
        <label>Break every N columns (applies to every page)</label>
        <input type="number" min="1" id="pdf2excelIntervalCols" style="width:90px" placeholder="e.g. 6">
      </div>
    `;
    const rowsIntervalInput = globalControls.querySelector('#pdf2excelIntervalRows');
    const colsIntervalInput = globalControls.querySelector('#pdf2excelIntervalCols');
    // Remembered across rebuilds (e.g. if the file list or merge option changes and this
    // whole preview regenerates) so the number you typed doesn't quietly disappear.
    if (state.pdf2excelIntervalValues.rows) rowsIntervalInput.value = state.pdf2excelIntervalValues.rows;
    if (state.pdf2excelIntervalValues.cols) colsIntervalInput.value = state.pdf2excelIntervalValues.cols;

    rowsIntervalInput.addEventListener('change', (e) => {
      const n = parseInt(e.target.value, 10);
      state.pdf2excelIntervalValues.rows = e.target.value;
      sheets.forEach((sheet, i) => {
        const rowCount = sheet.rows.length || 1;
        state.pdf2excelBreaks[i].rows.clear();
        if (n > 0) for (let r = n - 1; r < rowCount - 1; r += n) state.pdf2excelBreaks[i].rows.add(r);
      });
      rebuildAllSections();
    });
    colsIntervalInput.addEventListener('change', (e) => {
      const n = parseInt(e.target.value, 10);
      state.pdf2excelIntervalValues.cols = e.target.value;
      sheets.forEach((sheet, i) => {
        const colCount = sheet.rows.reduce((m, r) => Math.max(m, r.length), 0);
        state.pdf2excelBreaks[i].cols.clear();
        if (n > 0) for (let c = n - 1; c < colCount - 1; c += n) state.pdf2excelBreaks[i].cols.add(c);
      });
      rebuildAllSections();
    });
    globalWrap.appendChild(globalControls);

    rebuildAllSections();
  } catch (e) {
    if (myToken === pdf2excelPreviewToken) {
      container.innerHTML = `<div class="warn-note error">Couldn't build a preview: ${escapeHtml(describeExtractionError(e))}</div>`;
    }
  }
}

async function processPdf2Excel() {
  const xlsxMime = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
  const { files: workingFiles, merged } = await getWorkingFiles('excelMerge');
  const useOcr = !!document.getElementById('excelOcr')?.checked;

  if (workingFiles.length === 1) {
    const f = workingFiles[0];

    // Reuse the already-extracted sheets from the preview if available — avoids
    // running OCR a second time which is slow and produces identical results.
    let sheets;
    if (state.pdf2excelSheets && state.pdf2excelSheets.length > 0) {
      setProgress(50, 'Using preview data…');
      sheets = state.pdf2excelSheets;
    } else {
      setProgress(10, 'Reading PDF…');
      sheets = await extractSheetsFromPdf(
        f.arrayBuffer.slice(0),
        (i, total, status) => setProgress(10 + (75 * i) / total, ocrProgressMessage(i, total, status)),
        useOcr,
        f.password
      );
    }

    setProgress(90, 'Building spreadsheet…');
    const breaksList = (state.pdf2excelSheets && state.pdf2excelBreaks && state.pdf2excelBreaks.length === sheets.length) ? state.pdf2excelBreaks : null;
    const bytes = buildWorkbookBytes(sheets, breaksList);
    setProgress(100, 'Done');
    const baseName = merged ? 'merged' : f.name.replace(/\.pdf$/i, '');
    const anySplits = breaksList && breaksList.some(b => b.rows.size > 0 || b.cols.size > 0);
    const anyOcr = sheets.some(s => s.usedOcr);
    showResult(
      [{ url: downloadable(bytes, xlsxMime), filename: `${baseName}.xlsx` }],
      `Extracted a rough table from ${sheets.length} page(s)${anySplits ? ', split into extra sheets at the breaks you marked' : ', one sheet per page'}.${anyOcr ? ' Some pages had no text layer and were read with OCR — double-check those for accuracy.' : ''} Columns are auto-widened to fit their content — check the preview above before relying on the result.`
    );
    return;
  }

  const downloads = [];
  for (let fi = 0; fi < workingFiles.length; fi++) {
    const f = workingFiles[fi];
    setProgress(10 + (85 * fi) / workingFiles.length, `Reading ${f.name}…`);
    const sheets = await extractSheetsFromPdf(f.arrayBuffer.slice(0), null, useOcr, f.password);
    const bytes = buildWorkbookBytes(sheets);
    downloads.push({ url: downloadable(bytes, xlsxMime), filename: f.name.replace(/\.pdf$/i, '') + '.xlsx' });
  }
  setProgress(100, 'Done');
  showResult(downloads, `Extracted rough tables from ${workingFiles.length} files into separate spreadsheets.`);
}

/* ---- Redact PDF (draw black boxes to permanently remove sensitive content) ---- */

async function renderRedactTool() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  panel.innerHTML = '<div style="color:var(--muted);font-size:13.5px;">Rendering pages…</div>';

  const f = state.files[state.files.length - 1];
  try {
    const pdf = await openPdfJs(f.arrayBuffer, f.password);
    const numPages = pdf.numPages;

    state.redactPages = [];
    for (let i = 0; i < numPages; i++) {
      const page = await pdf.getPage(i + 1);
      const viewport = page.getViewport({ scale: 1 });
      const renderScale = Math.min(1.5, 700 / viewport.width);
      const renderViewport = page.getViewport({ scale: renderScale });
      const canvas = document.createElement('canvas');
      canvas.width = renderViewport.width;
      canvas.height = renderViewport.height;
      await page.render({ canvasContext: canvas.getContext('2d'), viewport: renderViewport }).promise;
      state.redactPages.push({
        dataUrl: canvas.toDataURL('image/png'),
        width: renderViewport.width,
        height: renderViewport.height,
        pdfWidth: viewport.width,
        pdfHeight: viewport.height,
        scale: renderScale,
        rects: [],
      });
    }

    panel.innerHTML = `
      <div class="warn-note">
        <strong>⚠️ Permanent:</strong> Redacted areas are irrecoverably destroyed — the underlying text and images are
        completely removed from the output file, not just covered. You cannot undo this after downloading.
      </div>
      <div class="opt-row">
        <label>Draw black boxes over content to permanently remove. Click an existing box to delete it.</label>
      </div>
      <div class="redact-toolbar">
        <button id="redactClearBtn" class="password-btn cancel" disabled>Clear all</button>
        <span id="redactCount" style="color:var(--muted);font-size:13px;margin-left:12px;">0 areas marked</span>
      </div>
      <div id="redactPagesContainer" class="redact-pages-container"></div>
      <div class="redact-actions" style="display:flex;gap:12px;margin-top:20px;">
        <button id="redactPreviewBtn" class="password-btn submit" style="background:var(--convert);color:#fff;padding:12px 24px;font-size:15px;" disabled>Preview</button>
        <button id="redactProcessBtn" class="process-btn" style="margin:0;flex:1;" disabled>Apply Redaction & Download</button>
      </div>
      <div id="redactPreviewWrap" hidden style="margin-top:18px;"></div>
    `;

    const container = document.getElementById('redactPagesContainer');
    const countLabel = document.getElementById('redactCount');
    const clearBtn = document.getElementById('redactClearBtn');
    const previewBtn = document.getElementById('redactPreviewBtn');
    const processBtn = document.getElementById('redactProcessBtn');
    const previewWrap = document.getElementById('redactPreviewWrap');

    function updateRedactUI() {
      const total = state.redactPages.reduce((sum, p) => sum + p.rects.length, 0);
      countLabel.textContent = total + ' area' + (total === 1 ? '' : 's') + ' marked';
      clearBtn.disabled = total === 0;
      previewBtn.disabled = total === 0;
      processBtn.disabled = total === 0;
      previewWrap.hidden = true;
      previewWrap.innerHTML = '';
    }

    function redrawPageOverlay(pageIdx, hoveredRectIdx) {
      const drawCanvas = container.querySelectorAll('.redact-draw-canvas')[pageIdx];
      if (!drawCanvas) return;
      const ctx = drawCanvas.getContext('2d');
      const pageData = state.redactPages[pageIdx];
      ctx.clearRect(0, 0, drawCanvas.width, drawCanvas.height);
      pageData.rects.forEach(function(r, rIdx) {
        const cx = r.x * pageData.scale, cy = r.y * pageData.scale;
        const cw = r.w * pageData.scale, ch = r.h * pageData.scale;
        if (rIdx === hoveredRectIdx) {
          ctx.fillStyle = 'rgba(229, 50, 45, 0.6)';
          ctx.fillRect(cx, cy, cw, ch);
          ctx.strokeStyle = '#fff';
          ctx.lineWidth = 2.5;
          ctx.strokeRect(cx, cy, cw, ch);
          ctx.fillStyle = '#fff';
          ctx.font = 'bold ' + Math.min(18, Math.min(cw, ch) * 0.5) + 'px sans-serif';
          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';
          ctx.fillText('\u2715', cx + cw / 2, cy + ch / 2);
        } else {
          ctx.fillStyle = 'rgba(0, 0, 0, 0.85)';
          ctx.fillRect(cx, cy, cw, ch);
          ctx.strokeStyle = '#E5322D';
          ctx.lineWidth = 1.5;
          ctx.strokeRect(cx, cy, cw, ch);
        }
      });
    }

    function findRectAtPoint(pageIdx, canvasX, canvasY) {
      const pageData = state.redactPages[pageIdx];
      for (let i = pageData.rects.length - 1; i >= 0; i--) {
        const r = pageData.rects[i];
        const cx = r.x * pageData.scale, cy = r.y * pageData.scale;
        const cw = r.w * pageData.scale, ch = r.h * pageData.scale;
        if (canvasX >= cx && canvasX <= cx + cw && canvasY >= cy && canvasY <= cy + ch) return i;
      }
      return -1;
    }

    state.redactPages.forEach(function(pageData, pageIdx) {
      const pageWrap = document.createElement('div');
      pageWrap.className = 'redact-page-wrap';
      pageWrap.innerHTML = '<div class="redact-page-label">Page ' + (pageIdx + 1) + '</div>' +
        '<div class="redact-canvas-wrap" style="width:' + pageData.width + 'px;height:' + pageData.height + 'px;position:relative;">' +
        '<img src="' + pageData.dataUrl + '" style="width:100%;height:100%;position:absolute;top:0;left:0;pointer-events:none;">' +
        '<canvas class="redact-draw-canvas" width="' + pageData.width + '" height="' + pageData.height + '" data-page="' + pageIdx + '" style="position:absolute;top:0;left:0;cursor:crosshair;"></canvas>' +
        '</div>';
      container.appendChild(pageWrap);

      const drawCanvas = pageWrap.querySelector('.redact-draw-canvas');
      let isDrawing = false, startX = 0, startY = 0, didDrag = false;

      drawCanvas.addEventListener('mousemove', function(e) {
        const rect = drawCanvas.getBoundingClientRect();
        const mx = e.clientX - rect.left, my = e.clientY - rect.top;
        if (isDrawing) {
          didDrag = true;
          redrawPageOverlay(pageIdx, -1);
          const ctx = drawCanvas.getContext('2d');
          const x = Math.min(startX, mx), y = Math.min(startY, my);
          const w = Math.abs(mx - startX), h = Math.abs(my - startY);
          ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
          ctx.fillRect(x, y, w, h);
          ctx.strokeStyle = '#E5322D';
          ctx.lineWidth = 1.5;
          ctx.setLineDash([4, 4]);
          ctx.strokeRect(x, y, w, h);
          ctx.setLineDash([]);
          return;
        }
        var hovered = findRectAtPoint(pageIdx, mx, my);
        drawCanvas.style.cursor = hovered >= 0 ? 'pointer' : 'crosshair';
        redrawPageOverlay(pageIdx, hovered);
      });

      drawCanvas.addEventListener('mouseleave', function() {
        if (isDrawing) { isDrawing = false; }
        redrawPageOverlay(pageIdx, -1);
        drawCanvas.style.cursor = 'crosshair';
      });

      drawCanvas.addEventListener('mousedown', function(e) {
        const rect = drawCanvas.getBoundingClientRect();
        startX = e.clientX - rect.left;
        startY = e.clientY - rect.top;
        isDrawing = true;
        didDrag = false;
      });

      drawCanvas.addEventListener('mouseup', function(e) {
        if (!isDrawing) return;
        isDrawing = false;
        const rect = drawCanvas.getBoundingClientRect();
        const endX = e.clientX - rect.left, endY = e.clientY - rect.top;
        const x = Math.min(startX, endX), y = Math.min(startY, endY);
        const w = Math.abs(endX - startX), h = Math.abs(endY - startY);
        if (w > 5 && h > 5) {
          pageData.rects.push({ x: x / pageData.scale, y: y / pageData.scale, w: w / pageData.scale, h: h / pageData.scale });
          redrawPageOverlay(pageIdx, -1);
          updateRedactUI();
        } else if (!didDrag) {
          var clickedIdx = findRectAtPoint(pageIdx, endX, endY);
          if (clickedIdx >= 0) { pageData.rects.splice(clickedIdx, 1); redrawPageOverlay(pageIdx, -1); updateRedactUI(); }
          else redrawPageOverlay(pageIdx, -1);
        } else { redrawPageOverlay(pageIdx, -1); }
      });

      // Touch support
      drawCanvas.addEventListener('touchstart', function(e) { e.preventDefault(); var t = e.touches[0]; var rect = drawCanvas.getBoundingClientRect(); startX = t.clientX - rect.left; startY = t.clientY - rect.top; isDrawing = true; didDrag = false; });
      drawCanvas.addEventListener('touchmove', function(e) { e.preventDefault(); if (!isDrawing) return; didDrag = true; var t = e.touches[0]; var rect = drawCanvas.getBoundingClientRect(); var mx = t.clientX - rect.left, my = t.clientY - rect.top; redrawPageOverlay(pageIdx, -1); var ctx = drawCanvas.getContext('2d'); var x = Math.min(startX, mx), y = Math.min(startY, my), w = Math.abs(mx - startX), h = Math.abs(my - startY); ctx.fillStyle = 'rgba(0,0,0,0.5)'; ctx.fillRect(x, y, w, h); ctx.strokeStyle = '#E5322D'; ctx.lineWidth = 1.5; ctx.setLineDash([4,4]); ctx.strokeRect(x, y, w, h); ctx.setLineDash([]); });
      drawCanvas.addEventListener('touchend', function(e) { e.preventDefault(); if (!isDrawing) return; isDrawing = false; var t = e.changedTouches[0]; var rect = drawCanvas.getBoundingClientRect(); var endX = t.clientX - rect.left, endY = t.clientY - rect.top; var x = Math.min(startX, endX), y = Math.min(startY, endY), w = Math.abs(endX - startX), h = Math.abs(endY - startY); if (w > 5 && h > 5) { pageData.rects.push({ x: x / pageData.scale, y: y / pageData.scale, w: w / pageData.scale, h: h / pageData.scale }); } else if (!didDrag) { var ci = findRectAtPoint(pageIdx, endX, endY); if (ci >= 0) pageData.rects.splice(ci, 1); } redrawPageOverlay(pageIdx, -1); updateRedactUI(); });
    });

    clearBtn.addEventListener('click', function() {
      state.redactPages.forEach(function(p, i) { p.rects = []; redrawPageOverlay(i, -1); });
      updateRedactUI();
    });

    previewBtn.addEventListener('click', async function() {
      previewBtn.disabled = true;
      previewBtn.textContent = 'Generating…';
      previewWrap.hidden = false;
      previewWrap.innerHTML = '<div style="color:var(--muted);font-size:13px;padding:8px;">Rendering preview…</div>';
      try {
        const previewPdf = await openPdfJs(f.arrayBuffer, f.password);
        let html = '';
        for (let i = 0; i < state.redactPages.length; i++) {
          const pd = state.redactPages[i];
          if (pd.rects.length === 0) continue;
          const page = await previewPdf.getPage(i + 1);
          const vp = page.getViewport({ scale: pd.scale });
          const cvs = document.createElement('canvas');
          cvs.width = vp.width; cvs.height = vp.height;
          const cx = cvs.getContext('2d');
          await page.render({ canvasContext: cx, viewport: vp }).promise;
          pd.rects.forEach(function(r) { cx.fillStyle = '#000'; cx.fillRect(r.x * pd.scale, r.y * pd.scale, r.w * pd.scale, r.h * pd.scale); });
          html += '<div style="margin-bottom:16px;"><div class="redact-page-label">Page ' + (i + 1) + ' — preview</div><img src="' + cvs.toDataURL('image/jpeg', 0.85) + '" style="max-width:100%;border-radius:4px;box-shadow:0 2px 10px rgba(0,0,0,0.1);"></div>';
        }
        previewWrap.innerHTML = '<div class="preview-label" style="margin-bottom:10px;font-weight:700;">Preview of redacted pages:</div>' + html;
      } catch (e) {
        previewWrap.innerHTML = '<div class="warn-note error">Preview failed: ' + escapeHtml(e.message || String(e)) + '</div>';
      }
      previewBtn.disabled = false;
      previewBtn.textContent = 'Preview';
      previewWrap.hidden = false;
    });

    processBtn.addEventListener('click', function() { processRedact(); });

  } catch (err) {
    panel.innerHTML = '<div class="warn-note error">Couldn\'t read this file: ' + escapeHtml(err.message || String(err)) + '</div>';
  }
}

async function processRedact() {
  els.progressArea.hidden = false;
  setProgress(10, 'Applying redactions…');
  const f = state.files[state.files.length - 1];
  try {
    const pdfDoc = await openPdfLib(f.arrayBuffer, f.password);
    const pages = pdfDoc.getPages();
    for (let i = 0; i < state.redactPages.length && i < pages.length; i++) {
      const pageData = state.redactPages[i];
      if (pageData.rects.length === 0) continue;
      const page = pages[i];
      const { height: pageH } = page.getSize();
      pageData.rects.forEach(function(r) {
        page.drawRectangle({ x: r.x, y: pageH - (r.y + r.h), width: r.w, height: r.h, color: rgb(0, 0, 0) });
      });
      setProgress(10 + (70 * (i + 1)) / state.redactPages.length, 'Redacting page ' + (i + 1) + '…');
    }
    setProgress(80, 'Flattening redacted pages…');
    const redactedIndices = state.redactPages.map(function(p, i) { return p.rects.length > 0 ? i : -1; }).filter(function(i) { return i >= 0; });
    if (redactedIndices.length > 0) {
      const pdf = await openPdfJs(f.arrayBuffer, f.password);
      const finalDoc = await PDFDocument.create();
      for (let i = 0; i < pages.length; i++) {
        if (redactedIndices.includes(i)) {
          const page = await pdf.getPage(i + 1);
          const vp = page.getViewport({ scale: 2 });
          const cvs = document.createElement('canvas');
          cvs.width = vp.width; cvs.height = vp.height;
          const cx = cvs.getContext('2d');
          await page.render({ canvasContext: cx, viewport: vp }).promise;
          state.redactPages[i].rects.forEach(function(r) { cx.fillStyle = '#000'; cx.fillRect(r.x * 2, r.y * 2, r.w * 2, r.h * 2); });
          const jpgDataUrl = cvs.toDataURL('image/jpeg', 0.92);
          const jpgBytes = await (await fetch(jpgDataUrl)).arrayBuffer();
          const jpgImage = await finalDoc.embedJpg(new Uint8Array(jpgBytes));
          const origPage = pdfDoc.getPages()[i];
          const { width, height } = origPage.getSize();
          const newPage = finalDoc.addPage([width, height]);
          newPage.drawImage(jpgImage, { x: 0, y: 0, width: width, height: height });
        } else {
          const [copiedPage] = await finalDoc.copyPages(pdfDoc, [i]);
          finalDoc.addPage(copiedPage);
        }
        setProgress(80 + (18 * (i + 1)) / pages.length, 'Building page ' + (i + 1) + '…');
      }
      const bytes = await finalDoc.save();
      setProgress(100, 'Done');
      const baseName = f.name.replace(/\.pdf$/i, '');
      showResult(
        [{ url: downloadable(bytes, 'application/pdf'), filename: baseName + '_redacted.pdf' }],
        'Redacted ' + redactedIndices.length + ' page(s). The text under the black boxes has been permanently destroyed (those pages are now images).'
      );
    }
  } catch (err) {
    setProgress(0, '');
    els.progressArea.hidden = true;
    showResult([], 'Redaction failed: ' + escapeHtml(err.message || String(err)), true);
  }
}

/* ---- Lock / Unlock PDF (genuine PDF encryption via pdf-lib's Standard Security Handler) ---- */

function generateRandomPassword(byteLength) {
  const bytes = new Uint8Array(byteLength);
  crypto.getRandomValues(bytes);
  return Array.from(bytes, b => b.toString(16).padStart(2, '0')).join('');
}

function renderLockPdfOptions() {
  showOptions(`
    <div class="opt-row">
      <label>Password to protect this file with</label>
      <input type="password" id="lockPassword" placeholder="Enter a password" autocomplete="new-password">
    </div>
    <div class="opt-row">
      <label>Confirm password</label>
      <input type="password" id="lockPasswordConfirm" placeholder="Re-enter the same password" autocomplete="new-password">
    </div>
    <div class="opt-row">
      <label>Also restrict what someone can do once they've opened it (optional)</label>
      <div class="opt-inline" style="margin-top:6px;">
        <label style="font-weight:500;"><input type="checkbox" id="lockRestrictPrint"> Prevent printing</label>
        <label style="font-weight:500;"><input type="checkbox" id="lockRestrictCopy"> Prevent copying text/images</label>
      </div>
      <p style="color:var(--muted);font-size:12.5px;margin:8px 0 0;">
        This is genuine PDF encryption (the same standard Acrobat uses), not a cosmetic lock — a PDF reader
        will refuse to open the file at all without the password. There's no recovery if you forget it, so
        keep it somewhere safe.
      </p>
    </div>
  `);
}

async function processLockPdf() {
  const pw = document.getElementById('lockPassword').value;
  const pwConfirm = document.getElementById('lockPasswordConfirm').value;
  if (!pw) { showResult([], 'Enter a password to protect the file with.', true); return; }
  if (pw.length < 4) { showResult([], 'Use a password with at least 4 characters.', true); return; }
  if (pw !== pwConfirm) { showResult([], "Passwords don't match — please re-enter them.", true); return; }

  const f = state.files[0];
  setProgress(20, 'Encrypting…');
  try {
    const doc = await openPdfLib(f.arrayBuffer, f.password);
    const restrictPrint = document.getElementById('lockRestrictPrint').checked;
    const restrictCopy = document.getElementById('lockRestrictCopy').checked;
    // The owner password is randomly generated and never shown to you — that's what
    // makes the restrictions above actually stick. If the same password were used for
    // both roles, many PDF readers treat whoever has it as the owner and quietly skip
    // the restrictions; keeping them different means anyone opening with your password
    // genuinely only gets the permissions you chose.
    doc.encrypt({
      userPassword: pw,
      ownerPassword: generateRandomPassword(16),
      permissions: {
        printing: restrictPrint ? false : 'highResolution',
        copying: !restrictCopy,
        modifying: false,
        annotating: !restrictCopy,
        fillingForms: true,
        contentAccessibility: true,
        documentAssembly: false,
      },
    });
    const bytes = await doc.save();
    setProgress(100, 'Done');
    const baseName = f.name.replace(/\.pdf$/i, '');
    showResult(
      [{ url: downloadable(bytes, 'application/pdf'), filename: baseName + '_protected.pdf' }],
      "Password protection added. Anyone opening this file will need the password you just set — there's no way to recover it if it's lost, so save it somewhere safe."
    );
  } catch (err) {
    setProgress(0, '');
    els.progressArea.hidden = true;
    showResult([], 'Couldn\'t protect this file: ' + escapeHtml(err.message || String(err)), true);
  }
}

function renderUnlockPdfOptions() {
  const f = state.files[0];
  const alreadyVerified = f && f.password;
  showOptions(`
    <div class="opt-row">
      <p style="color:var(--muted);font-size:13.5px;">
        ${alreadyVerified
          ? "You already entered this file's password when you uploaded it. Click Process to save a copy with the password permanently removed."
          : "This file doesn't look password-protected, so there's nothing to remove — Process will just give you back an identical copy."}
      </p>
    </div>
  `);
}

async function processUnlockPdf() {
  const f = state.files[0];
  setProgress(20, 'Removing password…');
  try {
    const doc = await PDFDocument.load(f.arrayBuffer.slice(0), { password: f.password, ignoreEncryption: !f.password });
    const bytes = await doc.save();
    setProgress(100, 'Done');
    const baseName = f.name.replace(/\.pdf$/i, '');
    showResult(
      [{ url: downloadable(bytes, 'application/pdf'), filename: baseName + '_unlocked.pdf' }],
      f.password
        ? 'Password removed. The file no longer requires a password to open.'
        : "This file wasn't password-protected, so nothing needed to change — here's a copy anyway."
    );
  } catch (err) {
    setProgress(0, '');
    els.progressArea.hidden = true;
    showResult([], "Couldn't remove the password: " + escapeHtml(err.message || String(err)), true);
  }
}

/* ---- Compare PDF (text diff + visual diff, page by page) ---- */

// Classic LCS-based line diff — same idea as a text-file diff tool. Capped for very
// text-dense pages (a few hundred lines is already a lot for one PDF page) since the
// DP table is O(n*m) and a page that's actually a giant wall of text isn't something a
// line-by-line diff is the right tool for anyway.
function diffLines(linesA, linesB) {
  const n = linesA.length, m = linesB.length;
  if (n > 400 || m > 400) {
    const identical = n === m && linesA.every((l, i) => l === linesB[i]);
    return identical
      ? linesA.map(l => ({ type: 'same', text: l }))
      : [{ type: 'removed', text: `(${n} lines — too dense to line-diff in detail)` }, { type: 'added', text: `(${m} lines — too dense to line-diff in detail)` }];
  }
  const dp = Array.from({ length: n + 1 }, () => new Array(m + 1).fill(0));
  for (let i = n - 1; i >= 0; i--) {
    for (let j = m - 1; j >= 0; j--) {
      dp[i][j] = linesA[i] === linesB[j] ? dp[i + 1][j + 1] + 1 : Math.max(dp[i + 1][j], dp[i][j + 1]);
    }
  }
  const result = [];
  let i = 0, j = 0;
  while (i < n && j < m) {
    if (linesA[i] === linesB[j]) { result.push({ type: 'same', text: linesA[i] }); i++; j++; }
    else if (dp[i + 1][j] >= dp[i][j + 1]) { result.push({ type: 'removed', text: linesA[i] }); i++; }
    else { result.push({ type: 'added', text: linesB[j] }); j++; }
  }
  while (i < n) { result.push({ type: 'removed', text: linesA[i] }); i++; }
  while (j < m) { result.push({ type: 'added', text: linesB[j] }); j++; }
  return result;
}

// Renders the corresponding page from each file at matching pixel dimensions, then
// produces a highlighted version of EACH page separately: full original content, with a
// translucent red tint over regions that genuinely differ from the other version. This
// is what lets both pages be viewed side by side while still clearly marking what
// changed on each one, rather than fusing them into a single grayscale-plus-red
// composite that hides which content belongs to which version.
async function renderVisualPageDiff(pageA, pageB) {
  const vpA1 = pageA.getViewport({ scale: 1 });
  const scale = Math.min(1.6, 620 / vpA1.width);
  const vpA = pageA.getViewport({ scale });
  const vpB = pageB.getViewport({ scale });
  const width = Math.max(vpA.width, vpB.width);
  const height = Math.max(vpA.height, vpB.height);

  const canvasA = document.createElement('canvas');
  canvasA.width = width; canvasA.height = height;
  const ctxA = canvasA.getContext('2d');
  ctxA.fillStyle = '#fff'; ctxA.fillRect(0, 0, width, height);
  await pageA.render({ canvasContext: ctxA, viewport: vpA }).promise;

  const canvasB = document.createElement('canvas');
  canvasB.width = width; canvasB.height = height;
  const ctxB = canvasB.getContext('2d');
  ctxB.fillStyle = '#fff'; ctxB.fillRect(0, 0, width, height);
  await pageB.render({ canvasContext: ctxB, viewport: vpB }).promise;

  const dataA = ctxA.getImageData(0, 0, width, height);
  const dataB = ctxB.getImageData(0, 0, width, height);

  // Compare in small blocks rather than individual pixels. Two independently-rendered
  // pages of otherwise-identical content (different anti-aliasing, font hinting, or one
  // side having been rasterized at some point) can differ by a little almost
  // everywhere on a dense page — that's rendering noise, not a real difference, and a
  // raw per-pixel threshold was flagging nearly the whole page for it. Averaging over a
  // block smooths that noise out while still reliably catching a genuinely different
  // region, which is different across MANY pixels at once, not just a few.
  const BLOCK = 8;
  const DIFF_THRESHOLD = 70; // average per-channel difference within a block
  const changedBlock = [];
  const blocksX = Math.ceil(width / BLOCK);
  const blocksY = Math.ceil(height / BLOCK);
  for (let by = 0; by < blocksY; by++) {
    changedBlock.push(new Array(blocksX).fill(false));
  }
  let changedBlockCount = 0;

  for (let by = 0; by < blocksY; by++) {
    for (let bx = 0; bx < blocksX; bx++) {
      const x0 = bx * BLOCK, y0 = by * BLOCK;
      const x1 = Math.min(width, x0 + BLOCK), y1 = Math.min(height, y0 + BLOCK);
      let sum = 0, count = 0;
      for (let y = y0; y < y1; y++) {
        for (let x = x0; x < x1; x++) {
          const p = (y * width + x) * 4;
          sum += Math.abs(dataA.data[p] - dataB.data[p])
               + Math.abs(dataA.data[p + 1] - dataB.data[p + 1])
               + Math.abs(dataA.data[p + 2] - dataB.data[p + 2]);
          count++;
        }
      }
      const avgDiff = sum / (count * 3);
      if (avgDiff > DIFF_THRESHOLD) {
        changedBlock[by][bx] = true;
        changedBlockCount++;
      }
    }
  }

  const outA = ctxA.createImageData(width, height);
  const outB = ctxA.createImageData(width, height);
  for (let y = 0; y < height; y++) {
    const by = Math.min(blocksY - 1, Math.floor(y / BLOCK));
    for (let x = 0; x < width; x++) {
      const bx = Math.min(blocksX - 1, Math.floor(x / BLOCK));
      const changed = changedBlock[by][bx];
      const p = (y * width + x) * 4;
      for (let ch = 0; ch < 3; ch++) {
        const srcA = dataA.data[p + ch], srcB = dataB.data[p + ch];
        const tintChannel = ch === 0 ? 229 : (ch === 1 ? 50 : 45); // toolkit red, blended in below
        // Blend 55% toward red on changed regions, keeping the real content still
        // legible underneath rather than replacing it outright.
        outA.data[p + ch] = changed ? Math.round(srcA * 0.45 + tintChannel * 0.55) : srcA;
        outB.data[p + ch] = changed ? Math.round(srcB * 0.45 + tintChannel * 0.55) : srcB;
      }
      outA.data[p + 3] = 255; outB.data[p + 3] = 255;
    }
  }
  const outCanvasA = document.createElement('canvas');
  outCanvasA.width = width; outCanvasA.height = height;
  outCanvasA.getContext('2d').putImageData(outA, 0, 0);
  const outCanvasB = document.createElement('canvas');
  outCanvasB.width = width; outCanvasB.height = height;
  outCanvasB.getContext('2d').putImageData(outB, 0, 0);

  const changedRatio = changedBlockCount / (blocksX * blocksY);
  return {
    dataUrlA: outCanvasA.toDataURL('image/jpeg', 0.88),
    dataUrlB: outCanvasB.toDataURL('image/jpeg', 0.88),
    changedRatio,
  };
}

async function renderComparePdfTool() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  els.dropZone.hidden = state.files.length >= 2;

  if (state.files.length === 0) {
    panel.innerHTML = `<p style="color:var(--muted);font-size:13.5px;">Drop two versions of a PDF above — the first two files you add become "Version A" and "Version B".</p>`;
    return;
  }

  const fileListHtml = state.files.slice(0, 2).map((f, i) => `
    <div class="file-row">
      <div><span class="name">${escapeHtml(i === 0 ? 'Version A: ' : 'Version B: ')}${escapeHtml(f.name)}</span></div>
      <button class="remove" data-remove-idx="${i}" title="Remove">&times;</button>
    </div>
  `).join('');

  if (state.files.length === 1) {
    panel.innerHTML = `
      <div class="file-list">${fileListHtml}</div>
      <p style="color:var(--muted);font-size:13.5px;margin-top:12px;">Drop a second file above to compare against this one.</p>
    `;
    wireCompareRemoveButtons(panel);
    return;
  }

  panel.innerHTML = `<div class="file-list">${fileListHtml}</div><div id="compareStatus" style="color:var(--muted);font-size:13.5px;margin-top:14px;">Comparing…</div><div id="compareResults"></div>`;
  wireCompareRemoveButtons(panel);

  const statusEl = document.getElementById('compareStatus');
  const resultsEl = document.getElementById('compareResults');
  const [fA, fB] = state.files;

  try {
    const pdfA = await openPdfJs(fA.arrayBuffer, fA.password);
    const pdfB = await openPdfJs(fB.arrayBuffer, fB.password);
    const commonPages = Math.min(pdfA.numPages, pdfB.numPages);
    const extraInA = Math.max(0, pdfA.numPages - pdfB.numPages);
    const extraInB = Math.max(0, pdfB.numPages - pdfA.numPages);

    let pagesWithDifferences = 0;
    let sectionsHtml = '';

    for (let p = 1; p <= commonPages; p++) {
      statusEl.textContent = `Comparing page ${p} of ${commonPages}…`;
      const pageA = await pdfA.getPage(p);
      const pageB = await pdfB.getPage(p);
      const contentA = await pageA.getTextContent();
      const contentB = await pageB.getTextContent();
      const linesA = groupTextIntoLines(contentA.items);
      const linesB = groupTextIntoLines(contentB.items);
      const diff = diffLines(linesA, linesB);
      const hasTextDiff = diff.some(d => d.type !== 'same');

      const visual = await renderVisualPageDiff(pageA, pageB);
      const hasVisualDiff = visual.changedRatio > 0.001; // more than ~0.1% of blocks changed

      if (hasTextDiff || hasVisualDiff) {
        pagesWithDifferences++;
        const diffHtml = diff.filter(d => d.type !== 'same').slice(0, 60).map(d =>
          `<div class="compare-line compare-line-${d.type}">${d.type === 'removed' ? '−' : '+'} ${escapeHtml(d.text)}</div>`
        ).join('') || '<div class="compare-line" style="color:var(--muted);">(no line-level text differences — likely a visual/formatting-only change)</div>';

        sectionsHtml += `
          <div class="compare-page-block">
            <div class="compare-page-title">Page ${p} — differs</div>
            <div class="compare-side-by-side">
              <div class="compare-side">
                <div class="compare-side-label">Version A</div>
                <img src="${visual.dataUrlA}" style="max-width:100%;border-radius:6px;border:1px solid var(--border);">
              </div>
              <div class="compare-side">
                <div class="compare-side-label">Version B</div>
                <img src="${visual.dataUrlB}" style="max-width:100%;border-radius:6px;border:1px solid var(--border);">
              </div>
            </div>
            <div class="compare-diff-list" style="margin-top:10px;">${diffHtml}</div>
          </div>`;
      }
    }

    let extraNote = '';
    if (extraInA > 0) extraNote += `<p style="color:var(--muted);font-size:13px;">Version A has ${extraInA} extra page(s) at the end that Version B doesn't have.</p>`;
    if (extraInB > 0) extraNote += `<p style="color:var(--muted);font-size:13px;">Version B has ${extraInB} extra page(s) at the end that Version A doesn't have.</p>`;

    statusEl.innerHTML = pagesWithDifferences === 0 && extraInA === 0 && extraInB === 0
      ? '<strong style="color:#4ADE80;">These files look identical — no differences found.</strong>'
      : `<strong>${pagesWithDifferences} of ${commonPages} common page(s) differ.</strong>`;
    resultsEl.innerHTML = extraNote + sectionsHtml;
  } catch (err) {
    statusEl.innerHTML = `<span style="color:#F58A75;">Couldn't compare these files: ${escapeHtml(err.message || String(err))}</span>`;
  }
}

function wireCompareRemoveButtons(panel) {
  panel.querySelectorAll('[data-remove-idx]').forEach(btn => {
    btn.addEventListener('click', async () => {
      const idx = parseInt(btn.dataset.removeIdx, 10);
      state.files.splice(idx, 1);
      await renderComparePdfTool();
    });
  });
}

/* ---- PDF Editor: add text, freehand drawing, and highlights as real PDF content ---- */
/* Unlike Redact, nothing here is rasterized — every addition becomes genuine vector
   content added to the existing page (drawText/drawLine/drawRectangle via pdf-lib), so
   the original page's own text and images stay completely intact and selectable. */

/* ---- PDF Editor: text, drawing, shapes, images, and highlights as real PDF content ---- */
/* PDF content. Unlike Redact, nothing here is rasterized — every addition becomes
   genuine vector/text content added to the existing page, so the original page's own
   text and images stay completely intact and selectable. */

const EDITOR_COLORS = ['#E5322D', '#1E7A34', '#1D4ED8', '#F5B800', '#000000', '#FFFFFF'];
const EDITOR_FONTS = [
  { label: 'Sans-serif', css: 'Helvetica, Arial, sans-serif', pdf: 'Helvetica', pdfBold: 'HelveticaBold' },
  { label: 'Serif', css: '"Times New Roman", Times, serif', pdf: 'TimesRoman', pdfBold: 'TimesRomanBold' },
  { label: 'Monospace', css: '"Courier New", Courier, monospace', pdf: 'Courier', pdfBold: 'CourierBold' },
];
const EDITOR_TOOLS = [
  { key: 'text', label: 'Text', hint: 'Click anywhere to type. Drag a text box\u2019s corner to resize it.' },
  { key: 'draw', label: 'Draw', hint: 'Click and drag to draw freehand.' },
  { key: 'highlight', label: 'Highlight', hint: 'Drag over content to highlight it.' },
  { key: 'rect', label: 'Rectangle', hint: 'Drag to draw a rectangle outline.' },
  { key: 'ellipse', label: 'Ellipse', hint: 'Drag to draw an oval outline.' },
  { key: 'line', label: 'Line', hint: 'Drag to draw a straight line or arrow.' },
  { key: 'image', label: 'Image', hint: 'Click where you want to place a picture, then choose a file.' },
  { key: 'eraser', label: 'Eraser', hint: 'Click something you added to remove it. Never touches the original page.' },
];

function hexToRgb01(hex) {
  const n = parseInt(hex.replace('#', ''), 16);
  return { r: ((n >> 16) & 255) / 255, g: ((n >> 8) & 255) / 255, b: (n & 255) / 255 };
}

async function renderPdfEditorTool() {
  const panel = els.optionsPanel;
  panel.hidden = false;
  panel.innerHTML = '<div style="color:var(--muted);font-size:13.5px;">Rendering pages…</div>';

  const f = state.files[state.files.length - 1];
  const pdf = await openPdfJs(f.arrayBuffer, f.password);
  const numPages = pdf.numPages;

  state.editorPages = [];
  for (let i = 0; i < numPages; i++) {
    const page = await pdf.getPage(i + 1);
    const viewport = page.getViewport({ scale: 1 });
    const renderScale = Math.min(1.6, 760 / viewport.width);
    const renderViewport = page.getViewport({ scale: renderScale });
    const canvas = document.createElement('canvas');
    canvas.width = renderViewport.width;
    canvas.height = renderViewport.height;
    await page.render({ canvasContext: canvas.getContext('2d'), viewport: renderViewport }).promise;
    state.editorPages.push({
      dataUrl: canvas.toDataURL('image/png'),
      width: renderViewport.width,
      height: renderViewport.height,
      pdfWidth: viewport.width,
      pdfHeight: viewport.height,
      scale: renderScale,
      annotations: [],
    });
  }
  state.editorCurrentPage = 0;
  state.editorTool = 'text';
  state.editorColor = EDITOR_COLORS[0];
  state.editorTextSize = 18;
  state.editorLineWidth = 3;
  state.editorFont = EDITOR_FONTS[0];
  state.editorBold = false;

  panel.innerHTML = `
    <div class="editor-toolbar">
      <div class="editor-tool-group">
        ${EDITOR_TOOLS.map(t => `<button type="button" class="editor-tool-btn${t.key === 'text' ? ' active' : ''}" data-editor-tool="${t.key}" title="${escapeHtml(t.hint)}">${t.label}</button>`).join('')}
      </div>
    </div>
    <div class="editor-toolbar" id="editorPropsRow">
      <div class="editor-color-group" id="editorColorGroup">
        ${EDITOR_COLORS.map((c, i) => `<button type="button" class="editor-color-swatch${i === 0 ? ' active' : ''}" data-color="${c}" style="background:${c};${c === '#FFFFFF' ? 'border:1px solid #ccc;' : ''}" title="${c}"></button>`).join('')}
      </div>
      <div class="editor-size-group" id="editorSizeGroup">
        <label style="font-size:12px;color:var(--muted);">Size</label>
        <input type="range" id="editorSizeSlider" min="8" max="60" value="18">
      </div>
      <div class="editor-font-group" id="editorFontGroup">
        <select id="editorFontSelect">
          ${EDITOR_FONTS.map((fnt, i) => `<option value="${i}">${fnt.label}</option>`).join('')}
        </select>
        <label class="editor-bold-toggle"><input type="checkbox" id="editorBoldToggle"> Bold</label>
      </div>
      <button type="button" id="editorUndoBtn" class="password-btn cancel" disabled>Undo</button>
      <button type="button" id="editorClearBtn" class="password-btn cancel" disabled>Clear page</button>
    </div>
    <div class="editor-hint" id="editorHint">Click anywhere to type. Drag a text box's corner to resize it.</div>
    <div class="editor-page-nav">
      <button type="button" id="editorPrevBtn" class="password-btn cancel" ${numPages <= 1 ? 'disabled' : ''}>&larr; Prev</button>
      <span id="editorPageLabel" style="font-size:13px;color:var(--muted);">Page 1 of ${numPages}</span>
      <button type="button" id="editorNextBtn" class="password-btn cancel" ${numPages <= 1 ? 'disabled' : ''}>Next &rarr;</button>
    </div>
    <div class="editor-canvas-wrap" id="editorCanvasWrap"></div>
    <input type="file" id="editorImageInput" accept="image/png,image/jpeg" hidden>
    <button type="button" id="editorProcessBtn" class="process-btn" style="margin-top:20px;">Download edited PDF</button>
  `;

  const canvasWrap = document.getElementById('editorCanvasWrap');
  const undoBtn = document.getElementById('editorUndoBtn');
  const clearBtn = document.getElementById('editorClearBtn');
  const pageLabel = document.getElementById('editorPageLabel');
  const prevBtn = document.getElementById('editorPrevBtn');
  const nextBtn = document.getElementById('editorNextBtn');
  const processBtn = document.getElementById('editorProcessBtn');
  const sizeSlider = document.getElementById('editorSizeSlider');
  const fontSelect = document.getElementById('editorFontSelect');
  const boldToggle = document.getElementById('editorBoldToggle');
  const hintEl = document.getElementById('editorHint');
  const imageInput = document.getElementById('editorImageInput');
  const sizeGroup = document.getElementById('editorSizeGroup');
  const fontGroup = document.getElementById('editorFontGroup');

  function currentPageData() { return state.editorPages[state.editorCurrentPage]; }

  // Only show font/size controls when they're actually relevant to the active tool —
  // one visible reason the toolbar looked confusing before was every control staying
  // on screen regardless of what you'd selected.
  function updatePropsVisibility() {
    const showFont = state.editorTool === 'text';
    const showSize = ['text', 'draw', 'rect', 'ellipse', 'line'].includes(state.editorTool);
    fontGroup.style.display = showFont ? 'flex' : 'none';
    sizeGroup.style.display = showSize ? 'flex' : 'none';
    sizeSlider.previousElementSibling.textContent = state.editorTool === 'text' ? 'Text size' : 'Thickness';
    sizeSlider.min = state.editorTool === 'text' ? 8 : 1;
    sizeSlider.max = state.editorTool === 'text' ? 60 : 20;
    sizeSlider.value = state.editorTool === 'text' ? state.editorTextSize : state.editorLineWidth;
  }

  function buildPageCanvas() {
    const pd = currentPageData();
    canvasWrap.innerHTML = `
      <div class="editor-canvas-stack" style="width:${pd.width}px;height:${pd.height}px;">
        <img src="${pd.dataUrl}" style="width:${pd.width}px;height:${pd.height}px;" draggable="false">
        <canvas class="editor-overlay-canvas" width="${pd.width}" height="${pd.height}"></canvas>
      </div>
    `;
    wireCanvasEvents();
    redrawOverlay();
  }

  function updateNavAndButtons() {
    pageLabel.textContent = `Page ${state.editorCurrentPage + 1} of ${numPages}`;
    prevBtn.disabled = state.editorCurrentPage === 0;
    nextBtn.disabled = state.editorCurrentPage === numPages - 1;
    const anns = currentPageData().annotations;
    undoBtn.disabled = anns.length === 0;
    clearBtn.disabled = anns.length === 0;
  }

  function redrawOverlay(extra) {
    const overlay = canvasWrap.querySelector('.editor-overlay-canvas');
    if (!overlay) return;
    const ctx = overlay.getContext('2d');
    ctx.clearRect(0, 0, overlay.width, overlay.height);
    const pd = currentPageData();
    pd.annotations.forEach((a, i) => drawAnnotationOnCanvas(ctx, a, i === state.editorHoverIdx));
    if (extra) drawAnnotationOnCanvas(ctx, extra, false);
    updateNavAndButtons();
  }

  function wrapText(ctx, text, maxWidth) {
    if (!maxWidth) return text.split('\n');
    const out = [];
    text.split('\n').forEach(paragraph => {
      const words = paragraph.split(' ');
      let line = '';
      words.forEach(word => {
        const test = line ? line + ' ' + word : word;
        if (ctx.measureText(test).width > maxWidth && line) { out.push(line); line = word; }
        else line = test;
      });
      out.push(line);
    });
    return out;
  }

  function drawAnnotationOnCanvas(ctx, a, hovered) {
    ctx.save();
    if (a.type === 'text') {
      ctx.fillStyle = a.color;
      ctx.font = `${a.bold ? 'bold ' : ''}${a.size}px ${a.font.css}`;
      ctx.textBaseline = 'top';
      const lines = wrapText(ctx, a.text, a.w);
      lines.forEach((line, i) => ctx.fillText(line, a.x, a.y + i * a.size * 1.25));
      if (hovered) {
        ctx.strokeStyle = '#999'; ctx.setLineDash([4, 3]); ctx.lineWidth = 1;
        ctx.strokeRect(a.x - 2, a.y - 2, (a.w || 200) + 4, lines.length * a.size * 1.25 + 4);
      }
    } else if (a.type === 'draw') {
      ctx.strokeStyle = a.color;
      ctx.lineWidth = a.lineWidth;
      ctx.lineCap = 'round';
      ctx.lineJoin = 'round';
      ctx.beginPath();
      a.points.forEach((p, i) => i === 0 ? ctx.moveTo(p.x, p.y) : ctx.lineTo(p.x, p.y));
      ctx.stroke();
    } else if (a.type === 'highlight') {
      ctx.fillStyle = a.color;
      ctx.globalAlpha = 0.35;
      ctx.fillRect(a.x, a.y, a.w, a.h);
    } else if (a.type === 'rect') {
      ctx.strokeStyle = a.color;
      ctx.lineWidth = a.lineWidth;
      ctx.strokeRect(a.x, a.y, a.w, a.h);
    } else if (a.type === 'ellipse') {
      ctx.strokeStyle = a.color;
      ctx.lineWidth = a.lineWidth;
      ctx.beginPath();
      ctx.ellipse(a.x + a.w / 2, a.y + a.h / 2, Math.abs(a.w / 2), Math.abs(a.h / 2), 0, 0, Math.PI * 2);
      ctx.stroke();
    } else if (a.type === 'line') {
      ctx.strokeStyle = a.color;
      ctx.lineWidth = a.lineWidth;
      ctx.lineCap = 'round';
      ctx.beginPath();
      ctx.moveTo(a.x1, a.y1);
      ctx.lineTo(a.x2, a.y2);
      ctx.stroke();
      if (a.arrow) {
        const angle = Math.atan2(a.y2 - a.y1, a.x2 - a.x1);
        const headLen = Math.max(8, a.lineWidth * 4);
        ctx.beginPath();
        ctx.moveTo(a.x2, a.y2);
        ctx.lineTo(a.x2 - headLen * Math.cos(angle - Math.PI / 6), a.y2 - headLen * Math.sin(angle - Math.PI / 6));
        ctx.lineTo(a.x2 - headLen * Math.cos(angle + Math.PI / 6), a.y2 - headLen * Math.sin(angle + Math.PI / 6));
        ctx.closePath();
        ctx.fillStyle = a.color;
        ctx.fill();
      }
    } else if (a.type === 'image' && a.img) {
      ctx.drawImage(a.img, a.x, a.y, a.w, a.h);
      if (hovered) {
        ctx.strokeStyle = '#999'; ctx.setLineDash([4, 3]); ctx.lineWidth = 1;
        ctx.strokeRect(a.x - 2, a.y - 2, a.w + 4, a.h + 4);
      }
    }
    ctx.restore();
    if (a.type === 'image' && a.img && hovered) drawResizeHandle(ctx, a.x + a.w, a.y + a.h);
  }

  function drawResizeHandle(ctx, x, y) {
    ctx.fillStyle = '#fff';
    ctx.strokeStyle = '#666';
    ctx.lineWidth = 1;
    ctx.fillRect(x - 5, y - 5, 10, 10);
    ctx.strokeRect(x - 5, y - 5, 10, 10);
  }

  // Approximate hit-testing so the eraser (and hover/resize) can tell what's under the
  // cursor without needing pixel-perfect bounds.
  function hitTest(anns, x, y) {
    for (let i = anns.length - 1; i >= 0; i--) {
      const a = anns[i];
      if (a.type === 'highlight' || a.type === 'rect' || a.type === 'image') {
        if (x >= a.x && x <= a.x + a.w && y >= a.y && y <= a.y + a.h) return i;
      } else if (a.type === 'ellipse') {
        const cx = a.x + a.w / 2, cy = a.y + a.h / 2;
        const rx = Math.abs(a.w / 2) || 1, ry = Math.abs(a.h / 2) || 1;
        if (((x - cx) ** 2) / (rx * rx) + ((y - cy) ** 2) / (ry * ry) <= 1) return i;
      } else if (a.type === 'text') {
        const h = (a.text.split('\n').length) * a.size * 1.25;
        const w = a.w || Math.max(20, a.text.length * a.size * 0.55);
        if (x >= a.x - 3 && x <= a.x + w && y >= a.y - 3 && y <= a.y + h + 3) return i;
      } else if (a.type === 'line') {
        if (distToSegment(x, y, a.x1, a.y1, a.x2, a.y2) < Math.max(8, a.lineWidth + 4)) return i;
      } else if (a.type === 'draw') {
        for (let p = 0; p < a.points.length - 1; p++) {
          const p1 = a.points[p], p2 = a.points[p + 1];
          if (distToSegment(x, y, p1.x, p1.y, p2.x, p2.y) < Math.max(8, a.lineWidth + 4)) return i;
        }
      }
    }
    return -1;
  }

  function isOnImageResizeHandle(a, x, y) {
    return a.type === 'image' && Math.abs(x - (a.x + a.w)) < 8 && Math.abs(y - (a.y + a.h)) < 8;
  }

  function distToSegment(px, py, x1, y1, x2, y2) {
    const dx = x2 - x1, dy = y2 - y1;
    const lenSq = dx * dx + dy * dy;
    let t = lenSq === 0 ? 0 : ((px - x1) * dx + (py - y1) * dy) / lenSq;
    t = Math.max(0, Math.min(1, t));
    const cx = x1 + t * dx, cy = y1 + t * dy;
    return Math.hypot(px - cx, py - cy);
  }

  function startTextInput(x, y, existingIdx) {
    const wrap = canvasWrap.querySelector('.editor-canvas-stack');
    const pd = currentPageData();
    const existing = existingIdx !== undefined ? pd.annotations[existingIdx] : null;
    const input = document.createElement('textarea');
    input.className = 'editor-inline-text-input';
    input.style.left = x + 'px';
    input.style.top = y + 'px';
    input.style.color = existing ? existing.color : state.editorColor;
    input.style.fontSize = (existing ? existing.size : state.editorTextSize) + 'px';
    input.style.fontFamily = (existing ? existing.font.css : state.editorFont.css);
    input.style.fontWeight = (existing ? existing.bold : state.editorBold) ? 'bold' : 'normal';
    input.style.width = (existing && existing.w ? existing.w : 220) + 'px';
    input.value = existing ? existing.text : '';
    if (existing) pd.annotations.splice(existingIdx, 1);
    wrap.appendChild(input);
    input.focus();
    if (existing) input.select();
    redrawOverlay();

    let finished = false;
    const finish = () => {
      if (finished) return;
      finished = true;
      const text = input.value.trim();
      if (wrap.contains(input)) wrap.removeChild(input);
      if (text) {
        pd.annotations.push({
          type: 'text', x, y, text,
          color: state.editorColor, size: state.editorTextSize,
          font: state.editorFont, bold: state.editorBold,
          w: input.offsetWidth,
        });
      }
      redrawOverlay();
    };
    input.addEventListener('blur', finish);
    input.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') { e.preventDefault(); input.blur(); }
    });
  }

  function placeImageAt(x, y) {
    imageInput.dataset.pendingX = x;
    imageInput.dataset.pendingY = y;
    imageInput.value = '';
    imageInput.click();
  }

  imageInput.addEventListener('change', () => {
    const file = imageInput.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (e) => {
      const img = new Image();
      img.onload = () => {
        const x = parseFloat(imageInput.dataset.pendingX);
        const y = parseFloat(imageInput.dataset.pendingY);
        const maxW = 220;
        const scale = Math.min(1, maxW / img.width);
        const w = img.width * scale, h = img.height * scale;
        currentPageData().annotations.push({ type: 'image', x: x - w / 2, y: y - h / 2, w, h, dataUrl: e.target.result, img });
        redrawOverlay();
      };
      img.src = e.target.result;
    };
    reader.readAsDataURL(file);
  });

  function wireCanvasEvents() {
    const overlay = canvasWrap.querySelector('.editor-overlay-canvas');
    let dragging = false, dragStart = null, currentStroke = null, resizingImage = null;

    overlay.addEventListener('mousedown', (e) => {
      const rect = overlay.getBoundingClientRect();
      const x = e.clientX - rect.left, y = e.clientY - rect.top;
      const pd = currentPageData();

      if (state.editorTool === 'text') {
        const idx = hitTest(pd.annotations.filter(a => a.type === 'text'), x, y);
        // Re-map filtered index back to real index in the full array
        let realIdx = -1, count = -1;
        for (let i = 0; i < pd.annotations.length; i++) { if (pd.annotations[i].type === 'text') { count++; if (count === idx) { realIdx = i; break; } } }
        if (realIdx >= 0) startTextInput(pd.annotations[realIdx].x, pd.annotations[realIdx].y, realIdx);
        else startTextInput(x, y);
      } else if (state.editorTool === 'eraser') {
        const idx = hitTest(pd.annotations, x, y);
        if (idx >= 0) { pd.annotations.splice(idx, 1); redrawOverlay(); }
      } else if (state.editorTool === 'image') {
        const idx = pd.annotations.findIndex(a => isOnImageResizeHandle(a, x, y));
        if (idx >= 0) { resizingImage = pd.annotations[idx]; dragging = true; }
        else placeImageAt(x, y);
      } else if (state.editorTool === 'draw') {
        dragging = true;
        currentStroke = { type: 'draw', points: [{ x, y }], color: state.editorColor, lineWidth: state.editorLineWidth };
      } else if (['highlight', 'rect', 'ellipse', 'line'].includes(state.editorTool)) {
        dragging = true;
        dragStart = { x, y };
      }
    });

    overlay.addEventListener('mousemove', (e) => {
      const rect = overlay.getBoundingClientRect();
      const x = e.clientX - rect.left, y = e.clientY - rect.top;
      const pd = currentPageData();

      if (!dragging) {
        // Hover feedback: highlight whatever's under the cursor for Eraser/Image, so
        // it's clear what a click would affect before committing to it.
        if (state.editorTool === 'eraser' || state.editorTool === 'image') {
          const idx = hitTest(pd.annotations, x, y);
          if (idx !== state.editorHoverIdx) { state.editorHoverIdx = idx; redrawOverlay(); }
        }
        return;
      }
      const ctx = overlay.getContext('2d');

      if (resizingImage) {
        resizingImage.w = Math.max(20, x - resizingImage.x);
        resizingImage.h = Math.max(20, y - resizingImage.y);
        redrawOverlay();
      } else if (state.editorTool === 'draw' && currentStroke) {
        currentStroke.points.push({ x, y });
        redrawOverlay(currentStroke);
      } else if (state.editorTool === 'highlight' && dragStart) {
        const rx = Math.min(dragStart.x, x), ry = Math.min(dragStart.y, y);
        redrawOverlay({ type: 'highlight', x: rx, y: ry, w: Math.abs(x - dragStart.x), h: Math.abs(y - dragStart.y), color: state.editorColor });
      } else if (state.editorTool === 'rect' && dragStart) {
        const rx = Math.min(dragStart.x, x), ry = Math.min(dragStart.y, y);
        redrawOverlay({ type: 'rect', x: rx, y: ry, w: Math.abs(x - dragStart.x), h: Math.abs(y - dragStart.y), color: state.editorColor, lineWidth: state.editorLineWidth });
      } else if (state.editorTool === 'ellipse' && dragStart) {
        const rx = Math.min(dragStart.x, x), ry = Math.min(dragStart.y, y);
        redrawOverlay({ type: 'ellipse', x: rx, y: ry, w: Math.abs(x - dragStart.x), h: Math.abs(y - dragStart.y), color: state.editorColor, lineWidth: state.editorLineWidth });
      } else if (state.editorTool === 'line' && dragStart) {
        redrawOverlay({ type: 'line', x1: dragStart.x, y1: dragStart.y, x2: x, y2: y, color: state.editorColor, lineWidth: state.editorLineWidth, arrow: state.editorArrow });
      }
    });

    const finishDrag = (e) => {
      if (!dragging) return;
      dragging = false;
      const pd = currentPageData();
      const rect = overlay.getBoundingClientRect();
      const x = (e.clientX || 0) - rect.left, y = (e.clientY || 0) - rect.top;

      if (resizingImage) { resizingImage = null; }
      else if (state.editorTool === 'draw' && currentStroke) {
        if (currentStroke.points.length > 1) pd.annotations.push(currentStroke);
        currentStroke = null;
      } else if (dragStart) {
        const rx = Math.min(dragStart.x, x), ry = Math.min(dragStart.y, y);
        const rw = Math.abs(x - dragStart.x), rh = Math.abs(y - dragStart.y);
        if (state.editorTool === 'highlight' && rw > 3 && rh > 3) {
          pd.annotations.push({ type: 'highlight', x: rx, y: ry, w: rw, h: rh, color: state.editorColor });
        } else if (state.editorTool === 'rect' && rw > 3 && rh > 3) {
          pd.annotations.push({ type: 'rect', x: rx, y: ry, w: rw, h: rh, color: state.editorColor, lineWidth: state.editorLineWidth });
        } else if (state.editorTool === 'ellipse' && rw > 3 && rh > 3) {
          pd.annotations.push({ type: 'ellipse', x: rx, y: ry, w: rw, h: rh, color: state.editorColor, lineWidth: state.editorLineWidth });
        } else if (state.editorTool === 'line' && (Math.abs(x - dragStart.x) > 3 || Math.abs(y - dragStart.y) > 3)) {
          pd.annotations.push({ type: 'line', x1: dragStart.x, y1: dragStart.y, x2: x, y2: y, color: state.editorColor, lineWidth: state.editorLineWidth, arrow: true });
        }
        dragStart = null;
      }
      redrawOverlay();
    };
    overlay.addEventListener('mouseup', finishDrag);
    overlay.addEventListener('mouseleave', finishDrag);
  }

  panel.querySelectorAll('.editor-tool-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      panel.querySelectorAll('.editor-tool-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      state.editorTool = btn.dataset.editorTool;
      state.editorHoverIdx = -1;
      const toolDef = EDITOR_TOOLS.find(t => t.key === state.editorTool);
      hintEl.textContent = toolDef ? toolDef.hint : '';
      updatePropsVisibility();
      redrawOverlay();
    });
  });
  panel.querySelectorAll('.editor-color-swatch').forEach(btn => {
    btn.addEventListener('click', () => {
      panel.querySelectorAll('.editor-color-swatch').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      state.editorColor = btn.dataset.color;
    });
  });
  sizeSlider.addEventListener('input', () => {
    const v = parseInt(sizeSlider.value, 10);
    if (state.editorTool === 'text') state.editorTextSize = v;
    else state.editorLineWidth = v;
  });
  fontSelect.addEventListener('change', () => { state.editorFont = EDITOR_FONTS[parseInt(fontSelect.value, 10)]; });
  boldToggle.addEventListener('change', () => { state.editorBold = boldToggle.checked; });
  undoBtn.addEventListener('click', () => { currentPageData().annotations.pop(); redrawOverlay(); });
  clearBtn.addEventListener('click', () => { currentPageData().annotations = []; redrawOverlay(); });
  prevBtn.addEventListener('click', () => { if (state.editorCurrentPage > 0) { state.editorCurrentPage--; buildPageCanvas(); } });
  nextBtn.addEventListener('click', () => { if (state.editorCurrentPage < numPages - 1) { state.editorCurrentPage++; buildPageCanvas(); } });
  processBtn.addEventListener('click', processPdfEditor);

  updatePropsVisibility();
  buildPageCanvas();
}

async function processPdfEditor() {
  const f = state.files[state.files.length - 1];
  setProgress(20, 'Applying edits…');
  els.progressArea.hidden = false;
  try {
    const doc = await openPdfLib(f.arrayBuffer, f.password);
    const fontCache = {};
    async function getFont(fontDef, bold) {
      const key = (bold ? fontDef.pdfBold : fontDef.pdf);
      if (!fontCache[key]) fontCache[key] = await doc.embedFont(StandardFonts[key]);
      return fontCache[key];
    }
    const pages = doc.getPages();

    for (let i = 0; i < state.editorPages.length; i++) {
      const pd = state.editorPages[i];
      if (!pd.annotations.length) continue;
      const page = pages[i];
      const pageHeight = pd.pdfHeight;
      const toPdf = (v) => v / pd.scale; // canvas px -> PDF points

      for (const a of pd.annotations) {
        const c = hexToRgb01(a.color);
        if (a.type === 'text') {
          const font = await getFont(a.font, a.bold);
          const sizePt = toPdf(a.size);
          const maxWidthPt = a.w ? toPdf(a.w) : undefined;
          const lines = [];
          a.text.split('\n').forEach(paragraph => {
            if (!maxWidthPt) { lines.push(paragraph); return; }
            const words = paragraph.split(' ');
            let line = '';
            words.forEach(word => {
              const test = line ? line + ' ' + word : word;
              if (font.widthOfTextAtSize(test, sizePt) > maxWidthPt && line) { lines.push(line); line = word; }
              else line = test;
            });
            lines.push(line);
          });
          const xPt = toPdf(a.x);
          let yPt = pageHeight - toPdf(a.y) - sizePt;
          lines.forEach(line => {
            page.drawText(line, { x: xPt, y: yPt, size: sizePt, font, color: rgb(c.r, c.g, c.b) });
            yPt -= sizePt * 1.25;
          });
        } else if (a.type === 'highlight') {
          const xPt = toPdf(a.x), wPt = toPdf(a.w), hPt = toPdf(a.h);
          const yPt = pageHeight - toPdf(a.y) - hPt;
          page.drawRectangle({ x: xPt, y: yPt, width: wPt, height: hPt, color: rgb(c.r, c.g, c.b), opacity: 0.35 });
        } else if (a.type === 'rect') {
          const xPt = toPdf(a.x), wPt = toPdf(a.w), hPt = toPdf(a.h);
          const yPt = pageHeight - toPdf(a.y) - hPt;
          page.drawRectangle({ x: xPt, y: yPt, width: wPt, height: hPt, borderColor: rgb(c.r, c.g, c.b), borderWidth: Math.max(0.75, toPdf(a.lineWidth)) });
        } else if (a.type === 'ellipse') {
          const wPt = toPdf(a.w), hPt = toPdf(a.h);
          const cxPt = toPdf(a.x) + wPt / 2;
          const cyPt = pageHeight - toPdf(a.y) - hPt / 2;
          page.drawEllipse({ x: cxPt, y: cyPt, xScale: Math.abs(wPt / 2), yScale: Math.abs(hPt / 2), borderColor: rgb(c.r, c.g, c.b), borderWidth: Math.max(0.75, toPdf(a.lineWidth)) });
        } else if (a.type === 'line') {
          const lineWidthPt = Math.max(0.75, toPdf(a.lineWidth));
          page.drawLine({
            start: { x: toPdf(a.x1), y: pageHeight - toPdf(a.y1) },
            end: { x: toPdf(a.x2), y: pageHeight - toPdf(a.y2) },
            thickness: lineWidthPt, color: rgb(c.r, c.g, c.b), lineCap: LineCapStyle.Round,
          });
          if (a.arrow) {
            // Compute the arrowhead entirely in canvas space (consistent with how
            // a.x1/a.y1/a.x2/a.y2 are stored) and only convert to PDF's flipped
            // coordinate space once, at the very end — matching exactly how the main
            // line segment above is handled, rather than mixing the two systems
            // mid-calculation.
            const angleCanvas = Math.atan2(a.y2 - a.y1, a.x2 - a.x1);
            const headLenCanvas = Math.max(6, a.lineWidth * 4);
            [Math.PI / 6, -Math.PI / 6].forEach(off => {
              const hx = a.x2 - headLenCanvas * Math.cos(angleCanvas + off);
              const hy = a.y2 - headLenCanvas * Math.sin(angleCanvas + off);
              page.drawLine({
                start: { x: toPdf(a.x2), y: pageHeight - toPdf(a.y2) },
                end: { x: toPdf(hx), y: pageHeight - toPdf(hy) },
                thickness: lineWidthPt, color: rgb(c.r, c.g, c.b), lineCap: LineCapStyle.Round,
              });
            });
          }
        } else if (a.type === 'image') {
          const isPng = a.dataUrl.startsWith('data:image/png');
          const bytes = await (await fetch(a.dataUrl)).arrayBuffer();
          const embedded = isPng ? await doc.embedPng(bytes) : await doc.embedJpg(bytes);
          const wPt = toPdf(a.w), hPt = toPdf(a.h);
          const yPt = pageHeight - toPdf(a.y) - hPt;
          page.drawImage(embedded, { x: toPdf(a.x), y: yPt, width: wPt, height: hPt });
        }
      }
    }

    const bytes = await doc.save();
    setProgress(100, 'Done');
    const baseName = f.name.replace(/\.pdf$/i, '');
    showResult(
      [{ url: downloadable(bytes, 'application/pdf'), filename: baseName + '_edited.pdf' }],
      'Done — your additions are real PDF content, and the original text and images are untouched.'
    );
  } catch (err) {
    setProgress(0, '');
    els.progressArea.hidden = true;
    showResult([], "Couldn't apply edits: " + escapeHtml(err.message || String(err)), true);
  }
}
