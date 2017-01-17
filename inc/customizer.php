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

}
add_action( 'customize_register', 'ancla_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ancla_customize_preview_js() {
	wp_enqueue_script( 'ancla_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ancla_customize_preview_js' );
