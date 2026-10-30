<?php
session_start();
$pageTitle = 'Wrap Pack n Carry | Packaging Brand Banner | Technofra';
$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .wrappack-banner-page {
        padding: 28px 0 40px;
        background: linear-gradient(180deg, #F8F3E1 0%, #E3DBBB 100%);
    }

    .wrappack-banner {
        position: relative;
        overflow: hidden;
        min-height: 860px;
        display: flex;
        align-items: stretch;
        padding: 24px;
        margin-top: 135px;
        border-radius: 28px;
        background:
            linear-gradient(90deg, rgba(22, 22, 24, 0.48) 0%, rgba(65, 67, 27, 0.32) 34%, rgba(174, 183, 132, 0.14) 60%, rgba(22, 22, 24, 0.18) 100%),
            url("assets/images/wrappack/1.webp") center center / cover no-repeat;
        box-shadow: 0 26px 70px rgba(65, 67, 27, 0.24);
    }

    .wrappack-banner::before,
    .wrappack-banner::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .wrappack-banner::before {
        background: linear-gradient(90deg, rgba(248, 243, 225, 0.26) 0%, rgba(227, 219, 187, 0.08) 48%, rgba(174, 183, 132, 0.12) 100%);
        mix-blend-mode: screen;
    }

    .wrappack-banner::after {
        background:
            radial-gradient(circle at 16% 16%, rgba(255, 255, 255, 0.18), transparent 22%),
            radial-gradient(circle at 88% 22%, rgba(248, 188, 21, 0.16), transparent 18%);
    }

    .wrappack-banner__inner {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        min-height: 100%;
    }

    .wrappack-banner__content {
        max-width: 760px;
        margin-left: 52px;
        color: #fff;
    }

    .wrappack-banner__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 34px;
        padding: 10px 18px;
        border-radius: 999px;
        border: 1px solid rgba(65, 67, 27, 0.28);
        background: rgba(248, 243, 225, 0.42);
        color: #161618;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
    }

    .wrappack-banner__eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #F8BC15;
        box-shadow: 0 0 0 5px rgba(248, 188, 21, 0.18);
    }

    .wrappack-banner__title {
        margin: 0 0 18px;
        max-width: 760px;
        font-size: clamp(3.1rem, 7vw, 6.6rem);
        line-height: 0.9;
        letter-spacing: -0.08em;
        color: #F8F3E1;
        text-transform: uppercase;
        text-shadow: 0 10px 20px rgba(22, 22, 24, 0.52), 0 0 1px rgba(0, 0, 0, 0.14);
    }

    .wrappack-banner__title span {
        display: block;
        color: #A7D147;
    }

    .wrappack-banner__lead {
        max-width: 560px;
        margin-bottom: 30px;
        color: rgba(248, 243, 225, 0.94);
        font-size: 18px;
        line-height: 1.8;
        text-shadow: 0 2px 10px rgba(22, 22, 24, 0.2);
    }

    .wrappack-banner__actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 26px;
    }

    .wrappack-banner__button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        min-height: 60px;
        padding: 0 28px;
        border-radius: 999px;
        font-weight: 800;
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease, color 0.25s ease;
    }

    .wrappack-banner__button:hover {
        color: inherit;
        text-decoration: none;
        transform: translateY(-2px);
    }

    .wrappack-banner__button--primary {
        color: #161618;
        background: #A7D147;
        box-shadow: 0 16px 30px rgba(65, 67, 27, 0.2);
    }

    .wrappack-banner__button--secondary {
        color: #fff;
        background: rgba(65, 67, 27, 0.62);
        border: 1px solid rgba(255, 255, 255, 0.16);
    }

    .wrappack-banner__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .wrappack-banner__meta-item {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 11px 16px;
        border-radius: 999px;
        background: rgba(65, 67, 27, 0.3);
        color: rgba(248, 243, 225, 0.96);
        border: 1px solid rgba(174, 183, 132, 0.22);
        box-shadow: 0 10px 25px rgba(22, 22, 24, 0.12);
        font-size: 14px;
        font-weight: 600;
    }

    .wrappack-banner__meta-item strong {
        font-weight: 800;
    }

    .wrappack-banner__meta-item i {
        color: #F8BC15;
    }

    .wrappack-branding {
        padding: 100px 0 10px;
    }

    .wrappack-branding__grid {
        display: grid;
        gap: 22px;
    }

    .wrappack-branding__top {
        display: grid;
        grid-template-columns: minmax(0, 1.2fr) minmax(320px, 0.8fr);
        gap: 24px;
        align-items: stretch;
    }

    .wrappack-branding__story,
    .wrappack-branding__visual,
    .wrappack-branding__point {
        position: relative;
        overflow: hidden;
        border-radius: 28px;
        box-shadow: 0 26px 60px rgba(65, 67, 27, 0.16);
    }

    .wrappack-branding__story {
        padding: 42px;
        background:
            radial-gradient(circle at top left, rgba(248, 243, 225, 0.92), transparent 32%),
            linear-gradient(180deg, #F8F3E1 0%, #E3DBBB 100%);
        border: 1px solid rgba(65, 67, 27, 0.16);
    }

    .wrappack-branding__label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        color: #41431B;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }

    .wrappack-branding__label::before {
        content: "";
        width: 40px;
        height: 1px;
        background: rgba(65, 67, 27, 0.48);
    }

    .wrappack-branding__title {
        margin: 0 0 16px;
        color: #161618;
        font-size: clamp(2.15rem, 4vw, 3.7rem);
        line-height: 1.02;
        letter-spacing: -0.05em;
    }

    .wrappack-branding__lead {
        max-width: 620px;
        margin: 0;
        color: #41431B;
        font-size: 17px;
        line-height: 1.8;
    }

    .wrappack-branding__points {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }

    .wrappack-branding__point {
        padding: 26px 22px;
        background: rgba(248, 243, 225, 0.76);
        border: 1px solid rgba(65, 67, 27, 0.14);
    }

    .wrappack-branding__point span {
        display: inline-block;
        margin-bottom: 10px;
        color: #F8BC15;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .wrappack-branding__point h3 {
        margin: 0 0 10px;
        color: #161618;
        font-size: 22px;
        font-weight: 700;
    }

    .wrappack-branding__point p {
        margin: 0;
        color: #41431B;
        font-size: 15px;
        line-height: 1.75;
    }

    .wrappack-branding__visual {
        padding: 24px;
        background:
            linear-gradient(150deg, rgba(22, 22, 24, 0.94) 0%, rgba(65, 67, 27, 0.9) 46%, rgba(174, 183, 132, 0.72) 100%),
            url("assets/images/wrappack/1.webp") center center / cover no-repeat;
        color: #F8F3E1;
    }

    .wrappack-branding__card {
        height: 100%;
        min-height: 100%;
        padding: 26px;
        border-radius: 24px;
        background: rgba(248, 243, 225, 0.12);
        border: 1px solid rgba(227, 219, 187, 0.22);
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
    }

    .wrappack-branding__snapshot-image {
        width: 100%;
        height: 100%;
        min-height: 320px;
        display: block;
        object-fit: cover;
        border-radius: 20px;
    }

    .wrappack-showcase-three {
        padding: 26px 0 40px;
    }

    .wrappack-showcase-three__frame {
        overflow: hidden;
        border-radius: 28px;
        background: linear-gradient(180deg, #F8F3E1 0%, #E3DBBB 100%);
        box-shadow: 0 26px 60px rgba(65, 67, 27, 0.16);
        border: 1px solid rgba(65, 67, 27, 0.12);
        padding: 20px;
    }

    .wrappack-showcase-three__image {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 22px;
    }

    .wrappack-products {
        padding: 34px 0 90px;
        background:
            radial-gradient(circle at top left, rgba(248, 188, 21, 0.14), transparent 24%),
            linear-gradient(180deg, #f7f2df 0%, #ece2c0 100%);
    }

    .wrappack-products__stack {
        display: grid;
        gap: 28px;
    }

    .wrappack-products__section {
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        padding: 34px;
        border: 1px solid rgba(65, 67, 27, 0.12);
        box-shadow: 0 28px 70px rgba(65, 67, 27, 0.12);
    }

    .wrappack-products__section::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.22), transparent 28%);
    }

    .wrappack-products__section--sunlit {
        background: linear-gradient(135deg, #fff7e3 0%, #eadcad 100%);
    }

    .wrappack-products__section--forest {
        background: linear-gradient(135deg, #2c3113 0%, #59612b 58%, #8fa44c 100%);
        color: #f8f3e1;
    }

    .wrappack-products__head {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: space-between;
        gap: 20px;
        align-items: flex-end;
        margin-bottom: 24px;
    }

    .wrappack-products__eyebrow {
        display: inline-block;
        margin-bottom: 12px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(65, 67, 27, 0.09);
        color: #41431b;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .wrappack-products__section--forest .wrappack-products__eyebrow {
        background: rgba(248, 243, 225, 0.16);
        color: #f8f3e1;
    }

    .wrappack-products__title {
        margin: 0;
        color: #161618;
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1;
        letter-spacing: -0.05em;
    }

    .wrappack-products__section--forest .wrappack-products__title {
        color: #f8f3e1;
    }

    .wrappack-products__lead {
        max-width: 620px;
        margin: 12px 0 0;
        color: #4b4c25;
        font-size: 16px;
        line-height: 1.7;
    }

    .wrappack-products__section--forest .wrappack-products__lead {
        color: rgba(248, 243, 225, 0.86);
    }

    .wrappack-products__tag {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 18px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.46);
        color: #161618;
        font-weight: 700;
        white-space: nowrap;
    }

    .wrappack-products__grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(396px, 396px));
        justify-content: center;
        gap: 18px;
    }

    .wrappack-product-card {
        position: relative;
        overflow: hidden;
        width: 100%;
        max-width: 396px;
        min-height: 383px;
        padding: 22px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.7);
        border: 1px solid rgba(65, 67, 27, 0.12);
        box-shadow: 0 18px 40px rgba(65, 67, 27, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .wrappack-product-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(255, 255, 255, 0) 28%, rgba(22, 22, 24, 0.72) 100%),
            var(--card-image, url("assets/images/wrappack/1.webp")) center center / cover no-repeat;
        opacity: 0.92;
    }

    .wrappack-product-card>* {
        position: relative;
        z-index: 1;
    }

    .wrappack-product-card__index {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        margin-bottom: auto;
        border-radius: 16px;
        background: rgba(248, 243, 225, 0.18);
        border: 1px solid rgba(248, 243, 225, 0.18);
        color: #f8f3e1;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.14em;
    }

    .wrappack-product-card__category {
        margin-bottom: 8px;
        color: #f8bc15;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .wrappack-product-card__name {
        margin: 0 0 8px;
        color: #fff8ec;
        font-size: 24px;
        line-height: 1.06;
    }

    .wrappack-product-card__copy {
        margin: 0;
        color: rgba(248, 243, 225, 0.9);
        font-size: 14px;
        line-height: 1.65;
    }

    .wrappack-products__section--forest .wrappack-product-card {
        background: rgba(248, 243, 225, 0.1);
        border-color: rgba(248, 243, 225, 0.12);
    }

    .wrappack-stationery {
        padding: 18px 0 96px;
        background:
            radial-gradient(circle at top left, rgba(248, 188, 21, 0.12), transparent 22%),
            linear-gradient(180deg, #f7f2df 0%, #e8dcb7 100%);
    }

    .wrappack-stationery__panel {
        display: grid;
        grid-template-columns: minmax(300px, 0.72fr) minmax(0, 1.28fr);
        gap: 24px;
        align-items: stretch;
    }

    .wrappack-stationery__content,
    .wrappack-stationery__visual {
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        border: 1px solid rgba(65, 67, 27, 0.12);
        box-shadow: 0 28px 70px rgba(65, 67, 27, 0.12);
    }

    .wrappack-stationery__content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 40px;
        background:
            radial-gradient(circle at top left, rgba(248, 243, 225, 0.92), transparent 35%),
            linear-gradient(135deg, #fff8e8 0%, #eadcad 100%);
    }

    .wrappack-stationery__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        color: #41431b;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.18em;
        text-transform: uppercase;
    }

    .wrappack-stationery__eyebrow::before {
        content: "";
        width: 36px;
        height: 1px;
        background: rgba(65, 67, 27, 0.48);
    }

    .wrappack-stationery__title {
        margin: 0 0 16px;
        color: #161618;
        font-size: clamp(2.1rem, 3.5vw, 3.6rem);
        line-height: 1.02;
        letter-spacing: -0.05em;
    }

    .wrappack-stationery__lead {
        margin: 0 0 24px;
        color: #4b4c25;
        font-size: 16px;
        line-height: 1.8;
    }

    .wrappack-stationery__meta {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        margin-top: 10px;
    }

    .wrappack-stationery__meta-item {
        padding: 15px 16px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.52);
        color: #2f301c;
        border: 1px solid rgba(65, 67, 27, 0.08);
    }

    .wrappack-stationery__meta-label {
        display: block;
        margin-bottom: 6px;
        color: #8c6c12;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    .wrappack-stationery__meta-value {
        display: block;
        color: #2f301c;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.5;
    }

    .wrappack-stationery__visual {
        padding: 18px;
        background:
            linear-gradient(145deg, rgba(22, 22, 24, 0.94) 0%, rgba(65, 67, 27, 0.88) 52%, rgba(167, 209, 71, 0.52) 100%);
    }

    .wrappack-stationery__image-frame {
        position: relative;
        height: 100%;
        min-height: 620px;
        border-radius: 24px;
        overflow: hidden;
        background: rgba(248, 243, 225, 0.08);
        border: 1px solid rgba(248, 243, 225, 0.12);
    }

    .wrappack-stationery__image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .wrappack-stationery__badge {
        position: absolute;
        left: 24px;
        bottom: 24px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 18px;
        border-radius: 18px;
        background: rgba(22, 22, 24, 0.72);
        color: #f8f3e1;
        border: 1px solid rgba(248, 243, 225, 0.16);
        backdrop-filter: blur(10px);
        font-size: 14px;
        font-weight: 700;
    }

    .wrappack-stationery__badge::before {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #a7d147;
        box-shadow: 0 0 0 5px rgba(167, 209, 71, 0.16);
    }







    @media (max-width: 991px) {
        .wrappack-banner {
            min-height: auto;
            margin-top: 116px;
            padding: 16px;
        }

        .wrappack-banner__content {
            max-width: 100%;
            margin-left: 0;
            text-align: center;
        }

        .wrappack-banner__lead {
            margin-left: auto;
            margin-right: auto;
        }

        .wrappack-banner__actions,
        .wrappack-banner__meta {
            justify-content: center;
        }

        .wrappack-branding {
            padding-top: 24px;
        }

        .wrappack-branding__top,
        .wrappack-branding__points {
            grid-template-columns: 1fr;
        }

        .wrappack-branding__story,
        .wrappack-branding__visual,
        .wrappack-branding__point {
            border-radius: 24px;
        }

        .wrappack-branding__story {
            padding: 34px 24px;
        }

        .wrappack-branding__snapshot-image {
            min-height: 260px;
        }

        .wrappack-showcase-three {
            padding-top: 18px;
        }

        .wrappack-products {
            padding: 26px 0 70px;
        }

        .wrappack-products__section {
            padding: 28px 22px;
            border-radius: 26px;
        }

        .wrappack-products__head {
            flex-direction: column;
            align-items: flex-start;
        }

        .wrappack-products__grid {
            grid-template-columns: repeat(auto-fit, minmax(320px, 396px));
        }

        .wrappack-stationery {
            padding: 0 0 70px;
        }

        .wrappack-stationery__panel {
            grid-template-columns: 1fr;
        }

        .wrappack-stationery__content,
        .wrappack-stationery__visual {
            border-radius: 26px;
        }

        .wrappack-stationery__content {
            padding: 30px 24px;
        }

        .wrappack-stationery__meta {
            grid-template-columns: 1fr 1fr;
        }

        .wrappack-stationery__image-frame {
            min-height: 420px;
        }


    }

    @media (max-width: 575px) {
        .wrappack-banner {
            min-height: auto;
            margin-top: 96px;
            border-radius: 22px;
            padding: 14px;
            background:
                linear-gradient(rgba(0, 0, 0, 2.45), rgba(0, 0, 0, 0.45)), url(assets/images/wrappack/6.webp) center center / cover no-repeat;
        }

        .wrappack-banner__title {
            font-size: clamp(2.3rem, 12vw, 3.4rem);
            letter-spacing: -0.06em;
        }

        .wrappack-banner__lead {
            font-size: 16px;
        }

        .wrappack-banner__button {
            width: 100%;
            justify-content: center;
        }

        .wrappack-banner__meta-item {
            width: 100%;
            justify-content: center;
        }

        .wrappack-branding__story,
        .wrappack-branding__visual,
        .wrappack-branding__point {
            border-radius: 22px;
        }

        .wrappack-branding__story,
        .wrappack-branding__visual,
        .wrappack-branding__card,
        .wrappack-branding__point {
            padding-left: 18px;
            padding-right: 18px;
        }

        .wrappack-branding__title {
            font-size: clamp(1.9rem, 10vw, 2.8rem);
        }

        .wrappack-branding__snapshot-image {
            min-height: 200px;
        }

        .wrappack-showcase-three__frame {
            border-radius: 22px;
            padding: 14px;
        }

        .wrappack-showcase-three__image {
            border-radius: 16px;
        }

        .wrappack-products__section {
            padding: 22px 16px;
            border-radius: 22px;
        }

        .wrappack-products__title {
            font-size: clamp(1.8rem, 9vw, 2.5rem);
        }

        .wrappack-products__grid {
            grid-template-columns: 1fr;
        }

        .wrappack-product-card {
            max-width: 100%;
            min-height: 383px;
            border-radius: 20px;
        }

        .wrappack-stationery__content,
        .wrappack-stationery__visual {
            border-radius: 22px;
        }

        .wrappack-stationery__content {
            padding: 24px 18px;
        }

        .wrappack-stationery__title {
            font-size: clamp(1.9rem, 10vw, 2.8rem);
        }

        .wrappack-stationery__meta {
            grid-template-columns: 1fr;
        }

        .wrappack-stationery__image-frame {
            min-height: 320px;
            border-radius: 18px;
        }

        .wrappack-stationery__badge {
            left: 16px;
            right: 16px;
            bottom: 16px;
            justify-content: center;
        }
    }
</style>

<section class="wrappack-banner-page">
    <div class="container2">
        <section class="wrappack-banner">
            <div class="wrappack-banner__inner">
                <div class="row align-items-center w-100">
                    <div class="col-lg-9 col-xl-12">
                        <div class="wrappack-banner__content">
                            <div class="wrappack-banner__eyebrow">Website portfolio showcase</div>
                            <h1 class="wrappack-banner__title">
                                Wrap Pack N Carry
                                <span>Website Portfolio</span>
                            </h1>
                            <p class="wrappack-banner__lead">
                                We built this website to present the brand with a clean, modern layout and a warm
                                portfolio-style banner that highlights the packaging story beautifully.
                            </p>
                            <div class="wrappack-banner__actions">
                                <a href="https://www.wrappackncarry.com/" class="wrappack-banner__button wrappack-banner__button--primary" target="_blank" rel="noopener noreferrer" >
                                    View Project
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="portfolios.php" class="wrappack-banner__button wrappack-banner__button--secondary">
                                    More Projects
                                </a>
                            </div>
                            <div class="wrappack-banner__meta">
                                <div class="wrappack-banner__meta-item">
                                    <i class="fas fa-window-restore"></i>
                                    <strong>Website</strong> showcase
                                </div>
                                <div class="wrappack-banner__meta-item">
                                    <i class="fas fa-layer-group"></i>
                                    <strong>Portfolio</strong> presentation
                                </div>
                                <div class="wrappack-banner__meta-item">
                                    <i class="fas fa-palette"></i>
                                    <strong>Brand</strong> story
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</section>

<section class="wrappack-branding">
    <div class="container2">
        <div class="wrappack-branding__grid">
            <div class="wrappack-branding__top">
                <div class="wrappack-branding__story">
                    <div class="wrappack-branding__label">Logo Designing &amp; Branding</div>
                    <h2 class="wrappack-branding__title">A packaging identity that feels crafted, clear, and instantly recognizable.</h2>
                    <p class="wrappack-branding__lead">
                        Based on the portfolio direction, this brand needed more than a logo mark. It needed a visual system that could carry the same personality across packaging, website banners, and brand touchpoints while still feeling simple, premium, and easy to trust.
                    </p>
                </div>
                <div class="wrappack-branding__visual">

                    <img src="assets/images/wrappack/2.png" alt="Wrap Pack N Carry identity snapshot" class="wrappack-branding__snapshot-image">

                </div>
            </div>
            <div class="wrappack-branding__points">
                <article class="wrappack-branding__point">
                    <span>01</span>
                    <h3>Logo Thinking</h3>
                    <p>
                        The identity is positioned to feel warm and practical, using a straightforward visual language that reflects protection, movement, and product care without becoming visually busy.
                    </p>
                </article>
                <article class="wrappack-branding__point">
                    <span>02</span>
                    <h3>Brand Consistency</h3>
                    <p>
                        Typography, spacing, and supporting graphics are treated as one system so the brand reads consistently across digital presentation, printed packaging, and promotional creatives.
                    </p>
                </article>
                <article class="wrappack-branding__point">
                    <span>03</span>
                    <h3>Color Personality</h3>
                    <p>
                        Earthy beige, rich brown, and soft gold tones help the brand feel grounded and premium, which fits a packaging-focused identity better than loud or disposable visual cues.
                    </p>
                </article>
                <article class="wrappack-branding__point">
                    <span>04</span>
                    <h3>Market Recall</h3>
                    <p>
                        Every branding decision supports recall: the logo remains legible, the palette stays distinct, and the overall look is built to be remembered quickly in both online and offline formats.
                    </p>
                </article>
            </div>
        </div>
    </div>

</section>

<section class="wrappack-showcase-three">
    <div class="container2">
        <div class="wrappack-showcase-three__frame">
            <picture>
                <source media="(max-width: 575px)" srcset="assets/images/wrappack/4.png">
                <img src="assets/images/wrappack/3.png" alt="Wrap Pack N Carry third section showcase" class="wrappack-showcase-three__image">
            </picture>
        </div>
    </div>
</section>

<section class="wrappack-products">
    <div class="container2">
        <div class="wrappack-products__stack">
            <!-- <section class="wrappack-products__section wrappack-products__section--sunlit">
                <div class="wrappack-products__head">
                    <div>
                        <span class="wrappack-products__eyebrow">Section 01</span>
                        <h2 class="wrappack-products__title">Daily Dispatch Packaging</h2>
                        <p class="wrappack-products__lead">A clean gallery of practical packaging formats designed for fast-moving retail and everyday shipping requirements.</p>
                    </div>
                    <div class="wrappack-products__tag">6 highlighted products</div>
                </div>
                <div class="wrappack-products__grid">
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/1.webp');">
                        <span class="wrappack-product-card__index">01</span>
                        <div class="wrappack-product-card__category">Mailing</div>
                        <h3 class="wrappack-product-card__name">Courier Box</h3>
                        <p class="wrappack-product-card__copy">Rigid outer protection for ecommerce deliveries that need a clean first impression.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/2.png');">
                        <span class="wrappack-product-card__index">02</span>
                        <div class="wrappack-product-card__category">Retail</div>
                        <h3 class="wrappack-product-card__name">Display Carton</h3>
                        <p class="wrappack-product-card__copy">Shelf-ready packaging that balances visibility, folding efficiency, and brand recall.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/3.png');">
                        <span class="wrappack-product-card__index">03</span>
                        <div class="wrappack-product-card__category">Food Safe</div>
                        <h3 class="wrappack-product-card__name">Snack Sleeve</h3>
                        <p class="wrappack-product-card__copy">Compact wrap format built for lightweight products that still need a premium finish.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/4.png');">
                        <span class="wrappack-product-card__index">04</span>
                        <div class="wrappack-product-card__category">Storage</div>
                        <h3 class="wrappack-product-card__name">Archive Pack</h3>
                        <p class="wrappack-product-card__copy">Structured box construction suited for safe stacking, inventory handling, and longer shelf life.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/12.png');">
                        <span class="wrappack-product-card__index">05</span>
                        <div class="wrappack-product-card__category">Promo</div>
                        <h3 class="wrappack-product-card__name">Launch Kit</h3>
                        <p class="wrappack-product-card__copy">Presentation-forward packaging for product drops, gifting campaigns, and curated samples.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/1.webp');">
                        <span class="wrappack-product-card__index">06</span>
                        <div class="wrappack-product-card__category">Protective</div>
                        <h3 class="wrappack-product-card__name">Cushion Wrap</h3>
                        <p class="wrappack-product-card__copy">Flexible secondary wrapping that protects delicate items while keeping the brand visible.</p>
                    </article>
                </div>
            </section> -->

            <section class="wrappack-products__section wrappack-products__section--forest">
                <div class="wrappack-products__head">
                    <div>
                        <span class="wrappack-products__eyebrow">Section 02</span>
                        <h2 class="wrappack-products__title">Food Packaging Essentials</h2>
                        <p class="wrappack-products__lead">A practical product range built around food wrapping, takeaway carrying, serving, and delivery needs, with each item reflecting the packaging formats shown below.</p>
                    </div>
                    <div class="wrappack-products__tag">Six core food packaging products</div>
                </div>
                <div class="wrappack-products__grid">
                    <article class="wrappack-product-card" style="--card-image:url('assets/images/wrappack/ogr_paper.png');">
                        <span class="wrappack-product-card__index">01</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Oil Grease Resistant Paper</h3>
                        <p class="wrappack-product-card__copy">Oil-resistant paper ideal for wrapping greasy
                            food items neatly.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('./assets/images/wrappack/wrappackncaryy.webp');">
                        <span class="wrappack-product-card__index">02</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Baking & Cooking Paper</h3>
                        <p class="wrappack-product-card__copy">Reliable paper suitable for baking, packing,
                            and food wrapping.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('./assets/images/wrappack/Slip_Easy_Paper.webp');">
                        <span class="wrappack-product-card__index">03</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Slip Easy Paper</h3>
                        <p class="wrappack-product-card__copy">Smooth-finish paper designed for easy
                            wrapping and handling.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('./assets/images/wrappack/Kraft_Paper_Bag.webp');">
                        <span class="wrappack-product-card__index">04</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Kraft Paper Bag</h3>
                        <p class="wrappack-product-card__copy">Strong and durable paper bags for takeaway
                            and carrying.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('./assets/images/wrappack/Tableware.webp');">
                        <span class="wrappack-product-card__index">05</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Tableware</h3>
                        <p class="wrappack-product-card__copy">Eco-friendly tableware for hygienic serving and
                            food presentation.</p>
                    </article>
                    <article class="wrappack-product-card" style="--card-image:url('./assets/images/wrappack/Pizza_Boxes.webp');">
                        <span class="wrappack-product-card__index">06</span>
                        <div class="wrappack-product-card__category">PACKAGING PAPER</div>
                        <h3 class="wrappack-product-card__name">Pizza Boxes</h3>
                        <p class="wrappack-product-card__copy">Strong pizza boxes made for safe packing and
                            delivery.</p>
                    </article>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="wrappack-stationery">
    <div class="container2">
        <div class="wrappack-stationery__panel">
            <div class="wrappack-stationery__content">
                <div class="wrappack-stationery__eyebrow">Stationery Design</div>
                <h2 class="wrappack-stationery__title">We also created stationery for the Wrap Pack N Carry brand.</h2>
                <p class="wrappack-stationery__lead">
                    Along with the website and packaging visuals, this project also included branded stationery to keep the client identity consistent across everyday business touchpoints.
                </p>
                <div class="wrappack-stationery__meta">
                    <div class="wrappack-stationery__meta-item">
                        <span class="wrappack-stationery__meta-label">Included Items</span>
                        <span class="wrappack-stationery__meta-value">Cards, envelopes, folders, and business stationery</span>
                    </div>
                    <div class="wrappack-stationery__meta-item">
                        <span class="wrappack-stationery__meta-label">Design Goal</span>
                        <span class="wrappack-stationery__meta-value">A unified offline identity that feels premium and consistent</span>
                    </div>
                </div>
            </div>
            <div class="wrappack-stationery__visual">
                <div class="wrappack-stationery__image-frame">
                    <img src="assets/images/wrappack/stationery-showcase.png" alt="Wrap Pack N Carry stationery design showcase" class="wrappack-stationery__image">
                    <div class="wrappack-stationery__badge">Complete stationery presentation</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
