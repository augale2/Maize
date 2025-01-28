<?php
// Enqueue styles and scripts
function custom_theme_enqueue_assets() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue Tailwind CSS from the CDN
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css');

    // Enqueue custom JavaScript file
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Register navigation menu
function custom_theme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom-theme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_register_menus');
?>
