<?php
$pageTitle = 'Portfolio || Technofra Website';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>
<style>
    .hero-style7 {
        position: relative;
        padding: 220px 0 70px;
    }

    .hero-style7 .hero-content7 .title {
        margin-bottom: 14px;
    }

    .hero-style7 .hero-content7 p {
        max-width: 720px;
    }

    .portfolio-showcase {
        position: relative;
        padding: 36px 0 100px;
        background:
            radial-gradient(circle at top left, rgba(86, 143, 255, 0.12), transparent 30%),
            radial-gradient(circle at bottom right, rgba(18, 201, 147, 0.10), transparent 26%),
            linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
    }

    .portfolio-intro {
        max-width: 860px;
        margin: 0 auto 34px;
        text-align: center;
    }

    .portfolio-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 9px 16px;
        border-radius: 999px;
        background: rgba(17, 24, 39, 0.06);
        color: #0f172a;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    .portfolio-title {
        font-size: clamp(2rem, 4vw, 3.6rem);
        line-height: 1.05;
        margin-bottom: 14px;
        color: #0f172a;
    }

    .portfolio-lead {
        max-width: 720px;
        margin: 0 auto;
        color: #475569;
        font-size: 17px;
        line-height: 1.8;
    }

    .portfolio-grid {
        row-gap: 30px;
    }

    .portfolio-card {
        position: relative;
        overflow: hidden;
        height: 100%;
        border-radius: 26px;
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.10);
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-8px);
        border-color: rgba(86, 143, 255, 0.18);
        box-shadow: 0 28px 65px rgba(15, 23, 42, 0.16);
    }

    .portfolio-card__image {
        position: relative;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        background: #0f172a;
    }

    .portfolio-card__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.001);
        transition: transform 0.45s ease, filter 0.45s ease;
    }

    .portfolio-card:hover .portfolio-card__image img {
        transform: scale(1.08);
        filter: saturate(1.05);
    }

    .portfolio-card__overlay {
        position: absolute;
        inset: auto 0 0 0;
        height: 62%;
        background: linear-gradient(180deg, rgba(15, 23, 42, 0.02) 0%, rgba(15, 23, 42, 0.78) 100%);
        pointer-events: none;
    }

    .portfolio-card__content {
        padding: 22px 22px 24px;
        background: #fff;
    }

    .portfolio-card__meta {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 16px;
    }

    .portfolio-card__heading {
        margin: 0;
        font-size: 1.18rem;
        line-height: 1.25;
        font-weight: 800;
        color: #0f172a;
    }

    .portfolio-card__tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 14px;
        border-radius: 999px;
        background: rgba(86, 143, 255, 0.10);
        color: #3559d4;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .portfolio-card__tag::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #3559d4;
        box-shadow: 0 0 0 5px rgba(53, 89, 212, 0.12);
    }

    @media (max-width: 991px) {
        .hero-style7 {
            padding: 180px 0 60px;
        }

        .portfolio-showcase {
            padding: 24px 0 80px;
        }
    }

    @media (max-width: 575px) {
        .portfolio-card__content {
            padding: 18px;
        }

        .portfolio-card__meta {
            flex-direction: column;
            align-items: flex-start;
        }

        .portfolio-card__heading {
            font-size: 1.06rem;
        }
    }
</style>


        <section class="hero-style7">
            <div class="container2">
                <div class="hero-content7">
                    <h1 class="title"><span>Our</span> Portfolios</h1>
                    <p>Convert text to natural-sounding speech. Customizable,
                        multilingual, and high-quality audio output.
                    </p>
                    <a class='ibt-btn ibt-btn-secondary' href='index7.html' target='_blank' title>
                        <span>Discover</span>
                        <i class="icon-arrow-top"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- End hero-style7 -->

        <!-- project-sec3 -->
        <section class="project-sec3">
            <h2 class="visually-hidden">Partner Section</h2>
            <div class="container2">
                <div class="project-track">
                    <div class="project-block3">
                        <img src="assets/images/project/project3-1.png" alt="AI Agency & Technology HTML Template">
                        <span class="text">Solutions</span>
                    </div>
                    <div class="project-block3">
                        <img src="assets/images/project/project3-2.png" alt="AI Agency & Technology HTML Template">
                    </div>
                    <div class="project-block3">
                        <img src="assets/images/project/project3-3.png" alt="AI Agency & Technology HTML Template">
                    </div>
                    <div class="project-block3">
                        <img src="assets/images/project/project3-4.png" alt="AI Agency & Technology HTML Template">
                        <span class="text v2">Creative</span>
                    </div>
                    <div class="project-block3">
                        <img src="assets/images/project/project3-5.png" alt="AI Agency & Technology HTML Template">
                    </div>
                    <div class="project-block3">
                        <img src="assets/images/project/project3-6.png" alt="AI Agency & Technology HTML Template">
                        <span class="text v3">Vision</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End project-sec3 -->
         <!-- newsection -->
                  <section class="portfolio-showcase">
    <div class="container2">
        <div class="portfolio-intro">
            <span class="portfolio-kicker">Portfolio Gallery</span>
            <h2 class="portfolio-title">Our Awesome Portfolio</h2>
            <p class="portfolio-lead">A polished 10-card portfolio grid designed for a balanced two-column layout on desktop and a smooth stacked layout on smaller screens.</p>
        </div>

        <div class="row portfolio-grid">
            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/1.png" alt="Brand identity portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Brand Identity System</h3>
                            <span class="portfolio-card__tag">Design 01</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/2.png" alt="Creative web portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Creative Web Experience</h3>
                            <span class="portfolio-card__tag">Design 02</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="frago.php">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/3.png" alt="Digital marketing portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Frago Matrix</h3>
                            <span class="portfolio-card__tag">Design 03</span>
                        </div>
                    </div>
                </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/4.png" alt="Modern app interface portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Modern App Interface</h3>
                            <span class="portfolio-card__tag">Design 04</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/5.png" alt="E-commerce storefront portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">E-Commerce Storefront</h3>
                            <span class="portfolio-card__tag">Design 05</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="texon.php">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/texon.png" alt="Creative studio portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Texon - Corporation</h3>
                            <span class="portfolio-card__tag">Design 06</span>
                        </div>
                    </div>
                </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/7.png" alt="Analytics dashboard portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Analytics Dashboard</h3>
                            <span class="portfolio-card__tag">Design 07</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/8.png" alt="Corporate presentation portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Corporate Presentation</h3>
                            <span class="portfolio-card__tag">Design 08</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="wotm.php">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/9.png" alt="Product launch portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">We Own The Move</h3>
                            <span class="portfolio-card__tag">Design 09</span>
                        </div>
                    </div>
                </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <article class="portfolio-card">
                    <div class="portfolio-card__image">
                        <img src="./assets/images/portfolios/10.png" alt="Premium landing page portfolio project">
                        <div class="portfolio-card__overlay"></div>
                    </div>
                    <div class="portfolio-card__content">
                        <div class="portfolio-card__meta">
                            <h3 class="portfolio-card__heading">Premium Landing Page</h3>
                            <span class="portfolio-card__tag">Design 10</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

          <!-- end section -->


<?php include __DIR__ . '/footer.php'; ?>
