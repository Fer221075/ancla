<?php
get_header(); ?>

<section class="slide-gallery full-w">
    <div>
        <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/slide_gallery1.jpg" alt="soporte">
    </div>
    <div>
        <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/slide_gallery2.jpg" alt="soporte">
    </div>
    <div>
        <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/slide_gallery3.jpg" alt="soporte">
    </div>
    <div>
        <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/slide_gallery4.jpg" alt="soporte">
    </div>
    <div>
        <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/slide_gallery5.jpg" alt="soporte">
    </div>
</section>

<div class="red-section-header">
    <div class="container">
         <h3>Nosotros<span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_contacto.png"></span></h3>
    </div>
</div>

<section class="container">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>HOME</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</section>



<?php
get_footer();
?>

<script>
    $('.slide-gallery').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
</script>
