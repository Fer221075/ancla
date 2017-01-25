<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ancla
 */

?>


    <div class="go-up fixed">
        <a class="smooth-anchor" href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

	</section><!-- #content -->

	<footer>
        <!-- TODO: banner soporte técnico -->
        <div class="container">
            <div class="col-md-6">
                <div class="certs">
                    <h4>Certificaciones</h4>
                    <!-- TODO: logos certificaciones -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter">
                    <form action="" class="clearfix">
                        <input type="text" placeholder="E-mail">
                        <input type="submit" value="Suscribirme">
                    </form>
                </div>
            </div>
        </div>
        <div class="container footer-widgets">
            <section class="widget">
                <h2 class="widget-title">Productos</h2>
                <ul>
                    <li><a href="#">Hogar</a></li>
                    <li><a href="#">Institucional</a></li>
                    <li><a href="#">Comercial</a></li>
                </ul>
            </section>
            <section class="widget">
                <h2 class="widget-title">Servicios</h2>
                <ul>
                    <li><a href="#">Soporte técnico</a></li>
                </ul>
            </section>
            <section class="widget">
                <h2 class="widget-title">Nosotros</h2>
                <ul>
                    <li><a href="#">Filosofía</a></li>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Puntos de venta</a></li>
                </ul>
            </section>
            <section class="widget">
                <h2 class="widget-title">Contáctanos</h2>
                <ul>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Encuéntranos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </section>
        </div>
        <div class="container">
            <div class="legal">2016 Ancla, Colombia - Todos los derechos reservados</div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
