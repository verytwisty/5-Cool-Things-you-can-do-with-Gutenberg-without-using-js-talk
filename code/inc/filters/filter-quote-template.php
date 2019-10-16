<?php

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