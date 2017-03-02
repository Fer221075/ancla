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
</head>

<body <?php body_class(); ?>>
        <div id="top" class="container top-bar clearfix">
            <div class="top-contact">
                <ul>
                    <?php if ( get_theme_mod('contact_phone')  ): ?><li><a href="tel:<?php echo get_theme_mod('contact_phone') ?>">TEL: <?php echo get_theme_mod('contact_phone') ?></a></li><?php endif; ?>
                    <?php if ( get_theme_mod('contact_email')  ): ?><li><a href="mailto:<?php echo get_theme_mod('contact_email') ?>"><?php echo get_theme_mod('contact_email') ?></a></li><?php endif; ?>
                </ul>
            </div>
            <ul class="top-links">
                <ul class="flags">
                    <li><a href="/panama"><img src="<?php echo get_template_directory_uri();?>/svg/pa.svg" alt=""></a></li>
                    <li><a href="/"><img src="<?php echo get_template_directory_uri();?>/svg/co.svg" alt=""></a></li>
                </ul>
                <?php if ( !strpos(get_site_url(), 'panama') ): ?>
                <li>
                    <?php if ( is_user_logged_in() ): ?>
                        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>"><?php esc_attr_e( 'My Account', 'woocommerce' ); ?></a>
                    <?php else: ?>
                        <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Login / Registro</a>
                    <?php endif; ?>
                </li>
                <li>
                    <a href="javascript:;" class="open-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <?php get_template_part('template-parts/floating-cart'); ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <header>
            <div class="container clearfix">
                <div class="row">
                <div class="site-branding">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo_ancla_blanco.png" alt="">
                    </a>
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
                    if ( !empty($locations)):
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );


                    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                    ?>
                    <ul id="primary-menu" class="menu">
                        <?php
                        $count = 0;
                        $submenu = false;

                        if ( $menuitems ):

                        foreach( $menuitems as $item ):
                            $link = $item->url;
                            $title = $item->title;
                            // item does not have a parent so menu_item_parent equals 0 (false)
                            if ( !$item->menu_item_parent ):
                                // save this id for later comparison with sub-menu items
                                $parent_id = $item->ID;
                                ?>
                                <li id="menu-item-<?php echo $item->ID; ?>" class="">
                                <a href="<?php echo $link; ?>">
                                    <?php echo $title; ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( $parent_id == $item->menu_item_parent ): ?>
                                <?php if ( !$submenu ): $submenu = true; ?>


                                    <ul class="sub-menu <?php if ($item->object == 'product_cat'):?>submenu-grid<?php endif;?>">

                                <?php endif; ?>
                                <?php if ($item->object == 'product_cat'):
                                    $meta = get_term_meta( $item->object_id );
                                    $thumb_id = $meta['thumbnail_id'][0];
                                    ?>
                                    <li class="bg-img submenu-item">
                                      <?php echo wp_get_attachment_image( $thumb_id, array('200','200') ); ?>
                                      <a href="<?php echo $item->url;?>">
                                        <div class="menu-txt">
                                          <span class="title"><?php echo $item->title;?></span>
                                        </div>
                                      </a>
                                    </li>
                                <?php else: ?>
                                    <li class="item">
                                        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( isset($menuitems[ $count + 1 ]) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                    </ul>
                                <?php $submenu = false; endif; ?>
                            <?php endif; ?>
                            <?php if ( isset($menuitems[ $count + 1 ]) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                            </li>
                            <?php $submenu = false; endif; ?>
                            <?php $count++; endforeach; endif; endif; ?>

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
            <div class="pre-loader"></div>
        </div>

	<section id="content" class="site-content">

