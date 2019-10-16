<?php


function twentyseventeen_gutenberg (){

	include 'inc/theme_support/editor-color-palette.php';

	include 'inc/theme_support/disable-custom-colors.php';

	include 'inc/theme_support/editor-font-sizes.php';

	include 'inc/theme_support/disable-custom-font-sizes.php';

	include 'inc/theme_support/aligns.php';

	// templates

	include 'inc/templates/page-template.php';

	// filters

	include 'inc/filters/filter-quote.php';

	include 'inc/filters/filter-quote-template.php';

	include 'inc/filters/filter-classic-editor.php';

	include 'inc/filters/filter-blocks.php';

	// ACF Blocks

	include 'inc/acf/acf-blocks.php';

	include 'inc/acf/custom-cats.php';
}


add_action( 'after_setup_theme', 'twentyseventeen_gutenberg' );


include 'inc/cpt.php';


function custom_blocks_scripts(){

	wp_enqueue_style( 'twentyseventeen-custom-blocks', get_theme_file_uri( '/assets/css/custom-blocks.css' ), array(), '1.1' );

}

add_action( 'wp_enqueue_scripts', 'custom_blocks_scripts' );


add_action( 'enqueue_block_editor_assets', 'custom_blocks_scripts' );