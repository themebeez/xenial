<?php 


if ( ! function_exists( 'xenial_get_yith_wishlist_customize_defaults' ) ) {

	function xenial_get_yith_wishlist_customize_defaults() {

		return apply_filters(
			'xenial_yith_wishlist_customize_defaults_filter',
			array(
				'main_header_display_wishlist_items_no' => false,
                'main_header_wishlist_visibility' => 'default'
			)
		);
	}
}