<?php
session_start();
$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);
include __DIR__ . '/header.php'; ?>
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
<style>
.eep-status-alert{max-width:1180px;margin:24px auto 0;padding:14px 18px;border-radius:14px;font-size:15px;line-height:1.5}.eep-status-alert.success{background:#eaf8ef;border:1px solid #b8e2c3;color:#146c2e}.eep-status-alert.error{background:#fff1f1;border:1px solid #f0b9b9;color:#9c1d1d}.eep-calendar-day[disabled],.eep-time-option[disabled]{opacity:.35;cursor:not-allowed;pointer-events:none}.eep-time-option[disabled]{text-decoration:line-through}.eep-hero{padding-top:24px}.eep-container{display:grid;grid-template-columns:minmax(0,1.1fr) minmax(320px,.9fr);gap:32px;align-items:center}.eep-contact-wrap{width:100%}.eep-calendar-card{padding:32px;border-radius:28px;background:#fff;border:1px solid rgba(15,23,42,.08);box-shadow:0 24px 60px rgba(15,23,42,.08)}.eep-calendar-title-row{display:inline-flex;align-items:center;gap:14px}.eep-calendar-icon{font-size:38px;color:#003366}.eep-calendar-title{margin:0;font-size:34px;line-height:1.1}.eep-calendar-sub{margin:0;color:#475569;line-height:1.75}.eep-calendar-box{margin-top:22px;padding:22px;border-radius:24px;background:linear-gradient(180deg,#f7fbff 0%,#fff 100%);border:1px solid rgba(15,23,42,.06)}.eep-calendar-nav{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:18px}.eep-cal-btn{width:42px;height:42px;border:0;border-radius:50%;background:#003366;color:#fff;font-size:22px}.eep-month-label{font-size:18px;font-weight:700;color:#0f172a}.eep-calendar-week,.eep-calendar-grid{display:grid;grid-template-columns:repeat(7,minmax(0,1fr));gap:10px}.eep-calendar-week{margin-bottom:12px}.eep-calendar-week span{font-size:12px;font-weight:700;color:#64748b;text-align:center;text-transform:uppercase}.eep-calendar-empty{height:46px}.eep-calendar-day{height:46px;border:1px solid rgba(15,23,42,.08);border-radius:14px;background:#fff;color:#0f172a;font-weight:700}.eep-calendar-day.eep-is-today{border-color:#003366}.eep-calendar-day.eep-is-selected{background:#003366;color:#fff}.eep-calendar-info{display:flex;gap:14px;align-items:center;margin-top:18px}.eep-selected-date,.eep-time-picker-wrap{flex:1}.eep-calendar-actions-inline{display:flex;align-items:center;justify-content:center}.eep-selected-date,.eep-time-trigger{width:100%;display:flex;align-items:center;justify-content:space-between;gap:10px;padding:14px 16px;border-radius:16px;border:1px solid rgba(15,23,42,.08);background:#fff;color:#0f172a}.eep-time-trigger.disabled{opacity:.55;cursor:not-allowed}.eep-pill-icon{color:#003366}.eep-time-picker-wrap{position:relative}.eep-time-dropdown{position:absolute;top:calc(100% + 10px);left:0;right:0;z-index:15;padding:14px;border-radius:18px;background:#fff;border:1px solid rgba(15,23,42,.08);box-shadow:0 20px 45px rgba(15,23,42,.14);display:none}.eep-time-dropdown.show{display:block}.eep-time-grid{display:grid;gap:10px;max-height:260px;overflow:auto}.eep-time-option{border:1px solid rgba(15,23,42,.08);border-radius:14px;background:#fff;color:#0f172a;padding:12px 14px;text-align:left;font-size:14px}.eep-time-option.active{background:#003366;color:#fff}.eep-timezone-note{margin-top:14px;font-size:13px;line-height:1.6;color:#475467}.eep-timezone-note strong,.eep-local-time-note strong{color:#12315f}.eep-local-time-note{margin-top:8px}.eep-btn-green{display:inline-flex;align-items:center;gap:10px;padding:15px 24px;border-radius:999px;background:#16a34a;color:#fff;font-weight:700}.eep-btn-green:hover{color:#fff}.eep-right-inner{position:relative;min-height:520px;border-radius:34px;background:radial-gradient(circle at top left,rgba(0,51,102,.12),transparent 35%),linear-gradient(180deg,#eff6ff 0%,#fff 100%);overflow:hidden;border:1px solid rgba(15,23,42,.06)}.eep-circle,.eep-dot,.eep-center-circle{position:absolute;border-radius:50%}.eep-circle-1{width:420px;height:420px;border:1px solid rgba(0,51,102,.12);top:20px;right:-80px}.eep-circle-2{width:300px;height:300px;border:1px solid rgba(0,51,102,.14);top:80px;right:-20px}.eep-circle-3{width:180px;height:180px;border:1px solid rgba(0,51,102,.16);top:140px;right:40px}.eep-dot-1{width:16px;height:16px;background:#16a34a;top:90px;left:70px}.eep-dot-2{width:12px;height:12px;background:#003366;bottom:140px;left:120px}.eep-dot-3{width:14px;height:14px;background:#0ea5e9;top:180px;right:120px}.eep-center-circle{width:320px;height:320px;background:radial-gradient(circle,#dbeafe 0%,rgba(219,234,254,.18) 55%,transparent 75%);left:50%;top:50%;transform:translate(-50%,-50%)}.eep-person{position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:min(82%,430px)}.eep-person img{display:block;width:100%;height:auto}.eep-book-modal{position:fixed;inset:0;z-index:9999;display:none;align-items:center;justify-content:center;padding:20px;background:rgba(7,15,43,.72)}.eep-book-modal.show{display:flex}.eep-book-modal-dialog{width:100%;max-width:520px;max-height:calc(100vh - 40px);background:#fff;border-radius:24px;box-shadow:0 24px 80px rgba(15,23,42,.24);overflow:hidden;display:flex;flex-direction:column}.eep-book-modal-head{display:flex;align-items:flex-start;justify-content:space-between;gap:16px;padding:24px 24px 12px}.eep-book-modal-head h3{margin:0 0 6px;font-size:28px;line-height:1.2;color:#101828}.eep-book-modal-head p{margin:0;color:#475467}.eep-book-close{border:0;width:40px;height:40px;border-radius:999px;background:#f3f4f6;color:#111827;font-size:28px;line-height:1}.eep-book-form{padding:0 24px 24px;overflow-y:auto}.eep-book-summary{padding:14px 16px;margin-bottom:18px;border-radius:16px;background:#f5f9ff;border:1px solid #dbe7ff;color:#12315f;font-size:14px}.eep-book-summary-line{margin-top:6px}.eep-book-field{margin-bottom:16px}.eep-book-field label{display:block;margin-bottom:8px;font-size:14px;font-weight:600;color:#111827}.eep-book-field input,.eep-book-field select,.eep-book-field textarea{width:100%;border:1px solid #d0d5dd;border-radius:14px;padding:0 16px;font-size:15px;color:#101828;outline:none;font-family:inherit}.eep-book-field input,.eep-book-field select{height:50px}.eep-book-field textarea{min-height:110px;padding:14px 16px;resize:vertical}.eep-phone-group{display:grid;grid-template-columns:170px minmax(0,1fr);gap:12px}.eep-book-submit{width:100%;border:0;border-radius:14px;background:linear-gradient(135deg,#16a34a,#15803d);color:#fff;font-size:16px;font-weight:700;padding:14px 18px}@media (max-width:991px){.eep-container{grid-template-columns:1fr}.eep-right{order:-1}.eep-right-inner{min-height:420px}}@media (max-width:767px){.eep-calendar-info{display:grid}.eep-phone-group{grid-template-columns:1fr}.eep-calendar-card{padding:22px}.eep-right-inner{min-height:340px}.eep-book-modal{padding:12px;align-items:flex-start}.eep-book-modal-dialog{border-radius:18px;max-height:calc(100vh - 24px)}.eep-book-form{padding:0 20px 20px}}
</style>
<style>
.eep-hero{padding:56px 0 64px}
.eep-container.container2{max-width:1680px;width:calc(100% - 40px);margin:0 auto;padding:34px 36px;border-radius:32px;border:1px solid #cfe0f5;background:linear-gradient(180deg,#f7fbff 0%,#eef5ff 100%);display:grid;grid-template-columns:1.08fr .92fr;gap:34px;align-items:stretch;box-sizing:border-box}
.eep-contact-wrap,.eep-right{min-width:0;width:100%}.eep-contact-wrap{display:flex;width:100%}.eep-calendar-card{width:100%;padding:10px 0 0;background:transparent;border:0;box-shadow:none}.eep-calendar-title-row{display:inline-flex;align-items:center;gap:16px}.eep-calendar-icon{font-size:38px;color:#003366}.eep-calendar-title{margin:0;font-size:34px;line-height:1.05;color:#111827}.eep-calendar-sub{font-size:16px;line-height:1.75;max-width:760px;color:#4b5563}.eep-calendar-box{margin-top:24px;padding:18px;border-radius:24px;background:#fff;border:1px solid #d8e5f5;box-shadow:0 10px 24px rgba(16,24,40,.04)}.eep-calendar-nav{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:16px}.eep-cal-btn{width:42px;height:42px;border:0;border-radius:50%;background:#0b3f78;color:#fff;font-size:22px}.eep-month-label{font-size:18px;font-weight:700;color:#0f172a}.eep-calendar-week,.eep-calendar-grid{display:grid;grid-template-columns:repeat(7,minmax(0,1fr));gap:10px}.eep-calendar-week{margin-bottom:12px}.eep-calendar-week span{font-size:12px;font-weight:700;color:#7083a3;text-align:center;text-transform:uppercase}.eep-calendar-empty,.eep-calendar-day{height:44px}.eep-calendar-day{border:1px solid #e3ebf6;border-radius:13px;background:#fff;color:#102342;font-weight:700}.eep-calendar-day.eep-is-selected{background:#1e5fa4;color:#fff;border-color:#1e5fa4}.eep-calendar-day.eep-is-today{border-color:#1e5fa4}.eep-calendar-info{display:flex;gap:14px;align-items:center;margin-top:18px}.eep-selected-date,.eep-time-picker-wrap{flex:1;min-width:0}.eep-selected-date,.eep-time-trigger{width:100%;display:flex;align-items:center;justify-content:space-between;gap:10px;padding:14px 16px;border-radius:16px;border:1px solid #d9e5f4;background:#fff;color:#0f172a}.eep-time-trigger.disabled{opacity:.55;cursor:not-allowed}.eep-pill-icon{color:#1e5fa4}.eep-time-picker-wrap{position:relative}.eep-time-dropdown{position:absolute;top:calc(100% + 10px);left:0;right:0;z-index:15;padding:14px;border-radius:18px;background:#fff;border:1px solid #d9e5f4;box-shadow:0 20px 45px rgba(15,23,42,.14);display:none}.eep-time-dropdown.show{display:block}.eep-time-grid{display:grid;gap:10px;max-height:260px;overflow:auto}.eep-time-option{border:1px solid #e3ebf6;border-radius:14px;background:#fff;color:#0f172a;padding:12px 14px;text-align:left;font-size:14px}.eep-time-option.active{background:#1e5fa4;color:#fff;border-color:#1e5fa4}.eep-calendar-bottom-row{display:flex;flex-direction:column;align-items:flex-start;gap:14px;margin-top:12px}.eep-timezone-note{margin:0;font-size:12px;line-height:1.55;color:#5d6b82}.eep-local-time-note{margin-top:6px}.eep-calendar-actions-inline{display:flex;align-items:center;justify-content:flex-start;width:100%}.eep-btn-green{display:inline-flex;align-items:center;gap:10px;padding:15px 28px;border-radius:16px;background:linear-gradient(135deg,#0b3f78,#1e72c3);color:#fff;font-weight:700;box-shadow:0 12px 24px rgba(30,95,164,.18)}.eep-btn-green:hover{color:#fff}.eep-right{display:flex;width:100%}.eep-right-inner{position:relative;width:100%;max-width:none;min-height:696px;display:flex;align-items:center;justify-content:center;padding:24px;border-radius:28px;background:#fff;border:1px solid #d8e5f5;overflow:hidden}.eep-center-circle{width:400px;height:400px;background:radial-gradient(circle,#dbeafe 0%,rgba(219,234,254,.14) 58%,transparent 76%)}.eep-circle,.eep-dot,.eep-center-circle{position:absolute;border-radius:50%}.eep-circle-1{width:560px;height:560px;border:1px dashed rgba(30,95,164,.35);top:50%;right:50%;transform:translate(50%,-50%)}.eep-circle-2{width:420px;height:420px;border:1px solid rgba(30,95,164,.18);top:50%;right:50%;transform:translate(50%,-50%)}.eep-circle-3{width:280px;height:280px;border:1px solid rgba(30,95,164,.14);top:50%;right:50%;transform:translate(50%,-50%)}.eep-dot-1{width:16px;height:16px;background:#16a34a;top:72px;left:72px}.eep-dot-2{width:12px;height:12px;background:#1e5fa4;bottom:92px;left:110px}.eep-dot-3{width:14px;height:14px;background:#0ea5e9;top:114px;right:90px}.eep-person{position:relative;left:auto;bottom:auto;transform:none;width:min(100%,570px);display:flex;align-items:center;justify-content:center;z-index:2}.eep-person img{display:block;width:100%;max-height:620px;height:auto;object-fit:contain}@media (max-width:1399px){.eep-container.container2{grid-template-columns:1.02fr .84fr;padding:30px}.eep-right-inner{min-height:620px}.eep-person{width:min(100%,510px)}.eep-person img{max-height:560px}.eep-circle-1{width:500px;height:500px}.eep-circle-2{width:380px;height:380px}.eep-circle-3{width:250px;height:250px}.eep-center-circle{width:350px;height:350px}}@media (max-width:1199px){.eep-container.container2{grid-template-columns:1fr .78fr;gap:24px;padding:26px}.eep-calendar-title{font-size:29px}.eep-right-inner{min-height:560px}.eep-person{width:min(100%,430px)}.eep-person img{max-height:480px}}@media (max-width:991px){.eep-hero{padding:46px 0 54px}.eep-container.container2{grid-template-columns:1fr;width:calc(100% - 24px);padding:22px 20px;gap:18px}.eep-right-inner{min-height:380px}.eep-person{width:min(100%,330px)}.eep-person img{max-height:320px}.eep-center-circle{width:250px;height:250px}.eep-circle-1{width:320px;height:320px}.eep-circle-2{width:240px;height:240px}.eep-circle-3{width:160px;height:160px}}@media (max-width:767px){.eep-hero{padding:40px 0 48px}.eep-container.container2{width:calc(100% - 16px);padding:18px 16px}.eep-calendar-title{font-size:22px}.eep-calendar-sub{font-size:15px}.eep-calendar-box{padding:14px}.eep-calendar-empty,.eep-calendar-day{height:38px}.eep-calendar-info{display:grid;grid-template-columns:1fr;gap:12px}.eep-right-inner{min-height:300px;padding:18px}.eep-person{width:min(100%,270px)}.eep-person img{max-height:260px}}
</style>
<?php if ($bookCallStatus): ?>
<div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>
<section class="eep-hero ibt-section-gapTop" id="book-call-widget">
    <div class="eep-container container2">
        <div class="eep-contact-wrap">
            <div class="eep-calendar-card">
                <div class="eep-calendar-head">
                    <div>
                        <div class="eep-calendar-title-row">
                            <div class="eep-calendar-icon"><i class="fa fa-calendar"></i></div>
                            <h2 class="eep-calendar-title">Book A Call With Us</h2>
                        </div>
                        <p class="eep-calendar-sub pt-2">Pick a date and time to connect with one of our expert team members</p>
                    </div>
                </div>
                <div class="eep-calendar-box">
                    <div class="eep-calendar-nav">
                        <button id="prevMonth" class="eep-cal-btn" type="button">&#8249;</button>
                        <div id="monthLabel" class="eep-month-label">Month 2026</div>
                        <button id="nextMonth" class="eep-cal-btn" type="button">&#8250;</button>
                    </div>
                    <div class="eep-calendar-week">
                        <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                    </div>
                    <div id="calendarGrid" class="eep-calendar-grid"></div>
                </div>
                <div class="eep-calendar-info">
                    <div id="selectedDatePill" class="eep-selected-date">
                        <span class="eep-pill-icon"><i class="fa fa-calendar-check-o"></i></span>
                        <span id="selectedDateText" class="eep-selected-date-text">Select Date</span>
                    </div>
                    <div class="eep-time-picker-wrap">
                        <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                            <span class="eep-pill-icon"><i class="fa fa-clock"></i></span>
                            <span id="selectedTimeText" class="eep-time-text">Select Time</span>
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <div id="timeDropdown" class="eep-time-dropdown">
                            <div id="timeGrid" class="eep-time-grid"></div>
                        </div>
                    </div>
                </div>
                <div class="eep-calendar-bottom-row"><div class="eep-timezone-note">
                    <strong>Slots Time</strong>
                    <span id="viewerTimezoneNote"></span>
                    <div id="selectedLocalTimeNote" class="eep-local-time-note"></div>
                </div>
                <div class="mt-20 pt-3 eep-calendar-actions-inline">
                    <a href="#book-call" class="eep-btn-green" id="bookCallBtn"><i class="fa fa-phone"></i> Book A Call With Us</a>
                </div>
            </div>
        </div>
        </div>
        <div class="eep-right">
            <div class="eep-right-inner">
                <div class="eep-circle eep-circle-1"></div>
                <div class="eep-circle eep-circle-2"></div>
                <div class="eep-circle eep-circle-3"></div>
                <div class="eep-dot eep-dot-1"></div>
                <div class="eep-dot eep-dot-2"></div>
                <div class="eep-dot eep-dot-3"></div>
                <div class="eep-center-circle"></div>
                <div class="eep-person"><img loading="lazy" decoding="async" src="assets/images/new/book.png" alt="Book A Call"></div>
            </div>
        </div>
    </div>
</section>
<div class="eep-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="eep-book-modal-dialog">
        <div class="eep-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="eep-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>
        <form class="eep-book-form" action="book-call-handler.php" method="post">
            <div class="eep-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <div class="eep-book-summary-line"><strong>Time (IST):</strong> <span id="modalSelectedTime">Not selected</span></div>
                <div class="eep-book-summary-line"><strong>Your Local Time:</strong> <span id="modalSelectedLocalTime">Not selected</span></div>
            </div>
            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">
            <input type="hidden" name="user_timezone" id="userTimezoneInput">
            <div class="eep-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>
            <div class="eep-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>
            <div class="eep-book-field">
                <label for="bookCallPhone">Number</label>
                <div class="eep-phone-group">
                    <select id="bookCallCountryCode" aria-label="Select country code"></select>
                    <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your phone number" pattern="[0-9\-\s()]{6,18}" title="Enter a valid phone number." required>
                </div>
            </div>
            <div class="eep-book-field">
                <label for="bookCallAgenda">Meeting Agenda</label>
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4" required></textarea>
            </div>
            <button type="submit" class="eep-book-submit">Submit Booking</button>
        </form>
    </div>
</div>
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
<!-- End faq-sec -->

<script src='assets/js/book-call-widget.js' defer></script>
<?php include __DIR__ . '/footer.php'; ?>















