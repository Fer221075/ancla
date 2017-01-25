<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ancla
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


        <div id="top" class="container top-bar">
            <ul class="top-links">
                <ul class="flags">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/svg/pa.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/svg/co.svg" alt=""></a></li>
                </ul>
                <li>
                    <a href="#">Login / Registro</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <header>
            <div class="container clearfix">
                <div class="row">
                <div class="site-branding">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo_ancla_blanco.png" alt="">
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    <?php get_search_form(); ?>
                </nav>
                </div>
            </div>
        </header><!-- #masthead -->
        <div class="loader-container">
            <div class="pre-loader"></div>
        </div>

	<section id="content" class="site-content">

