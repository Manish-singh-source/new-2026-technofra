<?php
$pageTitle = 'Dynarx Technology (India) Ltd. | Specialty Chemicals, Iodine Compounds, Polymer Additives, Pharmaceutical Intermediates';
include __DIR__ . '/header.php';
?>



<style>
  /* ============================================
     RESPONSIVE TYPOGRAPHY SCALE
     ============================================ */
  :root{
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

    /* Brand colors pulled from the design */
    --dynarx-dark: #17233c;
    --dynarx-teal: #1e9e8c;
    --dynarx-teal-dark: #16786a;
    --dynarx-teal-light: #e8f6f3;
    --dynarx-text-muted: #4b5768;
    --dynarx-bg-start: #f3f6f8;
    --dynarx-bg-end: #dcefec;
  }

  body{
    font-family: 'Poppins', sans-serif;
  }

  /* ============================================
     HERO SECTION (banner style)
     ------------------------------------------------
     Add your background image here. Replace the url()
     below with your image path. The gradient overlay stays
     on top of it so the text always remains readable no
     matter what image is used.
     ============================================ */
  .dynarx-hero{
    position: relative;
    background-image:
     
      url('./assets/images/portfolios/dynarx/01.png');            /* <-- put your banner image URL inside url('') */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-color: var(--dynarx-bg-start); /* fallback if no image is set */
    padding-top: clamp(3rem, 2rem + 5vw, 7rem);
    padding-bottom: clamp(3rem, 2rem + 5vw, 7rem);
    min-height: clamp(420px, 55vw, 640px);
    display: flex;
    align-items: center;
    overflow: hidden;
    margin-top: 50px;
  }

  .dynarx-hero .container{
    max-width: 1600px;
    position: relative;
    z-index: 2;
  }

  /* Text content wrapper: capped width so copy never stretches
     edge-to-edge or overlaps the background artwork */
  .dynarx-hero-content{
    max-width: 720px;
    width: 100%;
  }

  /* Badge */
  .dynarx-badge{
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #fff;
    color: var(--dynarx-teal);
    font-weight: 600;
    font-size: var(--p-small);
    letter-spacing: 0.03em;
    padding: 0.6rem 1.4rem;
    border-radius: 50px;
    box-shadow: 0 4px 14px rgba(23, 35, 60, 0.06);
    margin-bottom: clamp(1.25rem, 1rem + 1vw, 2rem);
  }

  /* Heading */
  .dynarx-hero h1{
    font-weight: 800;
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-size: var(--h1);
    margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.75rem);
    word-wrap: break-word;
  }

  .dynarx-hero h1 .line-dark{
    color: var(--dynarx-dark);
    display: block;
  }

  .dynarx-hero h1 .line-teal{
    color: var(--dynarx-teal);
    display: block;
  }

  /* Paragraph */
  .dynarx-hero p.dynarx-lead{
    font-size: var(--p-large);
    line-height: var(--lh-body);
    color: var(--dynarx-text-muted);
    max-width: 640px;
    margin-bottom: clamp(1.5rem, 1.2rem + 1.2vw, 2.25rem);
  }

  /* CTA Buttons */
  .dynarx-cta-group{
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .dynarx-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.65rem;
    font-weight: 600;
    font-size: var(--p);
    padding: 0.95rem 1.9rem;
    border-radius: 50px;
    text-decoration: none;
    white-space: nowrap;
    transition: all 0.25s ease;
    border: 2px solid transparent;
  }

  .dynarx-btn-primary{
    background: var(--dynarx-teal);
    color: #fff;
  }
  .dynarx-btn-primary:hover{
    background: var(--dynarx-teal-dark);
    color: #fff;
    transform: translateY(-2px);
  }

  .dynarx-btn-outline{
    background: #fff;
    color: var(--dynarx-teal);
    border-color: #e3ebe9;
  }
  .dynarx-btn-outline:hover{
    background: var(--dynarx-teal-light);
    color: var(--dynarx-teal-dark);
    transform: translateY(-2px);
  }

  .dynarx-btn i{
    font-size: 0.9em;
    transition: transform 0.25s ease;
  }
  .dynarx-btn:hover i{
    transform: translateX(3px);
  }

  /* ============================================
     MEDIA QUERIES
     ============================================ */

  @media (max-width: 1919.98px){
    .dynarx-hero .container{ max-width: 1400px; }
  }

  @media (max-width: 1599.98px){
    .dynarx-hero .container{ max-width: 1400px; }
    .dynarx-hero-content{ max-width: 680px; }
  }

  @media (max-width: 1399.98px){
    .dynarx-hero .container{ max-width: 1140px; }
    .dynarx-hero-content{ max-width: 640px; }
  }

  @media (max-width: 1199.98px){
    .dynarx-hero .container{ max-width: 960px; }
    .dynarx-hero-content{ max-width: 600px; }
    .dynarx-cta-group{ gap: 0.75rem; }
    .dynarx-btn{ padding: 0.85rem 1.5rem; }
  }

  @media (max-width: 991.98px){
    .dynarx-hero{ min-height: clamp(380px, 60vw, 560px); }
    .dynarx-hero-content{ max-width: 100%; }
  }

  @media (max-width: 767.98px){
    .dynarx-hero{
      text-align: center;
      padding-top: 2.5rem;
      padding-bottom: 2.5rem;
      min-height: auto;
    }
    .dynarx-hero-content{ margin: 0 auto; }
    .dynarx-hero p.dynarx-lead{ margin-left: auto; margin-right: auto; }
    .dynarx-cta-group{ justify-content: center; flex-direction: column; align-items: stretch; width: 100%; max-width: 340px; margin: 0 auto; }
    .dynarx-btn{ width: 100%; }
  }

  @media (max-width: 575.98px){
    .dynarx-badge{ font-size: var(--caption); padding: 0.5rem 1.1rem; }
  }

  @media (max-width: 479.98px){
    .dynarx-hero{ padding-top: 2rem; padding-bottom: 2rem; }
    .dynarx-btn{ font-size: var(--p-small); padding: 0.8rem 1.2rem; }
  }

  @media (max-width: 359.98px){
    .dynarx-badge{ padding: 0.45rem 0.9rem; }
  }

  /* ============================================
     RESPONSIVE TYPOGRAPHY SCALE
     ============================================ */
  :root{
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

    /* Brand colors pulled from the design */
    --dynarx-dark: #14181f;
    --dynarx-teal: #1a8f82;
    --dynarx-teal-dark: #10665c;
    --dynarx-teal-light: #e6f4f2;
    --dynarx-teal-band-start: #1c9186;
    --dynarx-teal-band-end: #2ba79a;
    --dynarx-text-muted: #5b6472;
    --dynarx-bg: #f4f6f8;
  }

  body{
    font-family: 'Poppins', sans-serif;
  }

  /* ============================================
     SECTION WRAPPER
     ============================================ */
  .dynarx-devices-section{
    position: relative;
    background: var(--dynarx-bg);
    padding-top: clamp(2.5rem, 2rem + 2vw, 4rem);
    padding-bottom: clamp(2.5rem, 2rem + 2vw, 4rem);
    overflow: hidden;
  }

  .dynarx-devices-section .container{
    max-width: 1600px;
    position: relative;
  }

  /* Eyebrow label */
  .dynarx-eyebrow{
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    color: var(--dynarx-teal);
    font-weight: 700;
    font-size: var(--p-small);
    letter-spacing: 0.08em;
    margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
  }

  .dynarx-eyebrow::before{
    content: "";
    display: inline-block;
    width: 32px;
    height: 2px;
    background: var(--dynarx-teal);
  }

  /* Heading */
  .dynarx-devices-heading{
    font-weight: 800;
    line-height: var(--lh-heading);
    letter-spacing: var(--ls-heading);
    font-size: var(--h1);
    margin-bottom: clamp(1rem, 0.8rem + 1vw, 1.5rem);
    word-wrap: break-word;
  }
  .dynarx-devices-heading .line-dark{
    color: var(--dynarx-dark);
    display: block;
  }
  .dynarx-devices-heading .line-teal{
    color: var(--dynarx-teal);
    display: block;
  }

  /* Paragraph */
  .dynarx-devices-text p{
    font-size: var(--p);
    line-height: var(--lh-body);
    color: var(--dynarx-text-muted);
    margin-bottom: 0.5rem;
    max-width: 640px;
    word-wrap: break-word;
  }
  .dynarx-devices-text p:last-child{ margin-bottom: 0; }

  /* Top-right CTA + floating social icons */
  .dynarx-devices-top-right{
    display: flex;
    align-items: flex-start;
    justify-content: flex-end;
    gap: 1rem;
    height: 100%;
  }

  .dynarx-pill-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
    font-weight: 600;
    font-size: var(--p);
    color: var(--dynarx-teal);
    background: transparent;
    border: 2px solid var(--dynarx-teal);
    border-radius: 50px;
    padding: 0.85rem 1.9rem;
    white-space: nowrap;
    text-decoration: none;
    transition: all 0.25s ease;
  }
  .dynarx-pill-btn:hover{
    background: var(--dynarx-teal);
    color: #fff;
  }

  .dynarx-float-icons{
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .dynarx-float-icon{
    width: 52px;
    height: 52px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1.15rem;
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    text-decoration: none;
  }
  

  /* ============================================
     TEAL BAND + DEVICE MOCKUP IMAGE
     ============================================ */
  .dynarx-device-band{
    position: relative;
    margin-top: clamp(2.5rem, 2rem + 2.5vw, 4rem);
    background: linear-gradient(120deg, var(--dynarx-teal-band-start) 0%, var(--dynarx-teal-band-end) 100%);
    border-radius: 28px;
    padding: clamp(2rem, 1.5rem + 3vw, 4rem) clamp(1rem, 0.5rem + 3vw, 3rem);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  /* decorative dot grid, bottom-left */
  .dynarx-device-band::before{
    content: "";
    position: absolute;
    left: clamp(1rem, 3vw, 3rem);
    bottom: clamp(1rem, 3vw, 3rem);
    width: 90px;
    height: 90px;
    background-image: radial-gradient(rgba(255,255,255,0.35) 1.5px, transparent 1.5px);
    background-size: 12px 12px;
    opacity: 0.6;
    pointer-events: none;
  }

  /* decorative square outline, top-right */
  .dynarx-device-band::after{
    content: "";
    position: absolute;
    right: clamp(0.5rem, 2vw, 2rem);
    top: clamp(0.5rem, 2vw, 2rem);
    width: 110px;
    height: 110px;
    border: 2px solid rgba(255,255,255,0.25);
    border-radius: 16px;
    pointer-events: none;
  }

  .dynarx-device-img-wrap{
    position: relative;
    width: 100%;
    max-width: 1400px;
    z-index: 1;
  }

  .dynarx-device-img-wrap img{
    width: 100%;
    height: auto;
    display: block;
  }

  /* ============================================
     DEVICE TYPE LEGEND (Mobile / Tablet / Desktop)
     ============================================ */
  .dynarx-legend{
    margin-top: clamp(2rem, 1.6rem + 1.5vw, 3rem);
  }

  .dynarx-legend-item{
    display: flex;
    align-items: flex-start;
    gap: 1rem;
  }

  .dynarx-legend-icon{
    width: 52px;
    height: 52px;
    min-width: 52px;
    border-radius: 50%;
    background: var(--dynarx-teal);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
  }

  .dynarx-legend-item h6{
    font-size: var(--h5);
    font-weight: 700;
    color: var(--dynarx-dark);
    margin-bottom: 0.2rem;
    line-height: var(--lh-tight);
  }

  .dynarx-legend-item p{
    font-size: var(--p-small);
    color: var(--dynarx-text-muted);
    margin-bottom: 0;
    line-height: var(--lh-body);
    word-wrap: break-word;
  }

  /* ============================================
     MEDIA QUERIES
     ============================================ */

  @media (max-width: 1919.98px){
    .dynarx-devices-section .container{ max-width: 1400px; }
  }

  @media (max-width: 1599.98px){
    .dynarx-devices-section .container{ max-width: 1200px; }
  }

  @media (max-width: 1399.98px){
    .dynarx-devices-section .container{ max-width: 1140px; }
    .dynarx-device-img-wrap{ max-width: 1100px; }
  }

  @media (max-width: 1199.98px){
    .dynarx-devices-section .container{ max-width: 960px; }
    .dynarx-devices-top-right{ justify-content: flex-start; margin-top: 1.5rem; }
    .dynarx-float-icons{ flex-direction: row; }
  }

  @media (max-width: 991.98px){
    .dynarx-devices-heading{ text-align: center; }
    .dynarx-devices-text{ text-align: center; }
    .dynarx-devices-text p{ margin-left: auto; margin-right: auto; }
    .dynarx-eyebrow{ justify-content: center; width: 100%; }
    .dynarx-devices-top-right{ justify-content: center; margin-top: 1.5rem; }
    .dynarx-legend-item{ flex-direction: column; align-items: center; text-align: center; }
    .dynarx-legend-icon{ margin-bottom: 0.25rem; }
  }

  @media (max-width: 767.98px){
    .dynarx-device-band{ border-radius: 20px; padding: 1.75rem 1rem; }
    .dynarx-device-band::before,
    .dynarx-device-band::after{ display: none; }
    .dynarx-legend .col-md-4{ margin-bottom: 1.5rem; }
    .dynarx-legend .col-md-4:last-child{ margin-bottom: 0; }
  }

  @media (max-width: 575.98px){
    .dynarx-pill-btn{ font-size: var(--p-small); padding: 0.7rem 1.4rem; }
    .dynarx-float-icon{ width: 44px; height: 44px; font-size: 1rem; }
    .dynarx-device-band{ padding: 1.25rem 0.75rem; }
  }

  @media (max-width: 479.98px){
    .dynarx-devices-section{ padding-top: 2rem; padding-bottom: 2rem; }
    .dynarx-legend-icon{ width: 44px; height: 44px; min-width: 44px; font-size: 1rem; }
  }

  @media (max-width: 359.98px){
    .dynarx-pill-btn{ padding: 0.6rem 1.1rem; }
  }
</style>


<section class="dynarx-hero">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="dynarx-hero-content">

          <span class="dynarx-badge">
            <i class="fa-solid fa-flask"></i> DYNARX TECHNOLOGY
          </span>

          <h1>
            <span class="line-dark">Advanced Chemistry</span>
            <span class="line-teal">for Every Industry</span>
          </h1>

          <p class="dynarx-lead">
            Dynarx Technology (India) Ltd. specializes in specialty chemicals, iodine-based
            compounds, polymeric additives, and pharmaceutical intermediates&mdash;delivering
            expertise, innovation, and uncompromised quality for a sustainable tomorrow.
          </p>

          <div class="dynarx-cta-group">
            <a href="#" class="dynarx-btn dynarx-btn-primary">
              Explore Products <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="#" class="dynarx-btn dynarx-btn-outline">
              About Us <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class="dynarx-devices-section">
  <div class="container">

    <div class="row align-items-start g-4">
      <!-- LEFT: Heading + copy -->
      <div class="col-12 col-lg-8">
        <span class="dynarx-eyebrow">DYNARX ON EVERY DEVICE</span>

        <h2 class="dynarx-devices-heading">
          <span class="line-dark">Built to Perform.</span>
          <span class="line-teal">Seamless on Every Screen.</span>
        </h2>

        <div class="dynarx-devices-text">
          <p>Our website is fully responsive and optimized for all screen sizes.</p>
          <p>Get the best experience whether you&rsquo;re on a desktop, tablet, or mobile device.</p>
        </div>
      </div>

      <!-- RIGHT: CTA + floating social icons -->
      <div class="col-12 col-lg-4">
        <div class="dynarx-devices-top-right">
          <a href="#" class="dynarx-pill-btn">Explore More</a>
          <!-- <div class="dynarx-float-icons">
            <a href="#" class="dynarx-float-icon chat" aria-label="Chat with us">
              <i class="fa-solid fa-comment-dots"></i>
            </a>
            <a href="#" class="dynarx-float-icon whatsapp" aria-label="Chat on WhatsApp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Teal band with device mockup image -->
    <div class="dynarx-device-band">
      <div class="dynarx-device-img-wrap">
        <img src="./assets/images/portfolios/dynarx/dynarx-devices-mockup.png" alt="Dynarx Technology website shown on mobile, tablet, and desktop devices" loading="lazy">
      </div>
    </div>

    <!-- Legend: Mobile / Tablet / Desktop -->
    <div class="dynarx-legend">
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <div class="dynarx-legend-item">
            <span class="dynarx-legend-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
            <div>
              <h6>Mobile</h6>
              <p>Optimized for on-the-go experience</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="dynarx-legend-item">
            <span class="dynarx-legend-icon"><i class="fa-solid fa-tablet-screen-button"></i></span>
            <div>
              <h6>Tablet</h6>
              <p>Perfect balance of view and usability</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="dynarx-legend-item">
            <span class="dynarx-legend-icon"><i class="fa-solid fa-display"></i></span>
            <div>
              <h6>Desktop</h6>
              <p>Enhanced for productivity and clarity</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
