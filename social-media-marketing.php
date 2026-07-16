<?php
$pageTitle = 'Social Media Marketing Comapny in Mumbai | SMM Services - Technofra';
$metaKeywords = 'Social media marketing company in Mumbai, Social media marketing services, Social media advertising, Social media marketing company in Mumbai for small business, Instagram marketing services Mumbai, Social media marketing company in Kandivali, Instagram marketing services Kandivali, Shopify development companies, Shopify development services, Shopify website development, shopify web development company, Shopify agency, shopify web development agency, shopify website developer, Shopify ecommerce development';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    :root {
        --smm-primary: #6a4df5;
        --smm-primary-dark: #18152f;
        --smm-text: #25324b;
        --smm-muted: #5f6983;
        --smm-soft: #f4f1ff;
        --smm-white: #ffffff;
        --smm-border: rgba(106, 77, 245, 0.14);
        --smm-shadow: 0 30px 60px rgba(58, 37, 146, 0.16);
    }

    .smm-page {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at 14% 12%, rgba(158, 137, 255, 0.2), transparent 24%),
            radial-gradient(circle at 84% 24%, rgba(255, 196, 225, 0.35), transparent 26%),
            linear-gradient(135deg, #fcfbff 0%, #ffffff 46%, #fff6fb 100%);
    }

    .smm-page::before,
    .smm-page::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    .smm-page::before {
        top: 90px;
        right: -120px;
        width: 460px;
        height: 460px;
        background: radial-gradient(circle, rgba(255, 211, 230, 0.6) 0%, rgba(255, 211, 230, 0) 72%);
    }

    .smm-page::after {
        bottom: -120px;
        left: -80px;
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, rgba(131, 102, 255, 0.16) 0%, rgba(131, 102, 255, 0) 74%);
    }

    .smm-hero {
        position: relative;
        z-index: 1;
        padding: 160px 0 0px;
    }

    .smm-hero__row {
        align-items: center;
    }

    .smm-hero__content {
        max-width: 620px;
    }

    .smm-hero__badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 18px;
        margin-bottom: 26px;
        border-radius: 999px;
        background: rgba(106, 77, 245, 0.1);
        color: var(--smm-primary);
        font-size: 14px;
        font-weight: 600;
        box-shadow: 0 14px 34px rgba(106, 77, 245, 0.08);
    }

    .smm-hero__badge::before {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--smm-primary);
    }

    .smm-hero__title {
        margin: 0 0 22px;
        color: var(--smm-primary-dark);
        font-size: clamp(2.4rem, 5.2vw, 4rem);
        line-height: 1.06;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .smm-hero__lead {
        margin: 0 0 34px;
        max-width: 540px;
        color: var(--smm-muted);
        font-size: 1.08rem;
        line-height: 1.9;
    }

    .smm-hero__actions {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
    }

    .smm-hero__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        min-height: 58px;
        padding: 0 26px;
        border-radius: 999px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.28s ease;
    }

    .smm-hero__btn i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        font-size: 14px;
    }

    .smm-hero__btn--primary {
        background: linear-gradient(135deg, #6a4df5 0%, #8b68ff 100%);
        color: var(--smm-white);
        box-shadow: 0 20px 34px rgba(106, 77, 245, 0.22);
    }

    .smm-hero__btn--primary i {
        background: rgba(255, 255, 255, 0.18);
        color: var(--smm-white);
    }

    .smm-hero__btn--secondary {
        background: rgba(255, 255, 255, 0.78);
        border: 1px solid rgba(106, 77, 245, 0.28);
        color: var(--smm-primary);
        box-shadow: 0 16px 30px rgba(49, 36, 111, 0.08);
    }

    .smm-hero__btn--secondary i {
        background: var(--smm-primary);
        color: var(--smm-white);
    }

    .smm-hero__btn:hover {
        color: inherit;
        transform: translateY(-2px);
    }

    .smm-hero__visual {
        position: relative;
        padding-left: 24px;
    }

    .smm-hero__visual-wrap {
        position: relative;
        max-width: 620px;
        margin-left: auto;
    }

    .smm-hero__visual-wrap::before {
        content: "";
        position: absolute;
        inset: 8% 6% 2% 10%;
        border-radius: 42px;
        background:
            radial-gradient(circle at center, rgba(255, 212, 229, 0.58) 0%, rgba(248, 225, 255, 0.38) 45%, rgba(255, 255, 255, 0) 72%);
        z-index: 0;
    }

    .smm-hero__image {
        position: relative;
        z-index: 1;
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
        filter: drop-shadow(0 30px 50px rgba(74, 51, 170, 0.16));
    }

    .smm-trusted {
        position: relative;
        z-index: 1;
        padding: 30px 0 34px;
    }

    .smm-trusted__box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 32px;
        padding: 22px 34px;
        border-radius: 22px;
        background: rgba(226, 221, 248, 0.78);
    }

    .smm-trusted__title {
        min-width: 150px;
        margin: 0;
        color: var(--smm-primary-dark);
        font-size: 1rem;
        line-height: 1.45;
        font-weight: 700;
    }

    .smm-trusted__logos {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 28px;
        align-items: center;
        flex: 1;
    }

    .smm-trusted__logo {
        color: #61718f;
        font-size: clamp(1.5rem, 2.4vw, 2.2rem);
        line-height: 1;
        font-weight: 700;
        text-align: center;
        letter-spacing: -0.03em;
        opacity: 0.9;
    }

    .smm-trusted__logo--google {
        font-weight: 500;
    }

    .smm-trusted__logo--microsoft,
    .smm-trusted__logo--airbnb {
        font-size: clamp(1.25rem, 2vw, 1.8rem);
        font-weight: 600;
    }

    .smm-why {
        position: relative;
        z-index: 1;
        padding: 48px 0 96px;
    }

    .smm-why__row {
        align-items: center;
        gap: 0;
    }

    .smm-why__visual {
        position: relative;
        padding-right: 28px;
    }

    .smm-why__visual::before {
        content: "";
        position: absolute;
        top: -28px;
        left: -30px;
        width: 86%;
        height: 112%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(133, 108, 255, 0.12) 0%, rgba(133, 108, 255, 0) 70%);
        z-index: 0;
    }

    .smm-why__image-wrap {
        position: relative;
        z-index: 1;
        border-radius: 34px;
        overflow: hidden;
        box-shadow: 0 28px 58px rgba(76, 50, 171, 0.14);
        background: linear-gradient(135deg, rgba(106, 77, 245, 0.08), rgba(255, 255, 255, 0.82));
    }

    .smm-why__image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .smm-why__content {
        padding-left: 24px;
    }

    .smm-why__badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 18px;
        margin-bottom: 24px;
        border-radius: 999px;
        background: rgba(106, 77, 245, 0.1);
        color: var(--smm-primary);
        font-size: 14px;
        font-weight: 600;
    }

    .smm-why__badge::before {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--smm-primary);
    }

    .smm-why__title {
        margin: 0 0 18px;
        color: var(--smm-primary-dark);
        font-size: clamp(1.8rem, 3.5vw, 3.1rem);
        line-height: 1.14;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .smm-why__text {
        margin: 0 0 28px;
        color: var(--smm-muted);
        font-size: 1.06rem;
        line-height: 1.9;
        max-width: 560px;
    }

    .smm-why__list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px 16px;
        margin: 0 0 32px;
        padding: 0;
        list-style: none;
    }

    .smm-why__list li {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 18px;
        border-radius: 999px;
        background: rgba(244, 241, 255, 0.92);
        color: var(--smm-primary-dark);
        font-size: 0.98rem;
        font-weight: 600;
        box-shadow: 0 10px 22px rgba(38, 27, 83, 0.05);
    }

    .smm-why__list li i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: var(--smm-primary-dark);
        color: var(--smm-white);
        font-size: 11px;
        flex-shrink: 0;
    }

    .smm-why__btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        min-height: 58px;
        padding: 0 26px;
        border-radius: 999px;
        background: linear-gradient(135deg, #6a4df5 0%, #8b68ff 100%);
        color: var(--smm-white);
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 18px 34px rgba(106, 77, 245, 0.2);
        transition: transform 0.28s ease;
    }

    .smm-why__btn i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.18);
        color: var(--smm-white);
        font-size: 14px;
    }

    .smm-why__btn:hover {
        color: var(--smm-white);
        transform: translateY(-2px);
    }

    .smm-services {
        position: relative;
        z-index: 1;
        padding: 50px 0 80px;
    }

    .smm-services::before,
    .smm-services::after {
        content: "";
        position: absolute;
        width: 14px;
        height: 14px;
        border-radius: 4px;
        transform: rotate(45deg);
        opacity: 0.7;
    }

    .smm-services::before {
        top: 42px;
        left: 8%;
        background: linear-gradient(135deg, #ff93c1, #ffb4d4);
    }

    .smm-services::after {
        top: 64px;
        right: 10%;
        background: linear-gradient(135deg, #a8bfff, #d0dcff);
    }

    .smm-services__intro {
        max-width: 780px;
        margin: 0 auto 42px;
        text-align: center;
    }

    .smm-services__title {
        margin: 0 0 14px;
        color: var(--smm-primary-dark);
        font-size: clamp(1.8rem, 3.8vw, 3rem);
        line-height: 1.1;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .smm-services__text {
        margin: 0 auto;
        max-width: 720px;
        color: var(--smm-muted);
        font-size: 1.06rem;
        line-height: 1.75;
    }

    .smm-services__grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
    }

    .smm-services__card {
        position: relative;
        display: flex;
        align-items: center;
        gap: 22px;
        min-height: 202px;
        padding: 28px 24px;
        border-radius: 26px;
        border: 1px solid rgba(106, 77, 245, 0.08);
        box-shadow: 0 18px 40px rgba(48, 33, 110, 0.08);
        overflow: hidden;
    }

    .smm-services__card::before {
        content: "";
        position: absolute;
        width: 140px;
        height: 140px;
        left: -24px;
        bottom: -32px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.34);
        filter: blur(4px);
    }

    .smm-services__card--pink {
        background: linear-gradient(135deg, #ffe8f0 0%, #fff5f8 100%);
    }

    .smm-services__card--violet {
        background: linear-gradient(135deg, #ede6ff 0%, #f7f3ff 100%);
    }

    .smm-services__card--yellow {
        background: linear-gradient(135deg, #fff3c9 0%, #fff8e3 100%);
    }

    .smm-services__card--mint {
        background: linear-gradient(135deg, #e4faee 0%, #f2fff7 100%);
    }

    .smm-services__card--peach {
        background: linear-gradient(135deg, #ffe7d9 0%, #fff4ee 100%);
    }

    .smm-services__card--blue {
        background: linear-gradient(135deg, #e5efff 0%, #f2f7ff 100%);
    }

    .smm-services__icon {
        position: relative;
        z-index: 1;
        flex: 0 0 126px;
        width: 126px;
        height: 126px;
        border-radius: 32px;
        background: rgba(255, 255, 255, 0.76);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.7), 0 14px 28px rgba(64, 40, 141, 0.08);
    }

    .smm-services__icon i {
        font-size: 3.1rem;
    }

    .smm-services__card--pink .smm-services__icon i {
        color: #ff5f99;
    }

    .smm-services__card--violet .smm-services__icon i {
        color: #7c59ff;
    }

    .smm-services__card--yellow .smm-services__icon i {
        color: #ffb300;
    }

    .smm-services__card--mint .smm-services__icon i {
        color: #25a76f;
    }

    .smm-services__card--peach .smm-services__icon i {
        color: #ff7c55;
    }

    .smm-services__card--blue .smm-services__icon i {
        color: #3d74ff;
    }

    .smm-services__content {
        position: relative;
        z-index: 1;
    }

    .smm-services__content h3 {
        margin: 0 0 12px;
        color: var(--smm-primary-dark);
        font-size: 1.08rem;
        line-height: 1.35;
        font-weight: 700;
    }

    .smm-services__content p {
        margin: 0;
        color: var(--smm-text);
        font-size: 0.98rem;
        line-height: 1.7;
    }

    .smm-growth {
        position: relative;
        z-index: 1;
        padding: 80px 0 80px;
    }

    .smm-growth__top {
        display: grid;
        grid-template-columns: 0.92fr 1.08fr;
        gap: 44px;
        align-items: start;
        margin-bottom: 34px;
    }

    .smm-growth__content {
        padding-top: 18px;
    }

    .smm-growth__badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 18px;
        margin-bottom: 24px;
        border-radius: 999px;
        background: rgba(106, 77, 245, 0.1);
        color: var(--smm-primary);
        font-size: 14px;
        font-weight: 600;
    }

    .smm-growth__badge::before {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--smm-primary);
    }

    .smm-growth__title {
        margin: 0 0 18px;
        color: var(--smm-primary-dark);
        font-size: clamp(1.8rem, 3.7vw, 3rem);
        line-height: 1.08;
        font-weight: 700;
        letter-spacing: -0.04em;
        max-width: 430px;
    }

    .smm-growth__text {
        margin: 0 0 28px;
        max-width: 470px;
        color: var(--smm-muted);
        font-size: 0.97rem;
        line-height: 1.75;
    }

    .smm-growth__btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        min-height: 58px;
        padding: 0 24px;
        border-radius: 999px;
        background: linear-gradient(135deg, #6a4df5 0%, #8b68ff 100%);
        color: var(--smm-white);
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 18px 34px rgba(106, 77, 245, 0.2);
        transition: transform 0.28s ease;
    }

    .smm-growth__btn i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.18);
        color: var(--smm-white);
        font-size: 14px;
    }

    .smm-growth__btn:hover {
        color: var(--smm-white);
        transform: translateY(-2px);
    }

    .smm-growth__stats {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
        padding-top: 100px;
    }

    .smm-growth__stat {
        display: flex;
        align-items: center;
        gap: 18px;
        min-height: 124px;
        padding: 22px 22px;
        border-radius: 24px;
        background: rgba(248, 247, 255, 0.95);
        border: 1px solid rgba(106, 77, 245, 0.08);
        box-shadow: 0 16px 32px rgba(45, 31, 100, 0.06);
    }

    .smm-growth__stat-icon {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        background: rgba(106, 77, 245, 0.1);
        color: var(--smm-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
        text-align: center;
    }

    .smm-growth__stat-icon i {
        display: block;
        line-height: 1;
        width: 1em;
        height: 1em;
        left: 20px;
        position: relative;
        top: 20px;
    }

    .smm-growth__stat strong {
        display: block;
        color: var(--smm-primary-dark);
        font-size: clamp(2rem, 4vw, 2.8rem);
        line-height: 1;
        font-weight: 700;
        letter-spacing: -0.04em;
        margin-bottom: 8px;
    }

    .smm-growth__stat span {
        display: block;
        color: var(--smm-muted);
        font-size: 1rem;
        line-height: 1.5;
    }

    .smm-growth__gallery {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
    }

    .smm-growth__gallery-card {
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(49, 34, 107, 0.1);
        background: rgba(255, 255, 255, 0.8);
    }

    .smm-growth__gallery-card img {
        width: 100%;
        height: 302px;
        object-fit: cover;
        display: block;
    }

    .smm-faq {
        position: relative;
        z-index: 1;
        padding: 0 0 110px;
    }

    .smm-faq__row {
        align-items: center;
    }

    .smm-faq__visual {
        padding-right: 28px;
    }

    .smm-faq__image-wrap {
        border-radius: 34px;
        overflow: hidden;
        box-shadow: 0 22px 44px rgba(49, 34, 107, 0.1);
        background: rgba(255, 255, 255, 0.85);
    }

    .smm-faq__image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .smm-faq__content {
        padding-left: 18px;
    }

    .smm-faq__badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 9px 18px;
        margin-bottom: 22px;
        border-radius: 999px;
        background: rgba(106, 77, 245, 0.12);
        color: var(--smm-primary);
        font-size: 14px;
        font-weight: 600;
    }

    .smm-faq__title {
        margin: 0 0 14px;
        color: var(--smm-primary-dark);
        font-size: clamp(2rem, 4vw, 3.15rem);
        line-height: 1.12;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .smm-faq__text {
        margin: 0 0 30px;
        color: var(--smm-muted);
        font-size: 1rem;
        line-height: 1.8;
    }

    .smm-faq__text span {
        color: var(--smm-primary);
        font-weight: 600;
    }

    .smm-faq__list {
        display: grid;
        gap: 14px;
    }

    .smm-faq__item {
        background: rgba(255, 255, 255, 0.92);
        border: 1px solid rgba(106, 77, 245, 0.08);
        border-radius: 20px;
        box-shadow: 0 14px 28px rgba(45, 31, 100, 0.06);
        overflow: hidden;
    }

    .smm-faq__question {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 18px 20px;
    }

    .smm-faq__icon {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        background: linear-gradient(135deg, #7b5dff 0%, #8f73ff 100%);
        color: var(--smm-white);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .smm-faq__question h3 {
        margin: 0;
        color: var(--smm-primary-dark);
        font-size: 1.02rem;
        line-height: 1.45;
        font-weight: 600;
        flex: 1;
    }

    .smm-faq__toggle {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: rgba(106, 77, 245, 0.12);
        color: var(--smm-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        flex-shrink: 0;
    }

    .smm-faq__answer {
        padding: 0 20px 18px 70px;
        color: var(--smm-muted);
        font-size: 0.95rem;
        line-height: 1.75;
    }

    .smm-faq__item:not(.is-open) .smm-faq__answer {
        display: none;
    }

    @media (max-width: 1199px) {
        .smm-hero {
            padding: 145px 0 90px;
        }

        .smm-hero__visual {
            padding-left: 0;
        }

        .smm-trusted__box {
            gap: 24px;
            padding: 22px 24px;
        }

        .smm-why__visual {
            padding-right: 0;
        }

        .smm-why__content {
            padding-left: 0;
        }

        .smm-services__grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .smm-services__card {
            min-height: 188px;
            padding: 24px 20px;
        }

        .smm-services__icon {
            flex-basis: 108px;
            width: 108px;
            height: 108px;
        }

        .smm-growth__top {
            grid-template-columns: 1fr;
            gap: 26px;
        }

        .smm-faq__visual {
            padding-right: 0;
        }

        .smm-faq__content {
            padding-left: 0;
        }
    }

    @media (max-width: 991px) {
        .smm-hero {
            padding: 135px 0 80px;
            text-align: center;
        }

        .smm-hero__content {
            margin: 0 auto 42px;
        }

        .smm-hero__lead {
            margin-left: auto;
            margin-right: auto;
        }

        .smm-hero__actions {
            justify-content: center;
        }

        .smm-hero__visual-wrap {
            margin: 0 auto;
            max-width: 540px;
        }

        .smm-trusted {
            padding-top: 10px;
        }

        .smm-trusted__box {
            flex-direction: column;
            text-align: center;
        }

        .smm-trusted__title {
            min-width: 0;
        }

        .smm-trusted__logos {
            width: 100%;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px 16px;
        }

        .smm-why {
            padding: 30px 0 80px;
        }

        .smm-why__row {
            row-gap: 40px;
        }

        .smm-why__visual,
        .smm-why__content {
            text-align: center;
        }

        .smm-why__text {
            margin-left: auto;
            margin-right: auto;
        }

        .smm-why__list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .smm-services {
            padding: 0 0 90px;
        }

        .smm-services__intro {
            margin-bottom: 34px;
        }

        .smm-services__grid {
            grid-template-columns: 1fr;
        }

        .smm-services__card {
            flex-direction: column;
            align-items: flex-start;
            min-height: auto;
        }

        .smm-services__title,
        .smm-services__content h3,
        .smm-services__content p {
            text-align: center;
        }

        .smm-services__card {
            align-items: center;
            text-align: center;
        }

        .smm-growth {
            padding: 0 0 90px;
        }

        .smm-growth__content {
            text-align: center;
        }

        .smm-growth__text {
            margin-left: auto;
            margin-right: auto;
        }

        .smm-growth__stats {
            grid-template-columns: 1fr;
        }

        .smm-growth__gallery {
            grid-template-columns: 1fr;
        }

        .smm-faq {
            padding: 0 0 90px;
        }

        .smm-faq__row {
            row-gap: 38px;
        }

        .smm-faq__visual,
        .smm-faq__content {
            text-align: center;
        }

        .smm-faq__question {
            text-align: left;
        }

        .smm-faq__answer {
            padding: 0 18px 18px 18px;
            text-align: left;
        }
    }

    @media (max-width: 767px) {
        .smm-hero {
            padding: 120px 0 0px;
        }

        .smm-hero__badge {
            font-size: 12px;
            margin-bottom: 20px;
        }

        .smm-hero__title {
            font-size: clamp(2.3rem, 10vw, 3.3rem);
        }

        .smm-hero__lead {
            font-size: 1rem;
            line-height: 1.8;
        }

        .smm-hero__btn {
            width: 100%;
        }

        .smm-trusted__logos {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .smm-trusted__logo {
            font-size: 1.3rem;
        }

        .smm-why__title {
            font-size: clamp(1.9rem, 7vw, 2.7rem);
        }

        .smm-why__list {
            grid-template-columns: 1fr;
        }

        .smm-why__btn {
            width: 100%;
            justify-content: center;
        }

        .smm-services__title {
            font-size: clamp(1.85rem, 8vw, 2.7rem);
        }

        .smm-services__icon {
            width: 96px;
            height: 96px;
            flex-basis: 96px;
        }

        .smm-services__icon i {
            font-size: 2.4rem;
        }

        .smm-growth__title {
            font-size: clamp(1.9rem, 8vw, 2.8rem);
        }

        .smm-growth__stat {
            min-height: auto;
            padding: 20px 18px;
        }

        .smm-growth__gallery-card img {
            height: 260px;
        }

        .smm-growth__btn {
            width: 100%;
            justify-content: center;
        }

        .smm-faq__title {
            font-size: clamp(1.8rem, 8vw, 2.5rem);
        }

        .smm-faq__question {
            padding: 16px 16px;
            gap: 12px;
        }

        .smm-faq__question h3 {
            font-size: 0.95rem;
        }

        .smm-hero__visual-wrap::before {
            inset: 10% 2% 3% 2%;
        }
    }

    h3 {
        letter-spacing: normal;
    }
</style>

<main class="smm-page">
    <section class="smm-hero">
        <div class="container">
            <div class="row smm-hero__row">
                <div class="col-lg-6">
                    <div class="smm-hero__content">
                        <span class="smm-hero__badge">Top Social Media Marketing Agency</span>
                        <h1 class="smm-hero__title">Grow Your Brand With Expert Social Media Marketing</h1>
                        <p class="smm-hero__lead">
                            We help businesses build visibility, engage audiences, and generate quality leads through strategic social media campaigns and content marketing.
                        </p>
                        <div class="smm-hero__actions">
                            <a class="smm-hero__btn smm-hero__btn--primary" href="contact.php">
                                Start Growing Now
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a class="smm-hero__btn smm-hero__btn--secondary" href="contact.php">
                                Contact Now
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="smm-hero__visual">
                        <div class="smm-hero__visual-wrap">
                            <img src="assets/images/new/smmbanner.png" alt="Social media marketing hero placeholder" class="smm-hero__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smm-trusted">
        <div class="container">
            <div class="smm-trusted__box">
                <p class="smm-trusted__title">Trusted by<br>Top Brands</p>
                <div class="smm-trusted__logos" aria-label="Trusted brand logos">
                    <span class="smm-trusted__logo">Blue Orbith</span>
                    <span class="smm-trusted__logo">Grid Infinity</span>
                    <span class="smm-trusted__logo">Digi Kcon</span>
                    <span class="smm-trusted__logo">Mark Identitiez</span>
                    <!-- <span class="smm-trusted__logo smm-trusted__logo--airbnb">airbnb</span> -->
                </div>
            </div>
        </div>
    </section>

    <section class="smm-why">
        <div class="container">
            <div class="row smm-why__row">
                <div class="col-lg-6">
                    <div class="smm-why__visual">
                        <div class="smm-why__image-wrap">
                            <img src="assets/images/new/smmabout.png" alt="Social media strategy placeholder" class="smm-why__image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="smm-why__content">
                        <span class="smm-why__badge">Why Choose Us</span>
                        <h2 class="smm-why__title">Build a Strong Social Presence with Strategic Social Media Marketing</h2>
                        <p class="smm-why__text">Social media marketing is more than regular posting. We help brands build a clear voice, create relevant content, stay active where audiences engage, and turn interactions into meaningful business growth.</p>
                        <ul class="smm-why__list">
                            <li><i class="fas fa-check"></i>Content Strategy &amp; Planning</li>
                            <li><i class="fas fa-check"></i>Creative Posts &amp; Reel Ideas</li>
                            <li><i class="fas fa-check"></i>Community Engagement</li>
                            <li><i class="fas fa-check"></i>Profile Optimization &amp; Analysis</li>
                        </ul>
                        <a class="smm-why__btn" href="contact.php">
                            Explore Our Services
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smm-services">
        <div class="container">
            <div class="smm-services__intro">
                <h2 class="smm-services__title">Core Social Media Services We Offer</h2>
                <p class="smm-services__text">We help brands grow through strategic content, creative design, platform-focused marketing, and clear performance insights.</p>
            </div>
            <div class="smm-services__grid">
                <article class="smm-services__card smm-services__card--pink">
                    <div class="smm-services__icon"><i class="fas fa-calendar-check"></i></div>
                    <div class="smm-services__content">
                        <h3>Content Strategy and Planning</h3>
                        <p>Plan content themes, posting calendars, and messaging that align with your brand goals.</p>
                    </div>
                </article>
                <article class="smm-services__card smm-services__card--violet">
                    <div class="smm-services__icon"><i class="fas fa-images"></i></div>
                    <div class="smm-services__content">
                        <h3>Creative Post Design</h3>
                        <p>Get eye-catching social creatives designed to improve engagement and brand consistency.</p>
                    </div>
                </article>
                <article class="smm-services__card smm-services__card--yellow">
                    <div class="smm-services__icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="smm-services__content">
                        <h3>Instagram and Facebook Marketing</h3>
                        <p>Build reach, audience interaction, and campaign performance across Meta platforms.</p>
                    </div>
                </article>
                <article class="smm-services__card smm-services__card--mint">
                    <div class="smm-services__icon"><i class="fab fa-linkedin-in"></i></div>
                    <div class="smm-services__content">
                        <h3>LinkedIn Brand Marketing</h3>
                        <p>Strengthen your professional presence and connect with the right business audience.</p>
                    </div>
                </article>
                <article class="smm-services__card smm-services__card--peach">
                    <div class="smm-services__icon"><i class="fas fa-photo-video"></i></div>
                    <div class="smm-services__content">
                        <h3>Reels and Short Video Ideas</h3>
                        <p>Create short-form content concepts that increase visibility and audience interest.</p>
                    </div>
                </article>
                <article class="smm-services__card smm-services__card--blue">
                    <div class="smm-services__icon"><i class="fas fa-chart-pie"></i></div>
                    <div class="smm-services__content">
                        <h3>Analytics and Reporting</h3>
                        <p>Track results with performance insights, engagement data, and monthly reports.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="smm-growth">
        <div class="container">
            <div class="smm-growth__top">
                <div class="smm-growth__content">
                    <span class="smm-growth__badge">What We Do</span>
                    <h2 class="smm-growth__title">Smart Social Media Marketing That Builds Your Brand</h2>
                    <p class="smm-growth__text">Strengthen your online presence with strategy-led social media marketing. We create engaging content, manage campaigns, grow audience interaction, and help brands turn visibility into real business results.</p>
                    <!-- <a class="smm-growth__btn" href="contact.php">
                        Explore Our Services
                        <i class="fas fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="smm-growth__stats">
                    <div class="smm-growth__stat">
                        <span class="smm-growth__stat-icon"><i class="fas fa-bullhorn"></i></span>
                        <div><strong>13K</strong><span>Campaigns Managed</span></div>
                    </div>
                    <div class="smm-growth__stat">
                        <span class="smm-growth__stat-icon"><i class="fas fa-users"></i></span>
                        <div><strong>12K</strong><span>Happy Clients</span></div>
                    </div>
                    <div class="smm-growth__stat">
                        <span class="smm-growth__stat-icon"><i class="fas fa-briefcase"></i></span>
                        <div><strong>49+</strong><span>Brands Supported</span></div>
                    </div>
                    <div class="smm-growth__stat">
                        <span class="smm-growth__stat-icon"><i class="fas fa-smile"></i></span>
                        <div><strong>98%</strong><span>Client Satisfaction</span></div>
                    </div>
                </div>
            </div>
            <div class="smm-growth__gallery">
                <div class="smm-growth__gallery-card">
                    <img src="assets/images/new/smm1.png" alt="Social media analytics placeholder">
                </div>
                <div class="smm-growth__gallery-card">
                    <img src="assets/images/new/smm2.png" alt="Team social media collaboration placeholder">
                </div>
                <div class="smm-growth__gallery-card">
                    <img src="assets/images/new/smm3.png" alt="Social media content creation placeholder">
                </div>
            </div>
        </div>
    </section>

    <section class="smm-faq">
        <div class="container">
            <div class="row smm-faq__row">
                <div class="col-lg-5">
                    <div class="smm-faq__visual">
                        <div class="smm-faq__image-wrap">
                            <img src="assets/images/new/smmfq.png" alt="FAQ placeholder" class="smm-faq__image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="smm-faq__content">
                        <span class="smm-faq__badge">FAQ</span>
                        <h2 class="smm-faq__title">Frequently Asked Questions</h2>
                        <p class="smm-faq__text">Everything you need to know about our <span>Social Media Marketing</span> services.</p>
                        <div class="smm-faq__list">
                            <div class="smm-faq__item is-open">
                                <div class="smm-faq__question">
                                    <span class="smm-faq__icon"><i class="fas fa-comments"></i></span>
                                    <h3>What is Social Media Marketing?</h3>
                                    <span class="smm-faq__toggle"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="smm-faq__answer">Social Media Marketing involves creating and sharing content on social media platforms to build brand awareness, engage your audience, and drive business growth.</div>
                            </div>
                            <div class="smm-faq__item">
                                <div class="smm-faq__question">
                                    <span class="smm-faq__icon"><i class="fas fa-share-alt"></i></span>
                                    <h3>Which social media platforms do you manage?</h3>
                                    <span class="smm-faq__toggle"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="smm-faq__answer">We manage Instagram, Facebook, LinkedIn, X, YouTube, and other relevant platforms based on your audience, industry, and marketing goals.</div>
                            </div>
                            <div class="smm-faq__item">
                                <div class="smm-faq__question">
                                    <span class="smm-faq__icon"><i class="fas fa-pen"></i></span>
                                    <h3>How do you create content for my brand?</h3>
                                    <span class="smm-faq__toggle"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="smm-faq__answer">We study your brand tone, target audience, and business goals, then build a content plan with post ideas, captions, creatives, and campaign themes that fit your brand.</div>
                            </div>
                            <div class="smm-faq__item">
                                <div class="smm-faq__question">
                                    <span class="smm-faq__icon"><i class="fas fa-calendar-alt"></i></span>
                                    <h3>How often will you post on our social media?</h3>
                                    <span class="smm-faq__toggle"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="smm-faq__answer">Posting frequency depends on your package and strategy, but we usually create a consistent monthly calendar to keep your brand active and visible.</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var faqItems = document.querySelectorAll(".smm-faq__item");

        faqItems.forEach(function(item) {
            var question = item.querySelector(".smm-faq__question");
            var toggleIcon = item.querySelector(".smm-faq__toggle i");

            if (!question || !toggleIcon) {
                return;
            }

            question.addEventListener("click", function() {
                var isOpen = item.classList.contains("is-open");

                faqItems.forEach(function(faqItem) {
                    faqItem.classList.remove("is-open");
                    var icon = faqItem.querySelector(".smm-faq__toggle i");
                    if (icon) {
                        icon.className = "fas fa-plus";
                    }
                });

                if (!isOpen) {
                    item.classList.add("is-open");
                    toggleIcon.className = "fas fa-minus";
                }
            });
        });
    });
</script>
<?php include __DIR__ . '/footer.php'; ?>


