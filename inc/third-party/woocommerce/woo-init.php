<?php 
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Xenial
 */


/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
if ( ! function_exists( 'xenial_woocommerce_setup' ) ) {

	function xenial_woocommerce_setup() {

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}

	add_action( 'after_setup_theme', 'xenial_woocommerce_setup' );
}


/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
if ( ! function_exists( 'xenial_woocommerce_scripts' ) ) {

	function xenial_woocommerce_scripts() {

		$font_path   = WC()->plugin_url() . '/assets/fonts/';
		$inline_font = '@font-face {
				font-family: "star";
				src: url("' . $font_path . 'star.eot");
				src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
					url("' . $font_path . 'star.woff") format("woff"),
					url("' . $font_path . 'star.ttf") format("truetype"),
					url("' . $font_path . 'star.svg#star") format("svg");
				font-weight: normal;
				font-style: normal;
			}';

		wp_add_inline_style( 'orchid-store-woocommerce-style', $inline_font );
	}
	// add_action( 'wp_enqueue_scripts', 'xenial_woocommerce_scripts' );
}


$xenial_woocommerce_path = XENIAL_THEME_DIR . '/inc/third-party/woocommerce/';

require $xenial_woocommerce_path . 'customizer.php';

require $xenial_woocommerce_path . 'template-functions.php';

require $xenial_woocommerce_path . 'template-hooks.php';