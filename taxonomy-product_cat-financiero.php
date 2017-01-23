<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 23/01/2017
 * Time: 11:07
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header( 'shop' ); ?>

    <div class="container" style="margin-bottom: 40px;">

        <?php woocommerce_product_loop_start(); ?>

        <?php $term = get_queried_object(); ?>

        <div class="col-md-5">
            <div class="category-image">
                <img src="<?php echo get_template_directory_uri() . '/img/3_cat_financiero.jpg'; ?>" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <?php ancla_category_actions($term); ?>
        </div>

        <?php woocommerce_product_loop_end(); ?>

    </div>

<?php get_template_part('/template-parts/encuentra-tu-producto'); ?>

<?php
get_footer( 'shop' ); ?>