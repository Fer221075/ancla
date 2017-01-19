<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/01/2017
 * Time: 09:39
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div <?php wc_product_cat_class( 'col-xs-12 bg-img', $category ); ?>>



    <?php

    $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true  );

    if ( $thumbnail_id ) {
        $image = wp_get_attachment_image_src( $thumbnail_id, array('1170','200') );
        $image = $image[0];
    } else {
        $image = wc_placeholder_img_src();
    }

    if ( $image ) {
        // Prevent esc_url from breaking spaces in urls for image embeds
        // Ref: https://core.trac.wordpress.org/ticket/23605
        $image = str_replace( ' ', '%20', $image );

        echo '<img src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '" />';
    }
    ?>

    <div class="cat-info-box">
        <h3><?php echo $category->name; ?></h3>
        <p><?php echo $category->category_description; ?></p>
        <a class="ancla-btn rounded translucid" href="<?php echo get_term_link( $category, 'product_cat' ); ?>">Ver Productos</a>
    </div>

    <?php



    /**
     * woocommerce_before_subcategory hook.
     *
     * @hooked woocommerce_template_loop_category_link_open - 10
     */
    //do_action( 'woocommerce_before_subcategory', $category );

    /**
     * woocommerce_before_subcategory_title hook.
     *
     * @hooked woocommerce_subcategory_thumbnail - 10
     */
    //do_action( 'woocommerce_before_subcategory_title', $category );

    /**
     * woocommerce_shop_loop_subcategory_title hook.
     *
     * @hooked woocommerce_template_loop_category_title - 10
     */
   // do_action( 'woocommerce_shop_loop_subcategory_title', $category );

    /**
     * woocommerce_after_subcategory_title hook.
     */
    //do_action( 'woocommerce_after_subcategory_title', $category );

    /**
     * woocommerce_after_subcategory hook.
     *
     * @hooked woocommerce_template_loop_category_link_close - 10
     */
 //   do_action( 'woocommerce_after_subcategory', $category ); ?>
</div>
