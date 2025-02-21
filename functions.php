<?php
function my_theme_enqueue_styles() {
    // Load main theme stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time(), 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function load_custom_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap', false);
}
add_action('wp_enqueue_scripts', 'load_custom_fonts');

?>
