<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technofra Website</title>

    <!-- Preconnect for faster font loading (PUT THIS FIRST!) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">

    <!-- Google Fonts (deferred) -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" media="print" onload="this.media='all'">


    <!-- Load Font Awesome CSS asynchronously -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="print" onload="this.media='all'">

    <!-- fontello font css -->
    <link rel="stylesheet" href="assets/css/plugins/fontello-enqueue.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="assets/css/plugins/fontello-icons.css" media="print" onload="this.media='all'">

    <!-- others css -->
    <!-- Keep these normal - needed for initial page load -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Make these async - only used for specific components -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    </noscript>

    <link rel="stylesheet" href="assets/css/plugins/lightgallery-bundle.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="assets/css/plugins/lightgallery-bundle.min.css">
    </noscript>

</head>

<body class="hero-video-page">
    <div class="wrapper">
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader">
                <img src="assets/images/preloader-dark.png" alt="Loading...">
            </div>
        </div>
        <!-- End Preloader -->

        <!-- <button id="themeBtn"><i class="far fa-moon"></i></button> -->
        <!-- search-popup -->
        <div class="search-popup" data-popup="1">
            <div class="search-popup-content">
                <form>
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="Type Your Search..." required>
                </form>
                <button type="button" class="close-popup"></button>
            </div>
        </div>

        <!-- Side Menu -->
        <div class="side-menu" id="sideMenu">
            <div class="overlay" id="overlay"></div>
            <a href="javascript:void(0)" class="close-btn" id="closeBtn"><i class="fa fa-close"></i> close</a>
            <div class="menu-content">
                <a class='logo' href='index1.html'>
                    <img src="assets/images/new/logo.png" class="wi" alt="logo">
                </a>
                <div class="sidebar-menu">
                    <h4 class="title">contacts</h4>
                    <p>USA, New York - 1060 <br> Str. First Avenue 1</p>
                    <a href="tel:+13685678954" title="" class="nmbr">800 100 975 20 34</a>
                    <a href="tel:8003508431" title="" class="nmbr">+ (123) 1800-234-5678</a>
                    <a href="mailto:aiero@mail.co" class="email">aiero@mail.co</a>
                    <a href="#" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                        <span>Enquiry Now</span>
                    </a>
                </div>
                <ul class="social-icon">
                    <li><a href="www.facebook.html" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://x.com/i/flow/login?lang=en" title=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linked.com/" title=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.youtube.com/" title=""><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- New Mobile Menu -->
        <div data-menu="mobileMenu" class="side-menu2">
            <div class="menu-btns">
                <!-- <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a> -->
                <button id="mobileCloseBtn2" class="close-btn"></button>
            </div>
            <ul>
                <li>
                    <a href="#">Home</a>
                    <ul>
                        <li><a href='index1.html'>Modern Technology</a></li>
                        <li><a href='index2.html'>Neural Networks</a></li>
                        <li><a href='index3.html'>AI Agency</a></li>
                        <li><a href='index4.html'>Chatbot</a></li>
                        <li><a href='index5.html'>Startup</a></li>
                        <li><a href='index6.html'>AI Consulting</a></li>
                        <li><a href='index7.html'>Futurism</a></li>
                        <li><a href='index8.html'>Hi-Tech</a></li>
                        <li><a href='index9.html'>Voiceover</a></li>
                        <li><a href='index10.html'>Science</a></li>
                        <li><a href='index11.html'>Creative Bureau</a></li>
                        <li><a href='index12.html'>Video Voiceover</a></li>
                        <li><a href='index13.html'>IT Services</a></li>
                        <li><a href='index14.html'>AI Devices</a></li>
                        <li><a href='index15.html'>AI Solutions</a></li>
                        <li><a href='index16.html'>Image Generator</a></li>
                        <li><a href='index17.html'>Content Generator</a></li>
                        <li><a href='index.html'>Intro</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul>
                        <li><a href='about-us.html'>About us</a></li>
                        <li class="sub-menu">
                            <a href="#">Team</a>
                            <ul>
                                <li><a href='team.html' title>Creative team</a></li>
                                <li><a href='team-single.html' title>Team Single</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">Projects</a>
                            <ul>
                                <li><a href='project.html'>Projects Grid</a></li>
                                <li><a href='project2.html'>Projects Modern</a></li>
                                <li><a href='project-single.html'>Project Single</a></li>
                            </ul>
                        </li>
                        <li><a href='gallery-grid.html'>Gallery Grid</a></li>
                        <li><a href='gallery-masonry.html'>Gallery Masonry</a></li>
                        <li><a href='pricing.html'>Pricing plans</a></li>
                        <li><a href='faq.html'>FAQ</a></li>
                        <li><a href='typography.html'>Typography</a></li>
                        <li><a href='404.html'>404</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                    <ul>
                        <li><a href='service.html'>Services Page</a></li>
                        <li><a href='service-single.html'>Service Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Shop</a>
                    <ul>
                        <li><a href='shop.html'>Products</a></li>
                        <li><a href='shop-single.html'>Single Product</a></li>
                        <li><a href='cart.html'>Shopping cart</a></li>
                        <li><a href='checkout.html'>Checkout</a></li>
                        <li>
                        <li><a href='account.html'>My account</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul>
                        <li><a href='blog.html'>Blog Classic</a></li>
                        <li><a href='blog2.html'>Blog Grid</a></li>
                        <li><a href='blog-single.html'>Blog Single</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacts</a></li>
            </ul>
            <div class="menu-contact">
                <span>Contacts</span>
                <a href="tel:+13685678954" class="nmbr" title="">+1 800 529 10 37</a>
                <a href="mailto:aiero@mail.co" title="" class="gmail">aiero@mail.co</a>
            </div>
            <div class="menu-links">
                <span>Follow us:</span>
                <ul class="social-icon">
                    <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                </ul>
                <a href="#" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                    <span>Enquiry Now</span>
                </a>
            </div>
        </div>
        <!-- Overlay for Mobile Menu -->
        <div class="overlay2"></div>

        <!-- sticky header -->
        <header class="sticky-active">
            <div class="header-menu-area">
                <div class="row gx-20 align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="javascript:void(0)" class="menu-toggle"></a>
                            <a href='index1.html'>
                                <img src="assets/images/new/logo-black.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu menu-style1 v4">
                            <ul>
                                <li>
                                    <a class='active' href='index.html'>
                                        <span class="menu-item">Home</span>
                                        <span class="menu-item2">Home</span>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li class="mega-menu-column">
                                            <ul>
                                                <li><a href='index1.html'>Modern Technology</a></li>
                                                <li><a href='index2.html'>Neural Networks</a></li>
                                                <li><a href='index3.html'>AI Agency</a></li>
                                                <li><a href='index4.html'>Chatbot</a></li>
                                                <li><a href='index5.html'>Startup</a></li>
                                                <li><a href='index6.html'>AI Consulting</a></li>
                                                <li><a href='index7.html'>Futurism</a></li>
                                                <li><a href='index8.html'>Hi-Tech</a></li>
                                                <li><a href='index9.html'>Voiceover</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href='index10.html'>Science</a></li>
                                                <li><a href='index11.html'>Creative Bureau</a></li>
                                                <li><a href='index12.html'>Video Voiceover</a></li>
                                                <li><a href='index13.html'>IT Services</a></li>
                                                <li><a href='index14.html'>AI Devices</a></li>
                                                <li><a href='index15.html'>AI Solutions</a></li>
                                                <li><a href='index16.html'>Image Generator</a></li>
                                                <li><a href='index17.html'>Content Generator</a></li>
                                                <li><a href='index.html'>Intro</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-column">
                                            <a class='darkModeTriggerImg' href='index1.html'><img src="assets/images/event/dark-version.png" alt="AI Agency & Technology HTML Template"></a>
                                            <a class='darkModeTriggerImg2' href='index1.html'><img src="assets/images/event/light-version.png" alt="AI Agency & Technology HTML Template"></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-item">Pages</span>
                                        <span class="menu-item2">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='about-us.html'>About us</a></li>
                                        <li>
                                            <a href='team.html'>Team</a>
                                            <ul class="sub-menu v1">
                                                <li><a href='team.html'>Creative team</a></li>
                                                <li><a href='team-single.html'>Team Single</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Projects</a>
                                            <ul class="sub-menu v2">
                                                <li><a href='project.html'>Projects Grid</a></li>
                                                <li><a href='project2.html'>Projects Modern</a></li>
                                                <li><a href='project-single.html'>Project Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href='gallery-grid.html'>Gallery Grid</a></li>
                                        <li><a href='gallery-masonry.html'>Gallery Masonry</a></li>
                                        <li><a href='pricing.html'>Pricing plans</a></li>
                                        <li><a href='faq.html'>FAQ</a></li>
                                        <li><a href='typography.html'>Typography</a></li>
                                        <li><a href='404.html'>404</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='service.html'>
                                        <span class="menu-item">services</span>
                                        <span class="menu-item2">services</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='service.html'>Services Page</a></li>
                                        <li><a href='service-single.html'>Service Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='shop.html'>
                                        <span class="menu-item">Shop</span>
                                        <span class="menu-item2">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='shop.html'>Products</a></li>
                                        <li><a href='shop-single.html'>Single Product</a></li>
                                        <li><a href='cart.html'>Shopping cart</a></li>
                                        <li><a href='checkout.html'>Checkout</a></li>
                                        <li><a href='account.html'>My account</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='blog.html'>
                                        <span class="menu-item">Blog</span>
                                        <span class="menu-item2">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='blog.html'>Blog Classic</a></li>
                                        <li><a href='blog2.html'>Blog Grid</a></li>
                                        <li><a href='blog-single.html'>Blog Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        <span class="menu-item">Contacts</span>
                                        <span class="menu-item2">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="btn-box">
                            <!-- <a class='popup-search' data-popup='1' href='contact.html'><i class="fa fa-search"></i></a> -->
                            <a href="#" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                                <span>Enquiry Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="hamburger popup-menu" data-menu="mobileMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
        <!-- End sticky header -->

        <!--======== Header ========-->
        <header class="vs-header4">
            <div class="header-top4">
                <div class="container-fluid">
                    <div class="header-top-content4">
                        <ul class="top-bar-contacts">
                            <li>
                                <span class="contact-item-title">Call us:</span>
                                <a href="tel:+918080803374">+91 8080 80 3374</a>
                            </li>
                            <li>
                                <span class="contact-item-title">Email:</span>
                                <a href="mailto:info@technofra.com">info@technofra.com</a>
                            </li>
                        </ul>
                        <ul class="top-bar-socials">
                            <li><span>Follow us:</span></li>
                            <li><a href="https://technofra.com/app" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/Technofra_" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://technofra.com/" title=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://technofra.com/" title=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container2 position-relative">
                    <div class="header-menu-area">
                        <div class="row gx-20 align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="javascript:void(0)" class="menu-toggle"></a>
                                    <a href='index1.html'>
                                        <img src="assets/images/new/logo.png" class="wi" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu menu-style1 v4">
                                    <ul>
                                        <li>
                                            <a class='active' href='index.html'>
                                                <span class="menu-item">Home</span>
                                                <span class="menu-item2">Home</span>
                                            </a>
                                            <ul class="mega-sub-menu">
                                                <li class="mega-menu-column">
                                                    <ul>
                                                        <li><a href='index1.html'>Modern Technology</a></li>
                                                        <li><a href='index2.html'>Neural Networks</a></li>
                                                        <li><a href='index3.html'>AI Agency</a></li>
                                                        <li><a href='index4.html'>Chatbot</a></li>
                                                        <li><a href='index5.html'>Startup</a></li>
                                                        <li><a href='index6.html'>AI Consulting</a></li>
                                                        <li><a href='index7.html'>Futurism</a></li>
                                                        <li><a href='index8.html'>Hi-Tech</a></li>
                                                        <li><a href='index9.html'>Voiceover</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href='index10.html'>Science</a></li>
                                                        <li><a href='index11.html'>Creative Bureau</a></li>
                                                        <li><a href='index12.html'>Video Voiceover</a></li>
                                                        <li><a href='index13.html'>IT Services</a></li>
                                                        <li><a href='index14.html'>AI Devices</a></li>
                                                        <li><a href='index15.html'>AI Solutions</a></li>
                                                        <li><a href='index16.html'>Image Generator</a></li>
                                                        <li><a href='index17.html'>Content Generator</a></li>
                                                        <li><a href='index.html'>Intro</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-column">
                                                    <a class='darkModeTriggerImg' href='index1.html'><img src="assets/images/event/dark-version.png" alt="AI Agency & Technology HTML Template"></a>
                                                    <a class='darkModeTriggerImg2' href='index1.html'><img src="assets/images/event/light-version.png" alt="AI Agency & Technology HTML Template"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-item">Pages</span>
                                                <span class="menu-item2">Pages</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href='about-us.html'>About us</a></li>
                                                <li>
                                                    <a href='team.html'>Team</a>
                                                    <ul class="sub-menu v1">
                                                        <li><a href='team.html'>Creative team</a></li>
                                                        <li><a href='team-single.html'>Team Single</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Projects</a>
                                                    <ul class="sub-menu v2">
                                                        <li><a href='project.html'>Projects Grid</a></li>
                                                        <li><a href='project2.html'>Projects Modern</a></li>
                                                        <li><a href='project-single.html'>Project Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='gallery-grid.html'>Gallery Grid</a></li>
                                                <li><a href='gallery-masonry.html'>Gallery Masonry</a></li>
                                                <li><a href='pricing.html'>Pricing plans</a></li>
                                                <li><a href='faq.html'>FAQ</a></li>
                                                <li><a href='typography.html'>Typography</a></li>
                                                <li><a href='404.html'>404</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='service.html'>
                                                <span class="menu-item">services</span>
                                                <span class="menu-item2">services</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href='service.html'>Services Page</a></li>
                                                <li><a href='service-single.html'>Service Single</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='shop.html'>
                                                <span class="menu-item">Shop</span>
                                                <span class="menu-item2">Shop</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href='shop.html'>Products</a></li>
                                                <li><a href='shop-single.html'>Single Product</a></li>
                                                <li><a href='cart.html'>Shopping cart</a></li>
                                                <li><a href='checkout.html'>Checkout</a></li>
                                                <li><a href='account.html'>My account</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='blog.html'>
                                                <span class="menu-item">Blog</span>
                                                <span class="menu-item2">Blog</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href='blog.html'>Blog Classic</a></li>
                                                <li><a href='blog2.html'>Blog Grid</a></li>
                                                <li><a href='blog-single.html'>Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='contact.html'>
                                                <span class="menu-item">Contacts</span>
                                                <span class="menu-item2">Contacts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="btn-box">
                                    <!-- <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a> -->
                                    <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='contact.html' title>
                                        <span>Enquiry Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="hamburger popup-menu" data-menu="mobileMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!--======== / Header ========-->

        <!-- her-style9 -->
        <section class="hero-style14">
            <div class="container-fluid">
                <div class="row end">
                    <div class="col-xl-7 col-lg-12">
                        <div class="hero-title">
                            <h1 class="gradient-title14">Building Digital Growth With <span>Strategy, Design & Technology</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-xl-1">
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="hero-content14">
                            <p>Technofra builds strong digital brands through websites, apps, branding, marketing, and smart tech solutions.
                            </p>
                            <a class='ibt-btn ibt-btn-secondary' href='contact' target='_blank' title>
                                <span>Start Your Project</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End hero-style9 -->

        <!-- service-sec20 -->
        <section class="service-sec20">
            <div class="container2">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="ser-info20">
                            <div class="ser-card20_card1">
                                <img src="assets/images/icon/icon14-1.svg" alt="AI Agency & Technology HTML Template">
                                <h4 class="title">Innovative&nbsp;Solutions</h4>
                                <p>We deliver innovative solutions that combine creativity, technology, and strategy to help businesses grow, adapt, and succeed in a competitive market.</p>
                            </div>
                            <div class="ser-card20_card2">
                                <img src="assets/images/icon/icon14-2.svg" alt="AI Agency & Technology HTML Template">
                                <h4 class="title">Business Growth</h4>
                                <span>Helping brands adapt, scale, and succeed digitally</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="ser-info20">
                            <div class="ser-card20_card3">
                                <img src="assets/images/service/ser20-1.png" alt="AI Agency & Technology HTML Template">
                                <h4 class="title">Professional Team
                                </h4>
                                <p>Our professional team combines creativity, expertise, and technology to deliver reliable digital solutions that help businesses achieve long-term growth.</p>
                            </div>
                            <div class="ser-card20_card4">
                                <img src="assets/images/service/ser20-2.png" alt="AI Agency & Technology HTML Template">
                                <div class="title">
                                    <h4>24/7 Support</h4>
                                    <p>Our 24/7 support ensures reliable assistance whenever you need it, helping your business run smoothly with quick solutions and dedicated service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="ser-card20_card5">
                            <img src="assets/images/service/ser20-5.png" alt="AI Agency & Technology HTML Template">
                            <!-- <h4 class="title">AI Oculus</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service-sec20 -->

        <!-- about-us-sec9 -->
        <section class="about-us-sec9 ibt-section-gapTop">
            <div class="container">
                <div class="title-area row">
                    <div class="sec-title col-9">
                        <span class="sub-title">About Company</span>
                        <h2 class="title animated-heading">From Start to Success:</h2>
                        <h2 class="title animated-heading">Technofra’s Milestones in Technology</h2>
                    </div>
                    <div class="col-3">
                        <!-- 
                    <a class='mt-5 ibt-btn ibt-btn-secondary' href='index14.html' target='_blank' title>
                            <span>Download Company Profile</span>
                            <i class="fa-solid fa-file-pdf"></i>
                        </a> -->
                        <button type="button" class="mt-5 ibt-btn ibt-btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Download Company Profile 
                            <i class="fa-solid fa-file-pdf"></i>
                        </button>
                        <!-- <img src="assets/images/event/cross1-1.png" alt="AI Agency & Technology HTML Template"> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content9">
                            <h4 class="title">14+ Years</h4>
                        </div>
                        <!-- <a class='mt-5 ibt-btn ibt-btn-secondary' href='index14.html' target='_blank' title>
                            <span>Download Company Profile</span>
                            <i class="fa-solid fa-file-pdf"></i>
                        </a> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="about-info9">
                            <p>Welcome to Technofra, your all-in-one destination for digital solutions. We specialize in website and mobile app development , branding, digital marketing, payment & API integration, domain & hosting, and IT infrastructure.</p>
                            <p>
                                Our expertise and dedication to excellence help businesses succeed and thrive in the digital era with innovative and efficient solutions.
                            </p>
                            <p>
                                Technofra was founded in 2012 with a passion for technology and a commitment to excellence. Over the years, we have grown into a trusted partner for businesses worldwide. Our journey began with a small team of dedicated professionals, and today we stand as a premier digital agency, delivering a wide range of services to a diverse clientele.
                            </p>
                            <p class="mb-0">
                                From launching our first website to integrating complex APIs, our journey is marked by numerous milestones and achievements. Each project has been a learning experience, contributing to our growth and success. We take pride in our work and strive to exceed our clients' expectations in every project we undertake.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about-us-sec9 -->


        <!-- feature-sec7 -->
        <section class="feature-sec7 ibt-section-gapTop" id="fature-down">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <div class="ser-content7">
                            <div class="sec-title">
                                <span class="sub-title">Our Work Process</span>
                                <h2 class="title animated-heading">From Ideas to Digital Growth</h2>
                                <p>
                                    At Technofra, we turn business ideas into practical digital experiences. Our team works across website development, mobile apps, branding, payment integration, hosting, and IT support to help you launch faster and grow with confidence.
                                </p>
                                <!-- 
                                <a class='ibt-btn ibt-btn-outline' href='index8.html' title>
                                    <span>Explore more</span>
                                    <i class="icon-arrow-top"></i>
                                </a> -->
                            </div>
                            <!-- 
                            <div class="about-counter">
                                <div class="counter-box4">
                                    <span class="counter-number" data-target="270">0</span>
                                    <span class="counter-text">k</span>
                                </div>
                                <span class="solutions">AI Solutions for our clients</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-info7">
                            <div class="feature-card7">
                                <!-- <img src="assets/images/feature/feature2-3.png" alt="AI Agency & Technology HTML Template"> -->
                                 <div class="process-icons">
                                     <i class="fas fa-comments"></i>
                                </div>
                                <div class="feature-content7">
                                    <h4 class="title"><a href="#" title="#">Consultation & Discovery</a></h4>
                                    <p>We understand your business goals, target audience, brand needs, website requirements, and marketing objectives.</p>
                                </div>
                            </div>
                            <div class="feature-card7">
                                <!-- <img src="assets/images/feature/feature7-2.svg" alt="AI Agency & Technology HTML Template"> -->
                                <div class="process-icons">
                                     <i class="fas fa-lightbulb"></i>
                                </div>
                                <div class="feature-content7">
                                    <h4 class="title"><a href="#" title="#">Strategy & Planning</a></h4>
                                    <p>We create a clear roadmap for your brand identity, website structure, content direction, and digital marketing approach.</p>
                                </div>
                            </div>
                            <div class="feature-card7">
                                <!-- <img src="assets/images/feature/feature7-3.svg" alt="AI Agency & Technology HTML Template"> -->
                                <div class="process-icons">
                                     <i class="fas fa-palette"></i>
                                </div>
                                <div class="feature-content7">
                                    <h4 class="title"><a href="#" title="#">Design & Execution</a></h4>
                                    <p>Our team designs your brand visuals, develops responsive websites, and creates engaging social media content with proper planning.</p>
                                </div>
                            </div>
                            <div class="feature-card7">
                                <!-- <img src="assets/images/feature/feature2-1.png" alt="AI Agency & Technology HTML Template"> -->
                                <div class="process-icons">
                                     <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-content7 mb-0">
                                    <h4 class="title"><a href="#" title="#">Launch, Marketing & Growth</a></h4>
                                    <p>We launch, promote, analyze, and improve your digital presence to help your business grow with measurable results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature-sec7 -->

        <!-- pricing-style1 -->
        <section class="pricing-style1 v2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pricing-content">
                            <div class="sec-title">
                                <span class="sub-title">Our Purpose</span>
                                <h2 class="title animated-heading">Mission & Vision</h2>
                                <p>Technofra, established in 2012, is driven by a clear mission and vision to deliver innovative digital solutions that empower businesses globally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="price-card">
                            <div class="d-flex justify-content-center align-items-center p-2">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="price-heade">
                                <h4 class="title">Mission</h4>
                                <span>Technofra empowers businesses with innovative digital solutions, driving growth and success through cutting-edge technology and exceptional service, ensuring seamless and effective digital transformation in the modern digital age</span>
                            </div>
                        </div>
                        <div class="price-card v2">
                            <div class="d-flex justify-content-center align-items-center p-2">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <div class="price-heade">
                                <h4 class="title">Vision</h4>
                                <span>Our vision is to be the leading digital agency, delivering cutting-edge technology and exceptional customer service, setting industry standards, and becoming the trusted partner for businesses globally.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End pricing-style1 -->

        <!-- team-section2 -->
        <section class="team-section2 ibt-section-gapTop">
            <div class="container">
                <div class="title-area">
                    <div class="row align-items-end mb-0">
                        <div class="col-xl-9 col-lg-8">
                            <div class="sec-title mb-0">
                                <span class="sub-title">Our Team</span>
                                <h2 class="title animated-heading">Meet Our Leadership</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="team-counter">
                                <div class="counter-box8">
                                    <span class="counter-text">+</span>
                                    <span class="counter-number percent-counter" data-target="250">0</span>
                                </div>
                                <span class="title">Awesome team members</span>
                            </div>
                        </div>
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
                            <div class="team-card v2">
                                <div class="team-img">
                                    <a href='team-single.html'><img src="assets/images/team/team1-3.png" alt="AI Agency & Technology HTML Template"></a>
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
                                    <a href='team-single.html'><img src="assets/images/team/team1-5.png" alt="AI Agency & Technology HTML Template"></a>
                                    <span class="sub-title">Learning</span>
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
                                    <a href='team-single.html'><img src="assets/images/team/team1-1.png" alt="AI Agency & Technology HTML Template"></a>
                                    <span class="sub-title">Future</span>
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
                                    <a href='team-single.html'><img src="assets/images/team/team1-4.png" alt="AI Agency & Technology HTML Template"></a>
                                    <span class="sub-title">Digital</span>
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
                                    <a href='team-single.html'><img src="assets/images/team/team1-6.png" alt="AI Agency & Technology HTML Template"></a>
                                    <span class="sub-title">Ideas</span>
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

        <!-- footer-style4 -->
        <footer class="footer-style4">
            <div class="footer-top4">
                <div class="container">
                    <div class="footer-content4">
                        <h2 class="title">Technofra helps businesses unlock their online potential</h2>
                        <a href="https://technofra.com/" title="" class="ibt-btn ibt-btn-outline">
                            <span>Contact Us</span>
                            <i class="icon-arrow-top"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget-area ibt-section-gapTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="about-widget4 footer-widget">
                                <div class="footer-logo">
                                    <img src="assets/images/new/logo.png" alt="Technofra">
                                </div>
                                <p>Technofra helps businesses unlock their online potential with innovative web design and development solutions.</p>
                                <p><a href="https://technofra.com/">© 2026 Technofra</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-menu4">
                                <div class="location-widget4 footer-widget">
                                    <h4 class="widget-title">Contact Info</h4>
                                    <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067. Maharashtra - INDIA.</p>
                                    <h5 class="title">Follow us</h5>
                                    <ul class="social-icon">
                                        <li><a href="https://technofra.com/app" title=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://x.com/Technofra_" title=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://technofra.com/" title=""><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://technofra.com/" title=""><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="contact-widget4 footer-widget">
                                    <h4 class="widget-title">Phone</h4>
                                    <a href="tel:+918080803374" title="" class="nmbr">+91 8080 80 3374</a>
                                    <a href="tel:+918080803375" title="" class="nmbr">+91 8080 80 3375</a>
                                    <h5 class="widget-title">Email</h5>
                                    <a href="mailto:info@technofra.com" title="" class="gmail">info@technofra.com</a>
                                    <a href="mailto:support@technofra.com" title="" class="gmail">support@technofra.com</a>
                                </div>
                                <div class="footer-links footer-widget">
                                    <h4 class="widget-title">Services</h4>
                                    <ul>
                                        <li><a href="https://technofra.com/" title="">Website Development</a></li>
                                        <li><a href="https://technofra.com/" title="">App Development</a></li>
                                        <li><a href="https://technofra.com/" title="">E-Commerce Development</a></li>
                                        <li><a href="https://technofra.com/" title="">Branding</a></li>
                                        <li><a href="https://technofra.com/" title="">Digital Marketing</a></li>
                                        <li><a href="https://technofra.com/" title="">Social Media Marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-style4 -->


        <!-- Scroll Button -->
        <button id="scrollBtn" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
    </div>

    <!-- Company Profile Modal -->
    <div class="modal fade company-profile-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Download Company Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div
                    class="modal-body register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate">
                    <p>Fill in your details and we’ll email you the company profile.</p>
                    <!-- Job Application Form -->
                    <form action="send7" method="post" enctype="multipart/form-data" id="companyProfileForm">
                        <div class="company-profile-form-shell">
                            <!-- Full Name -->
                            <div class="company-profile-field text-start">
                                <label for="name" class="form-label">Full Name*</label>
                                <input type="text" class="form-control ca-two-border" name="name" id="name" required>
                                <span id="name-error" style="color: red; display: none;">Please
                                    enter a valid name (letters only)</span>
                            </div>

                            <!-- Email -->
                            <div class="company-profile-field text-start">
                                <label for="email" class="form-label">Email ID*</label>
                                <input type="email" class="form-control ca-two-border" name="email" id="email" required>
                                <span id="email-error" style="color: red; display: none;">Please
                                    enter a valid email address</span>
                            </div>

                            <!-- Contact Details -->
                            <div class="company-profile-field text-start">
                                <label for="phone" class="form-label">Contact Details*</label>
                                <input type="tel" class="form-control ca-two-border" name="contact" id="phone" required>
                                <span id="phone-error" style="color: red; display: none;">Please
                                    enter a valid phone number (10 digits)</span>
                            </div>
                            <!-- Location -->



                            <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                            <div class="company-profile-captcha">
                                <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                            </div>
                            <!-- Submit Button -->
                            <div class="company-profile-actions text-start">
                                <button type="submit" class="mt-3 btn btn-outline-info company-profile-submit-btn"
                                    id="companyProfileSubmitBtn" data-default-text="Download Company Profile"
                                    data-loading-text="Sending...">
                                    Download Company Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Js Plugin -->
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/vendor/swiper-bundle.min.js" defer></script>
    <script src="assets/js/vendor/lenis.min.js" defer></script>
    <script src="assets/js/vendor/gsap.min.js" defer></script>
    <script src="assets/js/vendor/ScrollTrigger.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>

</html>

