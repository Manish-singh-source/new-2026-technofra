<?php
$pageTitle = 'Aeritx || Technofra Website';
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
    background:
      radial-gradient(circle at 8% 14%, rgba(95, 162, 255, 0.22), transparent 28%),
      radial-gradient(circle at 82% 12%, rgba(161, 207, 255, 0.2), transparent 30%),
      radial-gradient(circle at 50% 100%, rgba(133, 185, 255, 0.18), transparent 32%),
      linear-gradient(180deg, #d8ecff 0%, #eaf5ff 46%, #d8ebff 100%);
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
    padding: 40px 50px 50px;
    border-radius: 0;
    background: url("assets/images/portfolios/aeritx1.png") center center / cover no-repeat;
    box-shadow: none;
    backdrop-filter: none;
    overflow: hidden;
    min-height: 600px;
  }

  .aeritx-hero__topbar {
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
    display: grid;
    grid-template-columns: minmax(0, 1.0fr) minmax(0, 1.3fr);
    gap: clamp(30px, 4vw, 54px);
    align-items: center;
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
    font-size: 70px;
    line-height: 0.98;
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
    max-width: 520px;
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
    margin-top: 32px;
    padding: 22px;
    border-radius: 28px;
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

  @media (max-width: 1199px) {
    .aeritx-hero__body {
      grid-template-columns: 1fr;
    }

    .aeritx-hero__description {
      max-width: 100%;
    }

    .aeritx-hero__visual {
      min-height: auto;
      padding-right: 90px;
    }

    .aeritx-hero__stats {
      grid-template-columns: 1fr;
    }

    .aeritx-stat + .aeritx-stat {
      border-left: 0;
      border-top: 1px solid rgba(16, 24, 40, 0.1);
    }
  }

  @media (max-width: 991px) {
    .aeritx-page {
      padding: 104px 0 30px;
    }

    .aeritx-hero {
      padding: 22px 18px;
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

    .aeritx-hero__divider {
      display: none;
    }

    .aeritx-hero__eyebrow {
      letter-spacing: 0.14em;
    }
/* 
    .aeritx-hero__title-accent::after {
      width: 74%;
      bottom: -14px;
    } */

    .aeritx-hero__description {
      margin-top: 36px;
      font-size: 18px;
    }

    .aeritx-hero__visual {
      padding-right: 56px;
    }

    .aeritx-phone {
      width: 175px;
      bottom: -4px;
    }

    .aeritx-stat {
      padding: 18px 8px;
    }

    .aeritx-stat__icon {
      width: 74px;
      height: 74px;
      font-size: 28px;
    }
  }

  @media (max-width: 640px) {
    .aeritx-page {
      padding-top: 96px;
    }

    .aeritx-hero__pill {
      min-width: 92px;
      min-height: 38px;
      font-size: 15px;
    }

    .aeritx-hero__overview {
      font-size: 15px;
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
</main>

<?php include __DIR__ . '/footer.php'; ?>
