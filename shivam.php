<?php
$pageTitle = 'Shivam Industries';
include __DIR__ . '/header.php';
?>





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

        --ind-blue: #2f5bf6;
        --ind-blue-light: #5b8cff;
        --ind-navy: #0a1a33;
        --ind-navy-2: #0c2140;
        --ind-ink: #ffffff;
        --ind-muted: #c3cede;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--ind-ink);
        background: #fff;
    }

    /* ============================================
   SECTION SHELL
   ============================================ */
    .industrial-hero {
        position: relative;
        min-height: 600px;
        min-height: clamp(480px, 62vw, 760px);
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: var(--ind-navy);
        background-image: url('./assets/images/portfolios/shivam/industrial-hero-bg.png');
        background-size: cover;
        background-position: center;
        padding-top: 144px;
    }

    .industrial-hero .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(6, 16, 33, 0.92) 0%, rgba(8, 20, 41, 0.75) 32%, rgba(8, 20, 41, 0.35) 60%, rgba(8, 20, 41, 0.08) 100%);
        z-index: 1;
    }

    .industrial-hero .dotgrid {
        position: absolute;
        left: clamp(1rem, 2vw, 3rem);
        bottom: clamp(1rem, 2vw, 3rem);
        width: 90px;
        height: 90px;
        background-image: radial-gradient(circle, rgba(91, 140, 255, 0.55) 1.6px, transparent 1.8px);
        background-size: 14px 14px;
        z-index: 2;
        opacity: .8;
    }

    .industrial-content {
        position: relative;
        z-index: 3;
        padding-top: clamp(2rem, 1.5rem + 2vw, 3.5rem);
        padding-bottom: clamp(2rem, 1.5rem + 2vw, 3.5rem);
    }

    /* ---------------- Badge ---------------- */
    .industrial-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: clamp(1.25rem, 1rem + 1vw, 2rem);
        max-width: 100%;
    }

    .industrial-badge .badge-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        border: 1.5px solid var(--ind-blue-light);
        color: var(--ind-blue-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex: 0 0 auto;
    }

    .industrial-badge .badge-text {
        font-size: var(--p);
        font-weight: 600;
        color: var(--ind-blue-light);
        white-space: nowrap;
    }

    .industrial-badge .badge-line {
        height: 1px;
        width: clamp(60px, 12vw, 220px);
        background: linear-gradient(90deg, var(--ind-blue-light), transparent);
        flex: 0 1 auto;
    }

    /* ---------------- Heading ---------------- */
    .industrial-heading {
        font-weight: 800;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: #fff;
        margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
        max-width: 18ch;
    }

    .industrial-desc {
        font-size: var(--p-large);
        line-height: var(--lh-body);
        color: var(--ind-muted);
        max-width: 52ch;
        margin-bottom: clamp(1.75rem, 1.4rem + 1.4vw, 2.5rem);
    }

    /* ---------------- CTA buttons ---------------- */
    .industrial-cta-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: clamp(2rem, 1.6rem + 1.6vw, 3rem);
    }

    .btn-industrial-primary {
        font-size: var(--p);
        font-weight: 600;
        color: #fff;
        background: linear-gradient(90deg, var(--ind-blue), #3f6bff);
        border: none;
        border-radius: 8px;
        padding: 0.95rem 1.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        white-space: nowrap;
        box-shadow: 0 10px 24px -10px rgba(47, 91, 246, 0.65);
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .btn-industrial-primary:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 14px 28px -10px rgba(47, 91, 246, 0.75);
    }

    .btn-industrial-outline {
        font-size: var(--p);
        font-weight: 600;
        color: #fff;
        background: transparent;
        border: 1.5px solid rgba(255, 255, 255, 0.55);
        border-radius: 8px;
        padding: 0.95rem 1.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        white-space: nowrap;
        transition: transform .2s ease, border-color .2s ease, background .2s ease;
    }

    .btn-industrial-outline:hover {
        color: #fff;
        border-color: #fff;
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-2px);
    }

    .btn-industrial-primary i,
    .btn-industrial-outline i {
        transition: transform .2s ease;
        font-size: 0.85em;
    }

    .btn-industrial-primary:hover i,
    .btn-industrial-outline:hover i {
        transform: translate(2px, -2px);
    }

    /* ---------------- Feature trio ---------------- */
    .industrial-features {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: clamp(1rem, 0.8rem + 1vw, 1.75rem);
    }

    .industrial-feature {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        min-width: 0;
    }

    .industrial-feature .icon-circle {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        flex: 0 0 auto;
    }

    .industrial-feature .label {
        font-size: var(--p);
        font-weight: 600;
        color: #fff;
        white-space: nowrap;
    }

    .industrial-divider {
        width: 1px;
        height: 32px;
        background: rgba(255, 255, 255, 0.25);
        flex: 0 0 auto;
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .industrial-content {
            padding-left: 1rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .industrial-desc {
            max-width: 48ch;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .industrial-heading {
            max-width: 16ch;
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .industrial-hero {
            min-height: 460px;
            min-height: clamp(460px, 70vw, 700px);
        }

        .industrial-overlay-boost .overlay {
            background: linear-gradient(100deg, rgba(6, 16, 33, 0.94) 0%, rgba(8, 20, 41, 0.8) 45%, rgba(8, 20, 41, 0.45) 75%, rgba(8, 20, 41, 0.15) 100%);
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .industrial-hero {
            background-position: 68% center;
        }

        .industrial-hero .overlay {
            background: linear-gradient(180deg, rgba(6, 16, 33, 0.55) 0%, rgba(6, 16, 33, 0.88) 45%, rgba(6, 16, 33, 0.96) 100%);
        }

        .industrial-heading {
            max-width: 100%;
        }

        .industrial-features {
            gap: 1rem 1.5rem;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .industrial-hero {
            min-height: auto;
        }

        .industrial-hero {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .industrial-badge .badge-line {
            display: none;
        }

        .industrial-cta-group {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-industrial-primary,
        .btn-industrial-outline {
            justify-content: center;
        }

        .industrial-features {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .industrial-divider {
            display: none;
        }

        .dotgrid {
            display: none;
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .industrial-badge .badge-text {
            white-space: normal;
            font-size: var(--p-small);
        }

        .industrial-heading {
            font-size: clamp(1.8rem, 1.3rem + 5vw, 2.4rem);
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .industrial-feature .icon-circle {
            width: 44px;
            height: 44px;
            font-size: 1rem;
        }

        .btn-industrial-primary,
        .btn-industrial-outline {
            padding: 0.85rem 1.25rem;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .industrial-badge .badge-icon {
            width: 36px;
            height: 36px;
            font-size: .95rem;
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

        --shivam-teal: #0f8a80;
        --shivam-teal-dark: #0b6c64;
        --shivam-navy: #14213d;
        --shivam-muted: #5b6472;
        --shivam-tint: #e6f4f2;
        --shivam-border: #e7ecef;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--shivam-navy);
        background: #fff;
    }

    /* ============================================
   SECTION SHELL
   ============================================ */
    .shivam-about {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        padding-top: clamp(2.5rem, 1.8rem + 3vw, 4.5rem);
        padding-bottom: clamp(2.5rem, 1.8rem + 3vw, 4.5rem);
    }

    .shivam-about .deco-curve {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 42%;
        height: 22%;
        background: linear-gradient(135deg, var(--shivam-tint) 0%, transparent 70%);
        border-radius: 0 100% 0 0;
        z-index: 0;
    }

    /* ---------------- Left content ---------------- */
    .shivam-content {
        position: relative;
        z-index: 2;
    }

    .shivam-eyebrow {
        font-size: var(--caption);
        font-weight: 700;
        letter-spacing: 0.18em;
        color: var(--shivam-teal);
        margin-bottom: 0.6rem;
    }

    .shivam-eyebrow-rule {
        width: 46px;
        height: 3px;
        border-radius: 2px;
        background: var(--shivam-teal);
        margin-bottom: clamp(1rem, 0.8rem + 0.8vw, 1.5rem);
    }

    .shivam-heading {
        font-weight: 800;
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        color: var(--shivam-navy);
        margin-bottom: clamp(1rem, 0.8rem + 0.8vw, 1.5rem);
    }

    .shivam-heading .accent {
        color: var(--shivam-teal);
        display: block;
    }

    .shivam-rule {
        width: 46px;
        height: 3px;
        border-radius: 2px;
        background: var(--shivam-teal-dark);
        margin-bottom: clamp(1.25rem, 1rem + 1vw, 1.75rem);
    }

    .shivam-desc {
        font-size: var(--p);
        line-height: var(--lh-body);
        color: var(--shivam-muted);
        max-width: 58ch;
        margin-bottom: 1.1rem;
    }

    .shivam-desc:last-of-type {
        margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
    }

    /* ---------------- Feature list ---------------- */
    .shivam-feature-list {
        display: flex;
        flex-direction: column;
        gap: clamp(1rem, 0.85rem + 0.75vw, 1.5rem);
    }

    .shivam-feature {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .shivam-feature .icon-circle {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--shivam-tint);
        color: var(--shivam-teal-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex: 0 0 auto;
    }

    .shivam-feature .txt {
        min-width: 0;
        padding-top: 0.15rem;
    }

    .shivam-feature .txt .title {
        font-size: var(--p);
        font-weight: 700;
        color: var(--shivam-navy);
        margin-bottom: 0.3rem;
        line-height: var(--lh-tight);
    }

    .shivam-feature .txt .sub {
        font-size: var(--p-small);
        color: var(--shivam-muted);
        line-height: var(--lh-tight);
    }

    /* ============================================
   RIGHT: IMAGE + STATS
   ============================================ */
    .shivam-media {
        position: relative;
        z-index: 2;
    }

    .shivam-photo {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 45px -20px rgba(20, 33, 61, 0.3);
        margin-bottom: clamp(1.25rem, 1rem + 1vw, 1.75rem);
    }

    .shivam-photo img {
        width: 100%;
        height: auto;
        display: block;
        aspect-ratio: 4 / 3;
        object-fit: cover;
    }

    .shivam-stats {
        background: linear-gradient(135deg, var(--shivam-teal-dark), var(--shivam-teal));
        border-radius: 20px;
        padding: clamp(1.25rem, 1rem + 1vw, 2rem) clamp(0.75rem, 0.6rem + 0.6vw, 1.25rem);
    }

    .shivam-stats-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .shivam-stat {
        text-align: center;
        padding: 0 0.5rem;
        border-right: 1px solid rgba(255, 255, 255, 0.25);
        min-width: 0;
    }

    .shivam-stat:last-child {
        border-right: none;
    }

    .shivam-stat .icon-circle {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: #fff;
        color: var(--shivam-teal-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin: 0 auto 0.75rem;
    }

    .shivam-stat .number {
        font-weight: 800;
        font-size: var(--h4);
        color: #fff;
        line-height: 1.1;
        margin-bottom: 0.3rem;
    }

    .shivam-stat .label {
        font-size: var(--p-small);
        color: rgba(255, 255, 255, 0.9);
        line-height: var(--lh-tight);
    }

    /* ============================================
   MEDIA QUERIES
   ============================================ */
    @media (max-width: 1919.98px) {

        /* below extra large */
        .shivam-about {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    @media (max-width: 1599.98px) {

        /* below large desktop */
        .shivam-desc {
            max-width: 54ch;
        }
    }

    @media (max-width: 1399.98px) {

        /* below desktop */
        .shivam-stat .number {
            font-size: var(--h5);
        }
    }

    @media (max-width: 1199.98px) {

        /* below laptop */
        .shivam-stats-grid {
            row-gap: 1.25rem;
        }

        .shivam-feature .icon-circle {
            width: 50px;
            height: 50px;
            font-size: 1.1rem;
        }
    }

    @media (max-width: 991.98px) {

        /* below tablet landscape */
        .shivam-media {
            margin-top: 2.5rem;
        }

        .deco-curve {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        /* below tablet portrait */
        .shivam-about {
            padding-top: 2.25rem;
            padding-bottom: 2.25rem;
        }

        .shivam-stats-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            row-gap: 1.5rem;
        }

        .shivam-stat {
            border-right: none;
            margin-bottom: 0;
        }

        .shivam-stat:nth-child(odd) {
            border-right: 1px solid rgba(255, 255, 255, 0.25);
        }
    }

    @media (max-width: 575.98px) {

        /* below small tablet/landscape phone */
        .shivam-photo img {
            aspect-ratio: 4 / 3.4;
        }

        .shivam-feature {
            gap: 0.75rem;
        }
    }

    @media (max-width: 479.98px) {

        /* below large phone */
        .shivam-stat .icon-circle {
            width: 44px;
            height: 44px;
            font-size: 1rem;
        }

        .shivam-stat .number {
            font-size: var(--h6);
        }

        .shivam-feature .icon-circle {
            width: 44px;
            height: 44px;
            font-size: 1rem;
        }
    }

    @media (max-width: 359.98px) {

        /* below small phone */
        .shivam-stats {
            padding: 1rem 0.5rem;
        }

        .shivam-stats-grid {
            column-gap: 0.25rem;
        }
    }
</style>


<style>
/* ============================================
   SCOPE NOTE
   Everything below is scoped under .svmcms-wrap
   so it never touches Bootstrap defaults or any
   existing site CSS. No global element selectors,
   no Bootstrap class overrides — only new,
   prefixed classes.
   ============================================ */

.svmcms-wrap,
.svmcms-wrap *,
.svmcms-wrap *::before,
.svmcms-wrap *::after{
  box-sizing:border-box;
}

/* ============================================
   RESPONSIVE TYPOGRAPHY SCALE
   ============================================ */
.svmcms-wrap{
  --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);        /* 32px → 56px */
  --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);  /* 28px → 44px */
  --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);   /* 24px → 36px */
  --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);    /* 20px → 28px */
  --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);  /* 18px → 22px */
  --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);   /* 16px → 18px */

  --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);  /* 18px → 20px */
  --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);      /* 16px → 17px */
  --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem); /* 14px → 15px */
  --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);  /* 12px → 13px */

  --lh-heading: 1.2;
  --lh-body: 1.6;
  --lh-tight: 1.3;
  --ls-heading: -0.02em;

  /* Color tokens sampled from the source design */
  --svmcms-teal: #0d8a86;
  --svmcms-teal-dark: #086663;
  --svmcms-teal-tint: #eaf7f6;
  --svmcms-navy: #10222f;
  --svmcms-gray: #6c7784;
  --svmcms-divider: #dfebea;
  --svmcms-bg-top: #f6fbfb;
  --svmcms-bg-bottom: #e9f6f5;
}

.svmcms-wrap{
  font-family:'Inter', system-ui, sans-serif;
  background: linear-gradient(180deg, var(--svmcms-bg-top) 0%, var(--svmcms-bg-bottom) 100%);
  color: var(--svmcms-navy);
  overflow:hidden;
  position:relative;
}

/* ---------- Shared container padding ---------- */
.svmcms-container{
  width:100%;
  max-width:1320px;
  margin-inline:auto;
  padding-inline: clamp(1.25rem, 2vw, 3rem);
  position:relative;
  z-index:2;
}

/* ============================================
   HERO
   ============================================ */
.svmcms-hero{
  padding-block: clamp(3rem, 6vw, 6rem) clamp(2.5rem, 5vw, 4rem);
  position:relative;
}

/* decorative dot grid (purely ambient, never overlaps text: behind + clipped) */
.svmcms-dotgrid{
  position:absolute;
  left: clamp(0px, 2vw, 40px);
  bottom: 6%;
  width:180px;
  height:180px;
  background-image: radial-gradient(var(--svmcms-teal) 1.6px, transparent 1.6px);
  background-size: 18px 18px;
  opacity:.35;
  z-index:0;
  pointer-events:none;
}

.svmcms-eyebrow{
  font-family:'Poppins', sans-serif;
  font-weight:700;
  font-size: var(--caption);
  letter-spacing: .18em;
  color: var(--svmcms-teal);
  margin-bottom: .75rem;
}
.svmcms-eyebrow-rule{
  display:block;
  width:38px;
  height:3px;
  border-radius:2px;
  background: var(--svmcms-teal);
  margin-bottom: 1.1rem;
}

.svmcms-h1{
  font-family:'Poppins', sans-serif;
  font-weight:800;
  font-size: var(--h1);
  line-height: var(--lh-heading);
  letter-spacing: var(--ls-heading);
  color: var(--svmcms-navy);
  margin-bottom: 1.25rem;
  max-width: 18ch;
  overflow-wrap: break-word;
}
.svmcms-h1 .svmcms-accent{ color: var(--svmcms-teal); }

.svmcms-lead{
  font-size: var(--p-large);
  line-height: var(--lh-body);
  color: var(--svmcms-gray);
  max-width: 46ch;
  margin-bottom: 2rem;
}

.svmcms-btn{
  font-family:'Poppins', sans-serif;
  font-weight:600;
  font-size: var(--p);
  color:#fff;
  background: var(--svmcms-teal);
  border:none;
  border-radius: 50px;
  padding: .9em 1.7em;
  display:inline-flex;
  align-items:center;
  gap:.65em;
  text-decoration:none;
  white-space:nowrap;
  transition: background .2s ease, transform .2s ease;
}
.svmcms-btn i{ transition: transform .2s ease; }
.svmcms-btn:hover,
.svmcms-btn:focus-visible{
  background: var(--svmcms-teal-dark);
  color:#fff;
  transform: translateY(-2px);
}
.svmcms-btn:hover i{ transform: translateX(3px); }

.svmcms-hero-visual{
  position:relative;
  z-index:1;
  min-width:0; /* prevents flex/grid overflow pushing text */
}
.svmcms-mockup-img{
  width:100%;
  height:auto;
  display:block;
  filter: drop-shadow(0 30px 45px rgba(16,34,47,.16));
}

/* ============================================
   FEATURES
   ============================================ */
.svmcms-features{
  padding-block: clamp(1rem, 3vw, 2.5rem) clamp(3.5rem, 6vw, 6rem);
  position:relative;
}

.svmcms-section-title{
  display:flex;
  align-items:center;
  justify-content:center;
  gap: clamp(.75rem, 2vw, 1.5rem);
  margin-bottom: clamp(2.25rem, 4vw, 3.5rem);
}
.svmcms-section-title .svmcms-line{
  height:2px;
  width: clamp(28px, 6vw, 64px);
  background: var(--svmcms-teal);
  flex: 0 0 auto;
}
.svmcms-section-title h2{
  font-family:'Poppins', sans-serif;
  font-weight:700;
  font-size: var(--h2);
  line-height: var(--lh-heading);
  color: var(--svmcms-teal-dark);
  margin:0;
  white-space:nowrap;
}

.svmcms-feature{
  text-align:center;
  padding-inline: .5rem;
  min-width:0;
}
.svmcms-feature-col{
  border-left: 1px solid transparent; /* placeholder so lg divider doesn't shift layout */
}
.svmcms-icon-circle{
  width:76px;
  height:76px;
  border-radius:50%;
  background: var(--svmcms-teal-tint);
  color: var(--svmcms-teal);
  display:flex;
  align-items:center;
  justify-content:center;
  font-size: 1.6rem;
  margin: 0 auto 1.25rem;
  flex-shrink:0;
}
.svmcms-feature h3{
  font-family:'Poppins', sans-serif;
  font-weight:700;
  font-size: var(--h5);
  line-height: var(--lh-tight);
  color: var(--svmcms-navy);
  margin-bottom: .6rem;
}
.svmcms-feature p{
  font-size: var(--p-small);
  line-height: var(--lh-body);
  color: var(--svmcms-gray);
  margin-bottom:0;
  max-width: 26ch;
  margin-inline:auto;
}

/* vertical dividers between feature columns — desktop only */
@media (min-width: 992px){
  .svmcms-feature-col:not(:first-child){
    border-left: 1px solid var(--svmcms-divider);
  }
}

/* ============================================
   MEDIA QUERIES
   ============================================ */

/* below extra large */
@media (max-width: 1919.98px){
  .svmcms-container{ max-width: 1260px; }
}

/* below large desktop */
@media (max-width: 1599.98px){
  .svmcms-container{ max-width: 1140px; }
  .svmcms-h1{ max-width: 17ch; }
}

/* below desktop */
@media (max-width: 1399.98px){
  .svmcms-container{ max-width: 100%; }
  .svmcms-hero{ padding-block: clamp(2.5rem, 5vw, 4.5rem) 3rem; }
  .svmcms-icon-circle{ width:70px; height:70px; font-size:1.45rem; }
}

/* below laptop */
@media (max-width: 1199.98px){
  .svmcms-h1{ max-width: 16ch; }
  .svmcms-lead{ max-width: 42ch; }
  .svmcms-feature p{ max-width: 24ch; }
}

/* below tablet landscape — stack hero, center content */
@media (max-width: 991.98px){
  .svmcms-hero .row{ text-align:center; }
  .svmcms-h1{ max-width: none; margin-inline:auto; }
  .svmcms-lead{ margin-inline:auto; }
  .svmcms-eyebrow-rule{ margin-inline:auto; }
  .svmcms-hero-visual{ max-width:560px; margin-inline:auto; }
  .svmcms-dotgrid{ display:none; } /* avoid clashing with centered stacked text */
  .svmcms-feature-col:nth-child(odd){
    border-right: 1px solid var(--svmcms-divider);
  }
  .svmcms-feature-col{ padding-block: .5rem; }
}

/* below tablet portrait */
@media (max-width: 767.98px){
  .svmcms-container{ padding-inline: 1.25rem; }
  .svmcms-hero{ padding-block: 2.5rem 2rem; }
  .svmcms-features{ padding-block: .5rem 3rem; }
  .svmcms-section-title{ gap:.6rem; }
  .svmcms-section-title .svmcms-line{ width:24px; }
  .svmcms-btn{ padding:.85em 1.5em; }
  .svmcms-feature-col:nth-child(odd){ border-right: none; }
  .svmcms-feature-col{
    border-bottom: 1px solid var(--svmcms-divider);
    padding-block: 1.5rem;
  }
  .svmcms-feature-col:nth-last-child(-n+1),
  .svmcms-feature-col:nth-last-child(-n+2){ border-bottom:none; }
}

/* below small tablet / landscape phone */
@media (max-width: 575.98px){
  .svmcms-eyebrow{ letter-spacing:.12em; }
  .svmcms-btn{
    width:100%;
    justify-content:center;
  }
  .svmcms-section-title h2{ white-space:normal; }
  .svmcms-icon-circle{ width:64px; height:64px; font-size:1.3rem; }
}

/* below large phone */
@media (max-width: 479.98px){
  .svmcms-container{ padding-inline: 1rem; }
  .svmcms-h1{ margin-bottom: 1rem; }
  .svmcms-lead{ margin-bottom: 1.5rem; }
  .svmcms-feature p{ max-width: 22ch; }
}

/* below small phone */
@media (max-width: 359.98px){
  .svmcms-eyebrow{ font-size: .68rem; letter-spacing:.1em; }
  .svmcms-btn{ font-size:.9rem; padding:.8em 1.1em; }
  .svmcms-icon-circle{ width:58px; height:58px; font-size:1.15rem; }
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

  /* brand palette (documented by this very guide) */
  --sg-teal: #0A8F7A;
  --sg-soft-teal: #E6F4F2;
  --sg-charcoal: #1F2A37;
  --sg-steel: #607D8B;
  --sg-light-gray: #F7F9FA;
  --sg-aqua-mist: #B7E3DB;
  --sg-pale-teal: #D1ECE9;
  --sg-soft-green: #C8E6C9;
  --sg-blue-gray: #90A4AE;
  --sg-dark-green: #065F46;
  --sg-accent: #14B8A6;
  --sg-muted: #5b6472;
  --sg-border: #e7ecef;
}

* { box-sizing: border-box; }
body { font-family: 'Poppins', sans-serif; color: var(--sg-charcoal); background:#fff; }

.styleguide {
  padding-top: clamp(2rem, 1.5rem + 2vw, 3.5rem);
  padding-bottom: clamp(2rem, 1.5rem + 2vw, 3.5rem);
  background: #fff;
}

/* ---------------- Header ---------------- */
.sg-header {
  display: flex;
  flex-wrap: wrap;
  gap: clamp(1.5rem, 1.2rem + 1.2vw, 3rem);
  align-items: flex-start;
  padding-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
  border-bottom: 1px solid var(--sg-border);
  margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
}
.sg-brand { flex: 1 1 320px; min-width: 260px; }
.sg-brand-row { display: flex; align-items: center; gap: 0.85rem; margin-bottom: 0.85rem; }
.sg-brand-row img { width: 44px; height: 44px; flex: 0 0 auto; }
.sg-brand-row .name {
  font-size: var(--h4);
  font-weight: 700;
  color: var(--sg-teal);
  letter-spacing: 0.02em;
}
.sg-brand p {
  font-size: var(--p);
  color: var(--sg-muted);
  line-height: var(--lh-body);
  max-width: 42ch;
  margin-bottom: 0.75rem;
}
.sg-brand .rule { width: 40px; height: 3px; border-radius: 2px; background: var(--sg-teal); }

.sg-section-title {
  font-size: var(--caption);
  font-weight: 700;
  letter-spacing: 0.14em;
  color: var(--sg-charcoal);
  margin-bottom: 1rem;
}

/* ---------------- Primary colors ---------------- */
.sg-primary { flex: 2 1 560px; min-width: 280px; }
.sg-swatch-row {
  display: grid;
  grid-template-columns: repeat(5, minmax(0,1fr));
  gap: clamp(0.6rem, 0.5rem + 0.5vw, 1rem);
}
.sg-swatch {
  border-radius: 10px;
  height: clamp(80px, 7vw, 110px);
  display: flex;
  align-items: flex-end;
  padding: 0.6rem;
  margin-bottom: 0.6rem;
  border: 1px solid rgba(0,0,0,0.06);
}
.sg-swatch .hex {
  font-size: var(--p-small);
  font-weight: 700;
  font-family: monospace;
}
.sg-swatch-name {
  font-size: var(--p-small);
  font-weight: 700;
  color: var(--sg-charcoal);
  margin-bottom: 0.15rem;
}
.sg-swatch-desc {
  font-size: var(--caption);
  color: var(--sg-muted);
  line-height: var(--lh-tight);
}

/* ---------------- Section divider ---------------- */
.sg-divider { border: none; border-top: 1px solid var(--sg-border); margin: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem) 0; }

/* ---------------- Secondary / accent / gradient row ---------------- */
.sg-row2 { display: flex; flex-wrap: wrap; gap: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem); }
.sg-secondary { flex: 2 1 480px; min-width: 260px; }
.sg-secondary .sg-swatch-row { grid-template-columns: repeat(5, minmax(0,1fr)); }
.sg-secondary .sg-swatch { height: clamp(56px, 5vw, 76px); align-items: flex-start; }

.sg-accent { flex: 1 1 220px; min-width: 200px; border-left: 1px solid var(--sg-border); padding-left: clamp(1rem, 0.85rem + 0.6vw, 1.75rem); }
.sg-accent .sg-swatch { height: clamp(56px, 5vw, 76px); align-items: center; justify-content: center; }
.sg-accent .sg-swatch .hex { font-size: var(--p); color: #fff; }
.sg-accent p { font-size: var(--caption); color: var(--sg-muted); line-height: var(--lh-tight); margin-top: 0.6rem; }

.sg-gradients { flex: 1 1 300px; min-width: 260px; border-left: 1px solid var(--sg-border); padding-left: clamp(1rem, 0.85rem + 0.6vw, 1.75rem); }
.sg-gradients .grad-row { display: flex; gap: 0.75rem; }
.sg-gradients .sg-swatch { height: clamp(56px, 5vw, 76px); flex: 1 1 50%; align-items: center; justify-content: center; }
.sg-gradients .sg-swatch .hex { font-size: var(--p-small); color: #fff; font-weight: 700; text-align:center; }
.sg-gradients .cap { font-size: var(--caption); color: var(--sg-muted); text-align: center; margin-top: 0.5rem; }

/* ---------------- Typography + UI elements row ---------------- */
.sg-row3 { display: flex; flex-wrap: wrap; gap: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem); }
.sg-typography { flex: 1 1 340px; min-width: 260px; }
.sg-type-row { display: flex; gap: clamp(1.5rem, 1.2rem + 1.2vw, 2.5rem); }
.sg-type-sample { text-align: left; }
.sg-type-sample .aa {
  font-size: clamp(3rem, 2.4rem + 3vw, 4.5rem);
  font-weight: 800;
  line-height: 1;
  margin-bottom: 0.5rem;
}
.sg-type-sample.poppins .aa { color: var(--sg-teal); font-family: 'Poppins', sans-serif; }
.sg-type-sample.opensans .aa { color: var(--sg-charcoal); font-family: 'Open Sans', sans-serif; }
.sg-type-sample .name { font-weight: 700; font-size: var(--h5); color: var(--sg-charcoal); }
.sg-type-sample .desc { font-size: var(--p-small); color: var(--sg-muted); }

.sg-ui { flex: 2 1 560px; min-width: 280px; border-left: 1px solid var(--sg-border); padding-left: clamp(1rem, 0.85rem + 0.6vw, 1.75rem); }
.sg-ui-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
  gap: clamp(0.5rem, 0.4rem + 0.4vw, 0.85rem);
}
.sg-ui-tile {
  border-radius: 10px;
  background: var(--sg-soft-teal);
  color: var(--sg-teal);
  padding: clamp(0.85rem, 0.7rem + 0.6vw, 1.25rem) 0.5rem;
  text-align: center;
}
.sg-ui-tile.active { background: var(--sg-teal); color: #fff; }
.sg-ui-tile i { font-size: clamp(1.1rem, 1rem + 0.5vw, 1.5rem); margin-bottom: 0.6rem; }
.sg-ui-tile .lbl { font-size: var(--caption); font-weight: 600; line-height: var(--lh-tight); }

/* ---------------- Palette in use ---------------- */
.sg-inuse {
  border: 1px solid var(--sg-border);
  border-radius: 16px;
  overflow: hidden;
  margin-top: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
}
.sg-inuse-label {
  padding: 1rem clamp(1rem, 0.85rem + 0.6vw, 1.75rem);
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: clamp(1rem, 0.8rem + 1vw, 2.5rem);
  border-bottom: 1px solid var(--sg-border);
}
.sg-inuse-label .tag {
  font-size: var(--caption);
  font-weight: 700;
  letter-spacing: 0.1em;
  color: var(--sg-charcoal);
  flex: 0 0 auto;
}
.sg-inuse-label .brand { display: flex; align-items: center; gap: 0.6rem; flex: 0 0 auto; }
.sg-inuse-label .brand img { width: 30px; height: 30px; }
.sg-inuse-label .brand span { font-weight: 700; color: var(--sg-teal); font-size: var(--p); }
.sg-inuse-nav { display: flex; align-items: center; gap: clamp(1rem, 0.8rem + 1vw, 2rem); flex-wrap: wrap; }
.sg-inuse-nav a {
  font-size: var(--p-small);
  font-weight: 600;
  color: var(--sg-charcoal);
  text-decoration: none;
}
.sg-inuse-nav a.home { color: var(--sg-teal); border-bottom: 2px solid var(--sg-teal); padding-bottom: 4px; }
.sg-inuse-label .phone { display:flex; align-items:center; gap:0.5rem; font-size: var(--p-small); font-weight:600; color: var(--sg-charcoal); flex: 0 0 auto; }
.sg-inuse-label .phone i { color: var(--sg-teal); }
.btn-quote {
  background: var(--sg-teal);
  color: #fff;
  font-size: var(--p-small);
  font-weight: 600;
  border-radius: 8px;
  padding: 0.55rem 1.1rem;
  text-decoration: none;
  flex: 0 0 auto;
  margin-left: auto;
}

.sg-inuse-hero { position: relative; background: var(--sg-light-gray); }
.sg-inuse-hero-inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: clamp(1rem, 0.8rem + 1vw, 2rem);
  padding: clamp(1.25rem, 1rem + 1vw, 2.5rem) clamp(1rem, 0.85rem + 0.6vw, 1.75rem);
}
.sg-inuse-text { flex: 1 1 260px; min-width: 220px; }
.sg-inuse-text h4 {
  font-size: var(--h4);
  font-weight: 800;
  color: var(--sg-charcoal);
  line-height: var(--lh-heading);
  margin-bottom: 1rem;
}
.sg-inuse-text h4 .accent { color: var(--sg-teal); }
.btn-explore {
  background: var(--sg-teal);
  color: #fff;
  font-size: var(--p-small);
  font-weight: 600;
  border-radius: 8px;
  padding: 0.7rem 1.25rem;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  text-decoration: none;
}

.sg-inuse-feats {
  flex: 2 1 420px;
  min-width: 260px;
  display: grid;
  grid-template-columns: repeat(4, minmax(0,1fr));
  gap: 0.75rem;
}
.sg-inuse-feat { text-align: center; }
.sg-inuse-feat i { font-size: 1.3rem; color: var(--sg-teal); margin-bottom: 0.5rem; }
.sg-inuse-feat .lbl { font-size: var(--caption); font-weight: 600; color: var(--sg-charcoal); line-height: var(--lh-tight); }

.sg-inuse-photo {
  flex: 1 1 220px;
  min-width: 180px;
  max-width: 320px;
  border-radius: 12px;
  overflow: hidden;
}
.sg-inuse-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }

/* ============================================
   MEDIA QUERIES
   ============================================ */
@media (max-width: 1919.98px) { /* below extra large */
  .styleguide { padding-left: 1rem; padding-right: 1rem; }
}

@media (max-width: 1599.98px) { /* below large desktop */
  .sg-brand p { max-width: 38ch; }
}

@media (max-width: 1399.98px) { /* below desktop */
  .sg-ui-grid { grid-template-columns: repeat(3, minmax(0,1fr)); }
}

@media (max-width: 1199.98px) { /* below laptop */
  .sg-swatch-row { grid-template-columns: repeat(3, minmax(0,1fr)); }
  .sg-secondary .sg-swatch-row { grid-template-columns: repeat(3, minmax(0,1fr)); }
}

@media (max-width: 991.98px) { /* below tablet landscape */
  .sg-accent, .sg-gradients, .sg-ui { border-left: none; padding-left: 0; }
  .sg-inuse-photo { display: none; }
}

@media (max-width: 767.98px) { /* below tablet portrait */
  .styleguide { padding-top: 2.25rem; padding-bottom: 2.25rem; }
  .sg-swatch-row { grid-template-columns: repeat(2, minmax(0,1fr)); }
  .sg-secondary .sg-swatch-row { grid-template-columns: repeat(2, minmax(0,1fr)); }
  .sg-ui-grid { grid-template-columns: repeat(2, minmax(0,1fr)); }
  .sg-type-row { flex-direction: column; gap: 1.5rem; }
  .sg-inuse-nav { display: none; }
  .btn-quote { margin-left: 0; }
  .sg-inuse-feats { grid-template-columns: repeat(2, minmax(0,1fr)); }
}

@media (max-width: 575.98px) { /* below small tablet/landscape phone */
  .sg-inuse-label { flex-direction: column; align-items: flex-start; }
  .btn-quote { width: 100%; text-align: center; margin-left: 0; }
}

@media (max-width: 479.98px) { /* below large phone */
  .sg-swatch-row, .sg-secondary .sg-swatch-row, .sg-ui-grid, .sg-inuse-feats { grid-template-columns: repeat(2, minmax(0,1fr)); }
  .sg-type-sample .aa { font-size: 2.5rem; }
}

@media (max-width: 359.98px) { /* below small phone */
  .sg-brand-row img { width: 36px; height: 36px; }
  .sg-brand-row .name { font-size: var(--h5); }
}
</style>

<section class="industrial-hero industrial-overlay-boost">
    <span class="overlay"></span>
    <span class="dotgrid"></span>

    <div class="container-xl">
        <div class="row">
            <div class="col-12 col-xl-8 col-lg-9">
                <div class="industrial-content">

                    <div class="industrial-badge">
                        <span class="badge-icon"><i class="fa-solid fa-shield-halved"></i></span>
                        <span class="badge-text">Trusted Industrial Solutions</span>
                        <span class="badge-line"></span>
                    </div>

                    <h1 class="industrial-heading">Empowering Industries Since 2002</h1>

                    <p class="industrial-desc">
                        Delivering trusted industrial chemicals and solvents with quality, reliability, and excellence across diverse manufacturing sectors.
                    </p>

                    <div class="industrial-cta-group">
                        <a href="contact.php" class="btn-industrial-primary">
                            Get Started <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                        <a href="portfolios.php" class="btn-industrial-outline">
                            View Portfolios <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                    </div>

                    <div class="industrial-features">
                        <div class="industrial-feature">
                            <span class="icon-circle"><i class="fa-solid fa-truck-fast"></i></span>
                            <span class="label">Reliable Supply</span>
                        </div>
                        <span class="industrial-divider"></span>
                        <div class="industrial-feature">
                            <span class="icon-circle"><i class="fa-solid fa-award"></i></span>
                            <span class="label">Quality Assured</span>
                        </div>
                        <span class="industrial-divider"></span>
                        <div class="industrial-feature">
                            <span class="icon-circle"><i class="fa-solid fa-hard-hat"></i></span>
                            <span class="label">Industry Expertise</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="shivam-about">
    <span class="deco-curve"></span>

    <div class="container-xl">
        <div class="row g-4 g-lg-5 align-items-start">

            <!-- Left: Content -->
            <div class="col-12 col-lg-6">
                <div class="shivam-content">

                    <div class="shivam-eyebrow">ABOUT SHIVAM INDUSTRIES</div>
                    <span class="shivam-eyebrow-rule"></span>

                    <h2 class="shivam-heading">
                        Trusted Chemical<br>
                        Solutions<br>
                        <span class="accent">Since 2002</span>
                    </h2>
                    <span class="shivam-rule"></span>

                    <p class="shivam-desc">
                        Shivam Industries is a leading manufacturer, supplier, and distributor of high-quality chemical products. Since our inception in 2002, we have been committed to delivering reliable solutions that meet the evolving needs of industries across the globe.
                    </p>
                    <p class="shivam-desc">
                        With a strong focus on quality, innovation, and customer satisfaction, we continue to build lasting relationships and drive excellence in every delivery.
                    </p>

                    <div class="shivam-feature-list">
                        <div class="shivam-feature">
                            <span class="icon-circle"><i class="fa-solid fa-certificate"></i></span>
                            <div class="txt">
                                <div class="title">Premium Quality</div>
                                <div class="sub">We ensure the highest quality standards in every product we deliver.</div>
                            </div>
                        </div>
                        <div class="shivam-feature">
                            <span class="icon-circle"><i class="fa-solid fa-flask"></i></span>
                            <div class="txt">
                                <div class="title">Wide Range of Chemicals</div>
                                <div class="sub">We offer a comprehensive range of chemicals to serve diverse industry needs.</div>
                            </div>
                        </div>
                        <div class="shivam-feature">
                            <span class="icon-circle"><i class="fa-solid fa-users"></i></span>
                            <div class="txt">
                                <div class="title">Customer Satisfaction</div>
                                <div class="sub">Our customer-centric approach drives us to deliver consistent value and trust.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Image + Stats -->
            <div class="col-12 col-lg-6">
                <div class="shivam-media">
                    <div class="shivam-photo">
                        <img src="./assets/images/portfolios/shivam/lab-beakers-image.png" alt="Laboratory glassware with colored chemical solutions representing Shivam Industries' chemical products">
                    </div>

                    <div class="shivam-stats">
                        <div class="shivam-stats-grid">
                            <div class="shivam-stat">
                                <span class="icon-circle"><i class="fa-solid fa-award"></i></span>
                                <div class="number">22+</div>
                                <div class="label">Years of Experience</div>
                            </div>
                            <div class="shivam-stat">
                                <span class="icon-circle"><i class="fa-solid fa-flask"></i></span>
                                <div class="number">500+</div>
                                <div class="label">Products</div>
                            </div>
                            <div class="shivam-stat">
                                <span class="icon-circle"><i class="fa-solid fa-user-group"></i></span>
                                <div class="number">1000+</div>
                                <div class="label">Satisfied Clients</div>
                            </div>
                            <div class="shivam-stat">
                                <span class="icon-circle"><i class="fa-solid fa-globe"></i></span>
                                <div class="number">25+</div>
                                <div class="label">Countries Served</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="svmcms-wrap">

  <!-- ============ HERO ============ -->
  <section class="svmcms-hero">
    <div class="svmcms-dotgrid" aria-hidden="true"></div>
    <div class="svmcms-container">
      <div class="row align-items-center gy-5">

        <div class="col-lg-6">
          <span class="svmcms-eyebrow">POWERFUL. SECURE. SCALABLE.</span>
          <span class="svmcms-eyebrow-rule"></span>
          <h1 class="svmcms-h1">Smart CMS Solutions for <span class="svmcms-accent">Shivam Industries</span></h1>
          <p class="svmcms-lead">We design secure, scalable CMS websites enabling Shivam Industries to manage content easily, improve visibility, and support business growth.</p>
          <a href="enquirynow.php" class="svmcms-btn">
            Enquire Now
            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>

        <div class="col-lg-6">
          <div class="svmcms-hero-visual">
            <img
              src="./assets/images/portfolios/shivam/laptop-dashboard-mockup.png"
              alt="Shivam Industries CMS dashboard displayed on a laptop, showing enquiry stats, recent enquiries table, and a products list"
              class="img-fluid svmcms-mockup-img"
              loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ FEATURES ============ -->
  <section class="svmcms-features">
    <div class="svmcms-container">

      <div class="svmcms-section-title">
        <span class="svmcms-line"></span>
        <h2>Website CMS Design</h2>
        <span class="svmcms-line"></span>
      </div>

      <div class="row gx-4 gy-5">

        <div class="col-6 col-lg-3 svmcms-feature-col">
          <div class="svmcms-feature">
            <div class="svmcms-icon-circle"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></div>
            <h3>Secure &amp; Reliable</h3>
            <p>Built with best practices to ensure data security and website reliability.</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 svmcms-feature-col">
          <div class="svmcms-feature">
            <div class="svmcms-icon-circle"><i class="fa-solid fa-desktop" aria-hidden="true"></i></div>
            <h3>Easy Content Management</h3>
            <p>Update pages, products, and enquiries effortlessly through an intuitive CMS.</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 svmcms-feature-col">
          <div class="svmcms-feature">
            <div class="svmcms-icon-circle"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></div>
            <h3>Better Visibility</h3>
            <p>SEO-friendly structure that improves search ranking and online reach.</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 svmcms-feature-col">
          <div class="svmcms-feature">
            <div class="svmcms-icon-circle"><i class="fa-solid fa-people-group" aria-hidden="true"></i></div>
            <h3>Scalable for Growth</h3>
            <p>Flexible and scalable solution that grows with your business needs.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

</section>



<section class="styleguide">
  <div class="container-xl">

    <!-- Header: brand + primary colors -->
    <div class="sg-header">
      <div class="sg-brand">
        <div class="sg-brand-row">
          <span class="name">Shivam Industries</span>
        </div>
        <p>A clean, professional palette that reflects our commitment to quality, trust, and innovation in the chemical industry.</p>
        <span class="rule"></span>
      </div>

      <div class="sg-primary">
        <div class="sg-section-title">PRIMARY COLORS</div>
        <div class="sg-swatch-row">
          <div>
            <div class="sg-swatch" style="background:var(--sg-teal);"><span class="hex" style="color:#fff;">#0A8F7A</span></div>
            <div class="sg-swatch-name">Teal Green</div>
            <div class="sg-swatch-desc">Primary Brand Color</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-soft-teal);"><span class="hex" style="color:var(--sg-charcoal);">#E6F4F2</span></div>
            <div class="sg-swatch-name">Soft Teal</div>
            <div class="sg-swatch-desc">Light Background</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-charcoal);"><span class="hex" style="color:#fff;">#1F2A37</span></div>
            <div class="sg-swatch-name">Deep Charcoal</div>
            <div class="sg-swatch-desc">Text / Headings</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-steel);"><span class="hex" style="color:#fff;">#607D8B</span></div>
            <div class="sg-swatch-name">Steel Gray</div>
            <div class="sg-swatch-desc">Secondary Text</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-light-gray);"><span class="hex" style="color:var(--sg-charcoal);">#F7F9FA</span></div>
            <div class="sg-swatch-name">Light Gray</div>
            <div class="sg-swatch-desc">Page Background</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Secondary colors + accent + gradients -->
    <div class="sg-row2">
      <div class="sg-secondary">
        <div class="sg-section-title">SECONDARY COLORS</div>
        <div class="sg-swatch-row">
          <div>
            <div class="sg-swatch" style="background:var(--sg-aqua-mist);"></div>
            <div class="sg-swatch-name">#B7E3DB</div>
            <div class="sg-swatch-desc">Aqua Mist</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-pale-teal);"></div>
            <div class="sg-swatch-name">#D1ECE9</div>
            <div class="sg-swatch-desc">Pale Teal</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-soft-green);"></div>
            <div class="sg-swatch-name">#C8E6C9</div>
            <div class="sg-swatch-desc">Soft Green</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-blue-gray);"></div>
            <div class="sg-swatch-name">#90A4AE</div>
            <div class="sg-swatch-desc">Blue Gray</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:var(--sg-dark-green);"></div>
            <div class="sg-swatch-name">#065F46</div>
            <div class="sg-swatch-desc">Dark Green</div>
          </div>
        </div>
      </div>

      <div class="sg-accent">
        <div class="sg-section-title">ACCENT COLOR</div>
        <div class="sg-swatch" style="background:var(--sg-accent);"><span class="hex">#14B8A6</span></div>
        <p>Used for highlights, buttons, links and key actions.</p>
      </div>

      <div class="sg-gradients">
        <div class="sg-section-title">GRADIENTS</div>
        <div class="grad-row">
          <div>
            <div class="sg-swatch" style="background:linear-gradient(90deg,#0A8F7A,#14B8A6);"><span class="hex">#0A8F7A &rarr; #14B8A6</span></div>
            <div class="cap">Teal Gradient</div>
          </div>
          <div>
            <div class="sg-swatch" style="background:linear-gradient(90deg,#607D8B,#90A4AE);"><span class="hex">#607D8B &rarr; #90A4AE</span></div>
            <div class="cap">Gray Gradient</div>
          </div>
        </div>
      </div>
    </div>

    <hr class="sg-divider">

    <!-- Typography + UI elements -->
    <div class="sg-row3">
      <div class="sg-typography">
        <div class="sg-section-title">TYPOGRAPHY</div>
        <div class="sg-type-row">
          <div class="sg-type-sample poppins">
            <div class="aa">Aa</div>
            <div class="name">Poppins</div>
            <div class="desc">Headings / Bold / Modern</div>
          </div>
          <div class="sg-type-sample opensans">
            <div class="aa">Aa</div>
            <div class="name">Open Sans</div>
            <div class="desc">Body / Clean / Readable</div>
          </div>
        </div>
      </div>

      <div class="sg-ui">
        <div class="sg-section-title">UI ELEMENTS &amp; ICON STYLE</div>
        <div class="sg-ui-grid">
          <div class="sg-ui-tile active">
            <div><i class="fa-solid fa-address-card"></i></div>
            <div class="lbl">Headers &amp; Navigation</div>
          </div>
          <div class="sg-ui-tile">
            <div><i class="fa-solid fa-layer-group"></i></div>
            <div class="lbl">Sections &amp; Layouts</div>
          </div>
          <div class="sg-ui-tile">
            <div><i class="fa-solid fa-box"></i></div>
            <div class="lbl">Product Categories</div>
          </div>
          <div class="sg-ui-tile">
            <div><i class="fa-solid fa-file-lines"></i></div>
            <div class="lbl">Data &amp; Reports</div>
          </div>
          <div class="sg-ui-tile">
            <div><i class="fa-solid fa-users"></i></div>
            <div class="lbl">Users &amp; Teams</div>
          </div>
          <div class="sg-ui-tile">
            <div><i class="fa-solid fa-award"></i></div>
            <div class="lbl">Certifications &amp; Compliance</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Palette in use -->
    <div class="sg-inuse">
      <div class="sg-inuse-label">
        <span class="tag">PALETTE IN USE</span>
        <span class="brand"><img src="./assets/images/portfolios/shivam/shivam-logo-icon.png" alt="Shivam Industries logo"><span>Shivam Industries</span></span>
        <nav class="sg-inuse-nav">
          <a href="#" class="home">Home</a>
          <a href="#">About Us <i class="fa-solid fa-chevron-down" style="font-size:.65em;"></i></a>
          <a href="#">Products <i class="fa-solid fa-chevron-down" style="font-size:.65em;"></i></a>
          <a href="#">Contact Us</a>
        </nav>
        <span class="phone"><i class="fa-solid fa-phone"></i> +91 9820 82 3043</span>
        <a href="enquirynow.php" class="btn-quote">Enquiry Now</a>
      </div>

      <div class="sg-inuse-hero">
        <div class="sg-inuse-hero-inner">
          <div class="sg-inuse-text">
            <h4>Trusted Chemical<br>Solutions <span class="accent">Since 2002</span></h4>
            <a href="#" class="btn-explore">Explore Products <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="sg-inuse-feats">
            <div class="sg-inuse-feat"><i class="fa-solid fa-certificate"></i><div class="lbl">Quality Assurance</div></div>
            <div class="sg-inuse-feat"><i class="fa-solid fa-flask"></i><div class="lbl">Wide Range of Chemicals</div></div>
            <div class="sg-inuse-feat"><i class="fa-solid fa-leaf"></i><div class="lbl">Safe &amp; Compliant Processes</div></div>
            <div class="sg-inuse-feat"><i class="fa-solid fa-truck-fast"></i><div class="lbl">Reliable Supply &amp; Support</div></div>
          </div>
          <div class="sg-inuse-photo">
            <img src="shivam-palette-preview-photo.png" alt="Laboratory beakers with colored chemicals, used as the hero preview image in the Shivam Industries palette guide">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
