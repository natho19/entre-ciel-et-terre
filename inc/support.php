<?php

define('ECT_IMG_URL', get_template_directory_uri() . '/assets/img/', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Defining the sub-directory to page templates
define('WPSE_PAGE_TEMPLATE_SUB_DIR', 'page-templates');