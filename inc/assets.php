<?php 
if ( ! function_exists( 'xenial_enqueue_scripts' ) ) {

	function xenial_enqueue_scripts() {

		$assets_url = get_template_directory_uri() . '/assets/build/';

		wp_enqueue_script( 'xenial-bundle', $assets_url . 'js/xenial-script.min.js', NULL, XENIAL_THEME_VERSION, true );

		if ( class_exists( 'Easy_Digital_Downloads' ) ) {

			wp_enqueue_script( 'xenial-edd-script', $assets_url . 'js/compatibility/edd.min.js', NULL, XENIAL_THEME_VERSION, true );

			wp_localize_script( 'xenial-edd-script', 'xenial_edd_script', array(
				'ajax_url' => esc_url( admin_url( 'admin-ajax.php' ) ),
				'nonce' => wp_create_nonce( 'xenial_edd_cart_item_remove' )
			) );
		}

		if ( class_exists( 'WooCommerce' ) ) {

			wp_enqueue_script( 'xenial-woocommerce-script', $assets_url . 'js/compatibility/woocommerce.min.js', NULL, XENIAL_THEME_VERSION, true );

			wp_enqueue_script( 'xenial-woocommerce-ajax-script', $assets_url . 'js/compatibility/woocommerce-jquery.min.js', array('jquery'), XENIAL_THEME_VERSION, true );

			$woocommerce_localize_data = array(
				'ajax_url' => esc_url( admin_url( 'admin-ajax.php' ) ),
				'nonce' => wp_create_nonce( 'xenial_woo_ajax_nonce' ),
				'added_to_cart' => 'xenial_woo_added_to_cart',
				'get_wishlist_count' => 'xenial_get_wishlist_count',
			);

			if ( class_exists( 'Addonify_Wishlist' ) ) {
				$woocommerce_localize_data['addonify_active_wishlist_btn_label'] = addonify_wishlist_get_button_label( false );
				$woocommerce_localize_data['addonify_inactive_wishlist_btn_label'] = addonify_wishlist_get_button_label( true );
			}

			wp_localize_script( 'xenial-woocommerce-ajax-script', 'xenialWooScriptData', $woocommerce_localize_data );
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

			wp_enqueue_script( 'comment-reply' );
		}
	}
}


if ( ! function_exists( 'xenial_enqueue_styles' ) ) {
	
	function xenial_enqueue_styles() {

		wp_enqueue_style( 'xenial-style', get_template_directory_uri() . '/style.css' );

		$assets_url = get_template_directory_uri() . '/assets/build/';

		if ( xenial_has_google_fonts() ) {

			wp_enqueue_style( // phpcs:ignore
				'xenial-google-font',
				xenial_get_google_fonts_url(),
				array(),
				null,
				'all'
			);
		}

		wp_enqueue_style( 'themify', $assets_url . 'font/themify-icons/themify-icons.css' );

		wp_enqueue_style( 'xenial-base', $assets_url . 'css/xenial-style.css', NULL, XENIAL_THEME_VERSION, 'all' );

		$dynamic_css = xenial_dynamic_css();

		wp_add_inline_style( 'xenial-base', $dynamic_css );

		if ( class_exists( 'WooCommerce' ) ) { 
			wp_enqueue_style( 'xenial-woocommerce', $assets_url . 'css/woocommerce/woocommerce.css', NULL, XENIAL_THEME_VERSION, 'all' );

			$dynamic_woo_css = xenial_dynamic_woo_css();

			wp_add_inline_style( 'xenial-woocommerce', $dynamic_woo_css );
		}

		if ( defined( 'PMPRO_VERSION' ) ) {
			wp_enqueue_style( 'xenial-paid-membership-pro', $assets_url . 'css/compatibility/pmpro/pmpro.css', NULL, XENIAL_THEME_VERSION, 'all' );
		}

		if ( class_exists( 'bbPress' ) ) {
			wp_enqueue_style( 'xenial-bbpress', $assets_url . 'css/compatibility/bbpress/bbpress.css', NULL, XENIAL_THEME_VERSION, 'all' );
		}

		if ( class_exists( 'WeDevs_Dokan' ) ) {
			wp_enqueue_style( 'xenial-dokan', $assets_url . 'css/compatibility/dokan/dokan.css', NULL, XENIAL_THEME_VERSION, 'all' );
		}

		if ( class_exists( 'Easy_Digital_Downloads' ) ) {
			wp_enqueue_style( 'xenial-edd', $assets_url . 'css/compatibility/edd/edd.css', NULL, XENIAL_THEME_VERSION, 'all' );
		}

		if ( class_exists( 'Yatra' ) ) {
			wp_enqueue_style( 'xenial-yatra', $assets_url . 'css/compatibility/yatra/yatra.css', NULL, XENIAL_THEME_VERSION, 'all' );
		}
	}
}

if ( ! function_exists( 'xenial_has_google_fonts' ) ) {
	/**
	 * Checks if Google font is used.
	 *
	 * @since 1.0.3
	 */
	function xenial_has_google_fonts() {

		$body_typography = xenial_get_option( 'body_typography' );
		$body_typography = json_decode( $body_typography, true );

		$headings_typography = xenial_get_option( 'headings_typography' );
		$headings_typography = json_decode( $headings_typography, true );

		return ( 'google' === $body_typography['source'] || 'google' === $headings_typography['source'] ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_google_fonts_urls' ) ) {
	/**
	 * Returns the array of Google fonts URL.
	 *
	 * @since 1.0.3
	 *
	 * @return array $fonts_urls Fonts URLs.
	 */
	function xenial_google_fonts_urls() {

		if ( ! xenial_has_google_fonts() ) {
			return false;
		}

		$fonts_urls = array();

		$body_typography = xenial_get_option( 'body_typography' );
		$body_typography = json_decode( $body_typography, true );

		if ( 'google' === $body_typography['source'] ) {
			$fonts_urls[] = $body_typography['font_url'];
		}

		$headings_typography = xenial_get_option( 'headings_typography' );
		$headings_typography = json_decode( $headings_typography, true );

		if ( 'google' === $headings_typography['source'] ) {
			$fonts_urls[] = $headings_typography['font_url'];
		}

		return $fonts_urls;
	}
}


if ( ! function_exists( 'xenial_render_google_fonts_header' ) ) {
	/**
	 * Renders <link> tags for Google fonts embedd in the <head> tag.
	 *
	 * @since 1.0.3
	 */
	function xenial_render_google_fonts_header() {

		if ( ! xenial_has_google_fonts() ) {
			return;
		}
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<?php
	}

	add_action( 'wp_head', 'xenial_render_google_fonts_header', 5 );
}


if ( ! function_exists( 'xenial_get_google_fonts_url' ) ) {
	/**
	 * Returns the URL of Google fonts.
	 *
	 * @since 1.0.3
	 *
	 * @return string $google_fonts_url Google Fonts URL.
	 */
	function xenial_get_google_fonts_url() {

		$google_fonts_urls = xenial_google_fonts_urls();

		if ( empty( $google_fonts_urls ) ) {

			return false;
		}

		$google_fonts_url = add_query_arg(
			array(
				'family'  => implode( '&family=', $google_fonts_urls ),
				'display' => 'swap',
			),
			'https://fonts.googleapis.com/css2'
		);

		return esc_url( $google_fonts_url );
	}
}
