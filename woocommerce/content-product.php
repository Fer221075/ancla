<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<div class="col-xs-6 col-sm-6 <?php echo (is_front_page()) ? 'col-md-3 ' : 'col-md-4'; ?>">
    <article <?php post_class('prod'); ?>>
        <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
        <a href="<?php the_permalink(); ?>"><h4 class="product-name"><?php the_title(); ?></h4></a>
        <?php echo the_excerpt(10); ?>
        <div class="price-offers">
            <span class="price"><?php echo $product->get_price_html(); ?></span>
        </div>
    </article>
</div>