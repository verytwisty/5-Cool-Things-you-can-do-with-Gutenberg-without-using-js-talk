<?php

// Add Custom Font Sizes

add_theme_support(
	'editor-font-sizes',
	array(
		array(
			'name' => __( 'Tiny', '_vt' ),
			'size' => 8,
			'slug' => 'tiny',
		),
		array(
			'name' => __( 'Small', '_vt' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', '_vt' ),
			'size' => 16,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', '_vt' ),
			'size' => 36,
			'slug' => 'large',
		),
	)
);