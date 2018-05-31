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
		  <?php dynamic_sidebar( 'footer-widgets' ); ?>
      </div>
      <div class="container pay" style="display: flex; justify-content: space-between;">
        <h2 style="font-size: 24px;color: #6c6c6c;display: contents;">Métodos de pago</h2>
        <ul style="display: flex; list-style: none">
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/tarjeta-codensa-bw.png?v=636451490758400000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logo-mercadopago-bw.png?v=636451490748230000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logo-dinersclub-bw.png?v=636451490738900000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logo-davivienda-bw.png?v=636451490731130000"></li>
          <li class="lilipinkFooterLogos__logosList__item">
            <img src="https://lilipink.vteximg.com.br/arquivos/logoVisa.jpg?v=636327872603600000">
          </li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logoAmerican.jpg?v=636327872543470000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logoMaster.jpg?v=636327872583470000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logoBaloto.jpg?v=636327872553330000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img
              src="https://lilipink.vteximg.com.br//arquivos/logoEfecty.jpg?v=636327872563700000"></li>
          <li class="lilipinkFooterLogos__logosList__item"><img src="https://lilipink.vteximg.com.br//arquivos/logoPse.jpg?v=636327872593300000">
          </li>
        </ul>
      </div>
      <div class="container">
        <div class="col-xs-12 col-sm-6">
          <div class="legal"><?php echo get_theme_mod( 'legal_text' ) ?></div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="footer-contact">
            <ul>
				<?php if ( get_theme_mod( 'contact_phone' ) ): ?>
                  <li><a
                    href="tel:<?php echo get_theme_mod( 'contact_phone' ) ?>">TEL: <?php echo get_theme_mod( 'contact_phone' ) ?></a>
                  </li><?php endif; ?>
				<?php if ( get_theme_mod( 'contact_email' ) ): ?>
                  <li><a
                    href="mailto:<?php echo get_theme_mod( 'contact_email' ) ?>"><?php echo get_theme_mod( 'contact_email' ) ?></a>
                  </li><?php endif; ?>
				<?php if ( get_theme_mod( 'address' ) ): ?>
                  <li><a href="<?php echo home_url( '/contacto/' ); ?>"><?php echo get_theme_mod( 'address' ); ?></a>
                  </li><?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
