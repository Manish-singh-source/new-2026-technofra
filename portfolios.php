<?php
$pageTitle = 'Our Work | Technofra Portfolio - Web, App & Digital Projects';
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

    .project-track {
        padding: 15px;
    }

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        letter-spacing: normal;
    }

    @media (max-width: 1024px) {
        .hero-style7 {
            padding: 135px 0 60px;
        }
    }

    @media (max-width: 425px) {
        .hero-style7 {
            padding: 120px 0 60px;
        }
    }
</style>


<section class="hero-style7">
    <div class="container2">
        <div class="hero-content7">
            <h1 class="title"><span>Our</span> Portfolios</h1>
            <p>Discover our portfolio of client websites, built with clean design, smooth performance, and business-focused digital experiences.</p>
            <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='contact.php'>
                <span>Contact Us</span>
                <i class="icon-arrow-top"></i>
            </a>
        </div>
    </div>
</section>

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

<section class="portfolio-showcase">
    <div class="container2">
        <div class="portfolio-intro">
            <span class="portfolio-kicker">Portfolio Gallery</span>
            <h2 class="portfolio-title">Our Awesome Portfolio</h2>
            <p class="portfolio-lead">Browse our latest client website projects, crafted with modern design, responsive layouts, and user-friendly experiences that help each brand stand out online.</p>
        </div>
        <div class="row portfolio-grid">

            <div class="col-lg-6 col-md-6">
                <a href="frago.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/3.png" alt="Digital marketing portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Frago Matrix</h3>
                                <span class="portfolio-card__tag">Portfolio 01</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="aeritx.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/2.png" alt="Creative web portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Aeritx</h3>
                                <span class="portfolio-card__tag">Portfolio 02</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>



            <div class="col-lg-6 col-md-6">
                <a href="vkpaints.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/vkpaints.png" alt="Modern app interface portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Oceanic Paints</h3>
                                <span class="portfolio-card__tag">Portfolio 03</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="wotm.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/9.png" alt="Product launch portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">We Own The Move</h3>
                                <span class="portfolio-card__tag">Portfolio 04</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="texon.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/texon.png" alt="Creative studio portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Texon - Corporation</h3>
                                <span class="portfolio-card__tag">Portfolio 05</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="sapphire.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/7.png" alt="Analytics dashboard portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Sapphire</h3>
                                <span class="portfolio-card__tag">Portfolio 06</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="sukanya.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/8.png" alt="Corporate presentation portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Sukanya India</h3>
                                <span class="portfolio-card__tag">Portfolio 07</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="ish.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/5.png" alt="Corporate presentation portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">ISH International</h3>
                                <span class="portfolio-card__tag">Portfolio 08</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>


            <div class="col-lg-6 col-md-6">
                <a href="wrappackncarry.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/wrappackncarry.webp" alt="Corporate presentation portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Wrap Pack N Carry</h3>
                                <span class="portfolio-card__tag">Portfolio 09</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="aakriti-space.php" target="_blank">
                    <article class="portfolio-card">
                        <div class="portfolio-card__image">
                            <img src="./assets/images/portfolios/aakritispacedesigns.webp" alt="Corporate presentation portfolio project">
                            <div class="portfolio-card__overlay"></div>
                        </div>
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__meta">
                                <h3 class="portfolio-card__heading">Aakriti Space Designs</h3>
                                <span class="portfolio-card__tag">Portfolio 10</span>
                            </div>
                        </div>
                    </article>
                </a>
            </div>

        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>