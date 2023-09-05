<?php

// Image URL location
define('ECT_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Theme support
function ect_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ect_setup');

// Excerpt length
function ect_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'ect_excerpt_length', 100);

// Replace excerpt ellipsis
function ect_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ect_excerpt_more');