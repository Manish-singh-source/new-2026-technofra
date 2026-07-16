<?php
$pageTitle = 'Technofra';
$bodyClass = 'hero-video-page tf-ios-page';
include __DIR__ . '/header.php';
?>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Caveat:wght@600;700&display=swap" rel="stylesheet">


<style>
    /* ============================================
   RESPONSIVE TYPOGRAPHY SCALE
   Uses clamp(min, preferred, max) so text scales
   fluidly between mobile (~320px) and desktop (~1440px)
   with no media queries needed.
============================================ */

    :root {
        /* Headings */
        --h1: clamp(2rem, 1.4rem + 3vw, 3.5rem);
        --h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);
        --h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem);
        --h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem);
        --h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
        --h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);

        /* Body text */
        --p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem);
        --p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem);
        --p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem);
        --caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem);

        /* Line heights */
        --lh-heading: 1.2;
        --lh-body: 1.6;
        --lh-tight: 1.3;

        /* Letter spacing */
        --ls-heading: -0.02em;

        /* Section palette */
        --gp-bg: #f2f3fb;
        --gp-heading: #171a2e;
        --gp-body: #6b7085;
        --gp-accent: #5b4bf5;
        --gp-accent-2: #7c6bff;
        --gp-blob: #d9d5fb;
    }

    /* ============================================
   APPLY THE SCALE
============================================ */

    h1,
    .h1 {
        font-size: var(--h1);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        font-weight: 700;
    }

    h2,
    .h2 {
        font-size: var(--h2);
        line-height: var(--lh-heading);
        letter-spacing: var(--ls-heading);
        font-weight: 700;
    }

    h3,
    .h3 {
        font-size: var(--h3);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h4,
    .h4 {
        font-size: var(--h4);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h5,
    .h5 {
        font-size: var(--h5);
        line-height: var(--lh-tight);
        font-weight: 600;
    }

    h6,
    .h6 {
        font-size: var(--h6);
        line-height: var(--lh-tight);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    p,
    .p {
        font-size: var(--p);
        line-height: var(--lh-body);
    }

    .p-large {
        font-size: var(--p-large);
        line-height: var(--lh-body);
    }

    .p-small {
        font-size: var(--p-small);
        line-height: var(--lh-body);
    }

    .caption,
    small {
        font-size: var(--caption);
        line-height: var(--lh-body);
    }

    /* ============================================
   BASE
============================================ */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        color: var(--gp-body);
    }

    .team-hero-section {
        position: relative;
        overflow: hidden;
        background: var(--gp-bg);
        padding-block: clamp(3rem, 2.5rem + 3vw, 5.5rem);
        padding-top: 200px;
    }

    .team-hero-section .container {
        position: relative;
        z-index: 1;
    }

    /* Decorative wavy line + dot (bottom-left, behind content) */
    .gp-wave-decor {
        position: absolute;
        left: 0;
        bottom: 6%;
        width: 42%;
        max-width: 480px;
        height: auto;
        z-index: 0;
        opacity: 0.9;
        pointer-events: none;
    }

    /* -------- Left column (text) -------- */
    .gp-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: #e6e2fd;
        border-radius: 999px;
        padding: 0.45rem 1.1rem 0.45rem 0.6rem;
        color: var(--gp-accent);
        font-weight: 700;
        letter-spacing: 0.05em;
    }

    .gp-eyebrow .icon-circle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #d4cdfb;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        flex: 0 0 auto;
    }

    .gp-heading {
        color: var(--gp-heading);
        font-weight: 800;
        margin-top: 1.25rem;
    }

    .gp-heading .script {
        font-family: 'Caveat', cursive;
        font-weight: 700;
        color: var(--gp-accent);
        font-size: 1.15em;
        position: relative;
        display: inline-block;
        padding-inline: 0.05em;
    }

    .gp-heading .script::after {
        content: "";
        position: absolute;
        left: 2%;
        right: 2%;
        bottom: -0.08em;
        height: 3px;
        background: var(--gp-accent-2);
        border-radius: 2px;
    }

    .gp-lead {
        color: var(--gp-body);
        max-width: 480px;
        margin-top: 1.25rem;
    }

    /* -------- CTA buttons -------- */
    .gp-cta-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 1.75rem;
    }

    .gp-btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;
        padding: 0.85rem 1.6rem;
        border-radius: 12px;
        border: none;
        background: linear-gradient(90deg, var(--gp-accent) 0%, var(--gp-accent-2) 100%);
        color: #ffffff;
        font-weight: 600;
        font-size: var(--p);
        text-decoration: none;
        box-shadow: 0 14px 26px -12px rgba(91, 75, 245, 0.55);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .gp-btn-primary:hover {
        transform: translateY(-3px);
        color: #ffffff;
        box-shadow: 0 18px 30px -10px rgba(91, 75, 245, 0.6);
    }

    .gp-btn-primary i {
        transition: transform 0.25s ease;
    }

    .gp-btn-primary:hover i {
        transform: translateX(3px);
    }

    .gp-btn-outline {
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;
        padding: 0.85rem 1.6rem;
        border-radius: 12px;
        border: 1.5px solid #d8d4f5;
        background: #ffffff;
        color: var(--gp-accent);
        font-weight: 600;
        font-size: var(--p);
        text-decoration: none;
        transition: border-color 0.25s ease, transform 0.25s ease;
    }

    .gp-btn-outline:hover {
        transform: translateY(-3px);
        border-color: var(--gp-accent);
        color: var(--gp-accent);
    }

    /* -------- Right column (image + blob) -------- */
    .gp-visual-wrap {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 380px;
    }

    .gp-blob-shape {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .gp-blob-shape svg {
        width: 100%;
        height: 100%;
    }

    .gp-photo {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 620px;
        height: auto;
        display: block;
        filter: drop-shadow(0 24px 40px rgba(23, 26, 46, 0.18));
    }

    .gp-lightbulb-decor {
        position: absolute;
        top: -6%;
        left: 22%;
        width: 90px;
        z-index: 2;
        pointer-events: none;
    }

    .gp-dot-grid {
        position: absolute;
        top: 18%;
        right: 4%;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 8px;
        z-index: 0;
        pointer-events: none;
    }

    .gp-dot-grid span {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--gp-accent-2);
        opacity: 0.55;
        display: block;
    }

    .gp-visual-wrap * {
        max-width: 100%;
    }

    .gp-lead,
    .gp-heading,
    .gp-eyebrow {
        max-width: 100%;
        word-wrap: break-word;
    }

    /* ============================================
   MEDIA QUERIES
============================================ */

    @media (max-width: 1919.98px) {
        .team-hero-section {
            padding-block: 5.5rem;
            padding-top: 200px;
        }
    }

    @media (max-width: 1599.98px) {
        .team-hero-section {
            padding-block: 5rem;
            padding-top: 200px;
        }

        .gp-photo {
            max-width: 560px;
        }
    }

    @media (max-width: 1399.98px) {
        .team-hero-section {
            padding-block: 4.5rem;
            padding-top: 200px;
        }

        .gp-photo {
            max-width: 520px;
        }
    }

    @media (max-width: 1199.98px) {
        .team-hero-section {
            padding-block: 4rem;
            padding-top: 110px;
        }

        .gp-lead {
            max-width: 100%;
        }

        .gp-photo {
            max-width: 460px;
        }

        .gp-lightbulb-decor {
            width: 72px;
        }
    }

    @media (max-width: 991.98px) {
        .team-hero-section {
            padding-block: 3.5rem;
            padding-top: 100px;
        }

        .gp-visual-wrap {
            min-height: 320px;
            margin-top: 2.5rem;
        }

        .gp-wave-decor {
            display: none;
        }

        .gp-lightbulb-decor {
            left: 12%;
            top: -4%;
            width: 64px;
        }
    }

    @media (max-width: 767.98px) {
        .team-hero-section {
            padding-block: 3rem;
            padding-top: 100px;
            text-align: center;
        }

        .gp-lead {
            margin-inline: auto;
        }

        .gp-cta-group {
            justify-content: center;
        }

        .gp-visual-wrap {
            min-height: 280px;
            margin-top: 2rem;
        }

        .gp-photo {
            max-width: 420px;
        }

        .gp-dot-grid {
            display: none;
        }
    }

    @media (max-width: 575.98px) {
        .team-hero-section {
            padding-block: 2.5rem;
            padding-top: 100px;
        }

        .gp-btn-primary,
        .gp-btn-outline {
            width: 100%;
            justify-content: center;
        }

        .gp-cta-group {
            flex-direction: column;
        }

        .gp-photo {
            max-width: 100%;
        }

        .gp-lightbulb-decor {
            width: 52px;
            left: 6%;
        }
    }

    @media (max-width: 479.98px) {
        .team-hero-section {
            padding-block: 2.25rem;
            padding-top: 90px;
        }

        .gp-eyebrow {
            padding: 0.4rem 0.9rem 0.4rem 0.5rem;
        }

        .gp-eyebrow .icon-circle {
            width: 26px;
            height: 26px;
        }
    }

    @media (max-width: 359.98px) {
        .team-hero-section {
            padding-block: 2rem;
            padding-top: 90px;
        }

        .gp-visual-wrap {
            min-height: 220px;
        }

        .gp-lightbulb-decor {
            display: none;
        }
    }

    .counter-box8 .counter-number,
    .counter-box8 .counter-text {
        font-size: 90px;
    }

    .team-img .sub-title {
        font-size: 50px;
    }
</style>


<section class="team-hero-section">

    <!-- Decorative wavy line (bottom-left) -->
    <svg class="gp-wave-decor" viewBox="0 0 480 160" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C80,10 120,90 200,60 C280,30 320,110 480,70" fill="none" stroke="#c9c3f7" stroke-width="2" />
        <circle cx="120" cy="120" r="8" fill="#5b4bf5" />
    </svg>

    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Text column -->
            <div class="col-12 col-lg-6">
                <span class="gp-eyebrow caption">
                    <span class="icon-circle"><i class="fa-solid fa-people-group"></i></span>
                    OUR TEAM
                </span>

                <h1 class="gp-heading">
                    Great People.<br>
                    Stronger <span class="script">Together.</span>
                </h1>

                <p class="p-large gp-lead">
                    A team of passionate problem-solvers dedicated to delivering smart, reliable, and impactful solutions.
                </p>

                <div class="gp-cta-group">
                    <a href="#" class="gp-btn-primary">
                        Meet Our Team
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#" class="gp-btn-outline">
                        Our Approach
                        <i class="fa-solid fa-people-group"></i>
                    </a>
                </div>
            </div>

            <!-- Image column -->
            <div class="col-12 col-lg-6">
                <div class="gp-visual-wrap">

                    <!-- Decorative blob shape behind the photo -->
                    <div class="gp-blob-shape">
                        <svg viewBox="0 0 600 500" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                            <path d="M120,60 C220,-20 380,-10 460,70 C540,150 560,260 480,340 C400,420 260,460 160,400 C60,340 20,220 60,140 C75,105 95,80 120,60 Z"
                                fill="var(--gp-blob)" opacity="0.9" />
                        </svg>
                    </div>

                    <span class="gp-dot-grid">
                        <span></span><span></span><span></span><span></span><span></span>
                        <span></span><span></span><span></span><span></span><span></span>
                        <span></span><span></span><span></span><span></span><span></span>
                    </span>

                    <!-- Lightbulb decorative icon -->
                    <svg class="gp-lightbulb-decor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="45" r="30" fill="#ffffff" />
                        <g stroke="#5b4bf5" stroke-width="2.5" fill="none" stroke-linecap="round">
                            <path d="M50 22 a16 16 0 0 1 8 30 v6 h-16 v-6 a16 16 0 0 1 8 -30 Z" />
                            <line x1="46" y1="62" x2="54" y2="62" />
                            <line x1="50" y1="6" x2="50" y2="14" />
                            <line x1="28" y1="14" x2="33" y2="19" />
                            <line x1="72" y1="14" x2="67" y2="19" />
                        </g>
                        <path d="M60 70 C68 78 75 82 85 82" stroke="#5b4bf5" stroke-width="2" fill="none" stroke-dasharray="3 4" marker-end="url(#arrow)" />
                        <defs>
                            <marker id="arrow" markerWidth="8" markerHeight="8" refX="4" refY="4" orient="auto">
                                <path d="M0,0 L8,4 L0,8 Z" fill="#5b4bf5" />
                            </marker>
                        </defs>
                    </svg>

                    <!-- Team photo (transparent PNG cutout) -->
                    <img src="./assets/images/team-photo-transparent.png" alt="Four smiling team members collaborating around a laptop" class="gp-photo">

                </div>
            </div>

        </div>
    </div>
</section>


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
                            <a href='team-single.html'><img src="assets/images/team/gopalsir.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Gopal Giri</a></h4>
                            <span class="designation">/ Director & Co-Founder /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='team-single.html'><img src="assets/images/team/bhavna.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Bhavna Giri</a></h4>
                            <span class="designation">/ CEO & Co-Founder /</span>
                        </div>
                    </div>
                    <div class="team-card v3">
                        <div class="team-img">
                            <a href='team-single.html'><img src="assets/images/team/manish.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Manish Singh</a></h4>
                            <span class="designation">/ Software Engineer /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='team-single.html'><img src="assets/images/team/khushi.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Khushi Yadav</a></h4>
                            <span class="designation">/ Digital Marketing Head /</span>
                        </div>
                    </div>
                    <div class="team-card ">
                        <div class="team-img">
                            <a href='team-single.html'><img src="assets/images/team/saurabh.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Saurabh Damale</a></h4>
                            <span class="designation">/ Laravel Developer /</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member2 v2">
                    <div class="team-card">
                        <div class="team-img">
                            <a href='team-single.html'><img src="assets/images/team/shubham.webp" alt="AI Agency & Technology HTML Template"></a>
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
                            <h4 class="name"><a href='team-single.html' title>Shubham Shinde</a></h4>
                            <span class="designation">/ App Developer /</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End team-section2 -->


<?php include __DIR__ . '/footer.php'; ?>
