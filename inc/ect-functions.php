<?php

// Image folder URL location
define('ECT_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Enable classic widget area
function ect_widget_block_editor() {
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'ect_widget_block_editor');

// Theme support
function ect_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

	// Custom traduction
	pll_register_string('custom_translate', 'Adresse :');
	pll_register_string('custom_translate', 'Téléphone :');
	pll_register_string('custom_translate', 'Email :');
	pll_register_string('custom_translate', 'Formulaire de contact');
	pll_register_string('custom_translate', 'Nous suivre :');
	pll_register_string('custom_translate', 'Tout savoir sur les visas des USA et du CANADA');
	pll_register_string('custom_translate', 'Liens utiles');
	pll_register_string('custom_translate', 'Nous suivre');
	pll_register_string('custom_translate', 'Publicité');
	pll_register_string('custom_translate', 'Derniers articles');
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

// WP_Query
function ect_get_objects(
	$post_type = 'post', 
	$nb = 3,
    $category = null,
	$excludes = [],
	$orderby = 'date',
	$taxonomy = null, 
	$terms = null, 
	$order = 'DESC',
	$post_status = 'publish',
	$paged = 1) {

	$args = [
		'post_type' => $post_type,
		'posts_per_page' => $nb,
        'category_name' => $category,
		'post__not_in' => $excludes,
		'orderby' => $orderby,
		'order' => $order,
		'post_status' => $post_status,
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

// Filter search results for posts only
function ect_search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts', 'ect_search_filter');

// Stop Contact Form 7 additionnal tags
add_filter('wpcf7_autop_or_not', '__return_false');

// Mailtrap configuration
function mailtrap($phpmailer) {
	$phpmailer->isSMTP();
	$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 2525;
	$phpmailer->Username = '507e38346f368f';
	$phpmailer->Password = '********64b9';
}
add_action('phpmailer_init', 'mailtrap');

// Add menu zones
function ect_register_menus() {
	register_nav_menus([
		'top-menu' => 'Top menu',
		'main' => 'Menu principal',
		'useful-links' => 'Liens utiles'
	]);
}
add_action('init', 'ect_register_menus');

// Widget zone areas
function ect_register_sidebar() {
	// Footer widget zone
	register_sidebar([
		'id'            => 'footer-useful-links',
		'name'          => __('Liens utiles'),
		'description'   => __('Widget pour les liens utiles'),
		'before_widget' => '<div class="jellywp_about_us_widget_wrapper">',
		'after_widget'  => '</div>'
	]);

	// Advertisement widget zone
	register_sidebar([
		'id'            => 'advertisement',
		'name'          => __('Publicité'),
		'description'   => __('Widget pour la publicité'),
		'before_widget' => '<div class="advertisement">',
		'after_widget'  => '</div>'
	]);
}
add_action('widgets_init', 'ect_register_sidebar');