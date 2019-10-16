<?php

function vt_allowed_block_types( $allowed_block_types ) {

	$current_screen = get_current_screen();

	if ( $current_screen->post_type !== 'vt_testimonial' ){

		return $allowed_block_types;

	}

	return array(
		'core/paragraph'
	);


}
add_filter( 'allowed_block_types', 'vt_allowed_block_types');

