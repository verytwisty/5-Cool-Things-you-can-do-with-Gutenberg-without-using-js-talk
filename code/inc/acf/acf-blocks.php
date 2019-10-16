<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		acf_register_block( array(
			'name'				=> 'author',
			'title'				=> __('Author Details'),
			'description'		=> __('Add in the Author Details'),
			'render_callback'	=> 'acf_block_render',
			'category'			=> 'vt-custom-blocks',
			'icon'				=> 'groups',
			'keywords'			=> array( 'team', 'members', 'about' ),
			'mode'              => 'edit'
		));

	}
}

function acf_block_render( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	}
}