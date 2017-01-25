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

<section class="container no-pad">    
  <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav col-md-12">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li class="col-md-4 text-center">
                        <a class="page-scroll" href="#mision">Misión</a>
                    </li>
                    <li class="col-md-4 text-center">
                        <a class="page-scroll" href="#vision">Visión</a>
                    </li>
                    <li class="col-md-4 text-center">
                        <a class="page-scroll" href="#historia">Historia</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</section>

<section id="mision" class="about-section container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title">
                <h3>Misión</h1>
            </div>
            <div class="text">
              <p>Cajas Fuertes Ancla S.A. fabrica y comercializa equipos; proporciona asesoría y soluciones en seguridad física y electrónica para el sector financiero, residencial y empresarial con responsabilidad social y sostenibilidad.</p>
            </div>
        </div>
    </div>
</section>
<section id="vision" class="about-section container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title">
                <h3>Visión</h1>
            </div>
            <div class="text">
              <p>Buscamos ser competitivos en el mercado de la seguridad física y electrónica en el apoyo y aprendizaje continuo de nuestro personal; la tecnología, el cumplimiento y apertura de nuevos mercados son aliados seguros para nuestros clientes.</p>
            </div>
        </div>
    </div>
</section>
<section id="historia" class="about-section container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title">
                <h3>Historia</h1>
            </div>
            <div class="text">
              <p>Cajas Fuertes Ancla S.A. inicia labores el 8 de Octubre de 1964, en la ciudad de Medellín bajo la razón social JAVI SAFE LTDA. Posteriormente la empresa se traslada a la ciudad de Bogotá para convertirse en 1995 en la sociedad Cajas Fuertes Ancla S.A. y después de un proceso de transformación y cobertura del mercado, se estructura en una completa planta de producción, para abastecer el mercado colombiano y atender la demanda de otros países.</p>
<p>Es así como en la actualidad contamos con un personal idóneo y una infraestructura técnica, administrativa y comercial que nos acredita como empresa líder en el mercado de la seguridad, con el aval de una amplia red de clientes a nivel nacional e Internacional.</p>
            </div>
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
