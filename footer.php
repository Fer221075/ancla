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
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/img/iso_9001.png" alt="iso_9001">
                            <span>CO-SA-CER482680</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/img/iso_14001.png" alt="iso_14001">
                            <span>CO-OS-CER356378</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/img/oshsas_18001.png" alt="oshsas_18001">
                            <span>CO-SC-CER356564</span>
                        </li>
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
            <div class="col-xs-12 col-sm-6">
                <div class="legal">2016 Ancla, Colombia - Todos los derechos reservados</div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="footer-contact">
                    <ul>
                        <li><a href="tel:+5713116211">TEL: (+571) 3116211</a></li>
                        <li><a href="mailto:info@ancla.la">info@ancla.la</a></li>
                        <li><a href="/contacto/">Carrera 68h # 73a - 29, Bogotá, Colombia.</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
