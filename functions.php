<?php
/**
 * Ancla functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ancla
 */

if ( ! function_exists( 'ancla_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ancla_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ancla, use a find and replace
	 * to change 'ancla' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ancla', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ancla' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ancla_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ancla_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ancla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ancla_content_width', 640 );
}
add_action( 'after_setup_theme', 'ancla_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ancla_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets', 'ancla' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'ancla' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Widgets tienda', 'ancla' ),
        'id'            => 'store-widgets',
        'description'   => esc_html__( 'Add widgets here.', 'ancla' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Blog sidebar', 'ancla' ),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__( 'Add widgets here.', 'ancla' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'ancla_widgets_init' );

/**
 * @param $html
 * @param $post_id
 * @param $post_image_id
 * Remove hardcoded width and height on thumbnail images
 * @return mixed
 */
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

/**
 * @param $user_contact
 * @return mixed
 * Add contact methods to users
 */
function modify_user_contact_methods( $user_contact ) {

    // Add user contact methods
    $user_contact['youtube_url']   = __( 'YouTube Channel Url' );
    $user_contact['twitter'] = __( 'Twitter Username' );

    // Remove user contact methods
//    unset( $user_contact['aim']    );
//    unset( $user_contact['jabber'] );

    return $user_contact;
}
add_filter( 'user_contactmethods', 'modify_user_contact_methods' );


/**
 * Remove archive title prefix
 */
// Simply remove anything that looks like an archive title prefix ("Archive:", "Foo:", "Bar:").
add_filter('get_the_archive_title', function ($title) {

    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }

    return preg_replace('/^\w+: /', '', $title);
});

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action('woocommerce_after_order_notes', 'my_custom_checkout_field');
 
function my_custom_checkout_field( $checkout ) {
 
    echo '<div id="optin"><h3>'.__('Términos y condiciones del sitio: ').'</h3>';
 
    woocommerce_form_field( 'my_checkbox', array(
        'type', 'checkbox',
        'class'  => array('input-checkbox'),
        'label'  => ('<span>Acepto la <a href="/wp-content/uploads/2017/02/politica_general_privacidad.pdf" target="_blank">política política de privacidad</a> , <a href="/wp-content/uploads/2017/02/Habeas-data.pdf" target="_blank">terminos y condiciones</a> y el uso de mis datos con fines comerciales.<span>'),
        'required'  => true,
        ), $checkout->get_value( 'my_checkbox' ));
    echo '</div>';
}

/**
 * Process the checkout
 **/
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
 
function my_custom_checkout_field_process() {
    global $woocommerce;
 
    // Check if set, if its not set add an error.
    if (!$_POST['my_checkbox'])
         $woocommerce->add_error( __('Please agree to my checkbox.') );
}
 
/**
 * Update the order meta with field value
 **/
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');
 
function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ($_POST['my_checkbox']) update_post_meta( $order_id, 'My Checkbox', esc_attr($_POST['my_checkbox']));
}


// Display empty product categories
add_filter( 'woocommerce_product_subcategories_hide_empty', 'show_empty_categories', 10, 1 );
function show_empty_categories ( $show_empty ) {
    $show_empty  =  true;
    // You can add other logic here too
    return $show_empty;
}

add_filter( 'woocommerce_placeholder_img_src', 'growdev_custom_woocommerce_placeholder', 10 );
/**
 * Function to return new placeholder image URL.
 */
function growdev_custom_woocommerce_placeholder( $image_url ) {
    $image_url = get_template_directory_uri() . '/img/sin_foto.jpg';
    return $image_url;
}

function ancla_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','ancla_disable_comment_url');


/**
 *Reduce the strength requirement on the woocommerce password.
 *
 * Strength Settings
 * 3 = Strong (default)
 * 2 = Medium
 * 1 = Weak
 * 0 = Very Weak / Anything
 */
function reduce_woocommerce_min_strength_requirement( $strength ) {
    return 1;
}
add_filter( 'woocommerce_min_password_strength', 'reduce_woocommerce_min_strength_requirement' );

// Remove breadcrumbs
//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

function the_title_trim($title) {

    $title = esc_attr($title);

    $findthese = array(
        '#Protected:#',
        '#Private:#',
        '#Protegido:#',
        '#Privado:#',
    );

    $replacewith = array(
        '', // What to replace "Protected:" with
        '' // What to replace "Private:" with
    );

    $title = preg_replace($findthese, $replacewith, $title);
    return $title;
}
add_filter('the_title', 'the_title_trim');

function change_welcome_mail_loginlink( $welcome_email, $user_id, $password, $meta ) {
    $welcome_email = str_replace( 'LOGINLINK', home_url( '/video-tutoriales-cash-control' ) , $welcome_email );
    return $welcome_email;
}
add_filter( 'update_welcome_user_email', 'change_welcome_mail_loginlink', 10, 4 );

require get_template_directory() . '/inc/woocommerce-register-fields.php';

require get_template_directory() . '/inc/ajax-products.php';

/**
 * Implement custom comments mark up
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Theme's custom widgets
 */
require get_template_directory() . '/inc/custom-widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-js.php';
require get_template_directory() . '/inc/enqueue-css.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom types
 */
require get_template_directory() . '/inc/custom-types.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/product-cat-customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_filter( 'jetpack_development_mode', '__return_true' );
//add_filter( 'jetpack_is_staging_site', '__return_true' );