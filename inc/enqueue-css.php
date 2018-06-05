<?php

function ancla_styles(){

	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css' );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
	wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css' );
    wp_enqueue_style( 'slick-lightbox', get_template_directory_uri() . '/css/slick-lightbox.css', array('slick', 'slick-theme') );
    wp_enqueue_style( 'ancla-style', get_template_directory_uri() . '/css/main.min.css', array('normalize', 'bootstrap') );
}

add_action( 'wp_enqueue_scripts', 'ancla_styles' );