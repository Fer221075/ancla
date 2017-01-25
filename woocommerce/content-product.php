<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<div class="col-md-3">
    <article <?php post_class('prod'); ?>>
        <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
        <a href="<?php the_permalink(); ?>"><h4 class="product-name"><?php the_title(); ?></h4></a>
        <span class="price">$<?php echo $product->get_price(); ?></span>
        <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
    </article>
</div>