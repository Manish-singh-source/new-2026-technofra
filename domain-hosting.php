<?php
$pageTitle = 'Domain Hosting || Technofra Website';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    :root {
        --dh-bg: #050b2d;
        --dh-bg-deep: #08164f;
        --dh-primary: #1f8fff;
        --dh-primary-strong: #00c2ff;
        --dh-text: #ffffff;
        --dh-muted: rgba(232, 240, 255, 0.82);
        --dh-card: rgba(9, 23, 73, 0.72);
        --dh-card-border: rgba(70, 162, 255, 0.3);
        --dh-shadow: 0 32px 70px rgba(0, 22, 88, 0.48);
    }

    .dh-page {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at 18% 20%, rgba(0, 194, 255, 0.16), transparent 22%),
            radial-gradient(circle at 82% 14%, rgba(46, 119, 255, 0.28), transparent 24%),
            linear-gradient(135deg, var(--dh-bg) 0%, #071142 42%, var(--dh-bg-deep) 100%);
    }

    .dh-page::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(74, 132, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(74, 132, 255, 0.08) 1px, transparent 1px);
        background-size: 120px 120px;
        opacity: 0.35;
        pointer-events: none;
    }

    .dh-hero {
        position: relative;
        padding: 170px 0 50px;
        z-index: 1;
    }

    .dh-copy {
        position: relative;
        z-index: 2;
    }

    .dh-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 10px 18px;
        border-radius: 999px;
        border: 1px solid rgba(63, 146, 255, 0.45);
        background: rgba(7, 19, 62, 0.72);
        color: #dcecff;
        font-size: 14px;
        font-weight: 600;
        box-shadow: 0 14px 28px rgba(0, 15, 60, 0.28);
    }

    .dh-eyebrow i {
        color: var(--dh-primary-strong);
    }

    .dh-title {
        margin: 26px 0 22px;
        color: var(--dh-text);
        font-size: clamp(2.4rem, 4.8vw, 4.35rem);
        line-height: 1.04;
        font-weight: 800;
        letter-spacing: -0.05em;
        max-width: 640px;
    }

    .dh-title span {
        color: var(--dh-primary);
    }

    .dh-lead {
        max-width: 560px;
        margin-bottom: 34px;
        color: var(--dh-muted);
        font-size: 1.08rem;
        line-height: 1.85;
    }

    .dh-actions {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 28px;
    }

    .dh-btn-primary,
    .dh-btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        min-height: 58px;
        padding: 0 30px;
        border-radius: 14px;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .dh-btn-primary {
        color: #fff;
        background: linear-gradient(135deg, #146dff 0%, #10a8ff 100%);
        box-shadow: 0 18px 36px rgba(15, 127, 255, 0.34);
    }

    .dh-btn-primary:hover {
        color: #fff;
        transform: translateY(-2px);
    }

    .dh-btn-secondary {
        color: #eaf4ff;
        border: 1px solid rgba(89, 160, 255, 0.4);
        background: rgba(10, 24, 72, 0.65);
    }

    .dh-btn-secondary:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 14px 26px rgba(0, 20, 82, 0.28);
    }

    .dh-price {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: var(--dh-muted);
        font-size: 1.05rem;
    }

    .dh-price i,
    .dh-price strong {
        color: var(--dh-primary-strong);
    }

    .dh-visual-wrap {
        position: relative;
        min-height: 620px;
    }

    .dh-glow {
        position: absolute;
        right: 30px;
        bottom: 58px;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(14, 182, 255, 0.26) 0%, rgba(14, 182, 255, 0) 68%);
        filter: blur(8px);
    }

    .dh-hero-image-box {
        position: absolute;
        right: 0;
        top: 10px;
        width: min(100%, 620px);
        z-index: 2;
    }

    .dh-hero-image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
        filter: drop-shadow(0 28px 54px rgba(0, 20, 90, 0.52));
    }

    .dh-card {
        position: absolute;
        z-index: 3;
        padding: 18px 18px 16px;
        min-width: 150px;
        border-radius: 18px;
        background: var(--dh-card);
        border: 1px solid var(--dh-card-border);
        box-shadow: var(--dh-shadow);
        backdrop-filter: blur(10px);
    }

    .dh-card i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        margin-bottom: 12px;
        border-radius: 12px;
        background: rgba(20, 126, 255, 0.16);
        color: var(--dh-primary-strong);
        font-size: 18px;
    }

    .dh-card h3 {
        margin: 0 0 4px;
        color: #f5f9ff;
        font-size: 1rem;
        font-weight: 700;
    }

    .dh-card p {
        margin: 0;
        color: rgba(221, 235, 255, 0.72);
        font-size: 0.86rem;
        line-height: 1.5;
    }

    .dh-card-domain {
        top: 132px;
        left: 8px;
    }

    .dh-card-ssl {
        top: 338px;
        left: 24px;
    }

    .dh-card-uptime {
        top: 152px;
        right: -10px;
    }

    .dh-card-support {
        top: 364px;
        right: 18px;
    }

    .dh-overview {
        position: relative;
        z-index: 1;
        padding: 0 0 110px;
    }

    .dh-overview-box {
        padding: 38px;
        border-radius: 28px;
        background: rgba(7, 18, 58, 0.78);
        border: 1px solid rgba(70, 162, 255, 0.2);
        box-shadow: 0 22px 52px rgba(0, 16, 68, 0.28);
    }

    .dh-overview h2 {
        margin-bottom: 16px;
        color: #fff;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
    }

    .dh-overview p {
        margin: 0;
        color: var(--dh-muted);
        line-height: 1.9;
    }


    .dh-about {
        position: relative;
        padding: 80px 0 80px;
        background:
            radial-gradient(circle at 14% 18%, rgba(101, 111, 255, 0.16), transparent 18%),
            radial-gradient(circle at 82% 24%, rgba(124, 154, 255, 0.15), transparent 20%),
            linear-gradient(180deg, #f7f8ff 0%, #fdfdff 48%, #f3f5ff 100%);
        overflow: hidden;
    }

    .dh-about::before,
    .dh-about::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .dh-about::before {
        top: 10px;
        left: -70px;
        width: 240px;
        height: 240px;
        background: radial-gradient(circle, rgba(119, 132, 255, 0.24) 0%, rgba(119, 132, 255, 0) 72%);
    }

    .dh-about::after {
        right: 80px;
        top: 70px;
        width: 320px;
        height: 320px;
        border: 1px solid rgba(120, 137, 255, 0.16);
    }

    .dh-about-media {
        position: relative;
        padding-right: 28px;
    }

    .dh-about-frame {
        position: relative;
        border-radius: 34px;
        min-height: 560px;
        overflow: hidden;
        background: linear-gradient(135deg, #dde4ff 0%, #fefeff 38%, #dfe7ff 100%);
        box-shadow: 0 26px 70px rgba(67, 81, 162, 0.18);
    }

    .dh-about-pattern,
    .dh-about-pattern-two {
        position: absolute;
        border-radius: 32px;
        background: linear-gradient(135deg, rgba(102, 113, 255, 0.88), rgba(141, 160, 255, 0.34));
        opacity: 0.92;
    }

    .dh-about-pattern {
        left: -34px;
        bottom: 82px;
        width: 150px;
        height: 214px;
        transform: rotate(42deg);
    }

    .dh-about-pattern-two {
        right: 22px;
        top: -26px;
        width: 128px;
        height: 128px;
        border-radius: 42px;
        transform: rotate(18deg);
    }

    .dh-about-image-wrap {
        position: absolute;
        inset: 34px 34px 34px 34px;
        border-radius: 30px;
        overflow: hidden;
        background: linear-gradient(180deg, #f5f7ff 0%, #d9e2ff 100%);
        z-index: 2;
    }

    .dh-about-image {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .dh-about-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background:
            linear-gradient(135deg, rgba(108, 121, 255, 0.14), rgba(255, 255, 255, 0.92)),
            repeating-linear-gradient(45deg, rgba(105, 123, 255, 0.08) 0, rgba(105, 123, 255, 0.08) 14px, rgba(255, 255, 255, 0.1) 14px, rgba(255, 255, 255, 0.1) 28px);
        color: #5662bb;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 0.03em;
        text-transform: uppercase;
    }

    .dh-about-float {
        position: absolute;
        z-index: 3;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(107, 126, 255, 0.16);
        border-radius: 20px;
        box-shadow: 0 20px 46px rgba(86, 102, 187, 0.16);
        backdrop-filter: blur(10px);
    }

    .dh-about-search {
        top: 34px;
        left: -10px;
        width: 198px;
        padding: 18px;
    }

    .dh-about-search-head,
    .dh-about-info-head {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 14px;
        color: #16224a;
        font-size: 0.95rem;
        font-weight: 700;
    }

    .dh-about-search-head i,
    .dh-about-info-head i,
    .dh-about-mini i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 12px;
        background: rgba(103, 114, 255, 0.12);
        color: #5e6bff;
    }

    .dh-about-search-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 11px 12px;
        border-radius: 14px;
        background: #f5f7ff;
        color: #6e78a0;
        font-size: 0.88rem;
        margin-bottom: 12px;
    }

    .dh-about-tags {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .dh-about-tags span {
        padding: 7px 12px;
        border-radius: 999px;
        background: #eef1ff;
        color: #4956b8;
        font-size: 0.78rem;
        font-weight: 700;
    }

    .dh-about-protect {
        left: 20px;
        bottom: 40px;
        width: 212px;
        padding: 18px;
    }

    .dh-about-protect p,
    .dh-about-info p,
    .dh-about-copy p,
    .dh-about-mini span,
    .dh-about-mini small {
        color: #66708d;
    }

    .dh-about-protect p,
    .dh-about-info p {
        margin: 0;
        line-height: 1.6;
        font-size: 0.88rem;
    }

    .dh-about-protect .dh-check {
        position: absolute;
        right: 16px;
        bottom: 14px;
        color: #25bf77;
        font-size: 18px;
    }

    .dh-about-info {
        right: 6px;
        bottom: 2px;
        width: 200px;
        padding: 18px;
    }

    .dh-about-bullets {
        margin: 12px 0 0;
        padding: 0;
        list-style: none;
    }

    .dh-about-bullets li {
        display: flex;
        align-items: center;
        gap: 9px;
        color: #4f5d8d;
        font-size: 0.82rem;
        font-weight: 600;
    }

    .dh-about-bullets li+li {
        margin-top: 8px;
    }

    .dh-about-bullets i {
        color: #6a72ff;
    }

    .dh-about-copy {
        padding-left: 18px;
    }

    .dh-about-kicker {
        display: inline-block;
        margin-bottom: 18px;
        color: #5d67ff;
        font-size: 1rem;
        font-weight: 700;
    }

    .dh-about-title {
        margin: 0 0 22px;
        color: #121b44;
        font-size: clamp(2rem, 3.9vw, 3.15rem);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .dh-about-copy p {
        margin: 0 0 18px;
        font-size: 1rem;
        line-height: 1.9;
    }

    .dh-about-cta {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 0 28px;
        min-height: 58px;
        margin-top: 10px;
        border-radius: 999px;
        background: linear-gradient(135deg, #6158ff 0%, #6d7bff 100%);
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 18px 42px rgba(102, 103, 255, 0.28);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .dh-about-cta:hover {
        color: #fff;
        transform: translateY(-2px);
    }

    .dh-about-mini-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
        margin-top: 28px;
    }

    .dh-about-mini {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 18px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.82);
        border: 1px solid rgba(113, 126, 255, 0.14);
        box-shadow: 0 14px 34px rgba(103, 117, 201, 0.1);
    }

    .dh-about-mini strong {
        display: block;
        color: #17224d;
        font-size: 0.95rem;
        font-weight: 700;
    }

    .dh-about-mini small {
        display: block;
        font-size: 0.8rem;
        line-height: 1.45;
    }

    @media (max-width: 1199px) {
        .dh-hero {
            padding-top: 150px;
        }

        .dh-visual-wrap {
            min-height: 560px;
            margin-top: 40px;
        }

        .dh-hero-image-box {
            position: relative;
            margin: 0 auto;
        }

        .dh-card-domain {
            left: 0;
        }

        .dh-card-uptime {
            right: 0;
        }
    }


    .dh-solutions {
        position: relative;
        padding: 0 0 110px;

    }

    .dh-solutions-head {
        max-width: 760px;
        margin-bottom: 34px;
    }

    .dh-solutions-title {
        margin: 0 0 12px;
        color: #1a244b;
        font-size: clamp(2rem, 3.8vw, 3.1rem);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .dh-solutions-text {
        margin: 0;
        color: #697593;
        font-size: 1rem;
        line-height: 1.8;
    }

    .dh-solutions-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
    }

    .dh-solution-card {
        padding: 28px 24px 22px;
        border-radius: 26px;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(114, 136, 255, 0.12);
        box-shadow: 0 18px 44px rgba(105, 118, 201, 0.1);
        text-align: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .dh-solution-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 24px 48px rgba(105, 118, 201, 0.14);
    }

    .dh-solution-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 98px;
        height: 98px;
        margin-bottom: 20px;
        border-radius: 50%;
        background: linear-gradient(180deg, #f2f5ff 0%, #edf2ff 100%);
        color: #4273ff;
        font-size: 42px;
        box-shadow: inset 0 0 0 1px rgba(114, 136, 255, 0.08);
    }

    .dh-solution-card h3 {
        margin: 0 0 12px;
        color: #202a53;
        font-size: 1.8rem;
        line-height: 1.25;
        font-weight: 800;
    }

    .dh-solution-card p {
        margin: 0 auto 18px;
        max-width: 215px;
        color: #697593;
        font-size: 1rem;
        line-height: 1.7;
    }

    .dh-solution-divider {
        width: 100%;
        height: 1px;
        margin: 0 0 18px;
        background: linear-gradient(90deg, rgba(114, 136, 255, 0) 0%, rgba(114, 136, 255, 0.18) 50%, rgba(114, 136, 255, 0) 100%);
    }

    .dh-solution-price {
        margin: 0 0 18px;
        color: #46516f;
        font-size: 1.02rem;
    }

    .dh-solution-price strong {
        color: #2f6cff;
        font-size: 1.9rem;
        font-weight: 800;
    }

    .dh-solution-price span {
        color: #5d6988;
    }

    .dh-solution-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        min-height: 54px;
        border-radius: 14px;
        border: 1px solid rgba(82, 122, 255, 0.5);
        color: #3266ff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        background: #fff;
        transition: all 0.25s ease;
    }

    .dh-solution-btn:hover {
        color: #fff;
        background: linear-gradient(135deg, #5f63ff 0%, #4d8dff 100%);
        border-color: transparent;
        box-shadow: 0 16px 30px rgba(82, 122, 255, 0.24);
    }

    @media (max-width: 991px) {
        .dh-copy {
            text-align: center;
        }

        .dh-title,
        .dh-lead {
            margin-left: auto;
            margin-right: auto;
        }

        .dh-actions,
        .dh-price {
            justify-content: center;
        }

        .dh-visual-wrap {
            min-height: auto;
            padding: 40px 0 20px;
        }

        .dh-card {
            min-width: 132px;
            padding: 16px 16px 14px;
        }

        .dh-card-domain {
            top: 54px;
        }

        .dh-card-ssl {
            top: auto;
            bottom: 28px;
            left: 0;
        }

        .dh-card-uptime {
            top: 72px;
        }

        .dh-card-support {
            top: auto;
            bottom: 32px;
            right: 0;
        }
    }

    @media (max-width: 767px) {
        .dh-hero {
            padding: 138px 0 80px;
        }

        .dh-title {
            font-size: 2.6rem;
        }

        .dh-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .dh-btn-primary,
        .dh-btn-secondary {
            width: 100%;
        }

        .dh-card {
            position: relative;
            top: auto;
            right: auto;
            left: auto;
            bottom: auto;
            margin-top: 16px;
            width: 100%;
        }

        .dh-glow {
            width: 280px;
            height: 280px;
            right: 50%;
            transform: translateX(50%);
        }

        .dh-overview-box {
            padding: 28px 22px;
        }
    }


    .dh-solutions {
        position: relative;
        padding: 0 0 110px;
        background: linear-gradient(180deg, #f5f6ff 0%, #f6f8ff 100%);
    }

    .dh-solutions-head {
        max-width: 760px;
        margin-bottom: 34px;
    }

    .dh-solutions-title {
        margin: 0 0 12px;
        color: #1a244b;
        font-size: clamp(2rem, 3.8vw, 3.1rem);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .dh-solutions-text {
        margin: 0;
        color: #697593;
        font-size: 1rem;
        line-height: 1.8;
    }

    .dh-solutions-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
    }

    .dh-solution-card {
        padding: 28px 24px 22px;
        border-radius: 26px;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(114, 136, 255, 0.12);
        box-shadow: 0 18px 44px rgba(105, 118, 201, 0.1);
        text-align: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .dh-solution-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 24px 48px rgba(105, 118, 201, 0.14);
    }

    .dh-solution-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 98px;
        height: 98px;
        margin-bottom: 20px;
        border-radius: 50%;
        background: linear-gradient(180deg, #f2f5ff 0%, #edf2ff 100%);
        color: #4273ff;
        font-size: 42px;
        box-shadow: inset 0 0 0 1px rgba(114, 136, 255, 0.08);
    }

    .dh-solution-card h3 {
        margin: 0 0 12px;
        color: #202a53;
        font-size: 1.8rem;
        line-height: 1.25;
        font-weight: 800;
    }

    .dh-solution-card p {
        margin: 0 auto 18px;
        max-width: 215px;
        color: #697593;
        font-size: 1rem;
        line-height: 1.7;
    }

    .dh-solution-divider {
        width: 100%;
        height: 1px;
        margin: 0 0 18px;
        background: linear-gradient(90deg, rgba(114, 136, 255, 0) 0%, rgba(114, 136, 255, 0.18) 50%, rgba(114, 136, 255, 0) 100%);
    }

    .dh-solution-price {
        margin: 0 0 18px;
        color: #46516f;
        font-size: 1.02rem;
    }

    .dh-solution-price strong {
        color: #2f6cff;
        font-size: 1.9rem;
        font-weight: 800;
    }

    .dh-solution-price span {
        color: #5d6988;
    }

    .dh-solution-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        min-height: 54px;
        border-radius: 14px;
        border: 1px solid rgba(82, 122, 255, 0.5);
        color: #3266ff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        background: #fff;
        transition: all 0.25s ease;
    }

    .dh-solution-btn:hover {
        color: #fff;
        background: linear-gradient(135deg, #5f63ff 0%, #4d8dff 100%);
        border-color: transparent;
        box-shadow: 0 16px 30px rgba(82, 122, 255, 0.24);
    }

    @media (max-width: 991px) {

        .dh-about-media,
        .dh-about-copy {
            padding: 0;
        }

        .dh-about-copy {
            margin-top: 48px;
        }

        .dh-about-mini-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .dh-about {
            padding: 12px 0 86px;
        }

        .dh-about-frame {
            min-height: 440px;
        }

        .dh-about-image-wrap {
            inset: 22px;
        }

        .dh-about-search,
        .dh-about-protect,
        .dh-about-info {
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            width: auto;
            margin: 16px 22px 0;
        }

        .dh-about-copy {
            text-align: center;
        }

        .dh-about-mini-grid {
            grid-template-columns: 1fr;
        }

        .dh-about-cta {
            width: 100%;
            justify-content: center;
        }
    }

    .dh-offer-services {
        position: relative;
        padding: 80px 0 80px;
        background:
            radial-gradient(circle at top center, rgba(113, 102, 255, 0.14) 0%, rgba(113, 102, 255, 0) 44%),
            linear-gradient(180deg, #f7f8ff 0%, #f3f6ff 100%);
        overflow: hidden;
    }

    .dh-offer-services::before,
    .dh-offer-services::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        pointer-events: none;
    }

    .dh-offer-services::before {
        width: 220px;
        height: 220px;
        top: 60px;
        left: -40px;
        background: rgba(122, 110, 255, 0.14);
    }

    .dh-offer-services::after {
        width: 260px;
        height: 260px;
        top: 100px;
        right: -80px;
        background: rgba(61, 150, 255, 0.12);
    }

    .dh-offer-head {
        position: relative;
        z-index: 1;
        max-width: 860px;
        margin: 0 auto 44px;
        text-align: center;
    }

    .dh-offer-kicker {
        display: inline-block;
        margin-bottom: 14px;
        color: #5f63ff;
        font-size: 1.05rem;
        font-weight: 700;
    }

    .dh-offer-title {
        margin: 0 0 16px;
        color: #16213e;
        font-size: clamp(2rem, 4.2vw, 3.5rem);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.05em;
    }

    .dh-offer-text {
        max-width: 650px;
        margin: 0 auto;
        color: #697593;
        font-size: 1.02rem;
        line-height: 1.8;
    }

    .dh-offer-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
    }

    .dh-offer-card {
        position: relative;
        padding: 30px 26px 24px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.96);
        border: 1px solid rgba(121, 137, 255, 0.12);
        box-shadow: 0 18px 44px rgba(93, 112, 185, 0.12);
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, color 0.3s ease;
    }

    .dh-offer-card:hover {
        transform: translateY(-6px);
        background: linear-gradient(135deg, #8f67ff 0%, #4797ff 100%);
        box-shadow: 0 28px 54px rgba(79, 109, 255, 0.24);
    }

    .dh-offer-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 72px;
        margin-bottom: 26px;
        border-radius: 50%;
        background: #ffffff;
        color: #665dff;
        font-size: 31px;
        box-shadow: 0 16px 32px rgba(95, 99, 255, 0.12);
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .dh-offer-card:hover .dh-offer-icon {
        transform: scale(1.04);
        color: #6b63ff;
    }

    .dh-offer-card h3 {
        margin: 0 0 14px;
        color: #1f2947;
        font-size: 1.85rem;
        line-height: 1.2;
        font-weight: 800;
        transition: color 0.3s ease;
    }

    .dh-offer-card p {
        margin: 0 0 18px;
        color: #697593;
        font-size: 1rem;
        line-height: 1.75;
        transition: color 0.3s ease;
    }

    .dh-offer-link {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #4d67ff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .dh-offer-link i {
        font-size: 0.9rem;
    }

    .dh-offer-card:hover h3,
    .dh-offer-card:hover p,
    .dh-offer-card:hover .dh-offer-link {
        color: #ffffff;
    }

    .dh-offer-card:hover .dh-offer-link {
        transform: translateX(2px);
    }

    .dh-faq-section {
        position: relative;
        padding: 80px 0 80px;
        background:
            radial-gradient(circle at top left, rgba(103, 113, 255, 0.12) 0%, rgba(103, 113, 255, 0) 38%),
            linear-gradient(180deg, #fbfcff 0%, #f4f7ff 100%);
    }

    .dh-faq-wrap {
        display: grid;
        grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
        gap: 42px;
        align-items: center;
    }

    .dh-faq-copy {
        max-width: 680px;
    }

    .dh-faq-kicker {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 34px;
        padding: 6px 14px;
        border-radius: 999px;
        background: rgba(96, 99, 255, 0.1);
        color: #5864ff;
        font-size: 0.95rem;
        font-weight: 700;
    }

    .dh-faq-title {
        margin: 18px 0 12px;
        color: #16213e;
        font-size: clamp(2rem, 4vw, 3.2rem);
        line-height: 1.14;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .dh-faq-text {
        margin: 0 0 28px;
        color: #697593;
        font-size: 1rem;
        line-height: 1.8;
    }

    .dh-faq-list {
        display: grid;
        gap: 14px;
    }

    .dh-faq-item {
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.94);
        border: 1px solid rgba(121, 137, 255, 0.12);
        box-shadow: 0 16px 40px rgba(91, 109, 171, 0.09);
        overflow: hidden;
    }

    .dh-faq-item[open] {
        box-shadow: 0 20px 44px rgba(91, 109, 171, 0.14);
    }

    .dh-faq-question {
        display: grid;
        grid-template-columns: auto 1fr auto;
        align-items: center;
        gap: 18px;
        padding: 22px 24px;
        list-style: none;
        cursor: pointer;
    }

    .dh-faq-question::-webkit-details-marker {
        display: none;
    }

    .dh-faq-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 14px;
        background: linear-gradient(180deg, #f5f7ff 0%, #eef2ff 100%);
        color: #5d67ff;
        font-size: 0.95rem;
        font-weight: 800;
        box-shadow: inset 0 0 0 1px rgba(114, 136, 255, 0.08);
    }

    .dh-faq-label {
        color: #1b2648;
        font-size: 1.08rem;
        line-height: 1.5;
        font-weight: 700;
    }

    .dh-faq-icon {
        color: #1b2648;
        font-size: 0.95rem;
        transition: transform 0.25s ease;
    }

    .dh-faq-item[open] .dh-faq-icon {
        transform: rotate(180deg);
    }

    .dh-faq-answer {
        padding: 0 24px 22px 86px;
        color: #697593;
        font-size: 1rem;
        line-height: 1.8;
    }

    .dh-faq-answer p {
        margin: 0;
    }

    .dh-faq-support {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 28px;
    }

    .dh-faq-support-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: linear-gradient(180deg, #eef2ff 0%, #e6edff 100%);
        color: #5864ff;
        font-size: 1.35rem;
        box-shadow: 0 14px 28px rgba(95, 99, 255, 0.14);
    }

    .dh-faq-support-copy p {
        margin: 0 0 4px;
        color: #7b84a2;
        font-size: 0.96rem;
    }

    .dh-faq-support-copy a {
        color: #4d67ff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
    }

    .dh-faq-support-copy a i {
        margin-left: 8px;
        font-size: 0.9rem;
    }

    .dh-faq-media {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100%;
    }

    .dh-faq-media img {
        display: block;
        width: 100%;
        max-width: 560px;
        height: auto;
        object-fit: cover;
        border-radius: 28px;
    }

    @media (max-width: 991px) {
        .dh-faq-wrap {
            grid-template-columns: 1fr;
        }

        .dh-faq-copy {
            max-width: none;
        }

        .dh-faq-media {
            order: -1;
        }
    }

    @media (max-width: 767px) {
        .dh-faq-question {
            gap: 14px;
            padding: 18px;
        }

        .dh-faq-label {
            font-size: 1rem;
        }

        .dh-faq-answer {
            padding: 0 18px 18px 18px;
        }

        .dh-faq-support {
            align-items: flex-start;
        }
    }

    @media (max-width: 991px) {
        .dh-solutions-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .dh-solutions-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 991px) {
        .dh-offer-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .dh-offer-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .dh-offer-card {
            padding: 24px 20px 20px;
        }
    }

    /* @media (max-width: 1024px) {
        .flex-column-reverse-custom {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -webkit-flex-direction: column-reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }
    } */
</style>

<main class="dh-page">
    <section class="dh-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="dh-copy">
                        <div class="dh-eyebrow">
                            <i class="fa fa-shield"></i>
                            <span>Fast</span>
                            <span>&bull;</span>
                            <span>Secure</span>
                            <span>&bull;</span>
                            <span>Reliable</span>
                        </div>
                        <h1 class="dh-title">Premium Domain &amp; <span>Hosting Solutions</span></h1>
                        <p class="dh-lead">Launch your website with secure hosting, lightning-fast performance, and trusted domain management tailored for startups, growing brands, and enterprise teams.</p>
                        <div class="dh-actions">
                            <a href="contact.php" class="dh-btn-primary">
                                <i class="fa fa-rocket"></i>
                                <span>Contact Us</span>
                            </a>
                            <!-- <a href="contact.php" class="dh-btn-secondary">
                                <i class="fa fa-calendar"></i>
                                <span>View Plans</span>
                            </a> -->
                        </div>
                        <!-- 
                        <div class="dh-price">
                            <i class="fa fa-tag"></i>
                            <span>Starting from <strong>&#8377;999</strong> per month</span>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/images/new/domain-hosting.png">
                </div>
            </div>
        </div>
    </section>



    <section class="dh-about">
        <div class="container">
            <div class="row align-items-center flex-column-reverse-custom">
                <div class="col-lg-6">
                    <div class="dh-about-media">
                        <img src="./assets/images/new/dh-about.png" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dh-about-copy">
                        <span class="dh-about-kicker">About Our Services</span>
                        <h2 class="dh-about-title">Why Choose Our Domain &amp; Hosting Services</h2>
                        <p>We provide secure, reliable, and high-performance domain and hosting solutions designed to help businesses build a strong online presence. From domain registration to managed hosting, we make it easy to launch and grow your website with confidence.</p>
                        <p>Our team focuses on speed, uptime, security, and support so your website stays accessible and performs smoothly. Whether you need hosting for a small business website, an online store, or a growing platform, we deliver solutions tailored to your needs.</p>

                        <div class="dh-about-mini-grid">
                            <div class="dh-about-mini">
                                <i class="fa fa-line-chart"></i>
                                <div>
                                    <strong>99.9% Uptime</strong>
                                    <small>Reliable performance</small>
                                </div>
                            </div>
                            <div class="dh-about-mini">
                                <i class="fa fa-lock"></i>
                                <div>
                                    <strong>Secure SSL Protection</strong>
                                    <small>Encrypt &amp; protect data</small>
                                </div>
                            </div>
                            <div class="dh-about-mini">
                                <i class="fa fa-headphones"></i>
                                <div>
                                    <strong>24/7 Expert Support</strong>
                                    <small>Always here for you</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dh-solutions">
        <div class="container">
            <div class="dh-solutions-head">
                <h2 class="dh-solutions-title">Domain &amp; Hosting Solutions</h2>
                <p class="dh-solutions-text">Choose the right domain and hosting package for your website, business, or online store.</p>
            </div>
            <div class="dh-solutions-grid">
                <div class="dh-solution-card">
                    <div class="dh-solution-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3>Domain Registration</h3>
                    <p>Search, register, and manage your perfect domain name with ease.</p>
                    <div class="dh-solution-divider"></div>
                    <!-- <div class="dh-solution-price">Starting from <strong>&#8377;499</strong><span>/year</span></div> -->
                    <a href="contact.php" class="dh-solution-btn">
                        <span>Contact Us</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="dh-solution-card">
                    <div class="dh-solution-icon">
                        <i class="fa fa-server"></i>
                    </div>
                    <h3>Shared Hosting</h3>
                    <p>Affordable hosting for small websites with reliable speed and security.</p>
                    <div class="dh-solution-divider"></div>
                    <!-- <div class="dh-solution-price">Starting from <strong>&#8377;99</strong><span>/month</span></div> -->
                    <a href="contact.php" class="dh-solution-btn">
                        <span>Contact Us</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="dh-solution-card">
                    <div class="dh-solution-icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <h3>VPS Hosting</h3>
                    <p>Powerful virtual servers with better performance and full control.</p>
                    <div class="dh-solution-divider"></div>
                    <!-- <div class="dh-solution-price">Starting from <strong>&#8377;599</strong><span>/month</span></div> -->
                    <a href="contact.php" class="dh-solution-btn">
                        <span>Contact Us</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="dh-solution-card">
                    <div class="dh-solution-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </div>
                    <h3>Cloud Hosting</h3>
                    <p>Scalable cloud infrastructure built for uptime, flexibility, and growth.</p>
                    <div class="dh-solution-divider"></div>
                    <!-- <div class="dh-solution-price">Starting from <strong>&#8377;799</strong><span>/month</span></div> -->
                    <a href="contact.php" class="dh-solution-btn">
                        <span>Contact Us</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="dh-offer-services">
        <div class="container">
            <div class="dh-offer-head">
                <span class="dh-offer-kicker">Our Services</span>
                <h2 class="dh-offer-title">What We Offer for Your Website</h2>
                <p class="dh-offer-text">Explore the essential services that help businesses secure their domain, protect their website, and maintain reliable hosting performance.</p>
            </div>
            <div class="dh-offer-grid">
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3>Domain Registration</h3>
                    <p>Register professional domain names with the extensions that best match your business, brand, or project goals.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-code-fork"></i>
                    </div>
                    <h3>DNS Management</h3>
                    <p>Manage DNS records with ease so your domain connects correctly to websites, email services, and other online tools.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <h3>SSL Security</h3>
                    <p>Protect visitor data with SSL support that improves trust, encrypts connections, and strengthens website security.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </div>
                    <h3>Backup Protection</h3>
                    <p>Keep your website safe with backup options that help restore important files and content when needed.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-server"></i>
                    </div>
                    <h3>99.9% Uptime</h3>
                    <p>Benefit from stable hosting performance designed to keep your website accessible and responsive throughout the day.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="dh-offer-card">
                    <div class="dh-offer-icon">
                        <i class="fa fa-headphones"></i>
                    </div>
                    <h3>Support Center</h3>
                    <p>Reach out for technical help whenever you need guidance with setup, migration, renewals, or hosting concerns.</p>
                    <!-- 
                    <a href="contact.php" class="dh-offer-link">
                        <span>Explore More</span>
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
    <section class="dh-faq-section">
        <div class="container">
            <div class="d-flex dh-faq-wrap flex-column-reverse-custom">
                <div class="dh-faq-copy">
                    <span class="dh-faq-kicker">FAQ</span>
                    <h2 class="dh-faq-title">Frequently Asked Questions</h2>
                    <p class="dh-faq-text">Everything you need to know about our domain and hosting services.</p>
                    <div class="dh-faq-list">
                        <details class="dh-faq-item" open>
                            <summary class="dh-faq-question">
                                <span class="dh-faq-number">01</span>
                                <span class="dh-faq-label">How do I register a domain name?</span>
                                <i class="fa fa-angle-down dh-faq-icon"></i>
                            </summary>
                            <div class="dh-faq-answer">
                                <p>Choose your preferred name, check availability, and complete the registration process in minutes.</p>
                            </div>
                        </details>
                        <details class="dh-faq-item">
                            <summary class="dh-faq-question">
                                <span class="dh-faq-number">02</span>
                                <span class="dh-faq-label">What hosting plan is best for a small business?</span>
                                <i class="fa fa-angle-down dh-faq-icon"></i>
                            </summary>
                            <div class="dh-faq-answer">
                                <p>Shared or managed hosting is usually the best starting point for small business websites that need speed, security, and low maintenance.</p>
                            </div>
                        </details>
                        <details class="dh-faq-item">
                            <summary class="dh-faq-question">
                                <span class="dh-faq-number">03</span>
                                <span class="dh-faq-label">Do you provide SSL certificates?</span>
                                <i class="fa fa-angle-down dh-faq-icon"></i>
                            </summary>
                            <div class="dh-faq-answer">
                                <p>Yes, we provide SSL support to help protect customer data, encrypt connections, and improve website trust.</p>
                            </div>
                        </details>
                        <details class="dh-faq-item">
                            <summary class="dh-faq-question">
                                <span class="dh-faq-number">04</span>
                                <span class="dh-faq-label">Can I migrate my website to your hosting?</span>
                                <i class="fa fa-angle-down dh-faq-icon"></i>
                            </summary>
                            <div class="dh-faq-answer">
                                <p>Yes, we can help move your website, databases, and email configuration with minimal downtime during migration.</p>
                            </div>
                        </details>
                        <details class="dh-faq-item">
                            <summary class="dh-faq-question">
                                <span class="dh-faq-number">05</span>
                                <span class="dh-faq-label">Do you offer technical support?</span>
                                <i class="fa fa-angle-down dh-faq-icon"></i>
                            </summary>
                            <div class="dh-faq-answer">
                                <p>Our support team is available to help with setup, renewals, troubleshooting, hosting issues, and general technical guidance.</p>
                            </div>
                        </details>
                    </div>
                    <div class="dh-faq-support">
                        <span class="dh-faq-support-icon"><i class="fa fa-headphones"></i></span>
                        <div class="dh-faq-support-copy">
                            <p>Still have questions? We're here to help.</p>
                            <a href="contact.php">Contact our support team <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="dh-faq-media">
                    <img src="./assets/images/new/dhfaq.png" alt="Domain and hosting FAQ image">
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>