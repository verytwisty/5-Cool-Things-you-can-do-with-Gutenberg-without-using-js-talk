# [fit] 5 Cool things 
# [fit] you can do with Gutenberg
# [fit] without writing Javascript

^
There are plenty of ways you can use Gutenberg in projects today only using PHP, so don't worry if you haven't learnt React yet you aren't locked out of the Gutenberg world! This evening we are going to look at a smorgasbord of 5 things you can do with Gutenberg without writing JS.

---

< We will be using some PHP >

---

## #1 Re-useable Blocks

---
- Save content snippets in your WordPress editor and then reuse them anywhere.
- Good for content that is repeated accross multiple pages
- Can be edited once and the block updates everywhere
- Change back to regular block if needed



^ 
Good for things like:
- Call to actions
- Information about Authors
- Social Media Links
- Lets have a look to see how it works

---

## #2 Modifying Core blocks Styles

---

- Theme Colours
- Add Font Sizes
- Aligns Settings
- Alternative Block Styles

---

### Theme Colours

---

```php
add_theme_support(
	'editor-color-palette',
	array(
		array(
			'name' => __( 'strong magenta', '_vt' ),
			'slug' => 'strong-magenta',
			'color' => '#a156b4',
		),
		array(
			'name' => __( 'light grayish magenta', '_vt' ),
			'slug' => 'light-grayish-magenta',
			'color' => '#d0a5db',
		),
		array(
			'name' => __( 'very light gray', '_vt' ),
			'slug' => 'very-light-gray',
			'color' => '#eee',
		),
		array(
			'name' => __( 'very dark gray', '_vt' ),
			'slug' => 'very-dark-gray',
			'color' => '#444',
		),
	)
);
```

---

```css

.has-strong-magenta-background-color{
	background-color: #a156b4;
}

.has-light-grayish-magenta-background-color{
	background-color: #d0a5db;
}

.has-very-light-gray-background-color{
	background-color: #eee;
}

.has-very-dark-gray-background-color{
	background-color: #444;
}

```

---

```css
.has-strong-magenta-color{
	color: #a156b4;
}

.has-light-grayish-magenta-color{
	color: #d0a5db;
}

.has-very-light-gray-color{
	color: #eee;
}

.has-very-dark-gray-color{
	color: #444;
}
```

---

```php

add_theme_support( 'disable-custom-colors' );

```

---

### Add Font Sizes

---

```php
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

```

---

```css
.has-tiny-font-size{
	font-size: 8px;
}

.has-small-font-size{
	font-size: 12px;
}

.has-normal-font-size{
	font-size: 16px;
}

.has-large-font-size{
	font-size: 36px;
}
```

---

```php
add_theme_support('disable-custom-font-sizes');
```

---

### Aligns Settings

---

```php

add_theme_support( 'align-wide' );
```

---

```css
.alignfull {
	margin: 0 calc(50% - 50vw);
	max-width: 100vw;
	width: 100vw;
}
```

---

### Alternative Block Styles

#### // Available soon in WordPress 5.3

^
What is a block style? Lets look at a native style

---
```php
register_block_style(
	'core/quote',
	array(
		'name'         => 'fancy-quote',
		'label'        => 'Fancy Quote',
		'style_handle' => 'fancy-style',
	)
);
```

---

## #3 Block templates

---

You can create block templates for certain post types.

---

```php
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
	'template'              => $template,
	'template_lock'         => array('insert', 'removal', 'move'), // or 'all'
);
register_post_type( 'vt_portfolio', $args );
```

^
Creating a new post type, most people might have seen something like this

---
[.code-highlight: 21-23]

```php
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
	'template'              => $template,
	'template_lock'         => array('insert', 'removal', 'move'), // or 'all'
);
register_post_type( 'vt_portfolio', $args );
```

^
Just going to focus on these three lines here

---



```php
$args = array(
	...
	'show_in_rest'          =>  true,
	'template'              => $template,
	'template_lock'         => array('insert', 'removal', 'move'), // or 'all'
);
register_post_type( 'vt_portfolio', $args );
```

^
New Syntax
- Show in rest: Needed to make this PT work with Gutenberg (won't work at all without this)
- template: the args we are going to pass to tell what template we want on this post type
- template lock: 
	- insert, removes ability to insert new blocks
	- removal, removes ability to remove existing blocks
	- move, removes ability to move blocks around
	- all, removes insert, removal, and move functionality
	- Lets have a look at how this would work


---

```php
$template = array(
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
);
```

^
This is the template for our portfolio post type

---

```php
// Paragraph with placeholder and align
[ 'core/paragraph', 
	[ 'align' => 'left',
	  'placeholder' => __( 'Incididunt aliquip culpa dolore amet .', '_vt' )
	]
],

// columns
[ 'core/text-columns', 
	[ 'columns' => '3' ]
],
```

^
We can add in blocks to the array and set attributes how we like them
- the core paragraph can have align specified
- the columns can specify how many coloumns you want to appear my defaul
- Need to know the names of settings
- Can also be used for non-core blocks

---

### Adding Block Templates to existing Posts or Pages

---

```php
add_action( 'register_post_type_args', 'block_templates', 20, 2 );

function block_templates( $args, $post_type ) {

	if ( 'page' === $post_type) {

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
```

---

[.code-highlight: 1, 3, 5, 10, 12]

```php
add_action( 'register_post_type_args', 'block_templates', 20, 2 );

function block_templates( $args, $post_type ) {

	if ( 'page' === $post_type) {

		$args[ 'template' ] = [
			...
		];
	}

	return $args;	
	
}

```

---

## #4 Filtering Blocks

^ 
- Add a wrapper on post types
- Add a wrapper on page templates
- Removing Gutenberg from a post type
- Remove blocks from post types

---

### Add a wrapper on post types

---

Lets say you have quote that you would like to be displayed differently on a page than on a post. 

---

```php
add_filter( 'render_block', 'vt_quote_block_filters', 10, 3 );

function vt_quote_block_filters( $block_content, $block ) {

	if ( 'post' !== get_post_type() ){
		return $block_content;
	}

	if ( 'core/quote' !== $block['blockName']  ) {
		return $block_content;
	}

	$output = '<div class="quote-post">';
	$output .= $block_content;
	$output .= '</div>';

	return $output;
}
```

^
Add a filter to Render Block
Check to see whether the quote is on a post
Check whether the block is a quote block
If both these statements are false return the block content unchanged
If the block is a quote block and it is on a page, wrap the block in an extra div

---

### Add a wrapper on page templates


^
You can also use the same function to wrap all blocks on a specific post type or page tempates

---

```php
add_filter( 'render_block', 'vt_quote_block_template', 10, 3 );

function vt_quote_block_template( $block_content, $block ) {

	if (  false === is_page_template( 'template-special.php' ) ){
		return $block_content;
	}

	if ( 'core/quote' !== $block['blockName']  ) {
		return $block_content;
	}

	$output = '<div class="alignfull quote-template">';
	$output .= $block_content;
	$output .= '</div>';

	return $output;
}
```

---

### Removing Gutenberg from a post type

^
There might be different reasons to do this
- have a post type that doesn't work with blocks
- want to restrict the user input for because you want to add the content to something like a slider
- you have legacy content that isn't easy to convert

---

```php
// Disable Gutenberg on some CPT

function vt_disable_gutenberg($is_enabled, $post_type) {
	
	if ($post_type === 'vt_testimonial') return false;
	
	return $is_enabled;
	
}
add_filter('use_block_editor_for_post_type', 'vt_disable_gutenberg', 10, 2);

```

---

### Remove blocks from post types

---

```php
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
```



---

## #5 ACF Blocks

^
- ACF is a common plugin for creating custom fields
- In the paid version you can also create custom blocks
- I'm not going to go in depth on how to use ACF, as there are plenty of tutorials out there, but creating a custom block is very similar to creating a custom field and using it in your theme

---

### How to create an ACF Block

---

```php
add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	if( function_exists('acf_register_block') ) {
		
		acf_register_block( array(
			'name'				=> 'author',
			'title'				=> __('Author Details'),
			'description'		=> __('Add in the Author Details'),
			'render_callback'	=> 'acf_block_render',
			'category'			=> 'common',
			'icon'				=> 'groups',
			'keywords'			=> array( 'team', 'members', 'about' ),
			'mode'              => 'edit' // preview or auto
		));
	}
}

function acf_block_render( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	}
}
```

---

[.code-highlight: 1-5 ]

```
<?php
	$image = get_field('image');
	$name = get_field('author_name');
	$details = get_field('author_details');
?>

<div class="author">
	<div class="author-img">
		<?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?>
	</div>
	<div class="author-details">
		<h3><?php echo $name; ?></h3>
		<?php echo $details; ?>
	</div>
</div>
```

---

[.code-highlight: 7-15 ]

```
<?php
	$image = get_field('image');
	$name = get_field('author_name');
	$details = get_field('author_details');
?>

<div class="author">
	<div class="author-img">
		<?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?>
	</div>
	<div class="author-details">
		<h3><?php echo $name; ?></h3>
		<?php echo $details; ?>
	</div>
</div>
```

^
Lets see what that looks like in the back end

---

```php
function custom_blocks_scripts(){

	wp_enqueue_style( 'twentyseventeen-custom-blocks', 
		get_theme_file_uri( '/assets/css/custom-blocks.css' ), 
		array(), 
		'1.1' 
	);

}

add_action( 'wp_enqueue_scripts', 'custom_blocks_scripts' );
```

---

### Adding in styles on the back end

---

[.code-highlight: 12 ]

```php
function custom_blocks_scripts(){

	wp_enqueue_style( 'twentyseventeen-custom-blocks', 
		get_theme_file_uri( '/assets/css/custom-blocks.css' ), 
		array(), 
		'1.1' 
	);

}
add_action( 'wp_enqueue_scripts', 'custom_blocks_scripts' );

add_action( 'enqueue_block_editor_assets', 'custom_blocks_scripts' );
```

---

### Adding a custom category

^
This is useful when your creating a suite of blocks for a custom theme or plugin, it's easier for the users to find your blocks

---

```php
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
```

---

[.code-highlight: 6 ]

```php
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
```

---

https://javascriptforwp.com/product/gutenberg-theme-development-course/

https://github.com/zgordon/gutenberg-theming-course

https://www.billerickson.net/building-a-gutenberg-website/

---


#[fit] Thank You