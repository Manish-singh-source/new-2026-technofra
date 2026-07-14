<?php
$pageTitle = 'Domain Hosting || Technofra Website';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .wotm-hero {
        position: relative;
        overflow: hidden;
        padding: 110px 0 56px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background:
            radial-gradient(circle at 82% 8%, rgba(175, 245, 86, 0.96) 0%, rgba(118, 188, 34, 0.92) 18%, rgba(19, 63, 14, 0.72) 44%, rgba(5, 12, 7, 0) 66%),
            radial-gradient(circle at 10% 18%, rgba(13, 73, 23, 0.85) 0%, rgba(13, 73, 23, 0.1) 34%, transparent 55%),
            linear-gradient(180deg, #081109 0%, #050505 58%, #060606 100%);
    }

    .wotm-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.05) 28%, rgba(0, 0, 0, 0.42) 52%, rgba(0, 0, 0, 0.08) 76%, rgba(0, 0, 0, 0.12) 100%);
        mix-blend-mode: multiply;
        pointer-events: none;
    }

    .wotm-hero::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 180px;
        background: linear-gradient(180deg, rgba(5, 5, 5, 0) 0%, rgba(5, 5, 5, 0.92) 100%);
        pointer-events: none;
    }

    .wotm-hero .container {
        position: relative;
        z-index: 2;
    }

    .wotm-hero-wrap {
        position: relative;
        min-height: calc(100vh - 326px);
        display: grid;
        grid-template-columns: 1fr;
        align-items: center;
    }

    .wotm-hero-copy {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: min(100%, 1240px);
        text-align: center;
        color: #fff;
        z-index: 4;
    }

    .wotm-hero-copy p {
        margin: 0;
        font-size: clamp(26px, 3vw, 20px);
        line-height: 0.98;
        font-weight: 800;
        color: #f8f2e9;
        text-transform: none;
    }

    .wotm-hero-copy p span {
        display: block;
    }

    .wotm-hero-title {
        position: relative;
        margin: 0;
        font-size: clamp(110px, 18vw, 180px);
        line-height: 0.88;
        font-weight: 700;
        letter-spacing: -0.08em;
        text-transform: uppercase;
        text-align: center;
        color: #f5eee2;
        z-index: 1;
    }

    .wotm-hero-title span {
        display: block;
    }

    .wotm-hero-visual {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 3;
        pointer-events: none;
    }

    .wotm-hero-visual img {
        width: min(26vw, 600px);
        min-width: 300px;
        height: auto;
        display: block;
        transform: translate(2vw, 5vh) rotate(-23deg);
        filter: drop-shadow(0 36px 50px rgba(0, 0, 0, 0.5));
    }

    .wotm-hero-footer {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        z-index: 4;
    }

    .wotm-hero-stat {
        display: flex;
        align-items: center;
        gap: 18px;
        color: #fff;
    }

    .wotm-hero-avatars {
        display: flex;
        align-items: center;
    }

    .wotm-hero-avatar,
    .wotm-hero-avatar-plus {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        border: 3px solid #0a0a0a;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.22);
    }

    .wotm-hero-avatar {
        margin-right: -14px;
        background: #1a1a1a url('./assets/images/new/avater.webp') center/cover no-repeat;
    }

    .wotm-hero-avatar-plus {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-left: 10px;
        background: rgba(20, 20, 20, 0.9);
        color: #fff;
        font-size: 34px;
        line-height: 1;
        border-color: rgba(255, 255, 255, 0.08);
    }

    .wotm-hero-stat-copy {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .wotm-hero-stat-copy strong {
        font-size: 36px;
        line-height: 1;
        font-weight: 700;
        color: #f6efe4;
    }

    .wotm-hero-stat-copy span {
        font-size: 20px;
        line-height: 1.2;
        color: rgba(255, 255, 255, 0.68);
    }

    .wotm-hero-cta {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 18px 28px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 10px;
        background: rgba(10, 10, 10, 0.22);
        backdrop-filter: blur(8px);
        color: #f6efe4;
        font-size: clamp(20px, 1.9vw, 28px);
        line-height: 1;
        font-weight: 300;
        text-decoration: none;
        transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }

    .wotm-hero-cta:hover {
        transform: translateY(-2px);
        background: rgba(18, 18, 18, 0.38);
        border-color: rgba(255, 255, 255, 0.28);
        color: #fff;
        text-decoration: none;
    }

    .wotm-selected-work {
        padding: 95px 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8f8f6 100%);
    }

    .wotm-selected-grid,
    .wotm-branding-grid {
        display: grid;
        grid-template-columns: minmax(260px, 360px) 1fr;
        align-items: center;
        gap: 48px;
    }

    .wotm-selected-expertise {
        display: grid;
        gap: 30px;
    }
.wotm-selected-expertise h2, .wotm-branding-copy h2 {
    margin: 0;
    color: #b6c803;
    font-size: clamp(44px, 6vw, 88px);
    line-height: 0.95;
    font-weight: 700;
    text-align: center;
    letter-spacing: -0.05em;
}

    .wotm-branding-copy h2 span {
        color: #dfe4e1;
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

    .wotm-showcase-card {
        position: relative;
        min-height: 380px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 22px 50px rgba(20, 20, 20, 0.12);
    }

    .wotm-showcase-card img,
    .wotm-branding-visual img,
    .wotm-responsive-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

.wotm-branding-work {
    padding: 92px 0;
    background: radial-gradient(circle at left top, #262613 0%, #202111 48%, #a2ab23 100%);
}

    .wotm-branding-visual {
        position: relative;
        min-height: 420px;
        border-radius: 8px;
        overflow: hidden;
    }

    .wotm-responsive-media {
        padding: 50px 0 50px;
        background: #fff;
    }

    .wotm-responsive-image {
        border-radius: 8px;
        overflow: hidden;
    }

    .wotm-responsive-image .wotm-mobile-image {
        display: none;
    }

    .wotm-screen-showcase {
        padding: 50px 0 50px;
        background: linear-gradient(180deg, #050505 0%, #0d0d0d 100%);
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
        color: #f4efe7;
    }

    .wotm-screen-eyebrow {
        display: inline-block;
        margin-bottom: 18px;
        padding-bottom: 12px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        color: #b7d98b;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
    }

    .wotm-screen-copy h2 {
        margin: 0 0 26px;
        color: #ffffff;
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
        color: rgba(255, 255, 255, 0.74);
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
        color: rgba(255, 255, 255, 0.82);
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
        border: 2px solid rgba(183, 217, 139, 0.45);
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.08);
    }

    .wotm-screen-features li::after {
        content: "";
        position: absolute;
        top: 12px;
        left: 12px;
        width: 22px;
        height: 18px;
        border: 2px solid #dcefc1;
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
        .wotm-hero {
            min-height: auto;
            padding: 110px 0 42px;
        }

        .wotm-hero-wrap {
            min-height: auto;
            padding-top: 10px;
            gap: 30px;
        }

        .wotm-selected-grid,
        .wotm-branding-grid,
        .wotm-screen-grid {
            grid-template-columns: 1fr;
        }

        .wotm-hero-copy {
            position: relative;
            top: auto;
            left: auto;
            transform: none;
        }

        .wotm-hero-title {
            font-size: clamp(80px, 19vw, 170px);
        }

        .wotm-hero-visual {
            position: relative;
            inset: auto;
            min-height: 360px;
        }

        .wotm-hero-visual img {
            width: min(70vw, 520px);
            transform: rotate(-18deg);
        }

        .wotm-hero-footer {
            position: relative;
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
            margin-top: 8px;
        }

        .wotm-selected-cards {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .wotm-hero {
            padding: 95px 0 30px;
        }

        .wotm-hero-copy p {
            font-size: 20px;
            line-height: 1.05;
        }

        .wotm-hero-title {
            font-size: clamp(64px, 20vw, 102px);
            line-height: 0.92;
        }

        .wotm-hero-visual {
            min-height: 250px;
        }

        .wotm-hero-visual img {
            width: min(88vw, 380px);
            min-width: 240px;
            transform: translate(0, 0) rotate(-14deg);
        }

        .wotm-hero-stat {
            align-items: flex-start;
            gap: 14px;
        }

        .wotm-hero-avatar,
        .wotm-hero-avatar-plus {
            width: 44px;
            height: 44px;
        }

        .wotm-hero-avatar-plus {
            font-size: 24px;
        }

        .wotm-hero-stat-copy strong {
            font-size: 24px;
        }

        .wotm-hero-stat-copy span {
            font-size: 14px;
        }

        .wotm-hero-cta {
            width: 100%;
            justify-content: center;
            font-size: 18px;
            padding: 16px 20px;
        }

        .wotm-selected-work,
        .wotm-branding-work,
        .wotm-responsive-media,
        .wotm-screen-showcase {
            padding: 72px 0;
        }

        .wotm-selected-cards {
            grid-template-columns: 1fr;
        }

        .wotm-showcase-card {
            min-height: 340px;
        }

        .wotm-branding-visual {
            min-height: auto;
        }

        .wotm-responsive-image .wotm-desktop-image {
            display: none;
        }

        .wotm-responsive-image .wotm-mobile-image {
            display: block;
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

<section class="wotm-hero">
    <div class="container">
        <div class="wotm-hero-wrap">
            <div class="wotm-hero-copy">
                <p><span>Premium Fragrance Solutions</span><span>for Every Industry</span></p>
            </div>

            <h1 class="wotm-hero-title">FRAGOMATRIX</h1>

            <div class="wotm-hero-visual" aria-hidden="true">
                <img src="./assets/images/new/bottel.webp" alt="Fragomatrix Bottle">
            </div>

            <div class="wotm-hero-footer">
                <div class="wotm-hero-stat" aria-label="Engaged and counting">
                    <div class="wotm-hero-avatars" aria-hidden="true">
                        <span class="wotm-hero-avatar"></span>
                        <span class="wotm-hero-avatar"></span>
                        <span class="wotm-hero-avatar"></span>
                        <span class="wotm-hero-avatar-plus">+</span>
                    </div>
                    <div class="wotm-hero-stat-copy">
                        <strong>2500+</strong>
                        <span>Engaged and counting</span>
                    </div>
                </div>

                <a class="wotm-hero-cta" href="#work">Explore Our Work <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-expertise">
            <h2>Our Expertise</h2>
            <div class="wotm-selected-expertise-media" aria-hidden="true">
                <img src="./assets/images/new/frago1.webp" alt="Our Expertise">
            </div>
        </div>
    </div>
</section>

<section class="wotm-branding-work">
    <div class="container">
        <div class="wotm-branding-grid">
            <div class="wotm-branding-copy">
                <h2>Brands That<br>Leave A <span>Mark.</span></h2>
                <!-- <p>We craft unique brand identities that connect, communicate and create lasting impressions.</p>
                <a class="wotm-branding-cta" href="#">View Branding Work <span>&rarr;</span></a> -->
            </div>

            <div class="wotm-branding-visual" aria-hidden="true">
                <img src="./assets/images/new/frago2.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-expertise">
            <h2>Design Essence</h2>
            <div class="wotm-selected-expertise-media" aria-hidden="true">
                <img src="./assets/images/new/frago3.webp" alt="Our Expertise">
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
                <p>We designed the Fragometrix layout to deliver a smooth shopping experience across desktop, tablet, and mobile devices. Every section stays clean, elegant, and easy to browse on any screen size.</p>
                <ul class="wotm-screen-features">
                    <li>Desktop Friendly</li>
                    <li>Tablet Ready</li>
                    <li>Mobile Optimized</li>
                </ul>
            </div>

            <div class="wotm-screen-visual" aria-hidden="true">
                <img src="./assets/images/new/frago4.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>







