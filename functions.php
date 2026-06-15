<?php
function my_theme_assets() {
    // Enqueue compiled CSS
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0', 'all');
    
    // Enqueue compiled JS
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function leafyoak_theme_assets() {
    // This tells WordPress to look inside your 'dist/css' folder for the Gulp output
    wp_enqueue_style(
        'leafyoak-custom-styles', 
        get_template_directory_uri() . '/dist/css/main.css', 
        array(), 
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'leafyoak_theme_assets'); 


function leafyoak_theme_setup() {
    // Adds support for a customizable logo in the WordPress Customizer
    add_theme_support('custom-logo', array(
        'height'      => 42,
        'width'       => 150, // You can adjust this width to match your logo's aspect ratio
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'leafyoak_theme_setup');

?>
