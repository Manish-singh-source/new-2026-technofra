<?php
$pageTitle = 'Sapphire || Technofra Website';
include __DIR__ . '/header.php';
?>

<style>
  * {
    box-sizing: border-box;
  }

  img {
    max-width: 100%;
  }

  .sapphire-hero {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
    background:
      linear-gradient(90deg, rgba(5, 5, 6, 0.96) 0%, rgba(5, 5, 6, 0.92) 26%, rgba(5, 5, 6, 0.76) 40%, rgba(5, 5, 6, 0.28) 56%, rgba(5, 5, 6, 0.06) 100%),
      radial-gradient(circle at 84% 8%, rgba(211, 183, 144, 0.34), transparent 20%),
      radial-gradient(circle at 75% 18%, rgba(157, 119, 77, 0.18), transparent 24%),
      url('./assets/images/portfolios/sapphire1.png') center bottom / cover no-repeat,
      #060606;
    color: #f5f0ea;
  }

  .sapphire-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.08), rgba(0, 0, 0, 0.18));
    pointer-events: none;
  }

  .sapphire-hero__wrap {
    position: relative;
    z-index: 1;
    max-width: 1520px;
    min-height: 100vh;
    margin: 70px auto 0px;
    padding: clamp(88px, 9vw, 110px) clamp(20px, 5vw, 72px) clamp(56px, 7vw, 70px);
    display: flex;
    align-items: center;
  }

  .sapphire-hero__content {
    width: min(100%, 620px);
  }

  .sapphire-hero__eyebrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 11px 22px;
    border: 1px solid rgba(212, 172, 111, 0.42);
    border-radius: 999px;
    color: #d7ae76;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.24em;
    text-transform: uppercase;
    margin-bottom: 34px;
  }

  .sapphire-hero__title {
    margin: 0;
    font-family: Georgia, "Times New Roman", serif;
    font-size: clamp(40px, 6vw, 70px);
    font-weight: 400;
    line-height: 0.9;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #fbf7f2;
  }

  .sapphire-hero__subtitle {
    display: block;
    margin-top: 16px;
    font-family: "Segoe UI", Arial, sans-serif;
    font-size: clamp(22px, 4vw, 40px);
    font-weight: 300;
    line-height: 1.1;
    letter-spacing: clamp(0.16em, 0.9vw, 0.38em);
    text-transform: uppercase;
    color: #d5a86c;
  }

  .sapphire-hero__line {
    width: 200px;
    height: 2px;
    margin: 34px 0 34px;
    background: linear-gradient(90deg, #d7ab71 0%, rgba(215, 171, 113, 0.18) 100%);
  }

  .sapphire-hero__meta {
    margin: 0 0 30px;
    color: #f0e9df;
    font-size: clamp(14px, 1.15vw, 18px);
    letter-spacing: 0.09em;
    text-transform: uppercase;
    word-spacing: 0.16em;
  }

  .sapphire-hero__description {
    max-width: 500px;
    margin: 0 0 46px;
    color: rgba(239, 234, 226, 0.88);
    font-size: clamp(18px, 1.3vw, 20px);
    line-height: 1.75;
  }

  .sapphire-hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-bottom: 20px;
  }

  .sapphire-hero__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    min-width: 228px;
    padding: 19px 28px;
    border-radius: 12px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    font-size: 14px;
    font-weight: 600;
    transition: transform 0.24s ease, box-shadow 0.24s ease, background 0.24s ease;
  }

  .sapphire-hero__button:hover {
    transform: translateY(-2px);
  }

  .sapphire-hero__button--primary {
    background: linear-gradient(135deg, #e4bf88 0%, #cfa062 100%);
    color: #18120b;
    box-shadow: 0 16px 32px rgba(199, 149, 83, 0.22);
  }

  .sapphire-hero__button--secondary {
    border: 1px solid rgba(215, 171, 113, 0.7);
    color: #f5f0ea;
    background: rgba(255, 255, 255, 0.02);
  }

  .sapphire-hero__features {
    display: flex;
    flex-wrap: wrap;
    gap: 24px 0;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .sapphire-hero__features li {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex: 1 1 25%;
    padding: 0 42px 0 0;
    min-height: 92px;
    color: #ece5db;
    font-size: 11px;
    line-height: 1.75;
    letter-spacing: 0.11em;
    text-transform: uppercase;
  }

  .sapphire-hero__features li + li {
    padding-left: 42px;
    border-left: 1px solid rgba(255, 255, 255, 0.14);
  }

  .sapphire-hero__icon {
    color: #d7ae76;
    font-size: 24px;
  }

  @media (max-width: 1199px) {
    .sapphire-hero__wrap {
      margin-top: 50px;
    }

    .sapphire-hero__content {
      width: min(100%, 680px);
    }

    .sapphire-hero__features li {
      flex-basis: 50%;
    }
  }

  @media (max-width: 991px) {
    .sapphire-hero {
      min-height: auto;
      background:
        linear-gradient(180deg, rgba(5, 5, 6, 0.84) 0%, rgba(5, 5, 6, 0.68) 34%, rgba(5, 5, 6, 0.78) 100%),
        radial-gradient(circle at 84% 8%, rgba(211, 183, 144, 0.24), transparent 20%),
        url('./assets/images/portfolios/sapphire1.png') 74% center / cover no-repeat,
        #060606;
    }

    .sapphire-hero__wrap {
      min-height: auto;
      margin-top: 0;
      padding: 84px 24px 56px;
    }

    .sapphire-hero__subtitle {
      letter-spacing: 0.24em;
    }

    .sapphire-hero__actions {
      margin-bottom: 56px;
    }

    .sapphire-hero__button {
      width: 100%;
      min-width: 0;
    }

    .sapphire-hero__features {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 24px 0;
    }

    .sapphire-hero__features li {
      min-height: auto;
      padding: 0 18px 0 0;
    }

    .sapphire-hero__features li + li {
      padding-left: 18px;
    }

    .sapphire-hero__features li:nth-child(2n + 1) {
      border-left: 0;
      padding-left: 0;
    }
  }

  @media (max-width: 640px) {
    .sapphire-hero {
      background:
        linear-gradient(180deg, rgba(5, 5, 6, 0.9) 0%, rgba(5, 5, 6, 0.72) 38%, rgba(5, 5, 6, 0.86) 100%),
        url('./assets/images/portfolios/sapphire1.png') 66% center / cover no-repeat,
        #060606;
    }

    .sapphire-hero__eyebrow {
      padding: 10px 16px;
      margin-bottom: 24px;
      font-size: 11px;
      letter-spacing: 0.18em;
    }

    .sapphire-hero__line {
      width: 140px;
      margin: 24px 0;
    }

    .sapphire-hero__meta {
      line-height: 1.8;
    }

    .sapphire-hero__description {
      margin-bottom: 32px;
      font-size: 16px;
      line-height: 1.7;
    }

    .sapphire-hero__actions {
      gap: 14px;
      margin-bottom: 40px;
    }

    .sapphire-hero__button {
      padding: 16px 20px;
      font-size: 13px;
      letter-spacing: 0.1em;
    }

    .sapphire-hero__features {
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 18px 12px;
    }

    .sapphire-hero__features li,
    .sapphire-hero__features li + li,
    .sapphire-hero__features li:nth-child(2n + 1) {
      border-left: 0;
      padding-left: 0;
      padding-right: 0;
      min-width: 0;
    }
  }

  .sapphire-overview {
    background:
      radial-gradient(circle at top right, rgba(212, 173, 111, 0.12), transparent 28%),
      linear-gradient(180deg, #ffffff 0%, #fcfaf7 100%);
    padding: 50px 0 110px;
  }

  .sapphire-overview__wrap {
    max-width: 1520px;
    margin: 0 auto;
    padding: 0 clamp(20px, 5vw, 72px);
  }

  .sapphire-overview__top {
    display: grid;
    grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.18fr);
    gap: 42px;
    align-items: start;
    margin-bottom: 30px;
  }

  .sapphire-overview__section-label,
  .sapphire-overview__services-title {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 42px;
  }

  .sapphire-overview__badge {
    width: 58px;
    height: 58px;
    border: 1px solid rgba(196, 148, 76, 0.4);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #b88742;
    font-size: 24px;
    font-weight: 600;
  }

  .sapphire-overview__section-text,
  .sapphire-overview__services-title span {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 18px;
    color: #b88742;
    font-size: 26px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
  }

  .sapphire-overview__section-text::after,
  .sapphire-overview__services-title span::after {
    content: "";
    width: clamp(100px, 15vw, 240px);
    height: 1px;
    background: linear-gradient(90deg, rgba(196, 148, 76, 0.7), rgba(196, 148, 76, 0.08));
  }

  .sapphire-overview__eyebrow {
    margin: 0 0 20px;
    color: #b88742;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .sapphire-overview__title {
    margin: 0;
    font-size: clamp(52px, 6vw, 92px);
    line-height: 0.95;
    font-weight: 700;
    color: #161616;
  }

  .sapphire-overview__title span {
    display: block;
    color: #c0904e;
    font-weight: 400;
  }

  .sapphire-overview__accent {
    width: 200px;
    height: 3px;
    margin: 34px 0 34px;
    background: linear-gradient(90deg, #c79651 0%, rgba(199, 150, 81, 0.12) 100%);
  }

  .sapphire-overview__description {
    max-width: 540px;
    margin: 0;
    color: #585858;
    font-size: 18px;
    line-height: 1.9;
  }

  .sapphire-overview__visual {
    position: relative;
    min-height: 540px;
    border: 1px solid rgba(34, 34, 34, 0.1);
    border-radius: 28px;
    overflow: hidden;
    background:
      radial-gradient(circle at 16% 28%, rgba(214, 172, 96, 0.36), transparent 18%),
      radial-gradient(circle at 20% 18%, rgba(214, 172, 96, 0.86), rgba(214, 172, 96, 0.18) 20%, transparent 21%),
      linear-gradient(135deg, #2b241d 0%, #131313 65%, #0d0d0d 100%);
    box-shadow: 0 30px 60px rgba(28, 24, 16, 0.12);
  }

  .sapphire-overview__visual img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.88;
    /* mix-blend-mode: screen; */
  }

  .sapphire-overview__visual::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(18, 14, 10, 0.18), rgba(18, 14, 10, 0.02));
  }

  .sapphire-overview__bottom {
    display: grid;
    grid-template-columns: minmax(320px, 0.92fr) minmax(0, 1.08fr);
    gap: 42px;
    align-items: start;
  }

  .sapphire-overview__info {
    display: grid;
    gap: 26px;
    margin-top: 75px;
  }

  .sapphire-overview__info-card,
  .sapphire-overview__service-card {
    background: #ffffff;
    border: 1px solid rgba(194, 160, 112, 0.16);
    border-radius: 24px;
    box-shadow: 0 16px 42px rgba(80, 61, 33, 0.08);
  }

  .sapphire-overview__info-card {
    display: flex;
    gap: 24px;
    align-items: center;
    min-height: 172px;
    padding: 34px 30px;
  }

  .sapphire-overview__info-icon {
    width: 92px;
    height: 92px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(196, 148, 76, 0.28);
    color: #c08c45;
    font-size: 34px;
    background: linear-gradient(180deg, #fffdfa 0%, #fbf2e8 100%);
    flex: 0 0 auto;
  }

  .sapphire-overview__info-label {
    margin: 0 0 8px;
    color: #b88742;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .sapphire-overview__info-value {
    margin: 0;
    max-width: 540px;
    color: #2b2b2b;
    font-size: clamp(22px, 1.9vw, 28px);
    line-height: 1.45;
    font-weight: 400;
  }

  .sapphire-overview__services {
    padding-top: 10px;
  }

  .sapphire-overview__services-title {
    margin-bottom: 26px;
  }

  .sapphire-overview__services-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
  }

  .sapphire-overview__service-card {
    min-height: 180px;
    padding: 24px 18px 18px;
    text-align: center;
  }

  .sapphire-overview__service-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    margin-bottom: 26px;
    border-radius: 24px;
    color: #bf8c48;
    font-size: 38px;
    background: linear-gradient(180deg, #fcf6ee 0%, #f7efe5 100%);
  }

  .sapphire-overview__service-card h3 {
    margin: 0;
    color: #242424;
    font-size: 19px;
    line-height: 1.4;
    font-weight: 400;
  }

  @media (max-width: 1199px) {
    .sapphire-overview__top,
    .sapphire-overview__bottom {
      grid-template-columns: 1fr;
    }

    .sapphire-overview__info {
      margin-top: 0;
    }

    .sapphire-overview__visual {
      min-height: 460px;
    }

    .sapphire-overview__services-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767px) {
    .sapphire-overview {
      padding: 70px 0 80px;
    }

    .sapphire-overview__section-label,
    .sapphire-overview__services-title {
      margin-bottom: 28px;
    }

    .sapphire-overview__section-text,
    .sapphire-overview__services-title span {
      font-size: 18px;
      gap: 12px;
    }

    .sapphire-overview__badge {
      width: 48px;
      height: 48px;
      font-size: 20px;
    }

    .sapphire-overview__visual {
      min-height: 320px;
    }

    .sapphire-overview__info-card {
      flex-direction: column;
      align-items: flex-start;
      padding: 22px 20px;
      min-height: auto;
    }

    .sapphire-overview__info-icon {
      width: 78px;
      height: 78px;
      font-size: 30px;
    }

    .sapphire-overview__services-grid {
      grid-template-columns: 1fr;
    }

    .sapphire-overview__service-card {
      min-height: auto;
      padding: 30px 22px 24px;
    }
  }

  .sapphire-showcase {
    position: relative;
    overflow: hidden;
    padding: 125px 0;
    background:
      radial-gradient(circle at 14% 22%, rgba(214, 173, 104, 0.14), transparent 22%),
      radial-gradient(circle at 82% 14%, rgba(214, 173, 104, 0.1), transparent 18%),
      linear-gradient(180deg, #0b0b0c 0%, #141110 100%);
    color: #f8f1e8;
  }

  .sapphire-showcase::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
    background-size: 140px 140px;
    opacity: 0.08;
    pointer-events: none;
  }

  .sapphire-showcase__wrap {
    position: relative;
    z-index: 1;
    max-width: 1520px;
    margin: 0 auto;
    padding: 0 clamp(20px, 5vw, 72px);
  }

  .sapphire-showcase__layout {
    display: grid;
    grid-template-columns: minmax(0, 1.08fr) minmax(320px, 0.92fr);
    gap: 52px;
    align-items: start;
  }

  .sapphire-showcase__left {
    display: grid;
    gap: 54px;
  }

  .sapphire-showcase__right {
    display: grid;
    gap: 18px;
    align-content: start;
    padding-top: 18px;
  }

  .sapphire-showcase__content {
    max-width: 640px;
  }

  .sapphire-showcase__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 28px;
    color: #d8b278;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.28em;
    text-transform: uppercase;
  }

  .sapphire-showcase__eyebrow::before {
    content: "";
    width: 64px;
    height: 1px;
    background: linear-gradient(90deg, #d8b278 0%, rgba(216, 178, 120, 0.18) 100%);
  }

  .sapphire-showcase__title {
    margin: 0;
    font-family: Georgia, "Times New Roman", serif;
    font-size: clamp(52px, 6vw, 98px);
    line-height: 0.9;
    font-weight: 400;
    letter-spacing: 0.01em;
    color: #fffaf4;
  }

  .sapphire-showcase__title span {
    display: block;
    margin-top: 10px;
    color: #d9b883;
  }

  .sapphire-showcase__description {
    max-width: 560px;
    margin: 28px 0 0;
    color: rgba(248, 241, 232, 0.78);
    font-size: 18px;
    line-height: 1.95;
  }

  .sapphire-showcase__intro-card {
    padding: 34px 34px 30px;
    border: 1px solid rgba(216, 178, 120, 0.16);
    border-radius: 26px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
    box-shadow: 0 24px 50px rgba(0, 0, 0, 0.2);
  }

  .sapphire-showcase__intro-label {
    margin: 0 0 14px;
    color: #d8b278;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.22em;
    text-transform: uppercase;
  }

  .sapphire-showcase__intro-text {
    margin: 0;
    color: rgba(248, 241, 232, 0.82);
    font-size: 16px;
    line-height: 1.9;
  }

  .sapphire-showcase__visual-composition {
    position: relative;
    min-height: 720px;
    padding-right: clamp(0px, 10vw, 120px);
  }

  .sapphire-showcase__frame {
    position: relative;
    overflow: hidden;
    border-radius: 34px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    background: #161311;
    box-shadow: 0 32px 70px rgba(0, 0, 0, 0.26);
  }

  .sapphire-showcase__frame--primary {
    width: min(100%, 760px);
    min-height: 620px;
  }

  .sapphire-showcase__frame--secondary {
    position: absolute;
    right: 0;
    bottom: 36px;
    width: min(44%, 320px);
    aspect-ratio: 4 / 5;
    border-width: 8px;
    border-color: #efe2cf;
    box-shadow: 0 26px 60px rgba(0, 0, 0, 0.32);
  }

  .sapphire-showcase__frame--secondary img {
    object-position: top center;
  }

  .sapphire-showcase__frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .sapphire-showcase__frame::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
      linear-gradient(180deg, rgba(255, 255, 255, 0.04), transparent 18%),
      linear-gradient(0deg, rgba(10, 10, 10, 0.28), rgba(10, 10, 10, 0.02) 32%);
    pointer-events: none;
  }

  .sapphire-showcase__floating-chip {
    position: absolute;
    left: 28px;
    top: 28px;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 18px;
    border-radius: 999px;
    background: rgba(10, 10, 10, 0.58);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #fff7ee;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    backdrop-filter: blur(10px);
  }

  .sapphire-showcase__floating-chip i {
    color: #d8b278;
  }

  .sapphire-showcase__caption {
    position: absolute;
    left: 30px;
    bottom: 28px;
    z-index: 2;
    max-width: 320px;
  }

  .sapphire-showcase__caption-label {
    display: inline-block;
    margin-bottom: 10px;
    color: #d8b278;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.22em;
    text-transform: uppercase;
  }

  .sapphire-showcase__caption-text {
    margin: 0;
    color: rgba(255, 247, 238, 0.82);
    font-size: 15px;
    line-height: 1.8;
  }

  .sapphire-showcase__details {
    display: grid;
    gap: 22px;
  }

  .sapphire-showcase__stat {
    padding: 30px 30px 26px;
    border-radius: 26px;
    border: 1px solid rgba(216, 178, 120, 0.14);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.045), rgba(255, 255, 255, 0.02));
  }

  .sapphire-showcase__stat-value {
    margin: 0 0 8px;
    color: #fffaf4;
    font-size: clamp(32px, 3vw, 46px);
    line-height: 1;
    font-weight: 600;
  }

  .sapphire-showcase__stat-label {
    margin: 0;
    color: rgba(248, 241, 232, 0.72);
    font-size: 14px;
    line-height: 1.8;
    letter-spacing: 0.12em;
    text-transform: uppercase;
  }

  .sapphire-showcase__features {
    display: grid;
    gap: 0;
    margin: 0;
    padding: 0;
    list-style: none;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
  }

  .sapphire-showcase__features li {
    display: grid;
    grid-template-columns: 54px minmax(0, 1fr);
    gap: 18px;
    align-items: center;
    padding: 22px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    color: #f8f1e8;
    font-size: 17px;
    font-weight: 500;
  }

  .sapphire-showcase__feature-icon {
    width: 54px;
    height: 54px;
    border-radius: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(180deg, rgba(216, 178, 120, 0.18), rgba(216, 178, 120, 0.06));
    color: #d8b278;
    font-size: 18px;
  }

  @media (max-width: 1199px) {
    .sapphire-showcase__layout {
      grid-template-columns: 1fr;
    }

    .sapphire-showcase__right {
      padding-top: 0;
    }

    .sapphire-showcase__visual-composition {
      min-height: 640px;
      padding-right: 80px;
    }
  }

  @media (max-width: 767px) {
    .sapphire-showcase {
      padding: 86px 0;
    }

    .sapphire-showcase__visual-composition {
      min-height: auto;
      padding-right: 0;
    }

    .sapphire-showcase__frame--primary {
      min-height: 360px;
    }

    .sapphire-showcase__frame--secondary {
      position: relative;
      right: auto;
      bottom: auto;
      width: min(82%, 320px);
      margin: -46px 0 0 auto;
      display: none;
    }

    .sapphire-showcase__intro-card,
    .sapphire-showcase__stat {
      padding: 24px;
    }

    .sapphire-showcase__features {
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
      border-top: 0;
    }

    .sapphire-showcase__features li {
      grid-template-columns: 1fr;
      gap: 12px;
      justify-items: center;
      text-align: center;
      padding: 20px 14px;
      font-size: 14px;
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.03);
    }

    .sapphire-showcase__feature-icon {
      width: 46px;
      height: 46px;
      border-radius: 14px;
    }
  }

  @media (max-width: 575px) {
    .sapphire-showcase__features {
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
    }

    .sapphire-overview__title,
    .sapphire-showcase__title {
      line-height: 1;
    }

    .sapphire-overview__accent {
      width: 120px;
      margin: 24px 0;
    }

    .sapphire-overview__description,
    .sapphire-showcase__description,
    .sapphire-showcase__intro-text,
    .sapphire-showcase__caption-text {
      font-size: 15px;
      line-height: 1.75;
    }

    .sapphire-showcase__eyebrow {
      gap: 10px;
      margin-bottom: 20px;
      letter-spacing: 0.18em;
    }

    .sapphire-showcase__eyebrow::before {
      width: 40px;
    }

    .sapphire-showcase__floating-chip {
      left: 16px;
      top: 16px;
      padding: 10px 14px;
      font-size: 10px;
      letter-spacing: 0.12em;
    }

    .sapphire-showcase__caption {
      left: 16px;
      right: 16px;
      bottom: 16px;
      max-width: none;
    }

    .sapphire-showcase__stat-value {
      margin-bottom: 12px;
    }
  }

  .sapphire-showcase-image {
    display: block;
    width: 100%;
  }

  .sapphire-showcase-image img {
    display: block;
    width: 100%;
    height: auto;
    margin-bottom: 50px;
  }

  .sapphire-showcase-image--mobile {
    display: none;
  }

  .sapphire-showcase-image--desktop {
    display: block;
  }

  @media (max-width: 767px) {
    .sapphire-showcase-image--mobile {
      display: block;
    }

    .sapphire-showcase-image--desktop {
      display: none;
    }
  }
</style>

<main>
  <section class="sapphire-hero">
    <div class="sapphire-hero__wrap">
      <div class="sapphire-hero__content">
        <span class="sapphire-hero__eyebrow">Featured Project</span>

        <h1 class="sapphire-hero__title">
          Sapphire
          <span class="sapphire-hero__subtitle">Accessories</span>
        </h1>

        <div class="sapphire-hero__line"></div>

        <p class="sapphire-hero__meta">Branding &bull; E-Commerce &bull; Web Design</p>

        <p class="sapphire-hero__description">
          A premium e-commerce website designed to deliver a seamless shopping
          experience for luxury mobile accessories.
        </p>

        <div class="sapphire-hero__actions">
          <a href="#" class="sapphire-hero__button sapphire-hero__button--primary">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Live Website</span>
          </a>

          <!-- <a href="#project-overview" class="sapphire-hero__button sapphire-hero__button--secondary">
            <span>View Project</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a> -->
        </div>

    <ul class="sapphire-hero__features">
  <li>
    <span class="sapphire-hero__icon"><i class="fa-solid fa-gem"></i></span>
    <span>Premium<br>Design</span>
  </li>
  <li>
    <span class="sapphire-hero__icon"><i class="fa-solid fa-bag-shopping"></i></span>
    <span>Seamless<br>Shopping</span>
  </li>
  <li>
    <span class="sapphire-hero__icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
    <span>Mobile<br>Friendly</span>
  </li>
  <li>
    <span class="sapphire-hero__icon"><i class="fa-solid fa-shield"></i></span>
    <span>Secure<br>&amp; Trusted</span>
  </li>
</ul>
      </div>
    </div>
  </section>

  <section class="sapphire-overview">
    <div class="sapphire-overview__wrap">
      <div class="sapphire-overview__top">
        <div class="sapphire-overview__content">
          <div class="sapphire-overview__section-label">
            <!-- <span class="sapphire-overview__badge">02</span> -->
            <span class="sapphire-overview__section-text">Brand Overview</span>
          </div>

          <p class="sapphire-overview__eyebrow">About The Brand</p>

          <h2 class="sapphire-overview__title">
            Sapphire
            <span>Accessories</span>
          </h2>

          <div class="sapphire-overview__accent"></div>

          <p class="sapphire-overview__description">
            Sapphire Accessories is a premium e-commerce destination for high-quality mobile
            accessories. The brand combines style, innovation, and durability to deliver
            products that elevate everyday tech experiences.
          </p>
        </div>

        <div class="sapphire-overview__visual">
          <img src="./assets/images/portfolios/sapphire2.webp" alt="Sapphire Accessories project preview">
        </div>
      </div>

      <div class="sapphire-overview__bottom">
        <div class="sapphire-overview__info">
          <article class="sapphire-overview__info-card">
            <div class="sapphire-overview__info-icon">
              <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div>
              <p class="sapphire-overview__info-label">Industry</p>
              <p class="sapphire-overview__info-value">Mobile Accessories</p>
            </div>
          </article>

          <article class="sapphire-overview__info-card">
            <div class="sapphire-overview__info-icon">
              <i class="fa-solid fa-users"></i>
            </div>
            <div>
              <p class="sapphire-overview__info-label">Target Audience</p>
              <p class="sapphire-overview__info-value">Tech Enthusiasts, Professionals, Modern Lifestyle Seekers</p>
            </div>
          </article>
        </div>

        <div class="sapphire-overview__services">
          <div class="sapphire-overview__services-title">
            <span>Services Provided</span>
          </div>

          <div class="sapphire-overview__services-grid">
            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-palette"></i>
              </div>
              <h3>Brand Identity</h3>
            </article>

            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-desktop"></i>
              </div>
              <h3>Website Design</h3>
            </article>

            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h3>E-commerce</h3>
            </article>

            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-mobile-screen-button"></i>
              </div>
              <h3>Responsive Design</h3>
            </article>

            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-rocket"></i>
              </div>
              <h3>Performance Optimization</h3>
            </article>

            <article class="sapphire-overview__service-card">
              <div class="sapphire-overview__service-icon">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
              </div>
              <h3>SEO Ready</h3>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sapphire-showcase">
    <div class="sapphire-showcase__wrap">
      <div class="sapphire-showcase__layout">
        <div class="sapphire-showcase__left">
          <div class="sapphire-showcase__content">
            <p class="sapphire-showcase__eyebrow">Website Showcase</p>

            <h2 class="sapphire-showcase__title">
              Designed For
              <span>Performance.</span>
            </h2>

            <p class="sapphire-showcase__description">
              A seamless e-commerce experience crafted with precision, modern design,
              and powerful functionality across all devices.
            </p>
          </div>

          <div class="sapphire-showcase__visual-composition">
            <div class="sapphire-showcase__frame sapphire-showcase__frame--primary">
              <span class="sapphire-showcase__floating-chip">
                <i class="fa-solid fa-gem"></i>
                Modern Commerce
              </span>
              <img src="./assets/images/portfolios/sapphire3.png" alt="Sapphire website premium homepage preview">
              <div class="sapphire-showcase__caption">
                <span class="sapphire-showcase__caption-label">Refined Interface</span>
                <p class="sapphire-showcase__caption-text">
                  Editorial-style presentation with immersive visuals and premium product focus.
                </p>
              </div>
            </div>

            <div class="sapphire-showcase__frame sapphire-showcase__frame--secondary">
              <img src="./assets/images/portfolios/sapphire4.png" alt="Sapphire responsive e-commerce layout preview">
            </div>
          </div>
        </div>

        <div class="sapphire-showcase__right">
          <div class="sapphire-showcase__intro-card">
            <p class="sapphire-showcase__intro-label">Premium Experience</p>
            <p class="sapphire-showcase__intro-text">
              Built as a luxury storefront, the interface focuses on polish, speed,
              and confidence at every step, from discovery to checkout.
            </p>
          </div>

          <div class="sapphire-showcase__details">
            <div class="sapphire-showcase__stat">
              <p class="sapphire-showcase__stat-value">01</p>
              <p class="sapphire-showcase__stat-label">A showcase section shaped for luxury positioning and conversion-focused browsing.</p>
            </div>

            <ul class="sapphire-showcase__features">
              <li>
                <span class="sapphire-showcase__feature-icon"><i class="fa-solid fa-gem"></i></span>
                <span>Modern &amp; Premium Design</span>
              </li>
              <li>
                <span class="sapphire-showcase__feature-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
                <span>Fully Responsive Layout</span>
              </li>
              <li>
                <span class="sapphire-showcase__feature-icon"><i class="fa-solid fa-cart-shopping"></i></span>
                <span>Smooth Shopping Experience</span>
              </li>
              <li>
                <span class="sapphire-showcase__feature-icon"><i class="fa-solid fa-gauge-high"></i></span>
                <span>Optimized for Performance</span>
              </li>
              <li>
                <span class="sapphire-showcase__feature-icon"><i class="fa-solid fa-shield-heart"></i></span>
                <span>Secure &amp; User Friendly</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="sapphire-showcase-image sapphire-showcase-image--mobile">
    <img src="./assets/images/portfolios/sapphire5.png" alt="Sapphire mobile website preview">
  </div>

  <div class="sapphire-showcase-image sapphire-showcase-image--desktop">
    <img src="./assets/images/portfolios/sapphire6.png" alt="Sapphire desktop website preview">
  </div>
</main>

<?php include __DIR__ . '/footer.php'; ?>
