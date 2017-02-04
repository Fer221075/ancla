<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 31/01/2017
 * Time: 16:05
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<?php
/**
 * woocommerce_before_single_product hook.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form();
    return;
}

global $post, $product, $woocommerce;
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('row'); ?>>

    <div class="col-md-6 images">

            <?php

            $gallery = $product->get_gallery_attachment_ids();

            if ( $gallery || has_post_thumbnail() ) {

                ?>
                <div class="product-main-gallery">
                    <?php

                    $image = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ) ) ?: '' ;

                    echo $image;

                    foreach ( $gallery as $attachment_id ) {

                        $props = wc_get_product_attachment_props( $attachment_id, $post );
                        echo wp_get_attachment_image( $attachment_id, array('540','540'), 0, $props );
                    }

                    ?>
                </div>

                <div class="product-thumbnails">
                    <?php

                    echo $image;

                    foreach ( $gallery as $attachment_id ) {

                        $props = wc_get_product_attachment_props( $attachment_id, $post );
                        echo wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $props );
                    }

                    ?>
                </div>
                <?php

            } else {
                echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
            }

            ?>
    </div>


    <div class="col-md-6 summary entry-summary">

        <?php
        /**
         * woocommerce_single_product_summary hook.
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         */
//        do_action( 'woocommerce_single_product_summary' );
        the_title( '<h1 itemprop="name" class="prod-title">', '</h1>' );
        ?>

        <p><?php echo $post->post_excerpt; ?></p>

        <?php $product->list_attributes(); ?>

        <div class="prices" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

            <p class="price"><?php echo $product->get_price_html(); ?></p>

            <meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
            <meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
            <link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

        </div>

        <?php
        do_action( 'woocommerce_' . $product->product_type . '_add_to_cart' );
        ?>

    </div><!-- .summary -->
    <div class="col-md-12 product-description">
        <h3>Descripción</h3>
        <?php the_content(); ?>
    </div>
    <meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php woocommerce_output_related_products(); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
