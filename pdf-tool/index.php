<?php
$pageTitle = 'PDF Toolkit | Technofra';
$metaKeywords = 'pdf toolkit, merge pdf, split pdf, compress pdf, technofra';
$bodyClass = 'pdf-tool-page';
$forceBlackHeader = true;
$baseHref = '../';
include __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="pdf-tool/style.css">
<style>
body.pdf-tool-page {
    --primary: #f38020;
    --primary-dark: #d96d14;
    --primary-bright: #ffab5c;
    --ink: #10233e;
    --muted: #5f7087;
    --border: rgba(16, 35, 62, 0.12);
    --card-bg: #ffffff;
    --card-bg-alt: #f5f8fc;
    --bg: linear-gradient(180deg, #eef6ff 0%, #ffffff 40%, #f7fbff 100%);
    --organize: #003366;
    --edit: #f38020;
    --convert: #2b6cb0;
    background: #f7fbff;
    color: #10233e;
    font-family: 'Manrope', sans-serif;
}

body.pdf-tool-page .wrapper {
    background:
        radial-gradient(circle at top right, rgba(243, 128, 32, 0.12), transparent 24%),
        radial-gradient(circle at top left, rgba(0, 51, 102, 0.12), transparent 30%),
        linear-gradient(180deg, #eef6ff 0%, #ffffff 42%, #f7fbff 100%);
}

body.pdf-tool-page .vs-header4 .btn-box .ibt-btn,
body.pdf-tool-page .sticky-active .btn-box .ibt-btn,
body.pdf-tool-page .menu-links .ibt-btn {
    background: #111111 !important;
    border-color: #111111 !important;
    color: #ffffff !important;
}

body.pdf-tool-page .vs-header4 .btn-box .ibt-btn:hover,
body.pdf-tool-page .sticky-active .btn-box .ibt-btn:hover,
body.pdf-tool-page .menu-links .ibt-btn:hover {
    background: #000000 !important;
    border-color: #000000 !important;
    color: #ffffff !important;
}

body.pdf-tool-page .vs-header4 .btn-box .ibt-btn span,
body.pdf-tool-page .sticky-active .btn-box .ibt-btn span,
body.pdf-tool-page .menu-links .ibt-btn span {
    color: #ffffff !important;
}


.pdf-tool-shell {
    padding: 44px 0 90px;
}

.pdf-tool-shell .container {
    max-width: 1240px;
}

.pdf-tool-banner {
    position: relative;
    overflow: hidden;
    border-radius: 34px;
    padding: 34px;
    margin-bottom: 28px;
    background: linear-gradient(135deg, #08294d 0%, #003366 58%, #0e4c8f 100%);
    color: #fff;
    box-shadow: 0 30px 80px rgba(8, 41, 77, 0.18);
}

.pdf-tool-banner::after {
    content: '';
    position: absolute;
    inset: auto -8% -28% auto;
    width: 320px;
    height: 320px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(243, 128, 32, 0.32), transparent 70%);
}

.pdf-tool-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 16px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.14);
    color: #fff;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.pdf-tool-banner-grid {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: minmax(0, 1.4fr) minmax(280px, 0.8fr);
    gap: 28px;
    align-items: end;
    margin-top: 18px;
}

.pdf-tool-banner h1 {
    margin: 0 0 14px;
    color: #fff;
    font-family: 'Sora', sans-serif;
    font-size: clamp(34px, 5vw, 56px);
    line-height: 1.08;
}

.pdf-tool-banner p {
    margin: 0;
    max-width: 720px;
    color: rgba(255, 255, 255, 0.82);
    font-size: 17px;
    line-height: 1.8;
}

.pdf-tool-home-link {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-top: 24px;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
}

.pdf-tool-home-mark {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f38020 0%, #ffb36d 100%);
    color: #fff;
    font-family: 'Sora', sans-serif;
    font-weight: 800;
}

.pdf-tool-banner-points {
    display: grid;
    gap: 14px;
}

.pdf-tool-point {
    padding: 18px 20px;
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(4px);
}

.pdf-tool-point strong {
    display: block;
    margin-bottom: 6px;
    color: #fff;
    font-size: 16px;
}

.pdf-tool-point span {
    color: rgba(255, 255, 255, 0.78);
    font-size: 14px;
    line-height: 1.6;
}

.pdf-tool-surface {
    border-radius: 10px;
    border: 1px solid rgba(16, 35, 62, 0.08);
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 26px 70px rgba(15, 35, 65, 0.08);
    padding: 28px;
}

.pdf-tool-shell .hero {
    text-align: left;
    padding: 6px 8px 8px;
}

.pdf-tool-shell .hero h1 {
    color: #10233e;
    font-family: 'Sora', sans-serif;
    font-size: clamp(28px, 3vw, 42px);
    margin-bottom: 14px;
}

.pdf-tool-shell .hero p {
    max-width: 820px;
    color: #5f7087;
    font-size: 16px;
}

.pdf-tool-chip-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 22px;
}

.pdf-tool-chip {
    padding: 10px 16px;
    border-radius: 999px;
    background: #f5f8fc;
    border: 1px solid rgba(16, 35, 62, 0.08);
    color: #163254;
    font-size: 13px;
    font-weight: 700;
}

.tool-grid {
    max-width: none;
    margin: 28px 0 0;
    padding: 0;
    grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
    gap: 20px;
}

.tool-card {
    border-radius: 22px;
    padding: 24px 20px;
    background: linear-gradient(180deg, #ffffff 0%, #f9fbff 100%);
    box-shadow: 0 18px 42px rgba(17, 35, 62, 0.06);
}

.tool-card:hover {
    box-shadow: 0 26px 58px rgba(17, 35, 62, 0.12);
}

.tool-icon {
    width: 46px;
    height: 46px;
    margin-bottom: 16px;
    color: #f38020;
}

.tool-icon.organize,
.tool-icon.edit,
.tool-icon.convert,
.dropzone-icon {
    color: #f38020;
}

.tool-name {
    font-size: 17px;
    color: #10233e;
}

.tool-desc {
    color: #5f7087;
    font-size: 13.5px;
}

.tool-view {
    max-width: 980px;
    margin: 0 auto;
    padding: 6px 8px 0;
}

.back-btn {
    padding-bottom: 12px;
}

.dropzone,
.options-panel,
.file-row,
.thumb-card,
.result-area {
    box-shadow: 0 18px 36px rgba(17, 35, 62, 0.06);
}

.process-btn,
.download-btn {
    border-radius: 999px;
    padding-left: 24px;
    padding-right: 24px;
}

.footer {
    display: none;
}

@media (max-width: 991px) {
    .pdf-tool-banner {
        padding: 28px 22px;
    }

    .pdf-tool-banner-grid {
        grid-template-columns: 1fr;
    }

    .pdf-tool-surface {
        padding: 22px 16px;
    }
}

@media (max-width: 767px) {
    .pdf-tool-shell {
        padding: 30px 0 70px;
    }

    .pdf-tool-banner {
        border-radius: 24px;
    }

    .tool-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    }
}
</style>

<section class="ibt-section-gap pdf-tool-shell">
    <div class="container">
        <!-- <div class="pdf-tool-banner">
            <span class="pdf-tool-eyebrow">Technofra Utility Suite</span>
            <div class="pdf-tool-banner-grid">
                <div>
                    <h1>PDF Toolkit built for fast everyday document work</h1>
                    <p>Merge, split, compress, convert, watermark, compare and organise PDFs in one focused workspace. The tooling stays on this computer, while the interface now follows the same visual language as the rest of the Technofra website.</p>
                    <div class="pdf-tool-home-link" id="homeLink" role="button" tabindex="0" aria-label="Go to PDF toolkit home view">
                        <span class="pdf-tool-home-mark">TF</span>
                        <span>Return to all PDF tools anytime</span>
                    </div>
                </div>
                <div class="pdf-tool-banner-points">
                    <div class="pdf-tool-point">
                        <strong>Website-aligned theme</strong>
                        <span>Navy, orange and clean white surfaces matched to the Technofra brand.</span>
                    </div>
                    <div class="pdf-tool-point">
                        <strong>One place for utility flows</strong>
                        <span>From invoice generation to PDF comparison, everything stays in a single dashboard.</span>
                    </div>
                    <div class="pdf-tool-point">
                        <strong>Tool-first experience</strong>
                        <span>The existing JavaScript functionality remains intact while the outer experience feels consistent with your website.</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="pdf-tool-surface">
            <main id="homeView" class="home">
                <section class="hero">
                    <h1>Every tool you need to work with PDFs, in one place</h1>
                    <p>Merge, split, compress, convert, rotate and organize - 100% offline.</p>
                    <div class="pdf-tool-chip-row">
                        <span class="pdf-tool-chip">Organize PDFs</span>
                        <span class="pdf-tool-chip">Convert Files</span>
                        <span class="pdf-tool-chip">Edit & Secure</span>
                        <span class="pdf-tool-chip">Invoice Utilities</span>
                    </div>
                </section>

                <section class="tool-grid" id="toolGrid">
                    <button class="tool-card" data-tool="merge">
                        <div class="tool-icon organize" data-icon="ICON_MERGE"></div>
                        <div class="tool-name">Merge PDF</div>
                        <div class="tool-desc">Combine PDFs in the order you want</div>
                    </button>
                    <button class="tool-card" data-tool="split">
                        <div class="tool-icon organize" data-icon="ICON_SPLIT"></div>
                        <div class="tool-name">Split PDF</div>
                        <div class="tool-desc">Separate one page or a whole set</div>
                    </button>
                    <button class="tool-card" data-tool="remove">
                        <div class="tool-icon organize" data-icon="ICON_REMOVE"></div>
                        <div class="tool-name">Remove Pages</div>
                        <div class="tool-desc">Delete pages you don't need</div>
                    </button>
                    <button class="tool-card" data-tool="extract">
                        <div class="tool-icon organize" data-icon="ICON_EXTRACT"></div>
                        <div class="tool-name">Extract Pages</div>
                        <div class="tool-desc">Pull specific pages into a new file</div>
                    </button>
                    <button class="tool-card" data-tool="organize">
                        <div class="tool-icon organize" data-icon="ICON_ORGANIZE"></div>
                        <div class="tool-name">Organize PDF</div>
                        <div class="tool-desc">Reorder, rotate or delete pages visually</div>
                    </button>
                    <button class="tool-card" data-tool="compress">
                        <div class="tool-icon edit" data-icon="ICON_COMPRESS"></div>
                        <div class="tool-name">Compress PDF</div>
                        <div class="tool-desc">Reduce file size, best effort</div>
                    </button>
                    <button class="tool-card" data-tool="rotate">
                        <div class="tool-icon edit" data-icon="ICON_ROTATE"></div>
                        <div class="tool-name">Rotate PDF</div>
                        <div class="tool-desc">Rotate every page or just some</div>
                    </button>
                    <button class="tool-card" data-tool="pagenumbers">
                        <div class="tool-icon edit" data-icon="ICON_PAGENUM"></div>
                        <div class="tool-name">Add Page Numbers</div>
                        <div class="tool-desc">Insert numbers in any position</div>
                    </button>
                    <button class="tool-card" data-tool="watermark">
                        <div class="tool-icon edit" data-icon="ICON_WATERMARK"></div>
                        <div class="tool-name">Watermark PDF</div>
                        <div class="tool-desc">Stamp text over every page</div>
                    </button>
                    <button class="tool-card" data-tool="redact">
                        <div class="tool-icon edit" data-icon="ICON_REDACT"></div>
                        <div class="tool-name">Redact PDF</div>
                        <div class="tool-desc">Permanently black out sensitive content</div>
                    </button>
                    <button class="tool-card" data-tool="lockpdf">
                        <div class="tool-icon edit" data-icon="ICON_LOCK"></div>
                        <div class="tool-name">Lock PDF</div>
                        <div class="tool-desc">Add a password so only you can open it</div>
                    </button>
                    <button class="tool-card" data-tool="unlockpdf">
                        <div class="tool-icon edit" data-icon="ICON_UNLOCK"></div>
                        <div class="tool-name">Unlock PDF</div>
                        <div class="tool-desc">Remove password protection you already know</div>
                    </button>
                    <button class="tool-card" data-tool="comparepdf">
                        <div class="tool-icon convert" data-icon="ICON_COMPARE"></div>
                        <div class="tool-name">Compare PDF</div>
                        <div class="tool-desc">See exactly what changed between two versions</div>
                    </button>
                    <button class="tool-card" data-tool="pdfeditor">
                        <div class="tool-icon edit" data-icon="ICON_EDIT_PDF"></div>
                        <div class="tool-name">Edit PDF</div>
                        <div class="tool-desc">Add text, draw, and highlight on any page</div>
                    </button>
                    <button class="tool-card" data-tool="html2pdf">
                        <div class="tool-icon convert" data-icon="ICON_HTML2PDF"></div>
                        <div class="tool-name">HTML to PDF</div>
                        <div class="tool-desc">Turn a saved local webpage file into a PDF</div>
                    </button>
                    <button class="tool-card" data-tool="createinvoice">
                        <div class="tool-icon organize" data-icon="ICON_INVOICE"></div>
                        <div class="tool-name">Create Invoice</div>
                        <div class="tool-desc">Fill in a form, see a live preview, get a PDF</div>
                    </button>
                    <button class="tool-card" data-tool="bulkinvoice">
                        <div class="tool-icon organize" data-icon="ICON_BULK_INVOICE"></div>
                        <div class="tool-name">Bulk Create Invoices</div>
                        <div class="tool-desc">One spreadsheet in, many invoice PDFs out</div>
                    </button>
                    <button class="tool-card" data-tool="pdf2jpg">
                        <div class="tool-icon convert" data-icon="ICON_PDF2JPG"></div>
                        <div class="tool-name">PDF to JPG</div>
                        <div class="tool-desc">Export each page as an image</div>
                    </button>
                    <button class="tool-card" data-tool="img2pdf">
                        <div class="tool-icon convert" data-icon="ICON_IMG2PDF"></div>
                        <div class="tool-name">JPG/PNG to PDF</div>
                        <div class="tool-desc">Turn images into one PDF</div>
                    </button>
                    <button class="tool-card" data-tool="word2pdf">
                        <div class="tool-icon convert" data-icon="ICON_WORD2PDF"></div>
                        <div class="tool-name">Word to PDF</div>
                        <div class="tool-desc">Convert a .docx into a real, selectable PDF</div>
                    </button>
                    <button class="tool-card" data-tool="pdf2word">
                        <div class="tool-icon convert" data-icon="ICON_PDF2WORD"></div>
                        <div class="tool-name">PDF to Word</div>
                        <div class="tool-desc">Pull the text out into an editable .docx</div>
                    </button>
                    <button class="tool-card" data-tool="excel2pdf">
                        <div class="tool-icon convert" data-icon="ICON_EXCEL2PDF"></div>
                        <div class="tool-name">Excel to PDF</div>
                        <div class="tool-desc">Convert a spreadsheet into a real, printable PDF</div>
                    </button>
                    <button class="tool-card" data-tool="pdf2excel">
                        <div class="tool-icon convert" data-icon="ICON_PDF2EXCEL"></div>
                        <div class="tool-name">PDF to Excel</div>
                        <div class="tool-desc">Best-effort table extraction into a .xlsx</div>
                    </button>
                </section>
            </main>

            <main id="toolView" class="tool-view" hidden>
                <button class="back-btn" id="backBtn">&larr; All tools</button>
                <h2 id="toolTitle"></h2>
                <p id="toolSubtitle" class="tool-subtitle"></p>

                <div id="dropZone" class="dropzone">
                    <div class="dropzone-icon" data-icon="ICON_UPLOAD"></div>
                    <div class="dropzone-text">Drag &amp; drop file(s) here, or <span class="link">choose from computer</span></div>
                    <input type="file" id="fileInput" hidden>
                </div>

                <div id="fileList" class="file-list"></div>
                <div id="optionsPanel" class="options-panel" hidden></div>
                <div id="thumbGrid" class="thumb-grid" hidden></div>

                <button id="processBtn" class="process-btn" hidden>Process</button>
                <div id="progressArea" class="progress-area" hidden>
                    <div class="progress-bar"><div class="progress-fill" id="progressFill"></div></div>
                    <div id="progressLabel" class="progress-label">Working...</div>
                </div>
                <div id="resultArea" class="result-area" hidden></div>
            </main>
        </div>
    </div>
</section>

<div id="docxStyleHost" style="display:none"></div>

<script src="pdf-tool/vendor/pdf-lib.min.js"></script>
<script src="pdf-tool/vendor/fontkit.min.js"></script>
<script src="pdf-tool/vendor/pdf.min.js"></script>
<script src="pdf-tool/vendor/jszip.min.js"></script>
<script src="pdf-tool/vendor/docx-preview.min.js"></script>
<script>
window.docxPreview = window.docx;
window.docx = undefined;
</script>
<script src="pdf-tool/vendor/docx.iife.js"></script>
<script src="pdf-tool/vendor/xlsx.full.min.js"></script>
<script src="pdf-tool/vendor/tesseract.min.js"></script>
<script>
pdfjsLib.GlobalWorkerOptions.workerSrc = 'pdf-tool/vendor/pdf.worker.min.js';
</script>
<script src="pdf-tool/icons.js"></script>
<script src="pdf-tool/app.js"></script>
<script>
(function () {
    var homeLink = document.getElementById('homeLink');
    if (homeLink) {
        homeLink.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                homeLink.click();
            }
        });
    }

    var blackLogo = 'assets/images/new/logo-black.png?v=<?php echo max((int) @filemtime(__DIR__ . '/../assets/images/new/logo-black.png'), 1); ?>';
    document.querySelectorAll('.header-logo img.wi, .side-menu .logo img.wi').forEach(function (img) {
        img.src = blackLogo;
    });
})();
</script>
<?php include __DIR__ . '/../footer.php'; ?>



