<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), '1.0.0'); // Custom scripts
wp_enqueue_script('fontawesome');
// Load scripts in footer
function footer_scripts() 
{
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script('scripts');
}
add_action( 'wp_enqueue_scripts', 'footer_scripts' );