<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action( 'woocommerce_before_main_content' ); ?>

<?php get_template_part( 'template-parts/category_banner', 'small' ); ?>

<?php if ( have_posts() ) : ?>

    <div class="container">
        <div class="row">
            <div class="red-section-header no-triangle">
                <div class="container">
                    <h3>¿Sabes qué caja fuerte necesitas? <a href="/juego">Descúbrelo aquí</a></h3>
                </div>
            </div>
        </div>
    </div>
    <section class="row category-svg">
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div>
                <a href="<?php site_url(); ?>/productos/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_hogar.svg" alt=""></a>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/productos/categorias/institucional/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_institucional.svg" alt=""></a>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/productos/categorias/financiero/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_financiera.svg" alt=""></a>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/productos/categorias/cash-control/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_mini_bank.svg" alt=""></a>
        </article>
    </section>
    <div class="store-actions clearfix">

        <?php
        /**
         * woocommerce_before_shop_loop hook.
         *
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action( 'woocommerce_before_shop_loop' );
        ?>

    </div>

    <div class="row">
        <?php //if (  is_shop() ): ?>
            <div class="col-xs-3 hidden-xs store-sidebar widget">
                <h2>Categorías</h2>
                <ul>
                    <li><a href="<?php site_url();?>/productos/categorias/hogar/cajas-fuertes-contra-incendio/">Cajas fuertes contra incendio</a></li>
                    <li><a href="<?php site_url();?>/productos/categorias/hogar/cofres-hoteleros/">Cofre hotelero</a></li>
                    <li><a href="<?php site_url();?>/productos/categorias/hogar/cofres-de-seguridad/">Cofre de seguridad</a></li>
                    <li><a href="<?php site_url();?>/productos/categorias/hogar/cofres-de-caja-menor/">Cofre de caja menor</a></li>
                    <li><a href="<?php site_url();?>/productos/categorias/hogar/ordenador-de-llaves/">Ordenador de llaves</a></li>
                </ul>
                <?php //dynamic_sidebar( 'store-widgets' ); ?>
            </div>
        <?php //endif; ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php woocommerce_product_subcategories(); ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php wc_get_template_part( 'content', 'product' ); ?>

        <?php endwhile; // end of the loop. ?>

        <?php woocommerce_product_loop_end(); ?>

    </div>

    <?php
    /**
     * woocommerce_after_shop_loop hook.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );
    ?>

<?php elseif ( ! woocommerce_product_subcategories( [
    'before' => woocommerce_product_loop_start( false ),
    'after'  => woocommerce_product_loop_end( false ),
] ) ) : ?>

    <?php wc_get_template( 'loop/no-products-found.php' ); ?>

<?php endif; ?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php get_footer( 'shop' ); ?>
