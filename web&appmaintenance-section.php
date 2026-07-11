<style>
/*==================================================
WEB APP HERO
==================================================*/

.tf-webapp-hero {

    position: relative;
    overflow: hidden;

    padding-top: 180px;
    padding-bottom: 120px;

    background:
    url(assets/images/bg/banner_webapp.png)
    center center/cover no-repeat;

}

.tf-webapp-hero::before{

    content:"";

    position:absolute;

    inset:0;

    background:rgba(255,255,255,.15);

    pointer-events:none;

}

.tf-webapp-content{

    position:relative;
    z-index:2;

}

.tf-webapp-badge{

    display:inline-flex;

    align-items:center;

    gap:10px;

    background:#eef5ff;

    color:#3568ff;

    padding:12px 22px;

    border-radius:50px;

    font-weight:600;

    font-size:15px;

    margin-bottom:35px;

}

.tf-webapp-badge i{

    width:34px;
    height:34px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    background:#3568ff;

    color:#fff;

    font-size:15px;

}

.tf-webapp-content h1{

    font-size:70px;

    line-height:1.05;

    font-weight:800;

    color:#0f2346;

    margin-bottom:25px;

}

.tf-webapp-content p{

    font-size:20px;

    line-height:1.8;

    color:#5d6b82;

    max-width:520px;

    margin-bottom:40px;

}

.tf-webapp-buttons{

    display:flex;

    gap:18px;

    flex-wrap:wrap;

    margin-bottom:45px;

}

.tf-btn-primary{

    background:linear-gradient(90deg,#3d82ff,#6447ff);

    color:#fff;

    padding:16px 38px;

    border-radius:14px;

    font-weight:700;

    transition:.3s;

    text-decoration:none;

    box-shadow:0 12px 30px rgba(77,102,255,.25);

}

.tf-btn-primary:hover{

    color:#fff;

    transform:translateY(-3px);

}

.tf-btn-outline{

    border:2px solid #dbe4ff;

    background:#fff;

    color:#16386b;

    padding:16px 38px;

    border-radius:14px;

    text-decoration:none;

    font-weight:700;

    transition:.3s;

}

.tf-btn-outline:hover{

    background:#3568ff;

    color:#fff;

}

.tf-webapp-features{

    display:flex;

    flex-wrap:wrap;

    gap:35px;

}

.tf-webapp-features div{

    display:flex;

    align-items:center;

    gap:10px;

    color:#23385f;

    font-weight:600;

    font-size:16px;

}

.tf-webapp-features i{

    color:#3f6fff;

    font-size:18px;

}

.tf-webapp-image{

    position:relative;

    z-index:2;

    text-align:right;

}

.tf-webapp-image img{

    width:100%;

    max-width:900px;

    animation:floatDashboard 5s ease-in-out infinite;

    filter:drop-shadow(0 35px 45px rgba(0,0,0,.12));

}

@keyframes floatDashboard{

    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-10px);
    }

    100%{
        transform:translateY(0);
    }

}

/*==============================
Tablet
==============================*/

@media(max-width:991px){

.tf-webapp-hero{

    padding-top:150px;
    padding-bottom:80px;

}

.tf-webapp-content{

    text-align:center;

}

.tf-webapp-content h1{

    font-size:52px;

}

.tf-webapp-content p{

    margin:auto;
    margin-bottom:35px;

}

.tf-webapp-buttons{

    justify-content:center;

}

.tf-webapp-features{

    justify-content:center;

}

.tf-webapp-image{

    margin-top:60px;

    text-align:center;

}

}


/*==============================
Mobile
==============================*/

@media(max-width:767px){

.tf-webapp-hero{

    padding-top:130px;
    padding-bottom:60px;

    background-position:center;

}

.tf-webapp-content h1{

    font-size:40px;

}

.tf-webapp-content p{

    font-size:17px;

}

.tf-webapp-buttons{

    flex-direction:column;

}

.tf-btn-primary,
.tf-btn-outline{

    width:100%;

    text-align:center;

}

.tf-webapp-features{

    flex-direction:column;

    gap:18px;

    align-items:flex-start;

}

.tf-webapp-image{

    margin-top:45px;

}

}
/*====================================
 WHY CHOOSE US
====================================*/

.tf-webapp-why{

    position:relative;

    overflow:hidden;

    padding:110px 0;

    background:
    url(assets/images/bg/banner_webapp2.png)
    center center/cover no-repeat;

}

.tf-webapp-heading{

    position:relative;

    z-index:2;

    margin-bottom:65px;

}

.tf-subtitle{

    display:inline-block;

    font-size:15px;

    font-weight:700;

    letter-spacing:2px;

    color:#5b55ff;

    text-transform:uppercase;

    margin-bottom:18px;

}

.tf-webapp-heading h2{

    font-size:56px;

    font-weight:800;

    line-height:1.2;

    color:#132247;

    margin:0;

}

.tf-webapp-heading h2 span{

    background:linear-gradient(90deg,#366dff,#6a40ff);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

.tf-why-card{

    height:100%;

    background:#ffffff;

    border-radius:22px;

    padding:38px 28px;

    text-align:center;

    border:1px solid #edf0fb;

    transition:.35s;

    box-shadow:0 10px 35px rgba(0,0,0,.05);

}

.tf-why-card:hover{

    transform:translateY(-10px);

    box-shadow:0 20px 50px rgba(77,94,255,.15);

}

.tf-why-icon{

    width:82px;

    height:82px;

    margin:0 auto 28px;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#f4f3ff;

    color:#5a47ff;

    font-size:34px;

    transition:.3s;

}

.tf-why-card:hover .tf-why-icon{

    background:linear-gradient(135deg,#4a76ff,#6948ff);

    color:#fff;

    transform:rotate(8deg) scale(1.08);

}

.tf-why-card h4{

    font-size:22px;

    font-weight:700;

    color:#17254b;

    margin-bottom:18px;

}

.tf-why-card p{

    font-size:16px;

    line-height:1.8;

    color:#667085;

    margin:0;

}

/*=====================
 Tablet
=====================*/

@media(max-width:991px){

.tf-webapp-why{

    padding:90px 0;

}

.tf-webapp-heading h2{

    font-size:42px;

}

}

/*=====================
 Mobile
=====================*/

@media(max-width:767px){

.tf-webapp-why{

    padding:70px 0;

}

.tf-webapp-heading{

    margin-bottom:45px;

}

.tf-webapp-heading h2{

    font-size:32px;

}

.tf-why-card{

    padding:30px 22px;

}

.tf-why-icon{

    width:70px;

    height:70px;

    font-size:28px;

}

.tf-why-card h4{

    font-size:20px;

}

.tf-why-card p{

    font-size:15px;

}

}
/*==========================================
OUR SERVICES
==========================================*/

.tf-webapp-services{

    position:relative;

    padding:110px 0;

    overflow:hidden;

    background:url(assets/images/bg/banner_webapp3.png)
    center center/cover no-repeat;

}

.tf-service-heading{

    margin-bottom:65px;

}

.tf-service-subtitle{

    display:inline-block;

    padding:8px 18px;

    border-radius:30px;

    background:#eef0ff;

    color:#4e5dff;

    font-size:14px;

    font-weight:700;

    letter-spacing:1px;

    text-transform:uppercase;

    margin-bottom:18px;

}

.tf-service-heading h2{

    font-size:54px;

    font-weight:800;

    line-height:1.2;

    color:#12224b;

    margin-bottom:20px;

}

.tf-service-heading h2 span{

    display:block;

    background:linear-gradient(90deg,#326dff,#6947ff);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

.tf-heading-divider{

    display:flex;

    justify-content:center;

    align-items:center;

    gap:15px;

}

.tf-heading-divider span{

    width:65px;

    height:3px;

    background:#4f63ff;

    border-radius:30px;

}

.tf-heading-divider i{

    font-size:8px;

    color:#4f63ff;

}

.tf-service-card{

    height:100%;

    display:flex;

    align-items:flex-start;

    gap:22px;

    padding:30px;

    border-radius:18px;

    background:#fff;

    border:1px solid #edf0fb;

    box-shadow:0 8px 30px rgba(0,0,0,.05);

    transition:.35s;

}

.tf-service-card:hover{

    transform:translateY(-8px);

    box-shadow:0 18px 45px rgba(75,93,255,.15);

}

.tf-service-icon{

    min-width:74px;

    height:74px;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#f3f3ff;

    color:#5b49ff;

    font-size:30px;

    transition:.35s;

}

.tf-service-card:hover .tf-service-icon{

    background:linear-gradient(135deg,#4a72ff,#6c45ff);

    color:#fff;

    transform:rotate(10deg);

}

.tf-service-content{

    flex:1;

}

.tf-service-content h4{

    font-size:22px;

    font-weight:700;

    color:#132248;

    margin-bottom:12px;

}

.tf-service-content p{

    margin:0;

    color:#68758b;

    line-height:1.8;

    font-size:15px;

}

/*=========================
Tablet
=========================*/

@media(max-width:991px){

.tf-webapp-services{

    padding:90px 0;

}

.tf-service-heading h2{

    font-size:42px;

}

}

/*=========================
Mobile
=========================*/

@media(max-width:767px){

.tf-webapp-services{

    padding:70px 0;

}

.tf-service-heading{

    margin-bottom:45px;

}

.tf-service-heading h2{

    font-size:32px;

}

.tf-service-card{

    padding:25px;

}

.tf-service-icon{

    min-width:60px;

    height:60px;

    font-size:24px;

}

.tf-service-content h4{

    font-size:19px;

}

.tf-service-content p{

    font-size:14px;

}

}
/*==================================
HOW IT WORKS
==================================*/

.tf-webapp-process{

    position:relative;

    padding:110px 0;

    overflow:hidden;

    background:url(assets/images/bg/banner_webapp4.png)
    center center/cover no-repeat;

}

.tf-process-heading{

    margin-bottom:80px;

}

.tf-process-subtitle{

    display:inline-block;

    color:#4b5dff;

    font-size:15px;

    font-weight:700;

    text-transform:uppercase;

    letter-spacing:1px;

    margin-bottom:18px;

}

.tf-process-heading h2{

    font-size:56px;

    font-weight:800;

    color:#14254d;

    margin-bottom:18px;

}

.tf-process-heading h2 span{

    background:linear-gradient(90deg,#356eff,#6948ff);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

.tf-process-divider{

    display:flex;

    justify-content:center;

    align-items:center;

    gap:15px;

}

.tf-process-divider span{

    width:60px;

    height:3px;

    border-radius:30px;

    background:#4d63ff;

}

.tf-process-divider i{

    font-size:8px;

    color:#4d63ff;

}

/* Line Between Steps */

@media(min-width:992px){

.tf-process-step{

    position:relative;

}

.tf-process-step::after{

    content:"";

    position:absolute;

    top:55px;

    left:72%;

    width:90%;

    border-top:2px dashed #b7b7ff;

}

.tf-last-step::after{

    display:none;

}

}

/* Step */

.tf-process-step{

    text-align:center;

    position:relative;

    padding:0 20px;

}

.tf-process-icon{

    width:110px;

    height:110px;

    margin:auto;

    border-radius:50%;

    background:#f6f4ff;

    border:3px solid #e4ddff;

    display:flex;

    align-items:center;

    justify-content:center;

    position:relative;

    transition:.35s;

}

.tf-process-icon::before{

    content:"";

    width:82px;

    height:82px;

    border-radius:50%;

    background:linear-gradient(135deg,#4a73ff,#6b45ff);

    position:absolute;

}

.tf-process-icon i{

    position:relative;

    z-index:2;

    font-size:34px;

    color:#fff;

}

.tf-step-number{

    position:absolute;

    top:-8px;

    left:-8px;

    width:34px;

    height:34px;

    border-radius:50%;

    background:#4d5cff;

    color:#fff;

    font-size:13px;

    font-weight:700;

    display:flex;

    align-items:center;

    justify-content:center;

    z-index:3;

    box-shadow:0 8px 20px rgba(77,92,255,.25);

}

.tf-process-step h4{

    margin-top:28px;

    margin-bottom:16px;

    font-size:24px;

    font-weight:700;

    color:#132247;

}

.tf-process-step p{

    color:#6b7285;

    font-size:16px;

    line-height:1.8;

    max-width:240px;

    margin:auto;

}

.tf-process-step:hover .tf-process-icon{

    transform:translateY(-8px) rotate(5deg);

    box-shadow:0 18px 45px rgba(76,95,255,.20);

}

/*====================
Tablet
====================*/

@media(max-width:991px){

.tf-webapp-process{

    padding:90px 0;

}

.tf-process-heading{

    margin-bottom:60px;

}

.tf-process-heading h2{

    font-size:42px;

}

.tf-process-step{

    margin-bottom:45px;

}

}

/*====================
Mobile
====================*/

@media(max-width:767px){

.tf-webapp-process{

    padding:70px 0;

}

.tf-process-heading{

    margin-bottom:45px;

}

.tf-process-heading h2{

    font-size:32px;

    line-height:1.3;

}

.tf-process-icon{

    width:90px;

    height:90px;

}

.tf-process-icon::before{

    width:68px;

    height:68px;

}

.tf-process-icon i{

    font-size:28px;

}

.tf-process-step h4{

    font-size:21px;

}

.tf-process-step p{

    font-size:15px;

}

}
</style>

<main>
<!--==============================
 Web & App Maintenance Hero
==============================-->

<section class="tf-webapp-hero">

    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-5">

                <div class="tf-webapp-content">

                    <div class="tf-webapp-badge">
                        <i class="fa-solid fa-shield-halved"></i>
                        Reliable. Secure. Always On.
                    </div>

                    <h1>
                        Website & App <br>
                        Maintenance
                    </h1>

                    <p>
                        Secure, updated, and always running smoothly with our
                        proactive website and application maintenance services.
                    </p>

                    <div class="tf-webapp-buttons">

                        <a href="#" class="tf-btn-primary">
                            Get Support
                        </a>

                        <a href="#" class="tf-btn-outline">
                            Free Audit
                        </a>

                    </div>

                    <div class="tf-webapp-features">

                        <div>
                            <i class="fa-solid fa-desktop"></i>
                            24/7 Monitoring
                        </div>

                        <div>
                            <i class="fa-solid fa-shield-halved"></i>
                            Security Updates
                        </div>

                        <div>
                            <i class="fa-solid fa-bug"></i>
                            Bug Fixes
                        </div>

                    </div>

                </div>

            </div>


            <!-- Right Image -->
            <div class="col-lg-7">

                <div class="tf-webapp-image">

                    <img src="assets/images/webapp1.png"
                        alt="Website Maintenance Dashboard">

                </div>

            </div>

        </div>
    </div>

</section>
<!--==================================
 Why Choose Us
===================================-->

<section class="tf-webapp-why">
    <div class="container">

        <div class="tf-webapp-heading text-center">

            <span class="tf-subtitle">
                WHY CHOOSE US
            </span>

            <h2>
                We Keep Your Digital Presence <br>
                <span>Secure, Fast & Hassle-Free</span>
            </h2>

        </div>

        <div class="row g-4 mt-4">

            <!-- Card 1 -->
            <div class="col-lg col-md-6">
                <div class="tf-why-card">

                    <div class="tf-why-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h4>Proactive Monitoring</h4>

                    <p>
                        We monitor your website and apps 24/7 to prevent
                        downtime, errors, and security threats.
                    </p>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg col-md-6">
                <div class="tf-why-card">

                    <div class="tf-why-icon">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </div>

                    <h4>Timely Updates</h4>

                    <p>
                        We keep your CMS, plugins, themes and applications
                        updated with the latest stable versions.
                    </p>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg col-md-6">
                <div class="tf-why-card">

                    <div class="tf-why-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <h4>Performance Optimization</h4>

                    <p>
                        Faster loading speed, optimized databases and better
                        overall user experience for every visitor.
                    </p>

                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg col-md-6">
                <div class="tf-why-card">

                    <div class="tf-why-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>

                    <h4>Regular Backups</h4>

                    <p>
                        Automated daily backups keep your valuable business
                        data protected and ready for recovery.
                    </p>

                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg col-md-6">
                <div class="tf-why-card">

                    <div class="tf-why-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <h4>Expert Support</h4>

                    <p>
                        Get quick assistance from experienced maintenance
                        specialists whenever you need help.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>
<!--==================================
 Our Maintenance Services
===================================-->

<section class="tf-webapp-services">

    <div class="container">

        <div class="tf-service-heading text-center">

            <span class="tf-service-subtitle">
                OUR SERVICES
            </span>

            <h2>
                Comprehensive Maintenance for
                <span>Websites & Mobile Apps</span>
            </h2>

            <div class="tf-heading-divider">
                <span></span>
                <i class="fa-solid fa-circle"></i>
                <span></span>
            </div>

        </div>

        <div class="row g-4">

            <!-- Card 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-window-maximize"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Website Updates</h4>

                        <p>
                            Keep your website updated with the latest features,
                            plugin improvements, and compatibility enhancements.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-bug"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Bug Fixing</h4>

                        <p>
                            Identify and resolve bugs, broken layouts,
                            functionality issues, and unexpected errors.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Security Management</h4>

                        <p>
                            Regular security audits, malware scanning,
                            vulnerability fixes and firewall protection.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 4 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Backup & Recovery</h4>

                        <p>
                            Automated cloud backups with instant recovery to
                            protect your valuable business data.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 5 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Performance Optimization</h4>

                        <p>
                            Improve loading speed, optimize databases,
                            caching, and deliver the best user experience.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Card 6 -->

            <div class="col-lg-4 col-md-6">

                <div class="tf-service-card">

                    <div class="tf-service-icon">
                        <i class="fa-solid fa-file-pen"></i>
                    </div>

                    <div class="tf-service-content">

                        <h4>Content Updates</h4>

                        <p>
                            Update text, images, banners, blogs, and business
                            information whenever required.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!--==================================
 How It Works
===================================-->

<section class="tf-webapp-process">

    <div class="container">

        <div class="tf-process-heading text-center">

            <span class="tf-process-subtitle">
                HOW IT WORKS
            </span>

            <h2>
                Our Simple
                <span>Maintenance</span>
                Process
            </h2>

            <div class="tf-process-divider">
                <span></span>
                <i class="fa-solid fa-circle"></i>
                <span></span>
            </div>

        </div>

        <div class="row position-relative justify-content-center">

            <!-- Step 1 -->

            <div class="col-lg-3 col-md-6">

                <div class="tf-process-step">

                    <div class="tf-process-icon">

                        <span class="tf-step-number">01</span>

                        <i class="fa-solid fa-clipboard-list"></i>

                    </div>

                    <h4>1. Analyze</h4>

                    <p>
                        We analyze your website or application and understand
                        your maintenance requirements.
                    </p>

                </div>

            </div>

            <!-- Step 2 -->

            <div class="col-lg-3 col-md-6">

                <div class="tf-process-step">

                    <div class="tf-process-icon">

                        <span class="tf-step-number">02</span>

                        <i class="fa-solid fa-desktop"></i>

                    </div>

                    <h4>2. Monitor</h4>

                    <p>
                        Continuous monitoring of uptime, security,
                        performance and system health.
                    </p>

                </div>

            </div>

            <!-- Step 3 -->

            <div class="col-lg-3 col-md-6">

                <div class="tf-process-step">

                    <div class="tf-process-icon">

                        <span class="tf-step-number">03</span>

                        <i class="fa-solid fa-screwdriver-wrench"></i>

                    </div>

                    <h4>3. Maintain</h4>

                    <p>
                        Regular updates, bug fixes, backups and
                        optimization keep everything running smoothly.
                    </p>

                </div>

            </div>

            <!-- Step 4 -->

            <div class="col-lg-3 col-md-6">

                <div class="tf-process-step tf-last-step">

                    <div class="tf-process-icon">

                        <span class="tf-step-number">04</span>

                        <i class="fa-solid fa-headset"></i>

                    </div>

                    <h4>4. Support</h4>

                    <p>
                        Dedicated experts are always available whenever
                        you need technical assistance.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
</main>