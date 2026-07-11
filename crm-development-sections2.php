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

/* -----------------------------
   Motion enhancements
------------------------------ */

.crm-hero-bg{
    position:relative;
}

.crm-hero-bg::after{
    content:"";
    position:absolute;
    inset:auto auto 8% 50%;
    width:320px;
    height:320px;
    transform:translateX(-50%);
    border-radius:50%;
    background:radial-gradient(circle, rgba(0,114,255,.18) 0%, rgba(0,114,255,0) 70%);
    filter:blur(10px);
    animation:tf-hero-orb 10s ease-in-out infinite alternate;
    pointer-events:none;
    z-index:0;
}

.crm-content > *{
    opacity:0;
    transform:translateY(18px);
    animation:tf-hero-rise .8s ease forwards;
}

.crm-tag{
    animation-delay:.08s;
}

.crm-content h1{
    animation:tf-hero-rise .9s ease forwards;
    animation-delay:.18s;
}

.crm-content p{
    animation:tf-hero-rise .9s ease forwards;
    animation-delay:.3s;
}

.crm-buttons{
    opacity:0;
    transform:translateY(18px);
    animation:tf-hero-rise .9s ease forwards;
    animation-delay:.42s;
}

.crm-buttons a{
    position:relative;
    overflow:hidden;
    transition:transform .25s ease,box-shadow .25s ease,background-color .25s ease,color .25s ease,border-color .25s ease;
}

.crm-buttons a::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(120deg, transparent 18%, rgba(255,255,255,.24) 50%, transparent 82%);
    transform:translateX(-120%);
    transition:transform .6s ease;
    pointer-events:none;
}

.crm-buttons a:hover{
    transform:translateY(-2px);
    box-shadow:0 16px 34px rgba(18,109,255,.18);
}

.crm-buttons a:hover::after{
    transform:translateX(120%);
}

.tf-brand-card,
.tf-step-card,
.tf-why-card,
.tf-crm-stat,
.tf-crm-list__row,
.tf-crm-feature,
.tf-crm-dark-image,
.tf-crm-faq-graphic,
.tf-crm-faq-list .faq-item,
.tf-steps__visual,
.tf-crm-dash,
.tf-crm-list{
    transition:transform .28s ease,box-shadow .28s ease,border-color .28s ease,background-color .28s ease;
}

.tf-brand-card:hover,
.tf-step-card:hover,
.tf-why-card:hover,
.tf-crm-stat:hover,
.tf-crm-list__row:hover,
.tf-crm-feature:hover,
.tf-crm-dark-image:hover,
.tf-crm-faq-graphic:hover,
.tf-steps__visual:hover,
.tf-crm-dash:hover,
.tf-crm-list:hover{
    transform:translateY(-4px);
}

.tf-step-card:hover{
    box-shadow:0 20px 40px rgba(15,23,42,.09);
}

.tf-step-card:hover .tf-step-card__icon{
    transform:translateY(-2px) scale(1.03);
}

.tf-step-card__icon{
    transition:transform .28s ease, box-shadow .28s ease;
}

.tf-step-card__index{
    transition:transform .28s ease, box-shadow .28s ease;
}

.tf-step-card:hover .tf-step-card__index{
    transform:scale(1.04);
    box-shadow:0 14px 26px rgba(65,103,255,.26);
}

.tf-why-card:hover{
    box-shadow:0 22px 42px rgba(17,22,74,.1);
}

.tf-why-card:hover::before{
    transform:scale(1.05);
}

.tf-why-card::before{
    transition:transform .4s ease;
}

.tf-crm-list__row:hover{
    background:rgba(93,82,255,.025);
}

.tf-crm-feature:hover .tf-crm-feature-icon{
    transform:translateY(-2px) scale(1.03);
    box-shadow:0 0 26px rgba(0,132,255,.32);
}

.tf-crm-feature-icon{
    transition:transform .28s ease, box-shadow .28s ease;
}

.tf-crm-dash__head-icon,
.tf-crm-stat__icon,
.tf-crm-list__icon,
.tf-crm-list__check,
.tf-why-card__dot{
    transition:transform .28s ease, box-shadow .28s ease, background-color .28s ease, color .28s ease;
}

.tf-crm-stat:hover .tf-crm-stat__icon,
.tf-crm-list__row:hover .tf-crm-list__icon,
.tf-crm-list__row:hover .tf-crm-list__check,
.tf-why-card:hover .tf-why-card__dot{
    transform:translateY(-1px) scale(1.04);
}

.tf-motion-reveal{
    opacity:0;
    transform:translateY(18px) scale(.985);
    filter:blur(2px);
    transition:opacity .7s ease, transform .7s ease, filter .7s ease;
    transition-delay:var(--tf-delay, 0ms);
    will-change:opacity, transform, filter;
}

.tf-motion-reveal.is-visible{
    opacity:1;
    transform:none;
    filter:none;
}

@keyframes tf-hero-rise{
    from{
        opacity:0;
        transform:translateY(18px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes tf-hero-orb{
    from{
        transform:translateX(-50%) translateY(0) scale(.96);
        opacity:.55;
    }
    to{
        transform:translateX(-50%) translateY(-12px) scale(1.03);
        opacity:1;
    }
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
    max-width:1200px;
    margin:0 auto 30px;
    text-align:center;
}

.tf-why__title{
    margin:0;
    color:#11164a;
    font-size:55px;
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
    .crm-content > *,
    .crm-buttons,
    .crm-hero-bg::after,
    .tf-motion-reveal{
        animation:none !important;
        transition:none !important;
        opacity:1 !important;
        transform:none !important;
        filter:none !important;
    }

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

/* ============================================
   NEW SECTION: MANAGE & AUTOMATE (below tf-why)
   ============================================ */

.tf-crm-split{
    padding:30px 0 100px;
    background:
    radial-gradient(circle at 15% 20%, rgba(97,83,255,.07), transparent 32%),
    radial-gradient(circle at 85% 80%, rgba(0,114,255,.06), transparent 32%),
    linear-gradient(180deg, #f6f7fb 0%, #ffffff 100%);
    overflow:hidden;
}

.tf-crm-split__grid{
    display:grid;
    grid-template-columns:repeat(2, minmax(0,1fr));
    gap:32px;
    align-items:stretch;
}

.tf-crm-split__col{
    display:flex;
    flex-direction:column;
    gap:26px;
}

.tf-crm-split__header{
    text-align:center;
    max-width:520px;
    margin:0 auto;
}

.tf-crm-split__title{
    margin:0;
    color:#02084d;
    font-size:30px;
    line-height:1.12;
    font-weight:900;
    letter-spacing:-.03em;
}

.tf-crm-split__lead{
    margin:12px 0 0;
    color:rgba(2,8,77,.65);
    font-size:20px;
    line-height:1.6;
}

/* ---- Left visual: built dashboard card ---- */

.tf-crm-dash{
    flex:1;
    padding:20px;
    border-radius:26px;
    background:linear-gradient(180deg, rgba(109,99,255,.10) 0%, rgba(109,99,255,.03) 100%);
    border:1px solid rgba(109,99,255,.14);
    box-shadow:0 24px 50px rgba(17,22,74,.07);
}

.tf-crm-dash__card{
    height:100%;
    padding:22px;
    border-radius:20px;
    background:#fff;
    border:1px solid rgba(18,48,168,.10);
    box-shadow:0 14px 30px rgba(15,23,42,.05);
    display:flex;
    flex-direction:column;
    gap:18px;
}

.tf-crm-dash__head{
    display:flex;
    align-items:center;
    gap:12px;
}

.tf-crm-dash__head-icon{
    width:38px;
    height:38px;
    flex:0 0 auto;
    border-radius:12px;
    display:grid;
    place-items:center;
    color:#fff;
    font-size:1rem;
    background:linear-gradient(135deg,#7a5cff 0%,#5230e0 100%);
}

.tf-crm-dash__head-title{
    margin:0;
    font-size:1.02rem;
    font-weight:800;
    color:#11164a;
    flex:1;
}

.tf-crm-dash__head-dots{
    color:rgba(17,22,74,.35);
    font-size:1.1rem;
    letter-spacing:2px;
}

.tf-crm-dash__stats{
    display:grid;
    grid-template-columns:repeat(2, minmax(0,1fr));
    gap:16px;
}

.tf-crm-stat{
    padding:18px;
    border-radius:18px;
    background:#f7f6fd;
    border:1px solid rgba(18,48,168,.05);
    display:flex;
    flex-direction:column;
    gap:10px;
    min-width:0;
}

.tf-crm-stat__icon{
    width:40px;
    height:40px;
    border-radius:12px;
    display:grid;
    place-items:center;
    font-size:1rem;
    color:#7b61ff;
    background:#e9e5ff;
}

.tf-crm-stat--green{ background:#eef8f1; }
.tf-crm-stat--green .tf-crm-stat__icon{ color:#1fa96b; background:#d7f0e0; }

.tf-crm-stat--amber{ background:#fdf6e8; }
.tf-crm-stat--amber .tf-crm-stat__icon{ color:#d99a1f; background:#faecc8; }

.tf-crm-stat--blue{ background:#eef1fc; }
.tf-crm-stat--blue .tf-crm-stat__icon{ color:#4f6bff; background:#e1e6fb; }

.tf-crm-stat__label{
    margin:0;
    font-size:.86rem;
    color:rgba(17,22,74,.6);
    font-weight:600;
}

.tf-crm-stat__value{
    margin:0;
    font-size:1.6rem;
    font-weight:800;
    color:#11164a;
    line-height:1;
}

.tf-crm-stat__delta{
    margin:0;
    font-size:.8rem;
    font-weight:700;
    color:#1fa96b;
}

.tf-crm-stat__spark{
    display:block;
    width:100%;
    height:28px;
}

.tf-crm-stat__bars{
    display:flex;
    align-items:flex-end;
    gap:3px;
    height:28px;
}

.tf-crm-stat__bars span{
    flex:1;
    border-radius:3px 3px 0 0;
    background:#f0c977;
}

.tf-crm-stat__bars span:nth-child(1){ height:28%; }
.tf-crm-stat__bars span:nth-child(2){ height:45%; }
.tf-crm-stat__bars span:nth-child(3){ height:35%; }
.tf-crm-stat__bars span:nth-child(4){ height:62%; }
.tf-crm-stat__bars span:nth-child(5){ height:48%; }
.tf-crm-stat__bars span:nth-child(6){ height:80%; }
.tf-crm-stat__bars span:nth-child(7){ height:60%; }
.tf-crm-stat__bars span:nth-child(8){ height:100%; }

.tf-crm-stat__badge{
    align-self:flex-start;
    margin-top:2px;
    padding:6px 14px;
    border-radius:50px;
    background:#e1e6fb;
    color:#4f6bff;
    font-size:.78rem;
    font-weight:700;
}

.tf-crm-dash__foot{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    padding-top:14px;
    border-top:1px solid rgba(18,48,168,.08);
    flex-wrap:wrap;
}

.tf-crm-dash__foot-time{
    display:flex;
    align-items:center;
    gap:8px;
    color:rgba(17,22,74,.55);
    font-size:.82rem;
}

.tf-crm-dash__foot-link{
    display:inline-flex;
    align-items:center;
    gap:6px;
    color:#5d52ff;
    font-weight:700;
    font-size:.86rem;
    text-decoration:none;
}

/* ---- Right visual: built feature list card ---- */

.tf-crm-list{
    flex:1;
    display:flex;
    padding:20px;
    border-radius:26px;
    background:linear-gradient(180deg, rgba(0,114,255,.08) 0%, rgba(0,114,255,.02) 100%);
    border:1px solid rgba(0,114,255,.12);
    box-shadow:0 24px 50px rgba(17,22,74,.07);
}

.tf-crm-list__card{
    flex:1;
    display:flex;
    flex-direction:column;
    border-radius:20px;
    background:#fff;
    border:1px solid rgba(18,48,168,.10);
    box-shadow:0 14px 30px rgba(15,23,42,.05);
    overflow:hidden;
}

.tf-crm-list__row{
    display:grid;
    grid-template-columns:auto 1fr auto;
    align-items:center;
    gap:18px;
    padding:22px 24px;
    border-bottom:1px solid rgba(18,48,168,.08);
}

.tf-crm-list__icon{
    width:64px;
    height:64px;
    flex:0 0 auto;
    display:grid;
    place-items:center;
    border-radius:50%;
    color:#5d52ff;
    font-size:1.5rem;
    background:linear-gradient(180deg, rgba(93,82,255,.14) 0%, rgba(93,82,255,.06) 100%);
}

.tf-crm-list__content{
    min-width:0;
}

.tf-crm-list__title{
    margin:0;
    color:#11164a;
    font-size:20px;
    font-weight:600;
    line-height:1.25;
}

.tf-crm-list__text{
    margin:8px 0 0;
    color:rgba(17,22,74,.65);
    font-size:13px;
    line-height:1.20;
}

.tf-crm-list__check{
    width:38px;
    height:38px;
    flex:0 0 auto;
    display:grid;
    place-items:center;
    border-radius:50%;
    color:#5d52ff;
    font-size:.9rem;
    background:rgba(93,82,255,.14);
}

.tf-crm-list__foot{
    display:flex;
    align-items:center;
    gap:12px;
    padding:20px 24px;
    background:#fbfbff;
}

.tf-crm-list__foot-icon{
    width:34px;
    height:34px;
    flex:0 0 auto;
    display:grid;
    place-items:center;
    border-radius:12px;
    color:#5d52ff;
    font-size:.95rem;
    background:rgba(93,82,255,.14);
}

.tf-crm-list__foot-text{
    color:#11164a;
    font-size:.95rem;
    font-weight:700;
}

@media(max-width:1199px){
    .tf-crm-dash__stats{
        gap:12px;
    }
}

@media(max-width:991px){
    .tf-crm-split{
        padding:26px 0 84px;
    }

    .tf-crm-split__grid{
        grid-template-columns:1fr;
        gap:44px;
    }
}

@media(max-width:576px){
    .tf-crm-split__header{
        max-width:100%;
    }

    .tf-crm-dash,
    .tf-crm-list{
        padding:14px;
        border-radius:20px;
    }

    .tf-crm-dash__card{
        padding:16px;
        border-radius:16px;
        gap:14px;
    }

    .tf-crm-dash__stats{
        grid-template-columns:repeat(2, minmax(0,1fr));
        gap:10px;
    }

    .tf-crm-stat{
        padding:14px;
        border-radius:14px;
    }

    .tf-crm-stat__value{
        font-size:1.25rem;
    }

    .tf-crm-stat__icon{
        width:34px;
        height:34px;
    }

    .tf-crm-dash__foot{
        flex-direction:column;
        align-items:flex-start;
        gap:8px;
    }

    .tf-crm-list__row{
        grid-template-columns:auto 1fr;
        padding:16px 16px;
        gap:12px;
    }

    .tf-crm-list__icon{
        width:50px;
        height:50px;
        font-size:1.2rem;
    }

    .tf-crm-list__check{
        margin-top:4px;
    }

    .tf-crm-list__title{
        font-size:1rem;
    }

    .tf-crm-list__text{
        font-size:.88rem;
    }

    .tf-crm-list__foot{
        padding:16px;
    }
}

@media(max-width:360px){
    .tf-crm-dash__stats{
        grid-template-columns:1fr;
    }
}


/* ==============================
 DARK CRM SHOWCASE SECTION
============================== */


.tf-crm-dark-showcase{

    background:#000;
    padding:90px 0;
    overflow:hidden;

}


.tf-crm-dark-grid{

    display:grid;
    grid-template-columns: 0.9fr 1.2fr;
    gap:70px;
    align-items:center;

}



/* LEFT */


.tf-crm-dark-tag{

    display:inline-flex;
    gap:8px;
    align-items:center;

    background:#031427;
    color:#0084ff;

    padding:9px 18px;

    border-radius:12px;

    font-size:13px;
    font-weight:800;

    border:1px solid rgba(0,132,255,.3);

}



.tf-crm-dark-content h2{

    margin:25px 0 0;

    color:white;

    font-size:55px;
    line-height:.98;

    font-weight:900;
    letter-spacing:-3px;

}


.tf-crm-dark-content h2 span{

    color:#007bff;

}


.tf-crm-dark-desc{

    margin-top:22px;

    max-width:560px;

    color:#a6a6a6;

    font-size:17px;

    line-height:1.6;

}



/* FEATURE LIST */


.tf-crm-feature{

    display:flex;

    gap:20px;

    padding:22px 0;

    border-bottom:1px solid rgba(255,255,255,.08);

}



.tf-crm-feature-icon{

    width:55px;
    height:55px;

    flex:0 0 auto;


    display:flex;
    align-items:center;
    justify-content:center;


    background:#031427;

    border-radius:14px;

    color:#0084ff;

    font-size:22px;


    box-shadow:
    0 0 20px rgba(0,132,255,.25);

}



.tf-crm-feature h4{

    color:white;

    margin:0;

    font-size:17px;

    font-weight:800;

    letter-spacing:-.02em;
}


.tf-crm-feature p{

    margin-top:8px;

    color:#999;

    font-size:15px;

    line-height:1.5;

}



/* IMAGE */


.tf-crm-dark-image{

    padding:18px;

    border-radius:20px;


    background:

    linear-gradient(
        180deg,
        rgba(0,132,255,.12),
        transparent
    );


    border:1px solid #007bff;


    box-shadow:

    0 0 40px rgba(0,132,255,.35);


}


.tf-crm-dark-image img{

    width:100%;

    display:block;

    border-radius:18px;

}



/* RESPONSIVE */


@media(max-width:991px){


    .tf-crm-dark-grid{

        grid-template-columns:1fr;

        gap:45px;

    }


    .tf-crm-dark-content h2{

        font-size:42px;

    }


}



@media(max-width:576px){


    .tf-crm-dark-showcase{

        padding:60px 0;

    }


    .tf-crm-dark-content h2{

        font-size:36px;

        letter-spacing:-2px;

    }


    .tf-crm-feature{

        gap:14px;

    }


    .tf-crm-feature-icon{

        width:45px;

        height:45px;

        font-size:18px;

    }


}


/*=========================================
        CRM FAQ SECTION
=========================================*/

.tf-crm-faq{
    padding:100px 0;
    background:#f7f9ff;
}

.tf-crm-faq-heading{
    text-align:center;
    max-width:760px;
    margin:0 auto 70px;
}

.tf-crm-faq-badge{
    display:inline-block;
    padding:10px 22px;
    border-radius:50px;
    background:#edf3ff;
    color:#2367ff;
    font-size:13px;
    font-weight:700;
    letter-spacing:.08em;
    text-transform:uppercase;
}

.tf-crm-faq-heading h2{
    margin:22px 0 18px;
    font-size:54px;
    line-height:1;
    font-weight:900;
    color:#08173d;
    letter-spacing:-2px;
}

.tf-crm-faq-heading p{
    color:#6f7b93;
    font-size:17px;
    line-height:1.8;
}

.tf-crm-faq-heading a{
    color:#2563ff;
    text-decoration:none;
    font-weight:700;
}

.tf-crm-faq-grid{
    display:grid;
    grid-template-columns:520px 1fr;
    gap:70px;
    align-items:center;
}

/* LEFT CARD */

.tf-crm-faq-graphic{

    background:#fff;

    border-radius:30px;

    padding:45px;

    box-shadow:
    0 30px 70px rgba(28,46,90,.08);

    border:1px solid #edf1fb;

}

/* CRM CIRCLE */

.crm-circle-wrap{

    position:relative;

    width:380px;

    height:380px;

    margin:auto;

}

.crm-circle-wrap:before{

    content:"";

    position:absolute;

    inset:60px;

    border:2px dashed #d7e2ff;

    border-radius:50%;

}

.crm-center{

    position:absolute;

    top:50%;

    left:50%;

    transform:translate(-50%,-50%);

    width:130px;

    height:130px;

    border-radius:50%;

    background:linear-gradient(135deg,#1e74ff,#5b3dff);

    color:#fff;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:32px;

    font-weight:800;

    box-shadow:
    0 20px 45px rgba(32,86,255,.35);

}

/* NODES */

.crm-node{

    position:absolute;

    width:105px;

    text-align:center;

}

.crm-node .icon{

    width:68px;

    height:68px;

    margin:auto;

    border-radius:50%;

    background:#fff;

    border:1px solid #e8eeff;

    display:flex;

    align-items:center;

    justify-content:center;

    color:#2367ff;

    font-size:26px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.06);

}

.crm-node span{

    display:block;

    margin-top:12px;

    font-size:14px;

    color:#091c45;

    font-weight:700;

}

/* POSITIONS */

.crm-top{
    top:0;
    left:50%;
    transform:translateX(-50%);
}

.crm-right{
    right:0;
    top:50%;
    transform:translateY(-50%);
}

.crm-left{
    left:0;
    top:50%;
    transform:translateY(-50%);
}

.crm-bottom-left{
    left:40px;
    bottom:10px;
}

.crm-bottom-right{
    right:40px;
    bottom:10px;
}

/* BOTTOM INFO CARD */

.crm-bottom-card{

    margin-top:55px;

    display:flex;

    gap:20px;

    align-items:flex-start;

    padding:24px;

    border-radius:18px;

    background:#f5f8ff;

}

.bottom-icon{

    width:58px;

    height:58px;

    border-radius:15px;

    background:linear-gradient(135deg,#2367ff,#5b3dff);

    display:flex;

    align-items:center;

    justify-content:center;

    color:#fff;

    font-size:22px;

    flex-shrink:0;

}

.crm-bottom-card h4{

    margin:0 0 10px;

    font-size:22px;

    color:#08173d;

    font-weight:800;

}

.crm-bottom-card p{

    margin:0;

    color:#707b91;

    line-height:1.7;

    font-size:15px;

}

/* TABLET */

@media(max-width:1100px){

.tf-crm-faq-grid{

grid-template-columns:1fr;

gap:50px;

}

.tf-crm-faq-graphic{

max-width:650px;

margin:auto;

}

}

/* MOBILE */

@media(max-width:768px){

.tf-crm-faq{

padding:70px 0;

}

.tf-crm-faq-heading h2{

font-size:36px;

}

.tf-crm-faq-heading p{

font-size:15px;

}

.tf-crm-faq-graphic{

padding:25px;

}

.crm-circle-wrap{

width:300px;

height:300px;

}

.crm-circle-wrap:before{

inset:45px;

}

.crm-center{

width:105px;

height:105px;

font-size:26px;

}

.crm-node{

width:80px;

}

.crm-node .icon{

width:55px;

height:55px;

font-size:20px;

}

.crm-node span{

font-size:12px;

}

.crm-bottom-card{

margin-top:40px;

padding:18px;

}

.crm-bottom-card h4{

font-size:18px;

}

}
/*=====================================
        FAQ ACCORDION
=====================================*/

.tf-crm-faq-list{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.faq-item{
    background:#fff;
    border:1px solid #e7ecf8;
    border-radius:18px;
    overflow:hidden;
    transition:.35s ease;
    box-shadow:0 8px 24px rgba(20,40,90,.05);
}

.faq-item:hover{
    transform:translateY(-2px);
    box-shadow:0 18px 45px rgba(30,60,120,.08);
}

.faq-item.active{
    border-color:#2563ff;
    box-shadow:0 20px 50px rgba(37,99,255,.12);
}

.faq-question{

    width:100%;

    border:none;

    background:#fff;

    padding:24px 28px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    cursor:pointer;

    text-align:left;

    font-size:18px;

    font-weight:700;

    color:#08173d;

    transition:.3s;

}

.faq-question:hover{
    background:#f8fbff;
}

.faq-question span{
    flex:1;
    padding-right:20px;
    line-height:1.5;
}

.faq-question i{

    width:40px;

    height:40px;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#edf3ff;

    color:#2367ff;

    transition:.35s;

    flex-shrink:0;

}

.faq-item.active .faq-question i{

    background:#2367ff;

    color:#fff;

    transform:rotate(180deg);

}

.faq-answer{

    max-height:0;

    overflow:hidden;

    transition:max-height .45s ease,padding .35s ease;

    padding:0 28px;

    color:#6d7891;

    line-height:1.8;

    font-size:15px;

}

.faq-item.active .faq-answer{

    max-height:250px;

    padding:0 28px 24px;

}

/* divider */

.faq-item+.faq-item{
    margin-top:2px;
}

/* Focus */

.faq-question:focus{
    outline:none;
}

/* Tablet */

@media(max-width:991px){

    .faq-question{

        padding:20px;

        font-size:17px;

    }

    .faq-answer{

        padding:0 20px;

    }

    .faq-item.active .faq-answer{

        padding:0 20px 20px;

    }

}

/* Mobile */

@media(max-width:768px){

    .tf-crm-faq-list{

        gap:14px;

    }

    .faq-question{

        font-size:16px;

        padding:18px;

    }

    .faq-question i{

        width:34px;

        height:34px;

        font-size:13px;

    }

    .faq-answer{

        font-size:14px;

        line-height:1.7;

    }

}

/* Small Mobile */

@media(max-width:480px){

    .faq-question{

        font-size:15px;

        padding:16px;

    }

    .faq-question span{

        padding-right:12px;

    }

    .faq-item.active .faq-answer{

        padding:0 16px 18px;

    }

    .faq-answer{

        padding:0 16px;

    }

}

/* Smooth Animation */

.faq-item,
.faq-question,
.faq-answer,
.faq-question i{
    transition:all .35s ease;
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
                                <img src="assets/images/new/c1.png" alt="Blue Orbith">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c2.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Grid Infinity">
                                <img src="assets/images/new/c3.png" alt="Grid Infinity">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Mark Identitiez">
                                <img src="assets/images/new/c4.png" alt="Mark Identitiez">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Blue Orbith">
                                <img src="assets/images/new/c5.png" alt="Blue Orbith">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c6.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c7.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c8.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c9.png" alt="Digikcon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-brand-card" aria-label="Digikcon">
                                <img src="assets/images/new/c10.png" alt="Digikcon">
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

<section class="tf-crm-split">
    <div class="container">
        <div class="tf-crm-split__grid">

            <div class="tf-crm-split__col">
                <div class="tf-crm-split__header">
                    <h2 class="tf-crm-split__title">Manage Leads &amp; Customer Data</h2>
                    <p class="tf-crm-split__lead">Track leads, contacts, deals, and customer activity in one centralized place.</p>
                </div>

                <div class="tf-crm-dash">
                    <div class="tf-crm-dash__card">

                        <div class="tf-crm-dash__head">
                            <span class="tf-crm-dash__head-icon" aria-hidden="true"><i class="fas fa-user-friends"></i></span>
                            <h3 class="tf-crm-dash__head-title">CRM Dashboard</h3>
                            <span class="tf-crm-dash__head-dots" aria-hidden="true">&#8226;&#8226;&#8226;</span>
                        </div>

                        <div class="tf-crm-dash__stats">

                            <div class="tf-crm-stat">
                                <span class="tf-crm-stat__icon" aria-hidden="true"><i class="fas fa-user"></i></span>
                                <p class="tf-crm-stat__label">New Leads</p>
                                <p class="tf-crm-stat__value">128</p>
                                <p class="tf-crm-stat__delta">&uarr; 18% this week</p>
                                <svg class="tf-crm-stat__spark" viewBox="0 0 100 28" preserveAspectRatio="none">
                                    <polyline points="0,22 12,18 24,20 36,13 48,16 60,10 72,13 84,5 100,3" fill="none" stroke="#7b61ff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="100" cy="3" r="4" fill="#7b61ff"/>
                                </svg>
                            </div>

                            <div class="tf-crm-stat tf-crm-stat--green">
                                <span class="tf-crm-stat__icon" aria-hidden="true"><i class="fas fa-users"></i></span>
                                <p class="tf-crm-stat__label">Contacts</p>
                                <p class="tf-crm-stat__value">342</p>
                                <p class="tf-crm-stat__delta">&uarr; 12% this week</p>
                                <svg class="tf-crm-stat__spark" viewBox="0 0 100 28" preserveAspectRatio="none">
                                    <polyline points="0,20 12,22 24,15 36,17 48,11 60,14 72,7 84,10 100,4" fill="none" stroke="#1fa96b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="100" cy="4" r="4" fill="#1fa96b"/>
                                </svg>
                            </div>

                            <div class="tf-crm-stat tf-crm-stat--amber">
                                <span class="tf-crm-stat__icon" aria-hidden="true"><i class="fas fa-briefcase"></i></span>
                                <p class="tf-crm-stat__label">Deals</p>
                                <p class="tf-crm-stat__value">$84,250</p>
                                <p class="tf-crm-stat__delta">&uarr; 16% this month</p>
                                <div class="tf-crm-stat__bars" aria-hidden="true">
                                    <span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span>
                                </div>
                            </div>

                            <div class="tf-crm-stat tf-crm-stat--blue">
                                <span class="tf-crm-stat__icon" aria-hidden="true"><i class="fas fa-bullseye"></i></span>
                                <p class="tf-crm-stat__label">Deals in Progress</p>
                                <p class="tf-crm-stat__value">23</p>
                                <span class="tf-crm-stat__badge">Active Pipeline</span>
                            </div>

                        </div>

                        <!-- <div class="tf-crm-dash__foot">
                            <span class="tf-crm-dash__foot-time"><i class="far fa-clock" aria-hidden="true"></i> Last updated: Today, 10:30 AM</span>
                            <a href="#" class="tf-crm-dash__foot-link">View Full Dashboard <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                        </div> -->

                    </div>
                </div>
            </div>

            <div class="tf-crm-split__col">
                <div class="tf-crm-split__header">
                    <h2 class="tf-crm-split__title">Automate CRM Workflows</h2>
                    <p class="tf-crm-split__lead">Streamline follow-ups, assign tasks, and improve customer management.</p>
                </div>

                <div class="tf-crm-list">
                    <div class="tf-crm-list__card">

                        <div class="tf-crm-list__row">
                            <span class="tf-crm-list__icon" aria-hidden="true"><i class="fas fa-code"></i></span>
                            <div class="tf-crm-list__content">
                                <h3 class="tf-crm-list__title">Custom CRM Development</h3>
                                <p class="tf-crm-list__text">Build a tailored CRM around your sales process, teams, and business goals.</p>
                            </div>
                            <span class="tf-crm-list__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                        </div>

                        <div class="tf-crm-list__row">
                            <span class="tf-crm-list__icon" aria-hidden="true"><i class="fas fa-cogs"></i></span>
                            <div class="tf-crm-list__content">
                                <h3 class="tf-crm-list__title">Workflow Automation</h3>
                                <p class="tf-crm-list__text">Automate lead assignment, follow-ups, approvals, and repetitive sales tasks.</p>
                            </div>
                            <span class="tf-crm-list__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                        </div>

                        <div class="tf-crm-list__row">
                            <span class="tf-crm-list__icon" aria-hidden="true"><i class="fas fa-plug"></i></span>
                            <div class="tf-crm-list__content">
                                <h3 class="tf-crm-list__title">Third-Party Integrations</h3>
                                <p class="tf-crm-list__text">Connect your CRM with email, ERP, accounting, marketing, and support tools.</p>
                            </div>
                            <span class="tf-crm-list__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                        </div>

                        <div class="tf-crm-list__row">
                            <span class="tf-crm-list__icon" aria-hidden="true"><i class="fas fa-database"></i></span>
                            <div class="tf-crm-list__content">
                                <h3 class="tf-crm-list__title">CRM Data Migration</h3>
                                <p class="tf-crm-list__text">Move customer data securely while preserving accuracy, structure, and history.</p>
                            </div>
                            <span class="tf-crm-list__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                        </div>

                        <div class="tf-crm-list__row">
                            <span class="tf-crm-list__icon" aria-hidden="true"><i class="fas fa-chart-line"></i></span>
                            <div class="tf-crm-list__content">
                                <h3 class="tf-crm-list__title">Analytics &amp; Reporting</h3>
                                <p class="tf-crm-list__text">Create real-time dashboards and reports for sales, service, and performance.</p>
                            </div>
                            <span class="tf-crm-list__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                        </div>
                        <!-- <div class="tf-crm-list__foot">
                            <span class="tf-crm-list__foot-icon" aria-hidden="true"><i class="fas fa-shield-alt"></i></span>
                            <span class="tf-crm-list__foot-text">Secure. Scalable. Built for Growth.</span>
                        </div> -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="tf-crm-dark-showcase">
    <div class="container">

        <div class="tf-crm-dark-grid">

            <!-- LEFT CONTENT -->
            <div class="tf-crm-dark-content">

                <span class="tf-crm-dark-tag">
                    <i class="fas fa-chart-line"></i>
                    CRM DEVELOPMENT
                </span>

                <h2>
                    Why Choose Our <br>
                    <span>CRM Development</span><br>
                    Services
                </h2>

                <p class="tf-crm-dark-desc">
                    We build custom CRM solutions that help you manage leads,
                    streamline sales, automate tasks, and improve customer
                    relationships — all in one powerful platform.
                </p>


                <div class="tf-crm-feature">

                    <div class="tf-crm-feature-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>
                        <h4>Centralized Customer Data</h4>
                        <p>
                            Keep all customer information organized and
                            accessible in one place.
                        </p>
                    </div>

                </div>


                <div class="tf-crm-feature">

                    <div class="tf-crm-feature-icon">
                        <i class="fas fa-filter"></i>
                    </div>

                    <div>
                        <h4>Smarter Sales Pipeline</h4>
                        <p>
                            Track leads, opportunities, and deals across every
                            stage of your sales funnel.
                        </p>
                    </div>

                </div>


                <div class="tf-crm-feature">

                    <div class="tf-crm-feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>

                    <div>
                        <h4>Automation & Productivity</h4>
                        <p>
                            Automate repetitive tasks and workflows to save
                            time and reduce manual effort.
                        </p>
                    </div>

                </div>


                <div class="tf-crm-feature">

                    <div class="tf-crm-feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>

                    <div>
                        <h4>Real-Time Insights</h4>
                        <p>
                            Get real-time reports and analytics to make better
                            decisions and drive growth.
                        </p>
                    </div>

                </div>


            </div>


            <!-- RIGHT IMAGE -->
            <div class="tf-crm-dark-image">

                <img 
                src="assets/images/crm3.png"
                alt="CRM Dashboard">

            </div>


        </div>

    </div>
</section>

<!-- ==========================
        CRM FAQ SECTION
=========================== -->
<section class="tf-crm-faq">
    <div class="container">

        <div class="tf-crm-faq-heading">

            <span class="tf-crm-faq-badge">
                FAQ
            </span>

            <h2>
                Frequently Asked Questions
            </h2>

            <p>
                Everything you need to know about our CRM development services.
                <br>
                Can't find the answer you're looking for?
                <a href="contact.php">Contact us.</a>
            </p>

        </div>


        <div class="tf-crm-faq-grid">

            <!-- LEFT -->
            <div class="tf-crm-faq-graphic">

                <div class="crm-circle-wrap">

                    <div class="crm-center">
                        CRM
                    </div>

                    <div class="crm-node crm-top">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>Customers</span>
                    </div>

                    <div class="crm-node crm-right">
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <span>Sales</span>
                    </div>

                    <div class="crm-node crm-bottom-right">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <span>Support</span>
                    </div>

                    <div class="crm-node crm-bottom-left">
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <span>Reports</span>
                    </div>

                    <div class="crm-node crm-left">
                        <div class="icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <span>Automation</span>
                    </div>

                </div>

                <div class="crm-bottom-card">

                    <div class="bottom-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>

                    <div>

                        <h4>
                            Custom CRM Solutions Built for Growth
                        </h4>

                        <p>
                            We build secure, scalable and user-friendly CRM
                            systems that streamline your business operations.
                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="tf-crm-faq-list">

                <div class="faq-item active">

                    <button class="faq-question">
                        <span>What is CRM development?</span>
                        <i class="fas fa-chevron-up"></i>
                    </button>

                    <div class="faq-answer">
                        CRM development is the process of building customized
                        software to manage customer relationships, sales,
                        leads, support and internal business workflows from
                        one centralized platform.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>How long does it take to develop a CRM?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Depending on project complexity, CRM development
                        typically takes between 4 to 12 weeks.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>Can you integrate CRM with existing software?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Yes. We integrate CRMs with ERP, WhatsApp, Email,
                        Payment Gateways, APIs and third-party platforms.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>Is the CRM mobile friendly?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Absolutely. Our CRM solutions work seamlessly on
                        desktop, tablet and mobile devices.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>What features can be included?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Lead Management, Sales Pipeline, Tasks, Automation,
                        Reports, Billing, Customer Support, Inventory,
                        Notifications and much more.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>How much does CRM development cost?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Pricing depends on required modules, integrations,
                        users and customizations. Contact us for a quotation.
                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-question">
                        <span>Do you provide maintenance after delivery?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        Yes. We provide regular maintenance, upgrades,
                        monitoring and technical support after deployment.
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

</main>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const motionTargets = document.querySelectorAll(
        ".tf-brand-strip__inner, .tf-steps__header, .tf-steps__visual, .tf-step-card, .tf-why__header, .tf-crm-split__header, .tf-crm-dash, .tf-crm-list, .tf-crm-dark-content, .tf-crm-dark-image, .tf-crm-faq-heading, .tf-crm-faq-graphic, .tf-crm-faq-list .faq-item, .tf-crm-feature, .tf-crm-list__row"
    );

    motionTargets.forEach((element, index) => {
        element.classList.add("tf-motion-reveal");
        element.style.setProperty("--tf-delay", `${Math.min(index * 60, 360)}ms`);
    });

    const motionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.18,
        rootMargin: "0px 0px -8% 0px"
    });

    motionTargets.forEach(element => motionObserver.observe(element));

    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {

        const button = item.querySelector(".faq-question");
        const icon = button.querySelector("i");
        const answer = item.querySelector(".faq-answer");

        button.addEventListener("click", function () {

            const isActive = item.classList.contains("active");

            // Close all FAQs
            faqItems.forEach(faq => {

                faq.classList.remove("active");

                const faqAnswer = faq.querySelector(".faq-answer");
                const faqIcon = faq.querySelector(".faq-question i");

                faqAnswer.style.maxHeight = null;

                faqIcon.classList.remove("fa-chevron-up");
                faqIcon.classList.add("fa-chevron-down");

            });

            // Open clicked FAQ
            if (!isActive) {

                item.classList.add("active");

                answer.style.maxHeight = answer.scrollHeight + "px";

                icon.classList.remove("fa-chevron-down");
                icon.classList.add("fa-chevron-up");

            }

        });

    });

});
</script>
