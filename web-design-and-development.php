<?php
$pageTitle = 'Web Design and Development | Technofra';
include __DIR__ . '/header.php';

// http://localhost/new-2026-technofra/index10.html  - banner
// http://localhost/new-2026-technofra/index10.html  - about
// services 
// http://localhost/new-2026-technofra/index16.html  - feature
// https://aiero-tech-template.netlify.app/index11   - partners list
// http://localhost/new-2026-technofra/index9.html   - our tech
// http://localhost/new-2026-technofra/index10.html  - faq
?>


<style>
    .tech-stack-v2 {
        position: relative;
        overflow: hidden;
        background: #f7f8fc;
    }

    .tech-stack-v2 .tech-stack-decor {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background-image: radial-gradient(rgba(59, 91, 254, 0.12) 1px, transparent 1px), radial-gradient(rgba(59, 91, 254, 0.08) 1px, transparent 1px);
        background-position: top right, bottom left;
        background-size: 18px 18px, 22px 22px;
        background-repeat: no-repeat;
        opacity: 0.9;
    }

    .tech-stack-v2 .container {
        position: relative;
        z-index: 1;
    }

    .tech-stack-v2 .tech-stack-panel {
        position: relative;
        padding: 96px 0;
    }

    .tech-stack-v2 .tech-stack-kicker {
        display: inline-block;
        color: #3b5bfe;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .tech-stack-v2 .tech-stack-title {
        color: #1a1a1a;
        line-height: 1.08;
    }

    .tech-stack-v2 .tech-stack-title .highlight {
        color: #3b5bfe;
    }

    .tech-stack-v2 .tech-stack-desc {
        max-width: 620px;
        color: #6b7280;
        margin-top: 18px;
        margin-bottom: 0;
    }

    .tech-stack-v2 .tech-stack-stat {
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        gap: 16px;
        margin-top: 10px;
    }

    .tech-stack-v2 .tech-stack-counter {
        display: flex;
        align-items: flex-start;
        line-height: 0.9;
        white-space: nowrap;
    }

    .tech-stack-v2 .tech-stack-counter .counter-number {
        color: #12224f;
        font-weight: 800;
        font-size: clamp(4rem, 8vw, 7rem);
        line-height: 0.9;
        letter-spacing: -0.06em;
        -webkit-text-stroke: 0;
        text-shadow: none;
    }

    .tech-stack-v2 .tech-stack-counter .counter-text {
        color: #12224f;
        font-size: clamp(1.6rem, 3vw, 2.3rem);
        font-weight: 800;
        margin-left: 4px;
        margin-top: 12px;
    }

    .tech-stack-v2 .tech-stack-label {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        color: #6b7280;
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .tech-stack-v2 .tech-stack-grid {
        margin-top: 40px;
    }

    .tech-stack-v2 .tech-stack-card {
        display: flex;
        align-items: center;
        gap: 14px;
        width: 100%;
        min-height: 60px;
        padding: 7px 10px;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
        text-decoration: none;
    }

    .tech-stack-v2 .tech-stack-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 32px rgba(15, 23, 42, 0.08);
        border-color: rgba(59, 91, 254, 0.18);
    }

    .tech-stack-v2 .tech-stack-icon {
        flex: 0 0 48px;
        width: 48px;
        height: 46px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(59, 91, 254, 0.08);
        color: #3b5bfe;
    }

    .tech-stack-v2 .tech-stack-icon i {
        font-size: 27px;
    }

    .tech-stack-v2 .tech-stack-icon.tech-html5 i {
        color: #e34f26 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-css3 i {
        color: #264de4 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-js i {
        color: #f7df1e !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-react i {
        color: #61dafb !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-bootstrap i {
        color: #7952b3 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-php i {
        color: #777bb4 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-laravel i {
        color: #ff2d20 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-node i {
        color: #68a063 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-python i {
        color: #3776ab !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-flutter i {
        color: #02569b !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-kotlin i {
        color: #7f52ff !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-swift i {
        color: #ff453a !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-mysql i {
        color: #00758f !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-mongo i {
        color: #47a248 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-postgres i {
        color: #336791 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-firebase i {
        color: #ffca28 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-wordpress i {
        color: #21759b !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-shopify i {
        color: #95bf47 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-woocommerce i {
        color: #7f54b3 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-github i {
        color: #24292e !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-figma i {
        color: #a259ff !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-aws i {
        color: #ff9900 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-google i {
        color: #4285f4 !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-docker i {
        color: #2496ed !important;
    }

    .tech-stack-v2 .tech-stack-icon.tech-cpanel i {
        color: #ff6c2c !important;
    }

    .tech-stack-v2 .tech-stack-card span:last-child {
        color: #111827;
        font-weight: 600;
        line-height: 1.2;
    }

    .tech-stack-v2 .tech-stack-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: 28px;
        padding: 14px 22px;
        border-radius: 12px;
        background: #12224f;
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 12px 24px rgba(18, 34, 79, 0.18);
        transition: transform 0.22s ease, box-shadow 0.22s ease, background-color 0.22s ease;
    }

    .tech-stack-v2 .tech-stack-cta:hover {
        background: #0d1a3d;
        transform: translateY(-1px);
        box-shadow: 0 16px 30px rgba(18, 34, 79, 0.24);
    }

    .tech-stack-v2 .tech-stack-cta i {
        font-size: 1rem;
        transform: translateY(-1px);
    }

    @media (max-width: 991.98px) {
        .tech-stack-v2 .tech-stack-panel {
            padding: 72px 0;
        }

        .tech-stack-v2 .tech-stack-stat {
            margin-top: 24px;
        }
    }

    @media (max-width: 575.98px) {
        .tech-stack-v2::before {
            width: 300px;
            height: 300px;
            top: -140px;
            right: -150px;
        }

        .tech-stack-v2::after {
            width: 220px;
            height: 220px;
            bottom: -110px;
            right: -110px;
        }
    }
</style>
<style>
    :root {
        --accent-green: #22c55e;
        --border-color: #e9ecf1;
        --card-bg: #fbfbfd;
        --text-dark: #12141a;
    }

    body {
        font-family: -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    /* ============ SECTION WRAPPER ============ */
    .trusted-section {
        background-color: #fbfbfd;
        background-image: radial-gradient(rgba(0, 0, 0, 0.035) 1px, transparent 1px);
        background-size: 14px 14px;
        padding: 56px 0 64px;
        border-top: 1px solid var(--border-color);
        overflow: hidden;
    }

    .trusted-heading {
        text-align: center;
        font-size: clamp(1.25rem, 1.6vw + 1rem, 1.75rem);
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 40px;
    }

    .trusted-heading .count {
        color: var(--accent-green);
        font-weight: 800;
    }

    /* ============ CAROUSEL TRACK ============ */
    .logo-carousel {
        position: relative;
        width: 100%;
        -webkit-mask-image: linear-gradient(to right, transparent 0, #000 60px, #000 calc(100% - 60px), transparent 100%);
        mask-image: linear-gradient(to right, transparent 0, #000 60px, #000 calc(100% - 60px), transparent 100%);
    }

    .logo-track {
        display: flex;
        align-items: stretch;
        gap: 20px;
        width: max-content;
        animation: scroll-left 28s linear infinite;
    }

    .logo-carousel:hover .logo-track {
        animation-play-state: paused;
    }

    @keyframes scroll-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ============ LOGO CARD ============ */
    .logo-card {
        flex: 0 0 auto;
        width: 200px;
        height: 96px;
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 18px;
        transition: box-shadow .2s ease, transform .2s ease, border-color .2s ease;
    }

    .logo-card:hover {
        box-shadow: 0 8px 20px rgba(18, 20, 26, 0.08);
        border-color: rgba(18, 20, 26, 0.12);
        transform: translateY(-2px);
    }

    .logo-card img,
    .logo-card svg {
        max-height: 60px;
        max-width: 100%;
    }

    .logo-mark {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 800;
        font-size: 1.05rem;
        letter-spacing: .2px;
        white-space: nowrap;
    }

    .logo-mark small {
        display: block;
        font-size: .55rem;
        font-weight: 700;
        letter-spacing: .12em;
        margin-top: 2px;
    }

    .logo-icon {
        width: 26px;
        height: 26px;
        flex: 0 0 auto;
    }

    /* Brand color variants (approximating reference logos) */
    .c-moto {
        color: #16a34a;
    }

    .c-qprint {
        color: #7c3aed;
    }

    .c-rrota {
        color: #111827;
    }

    .c-student {
        color: #7c3aed;
    }

    .c-p {
        color: #0891b2;
    }

    .c-adv {
        color: #1e3a8a;
        font-family: Georgia, 'Times New Roman', serif;
    }

    .c-almasi {
        color: #0f172a;
    }

    .c-barkod {
        color: #ea580c;
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 768px) {
        .logo-card {
            width: 160px;
            height: 84px;
            padding: 0 14px;
        }

        .logo-track {
            gap: 14px;
            animation-duration: 20s;
        }

        .trusted-heading {
            margin-bottom: 28px;
            padding: 0 16px;
        }
    }

    @media (max-width: 480px) {
        .logo-card {
            width: 140px;
            height: 76px;
        }

        .logo-mark {
            font-size: .92rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .logo-track {
            animation: none;
        }

        .logo-carousel {
            overflow-x: auto;
        }
    }

    .feature-sec14 {
        padding: 80px 0;
    }

    .feature-sec14 .feature-content12 .sub-title,
    .feature-sec14 .feature-content12 .title,
    .feature-sec14 .feature-content12 p,
    .feature-content12 .nav-tabs .nav-link {
        color: #1a1a1a;
    }

    .feature-content12 .nav-tabs .nav-item .active {
        color: #3b5bfe;
        border-color: #3b5bfe;
    }

    .feature-content12 .nav-tabs .nav-item .nav-link:hover {
        color: #3b5bfe;
    }

    .feature-content12 .tab-content .ibt-btn {
        color: #3b5bfe;
    }

    .hero-section10 .hero-content10 .hero-info10 .highlight {
        background-image: linear-gradient(90deg, #3d53fd 0%, #0037c1 100%);
        -webkit-background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
    }
</style>


<!-- Banner Section-->
<section class="hero-section10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="hero-content10">
                    <div class="hero-info10">
                        <h1 class="title">Web Design & Development
                            <span class="highlight">Company in Mumbai</span>
                        </h1>
                        <p>At Technofra, we create stunning, high-performance websites
                            that drive traffic, engage visitors, and convert leads into
                            customers. With 14+ years of experience, we deliver custom
                            website design and development services tailored for
                            businesses of all sizes.
                        </p>
                        <a class='ibt-btn ibt-btn-secondary' href='index10.html' target='_blank' title>
                            <span>Explore Services</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                    <div class="hero-contact10">
                        <span class="sub-title">Call us today:</span>
                        <a href="tel:8003508431" title="">+1 800 684 32 59</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="hero-img10">
                    <img src="assets/images/about/banner2.png" alt="AI Agency & Technology HTML Template">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="main-sec3">
    <!-- about-us-sec6 -->
    <div class="about-us-sec6 ibt-section-gap">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-4 col-lg-5">
                    <div class="about-counter6">
                        <div class="about-counter-content6">
                            <div class="counter-box15">
                                <span class="counter-number percent-counter2" data-target="250">0</span>
                                <span class="counter-text">+</span>
                            </div>
                            <span class="title">Web projects delivered</span>
                        </div>
                        <div class="about-counter-content6">
                            <div class="counter-box15">
                                <span class="counter-number percent-counter3" data-target="99">0</span>
                                <span class="counter-text">%</span>
                            </div>
                            <span class="title">Client satisfaction rate</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="about-content6">
                        <div class="sec-title mb-0">
                            <span class="sub-title">web solutions</span>
                            <h2 class="title animated-heading">Looking For The Best Web Design & Development Agency?
                            </h2>
                            <p>Looking for the best web design and development company to elevate your online presence? Technofra creates modern, user-friendly websites that engage audiences and deliver measurable results.
                            </p>
                            <p class="paragraph">Our experienced designers and developers combine creativity with
                                technical expertise to build custom web solutions tailored to your
                                business needs. From startups to established brands, we turn ideas into
                                powerful digital experiences.
                            </p>
                            <a class='ibt-btn ibt-btn-outline' href='index10.html' title>
                                <span>Explore more</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about-us-sec6 -->
</section>

<!-- Services Section -->

<!-- Features Section -->
<section class="feature-sec14">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-img14">
                    <img src="assets/images/about/about2.png" alt="AI Agency & Technology HTML Template">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-content12">
                    <div class="sec-title white">
                        <span class="sub-title">features</span>
                        <h2 class="title animated-heading">Everything you need for modern web design and development</h2>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Responsive Design</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Custom Development</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Performance & SEO</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>We design responsive interfaces that adapt smoothly across desktop, tablet, and mobile devices for a consistent user experience.</p>
                            <p>Every layout is built to feel clear, modern, and easy to navigate, helping your visitors find what they need faster.</p>
                            <a href="#" class="ibt-btn ibt-btn-outline-2">
                                <span>Explore more</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>We build custom websites and web applications with clean code, scalable structure, and business-specific functionality.</p>
                            <p>From front-end interactions to back-end integrations, we tailor the development process to match your goals and workflow.</p>
                            <a href="#" class="ibt-btn ibt-btn-outline-2">
                                <span>Explore more</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>We optimize websites for speed, search visibility, and conversion so your pages load faster and perform better.</p>
                            <p>Technical SEO, structured content, and performance improvements work together to help your business reach more people online.</p>
                            <a href="#" class="ibt-btn ibt-btn-outline-2">
                                <span>Explore more</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners List -->
<section class="trusted-section">
    <div class="container-fluid">
        <h2 class="trusted-heading">
            More than <span class="count">50+</span> brand trusted us worldwide
        </h2>
    </div>

    <div class="logo-carousel">
        <div class="logo-track" id="logoTrack">
            <div class="logo-card">
                <div class="logo-mark c-moto">
                    <img src="./assets/images/new/c1.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-qprint">
                    <img src="./assets/images/new/c2.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-rrota">
                    <img src="./assets/images/new/c3.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-student">
                    <img src="./assets/images/new/c4.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-p">
                    <img src="./assets/images/new/c5.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-adv">
                    <img src="./assets/images/new/c6.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-almasi">
                    <img src="./assets/images/new/c7.png" alt="Life Like">
                </div>
            </div>

            <div class="logo-card">
                <div class="logo-mark c-barkod">
                    <img src="./assets/images/new/c8.png" alt="Life Like">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our Technologies -->
<section class="lanuguage-sec tech-stack-v2">
    <div class="tech-stack-decor" aria-hidden="true"></div>
    <div class="container">
        <div class="tech-stack-panel">
            <div class="row align-items-end">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="sec-title mb-0">
                        <span class="sub-title tech-stack-kicker">our technology</span>
                        <h2 class="title animated-heading tech-stack-title">Our Technology Stack that powers <span class="highlight">websites, stores & apps</span>.</h2>
                        <p class="tech-stack-desc">We support proven technologies and integrations to deliver fast, accurate, and user-friendly experiences for every market.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="tech-stack-stat">
                        <div class="counter-box5 tech-stack-counter">
                            <span class="counter-number" data-target="30">0</span>
                            <span class="counter-text">+</span>
                        </div>
                        <span class="user tech-stack-label">Tools & <br />Integrations</span>
                    </div>
                </div>
            </div>
            <div class="row g-3 tech-stack-grid">
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-html5"><i class="fab fa-html5"></i></span><span>HTML5</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-css3"><i class="fab fa-css3-alt"></i></span><span>CSS3</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-js"><i class="fab fa-js-square"></i></span><span>JavaScript</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-react"><i class="fab fa-react"></i></span><span>React</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-bootstrap"><i class="fab fa-bootstrap"></i></span><span>Bootstrap</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-php"><i class="fab fa-php"></i></span><span>PHP</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-laravel"><i class="fab fa-laravel"></i></span><span>Laravel</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-node"><i class="fab fa-node-js"></i></span><span>Node.js</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-python"><i class="fab fa-python"></i></span><span>Python</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-flutter"><i class="fas fa-mobile-alt"></i></span><span>Flutter</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-kotlin"><i class="fab fa-android"></i></span><span>Kotlin</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-swift"><i class="fab fa-apple"></i></span><span>Swift</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-mysql"><i class="fas fa-database"></i></span><span>MySQL</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-mongo"><i class="fas fa-leaf"></i></span><span>MongoDB</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-postgres"><i class="fas fa-elephant"></i></span><span>PostgreSQL</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-firebase"><i class="fas fa-fire"></i></span><span>Firebase</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-wordpress"><i class="fab fa-wordpress"></i></span><span>WordPress</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-shopify"><i class="fab fa-shopify"></i></span><span>Shopify</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-woocommerce"><i class="fas fa-shopping-bag"></i></span><span>WooCommerce</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-github"><i class="fab fa-github"></i></span><span>GitHub</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-figma"><i class="fab fa-figma"></i></span><span>Figma</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-aws"><i class="fab fa-aws"></i></span><span>AWS</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-google"><i class="fab fa-google"></i></span><span>Google Cloud</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-docker"><i class="fas fa-docker"></i></span><span>Docker</span></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6"><a href="#" title="" class="tech-stack-card"><span class="tech-stack-icon tech-cpanel"><i class="fas fa-server"></i></span><span>cPanel</span></a></div>
            </div>
            <a class="tech-stack-cta" href="index9.html" title>
                <span>Explore Technology Stack</span>
                <i class="icon-arrow-top"></i>
            </a>
        </div>
    </div>
</section>

<!-- Portfolio Section -->

<!-- FAQ Section -->
<section class="faq-sec2 ibt-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="faq-img2">
                    <img src="assets/images/layers/layer2.png" alt="AI Agency & Technology HTML Template">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="faq-content">
                    <div class="sec-title">
                        <span class="sub-title">faq</span>
                        <h2 class="title animated-heading">Everything you need to know</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does a web design and development service include?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    A web design and development service typically includes strategy,
                                    UI/UX design, responsive page layouts, frontend development,
                                    backend functionality, content integration, and testing to ensure
                                    the website looks professional and works smoothly across devices.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take to build a website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    The timeline depends on the project size and complexity. A simple
                                    business website may take a few days to a couple of weeks, while a
                                    custom website with advanced features can take several weeks or
                                    longer.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Yes, responsive design is a standard part of modern web development.
                                    Your website should adapt to different screen sizes so it looks and
                                    functions well on desktops, tablets, and smartphones.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Can you redesign my existing website?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Yes, an existing website can be redesigned to improve its visual
                                    appeal, usability, speed, mobile experience, and conversion
                                    performance while keeping the content and core functionality intact.

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class='ibt-btn ibt-btn-outline' href='service.html' title>
                        <span>Explore More</span>
                        <i class="icon-arrow-top"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Duplicate the logo set once so the CSS translateX(-50%) loop is seamless
    const track = document.getElementById('logoTrack');
    track.innerHTML += track.innerHTML;
</script>

<?php include __DIR__ . '/footer.php'; ?>