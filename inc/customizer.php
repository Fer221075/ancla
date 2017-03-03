<?php
/**
 * Ancla Theme Customizer.
 *
 * @package ancla
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ancla_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'ancla_logo_section' , array(
        'title'       => __( 'Logo', 'ancla' ),
        'priority'    => 30
    ) );
    $wp_customize->add_setting( 'ancla_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ancla_logo', array(
        'label'    => __( 'Logo', 'ancla' ),
        'section'  => 'ancla_logo_section',
        'settings' => 'ancla_logo',
    ) ) );

    $wp_customize->add_panel( 'home_panel', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Home', 'ancla'),
    ) );


    $wp_customize->add_section( 'banner' , array(
        'title'    => __( 'Video Banner', 'ancla' ),
        'priority' => 30,
        'panel'    => 'home_panel'
    ) );

    $wp_customize->add_setting( 'banner_title' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_title', array(
        'label'    => __( 'Título banner', 'ancla' ),
        'section'  => 'banner',
        'settings' => 'banner_title',
    ) ) );

    $wp_customize->add_setting( 'banner_description' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'banner_description', array(
        'label'    => __( 'Descripción banner', 'ancla' ),
        'section'  => 'banner',
        'settings' => 'banner_description',
        'type'     => 'textarea',
    ) ) );

    $wp_customize->add_section( 'info_banner_home' , array(
        'title'    => __( 'Info Banner', 'ancla' ),
        'priority' => 30,
        'panel'    => 'home_panel'
    ) );

    $wp_customize->add_setting( 'info_banner_home_title' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'info_banner_home_title', array(
        'label'    => __( 'Título banner', 'ancla' ),
        'section'  => 'info_banner_home',
        'settings' => 'info_banner_home_title',
    ) ) );

    $wp_customize->add_setting( 'info_banner_home_text' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'info_banner_home_text', array(
        'label'    => __( 'Texto banner', 'ancla' ),
        'section'  => 'info_banner_home',
        'settings' => 'info_banner_home_text',
        'type'     => 'textarea',
    ) ) );

    $wp_customize->add_section( 'contact_info' , array(
        'title'    => __( 'Información de contacto', 'ancla' ),
        'priority' => 10
    ) );

    $wp_customize->add_setting( 'contact_phone' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_phone', array(
        'label'    => __( 'Teléfono', 'ancla' ),
        'section'  => 'contact_info',
        'settings' => 'contact_phone',
    ) ) );

    $wp_customize->add_setting( 'contact_email' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_email', array(
        'label'    => __( 'Correo electrónico', 'ancla' ),
        'section'  => 'contact_info',
        'settings' => 'contact_email',
    ) ) );

    $wp_customize->add_setting( 'country' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'country', array(
        'label'    => __( 'País', 'ancla' ),
        'section'  => 'contact_info',
        'settings' => 'country',
    ) ) );

    $wp_customize->add_setting( 'address' , array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address', array(
        'label'    => __( 'Dirección', 'ancla' ),
        'section'  => 'contact_info',
        'settings' => 'address',
    ) ) );

    $wp_customize->add_section( 'other_options' , array(
        'title'    => __( 'Más opciones', 'ancla' ),
        'priority' => 30,
        'panel'    => 'home_panel'
    ) );

    $wp_customize->add_setting( 'show_products_banner', array(
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'show_products_banner', array(
        'type' => 'checkbox',
        'section' => 'other_options',
        'label' => __( 'Mostrar banner de productos' )
    ) );
}
add_action( 'customize_register', 'ancla_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ancla_customize_preview_js() {
	wp_enqueue_script( 'ancla_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ancla_customize_preview_js' );
