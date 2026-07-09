<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aiero-tech-template.netlify.app/index4 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2026 12:43:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <?php
    $pageTitle = $pageTitle ?? 'Technofra Website';
    $bodyClass = $bodyClass ?? 'hero-video-page';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

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
    <link rel="stylesheet" href="assets/css/style2.css">

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

<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">
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

        <?php include __DIR__ . '/navbar.php'; ?>
