<?php
$pageTitle = 'WOTM Case Study | Technofra';
$bodyClass = 'hero-video-page';
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

  /* Brand tokens */
  --clr-navy: #1c2b4a;
  --clr-navy-dark: #142038;
  --clr-gold: #d4990f;
  --clr-gold-light: #e8b13a;
  --clr-cream: #f4ead9;
  --clr-cream-light: #f9f2e7;
  --clr-gray: #5c6270;

  /* Hero-specific fluid sizes */
  --hero-life: clamp(3.5rem, 2rem + 8vw, 8rem);
  --hero-like: clamp(2.75rem, 1.7rem + 6vw, 6.25rem);
  --hero-tagline: clamp(1.25rem, 1rem + 1.6vw, 2rem);
}

* { box-sizing: border-box; }

body {
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  color: var(--clr-navy);
  overflow-x: hidden;
}

.hero-section {
  position: relative;
  background: var(--clr-cream-light);
  overflow: hidden;
  padding-block: clamp(2.5rem, 5vw, 0rem);
}

.hero-section .container-fluid {
  max-width: 1600px;
  padding-inline: clamp(1.25rem, 4vw, 4rem);
}

/* decorative dotted pattern bottom-left */
.hero-section__dots {
  position: absolute;
  left: 0;
  bottom: 0;
  width: clamp(160px, 20vw, 320px);
  height: clamp(160px, 20vw, 320px);
  background-image: radial-gradient(var(--clr-gold) 1.6px, transparent 1.6px);
  background-size: 18px 18px;
  opacity: 0.35;
  -webkit-mask-image: radial-gradient(circle at 0% 100%, #000 55%, transparent 75%);
  mask-image: radial-gradient(circle at 0% 100%, #000 55%, transparent 75%);
  pointer-events: none;
  z-index: 0;
}

/* decorative diagonal navy panel, far right */
.hero-section__diagonal {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: clamp(60px, 6vw, 120px);
  background: var(--clr-navy);
  clip-path: polygon(45% 0, 100% 0, 100% 100%, 0% 100%);
  z-index: 0;
}

.hero-row {
  position: relative;
  z-index: 1;
  min-height: clamp(560px, 70vh, 780px);
}

/* ---------- Left column copy ---------- */
.hero-copy {
  padding-block: clamp(2rem, 5vw, 3rem);
  min-width: 0;
}

.hero-copy__eyebrow {
  font-size: var(--caption);
  font-weight: 600;
  letter-spacing: 0.18em;
  color: var(--clr-gold);
  text-transform: uppercase;
  margin-bottom: clamp(1rem, 2.5vw, 1.75rem);
}

.hero-copy__title {
  font-family: 'Playfair Display', serif;
  line-height: 0.95;
  margin-bottom: clamp(1rem, 2.5vw, 1.5rem);
  white-space: nowrap;
}

.hero-copy__title .life {
  font-size: var(--hero-life);
  font-weight: 800;
  color: var(--clr-gold);
  letter-spacing: 0.02em;
}

.hero-copy__title .like {
  font-family: 'Mrs Saint Delafield', cursive;
  font-size: var(--hero-like);
  font-weight: 400;
  color: var(--clr-navy);
  margin-left: clamp(0.25rem, 1vw, 0.75rem);
  position: relative;
  top: clamp(0.4rem, 1vw, 0.75rem);
}

.hero-copy__divider {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: clamp(1rem, 2vw, 1.5rem);
}

.hero-copy__divider::before,
.hero-copy__divider::after {
  content: "";
  flex: 1;
  height: 1px;
  background: var(--clr-gold);
  opacity: 0.6;
}

.hero-copy__divider i {
  color: var(--clr-gold);
  font-size: 0.7rem;
}

.hero-copy__tagline {
  font-family: 'Playfair Display', serif;
  font-size: var(--hero-tagline);
  font-weight: 700;
  color: var(--clr-navy);
  line-height: var(--lh-tight);
  margin-bottom: clamp(1rem, 2.5vw, 1.5rem);
}

.hero-copy__desc {
  font-size: var(--p);
  line-height: var(--lh-body);
  color: var(--clr-gray);
  max-width: 44ch;
  margin-bottom: clamp(1.5rem, 3vw, 2.25rem);
}

.hero-copy__btn {
  display: inline-flex;
  align-items: center;
  gap: 0.85rem;
  background: var(--clr-navy);
  color: var(--clr-gold-light);
  font-size: var(--p-small);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: 1rem 1.75rem;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.25s ease, transform 0.25s ease;
}

.hero-copy__btn i {
  transition: transform 0.25s ease;
}

.hero-copy__btn:hover {
  background: var(--clr-navy-dark);
  color: #fff;
  transform: translateX(2px);
}

.hero-copy__btn:hover i {
  transform: translateX(4px);
}

/* ---------- Right column image ---------- */
.hero-visual {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-block: clamp(1.5rem, 4vw, 2.5rem);
  min-width: 0;
  height: 100%;
}

.hero-visual__frame {
  position: relative;
  width: 100%;
  max-width: 680px;
  aspect-ratio: 0.96 / 1;
}

/* outer offset gold outline */
.hero-visual__frame::before {
  content: "";
  position: absolute;
  inset: -12px -16px -12px 16px;
  border: 1.5px solid var(--clr-gold);
  border-radius: 68px;
  transform: skewX(-9deg);
  transform-origin: center;
  z-index: 0;
  pointer-events: none;
}

.hero-visual__shell {
  position: absolute;
  inset: 0;
  border-radius: 72px;
  background: linear-gradient(180deg, rgba(255, 255, 255, 0.96), rgba(244, 234, 217, 0.92));
  box-shadow: 0 24px 50px -28px rgba(20, 32, 56, 0.28);
  transform: skewX(-9deg);
  transform-origin: center;
}

.hero-visual__photo {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
  border-radius: 72px;
  border: 10px solid rgba(255, 255, 255, 0.95);
  box-shadow: 0 0 0 1.5px var(--clr-gold), 0 30px 60px -25px rgba(20, 32, 56, 0.45);
  transform: skewX(-9deg);
  transform-origin: center;
  z-index: 1;
}

.hero-visual__photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
  transform: skewX(9deg) scale(1.16) translateX(-3%);
  transform-origin: center;
}

.hero-visual__sparkle {
  position: absolute;
  color: var(--clr-gold);
  z-index: 2;
  pointer-events: none;
}

.hero-visual__sparkle--top { top: -6px; right: 22%; font-size: clamp(1rem, 1.5vw, 1.5rem); }
.hero-visual__sparkle--mid { top: 42%; right: -4px; font-size: clamp(0.8rem, 1.1vw, 1.15rem); }
.hero-visual__sparkle--bottom { bottom: 6%; left: -18px; font-size: clamp(1.1rem, 1.6vw, 1.6rem); }

/* ================= MEDIA QUERIES ================= */
@media (max-width: 1919.98px) {
  .hero-section .container-fluid { max-width: 1440px; }
}

@media (max-width: 1599.98px) {
  .hero-copy__title .life { font-size: clamp(3rem, 1.8rem + 7vw, 6.5rem); }
}

@media (max-width: 1399.98px) {
  .hero-section .container-fluid { max-width: 100%; }
  .hero-visual__frame { max-width: 580px; }
}

@media (max-width: 1199.98px) {
  .hero-copy__title { white-space: normal; }
  .hero-visual__frame { max-width: 500px; }
}

@media (max-width: 991.98px) {
  .hero-row { min-height: auto; }
  .hero-copy { text-align: center; padding-block: 2rem 1rem; }
  .hero-copy__desc { margin-inline: auto; }
  .hero-copy__divider { max-width: 380px; margin-inline: auto; }
  .hero-visual { padding-block: 1rem 2.5rem; }
  .hero-visual__frame { max-width: 460px; }
  .hero-section__diagonal { width: 60px; opacity: 0.5; }
}

@media (max-width: 767.98px) {
  .hero-copy__title .life { font-size: clamp(2.75rem, 2rem + 10vw, 5rem); }
  .hero-copy__title .like { font-size: clamp(2rem, 1.5rem + 7vw, 3.5rem); }
  .hero-visual__frame { max-width: 390px; }
  .hero-visual__frame::before { inset: -10px -12px -10px 12px; }
  .hero-visual__shell,
  .hero-visual__photo { border-radius: 52px; }
  .hero-copy__btn { width: 100%; justify-content: center; }
}

@media (max-width: 575.98px) {
  .hero-section .container-fluid { padding-inline: 1rem; }
  .hero-visual__frame { max-width: 320px; aspect-ratio: 0.94 / 1; }
  .hero-visual__frame::before { inset: -8px -10px -8px 10px; }
  .hero-copy__eyebrow { letter-spacing: 0.12em; }
}

@media (max-width: 479.98px) {
  .hero-visual__frame { max-width: 280px; }
  .hero-section__dots { width: 120px; height: 120px; }
}

@media (max-width: 359.98px) {
  .hero-visual__frame { max-width: 240px; }
  .hero-copy__btn { padding: 0.85rem 1.25rem; font-size: var(--caption); }
}

/* ============================================
   STUDIO SECTION
============================================ */
:root {
  --studio-rust: #b0552e;
  --studio-rust-dark: #94441f;
  --studio-dark: #2a2420;
  --studio-gray: #6b6560;
  --studio-cream: #f7f0e6;
  --studio-cream-light: #fbf6ee;
  --studio-gold: #c98a3e;
  --studio-border: #e7dcc9;
}

.studio-section {
  position: relative;
  background: var(--studio-cream-light);
  overflow: hidden;
  padding-block: clamp(3rem, 5vw, 5rem);
}

.studio-section::before {
  content: "";
  position: absolute;
  top: -18%;
  left: -14%;
  width: clamp(320px, 44vw, 780px);
  height: clamp(320px, 44vw, 780px);
  border: 2px solid rgba(201, 138, 62, 0.85);
  border-right: none;
  border-bottom: none;
  border-radius: 50%;
  opacity: 0.85;
  z-index: 0;
}

.studio-section::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 50% 12%, rgba(255, 255, 255, 0.8), transparent 28%),
    radial-gradient(circle at 50% 50%, rgba(201, 138, 62, 0.08), transparent 62%);
  pointer-events: none;
  z-index: 0;
}

.studio-section .container {
  max-width: 1440px;
  position: relative;
  z-index: 1;
}

.studio-section__leaf {
  position: absolute;
  width: clamp(140px, 16vw, 260px);
  height: auto;
  opacity: 0.35;
  pointer-events: none;
  z-index: 0;
}

.studio-section__leaf--tl { top: 3%; left: -1%; transform: scaleX(-1); }
.studio-section__leaf--tr { top: 6%; right: -1.5%; }

.studio-header {
  text-align: center;
  max-width: 1020px;
  margin: 0 auto clamp(2.5rem, 4vw, 3.4rem);
}

.studio-header__divider {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.9rem;
  margin-bottom: 1.5rem;
  color: var(--studio-gold);
}

.studio-header__divider::before,
.studio-header__divider::after {
  content: "";
  width: clamp(60px, 8vw, 130px);
  height: 1px;
  background: var(--studio-gold);
  opacity: 0.7;
}

.studio-header__divider i { font-size: 1rem; }

.studio-header__title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(2.8rem, 1.4rem + 4.7vw, 5.6rem);
  line-height: 0.98;
  letter-spacing: -0.03em;
  font-weight: 500;
  margin-bottom: 1.5rem;
}

.studio-header__title .accent { color: var(--studio-rust); }
.studio-header__title .plain { color: var(--studio-dark); }

.studio-header__subtitle {
  font-size: clamp(1.05rem, 0.9rem + 0.75vw, 1.5rem);
  line-height: 1.7;
  color: var(--studio-gray);
  max-width: 820px;
  margin: 0 auto clamp(1.9rem, 3.5vw, 2.8rem);
}

.studio-header__btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  background: linear-gradient(180deg, #c66c39 0%, #a64d24 100%);
  color: #fff;
  font-weight: 700;
  font-size: clamp(1rem, 0.95rem + 0.15vw, 1.0625rem);
  padding: 1rem 2.7rem;
  border-radius: 12px;
  border: 2px solid rgba(255, 255, 255, 0.8);
  box-shadow: 0 0 0 1.5px var(--studio-gold), 0 20px 32px -22px rgba(166, 77, 36, 0.7);
  text-decoration: none;
  transition: background 0.25s ease, transform 0.25s ease;
}

.studio-header__btn:hover {
  background: linear-gradient(180deg, #b85d2f 0%, #91431d 100%);
  color: #fff;
  transform: translateY(-2px);
}

.studio-header__btn i { transition: transform 0.25s ease; }
.studio-header__btn:hover i { transform: translateX(4px); }

.studio-row {
  --bs-gutter-x: 1.8rem;
  align-items: stretch;
}

.studio-photo {
  position: relative;
  border-radius: 28px;
  overflow: hidden;
  border: 9px solid rgba(255, 255, 255, 0.92);
  box-shadow: 0 0 0 1px var(--studio-border), 0 26px 54px -28px rgba(42, 36, 32, 0.3);
  height: 100%;
  min-height: 620px;
  background: #fff;
}

.studio-photo::after {
  content: "";
  position: absolute;
  inset: -6px;
  border: 1px solid rgba(201, 138, 62, 0.55);
  border-radius: 30px;
  pointer-events: none;
  z-index: 0;
}

.studio-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

.studio-photo__corner {
  position: absolute;
  width: 62px;
  height: 62px;
  border: 1.5px solid var(--studio-gold);
  z-index: 2;
  pointer-events: none;
}

.studio-photo__corner--tl {
  top: 10px;
  left: 10px;
  border-right: none;
  border-bottom: none;
  border-radius: 22px 0 0 0;
}

.studio-photo__corner--br {
  right: 10px;
  bottom: 10px;
  border-left: none;
  border-top: none;
  border-radius: 0 0 22px 0;
}

.studio-card {
  position: relative;
  background: linear-gradient(180deg, rgba(255, 252, 247, 0.98), rgba(248, 241, 231, 0.98));
  border: 1px solid var(--studio-border);
  border-radius: 28px;
  padding: clamp(2rem, 3vw, 3.2rem);
  height: 100%;
  display: flex;
  flex-direction: column;
  box-shadow: 0 22px 45px -32px rgba(42, 36, 32, 0.22);
}

.studio-card::before {
  content: "";
  position: absolute;
  right: -2%;
  bottom: -2%;
  width: clamp(140px, 18vw, 260px);
  height: clamp(180px, 24vw, 320px);
  background:
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 180 220' fill='none'%3E%3Cg stroke='%23d1a063' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' opacity='0.55'%3E%3Cpath d='M24 212C49 184 62 148 69 98C75 57 92 28 128 10'/%3E%3Cpath d='M58 163C37 149 27 123 26 94C48 109 60 134 58 163Z'/%3E%3Cpath d='M81 121C61 107 51 82 50 53C71 69 83 93 81 121Z'/%3E%3Cpath d='M112 169C92 156 82 130 82 101C103 116 114 140 112 169Z'/%3E%3Cpath d='M132 129C112 115 102 90 102 61C123 77 135 101 132 129Z'/%3E%3Cpath d='M151 189C130 174 120 149 120 120C142 136 153 161 151 189Z'/%3E%3Cpath d='M160 91C140 77 130 52 130 23C151 39 163 63 160 91Z'/%3E%3C/g%3E%3C/svg%3E") center/contain no-repeat;
  opacity: 0.5;
  pointer-events: none;
}

.studio-card__eyebrow {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: clamp(1.5rem, 2.5vw, 2rem);
}

.studio-card__icon {
  flex: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1.5px solid var(--studio-gold);
  color: var(--studio-gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
}

.studio-card__rule {
  flex: 1;
  height: 1px;
  background: var(--studio-gold);
  opacity: 0.6;
}

.studio-card__title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(3rem, 1.8rem + 2.8vw, 4.5rem);
  font-weight: 600;
  color: var(--studio-rust);
  line-height: 0.98;
  margin-bottom: 1.25rem;
}

.studio-card__lead {
  font-family: 'Playfair Display', serif;
  font-size: clamp(1.5rem, 1rem + 1.5vw, 2.35rem);
  font-weight: 500;
  color: var(--studio-rust);
  line-height: 1.25;
  max-width: 13ch;
  margin-bottom: 1.45rem;
}

.studio-card__mini-divider {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  color: var(--studio-gold);
  margin-bottom: 1.4rem;
}

.studio-card__mini-divider::before,
.studio-card__mini-divider::after {
  content: "";
  flex: 1;
  height: 1px;
  background: var(--studio-gold);
  opacity: 0.6;
}

.studio-card__mini-divider i { font-size: 0.6rem; }

.studio-card__text {
  position: relative;
  z-index: 1;
  font-size: clamp(1rem, 0.92rem + 0.25vw, 1.15rem);
  line-height: 1.7;
  color: var(--studio-dark);
  max-width: 30ch;
  margin-bottom: 1.2rem;
}

.studio-card__text:last-of-type { margin-bottom: 1.5rem; }

.studio-card__btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  align-self: flex-start;
  margin-top: auto;
  background: rgba(255, 255, 255, 0.65);
  color: var(--studio-rust);
  font-weight: 700;
  font-size: clamp(1rem, 0.95rem + 0.15vw, 1.0625rem);
  padding: 0.95rem 1.7rem;
  border-radius: 12px;
  border: 1.5px solid rgba(176, 85, 46, 0.75);
  text-decoration: none;
  transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
}

.studio-card__btn:hover {
  background: var(--studio-rust);
  color: #fff;
  transform: translateY(-2px);
}

.studio-card__btn i { transition: transform 0.25s ease; }
.studio-card__btn:hover i { transform: translateX(4px); }

@media (max-width: 1919.98px) {
  .studio-section .container { max-width: 1320px; }
}

@media (max-width: 1599.98px) {
  .studio-header { max-width: 920px; }
}

@media (max-width: 1399.98px) {
  .studio-section .container { max-width: 100%; }
}

@media (max-width: 1199.98px) {
  .studio-card { padding: 1.75rem; }
  .studio-photo { min-height: 520px; }
}

@media (max-width: 991.98px) {
  .studio-section::before { left: -32%; top: -12%; }
  .studio-photo { min-height: 420px; margin-bottom: 1.5rem; }
  .studio-card { min-height: auto; }
  .studio-header__divider::before,
  .studio-header__divider::after { width: 15vw; }
  .studio-card__lead,
  .studio-card__text { max-width: none; }
}

@media (max-width: 767.98px) {
  .studio-header__title { font-size: clamp(2.1rem, 1.45rem + 4vw, 3.2rem); }
  .studio-photo { min-height: 320px; border-width: 8px; }
  .studio-card { padding: 1.5rem; }
  .studio-header__btn { width: 100%; justify-content: center; }
}

@media (max-width: 575.98px) {
  .studio-section .container { padding-inline: 1rem; }
  .studio-section::before {
    width: 420px;
    height: 420px;
    top: -15%;
    left: -58%;
  }
  .studio-header__divider { gap: 0.5rem; }
  .studio-header__divider::before,
  .studio-header__divider::after { width: 10vw; }
  .studio-photo { min-height: 260px; border-width: 6px; border-radius: 20px; }
  .studio-card { border-radius: 20px; padding: 1.25rem; }
  .studio-card__title { font-size: clamp(2.35rem, 1.8rem + 3vw, 3rem); }
  .studio-card__btn { width: 100%; justify-content: center; }
}

@media (max-width: 479.98px) {
  .studio-section { padding-block: 2rem; }
  .studio-photo__corner { width: 28px; height: 28px; }
}

@media (max-width: 359.98px) {
  .studio-card { padding: 1rem; }
  .studio-header__btn { padding: 0.8rem 1.2rem; font-size: 0.9375rem; }
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

  /* Theme colors (scoped to this section only) */
  --dtc-bg: #f7f3ec;
  --dtc-gold: #b08a4e;
  --dtc-gold-dark: #8a6a35;
  --dtc-text-dark: #2b241c;
  --dtc-text-muted: #6d6357;
  --dtc-card-bg: #ffffff;
}

/* ============================================
   SCOPE EVERYTHING UNDER .dtc-section SO NOTHING
   ELSE ON THE PAGE IS AFFECTED
============================================ */
.dtc-section {
  background:
    radial-gradient(circle at 50% 8%, rgba(255, 255, 255, 0.88), transparent 30%),
    linear-gradient(180deg, #fbf7f0 0%, #f6f0e7 100%);
  position: relative;
  overflow: hidden;
  padding: clamp(3rem, 2.3rem + 3vw, 6rem) 0;
  font-family: 'Poppins', sans-serif;
  color: var(--dtc-text-dark);
}

.dtc-section::before {
  content: "";
  position: absolute;
  top: -8%;
  right: -6%;
  width: clamp(220px, 28vw, 420px);
  height: clamp(220px, 28vw, 420px);
  background: radial-gradient(circle, rgba(255, 255, 255, 0.72) 0%, rgba(255, 255, 255, 0) 68%);
  pointer-events: none;
}

.dtc-section * {
  box-sizing: border-box;
}

.dtc-section h1,
.dtc-section h2,
.dtc-section h3 {
  font-family: 'Playfair Display', serif;
  line-height: 0.98;
  letter-spacing: -0.03em;
  color: var(--dtc-text-dark);
  margin: 0;
}

.dtc-section p {
  font-size: clamp(1rem, 0.92rem + 0.25vw, 1.12rem);
  line-height: 1.7;
  color: var(--dtc-text-muted);
  margin: 0;
}

.dtc-container {
  max-width: 1380px;
  margin: 0 auto;
  padding: 0 clamp(1rem, 2vw, 2rem);
  position: relative;
  z-index: 2;
}

.dtc-leaf-bg {
  position: absolute;
  pointer-events: none;
  opacity: 0.42;
  z-index: 1;
}

.dtc-leaf-bg.leaf-top-right {
  top: -2%;
  right: -1.5%;
  width: clamp(180px, 20vw, 320px);
}

.dtc-leaf-bg.leaf-bottom-left {
  bottom: -2%;
  left: -1%;
  width: clamp(140px, 16vw, 250px);
}

.dtc-row1 {
  display: grid;
  grid-template-columns: minmax(0, 1.18fr) minmax(360px, 0.82fr);
  gap: clamp(2rem, 4vw, 4.25rem);
  align-items: center;
  margin-bottom: clamp(2.75rem, 5vw, 4.75rem);
}

.dtc-hero-wrap {
  position: relative;
  min-width: 0;
  padding: 26px 26px 0 0;
}

.dtc-hero-frame {
  position: absolute;
  inset: 0 58px 22px 0;
  border: 1.5px solid rgba(176, 138, 78, 0.75);
  border-radius: 24px;
  z-index: 1;
}

.dtc-hero-img {
  position: relative;
  z-index: 2;
  width: 100%;
  min-height: 440px;
  object-fit: cover;
  display: block;
  border-radius: 20px;
  box-shadow: 0 24px 50px -28px rgba(60, 45, 20, 0.28);
}

.dtc-intro {
  position: relative;
  min-width: 0;
  padding-right: clamp(0rem, 1vw, 0.75rem);
}

.dtc-intro::after {
  content: "";
  position: absolute;
  right: -10%;
  top: 50%;
  transform: translateY(-50%);
  width: clamp(120px, 16vw, 220px);
  height: clamp(220px, 30vw, 420px);
  background:
    radial-gradient(circle at 60% 20%, rgba(255, 255, 255, 0.58), transparent 56%),
    linear-gradient(180deg, rgba(176, 138, 78, 0.06), rgba(176, 138, 78, 0));
  opacity: 0.65;
  pointer-events: none;
}

.dtc-ornament {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  gap: 0.85rem;
  color: var(--dtc-gold);
  margin-bottom: 1.35rem;
}

.dtc-icon-flower {
  color: var(--dtc-gold);
  font-size: 1.15rem;
  display: block;
}

.dtc-ornament__stem {
  width: 1px;
  height: 62px;
  background: linear-gradient(180deg, rgba(176, 138, 78, 0.55), rgba(176, 138, 78, 0));
  position: relative;
}

.dtc-ornament__stem::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 8px;
  width: 6px;
  height: 6px;
  transform: translateX(-50%);
  border-radius: 50%;
  background: var(--dtc-gold);
}

.dtc-intro h2 {
  font-size: clamp(2.7rem, 1.9rem + 2.4vw, 4.3rem);
  margin-bottom: 1.15rem;
  max-width: 10ch;
}

.dtc-divider {
  width: 78px;
  height: 2px;
  background: var(--dtc-gold);
  border-radius: 999px;
  margin-bottom: 1.2rem;
}

.dtc-intro p {
  font-size: clamp(1rem, 0.94rem + 0.22vw, 1.08rem);
  margin-bottom: 0.95rem;
  max-width: 30ch;
}

.dtc-intro p:last-child {
  margin-bottom: 0;
}

.dtc-row2 {
  display: grid;
  grid-template-columns: minmax(300px, 0.82fr) minmax(0, 1.18fr);
  align-items: stretch;
  gap: clamp(1.5rem, 2.8vw, 2.5rem);
}

.dtc-breathe-card {
  position: relative;
  min-width: 0;
  background: linear-gradient(180deg, rgba(255, 255, 255, 0.9), rgba(252, 249, 244, 0.92));
  border: 1px solid rgba(230, 218, 199, 0.9);
  border-radius: 28px;
  padding: clamp(1.8rem, 2.7vw, 2.5rem);
  box-shadow: 0 18px 45px -30px rgba(60, 45, 20, 0.22);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.dtc-breathe-card::before {
  content: "";
  position: absolute;
  left: 3%;
  bottom: 0;
  width: clamp(100px, 16vw, 170px);
  height: clamp(130px, 20vw, 220px);
  background:
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 180 220' fill='none'%3E%3Cg stroke='%23d1a063' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' opacity='0.42'%3E%3Cpath d='M24 212C49 184 62 148 69 98C75 57 92 28 128 10'/%3E%3Cpath d='M58 163C37 149 27 123 26 94C48 109 60 134 58 163Z'/%3E%3Cpath d='M81 121C61 107 51 82 50 53C71 69 83 93 81 121Z'/%3E%3Cpath d='M112 169C92 156 82 130 82 101C103 116 114 140 112 169Z'/%3E%3Cpath d='M132 129C112 115 102 90 102 61C123 77 135 101 132 129Z'/%3E%3C/g%3E%3C/svg%3E") left bottom/contain no-repeat;
  pointer-events: none;
}

.dtc-breathe-icon {
  width: 74px;
  height: 74px;
  border-radius: 50%;
  border: 1.5px solid rgba(176, 138, 78, 0.45);
  background: rgba(255, 255, 255, 0.92);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--dtc-gold);
  font-size: 1.6rem;
  margin: -0.25rem auto 1.3rem;
  box-shadow: 0 0 0 6px rgba(255, 255, 255, 0.55);
}

.dtc-breathe-stem {
  width: 1px;
  height: 56px;
  margin: 0 auto 0.6rem;
  background: linear-gradient(180deg, rgba(176, 138, 78, 0.5), rgba(176, 138, 78, 0));
}

.dtc-breathe-card h3 {
  font-size: clamp(2.7rem, 1.9rem + 2.2vw, 4rem);
  margin-bottom: 0.9rem;
  max-width: 10ch;
}

.dtc-breathe-divider {
  width: 68px;
  height: 2px;
  background: var(--dtc-gold);
  border-radius: 999px;
  margin-bottom: 1rem;
}

.dtc-breathe-card p {
  font-size: clamp(1rem, 0.94rem + 0.25vw, 1.12rem);
  max-width: 30ch;
}

.dtc-grid-wrap {
  min-width: 0;
  background: rgba(255, 255, 255, 0.92);
  border: 1px solid rgba(230, 218, 199, 0.9);
  border-radius: 28px;
  padding: 0.85rem;
  box-shadow: 0 18px 45px -30px rgba(60, 45, 20, 0.22);
}

.dtc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(224, 211, 190, 0.6);
}

.dtc-cell {
  position: relative;
  aspect-ratio: 1 / 0.84;
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  overflow: hidden;
  background-size: cover;
  background-position: center;
  isolation: isolate;
}

.dtc-cell.plain {
  background:
    radial-gradient(circle at 50% 30%, rgba(255, 255, 255, 0.28), transparent 55%),
    linear-gradient(180deg, #eee4d4 0%, #e8ddce 100%);
  align-items: center;
  justify-content: center;
}

.dtc-cell::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(34, 24, 10, 0.72) 0%, rgba(34, 24, 10, 0.18) 52%, rgba(34, 24, 10, 0.04) 100%);
  z-index: 1;
}

.dtc-cell.plain::before {
  background: transparent;
}

.dtc-cell-content {
  position: relative;
  z-index: 2;
  color: #fff;
  padding: clamp(0.7rem, 1vw, 1rem);
  width: 100%;
  text-align: center;
}

.dtc-cell.plain .dtc-cell-content {
  color: #4a3f2c;
}

.dtc-cell.photo .dtc-cell-content {
  display: none;
}

.dtc-cell-content i {
  display: block;
  font-size: clamp(1.05rem, 1.2vw, 1.4rem);
  margin-bottom: 0.5rem;
  color: var(--dtc-gold);
}

.dtc-cell-label {
  display: block;
  font-size: clamp(0.82rem, 0.72rem + 0.15vw, 0.95rem);
  font-weight: 600;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  line-height: 1.15;
}

.dtc-cell-label--light {
  color: #f8f4ee;
  text-shadow: 0 2px 12px rgba(0, 0, 0, 0.28);
}

.dtc-cell-label--split {
  display: inline-flex;
  flex-direction: column;
  gap: 0.18rem;
  align-items: center;
}

@media (max-width: 1919.98px) {
  .dtc-container { max-width: 1320px; }
}

@media (max-width: 1599.98px) {
  .dtc-container { max-width: 1220px; }
}

@media (max-width: 1399.98px) {
  .dtc-row1 {
    grid-template-columns: minmax(0, 1.2fr) minmax(300px, 0.9fr);
    gap: 2.5rem;
  }
  .dtc-row2 {
    grid-template-columns: minmax(280px, 0.85fr) minmax(0, 1.25fr);
  }
}

@media (max-width: 1199.98px) {
  .dtc-container { max-width: 100%; }
  .dtc-row1,
  .dtc-row2 {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  .dtc-intro h2,
  .dtc-breathe-card h3,
  .dtc-intro p,
  .dtc-breathe-card p {
    max-width: none;
  }
}

@media (max-width: 991.98px) {
  .dtc-hero-wrap { padding: 18px 18px 0 0; }
  .dtc-hero-img { min-height: 380px; }
  .dtc-intro::after { display: none; }
}

@media (max-width: 767.98px) {
  .dtc-section { padding: 2.5rem 0; }
  .dtc-row1 { margin-bottom: 2.5rem; }
  .dtc-hero-wrap { padding: 12px 12px 0 0; }
  .dtc-hero-frame { inset: 0 26px 14px 0; border-radius: 18px; }
  .dtc-hero-img { min-height: 320px; border-radius: 16px; }
  .dtc-grid-wrap,
  .dtc-breathe-card { border-radius: 20px; }
  .dtc-grid { border-radius: 14px; }
  .dtc-leaf-bg { display: none; }
}

@media (max-width: 575.98px) {
  .dtc-container { padding: 0 1rem; }
  .dtc-intro h2,
  .dtc-breathe-card h3 { font-size: clamp(2.4rem, 1.8rem + 4vw, 3.2rem); }
  .dtc-cell-content { padding: 0.55rem; }
  .dtc-cell-label { font-size: 0.74rem; letter-spacing: 0.16em; }
}

@media (max-width: 479.98px) {
  .dtc-grid { grid-template-columns: repeat(2, 1fr); }
  .dtc-cell { aspect-ratio: 1 / 0.9; }
}

@media (max-width: 359.98px) {
  .dtc-cell-content i { font-size: 0.95rem; margin-bottom: 0.25rem; }
  .dtc-cell-label { font-size: 0.68rem; letter-spacing: 0.12em; }
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

  /* Brand palette pulled from the reference design */
  --vtr-bg: #FBF7F1;
  --vtr-navy: #1B2545;
  --vtr-terracotta: #B5652E;
  --vtr-terracotta-dark: #8C4A20;
  --vtr-text-muted: #6B7078;
  --vtr-card-bg: #FDFAF6;
  --vtr-card-border: #ECE2D6;
  --vtr-divider: #DCD0C0;
  --vtr-sidebar-start: #8A5227;
  --vtr-sidebar-end: #5E3418;
}

* { box-sizing: border-box; }

body {
  font-family: 'Poppins', sans-serif;
  background: var(--vtr-bg);
  color: var(--vtr-navy);
}

.vtr-section {
  background: var(--vtr-bg);
  padding: clamp(2.5rem, 2rem + 2vw, 5rem) 0;
  overflow: hidden;
}

.vtr-shell {
  max-width: 1760px;
  margin: 0 auto;
  padding: 0 clamp(1rem, 1vw + 0.5rem, 2.5rem);
}

/* ---------- Two column grid: content + sidebar ---------- */
.vtr-grid {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(260px, 340px);
  gap: clamp(1.5rem, 2vw, 3rem);
  align-items: stretch;
}

/* ---------- Left content ---------- */
.vtr-content {
  min-width: 0;
  padding-block: clamp(0.5rem, 1vw, 1.5rem);
}

.vtr-eyebrow {
  display: flex;
  align-items: center;
  gap: 1rem;
  color: var(--vtr-terracotta);
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-size: var(--p-small);
  margin-bottom: 1rem;
}

.vtr-eyebrow::after {
  content: "";
  flex: 1 1 auto;
  max-width: 220px;
  height: 2px;
  background: linear-gradient(90deg, var(--vtr-terracotta), transparent);
}

.vtr-heading {
  font-family: 'Playfair Display', serif;
  font-weight: 800;
  font-size: var(--h1);
  line-height: var(--lh-heading);
  letter-spacing: var(--ls-heading);
  color: var(--vtr-navy);
  margin-bottom: 1.25rem;
}

.vtr-lead {
  font-size: var(--p-large);
  line-height: var(--lh-body);
  color: var(--vtr-text-muted);
  max-width: 62ch;
  margin-bottom: clamp(2rem, 3vw, 3rem);
}

/* ---------- Product cards ---------- */
.vtr-cards {
  --bs-gutter-x: 1.75rem;
  --bs-gutter-y: 1.75rem;
}

.vtr-card {
  position: relative;
  background: var(--vtr-card-bg);
  border: 1px solid var(--vtr-card-border);
  border-radius: 1.75rem;
  padding: clamp(1.25rem, 1.5vw, 2rem);
  height: 100%;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  transition: transform .35s ease, box-shadow .35s ease;
}

.vtr-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 40px -20px rgba(140, 74, 32, 0.25);
}

/* dotted pattern, top right corner */
.vtr-card::before {
  content: "";
  position: absolute;
  top: 1.4rem;
  right: 1.4rem;
  width: 46px;
  height: 46px;
  background-image: radial-gradient(var(--vtr-terracotta) 1.4px, transparent 1.4px);
  background-size: 11px 11px;
  opacity: 0.35;
  pointer-events: none;
}

.vtr-card-media {
  position: relative;
  flex: 1 1 auto;
  min-height: clamp(160px, 18vw, 260px);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
}

/* soft circular glow behind product image, echoing reference */
.vtr-card-media::after {
  content: "";
  position: absolute;
  inset: 8%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(197, 143, 90, 0.35) 0%, rgba(197, 143, 90, 0) 72%);
  z-index: 0;
}

.vtr-card-media img {
  position: relative;
  z-index: 1;
  max-width: 78%;
  max-height: 100%;
  width: auto;
  height: auto;
  object-fit: contain;
  filter: drop-shadow(0 18px 24px rgba(60, 35, 15, 0.18));
}

.vtr-card-footer {
  display: flex;
  align-items: center;
  gap: 0.9rem;
  padding-top: 1.1rem;
  border-top: 1px solid var(--vtr-divider);
}

.vtr-card-icon {
  flex: 0 0 auto;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1.5px solid var(--vtr-terracotta);
  color: var(--vtr-terracotta);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.05rem;
}

.vtr-card-label {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: var(--h5);
  color: var(--vtr-navy);
  margin: 0;
}

/* ---------- Right sidebar ---------- */
.vtr-sidebar {
  position: relative;
  border-radius: 1.75rem;
  background: linear-gradient(160deg, var(--vtr-sidebar-start) 0%, var(--vtr-sidebar-end) 100%);
  color: #fff;
  padding: clamp(1.75rem, 2vw, 2.75rem) clamp(1.5rem, 1.8vw, 2.25rem);
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: clamp(1.25rem, 2vw, 1.75rem);
  overflow: hidden;
  isolation: isolate;
}

/* decorative arc lines, top-right, echoing reference texture */
.vtr-sidebar::before {
  content: "";
  position: absolute;
  top: -30%;
  right: -35%;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.12);
  box-shadow:
    0 0 0 34px rgba(255,255,255,0.05),
    0 0 0 68px rgba(255,255,255,0.035);
  z-index: 0;
}

.vtr-sidebar-watermark {
  position: absolute;
  bottom: -6%;
  right: -4%;
  font-family: 'Playfair Display', serif;
  font-weight: 800;
  font-size: clamp(4rem, 9vw, 7rem);
  color: rgba(255,255,255,0.06);
  letter-spacing: -0.02em;
  white-space: nowrap;
  z-index: 0;
  pointer-events: none;
}

.vtr-feature {
  position: relative;
  z-index: 1;
  display: flex;
  gap: 1rem;
  align-items: flex-start;
}

.vtr-feature + .vtr-feature {
  padding-top: clamp(1.25rem, 2vw, 1.75rem);
  border-top: 1px solid rgba(255,255,255,0.18);
}

.vtr-feature-icon {
  flex: 0 0 auto;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 1.5px solid rgba(255,255,255,0.75);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  color: #fff;
}

.vtr-feature-title {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: var(--h6);
  margin: 0 0 0.35rem;
  color: #fff;
}

.vtr-feature-text {
  font-size: var(--p-small);
  line-height: var(--lh-body);
  color: rgba(255,255,255,0.82);
  margin: 0;
}

/* ============================================
   MEDIA QUERIES
============================================ */
@media (max-width: 1919.98px) {
  .vtr-shell { max-width: 1600px; }
}

@media (max-width: 1599.98px) {
  .vtr-shell { max-width: 1360px; }
  .vtr-grid { grid-template-columns: minmax(0, 1fr) minmax(240px, 300px); }
}

@media (max-width: 1399.98px) {
  .vtr-shell { max-width: 1200px; }
  .vtr-sidebar-watermark { font-size: clamp(3.5rem, 8vw, 5.5rem); }
}

@media (max-width: 1199.98px) {
  .vtr-grid { grid-template-columns: minmax(0, 1fr) minmax(220px, 260px); }
  .vtr-feature-text { font-size: var(--caption); }
}

@media (max-width: 991.98px) {
  .vtr-grid {
    grid-template-columns: 1fr;
  }
  .vtr-sidebar {
    flex-direction: row;
    flex-wrap: wrap;
    gap: 1.5rem 2rem;
    padding: clamp(1.5rem, 3vw, 2.25rem);
  }
  .vtr-feature {
    flex: 1 1 260px;
  }
  .vtr-feature + .vtr-feature {
    border-top: none;
    padding-top: 0;
  }
  .vtr-sidebar-watermark { display: none; }
}

@media (max-width: 767.98px) {
  .vtr-eyebrow::after { max-width: 120px; }
  .vtr-card-media { min-height: 200px; }
  .vtr-sidebar {
    flex-direction: column;
  }
  .vtr-feature { flex: 1 1 auto; }
}

@media (max-width: 575.98px) {
  .vtr-shell { padding: 0 1rem; }
  .vtr-card { border-radius: 1.25rem; padding: 1.25rem; }
  .vtr-sidebar { border-radius: 1.25rem; }
  .vtr-card-icon, .vtr-feature-icon { width: 42px; height: 42px; font-size: 1rem; }
}

@media (max-width: 479.98px) {
  .vtr-eyebrow { flex-wrap: wrap; gap: 0.6rem; }
  .vtr-eyebrow::after { max-width: 80px; }
  .vtr-card-media { min-height: 170px; }
}

@media (max-width: 359.98px) {
  .vtr-card-footer { gap: 0.6rem; }
  .vtr-card-label { font-size: 1rem; }
}
</style>


<section class="hero-section">
  <div class="hero-section__dots"></div>
  <div class="hero-section__diagonal"></div>

  <div class="container-fluid">
    <div class="row align-items-center hero-row g-4">

      <!-- Copy column -->
      <div class="col-12 col-lg-6">
        <div class="hero-copy">
          <p class="hero-copy__eyebrow">Crafting Identities. Creating Impact.</p>

          <h1 class="hero-copy__title">
            <span class="life">LIFE</span><span class="like">like</span>
          </h1>

          <div class="hero-copy__divider"><i class="fa-solid fa-sparkles"></i></div>

          <h2 class="hero-copy__tagline">Where Design Begins With You</h2>

          <p class="hero-copy__desc">
            Brand books contain elements like founding principles and visual identity
            components, ensuring a unified brand experience.
          </p>

          <a href="#" class="hero-copy__btn">
            Explore More <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>
      </div>

      <!-- Visual column -->
      <div class="col-12 col-lg-6">
        <div class="hero-visual">
          <div class="hero-visual__frame">
            <i class="fa-solid fa-sparkles hero-visual__sparkle hero-visual__sparkle--top"></i>
            <i class="fa-solid fa-sparkles hero-visual__sparkle hero-visual__sparkle--mid"></i>
            <i class="fa-solid fa-sparkles hero-visual__sparkle hero-visual__sparkle--bottom"></i>
            <div class="hero-visual__shell"></div>
            <div class="hero-visual__photo">
              <img src="./assets/images/lifelike/living-room.png" alt="Elegant living room interior design">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="studio-section">

  <!-- decorative corner leaves -->
  <svg class="studio-section__leaf studio-section__leaf--tl" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 190 C 60 150, 40 90, 90 60 C 130 35, 150 40, 180 15" stroke="#c98a3e" stroke-width="1.2"/>
    <path d="M40 150 C 55 140, 65 120, 60 105" stroke="#c98a3e" stroke-width="1"/>
    <path d="M70 110 C 85 100, 95 82, 90 65" stroke="#c98a3e" stroke-width="1"/>
    <path d="M105 70 C 118 60, 128 45, 122 30" stroke="#c98a3e" stroke-width="1"/>
  </svg>
  <svg class="studio-section__leaf studio-section__leaf--tr" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 190 C 60 150, 40 90, 90 60 C 130 35, 150 40, 180 15" stroke="#c98a3e" stroke-width="1.2"/>
    <path d="M40 150 C 55 140, 65 120, 60 105" stroke="#c98a3e" stroke-width="1"/>
    <path d="M70 110 C 85 100, 95 82, 90 65" stroke="#c98a3e" stroke-width="1"/>
    <path d="M105 70 C 118 60, 128 45, 122 30" stroke="#c98a3e" stroke-width="1"/>
  </svg>

  <div class="container">

    <!-- Header -->
    <div class="studio-header">
      <div class="studio-header__divider"><i class="fa-solid fa-spa"></i></div>
      <h1 class="studio-header__title">
        <span class="accent">Life Like</span> <span class="plain">Design Studio</span>
      </h1>
      <p class="studio-header__subtitle">
        Life Like is a design studio led by Principal Architect Vidisha Ule,
        founded on the belief that design is more than aesthetics — it's about connection.
      </p>
      <a href="#" class="studio-header__btn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <!-- Content -->
    <div class="row studio-row g-4">

      <div class="col-12 col-lg-6">
        <div class="studio-photo">
          <span class="studio-photo__corner studio-photo__corner--tl"></span>
          <span class="studio-photo__corner studio-photo__corner--br"></span>
          <img src="./assets/images/lifelike/reception-desk.jpg" alt="Life Like design studio reception desk">
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="studio-card">
          <div class="studio-card__eyebrow">
            <div class="studio-card__icon"><i class="fa-solid fa-spa"></i></div>
            <div class="studio-card__rule"></div>
          </div>

          <h2 class="studio-card__title">Hi There!</h2>
          <p class="studio-card__lead">Welcome to Life Like — where design begins with you.</p>

          <div class="studio-card__mini-divider"><i class="fa-solid fa-diamond"></i></div>

          <p class="studio-card__text">
            A space where ideas matter more than grades, and creativity always has a voice.
          </p>
          <p class="studio-card__text">
            We started with coffee-fuelled college nights and crumpled sketches — and grew
            into a studio that now designs spaces people call Life Like.
          </p>
          <p class="studio-card__text">
            So, let's build something beautiful together. Just for you.
          </p>

          <a href="#" class="studio-card__btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="dtc-section">

  <!-- decorative leaf background elements -->
  <svg class="dtc-leaf-bg leaf-top-right" viewBox="0 0 200 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 10 C40 60, 30 150, 100 290" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 40 C70 45,50 60,45 80" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 90 C130 95,150 110,155 130" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 140 C70 145,50 160,45 180" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 190 C130 195,150 210,155 230" stroke="#b08a4e" stroke-width="1"/>
  </svg>
  <svg class="dtc-leaf-bg leaf-bottom-left" viewBox="0 0 200 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 10 C40 60, 30 150, 100 290" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 40 C70 45,50 60,45 80" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 90 C130 95,150 110,155 130" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 140 C70 145,50 160,45 180" stroke="#b08a4e" stroke-width="1"/>
    <path d="M100 190 C130 195,150 210,155 230" stroke="#b08a4e" stroke-width="1"/>
  </svg>

  <div class="dtc-container">

    <!-- ROW 1: Hero Image + Intro Text -->
    <div class="dtc-row1">
      <div class="dtc-hero-wrap">
        <div class="dtc-hero-frame"></div>
        <img src="./assets/images/lifelike/hero-buddha.png" alt="Elegant hallway interior with carved Buddha wall art, wooden console, mirror and pendant light" class="dtc-hero-img">
      </div>

      <div class="dtc-intro">
        <div class="dtc-ornament">
          <i class="fa-solid fa-leaf dtc-icon-flower"></i>
          <span class="dtc-ornament__stem"></span>
        </div>
        <h2>Design That Connects</h2>
        <div class="dtc-divider"></div>
        <p>At Life Like, design isn't just what we create — it's how we connect.</p>
        <p>Every space is crafted around your rhythm and grows with you.</p>
      </div>
    </div>

    <!-- ROW 2: Breathe Card + 3x3 Services Grid -->
    <div class="dtc-row2">

      <div class="dtc-breathe-card">
        <div class="dtc-breathe-icon">
          <i class="fa-solid fa-leaf"></i>
        </div>
        <div class="dtc-breathe-stem"></div>
        <h3>A Space That Breathes</h3>
        <div class="dtc-breathe-divider"></div>
        <p>Using natural materials that age gracefully, we design spaces that breathe — spaces that don't just look good, but feel right.</p>
      </div>

      <div class="dtc-grid-wrap">
        <div class="dtc-grid">

          <!-- Architecture -->
          <div class="dtc-cell photo" style="background-image:url('./assets/images/lifelike/architecture.png');">
            <div class="dtc-cell-content">
              <i class="fa-solid fa-building-columns"></i>
              <span class="dtc-cell-label dtc-cell-label--light">Architecture</span>
            </div>
          </div>

          <!-- Care -->
          <div class="dtc-cell plain">
            <div class="dtc-cell-content">
              <i class="fa-regular fa-heart"></i>
              <span class="dtc-cell-label">Care</span>
            </div>
          </div>

          <!-- Interior Design -->
          <div class="dtc-cell photo" style="background-image:url('./assets/images/lifelike/interior-design.png');">
            <div class="dtc-cell-content">
              <i class="fa-solid fa-couch"></i>
              <span class="dtc-cell-label dtc-cell-label--light dtc-cell-label--split"><span>Interior</span><span>Design</span></span>
            </div>
          </div>

          <!-- Services -->
          <div class="dtc-cell plain">
            <div class="dtc-cell-content">
              <i class="fa-regular fa-user"></i>
              <span class="dtc-cell-label">Services</span>
            </div>
          </div>

          <!-- Space Consultancy -->
          <div class="dtc-cell photo" style="background-image:url('./assets/images/lifelike/space-consultancy.png');">
            <div class="dtc-cell-content">
              <i class="fa-solid fa-cube"></i>
              <span class="dtc-cell-label dtc-cell-label--light dtc-cell-label--split"><span>Space</span><span>Consultancy</span></span>
            </div>
          </div>

          <!-- Purpose -->
          <div class="dtc-cell plain">
            <div class="dtc-cell-content">
              <i class="fa-regular fa-compass"></i>
              <span class="dtc-cell-label">Purpose</span>
            </div>
          </div>

          <!-- Rental Home Setup -->
          <div class="dtc-cell photo" style="background-image:url('./assets/images/lifelike/rental-home-setup.png');">
            <div class="dtc-cell-content">
              <i class="fa-solid fa-house-chimney"></i>
              <span class="dtc-cell-label dtc-cell-label--light dtc-cell-label--split"><span>Rental Home</span><span>Setup</span></span>
            </div>
          </div>

          <!-- Creative -->
          <div class="dtc-cell plain">
            <div class="dtc-cell-content">
              <i class="fa-regular fa-lightbulb"></i>
              <span class="dtc-cell-label">Creative</span>
            </div>
          </div>

          <!-- Styling -->
          <div class="dtc-cell photo" style="background-image:url('./assets/images/lifelike/styling.png');">
            <div class="dtc-cell-content">
              <i class="fa-solid fa-star"></i>
              <span class="dtc-cell-label dtc-cell-label--light">Styling</span>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
<section class="vtr-section">
  <div class="vtr-shell">
    <div class="vtr-grid">

      <!-- LEFT: content -->
      <div class="vtr-content">
        <div class="vtr-eyebrow">From Vision to Reality</div>
        <h2 class="vtr-heading">From Vision to Reality</h2>
        <p class="vtr-lead">
          We don't stop at design. We provide end-to-end support &mdash; from site selection
          and legal approvals to execution, through our curated network of trusted professionals.
        </p>

        <div class="row row-cols-1 row-cols-md-3 vtr-cards g-4">

          <!-- Card 1: Notebook -->
          <div class="col">
            <div class="vtr-card">
              <div class="vtr-card-media">
                <img src="./assets/images/lifelike\notebook.png" alt="Branded notebook with embossed logo">
              </div>
              <div class="vtr-card-footer">
                <span class="vtr-card-icon"><i class="fa-solid fa-book"></i></span>
                <p class="vtr-card-label">Notebook</p>
              </div>
            </div>
          </div>

          <!-- Card 2: Color fan -->
          <div class="col">
            <div class="vtr-card">
              <div class="vtr-card-media">
                <img src="./assets/images/lifelike/color-fan.png" alt="Colour swatch fan deck">
              </div>
              <div class="vtr-card-footer">
                <span class="vtr-card-icon"><i class="fa-solid fa-swatchbook"></i></span>
                <p class="vtr-card-label">Color fan</p>
              </div>
            </div>
          </div>

          <!-- Card 3: Envelope -->
          <div class="col">
            <div class="vtr-card">
              <div class="vtr-card-media">
                <img src="./assets/images/lifelike/envelope.png" alt="Branded stationery envelope">
              </div>
              <div class="vtr-card-footer">
                <span class="vtr-card-icon"><i class="fa-regular fa-envelope"></i></span>
                <p class="vtr-card-label">Envelope</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT: sidebar -->
      <aside class="vtr-sidebar">
        <span class="vtr-sidebar-watermark">LIFE</span>

        <div class="vtr-feature">
          <span class="vtr-feature-icon"><i class="fa-solid fa-shield-halved"></i></span>
          <div>
            <h3 class="vtr-feature-title">Expert Guidance</h3>
            <p class="vtr-feature-text">From concept to completion, we guide you at every step.</p>
          </div>
        </div>

        <div class="vtr-feature">
          <span class="vtr-feature-icon"><i class="fa-solid fa-people-group"></i></span>
          <div>
            <h3 class="vtr-feature-title">Curated Network</h3>
            <p class="vtr-feature-text">Access trusted professionals who bring your vision to life.</p>
          </div>
        </div>

        <div class="vtr-feature">
          <span class="vtr-feature-icon"><i class="fa-solid fa-circle-check"></i></span>
          <div>
            <h3 class="vtr-feature-title">End-to-End Support</h3>
            <p class="vtr-feature-text">We handle the details so you can focus on the bigger picture.</p>
          </div>
        </div>
      </aside>

    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
