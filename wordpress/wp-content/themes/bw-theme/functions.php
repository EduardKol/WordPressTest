<?php 
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js', false, null, true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, 'footer');
    wp_enqueue_style('main', get_stylesheet_uri());
} 
?>