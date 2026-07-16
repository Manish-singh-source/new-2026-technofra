<?php
$pageTitle = 'Mobile App Development Company in Mumbai | Android & iOS Services - Technofra';
$metaKeywords = 'Mobile app development company in Mumbai, Android app development, iOS app development, Mobile app development company in Mumbai for startups, Custom app development services India, Mobile app development company in Kandivali, Mobile app development company, Mobile app development services, Android app development, Ios app development, app development services, Mobile app development agency';
$bodyClass = 'hero-video-page tf-ios-page';

include __DIR__ . '/header.php';
?>


<style>
    .shopify-quote {
        font-size: 2.5rem;
        color: #fbb03b;
        margin-right: 10px;
    }

    .shopify-testimonials-description {
        display: block;
    }
</style>
<style>
    :root {
        --brand-green: #2fae4e;
        --brand-green-dark: #1e8f3d;
        --brand-green-light: #e6f7ea;
        --text-dark: #14161a;
        --text-body: #7a8291;
        --bg-section: #f7f8f7;
        --icon-bg: #e9f9ee;
        --card-border: #edf0ee;
        --card-bg: #ffffff;
        --active-bg: #f5faf6;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* Hero Section */

    .hero-section {
        position: relative;
        background: #fbfbfa;
        overflow: hidden;
        padding: 4.5rem 0 0;
        padding-top: 172px;
    }

    /* decorative dot grid, top-left */
    .hero-dots {
        position: absolute;
        top: 6%;
        left: 4%;
        width: 130px;
        height: 90px;
        background-image: radial-gradient(rgba(20, 22, 26, 0.12) 1.5px, transparent 1.5px);
        background-size: 14px 14px;
        z-index: 0;
    }

    /* soft blurred circle, top-right */
    .hero-blur-circle {
        position: absolute;
        top: -8%;
        right: -6%;
        width: 340px;
        height: 340px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(47, 174, 78, 0.14) 0%, transparent 70%);
        z-index: 0;
    }

    /* faint android watermark, bottom-right */
    .hero-watermark {
        position: absolute;
        right: 3%;
        bottom: 4%;
        font-size: 7rem;
        color: rgba(47, 174, 78, 0.08);
        z-index: 0;
    }

    /* small diamond accents */
    .hero-diamond {
        position: absolute;
        width: 12px;
        height: 12px;
        background: var(--brand-green);
        opacity: 0.5;
        transform: rotate(45deg);
        z-index: 0;
    }

    .hero-diamond.d1 {
        top: 22%;
        left: 18%;
    }

    .hero-diamond.d2 {
        top: 40%;
        right: 22%;
        opacity: 0.3;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        margin: auto;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.1rem;
        border: 1px solid #dcefe0;
        border-radius: 50px;
        background: #f5faf6;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--brand-green-dark);
        margin-bottom: 1.5rem;
    }

    .hero-badge i {
        color: var(--brand-green);
    }

    .hero-heading {
        font-weight: 800;
        letter-spacing: -0.02em;
        line-height: 1.18;
        color: var(--text-dark);
        font-size: clamp(2rem, 4.6vw, 3.2rem);
        max-width: 780px;
        margin: 0 auto 1.25rem;
    }

    .hero-heading .accent {
        color: var(--brand-green);
    }

    .hero-subtext {
        color: var(--text-body);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 560px;
        margin: 0 auto 2.25rem;
    }

    .hero-ctas {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 3.5rem;
    }

    .hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.9rem 1.75rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .hero-btn-primary {
        background: var(--text-dark);
        color: #fff;
        border: 1.5px solid var(--text-dark);
    }

    .hero-btn-primary:hover {
        background: #000;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(20, 22, 26, 0.18);
    }

    .hero-btn-outline {
        background: transparent;
        color: var(--text-dark);
        border: 1.5px solid #e2e4e2;
    }

    .hero-btn-outline:hover {
        border-color: var(--text-dark);
        color: var(--text-dark);
        transform: translateY(-2px);
    }

    /* ===== Phone showcase ===== */

    .hero-phones {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        gap: 1.25rem;
        padding: 0 1rem;
        margin-top: 2rem;

    }

    .hero-phone {
        width: 100%;
        height: auto;
        display: block;
        filter: drop-shadow(0 22px 34px rgba(20, 22, 26, 0.16));

    }

    .hero-phone-side {
        flex: 0 0 auto;
        width: clamp(110px, 14vw, 190px);
        margin-bottom: 0;
        opacity: 0.96;
    }

    .hero-phone-center {
        flex: 0 0 auto;
        width: clamp(140px, 17vw, 230px);
        margin-bottom: 3rem;
        z-index: 2;
    }

    /* ===== Responsive tuning ===== */

    @media (max-width: 991.98px) {
        .hero-section {
            padding-top: 3.75rem;
        }
    }

    @media (max-width: 767.98px) {
        .hero-ctas {
            margin-bottom: 2.75rem;
        }

        .hero-btn {
            width: 100%;
            justify-content: center;
        }

        .hero-ctas {
            flex-direction: column;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-watermark {
            font-size: 4.5rem;
        }
    }

    @media (max-width: 575.98px) {
        .hero-section {
            padding-top: 3rem;
        }

        .hero-heading {
            font-size: clamp(1.6rem, 7vw, 2rem);
        }

        .hero-subtext {
            font-size: 0.95rem;
        }

    }

    /* ===== What we cover ===== */

    .wcu-section {
        position: relative;
        background: var(--bg-section);
        overflow: hidden;
        padding: 5rem 0;
    }

    /* soft decorative circles on the right, like the reference */
    .wcu-section::before {
        content: "";
        position: absolute;
        top: -10%;
        right: -8%;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: radial-gradient(circle at center, rgba(52, 199, 89, 0.08) 0%, rgba(52, 199, 89, 0.08) 40%, transparent 41%),
            repeating-radial-gradient(circle at center, rgba(20, 22, 26, 0.06) 0px, rgba(20, 22, 26, 0.06) 1px, transparent 1px, transparent 34px);
        pointer-events: none;
        z-index: 0;
    }

    .wcu-eyebrow {
        display: inline-block;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.03em;
        color: var(--brand-green-dark);
        margin-bottom: 1.25rem;
    }

    .wcu-heading {
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -0.015em;
        color: var(--text-dark);
        font-size: clamp(1.9rem, 4vw, 2.9rem);
        margin-bottom: 2.5rem;
    }

    .wcu-heading .accent {
        color: var(--brand-green);
    }

    .wcu-illustration-wrap {
        position: relative;
        max-width: 460px;
    }

    .wcu-illustration-wrap img {
        width: 100%;
        height: auto;
        display: block;
    }

    .wcu-body p {
        color: var(--text-body);
        font-size: 1.02rem;
        line-height: 1.7;
        margin-bottom: 1.5rem;
    }

    .wcu-body p:last-of-type {
        margin-bottom: 2rem;
    }

    .wcu-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.85rem 1.6rem;
        border: 1.5px solid var(--brand-green);
        border-radius: 8px;
        color: var(--brand-green-dark);
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: all 0.25s ease;
        background: transparent;
    }

    .wcu-btn i {
        font-size: 0.85rem;
        transition: transform 0.25s ease;
    }

    .wcu-btn:hover {
        background: var(--brand-green);
        color: #fff;
    }

    .wcu-btn:hover i {
        transform: translate(3px, -3px);
    }

    /* ===== Responsive tuning ===== */

    @media (max-width: 991.98px) {
        .wcu-section {
            padding: 3.5rem 0;
        }

        .wcu-illustration-wrap {
            max-width: 380px;
            margin: 0 auto;
        }

        .wcu-body {
            margin-top: 2.5rem;
        }
    }

    @media (max-width: 575.98px) {
        .wcu-section {
            padding: 2.75rem 0;
        }

        .wcu-eyebrow {
            font-size: 0.75rem;
        }

        .wcu-heading {
            margin-bottom: 1.75rem;
        }

        .wcu-illustration-wrap {
            max-width: 280px;
        }

        .wcu-body p {
            font-size: 0.96rem;
        }

        .wcu-btn {
            width: 100%;
            justify-content: center;
        }
    }



    .fh-section {
        position: relative;
        /* background: #ffffff; */
        overflow: hidden;
    }

    /* soft wave decoration at the bottom, like the reference */
    .fh-section::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 90px;
        background: radial-gradient(ellipse 60% 100% at 50% 100%, rgba(52, 199, 89, 0.05), transparent 70%);
        pointer-events: none;
    }

    .fh-card {
        display: flex;
        align-items: flex-start;
        gap: 1.1rem;
        background: #fff;
        border: 1px solid var(--card-border);
        border-radius: 14px;
        padding: 1.6rem 1.4rem;
        height: 100%;
        box-shadow: 0 4px 18px rgba(20, 22, 26, 0.03);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .fh-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 26px rgba(20, 22, 26, 0.07);
    }

    .fh-icon {
        flex: 0 0 auto;
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: var(--icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fh-icon i {
        font-size: 1.35rem;
        color: var(--brand-green);
    }

    .fh-title {
        font-weight: 700;
        font-size: 1.02rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .fh-desc {
        font-size: 0.9rem;
        line-height: 1.6;
        color: var(--text-body);
        margin-bottom: 0;
    }

    /* ===== Responsive tuning ===== */

    @media (max-width: 991.98px) {
        .fh-section {
            padding: 3.5rem 0;
        }

        .fh-card {
            padding: 1.4rem 1.2rem;
        }
    }

    @media (max-width: 767.98px) {
        .fh-card {
            flex-direction: row;
        }
    }

    @media (max-width: 575.98px) {
        .fh-section {
            padding: 2.75rem 0;
        }

        .fh-icon {
            width: 46px;
            height: 46px;
        }

        .fh-icon i {
            font-size: 1.15rem;
        }

        .fh-title {
            font-size: 0.98rem;
        }

        .fh-desc {
            font-size: 0.87rem;
        }
    }

    /* android services */

    .svc-section {
        background: #ffffff;
        padding: 5rem 0;
    }

    .svc-heading {
        font-weight: 800;
        letter-spacing: -0.015em;
        color: var(--text-dark);
        font-size: clamp(1.6rem, 3.4vw, 2.4rem);
        line-height: 1.25;
        text-align: center;
        margin-bottom: 1rem;
    }

    .svc-subheading {
        color: var(--text-body);
        font-size: 1.02rem;
        text-align: center;
        max-width: 620px;
        margin: 0 auto 3rem;
    }

    .svc-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: repeat(2, auto);
        grid-template-areas:
            "custom  phone  uiux"
            "api     testing playstore";
        gap: 1.5rem;
        align-items: stretch;
        justify-items: stretch;
    }

    .svc-card {
        display: flex;
        flex-direction: column;
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 16px;
        padding: 1.75rem 1.6rem;
        width: 100%;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .svc-card .svc-link {
        margin-top: auto;
        padding-top: 0.5rem;
    }

    .card-custom {
        grid-area: custom;
    }

    .card-uiux {
        grid-area: uiux;
    }

    .card-api {
        grid-area: api;
    }

    .card-testing {
        grid-area: testing;
    }

    .card-playstore {
        grid-area: playstore;
    }

    .svc-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(20, 22, 26, 0.06);
    }

    .svc-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--brand-green-light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.1rem;
    }

    .svc-icon i {
        font-size: 1.2rem;
        color: var(--brand-green);
    }

    .svc-title {
        font-weight: 700;
        font-size: 1.05rem;
        color: var(--text-dark);
        margin-bottom: 0.6rem;
    }

    .svc-desc {
        font-size: 0.9rem;
        line-height: 1.65;
        color: var(--text-body);
        margin-bottom: 1.1rem;
    }

    .svc-link {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.88rem;
        font-weight: 600;
        color: var(--brand-green);
        text-decoration: none;
    }

    .svc-link i {
        font-size: 0.72rem;
        transition: transform 0.2s ease;
    }

    .svc-link:hover i {
        transform: translateX(3px);
    }

    /* center phone cell */
    .svc-phone-cell {
        grid-area: phone;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .svc-phone-cell img {
        width: 100%;
        max-width: 240px;
        height: auto;
        display: block;
        filter: drop-shadow(0 18px 34px rgba(20, 22, 26, 0.12));
    }

    .svc-cta-wrap {
        text-align: center;
        margin-top: 3rem;
    }

    .svc-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.95rem 2rem;
        border-radius: 50px;
        background: var(--brand-green);
        color: #fff;
        font-weight: 600;
        font-size: 0.98rem;
        text-decoration: none;
        transition: background 0.25s ease, transform 0.25s ease;
    }

    .svc-cta i {
        font-size: 0.85rem;
        transition: transform 0.2s ease;
    }

    .svc-cta:hover {
        background: #167a3a;
        color: #fff;
        transform: translateY(-2px);
    }

    .svc-cta:hover i {
        transform: translateX(3px);
    }

    /* ===== Responsive tuning ===== */

    @media (max-width: 991.98px) {
        .svc-section {
            padding: 3.5rem 0;
        }

        .svc-grid {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto repeat(3, auto);
            grid-template-areas:
                "phone    phone"
                "custom   uiux"
                "api      testing"
                "playstore playstore";
        }

        .svc-phone-cell {
            margin-bottom: 0.5rem;
        }

        .svc-phone-cell img {
            max-width: 200px;
        }
    }

    @media (max-width: 575.98px) {
        .svc-section {
            padding: 2.75rem 0;
        }

        .svc-grid {
            grid-template-columns: 1fr;
            grid-template-rows: auto repeat(5, auto);
            grid-template-areas:
                "phone"
                "custom"
                "uiux"
                "api"
                "testing"
                "playstore";
        }

        .svc-subheading {
            margin-bottom: 2rem;
        }

        .svc-card {
            padding: 1.5rem 1.35rem;
        }

        .svc-cta {
            width: 100%;
            justify-content: center;
        }
    }

    /* FAQ */

    .faq-section {
        position: relative;
        background-color: #fbfbfa;
        background-image: radial-gradient(rgba(20, 22, 26, 0.05) 1px, transparent 1px);
        background-size: 16px 16px;
        padding: 5rem 0;
    }

    .faq-eyebrow {
        display: block;
        text-align: center;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 0.03em;
        color: var(--brand-green-dark);
        margin-bottom: 1rem;
    }

    .faq-heading {
        text-align: center;
        font-weight: 800;
        letter-spacing: -0.015em;
        line-height: 1.25;
        color: var(--text-dark);
        font-size: clamp(1.7rem, 3.6vw, 2.5rem);
        margin-bottom: 1rem;
    }

    .faq-heading .accent {
        display: block;
        color: var(--brand-green);
    }

    .faq-subheading {
        text-align: center;
        color: var(--text-body);
        font-size: 1rem;
        max-width: 560px;
        margin: 0 auto 3rem;
        line-height: 1.6;
    }

    .faq-list {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 14px;
        margin-bottom: 1rem;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(20, 22, 26, 0.02);
    }

    .faq-item.active {
        background: var(--active-bg);
        border-color: #dcefe0;
    }

    .faq-question {
        display: flex;
        align-items: center;
        gap: 1rem;
        width: 100%;
        background: none;
        border: none;
        text-align: left;
        padding: 1.15rem 1.4rem;
        cursor: pointer;
    }

    .faq-icon-toggle {
        flex: 0 0 auto;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--brand-green);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
    }

    .faq-question-text {
        flex: 1 1 auto;
        font-weight: 700;
        font-size: 1rem;
        color: var(--text-dark);
    }

    .faq-chevron {
        flex: 0 0 auto;
        color: var(--brand-green);
        font-size: 0.9rem;
        transition: transform 0.25s ease;
    }

    .faq-item.active .faq-chevron {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 220px;
    }

    .faq-answer-inner {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 0 1.4rem 1.4rem 1.4rem;
        border-top: 1px solid #dcefe0;
        padding-top: 1rem;
        margin: 0 1.4rem;
    }

    .faq-answer-icon {
        flex: 0 0 auto;
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: #eaf7ec;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .faq-answer-icon i {
        font-size: 1.25rem;
        color: var(--brand-green);
    }

    .faq-answer-text {
        font-size: 0.92rem;
        line-height: 1.7;
        color: var(--text-body);
        margin: 0;
        padding-top: 0.35rem;
    }

    /* ===== Responsive tuning ===== */

    @media (max-width: 767.98px) {
        .faq-section {
            padding: 3.5rem 0;
        }

        .faq-question {
            padding: 1rem 1.1rem;
            gap: 0.75rem;
        }

        .faq-question-text {
            font-size: 0.94rem;
        }

        .faq-answer-inner {
            margin: 0 1.1rem;
            padding: 1rem 0 1.1rem 0;
            gap: 0.75rem;
        }

        .faq-answer-icon {
            width: 38px;
            height: 38px;
        }

        .faq-answer-icon i {
            font-size: 1.05rem;
        }

        .faq-answer-text {
            font-size: 0.87rem;
        }
    }

    @media (max-width: 575.98px) {
        .faq-section {
            padding: 2.75rem 0;
        }

        .faq-subheading {
            margin-bottom: 2.25rem;
        }

        .faq-answer-inner {
            flex-direction: column;
        }

        .faq-item.active .faq-answer {
            max-height: 320px;
        }
    }
</style>

<section class="hero-section">

    <div class="hero-dots"></div>
    <div class="hero-blur-circle"></div>
    <div class="hero-diamond d1"></div>
    <div class="hero-diamond d2"></div>
    <i class="fa-brands fa-android hero-watermark"></i>

    <div class="container hero-content">
        <span class="hero-badge"><i class="fa-brands fa-android"></i> Android App Solutions</span>

        <h1 class="hero-heading">Build Powerful <span class="accent">Android</span> Apps for Modern Businesses</h1>

        <p class="hero-subtext">We design and develop scalable, user-friendly Android applications with smooth performance, clean UI, and reliable backend integration.</p>

        <div class="hero-ctas">
            <a href="#" class="hero-btn hero-btn-primary"><i class="fa-solid fa-paper-plane"></i> Start Your Project</a>
            <a href="#" class="hero-btn hero-btn-outline"><i class="fa-solid fa-briefcase"></i> View Portfolio</a>
        </div>
    </div>

    <div class="hero-phones">
        <img src="./assets/images/about/wandergo.png" alt="WanderGo travel app screen shown on a mobile phone" class="hero-phone hero-phone-side">
        <img src="./assets/images/about/shopnest.png" alt="ShopNest e-commerce app screen shown on a mobile phone" class="hero-phone hero-phone-center">
        <img src="./assets/images/about/analytics-pro.png" alt="Analytics Pro dashboard app screen shown on a mobile phone" class="hero-phone hero-phone-side">
    </div>

</section>

<!-- About Us -->

<section class="wcu-section">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center gy-4">

            <!-- Left column -->
            <div class="col-lg-6">
                <span class="wcu-eyebrow">[ why choose us ]</span>
                <h2 class="wcu-heading">
                    We build high-performance <span class="accent">Android apps</span> for growing businesses.
                </h2>
                <div class="wcu-illustration-wrap">
                    <img src="./assets/images/about/android-illustration.png" alt="Android app development illustration showing an Android mascot beside a phone displaying code">
                </div>
            </div>

            <!-- Right column -->
            <div class="col-lg-6">
                <div class="wcu-body">
                    <p>We are a leading Android app development company in Mumbai, delivering secure, scalable, and future-ready mobile applications.</p>
                    <p>We build custom Android solutions tailored to your business goals with clean architecture, intuitive UI, and smooth performance across all devices.</p>
                    <p>From feature-rich functionality and API integrations to rigorous testing and Google Play deployment, we handle everything end-to-end.</p>
                    <p>Whether you're a startup or an enterprise, we turn your ideas into powerful Android apps that drive engagement and growth.</p>

                    <a href="#" class="wcu-btn">
                        Explore our work <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!-- features highlighted -->
    <div class="fh-section">
        <div class="container position-relative" style="z-index:1;">
            <div class="row g-3 g-lg-4">

                <div class="col-md-4">
                    <div class="fh-card">
                        <div class="fh-icon">
                            <i class="fa-brands fa-android"></i>
                        </div>
                        <div>
                            <p class="fh-title">Custom Android Solutions</p>
                            <p class="fh-desc">Tailored Android apps built to match your business objectives and scale with your growth.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh-card">
                        <div class="fh-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div>
                            <p class="fh-title">UI/UX Focused Development</p>
                            <p class="fh-desc">Intuitive, responsive, and engaging designs that deliver seamless user experiences.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh-card">
                        <div class="fh-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div>
                            <p class="fh-title">Maintenance &amp; Support</p>
                            <p class="fh-desc">Reliable post-launch support, updates, and performance monitoring to keep your app running at its best.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- android services -->

<section class="svc-section">
    <div class="container">

        <h2 class="svc-heading">Everything Your Android App Needs.<br class="d-none d-md-block">Nothing You Don't.</h2>
        <p class="svc-subheading">Comprehensive Android app development designed for performance, scalability, and seamless user experience.</p>

        <div class="svc-grid">

            <!-- Custom Android App Development -->
            <div class="svc-card card-custom">
                <div class="svc-icon"><i class="fa-brands fa-android"></i></div>
                <p class="svc-title">Custom Android App Development</p>
                <p class="svc-desc">End-to-end Android app development tailored to your business goals, from concept to launch.</p>
                <a href="#" class="svc-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- Phone mockup -->
            <div class="svc-phone-cell">
                <img src="./assets/images/about/phone-mockup.png" alt="Mobile app screenshot shown inside a phone frame">
            </div>

            <!-- UI/UX App Design -->
            <div class="svc-card card-uiux">
                <div class="svc-icon"><i class="fa-solid fa-palette"></i></div>
                <p class="svc-title">UI/UX App Design</p>
                <p class="svc-desc">Modern, intuitive, and engaging UI/UX designed to deliver exceptional user experiences.</p>
                <a href="#" class="svc-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- API Integration -->
            <div class="svc-card card-api">
                <div class="svc-icon"><i class="fa-solid fa-plug"></i></div>
                <p class="svc-title">API Integration</p>
                <p class="svc-desc">Seamlessly integrate third-party APIs and backend services to extend your app's functionality.</p>
                <a href="#" class="svc-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- App Testing & QA -->
            <div class="svc-card card-testing">
                <div class="svc-icon"><i class="fa-solid fa-circle-check"></i></div>
                <p class="svc-title">App Testing &amp; QA</p>
                <p class="svc-desc">Thorough testing across devices and versions to ensure your app is secure, stable, and bug-free.</p>
                <a href="#" class="svc-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- Google Play Deployment -->
            <div class="svc-card card-playstore">
                <div class="svc-icon"><i class="fa-brands fa-google-play"></i></div>
                <p class="svc-title">Google Play Deployment</p>
                <p class="svc-desc">We handle everything from store listing optimization to publishing and compliance on Google Play.</p>
                <a href="#" class="svc-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

        </div>

        <div class="svc-cta-wrap">
            <a href="#" class="svc-cta">Explore Our Android Services <i class="fa-solid fa-arrow-right"></i></a>
        </div>

    </div>
</section>


<!-- portfolio -->
<section class="tf-portfolio tf-section">
    <div class="container">
        <div class="text-center">
            <div class="tf-section__kicker justify-content-center">Our Work</div>
            <h2 class="tf-section__title">Explore Our Portfolio Showcase</h2>
            <p class="tf-section__lead">A selection of modern digital products we design and build to help brands deliver exceptional experiences.</p>
            <div class="tf-portfolio-cta">
                <a class="tf-btn tf-btn--primary" href="portfolios.php">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-4 mt-4">
            <div class="col">
                <article class="tf-portfolio-card">
                    <div class="tf-portfolio-card__image">
                        <img src="assets/images/project/app-project-1.png" alt="Portfolio preview 1">
                    </div>
                </article>
            </div>
            <div class="col">
                <article class="tf-portfolio-card">
                    <div class="tf-portfolio-card__image">
                        <img src="assets/images/project/app-project-2.png" alt="Portfolio preview 2">
                    </div>
                </article>
            </div>
            <div class="col">
                <article class="tf-portfolio-card">
                    <div class="tf-portfolio-card__image">
                        <img src="assets/images/project/app-project-3.png" alt="Portfolio preview 3">
                    </div>
                </article>
            </div>
            <div class="col">
                <article class="tf-portfolio-card">
                    <div class="tf-portfolio-card__image">
                        <img src="assets/images/project/app-project-4.png" alt="Portfolio preview 4">
                    </div>
                </article>
            </div>
            <div class="col">
                <article class="tf-portfolio-card">
                    <div class="tf-portfolio-card__image">
                        <img src="assets/images/project/app-project-5.png" alt="Portfolio preview 5">
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
<section class="shopify-testimonials-sec ibt-section-gap">
    <div class="container">
        <div class="shopify-testimonials-head">
            <span class="shopify-testimonials-kicker">[ testimonials ]</span>
            <h2 class="shopify-testimonials-title">What Our Clients Say About Our <span>Android App Development</span></h2>
            <!-- <p class="shopify-testimonials-description">We build secure, scalable, and user-friendly Android apps that drive real results for startups and enterprises worldwide.</p> -->
        </div>

        <div class="shopify-testimonials-grid">
            <article class="shopify-testimonial-card">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="shopify-quote">&#8220;</span>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <p>Amazing experience. They built our Shopify store exactly how we envisioned it. Sales increased within the first month.</p>
                <div class="shopify-reviewer">
                    <div class="shopify-avatar is-olive"><i class="fa fa-shopping-bag"></i></div>
                    <div>
                        <h4>Olivia Parker</h4>
                        <span>Founder, Luxora Fashion</span>
                    </div>
                </div>
            </article>

            <article class="shopify-testimonial-card">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="shopify-quote">&#8220;</span>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <p>Professional, responsive, and very skilled. The team optimized our store speed and the results were incredible.</p>
                <div class="shopify-reviewer">
                    <div class="shopify-avatar is-sand"><i class="fa fa-shopping-bag"></i></div>

                    <div>
                        <h4>James Carter</h4>
                        <span>CEO, TechVibe Store</span>
                    </div>
                    <!-- <div class="shopify-badge"><i class="fa fa-desktop"></i></div> -->
                </div>
            </article>

            <article class="shopify-testimonial-card">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="shopify-quote">&#8220;</span>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <p>From design to launch, everything was seamless. Our store looks stunning and customers love the experience.</p>
                <div class="shopify-reviewer">
                    <div class="shopify-avatar is-green"><i class="fa fa-shopping-bag"></i></div>
                    <div>
                        <h4>Sophia Bennett</h4>
                        <span>Owner, Glow Beauty</span>
                    </div>
                    <!-- <div class="shopify-badge"><i class="fa fa-leaf"></i></div> -->
                </div>
            </article>

            <article class="shopify-testimonial-card">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="shopify-quote">&#8220;</span>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <p>Their support even after delivery is outstanding. Highly recommend them to anyone looking to grow online.</p>
                <div class="shopify-reviewer">
                    <div class="shopify-avatar is-gold"><i class="fa fa-shopping-bag"></i></div>

                    <div>
                        <h4>Daniel Brooks</h4>
                        <span>Founder, Nestify Home</span>
                    </div>
                    <!-- <div class="shopify-badge"><i class="fa fa-home"></i></div> -->
                </div>
            </article>
        </div>
    </div>
</section>


<!-- FAQ -->
<section class="faq-section">
    <div class="container">

        <span class="faq-eyebrow">[ faq ]</span>
        <h2 class="faq-heading">Frequently Asked Questions About<span class="accent">Android App Development</span></h2>
        <p class="faq-subheading">Find answers to common questions about our Android app development services, process, and support.</p>

        <div class="faq-list">

            <!-- Item 1 -->
            <div class="faq-item active">
                <button class="faq-question" type="button" aria-expanded="true">
                    <span class="faq-icon-toggle"><i class="fa-solid fa-minus"></i></span>
                    <span class="faq-question-text">How long does it take to build an Android app?</span>
                    <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <span class="faq-answer-icon"><i class="fa-brands fa-android"></i></span>
                        <p class="faq-answer-text">The timeline depends on the complexity and scope of your app. A basic app can take 4&ndash;6 weeks, while more advanced apps with custom features, integrations, and rigorous testing can take 8&ndash;16+ weeks. We provide a detailed timeline after understanding your requirements.</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span class="faq-icon-toggle"><i class="fa-solid fa-plus"></i></span>
                    <span class="faq-question-text">Do you develop custom Android apps for startups and enterprises?</span>
                    <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <span class="faq-answer-icon"><i class="fa-solid fa-building"></i></span>
                        <p class="faq-answer-text">Yes, we build tailored Android apps for both early-stage startups and large enterprises, scaling our process and architecture to match your team size and growth plans.</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span class="faq-icon-toggle"><i class="fa-solid fa-plus"></i></span>
                    <span class="faq-question-text">Can you redesign or upgrade an existing Android app?</span>
                    <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <span class="faq-answer-icon"><i class="fa-solid fa-arrows-rotate"></i></span>
                        <p class="faq-answer-text">Absolutely. We audit your existing app, then modernize the UI, refactor the codebase, and add new features while keeping your current users and data intact.</p>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span class="faq-icon-toggle"><i class="fa-solid fa-plus"></i></span>
                    <span class="faq-question-text">Do you provide API integration and backend support?</span>
                    <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <span class="faq-answer-icon"><i class="fa-solid fa-plug"></i></span>
                        <p class="faq-answer-text">Yes, we handle third-party API integrations, custom backend development, and ongoing server support so your app stays connected and reliable.</p>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span class="faq-icon-toggle"><i class="fa-solid fa-plus"></i></span>
                    <span class="faq-question-text">Will you help with Play Store deployment and maintenance?</span>
                    <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <span class="faq-answer-icon"><i class="fa-brands fa-google-play"></i></span>
                        <p class="faq-answer-text">Yes, we manage store listing setup, publishing, compliance, and provide ongoing maintenance and updates after your app goes live.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    document.querySelectorAll('.faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = btn.closest('.faq-item');
            var isActive = item.classList.contains('active');

            document.querySelectorAll('.faq-item').forEach(function(el) {
                el.classList.remove('active');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                var icon = el.querySelector('.faq-icon-toggle i');
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            });

            if (!isActive) {
                item.classList.add('active');
                btn.setAttribute('aria-expanded', 'true');
                var activeIcon = item.querySelector('.faq-icon-toggle i');
                activeIcon.classList.remove('fa-plus');
                activeIcon.classList.add('fa-minus');
            }
        });
    });
</script>


<?php include __DIR__ . '/footer.php'; ?>


