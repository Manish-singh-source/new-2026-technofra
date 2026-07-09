<style>

h3 {
    letter-spacing: 0px !important;
}
.tf-crm-banner{
    width:100%;
    overflow:hidden;
}

.tf-brand-strip{
    padding:28px 0 34px;
    background:linear-gradient(180deg,#ffffff 0%,#f7f9ff 100%);
    overflow:hidden;
}

.tf-brand-strip__inner{
    display:grid;
    grid-template-columns:minmax(220px,300px) 1fr;
    gap:clamp(18px,3vw,38px);
    align-items:center;
}

.tf-brand-strip__copy{
    padding-right:clamp(0px,2vw,24px);
    border-right:1px solid rgba(18,48,168,.12);
}

.tf-brand-strip__title{
    margin:0;
    font-family:inherit;
    font-size:clamp(1.05rem,1.35vw,1.45rem);
    line-height:1.32;
    letter-spacing:-.03em;
    color:#0f1e52;
}

.tf-brand-strip__slider{
    min-width:0;
}

.tf-brand-strip .swiper.brand{
    width:100%;
}

.tf-brand-strip .swiper.brand .swiper-wrapper{
    align-items:stretch;
}

.tf-brand-strip .swiper.brand .swiper-slide{
    height:auto;
}

.tf-brand-card{
    display:flex;
    align-items:center;
    justify-content:center;
    height:100%;
    min-height:92px;
    padding:18px 24px;
    border-radius:28px;
    background:rgba(255,255,255,.98);
    border:1px solid rgba(18,48,168,.12);
    box-shadow:0 12px 30px rgba(15,23,42,.05);
    transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease;
}

.tf-brand-card:hover{
    transform:translateY(-2px);
    border-color:rgba(18,48,168,.22);
    box-shadow:0 16px 34px rgba(15,23,42,.08);
}

.tf-brand-card img{
    display:block;
    width:auto;
    max-width:100%;
    max-height:36px;
    object-fit:contain;
    opacity:.72;
    filter:grayscale(1);
}

@media(max-width:991px){
    .tf-brand-strip__inner{
        grid-template-columns:1fr;
    }

    .tf-brand-strip__copy{
        padding-right:0;
        padding-bottom:14px;
        border-right:0;
        border-bottom:1px solid rgba(18,48,168,.12);
    }
}

@media(max-width:768px){
    .tf-brand-strip{
        padding:20px 0 28px;
    }

    .tf-brand-strip__title{
        font-size:1rem;
    }

    .tf-brand-card{
        min-height:78px;
        padding:14px 16px;
        border-radius:22px;
    }

    .tf-brand-card img{
        max-height:28px;
    }
}

@media(max-width:360px){
    .tf-brand-card{
        min-height:72px;
        padding:12px 14px;
    }
}

.tf-steps{
    padding:40px 0 86px;
    background:
    radial-gradient(circle at top center, rgba(110, 94, 255, .06), transparent 28%),
    linear-gradient(180deg, #f7f8ff 0%, #f3f5fb 100%);
}

.tf-steps__header{
    max-width:1200px;
    margin:0 auto 30px;
    text-align:center;
}

.tf-steps__title{
    margin:0;
    color:#11164a;
    font-size:50px;
    line-height:1.05;
    letter-spacing:-.055em;
    font-weight:700;
}

.tf-steps__lead{
    margin:14px auto 0;
    max-width:66ch;
    color:rgba(17,22,74,.7);
    font-size:clamp(.98rem,1.1vw,1.16rem);
    line-height:1.65;
}

.tf-steps__layout{
    display:grid;
    grid-template-columns:minmax(0,1.18fr) minmax(360px,.82fr);
    gap:24px;
    align-items:stretch;
}

.tf-steps__visual{
    padding:18px;
    border-radius:28px;
    background:linear-gradient(180deg,#6f5cff 0%,#705df4 100%);
    box-shadow:0 24px 50px rgba(77,72,196,.22);
}

.tf-steps__image-wrap{
    height:100%;
    overflow:hidden;
    border-radius:20px;
    background:#fff;
    box-shadow:inset 0 0 0 1px rgba(255,255,255,.55);
}

.tf-steps__image{
    display:block;
    width:100%;
    height:100%;
    object-fit:fill;
}

.tf-steps__stack{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.tf-step-card{
    display:grid;
    grid-template-columns:auto 1fr auto;
    gap:16px;
    align-items:center;
    padding:18px 20px;
    min-height:132px;
    border-radius:22px;
    background:rgba(255,255,255,.88);
    border:1px solid rgba(65,103,255,.16);
    box-shadow:0 16px 36px rgba(15,23,42,.06);
    backdrop-filter:blur(4px);
}

.tf-step-card__index{
    width:56px;
    height:56px;
    border-radius:50%;
    display:grid;
    place-items:center;
    flex:0 0 auto;
    color:#fff;
    font-size:1.1rem;
    font-weight:700;
    background:linear-gradient(135deg, #5d52ff 0%, #2f5cff 100%);
    box-shadow:0 12px 24px rgba(65,103,255,.22);
}

.tf-step-card__content{
    min-width:0;
}

.tf-step-card__title{
    margin:0;
    color:#121845;
    font-size:clamp(1rem,1.15vw,1.3rem);
    line-height:1.2;
    font-weight:700;
}

.tf-step-card__text{
    margin:8px 0 0;
    color:rgba(18,24,69,.72);
    font-size:.96rem;
    line-height:1.65;
}

.tf-step-card__icon{
    width:76px;
    height:76px;
    display:grid;
    place-items:center;
    border-radius:20px;
    color:#6b6bf7;
    background:linear-gradient(180deg, rgba(109, 99, 255, .1) 0%, rgba(109, 99, 255, .04) 100%);
    border:1px solid rgba(109, 99, 255, .16);
    font-size:1.75rem;
}

.tf-step-card--compact{
    min-height:106px;
}

.tf-step-card--compact .tf-step-card__icon{
    width:64px;
    height:64px;
    font-size:1.45rem;
}

@media(max-width:991px){
    .tf-steps{
        padding:36px 0 78px;
    }

    .tf-steps__layout{
        grid-template-columns:1fr;
    }
}

@media(max-width:768px){
    .tf-steps__header{
        margin-bottom:22px;
    }

    .tf-steps__title{
        font-size:clamp(1.8rem,8vw,3rem);
    }

    .tf-steps__lead{
        font-size:.96rem;
    }

    .tf-steps__visual{
        padding:14px;
        border-radius:24px;
    }

    .tf-step-card{
        grid-template-columns:auto 1fr;
        align-items:flex-start;
        padding:16px 16px;
        gap:12px;
    }

    .tf-step-card__icon{
        grid-column:1 / -1;
        order:-1;
        width:58px;
        height:58px;
        margin-bottom:4px;
        font-size:1.35rem;
    }
}

@media(max-width:420px){
    .tf-steps{
        padding:30px 0 68px;
    }

    .tf-step-card{
        border-radius:18px;
    }

    .tf-step-card__index{
        width:48px;
        height:48px;
        font-size:1rem;
    }

    .tf-step-card__title{
        font-size:1rem;
    }

    .tf-step-card__text{
        font-size:.9rem;
        line-height:1.55;
    }
}

.tf-why{
    padding:30px 0 96px;
    background:
    radial-gradient(circle at top center, rgba(97, 83, 255, .06), transparent 26%),
    linear-gradient(180deg, #f3f5fb 0%, #f6f7fb 100%);
}

.tf-why__header{
    max-width:980px;
    margin:0 auto 30px;
    text-align:center;
}

.tf-why__title{
    margin:0;
    color:#11164a;
    font-size:clamp(2rem,3.9vw,4.15rem);
    line-height:1.04;
    letter-spacing:-.055em;
    font-weight:800;
}

.tf-why__lead{
    margin:14px auto 0;
    max-width:64ch;
    color:rgba(17,22,74,.7);
    font-size:clamp(.98rem,1.08vw,1.14rem);
    line-height:1.6;
}

.tf-why__grid{
    display:grid;
    grid-template-columns:repeat(4, minmax(0,1fr));
    gap:24px;
    align-items:start;
}

.tf-why-card{
    position:relative;
    overflow:hidden;
    min-height:255px;
    padding:24px 22px 22px;
    border-radius:20px;
    border:1px solid rgba(71,109,255,.22);
    background:linear-gradient(180deg, rgba(255,255,255,.94) 0%, rgba(255,255,255,.82) 100%);
    box-shadow:0 18px 36px rgba(17,22,74,.06);
    backdrop-filter:blur(6px);
    opacity:0;
    transform:translateY(24px);
    animation:tf-fade-up .72s ease forwards;
}

.tf-why-card::before{
    content:"";
    position:absolute;
    inset:-18% -6% auto auto;
    width:160px;
    height:160px;
    border-radius:50%;
    background:radial-gradient(circle, rgba(94, 104, 255, .16) 0%, rgba(94,104,255,0) 68%);
    pointer-events:none;
}

.tf-why-card:nth-child(1){
    min-height:286px;
    margin-top:0;
    background:linear-gradient(180deg, rgba(255,255,255,.98) 0%, rgba(255,255,255,.86) 100%);
}

.tf-why-card:nth-child(2){
    min-height:232px;
    margin-top:28px;
    background:linear-gradient(180deg, rgba(244,246,250,.98) 0%, rgba(238,241,247,.94) 100%);
}

.tf-why-card:nth-child(3){
    min-height:286px;
    margin-top:0;
}

.tf-why-card:nth-child(4){
    min-height:232px;
    margin-top:28px;
    background:linear-gradient(180deg, rgba(244,246,250,.98) 0%, rgba(238,241,247,.94) 100%);
}

.tf-why-card:nth-child(1){ animation-delay:.05s; }
.tf-why-card:nth-child(2){ animation-delay:.15s; }
.tf-why-card:nth-child(3){ animation-delay:.25s; }
.tf-why-card:nth-child(4){ animation-delay:.35s; }

.tf-why-card__top{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap:14px;
}

.tf-why-card__metric{
    margin:0;
    color:#11164a;
    font-size:clamp(2rem,2.6vw,3rem);
    line-height:1;
    font-weight:800;
    letter-spacing:-.05em;
}

.tf-why-card__dot{
    width:16px;
    height:16px;
    flex:0 0 auto;
    margin-top:10px;
    border-radius:50%;
    border:4px solid #5d52ff;
    background:#fff;
    box-shadow:0 6px 14px rgba(93,82,255,.18);
}

.tf-why-card__body{
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    min-height:170px;
    padding-top:18px;
}

.tf-why-card__text{
    margin:0;
    max-width:26ch;
    color:rgba(17,22,74,.72);
    font-size:clamp(.96rem,1vw,1.08rem);
    line-height:1.55;
}

.tf-why-card:nth-child(1) .tf-why-card__text,
.tf-why-card:nth-child(3) .tf-why-card__text{
    max-width:24ch;
}

@keyframes tf-fade-up{
    from{
        opacity:0;
        transform:translateY(24px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@media(max-width:1199px){
    .tf-why__grid{
        grid-template-columns:repeat(2, minmax(0,1fr));
    }

    .tf-why-card{
        margin-top:0 !important;
        min-height:230px;
    }
}

@media(max-width:768px){
    .tf-why{
        padding:24px 0 76px;
    }

    .tf-why__title{
        font-size:clamp(1.8rem,8vw,3rem);
    }

    .tf-why__lead{
        font-size:.96rem;
    }

    .tf-why__grid{
        grid-template-columns:1fr;
        gap:16px;
    }

    .tf-why-card{
        min-height:210px;
        padding:20px 18px;
    }

    .tf-why-card__body{
        min-height:140px;
    }
}

@media(prefers-reduced-motion:reduce){
    .tf-why-card{
        animation:none;
        opacity:1;
        transform:none;
    }
}

/* MAIN HERO SECTION */

.crm-hero-bg{
    position:relative;
    min-height:820px;
    background:
    url("assets/images/bg/banner_crm.png")
    center 140px / 100% auto no-repeat;
    overflow:hidden;
    /* space below header */
    padding-top:175px;
}

/* WHITE SOFT TOP LAYER */

.crm-hero-bg:before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:300px;
    background:
    linear-gradient(
        180deg,
        rgba(255,255,255,.85),
        rgba(255,255,255,0)
    );
    z-index:1;
}

/* TEXT AREA */

.crm-content{
    position:relative;
    z-index:5;
    text-align:center;
}

/* CRM DEVELOPMENT BADGE */

.crm-tag{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:8px 30px;
    border-radius:50px;
    background:#dce8ff;
    color:#006cff;
    font-size:14px;
    font-weight:800;
}

/* TITLE */

.crm-content h1{
    margin:12px 0 0;
    font-size:55px;
    line-height:1.0;
    font-weight:900;
    letter-spacing:-3px;
    color:#02084d;
}

.crm-content h1 span{
    color:#0072ff;
}

/* DESCRIPTION */

.crm-content p{
    margin-top:18px;
    font-size:17px;
    line-height:1.6;
    color:#222;
}

/* BUTTONS */

.crm-buttons{
    margin-top:25px;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
}

.crm-buttons a{
    padding:16px 35px;
    border-radius:50px;
    font-weight:800;
    text-decoration:none;
}

/* BLUE BUTTON */

.crm-btn-primary{
    background:#126dff;
    color:white;
}

/* OUTLINE BUTTON */

.crm-btn-outline{
    background:white;
    color:#000;
    border:2px solid #126dff;
}

/* MOBILE RESPONSIVE */

@media(max-width:768px){
    .crm-hero-bg{
        min-height:650px;
        padding-top:80px;
        background:
        url("assets/images/bg/banner_crm.png")
        center bottom / cover no-repeat;
    }

    .crm-content{
        padding:0 20px;
    }

    .crm-content h1{
        font-size:38px;
        letter-spacing:-2px;
    }

    .crm-content p{
        font-size:14px;
    }

    .crm-buttons{
        flex-direction:column;
        gap:12px;
    }

    .crm-buttons a{
        padding:14px 28px;
    }
}

</style>

<main>

<section class="tf-crm-banner">

<div class="crm-hero-bg">

    <div class="crm-content">

        <div class="crm-tag">
            CRM DEVELOPMENT
        </div>

        <h1>
            CRM Development Company <br>
            in <span>Mumbai</span>
        </h1>

        <p>
            Custom CRM Solutions to Manage Leads, Customers & Business <br>
            Processes - Built for Growth, Designed for You.
        </p>

        <div class="crm-buttons">

            <a href="#" class="crm-btn-primary">
                Request a Demo &rarr;
            </a>

            <a href="#" class="crm-btn-outline">
                Talk to Our Experts
            </a>

        </div>

    </div>

</div>

</section>

<section class="tf-brand-strip">
    <div class="container">
        <div class="tf-brand-strip__inner">
            <div class="tf-brand-strip__copy">
                <h2 class="tf-brand-strip__title">Endorsed by the globe's leading innovative enterprises.</h2>
            </div>

            <div class="tf-brand-strip__slider">
                <div class="swiper brand">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Blue Orbith">
                                <img src="assets/images/brand/blueorbith.png" alt="Blue Orbith">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/brand/digikcon.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Grid Infinity">
                                <img src="assets/images/brand/grid-infinity.png" alt="Grid Infinity">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Mark Identitiez">
                                <img src="assets/images/brand/markidentitiez.png" alt="Mark Identitiez">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Blue Orbith">
                                <img src="assets/images/brand/blueorbith.png" alt="Blue Orbith">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/brand/digikcon.png" alt="Digikcon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-steps">
    <div class="container">
        <div class="tf-steps__header">
            <h2 class="tf-steps__title">Get Started with CRM Development in 3 Easy Steps</h2>
            <p class="tf-steps__lead">Build a custom CRM solution with a streamlined process designed to improve workflows, customer management, and business growth.</p>
        </div>

        <div class="tf-steps__layout">
            <div class="tf-steps__visual">
                <div class="tf-steps__image-wrap">
                    <img class="tf-steps__image" src="assets/images/CRM1.png" alt="CRM dashboard preview">
                </div>
            </div>

            <div class="tf-steps__stack">
                <article class="tf-step-card">
                    <div class="tf-step-card__index">01</div>
                    <div class="tf-step-card__content">
                        <h3 class="tf-step-card__title">Discover &amp; Plan</h3>
                        <p class="tf-step-card__text">We analyze your business needs, workflows, and customer journey to define the right CRM strategy.</p>
                    </div>
                    <div class="tf-step-card__icon" aria-hidden="true">
                        <i class="fas fa-search"></i>
                    </div>
                </article>

                <article class="tf-step-card tf-step-card--compact">
                    <div class="tf-step-card__index">02</div>
                    <div class="tf-step-card__content">
                        <h3 class="tf-step-card__title">Design &amp; Develop</h3>
                        <p class="tf-step-card__text">Our team designs and develops a custom CRM with modules, automation, and integrations built for your process.</p>
                    </div>
                    <div class="tf-step-card__icon" aria-hidden="true">
                        <i class="fas fa-code"></i>
                    </div>
                </article>

                <article class="tf-step-card tf-step-card--compact">
                    <div class="tf-step-card__index">03</div>
                    <div class="tf-step-card__content">
                        <h3 class="tf-step-card__title">Test &amp; Launch</h3>
                        <p class="tf-step-card__text">We test, optimize, and deploy your CRM system to ensure smooth performance and long-term scalability.</p>
                    </div>
                    <div class="tf-step-card__icon" aria-hidden="true">
                        <i class="fas fa-rocket"></i>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="tf-why">
    <div class="container">
        <div class="tf-why__header">
            <h2 class="tf-why__title">Why Businesses Choose CRM Development</h2>
            <p class="tf-why__lead">Custom CRM solutions help businesses streamline sales, automate workflows, and manage customer relationships more efficiently.</p>
        </div>

        <div class="tf-why__grid">
            <article class="tf-why-card">
                <div class="tf-why-card__top">
                    <h3 class="tf-why-card__metric">45%</h3>
                    <span class="tf-why-card__dot" aria-hidden="true"></span>
                </div>
                <div class="tf-why-card__body">
                    <p class="tf-why-card__text">Faster Lead Tracking and follow-up automation.</p>
                </div>
            </article>

            <article class="tf-why-card">
                <div class="tf-why-card__top">
                    <h3 class="tf-why-card__metric">3x</h3>
                    <span class="tf-why-card__dot" aria-hidden="true"></span>
                </div>
                <div class="tf-why-card__body">
                    <p class="tf-why-card__text">Improved sales productivity with centralized CRM workflows.</p>
                </div>
            </article>

            <article class="tf-why-card">
                <div class="tf-why-card__top">
                    <h3 class="tf-why-card__metric">100%</h3>
                    <span class="tf-why-card__dot" aria-hidden="true"></span>
                </div>
                <div class="tf-why-card__body">
                    <p class="tf-why-card__text">Centralized customer data for smarter decisions and better service.</p>
                </div>
            </article>

            <article class="tf-why-card">
                <div class="tf-why-card__top">
                    <h3 class="tf-why-card__metric">24/7</h3>
                    <span class="tf-why-card__dot" aria-hidden="true"></span>
                </div>
                <div class="tf-why-card__body">
                    <p class="tf-why-card__text">Real-time dashboards, reports, and business insights anytime.</p>
                </div>
            </article>
        </div>
    </div>
</section>

</main>
