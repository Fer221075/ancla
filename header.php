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
  <div class="top-contact" style=" padding: 5px 0">
    <ul>
		<?php if ( get_theme_mod( 'contact_phone' ) ): ?>
          <li><a
            href="tel:<?php echo get_theme_mod( 'contact_phone' ) ?>">TEL: <?php echo get_theme_mod( 'contact_phone' ) ?></a>
          </li><?php endif; ?>
		<?php if ( get_theme_mod( 'contact_email' ) ): ?>
          <li><a
            href="mailto:<?php echo get_theme_mod( 'contact_email' ) ?>"><?php echo get_theme_mod( 'contact_email' ) ?></a>
          </li><?php endif; ?>
    </ul>
  </div>
  <ul class="top-links">
    <ul class="flags">
      <li><a href="/panama"><img src="<?php echo get_template_directory_uri(); ?>/svg/pa.svg" alt=""></a></li>
      <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/svg/co.svg" alt=""></a></li>
    </ul>
	  <?php if ( ! strpos( get_site_url(), 'panama' ) ): ?>
        <ul class="cartColorLink" style="background: #c1282d; color: white; padding: 5px 20px; border-radius: 0 0 0 10px;">
          <li >
			  <?php if ( is_user_logged_in() ): ?>
                <a
                  href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>"><?php esc_attr_e( 'My Account', 'woocommerce' ); ?></a>
			  <?php else: ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Login / Registro</a>
			  <?php endif; ?>
          </li>
          <li>
            <a href="javascript:;" class="open-cart">
              <svg style="position: relative;top: 3px ;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="18px" height="18px" viewBox="12.5 12.5 25 25" enable-background="new 12.5 12.5 25 25"
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
						  <?php echo wp_get_attachment_image( $thumb_id, [ '200', '200' ] ); ?>
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
		  <?php get_search_form(); ?>
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

