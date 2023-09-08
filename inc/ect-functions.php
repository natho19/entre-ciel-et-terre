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

// Requête WP_Query
function ect_get_objects(
	$post_type = 'post', 
	$nb = 3,
	// $excludes = [],
    $category = null,
	$taxonomy = null, 
	$terms = null, 
	$orderby = 'date', 
	$order = 'DESC', 
	$paged = 1)
{
	$args = [
		'post_type' => $post_type,
		'posts_per_page' => $nb,
        'category_name' => $category,
		// 'post__not_in' => $excludes,
		'orderby' => $orderby,
		'order' => $order,
		'paged' => $paged
	];

	if ($taxonomy) {
		$args['tax_query'][] = [
			'taxonomy' => $taxonomy,
			'field' => 'term_id',
			'terms' => $terms
		];
	}

	return new WP_Query($args);
}