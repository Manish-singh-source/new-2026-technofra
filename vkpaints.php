<?php
$pageTitle = 'VK Paints | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .vk-hero {
        position: relative;
        overflow: hidden;
        padding: 150px 0 90px;
        background: linear-gradient(135deg, #f1f1fb 0%, #eef7fc 46%, #2cb1e6 100%);
    }

    .vk-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 14% 18%, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0) 34%),
            radial-gradient(circle at 82% 20%, rgba(44, 177, 230, 0.2) 0%, rgba(44, 177, 230, 0) 30%);
        pointer-events: none;
    }

    .vk-hero .container {
        position: relative;
        z-index: 1;
    }

    .vk-hero__grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(320px, 520px);
        align-items: center;
        gap: 48px;
    }


    .vk-hero__eyebrow {
        display: inline-flex;
        align-items: center;
        margin-bottom: 18px;
        padding: 10px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.8);
        color: #1579a8;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .vk-hero__content h1 {
        margin: 0 0 18px;
        color: #10233b;
        font-size: clamp(38px, 5vw, 64px);
        line-height: 1.02;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .vk-hero__content h1 span {
        color: #148fc4;
    }

    .vk-hero__content p {
        margin: 0 0 28px;
        max-width: 560px;
        color: #34506a;
        font-size: 18px;
        line-height: 1.8;
    }

    .vk-hero__actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .vk-hero__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 170px;
        padding: 14px 24px;
        border-radius: 999px;
        border: 1px solid transparent;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.02em;
        text-decoration: none;
        transition: transform .25s ease, background-color .25s ease, color .25s ease, border-color .25s ease;
    }

    .vk-hero__btn:hover {
        transform: translateY(-2px);
        text-decoration: none;
    }

    .vk-hero__btn--primary {
        background: #10233b;
        color: #ffffff;
    }

    .vk-hero__btn--primary:hover {
        color: #ffffff;
        background: #0b1b31;
    }

    .vk-hero__btn--secondary {
        background: rgba(255, 255, 255, 0.68);
        border-color: rgba(16, 35, 59, 0.12);
        color: #10233b;
    }

    .vk-hero__btn--secondary:hover {
        color: #10233b;
        background: #ffffff;
    }

    .vk-hero__visual {
        position: relative;
    }


    .vk-hero__card img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
    }

    .vk-hero__badge {
        position: absolute;
        right: -18px;
        bottom: 28px;
        padding: 16px 20px;
        border-radius: 18px;
        background: #ffffff;
        box-shadow: 0 18px 35px rgba(16, 35, 59, 0.14);
        color: #10233b;
    }

    .vk-hero__badge strong {
        display: block;
        margin-bottom: 4px;
        color: #148fc4;
        font-size: 24px;
        line-height: 1;
    }

    .vk-hero__badge span {
        display: block;
        font-size: 13px;
        line-height: 1.5;
    }

    @media (max-width: 991px) {
        .vk-hero {
            padding: 130px 0 80px;
        }

        .vk-hero__grid {
            grid-template-columns: 1fr;
            gap: 36px;
        }

        .vk-hero__content {
            max-width: 100%;
            text-align: center;
        }

        .vk-hero__actions {
            justify-content: center;
        }

        .vk-hero__visual {
            max-width: 620px;
            margin: 0 auto;
        }

        .vk-about {
            padding: 80px 0 110px;
        }

        .vk-about__grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .vk-about__copy {
            max-width: 100%;
        }

        .vk-about__copy p {
            max-width: 100%;
        }

        .vk-about__visual {
            padding-bottom: 110px;
        }

        .vk-about__image-wrap {
            margin: 0 auto;
            max-width: 100%;
        }

        .vk-about__stats {
            left: 0;
            right: 0;
        }

        .wotm-screen-grid {
            grid-template-columns: 1fr;
            gap: 34px;
        }

        .wotm-screen-copy {
            max-width: 100%;
        }
    }

    @media (max-width: 767px) {
        .vk-hero {
            padding: 118px 0 70px;
        }

        .vk-hero__content p {
            font-size: 16px;
            line-height: 1.7;
        }

        .vk-hero__card {
            padding: 16px;
            border-radius: 22px;
        }

        .vk-hero__badge {
            position: static;
            margin-top: 16px;
        }

        .vk-hero__btn {
            width: 100%;
        }

        .vk-about {
            padding: 72px 0 88px;
        }

        .vk-about::before {
            display: none;
        }

        .vk-about__eyebrow {
            margin-bottom: 18px;
        }

        .vk-about__copy h2 {
            margin-bottom: 18px;
            font-size: clamp(30px, 10vw, 42px);
        }

        .vk-about__copy p {
            margin-bottom: 26px;
            font-size: 16px;
            line-height: 1.7;
        }

        .vk-about__features {
            gap: 18px;
            margin-bottom: 28px;
        }

        .vk-about__feature {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .vk-about__icon {
            width: 58px;
            height: 58px;
            font-size: 24px;
        }

        .vk-about__feature h3 {
            font-size: 17px;
        }

        .vk-about__feature p {
            font-size: 15px;
            line-height: 1.65;
        }

        .vk-about__visual {
            padding-bottom: 0;
        }

        .vk-about__image-wrap {
            border-radius: 26px 26px 0 0;
        }

        .vk-about__image-wrap::after {
            display: none;
        }

        .vk-about__stats {
            position: static;
            margin-top: 18px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0;
            border-radius: 22px;
        }

        .vk-about__stat {
            padding: 16px 12px;
            border-right: 0;
            border-bottom: 1px solid rgba(16, 35, 59, 0.08);
        }

        .vk-about__stat:nth-child(odd) {
            border-right: 1px solid rgba(16, 35, 59, 0.08);
        }

        .vk-about__stat:nth-last-child(-n+2) {
            border-bottom: 0;
        }

        .wotm-responsive-media {
            padding: 0 0 50px !important;
        }

        .wotm-responsive-image .wotm-desktop-image {
            display: none;
        }

        .wotm-responsive-image .wotm-mobile-image {
            display: block;
        }

        .wotm-selected-work {
            padding: 72px 0;
        }

        .wotm-selected-expertise {
            gap: 22px;
        }

        .wotm-selected-expertise h2 {
            font-size: clamp(34px, 12vw, 56px);
        }

        .wotm-screen-showcase {
            padding: 72px 0;
        }

        .wotm-screen-copy h2 {
            margin-bottom: 18px;
            font-size: clamp(32px, 11vw, 48px);
        }

        .wotm-screen-copy p {
            margin-bottom: 24px;
            font-size: 15px;
            line-height: 1.75;
        }

        .wotm-screen-features {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .wotm-screen-features li {
            padding-top: 0;
            padding-left: 64px;
            min-height: 46px;
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .wotm-screen-features li::before {
            width: 44px;
            height: 44px;
        }

        .wotm-screen-features li::after {
            top: 11px;
            left: 11px;
        }

        .wotm-screen-features li:nth-child(2)::after,
        .wotm-screen-features li:nth-child(3)::after {
            left: 14px;
        }
    }

    .vk-about {
        position: relative;
        padding: 95px 0 120px;
        background: linear-gradient(180deg, #ffffff 0%, #f6f9fd 100%);
        overflow: hidden;
    }

    .vk-about::before {
        content: "";
        position: absolute;
        top: 70px;
        right: 6%;
        width: 180px;
        height: 180px;
        background-image: radial-gradient(rgba(44, 177, 230, 0.35) 2px, transparent 2px);
        background-size: 18px 18px;
        pointer-events: none;
    }

    .vk-about__grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(360px, 700px);
        align-items: center;
        gap: 54px;
    }

    .vk-about__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
        color: #21b1ea;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .vk-about__eyebrow::before {
        content: "";
        width: 42px;
        height: 2px;
        background: #21b1ea;
        border-radius: 999px;
    }

    .vk-about__copy h2 {
        margin: 0 0 24px;
        color: #10233b;
        font-size: clamp(38px, 5vw, 62px);
        line-height: 1.04;
        font-weight: 800;
        letter-spacing: -0.05em;
    }

    .vk-about__copy h2 span {
        color: #21b1ea;
    }

    .vk-about__copy p {
        margin: 0 0 34px;
        max-width: 600px;
        color: #475d76;
        font-size: 18px;
        line-height: 1.75;
    }

    .vk-about__features {
        display: grid;
        gap: 22px;
        margin-bottom: 34px;
    }

    .vk-about__feature {
        display: grid;
        grid-template-columns: 78px 1fr;
        gap: 18px;
        align-items: start;
    }

    .vk-about__icon {
        width: 72px;
        height: 72px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: linear-gradient(180deg, #eef5ff 0%, #dceaff 100%);
        color: #21b1ea;
        font-size: 30px;
        box-shadow: inset 0 0 0 1px rgba(35, 103, 222, 0.08);
    }

    .vk-about__feature h3 {
        margin: 0 0 8px;
        color: #10233b;
        font-size: 18px;
        line-height: 1.3;
        font-weight: 700;
    }

    .vk-about__feature p {
        margin: 0;
        color: #4d6178;
        font-size: 16px;
        line-height: 1.7;
    }

    .vk-about__btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 28px;
        border-radius: 14px;
        background: linear-gradient(135deg, #21b1ea 0%, #2cb1e6 100%);
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 18px 40px rgba(35, 103, 222, 0.22);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .vk-about__btn:hover {
        color: #ffffff;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 22px 44px rgba(35, 103, 222, 0.26);
    }

    .vk-about__visual {
        position: relative;
        padding-bottom: 140px;
    }

    .vk-about__image-wrap {
        position: relative;
        margin-left: auto;
        max-width: 720px;
        border-radius: 52px 52px 0 0;
        overflow: hidden;
        background: linear-gradient(180deg, #c9def7 0%, #f0f6ff 100%);
        box-shadow: 0 30px 70px rgba(17, 47, 91, 0.14);
    }

    .vk-about__image-wrap::after {
        content: "";
        position: absolute;
        right: -26px;
        bottom: -58px;
        width: 180px;
        height: 72%;
        border-radius: 0 34px 34px 0;
        background: rgba(35, 103, 222, 0.14);
        z-index: 0;
    }

    .vk-about__image-wrap img {
        position: relative;
        z-index: 1;
        width: 100%;
        height: auto;
        display: block;
    }

    .vk-about__stats {
        position: absolute;
        left: -18px;
        right: 18px;
        bottom: -52px;
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0;
        padding: 24px 18px;
        border-radius: 28px;
        background: rgba(255, 255, 255, 0.96);
        box-shadow: 0 24px 60px rgba(17, 47, 91, 0.12);
    }

    .vk-about__stat {
        padding: 12px 18px;
        text-align: center;
        border-right: 1px solid rgba(16, 35, 59, 0.08);
    }

    .vk-about__stat:last-child {
        border-right: 0;
    }

    .vk-about__stat i {
        display: inline-flex;
        margin-bottom: 14px;
        color: #21b1ea;
        font-size: 28px;
    }

    .vk-about__stat strong {
        display: block;
        margin-bottom: 6px;
        color: #21b1ea;
        font-size: clamp(28px, 3vw, 44px);
        line-height: 1;
        font-weight: 800;
    }

    .vk-about__stat span {
        display: block;
        color: #465a72;
        font-size: 15px;
        line-height: 1.5;
    }

    .wotm-selected-work {
        padding: 95px 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8f8f6 100%);
    }

    .wotm-selected-expertise {
        display: grid;
        gap: 30px;
    }

    .wotm-selected-expertise h2 {
        margin: 0;
        color: #21b1ea;
        font-size: clamp(44px, 6vw, 88px);
        line-height: 0.95;
        font-weight: 700;
        text-align: center;
        letter-spacing: -0.05em;
    }

    .wotm-selected-expertise-media {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(20, 20, 20, 0.12);
    }

    .wotm-selected-expertise-media img {
        width: 100%;
        height: auto;
        display: block;
    }

    .wotm-responsive-media {
        padding: 50px 0 50px;
        background: #fff;
    }

    .wotm-responsive-image {
        border-radius: 8px;
        overflow: hidden;
    }

    .wotm-responsive-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .wotm-responsive-image .wotm-mobile-image {
        display: none;
    }
.wotm-screen-showcase {
    padding: 50px 0 50px;
    background: linear-gradient(180deg, #97c2e9 0%, #5f93cc 100%);
    overflow: hidden;
}

    .wotm-screen-grid {
        display: grid;
        grid-template-columns: minmax(280px, 410px) 1fr;
        align-items: center;
        gap: 44px;
    }

    .wotm-screen-copy {
        max-width: 390px;
        color: #2d2117;
    }

    .wotm-screen-eyebrow {
        display: inline-block;
        margin-bottom: 18px;
        padding-bottom: 12px;
        border-bottom: 2px solid rgba(120, 82, 48, 0.28);
        color: #9b7450;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
    }

    .wotm-screen-copy h2 {
        margin: 0 0 26px;
        color: #1f150f;
        font-size: clamp(40px, 5vw, 78px);
        line-height: 0.95;
        font-weight: 400;
        letter-spacing: -0.05em;
    }

    .wotm-screen-copy h2 em {
        font-style: italic;
        font-weight: 400;
    }

    .wotm-screen-copy p {
        margin: 0 0 34px;
        color: #5a4a3c;
        font-size: 16px;
        line-height: 1.9;
    }

    .wotm-screen-features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .wotm-screen-features li {
        position: relative;
        padding-top: 58px;
        color: #5a4a3c;
        font-size: 14px;
        line-height: 1.35;
    }

    .wotm-screen-features li::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 46px;
        height: 46px;
        border: 2px solid rgba(144, 104, 63, 0.55);
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.38);
    }

    .wotm-screen-features li::after {
        content: "";
        position: absolute;
        top: 12px;
        left: 12px;
        width: 22px;
        height: 18px;
        border: 2px solid #8c6847;
        border-radius: 4px;
    }

    .wotm-screen-features li:nth-child(2)::after {
        top: 8px;
        left: 15px;
        width: 16px;
        height: 24px;
        border-radius: 4px;
    }

    .wotm-screen-features li:nth-child(3)::after {
        top: 9px;
        left: 15px;
        width: 16px;
        height: 26px;
        border-radius: 5px;
    }    .wotm-screen-showcase .container {
        position: relative;
        z-index: 1;
    }

    .wotm-screen-visual {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wotm-screen-visual img {
        width: 100%;
        max-width: 680px;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    @media (max-width: 767px) {
        .vk-about {
            padding: 72px 0 88px;
        }

        .vk-about .container {
            padding-left: 16px;
            padding-right: 16px;
        }

        .vk-about::before {
            display: none;
        }

        .vk-about__grid {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .vk-about__copy,
        .vk-about__copy p,
        .vk-about__visual,
        .vk-about__image-wrap {
            max-width: 100%;
        }

        .vk-about__copy h2 {
            margin-bottom: 18px;
            font-size: clamp(30px, 10vw, 42px);
        }

        .vk-about__copy p {
            margin-bottom: 26px;
            font-size: 16px;
            line-height: 1.7;
        }

        .vk-about__features {
            gap: 18px;
            margin-bottom: 28px;
        }

        .vk-about__feature {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .vk-about__icon {
            width: 58px;
            height: 58px;
            font-size: 24px;
        }

        .vk-about__feature h3 {
            font-size: 17px;
        }

        .vk-about__feature p {
            font-size: 15px;
            line-height: 1.65;
        }

        .vk-about__visual {
            padding-bottom: 0;
        }

        .vk-about__image-wrap {
            margin-left: 0;
            border-radius: 26px 26px 0 0;
        }

        .vk-about__image-wrap::after {
            display: none;
        }

        .vk-about__stats {
            position: static;
            left: auto;
            right: auto;
            bottom: auto;
            margin-top: 18px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0;
            border-radius: 22px;
        }

        .vk-about__stat {
            padding: 16px 12px;
            border-right: 0;
            border-bottom: 1px solid rgba(16, 35, 59, 0.08);
        }

        .vk-about__stat:nth-child(odd) {
            border-right: 1px solid rgba(16, 35, 59, 0.08);
        }

        .vk-about__stat:nth-last-child(-n+2) {
            border-bottom: 0;
        }

        .vk-about__stat strong {
            font-size: 26px;
        }

        .vk-about__stat span {
            font-size: 13px;
        }
    }
    @media (max-width: 767px) {
        .wotm-screen-showcase {
            padding: 64px 0;
        }

        .wotm-screen-showcase .container {
            padding-left: 16px;
            padding-right: 16px;
        }

        .wotm-screen-grid {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .wotm-screen-copy {
            max-width: 100%;
            order: 1;
        }

        .wotm-screen-copy h2 {
            margin-bottom: 18px;
            font-size: clamp(32px, 11vw, 48px);
        }

        .wotm-screen-copy p {
            margin-bottom: 22px;
            font-size: 15px;
            line-height: 1.7;
        }

        .wotm-screen-features {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .wotm-screen-features li {
            min-height: 46px;
            padding-top: 0;
            padding-left: 64px;
            display: flex;
            align-items: center;
        }

        .wotm-screen-visual {
            order: 2;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .wotm-screen-visual img {
            width: 100%;
            max-width: 100%;
        }
    }
</style>

<main>
    <section class="vk-hero">
        <div class="container">
            <div class="vk-hero__grid"> 
                <div class="vk-hero__content">
                    <span class="vk-hero__eyebrow">VK Paints</span>
                    <h1>Premium Paints for <span>Every
Surface</span></h1>
                    <p>Leading manufacturer of Marine Paints, Industrial Coatings, and Decorative Paints.
Quality that protects, colors that inspire.</p>
                    <div class="vk-hero__actions">
                        <a href="contact.php" class="vk-hero__btn vk-hero__btn--primary">Get Started</a>
                        <a href="portfolios.php" class="vk-hero__btn vk-hero__btn--secondary">View Portfolio</a>
                    </div>
                </div>

                <div class="vk-hero__visual">
                    <div class="vk-hero__card">
                        <img src="assets/images/new/vk.png" alt="VK Paints hero showcase">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vk-about">
        <div class="container">
            <div class="vk-about__grid">
                <div class="vk-about__copy">
                    <span class="vk-about__eyebrow">About VK Paints</span>
                    <h2>Crafting Excellence in <span>Every Coat</span></h2>
                    <p>VK Paints is a trusted name in the paint industry, delivering high-performance coating solutions for marine, industrial, and decorative applications. With a strong focus on quality, innovation, and customer satisfaction, we bring colour and protection to every surface.</p>

                    <div class="vk-about__features">
                        <div class="vk-about__feature">
                            <span class="vk-about__icon"><i class="fas fa-shield-alt"></i></span>
                            <div>
                                <h3>Premium Quality</h3>
                                <p>Our paints are formulated with advanced technology to deliver superior finish and long-lasting protection.</p>
                            </div>
                        </div>

                        <div class="vk-about__feature">
                            <span class="vk-about__icon"><i class="fas fa-flask"></i></span>
                            <div>
                                <h3>Innovative Solutions</h3>
                                <p>We continuously research and innovate to provide eco-friendly and high-performance coating systems.</p>
                            </div>
                        </div>

                        <div class="vk-about__feature">
                            <span class="vk-about__icon"><i class="fas fa-users"></i></span>
                            <div>
                                <h3>Customer First</h3>
                                <p>We build lasting relationships by offering reliable products, responsive service, and expert guidance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- <a href="about-us.php" class="vk-about__btn">Discover More About Us <i class="fas fa-arrow-right"></i></a> -->
                </div>

                <div class="vk-about__visual">
                    <div class="vk-about__image-wrap">
                        <img src="assets/images/new/vk1.png" alt="VK Paints product range">
                    </div>

                    <div class="vk-about__stats">
                        <div class="vk-about__stat">
                            <i class="fas fa-award"></i>
                            <strong>15+</strong>
                            <span>Years of Experience</span>
                        </div>
                        <div class="vk-about__stat">
                            <i class="fas fa-briefcase"></i>
                            <strong>500+</strong>
                            <span>Products</span>
                        </div>
                        <div class="vk-about__stat">
                            <i class="fas fa-industry"></i>
                            <strong>1000+</strong>
                            <span>Satisfied Clients</span>
                        </div>
                        <div class="vk-about__stat">
                            <i class="fas fa-globe"></i>
                            <strong>25+</strong>
                            <span>Countries Served</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-expertise">
            <h2>Our Expertise</h2>
            <div class="wotm-selected-expertise-media" aria-hidden="true">
                <img src="./assets/images/new/vk2.png" alt="Our Expertise">
            </div>
        </div>
    </div>
</section>
<section class="wotm-responsive-media">
    <div class="container">
        <div class="wotm-responsive-image" aria-hidden="true">
            <img class="wotm-desktop-image" src="./assets/images/new/vk3.png" alt="">
            <img class="wotm-mobile-image" src="./assets/images/new/vk4.png" alt="">
        </div>
    </div>
</section>
<section class="wotm-screen-showcase">
    <div class="container">
        <div class="wotm-screen-grid">
            <div class="wotm-screen-copy">
                <span class="wotm-screen-eyebrow">Responsive Experience</span>
                <h2>Built for<br><em>Every Screen</em></h2>
                <p>We designed the Oceanic layout to deliver a smooth shopping experience across desktop, tablet, and mobile devices. Every section stays clean, elegant, and easy to browse on any screen size.</p>
                <ul class="wotm-screen-features">
                    <li>Desktop Friendly</li>
                    <li>Tablet Ready</li>
                    <li>Mobile Optimized</li>
                </ul>
            </div>

            <div class="wotm-screen-visual" aria-hidden="true">
                <img src="./assets/images/new/vk5.png" alt="">
            </div>
        </div>
    </div>
</section>
</main>

<?php include __DIR__ . '/footer.php'; ?>















