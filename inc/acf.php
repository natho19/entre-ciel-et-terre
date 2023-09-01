<?php

function acf_settings_path($path) {
    $path = get_stylesheet_directory() . '/inc/third-party/acf/';
    return $path;
}
add_filter('acf/settings/path', 'acf_settings_path');

function acf_settings_dir($dir) {
    $dir = get_stylesheet_directory_uri() . '/inc/third-party/acf/';
    return $dir;
}
add_filter('acf/settings/dir', 'acf_settings_dir');

include_once( get_stylesheet_directory() . '/inc/third-party/acf/acf.php' );

// Disable ACF in back office
// add_filter('acf/settings/show_admin', '__return_false');