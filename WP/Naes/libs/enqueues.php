<?php
//Enqueue scripts
function enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, '1.0.0', 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
?>
