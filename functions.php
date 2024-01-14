<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/dist/css/style.min.css', array(), '1.0', 'all');
    
    wp_enqueue_script('anime', get_template_directory_uri() . '/assets/dist/js/anime.min.js', array(), '1.0', true);
    // wp_enqueue_script('heading-formatting', get_template_directory_uri() . '/assets/dist/js/heading-formatting.min.js', array(), '1.0', true);
    // wp_enqueue_script('animations', get_template_directory_uri() . '/assets/dist/js/animations.min.js', array('anime'), '1.0', true);
});

// Add missing menu option to wp-admin
add_theme_support('menus');
register_nav_menus( array(
    'sidebar'   => 'Display this menu in left sidebar',
) );