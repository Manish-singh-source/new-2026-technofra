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

    border-radius:25px;

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
</main>