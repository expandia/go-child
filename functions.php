<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	
}

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'expandia_enqueue_scripts' );

function expandia_enqueue_scripts() {
  wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/main-min.js', array('jquery'), '1', false );
  wp_enqueue_script( 'main' );

}

// Register Style
function custom_styles() {
	wp_register_style( 'styles', get_stylesheet_directory_uri() . '/style.css', false, false, 'all' );
	wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );