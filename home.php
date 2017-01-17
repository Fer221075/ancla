<?php
get_header(); ?>

<section class="cover">
    <video playsinline="" autoplay="" muted="" loop="" id="bgvid">
        <source src="<?php echo get_template_directory_uri();?>/vid/slide1_ancla_2.mp4" type="video/mp4">
    </video>
    <div class="cover-text">
        <div class="container">
            <div class="col-md-6 col-md-offset-6">
                <h2 class="cover-title"><?php echo get_theme_mod('banner_title'); ?></h2>
                <p class="cover-desc"><?php echo get_theme_mod('banner_description'); ?></p>
                <div class="white-shadow"></div>
            </div>
        </div>
    </div>
</section>
<section class="info-banner">
    <div class="container">
        <h3 class="banner-title"><?php echo get_theme_mod('info_banner_home_title'); ?></h3>
        <p class="banner-text"><?php echo get_theme_mod('info_banner_home_text'); ?></p>
    </div>
</section>
<section class="home-products">
    <div class="home-products-header">
        <div class="container">
            <h3>Encuentra tu producto</h3>
        </div>
    </div>
    <div class="container products-container">
        <div class="col-md-3">
            <article class="prod">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/fit.jpg" alt=""></a>
                <a href="#"><h4 class="product-name">Producto 1</h4></a>
                <span class="price">$99.000</span>
                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </article>
        </div>
        <div class="col-md-3">
            <article class="prod">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/fit.jpg" alt=""></a>
                <a href="#"><h4 class="product-name">Producto 1</h4></a>
                <span class="price">$99.000</span>
                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </article>
        </div>
        <div class="col-md-3">
            <article class="prod">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/fit.jpg" alt=""></a>
                <a href="#"><h4 class="product-name">Producto 1</h4></a>
                <span class="price">$99.000</span>
                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </article>
        </div>
        <div class="col-md-3">
            <article class="prod">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/fit.jpg" alt=""></a>
                <a href="#"><h4 class="product-name">Producto 1</h4></a>
                <span class="price">$99.000</span>
                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </article>
        </div>
        <div class="col-md-3">
            <article class="prod">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/fit.jpg" alt=""></a>
                <a href="#"><h4 class="product-name">Producto 1</h4></a>
                <span class="price">$99.000</span>
                <a href="#" class="add-to-cart">Agregar al carrito <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </article>
        </div>
    </div>
</section>



<?php
get_footer();
?>
