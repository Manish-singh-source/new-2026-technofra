<?php
$pageTitle = 'Frizzcool Portfolio | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
:root {
  --fc-orange: #f47920;
  --fc-blue: #1650a3;
  --fc-dark: #1e2430;
}

.frizzcool-page {
  background: #f3f3f3;
}

.fc-hero {
  position: relative;
  overflow: hidden;
  min-height: clamp(420px, 52vw, 700px);
  display: flex;
  align-items: center;
  padding: clamp(110px, 11vw, 150px) 0 clamp(70px, 7vw, 110px);
  background:
    linear-gradient(90deg, rgba(255, 255, 255, 0.97) 0%, rgba(255, 255, 255, 0.94) 34%, rgba(255, 255, 255, 0.58) 56%, rgba(255, 255, 255, 0.12) 76%, rgba(255, 255, 255, 0.02) 100%),
    url('assets/images/flameproof-split-ac.png') center center / cover no-repeat;
}

.fc-hero__bg-fade {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(19, 24, 32, 0.14) 0%, rgba(19, 24, 32, 0.03) 22%, rgba(255, 255, 255, 0) 55%, rgba(19, 24, 32, 0.08) 100%);
  pointer-events: none;
}

.fc-hero__container {
  position: relative;
  z-index: 1;
}

.fc-hero__content {
  max-width: min(560px, 100%);
}

.fc-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  color: var(--fc-orange);
  font-weight: 700;
  font-size: clamp(0.85rem, 0.8rem + 0.15vw, 0.95rem);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: clamp(0.75rem, 0.6rem + 0.5vw, 1.25rem);
}

.fc-hero__eyebrow .fc-line {
  width: clamp(34px, 3vw, 62px);
  height: 2px;
  background: var(--fc-orange);
  flex-shrink: 0;
}

.fc-hero__title {
  margin: 0 0 1rem;
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  line-height: 0.96;
  letter-spacing: -0.03em;
  text-transform: uppercase;
}

.fc-hero__title .line-1,
.fc-hero__title .line-2 {
  display: block;
  font-size: clamp(2.5rem, 1.65rem + 3.5vw, 4.5rem);
}

.fc-hero__title .line-1 {
  color: var(--fc-dark);
}

.fc-hero__title .line-2 {
  color: var(--fc-orange);
}

.fc-hero__desc {
  max-width: 37ch;
  margin: 0 0 2rem;
  color: #4d525c;
  font-size: clamp(0.98rem, 0.92rem + 0.3vw, 1.1rem);
  line-height: 1.55;
}

.fc-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 0.9rem;
}

.fc-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.65rem;
  padding: 0.92rem 1.55rem;
  border-radius: 0.42rem;
  border: 2px solid transparent;
  font-size: 0.92rem;
  font-weight: 700;
  text-decoration: none;
  transition: transform 0.25s ease, background-color 0.25s ease, border-color 0.25s ease, color 0.25s ease;
  white-space: nowrap;
}

.fc-btn:hover {
  text-decoration: none;
}

.fc-btn-primary {
  background: var(--fc-blue);
  color: #fff;
  box-shadow: 0 12px 28px rgba(22, 80, 163, 0.22);
}

.fc-btn-primary i {
  width: 1.8em;
  height: 1.8em;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.15);
  font-size: 0.82em;
}

.fc-btn-primary:hover {
  background: #103d7d;
  color: #fff;
  transform: translateY(-2px);
}

.fc-btn-outline {
  background: rgba(255, 255, 255, 0.9);
  color: var(--fc-dark);
  border-color: #f1a15d;
  box-shadow: 0 10px 22px rgba(20, 25, 35, 0.08);
}

.fc-btn-outline:hover {
  background: var(--fc-orange);
  border-color: var(--fc-orange);
  color: #fff;
  transform: translateY(-2px);
}

.fc-btn-outline i {
  font-size: 0.8em;
}

@media (max-width: 991.98px) {
  .fc-hero {
    text-align: center;
    background-position: 68% center;
    padding-top: 120px;
    padding-bottom: 72px;
  }

  .fc-hero__content,
  .fc-hero__desc {
    margin-inline: auto;
  }

  .fc-hero__eyebrow,
  .fc-hero__actions {
    justify-content: center;
  }
}

@media (max-width: 767.98px) {
  .fc-hero {
    min-height: auto;
    background-position: 72% center;
  }
}

@media (max-width: 575.98px) {
  .fc-hero {
    background:
      linear-gradient(180deg, rgba(255, 255, 255, 0.96) 0%, rgba(255, 255, 255, 0.91) 42%, rgba(255, 255, 255, 0.72) 100%),
      url('assets/images/flameproof-split-ac.png') 70% center / cover no-repeat;
  }

  .fc-hero__eyebrow .fc-line {
    display: none;
  }

  .fc-hero__actions {
    flex-direction: column;
    align-items: stretch;
  }

  .fc-btn {
    width: 100%;
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

  /* Brand tokens */
  --clr-dark: #1a1d29;
  --clr-orange: #f7941d;
  --clr-orange-dark: #e8720f;
  --clr-orange-light: #fdeee0;
  --clr-gray: #6b7280;
  --clr-border: #eef0f3;
}

* { box-sizing: border-box; }

body {
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  color: var(--clr-dark);
  overflow-x: hidden;
}

.device-section {
  padding-block: clamp(3rem, 6vw, 6rem);
  width: 100%;
}

.device-section .container {
  max-width: 1320px;
}

/* ---------- Header ---------- */
.device-section__eyebrow-wrap {
  text-align: center;
  margin-bottom: clamp(2.5rem, 5vw, 4rem);
}

.device-section__title {
  font-size: var(--h1);
  line-height: var(--lh-heading);
  letter-spacing: var(--ls-heading);
  font-weight: 800;
  margin-bottom: 1rem;
}

.device-section__title span {
  color: var(--clr-orange);
}

.device-section__subtitle {
  font-size: var(--p-large);
  line-height: var(--lh-body);
  color: var(--clr-gray);
  max-width: 720px;
  margin-inline: auto;
}

/* ---------- Feature icons row ---------- */
.feature-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  min-width: 0;
}

.feature-item__icon {
  flex: none;
  width: clamp(56px, 4vw + 30px, 68px);
  height: clamp(56px, 4vw + 30px, 68px);
  border-radius: 16px;
  background: var(--clr-orange-light);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: clamp(1.35rem, 1vw + 1rem, 1.6rem);
  color: var(--clr-orange);
}

.feature-item__text {
  min-width: 0;
}

.feature-item__title {
  font-size: var(--h6);
  font-weight: 700;
  margin: 0 0 0.15rem;
  line-height: var(--lh-tight);
}

.feature-item__desc {
  font-size: var(--p-small);
  color: var(--clr-gray);
  margin: 0;
  line-height: var(--lh-body);
}

/* ---------- Showcase panel ---------- */
.showcase-panel {
  position: relative;
  border-radius: clamp(20px, 3vw, 32px);
  background: linear-gradient(180deg, #fdf1e4 0%, #fdf6ee 55%, #ffffff 100%);
  padding: clamp(2.5rem, 6vw, 5rem) clamp(1.25rem, 4vw, 4rem) clamp(3rem, 6vw, 4.5rem);
  overflow: hidden;
  isolation: isolate;
}

/* decorative dotted grid, top-left */
.showcase-panel::before {
  content: "";
  position: absolute;
  top: clamp(1.5rem, 4vw, 3rem);
  left: clamp(1.5rem, 4vw, 3rem);
  width: 140px;
  height: 140px;
  background-image: radial-gradient(var(--clr-orange) 1.5px, transparent 1.5px);
  background-size: 16px 16px;
  opacity: 0.25;
  z-index: 0;
  pointer-events: none;
}

/* decorative arcs, bottom-right */
.showcase-panel::after {
  content: "";
  position: absolute;
  right: -120px;
  bottom: -140px;
  width: 420px;
  height: 420px;
  border-radius: 50%;
  border: 60px solid rgba(247, 148, 29, 0.08);
  z-index: 0;
  pointer-events: none;
}

.showcase-devices {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  flex-wrap: wrap;
  gap: clamp(1.5rem, 4vw, 3rem);
  width: 100%;
}

/* ---------- Shared mock-browser content ---------- */
.mock-screen {
  width: 100%;
  height: 100%;
  background: #fff5ea;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.mock-navbar {
  background: var(--clr-orange);
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex: none;
  padding: 0 4%;
  height: 15%;
  min-height: 22px;
}

.mock-logo {
  display: flex;
  align-items: center;
  gap: 4%;
  min-width: 0;
}

.mock-logo i {
  color: #fff;
  font-size: 90%;
  flex: none;
}

.mock-logo span {
  color: #fff;
  font-weight: 700;
  font-size: 55%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: none;
}

.mock-nav-links {
  display: flex;
  gap: 6%;
  align-items: center;
}

.mock-nav-links span {
  color: #fff;
  font-size: 48%;
  font-weight: 500;
  white-space: nowrap;
  opacity: 0.95;
}

.mock-nav-links .mock-cta {
  background: #fff;
  color: var(--clr-orange-dark);
  border-radius: 20px;
  padding: 6% 10%;
  font-weight: 700;
}

.mock-nav-toggle {
  color: #fff;
  font-size: 90%;
}

.mock-body {
  flex: 1;
  position: relative;
  display: flex;
  align-items: center;
  padding: 5% 4%;
  min-height: 0;
}

.mock-copy {
  position: relative;
  z-index: 2;
  width: 62%;
  min-width: 0;
}

.mock-copy h3 {
  font-size: clamp(0.55rem, 1.6vw, 1.15rem);
  font-weight: 700;
  line-height: 1.15;
  margin: 0 0 4%;
  color: var(--clr-dark);
}

.mock-copy h3 em {
  color: var(--clr-orange);
  font-style: normal;
}

.mock-copy p {
  font-size: clamp(0.32rem, 0.75vw, 0.55rem);
  color: #8b8f9a;
  line-height: 1.4;
  margin: 0 0 6%;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.mock-btns {
  display: flex;
  gap: 6%;
}

.mock-btns span {
  font-size: clamp(0.32rem, 0.7vw, 0.5rem);
  font-weight: 700;
  padding: 6% 9%;
  border-radius: 5px;
  white-space: nowrap;
}

.mock-btns .btn-solid {
  background: var(--clr-orange);
  color: #fff;
}

.mock-btns .btn-outline {
  background: transparent;
  border: 1px solid var(--clr-orange);
  color: var(--clr-orange-dark);
}

.mock-image {
  position: absolute;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 46%;
  display: flex;
  align-items: flex-end;
  justify-content: flex-end;
}

.mock-image img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

/* ---------- Laptop frame ---------- */
.device-frame {
  position: relative;
  flex: none;
}

.device-frame__label {
  text-align: center;
  margin-top: 1.25rem;
}

.device-frame__label .dot {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background: var(--clr-orange);
  border: 3px solid #ffd9a8;
  margin: 0 auto 0.75rem;
}

.device-frame__label strong {
  display: block;
  font-size: var(--h6);
  font-weight: 700;
  margin-bottom: 0.15rem;
}

.device-frame__label small {
  color: var(--clr-gray);
  font-size: var(--p-small);
}

.laptop {
  width: clamp(260px, 30vw, 460px);
}

.laptop__screen {
  background: #14151c;
  border-radius: 14px 14px 4px 4px;
  padding: 3.2% 3.2% 1.6%;
  box-shadow: 0 20px 45px -15px rgba(20, 21, 28, 0.4);
}

.laptop__screen-inner {
  aspect-ratio: 16 / 10.2;
  border-radius: 4px;
  overflow: hidden;
}

.laptop__base {
  height: clamp(10px, 1.6vw, 16px);
  background: linear-gradient(180deg, #2b2d38 0%, #1a1b23 100%);
  border-radius: 0 0 10px 10px;
  position: relative;
}

.laptop__base::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  width: 14%;
  height: 5px;
  background: #14151c;
  border-radius: 0 0 6px 6px;
}

/* ---------- Tablet frame ---------- */
.tablet {
  width: clamp(200px, 21vw, 320px);
}

.tablet__screen {
  background: #14151c;
  border-radius: 22px;
  padding: 4.5%;
  box-shadow: 0 20px 45px -15px rgba(20, 21, 28, 0.4);
  position: relative;
}

.tablet__screen::before {
  content: "";
  position: absolute;
  top: 2%;
  left: 50%;
  transform: translateX(-50%);
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #3a3c48;
}

.tablet__screen-inner {
  aspect-ratio: 3 / 4;
  border-radius: 8px;
  overflow: hidden;
}

/* ---------- Phone frame ---------- */
.phone {
  width: clamp(110px, 10.5vw, 165px);
}

.phone__screen {
  background: #14151c;
  border-radius: 28px;
  padding: 5% 4%;
  box-shadow: 0 20px 45px -15px rgba(20, 21, 28, 0.4);
}

.phone__screen-inner {
  aspect-ratio: 9 / 18.5;
  border-radius: 16px;
  overflow: hidden;
}

.phone .mock-copy { width: 100%; }
.phone .mock-image { position: static; width: 100%; height: 42%; justify-content: center; margin-bottom: 4%; }
.phone .mock-body { flex-direction: column; align-items: stretch; justify-content: flex-start; }
.phone .mock-nav-links span:not(.mock-nav-toggle-wrap) { display: none; }

/* ---------- Timeline connector (desktop) ---------- */
.timeline-row {
  position: relative;
  z-index: 1;
  display: none;
  align-items: center;
  margin-top: clamp(2rem, 4vw, 3rem);
}

.timeline-row::before {
  content: "";
  position: absolute;
  left: 5%;
  right: 5%;
  top: 7px;
  height: 2px;
  background: #f3d9b5;
  z-index: 0;
}

.timeline-row .device-frame__label {
  position: relative;
  z-index: 1;
  flex: 1;
}

@media (min-width: 992px) {
  .timeline-row { display: flex; }
  .showcase-devices .device-frame__label { display: none; }
}

/* ================= MEDIA QUERIES ================= */
@media (max-width: 1919.98px) {
  .device-section .container { max-width: 1280px; }
}

@media (max-width: 1599.98px) {
  .showcase-panel::after { width: 340px; height: 340px; }
}

@media (max-width: 1399.98px) {
  .device-section .container { max-width: 100%; }
  .showcase-devices { gap: 1.75rem; }
}

@media (max-width: 1199.98px) {
  .laptop { width: clamp(240px, 34vw, 400px); }
  .tablet { width: clamp(180px, 24vw, 280px); }
  .phone { width: clamp(100px, 12vw, 150px); }
}

@media (max-width: 991.98px) {
  .showcase-devices { align-items: center; }
  .laptop { width: clamp(220px, 46vw, 380px); }
  .tablet { width: clamp(170px, 32vw, 260px); }
  .phone { width: clamp(95px, 16vw, 140px); }
  .feature-item { justify-content: center; text-align: left; }
}

@media (max-width: 767.98px) {
  .showcase-devices { flex-direction: column; }
  .laptop, .tablet, .phone { width: clamp(220px, 60vw, 340px); }
  .showcase-panel::before { width: 100px; height: 100px; }
  .feature-item { flex-direction: column; text-align: center; }
}

@media (max-width: 575.98px) {
  .showcase-panel { padding-inline: 1rem; }
  .laptop, .tablet, .phone { width: 82vw; max-width: 300px; }
  .device-frame__label strong { font-size: var(--p-large); }
}

@media (max-width: 479.98px) {
  .mock-copy p { -webkit-line-clamp: 2; }
  .device-section { padding-block: 2.5rem; }
}

@media (max-width: 359.98px) {
  .laptop, .tablet, .phone { width: 90vw; }
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

  /* Brand tokens */
  --clr-dark: #1a1d29;
  --clr-orange: #f7941d;
  --clr-orange-dark: #e8720f;
  --clr-orange-light: #fdeee0;
  --clr-gray: #6b7280;
  --clr-border: #ececec;
  --clr-card-bg: #fafafa;
  --clr-section-bg: #f7f7f8;
}

* { box-sizing: border-box; }

body {
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  color: var(--clr-dark);
  overflow-x: hidden;
}

.products-section {
  background: var(--clr-section-bg);
  padding-block: clamp(3rem, 6vw, 6rem);
  width: 100%;
}

.products-section .container {
  max-width: 1320px;
}

/* ---------- Header ---------- */
.products-section__header {
  margin-bottom: clamp(2.25rem, 5vw, 3.5rem);
}

.products-section__accent {
  width: 56px;
  height: 5px;
  border-radius: 4px;
  background: var(--clr-orange);
  margin-bottom: 1.25rem;
}

.products-section__title {
  font-size: var(--h1);
  line-height: var(--lh-heading);
  letter-spacing: var(--ls-heading);
  font-weight: 800;
  margin-bottom: 1rem;
}

.products-section__subtitle {
  font-size: var(--p-large);
  line-height: var(--lh-body);
  color: var(--clr-gray);
  max-width: 780px;
  margin: 0;
}

/* ---------- Product Card ---------- */
.product-card {
  background: var(--clr-card-bg);
  border: 1px solid var(--clr-border);
  border-radius: 16px;
  padding: clamp(1.25rem, 2vw, 1.75rem);
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: box-shadow 0.25s ease, transform 0.25s ease, border-color 0.25s ease;
}

.product-card:hover {
  box-shadow: 0 20px 40px -18px rgba(20, 21, 28, 0.16);
  transform: translateY(-4px);
  border-color: transparent;
}

.product-card__media {
  width: 100%;
  aspect-ratio: 4 / 3;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  margin-bottom: clamp(1rem, 2vw, 1.5rem);
  flex: none;
}

.product-card__media img {
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height: auto;
  object-fit: contain;
}

.product-card__body {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  flex: 1;
  min-width: 0;
}

.product-card__icon {
  flex: none;
  width: clamp(44px, 3vw + 24px, 52px);
  height: clamp(44px, 3vw + 24px, 52px);
  border-radius: 50%;
  border: 2px solid var(--clr-orange);
  color: var(--clr-orange);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: clamp(1.05rem, 1vw + 0.7rem, 1.3rem);
}

.product-card__content {
  min-width: 0;
  flex: 1;
}

.product-card__title {
  font-size: var(--h5);
  font-weight: 700;
  line-height: var(--lh-tight);
  margin: 0 0 0.35rem;
  word-wrap: break-word;
}

.product-card__desc {
  font-size: var(--p-small);
  color: var(--clr-gray);
  line-height: var(--lh-body);
  margin: 0 0 1.1rem;
  word-wrap: break-word;
}

.product-card__btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  border: 1.5px solid var(--clr-orange);
  color: var(--clr-orange-dark);
  background: transparent;
  font-size: var(--p-small);
  font-weight: 700;
  padding: 0.55rem 1.1rem;
  border-radius: 8px;
  text-decoration: none;
  white-space: nowrap;
  transition: background 0.2s ease, color 0.2s ease;
}

.product-card__btn i {
  font-size: 0.8em;
  transition: transform 0.2s ease;
}

.product-card__btn:hover {
  background: var(--clr-orange);
  color: #fff;
}

.product-card__btn:hover i {
  transform: translateX(3px);
}

.promo-banner-section {
  background: var(--clr-section-bg);
  padding: 0 0 4rem;
}

.promo-banner-section__media {
  display: block;
  width: 100%;
  border-radius: 28px;
  overflow: hidden;
  box-shadow: 0 22px 50px rgba(20, 21, 28, 0.12);
}

.promo-banner-section__media img {
  display: block;
  width: 100%;
  height: auto;
}

/* ================= MEDIA QUERIES ================= */
@media (max-width: 1919.98px) {
  .products-section .container { max-width: 1180px; }
}

@media (max-width: 1599.98px) {
  .product-card__media { aspect-ratio: 4 / 3.1; }
}

@media (max-width: 1399.98px) {
  .products-section .container { max-width: 100%; }
}

@media (max-width: 1199.98px) {
  .product-card__body { gap: 0.85rem; }
}

@media (max-width: 991.98px) {
  .products-section__subtitle { max-width: 100%; }
  .product-card__media { aspect-ratio: 16 / 10; }
}

@media (max-width: 767.98px) {
  .products-section__title { text-align: left; }
  .product-card { padding: 1.25rem; }
  .product-card__media { aspect-ratio: 4 / 3; }
}

@media (max-width: 575.98px) {
  .product-card__body { flex-direction: column; align-items: flex-start; gap: 0.75rem; }
  .product-card__icon { width: 46px; height: 46px; }
  .product-card__btn { width: 100%; justify-content: center; }
}

@media (max-width: 479.98px) {
  .products-section { padding-block: 2.5rem; }
  .products-section__accent { width: 44px; }
  .promo-banner-section { padding: 0 0 2.5rem; }
  .promo-banner-section__media { border-radius: 20px; }
}

@media (max-width: 359.98px) {
  .product-card { padding: 1rem; }
  .product-card__title { font-size: var(--h6); }
}
</style>
<main class="frizzcool-page">
  <section class="fc-hero">
    <div class="fc-hero__bg-fade"></div>
    <div class="container fc-hero__container">
      <div class="row">
        <div class="col-12">
          <div class="fc-hero__content">
            <div class="fc-hero__eyebrow">
              <span>Portfolio Website Showcase</span>
              <span class="fc-line"></span>
            </div>

            <h1 class="fc-hero__title">
              <span class="line-1">Frizzcool</span>
              <span class="line-2">Website Portfolio</span>
            </h1>

            <p class="fc-hero__desc">
              A portfolio presentation of the Frizzcool website we designed and developed, highlighting the brand story, product display, and responsive user experience.
            </p>

            <div class="fc-hero__actions">
              <a href="https://frizcoolindia.com/" class="fc-btn fc-btn-primary" target="_blank" rel="noopener noreferrer">
                VIEW PROJECT <i class="fa-solid fa-arrow-right"></i>
              </a>
              <a href="portfolios.php" class="fc-btn fc-btn-outline">
                EXPLORE MORE PROJECTS <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
<section class="device-section">
  <div class="container">

    <!-- Header -->
    <div class="device-section__eyebrow-wrap">
      <h2 class="device-section__title">Built for <span>Every Screen</span></h2>
      <p class="device-section__subtitle">
        This project was crafted as a fully responsive business website, ensuring a clear browsing experience
        across desktop, tablet, and mobile views.
      </p>
    </div>

    <!-- Feature icons -->
    <div class="row g-4 justify-content-center mb-5 pb-md-3">
      <div class="col-12 col-md-4">
        <div class="feature-item">
          <div class="feature-item__icon"><i class="fa-solid fa-display"></i></div>
          <div class="feature-item__text">
            <p class="feature-item__title">Responsive Layout</p>
            <p class="feature-item__desc">Consistent presentation across all devices</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="feature-item">
          <div class="feature-item__icon"><i class="fa-solid fa-hand-pointer"></i></div>
          <div class="feature-item__text">
            <p class="feature-item__title">Easy Navigation</p>
            <p class="feature-item__desc">Clear browsing flow for touch and click users</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="feature-item">
          <div class="feature-item__icon"><i class="fa-solid fa-gauge-high"></i></div>
          <div class="feature-item__text">
            <p class="feature-item__title">Optimized Experience</p>
            <p class="feature-item__desc">Structured content for smooth page performance</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Showcase panel -->
    <div class="showcase-panel">
      <div class="showcase-devices">

        <!-- Laptop -->
        <div class="device-frame laptop">
          <div class="laptop__screen">
            <div class="laptop__screen-inner">
              <div class="mock-screen">
                <div class="mock-navbar">
                  <div class="mock-logo"><i class="fa-solid fa-sun"></i><span>Frizzcool</span></div>
                  <div class="mock-nav-links">
                    <span>Home</span><span>About</span><span>Portfolio</span><span>Features</span><span>Contact</span>
                    <span class="mock-cta">View Project</span>
                  </div>
                </div>
                <div class="mock-body">
                  <div class="mock-copy">
                    <h3>A modern <em>industrial brand website</em> built for impact</h3>
                    <p>This portfolio highlights how we translated the Frizzcool business profile into a clean, product-focused, and conversion-ready web experience.</p>
                    <div class="mock-btns">
                      <span class="btn-solid">See Details</span>
                      <span class="btn-outline">Our Work</span>
                    </div>
                  </div>
                  <div class="mock-image"><img src="./assets/images/ac-unit.png" alt="Frizzcool website showcase visual"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="laptop__base"></div>
          <div class="device-frame__label">
            <div class="dot"></div>
            <strong>Desktop</strong>
            <small>Detailed viewing for full-site exploration</small>
          </div>
        </div>

        <!-- Tablet -->
        <div class="device-frame tablet">
          <div class="tablet__screen">
            <div class="tablet__screen-inner">
              <div class="mock-screen">
                <div class="mock-navbar">
                  <div class="mock-logo"><i class="fa-solid fa-sun"></i></div>
                  <div class="mock-nav-links">
                    <span>Home</span><span>About</span><span>Portfolio</span>
                    <span class="mock-cta">Project</span>
                  </div>
                </div>
                <div class="mock-body">
                  <div class="mock-copy">
                    <h3>A modern <em>industrial brand website</em> built for impact</h3>
                    <p>A responsive tablet view keeps the Frizzcool website easy to browse while preserving strong visual hierarchy and product visibility.</p>
                    <div class="mock-btns">
                      <span class="btn-solid">See Details</span>
                      <span class="btn-outline">Our Work</span>
                    </div>
                  </div>
                  <div class="mock-image"><img src="./assets/images/ac-unit.png" alt="Frizzcool tablet website preview"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="device-frame__label">
            <div class="dot"></div>
            <strong>Tablet</strong>
            <small>Balanced browsing for mid-size screens</small>
          </div>
        </div>

        <!-- Phone -->
        <div class="device-frame phone">
          <div class="phone__screen">
            <div class="phone__screen-inner">
              <div class="mock-screen">
                <div class="mock-navbar">
                  <div class="mock-logo"><i class="fa-solid fa-sun"></i></div>
                  <div class="mock-nav-toggle"><i class="fa-solid fa-bars"></i></div>
                </div>
                <div class="mock-body">
                  <div class="mock-image"><img src="./assets/images/ac-unit.png" alt="Flameproof air conditioning unit"></div>
                  <div class="mock-copy">
                    <h3>A modern <em>industrial brand website</em> built for impact</h3>
                    <p>The mobile version was planned for quick navigation, concise messaging, and smooth access to key business information.</p>
                    <div class="mock-btns">
                      <span class="btn-solid">See Details</span>
                      <span class="btn-outline">Our Work</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="device-frame__label">
            <div class="dot"></div>
            <strong>Mobile</strong>
            <small>Compact experience for on-the-go visitors</small>
          </div>
        </div>

      </div>

      <!-- Timeline labels row (desktop only, connects all three) -->
      <div class="timeline-row">
        <div class="device-frame__label">
          <div class="dot"></div>
          <strong>Desktop</strong>
          <small>Detailed viewing for full-site exploration</small>
        </div>
        <div class="device-frame__label">
          <div class="dot"></div>
          <strong>Tablet</strong>
          <small>Balanced browsing for mid-size screens</small>
        </div>
        <div class="device-frame__label">
          <div class="dot"></div>
          <strong>Mobile</strong>
          <small>Compact experience for on-the-go visitors</small>
        </div>
      </div>

    </div>

  </div>
</section>
<section class="products-section">
  <div class="container">

    <!-- Header -->
    <div class="products-section__header">
      <div class="products-section__accent"></div>
      <h2 class="products-section__title">Project Highlights</h2>
      <p class="products-section__subtitle">
        This portfolio section presents the main content blocks we created for the Frizzcool website,
        focusing on business communication, product presentation, and user-first page structure.
      </p>
    </div>

    <!-- Products grid -->
    <div class="row g-4">

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/flame-proof-split-ac.png" alt="Flame Proof Split AC">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-snowflake"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Hero Section Design</h3>
              <p class="product-card__desc">A bold landing area built to introduce the brand with immediate visual impact.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/flame-proof-ductable-ac.png" alt="Flame Proof Ductable AC">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-wind"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Product Showcase Layout</h3>
              <p class="product-card__desc">Structured product presentation designed for clarity, browsing, and engagement.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/flame-proof-shelter-hvac.png" alt="Flame Proof Shelter HVAC">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Brand Storytelling</h3>
              <p class="product-card__desc">Company messaging arranged to communicate credibility, trust, and expertise.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/flame-proof-chillers.png" alt="Flame Proof Chillers">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Responsive Adaptation</h3>
              <p class="product-card__desc">Layouts carefully adjusted to maintain consistency across desktop, tablet, and mobile.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/flame-proof-coldrooms.png" alt="Flame Proof Coldrooms">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-temperature-low"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Visual Content Balance</h3>
              <p class="product-card__desc">Imagery, spacing, and typography aligned to keep the website professional and readable.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-card">
          <div class="product-card__media">
            <img src="./assets/images/industrial-chillers.png" alt="Industrial Chillers">
          </div>
          <div class="product-card__body">
            <div class="product-card__icon"><i class="fa-solid fa-gear"></i></div>
            <div class="product-card__content">
              <h3 class="product-card__title">Conversion-Focused Flow</h3>
              <p class="product-card__desc">Calls to action and information flow were arranged to guide visitors toward inquiry.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<section class="promo-banner-section">
  <div class="container">
    <picture class="promo-banner-section__media">
      <source media="(max-width: 767.98px)" srcset="./assets/images/22.png">
      <img src="./assets/images/23.png" alt="Frizzcool website portfolio banner">
    </picture>
  </div>
</section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
