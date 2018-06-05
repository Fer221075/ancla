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
    <div class="support-banner"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/soporte_widget_banner.jpg');">
        <div class="container">
            <a href="<?php echo get_home_url(); ?>/contacto/"><h5>¿Necesitas ayuda? contactános</h5></a>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="col-xs-12 col-sm-6">   <!-- codigo certificaciones
                <div class="certs col-xs-12 no-pad">
                  <div class="col-sm-12 no-pad">
                        <h4>Certificaciones</h4>
                 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/LOGOS-completos.png" alt="iso_9001" width="100%" height="100%"/>
                            
                      

                    </ul>
                  </div>
                </div>
            </div>  
            <div class="col-xs-12 col-sm-6">
                <div class="newsletter">
                    <div class="no-pad"> 
                        <h4>Boletín</h4>
                    </div>
                    <form action="?na=s" method="post" class="clearfix">
                        <input type="text" name="ne" placeholder="E-mail" required>
                        <input type="submit" value="Suscribirme">
                    </form>
                </div>
                <div class="social">
                    <span>Síguenos:</span>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>-->
            <div class="container footer-widgets">
                <?php dynamic_sidebar('footer-widgets'); ?>
            </div>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <h3 style="margin-bottom: 20px">Certificaciones de calidad</h3>
                    <img style="max-width: 100%" src="<?php echo get_template_directory_uri();?>/img/certificaciones.png" alt="">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3 style="margin-bottom: 38px">Métodos de pago</h3>
                    <img style="max-width: 100%" src="<?php echo get_template_directory_uri();?>/img/pagos.png" alt="">
                </div>
            </div>
            <div class="container" style="margin-top: 30px;">
                <div class="col-xs-12 col-sm-6">
                    <div class="legal"><?php echo get_theme_mod('legal_text') ?></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-contact" style="text-align: left">
                        <ul>
                            <?php if (get_theme_mod('contact_phone')): ?>
                                <li><a
                                        href="tel:<?php echo get_theme_mod('contact_phone') ?>">TEL: <?php echo get_theme_mod('contact_phone') ?></a>
                                </li><?php endif; ?>
                            <?php if (get_theme_mod('contact_email')): ?>
                                <li><a
                                        href="mailto:<?php echo get_theme_mod('contact_email') ?>"><?php echo get_theme_mod('contact_email') ?></a>
                                </li><?php endif; ?>
                            <?php if (get_theme_mod('address')): ?>
                                <li>
                                <a href="<?php echo home_url('/contacto/'); ?>"><?php echo get_theme_mod('address'); ?></a>
                                </li><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
