<style>

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

</main>
