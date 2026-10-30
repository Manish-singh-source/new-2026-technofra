# SEO fixes – Technofra (Oct 30, 2026)

1. Meta keywords: removed from header.php (single template used by every page) and
   all `$metaKeywords = ...` lines deleted from pages. Removed from sitemap.html / sitemap2.html.
2. Heading order: one H1 per page, no skipped levels (H1 > H2 > H3 ...).
   Where a heading's level changed, the old level was kept as a class (e.g. `h4`) so the
   look stays the same. Navbar mega-menu titles (were H4 before the H1) are now <p class="h4">.
   Footer headings re-levelled to H2 > H3 > H4. Form-notice titles above the H1 are now <p>.
3. Meta description: every page now sets `$metaDescription` before including header.php;
   header.php prints it (with a generic fallback so no page is ever empty).
4. Canonical: header.php prints <link rel="canonical"> on every page (https://technofra.com + clean URL).
   Slugs for renamed pages (e.g. about-us.php -> /about) are in $canonicalMap in header.php.
   404 page outputs no canonical.
Also fixed: policy/press/brandbook/404 pages had <title>/<meta> after header.php (inside <body>);
they now set $pageTitle / $metaDescription before the include.
