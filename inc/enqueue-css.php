<?php

function ancla_styles(){

	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css' );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'david-paternina-style', get_template_directory_uri() . '/css/main.css', array('normalize', 'bootstrap') );
}

add_action( 'wp_enqueue_scripts', 'ancla_styles' );