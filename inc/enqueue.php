<?php

function ect_load_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], null);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.min.css', [], null);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css', [], null);

    // JS
    wp_enqueue_script('fluidvids', get_template_directory_uri() . '/assets/js/fluidvids.min.js', ['jquery'], null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.min.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'ect_load_scripts');