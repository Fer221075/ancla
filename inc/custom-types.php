<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/02/2017
 * Time: 16:19
 */

function cptui_register_my_cpts_cash_control_feat() {

    /**
     * Post Type: Beneficios Cash Control.
     */

    $labels = array(
        "name" => __( 'Beneficios Cash Control', 'ancla' ),
        "singular_name" => __( 'Beneficio', 'ancla' ),
    );

    $args = array(
        "label" => __( 'Beneficios Cash Control', 'ancla' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "cash_control_feat", "with_front" => true ),
        "query_var" => true,
        "menu_position" => 80,
        "menu_icon" => "dashicons-chart-area",
        "supports" => array( "title", "thumbnail" ),
    );

    register_post_type( "cash_control_feat", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cash_control_feat' );

function cptui_register_my_cpts_nuestros_clientes() {

    /**
     * Post Type: Nuestros Clientes.
     */

    $labels = array(
        "name" => __( 'Nuestros Clientes', 'ancla' ),
        "singular_name" => __( 'Cliente', 'ancla' ),
    );

    $args = array(
        "label" => __( 'Nuestros Clientes', 'ancla' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "nuestros_clientes", "with_front" => true ),
        "query_var" => true,
        "menu_position" => 80,
        "menu_icon" => "dashicons-businessman",
        "supports" => array( "title", "thumbnail" ),
    );

    register_post_type( "nuestros_clientes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_nuestros_clientes' );

