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

    <section>
        <div class="support-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/img/soporte_widget_banner.jpg');">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>/soporte/"><h5>Contacto con soporte técnico</h5></a>
            </div>
        </div>
    </section>

	<footer>
        <div class="container">
            <div class="col-md-6">
                <div class="certs col-md-12 no-pad">
                  <div class="col-md-4 no-pad">
                        <h4>Certificaciones</h4>
                  </div>
                  <div class="col-md-6">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/iso_9001.png" alt="iso_9001"></li>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/iso_14001.png" alt="iso_14001"></li>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/oshsas_18001.png" alt="oshsas_18001"></li>
                    </ul>
                  </div>
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
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
<!--            <section class="widget">-->
<!--                <h2 class="widget-title">Productos</h2>-->
<!--                <ul>-->
<!--                    <li><a href="#">Hogar</a></li>-->
<!--                    <li><a href="#">Institucional</a></li>-->
<!--                    <li><a href="#">Comercial</a></li>-->
<!--                </ul>-->
<!--            </section>-->
<!--            <section class="widget">-->
<!--                <h2 class="widget-title">Servicios</h2>-->
<!--                <ul>-->
<!--                    <li><a href="#">Soporte técnico</a></li>-->
<!--                </ul>-->
<!--            </section>-->
<!--            <section class="widget">-->
<!--                <h2 class="widget-title">Nosotros</h2>-->
<!--                <ul>-->
<!--                    <li><a href="#">Filosofía</a></li>-->
<!--                    <li><a href="#">Historia</a></li>-->
<!--                    <li><a href="#">Puntos de venta</a></li>-->
<!--                </ul>-->
<!--            </section>-->
<!--            <section class="widget">-->
<!--                <h2 class="widget-title">Contáctanos</h2>-->
<!--                <ul>-->
<!--                    <li><a href="#">Preguntas frecuentes</a></li>-->
<!--                    <li><a href="#">Encuéntranos</a></li>-->
<!--                    <li><a href="#">Contacto</a></li>-->
<!--                </ul>-->
<!--            </section>-->
        </div>
        <div class="container">
            <div class="legal">2016 Ancla, Colombia - Todos los derechos reservados</div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
