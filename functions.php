<?php
// Version.
if ( !defined('VERSION') ) {
    define( 'VERSION', '1.0.0' );
}


// Styles and Scripts.
function byttek_styles_scripts() {
    wp_enqueue_style( 'byttek-base', get_template_directory_uri() . '/assets/css/base.css', [], VERSION );
    wp_enqueue_style( 'byttek-style', get_stylesheet_uri(), ['byttek-base'], VERSION );
}
add_action( 'wp_enqueue_scripts', 'byttek_styles_scripts' );
