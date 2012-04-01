<?php

define("THEME_DIR", get_stylesheet_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {

	/** REGISTER css/screen.cs **/
	wp_register_style( 'screen-style', THEME_DIR . '/css/screen.css', array(), '1', 'all' );
	wp_enqueue_style( 'screen-style' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {

	/** REGISTER HTML5 Shim **/
	wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
	//wp_enqueue_script( 'html5-shim' );
	
	wp_register_script( 'modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'modernizr' );

	/** REGISTER HTML5 OtherScript.js **/
	wp_register_script( 'custom-script', THEME_DIR . '/js/script-ck.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'custom-script' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus();
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

