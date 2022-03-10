<?php

if ( ! function_exists( 'xenial_add_addonify_wishlist_header_element' ) ) {

	function xenial_add_addonify_wishlist_header_element( $header_elements ) {

		if ( 
			! class_exists( 'WooCommerce' ) || 
			! class_exists( 'Addonify_Wishlist' )
		) {
			return $header_elements;
		}

		$header_elements['addonify_wishlist'] = array(
			'section' => 'xenial_header_addonify_wishlist',
            'label' => esc_html__( 'Wishlist', 'xenial' ),
            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>'
		);

		return $header_elements;
	}

	add_filter( 'xenial_desktop_header_elements_filter', 'xenial_add_addonify_wishlist_header_element' );
	add_filter( 'xenial_mobile_header_elements_filter', 'xenial_add_addonify_wishlist_header_element' );
}



if ( ! function_exists( 'xenial_add_addonify_compare_header_element' ) ) {

	function xenial_add_addonify_compare_header_element( $header_elements ) {

		if ( 
			! class_exists( 'WooCommerce' ) || 
			! class_exists( 'Addonify_Compare_Products' )
		) {
			return $header_elements;
		}

		$header_elements['addonify_compare'] = array(
			'section' => 'xenial_header_addonify_compare',
            'label' => esc_html__( 'Compare', 'xenial' ),
            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>'
		);

		return $header_elements;
	}

	add_filter( 'xenial_desktop_header_elements_filter', 'xenial_add_addonify_compare_header_element' );
	add_filter( 'xenial_mobile_header_elements_filter', 'xenial_add_addonify_compare_header_element' );
}



if ( ! function_exists( 'xenial_header_element_addonify_wishlist_template' ) ) {

	function xenial_header_element_addonify_wishlist_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'addonify-wishlist', $template_args );
	}

	add_action( 'xenial_header_element_addonify_wishlist', 'xenial_header_element_addonify_wishlist_template' );
}


if ( ! function_exists( 'xenial_header_element_addonify_compare_template' ) ) {

	function xenial_header_element_addonify_compare_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'addonify-compare', $template_args );
	}

	add_action( 'xenial_header_element_addonify_compare', 'xenial_header_element_addonify_compare_template' );
}