// Simple inline SVG icon set (all original, line-style, single stroke).
const ICONS = {
  ICON_MERGE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="10" height="13" rx="1.2"/><rect x="9" y="8" width="12" height="13" rx="1.2" fill="var(--card-bg)"/></svg>`,
  ICON_SPLIT: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="8" height="18" rx="1.2"/><rect x="13" y="3" width="8" height="18" rx="1.2"/><path d="M12 3v18" stroke-dasharray="2 2"/></svg>`,
  ICON_REMOVE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="3" width="16" height="18" rx="1.2"/><path d="M9 11l6 6M15 11l-6 6"/></svg>`,
  ICON_EXTRACT: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="3" width="16" height="18" rx="1.2"/><path d="M9 12h6M12 9v6" stroke="none" fill="currentColor" opacity="0"/><rect x="8" y="9" width="8" height="6" rx="0.8" fill="currentColor" opacity=".15"/></svg>`,
  ICON_ORGANIZE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>`,
  ICON_COMPRESS: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 9V4h5M20 9V4h-5M4 15v5h5M20 15v5h-5"/></svg>`,
  ICON_ROTATE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 12a8 8 0 1 1 3 6.2"/><path d="M4 17v-4h4"/></svg>`,
  ICON_PAGENUM: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="3" width="14" height="18" rx="1.2"/><text x="12" y="18" font-size="6" text-anchor="middle" fill="currentColor" stroke="none">12</text></svg>`,
  ICON_WATERMARK: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="3" width="14" height="18" rx="1.2"/><path d="M8 16l8-8" stroke-dasharray="2 2"/></svg>`,
  ICON_PDF2JPG: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="4" width="16" height="16" rx="1.2"/><circle cx="9" cy="9" r="1.6" fill="currentColor" stroke="none"/><path d="M4 16l5-5 4 4 3-3 4 4"/></svg>`,
  ICON_IMG2PDF: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="11" height="9" rx="1"/><circle cx="6.7" cy="8.3" r="1.1" fill="currentColor" stroke="none"/><path d="M3 12l3-3 4 3" /><path d="M17 5v14M20 8v8" stroke-linecap="round"/></svg>`,
  ICON_WORD2PDF: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="9" height="16" rx="1.2"/><text x="7.5" y="14" font-size="7" text-anchor="middle" fill="currentColor" stroke="none" font-weight="700">W</text><path d="M13 12h8M18 8l3 4-3 4"/></svg>`,
  ICON_PDF2WORD: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="12" y="4" width="9" height="16" rx="1.2"/><text x="16.5" y="14" font-size="6.5" text-anchor="middle" fill="currentColor" stroke="none" font-weight="700">W</text><path d="M11 12H3M6 8L3 12l3 4"/></svg>`,
  ICON_EXCEL2PDF: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="9" height="16" rx="1.2"/><text x="7.5" y="14" font-size="7" text-anchor="middle" fill="currentColor" stroke="none" font-weight="700">X</text><path d="M13 12h8M18 8l3 4-3 4"/></svg>`,
  ICON_PDF2EXCEL: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="12" y="4" width="9" height="16" rx="1.2"/><text x="16.5" y="14" font-size="6.5" text-anchor="middle" fill="currentColor" stroke="none" font-weight="700">X</text><path d="M11 12H3M6 8L3 12l3 4"/></svg>`,
  ICON_UPLOAD: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 16V4M7 9l5-5 5 5"/><path d="M4 16v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3"/></svg>`,
  ICON_REDACT: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="3" width="16" height="18" rx="1.2"/><rect x="7" y="8" width="10" height="3" rx="0.5" fill="currentColor" stroke="none"/><rect x="7" y="14" width="6" height="3" rx="0.5" fill="currentColor" stroke="none"/></svg>`,
  ICON_LOCK: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="11" width="14" height="10" rx="1.5"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/><circle cx="12" cy="16" r="1.4" fill="currentColor" stroke="none"/></svg>`,
  ICON_UNLOCK: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="11" width="14" height="10" rx="1.5"/><path d="M8 11V7a4 4 0 0 1 7.5-2"/><circle cx="12" cy="16" r="1.4" fill="currentColor" stroke="none"/></svg>`,
  ICON_COMPARE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2.5" y="4" width="8" height="16" rx="1"/><rect x="13.5" y="4" width="8" height="16" rx="1"/><path d="M10.5 8h3M10.5 12h3M10.5 16h3" stroke-dasharray="1.5 1.5"/></svg>`,
  ICON_EDIT_PDF: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 20h16"/><path d="M14.5 4.5l3 3L8 17H5v-3z"/></svg>`,
  ICON_HTML2PDF: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/><path d="M14 3v5h5"/><path d="M7.5 14.5h9M7.5 17.5h6"/></svg>`,
  ICON_INVOICE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6 2h9l3 3v17H6z"/><path d="M9 8h6M9 12h6M9 16h3"/><circle cx="17" cy="17" r="4" fill="currentColor" stroke="none"/><path d="M15.7 17l1 1 1.8-1.8" stroke="#fff" stroke-width="1.4"/></svg>`,
  ICON_BULK_INVOICE: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 4h8l3 3v13H5z"/><path d="M8 9h5M8 12h5M8 15h3"/><path d="M13 2h3l2 2v11" stroke-dasharray="2 1.5" opacity="0.6"/></svg>`
};

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-icon]').forEach(el => {
    const key = el.getAttribute('data-icon');
    if (ICONS[key]) el.innerHTML = ICONS[key];
  });
});
