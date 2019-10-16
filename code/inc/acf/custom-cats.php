<?php

add_filter( 'block_categories', 'vt_add_custom_block_cat', 10, 2 );

function vt_add_custom_block_cat( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'vt-custom-blocks',
				'title' => __( 'Custom Blocks', '_vt' ),
			),
		)
	);
}