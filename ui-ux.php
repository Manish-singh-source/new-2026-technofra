<?php
$pageTitle = 'UI UX Design Services in Mumbai | Technofra';
$metaDescription = 'Looking for UI UX Design Services in Mumbai? Technofra designs clean, easy-to-use websites and apps people enjoy. Talk to our Kandivali team today.';
$bodyClass = 'hero-video-page tf-ios-page';
include __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Section palette */
        --hero-bg: #07070d;
        --hero-text: #f5f6fb;
        --hero-body: #b7bacb;
        --hero-cyan: #35d8f0;
        --hero-blue: #3b6bff;
        --hero-purple: #a259ff;
        --hero-pink: #cf4fd8;
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

    /* ============================================
        BASE
    ============================================ */
    body {
        font-family:
            "Poppins",
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;
    }

    .di-hero-section {
        position: relative;
        overflow: hidden;
        background: var(--hero-bg);
        padding-block: clamp(3.5rem, 3rem + 4vw, 6rem);
        padding-top: 174px;
        text-align: center;
    }

    /* Ambient glow blobs */
    .di-hero-section::before,
    .di-hero-section::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        z-index: 0;
        pointer-events: none;
    }

    .di-hero-section::before {
        width: 55vw;
        height: 55vw;
        max-width: 620px;
        max-height: 620px;
        left: -12%;
        bottom: -30%;
        background: radial-gradient(circle,
                rgba(162, 89, 255, 0.45) 0%,
                rgba(162, 89, 255, 0) 65%);
    }

    .di-hero-section::after {
        width: 55vw;
        height: 55vw;
        max-width: 620px;
        max-height: 620px;
        right: -12%;
        bottom: -35%;
        background: radial-gradient(circle,
                rgba(53, 216, 240, 0.4) 0%,
                rgba(53, 216, 240, 0) 65%);
    }

    .di-hero-section .container {
        position: relative;
        z-index: 1;
    }

    .di-heading {
        font-weight: 800;
        color: var(--hero-text);
        margin: 0;
        letter-spacing: -0.01em;
    }

    .di-heading .line {
        display: block;
    }

    /* Outlined, glowing gradient word */
    .di-heading .glow-word {
        font-weight: 900;
        font-size: clamp(3rem, 2.2rem + 5.5vw, 6.5rem);
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 2px var(--hero-cyan);
        background: linear-gradient(90deg,
                #ffffff 0%,
                var(--hero-cyan) 45%,
                var(--hero-blue) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        filter: drop-shadow(0 0 18px rgba(53, 216, 240, 0.55)) drop-shadow(0 0 36px rgba(59, 107, 255, 0.35));
        margin-top: 0.1em;
    }

    .di-lead {
        color: var(--hero-body);
        max-width: 1000px;
        margin: 1.5rem auto 0;
    }

    /* CTA button */
    .di-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        margin-top: 2.25rem;
        padding: 0.85rem 1.9rem;
        border-radius: 999px;
        border: none;
        background: linear-gradient(90deg,
                var(--hero-pink) 0%,
                var(--hero-purple) 35%,
                var(--hero-cyan) 100%);
        color: #ffffff;
        font-weight: 600;
        font-size: var(--p);
        text-decoration: none;
        box-shadow: 0 12px 30px -10px rgba(162, 89, 255, 0.55);
        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }

    .di-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 36px -8px rgba(53, 216, 240, 0.55);
        color: #ffffff;
    }

    .di-cta i {
        transition: transform 0.25s ease;
    }

    .di-cta:hover i {
        transform: translate(2px, -2px);
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .di-hero-section {
            padding-block: 5.5rem;
            padding-top: 174px;
        }
    }

    @media (max-width: 1599.98px) {
        .di-hero-section {
            padding-block: 5rem;
            padding-top: 174px;
        }
    }

    @media (max-width: 1399.98px) {
        .di-hero-section {
            padding-block: 4.5rem;
            padding-top: 174px;
        }
    }

    @media (max-width: 1199.98px) {
        .di-hero-section {
            padding-block: 4rem;
            padding-top: 110px;
        }

        .di-heading .glow-word {
            -webkit-text-stroke: 1.5px var(--hero-cyan);
        }
    }

    @media (max-width: 991.98px) {
        .di-hero-section {
            padding-block: 3.5rem;
            padding-top: 100px;
        }

        .di-lead {
            max-width: 520px;
        }
    }

    @media (max-width: 767.98px) {
        .di-hero-section {
            padding-block: 3rem;
            padding-top: 100px;
        }

        .di-heading .glow-word {
            -webkit-text-stroke: 1.25px var(--hero-cyan);
        }

        .di-cta {
            padding: 0.75rem 1.6rem;
        }
    }

    @media (max-width: 575.98px) {
        .di-hero-section {
            padding-block: 2.75rem;
            padding-top: 100px;
        }

        .di-lead {
            padding-inline: 0.5rem;
        }

        .di-heading .glow-word {
            -webkit-text-stroke: 1px var(--hero-cyan);
        }
    }

    @media (max-width: 479.98px) {
        .di-hero-section {
            padding-block: 2.25rem;
            padding-top: 100px;
        }

        .di-cta {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 359.98px) {
        .di-hero-section {
            padding-block: 2rem;
            padding-top: 90px;
        }

        .di-heading .glow-word {
            -webkit-text-stroke: 0.75px var(--hero-cyan);
        }
    }


    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Section palette */
        --bt-bg: #06060c;
        --bt-tile-bg: #11121c;
        --bt-tile-border: rgba(255, 255, 255, 0.08);
        --bt-text: #f5f6fb;
        --bt-muted: #aab0c6;
        --bt-cyan: #35d8f0;
        --bt-purple: #8a5cff;
        --bt-blue: #3b6bff;
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

    /* ============================================
        BASE
    ============================================ */
    body {
        font-family:
            "Inter",
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;
        color: var(--bt-text);
    }

    .bento-section {
        background: var(--bt-bg);
        padding-block: clamp(3rem, 2.5rem + 3vw, 5.5rem);
    }

    /* -------- Grid shell -------- */
    .bento-grid {
        display: grid;
        grid-template-columns: 1.25fr 1fr 1.25fr 1.15fr;
        grid-template-rows: auto 1fr;
        gap: 1rem;
        min-height: 520px;
    }

    .bento-tile {
        position: relative;
        border-radius: 18px;
        border: 1px solid var(--bt-tile-border);
        overflow: hidden;
        background: var(--bt-tile-bg);
    }

    /* -------- Photo tile (col 1, full height) -------- */
    .bento-photo {
        grid-column: 1;
        grid-row: 1 / 3;
        min-height: 260px;
    }

    /* -------- Image placeholder styling (swap with real <img> later) -------- */
    .bento-image-placeholder {
        width: 100%;
        height: 100%;
        min-height: 140px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        color: rgba(255, 255, 255, 0.55);
        background:
            repeating-linear-gradient(45deg,
                rgba(255, 255, 255, 0.035) 0 2px,
                transparent 2px 10px),
            linear-gradient(160deg, #1b1c2b 0%, #23263a 100%);
    }

    .bento-image-placeholder i {
        font-size: 1.6rem;
        opacity: 0.6;
    }

    .bento-image-placeholder span {
        font-size: var(--caption);
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    /* Give each placeholder a subtle tint so they read as distinct assets while still obviously placeholders */
    .tint-purple {
        background:
            repeating-linear-gradient(45deg,
                rgba(255, 255, 255, 0.035) 0 2px,
                transparent 2px 10px),
            linear-gradient(160deg, #241a3d 0%, #1c1330 100%);
    }

    .tint-blue {
        background:
            repeating-linear-gradient(45deg,
                rgba(255, 255, 255, 0.035) 0 2px,
                transparent 2px 10px),
            linear-gradient(160deg, #142238 0%, #0e1830 100%);
    }

    .tint-cyan {
        background:
            repeating-linear-gradient(45deg,
                rgba(255, 255, 255, 0.035) 0 2px,
                transparent 2px 10px),
            linear-gradient(160deg, #0f2530 0%, #0a1c26 100%);
    }

    /* -------- Column 2: Figma tile + Agency tile -------- */
    .bento-col-2 {
        grid-column: 2;
        grid-row: 1 / 3;
        display: grid;
        grid-template-rows: auto 1fr;
        gap: 1rem;
    }

    .bento-figma {
        min-height: 140px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.9rem;
        background: radial-gradient(circle at 50% 40%, #17182a 0%, #0c0d16 75%);
    }

    .bento-figma-ring {
        width: 76px;
        height: 76px;
        border-radius: 50%;
        border: 2px solid rgba(59, 216, 240, 0.55);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow:
            0 0 0 6px rgba(53, 216, 240, 0.06),
            0 0 24px rgba(59, 107, 255, 0.35);
    }

    .bento-figma-ring i {
        font-size: 2.1rem;
    }

    .bento-figma-label {
        font-weight: 700;
        color: var(--bt-text);
    }

    .bento-agency {
        min-height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 1.5rem;
        background: linear-gradient(155deg,
                #6a3df0 0%,
                #4a6df5 55%,
                #2ecbe0 100%);
        color: #ffffff;
    }

    .bento-agency .agency-title {
        font-weight: 800;
        font-size: var(--h3);
        line-height: 1.1;
        margin-bottom: 0.15rem;
    }

    .bento-agency .agency-sub {
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
    }

    .bento-agency .dot-pattern {
        position: absolute;
        right: 1rem;
        bottom: 1rem;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 6px;
    }

    .bento-agency .dot-pattern span {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.45);
    }

    /* -------- Column 3: wave image + 2x2 icon tiles -------- */
    .bento-col-3 {
        grid-column: 3;
        grid-row: 1 / 3;
        display: grid;
        grid-template-rows: auto 1fr;
        gap: 1rem;
    }

    .bento-wave {
        min-height: 140px;
    }

    .bento-icons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 1rem;
    }

    .bento-icon-tile {
        background: linear-gradient(160deg, #10202b 0%, #0b1622 100%);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        /* gap: 0.75rem; */
        padding: 0.75rem;
        text-align: center;
        transition:
            transform 0.25s ease,
            border-color 0.25s ease;
    }

    .bento-icon-tile:hover {
        transform: translateY(-3px);
        border-color: rgba(53, 216, 240, 0.4);
    }

    .bento-icon-tile i {
        font-size: 2rem;
        /* was too small — bump this up */
        line-height: 1;
        /* font-size: 1.4rem; */
        color: var(--bt-cyan);
    }

    .bento-icon-tile span {
        font-weight: 600;
        font-size: var(--p-small);
        color: var(--bt-text);
    }

    /* -------- Column 4: ribbons image + wavy lines image -------- */
    .bento-col-4 {
        grid-column: 4;
        grid-row: 1 / 3;
        display: grid;
        grid-template-rows: 1.2fr 1fr;
        gap: 1rem;
    }

    .bento-tile * {
        max-width: 100%;
    }

    /* Make any <img> dropped into a tile fill it completely */
    .bento-tile img,
    .bento-image-placeholder img,
    .bento-figma img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* The placeholder class was flex-centered for icon+text;
   kill that so a real image can fill the box edge-to-edge */
    .bento-image-placeholder {
        display: block;
        padding: 0;
        background: none;
        /* remove the diagonal-stripe placeholder pattern now that real images are in */
    }

    .bento-figma {
        padding: 0;
        display: block;
        /* was flex + centered gap layout for the icon/label version */
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .bento-section {
            padding-block: 5rem;
        }
    }

    @media (max-width: 1599.98px) {
        .bento-section {
            padding-block: 4.5rem;
        }

        .bento-grid {
            min-height: 480px;
        }
    }

    @media (max-width: 1399.98px) {
        .bento-section {
            padding-block: 4rem;
        }

        .bento-agency .agency-title {
            font-size: var(--h4);
        }
    }

    @media (max-width: 1199.98px) {
        .bento-grid {
            grid-template-columns: 1.2fr 1fr 1.2fr 1.1fr;
            min-height: 440px;
        }

        .bento-figma-ring {
            width: 64px;
            height: 64px;
        }

        .bento-figma-ring i {
            font-size: 1.75rem;
        }
    }

    @media (max-width: 991.98px) {
        .bento-section {
            padding-block: 3.5rem;
        }

        /* Switch to a 2-column bento: photo + figma/agency on top, wave/icons + tall images below */
        .bento-grid {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto;
            min-height: 0;
        }

        .bento-photo {
            grid-column: 1 / 3;
            grid-row: 1;
            min-height: 320px;
        }

        .bento-col-2 {
            grid-column: 1;
            grid-row: 2;
            grid-template-rows: auto auto;
        }

        .bento-col-3 {
            grid-column: 2;
            grid-row: 2;
            grid-template-rows: auto auto;
        }

        .bento-col-4 {
            grid-column: 1 / 3;
            grid-row: 3;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
        }

        .bento-agency {
            min-height: 180px;
        }

        .bento-icons {
            min-height: 220px;
        }
    }

    @media (max-width: 767.98px) {
        .bento-section {
            padding-block: 3rem;
        }

        .bento-grid {
            gap: 0.85rem;
        }

        .bento-photo {
            min-height: 260px;
        }

        .bento-figma {
            min-height: 120px;
        }

        .bento-agency {
            padding: 1.25rem;
            min-height: 160px;
        }

        .bento-agency .agency-title {
            font-size: var(--h5);
        }
    }

    @media (max-width: 575.98px) {
        .bento-section {
            padding-block: 2.75rem;
        }

        /* Full single-column stack on small phones for guaranteed no overlap */
        .bento-grid {
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            gap: 0.85rem;
        }

        .bento-photo {
            grid-column: 1;
            grid-row: auto;
            min-height: 240px;
        }

        .bento-col-2,
        .bento-col-3,
        .bento-col-4 {
            grid-column: 1;
            grid-row: auto;
        }

        .bento-col-4 {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
        }

        .bento-wave,
        .bento-figma {
            min-height: 130px;
        }

        .bento-icons {
            grid-template-columns: 1fr 1fr;
            min-height: 0;
        }

        .bento-icon-tile {
            padding: 1rem 0.5rem;
        }
    }

    @media (max-width: 479.98px) {
        .bento-tile {
            border-radius: 14px;
        }

        .bento-agency .agency-title {
            font-size: var(--h6);
            font-size: 1.6rem;
        }

        .bento-icon-tile i {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 359.98px) {
        .bento-section {
            padding-block: 2.25rem;
        }

        .bento-icons {
            grid-template-columns: 1fr 1fr;
            gap: 0.6rem;
        }

        .bento-icon-tile span {
            font-size: var(--caption);
        }
    }

    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
        Uses clamp(min, preferred, max) so text scales
        fluidly between mobile (~320px) and desktop (~1440px)
        with no media queries needed.
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

        /* Letter spacing for large headings */
        --ls-heading: -0.02em;

        /* Section palette (kept separate from typography tokens above) */
        --dt-bg-top: #f6f5fb;
        --dt-bg-bottom: #fbfaff;
        --dt-heading: #17123a;
        --dt-accent: #6d4bff;
        --dt-accent-2: #9b6bff;
        --dt-body: #6b7086;
        --dt-card-bg: #ffffff;
        --dt-card-border: #eeecf7;
    }

    /* ============================================
        APPLY THE SCALE
    ============================================ */

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

    /* ============================================
        BASE / RESET (scoped to this section only)
    ============================================ */

    body {
        font-family:
            "Inter",
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;
        color: var(--dt-body);
    }

    .design-tools-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg,
                var(--dt-bg-top) 0%,
                var(--dt-bg-bottom) 100%);
        padding-block: clamp(3.5rem, 3rem + 3vw, 6.5rem);
    }

    /* decorative soft glows to echo the reference */
    .design-tools-section::before,
    .design-tools-section::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    .design-tools-section::before {
        width: 320px;
        height: 320px;
        top: -80px;
        left: -100px;
        background: radial-gradient(circle,
                rgba(155, 107, 255, 0.16) 0%,
                rgba(155, 107, 255, 0) 70%);
    }

    .design-tools-section::after {
        width: 260px;
        height: 260px;
        top: 10%;
        right: -80px;
        background: radial-gradient(circle,
                rgba(109, 75, 255, 0.14) 0%,
                rgba(109, 75, 255, 0) 70%);
    }

    .design-tools-section .container {
        position: relative;
        z-index: 1;
    }

    /* Eyebrow badge */
    .dt-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #ffffff;
        border: 1px solid var(--dt-card-border);
        border-radius: 999px;
        padding: 0.4rem 1.1rem;
        box-shadow: 0 6px 16px rgba(109, 75, 255, 0.08);
        color: #4b4f63;
        font-weight: 600;
        letter-spacing: 0.06em;
    }

    .dt-eyebrow .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: linear-gradient(135deg,
                var(--dt-accent),
                var(--dt-accent-2));
        flex: 0 0 auto;
    }

    /* Heading */
    .dt-heading {
        color: var(--dt-heading);
        font-weight: 800;
        margin-top: 1.25rem;
    }

    .dt-heading .accent {
        background: linear-gradient(135deg,
                var(--dt-accent) 0%,
                var(--dt-accent-2) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .dt-subtext {
        color: var(--dt-body);
        max-width: 1000px;
        margin-inline: auto;
    }

    /* Card */
    .dt-card {
        background: var(--dt-card-bg);
        border: 1px solid var(--dt-card-border);
        border-radius: 22px;
        padding: 1.75rem 1.25rem 1.5rem;
        height: 100%;
        text-align: center;
        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease,
            border-color 0.25s ease;
        box-shadow: 0 10px 24px rgba(23, 18, 58, 0.04);
    }

    .dt-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(23, 18, 58, 0.1);
        border-color: rgba(109, 75, 255, 0.25);
    }

    .dt-icon-wrap {
        width: 72px;
        height: 72px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.1rem;
        font-weight: 800;
        font-size: 1.9rem;
        color: #ffffff;
        box-shadow: 0 16px 30px -10px rgba(0, 0, 0, 0.28);
    }

    .dt-icon-wrap i {
        font-size: 1.9rem;
    }

    .dt-tool-name {
        color: var(--dt-heading);
        font-weight: 700;
        font-size: var(--p-large);
        margin-bottom: 0.15rem;
    }

    .dt-tool-tag {
        font-size: var(--caption);
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1.1rem;
        display: block;
    }

    .dt-arrow-btn {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1.5px solid var(--dt-card-border);
        background: #fbfaff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: inherit;
        transition:
            background 0.2s ease,
            transform 0.2s ease,
            border-color 0.2s ease;
        text-decoration: none;
    }

    .dt-card:hover .dt-arrow-btn {
        transform: translateX(3px);
    }

    /* Per-tool colors */
    .dt-photopea {
        background: linear-gradient(145deg, #17c9a1, #0fa787);
    }

    .dt-photopea .dt-tool-tag,
    .dt-photopea-link {
        color: #10a684;
    }

    .dt-photopea-link {
        border-color: rgba(16, 166, 132, 0.35) !important;
    }

    .dt-indesign {
        background: linear-gradient(145deg, #ee2a6b, #c11256);
    }

    .dt-indesign-tag {
        color: #d81b60;
    }

    .dt-indesign-link {
        border-color: rgba(216, 27, 96, 0.35) !important;
        color: #d81b60;
    }

    .dt-figma {
        background: #050505;
    }

    .dt-figma-tag {
        color: #2f7cf6;
    }

    .dt-figma-link {
        border-color: rgba(47, 124, 246, 0.35) !important;
        color: #2f7cf6;
    }

    .dt-ae {
        background: linear-gradient(145deg, #4d2c9c, #331c6e);
    }

    .dt-ae-tag {
        color: #5b34c9;
    }

    .dt-ae-link {
        border-color: rgba(91, 52, 201, 0.35) !important;
        color: #5b34c9;
    }

    .dt-ai {
        background: linear-gradient(145deg, #ff9a00, #d97b00);
    }

    .dt-ai-tag {
        color: #e08900;
    }

    .dt-ai-link {
        border-color: rgba(224, 137, 0, 0.35) !important;
        color: #e08900;
    }

    .dt-pr {
        background: linear-gradient(145deg, #5c1fb0, #3a1273);
    }

    .dt-pr-tag {
        color: #6a25c9;
    }

    .dt-pr-link {
        border-color: rgba(106, 37, 201, 0.35) !important;
        color: #6a25c9;
    }

    /* generic tag color fallback applied via inline classes above */
    .dt-tool-tag {
        color: var(--dt-accent);
    }

    /* Ensure text never overlaps / always contained */
    .dt-card * {
        max-width: 100%;
        word-wrap: break-word;
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */

    @media (max-width: 1919.98px) {
        .design-tools-section {
            padding-block: 6rem;
        }
    }

    @media (max-width: 1599.98px) {
        .design-tools-section {
            padding-block: 5.5rem;
        }

        .dt-icon-wrap {
            width: 68px;
            height: 68px;
        }
    }

    @media (max-width: 1399.98px) {
        .design-tools-section {
            padding-block: 5rem;
        }

        .dt-card {
            padding: 1.6rem 1.1rem 1.35rem;
        }
    }

    @media (max-width: 1199.98px) {
        .design-tools-section {
            padding-block: 4.5rem;
        }

        .dt-icon-wrap {
            width: 64px;
            height: 64px;
            border-radius: 18px;
        }

        .dt-icon-wrap i,
        .dt-icon-wrap span {
            font-size: 1.7rem;
        }
    }

    @media (max-width: 991.98px) {
        .design-tools-section {
            padding-block: 4rem;
        }

        .dt-card {
            padding: 1.5rem 1rem 1.25rem;
        }

        .dt-subtext {
            max-width: 520px;
        }
    }

    @media (max-width: 767.98px) {
        .design-tools-section {
            padding-block: 3.5rem;
        }

        .dt-eyebrow {
            padding: 0.35rem 0.9rem;
        }

        .dt-icon-wrap {
            width: 60px;
            height: 60px;
            margin-bottom: 0.9rem;
        }

        .dt-card {
            border-radius: 18px;
        }
    }

    @media (max-width: 575.98px) {
        .design-tools-section {
            padding-block: 3rem;
        }

        .dt-icon-wrap {
            width: 56px;
            height: 56px;
            border-radius: 16px;
        }

        .dt-icon-wrap i,
        .dt-icon-wrap span {
            font-size: 1.5rem;
        }

        .dt-card {
            padding: 1.35rem 0.9rem 1.1rem;
        }

        .dt-tool-name {
            font-size: var(--p);
        }
    }

    @media (max-width: 479.98px) {
        .design-tools-section {
            padding-block: 2.5rem;
        }

        .dt-icon-wrap {
            width: 52px;
            height: 52px;
        }

        .dt-arrow-btn {
            width: 34px;
            height: 34px;
        }
    }

    @media (max-width: 359.98px) {
        .design-tools-section {
            padding-block: 2.25rem;
        }

        .dt-card {
            padding: 1.2rem 0.75rem 1rem;
        }

        .dt-icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 14px;
        }

        .dt-icon-wrap i,
        .dt-icon-wrap span {
            font-size: 1.3rem;
        }
    }



    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Section palette */
        --ed-bg: #f8f9fc;
        --ed-heading: #14142b;
        --ed-body: #6b7085;
        --ed-accent: #2563eb;
        --ed-accent-light: #eaf1ff;
        --ed-card-bg: #ffffff;
        --ed-card-border: #eef0f6;
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

    /* ============================================
        BASE
    ============================================ */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        color: var(--ed-body);
    }



    .expert-designers-section {
        position: relative;
        overflow: hidden;
        background: var(--ed-bg);
        padding-block: clamp(3.5rem, 3rem + 3vw, 6.5rem);
    }

    .expert-designers-section::before {
        content: "";
        position: absolute;
        top: -60px;
        right: -60px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        border: 1px solid rgba(37, 99, 235, 0.15);
        pointer-events: none;
    }

    .expert-designers-section .container {
        position: relative;
        z-index: 1;
    }

    .ed-dot-grid {
        position: absolute;
        top: 2rem;
        left: 1rem;
        width: 90px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 8px;
        z-index: 0;
    }

    .ed-dot-grid span {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #d7dbe8;
        display: block;
    }

    /* -------- Image column -------- */
    .ed-image-wrap {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 24px 48px -18px rgba(20, 20, 43, 0.25);
    }

    .ed-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        aspect-ratio: 4 / 3.2;
    }

    /* Floating badges */
    .ed-badge {
        position: absolute;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #ffffff;
        border-radius: 12px;
        padding: 0.55rem 0.9rem;
        box-shadow: 0 12px 24px -8px rgba(20, 20, 43, 0.25);
        font-weight: 700;
        color: var(--ed-heading);
        white-space: nowrap;
        z-index: 2;
    }

    .ed-badge .ed-badge-icon {
        width: 26px;
        height: 26px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        font-size: 0.85rem;
        color: #fff;
    }

    .ed-badge-wireframe {
        top: 16%;
        left: -6%;
        border: 2px solid var(--ed-accent);
    }

    .ed-badge-wireframe .ed-badge-icon {
        background: var(--ed-accent);
    }

    .ed-badge-prototype {
        bottom: 8%;
        right: -6%;
        border: 2px solid var(--ed-accent);
    }

    .ed-badge-prototype .ed-badge-icon {
        background: var(--ed-accent);
    }

    /* -------- Text column -------- */
    .ed-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--ed-accent-light);
        border-radius: 999px;
        padding: 0.4rem 1.1rem;
        color: var(--ed-accent);
        font-weight: 700;
        letter-spacing: 0.04em;
    }

    .ed-eyebrow .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ed-accent);
        flex: 0 0 auto;
    }

    .ed-heading {
        color: var(--ed-heading);
        font-weight: 800;
        margin-top: 1rem;
        font-size: 2.1rem;
    }

    .ed-lead {
        color: var(--ed-body);
        margin-top: 1rem;
    }

    /* -------- Feature cards -------- */
    .ed-feature-card {
        background: var(--ed-card-bg);
        border: 1px solid var(--ed-card-border);
        border-radius: 16px;
        padding: 1.5rem 1.25rem;
        height: 100%;
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }

    .ed-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px -12px rgba(20, 20, 43, 0.15);
        border-color: rgba(37, 99, 235, 0.25);
    }

    .ed-feature-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--ed-accent-light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        color: var(--ed-accent);
        font-size: 1.4rem;
    }

    .ed-feature-title {
        color: var(--ed-heading);
        font-weight: 700;
        margin-bottom: 0.6rem;
        position: relative;
        padding-bottom: 0.6rem;
    }

    .ed-feature-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 28px;
        height: 3px;
        border-radius: 2px;
        background: var(--ed-accent);
    }

    .ed-feature-text {
        color: var(--ed-body);
        margin-bottom: 0;
    }

    .ed-feature-card * {
        max-width: 100%;
        word-wrap: break-word;
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .expert-designers-section {
            padding-block: 6rem;
        }
    }

    @media (max-width: 1599.98px) {
        .expert-designers-section {
            padding-block: 5.5rem;
        }
    }

    @media (max-width: 1399.98px) {
        .expert-designers-section {
            padding-block: 5rem;
        }

        .ed-badge {
            padding: 0.5rem 0.8rem;
        }

        .ed-heading {
            font-size: 1.85rem;
        }
    }

    @media (max-width: 1199.98px) {
        .expert-designers-section {
            padding-block: 4.5rem;
        }

        .ed-badge-wireframe {
            left: -3%;
        }

        .ed-badge-prototype {
            right: -3%;
        }

        .ed-heading {
            font-size: 1.55rem;
        }
    }

    @media (max-width: 991.98px) {
        .expert-designers-section {
            padding-block: 4rem;
        }

        .ed-image-wrap {
            margin-bottom: 3.5rem;
        }

        .ed-badge-wireframe {
            top: 12%;
            left: 2%;
        }

        .ed-badge-prototype {
            bottom: -6%;
            right: 2%;
        }

        .ed-heading {
            margin-top: 0.75rem;
            font-size: var(--h2);
        }
    }

    @media (max-width: 767.98px) {
        .expert-designers-section {
            padding-block: 3.5rem;
        }

        .ed-image-wrap {
            margin-bottom: 3rem;
        }

        .ed-badge {
            padding: 0.45rem 0.7rem;
            gap: 0.4rem;
        }

        .ed-badge .ed-badge-icon {
            width: 22px;
            height: 22px;
            font-size: 0.75rem;
        }

        .ed-badge-wireframe {
            top: 10%;
            left: 4%;
        }

        .ed-badge-prototype {
            bottom: -8%;
            right: 4%;
        }

        .ed-feature-card {
            padding: 1.35rem 1.1rem;
        }
    }

    @media (max-width: 575.98px) {
        .expert-designers-section {
            padding-block: 3rem;
        }

        .ed-image-wrap {
            margin-bottom: 3.25rem;
        }

        .ed-badge {
            position: absolute;
        }

        .ed-badge-wireframe {
            top: 6%;
            left: 3%;
        }

        .ed-badge-prototype {
            bottom: -10%;
            right: 3%;
        }

        .ed-feature-icon {
            width: 48px;
            height: 48px;
            font-size: 1.2rem;
        }
    }

    @media (max-width: 479.98px) {
        .expert-designers-section {
            padding-block: 2.5rem;
        }

        .ed-badge {
            font-size: var(--caption);
            padding: 0.4rem 0.6rem;
        }

        .ed-badge .ed-badge-icon {
            width: 20px;
            height: 20px;
            font-size: 0.7rem;
        }
    }

    @media (max-width: 359.98px) {
        .expert-designers-section {
            padding-block: 2.25rem;
        }

        .ed-badge-wireframe,
        .ed-badge-prototype {
            position: static;
            margin-top: 0.75rem;
            display: inline-flex;
        }

        .ed-image-wrap {
            margin-bottom: 1.5rem;
        }
    }



    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Section palette */
        --wc-bg: #eef1fb;
        --wc-heading: #14142b;
        --wc-body: #6b7085;
        --wc-accent: #3b5bfd;
        --wc-card-bg: #ffffff;
        --wc-card-border: #eef0f6;
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

    /* ============================================
        BASE
    ============================================ */
    body {
        font-family:
            "Inter",
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;
        color: var(--wc-body);
    }

    .why-choose-section {
        position: relative;
        overflow: hidden;
        background: var(--wc-bg);
        padding-block: clamp(3.5rem, 3rem + 3vw, 6.5rem);
    }

    .why-choose-section .container {
        position: relative;
        z-index: 1;
    }

    /* decorative dot grids echoing the reference */
    .wc-dot-grid {
        position: absolute;
        width: 90px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 8px;
        z-index: 0;
        pointer-events: none;
    }

    .wc-dot-grid span {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #cfd5ea;
        display: block;
    }

    .wc-dot-grid.top-left {
        top: 6rem;
        left: 1rem;
    }

    .wc-dot-grid.right {
        top: 50%;
        right: 1rem;
        transform: translateY(-50%);
    }

    /* Eyebrow badge */
    .wc-eyebrow {
        display: inline-flex;
        align-items: center;
        background: #ffffff;
        border-radius: 999px;
        padding: 0.4rem 1.1rem;
        color: var(--wc-accent);
        font-weight: 700;
        letter-spacing: 0.06em;
        box-shadow: 0 6px 16px rgba(59, 91, 253, 0.1);
    }

    .wc-heading {
        color: var(--wc-heading);
        font-weight: 800;
        margin-top: 1.1rem;
    }

    .wc-heading .accent {
        color: var(--wc-accent);
    }

    .wc-subtext {
        color: var(--wc-body);
        max-width: 1000px;
        margin-inline: auto;
    }

    /* -------- Cards -------- */
    .wc-card {
        position: relative;
        background: var(--wc-card-bg);
        border: 1px solid var(--wc-card-border);
        border-radius: 18px;
        padding: 1.85rem 1.5rem 2.5rem;
        height: 100%;
        overflow: hidden;
        box-shadow: 0 14px 30px -16px rgba(20, 20, 43, 0.12);
        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }

    .wc-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 22px 40px -16px rgba(20, 20, 43, 0.2);
    }

    .wc-icon-wrap {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.35rem;
        font-size: 1.4rem;
    }

    .wc-card-title {
        color: var(--wc-heading);
        font-weight: 700;
        margin-bottom: 0.6rem;
    }

    .wc-title-rule {
        width: 34px;
        height: 3px;
        border-radius: 2px;
        margin-bottom: 1rem;
        position: relative;
    }

    .wc-title-rule::after {
        content: "";
        position: absolute;
        right: -3px;
        top: -2.5px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
    }

    .wc-card-text {
        color: var(--wc-body);
        margin-bottom: 0;
    }

    /* corner number badge */
    .wc-number {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 64px;
        height: 64px;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        padding: 0.55rem;
        font-weight: 800;
        font-size: var(--p-large);
        color: #ffffff;
        clip-path: polygon(100% 0, 100% 100%, 0 100%);
    }

    /* Card 1 - blue */
    .wc-card-1 .wc-icon-wrap {
        background: #e7edff;
        color: #3b5bfd;
    }

    .wc-card-1 .wc-title-rule {
        background: #3b5bfd;
    }

    .wc-card-1 .wc-title-rule::after {
        background: #3b5bfd;
    }

    .wc-card-1 .wc-number {
        background: linear-gradient(135deg,
                rgba(59, 91, 253, 0) 0%,
                #3b5bfd 45%);
    }

    /* Card 2 - green */
    .wc-card-2 .wc-icon-wrap {
        background: #e4f6ec;
        color: #16a34a;
    }

    .wc-card-2 .wc-title-rule {
        background: #16a34a;
    }

    .wc-card-2 .wc-title-rule::after {
        background: #16a34a;
    }

    .wc-card-2 .wc-number {
        background: linear-gradient(135deg,
                rgba(22, 163, 74, 0) 0%,
                #16a34a 45%);
    }

    /* Card 3 - purple */
    .wc-card-3 .wc-icon-wrap {
        background: #f0e9fb;
        color: #7c3aed;
    }

    .wc-card-3 .wc-title-rule {
        background: #7c3aed;
    }

    .wc-card-3 .wc-title-rule::after {
        background: #7c3aed;
    }

    .wc-card-3 .wc-number {
        background: linear-gradient(135deg,
                rgba(124, 58, 237, 0) 0%,
                #7c3aed 45%);
    }

    /* Card 4 - orange */
    .wc-card-4 .wc-icon-wrap {
        background: #fdece0;
        color: #ea7c1f;
    }

    .wc-card-4 .wc-title-rule {
        background: #ea7c1f;
    }

    .wc-card-4 .wc-title-rule::after {
        background: #ea7c1f;
    }

    .wc-card-4 .wc-number {
        background: linear-gradient(135deg,
                rgba(234, 124, 31, 0) 0%,
                #ea7c1f 45%);
    }

    .wc-card * {
        max-width: 100%;
        word-wrap: break-word;
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .why-choose-section {
            padding-block: 6rem;
        }
    }

    @media (max-width: 1599.98px) {
        .why-choose-section {
            padding-block: 5.5rem;
        }
    }

    @media (max-width: 1399.98px) {
        .why-choose-section {
            padding-block: 5rem;
        }

        .wc-card {
            padding: 1.7rem 1.35rem 2.35rem;
        }
    }

    @media (max-width: 1199.98px) {
        .why-choose-section {
            padding-block: 4.5rem;
        }

        .wc-dot-grid {
            display: none;
        }
    }

    @media (max-width: 991.98px) {
        .why-choose-section {
            padding-block: 4rem;
        }

        .wc-card {
            padding: 1.6rem 1.25rem 2.25rem;
        }

        .wc-subtext {
            max-width: 520px;
        }
    }

    @media (max-width: 767.98px) {
        .why-choose-section {
            padding-block: 3.5rem;
        }

        .wc-icon-wrap {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            font-size: 1.25rem;
            margin-bottom: 1.1rem;
        }

        .wc-number {
            width: 56px;
            height: 56px;
            font-size: var(--p);
        }
    }

    @media (max-width: 575.98px) {
        .why-choose-section {
            padding-block: 3rem;
        }

        .wc-card {
            border-radius: 16px;
            padding: 1.5rem 1.15rem 2.1rem;
        }

        .wc-icon-wrap {
            width: 46px;
            height: 46px;
            font-size: 1.15rem;
        }

        .wc-number {
            width: 50px;
            height: 50px;
            font-size: var(--p-small);
        }
    }

    @media (max-width: 479.98px) {
        .why-choose-section {
            padding-block: 2.5rem;
        }

        .wc-eyebrow {
            padding: 0.35rem 0.9rem;
        }
    }

    @media (max-width: 359.98px) {
        .why-choose-section {
            padding-block: 2.25rem;
        }

        .wc-card {
            padding: 1.35rem 1rem 1.9rem;
        }

        .wc-icon-wrap {
            width: 42px;
            height: 42px;
            font-size: 1.05rem;
            margin-bottom: 0.9rem;
        }

        .wc-number {
            width: 44px;
            height: 44px;
            font-size: var(--caption);
        }
    }


    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Design tokens for this section */
        --ds-bg: #0a0e27;
        --ds-bg-soft: #0d1230;
        --ds-text: #f5f6fa;
        --ds-text-muted: #9aa0b4;
        --ds-accent: #ef4b4b;
        --ds-accent-soft: rgba(239, 75, 75, 0.12);
        --ds-border: rgba(255, 255, 255, 0.08);
        --ds-canvas: #dbe7fb;
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
        font-family:
            "Inter",
            system-ui,
            -apple-system,
            sans-serif;
        background: var(--ds-bg);
    }

    /* ============================================
        SECTION WRAPPER
    ============================================ */
    .design-section {
        background: radial-gradient(120% 90% at 50% 0%,
                #131a3d 0%,
                var(--ds-bg) 55%);
        padding-block: clamp(3.5rem, 3rem + 3vw, 6.5rem);
        overflow: hidden;
        position: relative;
    }

    .design-heading-wrap {
        max-width: 1032px;
        margin-inline: auto;
        padding-inline: 1rem;
    }

    .design-title {
        color: var(--ds-text);
        margin-bottom: 0.9rem;
    }

    .design-subtitle {
        color: var(--ds-text-muted);
        max-width: 1000px;
        margin-inline: auto;
        margin-bottom: clamp(1.75rem, 1.4rem + 1.5vw, 2.75rem);
    }

    /* ============================================
        TABS: Design / Build / Present
    ============================================ */
    .design-tabs {
        border-bottom: none;
        gap: clamp(1.5rem, 1rem + 2vw, 3.5rem);
        margin-bottom: clamp(2.5rem, 2rem + 2vw, 4rem);
        flex-wrap: wrap;
        row-gap: 0.75rem;
    }

    .design-tabs .nav-link {
        color: var(--ds-text-muted);
        font-size: var(--p);
        font-weight: 500;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        border-radius: 0;
        padding: 0.35rem 0.1rem 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition:
            color 0.25s ease,
            border-color 0.25s ease;
        white-space: nowrap;
    }

    .design-tabs .nav-link i {
        font-size: 0.95em;
    }

    .design-tabs .nav-link:hover {
        color: var(--ds-text);
    }

    .design-tabs .nav-link.active {
        color: var(--ds-text);
        border-bottom-color: var(--ds-accent);
    }

    /* ============================================
    FRAME / CANVAS SHOWCASE
    ============================================ */
    .design-frame-wrap {
        position: relative;
        max-width: 1180px;
        margin-inline: auto;
        padding-inline: 1rem;
    }

    .design-frame {
        position: relative;
        border-radius: 20px;
        padding: clamp(0.5rem, 0.4rem + 0.5vw, 0.85rem);
        background: linear-gradient(180deg,
                rgba(255, 255, 255, 0.06),
                rgba(255, 255, 255, 0.02));
        border: 1px solid var(--ds-border);
        box-shadow:
            0 30px 80px -20px rgba(0, 0, 0, 0.65),
            0 0 0 1px rgba(255, 255, 255, 0.02) inset;
        overflow: hidden;
    }

    .design-frame-img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 14px;
        background: var(--ds-canvas);
    }

    /* decorative corner accent, mirrors the diagonal marks in the reference */
    .design-deco-lines {
        position: absolute;
        right: -10px;
        bottom: -30px;
        width: 90px;
        height: 90px;
        background: repeating-linear-gradient(-45deg,
                rgba(255, 255, 255, 0.18) 0,
                rgba(255, 255, 255, 0.18) 1px,
                transparent 1px,
                transparent 10px);
        -webkit-mask-image: linear-gradient(-45deg, black 40%, transparent 75%);
        mask-image: linear-gradient(-45deg, black 40%, transparent 75%);
        pointer-events: none;
    }

    /* ============================================
        MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .design-frame-wrap {
            max-width: 1080px;
        }
    }

    @media (max-width: 1599.98px) {
        .design-frame-wrap {
            max-width: 960px;
        }
    }

    @media (max-width: 1399.98px) {
        .design-frame-wrap {
            max-width: 880px;
        }
    }

    @media (max-width: 1199.98px) {
        .design-section {
            padding-block: 3.5rem;
        }

        .design-frame-wrap {
            max-width: 720px;
        }
    }

    @media (max-width: 991.98px) {
        .design-frame-wrap {
            max-width: 100%;
        }

        .design-tabs {
            gap: 1.75rem;
        }
    }

    @media (max-width: 767.98px) {
        .design-section {
            padding-block: 3rem;
        }

        .design-tabs {
            gap: 1.25rem;
            margin-bottom: 2rem;
        }

        .design-tabs .nav-link {
            font-size: var(--p-small);
            padding-bottom: 0.65rem;
        }

        .design-frame {
            border-radius: 16px;
            padding: 0.4rem;
        }

        .design-frame-img {
            border-radius: 11px;
        }
    }

    @media (max-width: 575.98px) {
        .design-heading-wrap {
            padding-inline: 0.5rem;
        }

        .design-tabs {
            gap: 1rem;
        }

        .design-tabs .nav-link {
            gap: 0.35rem;
        }

        .design-deco-lines {
            display: none !important;
        }
    }

    @media (max-width: 479.98px) {
        .design-tabs {
            column-gap: 0.85rem;
            row-gap: 0.6rem;
        }

        .design-tabs .nav-link {
            font-size: var(--caption);
        }

        .design-frame {
            border-radius: 12px;
            padding: 0.3rem;
        }

        .design-frame-img {
            border-radius: 8px;
        }
    }

    @media (max-width: 359.98px) {
        .design-tabs .nav-link span {
            display: none;
        }
    }

    /* ============================================
        SERVICE CARDS (inside the dark design section)
    ============================================ */
    .ds-svc-grid {
        max-width: 1100px;
        margin-inline: auto;
        margin-top: clamp(1.5rem, 1.2rem + 1.2vw, 2.5rem);
    }

    .ds-svc-card {
        --svc-accent: var(--ds-accent);
        display: flex;
        align-items: flex-start;
        gap: 1.15rem;
        height: 100%;
        padding: 1.5rem 1.5rem;
        background: rgba(255, 255, 255, 0.035);
        border: 1px solid var(--ds-border);
        border-left: 3px solid var(--svc-accent);
        border-radius: 16px;
        text-align: left;
        transition:
            transform 0.25s ease,
            background 0.25s ease,
            border-color 0.25s ease;
    }

    .ds-svc-card:hover {
        transform: translateY(-4px);
        background: rgba(255, 255, 255, 0.06);
    }

    .ds-svc-icon {
        flex: 0 0 52px;
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: var(--svc-accent);
        background: color-mix(in srgb, var(--svc-accent) 16%, transparent);
    }

    .ds-svc-title {
        color: var(--ds-text);
        font-weight: 700;
        margin-bottom: 0.45rem;
    }

    .ds-svc-body .ds-svc-text {
        color: var(--ds-text-muted);
        margin-bottom: 0;
    }

    .ds-svc-1 {
        --svc-accent: #6d86ff;
    }

    .ds-svc-2 {
        --svc-accent: #22c55e;
    }

    .ds-svc-3 {
        --svc-accent: #a78bfa;
    }

    .ds-svc-4 {
        --svc-accent: #f59e42;
    }

    .ds-svc-5 {
        --svc-accent: #ef4b4b;
    }

    .ds-svc-6 {
        --svc-accent: #2dd4bf;
    }

    @media (max-width: 575.98px) {
        .ds-svc-card {
            padding: 1.25rem 1.1rem;
            gap: 0.9rem;
        }

        .ds-svc-icon {
            flex-basis: 44px;
            width: 44px;
            height: 44px;
            font-size: 1.1rem;
        }
    }


    /* ============================================
    RESPONSIVE TYPOGRAPHY SCALE
    ============================================ */
    :root {
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;
        --ls-heading: -0.02em;

        /* Design tokens for this section */
        --ow-bg: #f3f5fb;
        --ow-text: #14162a;
        --ow-muted: #6b7086;
        --ow-blue: #3d7bfa;
        --ow-purple: #8b5cf6;
        --ow-card-bg: #ffffff;
        --ow-border: #ecedf4;
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
        font-family:
            "Inter",
            system-ui,
            -apple-system,
            sans-serif;
    }

    /* ============================================
        SECTION WRAPPER
    ============================================ */
    .ow-section {
        background: var(--ow-bg);
        position: relative;
        overflow: hidden;
        padding-block: clamp(3.5rem, 3rem + 3vw, 6rem);
    }

    .ow-dots {
        position: absolute;
        top: 2.5rem;
        left: 2rem;
        width: 90px;
        height: 90px;
        background-image: radial-gradient(circle,
                #c6cbe0 1.3px,
                transparent 1.3px);
        background-size: 14px 14px;
        opacity: 0.7;
        pointer-events: none;
    }

    .ow-blob {
        position: absolute;
        top: -60px;
        right: -80px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%,
                rgba(139, 92, 246, 0.18),
                rgba(61, 123, 250, 0.05) 70%);
        pointer-events: none;
    }

    /* ============================================
        HEADER
    ============================================ */
    .ow-header {
        max-width: 1000px;
        margin-inline: auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .ow-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: #ffffff;
        color: var(--ow-blue);
        font-size: var(--caption);
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        padding: 0.4rem 0.95rem;
        border-radius: 999px;
        box-shadow: 0 6px 18px rgba(61, 123, 250, 0.15);
        margin-bottom: 1.1rem;
    }

    .ow-title {
        color: var(--ow-text);
        margin-bottom: 0.85rem;
    }

    .ow-title .accent {
        background: linear-gradient(90deg, var(--ow-blue), var(--ow-purple));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .ow-header .ow-subtitle {
        color: var(--ow-muted);
        margin-bottom: clamp(2rem, 1.75rem + 1.5vw, 3.25rem);
    }

    /* ============================================
        CAROUSEL
    ============================================ */
    .ow-carousel-wrap {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin-inline: auto;
        padding-inline: 3rem;
    }

    .ow-track {
        display: flex;
        gap: 1.25rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        padding-block: 0.5rem 1rem;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .ow-track::-webkit-scrollbar {
        display: none;
    }

    .ow-card {
        flex: 0 0 auto;
        width: calc((100% - 5 * 1.25rem) / 5);
        scroll-snap-align: start;
        background: var(--ow-card-bg);
        border: 1px solid var(--ow-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px -18px rgba(20, 22, 42, 0.15);
        display: flex;
        flex-direction: column;
    }

    .ow-card-media {
        position: relative;
        aspect-ratio: 4 / 3;
        overflow: hidden;
    }

    .ow-card-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .ow-card-icon {
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 50%);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1rem;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.18);
        border: 3px solid #fff;
    }

    .ow-card-body {
        padding: 1.75rem 1.1rem 1.25rem;
        text-align: center;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .ow-card-eyebrow {
        font-size: var(--caption);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 0.4rem;
    }

    .ow-card-title {
        font-size: var(--h6);
        font-weight: 700;
        color: var(--ow-text);
        margin-bottom: 0.5rem;
    }

    .ow-card-desc {
        font-size: var(--p-small);
        color: var(--ow-muted);
        margin-bottom: 1rem;
        flex: 1;
    }

    .ow-card-link {
        font-size: var(--p-small);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        justify-content: center;
        transition: gap 0.2s ease;
    }

    .ow-card-link:hover {
        gap: 0.6rem;
    }

    /* per-card accent colors */
    .ow-card[data-accent="blue"] .ow-card-icon {
        background: #3d7bfa;
    }

    .ow-card[data-accent="blue"] .ow-card-eyebrow,
    .ow-card[data-accent="blue"] .ow-card-link {
        color: #3d7bfa;
    }

    .ow-card[data-accent="purple"] .ow-card-icon {
        background: #7c5cf0;
    }

    .ow-card[data-accent="purple"] .ow-card-eyebrow,
    .ow-card[data-accent="purple"] .ow-card-link {
        color: #7c5cf0;
    }

    .ow-card[data-accent="green"] .ow-card-icon {
        background: #4bbf59;
    }

    .ow-card[data-accent="green"] .ow-card-eyebrow,
    .ow-card[data-accent="green"] .ow-card-link {
        color: #4bbf59;
    }

    .ow-card[data-accent="pink"] .ow-card-icon {
        background: #ef4f8b;
    }

    .ow-card[data-accent="pink"] .ow-card-eyebrow,
    .ow-card[data-accent="pink"] .ow-card-link {
        color: #ef4f8b;
    }

    .ow-card[data-accent="navy"] .ow-card-icon {
        background: #234a91;
    }

    .ow-card[data-accent="navy"] .ow-card-eyebrow,
    .ow-card[data-accent="navy"] .ow-card-link {
        color: #234a91;
    }

    .ow-card[data-accent="orange"] .ow-card-icon {
        background: #f0a13b;
    }

    .ow-card[data-accent="orange"] .ow-card-eyebrow,
    .ow-card[data-accent="orange"] .ow-card-link {
        color: #f0a13b;
    }

    /* ============================================
    NAV ARROWS
    ============================================ */
    .ow-nav-btn {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #ffffff;
        border: 1px solid var(--ow-border);
        color: var(--ow-text);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 24px -8px rgba(20, 22, 42, 0.25);
        z-index: 2;
        transition:
            background 0.2s ease,
            color 0.2s ease;
    }

    .ow-nav-btn:hover {
        background: var(--ow-text);
        color: #fff;
    }

    .ow-nav-prev {
        left: -4px;
    }

    .ow-nav-next {
        right: -4px;
    }

    /* ============================================
    CTA BUTTON
    ============================================ */
    .ow-cta-wrap {
        text-align: center;
        margin-top: clamp(2rem, 1.6rem + 1.2vw, 2.75rem);
        position: relative;
        z-index: 1;
    }

    .ow-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: linear-gradient(90deg, var(--ow-blue), var(--ow-purple));
        color: #fff;
        font-weight: 600;
        font-size: var(--p);
        padding: 0.85rem 1.9rem;
        border-radius: 999px;
        text-decoration: none;
        box-shadow: 0 14px 30px -10px rgba(124, 92, 240, 0.55);
        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .ow-cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 34px -8px rgba(124, 92, 240, 0.6);
        color: #fff;
    }

    /* ============================================
    MEDIA QUERIES
    ============================================ */
    @media (max-width: 1919.98px) {
        .ow-card {
            width: calc((100% - 5 * 1.25rem) / 4);
        }
    }

    @media (max-width: 1599.98px) {
        .ow-card {
            width: calc((100% - 4 * 1.25rem) / 4);
        }
    }

    @media (max-width: 1399.98px) {
        .ow-carousel-wrap {
            max-width: 1140px;
        }

        .ow-card {
            width: calc((100% - 3 * 1.25rem) / 3);
        }
    }

    @media (max-width: 1199.98px) {
        .ow-carousel-wrap {
            padding-inline: 2.75rem;
        }

        .ow-card {
            width: calc((100% - 2 * 1.25rem) / 2.6);
        }
    }

    @media (max-width: 991.98px) {
        .ow-card {
            width: calc((100% - 1.25rem) / 2);
        }

        .ow-nav-btn {
            width: 38px;
            height: 38px;
        }
    }

    @media (max-width: 767.98px) {
        .ow-carousel-wrap {
            padding-inline: 2.25rem;
        }

        .ow-card {
            width: calc((100% - 1.25rem) / 1);
        }

        .ow-dots {
            display: none;
        }
    }

    @media (max-width: 575.98px) {
        .ow-carousel-wrap {
            padding-inline: 1.9rem;
        }

        .ow-card {
            width: 100%;
        }

        .ow-nav-btn {
            width: 34px;
            height: 34px;
        }

        .ow-nav-prev {
            left: -2px;
        }

        .ow-nav-next {
            right: -2px;
        }
    }

    @media (max-width: 479.98px) {
        .ow-card {
            width: 100%;
        }

        .ow-card-body {
            padding: 1.4rem 0.9rem 1.1rem;
        }
    }

    @media (max-width: 359.98px) {
        .ow-card {
            width: 100%;
        }
    }

    /* ============================================
        ADDED SECTIONS (reuse the existing section styles above)
    ============================================ */

    /* Inline text links inside paragraphs */
    .tf-text-link {
        color: inherit;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-thickness: 1px;
        text-underline-offset: 3px;
        transition: color 0.2s ease;
    }

    .tf-text-link:hover {
        color: var(--wc-accent);
    }

    .design-section .tf-text-link:hover {
        color: var(--ds-text);
    }

    /* Contact details in the closing CTA */
    .tf-contact-line {
        color: var(--ds-text);
        margin-bottom: 0.6rem;
    }

    /* FAQ accordion (styled like the .wc-card cards) */
    .tf-faq-list {
        max-width: 1000px;
        margin: clamp(2rem, 1.6rem + 1.5vw, 3rem) auto 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: left;
    }

    .tf-faq-item {
        background: var(--wc-card-bg);
        border: 1px solid var(--wc-card-border);
        border-radius: 18px;
        box-shadow: 0 14px 30px -16px rgba(20, 20, 43, 0.12);
        overflow: hidden;
        transition: box-shadow 0.25s ease;
    }

    .tf-faq-item[open] {
        box-shadow: 0 22px 40px -16px rgba(20, 20, 43, 0.2);
    }

    .tf-faq-item summary {
        list-style: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1.25rem 1.5rem;
    }

    .tf-faq-item summary::-webkit-details-marker {
        display: none;
    }

    .tf-faq-q {
        color: var(--wc-heading);
        font-weight: 700;
        margin: 0;
    }

    .tf-faq-icon {
        flex: 0 0 auto;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #e7edff;
        color: var(--wc-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        transition: transform 0.25s ease;
    }

    .tf-faq-item[open] .tf-faq-icon {
        transform: rotate(45deg);
    }

    .tf-faq-answer {
        padding: 0 1.5rem 1.35rem;
    }

    .tf-faq-answer p {
        color: var(--wc-body);
        margin: 0;
    }

    @media (max-width: 575.98px) {
        .tf-faq-item {
            border-radius: 16px;
        }

        .tf-faq-item summary {
            padding: 1rem 1.1rem;
        }

        .tf-faq-answer {
            padding: 0 1.1rem 1.1rem;
        }

        .tf-faq-icon {
            width: 32px;
            height: 32px;
        }
    }

    /* ============================================
        CONSISTENT GAP BETWEEN SECTIONS
        (same scale as .why-choose-section / .expert-designers-section)
    ============================================ */
    .bento-section,
    .design-tools-section,
    .expert-designers-section,
    .why-choose-section,
    .design-section,
    .ow-section {
        padding-block: clamp(3.5rem, 3rem + 3vw, 6.5rem);
    }

    .di-hero-section {
        padding-bottom: clamp(3.5rem, 3rem + 3vw, 6.5rem);
    }

    @media (max-width: 1919.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 6rem;
        }

        .di-hero-section {
            padding-bottom: 6rem;
        }
    }

    @media (max-width: 1599.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 5.5rem;
        }

        .di-hero-section {
            padding-bottom: 5.5rem;
        }
    }

    @media (max-width: 1399.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 5rem;
        }

        .di-hero-section {
            padding-bottom: 5rem;
        }
    }

    @media (max-width: 1199.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 4.5rem;
        }

        .di-hero-section {
            padding-bottom: 4.5rem;
        }
    }

    @media (max-width: 991.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 4rem;
        }

        .di-hero-section {
            padding-bottom: 4rem;
        }
    }

    @media (max-width: 767.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 3.5rem;
        }

        .di-hero-section {
            padding-bottom: 3.5rem;
        }
    }

    @media (max-width: 575.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 3rem;
        }

        .di-hero-section {
            padding-bottom: 3rem;
        }
    }

    @media (max-width: 479.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 2.5rem;
        }

        .di-hero-section {
            padding-bottom: 2.5rem;
        }
    }

    @media (max-width: 359.98px) {

        .bento-section,
        .design-tools-section,
        .expert-designers-section,
        .why-choose-section,
        .design-section,
        .ow-section {
            padding-block: 2.25rem;
        }

        .di-hero-section {
            padding-bottom: 2.25rem;
        }
    }
</style>

<section class="di-hero-section">
    <div class="container">
        <h1 class="di-heading">
            <span class="line">UI UX Design Services in Mumbai</span>
            <span class="line">That Turn Visitors into</span>
            <span class="line glow-word">Customers</span>
        </h1>

        <p class="p-large di-lead">
            Technofra provides UI UX Design Services in Mumbai for brands that
            want websites and apps people actually enjoy using. Too often, a
            business pays for a site, gets the traffic, and then loses visitors to
            confusing screens or a long checkout. We fix that by understanding how
            your users think and designing interfaces that are clear, quick and
            easy to trust.
            Our designers work right beside our developers in Kandivali West, so
            what you approve in Figma is exactly what goes live.
        </p>

        <!-- <p class="p-large di-lead">
            Our designers work right beside our developers in Kandivali West, so
            what you approve in Figma is exactly what goes live.
        </p> -->

        <a href="contact.php" class="di-cta">
            Contact Us
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

<section class="bento-section">
    <div class="container-fluid px-3 px-md-4 px-lg-5">
        <div class="bento-grid">
            <div class="bento-tile bento-photo">
                <div class="bento-image-placeholder">
                    <img src="./assets/images/about/ui1.jpg" alt="">
                </div>
            </div>

            <div class="bento-col-2">
                <div class="bento-tile bento-figma">
                    <img src="./assets/images/about/ui2.jpg" alt="">
                </div>

                <div class="bento-tile bento-agency">
                    <h3 class="agency-title mb-0">UI/UX</h3>
                    <p class="p-large agency-sub mb-0">Design Agency</p>
                    <div class="dot-pattern">
                        <span></span><span></span><span></span><span></span><span></span> <span></span><span></span><span></span><span></span><span></span> <span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>

            <div class="bento-col-3">
                <div class="bento-tile bento-wave">
                    <div class="bento-image-placeholder tint-purple">
                        <img src="./assets/images/about/ui-3.jpg" alt="">
                    </div>
                </div>

                <div class="bento-icons">
                    <div class="bento-icon-tile">
                        <i class="fa-solid fa-lightbulb"></i>
                        <span>Creative</span>
                    </div>
                    <div class="bento-icon-tile">
                        <i class="fa-solid fa-diagram-project"></i>
                        <span>Prototype</span>
                    </div>
                    <div class="bento-icon-tile">
                        <i class="fa-solid fa-vector-square"></i>
                        <span>Wireframe</span>
                    </div>
                    <div class="bento-icon-tile">
                        <i class="fa-solid fa-table-cells"></i>
                        <span>Layout</span>
                    </div>
                </div>
            </div>

            <div class="bento-col-4">
                <div class="bento-tile">
                    <div class="bento-image-placeholder tint-blue">
                        <img src="./assets/images/about/ui-4.jpg" alt="">
                    </div>
                </div>
                <div class="bento-tile">
                    <div class="bento-image-placeholder tint-cyan">
                        <img src="./assets/images/about/ui-5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="design-tools-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <span class="dt-eyebrow p-small">
                    <span class="dot"></span>
                    OUR CREATIVE WORKFLOW
                </span>

                <h2 class="dt-heading">
                    Tools We <span class="accent">Use</span>
                </h2>

                <p class="p-large dt-subtext mt-3">
                    We design in Figma for wireframes, UI and prototypes, and use
                    Adobe Illustrator, InDesign, After Effects, Premiere Pro and
                    Photopea for icons, layouts and motion. Because Figma runs in the
                    browser, you can review and comment on designs without installing
                    anything.
                </p>
            </div>
        </div>

        <div
            class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 g-md-4 justify-content-center mt-4 mt-md-5">
            <!-- Photopea -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-photopea">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <p class="dt-tool-name mb-0">Photopea</p>
                    <span class="dt-tool-tag" style="color: #10a684">Design</span>
                    <a
                        href="#"
                        class="dt-arrow-btn dt-photopea-link"
                        aria-label="Photopea">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- InDesign -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-indesign">
                        <span>Id</span>
                    </div>
                    <p class="dt-tool-name mb-0">InDesign</p>
                    <span class="dt-tool-tag" style="color: #d81b60">Layout</span>
                    <a
                        href="#"
                        class="dt-arrow-btn dt-indesign-link"
                        aria-label="InDesign">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Figma -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-figma">
                        <i class="fa-brands fa-figma"></i>
                    </div>
                    <p class="dt-tool-name mb-0">Figma</p>
                    <span class="dt-tool-tag" style="color: #2f7cf6">Prototype</span>
                    <a href="#" class="dt-arrow-btn dt-figma-link" aria-label="Figma">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- After Effects -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-ae">
                        <span>Ae</span>
                    </div>
                    <p class="dt-tool-name mb-0">After Effects</p>
                    <span class="dt-tool-tag" style="color: #5b34c9">Motion</span>
                    <a
                        href="#"
                        class="dt-arrow-btn dt-ae-link"
                        aria-label="After Effects">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Illustrator -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-ai">
                        <span>Ai</span>
                    </div>
                    <p class="dt-tool-name mb-0">Illustrator</p>
                    <span class="dt-tool-tag" style="color: #e08900">Illustration</span>
                    <a
                        href="#"
                        class="dt-arrow-btn dt-ai-link"
                        aria-label="Illustrator">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Premiere Pro -->
            <div class="col">
                <div class="dt-card">
                    <div class="dt-icon-wrap dt-pr">
                        <span>Pr</span>
                    </div>
                    <p class="dt-tool-name mb-0">Premiere Pro</p>
                    <span class="dt-tool-tag" style="color: #6a25c9">Video</span>
                    <a
                        href="#"
                        class="dt-arrow-btn dt-pr-link"
                        aria-label="Premiere Pro">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="expert-designers-section">
    <div class="ed-dot-grid">
        <span></span><span></span><span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>

    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Image column -->
            <div class="col-12 col-lg-6">
                <div class="position-relative">
                    <div class="ed-image-wrap">
                        <img src="./assets/images/about/ux-design-hero.png" alt="Designer sketching mobile wireframes next to a laptop with UI screens">
                    </div>

                    <span class="ed-badge ed-badge-wireframe p-small">
                        <span class="ed-badge-icon"><i class="fa-regular fa-image"></i></span>
                        Wireframe
                    </span>

                    <span class="ed-badge ed-badge-prototype p-small">
                        <span class="ed-badge-icon"><i class="fa-solid fa-diagram-project"></i></span>
                        Prototype
                    </span>
                </div>
            </div>

            <!-- Text column -->
            <div class="col-12 col-lg-6">
                <span class="ed-eyebrow caption">
                    <span class="dot"></span>
                    UI/UX DESIGN
                </span>

                <h2 class="ed-heading">What Are UI UX Design Services?</h2>

                <p class="p ed-lead">
                    UX decides what goes where and why; UI decides how it looks and feels.
                </p>

                <!-- Feature cards -->
                <div class="row g-3 g-md-4">
                    <div class="col-12 col-sm-4">
                        <div class="ed-feature-card">
                            <div class="ed-feature-icon">
                                <i class="fa-solid fa-pen-nib"></i>
                            </div>
                            <h5 class="ed-feature-title">UI (user interface)</h5>
                            <p class="p-small ed-feature-text">UI (user interface) is the visible part: layout, colours, fonts and buttons.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="ed-feature-card">
                            <div class="ed-feature-icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <h5 class="ed-feature-title">UX (user experience)</h5>
                            <p class="p-small ed-feature-text">UX (user experience) is the thinking part: research, user journeys and page structure.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="ed-feature-card">
                            <div class="ed-feature-icon">
                                <i class="fa-regular fa-window-restore"></i>
                            </div>
                            <h5 class="ed-feature-title">You need both</h5>
                            <p class="p-small ed-feature-text">You need both, because a beautiful screen that's hard to use still loses customers.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="why-choose-section">
    <div class="wc-dot-grid top-left">
        <span></span><span></span><span></span><span></span><span></span><span></span> <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
    <div class="wc-dot-grid right">
        <span></span><span></span><span></span><span></span><span></span><span></span> <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <span class="wc-eyebrow caption">WHY CHOOSE US</span>

                <h2 class="wc-heading">
                    Why Choose Technofra as Your<br> <span class="accent">UI UX Design Agency in Mumbai</span>
                </h2>
            </div>
        </div>

        <!-- Cards -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mt-3 justify-content-center">
            <!-- Card 1 -->
            <div class="col">
                <div class="wc-card wc-card-1">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h5 class="wc-card-title">Design and development under one roof.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        We also build websites, Android apps and iOS apps, so every
                        design is realistic to build.
                    </p>
                    <span class="wc-number">01</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="wc-card wc-card-2">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h5 class="wc-card-title">Research before pixels.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        We study your goals, analytics and competitors before we start
                        designing.
                    </p>
                    <span class="wc-number">02</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="wc-card wc-card-3">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h5 class="wc-card-title">Mobile-first thinking.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        We design for phones first, then scale up.
                    </p>
                    <span class="wc-number">03</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="wc-card wc-card-4">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h5 class="wc-card-title">Built with search in mind.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        We work with our SEO team so a redesign never wipes out your
                        rankings.
                    </p>
                    <span class="wc-number">04</span>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="wc-card wc-card-1">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h5 class="wc-card-title">A local team you can meet.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        Call us, visit the office or sit with our designers.
                    </p>
                    <span class="wc-number">05</span>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="wc-card wc-card-2">
                    <div class="wc-icon-wrap">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h5 class="wc-card-title">Support after launch.</h5>
                    <span class="wc-title-rule"></span>
                    <p class="p-small wc-card-text">
                        Our maintenance team keeps everything updated and running
                        smoothly.
                    </p>
                    <span class="wc-number">06</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="design-section">
    <div class="container">
        <div class="design-heading-wrap text-center">
            <h2 class="design-title">
                Our UI UX Design Services
            </h2>
        </div>

        <!-- Our UI UX Design Services: service cards -->
        <div class="row row-cols-1 row-cols-lg-2 g-3 g-md-4 ds-svc-grid">
            <div class="col">
                <div class="ds-svc-card ds-svc-1">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">UX Research and Strategy</h3>
                        <p class="p-small ds-svc-text">
                            Stakeholder conversations, competitor reviews, user personas and
                            journey maps that guide every design decision.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="ds-svc-card ds-svc-2">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-display"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">Wireframing and Website UI Design</h3>
                        <p class="p-small ds-svc-text">
                            We plan the structure with simple wireframes, then design responsive
                            websites that guide visitors toward one clear action.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="ds-svc-card ds-svc-3">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">Mobile App UI UX Design</h3>
                        <p class="p-small ds-svc-text">
                            Onboarding, navigation and core flows that follow Android and iOS
                            guidelines and feel natural on each platform.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="ds-svc-card ds-svc-4">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">E-commerce UX Design</h3>
                        <p class="p-small ds-svc-text">
                            Product pages, filters and checkout designed to remove friction and
                            lift sales, built on <a href="shopify-development.php" class="tf-text-link">Shopify</a>
                            or <a href="wordpress.php" class="tf-text-link">WordPress</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="ds-svc-card ds-svc-5">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">Dashboard, SaaS and CRM Interface Design</h3>
                        <p class="p-small ds-svc-text">
                            Data-heavy screens that are easy to scan and quick to work in, backed
                            by our <a href="crm-development.php" class="tf-text-link">CRM development services</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="ds-svc-card ds-svc-6">
                    <div class="ds-svc-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <div class="ds-svc-body">
                        <h3 class="ds-svc-title h5">Prototypes, Usability Testing and UX Audits</h3>
                        <p class="p-small ds-svc-text">
                            Clickable Figma prototypes tested with real users, plus
                            screen-by-screen audits of existing products with a prioritised list
                            of fixes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our UI UX Design Process -->
<section class="expert-designers-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h2 class="wc-heading">
                    Our UI UX Design <span class="accent">Process</span>
                </h2>

                <p class="p-large wc-subtext mt-3">
                    We keep the process simple and open, so you always know where things
                    stand and what comes next.
                </p>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 g-md-4 mt-3 justify-content-center">
            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-compass"></i></div>
                    <h5 class="ed-feature-title">Discover.</h5>
                    <p class="p-small ed-feature-text">We learn about your business, goals, users and competitors.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-list-check"></i></div>
                    <h5 class="ed-feature-title">Define.</h5>
                    <p class="p-small ed-feature-text">We turn that research into personas, user journeys and a sitemap.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-vector-square"></i></div>
                    <h5 class="ed-feature-title">Wireframe.</h5>
                    <p class="p-small ed-feature-text">We sketch the layout and flow of each key screen.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-pen-nib"></i></div>
                    <h5 class="ed-feature-title">Design.</h5>
                    <p class="p-small ed-feature-text">We create the visual interface using your brand colours, fonts and components.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-diagram-project"></i></div>
                    <h5 class="ed-feature-title">Prototype.</h5>
                    <p class="p-small ed-feature-text">We link the screens into a clickable prototype you can try yourself.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-user-check"></i></div>
                    <h5 class="ed-feature-title">Test.</h5>
                    <p class="p-small ed-feature-text">We check usability with real users and refine anything that isn't working.</p>
                </div>
            </div>

            <div class="col">
                <div class="ed-feature-card">
                    <div class="ed-feature-icon"><i class="fa-solid fa-handshake"></i></div>
                    <h5 class="ed-feature-title">Hand off and support.</h5>
                    <p class="p-small ed-feature-text">We share developer-ready files and stay involved while the product is built.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ow-section">
    <div class="ow-dots"></div>
    <div class="ow-blob"></div>

    <div class="container">
        <div class="ow-header">
            <span class="ow-badge"><i class="fa-solid fa-bolt"></i> Our Work</span>
            <h2 class="ow-title">
                Projects We've <span class="accent">Worked On</span>
            </h2>
            <p class="ow-subtitle p-large">
                Our team has designed for e-commerce stores, a telecom brand, a
                transport and logistics platform, a sports equipment brand and
                several promotional campaigns. That mix is useful: an idea that
                works in retail often improves a B2B dashboard, and the other way
                round. You can see some of this work in our portfolio.
            </p>
        </div>

        <div class="ow-carousel-wrap">
            <button
                class="ow-nav-btn ow-nav-prev"
                type="button"
                aria-label="Previous projects">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="ow-track" id="owTrack">
                <article class="ow-card" data-accent="blue">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/aeritx.jpg"
                            alt="Corporate website mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-globe"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">Aeritx</span>
                        <h3 class="ow-card-title">E-Commerce Website</h3>
                        <p class="ow-card-desc">
                            Modern e-commerce website with responsive design and smooth
                            navigation.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="ow-card" data-accent="green">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/ish.jpg"
                            alt="Real estate platform mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-house"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">ISH International</span>
                        <h3 class="ow-card-title">E-Commerce Platform</h3>
                        <p class="ow-card-desc">
                            A user-friendly e-commerce platform with a focus on seamless
                            shopping experience and intuitive design.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="ow-card" data-accent="navy">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/karantelecom.jpg"
                            alt="Fashion e-commerce mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-bag-shopping"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">Karantelecom</span>
                        <h3 class="ow-card-title">Technology</h3>
                        <p class="ow-card-desc">
                            Innovative technology solutions with a focus on user experience
                            and functionality.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="ow-card" data-accent="pink">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/link-promotion.jpg"
                            alt="Lifestyle brand mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-heart"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">Link Promotion</span>
                        <h3 class="ow-card-title">Promotional Campaign</h3>
                        <p class="ow-card-desc">
                            Engaging promotional campaign design that captures attention and
                            drives conversions.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="ow-card" data-accent="navy">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/transhubtech.jpg"
                            alt="Fintech mobile app mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">Transhubtech</span>
                        <h3 class="ow-card-title">Transportation Platform</h3>
                        <p class="ow-card-desc">
                            User-friendly transportation platform with intuitive navigation
                            and responsive design.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="ow-card" data-accent="orange">
                    <div class="ow-card-media">
                        <img
                            src="./assets/images/about/files/urbon.jpg"
                            alt="Pet food website mockup" />
                        <span class="ow-card-icon"><i class="fa-solid fa-paw"></i></span>
                    </div>
                    <div class="ow-card-body">
                        <span class="ow-card-eyebrow">Urbon Sports</span>
                        <h3 class="ow-card-title">Sports Equipment</h3>
                        <p class="ow-card-desc">
                            Engaging sports equipment website with a focus on user experience
                            and product showcase.
                        </p>
                        <a href="#" class="ow-card-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <button
                class="ow-nav-btn ow-nav-next"
                type="button"
                aria-label="Next projects">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="ow-cta-wrap">
            <a href="portfolios.php" class="ow-cta-btn">View All Projects <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="why-choose-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h2 class="wc-heading">
                    Frequently Asked <span class="accent">Questions</span>
                </h2>
            </div>
        </div>



        <div class="tf-faq-list">


            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">How Good UI UX Design Helps Your SEO and Marketing</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">Google rewards fast, mobile-friendly, stable pages, and visitors who find what they need stay longer. A clean heading structure also helps search engines and AI tools like ChatGPT, Gemini and Google's AI Overviews understand your page. That's why our design work pairs naturally with our <a href="seo.php" class="tf-text-link">SEO</a>, <a href="digital-marketing.php" class="tf-text-link">digital marketing</a> and <a href="content-marketing.php" class="tf-text-link">content marketing</a> services, and why a well-designed landing page gets more leads from the same ad spend.</p>
                </div>
            </details>

            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">A UI UX Design Company in Mumbai Serving Clients Across India</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">We're based in Mumbai but work with startups, small businesses and established brands across India. If you're looking for a UI UX Design Agency in India that can also handle development and marketing, we'd be glad to talk.</p>
                </div>
            </details>


            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">How much do UI UX Design Services in Mumbai cost?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">It depends on the number of screens, the platform, the research involved and whether development is included. Send us your requirements for an exact quote.</p>
                </div>
            </details>



            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">What is the difference between UI and UX design?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">UX is how a product works: flow, structure and ease of use. UI is how it looks: colours, typography and visual style. A good product needs both.</p>
                </div>
            </details>


            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">How long does a UI UX design project take?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">A small business website usually takes a few weeks; a full mobile app or SaaS product can take a couple of months.</p>
                </div>
            </details>

            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">Do you design apps for both Android and iOS?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">Yes. We follow each platform's guidelines, and our in-house developers can build for one platform or both.</p>
                </div>
            </details>

            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">Can you redesign my website without hurting my Google rankings?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">Yes. We plan redesigns with our SEO team, keep key URLs and content in place, and set up redirects where needed.</p>
                </div>
            </details>

            <details class="tf-faq-item">
                <summary>
                    <h3 class="tf-faq-q h5">Do you work with clients outside Mumbai?</h3>
                    <span class="tf-faq-icon"><i class="fa-solid fa-plus"></i></span>
                </summary>
                <div class="tf-faq-answer">
                    <p class="p-small">Yes. We work with businesses across India through video calls and shared Figma files.</p>
                </div>
            </details>






        </div>
    </div>
</section>


<script>
    const designTabs = document.querySelectorAll(".design-tabs .nav-link");
    const designPreviewImage = document.getElementById("designPreviewImage");

    designTabs.forEach((tab) => {
        tab.addEventListener("click", (event) => {
            event.preventDefault();

            designTabs.forEach((item) => {
                item.classList.remove("active");
                item.setAttribute("aria-selected", "false");
            });

            tab.classList.add("active");
            tab.setAttribute("aria-selected", "true");

            if (designPreviewImage) {
                designPreviewImage.src = tab.dataset.imageSrc;
                designPreviewImage.alt = tab.dataset.imageAlt;
            }
        });
    });
    const track = document.getElementById("owTrack");
    const prevBtn = document.querySelector(".ow-nav-prev");
    const nextBtn = document.querySelector(".ow-nav-next");

    function scrollByCard(direction) {
        const card = track.querySelector(".ow-card");
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        const distance = (card.getBoundingClientRect().width + gap) * direction;
        track.scrollBy({
            left: distance,
            behavior: "smooth"
        });
    }

    prevBtn.addEventListener("click", () => scrollByCard(-1));
    nextBtn.addEventListener("click", () => scrollByCard(1));
</script>

<?php include __DIR__ . '/footer.php'; ?>