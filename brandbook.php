<?php include 'header.php'; ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-189WWHXLSS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-189WWHXLSS');
</script>
<!-- MS Clarity -->
<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "mxzdn16ndk");
</script>
<title>Technofra</title>

<style>
    .hero-contact-info {
        position: absolute;
        left: 0;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        padding: 90px 40px 60px 0;
        height: calc(100% - 100px);
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-writing-mode: vertical-lr;
    }

    .logo-grid img {
        max-width: 100%;
        box-shadow: rgb(255 255 255 / 35%) 0px 2px 6px;
        padding: 15px;
        transition: transform 0.3s;
        background-color: aliceblue;
        border-radius: 10px;
    }

    .logo-grid img:hover {
        transform: scale(1.1);
    }

    .hero-image-two {
        position: absolute;
        left: 0;
        top: 75px;
        z-index: -1;
        width: 54%;
        height: 800px;
        background-size: cover;
    }

    .logo-grid .col {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .heding {
        font-weight: bolder;
        font-size: 55px;
        filter: drop-shadow(1px 1px 2px #38d1fe);
        margin-bottom: 20px;
    }

    .heding1 {
        font-size: 70px;
    }

    @media(max-width:480px) {
        .hero-image-two {
            position: absolute;
            left: 0;
            top: 0px;
            z-index: -1;
            width: 100%;
            height: 100%;
            background-size: cover;
        }

        .hb {
            height: 900px;
        }

        .heding1 {
            font-size: 55px;
        }

        .heding {
            font-weight: bolder;
            font-size: 47px;
            filter: drop-shadow(1px 1px 2px #38d1fe);
            margin-bottom: 20px;
        }
    }

    .hero-contact-info a {
        color: white;
    }

    @media (min-width: 1000px) and (max-width: 1399px) {

        .heding1 {
            font-size: 45px;
        }

        .heding {
            font-weight: bolder;
            font-size: 45px;
            filter: drop-shadow(1px 1px 2px #38d1fe);
            margin-bottom: 20px;
        }
    }
</style>
<?php include 'navbar.php'; ?>
<!-- Hero  -->

<div class="row gy-5 gy-lg-0 align-items-center" style="gap: 40px;">
    <div class="col-lg-7">
        <div class="ca-hero dp-hero bgc-primary">
            <div class="col-lg-7 col-xl-7 col-xxl-7">              
                <div class="hero-contact-info">
                    <a class="number" href="callto:(8080) 80 3374 / 75">
                        (8080) 80 3374 / 75
                    </a>
                    <a class="email" href="mailto:info@technofra.com">info@technofra.com</a>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4">
        <div class="row logo-grid">
            <h4 class="heding">The Brands<br><span class="heding1"> That Trust Us.</span></h4>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/Deltacab.pdf" target="_blank">
                    <img src="assets/image/branding/delta.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/NotePay.pdf" target="_blank">
                    <img src="assets/image/branding/notepay.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/Tricil.pdf" target="_blank">
                    <img src="assets/image/branding/tricil.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/PetsSmart.pdf" target="_blank">
                    <img src="assets/image/branding/petssmart.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/VARSHA.pdf" target="_blank">
                    <img src="assets/image/branding/varsha.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/Fagromatrix.pdf" target="_blank">
                    <img src="assets/image/branding/frego.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/Bhutoria.pdf" target="_blank">
                    <img src="assets/image/branding/bhutoria.webp" alt="Cogent" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-lg-4 col-6 mb-4">
                <a href="assets/image/brandbook/SNA.pdf" target="_blank">
                    <img src="assets/image/branding/sna.webp" alt="Cogent" class="img-fluid"></a>
            </div>

        </div>
    </div>

</div>


<!-- /Hero  -->

<?php include 'footer.php'; ?>