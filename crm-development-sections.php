<style>
  .tf-crm-page {
    background: var(--color-surface-white);
    color: var(--color-heading);
  }

  .tf-crm-page .tf-section {
    position: relative;
    overflow: hidden;
    padding: clamp(76px, 8vw, 120px) 0;
  }

  .tf-crm-page .tf-hero.tf-section {
    padding: clamp(92px, 8vw, 124px) 0 clamp(34px, 3vw, 52px);
    background:
      url("assets/images/bg/banner_crm.png") center top / cover no-repeat,
      radial-gradient(circle at 50% 18%, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 38%),
      linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(238, 243, 255, 0.1) 34%, rgba(171, 196, 255, 0.18) 100%),
      linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%);
  }

  .tf-crm-page .tf-hero::before,
  .tf-crm-page .tf-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
  }

  .tf-crm-page .tf-hero::before {
    background:
      linear-gradient(180deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0) 42%),
      radial-gradient(circle at 50% 0%, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0) 44%);
    opacity: 0.5;
  }

  .tf-crm-page .tf-hero::after {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0) 48%, rgba(119, 150, 255, 0.08) 100%);
  }

  .tf-crm-page .tf-hero__content {
    position: relative;
    z-index: 1;
    max-width: min(1220px, 96vw);
    margin: 0 auto;
    padding-top: clamp(10px, 1.2vw, 24px);
    padding-bottom: clamp(20px, 2vw, 34px);
    text-align: center;
    color: #0f1e52;
  }

  .tf-crm-page .tf-hero__badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 0 20px;
    margin-bottom: 16px;
    border-radius: 999px;
    background: rgba(65, 103, 255, 0.12);
    color: #4167ff;
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .tf-crm-page .tf-hero__title {
    margin: 0;
    font-family: var(--font-primary);
    font-size: clamp(2.8rem, 4.4vw, 5.3rem);
    line-height: 0.9;
    letter-spacing: -0.065em;
    color: #0f1e52;
  }

  .tf-crm-page .tf-hero__title > span {
    display: block;
    white-space: nowrap;
  }

  .tf-crm-page .tf-hero__accent {
    background: linear-gradient(135deg, #2f5bff 0%, #1368ff 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .tf-crm-page .tf-hero__lead {
    margin: 16px auto 0;
    max-width: min(58ch, 92vw);
    font-size: clamp(0.98rem, 0.96vw, 1.08rem);
    line-height: 1.45;
    color: rgba(15, 30, 82, 0.82);
  }

  .tf-crm-page .tf-hero__buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 16px;
    margin-top: clamp(22px, 1.8vw, 30px);
  }

  .tf-crm-page .tf-hero__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 54px;
    padding: 0 24px;
    border-radius: 999px;
    border: 1px solid transparent;
    font-size: 14px;
    font-weight: var(--f-bold);
    text-decoration: none;
    transition: var(--transition-1);
    white-space: nowrap;
  }

  .tf-crm-page .tf-hero__button:hover {
    transform: translateY(-2px);
  }

  .tf-crm-page .tf-hero__button--ghost {
    color: #1230a8;
    border-color: rgba(18, 48, 168, 0.18);
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
  }

  .tf-crm-page .tf-hero__button--ghost:hover {
    border-color: rgba(18, 48, 168, 0.35);
    color: #1230a8;
  }

  .tf-crm-page .tf-hero__button--primary {
    color: var(--color-content-white);
    background: linear-gradient(135deg, #4167ff 0%, #2a5bff 100%);
    box-shadow: 0 18px 40px rgba(42, 91, 255, 0.26);
  }

  .tf-crm-page .tf-hero__button--primary:hover {
    color: var(--color-content-white);
    box-shadow: 0 20px 46px rgba(42, 91, 255, 0.34);
  }

  .tf-crm-page .tf-hero__button i {
    font-size: 15px;
  }

  .tf-crm-page .tf-brand-strip {
    padding: clamp(28px, 4vw, 44px) 0;
    background: linear-gradient(180deg, #ffffff 0%, #f7f9ff 100%);
  }

  .tf-crm-page .tf-brand-strip__inner {
    display: grid;
    grid-template-columns: minmax(220px, 300px) 1fr;
    gap: clamp(18px, 3vw, 38px);
    align-items: center;
  }

  .tf-crm-page .tf-brand-strip__copy {
    padding-right: clamp(0px, 2vw, 24px);
    border-right: 1px solid rgba(18, 48, 168, 0.12);
  }

  .tf-crm-page .tf-brand-strip__eyebrow {
    margin: 0 0 8px;
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: #4167ff;
  }

  .tf-crm-page .tf-brand-strip__title {
    margin: 0;
    font-family: var(--font-primary);
    font-size: clamp(1.2rem, 1.35vw, 1.8rem);
    line-height: 1.32;
    letter-spacing: -0.03em;
    color: #0f1e52;
  }

  .tf-crm-page .tf-brand-strip__slider {
    min-width: 0;
  }

  .tf-crm-page .swiper.brand {
    width: 100%;
  }

  .tf-crm-page .swiper.brand .swiper-wrapper {
    align-items: stretch;
  }

  .tf-crm-page .swiper.brand .swiper-slide {
    height: auto;
  }

  .tf-crm-page .tf-brand-card {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    min-height: 90px;
    padding: 18px 22px;
    border-radius: 28px;
    background: rgba(255, 255, 255, 0.96);
    border: 1px solid rgba(18, 48, 168, 0.12);
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .tf-crm-page .tf-brand-card:hover {
    transform: translateY(-2px);
    border-color: rgba(18, 48, 168, 0.22);
    box-shadow: 0 16px 34px rgba(15, 23, 42, 0.08);
  }

  .tf-crm-page .tf-brand-card img {
    display: block;
    width: auto;
    max-width: 100%;
    max-height: 36px;
    object-fit: contain;
    opacity: 0.72;
    transition: opacity 0.25s ease, transform 0.25s ease;
  }

  .tf-crm-page .tf-brand-card:hover img {
    opacity: 1;
    transform: scale(1.03);
  }

  .tf-crm-page .tf-steps {
    padding: clamp(34px, 4.5vw, 64px) 0 clamp(64px, 7vw, 110px);
    background:
      radial-gradient(circle at top left, rgba(65, 103, 255, 0.07), transparent 28%),
      radial-gradient(circle at bottom right, rgba(42, 91, 255, 0.06), transparent 25%),
      #f7f9ff;
  }

  .tf-crm-page .tf-steps__header {
    max-width: 880px;
    margin: 0 auto clamp(24px, 3vw, 42px);
    text-align: center;
  }

  .tf-crm-page .tf-steps__title {
    margin: 0;
    font-family: var(--font-primary);
    font-size: clamp(2rem, 3.5vw, 4.4rem);
    line-height: 1.02;
    letter-spacing: -0.06em;
    color: #0f1e52;
  }

  .tf-crm-page .tf-steps__lead {
    margin: 14px auto 0;
    max-width: 58ch;
    font-size: clamp(0.98rem, 1.1vw, 1.18rem);
    line-height: 1.7;
    color: rgba(15, 30, 82, 0.74);
  }

  .tf-crm-page .tf-steps__layout {
    display: grid;
    grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
    gap: clamp(18px, 2.6vw, 34px);
    align-items: stretch;
  }

  .tf-crm-page .tf-steps__visual,
  .tf-crm-page .tf-steps__stack {
    min-width: 0;
  }

  .tf-crm-page .tf-steps__visual {
    border-radius: 28px;
    padding: clamp(18px, 2vw, 24px);
    background: linear-gradient(180deg, rgba(100, 86, 255, 0.16) 0%, rgba(244, 246, 255, 0.98) 100%);
    border: 1px solid rgba(65, 103, 255, 0.14);
    box-shadow: 0 22px 60px rgba(15, 23, 42, 0.08);
  }

  .tf-crm-page .tf-steps__image-wrap {
    overflow: hidden;
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.9);
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.6);
  }

  .tf-crm-page .tf-steps__image {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .tf-crm-page .tf-step-card {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 16px;
    align-items: center;
    padding: 20px 22px;
    min-height: 132px;
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.92);
    border: 1px solid rgba(65, 103, 255, 0.16);
    box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
  }

  .tf-crm-page .tf-step-card + .tf-step-card {
    margin-top: 16px;
  }

  .tf-crm-page .tf-step-card__index {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    flex: 0 0 auto;
    font-size: 1.15rem;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(135deg, #5b4dff 0%, #2a5bff 100%);
    box-shadow: 0 12px 24px rgba(65, 103, 255, 0.22);
  }

  .tf-crm-page .tf-step-card__content {
    min-width: 0;
  }

  .tf-crm-page .tf-step-card__title {
    margin: 0;
    font-size: clamp(1rem, 1.15vw, 1.35rem);
    line-height: 1.2;
    color: #0f1e52;
  }

  .tf-crm-page .tf-step-card__text {
    margin: 8px 0 0;
    font-size: 0.96rem;
    line-height: 1.65;
    color: rgba(15, 30, 82, 0.72);
  }

  .tf-crm-page .tf-step-card__icon {
    width: 74px;
    height: 74px;
    border-radius: 20px;
    display: grid;
    place-items: center;
    color: #4167ff;
    background: linear-gradient(180deg, rgba(65, 103, 255, 0.1) 0%, rgba(65, 103, 255, 0.05) 100%);
    border: 1px solid rgba(65, 103, 255, 0.14);
    font-size: 1.8rem;
  }

  .tf-crm-page .tf-step-card--compact {
    min-height: 108px;
  }

  .tf-crm-page .tf-step-card--compact .tf-step-card__icon {
    width: 62px;
    height: 62px;
    font-size: 1.5rem;
  }

  .tf-crm-page .tf-step-card--compact .tf-step-card__text {
    margin-top: 6px;
  }

  @media (min-width: 1600px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 96px;
    }

    .tf-crm-page .tf-hero__content {
      max-width: 1040px;
    }

    .tf-crm-page .tf-hero__lead {
      font-size: 1.15rem;
    }
  }

  @media (min-width: 2200px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 102px;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(4.6rem, 3.9vw, 7.2rem);
    }

  }

  @media (max-width: 1199.98px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 88px;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(2.2rem, 4.9vw, 4.7rem);
    }

    .tf-crm-page .tf-brand-strip__inner {
      grid-template-columns: 1fr;
    }

    .tf-crm-page .tf-brand-strip__copy {
      padding-right: 0;
      padding-bottom: 18px;
      border-right: 0;
      border-bottom: 1px solid rgba(18, 48, 168, 0.12);
      text-align: center;
    }

    .tf-crm-page .tf-steps__layout {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 991.98px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 84px;
    }

    .tf-crm-page .tf-hero__content {
      max-width: min(760px, 94vw);
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(2.05rem, 5.8vw, 4rem);
      letter-spacing: -0.055em;
    }

    .tf-crm-page .tf-hero__lead {
      max-width: 56ch;
    }

  }

  @media (max-width: 767.98px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 92px;
      padding-bottom: 44px;
      background-position: center top;
    }

    .tf-crm-page .tf-hero__title > span {
      white-space: normal;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(2rem, 9.6vw, 3.45rem);
      line-height: 1;
    }

    .tf-crm-page .tf-hero__lead {
      margin-top: 18px;
      max-width: 40ch;
    }

    .tf-crm-page .tf-hero__buttons {
      gap: 12px;
      margin-top: 24px;
    }

    .tf-crm-page .tf-hero__button {
      width: 100%;
      min-height: 52px;
    }

    .tf-crm-page .tf-brand-strip {
      padding: 24px 0 34px;
    }

    .tf-crm-page .tf-brand-strip__title {
      font-size: 1.05rem;
    }

    .tf-crm-page .tf-steps__title {
      font-size: clamp(1.7rem, 8vw, 3rem);
    }

    .tf-crm-page .tf-steps__layout {
      grid-template-columns: 1fr;
    }

    .tf-crm-page .tf-steps__visual {
      padding: 14px;
      border-radius: 24px;
    }

    .tf-crm-page .tf-step-card {
      grid-template-columns: auto 1fr;
      align-items: flex-start;
      padding: 18px 18px;
    }

    .tf-crm-page .tf-step-card__icon {
      grid-column: 1 / -1;
      order: -1;
      width: 58px;
      height: 58px;
      margin-bottom: 6px;
      font-size: 1.35rem;
    }
  }

  @media (max-width: 575.98px) {
    .tf-crm-page .tf-section {
      padding: 68px 0;
    }

    .tf-crm-page .tf-hero.tf-section {
      padding-top: 88px;
      padding-bottom: 40px;
      background-position: center top;
    }

    .tf-crm-page .tf-hero__content {
      max-width: 100%;
      padding-top: 4px;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(1.9rem, 9.4vw, 3rem);
      letter-spacing: -0.05em;
    }

    .tf-crm-page .tf-hero__lead {
      margin-top: 14px;
      font-size: 0.98rem;
      line-height: 1.6;
    }

    .tf-crm-page .tf-hero__buttons {
      margin-top: 20px;
    }

  }

  @media (max-width: 420px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 84px;
      padding-bottom: 36px;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(1.7rem, 10vw, 2.55rem);
    }

    .tf-crm-page .tf-hero__lead {
      max-width: 32ch;
      font-size: 0.95rem;
    }

    .tf-crm-page .tf-hero__button {
      padding-inline: 16px;
      font-size: 13px;
    }

    .tf-crm-page .tf-brand-strip {
      padding: 20px 0 30px;
    }

    .tf-crm-page .tf-brand-strip__copy {
      text-align: left;
      padding-bottom: 16px;
    }

    .tf-crm-page .tf-brand-card {
      min-height: 78px;
      padding: 14px 16px;
      border-radius: 22px;
    }

    .tf-crm-page .tf-brand-card img {
      max-height: 28px;
    }

    .tf-crm-page .tf-steps {
      padding: 40px 0 78px;
    }

    .tf-crm-page .tf-steps__header {
      margin-bottom: 22px;
    }

    .tf-crm-page .tf-steps__lead {
      font-size: 0.94rem;
    }

    .tf-crm-page .tf-step-card {
      padding: 16px;
      border-radius: 18px;
      gap: 12px;
    }

    .tf-crm-page .tf-step-card__index {
      width: 48px;
      height: 48px;
      font-size: 1rem;
    }

    .tf-crm-page .tf-step-card__title {
      font-size: 1rem;
    }

    .tf-crm-page .tf-step-card__text {
      font-size: 0.9rem;
      line-height: 1.55;
    }

    .tf-crm-page .tf-step-card__icon {
      width: 52px;
      height: 52px;
      border-radius: 16px;
      font-size: 1.2rem;
    }
  }

  @media (max-width: 360px) {
    .tf-crm-page .tf-hero.tf-section {
      padding-top: 78px;
      padding-bottom: 32px;
    }

    .tf-crm-page .tf-hero__title {
      font-size: clamp(1.45rem, 11vw, 2.25rem);
    }

    .tf-crm-page .tf-hero__lead {
      max-width: 30ch;
      font-size: 0.9rem;
    }

    .tf-crm-page .tf-hero__button {
      min-height: 48px;
    }

    .tf-crm-page .tf-brand-card {
      min-height: 72px;
      padding: 12px 14px;
    }

    .tf-crm-page .tf-step-card {
      padding: 14px;
    }
  }

  @media (min-width: 992px) {
    .tf-crm-page .tf-hero__button--primary {
      min-width: 182px;
    }

    .tf-crm-page .tf-hero__button--ghost {
      min-width: 182px;
    }
  }
</style>

<main class="tf-crm-page">
  <section class="tf-hero tf-section">
    <div class="container position-relative">
      <div class="tf-hero__content">
        <div class="tf-hero__badge">CRM Development</div>
        <h1 class="tf-hero__title">
          <span>CRM Development Company</span>
          <br />
          <span>in <span class="tf-hero__accent">Mumbai</span></span>
        </h1>
        <p class="tf-hero__lead">Custom CRM solutions to manage leads, customers and business processes, built for growth and designed for you.</p>
        <div class="tf-hero__buttons">
          <a class="tf-hero__button tf-hero__button--primary" href="contact.php">
            <i class="fas fa-paper-plane" aria-hidden="true"></i>
            <span>Request a Demo</span>
          </a>
          <a class="tf-hero__button tf-hero__button--ghost" href="#crm-features">
            <i class="fas fa-chart-line" aria-hidden="true"></i>
            <span>Talk to Our Experts</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="tf-brand-strip">
    <div class="container">
      <div class="tf-brand-strip__inner">
        <div class="tf-brand-strip__copy">
          <p class="tf-brand-strip__eyebrow">Brand Partners</p>
          <h2 class="tf-brand-strip__title">Endorsed by innovative businesses that trust modern CRM workflows.</h2>
        </div>
        <div class="tf-brand-strip__slider">
          <div class="swiper brand">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand1.png" alt="Brand logo 1">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand2.png" alt="Brand logo 2">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand3.png" alt="Brand logo 3">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand4.png" alt="Brand logo 4">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand1.png" alt="Brand logo 1">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand2.png" alt="Brand logo 2">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand3.png" alt="Brand logo 3">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="tf-brand-card" href="#" title="Brand logo">
                  <img src="assets/images/brand/brand4.png" alt="Brand logo 4">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tf-steps">
    <div class="container">
      <div class="tf-steps__header">
        <h2 class="tf-steps__title">Get Started with CRM Development in 3 Easy Steps</h2>
        <p class="tf-steps__lead">Build a custom CRM solution with a streamlined process designed to improve workflows, customer management, and business growth.</p>
      </div>
      <div class="tf-steps__layout">
        <div class="tf-steps__visual">
          <div class="tf-steps__image-wrap">
            <img class="tf-steps__image" src="assets/images/CRM1.png" alt="CRM dashboard preview">
          </div>
        </div>
        <div class="tf-steps__stack">
          <article class="tf-step-card">
            <div class="tf-step-card__index">01</div>
            <div class="tf-step-card__content">
              <h3 class="tf-step-card__title">Discover &amp; Plan</h3>
              <p class="tf-step-card__text">We analyze your business needs, workflows, and customer journey to define the right CRM strategy.</p>
            </div>
            <div class="tf-step-card__icon" aria-hidden="true">
              <i class="fas fa-magnifying-glass-chart"></i>
            </div>
          </article>

          <article class="tf-step-card tf-step-card--compact">
            <div class="tf-step-card__index">02</div>
            <div class="tf-step-card__content">
              <h3 class="tf-step-card__title">Design &amp; Develop</h3>
              <p class="tf-step-card__text">Our team designs and develops a custom CRM with modules, automation, and integrations built for your process.</p>
            </div>
            <div class="tf-step-card__icon" aria-hidden="true">
              <i class="fas fa-code"></i>
            </div>
          </article>

          <article class="tf-step-card tf-step-card--compact">
            <div class="tf-step-card__index">03</div>
            <div class="tf-step-card__content">
              <h3 class="tf-step-card__title">Test &amp; Launch</h3>
              <p class="tf-step-card__text">We test, optimize, and deploy your CRM system to ensure smooth performance and long-term scalability.</p>
            </div>
            <div class="tf-step-card__icon" aria-hidden="true">
              <i class="fas fa-rocket"></i>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

</main>
