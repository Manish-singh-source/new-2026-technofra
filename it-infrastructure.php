<?php
$pageTitle = 'IT Infrastructure || Technofra Website';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        letter-spacing: 0px;
    }

    .it-infra-hero {
        position: relative;
        overflow: hidden;
        padding: 165px 0 60px;
        background:
            radial-gradient(circle at 12% 14%, rgba(46, 113, 255, 0.12) 0, rgba(46, 113, 255, 0) 18%),
            radial-gradient(circle at 88% 16%, rgba(41, 121, 255, 0.28) 0, rgba(41, 121, 255, 0) 34%),
            linear-gradient(110deg, #ffffff 0%, #f7faff 38%, #dbe9ff 62%, #0f52cf 100%);
    }

    .it-infra-hero::before,
    .it-infra-hero::after {
        content: "";
        position: absolute;
        pointer-events: none;
    }

    .it-infra-hero::before {
        inset: 0;
        background:
            radial-gradient(circle at 55% 50%, rgba(255, 255, 255, 0.88) 0, rgba(255, 255, 255, 0.1) 36%, rgba(255, 255, 255, 0) 58%);
    }

    .it-infra-hero::after {
        left: 18px;
        top: 78px;
        width: 56px;
        height: 56px;
        opacity: 0.18;
        background-image: radial-gradient(#1959d1 1.5px, transparent 1.5px);
        background-size: 10px 10px;
    }

    .it-infra-hero__row {
        position: relative;
        z-index: 1;
        align-items: center;
    }

    .it-infra-hero__content {
        max-width: 560px;
    }

    .it-infra-hero__title {
        margin: 0 0 24px;
        color: #0a1f4e;
        font-size: clamp(2.5rem, 4.8vw, 4.35rem);
        line-height: 1.04;
        font-weight: 800;
        letter-spacing: -0.05em;
    }

    .it-infra-hero__text {
        margin: 0 0 32px;
        color: #4a5f89;
        font-size: 1.15rem;
        line-height: 1.8;
        max-width: 500px;
    }

    .it-infra-hero__btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 17px 32px;
        border-radius: 14px;
        background: linear-gradient(135deg, #2d67f6 0%, #0b49cb 100%);
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 18px 40px rgba(25, 89, 209, 0.25);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .it-infra-hero__btn:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 22px 42px rgba(25, 89, 209, 0.32);
    }

    .it-infra-hero__visual {
        position: relative;
        text-align: right;
    }

    .it-infra-hero__visual::before {
        content: "";
        position: absolute;
        right: 4%;
        top: 8%;
        width: 76%;
        height: 82%;
        border-radius: 36px;
        background: linear-gradient(160deg, rgba(255, 255, 255, 0.2), rgba(9, 71, 203, 0.08));
        filter: blur(6px);
    }

    .it-infra-hero__image-wrap {
        position: relative;
        display: inline-block;
        width: min(100%, 620px);
        padding: 18px;
        border-radius: 34px;
        backdrop-filter: blur(8px);
    }

    .it-infra-hero__image {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 24px;
        object-fit: cover;
    }

    .it-infra-overview {
        position: relative;
        padding: 80px 0 80px;
        background:
            radial-gradient(circle at 12% 0%, rgba(45, 103, 246, 0.08), transparent 28%),
            radial-gradient(circle at 88% 18%, rgba(12, 73, 203, 0.12), transparent 24%),
            linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
    }



    .it-infra-overview__eyebrow {
        display: inline-block;
        margin-bottom: 16px;
        color: #2d67f6;
        font-size: 0.95rem;
        font-weight: 800;
        letter-spacing: 0.18em;
        text-transform: uppercase;
    }

    .it-infra-overview__title {
        margin: 0 0 18px;
        color: #102a63;
        font-size: clamp(2rem, 4vw, 3.7rem);
        line-height: 1.08;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .it-infra-overview__title-accent {
        color: #2d67f6;
    }

    .it-infra-overview__text {
        margin: 0 0 28px;
        color: #5a6784;
        font-size: 1.08rem;
        line-height: 1.85;
        max-width: 560px;
    }

    .it-infra-overview__stats {
        display: flex;
        align-items: stretch;
        gap: 28px;
        margin-bottom: 28px;
    }

    .it-infra-overview__stat {
        display: flex;
        align-items: center;
        gap: 18px;
        min-width: 0;
    }

    .it-infra-overview__stat-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 86px;
        height: 86px;
        border-radius: 22px;
        background: linear-gradient(180deg, #f4f8ff 0%, #e5eeff 100%);
        color: #2d67f6;
        font-size: 2.2rem;
        box-shadow: inset 0 0 0 1px rgba(45, 103, 246, 0.08);
    }

    .it-infra-overview__stat-content strong {
        display: block;
        color: #1959d1;
        font-size: clamp(2.4rem, 4vw, 4rem);
        line-height: 0.95;
        font-weight: 800;
    }

    .it-infra-overview__stat-content span {
        display: block;
        margin-top: 10px;
        color: #102a63;
        font-size: 1.2rem;
        font-weight: 700;
    }

    .it-infra-overview__stat-content p {
        margin: 8px 0 0;
        color: #697793;
        font-size: 0.98rem;
        line-height: 1.7;
        max-width: 220px;
    }

    .it-infra-overview__divider {
        width: 1px;
        background: linear-gradient(180deg, rgba(16, 42, 99, 0.04), rgba(16, 42, 99, 0.18), rgba(16, 42, 99, 0.04));
    }

    .it-infra-overview__checks {
        display: grid;
        gap: 14px;
        padding: 4px 0;
        list-style: none;
        margin: 0;
    }

    .it-infra-overview__checks li {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #4d5977;
        font-size: 1rem;
        font-weight: 600;
    }

    .it-infra-overview__checks i {
        color: #2d67f6;
        font-size: 1rem;
    }

    .it-infra-overview__btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 28px;
        border-radius: 14px;
        background: linear-gradient(135deg, #2d67f6 0%, #0b49cb 100%);
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 18px 36px rgba(25, 89, 209, 0.22);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .it-infra-overview__btn:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 22px 40px rgba(25, 89, 209, 0.28);
    }

    .it-infra-overview__visual {
        position: relative;
        height: 100%;
    }

    .it-infra-overview__visual::before {
        content: "";
        position: absolute;
        inset: 18px 22px -18px;
        border-radius: 34px;
        background: linear-gradient(180deg, rgba(45, 103, 246, 0.16), rgba(7, 36, 109, 0.08));
        filter: blur(12px);
        z-index: 0;
    }

    .it-infra-overview__image-wrap {
        position: relative;
        z-index: 1;
        overflow: hidden;
        border-radius: 28px;
        box-shadow: 0 18px 44px rgba(13, 42, 110, 0.18);
    }

    .it-infra-overview__image {
        width: 100%;
        min-height: 100%;
        display: block;
        object-fit: cover;
    }

    .it-infra-overview__cards {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 18px;
        margin-top: 26px;
    }

    .it-infra-overview__card {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 22px 20px;
        border: 1px solid rgba(16, 72, 192, 0.08);
        border-radius: 22px;
        background: #fff;
        box-shadow: 0 14px 32px rgba(9, 45, 122, 0.08);
    }

    .it-infra-overview__card-icon {
        flex: 0 0 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 58px;
        height: 58px;
        border-radius: 50%;
        background: linear-gradient(180deg, #f5f8ff 0%, #e7eeff 100%);
        color: #2d67f6;
        font-size: 1.5rem;
    }

    .it-infra-overview__card h3 {
        margin: 0 0 8px;
        color: #16326e;
        font-size: 1.25rem;
        font-weight: 700;
    }

    .it-infra-overview__card p {
        margin: 0;
        color: #64728d;
        font-size: 0.98rem;
        line-height: 1.7;
    }

    @media (max-width: 991px) {
        .it-infra-hero {
            padding: 135px 0 70px;
        }

        .it-infra-hero__content {
            max-width: 100%;
            margin-bottom: 42px;
            text-align: center;
        }

        .it-infra-hero__text {
            max-width: 100%;
        }

        .it-infra-hero__visual {
            text-align: center;
        }

        .it-infra-overview {
            padding: 24px 0 80px;
        }

        .it-infra-overview__panel {
            padding: 28px;
        }

        .it-infra-overview__visual {
            margin-top: 30px;
        }

        .it-infra-overview__stats {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .it-infra-overview__divider {
            width: 100%;
            height: 1px;
        }

        .it-infra-overview__cards {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 1024px) {

        .it-infra-overview__card,
        .it-infra-overview__stats {
            flex-direction: column;
        }

        .it-infra-overview__stats .it-infra-overview__stat-content {
            width: 100%;
        }

        .it-infra-overview__stats p {
            max-width: 100%;
        }
    }

    @media (min-width: 767px) and (max-width: 1024px) {
        .it-infra-services__image {
            width: 50%;
            transform: translateX(-50%);
            transform: translateY(-50%);
            transform: translate(50%);
        }
    }

    @media (max-width: 767px) {
        .it-infra-hero {
            padding: 118px 0 60px;
        }

        .it-infra-hero__title {
            font-size: 2.5rem;
        }

        .it-infra-hero__text {
            font-size: 1rem;
            line-height: 1.7;
        }

        .it-infra-hero__btn {
            padding: 15px 24px;
        }

        .it-infra-hero__image-wrap {
            padding: 12px;
            border-radius: 24px;
        }

        .it-infra-hero__image {
            border-radius: 18px;
        }

        .it-infra-overview {
            padding: 10px 0 65px;
        }

        .it-infra-overview__panel {
            padding: 22px 18px;
            border-radius: 24px;
        }

        .it-infra-overview__title {
            font-size: 2.35rem;
        }

        .it-infra-overview__text {
            font-size: 1rem;
        }

        .it-infra-overview__stat {
            align-items: flex-start;
        }

        .it-infra-overview__stat-icon {
            width: 72px;
            height: 72px;
            font-size: 1.9rem;
        }

        .it-infra-overview__card {
            padding: 20px 18px;
        }

        .it-infra-overview__cards {
            grid-template-columns: 1fr;
        }
    }

    .it-infra-services {
        position: relative;
        padding: 0 0 110px;
        background: linear-gradient(180deg, #f7faff 0%, #ffffff 100%);
    }

    .it-infra-services__panel {
        position: relative;
        overflow: hidden;
        padding: 68px 68px 64px;
        border-radius: 38px;
        background:
            radial-gradient(circle at 50% 58%, rgba(41, 136, 255, 0.16) 0, rgba(41, 136, 255, 0.05) 18%, rgba(8, 18, 53, 0) 36%),
            radial-gradient(circle at 100% 0%, rgba(36, 77, 255, 0.44), rgba(36, 77, 255, 0) 22%),
            radial-gradient(circle at 0% 100%, rgba(18, 54, 182, 0.38), rgba(18, 54, 182, 0) 28%),
            linear-gradient(180deg, #081236 0%, #061130 58%, #09143a 100%);
        box-shadow: 0 30px 70px rgba(6, 18, 58, 0.22);
    }

    .it-infra-services__panel::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 50% 50%, rgba(62, 153, 255, 0.12), transparent 30%),
            linear-gradient(90deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0));
        pointer-events: none;
    }

    .it-infra-services__head {
        position: relative;
        z-index: 1;
        text-align: center;
        max-width: 840px;
        margin: 0 auto 52px;
    }

    .it-infra-services__eyebrow {
        display: inline-block;
        margin-bottom: 16px;
        color: #2f85ff;
        font-size: 0.94rem;
        font-weight: 800;
        letter-spacing: 0.24em;
        text-transform: uppercase;
    }

    .it-infra-services__title {
        margin: 0 0 14px;
        color: #ffffff;
        font-size: clamp(2rem, 4vw, 3.45rem);
        line-height: 1.1;
        font-weight: 800;
        letter-spacing: -0.04em;
    }

    .it-infra-services__text {
        margin: 0;
        color: rgba(233, 241, 255, 0.82);
        font-size: 1.08rem;
        line-height: 1.8;
    }

    .it-infra-services__grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: minmax(0, 1fr) 430px minmax(0, 1fr);
        gap: 28px;
        align-items: center;
    }

    .it-infra-services__list {
        display: grid;
        gap: 0;
    }

    .it-infra-services__item {
        display: grid;
        grid-template-columns: 84px minmax(0, 1fr);
        gap: 22px;
        align-items: start;
        padding: 26px 0 22px;
        border-bottom: 1px solid rgba(164, 191, 255, 0.14);
    }

    .it-infra-services__list .it-infra-services__item:first-child {
        padding-top: 0;
    }

    .it-infra-services__list .it-infra-services__item:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }

    .it-infra-services__icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        border-radius: 18px;
        border: 1px solid rgba(110, 162, 255, 0.28);
        background: linear-gradient(180deg, rgba(21, 55, 170, 0.34), rgba(8, 24, 92, 0.3));
        box-shadow: inset 0 0 18px rgba(95, 180, 255, 0.08), 0 10px 24px rgba(1, 10, 35, 0.2);
        color: #93d8ff;
        font-size: 2rem;
    }

    .it-infra-services__item h3 {
        margin: 0 0 10px;
        color: #ffffff;
        font-size: 1.18rem;
        line-height: 1.35;
        font-weight: 700;
    }

    .it-infra-services__item p {
        margin: 0;
        color: rgba(222, 233, 255, 0.82);
        font-size: 0.99rem;
        line-height: 1.65;
        max-width: 240px;
    }

    .it-infra-services__visual {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 430px;
    }

    .it-infra-services__ring,
    .it-infra-services__ring::before,
    .it-infra-services__ring::after {
        position: absolute;
        border-radius: 50%;
        content: "";
        pointer-events: none;
    }

    .it-infra-services__ring {
        width: 360px;
        height: 360px;
        border: 1px solid rgba(74, 168, 255, 0.42);
        box-shadow: 0 0 30px rgba(53, 146, 255, 0.12), inset 0 0 40px rgba(53, 146, 255, 0.08);
    }

    .it-infra-services__ring::before {
        inset: -22px;
        border: 1px dashed rgba(53, 146, 255, 0.24);
    }

    .it-infra-services__ring::after {
        inset: -48px;
        border: 1px dotted rgba(53, 146, 255, 0.2);
    }

    .it-infra-services__dots {
        position: absolute;
        inset: 22px;
        border-radius: 50%;
        background-image: radial-gradient(rgba(53, 146, 255, 0.62) 1px, transparent 1px);
        background-size: 10px 10px;
        opacity: 0.18;
        mask-image: radial-gradient(circle at center, transparent 28%, black 40%, transparent 73%);
        -webkit-mask-image: radial-gradient(circle at center, transparent 28%, black 40%, transparent 73%);
    }

    .it-infra-services__platform,
    .it-infra-services__platform::before,
    .it-infra-services__platform::after {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        content: "";
        pointer-events: none;
    }

    .it-infra-services__platform {
        bottom: 48px;
        width: 220px;
        height: 32px;
        background: radial-gradient(circle, rgba(68, 186, 255, 0.95) 0, rgba(68, 186, 255, 0.32) 42%, rgba(68, 186, 255, 0) 74%);
        filter: blur(0.2px);
    }

    .it-infra-services__platform::before {
        bottom: -18px;
        width: 300px;
        height: 52px;
        border: 1px solid rgba(68, 186, 255, 0.28);
        box-shadow: 0 0 0 14px rgba(41, 116, 255, 0.05), 0 0 0 28px rgba(41, 116, 255, 0.035);
    }

    .it-infra-services__platform::after {
        bottom: -42px;
        width: 392px;
        height: 86px;
        border: 1px solid rgba(68, 186, 255, 0.15);
    }

    .it-infra-services__image-wrap {
        position: relative;

    }



    @media (max-width: 1199px) {
        .it-infra-services__panel {
            padding: 56px 36px 52px;
        }

        .it-infra-services__grid {
            grid-template-columns: 1fr;
            gap: 34px;
        }

        .it-infra-services__visual {
            order: -1;
            min-height: 360px;
        }

        .it-infra-services__item p {
            max-width: none;
        }
    }

    @media (max-width: 991px) {
        .it-infra-services {
            padding: 0 0 90px;
        }

        .it-infra-services__panel {
            padding: 46px 26px 42px;
            border-radius: 30px;
        }

        .it-infra-services__head {
            margin-bottom: 38px;
        }
    }

    @media (max-width: 767px) {
        .it-infra-services {
            padding: 0 0 70px;
        }

        .it-infra-services__panel {
            padding: 34px 18px 30px;
            border-radius: 24px;
        }

        .it-infra-services__title {
            font-size: 2.1rem;
        }

        .it-infra-services__text {
            font-size: 1rem;
        }

        .it-infra-services__item {
            grid-template-columns: 68px minmax(0, 1fr);
            gap: 16px;
            padding: 20px 0 18px;
        }

        .it-infra-services__icon {
            width: 64px;
            height: 64px;
            font-size: 1.55rem;
        }

        .it-infra-services__visual {
            min-height: 290px;
        }

        .it-infra-services__ring {
            width: 230px;
            height: 230px;
        }

        .it-infra-services__ring::before {
            inset: -14px;
        }

        .it-infra-services__ring::after {
            inset: -28px;
        }

        .it-infra-services__image-wrap {
            width: 180px;
            border-radius: 22px;
        }

        .it-infra-services__image {
            border-radius: 16px;
        }

        .it-infra-services__platform {
            bottom: 34px;
            width: 170px;
        }

        .it-infra-services__platform::before {
            width: 230px;
            height: 42px;
        }

        .it-infra-services__platform::after {
            width: 290px;
            height: 68px;
        }
    }

    .it-infra-strategy {
        position: relative;
        padding: 80px 0 80px;
        background:
            radial-gradient(circle at 50% 0%, rgba(45, 103, 246, 0.08), transparent 26%),
            linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
    }

    .it-infra-strategy::before,
    .it-infra-strategy::after {
        content: "";
        position: absolute;
        top: 210px;
        width: 120px;
        height: 240px;
        background-image: radial-gradient(rgba(45, 103, 246, 0.18) 1.2px, transparent 1.2px);
        background-size: 10px 10px;
        opacity: 0.65;
        pointer-events: none;
    }

    .it-infra-strategy::before {
        left: 10px;
    }

    .it-infra-strategy::after {
        right: 10px;
    }

    .it-infra-strategy__inner {
        position: relative;
        z-index: 1;
        margin: 0 auto;
    }

    .it-infra-strategy__head {
        text-align: center;
        margin-bottom: 34px;
    }

    .it-infra-strategy__badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 7px 14px;
        margin-bottom: 18px;
        border: 1px solid rgba(45, 103, 246, 0.35);
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.9);
        color: #2d67f6;
        font-size: 0.96rem;
        font-weight: 700;
        box-shadow: 0 10px 22px rgba(45, 103, 246, 0.08);
    }

    .it-infra-strategy__badge i {
        font-size: 0.9rem;
    }

    .it-infra-strategy__title {
        margin: 0 auto 16px;
        max-width: 760px;
        color: #11296b;
        font-size: clamp(2rem, 4vw, 3.6rem);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.05em;
    }

    .it-infra-strategy__title span {
        color: #2d67f6;
    }

    .it-infra-strategy__grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        overflow: hidden;
        border: 1px solid rgba(28, 72, 180, 0.1);
        border-radius: 28px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(247, 250, 255, 0.98));
        box-shadow: 0 28px 60px rgba(19, 52, 128, 0.12);
    }

    .it-infra-strategy__card {
        position: relative;
        padding: 36px 38px 30px;
        text-align: center;
    }

    .it-infra-strategy__card+.it-infra-strategy__card {
        border-left: 1px solid rgba(28, 72, 180, 0.08);
    }

    .it-infra-strategy__card--active {
        background: linear-gradient(180deg, #eef4ff 0%, #e8f0ff 100%);
    }

    .it-infra-strategy__visual {
        width: 100%;
        max-width: 250px;
        margin: 0 auto 12px;
        display: block;
    }

    .it-infra-strategy__step {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        margin: 0 auto 16px;
        border-radius: 50%;
        background: linear-gradient(180deg, #2f78ff 0%, #1a58df 100%);
        color: #fff;
        font-size: 1.05rem;
        font-weight: 800;
        box-shadow: 0 12px 24px rgba(45, 103, 246, 0.2);
    }

    .it-infra-strategy__step::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 100%;
        width: 1px;
        height: 26px;
        background: linear-gradient(180deg, rgba(45, 103, 246, 0.4), rgba(45, 103, 246, 0));
        transform: translateX(-50%);
    }

    .it-infra-strategy__card h3 {
        margin: 0 0 12px;
        color: #173278;
        font-size: 1.2rem;
        line-height: 1.35;
        font-weight: 800;
    }

    .it-infra-strategy__line {
        width: 42px;
        height: 3px;
        margin: 0 auto 16px;
        border-radius: 999px;
        background: #2d67f6;
    }

    .it-infra-strategy__card p {
        margin: 0 auto;
        max-width: 250px;
        color: #53627f;
        font-size: 1rem;
        line-height: 1.9;
        font-weight: 500;
    }

    @media (max-width: 991px) {
        .it-infra-strategy {
            padding: 85px 0 85px;
        }

        .it-infra-strategy::before,
        .it-infra-strategy::after {
            display: none;
        }

        .it-infra-strategy__grid {
            grid-template-columns: 1fr;
        }

        .it-infra-strategy__card+.it-infra-strategy__card {
            border-left: 0;
            border-top: 1px solid rgba(28, 72, 180, 0.08);
        }
    }

    @media (max-width: 767px) {
        .it-infra-strategy {
            padding: 70px 0 70px;
        }

        .it-infra-strategy__title {
            font-size: 2.2rem;
        }

        .it-infra-strategy__card {
            padding: 28px 18px 24px;
        }

        .it-infra-strategy__visual {
            max-width: 210px;
        }
    }
</style>

<section class="it-infra-hero">
    <div class="container">
        <div class="row it-infra-hero__row">
            <div class="col-lg-5">
                <div class="it-infra-hero__content">
                    <h1 class="it-infra-hero__title">IT Infrastructure Services &amp; Solutions</h1>
                    <p class="it-infra-hero__text">
                        Secure, scalable, and reliable technology solutions for modern businesses with cloud readiness,
                        network support, and infrastructure management.
                    </p>
                    <a href="contact.php" class="it-infra-hero__btn">
                        <span>Contact Us</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="it-infra-hero__visual">
                    <div class="it-infra-hero__image-wrap">
                        <img src="assets/images/it-infrastructure/banner.png" alt="IT infrastructure hero visual" class="it-infra-hero__image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="it-infra-overview">
    <div class="container">
        <div class="it-infra-overview__panel">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="it-infra-overview__eyebrow">Welcome To Technofra</span>
                    <h2 class="it-infra-overview__title">
                        Powering Businesses with Reliable IT Infrastructure
                        <span class="it-infra-overview__title-accent">Solutions</span>
                    </h2>
                    <p class="it-infra-overview__text">
                        We design, deploy, and manage secure and scalable IT infrastructure that keeps your business
                        running smoothly, efficiently, and future-ready.
                    </p>

                    <div class="it-infra-overview__stats">
                        <div class="it-infra-overview__stat">
                            <div class="it-infra-overview__stat-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="it-infra-overview__stat-content">
                                <strong>14+</strong>
                                <span>Years of Experience</span>
                                <p>Delivering robust IT infrastructure solutions across industries.</p>
                            </div>
                        </div>

                        <div class="it-infra-overview__divider"></div>

                        <ul class="it-infra-overview__checks">
                            <li><i class="fas fa-check-circle"></i> Secure &amp; Scalable Infrastructure</li>
                            <li><i class="fas fa-check-circle"></i> High Performance &amp; Reliability</li>
                            <li><i class="fas fa-check-circle"></i> Proactive Monitoring &amp; Support</li>
                            <li><i class="fas fa-check-circle"></i> Cost-Effective IT Solutions</li>
                        </ul>
                    </div>

                    <a href="contact.php" class="it-infra-overview__btn">
                        <span>Enquiry Now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="it-infra-overview__visual">
                        <div class="it-infra-overview__image-wrap">
                            <img src="assets/images/it-infrastructure/about.png" alt="Reliable IT infrastructure solutions" class="it-infra-overview__image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="it-infra-overview__cards">
                <div class="it-infra-overview__card">
                    <div class="it-infra-overview__card-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div>
                        <h3>Cloud Infrastructure</h3>
                        <p>Build and scale with secure, flexible cloud solutions.</p>
                    </div>
                </div>

                <div class="it-infra-overview__card">
                    <div class="it-infra-overview__card-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div>
                        <h3>Network Solutions</h3>
                        <p>High-performance networks designed for reliability.</p>
                    </div>
                </div>

                <div class="it-infra-overview__card">
                    <div class="it-infra-overview__card-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h3>Data Security</h3>
                        <p>Protect your data with advanced security and compliance.</p>
                    </div>
                </div>

                <div class="it-infra-overview__card">
                    <div class="it-infra-overview__card-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div>
                        <h3>IT Support &amp; Management</h3>
                        <p>24/7 monitoring and support to keep your systems running.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="it-infra-services">
    <div class="container">
        <div class="it-infra-services__panel">
            <div class="it-infra-services__head">
                <span class="it-infra-services__eyebrow">Why Choose Us</span>
                <h2 class="it-infra-services__title">Reliable IT Infrastructure Services</h2>
                <p class="it-infra-services__text">End-to-end solutions that keep your business secure, connected, and scalable.</p>
            </div>

            <div class="it-infra-services__grid">
                <div class="it-infra-services__list">
                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-network-wired"></i></div>
                        <div>
                            <h3>Network Infrastructure</h3>
                            <p>Design and optimize stable enterprise networks.</p>
                        </div>
                    </div>

                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-cloud"></i></div>
                        <div>
                            <h3>Cloud Services</h3>
                            <p>Flexible cloud solutions for growth and agility.</p>
                        </div>
                    </div>

                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-server"></i></div>
                        <div>
                            <h3>Server Management</h3>
                            <p>Monitor and maintain high-performance servers.</p>
                        </div>
                    </div>
                </div>

                <div class="it-infra-services__visual">
                    <div class="it-infra-services__dots"></div>
                    <div class="it-infra-services__ring"></div>
                    <div class="it-infra-services__platform"></div>
                    <div class="it-infra-services__image-wrap">
                        <img src="assets/images/it-infrastructure/why.png" alt="Reliable IT infrastructure services" class="it-infra-services__image">
                    </div>
                </div>

                <div class="it-infra-services__list">
                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-database"></i></div>
                        <div>
                            <h3>Data Storage and Backup</h3>
                            <p>Protect critical data with secure backup systems.</p>
                        </div>
                    </div>

                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h3>Security Solutions</h3>
                            <p>Strengthen infrastructure with advanced protection.</p>
                        </div>
                    </div>

                    <div class="it-infra-services__item">
                        <div class="it-infra-services__icon"><i class="fas fa-user-cog"></i></div>
                        <div>
                            <h3>IT Consulting and Strategy</h3>
                            <p>Align technology planning with business goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="it-infra-strategy">
    <div class="container">
        <div class="it-infra-strategy__inner">
            <div class="it-infra-strategy__head">
                <span class="it-infra-strategy__badge">
                    <i class="fas fa-check-circle"></i>
                    <span>Strategy</span>
                </span>
                <h2 class="it-infra-strategy__title">
                    Empowering Businesses with Reliable
                    and Scalable <span>IT Infrastructure</span>
                </h2>
            </div>

            <div class="it-infra-strategy__grid">
                <div class="it-infra-strategy__card">
                    <img src="assets/images/it-infrastructure/ii1.png" alt="Infrastructure planning" class="it-infra-strategy__visual">
                    <div class="it-infra-strategy__step">01</div>
                    <h3>Infrastructure Planning</h3>
                    <div class="it-infra-strategy__line"></div>
                    <p>We assess your business needs and design a robust IT infrastructure strategy that ensures performance, security, and scalability.</p>
                </div>

                <div class="it-infra-strategy__card it-infra-strategy__card--active">
                    <img src="assets/images/it-infrastructure/ii2.png" alt="Deployment and integration" class="it-infra-strategy__visual">
                    <div class="it-infra-strategy__step">02</div>
                    <h3>Deployment &amp; Integration</h3>
                    <div class="it-infra-strategy__line"></div>
                    <p>We deploy and integrate reliable infrastructure solutions including networks, servers, cloud, and security to keep your operations running smoothly.</p>
                </div>

                <div class="it-infra-strategy__card">
                    <img src="assets/images/it-infrastructure/ii3.png" alt="Management and optimization" class="it-infra-strategy__visual">
                    <div class="it-infra-strategy__step">03</div>
                    <h3>Management &amp; Optimization</h3>
                    <div class="it-infra-strategy__line"></div>
                    <p>We continuously monitor, manage, and optimize your IT environment to ensure reliability, security, and maximum efficiency.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>