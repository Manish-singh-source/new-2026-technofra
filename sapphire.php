<?php
$pageTitle = 'Sapphire || Technofra Website';
include __DIR__ . '/header.php';
?>

<style>
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
    padding: 110px 72px 70px;
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
    font-size: 70px;
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
    font-size: 40px;
    font-weight: 300;
    line-height: 1.1;
    letter-spacing: 0.38em;
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
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .sapphire-hero__features li {
    display: flex;
    flex-direction: column;
    gap: 12px;
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
    .sapphire-hero__meta {
      line-height: 1.8;
    }

    .sapphire-hero__features {
      grid-template-columns: 1fr;
      gap: 18px;
    }

    .sapphire-hero__features li,
    .sapphire-hero__features li + li,
    .sapphire-hero__features li:nth-child(2n + 1) {
      border-left: 0;
      padding-left: 0;
      padding-right: 0;
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
    padding: 0 72px;
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
    mix-blend-mode: screen;
  }

  .sapphire-overview__visual::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(18, 14, 10, 0.18), rgba(18, 14, 10, 0.02));
  }

  .sapphire-overview__bottom {
    display: grid;
    grid-template-columns: minmax(320px, 0.92fr) minmax(0, 1.18fr);
    gap: 42px;
    align-items: start;
  }

  .sapphire-overview__info {
    display: grid;
    gap: 20px;
  }

  .sapphire-overview__info-card,
  .sapphire-overview__service-card {
    background: rgba(255, 255, 255, 0.94);
    border: 1px solid rgba(31, 31, 31, 0.08);
    border-radius: 22px;
    box-shadow: 0 18px 38px rgba(38, 33, 23, 0.08);
  }

  .sapphire-overview__info-card {
    display: flex;
    gap: 20px;
    align-items: center;
    padding: 28px 26px;
  }

  .sapphire-overview__info-icon {
    width: 74px;
    height: 74px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(196, 148, 76, 0.22);
    color: #c08c45;
    font-size: 29px;
    background: linear-gradient(180deg, rgba(255, 248, 239, 0.9), rgba(251, 244, 235, 0.8));
    flex: 0 0 auto;
  }

  .sapphire-overview__info-label {
    margin: 0 0 8px;
    color: #b88742;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .sapphire-overview__info-value {
    margin: 0;
    color: #232323;
    font-size: clamp(24px, 2vw, 28px);
    line-height: 1.35;
  }

  .sapphire-overview__services-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
  }

  .sapphire-overview__service-card {
    min-height: 150px;
    padding: 30px 24px 24px;
    text-align: center;
  }

  .sapphire-overview__service-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 64px;
    height: 64px;
    margin-bottom: 18px;
    border-radius: 18px;
    color: #bf8c48;
    font-size: 32px;
    background: linear-gradient(180deg, rgba(252, 245, 235, 0.96), rgba(248, 239, 227, 0.8));
  }

  .sapphire-overview__service-card h3 {
    margin: 0;
    color: #202020;
    font-size: 18px;
    line-height: 1.45;
    font-weight: 500;
  }

  @media (max-width: 1199px) {
    .sapphire-overview__wrap {
      padding: 0 24px;
    }

    .sapphire-overview__top,
    .sapphire-overview__bottom {
      grid-template-columns: 1fr;
    }

    .sapphire-overview__visual {
      min-height: 460px;
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
      padding: 22px 20px;
    }

    .sapphire-overview__services-grid {
      grid-template-columns: 1fr;
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
          <img src="./assets/images/portfolios/sapphire1.png" alt="Sapphire Accessories project preview">
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
</main>

<?php include __DIR__ . '/footer.php'; ?>
