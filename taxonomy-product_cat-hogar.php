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

<?php get_template_part('template-parts/category_banner', 'small'); ?>

<div class="container iso-cats">

<?php woocommerce_product_loop_start(); ?>

<?php
$term = get_queried_object();

$parent_id 		= empty( $term->term_id ) ? 0 : $term->term_id;

$args = array('child_of' => $parent_id);

$categories = get_terms('product_cat', $args);
foreach($categories as $category) {

    $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);

    if ($thumbnail_id) {
        $image = wp_get_attachment_image_src($thumbnail_id, array('1170', '200'));
        $image = $image[0];
    } else {
        $image = wc_placeholder_img_src();
    }

    ?>

    <div class="subcat-item">
        <a href="<?php echo get_term_link( $category->slug , 'product_cat' ) ?>">
            <img src="<?php echo $image; ?>" alt="">
            <div class="item-hover bg-img">
                <img src="<?php echo $image; ?>" alt="">
                <h4 class="item-title"><?php echo $category->name;?></h4>
            </div>
        </a>
    </div>

    <?php
}

?>

<?php woocommerce_product_loop_end(); ?>

</div>

<?php
get_footer( 'shop' ); ?>