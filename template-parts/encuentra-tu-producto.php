<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <h3>SABES QUE CAJA FUERTE NECESITAS, DESCUBRELO AQUí</h3>
        </div>
    </div>
    <div class="container products-container">

        <?php

        $loop = new WP_Query( array(
            'post_type' => 'product',
            'posts_per_page' => 4,
            'orderby' => 'rand'
        ) );
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();

                wc_get_template_part( 'content', 'product' );

            endwhile;
        endif;
        wp_reset_postdata();

        ?>
        <div class="clear product-home-link">
            <a class="btn ccf-submit-button" href="/productos/categorias/hogar/">Ver más productos</a>
        </div>
    </div>
</section>