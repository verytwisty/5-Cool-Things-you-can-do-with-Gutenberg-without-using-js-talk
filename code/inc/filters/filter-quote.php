<?php

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