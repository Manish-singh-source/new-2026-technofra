<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $pageTitle = $pageTitle ?? 'Technofra Website';
    $metaDescription = trim($metaDescription ?? '');
    if ($metaDescription === '') {
        $metaDescription = 'Technofra is a Mumbai-based web design, app development and digital marketing company helping businesses grow online.';
    }

    // Canonical URL: set $canonicalUrl before including header.php to override,
    // or set it to false to output no canonical tag (e.g. 404 page).
    // Slugs below mirror sitemap.xml; every other page uses its own clean URL.
    $siteUrl = 'https://technofra.com';
    if (!isset($canonicalUrl)) {
        $canonicalMap = [
            'index.php'                      => '/',
            'about-us.php'                   => '/about',
            'ios-development.php'            => '/ios-app-development',
            'domain-hosting.php'             => '/domain-hosting-services',
            'shopify-development.php'        => '/shopify-website-development',
            'social-media-marketing.php'     => '/smm',
            'web-design-and-development.php'=> '/web-design',
            'web&appmaintenance.php'         => '/website-maintenance',
            'wordpress.php'                  => '/wordpress-development',
            'portfolios.php'                 => '/portfolio',
        ];
        $scriptFile = basename($_SERVER['SCRIPT_NAME'] ?? '');
        if (isset($canonicalMap[$scriptFile])) {
            $canonicalPath = $canonicalMap[$scriptFile];
        } else {
            $canonicalPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
            $canonicalPath = preg_replace('#/index(\.php)?$#i', '/', $canonicalPath);
            $canonicalPath = preg_replace('#\.php$#i', '', $canonicalPath);
            if ($canonicalPath === '' || $canonicalPath[0] !== '/') {
                $canonicalPath = '/' . $canonicalPath;
            }
        }
        $canonicalUrl = $siteUrl . $canonicalPath;
    }
    $bodyClass = $bodyClass ?? 'hero-video-page';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <?php if (!empty($baseHref)): ?>
    <base href="<?php echo htmlspecialchars($baseHref, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <?php if ($canonicalUrl !== false && $canonicalUrl !== ''): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>

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

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

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

        <?php include __DIR__ . '/navbar.php'; ?>


