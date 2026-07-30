PDF TOOLKIT — local, offline PDF tool
======================================

HOW TO RUN
-----------
1. Unzip this folder anywhere on your computer.
2. Double-click "start-server.bat" (Windows) or "start-server.sh" (Mac/Linux) —
   it starts a small local server and opens the app in your browser automatically.
   The server stops itself automatically when you close that browser tab.
   (Windows users: "start-server.vbs" does the same thing without a visible command
   prompt window, if you'd rather not see it.)
3. Click a tool, drop in your file(s), set any options, click Process,
   then click the download button that appears.

You can also just double-click "index.html" directly without the server — everything
works the same way, except OCR (PDF to Word / PDF to Excel's "Try OCR" checkbox), which
needs the server running due to a browser security restriction — see "HOW OCR WORKS"
below for why. Using the server for everything, as above, sidesteps that entirely.

Everything runs inside your browser using JavaScript. Your PDFs are never
uploaded anywhere — there is no server involved at all (the server above only runs
on your own computer and only serves the app's own files — it still never sends
anything anywhere). You can even disconnect from the internet and it will still work.

TOOLS INCLUDED
---------------
- Merge PDF          — combine multiple PDFs into one, in the order you set
- Split PDF           — by custom ranges, every N pages, or one file per page
- Remove Pages        — click pages to delete them
- Extract Pages       — click pages to keep them, discard the rest
- Organize PDF        — drag to reorder, rotate or delete individual pages
- Compress PDF        — multiple files; light or strong; merge-first option; live size
                         estimate; one-click preset targeting 4.75-4.9MB for e-filing (see note below)
- Rotate PDF          — multiple files; merge-first option
- Add Page Numbers    — multiple files; merge-first option; live preview
- Watermark PDF       — multiple files; merge-first option; text or image; live preview
- PDF to JPG          — multiple files; merge-first option
- JPG/PNG to PDF      — combine into one PDF, or a separate PDF per image
- Word to PDF         — real fonts/sizes/tables via the same engine Word itself uses;
                         shows the total page count and marks each page break (see note below)
- PDF to Word         — multiple files; merge-first option; text + table extraction with
                         a real preview, plus optional OCR for scanned pages (see note below)
- Excel to PDF        — converts a .xlsx/.xls via your browser's print engine; adjustable
                         page breaks, including a "break every N rows/columns" shortcut (see note below)
- PDF to Excel        — multiple files; merge-first option; best-effort table extraction
                         with a preview and the same adjustable page breaks, plus optional
                         OCR for scanned pages (see note below)
- Redact PDF          — draw black boxes over sensitive content; the underlying text and
                         images are genuinely destroyed, not just covered (see note below)
- Lock PDF            — add real password protection (genuine PDF encryption, not a
                         cosmetic lock), with optional print/copy restrictions (see note below)
- Unlock PDF          — remove password protection from a file you already have the
                         password for
- Compare PDF         — upload two versions of a PDF and see exactly which pages and
                         lines of text differ between them, with a visual highlight of
                         what changed on each page (see note below)
- Edit PDF            — add text, freehand drawing, and highlights directly on any page;
                         these become real PDF content, not a flattened image, so the
                         original text and images stay completely intact (see note below)
- HTML to PDF         — turn a local HTML file into a PDF via your browser's own print
                         engine (see note below — this isn't "any webpage URL to PDF")
- Create Invoice      — fill in a form (business info, client info, line items, tax) and
                         get a professional invoice PDF, with a live preview as you type
- Bulk Create Invoices — upload one spreadsheet and get a separate invoice PDF for every
                         invoice number in it, zipped together (see note below)

Also: any tool that opens a PDF will prompt you for its password if it's protected —
you'll need to already know the password (this isn't a way to bypass one you don't
have), and it's kept in memory only for that file, never written to disk or sent anywhere.

MULTIPLE FILES: MERGE-FIRST vs. KEEP SEPARATE
------------------------------------------------
Every tool above that says "multiple files" lets you drop in more than one PDF at once.
Once you've added a second file, a checkbox appears: "Combine all files into one PDF
first, then [do the thing] on the merged result." Leave it unchecked and each file gets
processed and downloaded on its own; check it and your files are merged first, so the
tool runs once against the combined document (e.g. page numbers run continuously across
all of it, rather than restarting at 1 for each file).

JPG/PNG to PDF works a little differently, since the inputs are images rather than
PDFs: choose "Combine into one PDF" for a single multi-page PDF, or "A separate PDF for
each image" to get one PDF per image (zipped together if there's more than one). Each
image lands on a proper A4 page (portrait or landscape, matching the image's own
orientation), scaled to fit with a small margin — previously the page itself was sized
directly to the image's raw pixel dimensions, so an ordinary photo could end up as a
page tens of inches across; that's fixed now.

HOW COMPRESS PDF'S SIZE ESTIMATE AND ONE-CLICK PRESET WORK
--------------------------------------------------------------
As you change the compression options, an "Estimated output size" line updates
automatically. For Light mode this is exact (it's cheap enough to just run for real).
For Strong mode it rasterizes a small sample of pages (up to 3) at your chosen settings
and scales that up to the full page count — a genuine estimate, not a guess pulled from
nowhere, but treat it as approximate for documents with very mixed page content.

The green "One-click: get this to ~4.8MB" button ignores the manual settings and
instead tries Light compression first, then tunes resolution and JPEG quality (via a
fast binary search — it renders each page once per resolution tried, then cheaply
re-compresses that same rendering at different quality levels rather than re-rendering
from scratch each time) to land the result between 4.75MB and 4.9MB — close to the 5MB
e-filing ceiling without risking going over it, rather than just aiming vaguely "under."
If a file is already smaller than 4.75MB after Light compression, it's left alone —
forcing it larger, or rasterizing it further, would only hurt quality for no benefit.
If even the most aggressive setting can't bring a very large or dense file down to 4.9MB,
it reports the closest it could reasonably reach instead of pretending to succeed.

Worth knowing: Strong mode can sometimes make an already-compact, mostly-text PDF
*larger*, not smaller — turning tight vector text into a rasterized image has its own
overhead, and for a small, simple document that overhead can outweigh the savings. When
the size estimate (or the final result) comes out larger than the original, it's called
out explicitly rather than shown as a plain number, with a suggestion to try Light mode
or a lower resolution/quality instead.

HOW WORD TO PDF WORKS
-----------------------
This uses a real Word-document renderer (the same engine that powers most in-browser
.docx viewers) to lay out your document exactly as Word would — actual fonts, font
sizes, tables, and page geometry, at their true, unmodified size. That rendered layout
is then handed to your browser's native print dialog; choose "Save as PDF" there. The
print dialog defaults to A4 paper — if your document was actually set up for a
different page size (e.g. US Letter), your browser's print dialog lets you pick a
different paper size before saving, same as printing anything else.

The on-screen preview is scaled down to fit the box using a CSS transform rather than
by shrinking the page's real width — that distinction matters, because actually
shrinking the width would change where text wraps and make the preview (and worse, the
printed PDF) look different from your original document. A transform only changes what
gets painted on screen; the underlying layout, and what actually gets printed, stays
true to size regardless of how it's displayed.

Above the preview, it tells you how many pages the document will convert into, and each
page in the preview is labeled ("Page 1 of 3", etc.) right where that page begins —
that label is for your reference only and won't appear in the actual printed PDF.

HOW PDF TO WORD WORKS
------------------------
Each page's text is read along with its position on the page, then walked in order:
any run of two or more consecutive rows that each look like more than one column is
rebuilt as a real, page-width Word table (using page-wide column alignment, so every
row in that table lines up under the same columns); everything else becomes
paragraphs, with each line's font size approximated from the original text's height.
This means a table sitting between a letterhead and a footer note is kept as an actual
table instead of the whole page being judged as "not a table."

Two extraction methods combine to catch real-world documents that defeat naive
approaches: position-based gaps (for genuinely gridded tables), and a "Label : Value"
pattern match for lines that arrive as one glued string with no unusual gap to detect —
extremely common in receipts, invoices, and forms (a run of "TAN : BLRG23799G",
"Name : ...", "Tax Year : ..." lines now becomes a real two-column table, instead of
staying flattened into plain paragraphs).

Bold and italic are read directly from the PDF's own fonts and carried over into the
Word output — a bold label like "Total:" stays bold rather than turning into plain
text like everything else. A short line whose horizontal center matches the page's own
center (and that isn't already stretched out to the margins the way a wrapped paragraph
would be) gets recognized as a heading or title and center-aligned, instead of every
line defaulting to the left margin regardless of how it looked in the original.

A single line that looks columnar (several separate pieces of text with a real gap
between them) but doesn't repeat enough times to justify building a whole table gets
real Word tab stops placed at the same positions its columns actually sat at in the
PDF — this is what keeps things like a lone total line or a one-off label/value pair
lined up cleanly when opened in Word, rather than every column running together into
one line of plain, unaligned text. This only lines up correctly because the Word
document's own page size is now set to match the source PDF's actual dimensions —
previously every PDF to Word output silently used the default US Letter size regardless
of the PDF's real page size, which would throw off exactly this kind of position-based
alignment (and generally look a little off) on any non-Letter-sized document.

A live preview — using the same engine as Word to PDF, including the same fit-to-width
scaling — appears as soon as you upload a file (or merge files), so you can check the
result before clicking Process. This still can't reconstruct merged cells or true
multi-column page layouts, and very irregular tables may still get misread — that's
inherent to guessing structure from a PDF, which was never a real table to begin with,
only text positioned to look like one.

HOW EXCEL TO PDF WORKS
-------------------------
Your spreadsheet is read sheet by sheet (with checkboxes to include/exclude sheets),
then shown as an editable table: click any column letter or row number to insert a
page break right after it — the same idea as Excel's own Page Break Preview, minus
drag support (click again to remove it). For evenly-spaced breaks, type a number into
"Break every N rows" or "Break every N columns" instead of clicking each one
individually — it fills in the whole repeating pattern in one go, and you can still
fine-tune it afterward with clicks. A line above the editor tells you how many pages
the result will print as, updating live as you adjust breaks or which sheets are
included. Printing follows those break points exactly, tiling wide/tall sheets
left-to-right then top-to-bottom the way Excel does by default. Choose "Save as PDF" in
the print dialog; switching its layout to Landscape often helps for wide sheets.

HOW PDF TO EXCEL WORKS
-------------------------
This is the roughest tool in the kit, so treat its output as a draft to clean up rather
than a finished spreadsheet. It looks at the position of each piece of text on the page
and, once enough rows look tabular, finds column boundaries as the widest empty
vertical strips shared across every row combined (the standard "whitespace gap"
approach to table detection) — with a fallback to clustering each item's start position
if one unusually wide row (e.g. a long header) bridges what should be a real gap for
every other row. Either way, every row ends up aligned to the same columns, rather than
each row being judged in isolation, which could otherwise produce a different number of
cells per row even within one real table — with the same "Label : Value" fallback
described above for PDF to Word, since both tools share this extraction logic.

Table cells whose text wraps across multiple lines (in the original document, or a
scanned image) no longer turn into extra, mostly-empty rows either — a row with far
fewer filled-in cells than the table's usual row is recognized as a wrapped-over
continuation and folded back into the real row it belongs to, in the correct column.
Verified directly against a real, heavily-watermarked scanned tax statement: a table
that came out at roughly 3.5x too many rows (each entry split across three) now comes
out at very close to the true row count, each one clean and complete. One known rough
edge: right at a boundary between two different tables sitting close together on a
page, a stray line can occasionally get folded into the wrong one — a minor side effect
of the same heuristic, worth a glance in the preview rather than a systemic problem.

A live preview appears as soon as you upload a file, with one global "Break every N
rows/columns" control that applies to every extracted page at once (rather than
repeating the same two inputs on each page), plus click-to-mark editing per page for
fine-tuning. A summary line lists exactly which sheets the download will contain and how
many there'll be, updating live as you adjust breaks. Marking a break doesn't set real
Excel print-break metadata — the free spreadsheet library this tool bundles can't
reliably write that (confirmed by testing it directly, it's silently dropped on save) —
so instead, marking a break actually splits the output into separate sheets at that
point, which is a real, working effect rather than a marker that would quietly do
nothing. Columns are auto-widened to fit their content. It does NOT understand merged
cells or nested tables, and can't carry over the original document's fonts or colors —
only text and column structure. Always check the preview before
relying on the result.

HOW OCR WORKS (FOR SCANNED/IMAGE-ONLY PAGES)
------------------------------------------------
PDF to Word and PDF to Excel both have a checkbox: "Try OCR on pages with no text
layer." It's off by default because it's genuinely slower and not always needed — most
PDFs already have real, extractable text, and OCR only ever kicks in for a page where
that text layer is completely absent (the same pages that would otherwise show up as
"no text detected").

When enabled, it renders just those pages as images — at roughly 300 DPI, the
resolution Tesseract itself is tuned for, since too low hurts accuracy — and runs them
through a real, open-source OCR engine (Tesseract, using its SIMD-optimized
WebAssembly build for speed on Chrome/Edge) that ships with this toolkit and runs
entirely on your device — nothing is uploaded, and it works offline once you have the
files, same as everything else here. The recognized words, along with their position
on the page, get fed into the exact same row/column/table detection already used for
real PDF text — so an OCR'd page can still come out as a proper table if it looks like
one, not just a wall of text.

Multiple pages needing OCR are processed in parallel rather than one at a time — a
small pool of background workers (sized to your CPU, typically 2–4) share the work, so
a multi-page scanned document doesn't take as long as running each page back to back
would. You'll see "Running OCR on N pages at once" while that's happening.

Two more things happen before Tesseract ever sees a page, aimed specifically at
documents with background patterns or watermarks (common on tax/financial statements,
where they're meant to be visible without obscuring the real content — which can
otherwise confuse a general-purpose OCR engine into blending the two together into
garbled text): the rendered image is converted to black-and-white using an
automatically-picked threshold (Otsu's method) that pushes anything lighter than real
text to pure white, erasing faint patterns rather than asking the engine to somehow see
past them; and Tesseract is set to treat the page as one uniform block of structured
content (its "single block" page-segmentation mode), which suits forms/tables/
statements better than its default assumption of a typical multi-column article layout.

Some honest limits: it only reads English right now. It's still meaningfully slower
than reading a real text layer — expect real seconds per page even in parallel, more
for dense or low-quality scans — so it's opt-in rather than automatic. Accuracy depends
entirely on how clean the scan is; a crisp, high-contrast scan does well, and the
preprocessing above helps with watermarks specifically, but a blurry photo of a page or
a background pattern with ink density close to the real text's will still produce
errors no setting can fully fix. Pages that used OCR are labeled in the preview so you
know which parts of the output to double-check rather than trust blindly.

IMPORTANT — OCR needs a local server, not a double-clicked file:
OCR requires spawning a background Web Worker, and browsers block that for pages
opened directly from disk (file://) — you'll see an error like "Failed to construct
'Worker' ... cannot be accessed from origin 'null'" if you hit this. Two launcher
scripts are included to fix it in one click:

  - Windows:      double-click start-server.bat
  - Mac/Linux:    double-click start-server.sh (or run it in Terminal)

Either one starts a small local server (using Python or Node.js, whichever is already
on your computer) and opens the app at http://localhost:8000 instead of file://. Use
the app from that browser tab. If neither Python nor Node.js is installed, the script
will tell you and point to https://www.python.org/downloads/.

HOW REDACT PDF WORKS
-----------------------
Draw black boxes over anything you want permanently removed, then click "Apply
Redaction & Download." This isn't a cosmetic overlay — pages with redactions are
rendered to an image with the black box burned directly into the pixels, then that
flattened image replaces the original page entirely. The original text and any image
data underneath the box is gone from the output file, not just hidden behind a shape
that could be deleted or moved in a PDF editor to reveal it again. Pages with no
redactions on them keep their original, selectable text — only pages you've actually
marked get flattened. Use the "Preview" button to check your boxes are placed
correctly before downloading, since this can't be undone afterward.

HOW LOCK / UNLOCK PDF WORK
------------------------------
Lock PDF applies genuine PDF encryption (the same Standard Security Handler that Adobe
Acrobat and other PDF software use) — a PDF reader will refuse to open the file at all
without the password you set, not just display a warning. The password you choose
becomes the "user password" needed to open the file; a second, random "owner password"
is generated internally and never shown to you, which is what makes the optional print/
copy restrictions actually take effect for anyone opening it with your password (if the
same password served both roles, many PDF readers would treat whoever has it as having
full owner-level access and skip the restrictions entirely). There's no way to recover a
forgotten password — that's inherent to real encryption working correctly, not a
limitation of this tool specifically.

Unlock PDF removes protection from a file you already have the password for. Every tool
in this toolkit will prompt you for a PDF's password the moment you upload it if it's
protected, so by the time you reach Unlock's own screen, you'll have already entered it
once; click Process to save a copy with the password permanently removed.

HOW COMPARE PDF WORKS
-------------------------
Drop two versions of a PDF in — the first two files become "Version A" and "Version B."
Each corresponding page gets compared two ways: a line-by-line text diff (added lines
shown in green, removed lines in red, same idea as comparing two versions of a text
file), and a visual comparison shown side by side — each version renders with its own
real content intact, with a translucent red tint over the specific regions that
actually differ from the other version, so you can see what's unique to each side
rather than a single merged image that hides which content belongs to which file.
Comparison is done in small blocks rather than pixel-by-pixel, so minor rendering noise
between two independently-generated files (slightly different anti-aliasing, one side
having been through a rasterizing tool at some point) doesn't get mistaken for a real
difference — only regions that differ consistently across a meaningful area get
highlighted. Only pages with an actual difference are shown — if two files are
genuinely identical, you'll see that stated plainly rather than a wall of unchanged
pages. If one file has more pages than the other, the extra pages at the end are called
out separately rather than silently ignored. Very text-dense pages (400+ distinct lines)
skip the detailed line diff and just report whether that page as a whole matches, since
a line-by-line diff isn't the right tool for that much text anyway.

HOW EDIT PDF WORKS
----------------------
Pick a tool (Text, Draw, Highlight, Rectangle, Ellipse, Line, Image, or Eraser), then
click or drag directly on the page shown. Text places an editable text box at that spot
(click existing text to reopen and edit it); Draw is a freehand pen; Highlight drags out
a translucent colored rectangle; Rectangle/Ellipse/Line draw shape outlines; Image lets
you place a PNG/JPEG with a drag handle to resize it; Eraser removes something you've
added by clicking on it (it only ever removes your own additions — it can't touch or
reveal anything from the original page, unlike Redact). Everything you add becomes
genuine PDF content — real text, fonts, vector lines and shapes, embedded images — laid
on top of the existing page, not a flattened image, so the page's own original text
stays completely intact and still selectable underneath your edits. Undo removes your
most recent addition on the current page; Clear page removes everything on it. Switch
pages with the Prev/Next buttons — each page keeps its own separate set of additions.

HOW HTML TO PDF WORKS
--------------------------
This is deliberately not "any webpage URL to PDF" — fetching an arbitrary live URL
needs internet access and runs straight into CORS (browsers block a page from reading
another site's content unless that site explicitly allows it), which conflicts with
this being an offline, no-server tool to begin with. What it does instead: upload a
local HTML file you already have — most commonly one saved from a browser (e.g. "Save
Page As" → "Webpage, HTML only") — and it's rendered here, then handed to the same
print-to-PDF flow as Word/Excel to PDF. It works best for a single, self-contained file
with styles and images inlined; if the original page kept its images or CSS in a
separate folder, only the one uploaded .html file is available, so those won't appear.
Scripts in the uploaded file aren't run — only its static markup and styles are used,
both because only the rendered content is actually needed here and because running an
uploaded file's arbitrary script inside this app isn't something to risk. The uploaded
page's own styles are kept fully isolated (via the browser's native Shadow DOM) so they
render correctly without leaking out and affecting the rest of this app.

HOW CREATE INVOICE AND BULK CREATE INVOICES WORK
-----------------------------------------------------
Create Invoice is a form: an optional logo, business info, client info, a line-items
table you can add rows to, a tax rate, and notes. A live preview on the right updates
as you type, and "Download Invoice PDF" generates the real file — built directly (not
through the browser print dialog), so it's one click straight to a finished PDF. The
invoice itself uses a full-width colored header band (your logo sits in it if you've
uploaded one), a highlighted "Bill To" section, alternating row shading in the line
items for readability, and a highlighted total line.

Bulk Create Invoices takes the same idea and runs it over a whole spreadsheet: one row
per line item, with multiple rows sharing the same InvoiceNumber becoming one invoice
with multiple lines. Business, client, and date fields only need to be filled on each
invoice's first row — blank cells after that are fine, since the tool carries the first
non-blank value forward for the rest of that invoice's rows. A single logo can be
uploaded alongside the spreadsheet and gets applied to every invoice generated from it,
since a batch like this is almost always all for the same business. "Download sample
template" generates a ready-to-edit .xlsx with two example invoices showing this exact
layout. Upload your own version of that layout and it's summarized (invoice count,
client, line count, total) before you commit to generating anything, and "Generate all
invoice PDFs" produces one real PDF per invoice number, zipped together.

This is only needed for OCR — every other tool in this toolkit works exactly the same
by just double-clicking index.html directly, no server required.

NOT INCLUDED (and why)
------------------------
- Removing a password you don't know: Lock/Unlock PDF above only works if you already
  have the password — there's no "recover a forgotten password" or "crack someone
  else's protected file" feature here, and there won't be. That's a deliberate choice,
  not a technical limitation.
- PDF ↔ PowerPoint conversion: this needs a proprietary layout engine iLovePDF
  runs in the cloud. A faithful, layout-preserving version of that isn't
  realistic to replicate as a small offline tool, so rather than ship
  something unreliable, it's left out.

If you need either of those, an online converter (with a properly examined
privacy policy for sensitive documents) is the more realistic option.

FILES
-----
index.html   the app itself — open this
style.css    styling
app.js       all the tool logic
icons.js     small SVG icon set used by the tool cards
vendor/      libraries the app depends on, all open-source:
             pdf-lib.min.js          (PDF creation/editing/encryption — MIT license, @cantoo/pdf-lib fork of pdf-lib)
             pdf.min.js + pdf.worker.min.js  (PDF rendering — Apache 2.0, Mozilla)
             jszip.min.js            (zipping split/exported files — MIT license)
             docx-preview.min.js     (rendering .docx with real fidelity, for Word to PDF and the PDF to Word preview — Apache 2.0)
             docx.iife.js            (building .docx files, for PDF to Word — MIT license)
             xlsx.full.min.js        (reading/writing spreadsheets, for both Excel tools — Apache 2.0, SheetJS)
             tesseract.min.js, tesseract-worker.min.js, tesseract-core-simd-lstm.wasm(.js)
                                     (OCR engine, for scanned pages in PDF to Word/Excel — Apache 2.0, naptha/tesseract.js)
             tessdata/eng.traineddata.gz  (English OCR training data — Apache 2.0, tesseract-ocr)
