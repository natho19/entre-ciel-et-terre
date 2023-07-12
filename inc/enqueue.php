<?php

function ect_load_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', [], null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], null);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], null);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], null);

    // JS
    wp_enqueue_script('fluidvids', get_template_directory_uri() . '/assets/js/fluidvids.js', ['jquery'], null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', ['jquery'], null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'ect_load_scripts');