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
<?php if ( !strpos(get_site_url(), 'panama') ): ?>
        <div <?php wc_product_cat_class( 'col-xs-6 col-md-3 bg-img', $category ); ?>>
<?php else: ?>
        <div <?php wc_product_cat_class( 'col-xs-6 col-md-4 bg-img', $category ); ?>>
<?php endif; ?>


    <?php

    $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true  );

    if ( $thumbnail_id ) {
        $image = wp_get_attachment_image_src( $thumbnail_id, array('300','700') );
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
    <a href="<?php echo get_term_link( $category, 'product_cat' ); ?>">
        <div class="category-hover">
            <h3><?php echo $category->name; ?></h3>
        </div>
    </a>

<!--    <div class="cat-info-box">-->
<!--        <h3>--><?php //echo $category->name; ?><!--</h3>-->
<!--        <p>--><?php //echo $category->category_description; ?><!--</p>-->
<!--        <a class="ancla-btn rounded translucid" href="--><?php //echo get_term_link( $category, 'product_cat' ); ?><!--">Ver más</a>-->
<!--    </div>-->

</div>
