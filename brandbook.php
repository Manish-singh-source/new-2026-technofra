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

    /* .logo-grid img {
        max-width: 100%;
        box-shadow: rgb(255 255 255 / 35%) 0px 2px 6px;
        padding: 15px;
        transition: transform 0.3s;
        background-color: aliceblue;
        border-radius: 10px;
    }

    .logo-grid img:hover {
        transform: scale(1.1);
    } */

    .hero-image-two {
        position: absolute;
        left: 0;
        top: 75px;
        z-index: -1;
        width: 54%;
        height: 800px;
        background-size: cover;
    }

    /* .logo-grid .col {
        display: flex;
        align-items: center;
        justify-content: center;
    } */

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

    /* to make logos of same size  */
    /* Equal logo boxes */
    .logo-grid>[class*="col-"] {
        display: flex;
    }

    .logo-grid>[class*="col-"]>a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100px;
        padding: 15px;
        background-color: aliceblue;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgb(255 255 255 / 35%);
        transition: transform 0.3s ease;
    }

    .logo-grid>[class*="col-"]>a>img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 0;
        background: transparent;
        border-radius: 0;
        box-shadow: none;
        transform: none;
    }

    .logo-grid>[class*="col-"]>a:hover {
        transform: translateY(-3px);
    }

    @media (max-width: 480px) {
        .logo-grid>[class*="col-"]>a {
            height: 90px;
            padding: 12px;
        }
    }

    /* Space below navbar and before footer */
    .brandbook-section {
        width: 100%;
        max-width: none;
        margin-top: 40px;
        margin-bottom: 50px;
        padding-left: 0;
        padding-right: 0;
    }

    .brandbook-section>.brandbook-row {
        margin-left: 0;
        margin-right: 0;
        align-items: center;
    }

    /* Left image: flush with the section's left edge */
    .brandbook-section .brandbook-image-column {
        min-width: 0;
        padding: 0;
    }

    .brandbook-section .brandbook-cover {
        width: 100%;
        padding: 0;
    }

    .brandbook-section .brandbook-cover__image {
        position: static;
        display: block;
        width: 100%;
        max-width: 100%;
        height: auto;
        border-radius: 0;
    }

    /* Right heading and logo area */
    .brandbook-section .brandbook-logos-column {
        min-width: 0;
        padding: 30px clamp(24px, 3vw, 60px);
    }

    .brandbook-section .heding {
        margin: 0 0 30px;
        font-size: clamp(32px, 3vw, 48px);
        font-weight: 800;
        line-height: 1.15;
        filter: drop-shadow(1px 1px 2px #38d1fe);
    }

    .brandbook-section .heding1 {
        font-size: clamp(36px, 3.5vw, 56px);
    }

    /* Consistent gaps between logos */
    .brandbook-section .logo-grid {
        margin-left: -10px;
        margin-right: -10px;
    }

    .brandbook-section .logo-grid>[class*="col-"] {
        display: flex;
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 24px !important;
    }

    /* Equal logo boxes */
    .brandbook-section .logo-grid>[class*="col-"]>a {
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100px;
        padding: 15px;
        background: aliceblue;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgb(255 255 255 / 35%);
        transition: transform 0.3s ease;
    }

    .brandbook-section .logo-grid>[class*="col-"]>a>img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 0;
        background: transparent;
        border-radius: 0;
        box-shadow: none;
        transform: none;
    }

    @media (hover: hover) {
        .brandbook-section .logo-grid>[class*="col-"]>a:hover {
            transform: translateY(-3px);
        }
    }

    /* Tablet and mobile */
    @media (max-width: 991px) {
        .brandbook-section {
            margin-top: 25px;
            margin-bottom: 30px;
        }

        .brandbook-section .brandbook-logos-column {
            padding: 0 24px 20px;
        }
    }

    @media (max-width: 480px) {
        .brandbook-section .logo-grid>[class*="col-"]>a {
            height: 90px;
            padding: 12px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .brandbook-section .logo-grid>[class*="col-"]>a {
            transition: none;
        }

        .brandbook-section .logo-grid>[class*="col-"]>a:hover {
            transform: none;
        }
    }
</style>
<?php include 'navbar.php'; ?>

<!-- Hero -->
<div class="container-fluid brandbook-section">
    <div class="row gy-5 gy-lg-0 justify-content-between brandbook-row">
        <!-- LEFT: Brandbook image -->
        <div class="col-lg-7 brandbook-image-column">
            <div class="brandbook-cover">
                <img
                    src="assets/images/brandbook/brandbook.png"
                    alt="Technofra brandbook cover"
                    class="brandbook-cover__image">
            </div>
        </div>

        <!-- RIGHT: Heading and logos -->
        <div class="col-lg-5 brandbook-logos-column">
            <h4 class="heding">
                The Brands<br>
                <span class="heding1">That Trust Us.</span>
            </h4>

            <div class="row logo-grid">

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/Deltacab.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/Deltacab logo.png"
                            alt="Deltacab"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/NotePay.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/notepay (1).png"
                            alt="NotePay"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/Tricil.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/tricil logo.png"
                            alt="Tricil"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/PetsSmart.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/petssmart logo.png"
                            alt="PetsSmart"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/VARSHA.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/varsha vision care logo.png"
                            alt="Varsha Vision Care"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/Fagromatrix.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/fragomatrix B.png"
                            alt="Fragomatrix"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/Bhutoria.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/bhutoria.webp"
                            alt="Bhutoria"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4 col-6 mb-4">
                    <a href="assets/images/brandbook/SNA.pdf"
                        target="_blank" rel="noopener">
                        <img
                            src="assets/images/branding/sna logo.png"
                            alt="SNA"
                            class="img-fluid">
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Hero -->

<?php include 'footer.php'; ?>