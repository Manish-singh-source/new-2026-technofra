<?php
$pageTitle = 'Aeritx | Technofra';
include __DIR__ . '/header.php';
?>

<style>
  * {
    box-sizing: border-box;
  }

  img {
    max-width: 100%;
    display: block;
  }

  .aeritx-page {
    position: relative;
    overflow: hidden;
    padding: clamp(118px, 10vw, 148px) 0 42px;
    padding: 10vw 0 0 0;
    background:
      radial-gradient(circle at 8% 14%, rgba(95, 162, 255, 0.22), transparent 28%),
      radial-gradient(circle at 82% 12%, rgba(161, 207, 255, 0.2), transparent 30%),
      radial-gradient(circle at 50% 100%, rgba(133, 185, 255, 0.18), transparent 32%),
      linear-gradient(180deg, #d8ecff 0%, #eaf5ff 46%, #d8ebff 100%);
  }

  .aeritx-page > section {
    /* width: min(100% - 32px, 1320px); */
    /* margin-inline: auto; */
    width: 100%;
  }

  .aeritx-page::before,
  .aeritx-page::after {
    content: "";
    position: absolute;
    border-radius: 999px;
    border: 1px solid rgba(102, 168, 255, 0.14);
    pointer-events: none;
  }

  .aeritx-page::before {
    width: 900px;
    height: 900px;
    top: 40px;
    right: -260px;
  }

  .aeritx-page::after {
    width: 760px;
    height: 760px;
    bottom: -320px;
    left: 22%;
  }

  .aeritx-hero {
    position: relative;
    z-index: 1;
    width: 100%;
    margin: 20px 0 0;
    padding: clamp(28px, 4vw, 52px);
    /* border-radius: 32px; */
    background: url("assets/images/portfolios/aeritx1.png") center center / cover no-repeat;
    box-shadow: 0 26px 60px rgba(24, 64, 126, 0.12);
    overflow: hidden;
    min-height: clamp(460px, 54vw, 640px);
  }

  .aeritx-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(233, 244, 255, 0.96) 0%, rgba(233, 244, 255, 0.9) 34%, rgba(233, 244, 255, 0.42) 62%, rgba(233, 244, 255, 0.08) 100%);
    pointer-events: none;
  }

  .aeritx-hero__topbar {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    margin-bottom: 36px;
  }

  .aeritx-hero__label {
    display: inline-flex;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
  }

  .aeritx-hero__pill {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 104px;
    min-height: 42px;
    padding: 10px 20px;
    border-radius: 999px;
    background: linear-gradient(135deg, #0d47c8, #2f77ff);
    color: #fff;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: 0.04em;
  }

  .aeritx-hero__overview {
    color: #1655cf;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .aeritx-hero__brands {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-wrap: wrap;
    color: #101828;
    font-size: 18px;
    font-weight: 600;
  }

  .aeritx-hero__brand {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
  }

  .aeritx-hero__brand img {
    width: clamp(140px, 18vw, 220px);
    height: auto;
  }

  .aeritx-hero__brand-logo {
    font-size: 22px;
    font-weight: 800;
    color: #1655cf;
  }

  .aeritx-hero__divider {
    width: 1px;
    height: 30px;
    background: rgba(16, 24, 40, 0.14);
  }

  .aeritx-hero__client-mark {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: #06080f;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.14);
  }

  .aeritx-hero__body {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 1.1fr);
    gap: clamp(30px, 4vw, 54px);
    align-items: center;
  }

  .aeritx-hero__content {
    max-width: 620px;
  }

  .aeritx-hero__eyebrow {
    margin: 0 0 20px;
    color: #1f67eb;
    font-size: clamp(16px, 1.4vw, 21px);
    font-weight: 700;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    word-spacing: 0.2em;
  }

  .aeritx-hero__title {
    margin: 0;
    color: #10213f;
    font-size: clamp(38px, 6vw, 70px);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .aeritx-hero__title-accent {
    position: relative;
    display: inline-block;
    margin-top: 10px;
    color: #2869e6;
  }

  /* .aeritx-hero__title-accent::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -18px;
    width: 82%;
    height: 15px;
    background:
      url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='220' height='16' viewBox='0 0 220 16' fill='none'%3E%3Cpath d='M2 12.4C41 5.9 79.4 6.3 117.9 11.7C138.5 14.6 159.2 9.7 179.3 5.6C191.8 3 204.4 1.5 218 2.1' stroke='%232869E6' stroke-width='4' stroke-linecap='round'/%3E%3C/svg%3E")
      left center / contain no-repeat;
  } */

  .aeritx-hero__description {
    max-width: 560px;
    margin: 46px 0 0;
    color: #45556f;
    font-size: clamp(18px, 1.45vw, 22px);
    line-height: 1.6;
  }

  .aeritx-hero__visual {
    position: relative;
    min-height: 600px;
    padding-right: clamp(70px, 10vw, 160px);
  }

  .aeritx-laptop {
    position: relative;
    margin: 0 auto;
    width: min(100%, 900px);
  }

  .aeritx-laptop__screen {
    position: relative;
    padding: 18px 18px 16px;
    border-radius: 28px 28px 16px 16px;
    background: linear-gradient(180deg, #161616, #0a0a0a);
    box-shadow:
      0 12px 24px rgba(8, 28, 63, 0.16),
      0 35px 65px rgba(60, 110, 190, 0.18);
  }

  .aeritx-laptop__screen::before {
    content: "";
    position: absolute;
    top: 8px;
    left: 50%;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.26);
    transform: translateX(-50%);
  }

  .aeritx-laptop__screen img {
    width: 100%;
    border-radius: 16px 16px 10px 10px;
    background: #fff;
  }

  .aeritx-laptop__base {
    width: 112%;
    height: 24px;
    margin: -2px auto 0;
    transform: translateX(-5.5%);
    border-radius: 0 0 28px 28px;
    background: linear-gradient(180deg, #d6d6d6 0%, #8f8f8f 36%, #c8c8c8 100%);
    position: relative;
    box-shadow: 0 14px 24px rgba(42, 72, 116, 0.16);
  }

  .aeritx-laptop__base::after {
    content: "";
    position: absolute;
    left: 50%;
    top: 2px;
    width: 23%;
    height: 8px;
    border-radius: 0 0 18px 18px;
    background: rgba(90, 90, 90, 0.34);
    transform: translateX(-50%);
  }

  .aeritx-phone {
    position: absolute;
    right: 0;
    bottom: 18px;
    width: clamp(180px, 19vw, 232px);
    padding: 14px 10px;
    border-radius: 34px;
    background: linear-gradient(180deg, #181b23, #0a0d13);
    box-shadow: 0 24px 44px rgba(28, 57, 103, 0.22);
  }

  .aeritx-phone::before {
    content: "";
    position: absolute;
    top: 10px;
    left: 50%;
    width: 78px;
    height: 20px;
    border-radius: 999px;
    background: #07090f;
    transform: translateX(-50%);
  }

  .aeritx-phone__screen {
    padding: 62px 14px 18px;
    border-radius: 26px;
    background:
      linear-gradient(160deg, rgba(43, 107, 235, 0.1), rgba(130, 170, 255, 0.02)),
      #fff;
    overflow: hidden;
  }

  .aeritx-phone__top {
    margin-bottom: 16px;
    color: #10213f;
    line-height: 1.05;
    font-weight: 700;
    font-size: clamp(18px, 1.5vw, 24px);
  }

  .aeritx-phone__top span {
    display: block;
    color: #2b6beb;
  }

  .aeritx-phone__logo {
    margin-bottom: 18px;
    color: #0f1f3f;
    font-size: clamp(18px, 1.45vw, 24px);
    font-weight: 800;
    text-align: center;
  }

  .aeritx-phone__card {
    padding: 12px;
    border: 1px solid rgba(41, 104, 229, 0.14);
    border-radius: 14px;
    background: linear-gradient(180deg, #f8fbff 0%, #eef5ff 100%);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8);
  }

  .aeritx-phone__card strong {
    display: block;
    margin-bottom: 9px;
    color: #1e2d49;
    font-size: 14px;
  }

  .aeritx-phone__field {
    width: 100%;
    height: 38px;
    margin-bottom: 12px;
    border-radius: 9px;
    border: 1px solid rgba(22, 85, 207, 0.22);
    background: #fff;
  }

  .aeritx-phone__button {
    width: 100%;
    min-height: 38px;
    border: 0;
    border-radius: 999px;
    background: linear-gradient(135deg, #1a54d7, #2f77ff);
    color: #fff;
    font-size: 13px;
    font-weight: 700;
  }

  .aeritx-phone__pad {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-top: 14px;
  }

  .aeritx-phone__pad span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 28px;
    border-radius: 999px;
    background: rgba(16, 33, 63, 0.06);
    color: #2d3b56;
    font-size: 12px;
    font-weight: 600;
  }

  .aeritx-hero__stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 0;
    /* margin: 32px auto 0; */
    padding: 22px;
    /* border-radius: 28px; */
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.8), rgba(248, 251, 255, 0.92));
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.6);
  }

  .aeritx-stat {
    display: flex;
    align-items: center;
    gap: 22px;
    padding: 12px 26px;
  }

  .aeritx-stat + .aeritx-stat {
    border-left: 1px solid rgba(16, 24, 40, 0.1);
  }

  .aeritx-stat__icon {
    width: 86px;
    height: 86px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
    flex: 0 0 auto;
    border: 2px solid currentColor;
    background: rgba(255, 255, 255, 0.76);
  }

  .aeritx-stat--blue {
    color: #2b6beb;
  }

  .aeritx-stat--violet {
    color: #8540f5;
  }

  .aeritx-stat--teal {
    color: #11a59a;
  }

  .aeritx-stat__label {
    display: block;
    margin-bottom: 6px;
    color: #1d2b47;
    font-size: 16px;
    font-weight: 600;
  }

  .aeritx-stat__value {
    display: block;
    color: currentColor;
    font-size: clamp(38px, 3.6vw, 54px);
    line-height: 0.95;
    font-weight: 800;
  }

  .aeritx-stat__text {
    display: block;
    margin-top: 8px;
    color: #45556f;
    font-size: 16px;
    line-height: 1.4;
  }

  .aeritx-showcase {
    /* padding: 34px 0 0; */
  }

  .aeritx-showcase__section {
    margin-top: 28px;
    padding: clamp(24px, 4vw, 38px);
    /* border-radius: 32px; */
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.78), rgba(244, 249, 255, 0.95));
    box-shadow: 0 22px 48px rgba(46, 91, 167, 0.1);
  }

  .aeritx-showcase__section:first-child {
    margin-top: 0;
  }

  .aeritx-showcase__grid {
    display: grid;
    grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
    gap: clamp(24px, 4vw, 42px);
    align-items: center;
  }

  .aeritx-showcase__section--reverse .aeritx-showcase__grid {
    grid-template-columns: minmax(0, 1.08fr) minmax(0, 0.92fr);
  }

  .aeritx-showcase__eyebrow {
    display: inline-block;
    margin-bottom: 16px;
    color: #1f67eb;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .aeritx-showcase__title {
    margin: 0 0 16px;
    color: #10213f;
    font-size: clamp(32px, 4vw, 54px);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .aeritx-showcase__title span {
    color: #2869e6;
  }

  .aeritx-showcase__text {
    margin: 0;
    max-width: 500px;
    color: #51627e;
    font-size: 17px;
    line-height: 1.8;
  }

  .aeritx-showcase__list {
    display: grid;
    gap: 12px;
    margin: 24px 0 0;
    padding: 0;
    list-style: none;
  }

  .aeritx-showcase__list li {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #1d2b47;
    font-size: 15px;
    font-weight: 600;
  }

  .aeritx-showcase__list i {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(43, 107, 235, 0.12);
    color: #2869e6;
    font-size: 14px;
    flex: 0 0 auto;
  }

  .aeritx-showcase__visual {
    position: relative;
    min-height: 420px;
  }

  .aeritx-showcase__panel,
  .aeritx-showcase__panel-small {
    position: absolute;
    overflow: hidden;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 24px 50px rgba(18, 42, 89, 0.14);
  }

  .aeritx-showcase__panel {
    top: 0;
    right: 0;
    width: min(100%, 560px);
    padding: 16px;
  }

  .aeritx-showcase__panel-small {
    left: 0;
    bottom: 0;
    width: min(62%, 320px);
    padding: 12px;
  }

  .aeritx-showcase__section--reverse .aeritx-showcase__panel {
    left: 0;
    right: auto;
  }

  .aeritx-showcase__section--reverse .aeritx-showcase__panel-small {
    right: 0;
    left: auto;
  }

  .aeritx-showcase__panel img,
  .aeritx-showcase__panel-small img {
    width: 100%;
    border-radius: 18px;
  }

  .aeritx-showcase__badge {
    position: absolute;
    top: 24px;
    left: 24px;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.92);
    color: #10213f;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 0 16px 30px rgba(28, 57, 103, 0.12);
  }

  .aeritx-showcase__badge i {
    color: #2869e6;
  }

  .aeritx-solution-gallery {
    padding: 28px 0 0;
  }

  .aeritx-solution-gallery__section {
    padding: clamp(24px, 4vw, 38px);
    border-radius: 32px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.82), rgba(244, 249, 255, 0.96));
    box-shadow: 0 22px 48px rgba(46, 91, 167, 0.1);
  }

  .aeritx-solution-gallery__header {
    display: grid;
    grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
    gap: 28px;
    align-items: end;
    margin-bottom: 28px;
  }

  .aeritx-solution-gallery__eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: #1f67eb;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .aeritx-solution-gallery__title {
    margin: 0;
    color: #10213f;
    font-size: clamp(30px, 4vw, 52px);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .aeritx-solution-gallery__title span {
    color: #2869e6;
  }

  .aeritx-solution-gallery__text {
    margin: 0;
    max-width: 620px;
    color: #51627e;
    font-size: 17px;
    line-height: 1.8;
  }

  .aeritx-solution-gallery__grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr;
    grid-auto-rows: minmax(190px, auto);
    gap: 18px;
  }

  .aeritx-solution-gallery__card {
    position: relative;
    overflow: hidden;
    border-radius: 26px;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 18px 38px rgba(18, 42, 89, 0.12);
    min-height: 210px;
  }

  .aeritx-solution-gallery__card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .aeritx-solution-gallery__card--large {
    grid-row: span 2;
    min-height: 438px;
  }

  .aeritx-solution-gallery__info {
    position: absolute;
    left: 18px;
    right: 18px;
    bottom: 18px;
    padding: 14px 16px;
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(8px);
    box-shadow: 0 12px 24px rgba(18, 42, 89, 0.1);
  }

  .aeritx-solution-gallery__label {
    display: block;
    color: #10213f;
    font-size: 16px;
    font-weight: 700;
  }

  .aeritx-solution-gallery__meta {
    display: block;
    margin-top: 4px;
    color: #62738d;
    font-size: 13px;
    line-height: 1.5;
  }

  .aeritx-solution-gallery__pin {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.92);
    color: #2869e6;
    font-size: 13px;
    box-shadow: 0 10px 18px rgba(18, 42, 89, 0.12);
  }

  .aeritx-device-preview {
    /* padding: 28px 0 0; */
  }

  .aeritx-logo-design {
    padding: 28px 0 0;
  }

  .aeritx-logo-design__card {
    position: relative;
    display: grid;
    grid-template-columns: minmax(0, 0.88fr) minmax(0, 1.12fr);
    gap: 36px;
    align-items: center;
    padding: clamp(28px, 4vw, 46px);
    border-radius: 34px;
    background:
      radial-gradient(circle at 18% 18%, rgba(74, 149, 255, 0.2), transparent 22%),
      radial-gradient(circle at 84% 80%, rgba(23, 87, 214, 0.16), transparent 26%),
      linear-gradient(135deg, #071224 0%, #0d1d38 52%, #143564 100%);
    box-shadow: 0 26px 70px rgba(10, 23, 49, 0.22);
    overflow: hidden;
  }

  .aeritx-logo-design__content {
    max-width: 560px;
    position: relative;
    z-index: 1;
  }

  .aeritx-logo-design__eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: #9bc3ff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .aeritx-logo-design__title {
    margin: 0 0 16px;
    color: #f8fbff;
    font-size: clamp(30px, 4vw, 52px);
    line-height: 1.04;
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .aeritx-logo-design__title span {
    color: #6db0ff;
  }

  .aeritx-logo-design__text {
    margin: 0 0 24px;
    color: rgba(226, 236, 252, 0.82);
    font-size: 17px;
    line-height: 1.8;
  }

  .aeritx-logo-design__points {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .aeritx-logo-design__points li {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.08);
    color: #f4f8ff;
    font-size: 14px;
    font-weight: 600;
    backdrop-filter: blur(10px);
  }

  .aeritx-logo-design__points i {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(109, 176, 255, 0.18);
    color: #8dc0ff;
    font-size: 11px;
    flex: 0 0 auto;
  }

  .aeritx-logo-design__visual {
    position: relative;
    min-height: 520px;
    z-index: 1;
  }

  .aeritx-logo-design__visual::before {
    content: "";
    position: absolute;
    inset: 40px 28px 40px 68px;
    border-radius: 36px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.02));
    box-shadow: inset 0 0 0 1px rgba(151, 193, 255, 0.12);
  }

  .aeritx-logo-design__badge {
    position: relative;
    width: min(100%, 380px);
    aspect-ratio: 1 / 1;
    margin: 58px auto 0;
    border-radius: 40px;
    display: grid;
    place-items: center;
    background:
      radial-gradient(circle at 30% 25%, rgba(102, 168, 255, 0.28), transparent 30%),
      radial-gradient(circle at 75% 72%, rgba(40, 105, 230, 0.2), transparent 28%),
      linear-gradient(180deg, #fdfefe 0%, #edf5ff 100%);
    box-shadow:
      inset 0 0 0 1px rgba(40, 105, 230, 0.08),
      0 24px 48px rgba(2, 11, 27, 0.28);
    overflow: hidden;
  }

  .aeritx-logo-design__badge::before,
  .aeritx-logo-design__badge::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(40, 105, 230, 0.12);
    pointer-events: none;
  }

  .aeritx-logo-design__badge::before {
    inset: 30px;
  }

  .aeritx-logo-design__badge::after {
    inset: 62px;
  }

  .aeritx-logo-design__logo-shell {
    position: relative;
    z-index: 1;
    width: min(72%, 236px);
    padding: 26px;
    border-radius: 30px;
    background: rgba(255, 255, 255, 0.88);
    box-shadow:
      0 18px 35px rgba(18, 42, 89, 0.14),
      inset 0 0 0 1px rgba(40, 105, 230, 0.08);
    backdrop-filter: blur(10px);
  }

  .aeritx-logo-design__logo-shell img {
    width: 100%;
    height: auto;
  }

  .aeritx-logo-design__mini-card,
  .aeritx-logo-design__stamp {
    position: absolute;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.08);
    box-shadow:
      inset 0 0 0 1px rgba(151, 193, 255, 0.12),
      0 20px 36px rgba(2, 11, 27, 0.2);
    backdrop-filter: blur(14px);
  }

  .aeritx-logo-design__mini-card {
    top: 26px;
    right: 8px;
    width: 185px;
    padding: 18px 18px 16px;
  }

  .aeritx-logo-design__mini-label {
    display: block;
    margin-bottom: 10px;
    color: #8fbfff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .aeritx-logo-design__mini-card strong {
    display: block;
    color: #f6faff;
    font-size: 18px;
    line-height: 1.35;
    font-weight: 700;
  }

  .aeritx-logo-design__stamp {
    left: 0;
    bottom: 34px;
    width: 205px;
    padding: 18px;
  }

  .aeritx-logo-design__stamp-mark {
    width: 48px;
    height: 48px;
    margin-bottom: 12px;
    border-radius: 16px;
    display: grid;
    place-items: center;
    background: linear-gradient(135deg, rgba(109, 176, 255, 0.26), rgba(255, 255, 255, 0.18));
    color: #f6faff;
    font-size: 20px;
    font-weight: 800;
  }

  .aeritx-logo-design__stamp strong,
  .aeritx-logo-design__stamp span {
    display: block;
  }

  .aeritx-logo-design__stamp strong {
    color: #f6faff;
    font-size: 16px;
    font-weight: 700;
  }

  .aeritx-logo-design__stamp span {
    margin-top: 4px;
    color: rgba(226, 236, 252, 0.76);
    font-size: 13px;
    line-height: 1.5;
  }

  .aeritx-device-preview__frame {
    overflow: hidden;
    /* border-radius: 32px; */
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.94), rgba(241, 247, 255, 0.98));
    box-shadow: 0 24px 52px rgba(18, 42, 89, 0.12);
  }

  .aeritx-device-preview__frame img {
    display: block;
    width: 100%;
    height: auto;
  }

  .aeritx-app-download {
    /* padding: 28px 0 0; */
  }

  .aeritx-app-download__card {
    position: relative;
    display: grid;
    grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
    gap: clamp(28px, 4vw, 56px);
    align-items: center;
    padding: clamp(28px, 4vw, 48px);
    overflow: hidden;
    background:
      radial-gradient(circle at top left, rgba(93, 166, 255, 0.2), transparent 24%),
      radial-gradient(circle at bottom right, rgba(39, 103, 237, 0.18), transparent 26%),
      linear-gradient(135deg, #08172c 0%, #102a4d 54%, #1d4f88 100%);
    box-shadow: 0 28px 64px rgba(16, 42, 89, 0.18);
    /* border-radius: 32px; */
  }

  .aeritx-app-download__card::before {
    content: "";
    position: absolute;
    inset: auto auto -120px -90px;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
    filter: blur(6px);
  }

  .aeritx-app-download__content,
  .aeritx-app-download__visual {
    position: relative;
    z-index: 1;
  }

  .aeritx-app-download__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    color: #9ec6ff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .aeritx-app-download__eyebrow::before {
    content: "";
    width: 38px;
    height: 1px;
    background: currentColor;
  }

  .aeritx-app-download__title {
    margin: 0;
    color: #f8fbff;
    font-size: clamp(34px, 4.3vw, 58px);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .aeritx-app-download__title span {
    color: #79b5ff;
  }

  .aeritx-app-download__text {
    max-width: 560px;
    margin: 22px 0 0;
    color: rgba(229, 237, 250, 0.82);
    font-size: 17px;
    line-height: 1.85;
  }

  .aeritx-app-download__list {
    display: grid;
    gap: 12px;
    margin: 28px 0 0;
    padding: 0;
    list-style: none;
  }

  .aeritx-app-download__list li {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #f6faff;
    font-size: 15px;
    font-weight: 600;
  }

  .aeritx-app-download__list i {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.12);
    color: #96c2ff;
    font-size: 13px;
    flex: 0 0 auto;
  }

  .aeritx-app-download__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 30px;
  }

  .aeritx-app-download__store {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    min-width: 220px;
    padding: 14px 18px;
    border: 1px solid rgba(255, 255, 255, 0.16);
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    text-decoration: none;
    transition: transform 0.2s ease, background 0.2s ease, border-color 0.2s ease;
  }

  .aeritx-app-download__store:hover {
    transform: translateY(-2px);
    background: rgba(255, 255, 255, 0.14);
    border-color: rgba(255, 255, 255, 0.26);
  }

  .aeritx-app-download__store i {
    font-size: 28px;
    color: #a8d0ff;
  }

  .aeritx-app-download__store small,
  .aeritx-app-download__store strong {
    display: block;
    line-height: 1.25;
  }

  .aeritx-app-download__store small {
    color: rgba(223, 234, 249, 0.72);
    font-size: 12px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .aeritx-app-download__store strong {
    margin-top: 4px;
    color: #fff;
    font-size: 19px;
    font-weight: 700;
  }

  .aeritx-app-download__visual {
    display: grid;
    gap: 18px;
  }

  .aeritx-app-download__note {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 14px 18px;
    background: rgba(255, 255, 255, 0.12);
    color: #f8fbff;
  }

  .aeritx-app-download__note span {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: #9ec6ff;
  }

  .aeritx-app-download__note strong {
    font-size: 17px;
    font-weight: 700;
  }

  .aeritx-app-download__frame {
    overflow: hidden;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.96), rgba(238, 246, 255, 0.92));
    box-shadow: 0 22px 44px rgba(6, 19, 43, 0.18);
  }

  .aeritx-app-download__frame img {
    width: 100%;
    height: auto;
    display: block;
  }

  @media (max-width: 1919.98px) {
    /* below extra large */
  }

  @media (max-width: 1599.98px) {
    /* below large desktop */
    .aeritx-page > section {
      /* width: min(100% - 32px, 1240px); */
      width: 100%;
    }

    .aeritx-hero {
      min-height: clamp(430px, 48vw, 590px);
    }

    .aeritx-showcase__panel {
      width: min(100%, 650px);
    }

    .aeritx-showcase__panel-small {
      width: min(58%, 250px);
    }
  }

  @media (max-width: 1399.98px) {
    /* below desktop */
    .aeritx-page {
      padding-top: clamp(110px, 10vw, 132px);
    }

    .aeritx-page > section {
      /* width: min(100% - 30px, 1140px); */
    }

    .aeritx-hero {
      min-height: clamp(400px, 45vw, 540px);
      padding: clamp(26px, 3.4vw, 44px);
    }

    .aeritx-hero__body {
      grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    }

    .aeritx-hero__description {
      margin-top: 34px;
    }

    .aeritx-stat {
      gap: 18px;
      padding-inline: 18px;
    }

    .aeritx-stat__icon {
      width: 74px;
      height: 74px;
      font-size: 29px;
    }

    .aeritx-showcase__visual {
      min-height: 380px;
    }

    .aeritx-app-download__card {
      grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
    }
  }

  @media (max-width: 1199.98px) {
    /* below laptop */
    .aeritx-page > section {
      /* width: min(100% - 28px, 1180px); */
    }

    .aeritx-hero {
      min-height: auto;
      background-position: 66% center;
    }

    .aeritx-hero::before {
      background: linear-gradient(90deg, rgba(233, 244, 255, 0.96) 0%, rgba(233, 244, 255, 0.92) 44%, rgba(233, 244, 255, 0.5) 72%, rgba(233, 244, 255, 0.14) 100%);
    }

    .aeritx-hero__body {
      grid-template-columns: 1fr;
    }

    .aeritx-hero__content {
      max-width: 720px;
    }

    .aeritx-hero__description {
      max-width: 100%;
    }

    .aeritx-hero__visual {
      min-height: auto;
      padding-right: 90px;
    }

    .aeritx-hero__stats {
      grid-template-columns: repeat(3, minmax(0, 1fr));
      padding: 18px;
    }

    .aeritx-stat {
      flex-direction: column;
      align-items: flex-start;
      gap: 14px;
      padding: 14px 18px;
    }

    .aeritx-stat + .aeritx-stat {
      border-left: 1px solid rgba(16, 24, 40, 0.1);
      border-top: 0;
    }

    .aeritx-showcase__grid,
    .aeritx-showcase__section--reverse .aeritx-showcase__grid {
      grid-template-columns: 1fr;
    }

    .aeritx-solution-gallery__header,
    .aeritx-solution-gallery__grid {
      grid-template-columns: 1fr;
    }

    .aeritx-solution-gallery__card--large {
      grid-row: span 1;
      min-height: 320px;
    }

    .aeritx-logo-design__card {
      grid-template-columns: 1fr;
    }

    .aeritx-logo-design__visual {
      min-height: 500px;
    }

    .aeritx-device-preview__frame {
      /* border-radius: 26px; */
    }

    .aeritx-app-download__card {
      grid-template-columns: 1fr;
    }

    .aeritx-app-download__content {
      max-width: 760px;
    }

    .aeritx-app-download__card {
          padding: 20px;
    }
  }

  @media (max-width: 991.98px) {
    /* below tablet landscape */
    .aeritx-page {
      /* padding: 104px 0 30px; */
    }

    .aeritx-page > section {
      /* width: min(100% - 24px, 100%); */
    }

    .aeritx-hero {
      min-height: auto;
      padding: 24px 20px 28px;
      /* border-radius: 24px; */
      background-position: 72% center;
    }

    .aeritx-hero::before {
      background: linear-gradient(180deg, rgba(233, 244, 255, 0.96) 0%, rgba(233, 244, 255, 0.92) 42%, rgba(233, 244, 255, 0.68) 100%);
    }

    .aeritx-hero__topbar {
      align-items: flex-start;
      flex-direction: column;
      margin-bottom: 28px;
    }

    .aeritx-hero__brands {
      gap: 16px;
      font-size: 16px;
    }

    .aeritx-hero__brand img {
      width: clamp(120px, 26vw, 190px);
    }

    .aeritx-hero__divider {
      display: none;
    }

    .aeritx-hero__eyebrow {
      letter-spacing: 0.14em;
    }

    .aeritx-hero__description {
      margin-top: 24px;
      font-size: 17px;
    }

    .aeritx-hero__visual {
      padding-right: 56px;
    }

    .aeritx-phone {
      width: 175px;
      bottom: -4px;
    }

    .aeritx-stat {
      flex-direction: row;
      align-items: center;
      padding: 18px 8px;
      gap: 18px;
    }

    .aeritx-hero__stats {
      grid-template-columns: 1fr;
    }

    .aeritx-stat + .aeritx-stat {
      border-left: 0;
      border-top: 1px solid rgba(16, 24, 40, 0.1);
    }

    .aeritx-stat__icon {
      width: 74px;
      height: 74px;
      font-size: 28px;
    }

    .aeritx-showcase__visual {
      min-height: 360px;
    }

    .aeritx-showcase__section,
    .aeritx-solution-gallery__section,
    .aeritx-app-download__card {
      /* border-radius: 24px; */
    }

    .aeritx-solution-gallery__card {
      min-height: 240px;
    }

    .aeritx-app-download__actions {
      gap: 12px;
    }

    .aeritx-app-download__store {
      min-width: 208px;
    }
  }

  @media (max-width: 767.98px) {
    /* below tablet portrait */
    .aeritx-page {
      padding-top: 96px;
    }

    .aeritx-page > section {
      /* width: min(100% - 20px, 100%); */
    }

    .aeritx-page::before,
    .aeritx-page::after {
      display: none;
    }

    .aeritx-hero {
      margin-top: 12px;
      padding: 22px 16px 24px;
      /* border-radius: 20px; */
      background-position: 68% center;
      background: none;
    }

    .aeritx-hero__pill {
      min-width: 92px;
      min-height: 38px;
      font-size: 15px;
    }

    .aeritx-hero__overview {
      font-size: 15px;
    }

    .aeritx-hero__eyebrow {
      margin-bottom: 14px;
      font-size: 13px;
      letter-spacing: 0.12em;
    }

    .aeritx-hero__title {
      font-size: clamp(32px, 9vw, 44px);
      letter-spacing: -0.025em;
    }

    .aeritx-hero__title-accent {
      margin-top: 6px;
    }

    .aeritx-hero__description {
      margin-top: 18px;
      font-size: 16px;
      line-height: 1.7;
    }

    .aeritx-hero__visual {
      padding-right: 0;
      padding-bottom: 170px;
    }

    .aeritx-phone {
      right: 50%;
      bottom: 0;
      transform: translateX(50%);
    }

    .aeritx-stat {
      flex-direction: column;
      align-items: flex-start;
      gap: 16px;
      padding-inline: 4px;
    }

    .aeritx-hero__stats {
      padding: 18px 16px;
      /* border-radius: 20px; */
    }

    .aeritx-showcase__section {
      padding: 22px 18px;
      /* border-radius: 20px; */
    }

    .aeritx-showcase__title,
    .aeritx-solution-gallery__title,
    .aeritx-logo-design__title,
    .aeritx-app-download__title {
      line-height: 1.08;
      letter-spacing: -0.025em;
    }

    .aeritx-showcase__visual {
      min-height: auto;
      display: grid;
      gap: 14px;
    }

    .aeritx-showcase__panel {
      position: relative;
      top: auto;
      right: auto;
      width: 100%;
      padding: 12px;
    }

    .aeritx-showcase__panel-small {
      position: relative;
      left: auto;
      bottom: auto;
      width: min(72%, 260px);
      padding: 10px;
    }

    .aeritx-showcase__badge {
      position: relative;
      top: auto;
      left: auto;
      padding: 8px 12px;
      width: fit-content;
    }

    .aeritx-solution-gallery__section {
      padding: 22px 18px;
      border-radius: 20px;
    }

    .aeritx-solution-gallery__info {
      left: 12px;
      right: 12px;
      bottom: 12px;
    }

    .aeritx-logo-design__card {
      padding: 24px 18px;
      border-radius: 24px;
    }

    .aeritx-logo-design__badge {
      width: min(100%, 290px);
      margin-top: 78px;
      border-radius: 28px;
    }

    .aeritx-logo-design__logo-shell {
      width: min(74%, 210px);
      padding: 20px;
      border-radius: 24px;
    }

    .aeritx-logo-design__visual {
      min-height: 430px;
    }

    .aeritx-logo-design__visual::before {
      inset: 52px 12px 26px 12px;
      border-radius: 26px;
    }

    .aeritx-logo-design__mini-card {
      top: 0;
      right: 10px;
      width: 160px;
      padding: 14px;
    }

    .aeritx-logo-design__stamp {
      left: 10px;
      bottom: 0;
      width: 170px;
      padding: 14px;
    }

    .aeritx-device-preview__frame {
      /* border-radius: 20px; */
    }

    .aeritx-app-download__card {
      padding: 24px 18px;
      /* border-radius: 20px; */
    }

    .aeritx-app-download__store {
      width: 100%;
      min-width: 0;
    }

    .aeritx-app-download__note {
      align-items: flex-start;
      flex-direction: column;
    }
  }

  @media (max-width: 575.98px) {
    /* below small tablet/landscape phone */
    .aeritx-page {
      padding-top: 88px;
    }

    .aeritx-page > section {
      /* width: min(100% - 18px, 100%); */
    }

    .aeritx-hero {
      padding: 20px 14px 22px;
      /* border-radius: 18px; */
      background-position: 62% center;
    }

    .aeritx-hero__brand {
      gap: 8px;
      font-size: 14px;
    }

    .aeritx-hero__brand img {
      width: min(58vw, 156px);
    }

    .aeritx-hero__eyebrow,
    .aeritx-showcase__eyebrow,
    .aeritx-solution-gallery__eyebrow,
    .aeritx-logo-design__eyebrow,
    .aeritx-app-download__eyebrow {
      letter-spacing: 0.1em;
    }

    .aeritx-hero__stats {
      /* margin-top: 22px; */
      padding: 14px;
    }

    .aeritx-stat__icon {
      width: 62px;
      height: 62px;
      font-size: 24px;
    }

    .aeritx-stat__value {
      font-size: 36px;
    }

    .aeritx-showcase,
    .aeritx-solution-gallery,
    .aeritx-device-preview,
    .aeritx-logo-design,
    .aeritx-app-download {
      /* padding-top: 22px; */
    }

    .aeritx-showcase__section,
    .aeritx-solution-gallery__section,
    .aeritx-app-download__card {
      padding: 20px 14px;
    }

    .aeritx-showcase__list li,
    .aeritx-app-download__list li {
      align-items: flex-start;
      font-size: 14px;
      line-height: 1.55;
    }

    .aeritx-showcase__list i,
    .aeritx-app-download__list i {
      width: 30px;
      height: 30px;
      margin-top: 1px;
      font-size: 12px;
    }

    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      border-radius: 16px;
    }

    .aeritx-showcase__panel img,
    .aeritx-showcase__panel-small img {
      border-radius: 12px;
    }

    .aeritx-showcase__panel-small {
      width: 100%;
    }

    .aeritx-solution-gallery__card {
      min-height: 210px;
      border-radius: 18px;
    }

    .aeritx-solution-gallery__card--large {
      min-height: 260px;
    }

    .aeritx-logo-design__points li {
      width: 100%;
      border-radius: 16px;
    }

    .aeritx-logo-design__mini-card,
    .aeritx-logo-design__stamp {
      width: min(100%, 170px);
    }

    .aeritx-app-download__text,
    .aeritx-showcase__text,
    .aeritx-solution-gallery__text,
    .aeritx-logo-design__text {
      font-size: 15px;
      line-height: 1.7;
    }
  }

  @media (max-width: 479.98px) {
    /* below large phone */
    .aeritx-page {
      padding-top: 82px;
    }

    .aeritx-page > section {
      /* width: min(100% - 14px, 100%); */
    }

    .aeritx-hero {
      margin-top: 8px;
      padding: 18px 12px 20px;
    }

    .aeritx-hero__topbar {
      margin-bottom: 22px;
    }

    .aeritx-hero__title {
      font-size: clamp(30px, 10vw, 38px);
    }

    .aeritx-hero__description {
      font-size: 15px;
    }

    .aeritx-showcase__title,
    .aeritx-solution-gallery__title,
    .aeritx-logo-design__title {
      font-size: clamp(27px, 8vw, 34px);
    }

    .aeritx-app-download__title {
      font-size: clamp(29px, 8.5vw, 36px);
    }

    .aeritx-showcase__section,
    .aeritx-solution-gallery__section,
    .aeritx-app-download__card,
    .aeritx-logo-design__card {
      padding-inline: 12px;
    }

    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      padding: 8px;
    }

    .aeritx-solution-gallery__info {
      position: relative;
      left: auto;
      right: auto;
      bottom: auto;
      margin: -10px 10px 10px;
      padding: 12px;
    }

    .aeritx-app-download__store {
      gap: 12px;
      padding: 12px 14px;
    }

    .aeritx-app-download__store strong {
      font-size: 17px;
    }
  }

  @media (max-width: 359.98px) {
    /* below small phone */
    .aeritx-page > section {
      /* width: min(100% - 10px, 100%); */
    }

    .aeritx-hero {
      padding-inline: 10px;
      /* border-radius: 16px; */
    }

    .aeritx-hero__brand {
      align-items: flex-start;
      flex-direction: column;
    }

    .aeritx-hero__title {
      font-size: 29px;
    }

    .aeritx-hero__eyebrow {
      font-size: 12px;
      word-spacing: 0;
    }

    .aeritx-hero__stats {
      padding: 12px 10px;
    }

    .aeritx-stat {
      padding: 14px 4px;
    }

    .aeritx-stat__icon {
      width: 54px;
      height: 54px;
      font-size: 21px;
    }

    .aeritx-stat__value {
      font-size: 32px;
    }

    .aeritx-showcase__section,
    .aeritx-solution-gallery__section,
    .aeritx-app-download__card,
    .aeritx-logo-design__card {
      padding-inline: 10px;
    }

    .aeritx-showcase__title,
    .aeritx-solution-gallery__title,
    .aeritx-logo-design__title,
    .aeritx-app-download__title {
      font-size: 28px;
      overflow-wrap: anywhere;
    }

    .aeritx-app-download__store {
      padding-inline: 12px;
    }

    .aeritx-app-download__store i {
      font-size: 24px;
    }
  }

  @media (max-width: 1199.98px) {
    .aeritx-showcase__visual {
      width: 860px;
      min-height: clamp(360px, 52vw, 470px);
      margin-inline: auto;
    }

    .aeritx-showcase__panel {
      width: min(78%, 640px);
      right: 0;
    }

    .aeritx-showcase__panel-small {
      width: min(46%, 360px);
      left: 0;
      bottom: 4px;
    }
  }

  @media (max-width: 991.98px) {
    .aeritx-showcase__visual {
      min-height: clamp(310px, 58vw, 410px);
    }

    .aeritx-showcase__panel {
      width: min(82%, 620px);
      padding: 12px;
      border-radius: 20px;
    }

    .aeritx-showcase__panel-small {
      width: min(48%, 320px);
      padding: 10px;
      border-radius: 18px;
    }

    .aeritx-showcase__badge {
      top: 16px;
      left: 16px;
      font-size: 11px;
      padding: 8px 12px;
    }
  }

  @media (max-width: 767.98px) {
    .aeritx-showcase__visual {
      width: 100%;
      max-width: 560px;
      min-height: auto;
      margin-inline: auto;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .aeritx-showcase__badge,
    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      transform: none;
    }

    .aeritx-showcase__badge {
      align-self: flex-start;
      order: 1;
    }

    .aeritx-showcase__panel {
      order: 2;
      display: block;
      width: 100%;
      max-width: none;
    }

    .aeritx-showcase__panel-small {
      order: 3;
      display: block;
      width: 100%;
      max-width: 420px;
      margin-inline: auto;
    }
  }

  @media (max-width: 575.98px) {
    .aeritx-showcase__visual {
      gap: 10px;
    }

    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      padding: 8px;
      border-radius: 14px;
      box-shadow: 0 14px 28px rgba(18, 42, 89, 0.12);
    }

    .aeritx-showcase__panel img,
    .aeritx-showcase__panel-small img {
      display: block;
      width: 100%;
      height: auto;
      border-radius: 10px;
    }
  }

  @media (max-width: 359.98px) {
    .aeritx-showcase__badge {
      white-space: normal;
      border-radius: 14px;
    }
  }

  @media (max-width: 1199.98px) {
    .aeritx-showcase__visual {
      max-width: 860px;
      min-height: clamp(360px, 52vw, 470px);
      margin-inline: auto;
    }

    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      display: block;
      min-width: 1px;
      min-height: 1px;
      aspect-ratio: 16 / 9;
    }

    .aeritx-showcase__panel {
      width: min(78%, 640px);
      min-height: clamp(230px, 35vw, 360px);
      right: 0;
    }

    .aeritx-showcase__panel-small {
      width: min(46%, 360px);
      min-height: clamp(130px, 20vw, 220px);
      left: 0;
      bottom: 4px;
    }

    .aeritx-showcase__panel img,
    .aeritx-showcase__panel-small img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }

  @media (max-width: 991.98px) {
    .aeritx-showcase__visual {
      min-height: clamp(310px, 58vw, 410px);
    }

    .aeritx-showcase__panel {
      width: min(82%, 620px);
      min-height: clamp(220px, 40vw, 330px);
    }

    .aeritx-showcase__panel-small {
      width: min(48%, 320px);
      min-height: clamp(130px, 24vw, 190px);
    }
  }

  @media (max-width: 767.98px) {
    .aeritx-showcase__visual {
      min-height: auto;
    }

    .aeritx-showcase__panel,
    .aeritx-showcase__panel-small {
      width: 100%;
      min-height: auto;
      aspect-ratio: 16 / 9;
    }

    .aeritx-showcase__panel-small {
      max-width: 420px;
    }
  }
</style>

<main class="aeritx-page">
  <section class="aeritx-hero">
    <div class="aeritx-hero__topbar">
      <!-- <div class="aeritx-hero__label">
        <span class="aeritx-hero__pill">AX-01</span>
        <span class="aeritx-hero__overview">Overview</span>
      </div> -->

      <div class="aeritx-hero__brands">
        <span class="aeritx-hero__brand">Agency: <img src="./assets/images/portfolios/aeritx2.png" alt="Aeritx Logo"></span>
        <!-- <span class="aeritx-hero__divider" aria-hidden="true"></span> -->
        <!-- <span class="aeritx-hero__brand">Client: <span class="aeritx-hero__client-mark">A</span> <strong>Aeritx</strong></span> -->
      </div>
    </div>

    <div class="aeritx-hero__body">
      <div class="aeritx-hero__content">
        <p class="aeritx-hero__eyebrow">Website • CRM • Mobile App</p>
        <h1 class="aeritx-hero__title">
          This Project was
          <span class="aeritx-hero__title-accent">Misregistered.</span>
        </h1>
        <p class="aeritx-hero__description">
          A complete digital solution designed to streamline operations, boost sales, and deliver a seamless customer experience.
        </p>
      </div>

      <!-- <div class="aeritx-hero__visual"> -->
        <!-- <div class="aeritx-laptop">
          <div class="aeritx-laptop__screen">
            <img src="assets/images/about/files/aeritx.jpg" alt="Aeritx website interface on laptop">
          </div>
          <div class="aeritx-laptop__base"></div>
        </div> -->

        <!-- <div class="aeritx-phone" aria-hidden="true">
          <div class="aeritx-phone__screen">
            <div class="aeritx-phone__top">Create <span>Account</span></div>
            <div class="aeritx-phone__logo">Aeritx</div>
            <div class="aeritx-phone__card">
              <strong>Let's get started</strong>
              <div class="aeritx-phone__field"></div>
              <button type="button" class="aeritx-phone__button">Verify number</button>
            </div>
            <div class="aeritx-phone__pad">
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>5</span>
              <span>6</span>
              <span>7</span>
              <span>8</span>
              <span>9</span>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
    </div>
  </section>
  <section>
    <div class="aeritx-hero__stats">
      <div class="aeritx-stat aeritx-stat--blue">
        <span class="aeritx-stat__icon"><i class="fa-solid fa-globe"></i></span>
        <div>
          <span class="aeritx-stat__label">Website</span>
          <span class="aeritx-stat__value">30+</span>
          <span class="aeritx-stat__text">Pages Designed</span>
        </div>
      </div>

      <div class="aeritx-stat aeritx-stat--violet">
        <span class="aeritx-stat__icon"><i class="fa-solid fa-desktop"></i></span>
        <div>
          <span class="aeritx-stat__label">Backend CRM</span>
          <span class="aeritx-stat__value">15+</span>
          <span class="aeritx-stat__text">Modules Developed</span>
        </div>
      </div>

      <div class="aeritx-stat aeritx-stat--teal">
        <span class="aeritx-stat__icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
        <div>
          <span class="aeritx-stat__label">Mobile App</span>
          <span class="aeritx-stat__value">2+</span>
          <span class="aeritx-stat__text">Platforms Supported</span>
        </div>
      </div>
    </div>
  </section>

  <section class="aeritx-showcase">
    <div class="aeritx-showcase__section">
      <div class="aeritx-showcase__grid">
        <div class="aeritx-showcase__content">
          <span class="aeritx-showcase__eyebrow">Aeritx Platform</span>
          <h2 class="aeritx-showcase__title">Smart tools for <span>daily operations.</span></h2>
          <p class="aeritx-showcase__text">
            We kept the experience simple and practical, bringing website, backend workflow, and reporting into one cleaner system for the Aeritx team.
          </p>
          <ul class="aeritx-showcase__list">
            <li><i class="fa-solid fa-check"></i> Clean admin view for day-to-day updates</li>
            <li><i class="fa-solid fa-check"></i> Easy content and inquiry management</li>
            <li><i class="fa-solid fa-check"></i> Structured screens for products, records, and reporting</li>
          </ul>
        </div>

        <div class="aeritx-showcase__visual">
          <span class="aeritx-showcase__badge"><i class="fa-solid fa-layer-group"></i> CRM Dashboard</span>
          <div class="aeritx-showcase__panel">
            <img src="assets/images/portfolios/aertix3.png" alt="Aeritx CRM dashboard preview">
          </div>
          <div class="aeritx-showcase__panel-small">
            <img src="assets/images/portfolios/aertix4.png" alt="Aeritx CRM secondary preview">
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="aeritx-showcase__section aeritx-showcase__section--reverse">
      <div class="aeritx-showcase__grid">
        <div class="aeritx-showcase__visual">
          <span class="aeritx-showcase__badge"><i class="fa-solid fa-mobile-screen-button"></i> App & Web Flow</span>
          <div class="aeritx-showcase__panel">
            <img src="assets/images/portfolios/aeritx5.png" alt="Aeritx application preview">
          </div>
          <div class="aeritx-showcase__panel-small">
            <img src="assets/images/portfolios/aeritx6.png" alt="Aeritx website preview">
          </div>
        </div>

        <div class="aeritx-showcase__content">
          <span class="aeritx-showcase__eyebrow">Connected Experience</span>
          <h2 class="aeritx-showcase__title">Built to stay <span>easy to manage.</span></h2>
          <p class="aeritx-showcase__text">
            The second section now uses your newer visuals as a paired showcase, keeping the same minimal style while presenting another part of the Aeritx system.
          </p>
          <ul class="aeritx-showcase__list">
            <li><i class="fa-solid fa-check"></i> Separate visual block for additional workflow screens</li>
            <li><i class="fa-solid fa-check"></i> Same page styling with light visual depth</li>
            <li><i class="fa-solid fa-check"></i> Mobile-friendly stacked layout on smaller screens</li>
          </ul>
        </div>
      </div>
    </div> -->
  </section>

  <section class="aeritx-app-download">
    <div class="aeritx-app-download__card">
      <div class="aeritx-app-download__content">
        <span class="aeritx-app-download__eyebrow">Mobile Experience</span>
        <h2 class="aeritx-app-download__title">Download the <span>Aeritx application.</span></h2>
        <p class="aeritx-app-download__text">
          We presented the app download area in a fresh layout while using the provided banner image. The section highlights both platforms clearly and keeps the messaging focused on fast access for shopping and delivery users.
        </p>
        <ul class="aeritx-app-download__list">
          <li><i class="fa-solid fa-check"></i> One section for both customer shopping and delivery access</li>
          <li><i class="fa-solid fa-check"></i> Clear store actions for Android and iOS users</li>
          <li><i class="fa-solid fa-check"></i> Banner visual added from the supplied ban1.webp asset</li>
        </ul>
        <div class="aeritx-app-download__actions">
          <a class="aeritx-app-download__store" href="https://play.google.com/store" target="_blank" rel="noopener" title="Get it on Google Play">
            <i class="fab fa-google-play"></i>
            <span>
              <small>Available on</small>
              <strong>Google Play</strong>
            </span>
          </a>
          <a class="aeritx-app-download__store" href="https://www.apple.com/app-store/" target="_blank" rel="noopener" title="Download on the App Store">
            <i class="fab fa-apple"></i>
            <span>
              <small>Download on the</small>
              <strong>App Store</strong>
            </span>
          </a>
        </div>
      </div>

      <div class="aeritx-app-download__visual">
        <!-- <div class="aeritx-app-download__note">
          <div>
            <span>Provided Visual</span>
            <strong>Download Application Banner</strong>
          </div>
          <i class="fa-solid fa-mobile-screen-button"></i>
        </div> -->
        <div class="aeritx-app-download__frame">
          <img src="assets/images/portfolios/ban1.webp" alt="Aeritx download application banner">
        </div>
      </div>
    </div>
  </section>

<section class="aeritx-device-preview">
    <div class="aeritx-device-preview__frame">
      <picture>
       
        <img src="assets/images/portfolios/ban2.webp" alt="Aeritx responsive website and mobile preview">
      </picture>
    </div>
  </section>

  <section class="aeritx-device-preview">
    <div class="aeritx-device-preview__frame">
      <picture>
        <source media="(max-width: 767px)" srcset="assets/images/portfolios/aeritx9.png">
        <img src="assets/images/portfolios/aeritx7.png" alt="Aeritx responsive website and mobile preview">
      </picture>
    </div>
  </section>


</main>

<?php include __DIR__ . '/footer.php'; ?>

