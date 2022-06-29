<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6377FE">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/rehability/img/icon-180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/rehability/img/icon-16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/rehability/img/icon-32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/rehability/img/icon-96.png">

    <link rel="stylesheet" href="/wp-content/themes/rehability/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>

<body <?php body_class(); ?>>


<header id="header" class="navbar">
    <div class="container d-flex flex-column">
        <div class="xl:h-28 flex items-center space-x-10 text-sm font-medium">
            <a class="flex mr-auto" href="/" title="rehability" aria-label="rehability">
                <img src="/wp-content/themes/rehability/img/logo.webp" class="navbar__logo">
            </a>
            <div class="hidden xl:block">
                <span class="text-green font-bold mr-1">Zadzwoń do nas!</span><a href="tel:+48566567568" class="text-primary">+48 566 567 568</a>
            </div>
            <a href="https://zarejestrowani.pl/p/apzdL1UGVjUgPqTNTxzJtA/" target="_blank" class="button button--hidden">Umów wizytę</a>
            <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
        </div>

        <nav class="navbar__nav-desktop">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </nav>

        <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
            <div class="container flex flex-col items-center">
                <a href="https://zarejestrowani.pl/p/apzdL1UGVjUgPqTNTxzJtA/" target="_blank" class="button mt-6">Umów wizytę</a>
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </div>
        </nav>
    </div>
</header>


<main>
