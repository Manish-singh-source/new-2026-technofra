<?php include __DIR__ . '/header.php'; ?>
<style>
    .creative-banner-sec {
        position: relative;
        overflow: hidden;
        padding: 78px 0;
        background: linear-gradient(90deg, rgba(5, 12, 18, 0.92) 0%, rgb(8 22 31 / 17%) 34%, rgba(12, 44, 57, 0.58) 100%), radial-gradient(circle at 68% 26%, rgba(255, 244, 214, 0.28), transparent 26%), url(./assets/images/new/bannerhome.png) center center / cover no-repeat fixed;
    }

    .creative-banner-sec::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 74% 30%, rgba(255, 255, 255, 0.22), transparent 0 38%),
            radial-gradient(circle at 82% 54%, rgba(255, 255, 255, 0.14), transparent 0 28%),
            linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
        pointer-events: none;
    }

    .creative-banner-wrap {
        position: relative;
        z-index: 1;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 34px;
    }

    .creative-banner-top {
        display: flex;
        justify-content: flex-end;
    }

    .creative-banner-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        border: 1px solid rgba(255, 255, 255, 0.42);
        border-radius: 999px;
        color: #fff;
        font-size: 16px;
        line-height: 1;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
    }

    .creative-banner-content {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 40px;
    }

    .creative-banner-copy {
        max-width: 560px;
    }

    .creative-banner-title {
        margin: 0 18px 8px 0;
        color: #fff;
        font-size: clamp(28px, 4vw, 40px);
        line-height: 0.95;
        letter-spacing: -0.05em;
    }

    .creative-banner-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 18px;
        margin-top: 28px;
    }

    .creative-banner-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 22px;
        border: 1px solid rgba(255, 255, 255, 0.22);
        background: rgba(255, 255, 255, 0.16);
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .creative-banner-btn:hover {
        background: rgba(255, 255, 255, 0.24);
        color: #fff;
    }

    .creative-banner-time {
        color: rgba(255, 255, 255, 0.88);
        font-size: 16px;
    }

    .creative-banner-text {
        max-width: 420px;
        margin: 0 18px 8px 0;
        color: rgba(255, 255, 255, 0.94);
        font-size: 19px;
        line-height: 1.45;
        text-align: right;
    }

    @media (max-width: 991px) {
        .creative-banner-sec {
            padding: 60px 0;
            background-attachment: scroll;
        }

        .creative-banner-top {
            display: flex;
            justify-content: center;
        }

        .creative-banner-wrap {
            min-height: auto;
            gap: 40px;
        }

        .creative-banner-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .creative-banner-text {
            max-width: 100%;
            text-align: left;
            font-size: 22px;
        }
    }

    @media (max-width: 767px) {
        .creative-banner-sec {
            padding: 60px 0;
        }

        .creative-banner-badge {
            font-size: 14px;
            padding: 9px 16px;
        }

        .creative-banner-title {
            font-size: clamp(36px, 8vw, 52px);
        }

        .creative-banner-actions {
            align-items: flex-start;
            gap: 14px;
        }

        .creative-banner-btn {
            padding: 14px 20px;
        }

        .creative-banner-time {
            font-size: 16px;
        }

        .creative-banner-text {
            font-size: 16px;
            line-height: 1.5;
        }

        .mobile-view-off {
            display: none;
        }

        .feature-sec7,
        .industries-sec {
            padding-top: 40px;
        }
    }

    @media (max-width: 430px) {
        .ser-card3 .ser-content {
            top: 40px;
        }

        .calendar-head {
            flex-direction: column-reverse;
        }
    }
</style>

<!-- hero-style4 -->
<section class="hero-style4">
    <div class="hero-bg4" aria-hidden="true">
        <video class="hero-video4" autoplay muted loop playsinline preload="metadata">
            <source src="assets/images/new/technofra_hero.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay4"></div>
    </div>
</section>
<!-- End hero-style4 -->

<!-- service-sec8 -->
<section class="service-sec8 pt-3">
    <div class="container2">
        <div class="service-content3">
            <div class="ser-card3">
                <img src="assets/images/new/web.png" alt="Professional Web Development for Your Business Growth">
                <div class="ser-content3">
                    <h4 class="title">Professional Web Development for Your Business Growth</h4>
                    <a class='ser-btn3' href='web-design-and-development.php' title>Explore more</a>
                </div>
                <a href="javascript::void(0)" class="ser-btn">
                    <i class="icon fontello icon-button-arrow"></i>
                    <i class="icon2 fontello icon-button-arrow"></i>
                </a>
            </div>
            <div class="ser-card3 v2">
                <img src="assets/images/new/app.png" alt="Custom App Development for Smooth Business Operations">
                <a href="javascript::void(0)" class="view-btn">
                    <i class="icon fontello icon-button-arrow"></i>
                    <i class="icon2 fontello icon-button-arrow"></i>
                </a>
                <div class="ser-team">
                    <h4 class="title">Custom App Development for Smooth Business Operations</h4>
                    <p>Build powerful mobile applications with smart features.
                        Improve customer experience and business growth
                    </p>
                    <div class="ser-team-info">
                        <div class="counter-box3 m-0">
                            <span class="counter-number" data-target="20">0</span>
                            <span class="counter-text">k+</span>
                        </div>
                        <span class="user">app users </span>
                    </div>
                </div>
            </div>
            <div class="ser-card3 v1">
                <img src="assets/images/new/support.png" alt="Technical support for the entire service life">
                <div class="ser-content">
                    <h4 class="title">Technical support for
                        the entire service life
                    </h4>
                    <p>Instant assistance for all your queries. Experience seamless service with our AI-powered
                        support</p>
                    <img src="assets/images/icon/phone2.svg" alt="Technical support for the entire service life">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service-sec8 -->

<!-- service-sec7 -->
<section class="service-sec7 mb-0">
    <div class="container2">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-content7">
                    <h4 class="title">We prouduly work with our brands</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-box7">
                    <div class="social-link3">
                        <img src="assets/images/new/b1.png" alt="Blue Orbith">
                        <a href="https://blueorbith.com/" target="_blank" rel="noopener noreferrer"><span>Blue Orbith</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b2.png" alt="Grid Infinity">
                        <a href="https://gridinfinity.com/" target="_blank" rel="noopener noreferrer"><span>Grid Infinity</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b3.png" alt="Mark Idenititiz">
                        <a href="https://markidentitiez.com/" target="_blank" rel="noopener noreferrer"><span>Mark Idenititiz</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b4.png" alt="Digi Kcon">
                        <a href="https://digikcon.com/" target="_blank" rel="noopener noreferrer"><span>Digi Kcon</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service-sec7 -->

<!-- service-sec17 -->
<section class="feature-sec7 ibt-section-gapTop ibt-section-gapBottom" id="fature-down">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ser-content7">
                    <div class="sec-title">
                        <span class="sub-title"><span class="sub-text" style="overflow: hidden; display: inline-block; width: 142px;">Services We Provide</span></span>
                        <h2 class="title animated-heading">Services We Provide</h2>
                        <p>We build digital products and growth systems for companies that want stronger online presence, better performance, and measurable results.</p>
                        <a class="ibt-btn ibt-btn-outline" href="web-design-and-development.php" title="">
                            <span>Explore more</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                    <div class="about-counter">
                        <div class="counter-box4">
                            <span class="counter-number" data-target="550">550</span>
                            <span class="counter-text">+</span>
                        </div>
                        <span class="solutions">Successful projects delivered</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-info7">
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-blue">
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title">
                                <a href="web-design-and-development.php">Web</a>/<a href="/android-app-development.php" title="Android App Development">App</a> development
                            </h4>
                            <p>Responsive websites, web apps, and mobile-ready experiences built for speed and usability.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-orange">
                            <i class="fa-solid fa-bag-shopping" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title"><a href="shopify-development.php">E-commerce development</a></h4>
                            <p>Online stores, product catalogs, cart flows, and checkout experiences that convert.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-purple">
                            <i class="fa-solid fa-pen-nib" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title"><a href="https://markidentitiez.com/" target="_blank">Branding</a></h4>
                            <p>Logo systems, visual identity, and messaging that make your business memorable.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-green">
                            <i class="fa-solid fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7 mb-0">
                            <h4 class="title"><a href="digital-marketing.php">Digital Marketing</a></h4>
                            <p>SEO, social media, paid ads, and content marketing that helps brands grow online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service-sec17 -->

<!-- client-trust-style -->
<section class="client-trust-sec1">
    <div class="container">
        <div class="client-trust-wrap1">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="client-trust-content1">
                        <span class="sub-title">[ Our Clients ]</span>
                        <h2 class="title">Trusted by 500+ clients worldwide from diverse industries.</h2>
                        <p>We partner with startups, SMEs, and enterprises across the globe, delivering innovative
                            IT solutions that drive growth, efficiency, and long-term success.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-trust-visual1">
                        <div class="client-trust-map1" aria-hidden="true">
                            <img src="assets/images/layers/map-layer.png" alt="">
                        </div>
                        <div class="client-trust-figure1">
                            <span class="count">500+</span>
                            <span class="label">Happy Clients Worldwide</span>
                        </div>
                        <div class="client-trust-grid1">
                            <div class="client-brand-card1"><img src="./assets/images/new/c1.png" alt="Frago Matric" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c2.png" alt="Life Like" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c3.png" alt="Sanjay Agencies" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c4.png" alt="Urbon Sports" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c5.png" alt="Aeritx" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c7.png" alt="ChemPharma" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c8.png" alt="Indore" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c9.png" alt="Global Ocean Beyond Logistics" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c10.png" alt="VLegends" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c6.png" alt="Aspirias" srcset=""></div>
                        </div>
                        <div class="client-trust-note1">
                            <i class="fontello icon-check-circle"></i>
                            <span>Long-term relationships built on trust, quality, and results.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End client-trust-style -->

<!-- creative-banner-sec -->
<section class="creative-banner-sec">
    <div class="container">
        <div class="creative-banner-wrap">
            <div class="creative-banner-top">
                <span class="creative-banner-badge">Your End-to-End Digital & Branding Partner</span>
            </div>
            <div class="creative-banner-content">
                <div class="creative-banner-copy">
                    <h2 class="creative-banner-title">Your End-to-End Digital &<br>Branding Partner For Business Growth</h2>
                    <div class="creative-banner-actions">
                        <a class="creative-banner-btn" href="contact.php">Book A Call Now <i class="icon-arrow-top"></i></a>
                        <span class="creative-banner-time">[ Tailored Web, App & Marketing Solutions ]</span>
                    </div>
                </div>
                <p class="creative-banner-text">[ Technofra offers tailored web design, development, branding, and marketing solutions that help businesses thrive and achieve impactful outcomes in the digital landscape. ]</p>
            </div>
        </div>
    </div>
</section>
<!-- End creative-banner-sec -->

<!-- booking-call-sec -->
<section class="booking-call-sec ibt-section-gapTop">
    <div class="container2">
        <div class="booking-call-wrap">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="booking-copy">
                        <span class="booking-tag"><i class="fa fa-calendar-days"></i> Book a Call</span>
                        <h2 class="title">Book A Call With Us</h2>
                        <p>Pick a slot, share your goals, and we will map the next steps together with a clear timeline
                            and practical recommendations.</p>

                        <div class="booking-meta">
                            <div class="meta-item">
                                <i class="fa fa-calendar-days"></i>
                                <span>Available Mon - Fri</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa fa-clock"></i>
                                <span>30 minute intro call</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa fa-video"></i>
                                <span>Zoom / Google Meet</span>
                            </div>
                        </div>

                        <div class="booking-calendar">
                            <div class="calendar-head">
                                <div>
                                    <h4 class="calendar-title">June 2026</h4>
                                    <p>Pick a convenient day and reserve your call in seconds.</p>
                                </div>
                                <span class="calendar-badge">Live availability</span>
                            </div>

                            <div class="calendar-weekdays">
                                <span>Mon</span>
                                <span>Tue</span>
                                <span>Wed</span>
                                <span>Thu</span>
                                <span>Fri</span>
                                <span>Sat</span>
                                <span>Sun</span>
                            </div>

                            <div class="calendar-grid">
                                <span class="calendar-date is-muted">26</span>
                                <span class="calendar-date is-muted">27</span>
                                <span class="calendar-date is-muted">28</span>
                                <span class="calendar-date is-muted">29</span>
                                <span class="calendar-date is-muted">30</span>
                                <span class="calendar-date">31</span>
                                <span class="calendar-date">1</span>
                                <span class="calendar-date">2</span>
                                <span class="calendar-date active">3</span>
                                <span class="calendar-date">4</span>
                                <span class="calendar-date">5</span>
                                <span class="calendar-date">6</span>
                                <span class="calendar-date">7</span>
                                <span class="calendar-date">8</span>
                            </div>

                            <div class="time-slots">
                                <span class="slot-chip">10:00 AM</span>
                                <span class="slot-chip active">12:30 PM</span>
                                <span class="slot-chip">03:00 PM</span>
                                <span class="slot-chip">04:30 PM</span>
                                <span class="slot-chip">06:00 PM</span>
                                <span class="slot-chip">08:00 PM</span>
                            </div>
                        </div>

                        <div class="booking-actions">
                            <a href="#contact" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                                <span>Book Your Call</span>
                            </a>
                            <a href="#contact" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                                <span>Check Availability</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="booking-visual">
                        <div class="booking-visual-card">
                            <img src="assets/images/new/book.png" alt="Book a call visual">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End booking-call-sec -->


<!-- testimonials-sec -->
<section class="testimonials-sec">
    <div class="container2">
        <div class="row">
            <div class="col-lg-7">
                <div class="swiper testi-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/icon/comas.svg" alt="">
                            <p>Technofra delivered a clean, modern website that matched our brand
                                perfectly. The team was responsive, clear with communication, and
                                focused on creating a smooth user experience from start to finish.
                            </p>
                            <span>- Client Feedback</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/icon/comas.svg" alt="">
                            <p>We saw a noticeable improvement in visibility after working with
                                Technofra on our digital marketing strategy. Their approach was
                                practical, measurable, and aligned with our business goals.
                            </p>
                            <span>- Client Feedback</span>
                        </div>
                    </div>
                    <div class="slider-btn">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="testimonial-content">
                    <img src="assets/images/new/testinonial.png" alt="">
                    <div class="title-area2">
                        <div class="sec-title white">
                            <span class="sub-title">testimonials</span>
                            <h2 class="title animated-heading">What clients say about working with
                                Technofra</h2>
                        </div>
                        <div class="testi-count">
                            <h4>
                                <span class="counter-number" data-target="500">0</span>
                                <span class="counter-text">+</span>
                            </h4>
                            <span>Happy clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonials-sec -->

<!-- industries-sec -->
<section class="industries-sec ibt-section-gapTop">
    <div class="title-area">
        <div class="container">
            <div class="row end mb-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="sec-title mb-0">
                        <span class="sub-title">industries</span>
                        <h2 class="title animated-heading">Industries We Serve</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="sec-btn-box">
                        <p>Tailored digital experiences for businesses across fast-moving sectors.</p>
                        <a class='ibt-btn ibt-btn-outline' href='contact.php' title>
                            <span>Get Started</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="swiper industries-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-blue">
                            <i class="fa-solid fa-industry" aria-hidden="true"></i>
                        </div>
                        <h4>Manufacturing</h4>
                        <p>Smart production, automation, and workflow optimization for modern factories.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-red">
                            <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <h4>Healthcare</h4>
                        <p>Patient-first digital solutions, secure systems, and better care journeys.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-orange">
                            <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                        </div>
                        <h4>Retail & E-commerce</h4>
                        <p>Conversion-focused storefronts, catalog systems, and customer engagement.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-teal">
                            <i class="fa-solid fa-truck-fast" aria-hidden="true"></i>
                        </div>
                        <h4>Logistics</h4>
                        <p>Real-time tracking, route efficiency, and dependable delivery operations.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-purple">
                            <i class="fa-solid fa-user-graduate" aria-hidden="true"></i>
                        </div>
                        <h4>Education</h4>
                        <p>Interactive platforms, learning experiences, and student engagement tools.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-gold">
                            <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                        </div>
                        <h4>Finance</h4>
                        <p>Secure digital finance workflows, analytics, and customer-friendly interfaces.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-amber">
                            <i class="fa-solid fa-helmet-safety" aria-hidden="true"></i>
                        </div>
                        <h4>Construction</h4>
                        <p>Project visibility, field coordination, and smarter site operations.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-lime">
                            <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                        </div>
                        <h4>Energy</h4>
                        <p>Utilities, renewables, and performance dashboards built for growth.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev industries-prev"></div>
            <div class="swiper-button-next industries-next"></div>
        </div>
    </div>
</section>
<!-- End industries-sec -->

<!-- faq-sec -->
<section class="faq-sec ibt-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mobile-view-off">
                <div class="faq-img">
                    <img src="assets/images/new/elemets.png" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="faq-content">
                    <div class="sec-title">
                        <span class="sub-title">FAQ</span>
                        <h2 class="title animated-heading">Frequently Asked Questions</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What services does Technofra provide?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Technofra provides a wide range of digital solutions including website design and development, mobile app development, branding, digital marketing, domain and hosting services, E-Commerce Websites, Social Media Marketing and IT infrastructure solutions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you provide custom website design?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we create fully customized website designs tailored to your brand, business goals, and target audience to ensure a unique and professional online presence.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you develop mobile applications?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, Technofra develops mobile applications for both Android and iOS platforms, helping businesses reach customers through mobile devices.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Will my website be mobile-friendly and SEO optimized?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, all our websites are responsive, fast-loading, and built with SEO best practices to ensure better performance and rankings.
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class='ibt-btn ibt-btn-outline' href='contact.php' title>
                        <span>Explore More</span>
                        <i class="icon-arrow-top"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include __DIR__ . '/footer.php'; ?>