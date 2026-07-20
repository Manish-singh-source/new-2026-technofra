<?php
$pageTitle = 'Ish International | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';

$desktopHeroImage = 'assets/images/new/ish.png';
$mobileHeroImage = 'assets/images/new/ish1.png';
$desktopSecondaryHeroImage = 'assets/images/new/ish2.png';
$mobileSecondaryHeroImage = 'assets/images/new/ish3.png';
$desktopTertiaryHeroImage = 'assets/images/new/ish6.png';
$mobileTertiaryHeroImage = 'assets/images/new/ish7.png';
?>

<style>
    .ish-hero {
        line-height: 0;
    }

    .ish-hero__image {
        display: block;
        width: 100%;
        height: auto;
    }

    .wotm-branding-grid {
        display: grid;
        grid-template-columns: minmax(260px, 360px) 1fr;
        align-items: center;
        gap: 48px;
    }

    .wotm-branding-copy h2 {
        margin: 0 0 20px;
        color: #37793d;
        font-size: clamp(34px, 4vw, 52px);
        line-height: 1.05;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .wotm-branding-copy h2 span {
        color: #b8b54c;
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
        transition: transform 0.2s ease;
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
        padding: 92px 0;
        background: radial-gradient(circle at left top, #faf9f7 0%, #f1efec 48%, #ebe8e3 100%);
    }

    .wotm-branding-visual {
        position: relative;
        min-height: 420px;
        border-radius: 8px;
        overflow: hidden;
    }

    .wotm-screen-showcase {
        padding: 50px 0 50px;
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
        .wotm-branding-grid,
        .wotm-screen-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .wotm-branding-work,
        .wotm-screen-showcase {
            padding: 72px 0;
        }

        .wotm-branding-visual {
            min-height: auto;
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

<section class="ish-hero" aria-label="Ish International Hero">
    <picture>
        <source media="(max-width: 767px)" srcset="<?php echo htmlspecialchars($mobileHeroImage, ENT_QUOTES, 'UTF-8'); ?>">
        <img
            class="ish-hero__image"
            src="<?php echo htmlspecialchars($desktopHeroImage, ENT_QUOTES, 'UTF-8'); ?>"
            alt="Ish International"
        >
    </picture>
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
                <img src="assets/images/new/ish4.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="ish-hero" aria-label="Ish International Additional Visuals">
    <picture>
        <source media="(max-width: 767px)" srcset="<?php echo htmlspecialchars($mobileSecondaryHeroImage, ENT_QUOTES, 'UTF-8'); ?>">
        <img
            class="ish-hero__image"
            src="<?php echo htmlspecialchars($desktopSecondaryHeroImage, ENT_QUOTES, 'UTF-8'); ?>"
            alt="Ish International Additional Visual"
        >
    </picture>
</section>

<section class="wotm-screen-showcase">
    <div class="container">
        <div class="wotm-screen-grid">
            <div class="wotm-screen-copy">
                <span class="wotm-screen-eyebrow">Responsive Experience</span>
                <h2>Built for<br><em>Every Screen</em></h2>
                <p>We designed the ISH INTERNATIONAL layout to deliver a smooth shopping experience across desktop, tablet, and mobile devices. Every section stays clean, elegant, and easy to browse on any screen size.</p>
                <ul class="wotm-screen-features">
                    <li>Desktop Friendly</li>
                    <li>Tablet Ready</li>
                    <li>Mobile Optimized</li>
                </ul>
            </div>

            <div class="wotm-screen-visual" aria-hidden="true">
                <img src="assets/images/new/ish5.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="ish-hero" aria-label="Ish International Closing Banner">
    <picture>
        <source media="(max-width: 767px)" srcset="<?php echo htmlspecialchars($mobileTertiaryHeroImage, ENT_QUOTES, 'UTF-8'); ?>">
        <img
            class="ish-hero__image"
            src="<?php echo htmlspecialchars($desktopTertiaryHeroImage, ENT_QUOTES, 'UTF-8'); ?>"
            alt="Ish International Banner"
        >
    </picture>
</section>

<?php include __DIR__ . '/footer.php'; ?>
