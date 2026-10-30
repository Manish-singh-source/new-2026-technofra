<?php
$pageTitle = 'WOTM Case Study | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .wotm-hero {
        position: relative;
        overflow: hidden;
        padding: 180px 0 90px;
        background:
            radial-gradient(circle at top right, rgba(255, 196, 0, 0.12), transparent 32%),
            linear-gradient(135deg, #171717 0%, #0f0f0f 45%, #050505 100%);
    }

    .wotm-hero::before {
        content: "";
        position: absolute;
        top: -120px;
        right: -80px;
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.08), transparent 68%);
        pointer-events: none;
    }

    .wotm-hero-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
    }

    .wotm-hero-copy {
        max-width: 520px;
        color: #fff;
    }

    .wotm-hero-copy h1 {
        margin: 0 0 22px;
        font-size: clamp(42px, 5vw, 68px);
        line-height: 1.03;
        font-weight: 700;
        letter-spacing: -0.03em;
        color: #fff;
    }

    .wotm-hero-copy h1 span {
        color: #fcf6ef;
    }

    .wotm-hero-copy p {
        margin: 0 0 28px;
        max-width: 420px;
        font-size: 16px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.72);
    }

    .wotm-hero-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 26px;
        border-radius: 999px;
        background: #e7aa6c;
        color: #111;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .wotm-hero-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 36px rgba(244, 196, 48, 0.24);
        color: #111;
        text-decoration: none;
    }

    .wotm-hero-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 18px;
        margin: 26px 0 0;
        padding: 0;
        list-style: none;
    }

    .wotm-hero-tags li {
        position: relative;
        padding-left: 14px;
        font-size: 12px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.76);
    }

    .wotm-hero-tags li::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #fff;
        transform: translateY(-50%);
    }

    .wotm-hero-visual {
        position: relative;
        flex: 1 1 520px;
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .wotm-hero-visual img {
        max-width: 100%;
        height: auto;
        display: block;
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

    .wotm-selected-copy h2,
    .wotm-branding-copy h2 {
        margin: 0 0 20px;
        color: #121212;
        font-size: clamp(34px, 4vw, 52px);
        line-height: 1.05;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .wotm-branding-copy h2 span {
        color: #f26722;
    }

    .wotm-selected-copy p,
    .wotm-branding-copy p {
        margin: 0 0 28px;
        max-width: 300px;
        color: #5e5e5e;
        font-size: 16px;
        line-height: 1.75;
    }

    .wotm-selected-cta,
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

    .wotm-selected-cta:hover,
    .wotm-branding-cta:hover {
        color: #fff;
        text-decoration: none;
        transform: translateY(-2px);
    }

    .wotm-selected-cards {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        align-items: end;
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
        background: radial-gradient(circle at left top, #faf9f7 0%, #f1efec 48%, #ebe8e3 100%);
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
        background: linear-gradient(180deg, #f7f1e8 0%, #efe6da 100%);
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
        .wotm-hero {
            padding: 90px 0 70px;
        }

        .wotm-hero-wrap {
            flex-direction: column;
            align-items: flex-start;
        }

        .wotm-selected-grid,
        .wotm-branding-grid,
        .wotm-screen-grid {
            grid-template-columns: 1fr;
        }

        .wotm-hero-visual {
    position: relative;
    flex: 1 1 300px;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

        .wotm-selected-cards {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .wotm-hero-copy h1 {
            font-size: 38px;
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
                <h1><span>WE OWN THE MOVE.</span></h1>
                <p>A creative studio crafting meaningful brands, digital products and memorable experiences with strategy-led thinking and polished execution.</p>
                <a class="wotm-hero-cta" href="#work">View Our Work <span>&rarr;</span></a>
                <ul class="wotm-hero-tags">
                    <li>Branding</li>
                    <li>Product Design</li>
                    <li>Digital Experience</li>
                </ul>
            </div>

            <div class="wotm-hero-visual" aria-hidden="true">
                <img src="./assets/images/new/wotm.png" alt="We Own The Move Hero Visual">
            </div>
        </div>
    </div>
</section>

<section class="wotm-selected-work" id="work">
    <div class="container">
        <div class="wotm-selected-grid">
            <div class="wotm-selected-copy">
                <h2>Selected Work</h2>
                <p>Explore a selection of our recent projects across branding, product design and digital experiences.</p>
                <a class="wotm-selected-cta" href="#">Explore Projects <span>&rarr;</span></a>
            </div>

            <div class="wotm-selected-cards" aria-hidden="true">
                <div class="wotm-showcase-card wotm-showcase-dark">
                    <img src="./assets/images/new/wotm1.png" alt="">
                </div>

                <div class="wotm-showcase-card wotm-showcase-light">
                    <img src="./assets/images/new/wotm2.png" alt="">
                </div>

                <div class="wotm-showcase-card wotm-showcase-purple">
                    <img src="./assets/images/new/wotm3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wotm-branding-work">
    <div class="container">
        <div class="wotm-branding-grid">
            <div class="wotm-branding-copy">
                <h2>Brands That<br>Leave A <span>Mark.</span></h2>
                <p>We craft unique brand identities that connect, communicate and create lasting impressions.</p>
                <a class="wotm-branding-cta" href="#">View Branding Work <span>&rarr;</span></a>
            </div>

            <div class="wotm-branding-visual" aria-hidden="true">
                <img src="./assets/images/new/wotm4.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="wotm-responsive-media">
    <div class="container">
        <div class="wotm-responsive-image" aria-hidden="true">
            <img class="wotm-desktop-image" src="./assets/images/new/wotm5.png" alt="">
            <img class="wotm-mobile-image" src="./assets/images/new/wotm6.png" alt="">
        </div>
    </div>
</section>

<section class="wotm-screen-showcase">
    <div class="container">
        <div class="wotm-screen-grid">
            <div class="wotm-screen-copy">
                <span class="wotm-screen-eyebrow">Responsive Experience</span>
                <h2>Built for<br><em>Every Screen</em></h2>
                <p>We designed the WOTM layout to deliver a smooth shopping experience across desktop, tablet, and mobile devices. Every section stays clean, elegant, and easy to browse on any screen size.</p>
                <ul class="wotm-screen-features">
                    <li>Desktop Friendly</li>
                    <li>Tablet Ready</li>
                    <li>Mobile Optimized</li>
                </ul>
            </div>

            <div class="wotm-screen-visual" aria-hidden="true">
                <img src="./assets/images/new/wotm7.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>



