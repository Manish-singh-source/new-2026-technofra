<?php
$pageTitle = 'Digital Marketing || Technofra Website';
$bodyClass = 'hero-video-page';
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
            padding: 18px 0;
            background: linear-gradient(90deg, #1763ff 0%, #0d58f2 100%);
            box-shadow: 0 26px 48px rgba(23, 99, 255, 0.24);
            overflow: hidden;
        }

        .dm-focus-bar::before,
        .dm-focus-bar::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 48px;
            z-index: 2;
            pointer-events: none;
        }

        .dm-focus-bar::before {
            left: 0;
            background: linear-gradient(90deg, #1763ff 0%, rgba(23, 99, 255, 0) 100%);
        }

        .dm-focus-bar::after {
            right: 0;
            background: linear-gradient(270deg, #0d58f2 0%, rgba(13, 88, 242, 0) 100%);
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

        .dm-focus-item + .dm-focus-item {
            border-left: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dm-focus-set + .dm-focus-set .dm-focus-item:first-child {
            border-left: 1px solid rgba(255, 255, 255, 0.2);
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

        .dm-focus-bar:hover .dm-focus-track {
            animation-play-state: paused;
        }

        @keyframes dmFocusScroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
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

            .dm-focus-item:last-child {
                border-right: 0;
            }

            .dm-focus-item + .dm-focus-item {
                border-left: 0;
            }

            .dm-focus-set + .dm-focus-set .dm-focus-item:first-child {
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

            .dm-focus-track {
                animation-duration: 18s;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .dm-focus-track {
                animation: none;
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

        .dm-client-role,
        .dm-client-brand {
            margin: 0;
            color: #4f5668;
            font-size: 1rem;
            line-height: 1.6;
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
                        <h1 class="dm-title">Grow Your Brand with <span>Digital Marketing</span></h1>
                        <p class="dm-lead">From SEO and social media to paid ads and content strategy, we help you attract the right audience, build your brand, and generate high-quality leads that drive real growth.</p>
                        <div class="dm-actions">
                            <a href="contact.php" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded"><span>Enquiry Now </span></a>
                            <!-- <a href="#dm-services" class="dm-btn-secondary">
                                <span class="play-icon"><i class="fa-solid fa-play"></i></span>
                                <span>See How It Works</span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dm-visual"><div class="dm-visual-core">
                            <img src="assets/images/new/digitalmarketing-banner.png" alt="Digital marketing banner" class="dm-hero-image">
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
                    <div class="dm-focus-set">
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

    

    <section class="dm-benefits-section">
        <div class="container">
            <div class="dm-benefits-wrap">
                           <img src="./assets/images/new/dmabout.png">
                <div class="dm-benefits-copy">
                    <span class="dm-benefits-kicker">Why Choose Us</span>
                    <h2 class="dm-benefits-title"><span>Benefits</span> of Our Digital Marketing Services</h2>
                    <p class="dm-benefits-intro">We blend strategy, performance marketing, and content execution to help your brand reach the right audience and turn attention into measurable growth.</p>
                    <div class="dm-benefit-list">
                        <div class="dm-benefit-item">
                            <span class="dm-benefit-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <div>
                                <h3>SEO Optimization</h3>
                                <p>Improve search visibility and attract qualified organic traffic that keeps growing over time.</p>
                            </div>
                        </div>
                        <div class="dm-benefit-item">
                            <span class="dm-benefit-icon"><i class="fa-solid fa-comments"></i></span>
                            <div>
                                <h3>Social Media Marketing</h3>
                                <p>Build engagement and grow your audience across platforms with consistent brand communication.</p>
                            </div>
                        </div>
                        <div class="dm-benefit-item">
                            <span class="dm-benefit-icon"><i class="fa-solid fa-bullhorn"></i></span>
                            <div>
                                <h3>Paid Advertising</h3>
                                <p>Run targeted ad campaigns that increase leads, conversions, and campaign efficiency.</p>
                            </div>
                        </div>
                        <!-- <div class="dm-benefit-item">
                            <span class="dm-benefit-icon"><i class="fa-solid fa-chart-simple"></i></span>
                            <div>
                                <h3>Analytics & Reporting</h3>
                                <p>Track performance and optimize your marketing with real-time insights and clear reporting.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="dm-best-services">
        <div class="container">
            <div class="dm-best-services-head">
                <h2 class="dm-best-services-title">Best <span>Digital Marketing</span> Services by Technofra</h2>
                <p class="dm-best-services-text">Explore result-driven digital marketing solutions designed to grow your brand, generate leads, and improve online visibility.</p>
            </div>
            <div class="dm-best-services-grid">
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    <h3>SEO Optimization</h3>
                    <p>Improve search rankings and drive consistent, high-intent organic traffic.</p>
                    <span class="dm-best-service-float dm-best-navy"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-comments"></i></span>
                    <h3>Social Media Marketing</h3>
                    <p>Engage your audience and build a strong brand presence across platforms.</p>
                    <span class="dm-best-service-float dm-best-blue"><i class="fa-regular fa-message"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-green-soft"><i class="fa-solid fa-bullhorn"></i></span>
                    <h3>Google Ads / PPC</h3>
                    <p>Run targeted ad campaigns that deliver measurable results and better ROI.</p>
                    <span class="dm-best-service-float dm-best-blue"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-orange-soft"><i class="fa-solid fa-file-pen"></i></span>
                    <h3>Content Marketing</h3>
                    <p>Create valuable content that attracts, informs, and converts the right audience.</p>
                    <span class="dm-best-service-float dm-best-orange"><i class="fa-regular fa-pen-to-square"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-green-soft"><i class="fa-solid fa-filter-circle-dollar"></i></span>
                    <h3>Lead Generation</h3>
                    <p>Generate high-quality leads and grow your sales pipeline with focused campaigns.</p>
                    <span class="dm-best-service-float dm-best-teal"><i class="fa-solid fa-bullseye"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-violet-soft"><i class="fa-regular fa-envelope"></i></span>
                    <h3>Email Marketing</h3>
                    <p>Nurture leads and boost conversions with automated and personalized email flows.</p>
                    <span class="dm-best-service-float dm-best-violet"><i class="fa-regular fa-envelope"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-blue-soft"><i class="fa-solid fa-chart-column"></i></span>
                    <h3>Analytics & Reporting</h3>
                    <p>Track performance and make data-driven marketing decisions with clarity.</p>
                    <span class="dm-best-service-float dm-best-sky"><i class="fa-solid fa-chart-simple"></i></span>
                </div>
                <div class="dm-best-service-card">
                    <span class="dm-best-service-top dm-best-gold-soft"><i class="fa-solid fa-shield-heart"></i></span>
                    <h3>Online Reputation Management</h3>
                    <p>Build trust, manage reviews, and protect your brand image across channels.</p>
                    <span class="dm-best-service-float dm-best-mint"><i class="fa-solid fa-star"></i></span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="dm-campaign-showcase">
        <div class="container">
            <div class="dm-campaign-grid">
                <article class="dm-campaign-card dm-campaign-card--feature">
                    <div class="dm-campaign-inner">
                        <div class="dm-campaign-content">
                            <h3>SEO Strategy &amp; Keyword Research</h3>
                             <div class="dm-campaign-line"></div>
                            <!-- <div class="dm-campaign-tags">
                                <span><i class="fa-solid fa-magnifying-glass"></i> Keyword Research</span>
                                <span><i class="fa-regular fa-file-lines"></i> Content Strategy</span>
                                <span><i class="fa-solid fa-arrow-trend-up"></i> On-Page SEO</span>
                            </div> -->
                            <p>We uncover the right search opportunities to improve visibility, attract relevant traffic, and build long-term organic growth.</p>
                        </div>
                        <div class="dm-campaign-visual">
                            <div class="dm-campaign-art">
                                <img src="assets/images/new/dm1.png" alt="SEO strategy and keyword research showcase">
                            </div>
                        </div>
                    </div>
                </article>
                <article class="dm-campaign-card dm-campaign-card--feature dm-campaign-reverse">
                    <div class="dm-campaign-inner">
                        <div class="dm-campaign-content">
                            <h3>Social Media Campaigns</h3>
                            <div class="dm-campaign-line"></div>
                            <p>Build engagement and grow your audience with high-impact social content and campaign planning.</p>
                        </div>
                        <div class="dm-campaign-visual">
                            <div class="dm-campaign-art">
                                <img src="assets/images/new/dm2.png" alt="Social media campaigns showcase">
                            </div>
                        </div>
                    </div>
                </article>
                <article class="dm-campaign-card">
                    <div class="dm-campaign-inner">
                        <div class="dm-campaign-content">
                            <h3>Lead Generation &amp; Paid Ads</h3>
                            <div class="dm-campaign-line"></div>
                            <p>Target the right audience and convert clicks into quality leads with performance-driven campaigns.</p>
                        </div>
                        <div class="dm-campaign-visual">
                            <div class="dm-campaign-art">
                                <img src="assets/images/new//dm3.png" alt="Lead generation and paid ads showcase">
                            </div>
                        </div>
                    </div>
                </article>
                <article class="dm-campaign-card dm-campaign-reverse">
                    <div class="dm-campaign-inner">
                        <div class="dm-campaign-content">
                            <h3>Analytics, Reporting &amp; Performance Growth</h3>
                             <div class="dm-campaign-line"></div>
                            <!-- <div class="dm-campaign-tags">
                                <span><i class="fa-solid fa-chart-line"></i> Campaign Tracking</span>
                                <span><i class="fa-solid fa-clock"></i> ROI Reports</span>
                                <span><i class="fa-solid fa-filter"></i> Conversion Insights</span>
                            </div> -->
                            <p>Measure what matters with clear reporting, conversion tracking, and data-backed optimization for continuous growth.</p>
                        </div>
                        <div class="dm-campaign-visual">
                            <div class="dm-campaign-art">
                                <img src="assets/images/new/gm4.png" alt="Analytics reporting and performance growth showcase">
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>


    

    <section class="dm-why-partner">
            <div class="dm-why-partner-shell">
                <div class="dm-why-partner-grid">
                    <div class="dm-why-partner-visual">
                       <img src="./assets/images/new/dm4.png" alt="" srcset="">
                    </div>
                    <div class="dm-why-partner-content">
                        <span class="dm-why-partner-kicker">Trusted digital marketing partner</span>
                        <h2 class="dm-why-partner-title">Why choose our <span>Digital Marketing</span> team</h2>
                        <p class="dm-why-partner-subtitle">ROI Focused Digital Marketing</p>
                        <p class="dm-why-partner-copy">We combine creativity, strategy, and performance-led execution to help businesses grow brand visibility, attract qualified leads, and improve campaign conversion rates.</p>
                        <p class="dm-why-partner-copy">From SEO and paid campaigns to social media and content planning, we build digital marketing systems that support clear, measurable business growth.</p>

                        <div class="dm-why-partner-points">
                            <div class="dm-why-partner-point">
                                <span class="dm-why-partner-icon"><i class="fa-solid fa-lightbulb"></i></span>
                                <div>
                                    <h3>Creative Strategy</h3>
                                    <p>Ideas and campaigns tailored to your brand positioning, audience, and business goals.</p>
                                </div>
                            </div>
                            <div class="dm-why-partner-point">
                                <span class="dm-why-partner-icon"><i class="fa-solid fa-bullseye"></i></span>
                                <div>
                                    <h3>Quality Leads</h3>
                                    <p>Performance-driven marketing designed to bring in stronger leads and better conversion intent.</p>
                                </div>
                            </div>
                            <div class="dm-why-partner-point">
                                <span class="dm-why-partner-icon"><i class="fa-solid fa-chart-column"></i></span>
                                <div>
                                    <h3>Measurable Growth</h3>
                                    <p>SEO, social media, content, and paid media aligned around data-backed business results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    

    <section class="dm-growth-process">
        <div class="container">
            <div class="dm-growth-process-head">
                <h2>Proven <span>Growth Process</span></h2>
            </div>

            <div class="dm-growth-process-grid">
                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                        <span class="dm-growth-badge">01</span>
                    </div>
                    <h3>Research &amp; Audit</h3>
                    <p>We analyze your brand, audience, competitors, and current online performance.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-bullseye"></i></span>
                        <span class="dm-growth-badge">02</span>
                    </div>
                    <h3>Strategy Planning</h3>
                    <p>We create a custom plan for SEO, paid ads, content, and social media growth.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-bullhorn"></i></span>
                        <span class="dm-growth-badge">03</span>
                    </div>
                    <h3>Campaign Execution</h3>
                    <p>We launch, manage, and optimize campaigns across the right digital channels.</p>
                </article>

                <article class="dm-growth-step">
                    <div class="dm-growth-icon-wrap">
                        <span class="dm-growth-icon"><i class="fa-solid fa-chart-column"></i></span>
                        <span class="dm-growth-badge">04</span>
                    </div>
                    <h3>Performance Growth</h3>
                    <p>We track results, improve ROI, and scale what works for long-term success.</p>
                </article>
            </div>
        </div>
    </section>

    

    <section class="dm-client-voices">
        <div class="container">
            <div class="dm-client-voices-head">
                <h2>What Our <span>Clients Say</span></h2>
                <p>We don't just run campaigns ' we build growth stories.<br>Here's what our clients have to say about working with our <span>Digital Marketing</span> team.</p>
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
                                <img src="https://img.magnific.com/free-photo/pleased-handsome-male-customer-show-thumb-up-approval_176420-17945.jpg?semt=ais_hybrid&w=740&q=80" alt="Rahul Mehta testimonial profile">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>Technofra's Digital Marketing team understood our business goals perfectly and created a strategy that delivered real results. Our website traffic increased by <strong>150%</strong> and lead quality improved significantly within just 3 months. Their transparent reporting and proactive approach make them a trusted growth partner.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Rahul Mehta</h3>
                                <p class="dm-client-role">Marketing Head</p>
                            </div>
                        </article>

                        <article class="dm-client-slide">
                            <div class="dm-client-avatar">
                                <img src="https://img.magnific.com/free-photo/pleased-handsome-male-customer-show-thumb-up-approval_176420-17945.jpg?semt=ais_hybrid&w=740&q=80 alt="Sneha Kapoor testimonial profile">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>The team brought clarity to our ad spend and content strategy. Within a short span, our campaign performance improved, conversion costs dropped, and we started seeing more qualified inquiries from the right audience segments.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Sneha Kapoor</h3>
                                <p class="dm-client-role">Growth Manager</p>
                            </div>
                        </article>

                        <article class="dm-client-slide">
                            <div class="dm-client-avatar">
                                <img src="https://img.magnific.com/free-photo/pleased-handsome-male-customer-show-thumb-up-approval_176420-17945.jpg?semt=ais_hybrid&w=740&q=80" alt="Arjun Verma testimonial profile">
                            </div>
                            <div class="dm-client-testimonial">
                                <p>What stood out most was their proactive communication and data-backed decision making. From SEO improvements to paid campaign scaling, every move felt intentional and tied directly to measurable business growth.</p>
                                <div class="dm-client-divider"></div>
                                <h3 class="dm-client-name">Arjun Verma</h3>
                                <p class="dm-client-role">Founder</p>
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
<?php include __DIR__ . '/footer.php'; ?>


















