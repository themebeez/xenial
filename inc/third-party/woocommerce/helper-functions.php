<?php

if ( ! function_exists( 'xenial_is_woocommerce_page' ) ) {

	function xenial_is_woocommerce_page() {

		if ( ! class_exists( 'WooCommerce' ) ) {
			return false;
		}

		return ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_get_woocommerce_sidebar_position' ) ) {

	function xenial_get_woocommerce_sidebar_position() {

		if ( ! is_active_sidebar( 'xenial-woocommerce-sidebar' ) ) {
			return 'no-sidebar';
		}

		$default_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		if ( is_product() ) {

			$product_sidebar_position = xenial_get_option( 'sidebar_woocommerce_product_position' );

			return ( $product_sidebar_position === 'default' ) ? $default_sidebar_position : $product_sidebar_position;
		}

		if ( is_product_category() || is_product_tag() || is_shop() ) {

			$archive_sidebar_position = xenial_get_option( 'sidebar_woocommerce_archive_position' );

			return ( $archive_sidebar_position === 'default' ) ? $default_sidebar_position : $archive_sidebar_position;
		}

		if ( is_cart() || is_checkout() || is_account_page() ) {

			$page_sidebar_position = xenial_get_option( 'sidebar_page_single_position' );

			$page_sidebar_position_meta = get_post_meta( get_the_ID(), 'xenial_post_sidebar_position', true );

			if ( $page_sidebar_position == 'default' && ( $page_sidebar_position_meta == 'default' || $page_sidebar_position_meta == '' ) ) {

				return $default_sidebar_position;
			} else {
				if ( $page_sidebar_position != 'default' && ( $page_sidebar_position_meta == 'default' || $page_sidebar_position_meta == '' ) ) {
					return $page_sidebar_position;
				} else {
					return $page_sidebar_position_meta;
				}
			}
		}

		return 'no-sidebar';
	}
} 