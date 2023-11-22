<?php

function theme_enqueue_styles_scripts() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/dist/css/style.min.css', array(), '1.0', 'all');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/anime.min.js', array(), '1.0', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/animations.min.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');
