<?php
session_start();
$pageTitle = 'WordPress Development Services | Custom Websites & Solutions | Technofra';
$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>
<style>
    .eep-status-alert {
        max-width: 1180px;
        margin: 24px auto 0;
        padding: 14px 18px;
        border-radius: 14px;
        font-size: 15px;
        line-height: 1.5
    }

    .eep-status-alert.success {
        background: #eaf8ef;
        border: 1px solid #b8e2c3;
        color: #146c2e
    }

    .eep-status-alert.error {
        background: #fff1f1;
        border: 1px solid #f0b9b9;
        color: #9c1d1d
    }

    .eep-calendar-day[disabled],
    .eep-time-option[disabled] {
        opacity: .35;
        cursor: not-allowed;
        pointer-events: none
    }

    .eep-time-option[disabled] {
        text-decoration: line-through
    }

    .eep-book-modal {
        position: fixed;
        inset: 0;
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgba(7, 15, 43, .72)
    }

    .eep-book-modal.show {
        display: flex
    }

    .eep-book-modal-dialog {
        width: 100%;
        max-width: 520px;
        max-height: calc(100vh - 40px);
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 24px 80px rgba(15, 23, 42, .24);
        overflow: hidden;
        display: flex;
        flex-direction: column
    }

    .eep-book-modal-head {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        padding: 24px 24px 12px
    }

    .eep-book-modal-head h3 {
        margin: 0 0 6px;
        font-size: 28px;
        line-height: 1.2;
        color: #101828
    }

    .eep-book-modal-head p {
        margin: 0;
        color: #475467
    }

    .eep-book-close {
        border: 0;
        width: 40px;
        height: 40px;
        border-radius: 999px;
        background: #f3f4f6;
        color: #111827;
        font-size: 28px;
        line-height: 1
    }

    .eep-book-form {
        padding: 0 24px 24px;
        overflow-y: auto
    }

    .eep-book-summary {
        padding: 14px 16px;
        margin-bottom: 18px;
        border-radius: 16px;
        background: #f5f9ff;
        border: 1px solid #dbe7ff;
        color: #12315f;
        font-size: 14px
    }

    .eep-book-summary-line {
        margin-top: 6px
    }

    .eep-book-field {
        margin-bottom: 16px
    }

    .eep-book-field label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #111827
    }

    .eep-book-field input,
    .eep-book-field select,
    .eep-book-field textarea {
        width: 100%;
        border: 1px solid #d0d5dd;
        border-radius: 14px;
        padding: 0 16px;
        font-size: 15px;
        color: #101828;
        outline: none;
        font-family: inherit
    }

    .eep-book-field input,
    .eep-book-field select {
        height: 50px
    }

    .eep-book-field textarea {
        min-height: 110px;
        padding: 14px 16px;
        resize: vertical
    }

    .eep-phone-group {
        display: grid;
        grid-template-columns: 170px minmax(0, 1fr);
        gap: 12px
    }

    .eep-book-submit {
        width: 100%;
        border: 0;
        border-radius: 14px;
        background: linear-gradient(135deg, #16a34a, #15803d);
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 14px 18px
    }

    .eep-hero {
        padding: 56px 0 64px
    }

    .eep-container.container2 {
        max-width: 1680px;
        width: calc(100% - 40px);
        margin: 0 auto;
        padding: 34px 36px;
        border-radius: 32px;
        border: 1px solid #cfe0f5;
        background: linear-gradient(180deg, #f7fbff 0%, #eef5ff 100%);
        display: grid;
        grid-template-columns: 1.08fr .92fr;
        gap: 34px;
        align-items: stretch;
        box-sizing: border-box
    }

    .eep-contact-wrap,
    .eep-right {
        min-width: 0;
        width: 100%
    }

    .eep-contact-wrap {
        display: flex;
        width: 100%
    }

    .eep-calendar-card {
        width: 100%;
        padding: 10px 0 0;
        background: transparent;
        border: 0;
        box-shadow: none
    }

    .eep-calendar-title-row {
        display: inline-flex;
        align-items: center;
        gap: 16px
    }

    .eep-calendar-icon {
        font-size: 38px;
        color: #003366
    }

    .eep-calendar-title {
        margin: 0;
        font-size: 34px;
        line-height: 1.05;
        color: #111827
    }

    .eep-calendar-sub {
        font-size: 16px;
        line-height: 1.75;
        max-width: 760px;
        color: #4b5563
    }

    .eep-calendar-box {
        margin-top: 24px;
        padding: 18px;
        border-radius: 24px;
        background: #fff;
        border: 1px solid #d8e5f5;
        box-shadow: 0 10px 24px rgba(16, 24, 40, .04)
    }

    .eep-calendar-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px
    }

    .eep-cal-btn {
        width: 42px;
        height: 42px;
        border: 0;
        border-radius: 50%;
        background: #0b3f78;
        color: #fff;
        font-size: 22px
    }

    .eep-month-label {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a
    }

    .eep-calendar-week,
    .eep-calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 10px
    }

    .eep-calendar-week {
        margin-bottom: 12px
    }

    .eep-calendar-week span {
        font-size: 12px;
        font-weight: 700;
        color: #7083a3;
        text-align: center;
        text-transform: uppercase
    }

    .eep-calendar-empty,
    .eep-calendar-day {
        height: 44px
    }

    .eep-calendar-day {
        border: 1px solid #e3ebf6;
        border-radius: 13px;
        background: #fff;
        color: #102342;
        font-weight: 700
    }

    .eep-calendar-day.eep-is-selected {
        background: #1e5fa4;
        color: #fff;
        border-color: #1e5fa4
    }

    .eep-calendar-day.eep-is-today {
        border-color: #1e5fa4
    }

    .eep-calendar-info {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-top: 18px
    }

    .eep-selected-date,
    .eep-time-picker-wrap {
        flex: 1;
        min-width: 0
    }

    .eep-selected-date,
    .eep-time-trigger {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding: 14px 16px;
        border-radius: 16px;
        border: 1px solid #d9e5f4;
        background: #fff;
        color: #0f172a
    }

    .eep-time-trigger.disabled {
        opacity: .55;
        cursor: not-allowed
    }

    .eep-pill-icon {
        color: #1e5fa4
    }

    .eep-time-picker-wrap {
        position: relative
    }

    .eep-time-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        right: 0;
        z-index: 15;
        padding: 14px;
        border-radius: 18px;
        background: #fff;
        border: 1px solid #d9e5f4;
        box-shadow: 0 20px 45px rgba(15, 23, 42, .14);
        display: none
    }

    .eep-time-dropdown.show {
        display: block
    }

    .eep-time-grid {
        display: grid;
        gap: 10px;
        max-height: 260px;
        overflow: auto
    }

    .eep-time-option {
        border: 1px solid #e3ebf6;
        border-radius: 14px;
        background: #fff;
        color: #0f172a;
        padding: 12px 14px;
        text-align: left;
        font-size: 14px
    }

    .eep-time-option.active {
        background: #1e5fa4;
        color: #fff;
        border-color: #1e5fa4
    }

    .eep-calendar-bottom-row {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
        margin-top: 12px
    }

    .eep-timezone-note {
        margin: 0;
        font-size: 12px;
        line-height: 1.55;
        color: #5d6b82
    }

    .eep-local-time-note {
        margin-top: 6px
    }

    .eep-calendar-actions-inline {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%
    }

    .eep-btn-green {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 28px;
        border-radius: 16px;
        background: linear-gradient(135deg, #0b3f78, #1e72c3);
        color: #fff;
        font-weight: 700;
        box-shadow: 0 12px 24px rgba(30, 95, 164, .18)
    }

    .eep-btn-green:hover {
        color: #fff
    }

    .eep-right {
        display: flex;
        width: 100%
    }

    .eep-right-inner {
        position: relative;
        width: 100%;
        max-width: none;
        min-height: 696px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        border-radius: 28px;
        background: #fff;
        border: 1px solid #d8e5f5;
        overflow: hidden
    }

    .eep-center-circle {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, #dbeafe 0%, rgba(219, 234, 254, .14) 58%, transparent 76%)
    }

    .eep-circle,
    .eep-dot,
    .eep-center-circle {
        position: absolute;
        border-radius: 50%
    }

    .eep-circle-1 {
        width: 560px;
        height: 560px;
        border: 1px dashed rgba(30, 95, 164, .35);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-circle-2 {
        width: 420px;
        height: 420px;
        border: 1px solid rgba(30, 95, 164, .18);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-circle-3 {
        width: 280px;
        height: 280px;
        border: 1px solid rgba(30, 95, 164, .14);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-dot-1 {
        width: 16px;
        height: 16px;
        background: #16a34a;
        top: 72px;
        left: 72px
    }

    .eep-dot-2 {
        width: 12px;
        height: 12px;
        background: #1e5fa4;
        bottom: 92px;
        left: 110px
    }

    .eep-dot-3 {
        width: 14px;
        height: 14px;
        background: #0ea5e9;
        top: 114px;
        right: 90px
    }

    .eep-person {
        position: relative;
        left: auto;
        bottom: auto;
        transform: none;
        width: min(100%, 570px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2
    }

    .eep-person img {
        display: block;
        width: 100%;
        max-height: 620px;
        height: auto;
        object-fit: contain
    }

    @media (max-width:1399px) {
        .eep-container.container2 {
            grid-template-columns: 1.02fr .84fr;
            padding: 30px
        }

        .eep-right-inner {
            min-height: 620px
        }

        .eep-person {
            width: min(100%, 510px)
        }

        .eep-person img {
            max-height: 560px
        }

        .eep-circle-1 {
            width: 500px;
            height: 500px
        }

        .eep-circle-2 {
            width: 380px;
            height: 380px
        }

        .eep-circle-3 {
            width: 250px;
            height: 250px
        }

        .eep-center-circle {
            width: 350px;
            height: 350px
        }
    }

    @media (max-width:1199px) {
        .eep-container.container2 {
            grid-template-columns: 1fr .78fr;
            gap: 24px;
            padding: 26px
        }

        .eep-calendar-title {
            font-size: 29px
        }

        .eep-right-inner {
            min-height: 560px
        }

        .eep-person {
            width: min(100%, 430px)
        }

        .eep-person img {
            max-height: 480px
        }
    }

    @media (max-width:991px) {
        .eep-hero {
            padding: 46px 0 54px
        }

        .eep-container.container2 {
            grid-template-columns: 1fr;
            width: calc(100% - 24px);
            padding: 22px 20px;
            gap: 18px
        }

        .eep-right-inner {
            min-height: 380px
        }

        .eep-person {
            width: min(100%, 330px)
        }

        .eep-person img {
            max-height: 320px
        }

        .eep-center-circle {
            width: 250px;
            height: 250px
        }

        .eep-circle-1 {
            width: 320px;
            height: 320px
        }

        .eep-circle-2 {
            width: 240px;
            height: 240px
        }

        .eep-circle-3 {
            width: 160px;
            height: 160px
        }
    }

    @media (max-width:767px) {
        .eep-hero {
            padding: 40px 0 48px
        }

        .eep-container.container2 {
            width: calc(100% - 16px);
            padding: 18px 16px
        }

        .eep-calendar-title {
            font-size: 22px
        }

        .eep-calendar-sub {
            font-size: 15px
        }

        .eep-calendar-box {
            padding: 14px
        }

        .eep-calendar-empty,
        .eep-calendar-day {
            height: 38px
        }

        .eep-calendar-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px
        }

        .eep-right-inner {
            min-height: 300px;
            padding: 18px
        }

        .eep-person {
            width: min(100%, 270px)
        }

        .eep-person img {
            max-height: 260px
        }

        .eep-book-modal {
            padding: 12px;
            align-items: flex-start
        }

        .eep-book-modal-dialog {
            border-radius: 18px;
            max-height: calc(100vh - 24px)
        }

        .eep-book-form {
            padding: 0 20px 20px
        }

        .eep-phone-group {
            grid-template-columns: 1fr
        }
    }

    @media (min-width: 1200px) and (max-width: 1400px) {
        .feature-img8 img {
            object-fit: fill;
        }

        .ibt-section-gap {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .ibt-section-gapTop {
            padding-top: 50px;
        }
    }
</style>


<div class="hero-style13">
    <div class="container">
        <div class="hero-content13">
            <h1 class="title"> <img src ="./assets/images/new/wordpress.webp" style="width: 100px;"><br>Best WordPress Development Company for Scalable Business Websites
            </h1>
            <p>Looking for a reliable WordPress development company? Technofra delivers high-performing, secure, and scalable WordPress solutions tailored to your business needs.
            </p>
            <!-- 
            <div class="d-flex align-items-center justify-content-center mt-5">
                <div class=''>
                    <div class="icon-circle me-4">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                    </div>
                    <span>1500+</span>
                    <p>Projects Successfully Delivered</p>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="divider"></div>
                </div>
                <div class=''>
                    <div class="border-radius-50 bg-primary p-5 me-4">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <span>920+</span>
                    <p>Happy Clients</p>
                </div>
            </div> -->
        </div>
    </div>
</div>



<section class="feature-sec8 ibt-section-gapBottom">
    <div class="container5">
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-img8">
                    <div class="empty4"></div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="assets/images/feature/multiple-device-accessibility.png" alt="Multiple device accessibility">
                            <h4 class="title"></h4>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="assets/images/feature/seo-friendly.png" alt="SEO Friendly">
                            <h4 class="title"></h4>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <img src="assets/images/feature/low-investment.png" alt="AI Agency & Technology HTML Template">
                            <h4 class="title"></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-tabs8">
                    <div class="sec-title">
                        <span class="sub-title">how it works</span>
                        <h2 class="title animated-heading">Benefits of WordPress Website Development</h2>
                    </div>
                    <ul class="nav nav-tabs8" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                <div class="feature-block8">
                                    <img src="assets/images/feature/feature8-1.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">01. Multiple device accessibility</h4>
                                    <p>WordPress is a powerful platform that simplifies creating responsive, mobile-optimized websites for all devices.</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <div class="feature-block8">
                                    <img src="assets/images/feature/feature8-2.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">02. SEO Friendly</h4>
                                    <p>Building a website is easier with WordPress, thanks to built-in SEO tools that help optimize content for keywords and phrases.</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <div class="feature-block8">
                                    <img src="assets/images/feature/feature8-3.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">03. Low Investment</h4>
                                    <p>WordPress offers a cost-effective solution for small businesses and helps large businesses save time for other priorities.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="service-sec19">
    <div class="container2">
        <div class="ser-box19">
            <div class="ser-info19">
                <div class="service-block19">
                    <img src="assets/images/service/service/service-s1.png" alt="WordPress Website Design & Development">
                    <!-- <h4 class="title">Achievements of our startup</h4> -->
                </div>
            </div>
            <div class="ser-info19">
                <div class="service-block19 v1">
                    <img src="assets/images/service/service/service-s2.png" alt="AI Agency & Technology HTML Template">
                    <!-- <h4 class="title2">Aiero</h4> -->
                </div>
                <div class="ser-content19">
                    <div class="ser-counter19">
                        <div class="counter-box19 m-0">
                            <span class="counter-number" data-target="150">0</span>
                            <span class="counter-text">K</span>
                        </div>
                        <span class="sub-title">Active users every day</span>
                    </div>
                </div>
            </div>
            <div class="ser-info19">
                <div class="service-block19 v1">
                    <img src="assets/images/service/service/service-s3.png" alt="AI Agency & Technology HTML Template">
                </div>
                <div class="service-block19 m-0">
                    <img src="assets/images/service/ser19-4.png" alt="AI Agency & Technology HTML Template">
                    <h4 class="title">Professional team & tech</h4>
                </div>
            </div>
            <div class="ser-info19">
                <div class="service-block19 v1">
                    <img src="assets/images/service/service/service-s4.png" alt="AI Agency & Technology HTML Template">
                </div>
                <div class="service-block19 m-0">
                    <img src="assets/images/service/ser19-6.png" alt="AI Agency & Technology HTML Template">
                </div>
            </div>
            <div class="ser-info19 m-0">
                <div class="service-block19 v2">
                    <img src="assets/images/service/service/service-s5.png" alt="AI Agency & Technology HTML Template">
                    <!-- <h4 class="title">Programming & development</h4> -->
                </div>
            </div>
        </div>
    </div>
</div>


<section class="feature-sec3 ibt-section-gap">
    <!-- <div class="anim-img"><img src="assets/images/layers/shap.png" alt="AI Agency & Technology HTML Template">
    </div> -->
    <div class="container">
        <div class="title-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">features</span>
                        <h2 class="title animated-heading">WordPress Solutions
                        </h2>
                        <p class="title-p animated-heading">That Help Your Business Grow</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-content">
                        <h4 class="title">Wordpress</h4>
                        <p>We design, develop and optimize WordPress websites that are fast, secure, scalable and built to convert visitors into customers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-img2">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="assets/images/feature/feature.png" alt="AI Agency & Technology HTML Template">
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="assets/images/feature/feature.png" alt="AI Agency & Technology HTML Template">
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <img src="assets/images/feature/feature.png" alt="AI Agency & Technology HTML Template">
                        </div>
                        <div class="tab-pane fade" id="cont" role="tabpanel" aria-labelledby="cont-tab">
                            <img src="assets/images/feature/feature.png" alt="AI Agency & Technology HTML Template">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                <div class="feature-block">
                                    <img src="assets/images/feature/feature3-1.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">WordPress Website Design</h4>
                                    <p>Modern UI/UX focused websites designed for speed, conversions and brand identity.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <div class="feature-block">
                                    <img src="assets/images/feature/feature3-2.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">Custom WordPress Development</h4>
                                    <p>Custom themes, plugins and scalable solutions built specifically for your business.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" title="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <div class="feature-block">
                                    <img src="assets/images/feature/feature3-3.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">Speed & SEO Optimization</h4>
                                    <p>Improve Core Web Vitals, Google rankings and loading speed for better conversions.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" id="cont-tab" data-bs-toggle="tab" data-bs-target="#cont" role="tab" aria-controls="cont" aria-selected="false">
                                <div class="feature-block">
                                    <img src="assets/images/feature/feature3-4.svg" alt="AI Agency & Technology HTML Template">
                                    <h4 class="title">Maintenance & Support</h4>
                                    <p>Regular updates, backups, malware protection and technical support.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer-style2">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h2 class="title">Enquiry Now or reach out to us today!</h2>
                    <p class="sub-title">Get Your Quote or Call : +91 8080 80 3374</p>
                </div>
                <a href="contact.php" title="" class="ibt-btn ibt-btn-outline">
                    <span>Enquiry Now</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </div>
        </div>
    </div>
</footer>



<section class="project-sec ibt-section-gap">
    <div class="title-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8 col-lg-12">
                    <div class="sec-title mb-0 white">
                        <span class="sub-title">projects</span>
                        <h2 class="title animated-heading">Showcasing Our Creative Excellence</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="user-count">
                        <div class="counter-box5">
                            <span class="counter-number" data-target="200">0</span>
                            <span class="counter-text">+</span>
                        </div>
                        <span class="user">Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="empty">
                            <span>E-Commerce</span>
                            <div class="projec-content">
                                <h4 class="title">WOTM
                                </h4>
                                <!-- <p>E-Commerce</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v2">
                        <div class="empty">
                            <span>Business Website</span>
                            <div class="projec-content">
                                <h4 class="title">KARAN TELECOM
                                </h4>
                                <!-- <p>Business Website</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v3">
                        <div class="empty">
                            <span>Business Websites</span>
                            <div class="projec-content">
                                <h4 class="title">AERITX
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v4">
                        <div class="empty">
                            <span>E-commerce</span>
                            <div class="projec-content">
                                <h4 class="title">ISH
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v5">
                        <div class="empty">
                            <span>Booking Websites</span>
                            <div class="projec-content">
                                <h4 class="title">URBAN SPORTS
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v6">
                        <div class="empty">
                            <span>Business Websites</span>
                            <div class="projec-content">
                                <h4 class="title">VP & SONS
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v7">
                        <div class="empty">
                            <span>Business Websites</span>
                            <div class="projec-content">
                                <h4 class="title">LINK PROMOTIONS
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card v8">
                        <div class="empty">
                            <span>Business Websites</span>
                            <div class="projec-content">
                                <h4 class="title">TRANSHUB TECH
                                </h4>
                                <!-- <p>The inputs are multiplied by their respective weights, summed up.</p> -->
                                <a class='ser-btn3' href='portfolios.php' title>View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
        <div class="project-btn">
            <div class="custom-pagination"></div>
            <a class='ibt-btn ibt-btn-outline' href='service.html' title>
                <span>Explore More</span>
                <i class="icon-arrow-top"></i>
            </a>
        </div> -->
    </div>
</section>




<section class="faq-sec5 ibt-section-gap">
    <button class="sidebar-toggle"></button>
    <!-- Overlay -->
    <div class="sidebar-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="faq-content5">
                    <div class="faq-content4">
                        <div class="sec-title">
                            <h2 class="title animated-heading mb-0">Frequently Asked Questions</h2>
                        </div>
                        <div class="accordion4" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="accordion-title">
                                            <span class="accordion-number">01</span> What is WordPress, and how does it work?
                                        </span>
                                        <i class="fontello icon-button-arrow-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        WordPress is a free, open-source content management system (CMS) that allows you to create and manage websites. It provides themes, plugins, and an intuitive dashboard to customize your site without coding knowledge.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="accordion-title">
                                            <span class="accordion-number">02</span>
                                            What is the difference between WordPress.com and WordPress.org?
                                        </span>
                                        <i class="fontello icon-button-arrow-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        WordPress.com is a hosted platform where your website is managed for you, while WordPress.org is a self-hosted solution where you need to install and manage WordPress on your own hosting server.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="accordion-title">
                                            <span class="accordion-number">03</span>
                                            How do I install a WordPress theme?
                                        </span>
                                        <i class="fontello icon-button-arrow-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can install a theme by navigating to your WordPress dashboard > Appearance > Themes > Add New, then choose a free theme from the library or upload a premium theme in .zip format.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <span class="accordion-title">
                                            <span class="accordion-number">04</span>What are WordPress plugins, and how do I install them?
                                        </span>
                                        <i class="fontello icon-button-arrow-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Plugins are add-ons that enhance your WordPress site with additional features and functionalities. To install a plugin, go to Plugins > Add New in your dashboard, search for the plugin, or upload a .zip file of the plugin.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        <span class="accordion-title">
                                            <span class="accordion-number">05</span>
                                            How can I secure my WordPress website?
                                        </span>
                                        <i class="fontello icon-button-arrow-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can secure your WordPress site by keeping WordPress, themes, and plugins updated, using strong passwords, installing a security plugin (like Wordfence or Sucuri), enabling SSL, and regularly backing up your website.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
                <div class="eep-calendar-bottom-row">
                    <div class="eep-timezone-note">
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


<script src='assets/js/book-call-widget.js' defer></script>
<?php include __DIR__ . '/footer.php'; ?>