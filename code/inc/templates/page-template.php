<?php

add_action( 'register_post_type_args', 'block_templates', 20, 2 );

function block_templates( $args, $post_type ) {

	if ( 'page' === $post_type ) {		

		$args[ 'template' ] = [
			[ 'core/heading', 
			[ 'placeholder' => __( 'Subheadline', '_vt' ) ]
			], 
			[ 'core/image', 
				[ 'align' => 'right']
			],			
			[ 'core/paragraph', 
				[ 'align' => 'left',
				  'placeholder' => __( 'Incididunt aliquip culpa dolore amet .', '_vt' )
				]
			],
			[ 'core/paragraph', 
				[ 'align' => 'left',
				  'placeholder' => __( 'Incididunt aliquip culpa dolore.', '_vt' )
				]
			],
			[ 'core/separator' ],			
			[ 'core/cover', 
				[ 'align' => 'full' ]
			],
			[ 'core/heading', 
				[ 'placeholder' => __( 'Another Subheadline', '_vt' ) ]
			],			
			[ 'core/text-columns', 
				[ 'columns' => '3' ]
			],
			[ 'core/paragraph', 
				[ 'placeholder' => __( 'Irure minim velit dolore sint tempor officia.', '_vt' ) ]
			],
		];
	}

	return $args;	
	
}