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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>


    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-KMBCZKC');



    </script>
    <!-- End Google Tag Manager -->

    <style>
        @media (max-width: 600px) {
            #topbar {
                display: none;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMBCZKC"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="topbar" style="background: #c1282d; padding: 10px 0;">
    <div class="topbar-content">
        <div>
            aprovecha nuestro
            <img style=" display: inline;max-width: 150px;"
                 src="https://www.ancla.la/wp-content/uploads/2019/04/logo-abril-cenefa-header.png" alt="">
        </div>
        <div>
            <a style="border-radius:20px; border: 1px solid;color: white !important;    padding: 8px 50px;"
               href="https://www.ancla.la/productos/hogar/cofre-camion-puerta-doble-mecanico/">¡Entra YA!</a>
        </div>
    </div>
</div>
<div id="top" class="container top-bar clearfix" style="padding: 0 !important;">
    <div class="top-contact" style="max-width: 55%">
        <ul>
            <?php if (get_theme_mod('contact_phone')): ?>
                <li class="hiddenLi"><a
                        href="tel:<?php echo get_theme_mod('contact_phone') ?>">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="50px" height="25px" viewBox="0 0 50 25" enable-background="new 0 0 50 25"
                         xml:space="preserve">
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
                    TEL: <?php echo get_theme_mod('contact_phone') ?></a>
                </li><?php endif; ?>
            <?php if (get_theme_mod('contact_email')): ?>
                <li class="hiddenLi"><a style="text-transform: lowercase;font-size: 16px"
                                        href="mailto:<?php echo get_theme_mod('contact_email') ?>">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="50px" height="25px" viewBox="0 0 50 25" enable-background="new 0 0 50 25"
                         xml:space="preserve">
<g>
    <polygon fill="#c1282d" points="25,15.949 6.836,0 43.164,0 	"/>
    <polygon fill="#c1282d" points="17.765,12.494 5.035,23.674 5.035,1.316 	"/>
    <polygon fill="#c1282d" points="19.414,13.943 25,18.848 30.585,13.943 43.175,25 6.825,25 	"/>
    <polygon fill="#c1282d" points="32.235,12.494 44.965,1.316 44.965,23.674 	"/>
</g>
</svg>
                    <?php echo get_theme_mod('contact_email') ?></a>
                </li><?php endif; ?>
            <li><a target="_blank"
                   href="https://api.whatsapp.com/send?phone=573123776742&text=Estoy%20interesado%20en%20"
                   style="text-transform: lowercase; font-size: 16px;">
                    <svg style="position: relative;left: -25px;" version="1.1" id="Capa_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="50px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 50 25"
                         xml:space="preserve">
<g id="XMLID_468_">
    <path id="XMLID_469_" fill="#A11E27" d="M30.999,14.365c-0.049-0.023-1.871-0.921-2.195-1.037
		c-0.132-0.048-0.273-0.094-0.425-0.094c-0.246,0-0.452,0.122-0.613,0.363c-0.183,0.271-0.733,0.915-0.903,1.107
		c-0.022,0.025-0.053,0.056-0.071,0.056c-0.016,0-0.298-0.116-0.384-0.153c-1.955-0.85-3.439-2.892-3.643-3.236
		c-0.029-0.05-0.03-0.072-0.03-0.072c0.007-0.026,0.073-0.092,0.107-0.126c0.099-0.098,0.207-0.228,0.311-0.353
		c0.049-0.059,0.099-0.119,0.147-0.175c0.151-0.175,0.218-0.312,0.296-0.47l0.041-0.082c0.19-0.378,0.027-0.697-0.025-0.8
		c-0.043-0.086-0.813-1.943-0.895-2.138c-0.197-0.471-0.457-0.69-0.818-0.69c-0.034,0,0,0-0.141,0.006
		c-0.171,0.007-1.104,0.13-1.516,0.39c-0.437,0.275-1.177,1.154-1.177,2.699c0,1.39,0.882,2.703,1.261,3.202
		c0.009,0.013,0.027,0.038,0.052,0.075c1.451,2.118,3.259,3.688,5.093,4.421c1.765,0.705,2.601,0.786,3.076,0.786l0,0
		c0.199,0,0.359-0.016,0.5-0.029l0.09-0.009c0.609-0.054,1.949-0.748,2.254-1.595c0.24-0.667,0.304-1.396,0.145-1.661
		C31.427,14.57,31.237,14.479,30.999,14.365z"/>
    <path id="XMLID_470_" fill="#A11E27" d="M25.222,0c-6.771,0-12.279,5.467-12.279,12.187c0,2.174,0.582,4.302,1.684,6.163
		l-2.109,6.222c-0.04,0.116-0.01,0.244,0.076,0.331C12.655,24.966,12.739,25,12.825,25c0.033,0,0.066-0.005,0.098-0.016l6.487-2.061
		c1.775,0.948,3.782,1.448,5.812,1.448c6.77,0.001,12.278-5.466,12.278-12.186S31.992,0,25.222,0z M25.222,21.834
		c-1.911,0-3.761-0.552-5.352-1.596c-0.053-0.035-0.115-0.053-0.178-0.053c-0.033,0-0.066,0.005-0.099,0.015l-3.25,1.033
		l1.049-3.095c0.034-0.101,0.017-0.211-0.045-0.296c-1.211-1.655-1.852-3.611-1.852-5.656c0-5.32,4.363-9.648,9.726-9.648
		s9.725,4.328,9.725,9.648C34.947,17.506,30.585,21.834,25.222,21.834z"/>
</g>
</svg>
                    <span style="position: relative;left: -25px;">(+57)3123776742</span></a>

            </li>
        </ul>
    </div>
    <ul class="top-links" style="max-width: 45%">
        <!-- <ul class="flags">
            <li><a href="/panama"><img src="<?php #echo get_template_directory_uri(); ?>/svg/pa.svg" alt=""></a></li>
                <li><a href="/"><img src="<?php #echo get_template_directory_uri(); ?>/svg/co.svg" alt=""></a></li>
        </ul>-->

            <div class="cartColorLink" style="    min-height: 42px;">


                    <?php if (is_user_logged_in()): ?>
                        <a
                                href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>"><?php esc_attr_e('My Account', 'woocommerce'); ?></a>
                    <?php else: ?>
                        <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Login / Registro</a>
                    <?php endif; ?>

            </div>

    </ul>
</div>
<header>
    <div class="container clearfix">
        <div class="row">
            <div class="site-branding">
                <?php if (get_theme_mod('ancla_logo')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>'
                       title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'>
                        <img src='<?php echo esc_url(get_theme_mod('ancla_logo')); ?>'
                             alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'>
                    </a>
                <?php else : ?>
                    <hgroup>
                        <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>'
                                                  title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'
                                                  rel='home'><?php bloginfo('name'); ?></a></h1>

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
                    if (!empty($locations)):
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);

                    $menuitems = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
                    ?>
                    <ul id="primary-menu" class="menu">
                        <?php
                        $count = 0;
                        $submenu = false;

                        if ($menuitems):

                            foreach ($menuitems as $item):
                                $link = $item->url;
                                $title = $item->title;
                                // item does not have a parent so menu_item_parent equals 0 (false)
                                if (!$item->menu_item_parent):
                                    // save this id for later comparison with sub-menu items
                                    $parent_id = $item->ID;
                                    ?>
                                    <li id="menu-item-<?php echo $item->ID; ?>" class="">
                                    <a href="<?php echo $link; ?>">
                                        <?php echo $title; ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($parent_id == $item->menu_item_parent): ?>
                                <?php if (!$submenu): $submenu = true; ?>


                                    <ul class="sub-menu <?php if ($item->object == 'product_cat'): ?>submenu-grid<?php endif; ?>">

                                <?php endif; ?>
                                <?php if ($item->object == 'product_cat'):
                                    $meta = get_term_meta($item->object_id);
                                    $thumb_id = $meta['thumbnail_id'][0];
                                    ?>
                                    <li class="bg-img submenu-item">
                                        <?php //echo wp_get_attachment_image( $thumb_id, [ '200', '200' ] );
                                        ?>
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
                                <?php if (isset($menuitems[$count + 1]) && $menuitems[$count + 1]->menu_item_parent != $parent_id && $submenu): ?>
                                    </ul>
                                    <?php $submenu = false; endif; ?>
                            <?php endif; ?>
                                <?php if (isset($menuitems[$count + 1]) && $menuitems[$count + 1]->menu_item_parent != $parent_id): ?>
                                </li>
                                <?php $submenu = false; endif; ?>
                                <?php $count++; endforeach; endif;
                        endif; ?>

                </div>
                <div>
                    <a href="javascript:;" class="open-cart">
                        <svg style="position: relative;top: 3px ;" version="1.1" id="Capa_1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="32px" height="32px" viewBox="12.5 12.5 25 25"
                             enable-background="new 12.5 12.5 25 25"
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
                    <?php get_template_part('template-parts/floating-cart'); ?>
                </div>
                <?php //get_search_form(); ?>
                <a href="#" class="open-menu">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </div>
</header><!-- #masthead -->

<?php if (is_front_page()) { ?>

    <div class="loader-container">
        <!--            <div class="pre-loader"></div>-->
        <div class="ancla-loader"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/loader_bg.png');">
            <div class="spin">
                <img src="<?php echo get_template_directory_uri(); ?>/img/loader_content.png" alt="" data-pin="nopin">
            </div>
        </div>
    </div>
<?php } ?>
<?php if (get_the_ID() == 2373) { ?>
<section id="content" class="site-content">
    <section
            style="margin: 78px auto 20px; max-width: 1000px; border: 2px #c1282c solid;padding: 50px 20px 10px;position: relative">
        <figure style="position: absolute; top: -70px; left: calc(50% - 140px)">
            <img src="https://www.ancla.la/wp-content/uploads/2019/04/imgarriba.png" alt="">
        </figure>
        <div class="stepByStep">
            <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso01.png" alt=""></div>
            <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso02.png" alt=""></div>
            <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso03.png" alt=""></div>
            <div><img src="https://www.ancla.la/wp-content/uploads/2019/04/paso04.png" alt=""></div>
        </div>
    </section>
    <?php } ?>


