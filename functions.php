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
		'name'          => esc_html__( 'Sidebar', 'ancla' ),
		'id'            => 'sidebar-1',
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

// Display empty product categories
add_filter( 'woocommerce_product_subcategories_hide_empty', 'show_empty_categories', 10, 1 );
function show_empty_categories ( $show_empty ) {
    $show_empty  =  true;
    // You can add other logic here too
    return $show_empty;
}

// Remove breadcrumbs
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

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
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//// Add term page
//function ancla_taxonomy_add_image_field() {
//    // this will add the custom meta field to the add new term page
//    ?>
<!--    <div class="form-field">-->
<!--        <label for="landing_image">Landing image</label>-->
<!--        <input type="text" name="landing_image[image]" id="landing_image[image]" class="landing_image" value="--><?php //echo $landingimage; ?><!--">-->
<!--        <input class="upload_image_button button" name="_add_landing_image" id="_add_landing_image" type="button" value="Select/Upload Image" />-->
<!--        <script>-->
<!--            jQuery(document).ready(function() {-->
<!--                jQuery('#_add_landing_image').click(function() {-->
<!--                    wp.media.editor.send.attachment = function(props, attachment) {-->
<!--                        jQuery('.landing-image').val(attachment.url);-->
<!--                    }-->
<!--                    wp.media.editor.open(this);-->
<!--                    return false;-->
<!--                });-->
<!--            });-->
<!--        </script>-->
<!--    </div>-->
<!--    --><?php
//}
//add_action( 'product_cat_add_form_fields', 'ancla_taxonomy_add_image_field', 10, 2 );
//
//// Add Upload fields to "Edit Taxonomy" form
//function ancla_taxonomy_edit_image_field($term) {
//
//    // put the term ID into a variable
//    $t_id = $term->term_id;
//
//    // retrieve the existing value(s) for this meta field. This returns an array
//    $term_meta = get_option( "product_cat_$t_id" ); ?>
<!---->
<!--    <tr class="form-field">-->
<!--        <th scope="row" valign="top"><label for="_landing_image">Landing Image</label></th>-->
<!--        <td>-->
<!--            --><?php
//            $landingimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : '';
//            ?>
<!--            <input type="text" name="landing-image[image]" id="landing-image[image]" class="landing-image" value="--><?php //echo $landingimage; ?><!--">-->
<!--            <input class="upload_image_button button" name="_landing-image" id="_landing-image" type="button" value="Select/Upload Image" />-->
<!--        </td>-->
<!--    </tr>-->
<!--    <tr class="form-field">-->
<!--        <th scope="row" valign="top"></th>-->
<!--        <td style="height: 150px;">-->
<!--            <style>-->
<!--                div.img-wrap {-->
<!--                    background: url('http://placehold.it/900x900') no-repeat center;-->
<!--                    background-size:contain;-->
<!--                    max-width: 450px;-->
<!--                    max-height: 150px;-->
<!--                    width: 100%;-->
<!--                    height: 100%;-->
<!--                    overflow:hidden;-->
<!--                }-->
<!--                div.img-wrap img {-->
<!--                    max-width: 450px;-->
<!--                }-->
<!--            </style>-->
<!--            <div class="img-wrap">-->
<!--                <img src="--><?php //echo $landingimage; ?><!--" id="landing-img">-->
<!--            </div>-->
<!--            <script>-->
<!--                jQuery(document).ready(function() {-->
<!--                    jQuery('#_landing_image').click(function() {-->
<!--                        wp.media.editor.send.attachment = function(props, attachment) {-->
<!--//                            jQuery('#landing-img').attr("src",attachment.url)-->
<!--                            jQuery('.landing-image').val(attachment.url)-->
<!--                        }-->
<!--                        wp.media.editor.open(this);-->
<!--                        return false;-->
<!--                    });-->
<!--                });-->
<!--            </script>-->
<!--        </td>-->
<!--    </tr>-->
<!--    --><?php
//}
//add_action( 'product_cat_edit_form_fields', 'ancla_taxonomy_edit_image_field', 10, 2 );
//
//// Save Taxonomy Image fields callback function.
//function save_product_cat_custom_meta( $term_id ) {
//    if ( isset( $_POST['landing_image'] ) ) {
//        $t_id = $term_id;
//        $term_meta = get_option( "product_cat_$t_id" );
//        $cat_keys = array_keys( $_POST['landing_image'] );
//        foreach ( $cat_keys as $key ) {
//            if ( isset ( $_POST['landing_image'][$key] ) ) {
//                $term_meta[$key] = $_POST['landing_image'][$key];
//            }
//        }
//        // Save the option array.
//        update_option( "product_cat_$t_id", $term_meta );
//    }
//}
//add_action( 'edited_product_cat', 'save_product_cat_custom_meta', 10, 2 );
//add_action( 'create_product_cat', 'save_product_cat_custom_meta', 10, 2 );