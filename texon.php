<?php
$pageTitle = 'Texon Corporation Case Study | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .texon-hero {
        position: relative;
        overflow: hidden;
        padding: 132px 0 88px;
        background:
            radial-gradient(circle at top left, rgba(73, 123, 255, 0.18), transparent 34%),
            radial-gradient(circle at right center, rgba(33, 120, 255, 0.14), transparent 28%),
            linear-gradient(135deg, #f6f9ff 0%, #eef4ff 52%, #f8fbff 100%);
    }

    .texon-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(rgba(41, 89, 204, 0.12) 1.2px, transparent 1.2px),
            linear-gradient(120deg, rgba(255, 255, 255, 0.65), rgba(255, 255, 255, 0));
        background-size: 16px 16px, 100% 100%;
        background-position: 43% 22%, center;
        pointer-events: none;
    }

    .texon-hero__wrap {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: minmax(0, 520px) minmax(0, 1fr);
        align-items: center;
        gap: 40px;
    }

    .texon-hero__content h1 {
        margin: 0;
        color: #17233f;
        font-size: clamp(38px, 4.5vw, 64px);
        line-height: 1.03;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .texon-hero__content h1 span {
        color: #f69707;
    }

    .texon-hero__content p {
        max-width: 500px;
        margin: 22px 0 0;
        color: #5f6f90;
        font-size: 17px;
        line-height: 1.8;
    }

    .texon-hero__actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 30px;
    }

    .texon-hero__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 168px;
        padding: 14px 24px;
        border-radius: 999px;
        border: 1px solid transparent;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.02em;
        text-transform: uppercase;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
    }

    .texon-hero__btn:hover {
        transform: translateY(-2px);
    }

    .texon-hero__btn--primary {
        background: linear-gradient(135deg, #f69707 0%, #f69707 100%);
        color: #fff;
        box-shadow: 0 20px 35px rgba(47, 107, 255, 0.24);
    }

    .texon-hero__btn--primary:hover {
        color: #fff;
        box-shadow: 0 26px 40px rgba(47, 107, 255, 0.28);
    }

    .texon-hero__btn--ghost {
        background: rgba(255, 255, 255, 0.76);
        border-color: rgba(31, 54, 113, 0.12);
        color: #17233f;
        box-shadow: 0 14px 28px rgba(23, 35, 63, 0.08);
    }

    .texon-hero__btn--ghost:hover {
        color: #17233f;
        border-color: rgba(47, 107, 255, 0.2);
        background: #fff;
    }

    .texon-hero__features {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        margin: 30px 0 0;
        padding: 0;
        list-style: none;
    }

    .texon-hero__features li {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #40506d;
        font-size: 15px;
        font-weight: 600;
    }

    .texon-hero__features i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: rgba(47, 107, 255, 0.12);
        color: #f69707;
        font-size: 14px;
    }

    .texon-hero__visual {
        position: relative;
        min-height: 460px;
    }

    .texon-hero__glow {
        position: absolute;
        right: 4%;
        bottom: 10%;
        width: 76%;
        height: 70%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(64, 123, 255, 0.22) 0%, rgba(64, 123, 255, 0) 72%);
        filter: blur(12px);
    }

    .texon-hero__dashboard {
        position: relative;
        z-index: 2;
        margin-left: auto;
        max-width: 720px;
        padding: 18px;
        border-radius: 30px;
    }

    .texon-hero__dashboard img {
        display: block;
        width: 100%;
        border-radius: 22px;
    }

    .texon-hero__phone {
        position: absolute;
        left: 2%;
        bottom: -10px;
        z-index: 3;
        width: min(26vw, 190px);
        max-width: 190px;
        filter: drop-shadow(0 22px 36px rgba(26, 38, 74, 0.22));
    }

    .texon-hero__card {
        position: absolute;
        top: 14%;
        left: 6%;
        z-index: 4;
        min-width: 185px;
        padding: 16px 18px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 22px 44px rgba(24, 47, 97, 0.12);
    }

    .texon-hero__card-label {
        display: block;
        color: #7a88a8;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .texon-hero__card-value {
        display: block;
        margin-top: 8px;
        color: #17233f;
        font-size: 30px;
        line-height: 1;
        font-weight: 800;
    }

    .texon-hero__card-trend {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 10px;
        color: #1f9d62;
        font-size: 14px;
        font-weight: 700;
    }

    .texon-hero__card-trend i {
        font-size: 12px;
    }

    @media (max-width: 1199px) {
        .texon-hero {
            padding: 118px 0 78px;
        }

        .texon-hero__wrap {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .texon-hero__content {
            max-width: 700px;
        }

        .texon-hero__visual {
            min-height: 420px;
        }

        .texon-hero__dashboard {
            margin: 0 auto;
        }
    }

    @media (max-width: 767px) {
        .texon-hero {
            padding: 104px 0 64px;
        }

        .texon-hero__content h1 {
            font-size: 40px;
        }

        .texon-hero__content p {
            font-size: 15px;
            line-height: 1.7;
        }

        .texon-hero__actions {
            flex-direction: column;
            align-items: stretch;
        }

        .texon-hero__btn {
            width: 100%;
        }

        .texon-hero__features {
            gap: 14px;
        }

        .texon-hero__visual {
            min-height: 300px;
        }

        .texon-hero__dashboard {
            padding: 10px;
            border-radius: 20px;
        }

        .texon-hero__dashboard img {
            border-radius: 14px;
        }

        .texon-hero__phone {
            left: 0;
            width: 120px;
        }

        .texon-hero__card {
            top: auto;
            left: auto;
            right: 0;
            bottom: 18px;
            min-width: 152px;
            padding: 14px;
        }

        .texon-hero__card-value {
            font-size: 24px;
        }
    }


    .wotm-branding-grid {
        display: grid;
        grid-template-columns: minmax(260px, 360px) 1fr;
        align-items: center;
        gap: 48px;
    }

    .wotm-branding-copy h2 {
        margin: 0 0 20px;
        color: #121212;
        font-size: clamp(34px, 4vw, 52px);
        line-height: 1.05;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .wotm-branding-copy h2 span {
        color: #e98c04;
    }

    .wotm-branding-copy p {
        margin: 0 0 28px;
        max-width: 300px;
        color: #5e5e5e;
        font-size: 16px;
        line-height: 1.75;
    }

    .wotm-branding-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        background: #111;
        border-radius: 999px;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        text-decoration: none;
    }

    .wotm-branding-cta:hover {
        color: #fff;
        text-decoration: none;
        transform: translateY(-2px);
    }

    .wotm-branding-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

.wotm-branding-work {
    padding: 0 0 92px;
    background: radial-gradient(circle at left top, #f3f8ff 0%, #f5f9ff 48%, #f3f8ff 100%);
}

    .wotm-branding-visual {
        position: relative;
        min-height: 420px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media (max-width: 991px) {
        .wotm-branding-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .wotm-branding-work {
            padding: 72px 0;
        }

        .wotm-branding-visual {
            min-height: auto;
        }
    }

   .wotm-selected-work {
    padding: 95px 0;
    background: linear-gradient(180deg, #f7f9fe 0%, #f9fbfd 100%);
}

    .wotm-selected-expertise {
        display: grid;
        gap: 30px;
    }

    .wotm-selected-expertise h2 {
        margin: 0;
        color: #f4b41a;
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

    @media (max-width: 767px) {
        .wotm-selected-work {
            padding: 72px 0;
        }
    }

   .wotm-screen-showcase {
    padding: 50px 0 50px;
    background: linear-gradient(180deg, #e8f0fd 0%, #c1d2f0 100%);
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
    }

    .wotm-screen-visual {
        position: relative;
    }

    .wotm-screen-visual img {
        width: 100%;
        height: auto;
        display: block;
    }

    @media (max-width: 991px) {
        .wotm-screen-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .wotm-screen-showcase {
            padding: 72px 0;
        }

        .wotm-screen-copy {
            max-width: 100%;
        }

        .wotm-screen-features {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .wotm-screen-features li {
            font-size: 13px;
        }
    }
</style>

<main>
    <section class="texon-hero">
        <div class="container">
            <div class="texon-hero__wrap">
                <div class="texon-hero__content">
                    <h1>Precision<br><span>Measurement Solutions.</span></h1>
                    <p>Advanced instruments and analysis systems for research, healthcare, industrial automation, and performance testing.</p>

                    <div class="texon-hero__actions">
                        <a href="contact.php" class="texon-hero__btn texon-hero__btn--primary">Request a Quote</a>
                        <a href="contact.php" class="texon-hero__btn texon-hero__btn--ghost">Explore Products</a>
                    </div>

                    <ul class="texon-hero__features">
                        <li><i class="fas fa-shield-alt"></i>Reliable</li>
                        <li><i class="fas fa-arrows-alt-h"></i>Customized</li>
                        <li><i class="fas fa-cogs"></i>End-to-End Support</li>
                    </ul>
                </div>

                <div class="texon-hero__visual" aria-hidden="true">
                    <div class="texon-hero__glow"></div>
                    <div class="texon-hero__card">
                        <span class="texon-hero__card-label">Team Growth</span>
                        <span class="texon-hero__card-value">+34.2%</span>
                        <span class="texon-hero__card-trend"><i class="fas fa-arrow-up"></i>this month</span>
                    </div>
                    <div class="texon-hero__dashboard">
                        <img src="assets/images/new/texon.png" alt="CRM dashboard preview">
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="wotm-branding-work">
    <div class="container">
        <div class="wotm-branding-grid">
            <div class="wotm-branding-copy">
                <h2>Texon CRM<br>for <span>Smarter Operations.</span></h2>
                <p>We built Texon a tailored CRM system to manage products, handle blog inquiries, track customer activity, and measure business performance through Google Analytics and connected reporting tools.</p>
                <a class="wotm-branding-cta" href="#">See Texon CRM <span>&rarr;</span></a>
            </div>

            <div class="wotm-branding-visual" aria-hidden="true">
                <img src="./assets/images/new/texon1.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-expertise">
            <h2>Google Analytics</h2>
            <div class="wotm-selected-expertise-media" aria-hidden="true">
                <img src="./assets/images/new/texon2.png" alt="Our Expertise">
            </div>
        </div>
    </div>
</section>
<section class="wotm-screen-showcase">
    <div class="container">
        <div class="wotm-screen-grid">
            <div class="wotm-screen-copy">
                <span class="wotm-screen-eyebrow">Responsive Experience</span>
                <h2>Built for<br><em>Every Screen</em></h2>
                <p>We designed the Texon layout to deliver a smooth shopping experience across desktop, tablet, and mobile devices. Every section stays clean, elegant, and easy to browse on any screen size.</p>
                <ul class="wotm-screen-features">
                    <li>Desktop Friendly</li>
                    <li>Tablet Ready</li>
                    <li>Mobile Optimized</li>
                </ul>
            </div>

            <div class="wotm-screen-visual" aria-hidden="true">
                <img src="./assets/images/new/texon3.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-expertise">
            <h2>Our Products</h2>
            <div class="wotm-selected-expertise-media" aria-hidden="true">
                <img src="./assets/images/new/texon4.png" alt="Our Expertise">
            </div>
        </div>
    </div>
</section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
















