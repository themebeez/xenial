<?php 

if ( ! function_exists( 'xenial_post_header_has_breadcrumbs_enabled' ) ) {

	function xenial_post_header_has_breadcrumbs_enabled() {

		$display_breadcrumbs = false;

		$display_breadcrumbs_meta = get_post_meta( get_the_ID(), 'xenial_breadcrumbs_display', true );

		if ( $display_breadcrumbs_meta ) {
			switch ( $display_breadcrumbs_meta ) {
				case 'default' :
					$display_breadcrumbs = xenial_get_option( 'post_single_display_breadcrumbs' );
					break;
				default :
					$display_breadcrumbs = ( $display_breadcrumbs_meta == 'enable' ) ? true : false;
					break;
			}
		} else {
			$display_breadcrumbs = xenial_get_option( 'post_single_display_breadcrumbs' );
		}

		return $display_breadcrumbs;
	}
}


if ( ! function_exists( 'xenial_post_has_featured_image_enabled' ) ) {

	function xenial_post_has_featured_image_enabled() {

		$display_featured_image = true;

		$display_featured_image_meta = get_post_meta( get_the_ID(), 'xenial_post_featured_image_display', true );

		if ( $display_featured_image_meta ) {
			switch ( $display_featured_image_meta ) {
				case 'default' :
					$post_content = xenial_get_option( 'post_single_content_elements' );
					$display_featured_image = ( $post_content && in_array( 'image', $post_content ) ) ? true : false;
					break;
				default :
					$display_featured_image = ( $display_featured_image_meta == 'enable' ) ? true : false;
					break;
			}
		} else {
			$post_content = xenial_get_option( 'post_single_content_elements' );
			$display_featured_image = ( $post_content && in_array( 'image', $post_content ) ) ? true : false;
		}

		return $display_featured_image;
	}
}