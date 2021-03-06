<?php

function ancla_scripts(){

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
	wp_enqueue_script('jquery');
//    wp_enqueue_script( 'jquery-ui', 'http://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js' );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'masonry-horizontal', get_template_directory_uri() . '/js/packery-mode.pkgd.min.js', array('jquery', 'isotope'), null, true );
    wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick-lightbox', get_template_directory_uri() . '/js/slick-lightbox.min.js', array('jquery', 'slick'), null, true );

    wp_enqueue_script( 'ancla-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'ancla-scripts', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap'), null, true );
    wp_enqueue_script( 'ancla-box-game', get_template_directory_uri() . '/js/find-box-game.js', array('jquery'), null, true );
    wp_localize_script( 'ancla-scripts', 'ajax', array( 'baseUrl' => admin_url( 'admin-ajax.php' )));

	// CommentReplyJS
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'ancla_scripts' );