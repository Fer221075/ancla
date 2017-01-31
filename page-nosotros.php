<?php
get_header(); ?>

<section class="cover-slides">
    <div class="cover slide bg-img">
        <img src="<?php echo get_template_directory_uri();?>/img/slide_gallery1.jpg" alt="soporte">
    </div>
    <div class="cover slide bg-img">
        <img src="<?php echo get_template_directory_uri();?>/img/slide_gallery2.jpg" alt="soporte">
    </div>
    <div class="cover slide bg-img">
        <img src="<?php echo get_template_directory_uri();?>/img/slide_gallery3.jpg" alt="soporte">
    </div>
    <div class="cover slide bg-img">
        <img src="<?php echo get_template_directory_uri();?>/img/slide_gallery4.jpg" alt="soporte">
    </div>
    <div class="cover slide bg-img"><div>
        <img src="<?php echo get_template_directory_uri();?>/img/slide_gallery5.jpg" alt="soporte">
    </div>
</section>

<div class="red-section-header no-triangle">
    <div class="container">
         <h3>Nosotros<span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_contacto.png"></span></h3>
    </div>
</div>

<section class="container">
    <nav class="row tab-anchors">
        <ul class="clearfix">
            <li>
                <a href="#mision" class="tab-anchor smooth-anchor current">Misión</a>
            </li>
            <li>
                <a href="#vision" class="tab-anchor smooth-anchor">Visión</a>
            </li>
            <li>
                <a href="#historia" class="tab-anchor smooth-anchor">Historia</a>
            </li>
            <li>
                <a href="#respaldo" class="tab-anchor smooth-anchor">Nuestro respaldo</a>
            </li>
        </ul>
    </nav>

    <section id="mision" class="row us-section">
            <h3>Misión</h3>
            <p>Cajas Fuertes Ancla S.A. fabrica y comercializa equipos; proporciona asesoría y soluciones en seguridad física y electrónica para el sector financiero, residencial y empresarial con responsabilidad social y sostenibilidad.</p>
    </section>
    <section id="vision" class="row us-section">
        <h3>Visión</h3>
        <p>Buscamos ser competitivos en el mercado de la seguridad física y electrónica en el apoyo y aprendizaje continuo de nuestro personal; la tecnología, el cumplimiento y apertura de nuevos mercados son aliados seguros para nuestros clientes.</p>
    </section>
    <section id="historia" class="row us-section">
        <h3>Historia</h3>
        <p>Cajas Fuertes Ancla S.A. inicia labores el 8 de Octubre de 1964, en la ciudad de Medellín bajo la razón social JAVI SAFE LTDA. Posteriormente la empresa se traslada a la ciudad de Bogotá para convertirse en 1995 en la sociedad Cajas Fuertes Ancla S.A. y después de un proceso de transformación y cobertura del mercado, se estructura en una completa planta de producción, para abastecer el mercado colombiano y atender la demanda de otros países.</p>
        <p>Es así como en la actualidad contamos con un personal idóneo y una infraestructura técnica, administrativa y comercial que nos acredita como empresa líder en el mercado de la seguridad, con el aval de una amplia red de clientes a nivel nacional e Internacional.</p>
    </section>
    <section id="respaldo" class="row us-section">
        <h3>Nuestro respaldo</h3>
        <p>Contamos con diferentes certificaciones de calidad que avalan nuestros procesos y productos.</p>
        <ul>
            <li><img src="<?php echo get_template_directory_uri();?>/img/iso_9001.png" alt="iso_9001"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/iso_14001.png" alt="iso_14001"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/oshsas_18001.png" alt="oshsas_18001"></li>
        </ul>
    </section>

</section>





<?php
get_footer();
?>