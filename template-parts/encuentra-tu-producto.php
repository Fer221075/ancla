<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <a href="<?php echo home_url('/juego/'); ?>" target="_blank"><h3>¿Sabes que caja fuerte necesitas?, descubrelo aquí</h3></a>
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