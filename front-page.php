<?php

/* Template Name: Template Home */

get_header(); ?>

<section class="cover bg-img">
    <?php putRevSlider('slider-home'); ?>
</section>
<section
        style="margin: 78px auto 20px; max-width: 1000px; border: 2px #c1282c solid;padding: 50px 20px 10px;position: relative">
    <figure style="position: absolute; top: -70px; left: calc(50% - 140px)">
        <img src="https://www.ancla.la/wp-content/uploads/2019/04/imgarriba.png" alt="">
    </figure>
    <div class="stepByStep">
        <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso01.png" alt=""></div>
        <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso02.png" alt=""></div>
        <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso03.png" alt=""></div>
        <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso04.png" alt=""></div>
    </div>
</section>
<!--<section class="info-banner">
    <div class="container">
        <h3 class="banner-title"><?php //echo get_theme_mod('info_banner_home_title'); ?></h3>
        <p class="banner-text"><?php //echo get_theme_mod('info_banner_home_text'); ?></p>
    </div>
</section>-->

<?php if (get_theme_mod('show_products_banner')): ?>
    <?php get_template_part('/template-parts/encuentra-tu-producto'); ?>
<?php endif; ?>

<?php get_template_part('/template-parts/nuestros-clientes'); ?>
<div class="container" style="text-align: center">
    <img style="max-width: 100%; margin: 20px auto"
         src="<?php echo get_template_directory_uri() ?>/img/infografia-web-ancla.png" alt="">
</div>
<?php
get_footer();
?>
