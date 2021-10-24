<?php 

if ( ! function_exists( 'xenial_scroll_top_template' ) ) {
	function xenial_scroll_top_template() {
		$displayScrollTop = xenial_get_option( 'enable_scroll_top_button' );

		if ( !$displayScrollTop ) {
			return;
		}

		$templateArgs = array();

		get_template_part( 'template-parts/template', 'scroll-top' );	
	}
}