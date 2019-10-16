<?php

/*
 * Creates a Portfolio Custom Post Type
 */


if ( ! function_exists('vt_portfolio_post') ) {

// Register Custom Post Type
function vt_portfolio_post() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'vt_' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'vt_' ),
		'menu_name'             => __( 'Portfolio', 'vt_' ),
		'name_admin_bar'        => __( 'Portfolio', 'vt_' ),
		'parent_item_colon'     => __( 'Parent Post:', 'vt_' ),
		'all_items'             => __( 'All Posts', 'vt_' ),
		'add_new_item'          => __( 'Add New Post', 'vt_' ),
		'add_new'               => __( 'Add Post', 'vt_' ),
		'new_item'              => __( 'New Post', 'vt_' ),
		'edit_item'             => __( 'Edit Post', 'vt_' ),
		'update_item'           => __( 'Update Post', 'vt_' ),
		'view_item'             => __( 'View Post', 'vt_' ),
		'search_items'          => __( 'Search Posts', 'vt_' ),
		'not_found'             => __( 'Not found', 'vt_' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vt_' ),
		'items_list'            => __( 'Posts list', 'vt_' ),
		'items_list_navigation' => __( 'Posts list navigation', 'vt_' ),
		'filter_items_list'     => __( 'Filter Posts list', 'vt_' ),
	);
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$tempate = array(
		[ 'core/heading', 
			[ 'placeholder' => __( 'Subheadline', '_vt' ) ]
		], 
		[ 'core/image', 
			[ 'align' => 'right']
		],			
		[ 'core/paragraph', 
			[ 'align' => 'left',
			  'placeholder' => __( 'Incididunt aliquip culpa dolore amet sunt voluptate excepteur aliqua deserunt in cillum ullamco est sit.', '_vt' )
			]
		],
		[ 'core/paragraph', 
			[ 'align' => 'left',
			  'placeholder' => __( 'Incididunt aliquip culpa dolore amet sunt voluptate excepteur aliqua deserunt in cillum ullamco est sit.', '_vt' )
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
			[ 'placeholder' => __( 'Irure minim velit dolore sint tempor officia. Cupidatat enim dolore sunt enim pariatur et minim eiusmod Lorem id exercitation reprehenderit. In deserunt voluptate commodo officia adipisicing adipisicing voluptate culpa magna fugiat ullamco. Proident excepteur excepteur pariatur irure voluptate quis in est aute nulla cillum quis consectetur. Reprehenderit eiusmod commodo excepteur ipsum laboris voluptate.', '_vt' ) ]
		],
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'vt_' ),
		'description'           => __( 'Portfolio', 'vt_' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array('vt_categories'), // !important add any other Cats in here
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'portfolio',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          =>  true,
		'template'              => $tempate,
		// 'template_lock'         => 'all',
		'template_lock'         => array('insert', 'removal', 'move')
	);
	register_post_type( 'vt_portfolio', $args );

}
add_action( 'init', 'vt_portfolio_post', 0 );

}


if ( ! function_exists('vt_testimonial_post') ) {

// Register Custom Post Type
function vt_testimonial_post() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'vt_' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'vt_' ),
		'menu_name'             => __( 'Testimonials', 'vt_' ),
		'name_admin_bar'        => __( 'Testimonial', 'vt_' ),
		'parent_item_colon'     => __( 'Parent Post:', 'vt_' ),
		'all_items'             => __( 'All Posts', 'vt_' ),
		'add_new_item'          => __( 'Add New Post', 'vt_' ),
		'add_new'               => __( 'Add Post', 'vt_' ),
		'new_item'              => __( 'New Post', 'vt_' ),
		'edit_item'             => __( 'Edit Post', 'vt_' ),
		'update_item'           => __( 'Update Post', 'vt_' ),
		'view_item'             => __( 'View Post', 'vt_' ),
		'search_items'          => __( 'Search Posts', 'vt_' ),
		'not_found'             => __( 'Not found', 'vt_' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vt_' ),
		'items_list'            => __( 'Posts list', 'vt_' ),
		'items_list_navigation' => __( 'Posts list navigation', 'vt_' ),
		'filter_items_list'     => __( 'Filter Posts list', 'vt_' ),
	);
	$rewrite = array(
		'slug'                  => 'testimonial',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);

	$args = array(
		'label'                 => __( 'Testimonial', 'vt_' ),
		'description'           => __( 'Testimonial', 'vt_' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(), // !important add any other Cats in here
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'testimonial',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          =>  true,
	);
	register_post_type( 'vt_testimonial', $args );

}
add_action( 'init', 'vt_testimonial_post', 0 );

}









/*
 * Creates a Category for Portfolio
 */

if ( ! function_exists( 'vt_portfolio_tax' ) ) {

// Register Custom Taxonomy
function vt_portfolio_tax() {

	$labels = array(
		'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'vt_' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'vt_' ),
		'menu_name'                  => __( 'Categories', 'vt_' ),
		'all_items'                  => __( 'All Category', 'vt_' ),
		'parent_item'                => __( 'Parent Category', 'vt_' ),
		'parent_item_colon'          => __( 'Parent Category:', 'vt_' ),
		'new_item_name'              => __( 'New Category', 'vt_' ),
		'add_new_item'               => __( 'Add New Category', 'vt_' ),
		'edit_item'                  => __( 'Edit Category', 'vt_' ),
		'update_item'                => __( 'Update Category', 'vt_' ),
		'view_item'                  => __( 'View Category', 'vt_' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'vt_' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'vt_' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'vt_' ),
		'popular_items'              => __( 'Popular categories', 'vt_' ),
		'search_items'               => __( 'Search categories', 'vt_' ),
		'not_found'                  => __( 'Not Found', 'vt_' ),
		'items_list'                 => __( 'Categories list', 'vt_' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'vt_' ),
	);
	$rewrite = array(
		'slug'                       => 'portfolio_categories',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'vt_categories', array( 'vt_portfolio' ), $args );

}
add_action( 'init', 'vt_portfolio_tax', 0 );

}