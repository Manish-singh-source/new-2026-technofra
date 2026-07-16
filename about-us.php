<?php
$pageTitle = 'About Technofra - Leading Web & Digital Solutions Provider';
include __DIR__ . '/header.php'; ?>
<style>
    .counter-box8 .counter-number,
    .counter-box8 .counter-text {
        font-size: 90px;
    }

    .team-img .sub-title {
        font-size: 50px;
    }

    .service-sec20 .ser-card20_card1,
    .service-sec20 .ser-card20_card2,
    .service-sec20 .ser-card20_card3,
    .service-sec20 .ser-card20_card4,
    .service-sec20 .ser-card20_card5 {
        overflow: hidden;
    }

    @media (min-width: 992px) {
        .service-sec20 .row {
            align-items: stretch;
        }

        .service-sec20 .row>div {
            display: flex;
        }

        .service-sec20 .ser-info20 {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
        }

        .service-sec20 .ser-card20_card1,
        .service-sec20 .ser-card20_card3,
        .service-sec20 .ser-card20_card5 {
            flex: 1 1 auto;
        }

        .service-sec20 .ser-card20_card5 {
            height: 100%;
        }

        .service-sec20 .ser-card20_card5 img {
            height: 100%;
            object-fit: cover;
        }
    }

    @media (min-width: 1200px) and (max-width: 1599.98px) {
        .service-sec20 .ser-card20_card1 {
            padding: 36px 34px;
        }

        .service-sec20 .ser-card20_card1 img {
            margin-bottom: 42px;
            width: 40px;
        }

        .service-sec20 .ser-card20_card1 .title,
        .service-sec20 .ser-card20_card3 .title,
        .service-sec20 .ser-card20_card4 .title h4 {
            font-size: 22px;
            line-height: 28px;
        }

        .service-sec20 .ser-card20_card1 p,
        .service-sec20 .ser-card20_card3 p,
        .service-sec20 .ser-card20_card4 p {
            font-size: 15px;
            line-height: 26px;
        }

        .service-sec20 .ser-card20_card2 {
            padding: 28px 28px 24px 84px;
        }

        .service-sec20 .ser-card20_card2 img {
            top: 30px;
            left: 30px;
            width: 34px;
        }

        .service-sec20 .ser-card20_card2 .title {
            font-size: 22px;
            line-height: 28px;
        }

        .service-sec20 .ser-card20_card2 span {
            font-size: 14px;
            line-height: 24px;
        }

        .service-sec20 .ser-card20_card3 {
            height: 270px;
        }

        .service-sec20 .ser-card20_card3 .title {
            top: 34px;
            left: 28px;
            max-width: 210px;
        }

        .service-sec20 .ser-card20_card3 p {
            top: 72px;
            left: 28px;
            right: 24px;
        }

        .service-sec20 .ser-card20_card4 {
            height: 270px;
        }

        .service-sec20 .ser-card20_card4 .title {
            left: 28px;
            right: 24px;
            bottom: 28px;
            max-width: 250px;
        }

        .service-sec20 .ser-card20_card5 {
            min-height: 560px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .service-sec20 .ser-card20_card1 {
            padding: 30px 26px;
        }

        .service-sec20 .ser-card20_card1 img {
            margin-bottom: 28px;
            width: 36px;
        }

        .service-sec20 .ser-card20_card1 .title,
        .service-sec20 .ser-card20_card2 .title,
        .service-sec20 .ser-card20_card3 .title,
        .service-sec20 .ser-card20_card4 .title h4 {
            font-size: 20px;
            line-height: 26px;
        }

        .service-sec20 .ser-card20_card1 p,
        .service-sec20 .ser-card20_card2 span,
        .service-sec20 .ser-card20_card3 p,
        .service-sec20 .ser-card20_card4 p {
            font-size: 14px;
            line-height: 24px;
        }

        .service-sec20 .ser-card20_card2 {
            padding: 24px 22px 22px 76px;
        }

        .service-sec20 .ser-card20_card2 img {
            top: 25px;
            left: 24px;
            width: 32px;
        }

        .service-sec20 .ser-card20_card3 {
            height: 235px;
        }

        .service-sec20 .ser-card20_card3 .title {
            top: 26px;
            left: 24px;
            max-width: 180px;
        }

        .service-sec20 .ser-card20_card3 p {
            top: 60px;
            left: 24px;
            right: 18px;
        }

        .service-sec20 .ser-card20_card4 {
            height: 235px;
        }

        .service-sec20 .ser-card20_card4 .title {
            left: 24px;
            right: 18px;
            bottom: 22px;
            max-width: 210px;
        }

        .service-sec20 .ser-card20_card5 {
            min-height: 420px;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .service-sec20 .ser-card20_card1 {
            padding: 28px 24px;
        }

        .service-sec20 .ser-card20_card1 img {
            margin-bottom: 96px;
            width: 34px;
        }

        .service-sec20 .ser-card20_card1 .title,
        .service-sec20 .ser-card20_card2 .title,
        .service-sec20 .ser-card20_card3 .title,
        .service-sec20 .ser-card20_card4 .title h4 {
            font-size: 20px;
            line-height: 26px;
        }

        .service-sec20 .ser-card20_card1 p,
        .service-sec20 .ser-card20_card2 span,
        .service-sec20 .ser-card20_card3 p,
        .service-sec20 .ser-card20_card4 p {
            font-size: 14px;
            line-height: 24px;
        }

        .service-sec20 .ser-card20_card2 {
            padding: 22px 20px 20px 72px;
        }

        .service-sec20 .ser-card20_card2 img {
            top: 23px;
            left: 22px;
            width: 30px;
        }

        .service-sec20 .ser-card20_card3,
        .service-sec20 .ser-card20_card4 {
            height: 220px;
        }

        .service-sec20 .ser-card20_card3 .title {
            top: 24px;
            left: 22px;
            /* max-width: 170px; */
        }

        .service-sec20 .ser-card20_card3 p {
            top: 58px;
            left: 22px;
            right: 16px;
        }

        .service-sec20 .ser-card20_card4 .title {
            left: 22px;
            right: 16px;
            bottom: 20px;
            max-width: 200px;
        }

        .service-sec20 .ser-card20_card5 {
            height: 420px;
        }
    }

    /* Page-specific responsive refinement */
    .about-us-sec9 .title-area,
    .team-section2 .row,
    .pricing-style1 .row {
        row-gap: 24px;
    }

    .journey-card,
    .team-card,
    .price-card,
    .service-sec20 .ser-card20_card1,
    .service-sec20 .ser-card20_card2,
    .service-sec20 .ser-card20_card3,
    .service-sec20 .ser-card20_card4,
    .service-sec20 .ser-card20_card5 {
        box-sizing: border-box;
    }

    @media (max-width: 1399.98px) {
        .gradient-title14 {
            font-size: 68px;
            line-height: 1.08;
        }

        .hero-style14 .hero-content14 {
            max-width: 520px;
            margin-left: auto;
        }

        .about-content9 .title {
            font-size: 78px;
            line-height: 0.95;
        }
    }

    @media (max-width: 1199.98px) {
        .hero-style14 {
            padding-bottom: 90px;
        }

        .hero-style14 .row {
            row-gap: 24px;
        }

        .hero-style14 .hero-content14 {
            max-width: 100%;
            margin-left: 0;
        }

        .gradient-title14 {
            font-size: 58px;
            line-height: 1.08;
        }

        .about-us-sec9 .title-area {
            margin-bottom: 12px;
        }

        .about-content9 .title {
            font-size: 64px;
        }

        .about-info9 p {
            font-size: 15px;
            line-height: 28px;
        }

        .pricing-style1 .pricing-content {
            max-width: 520px;
        }

        .price-card {
            padding: 42px 32px;
            gap: 18px;
        }

        .price-card i {
            font-size: 56px;
        }

        .price-heade {
            padding-right: 0;
        }

        .price-heade .title {
            font-size: 32px;
            line-height: 1.2;
        }

        .price-heade span {
            max-width: none;
        }

        .team-img .sub-title {
            font-size: 38px;
        }
    }

    @media (max-width: 991.98px) {
        .hero-style14 {
            margin: 0 14px;
            padding: 132px 0 76px;
        }

        .gradient-title14 {
            font-size: 48px;
            line-height: 1.08;
            max-width: 820px;
        }

        .hero-style14 .hero-content14 p {
            max-width: 680px;
            margin-bottom: 22px;
        }

        .service-sec20 {
            margin-top: 10px;
        }

        .service-sec20 .row {
            row-gap: 24px;
        }

        /* .service-sec20 .col-lg-12 {
            min-height: 420px;
        } */

        .about-us-sec9 {
            margin: 0 14px;
        }

        .about-us-sec9 .title-area {
            row-gap: 18px;
        }

        .about-content9 .title {
            font-size: 56px;
        }

        .journey-title {
            margin-bottom: 38px;
        }

        .journey-grid {
            gap: 24px;
        }

        .journey-card:nth-child(odd),
        .journey-card:nth-child(even) {
            transform: none;
        }

        .pricing-style1 {
            margin: 0 14px;
        }

        .pricing-style1 .row {
            row-gap: 22px;
        }

        .price-card {
            padding: 34px 24px;
            border-radius: 22px;
        }

        .team-section2 {
            margin: 0 14px;
        }

        .team-section2 .row {
            row-gap: 24px;
            margin-bottom: 0;
        }

        .team-member2,
        .team-member2.v2 {
            height: 100%;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .team-card,
        .team-card.v3 {
            margin-top: 0;
        }
    }

    @media (max-width: 767.98px) {
        .hero-style14 {
            margin: 0 10px;
            padding: 118px 0 62px;
        }

        .hero-style14 .container-fluid {
            padding-inline: 12px;
        }

        .gradient-title14 {
            font-size: 38px;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .hero-style14 .hero-content14 p {
            font-size: 15px;
            line-height: 26px;
        }

        .hero-style14 .hero-content14 .ibt-btn {
            width: 100%;
            justify-content: center;
        }

        .service-sec20 .container2 {
            padding-inline: 10px;
        }

        .service-sec20 .row {
            row-gap: 18px;
        }

        .service-sec20 .ser-info20 {
            gap: 18px;
        }

        .service-sec20 .ser-card20_card1 {
            padding: 28px 22px;
        }

        .service-sec20 .ser-card20_card1 img {
            margin-bottom: 20px;
            width: 32px;
        }

        .service-sec20 .ser-card20_card1 .title,
        .service-sec20 .ser-card20_card2 .title,
        .service-sec20 .ser-card20_card3 .title,
        .service-sec20 .ser-card20_card4 .title h4 {
            font-size: 20px;
            line-height: 1.25;
        }

        .service-sec20 .ser-card20_card1 p,
        .service-sec20 .ser-card20_card2 span,
        .service-sec20 .ser-card20_card3 p,
        .service-sec20 .ser-card20_card4 p {
            font-size: 14px;
            line-height: 24px;
        }

        .service-sec20 .ser-card20_card2 {
            margin-top: 0;
            min-height: auto;
            margin-top: 20px;
            padding: 22px 20px 20px 70px;
        }

        .service-sec20 .ser-card20_card2 img {
            top: 22px;
            left: 22px;
            width: 28px;
        }

        .service-sec20 .ser-card20_card3,
        .service-sec20 .ser-card20_card4 {
            height: 230px;
        }

        .service-sec20 .ser-card20_card3 .title {
            top: 24px;
            left: 22px;
            max-width: 180px;
        }

        .service-sec20 .ser-card20_card3 p {
            top: 60px;
            left: 22px;
            right: 18px;
        }

        .service-sec20 .ser-card20_card4 .title {
            left: 22px;
            right: 18px;
            bottom: 20px;
            max-width: 220px;
        }

        .service-sec20 .ser-card20_card5 {
            display: block;
            height: 300px;
            min-height: auto;
            margin-top: 0;
        }

        .service-sec20 .ser-card20_card5 img {
            height: 100%;
            object-fit: cover;
        }

        .about-us-sec9 {
            margin: 0 10px;
        }

        .about-us-sec9 .container {
            padding-inline: 12px;
        }

        .about-us-sec9 .sec-title .title {
            font-size: 32px;
            line-height: 1.15;
        }

        .about-us-sec9 .sub-title {
            margin-bottom: 10px;
        }

        .about-us-sec9 button.ibt-btn {
            width: 100%;
            justify-content: center;
        }

        .about-content9 .title {
            font-size: 46px;
            line-height: 1;
            margin-bottom: 8px;
        }

        .about-info9 p {
            font-size: 15px;
            line-height: 26px;
        }

        .journey-sec .container,
        .pricing-style1 .container,
        .team-section2 .container {
            padding-inline: 12px;
        }

        .journey-title .title {
            font-size: 32px;
            line-height: 1.15;
        }

        .journey-title .journey-intro {
            font-size: 15px;
            line-height: 26px;
        }

        .journey-image {
            border-radius: 20px;
        }

        .journey-year {
            width: 64px;
            height: 64px;
            font-size: 16px;
        }

        .price-card {
            display: block;
            padding: 28px 20px;
            border-radius: 20px;
        }

        .price-card i {
            font-size: 42px;
        }

        .price-heade {
            padding: 10px 0 0;
        }

        .price-heade .title {
            font-size: 28px;
            line-height: 1.15;
            margin-bottom: 10px;
        }

        .price-heade span {
            font-size: 15px;
            line-height: 25px;
        }

        .team-section2 {
            margin: 0 10px;
        }

        .team-section2 .sec-title .title {
            font-size: 32px;
            line-height: 1.15;
        }

        .team-card .team-content {
            padding-inline: 18px;
        }

        .team-img .sub-title {
            font-size: 28px;
        }

        .team-content .name {
            font-size: 22px;
        }

        .team-content .designation {
            font-size: 14px;
            line-height: 22px;
        }

        .company-profile-modal .modal-dialog {
            margin: 16px;
        }

        .company-profile-modal .modal-body {
            padding: 24px 18px !important;
        }

        .company-profile-modal .modal-header {
            padding: 18px 18px 0;
        }

        .company-profile-modal .modal-title {
            font-size: 22px;
        }

        .company-profile-modal .company-profile-submit-btn {
            width: 100%;
        }
    }

    @media (max-width: 479.98px) {
        .hero-style14 {
            margin: 0 6px;
            padding: 108px 0 54px;
        }

        .gradient-title14 {
            font-size: 31px;
        }

        .service-sec20 .container2,
        .about-us-sec9 .container,
        .journey-sec .container,
        .pricing-style1 .container,
        .team-section2 .container {
            padding-inline: 8px;
        }

        .service-sec20 .ser-card20_card1,
        .service-sec20 .ser-card20_card2 {
            border-radius: 20px;
            margin-top: 20px;
        }

        .service-sec20 .ser-card20_card3,
        .service-sec20 .ser-card20_card4,
        .service-sec20 .ser-card20_card5 {
            border-radius: 20px;
            height: 210px;
        }

        .about-us-sec9 .sec-title .title,
        .journey-title .title,
        .team-section2 .sec-title .title {
            font-size: 28px;
        }

        .about-content9 .title {
            font-size: 38px;
        }

        .price-heade .title {
            font-size: 24px;
        }
    }

    @media (max-width: 767.98px) {

        .about-us-sec9.ibt-section-gapTop,
        .journey-sec.ibt-section-gapTop,
        .pricing-style1.ibt-section-gapTop,
        .team-section2.ibt-section-gapTop {
            padding-top: 46px !important;
        }

        .about-us-sec9.pb-4,
        .journey-sec.pb-5 {
            padding-bottom: 10px !important;
        }

        .hero-style14 {
            padding-bottom: 44px;
        }

        .service-sec20 {
            padding-bottom: 6px;
        }

        .about-us-sec9,
        .journey-sec,
        .pricing-style1,
        .team-section2 {
            margin-top: 0;
        }

        .journey-sec::before,
        .team-section2::before,
        .pricing-style1.v2::before,
        .pricing-style1.v2::after {
            display: none !important;
        }

        .about-us-sec9 .title-area,
        .team-section2 .title-area,
        .pricing-content .sec-title,
        .journey-title {
            margin-bottom: 22px;
        }

        .about-us-sec9 .row,
        .pricing-style1 .row,
        .team-section2 .row {
            row-gap: 18px;
        }

        .about-content9,
        .pricing-content,
        .team-section2 .sec-title {
            margin-bottom: 0;
        }

        .about-content9 .title {
            font-size: 42px;
            line-height: 0.95;
        }

        .about-info9 p {
            margin-bottom: 14px;
        }

        .journey-grid {
            gap: 20px;
        }

        .journey-card {
            padding-bottom: 8px;
        }

        .journey-content {
            padding: 12px 4px 8px;
        }

        .journey-content h4 {
            font-size: 20px;
            margin-bottom: 6px;
        }

        .journey-content p {
            font-size: 14px;
            line-height: 24px;
            max-width: 100%;
        }

        .journey-year {
            margin-top: 2px;
        }

        .price-card {
            padding: 24px 18px;
        }

        .price-card+.price-card {
            margin-top: 14px;
        }

        .price-card .d-flex {
            justify-content: flex-start !important;
            padding: 0 0 10px !important;
        }

        .price-heade {
            padding-top: 0;
        }

        .price-heade .title {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .price-heade span {
            font-size: 14px;
            line-height: 24px;
        }

        .team-section2 .row {
            row-gap: 18px;
        }

        .team-member2,
        .team-member2.v2 {
            gap: 18px;
        }

        .team-card .team-img img {
            width: 100%;
        }

        .team-card .team-content {
            padding-inline: 16px;
            padding-bottom: 16px;
        }

        .team-img .sub-title {
            font-size: 22px;
        }

        .team-content .name {
            font-size: 20px;
        }

        .team-content .designation {
            font-size: 13px;
            line-height: 20px;
        }
    }

    @media (max-width: 479.98px) {

        .about-us-sec9.ibt-section-gapTop,
        .journey-sec.ibt-section-gapTop,
        .pricing-style1.ibt-section-gapTop,
        .team-section2.ibt-section-gapTop {
            padding-top: 40px !important;
        }

        .hero-style14 {
            padding-bottom: 38px;
        }

        .service-sec20 .row {
            row-gap: 16px;
        }

        .service-sec20 .ser-info20 {
            gap: 16px;
        }

        .about-us-sec9 .container,
        .journey-sec .container,
        .pricing-style1 .container,
        .team-section2 .container,
        .service-sec20 .container2 {
            padding-inline: 10px;
        }

        .journey-grid,
        .team-section2 .row,
        .pricing-style1 .row {
            gap: 16px;
        }

        .journey-title,
        .pricing-content .sec-title,
        .team-section2 .title-area {
            margin-bottom: 18px;
        }
    }

    .company-profile-modal .modal-dialog {
        max-width: 640px;
    }

    .company-profile-modal .modal-content {
        border: 0;
        border-radius: 26px;
        overflow: hidden;
        background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
        box-shadow: 0 28px 80px rgba(15, 23, 42, 0.24);
    }

    .company-profile-modal .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        padding: 26px 26px 10px;
        border-bottom: 0;
        background: transparent;
    }

    .company-profile-modal .modal-title {
        margin: 0;
        font-size: 28px;
        line-height: 1.2;
        letter-spacing: -0.02em;
        font-weight: 700;
        font-family: 'Plus Jakarta Sans', 'Poppins', sans-serif;
        color: #0f172a;
    }

    .company-profile-modal .btn-close {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        margin: 0;
        padding: 0;
        border: 1px solid rgba(15, 23, 42, 0.08);
        border-radius: 50%;
        background: #ffffff;
        background-image: none;
        opacity: 1;
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.12);
        position: relative;
        transition: transform 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
    }

    .company-profile-modal .btn-close::before,
    .company-profile-modal .btn-close::after {
        content: "";
        position: absolute;
        width: 16px;
        height: 2px;
        border-radius: 999px;
        background: #0f172a;
        transition: background-color 0.25s ease;
    }

    .company-profile-modal .btn-close::before {
        transform: rotate(45deg);
    }

    .company-profile-modal .btn-close::after {
        transform: rotate(-45deg);
    }

    .company-profile-modal .btn-close:hover,
    .company-profile-modal .btn-close:focus {
        background: #0f172a;
        box-shadow: 0 18px 34px rgba(15, 23, 42, 0.2);
        transform: rotate(90deg);
    }

    .company-profile-modal .btn-close:hover::before,
    .company-profile-modal .btn-close:hover::after,
    .company-profile-modal .btn-close:focus::before,
    .company-profile-modal .btn-close:focus::after {
        background: #ffffff;
    }

    .company-profile-modal .modal-body {
        padding: 10px 26px 28px !important;
    }

    .company-profile-modal .company-profile-form-shell {
        padding: 26px;
        border-radius: 24px;
        background: #ffffff;
        border: 1px solid rgba(148, 163, 184, 0.18);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8);
    }

    .company-profile-modal .company-profile-intro {
        margin: 0 0 22px;
        color: #475569;
        font-size: 15px;
        line-height: 1.75;
    }

    .company-profile-modal .company-profile-field {
        margin-bottom: 16px;
    }

    .company-profile-modal .company-profile-field .form-label {
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 700;
        color: #0f172a;
    }

    .company-profile-modal .company-profile-field .form-control {
        min-height: 54px;
        border-radius: 16px;
        border: 1px solid #d7dfeb;
        background: #f8fafc;
        padding: 14px 16px;
        color: #0f172a;
        box-shadow: none;
    }

    .company-profile-modal .company-profile-field .form-control:focus {
        border-color: #0d6efd;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.12);
    }

    .company-profile-modal .company-profile-captcha {
        margin-top: 22px;
        overflow-x: auto;
        border-radius: 18px;
    }

    .company-profile-modal .company-profile-actions {
        margin-top: 22px;
    }

    .company-profile-modal .company-profile-submit-btn {
        width: 100%;
        min-height: 54px;
        border: 0;
        border-radius: 999px;
        background: linear-gradient(135deg, #0d6efd 0%, #003b95 100%);
        color: #ffffff;
        font-weight: 700;
        box-shadow: 0 18px 36px rgba(13, 110, 253, 0.22);
    }

    .company-profile-modal .company-profile-submit-btn:hover,
    .company-profile-modal .company-profile-submit-btn:focus {
        color: #ffffff;
        transform: translateY(-1px);
    }

    @media (max-width: 767.98px) {
        .company-profile-modal .modal-content {
            border-radius: 22px;
        }

        .company-profile-modal .modal-header {
            padding: 20px 20px 8px;
        }

        .company-profile-modal .modal-title {
            font-size: 22px;
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .company-profile-modal .modal-body {
            padding: 8px 20px 22px !important;
        }

        .company-profile-modal .company-profile-form-shell {
            padding: 18px;
            border-radius: 18px;
        }
    }

    .gradient-title14 span {
        background-image: -webkit-linear-gradient(348deg, #39c7f4 0%, #1b3664 100%);
        background-image: linear-gradient(102deg, #39c7f4 0%, #1b3664 100%);
    }

    @media (max-width: 425px) {
        .hero-style14 .row {
            row-gap: 0px;
        }
    }

    @media (max-width: 375px) {
        .service-sec20 .row {
            row-gap: 0px;
        }
        .service-sec20 .ser-card20_card5 {
            margin-top: 20px;
        }
    }
</style>


<!-- her-style9 -->
<section class="hero-style14">
    <div class="container-fluid">
        <div class="row end g-2">
            <div class="col-xl-7 col-lg-12">
                <div class="hero-title">
                    <h1 class="gradient-title14">Building Digital Growth With <span>Strategy, Design & Technology</span>
                    </h1>
                </div>
            </div>
            <div class="col-xl-1">
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="hero-content14">
                    <p>Technofra builds strong digital brands through websites, apps, branding, marketing, and smart tech solutions.
                    </p>
                    <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='contact.php' target='_blank' title>
                        <span>Start Your Project</span>
                        <i class="icon-arrow-top"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hero-style9 -->

<!-- service-sec20 -->
<section class="service-sec20">
    <div class="container2">
        <div class="row g-sm-4">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="ser-info20">
                    <div class="ser-card20_card1">
                        <img src="assets/images/icon/icon14-1.svg" alt="AI Agency & Technology HTML Template">
                        <h4 class="title">Innovative&nbsp;Solutions</h4>
                        <p>We deliver innovative solutions that combine creativity, technology, and strategy to help businesses grow, adapt, and succeed in a competitive market.</p>
                    </div>
                    <div class="ser-card20_card2">
                        <img src="assets/images/icon/icon14-2.svg" alt="AI Agency & Technology HTML Template">
                        <h4 class="title">Business Growth</h4>
                        <span>Helping brands adapt, scale, and succeed digitally</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="ser-info20">
                    <div class="ser-card20_card3">
                        <img src="assets/images/service/ser20-1.png" alt="AI Agency & Technology HTML Template">
                        <h4 class="title">Professional Team
                        </h4>
                        <p>Our professional team combines creativity, expertise, and technology to deliver reliable digital solutions that help businesses achieve long-term growth.</p>
                    </div>
                    <div class="ser-card20_card4">
                        <img src="assets/images/service/ser20-2.png" alt="AI Agency & Technology HTML Template">
                        <div class="title">
                            <h4>24/7 Support</h4>
                            <p>Our 24/7 support ensures reliable assistance whenever you need it, helping your business run smoothly with quick solutions and dedicated service.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 ">
                <div class="ser-card20_card5">
                    <img src="assets/images/service/ser20-5.png" alt="AI Agency & Technology HTML Template">
                    <!-- <h4 class="title">AI Oculus</h4> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service-sec20 -->

<!-- about-us-sec9 -->

<!-- about-us-sec9 -->
<section class="about-us-sec9 ibt-section-gapTop pb-4">
    <div class="container">
        <div class="title-area row">
            <div class="sec-title col-12 col-lg-8">
                <span class="sub-title">About Company</span>
                <h2 class="title animated-heading">From Start to Success:</h2>
                <h2 class="title animated-heading">Technofra’s Milestones in Technology</h2>
            </div>
            <div class="col-12 col-lg-4">
                <!-- 
                    <a class='mt-5 ibt-btn ibt-btn-secondary' href='index14.html' target='_blank' title>
                            <span>Download Company Profile</span>
                            <i class="fa-solid fa-file-pdf"></i>
                        </a> -->
                <button type="button" class="mt-lg-5 ibt-btn ibt-btn-outline-3 ibt-btn-rounded" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <span>Download Company Profile </span>
                    <i class="fa-solid fa-file-pdf"></i>
                </button>
                <!-- <img src="assets/images/event/cross1-1.png" alt="AI Agency & Technology HTML Template"> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content9">
                    <h4 class="title">14+ Years</h4>
                </div>
                <!-- <a class='mt-5 ibt-btn ibt-btn-secondary' href='index14.html' target='_blank' title>
                            <span>Download Company Profile</span>
                            <i class="fa-solid fa-file-pdf"></i>
                        </a> -->
            </div>
            <div class="col-lg-6">
                <div class="about-info9">
                    <p>Welcome to Technofra, your all-in-one destination for digital solutions. We specialize in website and mobile app development , branding, digital marketing, payment & API integration, domain & hosting, and IT infrastructure.</p>
                    <p>
                        Our expertise and dedication to excellence help businesses succeed and thrive in the digital era with innovative and efficient solutions.
                    </p>
                    <p>
                        Technofra was founded in 2012 with a passion for technology and a commitment to excellence. Over the years, we have grown into a trusted partner for businesses worldwide. Our journey began with a small team of dedicated professionals, and today we stand as a premier digital agency, delivering a wide range of services to a diverse clientele.
                    </p>
                    <p class="mb-0">
                        From launching our first website to integrating complex APIs, our journey is marked by numerous milestones and achievements. Each project has been a learning experience, contributing to our growth and success. We take pride in our work and strive to exceed our clients' expectations in every project we undertake.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about-us-sec9 -->



<!-- journey-sec -->
<section class="journey-sec ibt-section-gapTop pb-5" id="journey">
    <div class="container">
        <div class="sec-title text-center journey-title">
                            <span class="sub-title">Company Journey</span>
            <h2 class="title animated-heading">Our Jour ney Timeline</h2>
            <p class="journey-intro">A look at the key moments that shaped Technofra into a reliable digital partner for branding, web development, mobile apps, and IT solutions.</p>
        </div>
        <div class="journey-grid">
            <div class="journey-card">
                <div class="journey-image">
                    <img src="assets/images/new/about1.jpeg" alt="Technofra founded">
                </div>
                <div class="journey-content">
                    <span class="journey-tag">Foundation</span>
                    <h4>November 28th</h4>
                    <p>Founded Technofra, specializing in branding and web development for growing businesses.</p>
                </div>
                <div class="journey-year">2012</div>
            </div>
            <div class="journey-card">
                <div class="journey-image">
                    <img src="assets/images/new/about2.jpeg" alt="Expanded into design and branding">
                </div>
                <div class="journey-content">
                    <span class="journey-tag">Expansion</span>
                    <h4>January</h4>
                    <p>Expanded into website design, branding, and user-focused digital experiences.</p>
                </div>
                <div class="journey-year">2016</div>
            </div>
            <div class="journey-card">
                <div class="journey-image">
                    <img src="assets/images/new/about3.jpeg" alt="Started mobile applications">
                </div>
                <div class="journey-content">
                    <span class="journey-tag">Innovation</span>
                    <h4>April</h4>
                    <p>Started developing mobile applications and API-driven solutions for modern businesses.</p>
                </div>
                <div class="journey-year">2020</div>
            </div>
            <div class="journey-card">
                <div class="journey-image">
                    <img src="assets/images/new/about4.jpeg" alt="Leading IT solutions agency">
                </div>
                <div class="journey-content">
                    <span class="journey-tag">Growth</span>
                    <h4>June</h4>
                    <p>Built a trusted team delivering IT solutions, support, and long-term digital growth.</p>
                </div>
                <div class="journey-year">2024</div>
            </div>
        </div>
    </div>
</section>
<!-- End journey-sec -->

<!-- pricing-style1 -->
<section class="pricing-style1 v2 ibt-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="pricing-content">
                    <div class="sec-title">
                        <span class="sub-title">Our Purpose</span>
                        <h2 class="title animated-heading">Mission & Vision</h2>
                        <p>Technofra, established in 2012, is driven by a clear mission and vision to deliver innovative digital solutions that empower businesses globally.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="price-card">
                    <div class="d-flex justify-content-center align-items-center p-2">
                        <i class="fa fa-bullseye"></i>
                    </div>
                    <div class="price-heade">
                        <h4 class="title">Mission</h4>
                        <span>Technofra empowers businesses with innovative digital solutions, driving growth and success through cutting-edge technology and exceptional service, ensuring seamless and effective digital transformation in the modern digital age</span>
                    </div>
                </div>
                <div class="price-card v2">
                    <div class="d-flex justify-content-center align-items-center p-2">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="price-heade">
                        <h4 class="title">Vision</h4>
                        <span>Our vision is to be the leading digital agency, delivering cutting-edge technology and exceptional customer service, setting industry standards, and becoming the trusted partner for businesses globally.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End pricing-style1 -->


<!-- team-section2 -->
<section class="team-section2 ibt-section-gap">
    <div class="container">
        <div class="title-area">
            <div class="row align-items-end mb-0">
                <div class="col-xl-12 col-lg-12">
                    <div class="sec-title mb-0">
                        <span class="sub-title">Our Team</span>
                        <h2 class="title animated-heading">Meet Our Leadership</h2>
                    </div>
                </div>
                <!-- 
                <div class="col-xl-3 col-lg-4">
                    <div class="team-counter">
                        <div class="counter-box8">
                            <span class="counter-text">+</span>
                            <span class="counter-number percent-counter" data-target="250">0</span>
                        </div>
                        <span class="title">Awesome team members</span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/gopalsir.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">Director</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Gopal Giri</a></h4>
                            <span class="designation">/ Director & Co-Founder /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/bhavna.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">CEO</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Bhavna Giri</a></h4>
                            <span class="designation">/ CEO & Co-Founder /</span>
                        </div>
                    </div>
                    <div class="team-card v3">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/manish.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">Team Leader</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Manish Singh</a></h4>
                            <span class="designation">/ Software Engineer /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/khushi.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">HR</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Khushi Yadav</a></h4>
                            <span class="designation">/ Digital Marketing Head /</span>
                        </div>
                    </div>
                    <div class="team-card ">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/saurabh.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">Sr. Developer</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Saurabh Damale</a></h4>
                            <span class="designation">/ Laravel Developer /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2 v2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='javascript:void(0)'><img src="assets/images/team/shubham.webp" alt="AI Agency & Technology HTML Template"></a>
                            <span class="sub-title">Sr. Developer</span>
                            <div class="team-shap"></div>
                        </div>
                        <div class="team-content">
                            <div class="share-box">
                                <span class="share-icon fa fa-share-alt"></span>
                                <ul class="social-links">
                                    <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="name"><a href='javascript:void(0)' title>Shubham Shinde</a></h4>
                            <span class="designation">/ App Developer /</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End team-section2 -->

<!-- Company Profile Modal -->
<div class="modal fade company-profile-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Download Company Profile</h1>
                <button type="button" class="btn-close company-profile-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div
                class="modal-body register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate">
                <p class="company-profile-intro">Fill in your details and we&rsquo;ll email you the company profile.</p>
                <!-- Job Application Form -->
                <form action="send7" method="post" enctype="multipart/form-data" id="companyProfileForm">
                    <div class="company-profile-form-shell">
                        <!-- Full Name -->
                        <div class="company-profile-field text-start">
                            <label for="name" class="form-label">Full Name*</label>
                            <input type="text" class="form-control ca-two-border" name="name" id="name" required>
                            <span id="name-error" style="color: red; display: none;">Please
                                enter a valid name (letters only)</span>
                        </div>

                        <!-- Email -->
                        <div class="company-profile-field text-start">
                            <label for="email" class="form-label">Email ID*</label>
                            <input type="email" class="form-control ca-two-border" name="email" id="email" required>
                            <span id="email-error" style="color: red; display: none;">Please
                                enter a valid email address</span>
                        </div>

                        <!-- Contact Details -->
                        <div class="company-profile-field text-start">
                            <label for="phone" class="form-label">Contact Details*</label>
                            <input type="tel" class="form-control ca-two-border" name="contact" id="phone" required>
                            <span id="phone-error" style="color: red; display: none;">Please
                                enter a valid phone number (10 digits)</span>
                        </div>
                        <!-- Location -->



                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                        <div class="company-profile-captcha">
                            <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>
                        <!-- Submit Button -->
                        <div class="company-profile-actions text-start">
                            <button type="submit" class="mt-3 btn btn-outline-info company-profile-submit-btn"
                                id="companyProfileSubmitBtn" data-default-text="Download Company Profile"
                                data-loading-text="Sending...">
                                Download Company Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        const companyProfileForm = document.getElementById('companyProfileForm');
        const companyProfileSubmitBtn = document.getElementById('companyProfileSubmitBtn');

        if (!companyProfileForm || !companyProfileSubmitBtn) {
            return;
        }

        function resetCompanyProfileButton() {
            companyProfileSubmitBtn.disabled = false;
            companyProfileSubmitBtn.classList.remove('is-loading');
            companyProfileSubmitBtn.textContent = companyProfileSubmitBtn.dataset.defaultText;
        }

        companyProfileForm.addEventListener('submit', function() {
            companyProfileSubmitBtn.disabled = true;
            companyProfileSubmitBtn.classList.add('is-loading');
            companyProfileSubmitBtn.textContent = companyProfileSubmitBtn.dataset.loadingText;
        });

        window.addEventListener('pageshow', resetCompanyProfileButton);
    })();
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php include __DIR__ . '/footer.php'; ?>
