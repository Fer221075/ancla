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
                <a href="<?php echo get_home_url(); ?>/servicios/"><h5>Contacto con soporte</h5></a>
            </div>
        </div>
    </section>

	<footer>
        <div class="container">
            <div class="col-xs-12 col-sm-6">
                <div class="certs col-xs-12 no-pad">
                  <div class="col-sm-12 no-pad">
                        <h4>Certificaciones</h4>
                  </div>
                  <div class="col-sm-12">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/iso_9001.png" alt="iso_9001"></li>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/iso_14001.png" alt="iso_14001"></li>
                        <li><img src="<?php echo get_template_directory_uri();?>/img/oshsas_18001.png" alt="oshsas_18001"></li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
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
        </div>
        <div class="container">
            <div class="legal">2016 Ancla, Colombia - Todos los derechos reservados</div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
