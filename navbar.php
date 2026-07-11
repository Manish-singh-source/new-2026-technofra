        <style>
            @media (min-width: 1200px) {
                .sticky-active .header-menu-area .row {
                    flex-wrap: nowrap;
                }

                .sticky-active .header-menu-area .col-auto {
                    flex: 0 0 auto;
                }

                .sticky-active .header-menu-area .main-menu > ul {
                    white-space: nowrap;
                }

                .sticky-active .header-menu-area .btn-box {
                    white-space: nowrap;
                    flex-shrink: 0;
                    margin-right: 12px;
                }

                .sticky-active .header-menu-area .btn-box .ibt-btn {
                    display: inline-flex;
                }

                .sticky-active .header-menu-area {
                    padding-right: 37px;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu {
                    left: 100%;
                    right: auto;
                    width: min(960px, calc(100vw - 48px));
                    padding: 18px 18px;
                    border-radius: 28px;
                    background: linear-gradient(180deg, #111111 0%, #050505 100%);
                    box-shadow: 0 32px 70px rgba(0, 0, 0, 0.45);
                    display: grid;
                    grid-template-columns: 1fr 0.98fr 0.72fr;
                    gap: 0;
                    align-items: start;
                    -webkit-transform: translate(-50%, 10px);
                        -ms-transform: translate(-50%, 10px);
                            transform: translate(-50%, 10px);
                }

                .sticky-active .main-menu > ul > li:nth-child(2):hover > .mega-sub-menu {
                    -webkit-transform: translate(-50%, 0);
                        -ms-transform: translate(-50%, 0);
                            transform: translate(-50%, 0);
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column {
                    display: block;
                    padding: 0 12px;
                    border-right: 1px solid rgba(255, 255, 255, 0.16);
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column:first-child {
                    padding-left: 0;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column:last-child {
                    padding-right: 0;
                    border-right: 0;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-group + .mega-menu-group {
                    margin-top: 10px;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-sub-divider {
                    height: 1px;
                    margin: 12px 0;
                    background: rgba(255, 255, 255, 0.16);
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-heading {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    margin: 0 0 10px;
                    color: #ffffff;
                    font-size: 15px;
                    line-height: 1.1;
                    font-weight: 700;
                    letter-spacing: 0.02em;
                    text-transform: uppercase;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-heading::after {
                    content: "";
                    width: 32px;
                    height: 2px;
                    background: rgba(255, 255, 255, 0.5);
                    display: block;
                    flex: 0 0 auto;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list a {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    color: #ffffff;
                    font-size: 13px;
                    line-height: 1.25;
                    font-weight: 600;
                    letter-spacing: 0.01em;
                    text-transform: uppercase;
                    white-space: normal;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list a:hover {
                    color: #ff9f1a;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-icon {
                    width: 40px;
                    height: 40px;
                    border-radius: 10px;
                    border: 1px solid rgba(255, 255, 255, 0.5);
                    background: rgba(255, 255, 255, 0.03);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    flex: 0 0 auto;
                    color: #ffffff;
                    font-size: 17px;
                }

                .sticky-active .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-icon i {
                    width: auto;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu {
                    left: 100%;
                    right: auto;
                    width: min(960px, calc(100vw - 48px));
                    padding: 18px 18px;
                    border-radius: 28px;
                    background: linear-gradient(180deg, #111111 0%, #050505 100%);
                    box-shadow: 0 32px 70px rgba(0, 0, 0, 0.45);
                    display: grid;
                    grid-template-columns: 1fr 0.98fr 0.72fr;
                    gap: 0;
                    align-items: start;
                    -webkit-transform: translate(-50%, 10px);
                        -ms-transform: translate(-50%, 10px);
                            transform: translate(-50%, 10px);
                }

                .header-bottom .main-menu > ul > li:nth-child(2):hover > .mega-sub-menu {
                    -webkit-transform: translate(-50%, 0);
                        -ms-transform: translate(-50%, 0);
                            transform: translate(-50%, 0);
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column {
                    display: block;
                    padding: 0 12px;
                    border-right: 1px solid rgba(255, 255, 255, 0.16);
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column:first-child {
                    padding-left: 0;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu > li.mega-menu-column:last-child {
                    padding-right: 0;
                    border-right: 0;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-group + .mega-menu-group {
                    margin-top: 10px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-sub-divider {
                    height: 1px;
                    margin: 12px 0;
                    background: rgba(255, 255, 255, 0.16);
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-heading {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    margin: 0 0 10px;
                    color: #ffffff;
                    font-size: 15px;
                    line-height: 1.1;
                    font-weight: 700;
                    letter-spacing: 0.02em;
                    text-transform: uppercase;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-heading::after {
                    content: "";
                    width: 32px;
                    height: 2px;
                    background: rgba(255, 255, 255, 0.5);
                    display: block;
                    flex: 0 0 auto;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list a {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    color: #ffffff;
                    font-size: 13px;
                    line-height: 1.25;
                    font-weight: 600;
                    letter-spacing: 0.01em;
                    text-transform: uppercase;
                    white-space: normal;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list a:hover {
                    color: #ff9f1a;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-icon {
                    width: 40px;
                    height: 40px;
                    border-radius: 10px;
                    border: 1px solid rgba(255, 255, 255, 0.5);
                    background: rgba(255, 255, 255, 0.03);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    flex: 0 0 auto;
                    color: #ffffff;
                    font-size: 17px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-icon i {
                    width: auto;
                }

                .header-bottom .main-menu > ul li .sub-menu {
                    border-radius: 28px;
                    background: linear-gradient(180deg, #111111 0%, #050505 100%);
                    box-shadow: 0 32px 70px rgba(0, 0, 0, 0.35);
                    padding: 18px 18px;
                    min-width: 290px;
                    width: auto;
                }

                .header-bottom .main-menu > ul li .sub-menu li a {
                    padding: 8px 12px;
                    color: #ffffff;
                    font-size: 13px;
                    line-height: 1.25;
                    font-weight: 500;
                    border-radius: 10px;
                }

                .header-bottom .main-menu > ul li .sub-menu li a:hover {
                    background: rgba(255, 255, 255, 0.06);
                    color: #ff9f1a;
                }

                .header-bottom .main-menu > ul li .sub-menu li a::before,
                .header-bottom .main-menu > ul li .sub-menu li a::after {
                    display: none;
                }

                .header-bottom .main-menu > ul li .sub-menu li {
                    margin: 0;
                }

                .header-bottom .main-menu > ul li .sub-menu li > .sub-menu {
                    left: calc(100% + 12px);
                    top: 0;
                    margin-top: 0;
                    min-width: 260px;
                    padding: 14px;
                }
                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-column-stack {
                    display: flex;
                    flex-direction: column;
                }
            }

            @media (max-width: 1399px) {
                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu {
                    width: min(900px, calc(100vw - 40px));
                    padding: 14px 14px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-heading {
                    font-size: 15px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-list a {
                    font-size: 13px;
                }

                .header-bottom .main-menu > ul > li:nth-child(2) > .mega-sub-menu .mega-menu-icon {
                    width: 36px;
                    height: 36px;
                    font-size: 16px;
                }
            }
        </style>

        <!-- Side Menu -->
        <div class="side-menu" id="sideMenu">
            <div class="overlay" id="overlay"></div>
            <a href="javascript:void(0)" class="close-btn" id="closeBtn"><i class="fa fa-close"></i> close</a>
            <div class="menu-content">
                <a class='logo' href='index1.html'>
                    <img src="assets/images/new/logo.png" class="wi" alt="logo">
                </a>
                <div class="sidebar-menu">
                    <h4 class="title">Contact Us</h4>
                    <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067. Maharashtra - INDIA.</p>
                    <a href="tel:+918080803374" title="" class="nmbr">+91 8080 80 3374</a>
                    <a href="tel:+918080803375" title="" class="nmbr">+91 8080 80 3375</a>
                    <a href="mailto:info@technofra.com" class="email">info@technofra.com</a>
                    <a href="mailto:support@technofra.com" class="email">support@technofra.com</a>
                    <a href="contact.php" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
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
        </div>      <!-- New Mobile Menu -->
        <div data-menu="mobileMenu" class="side-menu2">
            <div class="menu-btns">
                <!-- <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a> -->
                <button id="mobileCloseBtn2" class="close-btn"></button>
            </div>
            <ul>
                <li><a href='about-us.php'>About us</a></li>
                <li class="sub-menu">
                    <a href="#">Service</a>
                    <ul>
                        <li><a href='#'>Web Design & Development</a></li>
                        <li><a href='shopify-development.php'>Shopify</a></li>
                        <li><a href='wordpress.php'>WordPress</a></li>
                        <li><a href='crm-development.php'>Custom CMS</a></li>
                        <li><a href='ios-development.php'>iOS App</a></li>
                        <li><a href='android-app-development.php'>Android App</a></li>
                        <li><a href='digital-marketing.php'>Digital Marketing</a></li>
                        <li><a href='#'>Search Engine Optimization (SEO)</a></li>
                        <li><a href='ppc.php'>Paid Marketing (PPC)</a></li>
                        <li><a href='#'>Social Media Marketing</a></li>
                        <li><a href='content-marketing.php'>Content Marketing</a></li>
                        <li><a href='#'>Branding</a></li>
                        <li><a href='#'>UI/UX</a></li>
                        <li><a href='#'>Domain & Hosting</a></li>
                        <li><a href='#'>IT Infrastructure</a></li>
                    </ul>
                </li>
                <li><a href='portfolios.php'>Portfolio</a></li>
                <li><a href='career.php'>Career</a></li>
                <li><a href='contact.php'>Contacts</a></li>
            </ul>
            <div class="menu-contact">
                <span>Contact Us</span>
                <a href="tel:+918080803374" class="nmbr" title="">+91 8080 80 3374</a>
                <a href="tel:+918080803375" class="nmbr" title="">+91 8080 80 3375</a>
                <a href="mailto:info@technofra.com" title="" class="gmail">info@technofra.com</a>
                <a href="mailto:support@technofra.com" title="" class="gmail">support@technofra.com</a>
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
                                <img src="assets/images/new/logo-black.png" class="wi" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                                                        <nav class="main-menu menu-style1 v4">
                                    <ul>
                                        <li>
                                            <a href='about-us.php'>
                                                <span class="menu-item">About us</span>
                                                <span class="menu-item2">About us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class='active' href='#'>
                                                <span class="menu-item">Service</span>
                                                <span class="menu-item2">Service</span>
                                            </a>
                                            <ul class="mega-sub-menu">
                                                <li class="mega-menu-column">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Web & App Solutions</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-display"></i></span><span>Web Design & Development</span></a></li>
                                                            <li><a href='shopify-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-code"></i></span><span>Shopify</span></a></li>
                                                            <li><a href='wordpress.php'><span class="mega-menu-icon"><i class="fa-brands fa-wordpress-simple"></i></span><span>WordPress</span></a></li>
                                                            <li><a href='crm-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-puzzle-piece"></i></span><span>Custom CMS</span></a></li>
                                                            <li><a href='ios-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-mobile-screen-button"></i></span><span>iOS App</span></a></li>
                                                            <li><a href='android-app-development.php'><span class="mega-menu-icon"><i class="fa-brands fa-android"></i></span><span>Android App</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="mega-menu-column">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Online Marketing Services</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='digital-marketing.php'><span class="mega-menu-icon"><i class="fa-solid fa-chart-line"></i></span><span>Digital Marketing</span></a></li>
                                                            <li><a href='seo.php'><span class="mega-menu-icon"><i class="fa-solid fa-magnifying-glass"></i></span><span>Search Engine Optimization (SEO)</span></a></li>
                                                            <li><a href='ppc.php'><span class="mega-menu-icon"><i class="fa-solid fa-bullhorn"></i></span><span>Paid Marketing (PPC)</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-share-nodes"></i></span><span>Social Media Marketing</span></a></li>
                                                            <li><a href='content-marketing.php'><span class="mega-menu-icon"><i class="fa-solid fa-pen-nib"></i></span><span>Content Marketing</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="mega-menu-column mega-menu-column-stack">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Branding</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-palette"></i></span><span>Branding</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-object-group"></i></span><span>UI/UX</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-sub-divider"></div>
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Hosting & IT Services</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='domain-hosting.php'><span class="mega-menu-icon"><i class="fa-solid fa-server"></i></span><span>Domain & Hosting</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-cloud"></i></span><span>IT Infrastructure</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='portfolios.php'>
                                                <span class="menu-item">Portfolio</span>
                                                <span class="menu-item2">Portfolio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='career.php'>
                                                <span class="menu-item">Career</span>
                                                <span class="menu-item2">Career</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='contact.php'>
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
                            <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='contact.php' title>
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
                                        <img src="assets/images/new/logo-black.png" class="wi" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                                                <nav class="main-menu menu-style1 v4">
                                    <ul>
                                        <li>
                                            <a href='about-us.php'>
                                                <span class="menu-item">About us</span>
                                                <span class="menu-item2">About us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class='active' href='#'>
                                                <span class="menu-item">Service</span>
                                                <span class="menu-item2">Service</span>
                                            </a>
                                            <ul class="mega-sub-menu">
                                                <li class="mega-menu-column">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Web & App Solutions</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-display"></i></span><span>Web Design & Development</span></a></li>
                                                            <li><a href='shopify-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-code"></i></span><span>Shopify</span></a></li>
                                                            <li><a href='wordpress.php'><span class="mega-menu-icon"><i class="fa-brands fa-wordpress-simple"></i></span><span>WordPress</span></a></li>
                                                            <li><a href='crm-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-puzzle-piece"></i></span><span>Custom CMS</span></a></li>
                                                            <li><a href='ios-development.php'><span class="mega-menu-icon"><i class="fa-solid fa-mobile-screen-button"></i></span><span>iOS App</span></a></li>
                                                            <li><a href='android-app-development.php'><span class="mega-menu-icon"><i class="fa-brands fa-android"></i></span><span>Android App</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="mega-menu-column">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Online Marketing Services</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='digital-marketing.php'><span class="mega-menu-icon"><i class="fa-solid fa-chart-line"></i></span><span>Digital Marketing</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-magnifying-glass"></i></span><span>Search Engine Optimization (SEO)</span></a></li>
                                                            <li><a href='ppc.php'><span class="mega-menu-icon"><i class="fa-solid fa-bullhorn"></i></span><span>Paid Marketing (PPC)</span></a></li>
                                                            <li><a href='seo.php'><span class="mega-menu-icon"><i class="fa-solid fa-share-nodes"></i></span><span>Social Media Marketing</span></a></li>
                                                            <li><a href='content-marketing.php'><span class="mega-menu-icon"><i class="fa-solid fa-pen-nib"></i></span><span>Content Marketing</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="mega-menu-column mega-menu-column-stack">
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Branding</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-palette"></i></span><span>Branding</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-object-group"></i></span><span>UI/UX</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-sub-divider"></div>
                                                    <div class="mega-menu-group">
                                                        <h4 class="mega-menu-heading">Hosting & IT Services</h4>
                                                        <ul class="mega-menu-list">
                                                            <li><a href='domain-hosting.php'><span class="mega-menu-icon"><i class="fa-solid fa-server"></i></span><span>Domain & Hosting</span></a></li>
                                                            <li><a href='#'><span class="mega-menu-icon"><i class="fa-solid fa-cloud"></i></span><span>IT Infrastructure</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href='portfolios.php'>
                                                <span class="menu-item">Portfolio</span>
                                                <span class="menu-item2">Portfolio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='career.php'>
                                                <span class="menu-item">Career</span>
                                                <span class="menu-item2">Career</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='contact.php'>
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
                                    <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='contact.php' title>
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






