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
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/polymed-3d.css">
    <!--[if lt IE 9]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <!--[endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/polymed-3d.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header id="masthead" class="site-header" role="banner">

    <div class="header-main">

        <a class="main-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>

        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <?php wp_nav_menu('menu=main_navigation'); ?>
        </nav>

        <a class="cart-link"
           href="<?php echo wc_get_cart_url(); ?>"><i class="icon-shopping-cart"></i>
            (<?php echo sprintf(WC()->cart->get_cart_contents_count(), WC()->cart->get_cart_contents_count()); ?>)Cart</a>

    </div>

</header>
