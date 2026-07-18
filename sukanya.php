<?php
$pageTitle = 'Sukanya India Case Study | Technofra';
$bodyClass = 'hero-video-page';
include __DIR__ . '/header.php';
?>

<style>
    .sukanya-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(18, 18, 18, 0.72), rgba(0, 0, 0, 0.19)), url('assets/images/new/sukanya.webp') center/cover no-repeat;
    }

    .sukanya-hero::before {
        content: "";
        position: absolute;
        inset: 0;
    }

    .sukanya-hero-content {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 860px;
        margin: 0 auto;
        padding: 140px 20px 120px;
        text-align: center;
        color: #ffffff;
    }

    .sukanya-hero-content h1 {
        margin-bottom: 20px;
        font-size: clamp(42px, 8vw, 88px);
        font-weight: 800;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        color: #ffffff;
    }

    .sukanya-hero-content p {
        max-width: 700px;
        margin: 0 auto 32px;
        font-size: 18px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.92);
    }

    .sukanya-hero-content .ibt-btn {
        background: #ffffff;
        color: #141414;
        border-color: #ffffff;
    }

    .sukanya-hero-content .ibt-btn:hover {
        background: transparent;
        color: #ffffff;
        border-color: #ffffff;
    }

    .wotm-branding-work {
        padding: 92px 0;
        background: radial-gradient(circle at left top, #faf9f7 0%, #f1efec 48%, #ebe8e3 100%);
    }

    .wotm-branding-grid {
        display: grid;
        grid-template-columns: minmax(260px, 360px) 1fr;
        align-items: center;
        gap: 48px;
    }

    .wotm-branding-copy h2 {
        margin: 0 0 20px;
        color: #121212;
        font-size: clamp(34px, 4vw, 52px);
        line-height: 1.05;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .wotm-branding-copy h2 span {
        color: #d6e738;
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
        transition: transform 0.25s ease;
    }

    .wotm-branding-cta:hover {
        color: #fff;
        text-decoration: none;
        transform: translateY(-2px);
    }

    .wotm-branding-visual {
        position: relative;
        min-height: 420px;
        border-radius: 8px;
        overflow: hidden;
    }

    .wotm-branding-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

.sukanya-products-showcase {
    padding: 42px 0 96px;
    background: linear-gradient(180deg, #f3f1ef 0%, #f3f1ee 100%);
}

.sukanya-products-shell {
    display: grid;
    grid-template-columns: minmax(240px, 300px) 1fr;
    gap: 28px;
    align-items: stretch;
    padding: 18px;
    border-radius: 22px;
    background: linear-gradient(135deg, #ffffff 0%, #f7f4f1 100%);
    box-shadow: 0 24px 60px rgba(58, 33, 22, 0.12);
}

    .sukanya-products-copy {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 24px 10px 24px 4px;
    }

    .sukanya-products-copy h2 {
        margin: 0 0 16px;
        color: #171717;
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.08;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

.sukanya-products-copy h2 span {
    color: #d5e22f;
}

    .sukanya-products-copy p {
        margin: 0 0 24px;
        max-width: 240px;
        color: #5f5a56;
        font-size: 14px;
        line-height: 1.7;
    }

    .sukanya-products-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #202020;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        text-decoration: none;
    }

    .sukanya-products-link:hover {
        color: #202020;
        text-decoration: none;
    }

    .sukanya-products-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }

    .sukanya-product-card {
        position: relative;
        padding: 12px;
        border-radius: 16px;
        background: #ffffff;
        box-shadow: 0 16px 32px rgba(35, 22, 17, 0.08);
    }

    .sukanya-product-like {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.92);
        color: #8b8b8b;
        font-size: 12px;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
    }

    .sukanya-product-media {
        aspect-ratio: 1 / 1.08;
        border-radius: 12px;
        overflow: hidden;
        background: #f8f4f1;
        margin-bottom: 12px;
    }

    .sukanya-product-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .sukanya-product-card h3 {
        margin: 0 0 8px;
        color: #1f1f1f;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.4;
    }

    .sukanya-product-price {
        margin: 0 0 8px;
        color: #141414;
        font-size: 13px;
        font-weight: 700;
    }

    .sukanya-product-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        color: #8a827c;
        font-size: 11px;
    }

    .sukanya-product-rating {
        color: #f6b51d;
        letter-spacing: 0.08em;
    }

    @media (max-width: 991px) {
        .wotm-branding-grid,
        .sukanya-products-shell {
            grid-template-columns: 1fr;
        }

        .sukanya-products-copy p {
            max-width: 100%;
        }

        .sukanya-products-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .sukanya-hero {
            min-height: 82vh;
        }

        .sukanya-hero-content {
            padding: 120px 18px 90px;
        }

        .sukanya-hero-content p {
            font-size: 16px;
            line-height: 1.7;
        }

        .wotm-branding-work {
            padding: 72px 0;
        }

        .wotm-branding-visual {
            min-height: auto;
        }

        .sukanya-products-showcase {
            padding: 12px 0 72px;
        }

        .sukanya-products-shell {
            padding: 16px;
        }

        .sukanya-products-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="sukanya-hero">
    <div class="container">
        <div class="sukanya-hero-content">
            <h1>Sukanya India</h1>
            <p>
                Premium feminine wear brand from Mumbai, known for elegant nightwear and loungewear crafted with comfort,
                style, and in-house excellence.
            </p>
            <a href="#" class="ibt-btn ibt-btn-outline" title="Shop Now">
                <span>Shop Now</span>
                <i class="icon-arrow-top"></i>
            </a>
        </div>
    </div>
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
                <img src="./assets/images/new/sukanya1.png" alt="Sukanya branding showcase">
            </div>
        </div>
    </div>
</section>

<section class="sukanya-products-showcase">
    <div class="container">
        <div class="sukanya-products-shell">
            <div class="sukanya-products-copy">
                <h2>Beautiful Products.<br><span>Built Perfectly.</span></h2>
                <p>High-quality product pages designed to highlight features and drive purchases.</p>
                <a class="sukanya-products-link" href="#">View Products <span>&rarr;</span></a>
            </div>

            <div class="sukanya-products-grid">
                <article class="sukanya-product-card">
                    <span class="sukanya-product-like"><i class="far fa-heart"></i></span>
                    <div class="sukanya-product-media">
                        <img src="https://www.sukanyaindia.in/cdn/shop/files/Untitled_design_40.png?v=1769163272&width=750" alt="Premium Handbag">
                    </div>
                    <h3>PYJAMA SET</h3>
                  
                </article>

                <article class="sukanya-product-card">
                    <span class="sukanya-product-like"><i class="far fa-heart"></i></span>
                    <div class="sukanya-product-media">
                        <img src="https://www.sukanyaindia.in/cdn/shop/files/Untitled_design_36.png?v=1769161152&width=750" alt="Minimal Watch">
                    </div>
                    <h3>Minimal Watch</h3>
                    <p class="sukanya-product-price">?1,999</p>
                    <div class="sukanya-product-meta">
                        <span class="sukanya-product-rating">?????</span>
                        <span>(96)</span>
                    </div>
                </article>

                <article class="sukanya-product-card">
                    <span class="sukanya-product-like"><i class="far fa-heart"></i></span>
                    <div class="sukanya-product-media">
                        <img src="./assets/images/event/shop1-3.png" alt="Urban Sneakers">
                    </div>
                    <h3>Urban Sneakers</h3>
                    <p class="sukanya-product-price">?2,299</p>
                    <div class="sukanya-product-meta">
                        <span class="sukanya-product-rating">?????</span>
                        <span>(154)</span>
                    </div>
                </article>

                <article class="sukanya-product-card">
                    <span class="sukanya-product-like"><i class="far fa-heart"></i></span>
                    <div class="sukanya-product-media">
                        <img src="./assets/images/event/shop1-4.png" alt="Aviator Sunglasses">
                    </div>
                    <h3>Aviator Sunglasses</h3>
                    <p class="sukanya-product-price">?1,199</p>
                    <div class="sukanya-product-meta">
                        <span class="sukanya-product-rating">?????</span>
                        <span>(87)</span>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>

