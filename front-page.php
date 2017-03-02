<?php

/* Template Name: Template Home */

get_header(); ?>

<section class="cover bg-img">
    <img src="<?php echo get_template_directory_uri();?>/img/resp_bg.PNG" alt="">
    <video playsinline="" autoplay="" muted="" loop="" id="bgvid">
        <source src="<?php echo get_template_directory_uri();?>/vid/slide1_ancla_2.mp4" type="video/mp4">
    </video>
    <div class="cover-text">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-4 col-sm-6 col-sm-offset-6 col-md-5 col-md-offset-7">
                <h2 class="cover-title"><?php echo get_theme_mod('banner_title'); ?></h2>
                <p class="cover-desc"><?php echo get_theme_mod('banner_description'); ?></p>
                <div class="white-shadow"></div>
            </div>
        </div>
    </div>
</section>
<section class="info-banner">
    <div class="container">
        <h3 class="banner-title"><?php echo get_theme_mod('info_banner_home_title'); ?></h3>
        <p class="banner-text"><?php echo get_theme_mod('info_banner_home_text'); ?></p>
    </div>
</section>

<?php if ( get_theme_mod( 'show_products_banner' ) ): ?>
    <?php get_template_part('/template-parts/encuentra-tu-producto'); ?>
<?php endif; ?>

<?php get_template_part('/template-parts/nuestros-clientes'); ?>

<?php
get_footer();
?>
