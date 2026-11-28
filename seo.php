<?php
$pageTitle = 'SEO Agency in Mumbai | SEO Services Company | Technofra';
$metaDescription = 'Looking for the best SEO agency in Mumbai? Technofra provides result-driven SEO services to improve rankings, organic traffic, leads and online visibility.';
$metaKeywords = 'SEO company in Mumbai, SEO services Mumbai, Local SEO services, SEO company in Mumbai for small business, Affordable SEO services in Mumbai, SEO company in Kandivali, Local SEO services in Kandivali, Best SEO company in Mumbai, SEO services, SEO agency in mumbai, Local SEO services, best seo agency, SEO strategy, SEO professionals, Ecommerce SEO';
include __DIR__ . '/header.php';


?>

<style>
    /* ============================================================
   PPC LANDING PAGE — COMBINED STYLESHEET
   Covers: Hero, PPC Overview, PPC Benefits, Core Services, FAQ

   Requires: Bootstrap 5 CSS (+ JS bundle for the FAQ accordion),
   Font Awesome 6, and the "Inter" Google Font — same as in each
   individual section file.

   NOTE ON VARIABLES: a few sections used the same variable names
   (--ppc-bg, --ppc-border) with different color values. To combine
   safely without one section overwriting another, section-specific
   background/border colors are now scoped as local variables on
   each section's wrapper class instead of the global :root. Shared
   brand tokens (typography, blue, navy, muted text) stay global.
   ============================================================ */

    /* ============================================
   1. GLOBAL — RESPONSIVE TYPOGRAPHY SCALE
   Uses clamp(min, preferred, max) so text scales
   fluidly between mobile (~320px) and desktop (~1440px)
   with no media queries needed.

   clamp(MIN, PREFERRED, MAX)
   - MIN: smallest size (mobile floor)
   - PREFERRED: fluid value tied to viewport width (vw)
   - MAX: largest size (desktop ceiling)
   ============================================ */

    :root {
        /* Headings */
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        /* Body text */
        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        /* Line heights */
        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;

        /* Letter spacing */
        --ls-heading: -0.02em;

        /* Shared brand colors (used across every section) */
        --ppc-navy: #0d1b3e;
        --ppc-blue: #2f5cf6;
        --ppc-blue-light: #eaf0fe;
        --ppc-text-muted: #5b6270;
        --ppc-card-bg: #ffffff;

        /* Purple accent (PPC Overview section only) */
        --ppc-purple: #2f5cf6;
        --ppc-purple-light: #eaf0fe;
    }

    h1,
    .h1 {
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        font-weight: 700;
    }

    h2,
    .h2 {
        font-size: var(--h2);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        font-weight: 700;
    }

    h3,
    .h3 {
        font-size: var(--h3);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h4,
    .h4 {
        font-size: var(--h4);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h5,
    .h5 {
        font-size: var(--h5);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h6,
    .h6 {
        font-size: var(--h6);
        line-height: var(--lh-tight);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    p,
    .p {
        font-size: var(--p);
        line-height: var(--lh-body);
    }

    .p-large {
        font-size: var(--p-large);
        line-height: var(--lh-body);
    }

    .p-small {
        font-size: var(--p-small);
        line-height: var(--lh-body);
    }

    .caption,
    small {
        font-size: var(--caption);
        line-height: var(--lh-body);
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--ppc-navy);
    }


    /* ============================================================
   2. HERO SECTION
   ("Run Smarter Ads. Get Quality Clicks. Drive Better Results.")
   ============================================================ */

    .hero-section {
        position: relative;
        /* scoped tokens — this section's own bg/border, doesn't affect others */
        --hero-bg: #eef1fb;
        --hero-border: #dfe4f5;
        background-color: var(--hero-bg);
        padding-top: 10.5rem;
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
        overflow: hidden;
    }

    .hero-container {
        max-width: 1320px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
        position: relative;
        z-index: 2;
    }

    .hero-dots {
        position: absolute;
        width: 120px;
        height: 100px;
        background-image: radial-gradient(var(--ppc-blue) 1.5px, transparent 1.5px);
        background-size: 14px 14px;
        opacity: 0.2;
        z-index: 0;
    }

    .hero-dots.top-right {
        top: 2rem;
        right: 2rem;
    }

    .hero-dots.bottom-right {
        bottom: 2rem;
        right: 4rem;
    }

    /* ---- Left column ---- */

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: #ffffff;
        color: var(--ppc-blue);
        font-size: var(--p-small);
        font-weight: 600;
        padding: 0.5rem 1rem;
        border: 1px solid var(--hero-border);
        border-radius: 2rem;
        margin-bottom: 1.25rem;
    }

    .hero-badge i {
        font-size: 0.8rem;
    }

    .hero-heading {
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.25rem;
        max-width: none;
        word-wrap: break-word;
    }

    /* each part of the heading on its own line (3 lines) */
    .hero-heading>span {
        display: block;
    }

    .hero-heading .text-accent {
        color: var(--ppc-blue);
    }

    .hero-heading .text-underline {
        text-decoration: underline;
        text-decoration-color: var(--ppc-blue);
        text-decoration-thickness: 3px;
        text-underline-offset: 6px;
    }

    .hero-desc {
        font-size: var(--p);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        max-width: 100%;
        margin-bottom: 1.75rem;
    }

    .hero-cta-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 1.75rem;
    }

    .hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        border-radius: 0.6rem;
        padding: 0.85rem 1.5rem;
        font-size: var(--p-small);
        font-weight: 600;
        text-decoration: none;
        white-space: nowrap;
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }

    .hero-btn i {
        transition: transform 0.2s ease;
        font-size: 0.85rem;
    }

    .hero-btn-primary {
        background-color: var(--ppc-blue);
        color: #ffffff;
        border: 1.5px solid var(--ppc-blue);
    }

    .hero-btn-primary:hover {
        background-color: #1c46e0;
        color: #ffffff;
    }

    .hero-btn-secondary {
        background-color: transparent;
        color: var(--ppc-blue);
        border: 1.5px solid var(--ppc-blue);
    }

    .hero-btn-secondary:hover {
        background-color: var(--ppc-blue-light);
        color: var(--ppc-blue);
    }

    .hero-btn:hover i {
        transform: translateX(3px);
    }

    .hero-checklist {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.25rem 1.75rem;
    }

    .hero-check-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: var(--p-small);
        font-weight: 500;
        color: var(--ppc-navy);
        white-space: nowrap;
    }

    .hero-check-item i {
        color: var(--ppc-blue);
        font-size: 0.9rem;
    }

    /* ---- Right column: dashboard graphic ---- */

    .hero-graphic-wrap {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .hero-graphic-wrap::before {
        content: "";
        position: absolute;
        width: 78%;
        height: 78%;
        background: radial-gradient(circle, rgba(47, 92, 246, 0.14) 0%, rgba(47, 92, 246, 0) 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .hero-graphic {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 620px;
        height: auto;
        display: block;
    }

    /* ---- Hero media queries ---- */

    @media (max-width: 1919.98px) {
        .hero-container {
            max-width: 1320px;
        }
    }

    @media (max-width: 1599.98px) {
        .hero-container {
            max-width: 1240px;
        }
    }

    @media (max-width: 1399.98px) {
        .hero-graphic {
            max-width: 540px;
        }
    }

    @media (max-width: 1199.98px) {
        .hero-section {
            padding-top: 5rem;
            padding-bottom: 3.5rem;
        }

        .hero-graphic {
            max-width: 460px;
        }
    }

    @media (max-width: 991.98px) {

        .hero-heading,
        .hero-desc {
            max-width: 100%;
        }

        .hero-graphic-wrap {
            margin-top: 3rem;
        }

        .hero-graphic {
            max-width: 480px;
        }

        .hero-dots {
            display: none;
        }
    }

    @media (max-width: 767.98px) {
        .hero-cta-row {
            flex-direction: column;
            align-items: stretch;
        }

        .hero-btn {
            justify-content: center;
            width: 100%;
        }

        .hero-checklist {
            gap: 0.85rem 1.25rem;
        }

        .hero-graphic {
            max-width: 400px;
        }
    }

    @media (max-width: 575.98px) {
        .hero-check-item {
            font-size: var(--caption);
        }

        .hero-graphic {
            max-width: 320px;
        }
    }

    @media (max-width: 479.98px) {
        .hero-badge {
            font-size: var(--caption);
            padding: 0.4rem 0.85rem;
        }

        .hero-checklist {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.6rem;
        }

        .hero-graphic {
            max-width: 280px;
        }
    }

    @media (max-width: 359.98px) {
        .hero-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .hero-graphic {
            max-width: 240px;
        }
    }


    /* ============================================================
   3. PPC OVERVIEW SECTION
   ("We Build PPC That Drives Real Business Growth")
   ============================================================ */

    .overview-section {
        --overview-bg: #ffffff;
        --overview-border: #e7e5f3;
        background-color: var(--overview-bg);
        padding-top: clamp(3rem, 2rem + 4vw, 5.5rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
    }

    .overview-container {
        max-width: 1320px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
    }

    /* ---- Left: photo panel ---- */

    .overview-photo-wrap {
        position: relative;
        border-radius: 1.25rem;
        overflow: hidden;
        background: transparent;
        height: 100%;
        min-height: 380px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .overview-photo {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: top center;
        /* offset the transparent strip at the top of seo_image.png so the artwork lines up with the heading */
        transform: translateY(-8.7%);
        display: block;
    }

    /* ---- Right column ---- */

    .overview-right-col {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .overview-top-row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 0.5rem;
    }

    .overview-eyebrow {
        font-size: var(--p-small);
        font-weight: 700;
        color: var(--ppc-purple);
        letter-spacing: 0.06em;
    }

    .overview-location-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: var(--ppc-purple-light);
        color: var(--ppc-purple);
        font-size: var(--p-small);
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        white-space: nowrap;
    }

    .overview-heading {
        font-size: var(--h1);
        font-weight: 800;
        line-height: 1.2;
        margin: 0.5rem 0 1.25rem;
        max-width: 20ch;
        word-wrap: break-word;
    }

    .overview-heading .text-accent {
        color: var(--ppc-purple);
    }

    .overview-desc {
        font-size: var(--p);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        margin-bottom: 1.25rem;
        max-width: 60ch;
    }

    .overview-focus-label {
        font-size: var(--p-small);
        font-weight: 700;
        color: var(--ppc-purple);
        letter-spacing: 0.04em;
        margin-bottom: 0.35rem;
        margin-top: 0.5rem;
    }

    .overview-focus-sub {
        font-size: var(--p-small);
        color: var(--ppc-text-muted);
        margin-bottom: 1.25rem;
    }

    /* ---- Focus area chips ---- */

    .focus-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.85rem;
        margin-bottom: 1.75rem;
    }

    .focus-chip {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        border: 1px solid var(--overview-border);
        border-radius: 0.7rem;
        padding: 0.85rem 0.9rem;
        background-color: #ffffff;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .focus-chip:hover {
        border-color: var(--ppc-purple);
        box-shadow: 0 4px 14px rgba(47, 92, 246, 0.1);
    }

    .focus-chip i {
        flex-shrink: 0;
        color: var(--ppc-purple);
        font-size: 1.05rem;
        width: 1.3rem;
        text-align: center;
    }

    .focus-chip span {
        font-size: var(--p-small);
        font-weight: 600;
        color: var(--ppc-navy);
        min-width: 0;
        word-wrap: break-word;
        line-height: var(--lh-tight);
    }

    /* Last row has 3 items in the reference (7 total in a 4-col grid) */
    .focus-grid .focus-chip:nth-child(5) {
        grid-column: 1;
    }

    .focus-grid .focus-chip:nth-child(6) {
        grid-column: 2;
    }

    .focus-grid .focus-chip:nth-child(7) {
        grid-column: 3;
    }

    /* ---- CTA button ---- */

    .overview-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;
        background-color: var(--ppc-purple);
        color: #ffffff;
        border: none;
        border-radius: 0.6rem;
        padding: 0.85rem 1.6rem;
        font-size: var(--p-small);
        font-weight: 600;
        text-decoration: none;
        align-self: flex-start;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .overview-btn i {
        transition: transform 0.2s ease;
    }

    .overview-btn:hover {
        background-color: #1c46e0;
        color: #ffffff;
    }

    .overview-btn:hover i {
        transform: translateX(3px);
    }

    /* ---- Overview media queries ---- */

    @media (max-width: 1919.98px) {
        .overview-container {
            max-width: 1200px;
        }
    }

    @media (max-width: 1599.98px) {
        .overview-container {
            max-width: 1100px;
        }
    }

    @media (max-width: 1399.98px) {
        .overview-heading {
            max-width: 18ch;
        }

        .focus-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .focus-grid .focus-chip:nth-child(5) {
            grid-column: auto;
        }

        .focus-grid .focus-chip:nth-child(6) {
            grid-column: auto;
        }

        .focus-grid .focus-chip:nth-child(7) {
            grid-column: auto;
        }
    }

    @media (max-width: 1199.98px) {
        .overview-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .overview-photo-wrap {
            min-height: 320px;
        }
    }

    @media (max-width: 991.98px) {
        .overview-photo-wrap {
            min-height: 420px;
            margin-bottom: 2.5rem;
        }

        .overview-heading,
        .overview-desc {
            max-width: 100%;
        }

        .focus-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767.98px) {
        .overview-top-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .overview-photo-wrap {
            min-height: 360px;
        }

        .focus-chip {
            padding: 0.75rem;
        }
    }

    @media (max-width: 575.98px) {
        .focus-grid {
            grid-template-columns: 1fr;
            gap: 0.65rem;
        }

        .overview-photo-wrap {
            min-height: 320px;
        }

        .overview-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 479.98px) {
        .overview-location-badge {
            font-size: var(--caption);
            padding: 0.4rem 0.8rem;
        }

        .overview-photo-wrap {
            min-height: 280px;
            border-radius: 1rem;
        }
    }

    @media (max-width: 359.98px) {
        .overview-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .focus-chip {
            gap: 0.5rem;
            padding: 0.65rem;
        }

        .focus-chip i {
            font-size: 0.9rem;
        }
    }


    /* ============================================================
   4. PPC BENEFITS SECTION
   ("Why businesses invest in PPC advertising")
   ============================================================ */

    .ppc-section {
        --benefits-bg: #f7f8fb;
        --benefits-border: #e4e6ee;
        background-color: var(--benefits-bg);
        padding-top: clamp(3rem, 2rem + 4vw, 5.5rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
        overflow: hidden;
    }

    .ppc-container {
        max-width: 1320px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
    }

    /* ---- Left column ---- */

    .ppc-eyebrow {
        display: inline-block;
        font-size: var(--p-small);
        font-weight: 600;
        color: var(--ppc-blue);
        margin-bottom: 1rem;
        letter-spacing: 0.01em;
    }

    .ppc-heading {
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        font-weight: 800;
        color: var(--ppc-navy);
        line-height: 1.15;
        margin-bottom: 1.25rem;
        max-width: 22ch;
        word-wrap: break-word;
    }

    .ppc-desc {
        font-size: var(--p);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        max-width: 50ch;
        margin-bottom: 1.75rem;
    }

    .ppc-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background-color: #ffffff;
        color: var(--ppc-blue);
        border: 1.5px solid var(--ppc-blue);
        border-radius: 0.5rem;
        padding: 0.7rem 1.4rem;
        font-size: var(--p-small);
        font-weight: 600;
        text-decoration: none;
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
        white-space: nowrap;
    }

    .ppc-btn i {
        transition: transform 0.2s ease;
    }

    .ppc-btn:hover {
        background-color: var(--ppc-blue);
        color: #ffffff;
    }

    .ppc-btn:hover i {
        transform: translateX(3px);
    }

    .ppc-stat-wrap {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-top: clamp(2rem, 1.5rem + 2vw, 3.5rem);
        flex-wrap: wrap;
    }

    .ppc-stat-number {
        font-size: clamp(2.75rem, 2rem + 3vw, 4rem);
        font-weight: 800;
        color: var(--ppc-blue);
        line-height: 1;
        white-space: nowrap;
    }

    .ppc-stat-desc {
        font-size: var(--p-small);
        color: var(--ppc-text-muted);
        line-height: var(--lh-tight);
        max-width: 26ch;
        padding-top: 0.35rem;
    }

    /* ---- Right column: feature list ---- */

    .ppc-feature-list {
        display: flex;
        flex-direction: column;
    }

    .ppc-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        padding: 1.5rem 0;
        border-bottom: 1px solid var(--benefits-border);
    }

    .ppc-feature-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .ppc-feature-item:first-child {
        padding-top: 0;
    }

    .ppc-icon-circle {
        flex-shrink: 0;
        width: clamp(48px, 3.2vw + 30px, 56px);
        height: clamp(48px, 3.2vw + 30px, 56px);
        border-radius: 50%;
        background-color: var(--ppc-blue-light);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ppc-icon-circle i {
        font-size: clamp(1.1rem, 1vw + 0.8rem, 1.35rem);
        color: var(--ppc-blue);
    }

    .ppc-feature-content {
        min-width: 0;
        /* prevents text overflow in flex children */
        flex: 1 1 auto;
    }

    .ppc-feature-title {
        font-size: var(--p-large);
        font-weight: 700;
        color: var(--ppc-navy);
        margin-bottom: 0.4rem;
    }

    .ppc-feature-text {
        font-size: var(--p-small);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        margin-bottom: 0;
        word-wrap: break-word;
    }

    /* ---- Benefits media queries ---- */

    @media (max-width: 1919.98px) {
        .ppc-container {
            max-width: 1320px;
        }
    }

    @media (max-width: 1599.98px) {
        .ppc-container {
            max-width: 1240px;
        }
    }

    @media (max-width: 1399.98px) {
        .ppc-heading {
            max-width: 20ch;
        }
    }

    @media (max-width: 1199.98px) {
        .ppc-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .ppc-feature-item {
            gap: 1rem;
        }
    }

    @media (max-width: 991.98px) {

        .ppc-heading,
        .ppc-desc {
            max-width: 100%;
        }

        .ppc-left-col {
            margin-bottom: 2.5rem;
        }

        .ppc-stat-wrap {
            margin-top: 2rem;
        }
    }

    @media (max-width: 767.98px) {
        .ppc-feature-item {
            padding: 1.25rem 0;
            gap: 0.9rem;
        }

        .ppc-icon-circle {
            width: 44px;
            height: 44px;
        }

        .ppc-btn {
            width: 100%;
            justify-content: center;
        }

        .ppc-stat-wrap {
            gap: 0.75rem;
        }
    }

    @media (max-width: 575.98px) {
        .ppc-eyebrow {
            margin-bottom: 0.75rem;
        }

        .ppc-heading {
            margin-bottom: 1rem;
        }

        .ppc-desc {
            margin-bottom: 1.5rem;
        }

        .ppc-feature-title {
            margin-bottom: 0.25rem;
        }
    }

    @media (max-width: 479.98px) {
        .ppc-feature-item {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .ppc-stat-wrap {
            flex-direction: column;
            gap: 0.5rem;
        }

        .ppc-stat-desc {
            max-width: 100%;
            padding-top: 0;
        }
    }

    @media (max-width: 359.98px) {
        .ppc-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .ppc-btn {
            padding: 0.6rem 1rem;
        }
    }


    /* ============================================================
   5. CORE PPC SERVICES SECTION
   ("Core PPC Services We Offer" — 6-card grid)
   ============================================================ */

    .services-section {
        position: relative;
        --services-bg: #f7f8fb;
        --services-border: #eceef5;
        background-color: var(--services-bg);
        padding-top: clamp(3rem, 2rem + 4vw, 5.5rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
        overflow: hidden;
        isolation: isolate;
    }

    .services-container {
        max-width: 1440px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
        position: relative;
        z-index: 2;
    }

    /* ---- Decorative background elements ---- */

    .services-section::before,
    .services-section::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(47, 92, 246, 0.10) 0%, rgba(47, 92, 246, 0) 70%);
        z-index: 0;
    }

    .services-section::before {
        width: 340px;
        height: 340px;
        top: -120px;
        left: -140px;
    }

    .services-section::after {
        width: 380px;
        height: 380px;
        bottom: -160px;
        right: -140px;
    }

    .services-dots {
        position: absolute;
        width: 110px;
        height: 90px;
        background-image: radial-gradient(var(--ppc-blue) 1.5px, transparent 1.5px);
        background-size: 14px 14px;
        opacity: 0.25;
        z-index: 0;
    }

    .services-dots.top-right {
        top: 1.5rem;
        right: 1.5rem;
    }

    .services-dots.bottom-left {
        bottom: 1.5rem;
        left: 1.5rem;
    }

    /* ---- Header ---- */

    .services-header {
        text-align: center;
        max-width: 700px;
        margin: 0 auto clamp(2rem, 1.5rem + 2vw, 3.5rem);
    }

    .services-eyebrow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.85rem;
        font-size: var(--p-small);
        font-weight: 700;
        color: var(--ppc-blue);
        letter-spacing: 0.08em;
        margin-bottom: 1rem;
    }

    .services-eyebrow .line {
        height: 1px;
        width: 32px;
        background-color: var(--ppc-blue);
        opacity: 0.5;
        flex-shrink: 0;
    }

    .services-heading {
        font-size: var(--h1);
        font-weight: 800;
        line-height: 1.2;
        color: var(--ppc-navy);
        margin-bottom: 0;
    }

    .services-heading .text-accent {
        color: var(--ppc-blue);
    }

    /* ---- Cards grid ---- */

    .service-card {
        background-color: var(--ppc-card-bg);
        border: 1px solid var(--services-border);
        border-radius: 1rem;
        padding: clamp(1.75rem, 1.4rem + 1.2vw, 2.25rem) clamp(1.25rem, 1rem + 1vw, 1.75rem);
        height: 100%;
        text-align: center;
        box-shadow: 0 4px 18px rgba(13, 27, 62, 0.05);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(13, 27, 62, 0.09);
    }

    .service-icon-circle {
        width: clamp(64px, 4vw + 44px, 80px);
        height: clamp(64px, 4vw + 44px, 80px);
        border-radius: 50%;
        background-color: var(--ppc-blue-light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        flex-shrink: 0;
    }

    .service-icon-circle i {
        font-size: clamp(1.5rem, 1vw + 1.2rem, 1.9rem);
        color: var(--ppc-blue);
    }

    /* Meta icon cluster: infinity glyph + brand icons stacked */
    .service-icon-circle.meta-icons {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.15rem;
    }

    .meta-icons .meta-infinity {
        font-size: clamp(1.3rem, 1vw + 1rem, 1.6rem);
        color: var(--ppc-blue);
        line-height: 1;
    }

    .meta-icons .meta-brand-row {
        display: flex;
        align-items: center;
        gap: 0.35rem;
        line-height: 1;
    }

    .meta-icons .fa-facebook {
        color: #1877f2;
        font-size: clamp(0.95rem, 0.8vw + 0.7rem, 1.15rem);
    }

    .meta-icons .fa-instagram {
        font-size: clamp(0.95rem, 0.8vw + 0.7rem, 1.15rem);
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .service-title {
        font-size: var(--p-large);
        font-weight: 700;
        color: var(--ppc-navy);
        margin-bottom: 0.75rem;
        word-wrap: break-word;
    }

    .service-text {
        font-size: var(--p-small);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        margin-bottom: 1.25rem;
        word-wrap: break-word;
    }

    .service-underline {
        width: 32px;
        height: 2px;
        background-color: var(--ppc-blue);
        margin: 0 auto;
        border-radius: 2px;
    }

    /* ---- Services media queries ---- */

    @media (max-width: 1919.98px) {
        .services-container {
            max-width: 1440px;
        }
    }

    @media (max-width: 1599.98px) {
        .services-container {
            max-width: 1360px;
        }
    }

    @media (max-width: 1399.98px) {
        .services-header {
            max-width: 620px;
        }
    }

    @media (max-width: 1199.98px) {
        .services-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .service-card {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (max-width: 991.98px) {
        .services-header {
            max-width: 90%;
        }

        .services-dots {
            width: 80px;
            height: 70px;
        }
    }

    @media (max-width: 767.98px) {
        .services-eyebrow .line {
            width: 20px;
        }

        .services-section::before,
        .services-section::after {
            width: 220px;
            height: 220px;
        }
    }

    @media (max-width: 575.98px) {
        .services-header {
            margin-bottom: 2rem;
        }

        .service-card {
            padding: 1.75rem 1.25rem;
        }

        .services-dots {
            display: none;
        }
    }

    @media (max-width: 479.98px) {
        .services-eyebrow {
            gap: 0.5rem;
        }

        .services-eyebrow .line {
            width: 14px;
        }

        .service-icon-circle {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 359.98px) {
        .services-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .service-card {
            padding: 1.5rem 1rem;
        }

        .services-heading {
            font-size: clamp(1.75rem, 1.4rem + 3vw, 3.5rem);
        }
    }


    /* ============================================================
   6. FAQ SECTION
   ("Frequently Asked Questions" — accordion, needs Bootstrap JS)
   ============================================================ */

    .faq-section {
        --faq-bg: #eef1f8;
        --faq-item-bg: #f4f6fb;
        background-color: var(--faq-bg);
        padding-top: clamp(3rem, 2rem + 4vw, 5.5rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
    }

    .faq-container {
        max-width: 1320px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
    }

    /* ---- Left column ---- */

    .faq-left-col {
        display: flex;
        flex-direction: column;
    }

    .faq-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        align-self: flex-start;
        background-color: var(--ppc-card-bg);
        color: var(--ppc-blue);
        font-size: var(--p-small);
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        box-shadow: 0 2px 8px rgba(13, 27, 62, 0.06);
        margin-bottom: 1.25rem;
    }

    .faq-badge i {
        font-size: var(--p-small);
    }

    .faq-heading {
        font-size: var(--h1);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 1rem;
        max-width: 16ch;
        word-wrap: break-word;
    }

    .faq-heading .text-accent {
        color: var(--ppc-blue);
    }

    .faq-desc {
        font-size: var(--p);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
        max-width: 40ch;
        margin-bottom: clamp(1.5rem, 1rem + 2vw, 2.5rem);
    }

    .faq-illustration-wrap {
        position: relative;
        display: flex;
        align-items: flex-end;
        margin-top: auto;
    }

    .faq-illustration-wrap::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 5%;
        width: 90%;
        height: 40%;
        background: var(--ppc-blue);
        opacity: 0.08;
        border-radius: 50%;
        filter: blur(20px);
        z-index: 0;
    }

    .faq-illustration {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 380px;
        height: auto;
        display: block;
    }

    .faq-underline {
        width: 48px;
        height: 3px;
        background-color: var(--ppc-blue);
        border-radius: 3px;
        margin-bottom: 1.5rem;
    }

    /* ---- Right column: accordion ---- */

    .faq-accordion .accordion-item {
        background-color: var(--faq-item-bg);
        border: none;
        border-radius: 0.85rem !important;
        margin-bottom: 0.85rem;
        overflow: hidden;
    }

    .faq-accordion .accordion-item:last-child {
        margin-bottom: 0;
    }

    .faq-accordion .accordion-item.active-item {
        background-color: var(--ppc-card-bg);
        box-shadow: 0 6px 20px rgba(13, 27, 62, 0.08);
    }

    .faq-accordion .accordion-button {
        display: flex;
        align-items: center;
        gap: 1rem;
        background-color: transparent;
        color: var(--ppc-navy);
        font-size: var(--p);
        font-weight: 600;
        padding: 1.1rem 1.25rem;
        box-shadow: none !important;
    }

    .faq-accordion .accordion-button:not(.collapsed) {
        background-color: transparent;
        color: var(--ppc-navy);
    }

    .faq-accordion .accordion-button::after {
        display: none;
        /* remove default bootstrap chevron, using custom +/- */
    }

    .faq-num {
        flex-shrink: 0;
        width: clamp(28px, 1.6vw + 22px, 32px);
        height: clamp(28px, 1.6vw + 22px, 32px);
        border-radius: 50%;
        background-color: var(--ppc-blue);
        color: #ffffff;
        font-size: var(--caption);
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .faq-q-text {
        flex: 1 1 auto;
        min-width: 0;
        word-wrap: break-word;
        text-align: left;
    }

    .faq-toggle-icon {
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 1.5px solid var(--ppc-blue);
        color: var(--ppc-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .accordion-button:not(.collapsed) .faq-toggle-icon {
        background-color: var(--ppc-blue);
        color: #ffffff;
    }

    .faq-toggle-icon .icon-minus {
        display: none;
    }

    .accordion-button:not(.collapsed) .icon-plus {
        display: none;
    }

    .accordion-button:not(.collapsed) .icon-minus {
        display: inline-block;
    }

    .faq-accordion .accordion-body {
        padding: 0 1.25rem 1.25rem calc(1.25rem + clamp(28px, 1.6vw + 22px, 32px) + 1rem);
        font-size: var(--p-small);
        color: var(--ppc-text-muted);
        line-height: var(--lh-body);
    }

    /* ---- FAQ media queries ---- */

    @media (max-width: 1919.98px) {
        .faq-container {
            max-width: 1200px;
        }
    }

    @media (max-width: 1599.98px) {
        .faq-container {
            max-width: 1100px;
        }
    }

    @media (max-width: 1399.98px) {
        .faq-heading {
            max-width: 15ch;
        }

        .faq-illustration {
            max-width: 320px;
        }
    }

    @media (max-width: 1199.98px) {
        .faq-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .faq-illustration {
            max-width: 280px;
        }
    }

    @media (max-width: 991.98px) {

        .faq-heading,
        .faq-desc {
            max-width: 100%;
        }

        .faq-left-col {
            margin-bottom: 2.5rem;
        }

        .faq-illustration-wrap {
            justify-content: center;
            margin-top: 1.5rem;
        }

        .faq-illustration {
            max-width: 260px;
        }
    }

    @media (max-width: 767.98px) {
        .faq-accordion .accordion-button {
            padding: 1rem;
            gap: 0.75rem;
        }

        .faq-accordion .accordion-body {
            padding: 0 1rem 1rem calc(1rem + 28px + 0.75rem);
        }

        .faq-illustration {
            max-width: 220px;
        }
    }

    @media (max-width: 575.98px) {
        .faq-badge {
            font-size: var(--caption);
            padding: 0.4rem 0.85rem;
        }

        .faq-accordion .accordion-button {
            gap: 0.6rem;
        }

        .faq-q-text {
            font-size: var(--p-small);
        }
    }

    @media (max-width: 479.98px) {
        .faq-accordion .accordion-body {
            padding: 0 0.85rem 1rem 0.85rem;
            /* drop the number-aligned indent, full width text */
        }

        .faq-num {
            width: 26px;
            height: 26px;
        }

        .faq-toggle-icon {
            width: 24px;
            height: 24px;
        }

        .faq-illustration {
            max-width: 190px;
        }
    }

    @media (max-width: 359.98px) {
        .faq-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .faq-accordion .accordion-button {
            padding: 0.85rem;
        }

        .faq-illustration {
            max-width: 160px;
        }
    }

    /* ============================================
   SEO PROCESS SECTION
   ============================================ */

    :root {
        --seo-bg: #f5f7fb;
        --seo-navy: #0d1b3e;
        --seo-blue: #2f5cf6;
        --seo-indigo: #4338ca;
        --seo-teal: #0d9488;
        --seo-text-muted: #5b6270;
        --seo-ring-track: #e3e8f4;
    }

    body {
        font-family: "Inter", sans-serif;
        color: var(--seo-navy);
    }

    .seo-process-section {
        position: relative;
        background-color: var(--seo-bg);
        padding-top: clamp(3rem, 2rem + 4vw, 5.5rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 5.5rem);
        overflow: hidden;
    }

    .seo-process-container {
        max-width: 1320px;
        margin: 0 auto;
        padding-left: clamp(1rem, 0.5rem + 2vw, 2rem);
        padding-right: clamp(1rem, 0.5rem + 2vw, 2rem);
        width: 100%;
        position: relative;
        z-index: 2;
    }

    /* ---- Decorative dot grids ---- */

    .seo-dots {
        position: absolute;
        width: 110px;
        height: 90px;
        background-image: radial-gradient(var(--seo-blue) 1.5px,
                transparent 1.5px);
        background-size: 14px 14px;
        opacity: 0.2;
        z-index: 0;
    }

    .seo-dots.top-right {
        top: 1.5rem;
        right: 2rem;
    }

    .seo-dots.bottom-left {
        bottom: 1.5rem;
        left: 1.5rem;
    }

    /* ---- Header ---- */

    .seo-process-header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto clamp(2.5rem, 1.8rem + 3vw, 4.5rem);
    }

    .seo-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        font-size: var(--p-small);
        font-weight: 700;
        color: var(--seo-blue);
        letter-spacing: 0.06em;
        margin-bottom: 1rem;
    }

    .seo-eyebrow .line {
        height: 1px;
        width: 28px;
        background-color: var(--seo-blue);
        opacity: 0.6;
        flex-shrink: 0;
    }

    .seo-eyebrow i {
        font-size: 0.7rem;
        color: var(--seo-blue);
    }

    .seo-process-heading {
        font-size: var(--h1);
        font-weight: 800;
        line-height: 1.2;
        color: var(--seo-navy);
        margin-bottom: 1rem;
    }

    .seo-process-heading .text-accent {
        color: var(--seo-blue);
    }

    .seo-process-sub {
        font-size: var(--p);
        color: var(--seo-text-muted);
        line-height: var(--lh-body);
        max-width: 52ch;
        margin: 0 auto;
    }

    /* ---- Steps row ---- */

    .seo-steps-row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        position: relative;
    }

    .seo-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        flex: 1 1 0;
        min-width: 0;
        padding: 0 0.5rem;
    }

    /* connector arrow between steps (desktop) */
    .seo-connector {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        width: clamp(28px, 3vw, 64px);
        padding-top: clamp(44px,
                4vw + 20px,
                60px);
        /* aligns with ring vertical center */
        color: var(--seo-connector-color, var(--seo-blue));
        flex-shrink: 0;
    }

    .seo-connector svg {
        width: 100%;
        height: 14px;
        display: block;
    }

    /* ---- Ring + icon + badge ---- */

    .seo-ring-wrap {
        position: relative;
        width: clamp(96px, 6vw + 60px, 128px);
        height: clamp(96px, 6vw + 60px, 128px);
        margin-bottom: 1.25rem;
        flex-shrink: 0;
    }

    .seo-ring-track {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 2px dashed var(--seo-ring-track);
    }

    .seo-ring-progress {
        position: absolute;
        inset: 6px;
        border-radius: 50%;
        border: 3px solid var(--seo-step-color, var(--seo-blue));
        opacity: 0.35;
    }

    .seo-icon-circle {
        position: absolute;
        inset: 14px;
        border-radius: 50%;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(13, 27, 62, 0.08);
    }

    .seo-icon-circle i {
        font-size: clamp(1.4rem, 1vw + 1.1rem, 1.75rem);
        color: var(--seo-step-color, var(--seo-blue));
    }

    .seo-step-badge {
        position: absolute;
        top: -4px;
        left: -4px;
        width: clamp(28px, 1.6vw + 22px, 34px);
        height: clamp(28px, 1.6vw + 22px, 34px);
        border-radius: 50%;
        background-color: var(--seo-step-color, var(--seo-blue));
        color: #ffffff;
        font-size: var(--caption);
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 3px solid var(--seo-bg);
    }

    /* ---- Step text ---- */

    .seo-step-title {
        font-size: var(--p-large);
        font-weight: 700;
        color: var(--seo-navy);
        margin-bottom: 0.5rem;
        word-wrap: break-word;
    }

    .seo-step-underline {
        width: 28px;
        height: 2px;
        background-color: var(--seo-step-color, var(--seo-blue));
        border-radius: 2px;
        margin-bottom: 0.75rem;
    }

    .seo-step-text {
        font-size: var(--p-small);
        color: var(--seo-text-muted);
        line-height: var(--lh-body);
        max-width: 26ch;
        word-wrap: break-word;
        margin-bottom: 0;
    }

    /* ---- Per-step accent colors (matches the blue -> teal progression in the reference) ---- */

    .seo-step.step-1 {
        --seo-step-color: #2f5cf6;
    }

    .seo-step.step-2 {
        --seo-step-color: #2f5cf6;
    }

    .seo-step.step-3 {
        --seo-step-color: #2f5cf6;
    }

    .seo-step.step-4 {
        --seo-step-color: #0d9488;
    }

    .seo-connector.connector-1 {
        --seo-connector-color: #2f5cf6;
    }

    .seo-connector.connector-2 {
        --seo-connector-color: #2f5cf6;
    }

    .seo-connector.connector-3 {
        --seo-connector-color: #2f5cf6;
    }

    /* 6 steps: show as 2 rows of 3 on desktop so columns aren't too narrow */
    @media (min-width: 992px) {
        .seo-steps-row {
            flex-wrap: wrap;
            row-gap: clamp(2.5rem, 2rem + 1.5vw, 3.5rem);
        }

        .seo-step {
            flex: 1 1 30%;
        }

        /* hide the connector after step 03 (end of the first row) */
        .seo-steps-row> :nth-child(6) {
            display: none;
        }
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */

    /* below extra large */
    @media (max-width: 1919.98px) {
        .seo-process-container {
            max-width: 1200px;
        }
    }

    /* below large desktop */
    @media (max-width: 1599.98px) {
        .seo-process-container {
            max-width: 1100px;
        }
    }

    /* below desktop */
    @media (max-width: 1399.98px) {
        .seo-step-text {
            max-width: 24ch;
        }
    }

    /* below laptop */
    @media (max-width: 1199.98px) {
        .seo-process-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .seo-connector {
            width: clamp(20px, 2.2vw, 44px);
        }
    }

    /* below tablet landscape */
    @media (max-width: 991.98px) {
        .seo-process-header {
            max-width: 90%;
        }

        .seo-steps-row {
            flex-wrap: wrap;
            row-gap: 2.5rem;
        }

        .seo-step {
            flex: 1 1 40%;
            min-width: 200px;
        }

        .seo-connector {
            display: none;
            /* connectors don't translate well to a 2-col wrap layout */
        }

        .seo-dots {
            display: none;
        }
    }

    /* below tablet portrait */
    @media (max-width: 767.98px) {
        .seo-step {
            flex: 1 1 100%;
            min-width: 0;
        }

        .seo-steps-row {
            row-gap: 2.25rem;
        }

        .seo-step-text {
            max-width: 34ch;
        }
    }

    /* below small tablet/landscape phone */
    @media (max-width: 575.98px) {
        .seo-process-header {
            margin-bottom: 2rem;
        }

        .seo-ring-wrap {
            margin-bottom: 1rem;
        }

        .seo-step-text {
            max-width: 30ch;
        }
    }

    /* below large phone */
    @media (max-width: 479.98px) {
        .seo-eyebrow .line {
            width: 18px;
        }

        .seo-step-title {
            font-size: var(--p);
        }

        .seo-step-text {
            max-width: 100%;
        }
    }

    /* below small phone */
    @media (max-width: 359.98px) {
        .seo-process-container {
            padding-left: 0.85rem;
            padding-right: 0.85rem;
        }

        .seo-ring-wrap {
            width: 88px;
            height: 88px;
        }
    }


    /* ============================================
   BEST SEO AGENCY SECTION (feature panel)
   ============================================ */

    .agency-card {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, var(--ppc-navy) 0%, #16285a 100%);
        border: none;
        border-radius: 1.25rem;
        box-shadow: 0 18px 40px rgba(13, 27, 62, 0.18);
        padding: clamp(2rem, 1.5rem + 2.5vw, 3.75rem) clamp(1.5rem, 1rem + 2.5vw, 3.75rem);
    }

    .agency-dots {
        position: absolute;
        width: 110px;
        height: 90px;
        background-image: radial-gradient(#ffffff 1.5px, transparent 1.5px);
        background-size: 14px 14px;
        opacity: 0.15;
        z-index: 0;
    }

    .agency-dots.top-right {
        top: 1.25rem;
        right: 1.25rem;
    }

    .agency-dots.bottom-left {
        bottom: 1.25rem;
        left: 1.25rem;
    }

    .agency-heading {
        font-size: clamp(1.75rem, 1rem + 1.2vw, 2.25rem);
        font-weight: 800;
        line-height: 1.2;
        color: #ffffff;
        margin-bottom: 0;
        word-wrap: break-word;
    }

    /* lighter tint of the brand blue so it stays readable on navy */
    .agency-heading .text-accent {
        color: #6f8ff9;
    }

    .agency-text {
        border-left: 3px solid var(--ppc-blue);
        padding-left: clamp(1.25rem, 1rem + 1vw, 2rem);
    }

    .agency-desc {
        font-size: var(--p);
        color: rgba(255, 255, 255, 0.78);
        line-height: var(--lh-body);
        margin-bottom: 1rem;
    }

    .agency-desc:last-child {
        margin-bottom: 0;
    }

    @media (max-width: 991.98px) {
        .agency-dots {
            display: none;
        }
    }

    @media (max-width: 575.98px) {
        .agency-text {
            padding-left: 1rem;
        }
    }
</style>


<section class="hero-section">
    <span class="hero-dots top-right"></span>
    <span class="hero-dots bottom-right"></span>

    <div class="hero-container">
        <div class="row align-items-center g-5">
            <!-- LEFT COLUMN -->
            <div class="col-12 col-lg-6">

                <h1 class="hero-heading">
                    SEO Agency in Mumbai
                    <span class="text-accent">for Higher Rankings</span>
                    <span>&amp; Business Growth</span>
                </h1>

                <p class="hero-desc">
                    Looking for a reliable SEO agency in Mumbai to improve your website rankings, organic traffic, and online visibility? Technofra is an experienced SEO company in Mumbai offering result-driven SEO strategies designed around your business goals.
                </p>

                <div class="hero-cta-row">
                    <a href="enquirynow.php" class="hero-btn hero-btn-primary">
                        Enquire Now
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="contact.php" class="hero-btn hero-btn-secondary">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-12 col-lg-6">
                <div class="hero-graphic-wrap">
                    <img
                        src="./assets/images/about/hero-dashboard3.png"
                        alt="SEO performance dashboard showing rankings, traffic, conversions, and an upward growth trend across search engines"
                        class="hero-graphic" />
                </div>
            </div>
        </div>
    </div>
</section>


<section class="overview-section">
    <div class="overview-container">
        <div class="row g-5">
            <div class="col-12">
                <div class="overview-right-col">

                    <h2 class="overview-heading text-center mx-auto" style="font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);">
                        Why Choose <span class="text-accent">Technofra</span> as Your SEO Company in Mumbai?
                    </h2>

                    <p class="overview-desc text-center mx-auto" style="max-width: 80ch;">
                        Choosing the right SEO partner can make a significant difference to your website's visibility and lead generation. At Technofra, we combine SEO expertise, content planning, technical improvements, and data-driven optimization to create a complete search growth strategy. As a performance-focused SEO service provider in Mumbai, we work on the areas that have the greatest impact on search visibility and conversions.

                    </p>



                    <div class="focus-grid mb-0">
                        <div class="focus-chip">
                            <i class="fa-solid fa-sliders"></i>
                            <span>Customized SEO strategies based on your business objectives</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Keyword research focused on search intent and business value</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-gears"></i>
                            <span>Technical SEO improvements for better crawling and indexing</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>On-page optimization for important landing pages</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Local SEO strategies for Mumbai-based businesses</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Content optimization and SEO-focused content planning</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-link"></i>
                            <span>Ethical link building and authority development</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Transparent performance reporting and tracking</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="ppc-section">
    <div class="ppc-container">
        <div class="row align-items-start">

            <!-- LEFT COLUMN -->
            <div class="col-12 col-lg-6 ppc-left-col">

                <h1 class="ppc-heading">Best SEO Services in Mumbai Focused on Business Results</h1>
                <p class="ppc-desc">
                    SEO should be more than achieving higher rankings. The right strategy should help your business attract relevant users and turn organic visibility into enquiries and sales.
                </p>
                <p class="ppc-desc">
                    Our SEO services in Mumbai combine technical SEO, on-page optimization, content strategy, local SEO, keyword research, link building, and performance tracking. We focus on attracting relevant visitors who are more likely to become enquiries, customers, and long-term business opportunities.
                </p>
                <p class="ppc-desc">
                    Whether you are a local business, startup, eCommerce brand, professional service provider, or established company, our SEO team creates a customized strategy to help your website compete for valuable search terms and generate sustainable organic growth.
                </p>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-12 col-lg-6">
                <p class="ppc-eyebrow mb-4">
                    Our approach focuses on:
                </p>
                <div class="ppc-feature-list">

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Better Search Visibility</h3>
                            <p class="ppc-feature-text">
                                Improve your website's presence for relevant searches and reach potential customers when they are actively looking for your products or services.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Qualified Organic Traffic</h3>
                            <p class="ppc-feature-text">
                                Target high-intent keywords and optimize landing pages to attract visitors who are more likely to engage with your business.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">More Leads &amp; Enquiries</h3>
                            <p class="ppc-feature-text">
                                Build search-focused pages that answer customer needs and create clear paths toward enquiries, calls, bookings, or purchases.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Sustainable Organic Growth</h3>
                            <p class="ppc-feature-text">
                                SEO is a long-term investment. We continuously improve technical performance, content quality, authority, and keyword coverage to support consistent growth.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="overview-section">
    <div class="overview-container">
        <div class="row align-items-stretch g-5">

            <div class="col-12 col-lg-5">
                <div class="overview-photo-wrap">
                    <img
                        src="./assets/images/about/seo_image.png"
                        alt="Marketing professional holding a tablet, representing our PPC team"
                        class="overview-photo" />
                </div>
            </div>


            <div class="col-12 col-lg-7">
                <div class="overview-right-col">

                    <h2 class="overview-heading" style="font-size: clamp(1.25rem, 2.1vw, 2.125rem); max-width: none;">
                        Why Businesses Choose <span class="text-accent">Technofra</span>
                    </h2>

                    <p class="overview-desc">
                        Technofra combines SEO strategy with practical execution. Instead of focusing only on rankings, we consider how search visibility contributes to qualified traffic, enquiries, conversions, and overall business growth.
                    </p>

                    <h3 class="overview-focus-label mb-3">Our SEO approach is built around:</h3>

                    <div class="focus-grid">
                        <div class="focus-chip">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Business-focused keyword targeting</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-gears"></i>
                            <span>Technical and on-page SEO</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Local search optimization</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Content strategy</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Conversion-focused landing pages</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Transparent performance tracking</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <span>Continuous optimization</span>
                        </div>
                    </div>

                    <a href="contact.php" class="overview-btn">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <!-- decorative dot grids -->
    <span class="services-dots top-right"></span>
    <span class="services-dots bottom-left"></span>

    <div class="services-container">
        <!-- Header -->
        <div class="services-header" style="max-width: none;">

            <h2 class="services-heading" style="font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);">
                Our <span class="text-accent">SEO Services</span> in Mumbai
            </h2>
            <p class="seo-process-sub mt-3">
                We provide comprehensive SEO solutions for businesses looking to increase their search visibility and generate qualified organic traffic.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="row g-4 justify-content-center">
            <!-- Card 1: On-Page SEO -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-file-pen"></i>
                    </div>
                    <h3 class="service-title">On-Page SEO</h3>
                    <p class="service-text">
                        Our on-page SEO service improves the relevance and structure of your website pages. We optimize page titles, meta descriptions, headings, URLs, internal links, content, images, and other important on-page elements. The objective is to make your pages easier for search engines to understand while providing a better experience for your visitors.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 2: Technical SEO -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3 class="service-title">Technical SEO</h3>
                    <p class="service-text">
                        Technical SEO creates a strong foundation for your website's organic performance. Our team identifies and resolves issues related to crawlability, indexing, website structure, page speed, mobile usability, redirects, canonical tags, structured data, and Core Web Vitals.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 3: Local SEO -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="service-title">Local SEO</h3>
                    <p class="service-text">
                        If your business serves customers in Mumbai or specific locations, local SEO can help you reach people searching for your services nearby. Our local SEO strategy can include Google Business Profile optimization, local keyword targeting, location-focused landing pages, citations, review strategy, and other local search improvements.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 4: Keyword Research & Strategy -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3 class="service-title">Keyword Research &amp; Strategy</h3>
                    <p class="service-text">
                        We identify relevant keywords based on search volume, competition, user intent, and business value. Instead of targeting keywords simply because they have high search volume, we build keyword groups around the services, products, locations, and questions that matter to your customers.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 5: Content SEO -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="service-title">Content SEO</h3>
                    <p class="service-text">
                        High-quality content helps search engines understand your expertise and gives potential customers useful information before they make a decision. We create and optimize service pages, landing pages, blogs, FAQs, and supporting content around relevant search intent and keyword opportunities.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 6: Off-Page SEO & Link Building -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-link"></i>
                    </div>
                    <h3 class="service-title">Off-Page SEO &amp; Link Building</h3>
                    <p class="service-text">
                        We work on building your website's authority through ethical link acquisition, relevant citations, brand mentions, outreach, and other sustainable off-page SEO activities.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 7: SEO Audit -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="service-title">SEO Audit</h3>
                    <p class="service-text">
                        Our SEO audit identifies technical problems, content gaps, keyword opportunities, indexing issues, on-page weaknesses, competitor gaps, and other factors affecting your website's organic performance.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 8: SEO Reporting & Performance Tracking -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">SEO Reporting &amp; Performance Tracking</h3>
                    <p class="service-text">
                        We monitor keyword rankings, organic traffic, landing-page performance, conversions, and other important SEO metrics. Regular reporting helps identify what is working and where further optimization is required.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="seo-process-section">
    <span class="seo-dots top-right"></span>
    <span class="seo-dots bottom-left"></span>

    <div class="seo-process-container">
        <!-- Header -->
        <div class="seo-process-header" style="max-width: none;">

            <h2 class="seo-process-heading" style="font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);">
                How Our <span class="text-accent">SEO Process</span> Works
            </h2>

        </div>

        <!-- Steps -->
        <div class="seo-steps-row">
            <!-- Step 1 -->
            <div class="seo-step step-1">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    <span class="seo-step-badge">01</span>
                </div>
                <h3 class="seo-step-title">SEO Audit &amp; Research</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    We analyze your website, existing rankings, competitors, technical performance, content, backlinks, and keyword opportunities.
                </p>
            </div>

            <!-- Connector 1 -->
            <div class="seo-connector connector-1">
                <svg
                    viewBox="0 0 64 14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <line
                        x1="0"
                        y1="7"
                        x2="52"
                        y2="7"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-dasharray="4 5"
                        stroke-linecap="round" />
                    <path
                        d="M50 2 L57 7 L50 12"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none" />
                </svg>
            </div>

            <!-- Step 2 -->
            <div class="seo-step step-2">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-clipboard-list"></i></span>
                    <span class="seo-step-badge">02</span>
                </div>
                <h3 class="seo-step-title">Keyword Strategy</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    We develop a keyword map based on search intent, business priorities, locations, services, and potential opportunities.
                </p>
            </div>

            <!-- Connector 2 -->
            <div class="seo-connector connector-2">
                <svg
                    viewBox="0 0 64 14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <line
                        x1="0"
                        y1="7"
                        x2="52"
                        y2="7"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-dasharray="4 5"
                        stroke-linecap="round" />
                    <path
                        d="M50 2 L57 7 L50 12"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none" />
                </svg>
            </div>

            <!-- Step 3 -->
            <div class="seo-step step-3">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-gear"></i></span>
                    <span class="seo-step-badge">03</span>
                </div>
                <h3 class="seo-step-title">On-Page &amp; Technical Optimization</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    Our team optimizes important pages and addresses technical issues that can affect crawling, indexing, rankings, and user experience.
                </p>
            </div>

            <!-- Connector 3 -->
            <div class="seo-connector connector-3">
                <svg
                    viewBox="0 0 64 14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <line
                        x1="0"
                        y1="7"
                        x2="52"
                        y2="7"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-dasharray="4 5"
                        stroke-linecap="round" />
                    <path
                        d="M50 2 L57 7 L50 12"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none" />
                </svg>
            </div>

            <!-- Step 4 -->
            <div class="seo-step step-3">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-pen-nib"></i></span>
                    <span class="seo-step-badge">04</span>
                </div>
                <h3 class="seo-step-title">Content Development</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    We improve existing content and create new SEO-focused pages, blogs, FAQs, and supporting content to expand your organic search presence.
                </p>
            </div>

            <!-- Connector 4 -->
            <div class="seo-connector connector-3">
                <svg
                    viewBox="0 0 64 14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <line
                        x1="0"
                        y1="7"
                        x2="52"
                        y2="7"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-dasharray="4 5"
                        stroke-linecap="round" />
                    <path
                        d="M50 2 L57 7 L50 12"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none" />
                </svg>
            </div>

            <!-- Step 5 -->
            <div class="seo-step step-4">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-link"></i></span>
                    <span class="seo-step-badge">05</span>
                </div>
                <h3 class="seo-step-title">Authority &amp; Local SEO</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    Where appropriate, we strengthen local visibility, citations, relevant mentions, and website authority through sustainable off-page activities.
                </p>
            </div>

            <!-- Connector 5 -->
            <div class="seo-connector connector-3">
                <svg
                    viewBox="0 0 64 14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <line
                        x1="0"
                        y1="7"
                        x2="52"
                        y2="7"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-dasharray="4 5"
                        stroke-linecap="round" />
                    <path
                        d="M50 2 L57 7 L50 12"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none" />
                </svg>
            </div>

            <!-- Step 6 -->
            <div class="seo-step step-4">
                <div class="seo-ring-wrap">
                    <span class="seo-ring-track"></span>
                    <span class="seo-ring-progress"></span>
                    <span class="seo-icon-circle"><i class="fa-solid fa-chart-line"></i></span>
                    <span class="seo-step-badge">06</span>
                </div>
                <h3 class="seo-step-title">Monitoring &amp; Continuous Optimization</h3>
                <div class="seo-step-underline"></div>
                <p class="seo-step-text">
                    We track rankings, organic traffic, conversions, and page performance and continuously refine the strategy based on data.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="overview-section">
    <div class="overview-container">
        <div class="agency-card">
            <span class="agency-dots top-right"></span>
            <span class="agency-dots bottom-left"></span>

            <div class="row align-items-center g-4 g-lg-5 position-relative">
                <div class="col-12 col-lg-6">
                    <h2 class="agency-heading">
                        Best <span class="text-accent">SEO Agency in<br class="d-none d-lg-inline"> Mumbai</span> for Local &amp;<br class="d-none d-lg-inline"> Growing Businesses
                    </h2>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="agency-text">
                        <p class="agency-desc">
                            If you are searching for a top SEO agency in Mumbai that understands both search engines and business objectives, Technofra can help you build a stronger organic presence.
                        </p>
                        <p class="agency-desc">
                            From local businesses targeting Mumbai customers to growing brands competing across multiple locations, our SEO strategies are tailored to your market, audience, competition, and growth goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <div class="row align-items-center g-5">
            <!-- LEFT COLUMN -->
            <div class="col-12 col-lg-5 faq-left-col">

                <h2 class="faq-heading">
                    Frequently Asked <span class="text-accent">Questions</span>
                </h2>

                <div class="faq-illustration-wrap">
                    <img
                        src="./assets/images/about/faq-illustration.png"
                        alt="Illustration of a magnifying glass and question mark representing frequently asked questions"
                        class="faq-illustration" />
                </div>
            </div>

            <!-- RIGHT COLUMN: ACCORDION -->
            <div class="col-12 col-lg-7">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <!-- Item 01 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading01">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse01"
                                aria-expanded="false"
                                aria-controls="collapse01">
                                <span class="faq-num">01</span>
                                <span class="faq-q-text">What SEO services does Technofra provide in Mumbai?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse01"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading01"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Technofra provides keyword research, technical SEO, on-page SEO, local SEO, content SEO, off-page SEO, link building, SEO audits, and performance reporting.
                            </div>
                        </div>
                    </div>

                    <!-- Item 02 (open by default, matches reference) -->
                    <div class="accordion-item active-item">
                        <h3 class="accordion-header" id="heading02">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse02"
                                aria-expanded="true"
                                aria-controls="collapse02">
                                <span class="faq-num">02</span>
                                <span class="faq-q-text">Why should I choose an SEO agency in Mumbai?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse02"
                            class="accordion-collapse collapse show"
                            aria-labelledby="heading02"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Working with an SEO agency in Mumbai can be useful for businesses targeting customers in Mumbai because the strategy can be tailored to local search behavior, competition, locations, and customer intent.
                            </div>
                        </div>
                    </div>

                    <!-- Item 03 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading03">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse03"
                                aria-expanded="false"
                                aria-controls="collapse03">
                                <span class="faq-num">03</span>
                                <span class="faq-q-text">How long does SEO take to show results?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse03"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading03"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                SEO is a long-term marketing channel. Results vary depending on competition, website condition, authority, content quality, target keywords, and the level of SEO implementation. Many businesses begin seeing measurable movement within several months.
                            </div>
                        </div>
                    </div>

                    <!-- Item 04 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading04">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse04"
                                aria-expanded="false"
                                aria-controls="collapse04">
                                <span class="faq-num">04</span>
                                <span class="faq-q-text">Do you provide local SEO services in Mumbai?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse04"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading04"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Our local SEO services can help Mumbai-based businesses improve their visibility for location-based searches through Google Business Profile optimization, local landing pages, citations, reviews, and local keyword targeting.
                            </div>
                        </div>
                    </div>

                    <!-- Item 05 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading05">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse05"
                                aria-expanded="false"
                                aria-controls="collapse05">
                                <span class="faq-num">05</span>
                                <span class="faq-q-text">Can you optimize an existing website?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse05"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading05"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. We can audit and optimize existing websites by improving technical SEO, page structure, content, metadata, internal linking, keyword targeting, and other important SEO elements.
                            </div>
                        </div>
                    </div>

                    <!-- Item 06 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading06">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse06"
                                aria-expanded="false"
                                aria-controls="collapse06">
                                <span class="faq-num">06</span>
                                <span class="faq-q-text">How do you measure SEO performance?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse06"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading06"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We monitor relevant rankings, organic traffic, landing-page performance, conversions, and other SEO metrics to understand how the campaign is contributing to business growth.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap JS bundle (required for accordion toggle behavior) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Toggle 'active-item' styling (white bg + shadow) to match the open accordion item in the reference
    document
        .querySelectorAll(".faq-accordion .accordion-collapse")
        .forEach(function(collapseEl) {
            collapseEl.addEventListener("show.bs.collapse", function() {
                this.closest(".accordion-item").classList.add("active-item");
            });
            collapseEl.addEventListener("hide.bs.collapse", function() {
                this.closest(".accordion-item").classList.remove("active-item");
            });
        });
</script>

<?php include __DIR__ . '/footer.php'; ?>