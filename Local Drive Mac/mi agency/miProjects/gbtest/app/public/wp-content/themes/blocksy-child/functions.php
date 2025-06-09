<?php
/**
 * Blocksy Child Theme functions and definitions
 */

// Enqueue parent theme stylesheet
function blocksy_child_enqueue_styles() {
    wp_enqueue_style(
        'blocksy-style', 
        get_template_directory_uri() . '/style.css',
        array(), 
        wp_get_theme('blocksy')->get('Version')
    );
    
    wp_enqueue_style(
        'blocksy-child-style',
        get_stylesheet_uri(),
        array('blocksy-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'blocksy_child_enqueue_styles');

// Add your custom functions below this line
