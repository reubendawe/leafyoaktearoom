<?php
/**
 * Leafy Oak Theme Functions and Definitions
 */

/**
 * Enqueue Theme Stylesheets and Scripts cleanly in one function
 */
function leafyoak_theme_assets() {
    // 1. Enqueue Bootstrap Core CSS from CDN
    wp_enqueue_style(
        'bootstrap-core',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3',
        'all'
    );

    // 2. Enqueue Bootstrap Icons CDN
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        array('bootstrap-core'),
        '1.11.3',
        'all'
    );

    // 3. Enqueue your main custom compiled CSS file (Loads AFTER Bootstrap)
    wp_enqueue_style(
        'leafyoak-custom-styles',
        get_template_directory_uri() . '/dist/css/main.css',
        array('bootstrap-core'),
        '1.0.0',
        'all'
    );

    // 4. Enqueue Bootstrap JavaScript Bundle (includes Popper.js for dropdowns/tooltips)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    // 5. Enqueue your main custom compiled JavaScript file from Gulp
    wp_enqueue_script(
        'leafyoak-custom-scripts',
        get_template_directory_uri() . '/dist/js/main.js',
        array('bootstrap-js'),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'leafyoak_theme_assets' );


/**
 * Theme Setup Configuration Settings
 */
function leafyoak_theme_setup() {
    // Adds support for a customizable logo in the WordPress Customizer
    add_theme_support( 'custom-logo', array(
        'height'      => 42,
        'width'       => 150, // Adjustable to match your logo's aspect ratio
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Optional Best Practice: Adds support for dynamic title tags in the head element
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'leafyoak_theme_setup' );