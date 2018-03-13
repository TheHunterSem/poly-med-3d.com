<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]-->
<html class="ie ie7" <?php language_attributes(); ?>>
<!--[endif]-->
<!--[if IE 8]-->
<html class="ie ie8" <?php language_attributes(); ?>>
<!--[endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel='stylesheet' id='woocommerce-layout-css'  href='/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='/wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/polymed-3d.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/polymed-3d-responsive.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/polymed-3d.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114948742-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114948742-1');
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header id="masthead" class="site-header" role="banner">

    <div class="header-main">

        <a class="main-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>

        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">

            <div class="menu-main_navigation-wrapper">
                <?php wp_nav_menu('menu=main_navigation'); ?>
            </div>

            <div class="menu-contact_us_menu-wrapper">

                <?php wp_nav_menu('contact_us_menu'); ?>

                <div id="contact-info" class="contact">
                    <div class="phone">+1.864.328.0008</div>
                    <div class="text">
                        51 Technology Drive<br>
                        Anderson, SC 29625<br>
                        <a target="_blank" href="https://www.google.com/maps/dir//51+Technology+Dr,+Anderson,+SC+29625/@34.586052,-82.8157758,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x885866c9c7f218b9:0x539f6402bf3ba80a!2m2!1d-82.81363!2d34.586052">Get Directions</a><br>
                        <a href="mailto:sales@poly-med3d.com">sales@poly-med3d.com</a>
                    </div>
                </div>

            </div>

        </nav>

        <span id="mobile-menu-btn" class="mobile-menu-btn">
            <span class="btn-wrapper">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </span>
        </span>

    </div>

</header>
