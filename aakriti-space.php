<?php
$pageTitle = 'Aakriti Space Designs';
include __DIR__ . '/header.php';
?>

<!-- Bootstrap 5 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:ital@0;1&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
    /* ============================================
        RESPONSIVE TYPOGRAPHY SCALE
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

        /* Brand palette */
        --aakriti-plum: #a6538c;
        --aakriti-rose: #e8748a;
        --aakriti-coral: #ef8c6a;
        --aakriti-blue: #6d7fd6;
        --aakriti-gold: #e0a63c;
        --aakriti-ink: #2b2b30;
        --aakriti-muted: #6b6d76;
        --aakriti-cream: #fbf3ee;
        --aakriti-cream-2: #f7e9e2;
        --aakriti-border: #e9dcd4;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--aakriti-ink);
        background: #fff;
    }

    .aakriti-hero {
        position: relative;
        background: linear-gradient(180deg, var(--aakriti-cream) 0%, #fdf9f6 100%);
        overflow: hidden;
        padding-top: clamp(2.5rem, 1.5rem + 4vw, 5rem);
        padding-bottom: clamp(2.5rem, 1.5rem + 4vw, 5rem);
        padding-top: 174px;
    }

    /* decorative floating circle from reference design */
    .aakriti-hero .deco-circle {
        position: absolute;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #d7c2e0;
        opacity: .6;
        left: 46.5%;
        top: 62%;
        z-index: 1;
    }

    .aakriti-hero .deco-dots {
        position: absolute;
        left: 51%;
        bottom: 12%;
        width: 60px;
        height: 60px;
        background-image: radial-gradient(circle, #cbb9c2 1.5px, transparent 1.6px);
        background-size: 10px 10px;
        opacity: .5;
        z-index: 1;
    }

    /* ---------------- Left content column ---------------- */
    .aakriti-content {
        position: relative;
        z-index: 3;
        padding-top: 0.5rem;
    }

    .aakriti-logo {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: clamp(2rem, 1.5rem + 2.2vw, 3rem);
        letter-spacing: 0.02em;
        line-height: 1;
        margin-bottom: 0.35rem;
        display: inline-block;
    }

    .aakriti-logo span {
        display: inline-block;
    }

    .aakriti-logo .l1 {
        color: var(--aakriti-plum);
    }

    .aakriti-logo .l2 {
        color: var(--aakriti-rose);
    }

    .aakriti-logo .l3 {
        color: var(--aakriti-blue);
    }

    .aakriti-logo .l4 {
        color: var(--aakriti-plum);
    }

    .aakriti-logo .l5 {
        color: var(--aakriti-rose);
    }

    .aakriti-logo .l6 {
        color: var(--aakriti-coral);
    }

    .aakriti-logo .l7 {
        color: var(--aakriti-gold);
    }

    .aakriti-logo-sub {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: var(--caption);
        letter-spacing: 0.45em;
        color: var(--aakriti-ink);
        margin-bottom: clamp(1.25rem, 1rem + 1vw, 2rem);
        padding-left: 2px;
    }

    .aakriti-eyebrow {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        margin-bottom: clamp(1rem, 0.8rem + 0.8vw, 1.5rem);
    }

    .aakriti-eyebrow .line {
        height: 1px;
        width: 42px;
        background: var(--aakriti-rose);
        opacity: .55;
        flex: 0 0 auto;
    }

    .aakriti-eyebrow .line.grow {
        flex: 1 1 auto;
        max-width: 90px;
    }

    .aakriti-eyebrow span.label {
        font-size: var(--caption);
        font-weight: 600;
        letter-spacing: 0.18em;
        color: var(--aakriti-rose);
        white-space: nowrap;
    }

    .aakriti-heading {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: var(--aakriti-ink);
        margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
    }

    .aakriti-heading .grad {
        font-style: italic;
        background: linear-gradient(90deg, var(--aakriti-rose), var(--aakriti-coral));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .aakriti-desc {
        font-size: var(--p-large);
        line-height: var(--lh-body);
        color: var(--aakriti-muted);
        max-width: 46ch;
        margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
    }

    /* ---------------- Buttons ---------------- */
    .aakriti-cta-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: clamp(2rem, 1.6rem + 1.6vw, 3rem);
    }

    .btn-aakriti-primary {
        font-size: var(--p);
        font-weight: 500;
        color: #fff;
        background: linear-gradient(90deg, var(--aakriti-plum), #b56a99);
        border: none;
        border-radius: 6px;
        padding: 0.95rem 1.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.7rem;
        white-space: nowrap;
        transition: transform .2s ease, box-shadow .2s ease, opacity .2s ease;
        box-shadow: 0 8px 20px -8px rgba(166, 83, 140, 0.55);
    }

    .btn-aakriti-primary:hover,
    .btn-aakriti-primary:focus-visible {
        color: #fff;
        transform: translateY(-2px);
        opacity: .95;
        box-shadow: 0 12px 24px -8px rgba(166, 83, 140, 0.65);
    }

    .btn-aakriti-primary i {
        transition: transform .2s ease;
    }

    .btn-aakriti-primary:hover i {
        transform: translateX(3px);
    }

    .btn-aakriti-outline {
        font-size: var(--p);
        font-weight: 500;
        color: var(--aakriti-ink);
        background: #fff;
        border: 1px solid var(--aakriti-border);
        border-radius: 6px;
        padding: 0.95rem 1.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.7rem;
        white-space: nowrap;
        transition: transform .2s ease, border-color .2s ease, background .2s ease;
    }

    .btn-aakriti-outline:hover,
    .btn-aakriti-outline:focus-visible {
        color: var(--aakriti-ink);
        border-color: var(--aakriti-gold);
        background: #fffdfb;
        transform: translateY(-2px);
    }

    .btn-aakriti-outline i {
        transition: transform .2s ease;
    }

    .btn-aakriti-outline:hover i {
        transform: translateX(3px);
    }

    /* ---------------- Feature strip ---------------- */
    .aakriti-features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 0.85rem;
    }

    .aakriti-feature {
        background: #fff;
        border: 1px solid var(--aakriti-border);
        border-radius: 10px;
        padding: 0.9rem 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        min-width: 0;
        box-shadow: 0 4px 14px -10px rgba(60, 40, 40, 0.15);
    }

    .aakriti-feature .icon-wrap {
        flex: 0 0 auto;
        width: 42px;
        height: 42px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--aakriti-cream-2);
        color: var(--aakriti-gold);
        font-size: 1.05rem;
    }

    .aakriti-feature .txt {
        min-width: 0;
    }

    .aakriti-feature .txt .title {
        font-size: var(--p-small);
        font-weight: 600;
        color: var(--aakriti-ink);
        line-height: var(--lh-tight);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .aakriti-feature .txt .sub {
        font-size: var(--caption);
        color: var(--aakriti-muted);
        line-height: var(--lh-tight);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ---------------- Right image column ---------------- */
    .aakriti-media {
        position: relative;
        z-index: 2;
        height: 100%;
        min-height: 420px;
        display: flex;
        align-items: center;
    }

    .aakriti-media-blob {
        position: relative;
        width: 100%;
        border-radius: 48% 52% 55% 45% / 45% 40% 60% 55%;
        overflow: hidden;
        box-shadow: 0 30px 60px -20px rgba(60, 30, 40, 0.28);
        aspect-ratio: 3 / 2;
    }

    .aakriti-media-blob img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .aakriti-media-ring {
        position: absolute;
        inset: -14px;
        border-radius: inherit;
        border: 1.5px solid var(--aakriti-coral);
        opacity: .35;
        z-index: -1;
        pointer-events: none;
    }

    /* ============================================
        MEDIA QUERIES
        ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .aakriti-hero {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .aakriti-desc {
            max-width: 44ch;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .aakriti-cta-group {
            gap: 0.85rem;
        }

        .btn-aakriti-primary,
        .btn-aakriti-outline {
            padding: 0.85rem 1.5rem;
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .aakriti-media {
            min-height: 380px;
        }

        .aakriti-logo {
            font-size: clamp(1.8rem, 1.4rem + 2vw, 2.6rem);
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .aakriti-media {
            min-height: 320px;
            margin-top: 2.5rem;
        }

        .aakriti-content {
            text-align: left;
        }

        .aakriti-desc {
            max-width: 60ch;
        }

        .aakriti-media-blob {
            border-radius: 40% 60% 55% 45% / 50% 45% 55% 50%;
        }

        .deco-circle,
        .deco-dots {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .aakriti-hero {
            padding-top: 2.25rem;
            padding-bottom: 2.25rem;
        }

        .aakriti-features {
            grid-template-columns: 1fr;
        }

        .aakriti-cta-group {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-aakriti-primary,
        .btn-aakriti-outline {
            justify-content: center;
        }

        .aakriti-media-blob {
            border-radius: 32px;
            aspect-ratio: 4 / 3;
        }

        .aakriti-media {
            min-height: 280px;
            margin-top: 2rem;
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .aakriti-logo-sub {
            letter-spacing: 0.3em;
        }

        .aakriti-eyebrow .line.grow {
            display: none;
        }

        .aakriti-desc {
            max-width: 100%;
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .aakriti-feature {
            padding: 0.75rem;
            gap: 0.6rem;
        }

        .aakriti-feature .icon-wrap {
            width: 36px;
            height: 36px;
            font-size: 0.9rem;
        }

        .btn-aakriti-primary,
        .btn-aakriti-outline {
            padding: 0.8rem 1.25rem;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .aakriti-logo {
            letter-spacing: 0.01em;
        }

        .aakriti-logo-sub {
            letter-spacing: 0.22em;
            font-size: 0.65rem;
        }
    }
</style>

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

        --aakriti-plum: #a6538c;
        --aakriti-rose: #e8748a;
        --aakriti-coral: #ef8c6a;
        --aakriti-blue: #6d7fd6;
        --aakriti-gold: #e0a63c;
        --aakriti-ink: #2b2b30;
        --aakriti-muted: #6b6d76;
        --aakriti-cream: #fbf3ee;
        --aakriti-cream-2: #f7e9e2;
        --aakriti-border: #e9dcd4;
        --aakriti-green: #25d366;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--aakriti-ink);
        background: #fff;
    }

    /* ============================================
   SECTION SHELL
   ============================================ */
    .aakriti-showcase {
        position: relative;
        background: linear-gradient(180deg, #fdf9f6 0%, var(--aakriti-cream) 100%);
        overflow: hidden;
        padding-top: clamp(2.5rem, 1.5rem + 4vw, 5rem);
        padding-bottom: clamp(2.5rem, 1.5rem + 4vw, 5rem);
    }

    .aakriti-showcase .blob-a {
        position: absolute;
        top: -8%;
        right: -6%;
        width: 46%;
        aspect-ratio: 1/1;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%, #f6ded2 0%, transparent 70%);
        z-index: 0;
    }

    .aakriti-showcase .dot-a {
        position: absolute;
        left: 47%;
        top: 30%;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--aakriti-gold);
        opacity: .5;
    }

    .aakriti-showcase .ring-a {
        position: absolute;
        left: 6%;
        bottom: 8%;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #f2dde6;
        opacity: .7;
    }

    /* ============================================
   LEFT CONTENT
   ============================================ */
    .showcase-content {
        position: relative;
        z-index: 2;
    }

    .showcase-eyebrow {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        margin-bottom: clamp(1rem, 0.8rem + 0.8vw, 1.5rem);
    }

    .showcase-eyebrow .line {
        height: 1px;
        width: 42px;
        background: var(--aakriti-plum);
        opacity: .5;
    }

    .showcase-eyebrow span.label {
        font-size: var(--caption);
        font-weight: 600;
        letter-spacing: 0.18em;
        color: var(--aakriti-plum);
        white-space: nowrap;
    }

    .showcase-heading {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: var(--aakriti-ink);
        margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
    }

    .showcase-heading .grad {
        background: linear-gradient(90deg, var(--aakriti-rose), var(--aakriti-coral));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .showcase-desc {
        font-size: var(--p-large);
        line-height: var(--lh-body);
        color: var(--aakriti-muted);
        max-width: 46ch;
        margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
    }

    .btn-showcase-primary {
        font-size: var(--p);
        font-weight: 500;
        color: #fff;
        background: linear-gradient(90deg, var(--aakriti-plum), #b56a99);
        border: none;
        border-radius: 6px;
        padding: 0.95rem 1.85rem;
        display: inline-flex;
        align-items: center;
        gap: 0.7rem;
        white-space: nowrap;
        box-shadow: 0 8px 20px -8px rgba(166, 83, 140, 0.55);
        transition: transform .2s ease, box-shadow .2s ease;
        margin-bottom: clamp(2rem, 1.6rem + 1.6vw, 3rem);
    }

    .btn-showcase-primary:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 12px 24px -8px rgba(166, 83, 140, 0.65);
    }

    .btn-showcase-primary i {
        transition: transform .2s ease;
    }

    .btn-showcase-primary:hover i {
        transform: translateX(3px);
    }

    /* Feature grid 2x2 */
    .showcase-features {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0.9rem;
    }

    .showcase-feature {
        background: #fff;
        border: 1px solid var(--aakriti-border);
        border-radius: 12px;
        padding: 1.4rem 1rem;
        text-align: center;
        min-width: 0;
        box-shadow: 0 4px 16px -12px rgba(60, 40, 40, 0.2);
    }

    .showcase-feature .icon-circle {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--aakriti-cream-2);
        color: var(--aakriti-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        margin: 0 auto 0.9rem;
    }

    .showcase-feature .title {
        font-size: var(--p);
        font-weight: 600;
        color: var(--aakriti-ink);
        line-height: var(--lh-tight);
        margin-bottom: 0.35rem;
    }

    .showcase-feature .sub {
        font-size: var(--p-small);
        color: var(--aakriti-muted);
        line-height: var(--lh-tight);
    }

    /* ============================================
   RIGHT: DEVICE MOCKUPS
   ============================================ */
    .device-stage {
        position: relative;
        z-index: 2;
        min-height: 560px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .device-pedestal {
        position: absolute;
        bottom: 4%;
        left: 50%;
        transform: translateX(-50%);
        width: 46%;
        aspect-ratio: 4/1;
        border-radius: 50%;
        background: radial-gradient(ellipse at center, #f3ded2 0%, transparent 72%);
        z-index: 0;
    }

    /* base bezel */
    .mockup {
        position: absolute;
        background: #1c1c1e;
        border-radius: 34px;
        box-shadow: 0 40px 70px -25px rgba(40, 20, 20, 0.4);
    }

    .mockup .screen {
        position: absolute;
        inset: 10px;
        background: #fff;
        border-radius: 22px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    /* Tablet (center/back) */
    .mockup-tablet {
        width: 46%;
        aspect-ratio: 3/4;
        z-index: 1;
        transform: translateY(-6%);
        border-radius: 38px;
    }

    .mockup-tablet .screen {
        inset: 12px;
        border-radius: 26px;
    }

    .mockup-tablet .cam {
        position: absolute;
        top: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #3a3a3c;
        z-index: 2;
    }

    /* Phone base */
    .mockup-phone {
        width: 22%;
        aspect-ratio: 9/18.5;
        border-radius: 30px;
    }

    .mockup-phone .screen {
        inset: 8px;
        border-radius: 22px;
    }

    .mockup-phone .notch {
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 34%;
        height: 16px;
        background: #1c1c1e;
        border-radius: 10px;
        z-index: 3;
    }

    .mockup-phone-left {
        left: 2%;
        bottom: 2%;
        z-index: 3;
        transform: rotate(-6deg);
    }

    .mockup-phone-right {
        right: 4%;
        top: 8%;
        z-index: 2;
        transform: rotate(7deg);
    }

    /* --- screen content: shared nav --- */
    .screen-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 0.7rem;
        flex: 0 0 auto;
    }

    .screen-logo {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        line-height: 1;
    }

    .screen-logo .a1 {
        color: var(--aakriti-plum);
    }

    .screen-logo .a2 {
        color: var(--aakriti-rose);
    }

    .screen-logo .a3 {
        color: var(--aakriti-blue);
    }

    .screen-logo .a4 {
        color: var(--aakriti-plum);
    }

    .screen-logo .a5 {
        color: var(--aakriti-rose);
    }

    .screen-logo .a6 {
        color: var(--aakriti-coral);
    }

    .screen-logo .a7 {
        color: var(--aakriti-gold);
    }

    .screen-logo-sub {
        letter-spacing: 0.25em;
        color: var(--aakriti-ink);
    }

    .screen-nav-icons {
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .screen-nav-icons .chip {
        background: var(--aakriti-cream-2);
        color: var(--aakriti-plum);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Tablet screen content */
    .tablet-body {
        padding: 0.9rem 1.1rem 1.1rem;
        flex: 1 1 auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .tablet-eyebrow {
        text-align: center;
        color: var(--aakriti-rose);
        font-weight: 600;
        letter-spacing: 0.18em;
        margin-bottom: 0.35rem;
    }

    .tablet-heading {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        text-align: center;
        line-height: var(--lh-heading);
        margin-bottom: 0.7rem;
        color: var(--aakriti-ink);
    }

    .tablet-heading .grad {
        background: linear-gradient(90deg, var(--aakriti-rose), var(--aakriti-coral));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .tablet-photo {
        border-radius: 16px;
        overflow: hidden;
        flex: 1 1 auto;
        min-height: 0;
        margin-bottom: 0.8rem;
    }

    .tablet-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .tablet-services-title {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        margin-bottom: 0.6rem;
        color: var(--aakriti-ink);
    }

    .tablet-services {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0.5rem;
    }

    .tablet-service {
        text-align: center;
    }

    .tablet-service .ic {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        background: var(--aakriti-cream-2);
        color: var(--aakriti-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.3rem;
        font-size: 0.8rem;
    }

    .tablet-service .lbl {
        font-weight: 600;
        color: var(--aakriti-ink);
        line-height: 1.15;
    }

    /* Phone-left screen content (WHAT WE DO) */
    .phone-body {
        padding: 0.55rem 0.7rem 0.7rem;
        flex: 1 1 auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .phone-eyebrow {
        text-align: center;
        color: var(--aakriti-rose);
        font-weight: 600;
        letter-spacing: 0.14em;
        margin-bottom: 0.15rem;
    }

    .phone-heading {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--aakriti-ink);
    }

    .phone-photo {
        border-radius: 12px;
        overflow: hidden;
        flex: 0 0 auto;
        height: 34%;
        margin-bottom: 0.55rem;
        position: relative;
    }

    .phone-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .phone-card-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        color: var(--aakriti-ink);
        margin-bottom: 0.3rem;
    }

    .phone-card-text {
        color: var(--aakriti-muted);
        line-height: var(--lh-tight);
        flex: 1 1 auto;
        overflow: hidden;
    }

    .phone-readmore {
        color: var(--aakriti-plum);
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .wa-fab {
        position: absolute;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: var(--aakriti-green);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        right: 10px;
        bottom: 10px;
        font-size: 0.7rem;
        box-shadow: 0 4px 10px -3px rgba(0, 0, 0, 0.4);
        z-index: 5;
    }

    /* Phone-right screen content (Contact Us, dark hero) */
    .phone2-hero {
        flex: 0 0 42%;
        background: linear-gradient(160deg, #14140f 0%, #2a2a22 60%, #3c3a2c 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #f4ede4;
        text-align: center;
        padding: 0.4rem;
        position: relative;
    }

    .phone2-hero .title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
    }

    .phone2-hero .crumb {
        color: #cbbfae;
        opacity: .85;
    }

    .phone2-body {
        flex: 1 1 auto;
        padding: 0.6rem 0.6rem;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .phone2-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px -10px rgba(0, 0, 0, 0.25);
        padding: 0.6rem 0.6rem;
        flex: 1 1 auto;
    }

    .phone2-card .lc-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        color: var(--aakriti-ink);
        margin-bottom: 0.2rem;
    }

    .phone2-card .lc-sub {
        color: var(--aakriti-muted);
        line-height: var(--lh-tight);
        margin-bottom: 0.5rem;
    }

    .phone2-card .info-row {
        display: flex;
        gap: 0.4rem;
        align-items: flex-start;
        margin-bottom: 0.4rem;
    }

    .phone2-card .info-row i {
        color: var(--aakriti-plum);
        margin-top: 2px;
    }

    .phone2-card .info-row .lbl {
        font-weight: 600;
        color: var(--aakriti-ink);
        display: block;
    }

    .phone2-card .info-row .val {
        color: var(--aakriti-muted);
        line-height: 1.3;
    }

    /* ============================================
   FONT-SIZE SCALING PER DEVICE (kept in rem-based clamp,
   scaled down for the miniature device screens)
   ============================================ */
    .screen-logo {
        font-size: 0.85rem;
    }

    .screen-logo-sub {
        font-size: 0.4rem;
    }

    .tablet-eyebrow {
        font-size: 0.55rem;
    }

    .tablet-heading {
        font-size: 1.05rem;
    }

    .tablet-services-title {
        font-size: 0.85rem;
    }

    .tablet-service .ic {
        font-size: 0.75rem;
    }

    .tablet-service .lbl {
        font-size: 0.55rem;
    }

    .phone-eyebrow {
        font-size: 0.45rem;
    }

    .phone-heading {
        font-size: 0.8rem;
    }

    .phone-card-title {
        font-size: 0.75rem;
    }

    .phone-card-text {
        font-size: 0.55rem;
    }

    .phone-readmore {
        font-size: 0.6rem;
    }

    .phone2-hero .title {
        font-size: 0.95rem;
    }

    .phone2-hero .crumb {
        font-size: 0.45rem;
    }

    .phone2-card .lc-title {
        font-size: 0.7rem;
    }

    .phone2-card .lc-sub {
        font-size: 0.5rem;
    }

    .phone2-card .info-row .lbl {
        font-size: 0.55rem;
    }

    .phone2-card .info-row .val {
        font-size: 0.5rem;
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .aakriti-showcase {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .device-stage {
            min-height: 520px;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .showcase-desc {
            max-width: 44ch;
        }

        .device-stage {
            min-height: 480px;
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .showcase-features {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .device-stage {
            min-height: 460px;
        }

        .mockup-tablet {
            width: 52%;
        }

        .mockup-phone {
            width: 26%;
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .device-stage {
            min-height: 420px;
            margin-top: 2.5rem;
        }

        .showcase-desc {
            max-width: 60ch;
        }

        .ring-a,
        .dot-a {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .aakriti-showcase {
            padding-top: 2.25rem;
            padding-bottom: 2.25rem;
        }

        .showcase-features {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.7rem;
        }

        .showcase-feature {
            padding: 1.1rem 0.6rem;
        }

        .device-stage {
            min-height: 380px;
            margin-top: 2rem;
        }

        .mockup-tablet {
            width: 58%;
        }

        .mockup-phone {
            width: 30%;
        }

        .mockup-phone-right {
            top: 4%;
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .showcase-eyebrow .line {
            display: none;
        }

        .device-stage {
            min-height: 320px;
        }

        .mockup-tablet {
            width: 64%;
        }

        .mockup-phone {
            width: 34%;
        }

        .mockup-phone-left {
            left: -2%;
            bottom: -4%;
        }

        .mockup-phone-right {
            right: -2%;
            top: 2%;
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .showcase-features {
            grid-template-columns: 1fr 1fr;
        }

        .showcase-feature .icon-circle {
            width: 46px;
            height: 46px;
            font-size: 1.05rem;
        }

        .device-stage {
            min-height: 280px;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .btn-showcase-primary {
            width: 100%;
            justify-content: center;
        }

        .device-stage {
            min-height: 250px;
        }
    }
</style>

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

        --aakriti-purple: #7a4fc9;
        --aakriti-purple-2: #9c7fe0;
        --aakriti-gold: #e0a63c;
        --aakriti-ink: #1f2033;
        --aakriti-muted: #6b6d76;
        --aakriti-border: #e7e3f0;
        --aakriti-lilac-tint: #f4f0fb;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--aakriti-ink);
        background: #fff;
    }

    /* ============================================
   SECTION SHELL
   ============================================ */
    .aakriti-about {
        position: relative;
        background: #ffffff;
        overflow: hidden;
    }

    .aakriti-about .about-row {
        min-height: clamp(420px, 55vw, 640px);
    }

    /* ---------------- Left: image column ---------------- */
    .about-media {
        position: relative;
        height: 100%;
        min-height: 360px;
    }

    .about-media-frame {
        position: absolute;
        inset: 0;
        overflow: hidden;
    }

    .about-media-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    /* soft purple accent blob peeking behind the image's cut corner */
    .about-media::before {
        content: "";
        position: absolute;
        top: -8%;
        right: -10%;
        width: 46%;
        height: 46%;
        background: radial-gradient(circle, var(--aakriti-purple-2) 0%, transparent 70%);
        opacity: .55;
        border-radius: 50%;
        z-index: 0;
    }

    .about-media-frame {
        z-index: 1;
    }

    /* ---------------- Right: content column ---------------- */
    .about-content {
        position: relative;
        z-index: 2;
        padding-top: clamp(2rem, 1.5rem + 2vw, 3.5rem);
        padding-bottom: clamp(2rem, 1.5rem + 2vw, 3.5rem);
    }

    .about-dots {
        position: absolute;
        top: 8%;
        right: 4%;
        width: 70px;
        height: 70px;
        background-image: radial-gradient(circle, #d9cdf0 1.6px, transparent 1.7px);
        background-size: 12px 12px;
        opacity: .8;
        z-index: 0;
    }

    .about-eyebrow {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        margin-bottom: clamp(0.85rem, 0.7rem + 0.6vw, 1.25rem);
    }

    .about-eyebrow .line {
        height: 2px;
        width: 34px;
        background: var(--aakriti-gold);
    }

    .about-eyebrow span.label {
        font-size: var(--caption);
        font-weight: 700;
        letter-spacing: 0.2em;
        color: var(--aakriti-purple);
    }

    .about-heading {
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        text-transform: uppercase;
        color: var(--aakriti-ink);
        margin-bottom: clamp(0.85rem, 0.7rem + 0.6vw, 1.25rem);
    }

    .about-heading .accent {
        color: var(--aakriti-purple);
    }

    .about-rule {
        width: 90px;
        height: 4px;
        border-radius: 2px;
        background: var(--aakriti-gold);
        margin-bottom: clamp(1.25rem, 1rem + 1vw, 1.75rem);
    }

    .about-desc {
        font-size: var(--p);
        line-height: var(--lh-body);
        color: var(--aakriti-muted);
        max-width: 56ch;
        margin-bottom: 1.1rem;
    }

    .about-desc:last-of-type {
        margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
    }

    /* ---------------- Feature trio ---------------- */
    .about-features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 0;
        margin-bottom: clamp(1.75rem, 1.4rem + 1.4vw, 2.5rem);
    }

    .about-feature {
        padding: 0 1.25rem;
        border-right: 1px solid var(--aakriti-border);
        min-width: 0;
    }

    .about-feature:first-child {
        padding-left: 0;
    }

    .about-feature:last-child {
        border-right: none;
    }

    .about-feature .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--aakriti-lilac-tint);
        color: var(--aakriti-purple);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        margin-bottom: 0.9rem;
    }

    .about-feature .title {
        font-size: var(--p);
        font-weight: 700;
        color: var(--aakriti-ink);
        line-height: var(--lh-tight);
        margin-bottom: 0.4rem;
    }

    .about-feature .sub {
        font-size: var(--p-small);
        color: var(--aakriti-muted);
        line-height: var(--lh-tight);
    }

    /* ---------------- CTA ---------------- */
    .btn-about-primary {
        font-size: var(--p);
        font-weight: 500;
        color: #fff;
        background: linear-gradient(90deg, var(--aakriti-purple), #8f63d6);
        border: none;
        border-radius: 999px;
        padding: 0.95rem 2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        white-space: nowrap;
        box-shadow: 0 10px 22px -10px rgba(122, 79, 201, 0.55);
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .btn-about-primary:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 14px 26px -10px rgba(122, 79, 201, 0.65);
    }

    .btn-about-primary i {
        transition: transform .2s ease;
    }

    .btn-about-primary:hover i {
        transform: translateX(3px);
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .about-content {
            padding-left: 2rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .about-desc {
            max-width: 52ch;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .about-content {
            padding-left: 1.25rem;
        }

        .about-feature {
            padding: 0 1rem;
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .about-media {
            min-height: 320px;
        }

        .about-content {
            padding-left: 1rem;
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .about-row {
            min-height: auto;
        }

        .about-media {
            min-height: 340px;
        }

        .about-content {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }

        .about-dots {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .about-media {
            min-height: 300px;
            border-radius: 0 0 32px 32px;
            overflow: hidden;
        }

        .about-content {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .about-features {
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }

        .about-feature {
            padding: 0 0 1.25rem 0;
            border-right: none;
            border-bottom: 1px solid var(--aakriti-border);
        }

        .about-feature:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .about-heading {
            font-size: clamp(1.8rem, 1.3rem + 4vw, 2.4rem);
        }

        .btn-about-primary {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .about-media {
            min-height: 240px;
        }

        .about-feature .icon-circle {
            width: 50px;
            height: 50px;
            font-size: 1.1rem;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .about-rule {
            width: 70px;
        }

        .about-eyebrow .line {
            width: 24px;
        }
    }
</style>



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

        /* ---- Aakriti brand tokens (namespaced so nothing here collides
     with an existing site's own custom properties) ---- */
        --ak-cream: #F7F3EE;
        --ak-cream-soft: #FBF8F4;
        --ak-ink: #1B1730;
        --ak-purple: #6C4AA0;
        --ak-purple-deep: #29203F;
        --ak-purple-soft: #ECE5F6;
        --ak-gold: #D9A441;
        --ak-body: #5B5867;
        --ak-white: #FFFFFF;
        --ak-line: #E1DAD0;

        --ak-font-display: 'Playfair Display', Georgia, 'Times New Roman', serif;
        --ak-font-body: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    /* ============================================
   SECTION SCOPE
   All rules are namespaced under .ak-expertise
   so nothing here touches any other CSS on the page.
   ============================================ */
    .ak-expertise {
        background-color: var(--ak-cream);
        font-family: var(--ak-font-body);
        color: var(--ak-body);
        overflow: hidden;
        position: relative;
        padding-block: clamp(2.5rem, 1.5rem + 4vw, 5.5rem);
    }

    .ak-expertise * {
        box-sizing: border-box;
        min-width: 0;
        /* prevents flex/grid children from forcing overflow */
    }

    .ak-expertise .row {
        --bs-gutter-x: 0;
    }

    /* ---------- CONTENT (left) column ---------- */
    .ak-expertise__content {
        display: flex;
        align-items: center;
    }

    .ak-expertise__inner {
        width: 100%;
        max-width: 640px;
        padding: clamp(1.5rem, 1rem + 3vw, 3.5rem) clamp(1.25rem, 1rem + 3vw, 5rem);
        margin-inline: auto;
    }

    /* Eyebrow row */
    .ak-expertise__eyebrow-row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
    }

    .ak-expertise__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.65em;
        color: var(--ak-purple);
        font-weight: 700;
        font-size: var(--p-small);
        letter-spacing: 0.14em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .ak-expertise__eyebrow .ln {
        display: inline-block;
        width: 1.5rem;
        height: 2px;
        background: var(--ak-gold);
        flex: 0 0 auto;
    }

    .ak-expertise__dotgrid {
        --dot: 4px;
        --gap: 10px;
        flex: 0 0 auto;
        width: calc(var(--dot) * 5 + var(--gap) * 4);
        aspect-ratio: 5 / 4;
        background-image: radial-gradient(circle, var(--ak-line) var(--dot), transparent var(--dot));
        background-size: var(--gap) var(--gap);
        background-repeat: repeat;
        opacity: 0.9;
    }

    /* Heading */
    .ak-expertise__heading {
        font-family: var(--ak-font-display);
        font-weight: 700;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: var(--ak-ink);
        margin: 0 0 clamp(1rem, 0.8rem + 1vw, 1.5rem);
    }

    .ak-expertise__heading em {
        font-style: normal;
        color: var(--ak-purple);
    }

    /* Divider */
    .ak-expertise__divider {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: clamp(1.25rem, 1rem + 1.2vw, 1.85rem);
    }

    .ak-expertise__divider .bar {
        width: 56px;
        height: 3px;
        border-radius: 3px;
        background: var(--ak-purple);
    }

    .ak-expertise__divider .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--ak-gold);
    }

    /* Paragraphs */
    .ak-expertise__text {
        font-size: var(--p);
        line-height: var(--lh-body);
        color: var(--ak-body);
        margin: 0 0 1rem;
        max-width: 54ch;
    }

    .ak-expertise__text:last-of-type {
        margin-bottom: clamp(1.75rem, 1.4rem + 1.6vw, 2.5rem);
    }

    /* Feature list */
    .ak-expertise__features {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        margin: 0 0 clamp(1.75rem, 1.4rem + 1.6vw, 2.75rem);
        padding: 0;
        list-style: none;
    }

    .ak-expertise__feature {
        flex: 1 1 0;
        min-width: 118px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.6rem;
        padding-inline: clamp(0.6rem, 0.4rem + 1vw, 1.25rem);
        position: relative;
    }

    .ak-expertise__feature:first-child {
        padding-left: 0;
    }

    .ak-expertise__feature+.ak-expertise__feature::before {
        content: "";
        position: absolute;
        left: 0;
        top: 4px;
        bottom: 4px;
        width: 1px;
        background: var(--ak-line);
    }

    .ak-expertise__feature-icon {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--ak-purple-soft);
        color: var(--ak-purple);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        flex: 0 0 auto;
    }

    .ak-expertise__feature-title {
        font-family: var(--ak-font-body);
        font-weight: 600;
        font-size: var(--h6);
        color: var(--ak-ink);
        line-height: var(--lh-tight);
    }

    .ak-expertise__feature-desc {
        font-size: var(--caption);
        line-height: var(--lh-body);
        color: var(--ak-body);
    }

    /* CTA button */
    .ak-expertise__btn {
        display: inline-flex;
        align-items: center;
        gap: clamp(1.5rem, 1.2rem + 1.2vw, 2.5rem);
        background: var(--ak-purple);
        color: var(--ak-white);
        font-weight: 600;
        font-size: var(--p);
        text-decoration: none;
        padding: 0.4rem 0.4rem 0.4rem clamp(1.25rem, 1rem + 1vw, 1.75rem);
        border-radius: 999px;
        transition: background-color .25s ease, transform .25s ease;
    }

    .ak-expertise__btn:hover,
    .ak-expertise__btn:focus-visible {
        background: var(--ak-purple-deep);
        color: var(--ak-white);
        transform: translateY(-2px);
    }

    .ak-expertise__btn .icon-circle {
        width: clamp(36px, 3vw + 24px, 44px);
        height: clamp(36px, 3vw + 24px, 44px);
        border-radius: 50%;
        background: var(--ak-purple-deep);
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        font-size: 0.95rem;
    }

    /* ---------- MEDIA (right) column ---------- */
    .ak-expertise__media {
        position: relative;
    }

    .ak-expertise__media-inner {
        position: relative;
        width: 100%;
        line-height: 0;
    }

    .ak-expertise__img {
        display: block;
        width: 100%;
        height: auto;
        min-height: 320px;
        object-fit: cover;
    }

    /* Top badge: "Creating Spaces, Enhancing Lives" */
    .ak-expertise__badge {
        position: absolute;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: var(--ak-purple-deep);
        color: var(--ak-white);
        border: 1px solid rgba(217, 164, 65, 0.55);
        border-radius: 999px;
        font-size: var(--p-small);
        font-weight: 500;
        white-space: nowrap;
        padding: 0.4rem 1rem 0.4rem 0.4rem;
        max-width: calc(100% - 2rem);
        box-shadow: 0 10px 24px rgba(20, 12, 40, 0.25);
    }

    .ak-expertise__badge .badge-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        flex: 0 0 auto;
    }

    .ak-expertise__badge--top {
        top: clamp(1rem, 0.8rem + 1vw, 2.25rem);
        left: 50%;
        transform: translateX(-50%);
    }

    .ak-expertise__badge--bottom {
        bottom: clamp(1rem, 0.8rem + 1vw, 2rem);
        left: clamp(1rem, 0.8rem + 1vw, 2.25rem);
        padding: 0.55rem 1.25rem;
        gap: 0.65rem;
    }

    .ak-expertise__badge--bottom i {
        font-size: 0.9rem;
        color: var(--ak-gold);
    }

    /* Decorative corner dots (purely aesthetic, hidden on small screens) */
    .ak-expertise__dots {
        position: absolute;
        bottom: clamp(1rem, 0.8rem + 1vw, 2rem);
        display: flex;
        gap: 6px;
    }

    .ak-expertise__dots i {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.85);
        display: block;
    }

    .ak-expertise__dots--right {
        right: clamp(1rem, 0.8rem + 1vw, 2.25rem);
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */

    /* below extra large */
    @media (max-width: 1919.98px) {
        .ak-expertise__inner {
            max-width: 600px;
        }
    }

    /* below large desktop */
    @media (max-width: 1599.98px) {
        .ak-expertise__inner {
            max-width: 560px;
        }

        .ak-expertise__feature-icon {
            width: 48px;
            height: 48px;
        }
    }

    /* below desktop */
    @media (max-width: 1399.98px) {
        .ak-expertise__inner {
            max-width: 520px;
        }

        .ak-expertise__features {
            gap: 0;
        }
    }

    /* below laptop */
    @media (max-width: 1199.98px) {
        .ak-expertise__inner {
            max-width: 480px;
            padding-block: 2rem;
        }

        .ak-expertise__btn {
            gap: clamp(1rem, 1rem + 1vw, 1.75rem);
        }
    }

    /* below tablet landscape: stack columns */
    @media (max-width: 991.98px) {
        .ak-expertise__content {
            order: 2;
        }

        .ak-expertise__media {
            order: 1;
        }

        .ak-expertise__inner {
            max-width: 640px;
            text-align: left;
            padding-block: clamp(2rem, 1.6rem + 2vw, 3rem);
        }

        .ak-expertise__media-inner {
            border-radius: 0 0 28px 28px;
            overflow: hidden;
        }

        .ak-expertise__img {
            max-height: 560px;
        }

        .ak-expertise__dotgrid {
            display: none;
        }
    }

    /* below tablet portrait */
    @media (max-width: 767.98px) {
        .ak-expertise__features {
            flex-wrap: wrap;
            row-gap: 1.5rem;
        }

        .ak-expertise__feature {
            flex: 1 1 45%;
            min-width: 45%;
            padding-left: 0 !important;
        }

        .ak-expertise__feature::before {
            display: none;
        }

        .ak-expertise__img {
            max-height: 460px;
        }

        .ak-expertise__badge--top {
            font-size: var(--caption);
        }
    }

    /* below small tablet / landscape phone */
    @media (max-width: 575.98px) {
        .ak-expertise {
            padding-block: 2rem;
        }

        .ak-expertise__inner {
            padding-inline: 1.25rem;
        }

        .ak-expertise__badge {
            padding: 0.32rem 0.85rem 0.32rem 0.32rem;
            gap: 0.45rem;
        }

        .ak-expertise__badge .badge-icon {
            width: 26px;
            height: 26px;
            font-size: 0.7rem;
        }

        .ak-expertise__badge--bottom {
            padding: 0.45rem 0.9rem;
        }

        .ak-expertise__dots {
            display: none;
        }

        .ak-expertise__img {
            max-height: 380px;
        }
    }

    /* below large phone */
    @media (max-width: 479.98px) {
        .ak-expertise__eyebrow-row {
            margin-bottom: 0.85rem;
        }

        .ak-expertise__dotgrid {
            display: none;
        }

        .ak-expertise__feature {
            flex: 1 1 100%;
            min-width: 100%;
            flex-direction: row;
            align-items: center;
        }

        .ak-expertise__feature-icon {
            width: 44px;
            height: 44px;
            font-size: 1rem;
        }

        .ak-expertise__btn {
            width: 100%;
            justify-content: space-between;
        }

        .ak-expertise__badge--top {
            max-width: calc(100% - 1.5rem);
            white-space: normal;
            text-align: left;
            line-height: 1.25;
        }

        .ak-expertise__badge--bottom {
            max-width: calc(100% - 1.5rem);
        }

        .ak-expertise__badge--bottom span.url-text {
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }

    /* below small phone */
    @media (max-width: 359.98px) {
        .ak-expertise__inner {
            padding-inline: 1rem;
        }

        .ak-expertise__heading {
            letter-spacing: -0.01em;
        }

        .ak-expertise__badge {
            font-size: 0.72rem;
        }

        .ak-expertise__badge .badge-icon {
            width: 22px;
            height: 22px;
            font-size: 0.62rem;
        }

        .ak-expertise__img {
            max-height: 320px;
        }
    }

    /* Respect reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .ak-expertise__btn {
            transition: none;
        }
    }
</style>

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

        --svc-purple: #7a4fc9;
        --svc-purple-dark: #4a2f82;
        --svc-gold: #e0a63c;
        --svc-ink: #1f2033;
        --svc-muted: #6b6d76;
        --svc-border: #ece7f5;
        --svc-lilac: #f3eefc;
        --svc-bg: #fbfaff;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--svc-ink);
        background: #fff;
    }

    /* ============================================
   SECTION SHELL
   ============================================ */
    .aakriti-services {
        position: relative;
        background: var(--svc-bg);
        overflow: hidden;
        padding-top: clamp(2.5rem, 1.8rem + 3vw, 4.5rem);
        padding-bottom: clamp(2.5rem, 1.8rem + 3vw, 4.5rem);
    }

    .aakriti-services .glow-a {
        position: absolute;
        left: -10%;
        bottom: -10%;
        width: 42%;
        aspect-ratio: 1/1;
        border-radius: 50%;
        background: radial-gradient(circle, #e7dcf7 0%, transparent 70%);
        z-index: 0;
    }

    /* ---------------- Header ---------------- */
    .services-header {
        position: relative;
        z-index: 2;
        text-align: center;
        margin-bottom: clamp(2rem, 1.6rem + 1.6vw, 3rem);
    }

    .services-eyebrow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.9rem;
        margin-bottom: 0.75rem;
    }

    .services-eyebrow .line {
        height: 1px;
        width: 46px;
        background: var(--svc-muted);
        opacity: .5;
    }

    .services-eyebrow span.label {
        font-size: var(--caption);
        font-weight: 600;
        letter-spacing: 0.22em;
        color: var(--svc-purple);
    }

    .services-heading {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: var(--svc-ink);
        text-transform: uppercase;
        margin-bottom: 0.85rem;
    }

    .services-heading .accent {
        color: var(--svc-purple);
    }

    .services-rule {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        margin-bottom: clamp(1rem, 0.8rem + 0.8vw, 1.5rem);
    }

    .services-rule .bar {
        width: 70px;
        height: 4px;
        border-radius: 2px;
        background: linear-gradient(90deg, var(--svc-purple), transparent);
    }

    .services-rule .dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--svc-gold);
    }

    .services-sub {
        font-size: var(--p);
        color: var(--svc-muted);
        line-height: var(--lh-body);
        max-width: 62ch;
        margin: 0 auto;
    }

    /* ---------------- Cards ---------------- */
    .services-grid {
        position: relative;
        z-index: 2;
    }

    .service-card {
        background: #fff;
        border: 1px solid var(--svc-border);
        border-radius: 16px;
        padding: clamp(1.25rem, 1rem + 1vw, 1.75rem) clamp(1rem, 0.85rem + 0.6vw, 1.5rem) clamp(1.5rem, 1.2rem + 1vw, 2rem);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 30px -20px rgba(80, 50, 130, 0.18);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 36px -18px rgba(80, 50, 130, 0.28);
    }

    .service-card .icon-box {
        width: 76px;
        height: 76px;
        border-radius: 18px;
        background: var(--svc-lilac);
        color: var(--svc-purple);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.7rem;
        margin: 0 auto 1rem;
    }

    .service-card .title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: var(--h4);
        color: var(--svc-ink);
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .service-card .title-rule {
        width: 34px;
        height: 3px;
        border-radius: 2px;
        background: var(--svc-purple);
        margin: 0 auto clamp(1rem, 0.85rem + 0.6vw, 1.35rem);
    }

    .service-card .photo {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: clamp(1rem, 0.85rem + 0.6vw, 1.35rem);
        aspect-ratio: 4/3;
    }

    .service-card .photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .service-card .checklist {
        list-style: none;
        padding: 0;
        margin: 0 0 auto 0;
        flex: 1 1 auto;
    }

    .service-card .checklist li {
        display: flex;
        align-items: flex-start;
        gap: 0.6rem;
        font-size: var(--p-small);
        color: var(--svc-muted);
        margin-bottom: 0.6rem;
        line-height: var(--lh-tight);
    }

    .service-card .checklist li:last-child {
        margin-bottom: 0;
    }

    .service-card .checklist i {
        color: var(--svc-purple);
        margin-top: 2px;
        flex: 0 0 auto;
    }

    .service-card .card-arrow {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: var(--svc-lilac);
        color: var(--svc-ink);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: clamp(1rem, 0.85rem + 0.6vw, 1.35rem) auto 0;
        transition: background .2s ease, color .2s ease, transform .2s ease;
        text-decoration: none;
    }

    .service-card .card-arrow:hover {
        background: var(--svc-purple);
        color: #fff;
        transform: translateX(3px);
    }

    /* ---------------- Bottom CTA bar ---------------- */
    .services-cta {
        position: relative;
        z-index: 2;
        margin-top: clamp(1.75rem, 1.4rem + 1.4vw, 2.5rem);
        background: var(--svc-lilac);
        border-radius: 16px;
        padding: clamp(1.1rem, 0.9rem + 0.8vw, 1.6rem) clamp(1.25rem, 1rem + 1vw, 2rem);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.25rem;
        flex-wrap: wrap;
    }

    .services-cta .cta-left {
        display: flex;
        align-items: center;
        gap: 1rem;
        min-width: 0;
    }

    .services-cta .cta-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--svc-purple-dark);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex: 0 0 auto;
    }

    .services-cta .cta-text .title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: var(--h5);
        color: var(--svc-ink);
        margin-bottom: 0.15rem;
    }

    .services-cta .cta-text .sub {
        font-size: var(--p-small);
        color: var(--svc-muted);
    }

    .btn-services-primary {
        font-size: var(--p);
        font-weight: 600;
        color: #fff;
        background: linear-gradient(90deg, var(--svc-purple-dark), var(--svc-purple));
        border: none;
        border-radius: 999px;
        padding: 0.85rem 1.6rem;
        display: inline-flex;
        align-items: center;
        gap: 0.7rem;
        white-space: nowrap;
        flex: 0 0 auto;
        box-shadow: 0 10px 22px -10px rgba(74, 47, 130, 0.5);
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .btn-services-primary:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 14px 26px -10px rgba(74, 47, 130, 0.6);
    }

    .btn-services-primary i {
        transition: transform .2s ease;
    }

    .btn-services-primary:hover i {
        transform: translateX(3px);
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .aakriti-services {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .services-sub {
            max-width: 58ch;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .service-card .icon-box {
            width: 68px;
            height: 68px;
            font-size: 1.5rem;
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .service-card {
            padding: 1.25rem 0.9rem 1.5rem;
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .services-grid .col-service {
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 1.5rem;
        }

        .glow-a {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .aakriti-services {
            padding-top: 2.25rem;
            padding-bottom: 2.25rem;
        }

        .services-cta {
            flex-direction: column;
            align-items: stretch;
            text-align: center;
        }

        .services-cta .cta-left {
            flex-direction: column;
            text-align: center;
        }

        .btn-services-primary {
            justify-content: center;
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .services-grid .col-service {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .services-eyebrow .line {
            display: none;
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .service-card .icon-box {
            width: 60px;
            height: 60px;
            font-size: 1.3rem;
            border-radius: 14px;
        }

        .services-cta .cta-icon {
            width: 46px;
            height: 46px;
            font-size: 1rem;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .service-card {
            padding: 1rem 0.75rem 1.25rem;
        }

        .btn-services-primary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="aakriti-hero">
    <span class="deco-circle"></span>
    <span class="deco-dots"></span>

    <div class="container-xl">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Left: Content -->
            <div class="col-12 col-lg-6">
                <div class="aakriti-content">

                    <div class="aakriti-logo">
                        <span class="l1">A</span><span class="l2">A</span><span class="l3">K</span><span class="l4">R</span><span class="l5">I</span><span class="l6">T</span><span class="l7">I</span>
                    </div>
                    <div class="aakriti-logo-sub">SPACE DESIGNS</div>

                    <div class="aakriti-eyebrow">
                        <span class="line"></span>
                        <span class="label">PREMIUM INTERIOR STUDIO</span>
                        <span class="line grow"></span>
                    </div>

                    <h1 class="aakriti-heading">
                        Designing Spaces.<br>
                        Creating <span class="grad">Experiences.</span>
                    </h1>

                    <p class="aakriti-desc">
                        We transform dream homes into elegant, functional interiors that reflect your lifestyle and elevate every moment.
                    </p>

                    <div class="aakriti-cta-group">
                        <a href="#projects" class="btn-aakriti-primary">
                            Explore Projects <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#consultation" class="btn-aakriti-outline">
                            Book Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="aakriti-features">
                        <div class="aakriti-feature">
                            <span class="icon-wrap"><i class="fa-solid fa-couch"></i></span>
                            <div class="txt">
                                <div class="title">Turnkey Design</div>
                                <div class="sub">End-to-end solutions</div>
                            </div>
                        </div>
                        <div class="aakriti-feature">
                            <span class="icon-wrap"><i class="fa-solid fa-building"></i></span>
                            <div class="txt">
                                <div class="title">Residential &amp; Commercial</div>
                                <div class="sub">Diverse expertise</div>
                            </div>
                        </div>
                        <div class="aakriti-feature">
                            <span class="icon-wrap"><i class="fa-solid fa-chair"></i></span>
                            <div class="txt">
                                <div class="title">Bespoke Interiors</div>
                                <div class="sub">Tailored for you</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Image -->
            <div class="col-12 col-lg-6">
                <div class="aakriti-media">
                    <div class="aakriti-media-blob">
                        <span class="aakriti-media-ring"></span>
                        <img src="./assets/images\portfolios\aakruti\hero-interior-image.png" alt="Elegant living room interior design by Aakriti Space Designs featuring a teal velvet sofa, marble coffee table, and gold accents">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="aakriti-showcase">
    <span class="blob-a"></span>
    <span class="dot-a"></span>
    <span class="ring-a"></span>

    <div class="container-xl">
        <div class="row align-items-center g-5">

            <!-- Left: Content -->
            <div class="col-12 col-lg-6">
                <div class="showcase-content">

                    <div class="showcase-eyebrow">
                        <span class="line"></span>
                        <span class="label">DESIGNED FOR EVERY SCREEN</span>
                        <span class="line"></span>
                    </div>

                    <h2 class="showcase-heading">
                        Smart, Responsive Designs<br>
                        for Your <span class="grad">Dream Home</span>
                    </h2>

                    <p class="showcase-desc">
                        Experience Aakriti Space Designs on every device. Our website is crafted to be beautiful, fast, and effortless — just like the spaces we design.
                    </p>

                    <a href="#explore" class="btn-showcase-primary">
                        Explore More <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <div class="showcase-features">
                        <div class="showcase-feature">
                            <span class="icon-circle"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <div class="title">Mobile First</div>
                            <div class="sub">Optimized for all devices</div>
                        </div>
                        <div class="showcase-feature">
                            <span class="icon-circle"><i class="fa-solid fa-paintbrush"></i></span>
                            <div class="title">Elegant UI</div>
                            <div class="sub">Clean, modern &amp; premium design</div>
                        </div>
                        <div class="showcase-feature">
                            <span class="icon-circle"><i class="fa-solid fa-display"></i></span>
                            <div class="title">Responsive Layout</div>
                            <div class="sub">Seamless across all screen sizes</div>
                        </div>
                        <div class="showcase-feature">
                            <span class="icon-circle"><i class="fa-solid fa-hand-pointer"></i></span>
                            <div class="title">Easy Navigation</div>
                            <div class="sub">Intuitive menus &amp; quick access</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Device mockups -->
            <div class="col-12 col-lg-6">
                <div class="device-stage">
                    <span class="device-pedestal"></span>

                    <!-- Tablet (center) -->
                    <div class="mockup mockup-tablet">
                        <span class="cam"></span>
                        <div class="screen">
                            <div class="screen-nav">
                                <div>
                                    <div class="screen-logo"><span class="a1">A</span><span class="a2">A</span><span class="a3">K</span><span class="a4">R</span><span class="a5">I</span><span class="a6">T</span><span class="a7">I</span></div>
                                    <div class="screen-logo-sub">SPACE DESIGNS</div>
                                </div>
                                <span class="chip" style="width:22px;height:22px;"><i class="fa-solid fa-bars" style="font-size:.6rem;"></i></span>
                            </div>
                            <div class="tablet-body">
                                <div class="tablet-eyebrow">PREMIUM INTERIOR STUDIO</div>
                                <div class="tablet-heading">Designing Spaces.<br>Creating <span class="grad">Experiences.</span></div>
                                <div class="tablet-photo">
                                    <img src="./assets/images\portfolios\aakruti\device-tablet-interior.png" alt="Living room interior shown on tablet preview">
                                </div>
                                <div class="tablet-services-title">Our Signature Services</div>
                                <div class="tablet-services">
                                    <div class="tablet-service">
                                        <span class="ic"><i class="fa-solid fa-building"></i></span>
                                        <div class="lbl">Residential Design</div>
                                    </div>
                                    <div class="tablet-service">
                                        <span class="ic"><i class="fa-solid fa-city"></i></span>
                                        <div class="lbl">Commercial Design</div>
                                    </div>
                                    <div class="tablet-service">
                                        <span class="ic"><i class="fa-solid fa-couch"></i></span>
                                        <div class="lbl">Turnkey Solutions</div>
                                    </div>
                                    <div class="tablet-service">
                                        <span class="ic"><i class="fa-solid fa-chair"></i></span>
                                        <div class="lbl">Bespoke Interiors</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phone left (What We Do) -->
                    <div class="mockup mockup-phone mockup-phone-left">
                        <span class="notch"></span>
                        <div class="screen">
                            <div class="screen-nav">
                                <div>
                                    <div class="screen-logo" style="font-size:.6rem;"><span class="a1">A</span><span class="a2">A</span><span class="a3">K</span><span class="a4">R</span><span class="a5">I</span><span class="a6">T</span><span class="a7">I</span></div>
                                    <div class="screen-logo-sub" style="font-size:.32rem;">SPACE DESIGNS</div>
                                </div>
                                <div class="screen-nav-icons">
                                    <span class="chip" style="width:18px;height:18px;"><i class="fa-solid fa-indian-rupee-sign" style="font-size:.5rem;"></i></span>
                                    <span class="chip" style="width:18px;height:18px;"><i class="fa-solid fa-bars" style="font-size:.5rem;"></i></span>
                                </div>
                            </div>
                            <div class="phone-body">
                                <div class="phone-eyebrow">WHAT YOU PREFER</div>
                                <div class="phone-heading">WHAT WE DO</div>
                                <div class="phone-photo">
                                    <img src="./assets/images\portfolios\aakruti\device-phone-residential-thumb.png" alt="Residential interior staircase preview on phone">
                                </div>
                                <div class="phone-card-title">Residential Interior</div>
                                <div class="phone-card-text">Thoughtfully crafted interiors that blend aesthetics with functionality to create spaces you'll love coming home to.</div>
                                <div class="phone-readmore">Read More <i class="fa-solid fa-arrow-right" style="font-size:.55rem;"></i></div>
                            </div>
                            <span class="wa-fab"><i class="fa-brands fa-whatsapp"></i></span>
                        </div>
                    </div>

                    <!-- Phone right (Contact Us) -->
                    <div class="mockup mockup-phone mockup-phone-right">
                        <span class="notch"></span>
                        <div class="screen">
                            <div class="screen-nav">
                                <div class="screen-logo" style="font-size:.55rem;"><span class="a1">A</span><span class="a2">A</span><span class="a3">K</span><span class="a4">R</span><span class="a5">I</span><span class="a6">T</span><span class="a7">I</span></div>
                                <span class="chip" style="width:16px;height:16px;"><i class="fa-solid fa-bars" style="font-size:.45rem;"></i></span>
                            </div>
                            <div class="phone2-hero">
                                <div class="title">Contact Us</div>
                                <div class="crumb">Home &gt; Contact Us</div>
                            </div>
                            <div class="phone2-body">
                                <div class="phone2-card">
                                    <div class="lc-title">Let's Connect</div>
                                    <div class="lc-sub">We'd love to hear about your project. Reach out to us anytime.</div>
                                    <div class="info-row">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div>
                                            <span class="lbl">Address</span>
                                            <span class="val">B12, 8th Floor, Ghanshyam Enclave, Kandivali West, Mumbai</span>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="fa-solid fa-phone"></i>
                                        <div>
                                            <span class="lbl">Phone</span>
                                            <span class="val">+91 98765 43210</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="wa-fab"><i class="fa-brands fa-whatsapp"></i></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="aakriti-about">
    <div class="row g-0 about-row align-items-stretch">

        <!-- Left: Image -->
        <div class="col-12 col-lg-6">
            <div class="about-media">
                <div class="about-media-frame">
                    <img src="./assets/images\portfolios\aakruti\about-billboard-image.png" alt="Outdoor digital signage displaying Aakriti Space Designs' Modern Commercial Spaces campaign outside a glass office building">
                </div>
            </div>
        </div>

        <!-- Right: Content -->
        <div class="col-12 col-lg-6">
            <span class="about-dots"></span>
            <div class="container-fluid">
                <div class="about-content px-lg-5 px-3">

                    <div class="about-eyebrow">
                        <span class="line"></span>
                        <span class="label">WHO WE ARE</span>
                    </div>

                    <h2 class="about-heading">
                        It Starts<br>
                        With <span class="accent">Us.</span>
                    </h2>
                    <span class="about-rule"></span>

                    <p class="about-desc">
                        Aakriti Space Designs is a creative and dynamic interior design studio focused on transforming residential and commercial spaces.
                    </p>
                    <p class="about-desc">
                        We provide end-to-end turnkey solutions, blending functionality with elegant design to create timeless interiors.
                    </p>

                    <div class="about-features">
                        <div class="about-feature">
                            <span class="icon-circle"><i class="fa-solid fa-building"></i></span>
                            <div class="title">Residential &amp; Commercial</div>
                            <div class="sub">Expertise in diverse spaces and needs.</div>
                        </div>
                        <div class="about-feature">
                            <span class="icon-circle"><i class="fa-solid fa-key"></i></span>
                            <div class="title">Turnkey Solutions</div>
                            <div class="sub">From concept to completion.</div>
                        </div>
                        <div class="about-feature">
                            <span class="icon-circle"><i class="fa-solid fa-chair"></i></span>
                            <div class="title">Elegant &amp; Functional</div>
                            <div class="sub">Designs that elevate every experience.</div>
                        </div>
                    </div>

                    <a href="#discover" class="btn-about-primary">
                        Discover More <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="ak-expertise">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-center">

            <!-- ============ LEFT: CONTENT ============ -->
            <div class="col-12 col-lg-6 ak-expertise__content">
                <div class="ak-expertise__inner">

                    <div class="ak-expertise__eyebrow-row">
                        <span class="ak-expertise__eyebrow">
                            <span class="ln"></span> Our Expertise <span class="ln"></span>
                        </span>
                        <span class="ak-expertise__dotgrid" aria-hidden="true"></span>
                    </div>

                    <h2 class="ak-expertise__heading">
                        Modern Interior<br>
                        <em>Design</em> Solutions
                    </h2>

                    <div class="ak-expertise__divider" aria-hidden="true">
                        <span class="bar"></span><span class="dot"></span>
                    </div>

                    <p class="ak-expertise__text">
                        Interior design doesn't have to be expensive or complicated! It should be smart &amp; user friendly.
                    </p>
                    <p class="ak-expertise__text">
                        Aakriti Space Designs shapes your dream home into reality. We create fusion designs inspired from world cultures.
                    </p>

                    <ul class="ak-expertise__features">
                        <li class="ak-expertise__feature">
                            <span class="ak-expertise__feature-icon"><i class="fa-solid fa-lightbulb"></i></span>
                            <span class="ak-expertise__feature-title">Smart Designs</span>
                            <span class="ak-expertise__feature-desc">Creative ideas that fit your lifestyle.</span>
                        </li>
                        <li class="ak-expertise__feature">
                            <span class="ak-expertise__feature-icon"><i class="fa-solid fa-user"></i></span>
                            <span class="ak-expertise__feature-title">User Friendly</span>
                            <span class="ak-expertise__feature-desc">Designed around your needs.</span>
                        </li>
                        <li class="ak-expertise__feature">
                            <span class="ak-expertise__feature-icon"><i class="fa-solid fa-certificate"></i></span>
                            <span class="ak-expertise__feature-title">Timeless Quality</span>
                            <span class="ak-expertise__feature-desc">Premium quality that lasts.</span>
                        </li>
                        <li class="ak-expertise__feature">
                            <span class="ak-expertise__feature-icon"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                            <span class="ak-expertise__feature-title">Affordable Solutions</span>
                            <span class="ak-expertise__feature-desc">Stunning interiors within your budget.</span>
                        </li>
                    </ul>

                    <a href="#" class="ak-expertise__btn">
                        Discover More
                        <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>
            </div>

            <!-- ============ RIGHT: MEDIA ============ -->
            <div class="col-12 col-lg-6 ak-expertise__media">
                <div class="ak-expertise__media-inner">
                    <img
                        src="./assets/images/portfolios/aakruti/aakriti-hero-photo-transparent.png"
                        alt="Warm, modern living room with a beige sofa, armchairs, round coffee table and lit wall panels — designed by Aakriti Space Designs"
                        class="ak-expertise__img">

                    <span class="ak-expertise__badge ak-expertise__badge--top">
                        <span class="badge-icon"><i class="fa-solid fa-couch"></i></span>
                        Creating Spaces, Enhancing Lives
                    </span>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="aakriti-services">
  <span class="glow-a"></span>

  <div class="container-xl">

    <div class="services-header">
      <div class="services-eyebrow">
        <span class="line"></span>
        <span class="label">OUR SERVICES</span>
        <span class="line"></span>
      </div>
      <h2 class="services-heading">Our Featured <span class="accent">Services</span></h2>
      <div class="services-rule">
        <span class="bar"></span>
        <span class="dot"></span>
      </div>
      <p class="services-sub">
        Thoughtful design. Timeless spaces. Tailored for you.<br>
        Explore our range of interior solutions crafted with creativity, functionality and style.
      </p>
    </div>

    <div class="row services-grid gy-4">

      <div class="col-service col-12 col-sm-6 col-lg-3">
        <div class="service-card">
          <span class="icon-box"><i class="fa-solid fa-blinds"></i></span>
          <div class="title">Interior</div>
          <span class="title-rule"></span>
          <div class="photo"><img src="assets\images\portfolios\aakruti\service-interior.png" alt="Modern living room interior design with warm ambient lighting and marble accents"></div>
          <ul class="checklist">
            <li><i class="fa-solid fa-circle-check"></i>Structural Plan</li>
            <li><i class="fa-solid fa-circle-check"></i>3D Design view</li>
            <li><i class="fa-solid fa-circle-check"></i>3D walk through</li>
          </ul>
          <a href="#interior" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-service col-12 col-sm-6 col-lg-3">
        <div class="service-card">
          <span class="icon-box"><i class="fa-solid fa-door-open"></i></span>
          <div class="title">Exterior</div>
          <span class="title-rule"></span>
          <div class="photo"><img src="assets\images\portfolios\aakruti\service-exterior.png" alt="Modern house exterior design with glass balconies and landscaped garden"></div>
          <ul class="checklist">
            <li><i class="fa-solid fa-circle-check"></i>Structural Plan</li>
            <li><i class="fa-solid fa-circle-check"></i>Aerodynamic view</li>
            <li><i class="fa-solid fa-circle-check"></i>3D Design view</li>
            <li><i class="fa-solid fa-circle-check"></i>3D walk through</li>
          </ul>
          <a href="#exterior" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-service col-12 col-sm-6 col-lg-3">
        <div class="service-card">
          <span class="icon-box"><i class="fa-solid fa-seedling"></i></span>
          <div class="title">Home Decor</div>
          <span class="title-rule"></span>
          <div class="photo"><img src="assets\images\portfolios\aakruti\service-homedecor.png" alt="Cozy home decor styling with potted plants, cushions and wooden coffee table"></div>
          <ul class="checklist">
            <li><i class="fa-solid fa-circle-check"></i>Artificial Lawns</li>
            <li><i class="fa-solid fa-circle-check"></i>Green Walls for</li>
            <li><i class="fa-solid fa-circle-check"></i>Terrace and Garden</li>
          </ul>
          <a href="#decor" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-service col-12 col-sm-6 col-lg-3">
        <div class="service-card">
          <span class="icon-box"><i class="fa-solid fa-chair"></i></span>
          <div class="title">Furniture</div>
          <span class="title-rule"></span>
          <div class="photo"><img src="assets\images\portfolios\aakruti\service-furniture.png" alt="Elegant pink velvet sofa furniture set styled with cushions and a side table"></div>
          <ul class="checklist">
            <li><i class="fa-solid fa-circle-check"></i>Sofa</li>
            <li><i class="fa-solid fa-circle-check"></i>Dining</li>
            <li><i class="fa-solid fa-circle-check"></i>Leisure chair</li>
            <li><i class="fa-solid fa-circle-check"></i>Open Seating</li>
          </ul>
          <a href="#furniture" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

    </div>

    <div class="services-cta">
      <div class="cta-left">
        <span class="cta-icon"><i class="fa-solid fa-headset"></i></span>
        <div class="cta-text">
          <div class="title">Need a Custom Solution?</div>
          <div class="sub">Let's design a space that's perfect for you.</div>
        </div>
      </div>
      <a href="#consult" class="btn-services-primary">
        Consult Our Experts <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>