<?php

add_action( 'register_post_type_args', 'vt_block_pagetemplates', 20, 2 );

function vt_block_pagetemplates( $args, $post_type ) {


	$post_id = $_GET['post'];

	$pagetemplate = get_post_meta( $post_id, '_wp_page_template', true );

	// var_dump($pagetemplate);



	if ( 'page' === $post_type ) {

		//if( 'template-special.php' === $pagetemplate ){		

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

		//}
	}

	return $args;	
	
}