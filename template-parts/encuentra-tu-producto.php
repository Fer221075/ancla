<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <h3>¿Sabes qué caja fuerte necesitas? Descúbrelo aquí</h3>
        </div>
    </div>
    <div class="container products-container">
        <div class="products-slick">
            <?php

            $loop = new WP_Query( array(
                'post_type' => 'product',
                'orderby' => 'rand'
            ) );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post();

                    wc_get_template_part( 'content', 'product' );

                endwhile;
            endif;
            wp_reset_postdata();

            ?>
    </div>
</section>