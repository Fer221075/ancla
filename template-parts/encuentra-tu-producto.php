<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <h3>Encuentra tu producto</h3>
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


<!--        <div class="col-md-3">-->
<!--            <article class="prod">-->
<!--                <a href="#"><img src="--><?php //echo get_template_directory_uri();?><!--/img/fit.jpg" alt=""></a>-->
<!--                <a href="#"><h4 class="product-name">Producto 1</h4></a>-->
<!--                <span class="price">$99.000</span>-->
<!--                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="col-md-3">-->
<!--            <article class="prod">-->
<!--                <a href="#"><img src="--><?php //echo get_template_directory_uri();?><!--/img/fit.jpg" alt=""></a>-->
<!--                <a href="#"><h4 class="product-name">Producto 1</h4></a>-->
<!--                <span class="price">$99.000</span>-->
<!--                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="col-md-3">-->
<!--            <article class="prod">-->
<!--                <a href="#"><img src="--><?php //echo get_template_directory_uri();?><!--/img/fit.jpg" alt=""></a>-->
<!--                <a href="#"><h4 class="product-name">Producto 1</h4></a>-->
<!--                <span class="price">$99.000</span>-->
<!--                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="col-md-3">-->
<!--            <article class="prod">-->
<!--                <a href="#"><img src="--><?php //echo get_template_directory_uri();?><!--/img/fit.jpg" alt=""></a>-->
<!--                <a href="#"><h4 class="product-name">Producto 1</h4></a>-->
<!--                <span class="price">$99.000</span>-->
<!--                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>-->
<!--            </article>-->
<!--        </div>-->
    </div>
</section>