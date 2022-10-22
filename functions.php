<?php
// Version.
if ( !defined('VERSION') ) {
    define( 'VERSION', '1.0.0' );
}


// Styles and Scripts.
function byttek_styles_scripts() {
    wp_enqueue_style( 'byttek-style', get_stylesheet_uri(), [], VERSION );
}
add_action( 'wp_enqueue_scripts', 'byttek_styles_scripts' );


// Custom CSS Support.
function custom_css_support() {
   require "inc/custom-css.php";
   new Custom_CSS_Support();
}
add_action('elementor/init', 'custom_css_support');


// Shortcode: Current Year.
function year_shortcode() {
	$y = date('Y');
	return $y;
}
add_shortcode( 'year', 'year_shortcode' );


// Theme Setup.
function rfb_setup_theme() {
    add_theme_support( 'title-tag' );

    register_nav_menus([
        'primary'   => esc_html__( 'Primary', 'byttek' ),
    ]);
}
add_action( 'after_setup_theme', 'rfb_setup_theme' );
