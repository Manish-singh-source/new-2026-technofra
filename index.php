<?php
session_start();
$pageTitle = 'Technofra - Expert Web Design, Development & Digital Solutions';
$metaKeywords = 'Website development company in Mumbai, Digital marketing agency in Mumbai, Web design company Mumbai, Website development company in Mumbai for business growth, Digital marketing agency in Mumbai for lead generation, Digital marketing company in Kandivali, Website development company in Kandivali';
$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);
include __DIR__ . '/header.php'; ?>
<style>
    /* Reference-style About section */
    .mark-about-section { padding: 80px 0 80px; background: #fff; color: #111; }
    .mark-about-section .mark-about-kicker { display: inline-block; color: #036; font-size: 13px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; }
    .mark-about-section .mark-about-main { margin: 0 60px 40px 0; color: #111; font-size: 55px; font-weight: 400; line-height: 60px; letter-spacing: -.05em; display: block; }
    .mark-about-section .mark-about-main em { color: #036; font-style: normal; }
    .mark-about-section .mark-about-image { width: 100%; max-width: 450px; height: 540px; overflow: hidden; }
    .mark-about-section .mark-about-image img { width: 100%; height: 100%; object-fit: cover; object-position: center; }
    .mark-about-section .mark-about-details { margin: 25px 0 0 60px; }
    .mark-about-section .mark-about-description { margin: 0 0 33px; padding-bottom: 33px; border-bottom: 1px solid #dedede; color: #3c3c3c; font-size: 17px; line-height: 1.65; }
    .mark-about-section .mark-about-stat { margin-bottom: 30px; }
    .mark-about-section .mark-about-stat strong { display: block; margin-bottom: 17px; color: #111; font-size: clamp(45px, 5vw, 70px); font-weight: 400; letter-spacing: -.04em; line-height: 1; }
    .mark-about-section .mark-about-stat p { margin: 0; color: #3c3c3c; font-size: 16px; line-height: 1.33; }
    @media (max-width: 1199px) { .mark-about-section .mark-about-main, .mark-about-section .mark-about-details { margin-left: 0; } .mark-about-section .mark-about-main { margin-right: 0; } }
    @media (max-width: 991px) { .mark-about-section { padding: 40px 0; } .mark-about-section .mark-about-kicker { margin-bottom: 28px; } .mark-about-section .mark-about-image { max-width: 100%; height: auto; aspect-ratio: 5 / 6; } .mark-about-section .mark-about-details { margin-top: 35px; } }
    @media (max-width: 1201px) { .mark-about-section .mark-about-main { font-size: 45px; line-height: 50px; } }
    @media (max-width: 1025px) { .mark-about-section .mark-about-main { font-size: 50px; line-height: 55px; } }
    @media (max-width: 769px) { .mark-about-section .mark-about-main { font-size: 35px; line-height: 40px; } }
    @media (max-width: 577px) { .mark-about-section .mark-about-main { font-size: 32px; line-height: 1.1em; } .mark-about-section .mark-about-description { font-size: 16px; } }

    /* Technofra service showcase */
    .technofra-services-showcase { position: relative; overflow: hidden; padding: 86px 0 68px; background: #050505; color: #fff; isolation: isolate; }
    .technofra-services-showcase::before { content: ''; position: absolute; z-index: -1; inset: 0; background: linear-gradient(125deg, transparent 0 24%, rgba(255,255,255,.045) 24.1% 34%, transparent 34.1% 54%, rgba(255,255,255,.035) 54.1% 65%, transparent 65.1%), linear-gradient(118deg, #050505 0 43%, #101010 43.1% 54%, #070707 54.1% 100%); }
    .technofra-services-showcase .services-intro { display: grid; grid-template-columns: 260px minmax(0,1fr) auto; align-items: center; gap: 26px; margin-bottom: 30px; }
    .technofra-services-showcase .services-intro-image { height: 158px; overflow: hidden; border-radius: 3px; }
    .technofra-services-showcase .services-intro-image img { width: 100%; height: 100%; object-fit: cover; }
    .technofra-services-showcase .services-eyebrow { display: flex; align-items: center; gap: 9px; margin: 0 0 10px; color: #fff; font-size: 13px; }
    .technofra-services-showcase .services-eyebrow i { color: #09c9ff; font-size: 17px; }
    .technofra-services-showcase .services-heading { margin: 0 0 10px; color: #fff; font-size: clamp(34px, 4vw, 55px); font-weight: 400; line-height: 1.08; letter-spacing: -.05em; }
    .technofra-services-showcase .services-copy { max-width: 520px; margin: 0; color: rgba(255,255,255,.68); font-size: 15px; line-height: 1.55; }
    .technofra-services-showcase .services-controls { display: flex; gap: 10px; }
    .technofra-services-showcase .services-control { display: grid; width: 41px; height: 41px; place-items: center; padding: 0; border: 1px dashed #08cfff; border-radius: 50%; background: transparent; color: #08cfff; transition: .25s ease; }
    .technofra-services-showcase .services-control:hover, .technofra-services-showcase .services-control:focus-visible { border-style: solid; background: #08cfff; color: #041116; outline: none; }
    .technofra-services-showcase .services-content { display: grid; grid-template-columns: 190px minmax(0,1fr); gap: 24px; align-items: stretch; }
    .technofra-services-showcase .services-stat { padding-top: 22px; }
    .technofra-services-showcase .services-stat-icon { color: #08cfff; font-size: 28px; line-height: 1; }
    .technofra-services-showcase .services-stat-number { display: block; margin-top: 10px; color: #14c8ff; font-size: clamp(44px, 4vw, 62px); font-weight: 500; line-height: 1; letter-spacing: -.06em; }
    .technofra-services-showcase .services-stat-title { margin: 10px 0 7px; color: #fff; font-size: 16px; font-weight: 600; }
    .technofra-services-showcase .services-stat-copy { margin: 0; color: rgba(255,255,255,.62); font-size: 12px; line-height: 1.55; }
    .technofra-services-showcase .technofra-services-cards { display: flex; gap: 12px; overflow-x: auto; padding-bottom: 8px; scrollbar-width: none; scroll-behavior: smooth; scroll-snap-type: x mandatory; }
    .technofra-services-showcase .technofra-services-cards::-webkit-scrollbar { display: none; }
    .technofra-services-showcase .technofra-service-card { flex: 0 0 calc((100% - 24px) / 3); min-height: 244px; padding: 20px 18px; border: 1px solid rgba(255,255,255,.12); border-radius: 7px; background: linear-gradient(145deg, rgba(32,32,32,.78), rgba(12,12,12,.87)); scroll-snap-align: start; }
    .technofra-services-showcase .service-card-icon { display: grid; width: 54px; height: 54px; place-items: center; margin-bottom: 17px; border: 1px solid rgba(255,255,255,.2); border-radius: 50%; background: radial-gradient(circle at 36% 30%, rgba(255,255,255,.16), rgba(255,255,255,.025) 55%); color: #08cfff; font-size: 23px; }
    .technofra-services-showcase .technofra-service-card h3 { margin: 0 0 10px; color: #fff; font-size: 17px; font-weight: 500; line-height: 1.25; }
    .technofra-services-showcase .technofra-service-card p { min-height: 58px; margin: 0 0 15px; color: rgba(255,255,255,.66); font-size: 13px; line-height: 1.48; }
    .technofra-services-showcase .service-card-link { display: inline-flex; align-items: center; justify-content: space-between; width: 132px; padding: 7px 13px 7px 17px; border: 1px solid #08cfff; border-radius: 999px; color: #08cfff; font-size: 12px; text-decoration: none; transition: .25s ease; }
    .technofra-services-showcase .service-card-link:hover { background: #08cfff; color: #041116; }
    @media (max-width: 991px) { .technofra-services-showcase .services-intro { grid-template-columns: 210px 1fr; } .technofra-services-showcase .services-controls { grid-column: 2; } .technofra-services-showcase .services-content { grid-template-columns: 1fr; } .technofra-services-showcase .services-stat { display: grid; grid-template-columns: auto auto 1fr; align-items: center; column-gap: 14px; padding-top: 0; } .technofra-services-showcase .services-stat-number { margin: 0; } .technofra-services-showcase .services-stat-title { margin: 0; } .technofra-services-showcase .services-stat-copy { grid-column: 3; } }
    @media (max-width: 991px) { .technofra-services-showcase .technofra-service-card { flex-basis: calc((100% - 12px) / 2); } }
    @media (max-width: 767px) { .studio-showcase-thumb:has(.showcase-video-duplicate), .studio-showcase-thumb:has(.showcase-fp2-duplicate) { display: none; } .showcase-mobile-duplicate { display: none !important; } .technofra-services-showcase { padding: 65px 0 52px; } .technofra-services-showcase .services-intro { grid-template-columns: 1fr; gap: 20px; } .technofra-services-showcase .services-intro-image { max-width: 320px; height: 180px; } .technofra-services-showcase .services-controls { grid-column: auto; } .technofra-services-showcase .technofra-service-card { flex-basis: min(82vw, 320px); } }
    @media (max-width: 480px) { .technofra-services-showcase .services-stat { grid-template-columns: auto 1fr; } .technofra-services-showcase .services-stat-copy { grid-column: 1 / -1; } }
    .creative-banner-sec {
        position: relative;
        overflow: hidden;
        padding: 78px 0;
        background: linear-gradient(90deg, rgba(5, 12, 18, 0.92) 0%, rgb(8 22 31 / 17%) 34%, rgba(12, 44, 57, 0.58) 100%), radial-gradient(circle at 68% 26%, rgba(255, 244, 214, 0.28), transparent 26%), url(./assets/images/new/bannerhome.png) center center / cover no-repeat fixed;
    }

    .creative-banner-sec::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 74% 30%, rgba(255, 255, 255, 0.22), transparent 0 38%),
            radial-gradient(circle at 82% 54%, rgba(255, 255, 255, 0.14), transparent 0 28%),
            linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
        pointer-events: none;
    }

    .creative-banner-wrap {
        position: relative;
        z-index: 1;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 34px;
    }

    .creative-banner-top {
        display: flex;
        justify-content: flex-end;
    }

    .creative-banner-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        border: 1px solid rgba(255, 255, 255, 0.42);
        border-radius: 999px;
        color: #fff;
        font-size: 16px;
        line-height: 1;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
    }

    .creative-banner-content {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 40px;
    }

    .creative-banner-copy {
        max-width: 560px;
    }

    .creative-banner-title {
        margin: 0 18px 8px 0;
        color: #fff;
        font-size: clamp(28px, 4vw, 40px);
        line-height: 0.95;
        letter-spacing: -0.05em;
    }

    .creative-banner-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 18px;
        margin-top: 28px;
    }

    .creative-banner-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 22px;
        border: 1px solid rgba(255, 255, 255, 0.22);
        background: rgba(255, 255, 255, 0.16);
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .creative-banner-btn:hover {
        background: rgba(255, 255, 255, 0.24);
        color: #fff;
    }

    .creative-banner-time {
        color: rgba(255, 255, 255, 0.88);
        font-size: 16px;
    }

    .creative-banner-text {
        max-width: 430px;
        margin: 0 18px 8px 0;
        color: rgba(255, 255, 255, 0.94);
        font-size: 19px;
        line-height: 1.45;
        text-align: right;
    }

    @media (max-width: 991px) {
        /* Technofra service showcase */
    .technofra-services-showcase { position: relative; overflow: hidden; padding: 86px 0 68px; background: #050505; color: #fff; isolation: isolate; }
    .technofra-services-showcase::before { content: ''; position: absolute; z-index: -1; inset: 0; background: linear-gradient(125deg, transparent 0 24%, rgba(255,255,255,.045) 24.1% 34%, transparent 34.1% 54%, rgba(255,255,255,.035) 54.1% 65%, transparent 65.1%), linear-gradient(118deg, #050505 0 43%, #101010 43.1% 54%, #070707 54.1% 100%); }
    .technofra-services-showcase .services-intro { display: grid; grid-template-columns: 260px minmax(0,1fr) auto; align-items: center; gap: 26px; margin-bottom: 20px; }
    .technofra-services-showcase .services-intro-image { height: 158px; overflow: hidden; border-radius: 3px; }
    .technofra-services-showcase .services-intro-image img { width: 100%; height: 100%; object-fit: cover; }
    .technofra-services-showcase .services-eyebrow { display: flex; align-items: center; gap: 9px; margin: 0 0 10px; color: #fff; font-size: 13px; }
    .technofra-services-showcase .services-eyebrow i { color: #09c9ff; font-size: 17px; }
    .technofra-services-showcase .services-heading { margin: 0 0 10px; color: #fff; font-size: clamp(34px, 4vw, 55px); font-weight: 400; line-height: 1.08; letter-spacing: -.05em; }
    .technofra-services-showcase .services-copy { max-width: 520px; margin: 0; color: rgba(255,255,255,.68); font-size: 15px; line-height: 1.55; }
    .technofra-services-showcase .services-controls { display: flex; gap: 10px; }
    .technofra-services-showcase .services-control { display: grid; width: 41px; height: 41px; place-items: center; padding: 0; border: 1px dashed #08cfff; border-radius: 50%; background: transparent; color: #08cfff; transition: .25s ease; }
    .technofra-services-showcase .services-control:hover, .technofra-services-showcase .services-control:focus-visible { border-style: solid; background: #08cfff; color: #041116; outline: none; }
    .technofra-services-showcase .services-content { display: grid; grid-template-columns: 190px minmax(0,1fr); gap: 24px; align-items: stretch; }
    .technofra-services-showcase .services-stat { padding-top: 22px; }
    .technofra-services-showcase .services-stat-icon { color: #08cfff; font-size: 28px; line-height: 1; }
    .technofra-services-showcase .services-stat-number { display: block; margin-top: 10px; color: #14c8ff; font-size: clamp(44px, 4vw, 62px); font-weight: 500; line-height: 1; letter-spacing: -.06em; }
    .technofra-services-showcase .services-stat-title { margin: 10px 0 7px; color: #fff; font-size: 16px; font-weight: 600; }
    .technofra-services-showcase .services-stat-copy { margin: 0; color: rgba(255,255,255,.62); font-size: 12px; line-height: 1.55; }
    .technofra-services-showcase .technofra-services-cards { display: flex; gap: 12px; overflow-x: auto; padding-bottom: 8px; scrollbar-width: none; scroll-behavior: smooth; scroll-snap-type: x mandatory; }
    .technofra-services-showcase .technofra-services-cards::-webkit-scrollbar { display: none; }
    .technofra-services-showcase .technofra-service-card { flex: 0 0 calc((100% - 24px) / 3); min-height: 244px; padding: 20px 18px; border: 1px solid rgba(255,255,255,.12); border-radius: 7px; background: linear-gradient(145deg, rgba(32,32,32,.78), rgba(12,12,12,.87)); scroll-snap-align: start; }
    .technofra-services-showcase .service-card-icon { display: grid; width: 54px; height: 54px; place-items: center; margin-bottom: 17px; border: 1px solid rgba(255,255,255,.2); border-radius: 50%; background: radial-gradient(circle at 36% 30%, rgba(255,255,255,.16), rgba(255,255,255,.025) 55%); color: #08cfff; font-size: 23px; }
    .technofra-services-showcase .technofra-service-card h3 { margin: 0 0 10px; color: #fff; font-size: 17px; font-weight: 500; line-height: 1.25; }
    .technofra-services-showcase .technofra-service-card p { min-height: 58px; margin: 0 0 15px; color: rgba(255,255,255,.66); font-size: 13px; line-height: 1.48; }
    .technofra-services-showcase .service-card-link { display: inline-flex; align-items: center; justify-content: space-between; width: 132px; padding: 7px 13px 7px 17px; border: 1px solid #08cfff; border-radius: 999px; color: #08cfff; font-size: 12px; text-decoration: none; transition: .25s ease; }
    .technofra-services-showcase .service-card-link:hover { background: #08cfff; color: #041116; }
    @media (max-width: 991px) { .technofra-services-showcase .services-intro { grid-template-columns: 210px 1fr; } .technofra-services-showcase .services-controls { grid-column: 2; } .technofra-services-showcase .services-content { grid-template-columns: 1fr; } .technofra-services-showcase .services-stat { display: grid; grid-template-columns: auto auto 1fr; align-items: center; column-gap: 14px; padding-top: 0; } .technofra-services-showcase .services-stat-number { margin: 0; } .technofra-services-showcase .services-stat-title { margin: 0; } .technofra-services-showcase .services-stat-copy { grid-column: 3; } }
    @media (max-width: 991px) { .technofra-services-showcase .technofra-service-card { flex-basis: calc((100% - 12px) / 2); } }
    @media (max-width: 767px) { .technofra-services-showcase { padding: 65px 0 52px; } .technofra-services-showcase .services-intro { grid-template-columns: 1fr; gap: 20px; } .technofra-services-showcase .services-intro-image { max-width: 320px; height: 180px; } .technofra-services-showcase .services-controls { grid-column: auto; } .technofra-services-showcase .technofra-service-card { flex-basis: min(82vw, 320px); } }
    @media (max-width: 480px) { .technofra-services-showcase .services-stat { grid-template-columns: auto 1fr; } .technofra-services-showcase .services-stat-copy { grid-column: 1 / -1; } }
    .creative-banner-sec {
            padding: 60px 0;
            background-attachment: scroll;
        }

        .creative-banner-top {
            display: flex;
            justify-content: center;
        }

        .creative-banner-wrap {
            min-height: auto;
            gap: 40px;
        }

        .creative-banner-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .creative-banner-text {
            max-width: 100%;
            text-align: left;
            font-size: 22px;
        }
    }

    @media (max-width: 768px) {
        /* Technofra service showcase */
    .technofra-services-showcase { position: relative; overflow: hidden; padding: 86px 0 68px; background: #050505; color: #fff; isolation: isolate; }
    .technofra-services-showcase::before { content: ''; position: absolute; z-index: -1; inset: 0; background: linear-gradient(125deg, transparent 0 24%, rgba(255,255,255,.045) 24.1% 34%, transparent 34.1% 54%, rgba(255,255,255,.035) 54.1% 65%, transparent 65.1%), linear-gradient(118deg, #050505 0 43%, #101010 43.1% 54%, #070707 54.1% 100%); }
    .technofra-services-showcase .services-intro { display: grid; grid-template-columns: 260px minmax(0,1fr) auto; align-items: center; gap: 26px; margin-bottom: 20px; }
    .technofra-services-showcase .services-intro-image { height: 158px; overflow: hidden; border-radius: 3px; }
    .technofra-services-showcase .services-intro-image img { width: 100%; height: 100%; object-fit: cover; }
    .technofra-services-showcase .services-eyebrow { display: flex; align-items: center; gap: 9px; margin: 0 0 10px; color: #fff; font-size: 13px; }
    .technofra-services-showcase .services-eyebrow i { color: #09c9ff; font-size: 17px; }
    .technofra-services-showcase .services-heading { margin: 0 0 10px; color: #fff; font-size: clamp(34px, 4vw, 55px); font-weight: 400; line-height: 1.08; letter-spacing: -.05em; }
    .technofra-services-showcase .services-copy { max-width: 520px; margin: 0; color: rgba(255,255,255,.68); font-size: 15px; line-height: 1.55; }
    .technofra-services-showcase .services-controls { display: flex; gap: 10px; }
    .technofra-services-showcase .services-control { display: grid; width: 41px; height: 41px; place-items: center; padding: 0; border: 1px dashed #08cfff; border-radius: 50%; background: transparent; color: #08cfff; transition: .25s ease; }
    .technofra-services-showcase .services-control:hover, .technofra-services-showcase .services-control:focus-visible { border-style: solid; background: #08cfff; color: #041116; outline: none; }
    .technofra-services-showcase .services-content { display: grid; grid-template-columns: 190px minmax(0,1fr); gap: 24px; align-items: stretch; }
    .technofra-services-showcase .services-stat { padding-top: 22px; }
    .technofra-services-showcase .services-stat-icon { color: #08cfff; font-size: 28px; line-height: 1; }
    .technofra-services-showcase .services-stat-number { display: block; margin-top: 10px; color: #14c8ff; font-size: clamp(44px, 4vw, 62px); font-weight: 500; line-height: 1; letter-spacing: -.06em; }
    .technofra-services-showcase .services-stat-title { margin: 10px 0 7px; color: #fff; font-size: 16px; font-weight: 600; }
    .technofra-services-showcase .services-stat-copy { margin: 0; color: rgba(255,255,255,.62); font-size: 12px; line-height: 1.55; }
    .technofra-services-showcase .technofra-services-cards { display: flex; gap: 12px; overflow-x: auto; padding-bottom: 8px; scrollbar-width: none; scroll-behavior: smooth; scroll-snap-type: x mandatory; }
    .technofra-services-showcase .technofra-services-cards::-webkit-scrollbar { display: none; }
    .technofra-services-showcase .technofra-service-card { flex: 0 0 calc((100% - 24px) / 3); min-height: 244px; padding: 20px 18px; border: 1px solid rgba(255,255,255,.12); border-radius: 7px; background: linear-gradient(145deg, rgba(32,32,32,.78), rgba(12,12,12,.87)); scroll-snap-align: start; }
    .technofra-services-showcase .service-card-icon { display: grid; width: 54px; height: 54px; place-items: center; margin-bottom: 17px; border: 1px solid rgba(255,255,255,.2); border-radius: 50%; background: radial-gradient(circle at 36% 30%, rgba(255,255,255,.16), rgba(255,255,255,.025) 55%); color: #08cfff; font-size: 23px; }
    .technofra-services-showcase .technofra-service-card h3 { margin: 0 0 10px; color: #fff; font-size: 17px; font-weight: 500; line-height: 1.25; }
    .technofra-services-showcase .technofra-service-card p { min-height: 58px; margin: 0 0 15px; color: rgba(255,255,255,.66); font-size: 13px; line-height: 1.48; }
    .technofra-services-showcase .service-card-link { display: inline-flex; align-items: center; justify-content: space-between; width: 132px; padding: 7px 13px 7px 17px; border: 1px solid #08cfff; border-radius: 999px; color: #08cfff; font-size: 12px; text-decoration: none; transition: .25s ease; }
    .technofra-services-showcase .service-card-link:hover { background: #08cfff; color: #041116; }
    @media (max-width: 991px) { .technofra-services-showcase .services-intro { grid-template-columns: 210px 1fr; } .technofra-services-showcase .services-controls { grid-column: 2; } .technofra-services-showcase .services-content { grid-template-columns: 1fr; } .technofra-services-showcase .services-stat { display: grid; grid-template-columns: auto auto 1fr; align-items: center; column-gap: 14px; padding-top: 0; } .technofra-services-showcase .services-stat-number { margin: 0; } .technofra-services-showcase .services-stat-title { margin: 0; } .technofra-services-showcase .services-stat-copy { grid-column: 3; } }
    @media (max-width: 991px) { .technofra-services-showcase .technofra-service-card { flex-basis: calc((100% - 12px) / 2); } }
    @media (max-width: 767px) { .technofra-services-showcase { padding: 65px 0 52px; } .technofra-services-showcase .services-intro { grid-template-columns: 1fr; gap: 20px; } .technofra-services-showcase .services-intro-image { max-width: 320px; height: 180px; } .technofra-services-showcase .services-controls { grid-column: auto; } .technofra-services-showcase .technofra-service-card { flex-basis: min(82vw, 320px); } }
    @media (max-width: 480px) { .technofra-services-showcase .services-stat { grid-template-columns: auto 1fr; } .technofra-services-showcase .services-stat-copy { grid-column: 1 / -1; } }
    .creative-banner-sec {
            padding: 60px 0;
        }

        .creative-banner-badge {
            font-size: 14px;
            padding: 9px 16px;
        }

        .creative-banner-title {
            font-size: clamp(36px, 8vw, 52px);
        }

        .creative-banner-actions {
            align-items: flex-start;
            gap: 14px;
        }

        .creative-banner-btn {
            padding: 14px 20px;
        }

        .creative-banner-time {
            font-size: 16px;
        }

        .creative-banner-text {
            font-size: 16px;
            line-height: 1.5;
        }

        .mobile-view-off {
            display: none;
        }

        .feature-sec7,
        .industries-sec {
            padding-top: 40px;
        }
    }

    @media (max-width: 430px) {
        .ser-card3 .ser-content {
            top: 40px;
        }

        .calendar-head {
            flex-direction: column-reverse;
        }
    }

    .eep-status-alert {
        max-width: 1180px;
        margin: 24px auto 0;
        padding: 14px 18px;
        border-radius: 14px;
        font-size: 15px;
        line-height: 1.5
    }

    .eep-status-alert.success {
        background: #eaf8ef;
        border: 1px solid #b8e2c3;
        color: #146c2e
    }

    .eep-status-alert.error {
        background: #fff1f1;
        border: 1px solid #f0b9b9;
        color: #9c1d1d
    }

    .eep-calendar-day[disabled],
    .eep-time-option[disabled] {
        opacity: .35;
        cursor: not-allowed;
        pointer-events: none
    }

    .eep-time-option[disabled] {
        text-decoration: line-through
    }

    .eep-hero {
        padding-top: 24px
    }

    .eep-container {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(320px, .9fr);
        gap: 30px;
        align-items: center
    }

    .eep-contact-wrap {
        width: 100%
    }

    .eep-calendar-card {
        padding: 32px;
        border-radius: 28px;
        background: #fff;
        border: 1px solid rgba(15, 23, 42, .08);
        box-shadow: 0 24px 60px rgba(15, 23, 42, .08)
    }

    .eep-calendar-title-row {
        display: inline-flex;
        align-items: center;
        gap: 14px
    }

    .eep-calendar-icon {
        font-size: 38px;
        color: #003366
    }

    .eep-calendar-title {
        margin: 0;
        font-size: 34px;
        line-height: 1.1
    }

    .eep-calendar-sub {
        margin: 0;
        color: #475569;
        line-height: 1.75
    }

    .eep-calendar-box {
        margin-top: 22px;
        padding: 22px;
        border-radius: 24px;
        background: linear-gradient(180deg, #f7fbff 0%, #fff 100%);
        border: 1px solid rgba(15, 23, 42, .06)
    }

    .eep-calendar-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 18px
    }

    .eep-cal-btn {
        width: 42px;
        height: 42px;
        border: 0;
        border-radius: 50%;
        background: #003366;
        color: #fff;
        font-size: 22px
    }

    .eep-month-label {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a
    }

    .eep-calendar-week,
    .eep-calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 10px
    }

    .eep-calendar-week {
        margin-bottom: 12px
    }

    .eep-calendar-week span {
        font-size: 12px;
        font-weight: 700;
        color: #64748b;
        text-align: center;
        text-transform: uppercase
    }

    .eep-calendar-empty {
        height: 46px
    }

    .eep-calendar-day {
        height: 46px;
        border: 1px solid rgba(15, 23, 42, .08);
        border-radius: 14px;
        background: #fff;
        color: #0f172a;
        font-weight: 700
    }

    .eep-calendar-day.eep-is-today {
        border-color: #003366
    }

    .eep-calendar-day.eep-is-selected {
        background: #003366;
        color: #fff
    }

    .eep-calendar-info {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-top: 18px
    }

    .eep-selected-date,
    .eep-time-picker-wrap {
        flex: 1
    }

    .eep-calendar-actions-inline {
        display: flex;
        align-items: center;
        justify-content: center
    }

    .eep-selected-date,
    .eep-time-trigger {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding: 14px 16px;
        border-radius: 16px;
        border: 1px solid rgba(15, 23, 42, .08);
        background: #fff;
        color: #0f172a
    }

    .eep-time-trigger.disabled {
        opacity: .55;
        cursor: not-allowed
    }

    .eep-pill-icon {
        color: #003366
    }

    .eep-time-picker-wrap {
        position: relative
    }

    .eep-time-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        right: 0;
        z-index: 15;
        padding: 14px;
        border-radius: 18px;
        background: #fff;
        border: 1px solid rgba(15, 23, 42, .08);
        box-shadow: 0 20px 45px rgba(15, 23, 42, .14);
        display: none
    }

    .eep-time-dropdown.show {
        display: block
    }

    .eep-time-grid {
        display: grid;
        gap: 10px;
        max-height: 260px;
        overflow: auto
    }

    .eep-time-option {
        border: 1px solid rgba(15, 23, 42, .08);
        border-radius: 14px;
        background: #fff;
        color: #0f172a;
        padding: 12px 14px;
        text-align: left;
        font-size: 14px
    }

    .eep-time-option.active {
        background: #003366;
        color: #fff
    }

    .eep-timezone-note {
        margin-top: 14px;
        font-size: 13px;
        line-height: 1.6;
        color: #475467
    }

    .eep-timezone-note strong,
    .eep-local-time-note strong {
        color: #12315f
    }

    .eep-local-time-note {
        margin-top: 8px
    }

    .eep-btn-green {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 24px;
        border-radius: 999px;
        background: #16a34a;
        color: #fff;
        font-weight: 700
    }

    .eep-btn-green:hover {
        color: #fff
    }

    .eep-right-inner {
        position: relative;
        min-height: 520px;
        border-radius: 34px;
        background: radial-gradient(circle at top left, rgba(0, 51, 102, .12), transparent 35%), linear-gradient(180deg, #eff6ff 0%, #fff 100%);
        overflow: hidden;
        border: 1px solid rgba(15, 23, 42, .06)
    }

    .eep-circle,
    .eep-dot,
    .eep-center-circle {
        position: absolute;
        border-radius: 50%
    }

    .eep-circle-1 {
        width: 420px;
        height: 420px;
        border: 1px solid rgba(0, 51, 102, .12);
        top: 20px;
        right: -80px
    }

    .eep-circle-2 {
        width: 300px;
        height: 300px;
        border: 1px solid rgba(0, 51, 102, .14);
        top: 80px;
        right: -20px
    }

    .eep-circle-3 {
        width: 180px;
        height: 180px;
        border: 1px solid rgba(0, 51, 102, .16);
        top: 140px;
        right: 40px
    }

    .eep-dot-1 {
        width: 16px;
        height: 16px;
        background: #16a34a;
        top: 90px;
        left: 70px
    }

    .eep-dot-2 {
        width: 12px;
        height: 12px;
        background: #003366;
        bottom: 140px;
        left: 120px
    }

    .eep-dot-3 {
        width: 14px;
        height: 14px;
        background: #0ea5e9;
        top: 180px;
        right: 120px
    }

    .eep-center-circle {
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, #dbeafe 0%, rgba(219, 234, 254, .18) 55%, transparent 75%);
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .eep-person {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: min(82%, 430px)
    }

    .eep-person img {
        display: block;
        width: 100%;
        height: auto
    }

    .eep-book-modal {
        position: fixed;
        inset: 0;
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgba(7, 15, 43, .72)
    }

    .eep-book-modal.show {
        display: flex
    }

    .eep-book-modal-dialog {
        width: 100%;
        max-width: 520px;
        max-height: calc(75dvh);
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 24px 80px rgba(15, 23, 42, .24);
        overflow: hidden;
        display: flex;
        flex-direction: column
    }

    .eep-book-modal-head {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        padding: 24px 24px 12px
    }

    .eep-book-modal-head h3 {
        margin: 0 0 6px;
        font-size: 28px;
        line-height: 1.2;
        color: #101828
    }

    .eep-book-modal-head p {
        margin: 0;
        color: #475467
    }

    .eep-book-close {
        border: 0;
        width: 40px;
        height: 40px;
        border-radius: 999px;
        background: #f3f4f6;
        color: #111827;
        font-size: 28px;
        line-height: 1
    }

    .eep-book-form {
        padding: 0 24px 24px;
        overflow-y: auto
    }

    .eep-book-summary {
        padding: 14px 16px;
        margin-bottom: 18px;
        border-radius: 16px;
        background: #f5f9ff;
        border: 1px solid #dbe7ff;
        color: #12315f;
        font-size: 14px
    }

    .eep-book-summary-line {
        margin-top: 6px
    }

    .eep-book-field {
        margin-bottom: 16px
    }

    .eep-book-field label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #111827
    }

    .eep-book-field input,
    .eep-book-field select,
    .eep-book-field textarea {
        width: 100%;
        border: 1px solid #d0d5dd;
        border-radius: 14px;
        padding: 0 16px;
        font-size: 15px;
        color: #101828;
        outline: none;
        font-family: inherit
    }

    .eep-book-field input,
    .eep-book-field select {
        height: 50px
    }

    .eep-book-field textarea {
        min-height: 110px;
        padding: 14px 16px;
        resize: vertical
    }

    .eep-phone-group {
        display: grid;
        grid-template-columns: 170px minmax(0, 1fr);
        gap: 12px
    }

    .eep-book-submit {
        width: 100%;
        border: 0;
        border-radius: 14px;
        background: linear-gradient(135deg, #16a34a, #15803d);
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 14px 18px
    }

    @media (max-width:991px) {
        .eep-container {
            grid-template-columns: 1fr
        }

        .eep-right {
            order: -1
        }

        .eep-right-inner {
            min-height: 420px
        }
    }

    @media (max-width:767px) {
        .eep-calendar-info {
            display: grid
        }

        .eep-phone-group {
            grid-template-columns: 1fr
        }

        .eep-calendar-card {
            padding: 22px
        }

        .eep-right-inner {
            min-height: 340px
        }

        .eep-book-modal {
            padding: 12px;
            align-items: flex-start
        }

        .eep-book-modal-dialog {
            border-radius: 18px;
            max-height: calc(75dvh)
        }

        .eep-book-form {
            padding: 0 20px 20px
        }
    }


    .eep-hero {
        padding: 56px 0 64px
    }

    .eep-container.container2 {
        max-width: 1680px;
        width: calc(100% - 40px);
        margin: 0 auto;
        padding: 34px 36px;
        border-radius: 32px;
        border: 1px solid #cfe0f5;
        background: linear-gradient(180deg, #f7fbff 0%, #eef5ff 100%);
        display: grid;
        grid-template-columns: 1.08fr .92fr;
        gap: 34px;
        align-items: stretch;
        box-sizing: border-box
    }

    .eep-contact-wrap,
    .eep-right {
        min-width: 0;
        width: 100%
    }

    .eep-contact-wrap {
        display: flex;
        width: 100%
    }

    .eep-calendar-card {
        width: 100%;
        padding: 10px 0 0;
        background: transparent;
        border: 0;
        box-shadow: none
    }

    .eep-calendar-title-row {
        display: inline-flex;
        align-items: center;
        gap: 16px
    }

    .eep-calendar-icon {
        font-size: 38px;
        color: #003366
    }

    .eep-calendar-title {
        margin: 0;
        font-size: 34px;
        line-height: 1.05;
        color: #111827
    }

    .eep-calendar-sub {
        font-size: 16px;
        line-height: 1.75;
        max-width: 760px;
        color: #4b5563
    }

    .eep-calendar-box {
        margin-top: 24px;
        padding: 18px;
        border-radius: 24px;
        background: #fff;
        border: 1px solid #d8e5f5;
        box-shadow: 0 10px 24px rgba(16, 24, 40, .04)
    }

    .eep-calendar-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px
    }

    .eep-cal-btn {
        width: 42px;
        height: 42px;
        border: 0;
        border-radius: 50%;
        background: #0b3f78;
        color: #fff;
        font-size: 22px
    }

    .eep-month-label {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a
    }

    .eep-calendar-week,
    .eep-calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 10px
    }

    .eep-calendar-week {
        margin-bottom: 12px
    }

    .eep-calendar-week span {
        font-size: 12px;
        font-weight: 700;
        color: #7083a3;
        text-align: center;
        text-transform: uppercase
    }

    .eep-calendar-empty,
    .eep-calendar-day {
        height: 44px
    }

    .eep-calendar-day {
        border: 1px solid #e3ebf6;
        border-radius: 13px;
        background: #fff;
        color: #102342;
        font-weight: 700
    }

    .eep-calendar-day.eep-is-selected {
        background: #1e5fa4;
        color: #fff;
        border-color: #1e5fa4
    }

    .eep-calendar-day.eep-is-today {
        border-color: #1e5fa4
    }

    .eep-calendar-info {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-top: 18px
    }

    .eep-selected-date,
    .eep-time-picker-wrap {
        flex: 1;
        min-width: 0
    }

    .eep-selected-date,
    .eep-time-trigger {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding: 14px 16px;
        border-radius: 16px;
        border: 1px solid #d9e5f4;
        background: #fff;
        color: #0f172a
    }

    .eep-time-trigger.disabled {
        opacity: .55;
        cursor: not-allowed
    }

    .eep-pill-icon {
        color: #1e5fa4
    }

    .eep-time-picker-wrap {
        position: relative
    }

    .eep-time-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        right: 0;
        z-index: 15;
        padding: 14px;
        border-radius: 18px;
        background: #fff;
        border: 1px solid #d9e5f4;
        box-shadow: 0 20px 45px rgba(15, 23, 42, .14);
        display: none
    }

    .eep-time-dropdown.show {
        display: block
    }

    .eep-time-grid {
        display: grid;
        gap: 10px;
        max-height: 260px;
        overflow: auto
    }

    .eep-time-option {
        border: 1px solid #e3ebf6;
        border-radius: 14px;
        background: #fff;
        color: #0f172a;
        padding: 12px 14px;
        text-align: left;
        font-size: 14px
    }

    .eep-time-option.active {
        background: #1e5fa4;
        color: #fff;
        border-color: #1e5fa4
    }

    .eep-calendar-bottom-row {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
        margin-top: 12px
    }

    .eep-timezone-note {
        margin: 0;
        font-size: 12px;
        line-height: 1.55;
        color: #5d6b82
    }

    .eep-local-time-note {
        margin-top: 6px
    }

    .eep-calendar-actions-inline {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%
    }

    .eep-btn-green {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 28px;
        border-radius: 16px;
        background: linear-gradient(135deg, #0b3f78, #1e72c3);
        color: #fff;
        font-weight: 700;
        box-shadow: 0 12px 24px rgba(30, 95, 164, .18)
    }

    .eep-btn-green:hover {
        color: #fff
    }

    .eep-right {
        display: flex;
        width: 100%
    }

    .eep-right-inner {
        position: relative;
        width: 100%;
        max-width: none;
        min-height: 696px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        border-radius: 28px;
        background: #fff;
        border: 1px solid #d8e5f5;
        overflow: hidden
    }

    .eep-center-circle {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, #dbeafe 0%, rgba(219, 234, 254, .14) 58%, transparent 76%)
    }

    .eep-circle,
    .eep-dot,
    .eep-center-circle {
        position: absolute;
        border-radius: 50%
    }

    .eep-circle-1 {
        width: 560px;
        height: 560px;
        border: 1px dashed rgba(30, 95, 164, .35);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-circle-2 {
        width: 420px;
        height: 420px;
        border: 1px solid rgba(30, 95, 164, .18);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-circle-3 {
        width: 280px;
        height: 280px;
        border: 1px solid rgba(30, 95, 164, .14);
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%)
    }

    .eep-dot-1 {
        width: 16px;
        height: 16px;
        background: #16a34a;
        top: 72px;
        left: 72px
    }

    .eep-dot-2 {
        width: 12px;
        height: 12px;
        background: #1e5fa4;
        bottom: 92px;
        left: 110px
    }

    .eep-dot-3 {
        width: 14px;
        height: 14px;
        background: #0ea5e9;
        top: 114px;
        right: 90px
    }

    .eep-person {
        position: relative;
        left: auto;
        bottom: auto;
        transform: none;
        width: min(100%, 570px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2
    }

    .eep-person img {
        display: block;
        width: 100%;
        max-height: 620px;
        height: auto;
        object-fit: contain
    }

    @media (max-width:1399px) {
        .eep-container.container2 {
            grid-template-columns: 1.02fr .84fr;
            padding: 30px
        }

        .eep-right-inner {
            min-height: 620px
        }

        .eep-person {
            width: min(100%, 510px)
        }

        .eep-person img {
            max-height: 560px
        }

        .eep-circle-1 {
            width: 500px;
            height: 500px
        }

        .eep-circle-2 {
            width: 380px;
            height: 380px
        }

        .eep-circle-3 {
            width: 250px;
            height: 250px
        }

        .eep-center-circle {
            width: 350px;
            height: 350px
        }
    }

    @media (max-width:1199px) {
        .eep-container.container2 {
            grid-template-columns: 1fr .78fr;
            gap: 24px;
            padding: 26px
        }

        .eep-calendar-title {
            font-size: 29px
        }

        .eep-right-inner {
            min-height: 560px
        }

        .eep-person {
            width: min(100%, 430px)
        }

        .eep-person img {
            max-height: 480px
        }
    }

    @media (max-width:991px) {
        .eep-hero {
            padding: 46px 0 54px
        }

        .eep-container.container2 {
            grid-template-columns: 1fr;
            width: calc(100% - 24px);
            padding: 22px 20px;
            gap: 18px
        }

        .eep-right-inner {
            min-height: 380px
        }

        .eep-person {
            width: min(100%, 330px)
        }

        .eep-person img {
            max-height: 320px
        }

        .eep-center-circle {
            width: 250px;
            height: 250px
        }

        .eep-circle-1 {
            width: 320px;
            height: 320px
        }

        .eep-circle-2 {
            width: 240px;
            height: 240px
        }

        .eep-circle-3 {
            width: 160px;
            height: 160px
        }
    }

    @media (max-width:767px) {
        .eep-hero {
            padding: 40px 0 48px
        }

        .eep-container.container2 {
            width: calc(100% - 16px);
            padding: 18px 16px
        }

        .eep-calendar-title {
            font-size: 22px
        }

        .eep-calendar-sub {
            font-size: 15px
        }

        .eep-calendar-box {
            padding: 14px
        }

        .eep-calendar-empty,
        .eep-calendar-day {
            height: 38px
        }

        .eep-calendar-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px
        }

        .eep-right-inner {
            min-height: 300px;
            padding: 18px
        }

        .eep-person {
            width: min(100%, 270px)
        }

        .eep-person img {
            max-height: 260px
        }
    }

    @media (max-width: 390px) {

        .ser-team {
            left: 25px;
        }

        .ser-card3 {
            height: 390px;
        }

        .ser-card3.v1 .title {
            font-size: 30px;
        }

        .ser-card3.v1 p {
            margin-bottom: 20px;
        }

        .eep-calendar-actions-inline {
            justify-content: center;
        }

        .footer-links {
            width: 140px;
        }

        .footer-social4 {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0px;
        }

        .ibt-section-gap {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    }



    @media (max-width: 425px) {
        .footer-social4 {
            width: 100%;
            justify-content: center;
        }
    }
    .hero-bg4 {
        position: relative;
    }

    .hero-audio-toggle4 {
        position: absolute;
        right: 20px;
        bottom: 20px;
        z-index: 2;
        border: 1px solid rgba(255, 255, 255, 0.45);
        background: rgba(0, 0, 0, 0.35);
        color: #fff;
        border-radius: 999px;
        padding: 10px 16px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .hero-audio-toggle4:hover,
    .hero-audio-toggle4:focus-visible {
        background: rgba(0, 0, 0, 0.55);
        border-color: rgba(255, 255, 255, 0.7);
    }

    @media (max-width: 767px) {
        .hero-audio-toggle4 {
            right: 12px;
            bottom: 12px;
            padding: 9px 14px;
            font-size: 13px;
        }
    }

/* client logo hover interaction */
.client-trust-grid1 .client-brand-card1 { position: relative; overflow: hidden; cursor: pointer; transition: transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s ease, border-color .35s ease, background .35s ease; }
.client-trust-grid1 .client-brand-card1::after { content: ''; position: absolute; inset: 0; border: 1px solid transparent; border-radius: inherit; background: linear-gradient(135deg, rgba(8,207,255,.7), transparent 55%) border-box; -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude; opacity: 0; transition: opacity .35s ease; pointer-events: none; }
.client-trust-grid1 .client-brand-card1 img { transition: transform .4s cubic-bezier(.2,.8,.2,1), filter .35s ease; }
.client-trust-grid1 .client-brand-card1:hover { z-index: 2; transform: translateY(-8px) scale(1.04); box-shadow: 0 16px 34px rgba(0,0,0,.28), 0 0 22px rgba(8,207,255,.18); background: rgba(8,207,255,.08); }
.client-trust-grid1 .client-brand-card1:hover::after { opacity: 1; }
.client-trust-grid1 .client-brand-card1:hover img { transform: scale(1.08); filter: saturate(1.15) contrast(1.04); }
@media (prefers-reduced-motion: reduce) { .client-trust-grid1 .client-brand-card1, .client-trust-grid1 .client-brand-card1 img { transition: none; } }
/* modern FAQ layout */
.technofra-faq-modern {
  background: #fff;
  color: #252525;
  padding: 78px 0 88px;
}
.technofra-faq-heading { text-align: center; margin-bottom: 36px; }
.technofra-faq-heading .sub-title { color: #0b477e; font-size: 13px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
.technofra-faq-heading h2 { margin: 6px 0 0; color: #262626; font-size: clamp(30px, 3.4vw, 46px); font-weight: 700; line-height: 1.12; }
.technofra-faq-list { border-top: 1px solid #e3e7ec; }
.technofra-faq-item { border-bottom: 1px solid #e3e7ec; }
.technofra-faq-trigger { width: 100%; min-height: 66px; display: flex; align-items: center; gap: 18px; padding: 16px 6px; border: 0; background: transparent; color: #30343a; text-align: left; font-size: 16px; font-weight: 600; line-height: 1.35; transition: color .25s ease, background .25s ease; }
.technofra-faq-trigger:focus, .technofra-faq-trigger:active, .technofra-faq-trigger:focus-visible { outline: none !important; border: 0 !important; box-shadow: none !important; }
.technofra-faq-trigger > i:first-child { width: 24px; color: #0b477e; font-size: 16px; text-align: center; flex: 0 0 24px; }
.technofra-faq-trigger .faq-plus { margin-left: auto; color: #68717a; font-size: 14px; transition: transform .25s ease, color .25s ease; }
.technofra-faq-trigger:not(.collapsed), .technofra-faq-trigger:hover { color: #0b477e; }
.technofra-faq-trigger:not(.collapsed) .faq-plus { transform: rotate(45deg); color: #0b477e; }
.technofra-faq-answer { padding: 0 42px 18px 48px; color: #68717a; font-size: 14px; line-height: 1.65; }
@media (max-width: 991px) { .technofra-faq-modern { padding: 62px 0 70px; } .technofra-faq-list + .technofra-faq-list { margin-top: 0; } }
@media (max-width: 767px) { .technofra-faq-modern { padding: 52px 0 60px; } .technofra-faq-trigger { gap: 12px; padding: 15px 2px; font-size: 14px; } .technofra-faq-answer { padding-left: 38px; padding-right: 20px; } }
/* source-style testimonial area */
.technofra-testimonial-area { margin: 0 0px; border-radius: 0px; background: #050505; color: #fff; padding: 96px 0 90px; overflow: hidden; }
.technofra-testimonial-heading { max-width: 720px; margin: 0 auto 56px; position: relative; text-align: center; }
.technofra-testimonial-heading > span { color: #32c5ff; font-size: 13px; font-weight: 700; letter-spacing: .15em; text-transform: uppercase; }
.technofra-testimonial-heading h2 { margin: 12px 0 0; color: #fff; font-size: clamp(30px, 4vw, 52px); font-weight: 700; line-height: 1.08; }
.technofra-testimonial-score { position: absolute; left: calc(100% + 18px); top: 24px; display: flex; flex-direction: column; align-items: flex-start; text-align: left; }
.technofra-testimonial-score strong { color: #32c5ff; font-size: 64px; line-height: .9; font-weight: 700; }
.technofra-testimonial-score small { margin-top: 8px; color: #9ca7b2; font-size: 12px; white-space: nowrap; }
.technofra-testimonial-rows { display: flex; flex-direction: column; gap: 24px; overflow: hidden; }
.technofra-testimonial-row { width: 100%; overflow: hidden; }
.technofra-testimonial-row-track { display: flex; gap: 24px; width: max-content; padding: 0 24px; }
.technofra-testimonial-row-left .technofra-testimonial-row-track { animation: technofraTestimonialMarqueeLeft 34s linear infinite; }
.technofra-testimonial-row-right .technofra-testimonial-row-track { animation: technofraTestimonialMarqueeRight 34s linear infinite; }
.technofra-testimonial-row:hover .technofra-testimonial-row-track { animation-play-state: paused; }
.technofra-testimonial-card { width: min(390px, 82vw); min-height: 248px; padding: 28px; border: 1px solid rgba(255,255,255,.12); border-radius: 14px; background: linear-gradient(145deg, rgba(255,255,255,.1), rgba(255,255,255,.035)); }
.technofra-testimonial-person { display: flex; align-items: center; gap: 14px; }
.technofra-testimonial-person img { width: 48px; height: 48px; border-radius: 50%; object-fit: cover; }
.technofra-testimonial-person h4 { margin: 0; color: #fff; font-size: 16px; font-weight: 600; }
.technofra-testimonial-person p { margin: 4px 0 0; color: #8f9aa5; font-size: 12px; }
.technofra-testimonial-quote { margin: 28px 0 22px; color: #d4dbe1; font-size: 16px; line-height: 1.65; }
.technofra-testimonial-stars { color: #ffaf1b; letter-spacing: 4px; font-size: 14px; }
@keyframes technofraTestimonialMarqueeLeft { from { transform: translateX(0); } to { transform: translateX(calc(-50% - 12px)); } }
@keyframes technofraTestimonialMarqueeRight { from { transform: translateX(calc(-50% - 12px)); } to { transform: translateX(0); } }
@media (max-width: 991px) { .technofra-testimonial-area { margin: 0 20px; border-radius: 24px; } .technofra-testimonial-score { position: static; align-items: center; text-align: center; margin: 26px auto 0; } .technofra-testimonial-score strong { font-size: 52px; } }
@media (max-width: 767px) { .technofra-testimonial-area { margin: 0; border-radius: 0; } .technofra-testimonial-rows { gap: 16px; } }
@media (prefers-reduced-motion: reduce) { .technofra-testimonial-row-track { animation: none !important; } }
/* showcase area start */
.studio-showcase-area {
  background: #050505;
  overflow: hidden;
}
.studio-showcase-wrap {
  height: 1700px;
  overflow: hidden;
  margin: 0 -370px;
}
.studio-showcase-main {
  display: grid !important;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  column-gap: 30px;
  row-gap: 0;
  margin-top: -370px;
  justify-content: center;
}
.studio-showcase-item {
  min-width: 0;
  display: flex;
  flex-direction: column;
  gap: 0;
}
.studio-showcase-thumb {
  overflow: hidden;
  margin-bottom: 30px !important;
}
.studio-showcase-item .studio-showcase-thumb:last-child {
  margin-bottom: 0 !important;
}
.studio-showcase-thumb img,
.studio-showcase-thumb .studio-showcase-video {
  width: 100%;
  display: block;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .studio-showcase-wrap { height: 1000px; }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .studio-showcase-wrap { height: 700px; }
  .studio-showcase-area { margin-bottom: 120px; }
}
@media (max-width: 767px) {
  .studio-showcase-wrap { height: 1212px; margin: 0; }
  .studio-showcase-main { grid-template-columns: 1fr; column-gap: 0; margin-top: -160px; }
  .studio-showcase-item { width: 100%; gap: 0; }
  .studio-showcase-area { margin-bottom: 0; }
}
/* showcase area end */
</style>

<!-- hero-style4 -->
<section class="hero-style4">
    <div class="hero-bg4" aria-hidden="true">
        <video
            class="hero-video4"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            data-desktop-src="assets/images/new/technofra_hero.mp4"
            data-mobile-src="assets/images/new/technofra_hero-vertical.mp4">
            <source src="assets/images/new/technofra_hero.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay4"></div>
        <button type="button" class="hero-audio-toggle4" aria-pressed="false" aria-label="Unmute hero video">
            Sound On
        </button>
    </div>
</section>
<!-- End hero-style4 -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var heroVideo = document.querySelector('.hero-video4');
        var audioToggle = document.querySelector('.hero-audio-toggle4');

        if (!heroVideo || !audioToggle) {
            return;
        }

        var desktopSrc = heroVideo.getAttribute('data-desktop-src');
        var mobileSrc = heroVideo.getAttribute('data-mobile-src');
        var sourceEl = heroVideo.querySelector('source');
        var mobileBreakpoint = window.matchMedia('(max-width: 767px)');

        function updateToggleLabel() {
            var isMuted = heroVideo.muted;
            audioToggle.textContent = isMuted ? 'Sound On' : 'Sound Off';
            audioToggle.setAttribute('aria-pressed', String(!isMuted));
            audioToggle.setAttribute('aria-label', isMuted ? 'Unmute hero video' : 'Mute hero video');
        }

        function ensurePlayback() {
            var playPromise = heroVideo.play();

            if (playPromise && typeof playPromise.catch === 'function') {
                playPromise.catch(function() {
                    heroVideo.controls = true;
                });
            }
        }

        function updateVideoSource() {
            if (!sourceEl) {
                return;
            }

            var nextSrc = mobileBreakpoint.matches ? mobileSrc : desktopSrc;
            if (!nextSrc || sourceEl.getAttribute('src') === nextSrc) {
                return;
            }

            sourceEl.setAttribute('src', nextSrc);
            heroVideo.load();
            ensurePlayback();
        }

        heroVideo.muted = true;
        updateToggleLabel();
        updateVideoSource();
        ensurePlayback();

        audioToggle.addEventListener('click', function() {
            heroVideo.muted = !heroVideo.muted;
            updateToggleLabel();
            ensurePlayback();
        });

        if (typeof mobileBreakpoint.addEventListener === 'function') {
            mobileBreakpoint.addEventListener('change', updateVideoSource);
        } else if (typeof mobileBreakpoint.addListener === 'function') {
            mobileBreakpoint.addListener(updateVideoSource);
        }
    });
</script>

<!-- Technofra-about-section -->
<section class="mark-about-section" aria-labelledby="mark-about-heading">
    <div class="container"><div class="row">
        <div class="col-xl-3"><span class="mark-about-kicker">[ Who we are ]</span></div>
        <div class="col-xl-9">
            <h2 class="mark-about-main title animated-heading" id="mark-about-heading"><em>We build digital experiences</em> that grow businesses.</h2>
            <div class="row align-items-start">
                <div class="col-xl-5 col-lg-4 col-md-5"><div class="mark-about-image"><img src="assets/images/new/technofra-about.png" alt="Technofra team creating digital solutions"></div></div>
                <div class="col-xl-7 col-lg-8 col-md-7"><div class="mark-about-details">
                    <p class="mark-about-description">Technofra is your all-in-one digital solutions partner. We create high-performing websites and mobile apps, build memorable brands, and run data-driven marketing that helps businesses attract the right audience, convert more leads, and scale with confidence.</p>
                    <div class="row">
                        <div class="col-6"><div class="mark-about-stat"><strong>2.5K+</strong><p>Successful Projects<br>Delivered</p></div></div>
                        <div class="col-6"><div class="mark-about-stat"><strong>500+</strong><p>Happy Clients<br>Worldwide</p></div></div>
                        <div class="col-6"><div class="mark-about-stat"><strong>14+</strong><p>Years of Digital<br>Expertise</p></div></div>
                        <div class="col-6"><div class="mark-about-stat"><strong>18+</strong><p>Core Digital<br>Service Areas</p></div></div>
                    </div>
                </div></div>
            </div>
        </div>
    </div></div>
</section>
<!-- End Technofra-about-section -->
<!-- Technofra-services-showcase -->
<section class="technofra-services-showcase" aria-labelledby="technofra-services-heading">
    <div class="container">
        <div class="services-intro">
            <div class="services-intro-image"><img src="assets/images/new/servicehome.png" alt="Technofra team collaborating on a digital project"></div>
            <div>
                <p class="services-eyebrow"><i class="fa-solid fa-asterisk" aria-hidden="true"></i> Digital Solutions</p>
                <h2 class="services-heading" id="technofra-services-heading">Services We Provide</h2>
                <p class="services-copy">From websites, ecommerce stores, and mobile apps to branding, digital marketing, domain, and hosting, we deliver complete digital solutions that help businesses launch, grow, and perform better online.</p>
            </div>
            <div class="services-controls" aria-label="Service card controls">
                <button class="services-control" type="button" data-services-direction="prev" aria-label="Show previous services"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i></button>
                <button class="services-control" type="button" data-services-direction="next" aria-label="Show next services"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="services-content">
            <aside class="services-stat">
                <i class="services-stat-icon fa-solid fa-sun" aria-hidden="true"></i>
                <strong class="services-stat-number">2500+</strong>
                <div><h3 class="services-stat-title">Successful projects delivered</h3><p class="services-stat-copy">Trusted by businesses for design, development, branding, and digital growth.</p></div>
            </aside>
            <div class="technofra-services-cards" id="technofra-services-cards">
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i></div><h3>Web Design &amp; Development</h3><p>Fast, responsive websites and web applications built to turn visitors into customers.</p><a class="service-card-link" href="web-design-and-development.php">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-cart-shopping" aria-hidden="true"></i></div><h3>E-Commerce Development</h3><p>Conversion-focused online stores with smooth product, cart, and checkout journeys.</p><a class="service-card-link" href="shopify-development.php">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i></div><h3>iOS &amp; Android App Development</h3><p>Reliable, user-friendly mobile apps that keep your business connected to customers.</p><a class="service-card-link" href="android-app-development.php">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-pen-ruler" aria-hidden="true"></i></div><h3>Branding</h3><p>Distinctive visual identities and brand systems that make your business memorable.</p><a class="service-card-link" href="https://markidentitiez.com/" target="_blank">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-bullhorn" aria-hidden="true"></i></div><h3>Digital Marketing</h3><p>SEO, social media, paid campaigns, and content strategies designed for growth.</p><a class="service-card-link" href="digital-marketing.php">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
                <article class="technofra-service-card"><div class="service-card-icon"><i class="fa-solid fa-server" aria-hidden="true"></i></div><h3>Domain &amp; Hosting</h3><p>Secure domains, reliable hosting, and dependable support for your online presence.</p><a class="service-card-link" href="domain-hosting.php">Explore More <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></article>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var servicesCards = document.getElementById('technofra-services-cards');
        if (!servicesCards) return;
        document.querySelectorAll('[data-services-direction]').forEach(function (button) {
            button.addEventListener('click', function () {
                var direction = button.getAttribute('data-services-direction') === 'next' ? 1 : -1;
                servicesCards.scrollBy({ left: direction * Math.min(servicesCards.clientWidth, 360), behavior: 'smooth' });
            });
        });
    });
</script>
<!-- End Technofra-services-showcase -->

<!-- service-sec8 -->
<!-- <section class="service-sec8 pt-3">
    <div class="container2">
        <div class="service-content3">
            <div class="ser-card3">
                <img src="assets/images/new/web.png" alt="Professional Web Development for Your Business Growth">
                <div class="ser-content3">
                    <h4 class="title">Professional Web Development for Your Business Growth</h4>
                    <a class='ser-btn3' href='web-design-and-development.php' title>Explore more</a>
                </div>
                <a href="web-design-and-development.php" class="ser-btn">
                    <i class="icon fontello icon-button-arrow"></i>
                    <i class="icon2 fontello icon-button-arrow"></i>
                </a>
            </div>
            <div class="ser-card3 v2">
                <img src="assets/images/new/app.png" alt="Custom App Development for Smooth Business Operations">
                <a href="android-app-development.php" class="view-btn">
                    <i class="icon fontello icon-button-arrow"></i>
                    <i class="icon2 fontello icon-button-arrow"></i>
                </a>
                <div class="ser-team">
                    <h4 class="title">Custom App Development for Smooth Business Operations</h4>
                    <p>Build powerful mobile applications with smart features.
                        Improve customer experience and business growth
                    </p>
                    <div class="ser-team-info">
                        <div class="counter-box3 m-0">
                            <span class="counter-number" data-target="20">0</span>
                            <span class="counter-text">k+</span>
                        </div>
                        <span class="user">app users </span>
                    </div>
                </div>
            </div>
            <div class="ser-card3 v1">
                <img src="assets/images/new/support.png" alt="Technical support for the entire service life">
                <div class="ser-content">
                    <h4 class="title">Technical support for
                        the entire service life
                    </h4>
                    <p>Instant assistance for all your queries. Experience seamless service with our AI-powered
                        support</p>
                    <img src="assets/images/icon/phone2.svg" alt="Technical support for the entire service life">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End service-sec8 -->

<!-- service-sec7 -->
<!-- <section class="service-sec7 mb-0">
    <div class="container2">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-content7">
                    <h4 class="title">We prouduly work with our brands</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-box7">
                    <div class="social-link3">
                        <img src="assets/images/new/b1.png" alt="Blue Orbith">
                        <a href="https://blueorbith.com/" target="_blank" rel="noopener noreferrer"><span>Blue Orbith</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b2.png" alt="Grid Infinity">
                        <a href="https://gridinfinity.com/" target="_blank" rel="noopener noreferrer"><span>Grid Infinity</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b3.png" alt="Mark Idenititiez">
                        <a href="https://markidentitiez.com/" target="_blank" rel="noopener noreferrer"><span>Mark Idenititiez</span></a>
                    </div>
                    <div class="social-link3">
                        <img src="assets/images/new/b4.png" alt="Digi Kcon">
                        <a href="https://digikcon.com/" target="_blank" rel="noopener noreferrer"><span>Digi Kcon</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End service-sec7 -->

<!-- service-sec17 -->
<!-- <section class="feature-sec7 ibt-section-gapTop ibt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ser-content7">
                    <div class="sec-title">
                        <span class="sub-title">Services We Provide</span>
                        <h2 class="title animated-heading">Services We Provide</h2>
                        <p>We build digital products and growth systems for companies that want stronger online presence, better performance, and measurable results.</p>
                        <a class="ibt-btn ibt-btn-outline" href="web-design-and-development.php">
                            <span>Explore more</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                    <div class="about-counter">
                        <div class="counter-box4">
                            <span class="counter-number percent-counter2" data-target="2500">2500</span>
                            <span class="counter-text">+</span>
                        </div>
                        <span class="solutions">Successful projects delivered</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-info7">
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-blue">
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title">
                                <a href="web-design-and-development.php">Web</a>/<a href="android-app-development.php" title="Android App Development">App</a> development
                            </h4>
                            <p>Responsive websites, web apps, and mobile-ready experiences built for speed and usability.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-orange">
                            <i class="fa-solid fa-bag-shopping" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title"><a href="shopify-development.php">E-commerce development</a></h4>
                            <p>Online stores, product catalogs, cart flows, and checkout experiences that convert.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-purple">
                            <i class="fa-solid fa-pen-nib" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7">
                            <h4 class="title"><a href="https://markidentitiez.com/" target="_blank">Branding</a></h4>
                            <p>Logo systems, visual identity, and messaging that make your business memorable.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card7">
                        <div class="feature-icon7 brand-green">
                            <i class="fa-solid fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content7 mb-0">
                            <h4 class="title"><a href="digital-marketing.php">Digital Marketing</a></h4>
                            <p>SEO, social media, paid ads, and content marketing that helps brands grow online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End service-sec17 -->

<!-- client-trust-style -->
<section class="client-trust-sec1">
    <div class="container">
        <div class="client-trust-wrap1">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="client-trust-content1">
                        <span class="sub-title">[ Our Clients ]</span>
                        <h2 class="title">Trusted by 500+ clients worldwide from diverse industries.</h2>
                        <p>We partner with startups, SMEs, and enterprises across the globe, delivering innovative
                            IT solutions that drive growth, efficiency, and long-term success.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-trust-visual1">
                        <div class="client-trust-map1" aria-hidden="true">
                            <img src="assets/images/layers/map-layer.png" alt="">
                        </div>
                        <div class="client-trust-figure1">
                            <span class="count">500+</span>
                            <span class="label">Happy Clients Worldwide</span>
                        </div>
                        <div class="client-trust-grid1">
                            <div class="client-brand-card1"><img src="./assets/images/new/c1.png" alt="Frago Matric" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c2.png" alt="Life Like" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c3.png" alt="Sanjay Agencies" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c4.png" alt="Urbon Sports" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c5.png" alt="Aeritx" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c7.png" alt="ChemPharma" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c8.png" alt="Indore" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c9.png" alt="Global Ocean Beyond Logistics" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c10.png" alt="VLegends" srcset=""></div>
                            <div class="client-brand-card1"><img src="./assets/images/new/c6.png" alt="Aspirias" srcset=""></div>
                        </div>
                        <div class="client-trust-note1">
                            <i class="fontello icon-check-circle"></i>
                            <span>Long-term relationships built on trust, quality, and results.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End client-trust-style -->
<!-- showcase area start -->
<div class="studio-showcase-area">
    <div class="container-fluid">
        <div class="studio-showcase-wrap">
            <div class="studio-showcase-main d-flex">
                <div class="studio-showcase-item d-none d-md-block" data-speed=".7">
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-1.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-1.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/FP-7.png" alt="Featured digital project showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/FP-8.png" alt="Featured digital project showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-1.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/home-06/showcase/showcase-7.jpg" alt="Creative website showcase">
                    </div>
                </div>
                <div class="studio-showcase-item" data-speed="1.1">
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/FP-4.png" alt="Featured portfolio project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img class="showcase-fp2-primary" src="assets/img/new-images/FP-2.png" alt="Featured portfolio project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <video class="studio-showcase-video showcase-video-primary" autoplay muted loop playsinline preload="metadata" aria-label="Featured portfolio video"><source src="assets/img/new-images/aeritx.mp4" type="video/mp4"></video>
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/FP-3.png" alt="Featured portfolio project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <video class="studio-showcase-video showcase-video-duplicate" autoplay muted loop playsinline preload="metadata" aria-label="Featured portfolio video"><source src="assets/img/new-images/aeritx.mp4" type="video/mp4"></video>
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="Creative website showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <video class="studio-showcase-video showcase-video-duplicate" autoplay muted loop playsinline preload="metadata" aria-label="Featured portfolio video"><source src="assets/img/new-images/aeritx.mp4" type="video/mp4"></video>
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img class="showcase-fp2-duplicate" src="assets/img/new-images/FP-2.png" alt="Featured portfolio project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="Creative website showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <video class="studio-showcase-video showcase-video-duplicate" autoplay muted loop playsinline preload="metadata" aria-label="Featured portfolio video"><source src="assets/img/new-images/aeritx.mp4" type="video/mp4"></video>
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img class="showcase-fp2-duplicate" src="assets/img/new-images/FP-2.png" alt="Featured portfolio project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/home-06/showcase/showcase-5.jpg" alt="Creative website showcase">
                    </div>
                </div>
                <div class="studio-showcase-item d-none d-md-block" data-speed=".7">
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-3.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-3.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/Portfolio-2.png" alt="Portfolio showcase project">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/new-images/FP-1.png" alt="Featured digital project showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img class="showcase-fp2-duplicate" src="assets/img/new-images/FP-2.png" alt="Featured digital project showcase">
                    </div>
                    <div class="studio-showcase-thumb mb-30">
                        <img src="assets/img/home-06/showcase/showcase-9.jpg" alt="Creative website showcase">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- showcase area end -->


<!-- booking-call-sec -->
<?php if ($bookCallStatus): ?>
    <div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
        <?php echo htmlspecialchars($bookCallStatus['message']); ?>
    </div>
<?php endif; ?>
<section class="eep-hero ibt-section-gapTop" id="book-call-widget">
    <div class="eep-container container2">
        <div class="eep-contact-wrap">
            <div class="eep-calendar-card">
                <div class="eep-calendar-head">
                    <div>
                        <div class="eep-calendar-title-row">
                            <div class="eep-calendar-icon"><i class="fa fa-calendar"></i></div>
                            <h2 class="eep-calendar-title">Book A Call With Us</h2>
                        </div>
                        <p class="eep-calendar-sub pt-2">Pick a date and time to connect with one of our expert team members</p>
                    </div>
                </div>
                <div class="eep-calendar-box">
                    <div class="eep-calendar-nav">
                        <button id="prevMonth" class="eep-cal-btn" type="button">&#8249;</button>
                        <div id="monthLabel" class="eep-month-label">Month 2026</div>
                        <button id="nextMonth" class="eep-cal-btn" type="button">&#8250;</button>
                    </div>
                    <div class="eep-calendar-week">
                        <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                    </div>
                    <div id="calendarGrid" class="eep-calendar-grid"></div>
                </div>
                <div class="eep-calendar-info">
                    <div id="selectedDatePill" class="eep-selected-date">
                        <span class="eep-pill-icon"><i class="fa fa-calendar-check-o"></i></span>
                        <span id="selectedDateText" class="eep-selected-date-text">Select Date</span>
                    </div>
                    <div class="eep-time-picker-wrap">
                        <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                            <span class="eep-pill-icon"><i class="fa fa-clock"></i></span>
                            <span id="selectedTimeText" class="eep-time-text">Select Time</span>
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <div id="timeDropdown" class="eep-time-dropdown">
                            <div id="timeGrid" class="eep-time-grid"></div>
                        </div>
                    </div>
                </div>
                <div class="eep-calendar-bottom-row">
                    <div class="eep-timezone-note">
                        <strong>Slots Time</strong>
                        <span id="viewerTimezoneNote"></span>
                        <div id="selectedLocalTimeNote" class="eep-local-time-note"></div>
                    </div>
                    <div class="mt-20 pt-3 eep-calendar-actions-inline">
                        <a href="#book-call" class="eep-btn-green" id="bookCallBtn"><i class="fa fa-phone"></i> Book A Call With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="eep-right">
            <div class="eep-right-inner">
                <div class="eep-circle eep-circle-1"></div>
                <div class="eep-circle eep-circle-2"></div>
                <div class="eep-circle eep-circle-3"></div>
                <div class="eep-dot eep-dot-1"></div>
                <div class="eep-dot eep-dot-2"></div>
                <div class="eep-dot eep-dot-3"></div>
                <div class="eep-center-circle"></div>
                <div class="eep-person"><img loading="lazy" decoding="async" src="assets/images/new/book.png" alt="Book A Call"></div>
            </div>
        </div>
    </div>
</section>
<div class="eep-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="eep-book-modal-dialog">
        <div class="eep-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="eep-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>
        <form class="eep-book-form" action="book-call-handler" method="post">
            <div class="eep-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <div class="eep-book-summary-line"><strong>Time (IST):</strong> <span id="modalSelectedTime">Not selected</span></div>
                <div class="eep-book-summary-line"><strong>Your Local Time:</strong> <span id="modalSelectedLocalTime">Not selected</span></div>
            </div>
            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">
            <input type="hidden" name="user_timezone" id="userTimezoneInput">
            <div class="eep-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>
            <div class="eep-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>
            <div class="eep-book-field">
                <label for="bookCallPhone">Number</label>
                <div class="eep-phone-group">
                    <select id="bookCallCountryCode" aria-label="Select country code"></select>
                    <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your phone number" pattern="[0-9\-\s()]{6,18}" title="Enter a valid phone number." required>
                </div>
            </div>
            <div class="eep-book-field">
                <label for="bookCallAgenda">Meeting Agenda</label>
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4" required></textarea>
            </div>
            <button type="submit" class="eep-book-submit">Submit Booking</button>
        </form>
    </div>
</div>
<!-- End booking-call-sec -->


<!-- testimonial area start -->
<section class="technofra-testimonial-area">
    <div class="container">
        <div class="technofra-testimonial-heading">
            <span>Client Reviews</span>
            <h2>What Our Clients Say<br>About Our Branding Work</h2>
            <!-- <div class="technofra-testimonial-score"><strong>4.86</strong><small>Average client rating</small></div> -->
        </div>
    </div>
    <div class="technofra-testimonial-rows">
        <div class="technofra-testimonial-row technofra-testimonial-row-left">
            <div class="technofra-testimonial-row-track">
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="Rohan Mehta"><div><h4>Rohan Mehta</h4><p>Founder, FMCG Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Technofra helped us define a sharper digital presence and a premium identity that customers remember.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="Priya Shah"><div><h4>Priya Shah</h4><p>Director, Lifestyle Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Their approach was strategic, clear, and business-focused. Our brand now feels much more premium.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="Arjun Nair"><div><h4>Arjun Nair</h4><p>Co-Founder, D2C Startup</p></div></div><p class="technofra-testimonial-quote">&ldquo;The team understood our market quickly and built a brand system that works across every channel.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="Neha Kapoor"><div><h4>Neha Kapoor</h4><p>Marketing Head, Retail Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Every detail was handled with clarity. Our communication now looks consistent and confident.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
            </div>
        </div>
        <div class="technofra-testimonial-row technofra-testimonial-row-right">
            <div class="technofra-testimonial-row-track">
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-3.png" alt="Arjun Nair"><div><h4>Arjun Nair</h4><p>Co-Founder, D2C Startup</p></div></div><p class="technofra-testimonial-quote">&ldquo;The team understood our market quickly and built a brand system that works across every channel.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-4.png" alt="Neha Kapoor"><div><h4>Neha Kapoor</h4><p>Marketing Head, Retail Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Every detail was handled with clarity. Our communication now looks consistent and confident.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-1.png" alt="Rohan Mehta"><div><h4>Rohan Mehta</h4><p>Founder, FMCG Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Technofra helped us define a sharper digital presence and a premium identity that customers remember.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
                <article class="technofra-testimonial-card"><div class="technofra-testimonial-person"><img src="assets/img/home-10/testimonial/testimonial-item-2.png" alt="Priya Shah"><div><h4>Priya Shah</h4><p>Director, Lifestyle Brand</p></div></div><p class="technofra-testimonial-quote">&ldquo;Their approach was strategic, clear, and business-focused. Our brand now feels much more premium.&rdquo;</p><div class="technofra-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div></article>
            </div>
        </div>
    </div></section>
<!-- End testimonial area -->

<!-- industries-sec -->
<section class="industries-sec ibt-section-gapTop">
    <div class="title-area">
        <div class="container">
            <div class="row end mb-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="sec-title mb-0">
                        <span class="sub-title">industries</span>
                        <h2 class="title animated-heading">Industries We Serve</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="sec-btn-box">
                        <p>Tailored digital experiences for businesses across fast-moving sectors.</p>
                        <a class='ibt-btn ibt-btn-outline' href='contact.php' title>
                            <span>Contact Us</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="swiper industries-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-blue">
                            <i class="fa-solid fa-industry" aria-hidden="true"></i>
                        </div>
                        <h4>Manufacturing</h4>
                        <p>Smart production, automation, and workflow optimization for modern factories.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-red">
                            <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <h4>Healthcare</h4>
                        <p>Patient-first digital solutions, secure systems, and better care journeys.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-orange">
                            <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                        </div>
                        <h4>Retail & E-commerce</h4>
                        <p>Conversion-focused storefronts, catalog systems, and customer engagement.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-teal">
                            <i class="fa-solid fa-truck-fast" aria-hidden="true"></i>
                        </div>
                        <h4>Logistics</h4>
                        <p>Real-time tracking, route efficiency, and dependable delivery operations.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-purple">
                            <i class="fa-solid fa-user-graduate" aria-hidden="true"></i>
                        </div>
                        <h4>Education</h4>
                        <p>Interactive platforms, learning experiences, and student engagement tools.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-gold">
                            <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                        </div>
                        <h4>Finance</h4>
                        <p>Secure digital finance workflows, analytics, and customer-friendly interfaces.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-amber">
                            <i class="fa-solid fa-helmet-safety" aria-hidden="true"></i>
                        </div>
                        <h4>Construction</h4>
                        <p>Project visibility, field coordination, and smarter site operations.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="industry-card">
                        <div class="industry-icon brand-lime">
                            <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                        </div>
                        <h4>Energy</h4>
                        <p>Utilities, renewables, and performance dashboards built for growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End industries-sec -->

<!-- faq-sec -->
<section class="faq-sec technofra-faq-modern">
    <div class="container">
        <div class="technofra-faq-heading">
            <span class="sub-title">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row gx-lg-5">
            <div class="col-lg-6">
                <div class="technofra-faq-list" id="faqModernLeft">
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernOne" aria-expanded="false" aria-controls="faqModernOne">
                            <i class="fa-solid fa-layer-group" aria-hidden="true"></i><span>What services does Technofra provide?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernOne" class="collapse" data-bs-parent="#faqModernLeft"><div class="technofra-faq-answer">We provide website design and development, ecommerce, mobile apps, branding, digital marketing, domain registration, hosting, and complete IT solutions.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernTwo" aria-expanded="false" aria-controls="faqModernTwo">
                            <i class="fa-solid fa-pen-ruler" aria-hidden="true"></i><span>Do you provide custom website design?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernTwo" class="collapse" data-bs-parent="#faqModernLeft"><div class="technofra-faq-answer">Yes. Every website is designed around your brand, audience, business goals, and conversion journey.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernThree" aria-expanded="false" aria-controls="faqModernThree">
                            <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i><span>Do you develop mobile applications?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernThree" class="collapse" data-bs-parent="#faqModernLeft"><div class="technofra-faq-answer">We build scalable Android and iOS applications with intuitive interfaces and reliable performance.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernFour" aria-expanded="false" aria-controls="faqModernFour">
                            <i class="fa-solid fa-server" aria-hidden="true"></i><span>Do you offer domain registration and hosting services?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernFour" class="collapse" data-bs-parent="#faqModernLeft"><div class="technofra-faq-answer">Yes. We help you choose, register, host, secure, and maintain the right domain and hosting setup.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernFive" aria-expanded="false" aria-controls="faqModernFive">
                            <i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i><span>Can you redesign my existing website?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernFive" class="collapse" data-bs-parent="#faqModernLeft"><div class="technofra-faq-answer">Absolutely. We can refresh your visual identity, user experience, content, speed, and mobile performance.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="technofra-faq-list" id="faqModernRight">
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernSix" aria-expanded="false" aria-controls="faqModernSix">
                            <i class="fa-solid fa-chart-line" aria-hidden="true"></i><span>Will my website be mobile-friendly and SEO optimized?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernSix" class="collapse" data-bs-parent="#faqModernRight"><div class="technofra-faq-answer">Yes. Our websites are responsive, fast, accessible, and structured with SEO best practices.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernSeven" aria-expanded="false" aria-controls="faqModernSeven">
                            <i class="fa-solid fa-building" aria-hidden="true"></i><span>What industries do you work with?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernSeven" class="collapse" data-bs-parent="#faqModernRight"><div class="technofra-faq-answer">We work with startups, ecommerce brands, professional services, education, healthcare, finance, and growing enterprises.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernEight" aria-expanded="false" aria-controls="faqModernEight">
                            <i class="fa-solid fa-credit-card" aria-hidden="true"></i><span>Do you provide payment gateway and API integrations?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernEight" class="collapse" data-bs-parent="#faqModernRight"><div class="technofra-faq-answer">Yes. We integrate payment gateways, CRMs, analytics, shipping tools, and third-party APIs as required.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernNine" aria-expanded="false" aria-controls="faqModernNine">
                            <i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>Is my data and project information secure?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernNine" class="collapse" data-bs-parent="#faqModernRight"><div class="technofra-faq-answer">We follow secure development practices and keep your project data, access, and business information confidential.</div></div>
                    </div>
                    <div class="technofra-faq-item">
                        <button class="technofra-faq-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqModernTen" aria-expanded="false" aria-controls="faqModernTen">
                            <i class="fa-solid fa-medal" aria-hidden="true"></i><span>Why should I choose Technofra?</span><i class="fa-solid fa-plus faq-plus" aria-hidden="true"></i>
                        </button>
                        <div id="faqModernTen" class="collapse" data-bs-parent="#faqModernRight"><div class="technofra-faq-answer">You get a dedicated digital partner focused on thoughtful design, dependable technology, clear communication, and measurable growth.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End faq-sec -->

<script>
(function () {
    function dedupeShowcaseMobile() {
        var isMobile = window.matchMedia('(max-width: 767px)').matches;
        var seen = {};
        document.querySelectorAll('.studio-showcase-item:not(.d-none) .studio-showcase-thumb').forEach(function (thumb) {
            thumb.classList.remove('showcase-mobile-duplicate');
            if (!isMobile) return;
            var media = thumb.querySelector('img, video');
            if (!media) return;
            var key = media.tagName.toLowerCase() + ':' + (media.currentSrc || media.src || media.querySelector('source')?.src || '');
            if (seen[key]) thumb.classList.add('showcase-mobile-duplicate');
            seen[key] = true;
        });
    }
    dedupeShowcaseMobile();
    window.addEventListener('resize', dedupeShowcaseMobile);    function initTechnofraShowcaseMotion() {
        document.querySelectorAll('.technofra-testimonial-row-track').forEach(function (track) {
            if (!track.dataset.cloned) { track.innerHTML += track.innerHTML; track.dataset.cloned = 'true'; }
        });
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);        gsap.fromTo('.mark-about-main, .mark-about-description, .mark-about-stat',
            { y: 38, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.85, stagger: 0.12, ease: 'power3.out', scrollTrigger: { trigger: '.mark-about-section', start: 'top 78%', once: true } }
        );
        gsap.fromTo('.mark-about-image',
            { x: -55, opacity: 0, scale: 0.94 },
            { x: 0, opacity: 1, scale: 1, duration: 1.05, ease: 'power3.out', scrollTrigger: { trigger: '.mark-about-section', start: 'top 82%', once: true } }
        );
        gsap.fromTo('.technofra-services-showcase .services-intro > *, .technofra-service-card',
            { y: 34, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.75, stagger: 0.1, ease: 'power3.out', scrollTrigger: { trigger: '.technofra-services-showcase', start: 'top 78%', once: true } }
        );
        gsap.fromTo('.technofra-services-showcase .services-intro-image img',
            { scale: 1.14 },
            { scale: 1, duration: 1.25, ease: 'power2.out', scrollTrigger: { trigger: '.technofra-services-showcase', start: 'top 78%', once: true } }
        );
        gsap.fromTo('.technofra-faq-heading',
            { y: 36, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', scrollTrigger: { trigger: '.technofra-faq-modern', start: 'top 80%', once: true } }
        );
        gsap.fromTo('.technofra-faq-item',
            { y: 22, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.55, stagger: 0.08, ease: 'power2.out', scrollTrigger: { trigger: '.technofra-faq-modern', start: 'top 72%', once: true } }
        );
        gsap.fromTo('.technofra-testimonial-heading',
            { y: 34, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', scrollTrigger: { trigger: '.technofra-testimonial-area', start: 'top 80%', once: true } }
        );
        gsap.fromTo('.client-trust-content1',
            { x: -45, opacity: 0 },
            { x: 0, opacity: 1, duration: 0.9, ease: 'power3.out', scrollTrigger: { trigger: '.client-trust-sec1', start: 'top 80%', once: true } }
        );        document.querySelectorAll('.studio-showcase-item[data-speed]').forEach(function (column) {
            var speed = parseFloat(column.getAttribute('data-speed')) || 1;
            gsap.fromTo(column, { y: 90 * speed }, {
                y: -90 * speed,
                ease: 'none',
                scrollTrigger: {
                    trigger: '.studio-showcase-area',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.2
                }
            });
        });
        gsap.fromTo('.studio-showcase-thumb',
            { opacity: 0, y: 34 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.06,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: '.studio-showcase-area',
                    start: 'top 85%',
                    once: true
                }
            }
        );
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTechnofraShowcaseMotion);
    } else {
        initTechnofraShowcaseMotion();
    }
})();
</script>
<script>
window.addEventListener('load', function () {
    if (window.LenisScroll && typeof LenisScroll.getInstance === 'function' && !LenisScroll.getInstance()) {
        LenisScroll.init();
    }
    if (window.ScrollTrigger) { ScrollTrigger.refresh(); }
});
</script><script src='assets/js/book-call-widget.js' defer></script>
<?php include __DIR__ . '/footer.php'; ?>




