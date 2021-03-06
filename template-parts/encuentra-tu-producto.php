<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <h3>¿Sabes qué caja fuerte necesitas? <a href="/juego">Descúbrelo aquí</a></h3>
        </div>
    </div>
    <div class="container products-container">

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

        <div class="go-to-store">
            <a href="<?php echo home_url('/productos/'); ?>" class="ancla-btn">Ver más productos</a>
        </div>
    </div>
</section>