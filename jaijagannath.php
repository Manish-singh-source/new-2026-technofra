<?php
$pageTitle = 'Shivam Industries';
include __DIR__ . '/header.php';
?>


<style>
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
  }

  .jjct-hero {
    --jjct-navy: #16233f;
    --jjct-red: #d8232a;
    --jjct-gold: #f2a71b;
    position: relative;
    overflow: hidden;
    background: url("./assets/images/portfolios/jaijagannath/temple-background.png") center center / cover no-repeat;
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 174px;
  }

  .jjct-hero .jjct-container {
    position: relative;
    z-index: 2;
    width: 100%;
    padding-top: clamp(3rem, 4vw, 5rem);
    padding-bottom: clamp(5rem, 8vw, 8rem);
  }

  .jjct-hero .jjct-content {
    max-width: 640px;
  }

  .jjct-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #fbe6cf;
    color: var(--jjct-gold);
    font-size: var(--p-small);
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 0.55rem 1.25rem;
    border-radius: 50rem;
    margin-bottom: 1.5rem;
  }

  .jjct-badge i {
    font-size: 0.9em;
  }

  .jjct-heading {
    font-size: var(--h1);
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-weight: 800;
    color: var(--jjct-navy);
    margin-bottom: 1.25rem;
  }

  .jjct-heading .jjct-red {
    color: var(--jjct-red);
  }

  .jjct-heading .jjct-gold {
    color: var(--jjct-gold);
  }

  .jjct-lead {
    font-size: var(--p-large);
    line-height: var(--lh-body);
    color: #3c465c;
    max-width: 34rem;
    margin-bottom: clamp(1.75rem, 2vw, 2.5rem);
  }

  .jjct-cta-row {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .jjct-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    font-size: var(--p);
    font-weight: 700;
    padding: 0.9rem 1.6rem;
    border-radius: 50rem;
    text-decoration: none;
    white-space: nowrap;
    transition:
      transform 0.15s ease,
      box-shadow 0.15s ease;
  }

  .jjct-btn:hover {
    transform: translateY(-2px);
  }

  .jjct-btn-primary {
    background: var(--jjct-red);
    color: #fff;
    box-shadow: 0 10px 24px -8px rgba(216, 35, 42, 0.55);
  }

  .jjct-btn-primary i {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.15s ease;
  }

  .jjct-btn-primary:hover i {
    transform: translateX(3px);
  }

  .jjct-btn-outline {
    background: #fff;
    color: var(--jjct-navy);
    border: 1px solid #e2e2e2;
  }

  .jjct-btn-outline .jjct-play-circle {
    width: 1.6em;
    height: 1.6em;
    border-radius: 50%;
    border: 1.5px solid var(--jjct-navy);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.7em;
  }

  /* Bottom wave divider */
  .jjct-wave {
    position: absolute;
    left: 0;
    bottom: -1px;
    width: 100%;
    line-height: 0;
    z-index: 2;
  }

  .jjct-wave svg {
    width: 100%;
    height: auto;
    display: block;
  }

  /* ============================================
   MEDIA QUERIES — layout only, typography is fluid via clamp()
============================================ */
  @media (max-width: 1919.98px) {
    .jjct-hero .jjct-container {
      padding-bottom: clamp(4.5rem, 7vw, 7rem);
    }
  }

  @media (max-width: 1599.98px) {
    .jjct-hero {
      min-height: 85vh;
    }
  }

  @media (max-width: 1399.98px) {
    .jjct-hero .jjct-content {
      max-width: 580px;
    }
  }

  @media (max-width: 1199.98px) {
    .jjct-hero {
      min-height: 80vh;
    }

    .jjct-hero .jjct-content {
      max-width: 100%;
    }
  }

  @media (max-width: 991.98px) {
    .jjct-hero {
      min-height: 70vh;
      text-align: center;
    }

    .jjct-hero .jjct-content {
      margin: 0 auto;
    }

    .jjct-cta-row {
      justify-content: center;
    }

    .jjct-lead {
      margin-left: auto;
      margin-right: auto;
    }
  }

  @media (max-width: 767.98px) {
    .jjct-hero {
      min-height: 62vh;
      background-position: 65% top;
    }

    .jjct-hero .jjct-container {
      padding-top: 2.5rem;
      padding-bottom: 4rem;
    }
  }

  @media (max-width: 575.98px) {
    .jjct-cta-row {
      flex-direction: column;
      align-items: stretch;
    }

    .jjct-btn {
      justify-content: center;
    }

    .jjct-hero {
      background-position: 70% top;
    }
  }

  @media (max-width: 479.98px) {
    .jjct-badge {
      padding: 0.45rem 1rem;
    }

    .jjct-hero .jjct-container {
      padding-bottom: 3.25rem;
    }
  }

  @media (max-width: 359.98px) {
    .jjct-hero {
      min-height: 58vh;
    }
  }
</style>

<style>
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
  }

  .jjct-about {
    --maroon: #7d1420;
    --maroon-dark: #5e0f18;
    --navy: #1c2b45;
    --gold: #caa049;
    --cream: #fdf5e9;
    background: var(--cream);
    padding: clamp(3rem, 4vw, 6rem) 0;
    position: relative;
    overflow: hidden;
    font-family: "Segoe UI", Arial, sans-serif;
  }

  .jjct-about h1,
  .jjct-about h2,
  .jjct-about h3 {
    font-family: "Playfair Display", Georgia, serif;
  }

  /* ---------- Left: image stack ---------- */
  .jjct-about-stage {
    position: relative;
    max-width: 480px;
    margin: 0 auto;
    padding: 1rem 1.5rem 3.5rem 0.5rem;
  }

  .jjct-photo-main {
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 30px 50px -20px rgba(60, 30, 10, 0.35);
    width: 78%;
  }

  .jjct-photo-main img {
    width: 100%;
    height: auto;
    display: block;
  }

  .jjct-photo-secondary {
    position: absolute;
    right: 0;
    bottom: 8%;
    width: 56%;
    border-radius: 14px;
    overflow: hidden;
    border: 4px solid var(--cream);
    box-shadow: 0 24px 40px -18px rgba(60, 30, 10, 0.4);
  }

  .jjct-photo-secondary img {
    width: 100%;
    height: auto;
    display: block;
  }

  .jjct-badge-circle {
    position: absolute;
    left: 4%;
    bottom: -3%;
    width: 34%;
    aspect-ratio: 1/1;
    border-radius: 50%;
    background: var(--maroon-dark);
    border: 3px solid var(--gold);
    color: var(--gold);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 0.3rem;
    padding: 0.5rem;
    box-shadow: 0 16px 28px -14px rgba(0, 0, 0, 0.45);
  }

  .jjct-badge-circle i {
    font-size: var(--h5);
  }

  .jjct-badge-circle span {
    font-size: clamp(0.55rem, 0.4rem + 0.4vw, 0.75rem);
    font-weight: 800;
    letter-spacing: 0.06em;
    line-height: 1.1;
  }

  /* ---------- Right: copy ---------- */
  .jjct-about-ornament {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 0.75rem;
    margin-bottom: 1rem;
    color: var(--gold);
  }

  .jjct-about-ornament .line {
    width: 40px;
    height: 1px;
    background: var(--gold);
    display: inline-block;
  }

  .jjct-about-ornament i {
    font-size: var(--h5);
  }

  .jjct-about-heading {
    font-size: var(--h1);
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-weight: 800;
    color: var(--navy);
    text-align: left;
    margin-bottom: 1.25rem;
  }

  .jjct-about-heading .maroon {
    color: var(--maroon);
  }

  .jjct-about-lead {
    font-size: var(--p-large);
    line-height: var(--lh-body);
    color: #5a6270;
    text-align: left;
    max-width: 42rem;
    margin: 0 0 clamp(2rem, 3vw, 2.75rem);
  }

  .jjct-feature-card {
    background: #fff;
    border-radius: 14px;
    padding: clamp(1.5rem, 2vw, 2rem);
    height: 100%;
    box-shadow: 0 12px 30px -18px rgba(60, 30, 10, 0.18);
  }

  .jjct-feature-icon {
    width: clamp(52px, 3vw + 36px, 62px);
    height: clamp(52px, 3vw + 36px, 62px);
    border-radius: 50%;
    background: var(--maroon-dark);
    color: var(--gold);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--h4);
    margin-bottom: 1.1rem;
  }

  .jjct-feature-card h3 {
    font-size: var(--h5);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.6rem;
  }

  .jjct-feature-card p {
    font-size: var(--p-small);
    line-height: var(--lh-body);
    color: #5a6270;
    margin-bottom: 1rem;
  }

  .jjct-feature-divider {
    display: flex;
    align-items: center;
    gap: 0.4rem;
  }

  .jjct-feature-divider .line {
    flex: 1;
    height: 1px;
    background: #e7d8bd;
  }

  .jjct-feature-divider .dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--gold);
    flex: 0 0 auto;
  }

  .jjct-about-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    background: var(--maroon);
    color: #fff;
    font-size: var(--p);
    font-weight: 700;
    padding: 0.9rem 1.75rem;
    border-radius: 50rem;
    text-decoration: none;
    box-shadow: 0 14px 26px -10px rgba(125, 20, 32, 0.5);
    transition: transform 0.15s ease;
  }

  .jjct-about-btn:hover {
    transform: translateY(-2px);
    color: #fff;
  }

  .jjct-about-cta-wrap {
    text-align: left;
    margin-top: clamp(1.5rem, 2vw, 2rem);
  }

  /* ============================================
   MEDIA QUERIES — layout only, typography is fluid via clamp()
============================================ */
  @media (max-width: 1919.98px) {
    .jjct-about {
      padding: clamp(2.75rem, 3.6vw, 5.5rem) 0;
    }
  }

  @media (max-width: 1599.98px) {
    .jjct-about-stage {
      max-width: 440px;
    }
  }

  @media (max-width: 1399.98px) {
    .jjct-about-stage {
      max-width: 400px;
    }
  }

  @media (max-width: 1199.98px) {
    .jjct-about-stage {
      max-width: 380px;
      margin-top: 2rem;
    }
  }

  @media (max-width: 991.98px) {
    .jjct-about-stage {
      max-width: 420px;
      margin: 0 auto 2.5rem;
    }

    .jjct-about-ornament {
      justify-content: center;
    }

    .jjct-about-heading,
    .jjct-about-lead {
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .jjct-about-cta-wrap {
      text-align: center;
    }
  }

  @media (max-width: 767.98px) {
    .jjct-about-stage {
      padding-bottom: 4.5rem;
    }

    .jjct-feature-card {
      margin-bottom: 1rem;
    }
  }

  @media (max-width: 575.98px) {
    .jjct-about-stage {
      max-width: 300px;
      padding: 0.5rem 1rem 4rem 0.25rem;
    }

    .jjct-about-btn {
      width: 100%;
      justify-content: center;
    }
  }

  @media (max-width: 479.98px) {
    .jjct-about-stage {
      max-width: 260px;
    }

    .jjct-badge-circle i {
      font-size: var(--h6);
    }
  }

  @media (max-width: 359.98px) {
    .jjct-about-stage {
      max-width: 230px;
    }
  }
</style>

<style>
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
  }

  .jjct-resp {
    --navy: #1a2036;
    --orange: #ef7f22;
    --orange-dark: #d9670f;
    --cream: #fdf6ef;
    background: var(--cream);
    padding: clamp(3rem, 4vw, 6rem) 0 0;
    position: relative;
    overflow: hidden;
    font-family: "Segoe UI", Arial, sans-serif;
  }

  /* ---------- Left copy ---------- */
  .jjct-resp-eyebrow {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    color: var(--orange);
    font-weight: 700;
    font-size: var(--p-small);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 0.6rem;
  }

  .jjct-resp-eyebrow i {
    font-size: var(--h5);
  }

  .jjct-resp-rule {
    display: block;
    width: 48px;
    height: 3px;
    background: var(--orange);
    border-radius: 2px;
    margin-bottom: 1.1rem;
  }

  .jjct-resp-heading {
    font-size: var(--h1);
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-weight: 800;
    color: var(--navy);
    margin-bottom: 1.1rem;
  }

  .jjct-resp-heading span {
    color: var(--orange);
    display: block;
  }

  .jjct-resp-lead {
    font-size: var(--p-large);
    line-height: var(--lh-body);
    color: #5c6270;
    max-width: 34rem;
    margin-bottom: clamp(2rem, 3vw, 2.75rem);
  }

  .jjct-resp-feature {
    text-align: center;
  }

  .jjct-resp-feature-icon {
    width: clamp(64px, 4vw + 40px, 84px);
    height: clamp(64px, 4vw + 40px, 84px);
    border-radius: 18px;
    background: #fdece0;
    color: var(--orange);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--h3);
    margin: 0 auto 1rem;
  }

  .jjct-resp-feature h3 {
    font-size: var(--h6);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.4rem;
  }

  .jjct-resp-feature p {
    font-size: var(--p-small);
    color: #5c6270;
    line-height: var(--lh-body);
    margin-bottom: 0;
  }

  .jjct-resp-dots {
    margin-top: clamp(2rem, 3vw, 3rem);
    width: 130px;
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 7px;
  }

  .jjct-resp-dots span {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--orange);
    opacity: 0.55;
  }

  /* ---------- Right: device stage ---------- */
  .jjct-resp-stage-wrap {
    position: relative;
    padding: clamp(2rem, 3vw, 3rem) clamp(1rem, 2vw, 2rem) clamp(4rem, 6vw, 6rem);
  }

  .jjct-resp-panel {
    position: absolute;
    inset: 0 0 8% 0;
    background: linear-gradient(135deg, #f7c98a, #ef9c4e);
    border-radius: 28px;
    z-index: 0;
    overflow: hidden;
  }

  .jjct-resp-panel::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle,
        rgba(255, 255, 255, 0.35) 1.5px,
        transparent 1.5px);
    background-size: 22px 22px;
    opacity: 0.5;
  }

  .jjct-resp-stage {
    position: relative;
    z-index: 1;
  }

  .device-laptop {
    width: 100%;
    max-width: 720px;
    margin: 0 auto;
  }

  .device-laptop .screen {
    background: #14181a;
    border-radius: 14px 14px 3px 3px;
    padding: 8px 8px 0;
    box-shadow: 0 30px 55px -20px rgba(30, 15, 0, 0.4);
  }

  .device-laptop .screen-inner {
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    aspect-ratio: 16/10.5;
  }

  .device-laptop .base {
    height: 14px;
    background: linear-gradient(#3c4145, #23272a);
    border-radius: 0 0 8px 8px;
  }

  .device-phone {
    position: absolute;
    right: -4%;
    bottom: -8%;
    width: 24%;
    z-index: 2;
  }

  .device-phone .screen {
    background: #14181a;
    border-radius: 22px;
    padding: 6px;
    box-shadow: 0 22px 38px -14px rgba(30, 15, 0, 0.45);
  }

  .device-phone .screen-inner {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 9/19;
  }

  /* ---------- Mini site markup shared by both screens ---------- */
  .mini-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px 8px;
    border-bottom: 1px solid #f0f0f0;
  }

  .mini-nav .brand img {
    height: 18px;
    width: auto;
    display: block;
  }

  .mini-nav .links {
    display: flex;
    gap: 6px;
    font-size: 0.34rem;
    font-weight: 700;
    color: #333;
    white-space: nowrap;
  }

  .mini-nav .links .active {
    color: var(--orange);
  }

  .mini-nav .cta {
    font-size: 0.32rem;
    font-weight: 700;
    color: var(--orange);
    border: 1px solid var(--orange);
    border-radius: 20px;
    padding: 2px 6px;
    white-space: nowrap;
  }

  .mini-nav .burger {
    font-size: 0.6rem;
    color: var(--navy);
  }

  .mini-banner {
    position: relative;
    aspect-ratio: 16/6;
    overflow: hidden;
  }

  .mini-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .mini-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(0deg,
        rgba(0, 0, 0, 0.35),
        rgba(0, 0, 0, 0.05));
  }

  .mini-banner-text {
    position: absolute;
    left: 8px;
    bottom: 8px;
    z-index: 2;
    color: #fff;
  }

  .mini-banner-text h4 {
    font-size: 0.7rem;
    font-weight: 800;
    margin-bottom: 3px;
  }

  .mini-crumb {
    display: inline-block;
    background: rgba(255, 255, 255, 0.9);
    color: #333;
    font-size: 0.28rem;
    font-weight: 700;
    padding: 2px 6px;
    border-radius: 10px;
  }

  .mini-content {
    display: flex;
    gap: 6px;
    padding: 8px;
  }

  .mini-content .thumb {
    flex: 0 0 auto;
    width: 28%;
    border-radius: 4px;
    overflow: hidden;
    aspect-ratio: 1/1.1;
  }

  .mini-content .thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .mini-content .copy {
    min-width: 0;
  }

  .mini-tag {
    font-size: 0.3rem;
    font-weight: 800;
    color: #c0392b;
    text-transform: uppercase;
    display: block;
    margin-bottom: 3px;
  }

  .mini-content h5 {
    font-size: 0.42rem;
    font-weight: 800;
    color: var(--navy);
    line-height: 1.2;
    margin-bottom: 3px;
  }

  .mini-content h5 span {
    color: var(--orange-dark);
  }

  .mini-content p {
    font-size: 0.28rem;
    line-height: 1.35;
    color: #666;
    margin-bottom: 0;
  }

  /* phone variant tweaks */
  .device-phone .mini-content {
    flex-direction: column;
    padding: 6px;
  }

  .device-phone .mini-content .thumb {
    width: 100%;
    aspect-ratio: 16/9;
  }

  .device-phone .mini-nav .links {
    display: none;
  }

  /* Bottom wave divider */
  .jjct-resp-wave {
    position: absolute;
    left: 0;
    bottom: -1px;
    width: 100%;
    line-height: 0;
    z-index: 2;
  }

  .jjct-resp-wave svg {
    width: 100%;
    height: auto;
    display: block;
  }

  /* ============================================
   MEDIA QUERIES — layout only, typography is fluid via clamp()
============================================ */
  @media (max-width: 1919.98px) {
    .jjct-resp-stage-wrap {
      padding-bottom: clamp(3.5rem, 5vw, 5rem);
    }
  }

  @media (max-width: 1599.98px) {
    .device-laptop {
      max-width: 640px;
    }
  }

  @media (max-width: 1399.98px) {
    .device-laptop {
      max-width: 580px;
    }
  }

  @media (max-width: 1199.98px) {
    .device-laptop {
      max-width: 100%;
    }

    .device-phone {
      width: 26%;
      right: -2%;
    }
  }

  @media (max-width: 991.98px) {
    .jjct-resp-feature {
      margin-bottom: 1.5rem;
    }

    .jjct-resp-stage-wrap {
      margin-top: 2rem;
    }
  }

  @media (max-width: 767.98px) {
    .device-phone {
      width: 28%;
      bottom: -10%;
    }

    .jjct-resp-panel {
      inset: 0 0 10% 0;
      border-radius: 20px;
    }
  }

  @media (max-width: 575.98px) {
    .device-phone {
      display: none;
    }

    /* avoid crowding two frames at this width */
    .jjct-resp-dots {
      margin-left: auto;
      margin-right: auto;
    }
  }

  @media (max-width: 479.98px) {
    .jjct-resp-stage-wrap {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
    }
  }

  @media (max-width: 359.98px) {
    .jjct-resp-panel {
      border-radius: 14px;
    }
  }
</style>

<style>
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
  }

  .jjct-tech {
    --navy: #171b30;
    --red: #c31f26;
    --orange: #e2812a;
    --cream: #fbf1e7;
    background: var(--cream);
    padding: clamp(3rem, 4vw, 6rem) 0;
    position: relative;
    overflow: hidden;
    font-family: "Segoe UI", Arial, sans-serif;
  }

  .jjct-tech-eyebrow {
    display: flex;
    align-items: center;
    gap: 0.55rem;
    color: var(--red);
    font-weight: 700;
    font-size: var(--p-small);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 0.6rem;
  }

  .jjct-tech-rule {
    display: block;
    width: 46px;
    height: 3px;
    background: var(--orange);
    border-radius: 2px;
    margin-bottom: 1.1rem;
  }

  .jjct-tech-heading {
    font-size: var(--h1);
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-weight: 800;
    color: var(--navy);
    margin-bottom: 1rem;
  }

  .jjct-tech-heading .red {
    color: var(--red);
    display: block;
  }

  .jjct-tech-ornament {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    color: var(--orange);
    margin-bottom: 1.5rem;
  }

  .jjct-tech-ornament .line {
    width: 90px;
    height: 1px;
    background: var(--orange);
    opacity: 0.7;
  }

  .jjct-tech-ornament i {
    font-size: var(--p);
  }

  .jjct-tech-lead {
    font-size: var(--p-large);
    line-height: var(--lh-body);
    color: #5c6270;
    max-width: 32rem;
    margin-bottom: clamp(2rem, 3vw, 2.5rem);
  }

  .jjct-tech-dots {
    width: 130px;
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 7px;
  }

  .jjct-tech-dots span {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--orange);
    opacity: 0.4;
  }

  /* ---------- Card grid ---------- */
  .jjct-tech-card {
    background: #fff;
    border-radius: 16px;
    padding: clamp(1.25rem, 1.5vw, 1.75rem) 1rem;
    text-align: center;
    height: 100%;
    box-shadow: 0 14px 30px -20px rgba(30, 15, 0, 0.18);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .jjct-tech-card .icon-wrap {
    height: clamp(52px, 3vw + 34px, 64px);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0.9rem;
  }

  .jjct-tech-card i {
    font-size: clamp(2.5rem, 2vw + 2rem, 3.5rem);
  }

  .jjct-tech-card span.label {
    font-size: var(--h6);
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.5rem;
  }

  .jjct-tech-card .bar {
    width: 26px;
    height: 3px;
    border-radius: 2px;
  }

  .i-html {
    color: #e34c26;
  }

  .i-css {
    color: #2965f1;
  }

  .i-php {
    color: #6b6ead;
  }

  .i-bootstrap {
    color: #7952b3;
  }

  .i-laravel {
    color: #ff2d20;
  }

  .i-js {
    color: #212121;
    background: #f0db4f;
    border-radius: 10px;
    padding: 0.15em 0.22em;
  }

  .i-gmaps {
    color: #34a853;
  }

  .i-mysql {
    color: #00758f;
  }

  .i-cloud {
    color: #8a1a1a;
  }

  .bar-html {
    background: #e34c26;
  }

  .bar-css {
    background: #2965f1;
  }

  .bar-php {
    background: #6b6ead;
  }

  .bar-bootstrap {
    background: #7952b3;
  }

  .bar-laravel {
    background: #ff2d20;
  }

  .bar-gmaps {
    background: #34a853;
  }

  .bar-js {
    background: #e2812a;
  }

  .bar-mysql {
    background: #2965f1;
  }

  .bar-cloud {
    background: #8a1a1a;
  }

  /* ============================================
   MEDIA QUERIES — layout only, typography is fluid via clamp()
============================================ */
  @media (max-width: 1919.98px) {
    .jjct-tech {
      padding: clamp(2.75rem, 3.6vw, 5.5rem) 0;
    }
  }

  @media (max-width: 1599.98px) {
    .jjct-tech-card {
      padding: 1.25rem 0.9rem;
    }
  }

  @media (max-width: 1399.98px) {
    .jjct-tech-lead {
      max-width: 28rem;
    }
  }

  @media (max-width: 1199.98px) {

    .jjct-tech-heading,
    .jjct-tech-lead,
    .jjct-tech-eyebrow,
    .jjct-tech-ornament {
      text-align: left;
    }
  }

  @media (max-width: 991.98px) {
    .jjct-tech-eyebrow {
      justify-content: center;
    }

    .jjct-tech-ornament {
      justify-content: center;
    }

    .jjct-tech-heading,
    .jjct-tech-lead {
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .jjct-tech-dots {
      margin: 0 auto;
    }
  }

  @media (max-width: 767.98px) {
    .jjct-tech-card {
      margin-bottom: 0;
    }
  }

  @media (max-width: 575.98px) {
    .jjct-tech-card i {
      font-size: clamp(2.1rem, 4vw + 1.5rem, 3rem);
    }
  }

  @media (max-width: 479.98px) {
    .jjct-tech-card {
      padding: 1rem 0.5rem;
    }
  }

  @media (max-width: 359.98px) {
    .jjct-tech-card .label {
      font-size: var(--p-small);
    }
  }
</style>

<style>
  .jjct-image-showcase {
    width: 100%;
    overflow: hidden;
    background: #fff;
  }

  .jjct-image-showcase picture,
  .jjct-image-showcase img {
    display: block;
    width: 100%;
  }

  .jjct-image-showcase img {
    height: auto;
  }
</style>

<section class="jjct-hero">
  <div class="container jjct-container">
    <div class="row">
      <div class="col-12 col-lg-7 col-xl-6">
        <div class="jjct-content">
          <span class="jjct-badge">
            <i class="fa-solid fa-star"></i> Serving With Devotion
          </span>

          <h1 class="jjct-heading">
            Empowering <span class="jjct-red">Devotion.</span><br />
            Enriching <span class="jjct-gold">Lives.</span>
          </h1>

          <p class="jjct-lead">
            Jai Jagannath Charitable Trust works towards the welfare of
            society through seva, support, and spiritual initiatives.
          </p>

          <div class="jjct-cta-row">
            <a href="#" class="jjct-btn jjct-btn-primary">
              Explore Our Initiatives
              <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="#" class="jjct-btn jjct-btn-outline">
              <span class="jjct-play-circle"><i class="fa-solid fa-play"></i></span>
              Watch Our Story
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jjct-wave">
    <svg
      viewBox="0 0 1440 120"
      preserveAspectRatio="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M0,64 C240,110 480,20 720,50 C960,80 1200,110 1440,60 L1440,120 L0,120 Z"
        fill="#ffffff"
        opacity="0.7" />
      <path
        d="M0,90 C240,50 480,120 720,90 C960,60 1200,40 1440,90 L1440,120 L0,120 Z"
        fill="#ffffff" />
    </svg>
  </div>
</section>

<section class="jjct-about">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- LEFT: image stack -->
      <div class="col-12 col-lg-5">
        <div class="jjct-about-stage">
          <div class="jjct-photo-main">
            <img
              src="./assets/images/portfolios/jaijagannath/temple-flag-photo.jpg"
              alt="Jagannath Temple at sunset with flag" />
          </div>
          <div class="jjct-photo-secondary">
            <img
              src="./assets/images/portfolios/jaijagannath/priest-scripture-photo.jpg"
              alt="Priest reading sacred scripture" />
          </div>
          <div class="jjct-badge-circle">
            <i class="fa-solid fa-place-of-worship"></i>
            <span>Jai Jagannath</span>
          </div>
        </div>
      </div>

      <!-- RIGHT: copy -->
      <div class="col-12 col-lg-7">
        <div class="jjct-about-ornament">
          <span class="line"></span>
          <i class="fa-solid fa-spa"></i>
          <span class="line"></span>
        </div>

        <h2 class="jjct-about-heading">
          We Are A Hindu That Believes In
          <span class="maroon">Jagannath.</span>
        </h2>

        <p class="jjct-about-lead">
          Puri Jagannath temple is an oldest Hindu temple with lots of
          miracles. The flag always flaps in a direction opposite to the
          direction in which the wind is blowing.
        </p>

        <div class="row g-4">
          <div class="col-12 col-sm-6">
            <div class="jjct-feature-card">
              <div class="jjct-feature-icon">
                <i class="fa-solid fa-place-of-worship"></i>
              </div>
              <h3>Temple</h3>
              <p>
                The Jagannath Temple is an important Hindu temple dedicated
                to Jagannath.
              </p>
              <div class="jjct-feature-divider">
                <span class="line"></span><span class="dot"></span><span class="line"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="jjct-feature-card">
              <div class="jjct-feature-icon">
                <i class="fa-solid fa-hand-holding-heart"></i>
              </div>
              <h3>Donation</h3>
              <p>
                Donating to charity feels good and motivates people to
                practice unselfish concern for others.
              </p>
              <div class="jjct-feature-divider">
                <span class="line"></span><span class="dot"></span><span class="line"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="jjct-about-cta-wrap">
          <a href="#" class="jjct-about-btn">
            Explore More <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="jjct-resp">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- LEFT -->
      <div class="col-12 col-lg-5">
        <span class="jjct-resp-eyebrow"><i class="fa-solid fa-laptop-mobile"></i> Responsive Design</span>
        <span class="jjct-resp-rule"></span>
        <h2 class="jjct-resp-heading">
          Responsive Across<span>Every Device</span>
        </h2>
        <p class="jjct-resp-lead">
          Our website is fully responsive, ensuring an optimal viewing
          experience and seamless navigation across all devices – from
          smartphones to desktops.
        </p>

        <div class="row g-4 text-center text-sm-start">
          <div class="col-4">
            <div class="jjct-resp-feature">
              <div class="jjct-resp-feature-icon">
                <i class="fa-solid fa-mobile-screen-button"></i>
              </div>
              <h3>Mobile Friendly</h3>
              <p>Perfect experience on any smartphone.</p>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-resp-feature">
              <div class="jjct-resp-feature-icon">
                <i class="fa-solid fa-tablet-screen-button"></i>
              </div>
              <h3>Tablet Optimized</h3>
              <p>Smooth and intuitive on all tablet devices.</p>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-resp-feature">
              <div class="jjct-resp-feature-icon">
                <i class="fa-solid fa-desktop"></i>
              </div>
              <h3>Desktop Ready</h3>
              <p>Designed for clarity on larger screens.</p>
            </div>
          </div>
        </div>

        <div class="jjct-resp-dots">
          <span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span>
        </div>
      </div>

      <!-- RIGHT: device stage -->
      <div class="col-12 col-lg-7">
        <div class="jjct-resp-stage-wrap">
          <div class="jjct-resp-panel"></div>

          <div class="jjct-resp-stage">
            <div class="device-laptop">
              <div class="screen">
                <div class="screen-inner">
                  <div class="mini-nav">
                    <span class="brand"><img
                        src="./assets/images/portfolios/jaijagannath/jjct-emblem.png"
                        alt="Jai Jagannath Charitable Trust logo" /></span>
                    <span class="links">
                      <span>Home</span><span class="active">About Us</span><span>Services</span> <span>Portfolio</span><span>Career</span><span>Contact</span>
                    </span>
                    <span class="cta">Enquiry Now</span>
                  </div>
                  <div class="mini-banner">
                    <img
                      src="./assets/images/portfolios/jaijagannath/temple-flag-photo.jpg"
                      alt="Temple banner" />
                    <div class="mini-banner-text">
                      <h4>About Us</h4>
                      <span class="mini-crumb">Home &gt; About Us</span>
                    </div>
                  </div>
                  <div class="mini-content">
                    <div class="thumb">
                      <img
                        src="./assets/images/portfolios/jaijagannath/temple-flag-photo.jpg"
                        alt="Temple" />
                    </div>
                    <div class="thumb">
                      <img
                        src="./assets/images/portfolios/jaijagannath/priest-scripture-photo.jpg"
                        alt="Scripture" />
                    </div>
                    <div class="copy">
                      <span class="mini-tag"><i class="fa-solid fa-om"></i> Dedicated for Jai
                        Jagannath</span>
                      <h5>
                        We are a Hindu that
                        <span>believe in Jagannath</span>
                      </h5>
                      <p>
                        Jagannath Charitable Trust is a non-profit
                        organization dedicated to serving the community
                        through various initiatives.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="base"></div>
            </div>

            <div class="device-phone">
              <div class="screen">
                <div class="screen-inner">
                  <div class="mini-nav">
                    <span class="brand"><img
                        src="./assets/images/portfolios/jaijagannath/jjct-emblem.png"
                        alt="Jai Jagannath Charitable Trust logo" /></span>
                    <i class="fa-solid fa-bars burger"></i>
                  </div>
                  <div class="mini-banner">
                    <img
                      src="./assets/images/portfolios/jaijagannath/temple-flag-photo.jpg"
                      alt="Temple banner" />
                    <div class="mini-banner-text">
                      <h4>About Us</h4>
                      <span class="mini-crumb">Home &gt; About Us</span>
                    </div>
                  </div>
                  <div class="mini-content">
                    <span class="mini-tag"><i class="fa-solid fa-om"></i> Dedicated for Jai
                      Jagannath</span>
                    <h5>
                      We are a Hindu that <span>believe in Jagannath</span>
                    </h5>
                    <div class="thumb">
                      <img
                        src="./assets/images/portfolios/jaijagannath/temple-flag-photo.jpg"
                        alt="Temple" />
                    </div>
                    <div class="thumb">
                      <img
                        src="./assets/images/portfolios/jaijagannath/priest-scripture-photo.jpg"
                        alt="Scripture" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jjct-resp-wave">
    <svg
      viewBox="0 0 1440 100"
      preserveAspectRatio="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M0,55 C240,95 480,15 720,45 C960,75 1200,95 1440,50 L1440,100 L0,100 Z"
        fill="#ffffff" />
    </svg>
  </div>
</section>

<section class="jjct-image-showcase" aria-label="Jai Jagannath website showcase">
  <picture>
    <source
      media="(max-width: 767.98px)"
      srcset="./assets/images/portfolios/jaijagannath/jaganath.png" />
    <img
      src="./assets/images/portfolios/jaijagannath/jai.png"
      alt="Jai Jagannath website showcase" />
  </picture>
</section>

<section class="jjct-tech">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- LEFT -->
      <div class="col-12 col-lg-6">
        <span class="jjct-tech-eyebrow"><i class="fa-solid fa-code"></i> Technology Stack</span>
        <span class="jjct-tech-rule"></span>
        <h2 class="jjct-tech-heading">
          Technology<span class="red">Used</span>
        </h2>
        <div class="jjct-tech-ornament">
          <span class="line"></span><i class="fa-solid fa-spa"></i><span class="line"></span>
        </div>
        <p class="jjct-tech-lead">
          This project integrates HTML, CSS, JavaScript, React, PHP, and SQL
          for a responsive, dynamic website. Bootstrap enhances layout,
          Google Maps API provides location services, and Cloudinary
          optimizes images, ensuring seamless performance.
        </p>
        <div class="jjct-tech-dots">
          <span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span>
        </div>
      </div>

      <!-- RIGHT: 3x3 card grid -->
      <div class="col-12 col-lg-6">
        <div class="row g-3 g-md-4">
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-html5 i-html"></i>
              </div>
              <span class="label">HTML</span>
              <span class="bar bar-html"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-css3-alt i-css"></i>
              </div>
              <span class="label">CSS</span>
              <span class="bar bar-css"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-php i-php"></i>
              </div>
              <span class="label">PHP</span>
              <span class="bar bar-php"></span>
            </div>
          </div>

          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-bootstrap i-bootstrap"></i>
              </div>
              <span class="label">Bootstrap</span>
              <span class="bar bar-bootstrap"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-laravel i-laravel"></i>
              </div>
              <span class="label">Laravel</span>
              <span class="bar bar-laravel"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-solid fa-map-location-dot i-gmaps"></i>
              </div>
              <span class="label">Google Maps API</span>
              <span class="bar bar-gmaps"></span>
            </div>
          </div>

          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-brands fa-square-js i-js"></i>
              </div>
              <span class="label">JavaScript</span>
              <span class="bar bar-js"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-solid fa-database i-mysql"></i>
              </div>
              <span class="label">MySQL</span>
              <span class="bar bar-mysql"></span>
            </div>
          </div>
          <div class="col-4">
            <div class="jjct-tech-card">
              <div class="icon-wrap">
                <i class="fa-solid fa-cloud-arrow-up i-cloud"></i>
              </div>
              <span class="label">Cloudinary</span>
              <span class="bar bar-cloud"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>