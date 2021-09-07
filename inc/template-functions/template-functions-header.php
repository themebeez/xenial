<?php


if ( ! function_exists( 'xenial_header_template' ) ) {

	function xenial_header_template() {

		if ( is_single() ) {

			$is_default_header_disabled = get_post_meta( get_the_ID(), 'xenial_post_disable_default_header', true );

			if ( $is_default_header_disabled ) {
				return;
			}
			
			
		}

		if ( is_page() ) {

			$is_default_header_disabled = get_post_meta( get_the_ID(), 'xenial_post_disable_default_header', true );

			if ( $is_default_header_disabled ) {
				return;
			}
		}
	

		get_template_part( 'template-parts/header/base' );
	}
}
add_action( 'xenial_header', 'xenial_header_template' );