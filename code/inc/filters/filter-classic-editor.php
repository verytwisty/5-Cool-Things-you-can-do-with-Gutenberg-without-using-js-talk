<?php

// Disable Gutenberg on some CPT

function vt_disable_gutenberg($is_enabled, $post_type) {
	
	if ($post_type === 'vt_testimonial') return false; // change book to your post type
	
	return $is_enabled;
	
}
add_filter('use_block_editor_for_post_type', 'vt_disable_gutenberg', 10, 2);