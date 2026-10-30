<?php
$pageTitle = 'PPC Services Company  | Technofra';
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
        --ppc-purple: #6d3df5;
        --ppc-purple-light: #f2eefe;
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
        font-size: var(--h1);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.25rem;
        max-width: 16ch;
        word-wrap: break-word;
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
        max-width: 46ch;
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
            max-width: 1200px;
        }
    }

    @media (max-width: 1599.98px) {
        .hero-container {
            max-width: 1100px;
        }
    }

    @media (max-width: 1399.98px) {
        .hero-heading {
            max-width: 15ch;
        }

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
        background: linear-gradient(160deg, #a78bfa 0%, #7c5cf0 100%);
        height: 100%;
        min-height: 380px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .overview-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
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
        box-shadow: 0 4px 14px rgba(109, 61, 245, 0.1);
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
        background-color: #5a2ee0;
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
        padding-top: clamp(3rem, 2rem + 4vw, 6rem);
        padding-bottom: clamp(3rem, 2rem + 4vw, 6rem);
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
        font-size: var(--h1);
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
        max-width: 42ch;
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
            max-width: 1200px;
        }
    }

    @media (max-width: 1599.98px) {
        .ppc-container {
            max-width: 1100px;
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
        max-width: 1320px;
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
            max-width: 1200px;
        }
    }

    @media (max-width: 1599.98px) {
        .services-container {
            max-width: 1100px;
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

        .service-card {
            margin-bottom: 1.5rem;
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

        .service-card {
            margin-bottom: 1.25rem;
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

    h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6{
    letter-spacing: normal;
}
</style>


<section class="hero-section">
    <span class="hero-dots top-right"></span>
    <span class="hero-dots bottom-right"></span>

    <div class="hero-container">
        <div class="row align-items-center g-5">
            <!-- LEFT COLUMN -->
            <div class="col-12 col-lg-6">
                <span class="hero-badge">
                    <i class="fa-solid fa-star"></i>
                    ROI Driven PPC Campaigns
                </span>

                <h1 class="hero-heading">
                    Run Smarter Ads.
                    <span class="text-accent">Get Quality Clicks.</span>
                    <span class="text-accent text-underline">Drive Better Results.</span>
                </h1>

                <p class="hero-desc">
                    Maximize your ROI with data-driven PPC campaigns across Google
                    Ads, Meta Ads, and more. Reach the right audience, boost
                    conversions, and grow your business.
                </p>

                <div class="hero-cta-row">
                    <a href="enquirynow.php" class="hero-btn hero-btn-primary">
                        Enquiry Now
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="contact.php" class="hero-btn hero-btn-secondary">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="hero-checklist">
                    <span class="hero-check-item"><i class="fa-solid fa-circle-check"></i>Targeted
                        Campaigns</span>
                    <span class="hero-check-item"><i class="fa-solid fa-circle-check"></i>Higher
                        Conversions</span>
                    <span class="hero-check-item"><i class="fa-solid fa-circle-check"></i>Transparent
                        Reporting</span>
                    <span class="hero-check-item"><i class="fa-solid fa-circle-check"></i>ROI Focused</span>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-12 col-lg-6">
                <div class="hero-graphic-wrap">
                    <img
                        src="./assets/images/about/hero-dashboard.png"
                        alt="PPC performance dashboard showing clicks, conversions, cost per conversion, CTR, and an upward performance trend across Google and Meta ads"
                        class="hero-graphic" />
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
                <span class="ppc-eyebrow">[ PPC benefits ]</span>
                <h1 class="ppc-heading">Why businesses invest in PPC advertising</h1>
                <p class="ppc-desc">
                    PPC gives you speed, targeting control, and clear measurement. Well-structured campaigns help
                    businesses enter competitive markets faster, test offers quickly, and scale the channels that
                    produce stronger returns.
                </p>
                <a href="enquirynow.php" class="ppc-btn">
                    Enquire Now
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <div class="ppc-stat-wrap">
                    <div class="ppc-stat-number">4 Key</div>
                    <p class="ppc-stat-desc">
                        benefits that help businesses launch faster, measure performance, and scale with confidence
                    </p>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-12 col-lg-6">
                <div class="ppc-feature-list">

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Instant Visibility</h3>
                            <p class="ppc-feature-text">
                                Appear in front of your audience immediately instead of waiting through slower organic
                                ranking cycles.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Precise Targeting</h3>
                            <p class="ppc-feature-text">
                                Reach the right users by location, intent, interests, demographics, device type, and
                                behavior.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Measurable ROI</h3>
                            <p class="ppc-feature-text">
                                Track leads, sales, and cost per acquisition so every campaign can be optimized around
                                performance.
                            </p>
                        </div>
                    </div>

                    <div class="ppc-feature-item">
                        <div class="ppc-icon-circle">
                            <i class="fa-solid fa-arrows-rotate"></i>
                        </div>
                        <div class="ppc-feature-content">
                            <h3 class="ppc-feature-title">Continuous Optimization</h3>
                            <p class="ppc-feature-text">
                                Use ongoing testing, audience refinements, and bid adjustments to keep improving results
                                over time.
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
            <!-- LEFT: PHOTO -->
            <div class="col-12 col-lg-5">
                <div class="overview-photo-wrap">
                    <img
                        src="./assets/images/about/ppc-overview-photo.png"
                        alt="Marketing professional holding a tablet, representing our PPC team"
                        class="overview-photo" />
                </div>
            </div>

            <!-- RIGHT: CONTENT -->
            <div class="col-12 col-lg-7">
                <div class="overview-right-col">
                    <div class="overview-top-row">
                        <span class="overview-eyebrow">PPC OVERVIEW</span>
                        <span class="overview-location-badge">
                            <i class="fa-solid fa-location-dot"></i>
                            PPC Company in Mumbai
                        </span>
                    </div>

                    <h2 class="overview-heading">
                        We Build <span class="text-accent">PPC</span> That Drives Real
                        Business Growth
                    </h2>

                    <p class="overview-desc">
                        Pay-per-click advertising helps you appear in front of customers
                        the moment they are ready to search, compare, or buy. A
                        well-managed PPC campaign is not just about spending budget. It
                        is about targeting the right audience, writing stronger ad copy,
                        improving landing pages, and tracking every meaningful action.
                    </p>

                    <p class="overview-desc">
                        Our team manages keyword planning, audience targeting, ad
                        creation, bid strategy, A/B testing, remarketing, and conversion
                        tracking so your paid campaigns drive better quality traffic and
                        business outcomes.
                    </p>

                    <h3 class="overview-focus-label">PPC FOCUS AREAS</h3>
                    <p class="overview-focus-sub">
                        Everything we improve is mapped around visibility, clicks,
                        conversions, and return on ad spend.
                    </p>

                    <div class="focus-grid">
                        <div class="focus-chip">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Keyword Planning</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-users"></i>
                            <span>Audience Targeting</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-pen-ruler"></i>
                            <span>Ad Creation</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-gavel"></i>
                            <span>Bid Strategy</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-flask"></i>
                            <span>A/B Testing</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <span>Remarketing</span>
                        </div>
                        <div class="focus-chip">
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Conversion Tracking</span>
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
        <div class="services-header">
            <div class="services-eyebrow">
                <span class="line"></span>
                <span>PPC SERVICES</span>
                <span class="line"></span>
            </div>
            <h2 class="services-heading">
                Core <span class="text-accent">PPC Services</span> We Offer
            </h2>
        </div>

        <!-- Cards grid -->
        <div class="row g-4">
            <!-- Card 1: Google Search Ads -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3 class="service-title">Google Search Ads</h3>
                    <p class="service-text">
                        Show your ads on Google search results and reach high-intent
                        customers actively looking for your products or services.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 2: Display & Remarketing Ads -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-display"></i>
                    </div>
                    <h3 class="service-title">Display &amp; Remarketing Ads</h3>
                    <p class="service-text">
                        Reach a wider audience across the web and re-engage visitors
                        with targeted display and remarketing campaigns.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 3: Meta Ads Management -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle meta-icons">
                        <!-- <i class="fa-solid fa-infinity meta-infinity"></i> -->
                        <span class="meta-brand-row">
                            <!-- <i class="fa-brands fa-facebook"></i> -->
                            <i class="fa-brands fa-meta"></i>
                        </span>
                    </div>
                    <h3 class="service-title">Meta Ads Management</h3>
                    <p class="service-text">
                        Run result-driven Facebook and Instagram ads to increase brand
                        awareness, generate leads, and boost conversions.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 4: Shopping & Ecommerce Ads -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3 class="service-title">Shopping &amp; Ecommerce Ads</h3>
                    <p class="service-text">
                        Promote your products with Google Shopping and product ads that
                        drive qualified traffic and increase sales.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 5: Landing Page Optimization -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-arrow-pointer"></i>
                    </div>
                    <h3 class="service-title">Landing Page Optimization</h3>
                    <p class="service-text">
                        Improve landing page design, structure, and messaging to turn
                        more clicks into leads and paying customers.
                    </p>
                    <div class="service-underline"></div>
                </div>
            </div>

            <!-- Card 6: Conversion Tracking & Reporting -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon-circle">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">Conversion Tracking &amp; Reporting</h3>
                    <p class="service-text">
                        Track conversions, measure ROI, and get detailed reports to
                        optimize campaigns and drive better results.
                    </p>
                    <div class="service-underline"></div>
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
                <span class="faq-badge">
                    <i class="fa-solid fa-comment-dots"></i>
                    FAQ
                </span>
                <h2 class="faq-heading">
                    Frequently Asked <span class="text-accent">Questions</span>
                </h2>
                <p class="faq-desc">
                    Find answers to common questions about our PPC services,
                    campaigns, and how we help businesses generate leads, sales, and
                    measurable growth.
                </p>

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
                                <span class="faq-q-text">What is PPC advertising?</span>
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
                                PPC (pay-per-click) advertising is a model where you pay a
                                fee each time someone clicks your ad, letting you buy visits
                                to your site instead of earning them organically.
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
                                <span class="faq-q-text">How long does it take to see PPC results?</span>
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
                                PPC can start driving traffic soon after launch. In many
                                cases, early results can appear within days, while stronger
                                performance improves over time through testing, targeting,
                                and optimization.
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
                                <span class="faq-q-text">Which PPC platforms do you manage?</span>
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
                                We manage campaigns across Google Ads, Microsoft Ads, Meta
                                (Facebook &amp; Instagram), and other major ad platforms
                                depending on where your audience spends their time.
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
                                <span class="faq-q-text">Do you help with Google Ads and Meta Ads?</span>
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
                                Yes, we handle full setup, management, and optimization for
                                both Google Ads and Meta Ads, tailored to your goals and
                                budget.
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
                                <span class="faq-q-text">How do you measure PPC success?</span>
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
                                We track metrics like click-through rate, conversion rate,
                                cost per acquisition, and return on ad spend to measure
                                performance against your specific goals.
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
                                <span class="faq-q-text">Will I receive regular reports?</span>
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
                                Yes, you'll receive scheduled performance reports that break
                                down spend, results, and key metrics so you always know how
                                your campaigns are doing.
                            </div>
                        </div>
                    </div>

                    <!-- Item 07 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading07">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse07"
                                aria-expanded="false"
                                aria-controls="collapse07">
                                <span class="faq-num">07</span>
                                <span class="faq-q-text">Can PPC work for any business type?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse07"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading07"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Most businesses can benefit from PPC, though strategy and
                                platform choice vary by industry, target audience, and goals
                                — we tailor the approach to fit your business.
                            </div>
                        </div>
                    </div>

                    <!-- Item 08 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading08">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse08"
                                aria-expanded="false"
                                aria-controls="collapse08">
                                <span class="faq-num">08</span>
                                <span class="faq-q-text">How much do your PPC services cost?</span>
                                <span class="faq-toggle-icon">
                                    <i class="fa-solid fa-plus icon-plus"></i>
                                    <i class="fa-solid fa-minus icon-minus"></i>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="collapse08"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading08"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Pricing depends on your campaign scope, ad spend, and
                                platforms involved — reach out and we'll put together a plan
                                and quote based on your specific needs.
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
