<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ancla
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-94124945-1', 'auto');
    ga('send', 'pageview');

  </script>

</head>

<body <?php body_class(); ?>>
<div id="top" class="container top-bar clearfix" style="padding: 0 !important;">
  <div class="top-contact" style=" ">
    <ul>
		<?php if ( get_theme_mod( 'contact_phone' ) ): ?>
          <li><a
            href="tel:<?php echo get_theme_mod( 'contact_phone' ) ?>">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="50px" height="25px" viewBox="0 0 50 25" enable-background="new 0 0 50 25" xml:space="preserve">
<g>
  <g>
    <g>
      <path fill="#c1282d" d="M36.967,19.773l-3.869-3.87c-0.771-0.768-2.048-0.745-2.846,0.054l-1.949,1.949
				c-0.123-0.068-0.251-0.139-0.385-0.215c-1.231-0.682-2.916-1.616-4.688-3.391c-1.779-1.778-2.715-3.465-3.398-4.697
				c-0.072-0.13-0.142-0.256-0.21-0.376l1.309-1.306l0.643-0.645c0.799-0.799,0.821-2.075,0.052-2.845l-3.869-3.871
				c-0.77-0.768-2.046-0.745-2.846,0.054l-1.09,1.097l0.03,0.029c-0.366,0.467-0.672,1.005-0.898,1.585
				c-0.21,0.552-0.341,1.08-0.4,1.608c-0.511,4.236,1.425,8.106,6.678,13.359c7.262,7.262,13.113,6.714,13.366,6.687
				c0.55-0.066,1.076-0.197,1.612-0.405c0.575-0.225,1.112-0.53,1.579-0.895l0.024,0.021l1.104-1.082
				C37.712,21.821,37.735,20.545,36.967,19.773z"/>
    </g>
  </g>
</g>
</svg>
            TEL: <?php echo get_theme_mod( 'contact_phone' ) ?></a>
          </li><?php endif; ?>
		<?php if ( get_theme_mod( 'contact_email' ) ): ?>
          <li><a
            href="mailto:<?php echo get_theme_mod( 'contact_email' ) ?>">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="50px" height="25px" viewBox="0 0 50 25" enable-background="new 0 0 50 25" xml:space="preserve">
<g>
  <polygon fill="#c1282d" points="25,15.949 6.836,0 43.164,0 	"/>
  <polygon fill="#c1282d" points="17.765,12.494 5.035,23.674 5.035,1.316 	"/>
  <polygon fill="#c1282d" points="19.414,13.943 25,18.848 30.585,13.943 43.175,25 6.825,25 	"/>
  <polygon fill="#c1282d" points="32.235,12.494 44.965,1.316 44.965,23.674 	"/>
</g>
</svg>
                <?php echo get_theme_mod( 'contact_email' ) ?></a>
          </li><?php endif; ?>
    </ul>
  </div>
  <ul class="top-links">
    <ul class="flags">
      <li><a href="/panama"><img src="<?php echo get_template_directory_uri(); ?>/svg/pa.svg" alt=""></a></li>
      <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/svg/co.svg" alt=""></a></li>
    </ul>
	  <?php if ( ! strpos( get_site_url(), 'panama' ) ): ?>
        <ul class="cartColorLink">
          <li >
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="50px" height="25px" viewBox="0 0 50 25" enable-background="new 0 0 50 25" xml:space="preserve">
<g>
  <path fill="#FFFFFF" d="M25,12.78c3.53,0,6.391-2.861,6.391-6.39C31.391,2.861,28.529,0,25,0c-3.528,0-6.39,2.861-6.39,6.391
		C18.61,9.919,21.471,12.78,25,12.78z M25,3.195c1.766,0,3.196,1.431,3.196,3.195S26.764,9.585,25,9.585
		c-1.764,0-3.194-1.43-3.194-3.194S23.236,3.195,25,3.195z"/>
  <path fill="#FFFFFF" d="M27.32,13.816c-0.027,0.001-0.055,0.001-0.084,0.002h-4.472c-4.807-0.133-8.812,3.655-8.944,8.462
		c-0.001,0.028-0.001,0.057-0.002,0.084v1.278c0,0.879,0.879,1.358,1.758,1.358h18.85c0.877,0,1.756-0.479,1.756-1.358v-1.278
		C36.096,17.558,32.129,13.73,27.32,13.816z M17.172,21.806c0.16-2.396,2.636-4.792,5.591-4.792h4.473
		c2.955,0,5.432,2.396,5.592,4.792H17.172z"/>
</g>
</svg>
			  <?php if ( is_user_logged_in() ): ?>
                <a
                  href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>"><?php esc_attr_e( 'My Account', 'woocommerce' ); ?></a>
			  <?php else: ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Login / Registro</a>
			  <?php endif; ?>
          </li>
          <li>

          </li>
        </ul>
	  <?php endif; ?>
  </ul>
</div>
<header>
  <div class="container clearfix">
    <div class="row">
      <div class="site-branding">
		  <?php if ( get_theme_mod( 'ancla_logo' ) ) : ?>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
               title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
              <img src='<?php echo esc_url( get_theme_mod( 'ancla_logo' ) ); ?>'
                   alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>
		  <?php else : ?>
            <hgroup>
              <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                                        title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                                        rel='home'><?php bloginfo( 'name' ); ?></a></h1>

            </hgroup>
		  <?php endif; ?>
      </div>
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <div class="menu-container">
          <a href="#" class="close-menu">
            <i class="fa fa-times"></i>
          </a>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<?php
			$menu_name = 'primary';
			$locations = get_nav_menu_locations();
			if ( ! empty( $locations ) ):
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

			$menuitems = wp_get_nav_menu_items( $menu->term_id, [ 'order' => 'DESC' ] );
			?>
          <ul id="primary-menu" class="menu">
			  <?php
			  $count         = 0;
			  $submenu       = false;

			  if ( $menuitems ):

				  foreach ( $menuitems as $item ):
					  $link = $item->url;
					  $title = $item->title;
					  // item does not have a parent so menu_item_parent equals 0 (false)
					  if ( ! $item->menu_item_parent ):
						  // save this id for later comparison with sub-menu items
						  $parent_id = $item->ID;
						  ?>
                        <li id="menu-item-<?php echo $item->ID; ?>" class="">
                        <a href="<?php echo $link; ?>">
							<?php echo $title; ?>
                        </a>
					  <?php endif; ?>
					  <?php if ( $parent_id == $item->menu_item_parent ): ?>
					  <?php if ( ! $submenu ): $submenu = true; ?>


                      <ul class="sub-menu <?php if ( $item->object == 'product_cat' ): ?>submenu-grid<?php endif; ?>">

					  <?php endif; ?>
					  <?php if ( $item->object == 'product_cat' ):
						  $meta = get_term_meta( $item->object_id );
						  $thumb_id = $meta['thumbnail_id'][0];
						  ?>
                      <li class="bg-img submenu-item">
						  <?php //echo wp_get_attachment_image( $thumb_id, [ '200', '200' ] ); ?>
                        <a href="<?php echo $item->url; ?>">
                          <div class="menu-txt">
                            <span class="title"><?php echo $item->title; ?></span>
                          </div>
                        </a>
                      </li>
					  <?php else: ?>
                      <li class="item">
                        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                      </li>
					  <?php endif; ?>
					  <?php if ( isset( $menuitems[ $count + 1 ] ) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                      </ul>
						  <?php $submenu = false; endif; ?>
				  <?php endif; ?>
					  <?php if ( isset( $menuitems[ $count + 1 ] ) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                    </li>
					  <?php $submenu = false; endif; ?>
					  <?php $count ++; endforeach; endif;
			  endif; ?>

        </div>
        <div>
          <a href="javascript:;" class="open-cart">
            <svg style="position: relative;top: 3px ;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="32px" height="32px" viewBox="12.5 12.5 25 25" enable-background="new 12.5 12.5 25 25"
                 xml:space="preserve">
<g>
  <path fill="#ffffff" d="M37.354,17.722c-0.143-0.204-0.372-0.331-0.623-0.342l-15.506-0.668c-0.445-0.019-0.818,0.324-0.836,0.768
		c-0.02,0.442,0.324,0.816,0.766,0.835l14.457,0.623l-2.842,8.87H20.12l-2.285-12.444c-0.05-0.273-0.238-0.5-0.496-0.602
		l-3.743-1.47c-0.413-0.162-0.878,0.041-1.041,0.454c-0.162,0.411,0.041,0.877,0.454,1.039l3.328,1.308l2.326,12.663
		c0.069,0.38,0.402,0.656,0.789,0.656h0.386l-0.881,2.449c-0.074,0.204-0.042,0.432,0.082,0.609c0.126,0.178,0.33,0.284,0.545,0.284
		h0.619c-0.383,0.428-0.619,0.987-0.619,1.604c0,1.328,1.081,2.406,2.407,2.406c1.327,0,2.407-1.078,2.407-2.406
		c0-0.616-0.236-1.177-0.619-1.604h5.245c-0.381,0.428-0.617,0.987-0.617,1.604c0,1.328,1.079,2.406,2.406,2.406
		s2.406-1.078,2.406-2.406c0-0.616-0.234-1.177-0.617-1.604h0.752c0.37,0,0.668-0.3,0.668-0.668c0-0.369-0.298-0.668-0.668-0.668
		H20.537l0.721-2.006h12.097c0.349,0,0.657-0.224,0.764-0.557l3.344-10.427C37.538,18.188,37.498,17.929,37.354,17.722z
		 M21.993,35.428c-0.591,0-1.069-0.479-1.069-1.07c0-0.59,0.479-1.069,1.069-1.069c0.589,0,1.069,0.479,1.069,1.069
		C23.062,34.948,22.582,35.428,21.993,35.428z M30.815,35.428c-0.589,0-1.069-0.479-1.069-1.07c0-0.59,0.48-1.069,1.069-1.069
		s1.069,0.479,1.069,1.069C31.885,34.948,31.404,35.428,30.815,35.428z"/>
</g>
</svg>


          </a>
	        <?php get_template_part( 'template-parts/floating-cart' ); ?>
        </div>
		  <?php //get_search_form(); ?>
        <a href="#" class="open-menu">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
    </div>
  </div>
</header><!-- #masthead -->
<div class="loader-container">
  <!--            <div class="pre-loader"></div>-->
  <div class="ancla-loader"
       style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/loader_bg.png');">
    <div class="spin">
      <img src="<?php echo get_template_directory_uri(); ?>/img/loader_content.png" alt="" data-pin="nopin">
    </div>
  </div>
</div>

<section id="content" class="site-content">

