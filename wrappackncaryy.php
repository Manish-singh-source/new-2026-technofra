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
        background: linear-gradient(180deg, #f0e6d3 0%, #efe2c4 100%);
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
            linear-gradient(90deg, rgba(29, 18, 8, 0.34) 0%, rgba(29, 18, 8, 0.18) 34%, rgba(29, 18, 8, 0.04) 60%, rgba(29, 18, 8, 0.08) 100%),
            url("assets/images/wrappack/1.webp") center center / cover no-repeat;
        box-shadow: 0 26px 70px rgba(112, 72, 22, 0.18);
    }

    .wrappack-banner::before,
    .wrappack-banner::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .wrappack-banner::before {
        background: linear-gradient(90deg, rgba(255, 246, 225, 0.38) 0%, rgba(255, 246, 225, 0.06) 48%, rgba(255, 246, 225, 0.1) 100%);
        mix-blend-mode: screen;
    }

    .wrappack-banner::after {
        background:
            radial-gradient(circle at 16% 16%, rgba(255, 255, 255, 0.18), transparent 22%),
            radial-gradient(circle at 88% 22%, rgba(255, 224, 177, 0.14), transparent 18%);
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
        border: 1px solid rgba(58, 44, 24, 0.3);
        background: rgba(244, 225, 194, 0.28);
        color: #2f2618;
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
        background: #ca8a04;
        box-shadow: 0 0 0 5px rgba(202, 138, 4, 0.14);
    }

    .wrappack-banner__title {
        margin: 0 0 18px;
        max-width: 760px;
        font-size: clamp(3.1rem, 7vw, 6.6rem);
        line-height: 0.9;
        letter-spacing: -0.08em;
        color: #fff8ea;
        text-transform: uppercase;
        text-shadow: 0 10px 20px rgba(63, 39, 6, 0.58), 0 0 1px rgba(0, 0, 0, 0.14);
    }

    .wrappack-banner__title span {
        display: block;
        color: #ffe9b4;
    }

    .wrappack-banner__lead {
        max-width: 560px;
        margin-bottom: 30px;
        color: rgba(255, 249, 234, 0.95);
        font-size: 18px;
        line-height: 1.8;
        text-shadow: 0 2px 10px rgba(70, 41, 8, 0.18);
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
        color: #2e2617;
        background: #f6efdd;
        box-shadow: 0 16px 30px rgba(61, 42, 12, 0.16);
    }

    .wrappack-banner__button--secondary {
        color: #fff;
        background: rgba(43, 30, 14, 0.28);
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
        background: rgba(255, 247, 227, 0.18);
        color: rgba(255, 251, 241, 0.96);
        border: 1px solid rgba(255, 245, 222, 0.16);
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
        font-size: 14px;
        font-weight: 600;
    }

    .wrappack-banner__meta-item strong {
        font-weight: 800;
    }

    .wrappack-banner__meta-item i {
        color: #ffe08f;
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

      
    }

    @media (max-width: 575px) {
        .wrappack-banner {
            min-height: auto;
            margin-top: 96px;
            border-radius: 22px;
            padding: 14px;
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
    }
</style>

<section class="wrappack-banner-page">
    <div class="container2">
        <section class="wrappack-banner">
            <div class="wrappack-banner__inner">
                <div class="row align-items-center w-100">
                    <div class="col-lg-9 col-xl-8">
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
                                <a href="contact.php" class="wrappack-banner__button wrappack-banner__button--primary">
                                    View Portfolio
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

<?php include __DIR__ . '/footer.php'; ?>
