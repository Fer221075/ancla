<?php

/* Template Name: Template Home */

get_header(); ?>

<section class="cover bg-img">
<?php putRevSlider( 'slider-home' ); ?>
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
