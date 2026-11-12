<?php
$pageTitle = 'Digital Marketing Agency in Mumbai | Technofra';
$metaDescription = 'Looking for a digital marketing agency in Mumbai? Technofra offers SEO, PPC, social media, content marketing and lead generation to grow your business.';
$metaKeywords = ''; // meta keywords tag intentionally not output
$bodyClass = 'hero-video-page';
$ogImage = 'https://technofra.com/assets/images/new/best-digital-marketing-agency-in-mumbai-team.webp';

// FAQ content (rendered on the page AND reused for FAQPage structured data so they never drift apart)
$dmFaqs = [
    ['What does a digital marketing agency in Mumbai do?',
     'A digital marketing agency helps businesses promote their products or services through online channels such as search engines, social media, paid advertising, content marketing, email marketing, and other digital platforms.'],
    ['Why should I hire a digital marketing company in Mumbai?',
     'A professional digital marketing company can help you develop a structured online marketing strategy, improve your website visibility, reach relevant customers, generate leads, and measure marketing performance.'],
    ['What digital marketing services does Technofra provide?',
     'Technofra provides SEO, social media marketing, Google Ads and PPC, content marketing, lead generation, email marketing, analytics and reporting, and online reputation management.'],
    ['How long does digital marketing take to show results?',
     'The timeline depends on the marketing channel, competition, website condition, budget, and business objectives. SEO generally requires consistent effort over time, while paid advertising can generate traffic and enquiries more quickly.'],
    ['How do I choose the right digital marketing agency in Mumbai?',
     'Look for an agency with relevant experience, a clear strategy, transparent reporting, measurable objectives, and services that match your business requirements. The agency should focus on meaningful business outcomes rather than vanity metrics alone.'],
];

$dmServiceNames = ['Search Engine Optimization', 'Social Media Marketing', 'Google Ads and PPC', 'Content Marketing', 'Lead Generation', 'Email Marketing', 'Analytics and Reporting', 'Online Reputation Management'];
$dmFaqEntities = [];
foreach ($dmFaqs as $dmFaq) {
    $dmFaqEntities[] = ['@type' => 'Question', 'name' => $dmFaq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $dmFaq[1]]];
}
$dmOfferItems = [];
foreach ($dmServiceNames as $dmI => $dmName) {
    $dmOfferItems[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $dmName]];
}
$dmSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            '@id' => 'https://technofra.com/digital-marketing#service',
            'name' => 'Digital Marketing Services in Mumbai',
            'serviceType' => 'Digital Marketing',
            'url' => 'https://technofra.com/digital-marketing',
            'description' => $metaDescription,
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'provider' => ['@type' => 'Organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/logo.png'],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Digital Marketing Services', 'itemListElement' => $dmOfferItems],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Digital Marketing Agency in Mumbai', 'item' => 'https://technofra.com/digital-marketing'],
            ],
        ],
        ['@type' => 'FAQPage', 'mainEntity' => $dmFaqEntities],
    ],
];
$extraHead = '<script type="application/ld+json">' . json_encode($dmSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) . '</script>';
include __DIR__ . '/header.php';
?>

<style>
:root {
        --dm-primary: #1763ff;
        --dm-primary-dark: #0f1d59;
        --dm-primary-soft: #eaf2ff;
        --dm-accent: #5da5ff;
        --dm-text: #24324a;
        --dm-muted: #5f6f89;
        --dm-white: #ffffff;
        --dm-border: rgba(23, 99, 255, 0.12);
        --dm-shadow: 0 24px 60px rgba(18, 56, 132, 0.14);
    }

    body {
        font-family: 'Poppins', 'Segoe UI', sans-serif;
    }

    .dm-page {
        background:
            radial-gradient(circle at top left, rgba(93, 165, 255, 0.18), transparent 32%),
            radial-gradient(circle at 90% 18%, rgba(23, 99, 255, 0.12), transparent 26%),
            linear-gradient(180deg, #f7fbff 0%, #ffffff 48%, #f4f8ff 100%);
        overflow: hidden;
    }

    .dm-hero {
        position: relative;
        padding: 176px 0 0px;
    }

    .dm-orb,
    .dm-grid,

    .dm-orb {
        top: 70px;
        left: -90px;
        width: 280px;
        height: 280px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(93, 165, 255, 0.18) 0%, rgba(93, 165, 255, 0) 72%);
    }

    .dm-grid {
        top: 180px;
        right: 34px;
        width: 84px;
        height: 84px;
        background-image: radial-gradient(rgba(93, 165, 255, 0.7) 1.8px, transparent 1.8px);
        background-size: 14px 14px;
        opacity: 0.8;
    }

    .dm-copy {
        position: relative;
        z-index: 2;
        padding-right: 18px;
    }

    .dm-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 16px;
        margin-bottom: 22px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.84);
        border: 1px solid rgba(23, 99, 255, 0.12);
        color: var(--dm-primary);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        box-shadow: 0 12px 32px rgba(18, 56, 132, 0.08);
    }

    .dm-kicker::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--dm-primary);
    }

    .dm-title {
        margin: 0 0 24px;
        color: var(--dm-primary-dark);
        font-size: clamp(2.6rem, 6vw, 4.7rem);
        line-height: 1.04;
        font-weight: 700;
        letter-spacing: -0.04em;
        max-width: 610px;
    }

    .dm-title span {
        color: var(--dm-primary);
    }
    .dm-lead {
        max-width: 565px;
        margin-bottom: 34px;
        color: var(--dm-muted);
        font-size: 1.1rem;
        line-height: 1.85;
    }

    .dm-actions {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .dm-btn-primary,
    .dm-btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        min-height: 58px;
        padding: 0 26px;
        border-radius: 14px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.28s ease;
    }

    .dm-btn-primary {
        color: var(--dm-white);
        background: linear-gradient(135deg, #1763ff 0%, #0050f0 100%);
        box-shadow: 0 18px 34px rgba(23, 99, 255, 0.26);
    }

    .dm-btn-primary:hover {
        color: var(--dm-white);
        transform: translateY(-2px);
    }

    .dm-btn-secondary {
        color: var(--dm-primary-dark);
        background: transparent;
    }

    .dm-btn-secondary .play-icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: var(--dm-primary-dark);
        color: var(--dm-white);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        box-shadow: 0 12px 20px rgba(15, 29, 89, 0.18);
    }
    .dm-visual {
        position: relative;
        z-index: 2;
        min-height: 720px;
    }

    .dm-visual-core {
        position: absolute;
        top:25px;
        right: -70px;
        width: 128%;
        max-width: 760px;
    }

    .dm-hero-image {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 0;
        object-fit: contain;
        object-position: center;
        filter: drop-shadow(0 26px 46px rgba(9, 35, 102, 0.16));
    }

    .dm-section {
        position: relative;
        padding: 42px 0 110px;
    }

    .dm-section-title {
        margin-bottom: 14px;
        color: var(--dm-primary-dark);
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        letter-spacing: -0.03em;
    }

    .dm-section-text {
        color: var(--dm-muted);
        font-size: 1rem;
        line-height: 1.85;
    }

    .dm-service-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 24px;
        margin-top: 36px;
    }

    .dm-service-card,
    .dm-process-card,
    .dm-metric-card,
    .dm-cta-box {
        background: rgba(255, 255, 255, 0.82);
        border: 1px solid var(--dm-border);
        border-radius: 28px;
        box-shadow: 0 18px 44px rgba(18, 56, 132, 0.08);
    }

    .dm-service-card {
        padding: 28px;
        height: 100%;
    }

    .dm-service-number {
        display: inline-flex;
        width: 46px;
        height: 46px;
        margin-bottom: 20px;
        border-radius: 14px;
        background: var(--dm-primary-soft);
        color: var(--dm-primary);
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .dm-service-card h3,
    .dm-process-card h3 {
        margin: 0 0 12px;
        color: var(--dm-primary-dark);
        font-size: 1.25rem;
        font-weight: 700;
    }

    .dm-service-card p,
    .dm-process-card p,
    .dm-cta-box p {
        margin: 0;
        color: var(--dm-muted);
        line-height: 1.75;
    }

    .dm-process-wrap {
        margin-top: 36px;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 28px;
        align-items: stretch;
    }

    .dm-placeholder-panel {
        min-height: 420px;
        padding: 24px;
        border-radius: 32px;
        background: linear-gradient(180deg, #eaf3ff 0%, #d9e9ff 100%);
        box-shadow: var(--dm-shadow);
        position: relative;
        overflow: hidden;
    }

    .dm-placeholder-panel::before,
    .dm-placeholder-panel::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        background: rgba(23, 99, 255, 0.12);
    }

    .dm-placeholder-panel::before {
        width: 220px;
        height: 220px;
        top: -90px;
        right: -70px;
    }

    .dm-placeholder-panel::after {
        width: 180px;
        height: 180px;
        bottom: -70px;
        left: -40px;
    }

    .dm-placeholder-box {
        position: relative;
        z-index: 1;
        width: 100%;
        height: 100%;
        min-height: 372px;
        border-radius: 28px;
        border: 2px dashed rgba(23, 99, 255, 0.32);
        background: rgba(255, 255, 255, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 30px;
        color: var(--dm-primary-dark);
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: 0.03em;
    }

    .dm-process-stack {
        display: grid;
        gap: 20px;
    }

    .dm-process-card {
        padding: 26px 24px;
    }

    .dm-process-step {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        margin-bottom: 16px;
        border-radius: 50%;
        background: linear-gradient(135deg, #1763ff 0%, #58a8ff 100%);
        color: var(--dm-white);
        font-weight: 700;
    }

    .dm-metrics {
        margin-top: 42px;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
    }

    .dm-metric-card {
        padding: 26px 28px;
        text-align: center;
    }

    .dm-metric-card h3 {
        margin: 0 0 8px;
        color: var(--dm-primary);
        font-size: clamp(2rem, 4vw, 2.6rem);
        font-weight: 700;
    }

    .dm-metric-card p {
        margin: 0;
        color: var(--dm-muted);
        line-height: 1.7;
    }

    .dm-cta-box {
        margin-top: 34px;
        padding: 34px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }

    .dm-cta-box h3 {
        margin: 0 0 10px;
        color: var(--dm-primary-dark);
        font-size: clamp(1.5rem, 3vw, 2.2rem);
        font-weight: 700;
    }

    @media (max-width: 1199px) {        .dm-visual {
            min-height: 650px;
            margin-top: 32px;
        }

        .dm-visual-core {
            right: -20px;
            width: 118%;
            max-width: 680px;
        }
        .dm-service-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 991px) {
        .dm-copy {
            padding-right: 0;
        }

        .dm-title,
        .dm-lead {
            max-width: none;
        }
        .dm-visual {
            min-height: 620px;
        }

        .dm-visual-core {
            top: 0;
            left: 50%;
            right: auto;
            width: 100%;
            max-width: 560px;
            transform: translateX(-50%);
        }
        .dm-process-wrap,
        .dm-metrics {
            grid-template-columns: 1fr;
        }

        .dm-cta-box {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 767px) {
        .dm-hero {
            padding: 138px 0 0px;
        }

        .dm-actions {
            align-items: stretch;
        }

        .dm-btn-primary,
        .dm-btn-secondary {
            width: 100%;
            justify-content: center;
        }
        .dm-visual {
            min-height: 360px;
        }

        .dm-visual-core {
            top: 0;
            left: 50%;
            right: auto;
            width: 112%;
            max-width: 420px;
            transform: translateX(-50%);
        }
        .dm-service-grid {
            grid-template-columns: 1fr;
        }

        .dm-grid {
            display: none;
        }

        .dm-cta-box {
            padding: 28px 22px;
        }
    }

.dm-focus-strip {
            position: relative;
            z-index: 3;
            margin-top: -28px;
            padding-bottom: 28px;
        }

        .dm-focus-bar {
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding: 18px 0;
            background: linear-gradient(90deg, #1763ff 0%, #0d58f2 100%);
            box-shadow: 0 26px 48px rgba(23, 99, 255, 0.24);
        }

        .dm-focus-track {
            display: flex;
            align-items: center;
            width: max-content;
            animation: dmFocusScroll 24s linear infinite;
            will-change: transform;
        }

        .dm-focus-set {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .dm-focus-item {
            flex: 0 0 auto;
            min-width: 148px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            padding: 10px 22px;
            color: #fff;
            text-align: center;
            white-space: nowrap;
        }

        .dm-focus-set .dm-focus-item + .dm-focus-item {
            border-left: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes dmFocusScroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        .dm-focus-icon {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            font-size: 1.45rem;
            flex-shrink: 0;
        }

        .dm-focus-label {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.3;
        }

        @media (max-width: 1199px) {
            .dm-focus-bar {
                padding: 16px 0;
            }

            .dm-focus-item {
                min-width: 136px;
                padding: 10px 18px;
            }
        }

        @media (max-width: 991px) {
            .dm-focus-strip {
                margin-top: -18px;
            }

            .dm-focus-bar {
            }
        }

        @media (max-width: 767px) {
            .dm-focus-strip {
                margin-top: -8px;
                padding-bottom: 18px;
            }

            .dm-focus-bar {
                padding: 14px 0;
            }

            .dm-focus-item {
                flex: 0 0 auto;
                min-width: 170px;
                justify-content: flex-start;
                text-align: left;
                border-left: 0;
                border-right: 1px solid rgba(255, 255, 255, 0.14);
            }

            .dm-focus-set .dm-focus-item:last-child {
                border-right: 0;
            }

            .dm-focus-set .dm-focus-item + .dm-focus-item {
                border-left: 0;
            }

            .dm-focus-icon {
                width: 42px;
                height: 42px;
                font-size: 1.2rem;
            }

            .dm-focus-label {
                font-size: 0.95rem;
            }
        }

.dm-benefits-section {
            padding: 24px 0 88px;
        }

        .dm-benefits-wrap {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
            gap: 42px;
            align-items: center;
        }

        .dm-benefits-visual {
            position: relative;
            min-height: 520px;
            border-radius: 42px;
            padding: 18px;
            background: rgba(255, 255, 255, 0.82);
            border: 2px dashed rgba(23, 99, 255, 0.72);
            box-shadow: 0 22px 50px rgba(17, 59, 148, 0.12);
        }

        .dm-benefits-placeholder {
            width: 100%;
            height: 100%;
            min-height: 480px;
            border-radius: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 36px;
            background: linear-gradient(145deg, rgba(23, 99, 255, 0.14), rgba(93, 165, 255, 0.08)), #f6f9ff;
            color: var(--dm-muted);
            overflow: hidden;
        }

        .dm-benefits-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px;
            display: block;
        }

        .dm-benefits-placeholder-copy {
            max-width: 320px;
        }

        .dm-benefits-placeholder-copy i {
            display: inline-flex;
            width: 72px;
            height: 72px;
            margin-bottom: 18px;
            border-radius: 24px;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%);
            color: #fff;
            font-size: 1.8rem;
            box-shadow: 0 18px 32px rgba(23, 99, 255, 0.2);
        }

        .dm-benefits-placeholder-copy strong {
            display: block;
            margin-bottom: 10px;
            color: var(--dm-primary-dark);
            font-size: 1.25rem;
        }

        .dm-benefits-copy {
            max-width: 560px;
        }

        .dm-benefits-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
            padding: 8px 16px;
            border-radius: 999px;
            background: rgba(23, 99, 255, 0.08);
            color: var(--dm-primary);
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .dm-benefits-kicker::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--dm-primary);
        }

        .dm-benefits-title {
            margin: 0 0 18px;
            color: var(--dm-primary-dark);
            font-size: clamp(2.1rem, 4.2vw, 3.5rem);
            line-height: 1.08;
            font-weight: 700;
            letter-spacing: -0.04em;
        }

        .dm-benefits-title span {
            color: var(--dm-primary);
        }

        .dm-benefits-intro {
            margin: 0 0 28px;
            color: var(--dm-muted);
            font-size: 1rem;
            line-height: 1.85;
        }

        .dm-benefit-list {
            display: grid;
            gap: 22px;
        }

        .dm-benefit-item {
            display: grid;
            grid-template-columns: 68px minmax(0, 1fr);
            gap: 18px;
            align-items: start;
        }

        .dm-benefit-icon {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%);
            color: #fff;
            font-size: 1.55rem;
            box-shadow: 0 18px 34px rgba(23, 99, 255, 0.18);
        }

        .dm-benefit-item h3 {
            margin: 0 0 8px;
            color: var(--dm-primary-dark);
            font-size: 1.55rem;
            font-weight: 700;
        }

        .dm-benefit-item p {
            margin: 0;
            color: var(--dm-muted);
            font-size: 1rem;
            line-height: 1.75;
        }

        @media (max-width: 991px) {
            .dm-benefits-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .dm-benefits-copy {
                max-width: none;
            }

            .dm-benefits-visual {
                min-height: 440px;
            }

            .dm-benefits-placeholder {
                min-height: 400px;
            }
        }

        @media (max-width: 767px) {
            .dm-benefits-section {
                padding: 18px 0 70px;
            }

            .dm-benefits-visual {
                min-height: 320px;
                border-radius: 28px;
                padding: 12px;
            }

            .dm-benefits-placeholder {
                min-height: 290px;
                padding: 24px;
                border-radius: 22px;
            }

            .dm-benefit-item {
                grid-template-columns: 56px minmax(0, 1fr);
                gap: 14px;
            }

            .dm-benefit-icon {
                width: 56px;
                height: 56px;
                font-size: 1.3rem;
            }

            .dm-benefit-item h3 {
                font-size: 1.25rem;
            }
        }

.dm-best-services {
            padding: 8px 0 96px;
        }

        .dm-best-services-head {
            max-width: 760px;
            margin-bottom: 34px;
        }

        .dm-best-services-title {
            margin: 0 0 14px;
            color: var(--dm-primary-dark);
            font-size: clamp(2.1rem, 4.4vw, 3.6rem);
            line-height: 1.1;
            font-weight: 700;
            letter-spacing: -0.04em;
        }

        .dm-best-services-title span {
            color: var(--dm-primary);
        }

        .dm-best-services-text {
            margin: 0;
            max-width: 640px;
            color: var(--dm-muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        .dm-best-services-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
        }

        .dm-best-service-card {
            position: relative;
            min-height: 208px;
            padding: 18px 18px 72px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(23, 99, 255, 0.1);
            box-shadow: 0 16px 38px rgba(18, 56, 132, 0.08);
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease, background 0.35s ease;
        }

        .dm-best-service-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(145deg, rgba(23, 99, 255, 0.06), rgba(93, 165, 255, 0.14));
            opacity: 0;
            transition: opacity 0.35s ease;
            pointer-events: none;
        }

        .dm-best-service-top,
        .dm-best-service-float {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: transform 0.35s ease, box-shadow 0.35s ease, background 0.35s ease, color 0.35s ease;
        }

        .dm-best-service-top {
            position: relative;
            z-index: 1;
            margin-bottom: 18px;
        }

        .dm-best-service-float {
            position: absolute;
            right: 18px;
            bottom: 18px;
            color: #fff;
            box-shadow: 0 14px 28px rgba(18, 56, 132, 0.18);
            z-index: 1;
        }

        .dm-best-service-card h3,
        .dm-best-service-card p {
            position: relative;
            z-index: 1;
            transition: color 0.35s ease;
        }

        .dm-best-service-card h3 {
            margin: 0 0 10px;
            color: var(--dm-primary-dark);
            font-size: 1.45rem;
            line-height: 1.2;
            font-weight: 700;
        }

        .dm-best-service-card p {
            margin: 0;
            color: var(--dm-muted);
            font-size: 0.98rem;
            line-height: 1.75;
        }

        .dm-best-service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(23, 99, 255, 0.22);
            box-shadow: 0 26px 56px rgba(18, 56, 132, 0.16);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(240, 246, 255, 0.98));
        }

        .dm-best-service-card:hover::before {
            opacity: 1;
        }

        .dm-best-service-card:hover .dm-best-service-top {
            transform: translateY(-4px) scale(1.05);
            background: linear-gradient(135deg, #1763ff 0%, #4e98ff 100%);
            color: #ffffff;
            box-shadow: 0 16px 28px rgba(23, 99, 255, 0.22);
        }

        .dm-best-service-card:hover .dm-best-service-float {
            transform: translateY(-6px) rotate(-8deg) scale(1.06);
            box-shadow: 0 18px 34px rgba(18, 56, 132, 0.24);
        }

        .dm-best-service-card:hover h3 {
            color: #1763ff;
        }

        .dm-best-service-card:hover p {
            color: #44506a;
        }

        .dm-best-blue-soft {
            background: rgba(23, 99, 255, 0.1);
            color: #1763ff;
        }

        .dm-best-green-soft {
            background: rgba(42, 180, 122, 0.12);
            color: #138a59;
        }

        .dm-best-orange-soft {
            background: rgba(255, 128, 41, 0.14);
            color: #ef6b1c;
        }

        .dm-best-cyan-soft {
            background: rgba(30, 165, 156, 0.14);
            color: #0f8f86;
        }

        .dm-best-violet-soft {
            background: rgba(113, 96, 255, 0.14);
            color: #5c53ea;
        }

        .dm-best-gold-soft {
            background: rgba(201, 146, 53, 0.14);
            color: #a86a11;
        }

        .dm-best-navy {
            background: linear-gradient(135deg, #102149 0%, #081a3e 100%);
        }

        .dm-best-blue {
            background: linear-gradient(135deg, #2486ff 0%, #1763ff 100%);
        }

        .dm-best-orange {
            background: linear-gradient(135deg, #ff9636 0%, #f26922 100%);
        }

        .dm-best-teal {
            background: linear-gradient(135deg, #14a39b 0%, #0a8b84 100%);
        }

        .dm-best-violet {
            background: linear-gradient(135deg, #7b78ff 0%, #5a63ff 100%);
        }

        .dm-best-sky {
            background: linear-gradient(135deg, #3196ff 0%, #1775db 100%);
        }

        .dm-best-mint {
            background: linear-gradient(135deg, #5bc6bc 0%, #37a99f 100%);
        }

        @media (max-width: 1199px) {
            .dm-best-services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 767px) {
            .dm-best-services {
                padding: 2px 0 76px;
            }

            .dm-best-services-grid {
                grid-template-columns: 1fr;
            }

            .dm-best-service-card {
                min-height: 190px;
                padding: 18px 16px 68px;
            }

            .dm-best-service-card h3 {
                font-size: 1.25rem;
            }
        }

.dm-campaign-showcase {
            padding: 6px 0 96px;
        }

        .dm-campaign-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }

        .dm-campaign-card {
            position: relative;
            min-height: 360px;
            border-radius: 28px;
            overflow: hidden;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.96), rgba(233, 242, 255, 0.92));
            border: 1px solid rgba(23, 99, 255, 0.08);
            box-shadow: 0 18px 42px rgba(18, 56, 132, 0.08);
        }

        .dm-campaign-card::before {
            content: "";
            position: absolute;
            inset: auto -10% -24% auto;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(23, 99, 255, 0.12) 0%, rgba(23, 99, 255, 0) 72%);
            pointer-events: none;
        }

        .dm-campaign-inner {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
            gap: 18px;
            height: 100%;
            padding: 34px 30px 28px;
            align-items: center;
        }

        .dm-campaign-content h3 {
            margin: 0 0 16px;
            color: var(--dm-primary-dark);
            font-size: 20px;
            line-height: 1.15;
            font-weight: 700;
            letter-spacing: -0.04em;
        }

        .dm-campaign-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 18px;
        }

        .dm-campaign-tags span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(23, 99, 255, 0.08);
            color: var(--dm-primary-dark);
            font-size: 0.9rem;
            font-weight: 600;
            box-shadow: 0 10px 22px rgba(18, 56, 132, 0.05);
        }

        .dm-campaign-tags i {
            color: var(--dm-primary);
        }

        .dm-campaign-line {
            width: 42px;
            height: 3px;
            margin-bottom: 16px;
            border-radius: 999px;
            background: linear-gradient(90deg, #1763ff 0%, #5da5ff 100%);
        }

        .dm-campaign-content p {
            margin: 0;
            max-width: 280px;
            color: var(--dm-muted);
            font-size: 0.98rem;
            line-height: 1.85;
        }

        .dm-campaign-visual {
            position: relative;
            min-height: 260px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dm-campaign-art {
            width: 100%;
            max-width: 420px;
            min-height: 260px;
            border-radius: 22px;
            overflow: hidden;
        }

        .dm-campaign-art img {
            width: 100%;
            min-height: 260px;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .dm-campaign-visual {
            position: relative;
            min-height: 260px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dm-campaign-device,
        .dm-campaign-panel,
        .dm-campaign-target,
        .dm-campaign-chart {
            position: relative;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(16, 33, 73, 0.08);
            box-shadow: 0 18px 36px rgba(18, 56, 132, 0.1);
        }

        .dm-campaign-device {
            width: 78%;
            max-width: 230px;
            min-height: 250px;
            padding: 16px 14px;
            transform: rotate(-8deg);
        }

        .dm-campaign-device::before {
            content: "";
            display: block;
            width: 38%;
            height: 10px;
            margin: 0 auto 14px;
            border-radius: 999px;
            background: #0f1d59;
        }

        .dm-campaign-screen {
            height: 188px;
            border-radius: 18px;
            background: linear-gradient(180deg, #eef5ff 0%, #fefefe 100%);
            position: relative;
            overflow: hidden;
        }

        .dm-campaign-screen::before,
        .dm-campaign-screen::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(23, 99, 255, 0.16);
        }

        .dm-campaign-screen::before {
            width: 120px;
            height: 120px;
            top: -32px;
            right: -24px;
        }

        .dm-campaign-screen::after {
            width: 78px;
            height: 78px;
            bottom: -12px;
            left: -18px;
        }

        .dm-campaign-avatar-row {
            display: flex;
            gap: 8px;
            padding: 14px 12px 10px;
        }

        .dm-campaign-avatar-row span,
        .dm-campaign-stat-dots span {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: linear-gradient(135deg, #dbe9ff 0%, #a9c8ff 100%);
            display: inline-flex;
        }

        .dm-campaign-post {
            margin: 0 12px;
            height: 78px;
            border-radius: 16px;
            background: linear-gradient(135deg, #1763ff 0%, #5da5ff 100%);
            position: relative;
        }

        .dm-campaign-post::after {
            content: "";
            position: absolute;
            inset: 18px 18px auto;
            height: 42px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.18);
        }

        .dm-campaign-social-float,
        .dm-campaign-heart,
        .dm-campaign-user {
            position: absolute;
            width: 44px;
            height: 44px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 14px 26px rgba(18, 56, 132, 0.18);
        }

        .dm-campaign-social-float {
            left: -6px;
            top: 88px;
            background: linear-gradient(135deg, #ff8d3c 0%, #ff5b95 100%);
        }

        .dm-campaign-heart {
            right: -10px;
            top: 134px;
            background: linear-gradient(135deg, #ff7b8f 0%, #ff4d67 100%);
        }

        .dm-campaign-user {
            right: -2px;
            bottom: 22px;
            background: linear-gradient(135deg, #4b8dff 0%, #1763ff 100%);
        }

        .dm-campaign-laptop {
            width: 100%;
            max-width: 360px;
            min-height: 224px;
            padding: 16px;
        }

        .dm-campaign-laptop::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -16px;
            transform: translateX(-50%);
            width: 120%;
            height: 18px;
            border-radius: 999px;
            background: linear-gradient(180deg, #d5e4ff 0%, #a7c2f6 100%);
            box-shadow: 0 12px 24px rgba(18, 56, 132, 0.12);
        }

        .dm-campaign-laptop-screen {
            height: 172px;
            border-radius: 16px;
            background: linear-gradient(180deg, #eef5ff 0%, #ffffff 100%);
            padding: 14px;
        }

        .dm-campaign-graph {
            height: 72px;
            margin-bottom: 14px;
            border-radius: 12px;
            background: linear-gradient(180deg, #dbe9ff 0%, #f5f9ff 100%);
            position: relative;
            overflow: hidden;
        }

        .dm-campaign-graph svg,
        .dm-campaign-stats svg,
        .dm-campaign-report svg,
        .dm-campaign-bars svg {
            width: 100%;
            height: 100%;
        }

        .dm-campaign-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .dm-campaign-stats span {
            min-height: 56px;
            border-radius: 12px;
            background: #fff;
            border: 1px solid rgba(23, 99, 255, 0.08);
            display: block;
        }

        .dm-campaign-target {
            width: 178px;
            height: 178px;
            border-radius: 50%;
            background: radial-gradient(circle at center, #fff 0 18%, #cfe0ff 18% 33%, #7fa8ff 33% 48%, #dce9ff 48% 63%, #f7fbff 63% 100%);
            box-shadow: none;
            border: 0;
        }

        .dm-campaign-target::after {
            content: "";
            position: absolute;
            inset: 50% auto auto 50%;
            width: 92px;
            height: 10px;
            border-radius: 999px;
            background: linear-gradient(90deg, #1763ff 0%, #5da5ff 100%);
            transform: translate(-10%, -50%) rotate(-28deg);
            box-shadow: 10px 14px 0 0 #17337c;
        }

        .dm-campaign-mini-card {
            position: absolute;
            right: 4px;
            bottom: 6px;
            width: 126px;
            min-height: 138px;
            padding: 12px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(23, 99, 255, 0.08);
            box-shadow: 0 18px 32px rgba(18, 56, 132, 0.12);
        }

        .dm-campaign-mini-card strong,
        .dm-campaign-report strong {
            display: block;
            margin-bottom: 10px;
            color: var(--dm-primary-dark);
            font-size: 0.9rem;
        }

        .dm-campaign-mini-card span {
            display: block;
            height: 44px;
            margin-bottom: 10px;
            border-radius: 12px;
            background: linear-gradient(135deg, #dce9ff 0%, #f4f8ff 100%);
        }

        .dm-campaign-mini-card em {
            display: inline-flex;
            padding: 7px 10px;
            border-radius: 10px;
            background: linear-gradient(135deg, #1763ff 0%, #5da5ff 100%);
            color: #fff;
            font-style: normal;
            font-size: 0.78rem;
            font-weight: 600;
        }

        .dm-campaign-chart-wrap {
            width: 100%;
            max-width: 330px;
        }

        .dm-campaign-report {
            min-height: 202px;
            padding: 14px;
            margin-bottom: 14px;
        }

        .dm-campaign-report-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 8px;
            margin-bottom: 12px;
        }

        .dm-campaign-report-grid span {
            min-height: 52px;
            border-radius: 12px;
            background: linear-gradient(180deg, #f6f9ff 0%, #eef4ff 100%);
            display: block;
        }

        .dm-campaign-bars {
            height: 82px;
            border-radius: 14px;
            background: linear-gradient(180deg, #eef5ff 0%, #ffffff 100%);
            overflow: hidden;
        }

        .dm-campaign-pie-card {
            position: absolute;
            right: -4px;
            bottom: 0;
            width: 118px;
            min-height: 122px;
            padding: 12px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(23, 99, 255, 0.08);
            box-shadow: 0 18px 32px rgba(18, 56, 132, 0.12);
        }

        .dm-campaign-pie {
            width: 62px;
            height: 62px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background: conic-gradient(#1763ff 0 44%, #5da5ff 44% 72%, #dce9ff 72% 100%);
        }

        .dm-campaign-pie-card small {
            display: block;
            color: var(--dm-muted);
            font-size: 0.72rem;
            line-height: 1.45;
            text-align: center;
        }

        .dm-campaign-card--feature {
            min-height: 388px;
        }

        .dm-campaign-card--feature .dm-campaign-inner {
            grid-template-columns: minmax(0, 0.7fr) minmax(0, 1.3fr);
            gap: 24px;
            padding: 30px 26px 24px;
        }

        .dm-campaign-card--feature .dm-campaign-art {
            max-width: 560px;
            min-height: 315px;
            border-radius: 24px;
        }

        .dm-campaign-card--feature .dm-campaign-art img {
            min-height: 315px;
        }

        .dm-campaign-card--feature .dm-campaign-content h3 {
            font-size: 20px;
        }

        .dm-campaign-card--feature .dm-campaign-content p {
            max-width: 250px;
        }
        .dm-campaign-reverse .dm-campaign-inner {
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
        }

        .dm-campaign-reverse .dm-campaign-content {
            order: 2;
        }

        .dm-campaign-reverse .dm-campaign-visual {
            order: 1;
        }

        @media (max-width: 1199px) {
            .dm-campaign-inner,
            .dm-campaign-reverse .dm-campaign-inner {
                grid-template-columns: 1fr;
            }

            .dm-campaign-content p {
                max-width: none;
            }

            .dm-campaign-card--feature .dm-campaign-inner,
            .dm-campaign-card--feature.dm-campaign-reverse .dm-campaign-inner {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .dm-campaign-card--feature .dm-campaign-art {
                max-width: 100%;
                min-height: 280px;
            }

            .dm-campaign-card--feature .dm-campaign-art img {
                min-height: 280px;
            }

            .dm-campaign-visual {
            position: relative;
            min-height: 260px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dm-campaign-art {
            width: 100%;
            max-width: 420px;
            min-height: 260px;
            border-radius: 22px;
            overflow: hidden;
            background: linear-gradient(180deg, #eef5ff 0%, #ffffff 100%);
            border: 1px solid rgba(16, 33, 73, 0.08);
            box-shadow: 0 18px 36px rgba(18, 56, 132, 0.1);
        }

        .dm-campaign-art img {
            width: 100%;
            min-height: 260px;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .dm-campaign-visual {
                min-height: 220px;
            }
        }

        @media (max-width: 767px) {
            .dm-campaign-showcase {
                padding: 0 0 76px;
            }

            .dm-campaign-grid {
                grid-template-columns: 1fr;
            }

            .dm-campaign-card {
                min-height: auto;
            }

            .dm-campaign-inner {
                padding: 24px 18px 20px;
            }

            .dm-campaign-content h3 {
                font-size: 20px;
            }

            .dm-campaign-device,
            .dm-campaign-laptop,
            .dm-campaign-chart-wrap {
                max-width: 100%;
            }

            .dm-campaign-mini-card,
            .dm-campaign-pie-card {
                transform: scale(0.92);
                transform-origin: bottom right;
            }
        }

.dm-why-partner {
            position: relative;
            padding: 0 0 96px;
            background:
                radial-gradient(circle at top left, rgba(23, 99, 255, 0.12), transparent 28%),
                radial-gradient(circle at bottom right, rgba(0, 184, 148, 0.08), transparent 24%);
        }

        .dm-why-partner-shell {
            position: relative;
            overflow: hidden;
            background: #030408;
            box-shadow: 0 28px 70px rgba(4, 14, 34, 0.28);
        }

        .dm-why-partner-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.03), transparent 35%),
                linear-gradient(180deg, rgba(5, 10, 22, 0.12), rgba(5, 10, 22, 0.28));
            pointer-events: none;
        }

        .dm-why-partner-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
            gap: 34px;
            align-items: center;
            padding: 44px;
        }

        .dm-why-partner-visual {
            position: relative;
            min-height: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 24px 18px 0;
        }

        .dm-why-partner-visual::before {
            position: absolute;
            left: 0;
            top: 76px;
            width: 100%;
            height: 240px;
            background-size: 34px 10px;
            background-repeat: repeat;
            clip-path: polygon(0 0, 86% 0, 72% 100%, 0 100%);
            opacity: 0.95;
            transform: skewX(-18deg);
            filter: drop-shadow(0 18px 24px rgba(255, 196, 35, 0.16));
        }

        .dm-why-partner-image-wrap {
            position: relative;
            z-index: 1;
            width: min(100%, 430px);
        }

        .dm-why-partner-image {
            width: 100%;
            display: block;
            object-fit: contain;
            filter: drop-shadow(0 16px 36px rgba(0, 0, 0, 0.36));
        }

        .dm-why-partner-content {
            color: rgba(255, 255, 255, 0.92);
        }

        .dm-why-partner-kicker {
            display: inline-block;
            margin-bottom: 14px;
            color: #1d95ff;
            font-size: 0.98rem;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .dm-why-partner-title {
            margin: 0 0 14px;
            color: #ffffff;
            font-size: clamp(2rem, 3.5vw, 3.7rem);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .dm-why-partner-title span {
            color: #1d95ff;
        }

        .dm-why-partner-subtitle {
            margin: 0 0 14px;
            color: #1d95ff;
            font-size: 1.45rem;
            line-height: 1.35;
            font-weight: 700;
        }

        .dm-why-partner-copy {
            margin: 0 0 16px;
            color: rgba(233, 239, 249, 0.82);
            font-size: 1.02rem;
            line-height: 1.9;
        }

        .dm-why-partner-points {
            display: grid;
            gap: 0;
            margin-top: 28px;
        }

        .dm-why-partner-point {
            display: grid;
            grid-template-columns: 84px minmax(0, 1fr);
            gap: 18px;
            align-items: center;
            padding: 18px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
        }

        .dm-why-partner-point:first-child {
            border-top: 0;
            padding-top: 0;
        }

        .dm-why-partner-icon {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(29, 149, 255, 0.9);
            color: #ffffff;
            font-size: 1.8rem;
            background: radial-gradient(circle at 30% 30%, rgba(29, 149, 255, 0.24), rgba(29, 149, 255, 0.08));
            box-shadow: inset 0 0 0 8px rgba(255, 255, 255, 0.02);
        }

        .dm-why-partner-point h3 {
            margin: 0 0 6px;
            color: #1d95ff;
            font-size: 1.65rem;
            line-height: 1.2;
            font-weight: 700;
        }

        .dm-why-partner-point p {
            margin: 0;
            color: rgba(233, 239, 249, 0.82);
            font-size: 1.02rem;
            line-height: 1.7;
        }

        @media (max-width: 991px) {
            .dm-why-partner {
                padding: 0 0 82px;
            }

            .dm-why-partner-grid {
                grid-template-columns: 1fr;
                gap: 16px;
                padding: 34px 28px;
            }

            .dm-why-partner-visual {
                order: 2;
                min-height: 420px;
                padding-top: 10px;
            }

            .dm-why-partner-content {
                order: 1;
            }

            .dm-why-partner-visual::before {
                top: 96px;
                height: 210px;
            }
        }

        @media (max-width: 767px) {
            .dm-why-partner {
                padding: 0 0 72px;
            }

            .dm-why-partner-shell {
                border-radius: 26px;
            }

            .dm-why-partner-grid {
                padding: 26px 18px;
            }

            .dm-why-partner-title {
                font-size: 2.2rem;
            }

            .dm-why-partner-subtitle {
                font-size: 1.22rem;
            }

            .dm-why-partner-visual {
                min-height: 300px;
                padding: 14px 8px 0;
            }

            .dm-why-partner-visual::before {
                top: 72px;
                height: 150px;
                background-size: 26px 8px;
            }

            .dm-why-partner-point {
                grid-template-columns: 64px minmax(0, 1fr);
                gap: 14px;
            }

            .dm-why-partner-icon {
                width: 56px;
                height: 56px;
                font-size: 1.35rem;
            }

            .dm-why-partner-point h3 {
                font-size: 1.28rem;
            }
        }

.dm-growth-process {
            padding: 0 0 90px;
            background:
                radial-gradient(circle at top center, rgba(65, 105, 225, 0.08), transparent 34%),
                linear-gradient(180deg, #ffffff 0%, #f7f9ff 100%);
        }

        .dm-growth-process-head {
            margin-bottom: 42px;
            text-align: center;
        }

        .dm-growth-process-head h2 {
            margin: 0;
            color: #11182f;
            font-size: clamp(2rem, 3.8vw, 3.4rem);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .dm-growth-process-head h2 span {
            color: #4a73ff;
        }

        .dm-growth-process-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 28px;
            position: relative;
        }

        .dm-growth-step {
            position: relative;
            text-align: center;
        }

        .dm-growth-step:not(:last-child)::after {
            content: "";
            position: absolute;
            top: 58px;
            left: calc(50% + 58px);
            width: calc(100% - 116px);
            border-top: 3px dashed rgba(17, 24, 47, 0.55);
        }

        .dm-growth-icon-wrap {
            position: relative;
            width: 116px;
            height: 116px;
            margin: 0 auto 22px;
        }

        .dm-growth-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4f7dff 0%, #356cfb 100%);
            color: #ffffff;
            font-size: 2.7rem;
            box-shadow: 0 18px 34px rgba(53, 108, 251, 0.22);
        }

        .dm-growth-badge {
            position: absolute;
            top: 30px;
            right: 0;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #0e1220;
            border: 4px solid #ffffff;
            color: #ffffff;
            font-size: 1.4rem;
            font-weight: 700;
            box-shadow: 0 10px 24px rgba(14, 18, 32, 0.18);
        }

        .dm-growth-step h3 {
            margin: 0 0 12px;
            color: #12192c;
            font-size: 1.95rem;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: -0.03em;
        }

        .dm-growth-step p {
            margin: 0 auto;
            max-width: 270px;
            color: #4d5468;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        @media (max-width: 1199px) {
            .dm-growth-process-grid {
                gap: 22px;
            }

            .dm-growth-step h3 {
                font-size: 1.7rem;
            }

            .dm-growth-step:not(:last-child)::after {
                left: calc(50% + 52px);
                width: calc(100% - 104px);
            }
        }

        @media (max-width: 991px) {
            .dm-growth-process {
                padding: 0 0 78px;
            }

            .dm-growth-process-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                row-gap: 32px;
            }

            .dm-growth-step:nth-child(2)::after {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .dm-growth-process {
                padding: 0 0 68px;
            }

            .dm-growth-process-head {
                margin-bottom: 30px;
            }

            .dm-growth-process-grid {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .dm-growth-step:not(:last-child)::after {
                display: none;
            }

            .dm-growth-icon-wrap {
                width: 104px;
                height: 104px;
                margin-bottom: 18px;
            }

            .dm-growth-icon {
                width: 88px;
                height: 88px;
                font-size: 2.3rem;
            }

            .dm-growth-badge {
                width: 40px;
                height: 40px;
                top: 24px;
                font-size: 1.2rem;
            }

            .dm-growth-step h3 {
                font-size: 1.5rem;
            }

            .dm-growth-step p {
                font-size: 1rem;
            }
        }

.dm-client-voices {
            position: relative;
            padding: 0 0 96px;
               background: radial-gradient(circle at top center, rgb(247 248 255), transparent 32%), linear-gradient(180deg, #f8f9ff 0%, #eef2ff 100%);
            overflow: hidden;
        }

        .dm-client-voices::before,
        .dm-client-voices::after {
            position: absolute;
            top: 38px;
            color: rgba(72, 96, 190, 0.12);
            font-size: 7rem;
            line-height: 1;
            font-weight: 700;
        }

        .dm-client-voices::before {
            content: "\201C";
            left: 28px;
        }

        .dm-client-voices::after {
            content: "\201D";
            right: 34px;
        }

        .dm-client-voices-head {
            position: relative;
            z-index: 1;
            text-align: center;
            margin-bottom: 34px;
        }

        .dm-client-voices-head h2 {
            margin: 0 0 12px;
            color: #1a2033;
            font-size: clamp(2rem, 3.8vw, 3.3rem);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .dm-client-voices-head h2 span {
            color: #244ee3;
        }

        .dm-client-voices-head p {
            margin: 0 auto;
            max-width: 760px;
            color: #4b5467;
            font-size: 1.08rem;
            line-height: 1.8;
        }

        .dm-client-voices-head p span {
            color: #244ee3;
            font-weight: 600;
        }

        .dm-client-outcomes {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 22px;
            align-items: start;
            margin-bottom: 54px;
        }

        .dm-client-outcomes::before {
            content: "";
            position: absolute;
            left: 5%;
            right: 5%;
            top: 46px;
            border-top: 2px dashed rgba(73, 92, 166, 0.28);
            z-index: 0;
        }

        .dm-client-outcome {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .dm-client-outcome--featured .dm-client-outcome-icon {
            width: 104px;
            height: 104px;
            border: 4px solid rgba(66, 102, 245, 0.72);
            box-shadow: 0 16px 30px rgba(57, 96, 240, 0.18);
        }

        .dm-client-outcome-icon {
            width: 88px;
            height: 88px;
            margin: 0 auto 16px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.98);
            border: 1px solid rgba(65, 105, 225, 0.1);
            box-shadow: 0 12px 28px rgba(49, 71, 143, 0.1);
            color: #244ee3;
            font-size: 2.35rem;
        }

        .dm-client-outcome h3 {
            margin: 0;
            color: #242a3b;
            font-size: 1.12rem;
            line-height: 1.5;
            font-weight: 500;
        }

        .dm-client-testimonial-wrap {
            position: relative;
            max-width: 980px;
            margin: 0 auto;
            padding-top: 30px;
        }

        .dm-client-avatar {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 92px;
            height: 92px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #3c63f1;
            box-shadow: 0 16px 30px rgba(57, 96, 240, 0.2);
            background: #ffffff;
            z-index: 2;
        }

        .dm-client-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .dm-client-testimonial {
            position: relative;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 30px;
            padding: 78px 88px 34px;
            text-align: center;
        }

        .dm-client-testimonial-quote {
            color: #244ee3;
            font-size: 3.4rem;
            line-height: 1;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .dm-client-testimonial p {
            margin: 0 auto 16px;
            max-width: 690px;
            color: #3f485d;
            font-size: 1.08rem;
            line-height: 1.8;
        }

        .dm-client-testimonial p strong {
            color: #244ee3;
            font-weight: 700;
        }

        .dm-client-divider {
            width: 50px;
            height: 3px;
            margin: 8px auto 14px;
            border-radius: 999px;
            background: linear-gradient(90deg, #3c63f1 0%, #8ca2ff 100%);
        }

        .dm-client-name {
            margin: 0 0 4px;
            color: #244ee3;
            font-size: 1.45rem;
            line-height: 1.2;
            font-weight: 700;
        }

        .dm-client-brand {
            margin: 0;
            color: #4f5668;
            font-size: 1rem;
            line-height: 1.6;
        }

        .dm-client-brand {
            min-height: 52px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 8px;
            padding: 10px 18px;
            border-radius: 16px;
            background: rgba(36, 78, 227, 0.06);
        }

        .dm-client-brand img {
            display: block;
            max-width: 150px;
            max-height: 34px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .dm-client-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;
            height: 46px;
            z-index: 1;
            border: 0;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #244ee3;
            color: #ffffff;
            font-size: 1.1rem;
            box-shadow: 0 14px 28px rgba(36, 78, 227, 0.24);
        }

        .dm-client-arrow--prev {
            left: -14px;
        }

        .dm-client-arrow--next {
            right: -14px;
        }

        @media (max-width: 1199px) {
            .dm-client-outcomes {
                gap: 18px;
            }

            .dm-client-testimonial {
                padding: 78px 66px 34px;
            }
        }

        @media (max-width: 991px) {
            .dm-client-voices {
                padding: 0 0 82px;
            }

            .dm-client-outcomes {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                row-gap: 24px;
            }

            .dm-client-outcomes::before {
                display: none;
            }

            .dm-client-testimonial {
                padding: 78px 34px 30px;
            }

            .dm-client-arrow--prev {
                left: 12px;
            }

            .dm-client-arrow--next {
                right: 12px;
            }
        }

        .dm-client-slider-viewport {
            overflow: hidden;
            border-radius: 30px;
        }

        .dm-client-slider-track {
            display: flex;
            transition: transform 0.45s ease;
            will-change: transform;
        }

        .dm-client-slide {
            position: relative;
            min-width: 100%;
            flex: 0 0 100%;
            padding-top: 30px;
        }

        .dm-client-testimonial-wrap .dm-client-testimonial {
            min-height: 300px;
        }

        @media (max-width: 767px) {
            .dm-client-voices {
                padding: 0 0 70px;
            }

            .dm-client-voices::before,
            .dm-client-voices::after {
                display: none;
            }

            .dm-client-voices-head {
                margin-bottom: 28px;
            }

            .dm-client-voices-head p {
                font-size: 1rem;
            }

            .dm-client-outcomes {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px 14px;
                margin-bottom: 40px;
            }

            .dm-client-outcome-icon,
            .dm-client-outcome--featured .dm-client-outcome-icon {
                width: 82px;
                height: 82px;
                font-size: 2rem;
            }

            .dm-client-outcome h3 {
                font-size: 1rem;
            }

            .dm-client-avatar {
                width: 82px;
                height: 82px;
            }

            .dm-client-testimonial {
                padding: 68px 22px 26px;
                border-radius: 24px;
            }

            .dm-client-testimonial p {
                font-size: 1rem;
                text-align: left;
            }

            .dm-client-arrow {
                width: 42px;
                height: 42px;
                top: auto;
                bottom: -56px;
                transform: none;
            }

            .dm-client-arrow--prev {
                left: calc(50% - 52px);
            }

            .dm-client-arrow--next {
                right: calc(50% - 52px);
            }

            .dm-client-slider-viewport {
                border-radius: 24px;
            }

            .dm-client-slide {
                padding-top: 24px;
            }

            .dm-client-testimonial-wrap .dm-client-testimonial {
                min-height: 340px;
            }
        }


/* =====================================================
   SEO CONTENT ADDITIONS  (new sections + modifiers only;
   everything above is the original design, untouched)
   ===================================================== */
.dm-overview { padding: 72px 0 24px; }
.dm-overview-inner { max-width: 920px; margin: 0 auto; text-align: center; }
.dm-overview h2 { margin: 0 0 20px; color: var(--dm-primary-dark); font-size: clamp(2rem, 4vw, 3.2rem); line-height: 1.1; font-weight: 700; letter-spacing: -0.04em; }
.dm-overview h2 span { color: var(--dm-primary); }
.dm-overview p { margin: 0 0 14px; color: var(--dm-muted); font-size: 1.05rem; line-height: 1.9; }
.dm-overview a,
.dm-need-copy a,
.dm-best-service-card p a { color: var(--dm-primary); font-weight: 600; text-decoration: none; border-bottom: 1px solid rgba(23, 99, 255, 0.3); }
.dm-overview a:hover,
.dm-need-copy a:hover,
.dm-best-service-card p a:hover { border-bottom-color: var(--dm-primary); }

/* modifiers on existing components */
.dm-benefits-title--long { font-size: clamp(1.8rem, 3.2vw, 2.7rem); line-height: 1.15; }
.dm-benefit-list--five { gap: 18px; }
.dm-benefit-list--five .dm-benefit-item { grid-template-columns: 56px minmax(0, 1fr); gap: 16px; }
.dm-benefit-list--five .dm-benefit-icon { width: 56px; height: 56px; font-size: 1.25rem; }
.dm-benefit-list--five .dm-benefit-item h3 { font-size: 1.3rem; margin-bottom: 4px; }
.dm-benefit-list--five .dm-benefit-item p { font-size: 0.97rem; line-height: 1.65; }
.dm-benefits-intro + .dm-benefits-intro { margin-top: -14px; }
.dm-best-services-head { max-width: 860px; }
.dm-best-service-card h3 a { color: inherit; text-decoration: none; }
.dm-best-service-card h3 a:hover { color: var(--dm-primary); }
.dm-best-service-card p { font-size: 0.95rem; line-height: 1.65; }

/* strategy section */
.dm-strategy { padding: 0 0 96px; }
.dm-strategy-grid { display: grid; grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr); gap: 52px; align-items: center; }
.dm-strategy-visual { position: relative; padding: 14px; border-radius: 34px; background: rgba(255, 255, 255, 0.85); border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); }
.dm-strategy-visual::after { content: ""; position: absolute; right: -22px; bottom: -22px; width: 96px; height: 96px; z-index: -1; background-image: radial-gradient(rgba(93, 165, 255, 0.7) 1.8px, transparent 1.8px); background-size: 14px 14px; opacity: 0.8; }
.dm-strategy-visual img { display: block; width: 100%; height: auto; border-radius: 24px; }
.dm-strategy-copy h2 { margin: 0 0 20px; color: var(--dm-primary-dark); font-size: clamp(2rem, 3.8vw, 3.2rem); line-height: 1.1; font-weight: 700; letter-spacing: -0.04em; }
.dm-strategy-copy h2 span { color: var(--dm-primary); }
.dm-strategy-copy p { margin: 0 0 14px; color: var(--dm-muted); font-size: 1.02rem; line-height: 1.85; }

/* "what makes Technofra different" checklist (inside existing dark panel) */
.dm-why-partner-lead { margin: 24px 0 0; color: #ffffff; font-size: 1.1rem; font-weight: 600; }
.dm-why-partner-checks { list-style: none; margin: 16px 0 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px 24px; }
.dm-why-partner-checks li { display: flex; align-items: flex-start; gap: 12px; color: rgba(233, 239, 249, 0.92); font-size: 1rem; line-height: 1.5; }
.dm-why-partner-checks li i { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; border: 1.5px solid rgba(29, 149, 255, 0.9); color: #ffffff; font-size: 0.72rem; background: radial-gradient(circle at 30% 30%, rgba(29, 149, 255, 0.24), rgba(29, 149, 255, 0.08)); }

/* 5-step process (existing step design, five columns on desktop) */
@media (min-width: 1200px) {
    .dm-growth-process-grid--five { grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 18px; }
    .dm-growth-process-grid--five .dm-growth-step h3 { font-size: 1.45rem; }
    .dm-growth-process-grid--five .dm-growth-step p { font-size: 1rem; }
}
@media (max-width: 991px) {
    .dm-growth-process-grid--five .dm-growth-step:nth-child(4)::after { display: none; }
    .dm-growth-process-grid--five .dm-growth-step:last-child { grid-column: 1 / -1; }
}

/* why businesses need */
.dm-need { padding: 0 0 96px; }
.dm-need-card { display: grid; grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr); gap: 46px; align-items: center; padding: 52px; border-radius: 36px; background: rgba(255, 255, 255, 0.92); border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); }
.dm-need-card h2 { margin: 0; color: var(--dm-primary-dark); font-size: clamp(1.9rem, 3.4vw, 3rem); line-height: 1.12; font-weight: 700; letter-spacing: -0.04em; }
.dm-need-card h2 span { color: var(--dm-primary); }
.dm-need-copy p { margin: 0 0 14px; color: var(--dm-muted); font-size: 1.02rem; line-height: 1.85; }
.dm-need-goals { list-style: none; margin: 22px 0 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
.dm-need-goals li { display: flex; align-items: center; gap: 12px; padding: 14px 16px; border-radius: 16px; background: var(--dm-primary-soft); color: var(--dm-primary-dark); font-size: 0.98rem; font-weight: 600; }
.dm-need-goals li i { color: var(--dm-primary); }

/* partner CTA */
.dm-cta { padding: 0 0 96px; }
.dm-cta-box { position: relative; overflow: hidden; padding: 64px 48px; border-radius: 36px; text-align: center; background: linear-gradient(135deg, #0f1d59 0%, #1763ff 100%); box-shadow: 0 28px 70px rgba(18, 56, 132, 0.28); }
.dm-cta-box::before { content: ""; position: absolute; top: -90px; left: -90px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(93, 165, 255, 0.35) 0%, rgba(93, 165, 255, 0) 70%); }
.dm-cta-box::after { content: ""; position: absolute; right: 32px; bottom: 28px; width: 84px; height: 84px; background-image: radial-gradient(rgba(255, 255, 255, 0.55) 1.8px, transparent 1.8px); background-size: 14px 14px; }
.dm-cta-inner { position: relative; z-index: 1; max-width: 820px; margin: 0 auto; }
.dm-cta-box h2 { margin: 0 0 18px; color: #ffffff; font-size: clamp(1.9rem, 3.6vw, 3.1rem); line-height: 1.12; font-weight: 700; letter-spacing: -0.04em; }
.dm-cta-box h2 span { color: #8cc0ff; }
.dm-cta-box p { margin: 0 0 14px; color: rgba(255, 255, 255, 0.86); font-size: 1.05rem; line-height: 1.85; }
.dm-cta-box p strong { color: #ffffff; }
.dm-cta-btn { display: inline-flex; align-items: center; justify-content: center; gap: 10px; min-height: 58px; margin-top: 12px; padding: 0 32px; border-radius: 14px; background: #ffffff; color: var(--dm-primary-dark); font-size: 1rem; font-weight: 600; text-decoration: none; box-shadow: 0 18px 34px rgba(5, 16, 60, 0.28); transition: all 0.28s ease; }
.dm-cta-btn:hover { color: var(--dm-primary); transform: translateY(-2px); }

/* FAQ */
.dm-faq { padding: 0 0 100px; }
.dm-faq-grid { display: grid; grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr); gap: 46px; align-items: start; }
.dm-faq-side { position: sticky; top: 110px; }
.dm-faq-side h2 { margin: 0 0 14px; color: var(--dm-primary-dark); font-size: clamp(2rem, 3.8vw, 3.2rem); line-height: 1.1; font-weight: 700; letter-spacing: -0.04em; }
.dm-faq-side h2 span { color: var(--dm-primary); }
.dm-faq-line { width: 48px; height: 3px; margin-bottom: 26px; border-radius: 3px; background: var(--dm-primary); }
.dm-faq-image { padding: 12px; border-radius: 28px; background: rgba(255, 255, 255, 0.85); border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); }
.dm-faq-image img { display: block; width: 100%; height: auto; border-radius: 18px; }
.dm-faq-list { display: grid; gap: 14px; }
.dm-faq-item { border-radius: 18px; background: rgba(255, 255, 255, 0.75); border: 1px solid var(--dm-border); overflow: hidden; transition: box-shadow 0.28s ease, background 0.28s ease; }
.dm-faq-item[open] { background: #ffffff; box-shadow: 0 16px 38px rgba(18, 56, 132, 0.1); }
.dm-faq-item summary { display: flex; align-items: center; gap: 14px; padding: 18px 20px; cursor: pointer; list-style: none; }
.dm-faq-item summary::-webkit-details-marker { display: none; }
.dm-faq-item summary:focus-visible { outline: 2px solid var(--dm-primary); outline-offset: -2px; }
.dm-faq-num { flex: 0 0 34px; width: 34px; height: 34px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background: var(--dm-primary); color: #ffffff; font-size: 0.8rem; font-weight: 700; }
.dm-faq-q { flex: 1 1 auto; min-width: 0; margin: 0; color: var(--dm-primary-dark); font-size: 1.08rem; line-height: 1.4; font-weight: 600; }
.dm-faq-toggle { flex: 0 0 30px; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; border: 1.5px solid var(--dm-primary); color: var(--dm-primary); font-size: 1.1rem; line-height: 1; transition: all 0.2s ease; }
.dm-faq-toggle::before { content: "+"; }
.dm-faq-item[open] .dm-faq-toggle { background: var(--dm-primary); color: #ffffff; }
.dm-faq-item[open] .dm-faq-toggle::before { content: "\2013"; }
.dm-faq-answer { padding: 0 20px 20px 68px; }
.dm-faq-answer p { margin: 0; color: var(--dm-muted); font-size: 1rem; line-height: 1.8; }

@media (max-width: 991px) {
    .dm-overview { padding: 52px 0 16px; }
    .dm-strategy { padding-bottom: 72px; }
    .dm-strategy-grid,
    .dm-need-card,
    .dm-faq-grid { grid-template-columns: 1fr; gap: 30px; }
    .dm-need { padding-bottom: 72px; }
    .dm-need-card { padding: 36px 28px; }
    .dm-cta { padding-bottom: 72px; }
    .dm-faq { padding-bottom: 72px; }
    .dm-faq-side { position: static; }
    .dm-faq-image { max-width: 560px; }
}
@media (max-width: 767px) {
    .dm-overview { text-align: left; }
    .dm-overview-inner { text-align: left; }
    .dm-cta-box { padding: 44px 24px; border-radius: 28px; }
    .dm-cta-box::after { display: none; }
    .dm-need-card { border-radius: 28px; padding: 30px 22px; }
}
@media (max-width: 575px) {
    .dm-why-partner-checks,
    .dm-need-goals { grid-template-columns: 1fr; }
    .dm-faq-item summary { padding: 16px; gap: 12px; }
    .dm-faq-q { font-size: 1rem; }
    .dm-faq-answer { padding: 0 16px 18px 16px; }
    .dm-strategy-visual::after { display: none; }
}
/* ===== Refresh: overview / benefits slider / strategy / process / need / faq ===== */
.dm-overview { padding: 72px 0 40px; }
.dm-overview-card { display: grid; grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr); gap: 56px; align-items: center; padding: 56px; border-radius: 36px; background: linear-gradient(135deg, #ffffff 0%, #f4f8ff 100%); border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); position: relative; overflow: hidden; }
.dm-overview-card::after { content: ""; position: absolute; right: -60px; top: -60px; width: 220px; height: 220px; border-radius: 50%; background: radial-gradient(circle, rgba(93, 165, 255, 0.22), rgba(93, 165, 255, 0) 70%); pointer-events: none; }
.dm-overview-head h2 { margin: 0; text-align: left; }
.dm-overview-line { width: 56px; height: 4px; margin-top: 22px; border-radius: 4px; background: var(--dm-primary); }
.dm-overview-body { position: relative; z-index: 1; }
.dm-overview-body p { margin: 0 0 16px; color: var(--dm-muted); font-size: 1.05rem; line-height: 1.85; text-align: left; }
.dm-overview-tags { list-style: none; margin: 22px 0 0; padding: 0; display: flex; flex-wrap: wrap; gap: 10px; }
.dm-overview-tags li { display: inline-flex; align-items: center; gap: 8px; padding: 9px 16px; border-radius: 999px; background: var(--dm-primary-soft); color: var(--dm-primary-dark); font-size: 0.9rem; font-weight: 600; }
.dm-overview-tags li i { color: var(--dm-primary); font-size: 0.82rem; }

.dm-benefits-section { padding: 24px 0 88px; }
.dm-benefits-wrap { margin-bottom: 44px; }
.dm-benefits-wrap > img { width: 100%; height: auto; display: block; }
.dm-benefit-slider { position: relative; }
.dm-benefit-slider-bar { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 18px; }
.dm-benefit-slider-hint { color: var(--dm-muted); font-size: 0.92rem; font-weight: 500; }
.dm-benefit-slider-hint i { color: var(--dm-primary); margin-left: 6px; }
.dm-benefit-slider-nav { display: flex; gap: 10px; }
.dm-benefit-slider-nav button { width: 46px; height: 46px; border-radius: 50%; border: 1.5px solid var(--dm-primary); background: #ffffff; color: var(--dm-primary); cursor: pointer; transition: all 0.25s ease; }
.dm-benefit-slider-nav button:hover { background: var(--dm-primary); color: #ffffff; }
.dm-benefit-track { display: flex; gap: 22px; overflow-x: auto; scroll-snap-type: x mandatory; padding: 8px 4px 28px; scrollbar-width: thin; scrollbar-color: rgba(23, 99, 255, 0.35) transparent; -webkit-overflow-scrolling: touch; }
.dm-benefit-track::-webkit-scrollbar { height: 6px; }
.dm-benefit-track::-webkit-scrollbar-thumb { background: rgba(23, 99, 255, 0.35); border-radius: 6px; }
.dm-benefit-card { position: relative; flex: 0 0 300px; scroll-snap-align: start; padding: 30px 26px 28px; border-radius: 26px; background: linear-gradient(160deg, #ffffff 0%, #f4f8ff 100%); border: 1px solid var(--dm-border); box-shadow: 0 18px 44px rgba(18, 56, 132, 0.1); transition: transform 0.28s ease, box-shadow 0.28s ease; }
.dm-benefit-card:hover { transform: translateY(-6px); box-shadow: var(--dm-shadow); }
.dm-benefit-card .dm-benefit-icon { width: 60px; height: 60px; font-size: 1.3rem; margin-bottom: 20px; }
.dm-benefit-card h3 { margin: 0 0 10px; color: var(--dm-primary-dark); font-size: 1.3rem; font-weight: 700; }
.dm-benefit-card p { margin: 0; color: var(--dm-muted); font-size: 0.97rem; line-height: 1.7; }

.dm-strategy { padding: 0 0 96px; }
.dm-strategy-grid--solo { display: block; }
.dm-strategy-copy { display: grid; grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr); gap: 56px; align-items: center; padding: 52px 56px; border-radius: 36px; background: rgba(255, 255, 255, 0.92); border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); }
.dm-strategy-copy h2 { margin: 0; }
.dm-strategy-body p:last-child { margin-bottom: 0; }

.dm-growth-process { padding: 88px 0 96px; }
.dm-growth-process-head { margin-bottom: 56px; }
.dm-growth-process-grid--five .dm-growth-step { display: flex; flex-direction: column; align-items: center; padding: 0 10px; }
.dm-growth-process-grid--five .dm-growth-step h3 { min-height: 2.5em; display: flex; align-items: center; justify-content: center; margin-bottom: 14px; }
.dm-growth-process-grid--five .dm-growth-step p { max-width: 100%; line-height: 1.7; }
@media (min-width: 1200px) { .dm-growth-process-grid--five { gap: 28px; } .dm-growth-process-grid--five .dm-growth-step h3 { font-size: 1.35rem; } .dm-growth-process-grid--five .dm-growth-step p { font-size: 0.98rem; } }
@media (max-width: 991px) { .dm-growth-process { padding: 64px 0 72px; } .dm-growth-process-grid--five .dm-growth-step h3 { min-height: 0; } }

.dm-need { padding: 0 0 96px; }
.dm-need-card { grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.2fr); gap: 36px 56px; align-items: start; padding: 56px; background: linear-gradient(135deg, #ffffff 0%, #f4f8ff 100%); }
.dm-need-head h2 { margin: 0; }
.dm-need-goals { grid-column: 1 / -1; margin: 6px 0 0; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.dm-need-goals li { flex-direction: column; align-items: flex-start; gap: 14px; padding: 22px; border-radius: 20px; background: #ffffff; border: 1px solid var(--dm-border); box-shadow: 0 14px 32px rgba(18, 56, 132, 0.08); }
.dm-need-goal-icon { width: 48px; height: 48px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%); color: #ffffff; font-size: 1.05rem; }
.dm-need-goals li i { color: #ffffff; }

.dm-faq-note { margin: 0 0 22px; color: var(--dm-muted); font-size: 1.02rem; line-height: 1.8; }
.dm-faq-cta { display: inline-flex; align-items: center; gap: 10px; min-height: 52px; padding: 0 26px; border-radius: 14px; background: var(--dm-primary); color: #ffffff; font-weight: 600; text-decoration: none; box-shadow: 0 16px 32px rgba(23, 99, 255, 0.22); transition: all 0.28s ease; }
.dm-faq-cta:hover { color: #ffffff; transform: translateY(-2px); }

@media (max-width: 991px) {
    .dm-overview-card, .dm-strategy-copy, .dm-need-card { grid-template-columns: 1fr; gap: 26px; padding: 36px 28px; }
    .dm-need-goals { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 575px) {
    .dm-overview-card, .dm-strategy-copy, .dm-need-card { padding: 28px 20px; border-radius: 26px; }
    .dm-need-goals { grid-template-columns: 1fr; }
    .dm-benefit-card { flex-basis: 82%; }
    .dm-benefit-slider-hint { font-size: 0.85rem; }
}
/* ===== Refresh 2: spacing, hero button, slider ===== */
.dm-hero .dm-copy { padding-bottom: 64px; }
.dm-benefit-slider-bar { justify-content: flex-end; margin-bottom: 8px; }
.dm-benefit-track { cursor: grab; touch-action: pan-x pan-y; overscroll-behavior-x: contain; min-width: 0; max-width: 100%; }
.dm-benefit-track.is-dragging { cursor: grabbing; scroll-snap-type: none; scroll-behavior: auto; user-select: none; }
.dm-benefit-track.is-dragging .dm-benefit-card { transform: none; }
.dm-need { padding-top: 80px; }
.dm-client-voices { padding-top: 96px; }
@media (max-width: 991px) {
    .dm-hero .dm-copy { padding-bottom: 40px; }
    .dm-need { padding-top: 56px; }
    .dm-client-voices { padding-top: 72px; }
}
/* ===== Refresh 3: looping benefits carousel ===== */
.dm-benefit-slider { margin: 0 -20px; }
.dm-benefit-slider-bar { padding: 0 20px; }
.dm-benefit-track { display: flex; gap: 22px; overflow-x: auto; overflow-y: hidden; scroll-snap-type: none; scrollbar-width: none; -ms-overflow-style: none; padding: 26px 20px 44px; margin: -10px 0 -20px; background: transparent; -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 36px, #000 calc(100% - 36px), transparent 100%); mask-image: linear-gradient(90deg, transparent 0, #000 36px, #000 calc(100% - 36px), transparent 100%); }
.dm-benefit-track::-webkit-scrollbar { display: none; width: 0; height: 0; }
.dm-benefit-card { flex: 0 0 320px; display: flex; flex-direction: column; padding: 34px 30px 32px; border-radius: 28px; background: linear-gradient(165deg, #ffffff 0%, #f3f7ff 100%); border: 1px solid var(--dm-border); box-shadow: 0 16px 40px rgba(18, 56, 132, 0.09); overflow: hidden; user-select: none; }
.dm-benefit-card::before { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #1763ff, #5da5ff); opacity: 0; transition: opacity 0.28s ease; }
.dm-benefit-card::after { content: ""; position: absolute; right: -50px; bottom: -50px; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(93, 165, 255, 0.2), rgba(93, 165, 255, 0) 70%); pointer-events: none; }
.dm-benefit-card:hover { transform: translateY(-6px); box-shadow: 0 24px 54px rgba(18, 56, 132, 0.16); }
.dm-benefit-card:hover::before { opacity: 1; }
.dm-benefit-card .dm-benefit-icon { width: 64px; height: 64px; margin-bottom: 24px; font-size: 1.4rem; }
.dm-benefit-card h3 { margin: 0 0 12px; font-size: 1.35rem; line-height: 1.25; }
.dm-benefit-card p { font-size: 0.98rem; line-height: 1.75; position: relative; z-index: 1; }
.dm-benefit-track.is-dragging { cursor: grabbing; }
@media (max-width: 575px) { .dm-benefit-slider { margin: 0 -12px; } .dm-benefit-card { flex-basis: 84%; } }
/* ===== Refresh 4: strategy / need / CTA / FAQ ===== */
.dm-benefit-track { outline: none; }
.dm-benefit-track:focus, .dm-benefit-track:focus-visible { outline: none; }

/* Strategy */
.dm-sx { padding: 0 0 100px; }
.dm-sx-head { text-align: center; max-width: 820px; margin: 0 auto 52px; }
.dm-sx-head h2 { margin: 0; color: var(--dm-primary-dark); font-size: clamp(2rem, 3.8vw, 3.2rem); line-height: 1.1; font-weight: 700; letter-spacing: -0.04em; }
.dm-sx-head h2 span { color: var(--dm-primary); }
.dm-sx-grid { position: relative; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 28px; }
.dm-sx-grid::before { content: ""; position: absolute; left: 16%; right: 16%; top: 34px; border-top: 3px dashed rgba(23, 99, 255, 0.3); }
.dm-sx-card { position: relative; padding: 0 30px 36px; text-align: center; border-radius: 30px; background: linear-gradient(170deg, #ffffff 0%, #f3f7ff 100%); border: 1px solid var(--dm-border); box-shadow: 0 18px 44px rgba(18, 56, 132, 0.09); margin-top: 34px; transition: transform 0.3s ease, box-shadow 0.3s ease; }
.dm-sx-card:hover { transform: translateY(-8px); box-shadow: var(--dm-shadow); }
.dm-sx-icon { width: 72px; height: 72px; margin: -34px auto 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%); color: #ffffff; font-size: 1.6rem; border: 6px solid #ffffff; box-shadow: 0 16px 34px rgba(23, 99, 255, 0.28); }
.dm-sx-card h3 { margin: 0 0 12px; color: var(--dm-primary-dark); font-size: 1.4rem; font-weight: 700; }
.dm-sx-card p { margin: 0; color: var(--dm-muted); font-size: 1rem; line-height: 1.8; }

/* Why businesses need */
.dm-nd { padding: 0 0 100px; }
.dm-nd-card { display: grid; grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.2fr); border-radius: 40px; overflow: hidden; background: #ffffff; border: 1px solid var(--dm-border); box-shadow: var(--dm-shadow); }
.dm-nd-panel { position: relative; display: flex; flex-direction: column; justify-content: center; padding: 56px 48px; background: linear-gradient(150deg, #0f1d59 0%, #1763ff 100%); overflow: hidden; }
.dm-nd-panel::before { content: ""; position: absolute; top: -80px; right: -80px; width: 260px; height: 260px; border-radius: 50%; background: radial-gradient(circle, rgba(93, 165, 255, 0.4), rgba(93, 165, 255, 0) 70%); }
.dm-nd-panel::after { content: ""; position: absolute; right: 30px; bottom: 28px; width: 90px; height: 90px; background-image: radial-gradient(rgba(255, 255, 255, 0.5) 1.8px, transparent 1.8px); background-size: 14px 14px; }
.dm-nd-kicker { position: relative; align-self: flex-start; margin-bottom: 20px; padding: 8px 16px; border-radius: 999px; background: rgba(255, 255, 255, 0.14); color: #ffffff; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; }
.dm-nd-panel h2 { position: relative; margin: 0; color: #ffffff; font-size: clamp(1.9rem, 3.2vw, 2.8rem); line-height: 1.12; font-weight: 700; letter-spacing: -0.04em; }
.dm-nd-panel h2 span { color: #8cc0ff; }
.dm-nd-line { position: relative; width: 56px; height: 4px; margin-top: 24px; border-radius: 4px; background: #ffffff; }
.dm-nd-body { padding: 46px 48px; background: linear-gradient(135deg, #ffffff 0%, #f4f8ff 100%); }
.dm-nd-rows { display: grid; gap: 22px; }
.dm-nd-row { display: grid; grid-template-columns: 52px minmax(0, 1fr); gap: 18px; align-items: start; }
.dm-nd-ico { width: 52px; height: 52px; border-radius: 16px; display: flex; align-items: center; justify-content: center; background: var(--dm-primary-soft); color: var(--dm-primary); font-size: 1.2rem; }
.dm-nd-row p { margin: 0; color: var(--dm-muted); font-size: 1.02rem; line-height: 1.8; }
.dm-nd-goals { list-style: none; margin: 32px 0 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; }
.dm-nd-goals li { display: flex; align-items: center; gap: 14px; padding: 14px 18px; border-radius: 18px; background: #ffffff; border: 1px solid var(--dm-border); color: var(--dm-primary-dark); font-weight: 600; box-shadow: 0 10px 26px rgba(18, 56, 132, 0.07); transition: transform 0.25s ease, box-shadow 0.25s ease; }
.dm-nd-goals li:hover { transform: translateY(-3px); box-shadow: 0 16px 34px rgba(18, 56, 132, 0.14); }
.dm-nd-gico { flex: 0 0 42px; width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%); color: #ffffff; font-size: 0.95rem; }

/* CTA */
.dm-ct { text-align: left; padding: 64px 56px; }
.dm-ct-ring { position: absolute; border-radius: 50%; border: 2px solid rgba(255, 255, 255, 0.12); pointer-events: none; }
.dm-ct-ring--a { width: 360px; height: 360px; right: -90px; top: -120px; }
.dm-ct-ring--b { width: 220px; height: 220px; right: 40px; bottom: -110px; }
.dm-ct-grid { position: relative; z-index: 1; display: grid; grid-template-columns: minmax(0, 1.25fr) minmax(0, 0.75fr); gap: 52px; align-items: center; }
.dm-ct-main { text-align: left; }
.dm-ct-kicker { display: inline-block; margin-bottom: 18px; padding: 8px 16px; border-radius: 999px; background: rgba(255, 255, 255, 0.14); color: #ffffff; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; }
.dm-ct .dm-cta-box h2, .dm-ct h2 { font-size: clamp(1.9rem, 3.3vw, 2.8rem); }
.dm-ct-points { list-style: none; margin: 0; padding: 22px; display: grid; gap: 12px; border-radius: 28px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.22); backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px); box-shadow: 0 24px 50px rgba(5, 16, 60, 0.25); }
.dm-ct-points li { display: flex; align-items: center; gap: 14px; padding: 14px 16px; border-radius: 18px; background: rgba(255, 255, 255, 0.95); color: var(--dm-primary-dark); font-weight: 600; transition: transform 0.25s ease; }
.dm-ct-points li:hover { transform: translateX(6px); }
.dm-ct-points li span { flex: 0 0 40px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%); color: #ffffff; font-size: 0.9rem; }

/* FAQ */
.dm-faq-help { display: flex; align-items: center; gap: 16px; margin-top: 30px; padding: 22px 24px; border-radius: 24px; background: linear-gradient(135deg, #ffffff 0%, #f3f7ff 100%); border: 1px solid var(--dm-border); box-shadow: 0 16px 38px rgba(18, 56, 132, 0.1); }
.dm-faq-help-icon { flex: 0 0 56px; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1763ff 0%, #0d58f2 100%); color: #ffffff; font-size: 1.3rem; box-shadow: 0 14px 28px rgba(23, 99, 255, 0.25); }
.dm-faq-help strong { display: block; margin-bottom: 4px; color: var(--dm-primary-dark); font-size: 1.1rem; }
.dm-faq-help a { display: block; color: var(--dm-muted); font-size: 0.97rem; line-height: 1.6; text-decoration: none; }
.dm-faq-help a:hover { color: var(--dm-primary); }
.dm-faq-list { gap: 16px; }
.dm-faq-item { border-radius: 22px; box-shadow: 0 8px 22px rgba(18, 56, 132, 0.05); }
.dm-faq-item:hover { box-shadow: 0 14px 32px rgba(18, 56, 132, 0.1); }
.dm-faq-item[open] { border-color: rgba(23, 99, 255, 0.35); box-shadow: 0 20px 44px rgba(18, 56, 132, 0.14); }
.dm-faq-item summary { padding: 20px 22px; }
.dm-faq-item[open] .dm-faq-q { color: var(--dm-primary); }

@media (max-width: 991px) {
    .dm-sx { padding-bottom: 72px; }
    .dm-sx-grid { grid-template-columns: 1fr; gap: 14px; }
    .dm-sx-grid::before { display: none; }
    .dm-nd { padding-bottom: 72px; }
    .dm-nd-card { grid-template-columns: 1fr; }
    .dm-nd-panel { padding: 40px 30px; }
    .dm-nd-body { padding: 34px 28px; }
    .dm-ct { padding: 44px 28px; }
    .dm-ct-grid { grid-template-columns: 1fr; gap: 32px; }
}
@media (max-width: 575px) {
    .dm-nd-goals { grid-template-columns: 1fr; }
    .dm-nd-row { grid-template-columns: 44px minmax(0, 1fr); gap: 14px; }
    .dm-nd-ico { width: 44px; height: 44px; }
    .dm-faq-help { padding: 18px; }
    .dm-ct { padding: 36px 20px; }
}
/* ===== Refresh 5: wow overview ===== */
@property --dm-ang { syntax: '<angle>'; inherits: false; initial-value: 0deg; }
.dm-ov { position: relative; padding: 84px 0 56px; overflow: hidden; }
.dm-ov-blob { position: absolute; border-radius: 50%; filter: blur(60px); pointer-events: none; opacity: 0.55; }
.dm-ov-blob--a { width: 340px; height: 340px; left: -90px; top: 40px; background: rgba(93, 165, 255, 0.35); animation: dmOvFloat 9s ease-in-out infinite; }
.dm-ov-blob--b { width: 300px; height: 300px; right: -70px; bottom: 10px; background: rgba(23, 99, 255, 0.22); animation: dmOvFloat 11s ease-in-out infinite reverse; }
.dm-ov .container { position: relative; z-index: 1; }
.dm-ov-card { --mx: 50%; --my: 50%; position: relative; padding: 2px; border-radius: 40px; background: conic-gradient(from var(--dm-ang), rgba(23, 99, 255, 0.08) 0%, #1763ff 18%, #5da5ff 30%, rgba(23, 99, 255, 0.08) 48%, rgba(23, 99, 255, 0.08) 100%); animation: dmOvSpin 7s linear infinite; box-shadow: 0 34px 80px rgba(18, 56, 132, 0.18); }
.dm-ov-inner { position: relative; overflow: hidden; border-radius: 38px; padding: 60px 56px 36px; background: linear-gradient(135deg, #ffffff 0%, #f3f7ff 100%); }
.dm-ov-spot { position: absolute; inset: 0; pointer-events: none; background: radial-gradient(420px circle at var(--mx) var(--my), rgba(23, 99, 255, 0.10), transparent 60%); }
.dm-ov-grid { position: relative; display: grid; grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr); gap: 56px; align-items: center; margin-bottom: 44px; }
.dm-ov-kicker { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 20px; padding: 8px 16px; border-radius: 999px; background: rgba(23, 99, 255, 0.08); color: var(--dm-primary); font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; }
.dm-ov-kicker i { width: 8px; height: 8px; border-radius: 50%; background: var(--dm-primary); animation: dmOvPulse 1.8s ease-out infinite; }
.dm-ov-title { margin: 0; color: var(--dm-primary-dark); font-size: clamp(2.2rem, 4.2vw, 3.6rem); line-height: 1.08; font-weight: 700; letter-spacing: -0.04em; text-align: left; }
.dm-ov-title span { display: block; }
.dm-ov-line2 { background: linear-gradient(90deg, #1763ff 0%, #5da5ff 45%, #1763ff 100%); background-size: 200% 100%; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: dmOvShine 4.5s linear infinite; }
.dm-ov-bar { width: 64px; height: 4px; margin-top: 26px; border-radius: 4px; background: linear-gradient(90deg, #1763ff, #5da5ff); }
.dm-ov-floats { position: relative; height: 70px; margin-top: 26px; }
.dm-ov-float { position: absolute; width: 54px; height: 54px; border-radius: 18px; display: flex; align-items: center; justify-content: center; background: #ffffff; color: var(--dm-primary); font-size: 1.2rem; border: 1px solid var(--dm-border); box-shadow: 0 14px 30px rgba(23, 99, 255, 0.18); animation: dmOvBob 4s ease-in-out infinite; }
.dm-ov-float--1 { left: 0; top: 6px; }
.dm-ov-float--2 { left: 76px; top: 0; animation-delay: -1.3s; background: linear-gradient(135deg, #1763ff, #0d58f2); color: #ffffff; border-color: transparent; }
.dm-ov-float--3 { left: 152px; top: 10px; animation-delay: -2.6s; }
.dm-ov-body { position: relative; }
.dm-ov-p { margin: 0 0 18px; color: var(--dm-muted); font-size: 1.05rem; line-height: 1.9; text-align: left; }
.dm-ov-p--lead { padding-left: 22px; border-left: 4px solid var(--dm-primary); color: #3f4f6b; }
.dm-ov-p a { color: var(--dm-primary); font-weight: 600; text-decoration: none; border-bottom: 1px solid rgba(23, 99, 255, 0.35); }

.dm-ov-marquee { position: relative; margin: 0 -56px; padding: 6px 0; overflow: hidden; -webkit-mask-image: linear-gradient(90deg, transparent, #000 90px, #000 calc(100% - 90px), transparent); mask-image: linear-gradient(90deg, transparent, #000 90px, #000 calc(100% - 90px), transparent); }
.dm-ov-track { display: flex; width: max-content; animation: dmOvScroll 32s linear infinite; }
.dm-ov-marquee--rev .dm-ov-track { animation-direction: reverse; animation-duration: 38s; }
.dm-ov-marquee:hover .dm-ov-track { animation-play-state: paused; }
.dm-ov-track ul { list-style: none; margin: 0; padding: 0 12px 0 0; display: flex; gap: 12px; }
.dm-ov-track li { display: inline-flex; align-items: center; gap: 10px; white-space: nowrap; padding: 13px 22px; border-radius: 999px; background: #ffffff; border: 1px solid var(--dm-border); color: var(--dm-primary-dark); font-size: 0.95rem; font-weight: 600; box-shadow: 0 10px 24px rgba(18, 56, 132, 0.08); transition: all 0.25s ease; }
.dm-ov-track li i { color: var(--dm-primary); }
.dm-ov-track li:hover { background: var(--dm-primary); color: #ffffff; transform: translateY(-3px); }
.dm-ov-track li:hover i { color: #ffffff; }

/* entrance animation (only when JS is running, so content is never hidden without it) */
.dm-ov-js .dm-ov-card { opacity: 0; transform: translateY(46px) scale(0.98); transition: opacity 0.9s ease, transform 0.9s cubic-bezier(0.2, 0.8, 0.2, 1); }
.dm-ov-js .dm-ov-kicker, .dm-ov-js .dm-ov-line1, .dm-ov-js .dm-ov-line2, .dm-ov-js .dm-ov-p, .dm-ov-js .dm-ov-floats, .dm-ov-js .dm-ov-marquee { opacity: 0; transform: translateY(26px); transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1); }
.dm-ov-js .dm-ov-bar { transform: scaleX(0); transform-origin: left; transition: transform 0.9s ease 0.7s; }
.dm-ov-js.is-in .dm-ov-card { opacity: 1; transform: none; }
.dm-ov-js.is-in .dm-ov-kicker, .dm-ov-js.is-in .dm-ov-line1, .dm-ov-js.is-in .dm-ov-line2, .dm-ov-js.is-in .dm-ov-p, .dm-ov-js.is-in .dm-ov-floats, .dm-ov-js.is-in .dm-ov-marquee { opacity: 1; transform: none; }
.dm-ov-js.is-in .dm-ov-bar { transform: scaleX(1); }
.dm-ov-js.is-in .dm-ov-kicker { transition-delay: 0.25s; }
.dm-ov-js.is-in .dm-ov-line1 { transition-delay: 0.4s; }
.dm-ov-js.is-in .dm-ov-line2 { transition-delay: 0.55s; }
.dm-ov-js.is-in .dm-ov-floats { transition-delay: 0.8s; }
.dm-ov-js.is-in .dm-ov-p--lead { transition-delay: 0.5s; }
.dm-ov-js.is-in .dm-ov-p:not(.dm-ov-p--lead) { transition-delay: 0.7s; }
.dm-ov-js.is-in .dm-ov-marquee { transition-delay: 0.9s; }
.dm-ov-js.is-in .dm-ov-marquee--rev { transition-delay: 1.05s; }

.dm-overview .dm-ov-title .dm-ov-line1 { color: var(--dm-primary-dark); -webkit-text-fill-color: var(--dm-primary-dark); }
.dm-ov-p:not(.dm-ov-p--lead) { padding-left: 26px; }
.dm-ov-marquee + .dm-ov-marquee { margin-top: 4px; }
@media (max-width: 575px) { .dm-ov-p:not(.dm-ov-p--lead) { padding-left: 20px; } }
@keyframes dmOvSpin { to { --dm-ang: 360deg; } }
@keyframes dmOvScroll { to { transform: translateX(-50%); } }
@keyframes dmOvFloat { 0%, 100% { transform: translate(0, 0); } 50% { transform: translate(30px, -26px); } }
@keyframes dmOvBob { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
@keyframes dmOvShine { to { background-position: -200% 0; } }
@keyframes dmOvPulse { 0% { box-shadow: 0 0 0 0 rgba(23, 99, 255, 0.5); } 100% { box-shadow: 0 0 0 10px rgba(23, 99, 255, 0); } }
@media (prefers-reduced-motion: reduce) {
    .dm-ov-card, .dm-ov-blob, .dm-ov-track, .dm-ov-float, .dm-ov-line2, .dm-ov-kicker i { animation: none !important; }
    .dm-ov-js .dm-ov-card, .dm-ov-js .dm-ov-kicker, .dm-ov-js .dm-ov-line1, .dm-ov-js .dm-ov-line2, .dm-ov-js .dm-ov-p, .dm-ov-js .dm-ov-floats, .dm-ov-js .dm-ov-marquee { opacity: 1; transform: none; transition: none; }
    .dm-ov-js .dm-ov-bar { transform: none; transition: none; }
}
@media (max-width: 991px) {
    .dm-ov { padding: 56px 0 40px; }
    .dm-ov-inner { padding: 40px 28px 28px; }
    .dm-ov-grid { grid-template-columns: 1fr; gap: 30px; margin-bottom: 32px; }
    .dm-ov-marquee { margin: 0 -28px; }
}
@media (max-width: 575px) {
    .dm-ov-inner { padding: 32px 20px 24px; border-radius: 30px; }
    .dm-ov-card { border-radius: 32px; }
    .dm-ov-marquee { margin: 0 -20px; }
    .dm-ov-p--lead { padding-left: 16px; }
}
</style>




<main class="dm-page">
    <section class="dm-hero">
        <span class="dm-orb"></span>
        <span class="dm-grid"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="dm-copy">
                        <span class="dm-kicker">Digital Growth Solutions</span>
                        <h1 class="dm-title">Digital Marketing <span>Agency in Mumbai</span></h1>
                        <p class="dm-lead">Grow your business with a result-driven digital marketing agency in Mumbai that combines strategy, creativity, technology, and performance marketing. At Technofra, we help businesses improve their online visibility, reach the right audience, generate qualified leads, and increase conversions.</p>
                        <div class="dm-actions">
                            <a href="enquirynow.php" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded"><span>Enquiry Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dm-visual"><div class="dm-visual-core">
                            <img src="assets/images/new/digitalmarketing-banner.png" alt="Digital marketing agency in Mumbai - SEO, social media, paid ads, lead generation and analytics by Technofra" class="dm-hero-image" fetchpriority="high">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <section class="dm-focus-strip" aria-label="Digital marketing focus areas">
            <div class="dm-focus-bar">
                <div class="dm-focus-track">
                    <div class="dm-focus-set" aria-hidden="false">
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-bullseye"></i></span>
                            <span class="dm-focus-label">Strategy</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <span class="dm-focus-label">SEO</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-comments"></i></span>
                            <span class="dm-focus-label">Social Media</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-bullhorn"></i></span>
                            <span class="dm-focus-label">Paid Ads</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-pen-ruler"></i></span>
                            <span class="dm-focus-label">Content</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-filter-circle-dollar"></i></span>
                            <span class="dm-focus-label">Lead Generation</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="dm-focus-label">Analytics</span>
                        </div>
                    </div>
                    <div class="dm-focus-set" aria-hidden="true">
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-bullseye"></i></span>
                            <span class="dm-focus-label">Strategy</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <span class="dm-focus-label">SEO</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-comments"></i></span>
                            <span class="dm-focus-label">Social Media</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-bullhorn"></i></span>
                            <span class="dm-focus-label">Paid Ads</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-pen-ruler"></i></span>
                            <span class="dm-focus-label">Content</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-filter-circle-dollar"></i></span>
                            <span class="dm-focus-label">Lead Generation</span>
                        </div>
                        <div class="dm-focus-item">
                            <span class="dm-focus-icon"><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="dm-focus-label">Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="dm-overview dm-ov" id="dm-overview">
        <span class="dm-ov-blob dm-ov-blob--a"></span><span class="dm-ov-blob dm-ov-blob--b"></span>
        <div class="container">
            <div class="dm-ov-card" data-dm-ov>
                <div class="dm-ov-inner">
                    <div class="dm-ov-spot"></div>
                    <div class="dm-ov-grid">
                        <div class="dm-ov-head">
                            <span class="dm-ov-kicker"><i></i>About Our Agency</span>
                            <h2 class="dm-ov-title"><span class="dm-ov-line1">Digital Marketing</span> <span class="dm-ov-line2">Company in Mumbai</span></h2>
                            <div class="dm-ov-bar"></div>
                            <div class="dm-ov-floats" aria-hidden="true">
                                <span class="dm-ov-float dm-ov-float--1"><i class="fa-solid fa-chart-line"></i></span>
                                <span class="dm-ov-float dm-ov-float--2"><i class="fa-solid fa-bullhorn"></i></span>
                                <span class="dm-ov-float dm-ov-float--3"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </div>
                        <div class="dm-ov-body">
                            <p class="dm-ov-p dm-ov-p--lead">As an experienced <a href="index.php" title="Digital marketing company in Mumbai">marketing partner</a> for businesses across Mumbai, we provide comprehensive online marketing solutions including SEO, social media marketing, Google Ads, PPC, content marketing, email marketing, lead generation, analytics, and online reputation management.</p>
                            <p class="dm-ov-p">Whether you are a startup, small business, growing brand, or established enterprise, our team creates digital marketing campaigns aligned with your business objectives and target audience.</p>
                        </div>
                    </div>
                    <div class="dm-ov-marquee" aria-label="Our digital marketing services">
                        <div class="dm-ov-track">
                            <ul><li><i class="fa-solid fa-magnifying-glass"></i>SEO</li><li><i class="fa-solid fa-comments"></i>Social Media Marketing</li><li><i class="fa-solid fa-bullhorn"></i>Google Ads</li><li><i class="fa-solid fa-rectangle-ad"></i>PPC</li><li><i class="fa-solid fa-pen-ruler"></i>Content Marketing</li></ul>
                            <ul aria-hidden="true"><li><i class="fa-solid fa-magnifying-glass"></i>SEO</li><li><i class="fa-solid fa-comments"></i>Social Media Marketing</li><li><i class="fa-solid fa-bullhorn"></i>Google Ads</li><li><i class="fa-solid fa-rectangle-ad"></i>PPC</li><li><i class="fa-solid fa-pen-ruler"></i>Content Marketing</li></ul>
                        </div>
                    </div>
                    <div class="dm-ov-marquee dm-ov-marquee--rev" aria-label="Our digital marketing services">
                        <div class="dm-ov-track">
                            <ul><li><i class="fa-solid fa-envelope"></i>Email Marketing</li><li><i class="fa-solid fa-filter-circle-dollar"></i>Lead Generation</li><li><i class="fa-solid fa-chart-simple"></i>Analytics &amp; Reporting</li><li><i class="fa-solid fa-star"></i>Online Reputation Management</li></ul>
                            <ul aria-hidden="true"><li><i class="fa-solid fa-envelope"></i>Email Marketing</li><li><i class="fa-solid fa-filter-circle-dollar"></i>Lead Generation</li><li><i class="fa-solid fa-chart-simple"></i>Analytics &amp; Reporting</li><li><i class="fa-solid fa-star"></i>Online Reputation Management</li></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function () {
            var card = document.querySelector('[data-dm-ov]');
            if (!card) return;
            var sec = card.closest('.dm-ov');
            sec.classList.add('dm-ov-js');
            if ('IntersectionObserver' in window) {
                var io = new IntersectionObserver(function (en) {
                    en.forEach(function (e) { if (e.isIntersecting) { sec.classList.add('is-in'); io.disconnect(); } });
                }, { threshold: 0.25 });
                io.observe(card);
            } else { sec.classList.add('is-in'); }
            card.addEventListener('mousemove', function (e) {
                var r = card.getBoundingClientRect();
                card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
                card.style.setProperty('--my', (e.clientY - r.top) + 'px');
            });
        }());
    </script>

    <section class="dm-benefits-section">
        <div class="container">
            <div class="dm-benefits-wrap">
                <img loading="lazy" decoding="async" src="./assets/images/new/dmabout.png" alt="Technofra digital marketing team collage showing social media, analytics, content planning and paid ads work for Mumbai businesses">
                <div class="dm-benefits-copy">
                    <span class="dm-benefits-kicker">Why Choose Us</span>
                    <h2 class="dm-benefits-title dm-benefits-title--long" aria-label="Why Choose Technofra as Your Digital Marketing Agency in Mumbai?">Why Choose Technofra <span>For Your Business Growth</span>?</h2>
                    <p class="dm-benefits-intro">Choosing the right marketing partner can make a significant difference to your online growth. Technofra focuses on building measurable digital strategies instead of simply running campaigns, combining search engine optimization, paid advertising, social media, content, and conversion-focused marketing.</p>
                </div>
            </div>
            <div class="dm-benefit-slider" data-dm-benefit-slider>
                <div class="dm-benefit-track" data-dm-benefit-track>
                    <article class="dm-benefit-card">
                        <span class="dm-benefit-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <h3>SEO-Focused Strategies</h3>
                        <p>We optimize your website and content to improve search visibility, attract relevant organic traffic, and create sustainable long-term growth.</p>
                    </article>
                    <article class="dm-benefit-card">
                        <span class="dm-benefit-icon"><i class="fa-solid fa-bullhorn"></i></span>
                        <h3>Performance Marketing</h3>
                        <p>Our paid marketing campaigns are designed to reach the right audience, generate quality leads, and improve your return on advertising investment.</p>
                    </article>
                    <article class="dm-benefit-card">
                        <span class="dm-benefit-icon"><i class="fa-solid fa-comments"></i></span>
                        <h3>Social Media Marketing</h3>
                        <p>We develop engaging social media strategies that help businesses increase brand awareness, connect with their audience, and build a consistent online presence.</p>
                    </article>
                    <article class="dm-benefit-card">
                        <span class="dm-benefit-icon"><i class="fa-solid fa-filter-circle-dollar"></i></span>
                        <h3>Quality Lead Generation</h3>
                        <p>Our campaigns focus on attracting potential customers with genuine purchase intent rather than simply increasing website traffic.</p>
                    </article>
                    <article class="dm-benefit-card">
                        <span class="dm-benefit-icon"><i class="fa-solid fa-chart-simple"></i></span>
                        <h3>Data-Driven Decisions</h3>
                        <p>We monitor campaign performance, user behavior, conversions, and other important metrics to continuously improve marketing performance.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function () {
            var wrap = document.querySelector('[data-dm-benefit-slider]');
            if (!wrap) return;
            var track = wrap.querySelector('[data-dm-benefit-track]');
            var originals = Array.prototype.slice.call(track.children);
            var gap = 22, setW = 0, busy = false, hover = false, dragging = false, anim = null;

            // build infinite loop: [copy][originals][copy]
            originals.forEach(function (c) { var k = c.cloneNode(true); k.setAttribute('aria-hidden', 'true'); track.appendChild(k); });
            originals.slice().reverse().forEach(function (c) { var k = c.cloneNode(true); k.setAttribute('aria-hidden', 'true'); track.insertBefore(k, track.firstChild); });

            function measure() {
                setW = originals.length * (originals[0].offsetWidth + gap);
                track.scrollLeft = setW;
            }
            function wrapIt() {
                if (track.scrollLeft >= setW * 2) track.scrollLeft -= setW;
                else if (track.scrollLeft < 1) track.scrollLeft += setW;
            }
            function move(dx) { track.scrollLeft += dx; wrapIt(); }
            function slide(dir) {
                if (anim) cancelAnimationFrame(anim);
                var dist = (originals[0].offsetWidth + gap) * dir, t0 = null, done = 0, dur = 520;
                function f(t) {
                    if (t0 === null) t0 = t;
                    var p = Math.min((t - t0) / dur, 1), e = 1 - Math.pow(1 - p, 3), target = dist * e;
                    move(target - done); done = target;
                    if (p < 1) anim = requestAnimationFrame(f); else anim = null;
                }
                anim = requestAnimationFrame(f);
            }

            // mouse drag
            var down = false, lastX = 0;
            track.addEventListener('pointerdown', function (e) {
                if (e.pointerType !== 'mouse') return;
                down = dragging = true; lastX = e.clientX;
                if (anim) { cancelAnimationFrame(anim); anim = null; }
                track.classList.add('is-dragging');
            });
            window.addEventListener('pointermove', function (e) {
                if (!down) return;
                move(lastX - e.clientX); lastX = e.clientX;
            });
            window.addEventListener('pointerup', function () {
                if (!down) return; down = dragging = false; track.classList.remove('is-dragging');
            });
            track.addEventListener('dragstart', function (e) { e.preventDefault(); });
            track.addEventListener('scroll', wrapIt, { passive: true });
            track.addEventListener('wheel', function (e) {
                if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) { e.preventDefault(); move(e.deltaX); }
            }, { passive: false });

            // gentle auto-drift, paused on hover / touch / focus
            var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            wrap.addEventListener('mouseenter', function () { hover = true; });
            wrap.addEventListener('mouseleave', function () { hover = false; });
            wrap.addEventListener('touchstart', function () { hover = true; }, { passive: true });
            wrap.addEventListener('touchend', function () { setTimeout(function () { hover = false; }, 2500); }, { passive: true });
            wrap.addEventListener('focusin', function () { hover = true; });
            wrap.addEventListener('focusout', function () { hover = false; });
            var acc = 0;
            function drift() {
                if (!reduce && !hover && !dragging && !anim && !document.hidden) {
                    acc += 0.6;
                    if (acc >= 1) { var step = Math.floor(acc); acc -= step; move(step); }
                }
                requestAnimationFrame(drift);
            }
            measure(); window.addEventListener('resize', measure); window.addEventListener('load', measure);
            requestAnimationFrame(drift);
        }());
    </script>

    <section class="dm-best-services" id="dm-services">
        <div class="container">
            <div class="dm-best-services-head">
                <h2 class="dm-best-services-title">Our <span>Digital Marketing Services</span> in Mumbai</h2>
                <p class="dm-best-services-text">As a full-service agency based in Mumbai, Technofra offers a range of services designed to support businesses at every stage of their online growth.</p>
            </div>
            <div class="dm-best-services-grid">
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    <h3><a href="seo.php">Search Engine Optimization</a></h3>
                    <p>Improve your website's organic visibility and rankings for relevant search terms through keyword research, <a href="seo.php">on-page SEO</a>, technical optimization, content optimization, and internal linking.</p>
                    <span class="dm-best-service-float dm-best-navy"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-comments"></i></span>
                    <h3><a href="social-media-marketing.php">Social Media Marketing</a></h3>
                    <p>Build a stronger connection with your audience through platform-specific content and campaigns designed to increase engagement, brand awareness, and customer interaction.</p>
                    <span class="dm-best-service-float dm-best-blue"><i class="fa-regular fa-message"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-green-soft"><i class="fa-solid fa-bullhorn"></i></span>
                    <h3><a href="ppc.php">Google Ads and PPC</a></h3>
                    <p>Reach potential customers when they are actively searching for your products or services, with campaigns built on relevant keywords, audience targeting, and conversion tracking.</p>
                    <span class="dm-best-service-float dm-best-blue"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-orange-soft"><i class="fa-solid fa-file-pen"></i></span>
                    <h3><a href="content-marketing.php">Content Marketing</a></h3>
                    <p>Useful content helps your brand attract, educate, and convert potential customers while supporting SEO, brand authority, customer engagement, and lead generation.</p>
                    <span class="dm-best-service-float dm-best-orange"><i class="fa-regular fa-pen-to-square"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-green-soft"><i class="fa-solid fa-filter-circle-dollar"></i></span>
                    <h3>Lead Generation</h3>
                    <p>Generate more relevant business enquiries with targeted campaigns that combine paid advertising, landing pages, SEO, content, and conversion optimization.</p>
                    <span class="dm-best-service-float dm-best-teal"><i class="fa-solid fa-bullseye"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-violet-soft"><i class="fa-regular fa-envelope"></i></span>
                    <h3>Email Marketing</h3>
                    <p>Stay connected with prospects and customers through personalized email campaigns that support lead nurturing, customer retention, promotions, and conversions.</p>
                    <span class="dm-best-service-float dm-best-violet"><i class="fa-regular fa-envelope"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-chart-column"></i></span>
                    <h3>Analytics and Reporting</h3>
                    <p>Understand what is working and where improvements are needed with key performance indicators and actionable insights for better marketing decisions.</p>
                    <span class="dm-best-service-float dm-best-sky"><i class="fa-solid fa-chart-simple"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-gold-soft"><i class="fa-solid fa-shield-heart"></i></span>
                    <h3>Online Reputation Management</h3>
                    <p>Your online reputation can influence customer trust and purchasing decisions. We help you build a positive digital presence and keep brand communication consistent.</p>
                    <span class="dm-best-service-float dm-best-mint"><i class="fa-solid fa-star"></i></span>
                </div>
            </div>
        </div>
    </section>


    <section class="dm-strategy dm-sx">
        <div class="container">
            <div class="dm-sx-head">
                <span class="dm-benefits-kicker">Tailored Approach</span>
                <h2>Digital Marketing Strategy <span>Designed for Your Business</span></h2>
            </div>
            <div class="dm-sx-grid">
                <article class="dm-sx-card">
                    <span class="dm-sx-icon"><i class="fa-solid fa-puzzle-piece"></i></span>
                    <h3>No One-Size-Fits-All</h3>
                    <p>Every business has different customers, competitors, goals, and challenges. That is why we don't believe in a one-size-fits-all marketing approach.</p>
                </article>
                <article class="dm-sx-card">
                    <span class="dm-sx-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    <h3>Research Comes First</h3>
                    <p>Our team studies your business, target audience, competitors, existing online presence, and marketing objectives before developing a strategy.</p>
                </article>
                <article class="dm-sx-card">
                    <span class="dm-sx-icon"><i class="fa-solid fa-rocket"></i></span>
                    <h3>The Right Channel Mix</h3>
                    <p>We then identify the most suitable combination of SEO, paid advertising, social media, content marketing, and lead-generation activities to support your growth.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dm-why-partner">
            <div class="dm-why-partner-shell">
                <div class="dm-why-partner-grid">
                    <div class="dm-why-partner-visual">
                       <img loading="lazy" decoding="async" src="./assets/images/new/dm4.png" alt="Smiling digital marketing expert giving a thumbs up for result-driven campaigns in Mumbai">
                    </div>
                    <div class="dm-why-partner-content">
                        <span class="dm-why-partner-kicker">Trusted digital marketing partner</span>
                        <h2 class="dm-why-partner-title">What Makes <span>Technofra Different</span>?</h2>
                        <p class="dm-why-partner-subtitle">Marketing connected to real business objectives</p>
                        <p class="dm-why-partner-copy">There are many agencies to choose from, but the right partner should be able to connect marketing activity with actual business objectives.</p>
                        <p class="dm-why-partner-lead">At Technofra, we focus on:</p>
                        <ul class="dm-why-partner-checks">
                            <li><i class="fa-solid fa-check"></i><span>Customized digital marketing strategies</span></li>
                            <li><i class="fa-solid fa-check"></i><span>SEO and organic growth</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Performance-focused advertising</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Qualified lead generation</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Content and social media marketing</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Conversion-focused campaigns</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Transparent performance reporting</span></li>
                            <li><i class="fa-solid fa-check"></i><span>Continuous campaign optimization</span></li>
                        </ul>
                        <p class="dm-why-partner-copy" style="margin-top:24px;">Our objective is not just to increase clicks or impressions. We aim to help businesses attract the right audience and turn online visibility into meaningful business opportunities.</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="dm-growth-process">
        <div class="container">
            <div class="dm-growth-process-head">
                <h2>Our Digital Marketing <span>Process</span></h2>
            </div>

            <div class="dm-growth-process-grid dm-growth-process-grid--five">
                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                        <span class="dm-growth-badge">01</span>
                    </div>
                    <h3>Research &amp; Audit</h3>
                    <p>We begin by understanding your business, target audience, competitors, website, current rankings, and existing digital marketing performance.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-bullseye"></i></span>
                        <span class="dm-growth-badge">02</span>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>Based on our research, we create a customized digital marketing strategy covering the channels and activities most relevant to your business.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-bullhorn"></i></span>
                        <span class="dm-growth-badge">03</span>
                    </div>
                    <h3>Campaign Execution</h3>
                    <p>Our team implements the strategy across SEO, paid advertising, social media, content marketing, and other relevant channels.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-gauge-high"></i></span>
                        <span class="dm-growth-badge">04</span>
                    </div>
                    <h3>Monitoring &amp; Optimization</h3>
                    <p>We continuously monitor campaign performance and make data-driven improvements to increase visibility, traffic, leads, and conversions.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-chart-column"></i></span>
                        <span class="dm-growth-badge">05</span>
                    </div>
                    <h3>Reporting &amp; Growth</h3>
                    <p>Regular reporting helps you understand campaign performance and the opportunities available for continued digital growth.</p>
                </article>

            </div>
        </div>
    </section>

    <section class="dm-need dm-nd">
        <div class="container">
            <div class="dm-nd-card">
                <div class="dm-nd-panel">
                    <span class="dm-nd-kicker">Business Growth</span>
                    <h2>Why Businesses Need a <span>Digital Marketing Company in Mumbai</span></h2>
                    <div class="dm-nd-line"></div>
                </div>
                <div class="dm-nd-body">
                    <div class="dm-nd-rows">
                        <div class="dm-nd-row"><span class="dm-nd-ico"><i class="fa-solid fa-city"></i></span><p>Mumbai is a highly competitive business market, and having an online presence is no longer enough. Businesses need a well-planned digital strategy to stand out, reach potential customers, and compete effectively.</p></div>
                        <div class="dm-nd-row"><span class="dm-nd-ico"><i class="fa-solid fa-bullseye"></i></span><p>A professional marketing partner can help your business identify the right audience, improve search visibility, create engaging content, manage advertising campaigns, and generate measurable business opportunities.</p></div>
                        <div class="dm-nd-row"><span class="dm-nd-ico"><i class="fa-solid fa-flag-checkered"></i></span><p>Whether your goal is to increase website traffic, generate leads, improve brand awareness, or increase online sales, the right digital marketing strategy can help you move toward those objectives.</p></div>
                    </div>
                    <ul class="dm-nd-goals">
                        <li><span class="dm-nd-gico"><i class="fa-solid fa-arrow-trend-up"></i></span>Increase website traffic</li>
                        <li><span class="dm-nd-gico"><i class="fa-solid fa-filter-circle-dollar"></i></span>Generate leads</li>
                        <li><span class="dm-nd-gico"><i class="fa-solid fa-bullhorn"></i></span>Improve brand awareness</li>
                        <li><span class="dm-nd-gico"><i class="fa-solid fa-cart-shopping"></i></span>Increase online sales</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="dm-client-voices">
        <div class="container">
            <div class="dm-client-voices-head">
                <h2>What Our <span>Clients Say</span></h2>
                <p>We don't just run campaigns &ndash; we build growth stories.<br>Here's what our clients have to say about working with our <span>Digital Marketing</span> team.</p>
            </div>

            <div class="dm-client-outcomes">
                <article class="dm-client-outcome">
                    <div class="dm-client-outcome-icon"><i class="fa-solid fa-chart-column"></i></div>
                    <h3>Increased<br>Website Traffic</h3>
                </article>
                <article class="dm-client-outcome">
                    <div class="dm-client-outcome-icon"><i class="fa-solid fa-users"></i></div>
                    <h3>Quality Leads<br>Generation</h3>
                </article>
                <article class="dm-client-outcome dm-client-outcome--featured">
                    <div class="dm-client-outcome-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>Higher ROI &amp;<br>Conversions</h3>
                </article>
                <article class="dm-client-outcome">
                    <div class="dm-client-outcome-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    <h3>Stronger Brand<br>Visibility</h3>
                </article>
                <article class="dm-client-outcome">
                    <div class="dm-client-outcome-icon"><i class="fa-solid fa-desktop"></i></div>
                    <h3>Data-Driven<br>Growth</h3>
                </article>
            </div>

            <div class="dm-client-testimonial-wrap" data-dm-client-slider>
                <button class="dm-client-arrow dm-client-arrow--prev" type="button" aria-label="Previous testimonial" data-dm-client-prev>
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dm-client-arrow dm-client-arrow--next" type="button" aria-label="Next testimonial" data-dm-client-next>
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

                <div class="dm-client-slider-viewport">
                    <div class="dm-client-slider-track" data-dm-client-track>
                        <article class="dm-client-slide">
                            <div class="dm-client-avatar">
                                <img loading="lazy" decoding="async" src="./assets/images/testimonials/3.png" alt="Niraj Narsaria, client of Technofra digital marketing agency in Mumbai">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>Technofra's Digital Marketing team understood our business goals perfectly and created a strategy that delivered real results. Our website traffic increased by <strong>150%</strong> and lead quality improved significantly within just 3 months. Their transparent reporting and proactive approach make them a trusted growth partner.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Niraj Narsaria</h3>
                                <div class="dm-client-brand">
                                    <img loading="lazy" decoding="async" src="assets/images/new/c9.png" alt="Mark Identitiez logo - Technofra digital marketing client">
                                </div>
                            </div>
                        </article>

                        <article class="dm-client-slide">
                            <div class="dm-client-avatar">
                                <img loading="lazy" decoding="async" src="./assets/images/testimonials/2.png" alt="Kahan Mehta, client of Technofra digital marketing agency in Mumbai">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>The team brought clarity to our ad spend and content strategy. Within a short span, our campaign performance improved, conversion costs dropped, and we started seeing more qualified inquiries from the right audience segments.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Kahan Mehta</h3>
                                <div class="dm-client-brand">
                                    <img loading="lazy" decoding="async" src="assets/images/new/c12.png" alt="Digikcon logo - Technofra digital marketing client">
                                </div>
                            </div>
                        </article>

                        <article class="dm-client-slide">
                            <div class="dm-client-avatar">
                                <img loading="lazy" decoding="async" src="./assets/images/testimonials/1.png" alt="Uday Parkhi, client of Technofra digital marketing agency in Mumbai">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>What stood out most was their proactive communication and data-backed decision making. From SEO improvements to paid campaign scaling, every move felt intentional and tied directly to measurable business growth.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Uday Parkhi</h3>
                                <div class="dm-client-brand">
                                    <img loading="lazy" decoding="async" src="assets/images/new/c11.png" alt="Blue Orbith logo - Technofra digital marketing client">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function () {
            var slider = document.querySelector('[data-dm-client-slider]');
            if (!slider) return;

            var track = slider.querySelector('[data-dm-client-track]');
            var prev = slider.querySelector('[data-dm-client-prev]');
            var next = slider.querySelector('[data-dm-client-next]');
            var slides = track ? track.children : [];
            var index = 0;
            var timer;

            function render() {
                track.style.transform = 'translateX(-' + (index * 100) + '%)';
            }

            function goTo(newIndex) {
                index = (newIndex + slides.length) % slides.length;
                render();
            }

            function startAuto() {
                stopAuto();
                timer = window.setInterval(function () {
                    goTo(index + 1);
                }, 4500);
            }

            function stopAuto() {
                if (timer) {
                    window.clearInterval(timer);
                }
            }

            prev.addEventListener('click', function () {
                goTo(index - 1);
                startAuto();
            });

            next.addEventListener('click', function () {
                goTo(index + 1);
                startAuto();
            });

            slider.addEventListener('mouseenter', stopAuto);
            slider.addEventListener('mouseleave', startAuto);
            slider.addEventListener('focusin', stopAuto);
            slider.addEventListener('focusout', startAuto);

            render();
            startAuto();
        }());
    </script>

    <section class="dm-cta">
        <div class="container">
            <div class="dm-cta-box dm-ct">
                <span class="dm-ct-ring dm-ct-ring--a"></span><span class="dm-ct-ring dm-ct-ring--b"></span>
                <div class="dm-ct-grid">
                    <div class="dm-ct-main">
                        <span class="dm-ct-kicker">Let's Grow Together</span>
                        <h2>Partner With a <span>Result-Driven Marketing Agency</span> in Mumbai</h2>
                        <p>Looking for a reliable partner to grow your online presence?</p>
                        <p>Technofra provides integrated digital marketing solutions designed around your business goals. From SEO and social media to PPC, content marketing, and lead generation, we bring multiple digital channels together to create a consistent and measurable growth strategy.</p>
                        <p>Let's build a digital marketing strategy that helps your business reach more customers, generate better leads, and grow online.</p>
                        <p><strong>Get in touch with Technofra today to discuss your digital marketing requirements.</strong></p>
                        <a href="enquirynow.php" class="dm-cta-btn"><span>Enquiry Now</span><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <ul class="dm-ct-points">
                        <li><span><i class="fa-solid fa-magnifying-glass"></i></span>SEO &amp; Organic Growth</li>
                        <li><span><i class="fa-solid fa-comments"></i></span>Social Media Marketing</li>
                        <li><span><i class="fa-solid fa-bullhorn"></i></span>Google Ads &amp; PPC</li>
                        <li><span><i class="fa-solid fa-pen-ruler"></i></span>Content Marketing</li>
                        <li><span><i class="fa-solid fa-filter-circle-dollar"></i></span>Lead Generation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="dm-faq" id="dm-faq">
        <div class="container">
            <div class="dm-faq-grid">
                <div class="dm-faq-side">
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <div class="dm-faq-line"></div>
                    <p class="dm-faq-note">Quick answers to the questions businesses ask most before choosing a marketing partner.</p>
                    <a href="enquirynow.php" class="dm-faq-cta">Still have questions? Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
                    <div class="dm-faq-help"><span class="dm-faq-help-icon"><i class="fa-solid fa-headset"></i></span><div><strong>Talk to our experts</strong><a href="tel:+918080803374">+91 8080 80 3374</a><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
                </div>
                <div class="dm-faq-list">
<?php foreach ($dmFaqs as $dmIndex => $dmFaq): ?>
                    <details class="dm-faq-item"<?php echo $dmIndex === 0 ? ' open' : ''; ?>>
                        <summary>
                            <span class="dm-faq-num"><?php echo str_pad((string) ($dmIndex + 1), 2, '0', STR_PAD_LEFT); ?></span>
                            <h3 class="dm-faq-q"><?php echo htmlspecialchars($dmFaq[0], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <span class="dm-faq-toggle" aria-hidden="true"></span>
                        </summary>
                        <div class="dm-faq-answer"><p><?php echo htmlspecialchars($dmFaq[1], ENT_QUOTES, 'UTF-8'); ?></p></div>
                    </details>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php include __DIR__ . '/footer.php'; ?>
