<?php

add_action("wp_ajax_nopriv_get_products", "get_products");
add_action("wp_ajax_get_products", "get_products");

function get_products()
{

    $filters = explode('/', $_REQUEST["filters"]);

    $tax_query = array();

    foreach ($filters as $filter) {

        $filter = explode(',', $filter);

        $attribute = $filter[0];
        $value = $filter[1];

        $filter_array = array(
            'taxonomy' => 'pa_' . $attribute,
            'terms' => $value,
            'field' => 'slug',
        );

        array_push($tax_query, $filter_array);
    }

    $loop = new WP_Query(array(
        'post_type' => 'product',
        'tax_query' => $tax_query
    ));
    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
            global $product; ?>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <article <?php post_class('prod'); ?>

                >
                    <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>"><h4 class="product-name"><?php the_title(); ?></h4></a>
                    <span class="price"><?php echo wc_price($product->get_price()); ?></span>
                </article>
            </div>

        <?php endwhile;
    endif;
    wp_reset_postdata();

    die();

}
