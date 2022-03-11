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
			wp_enqueue_style( 'xenial-google-font', xenial_google_fonts_url(), NULL, NULL, 'all' );
		}

		wp_enqueue_style( 'themify', $assets_url . 'font/themify-icons/themify-icons.css' );

		wp_enqueue_style( 'xenial-base', $assets_url . 'css/xenial-style.css', NULL, XENIAL_THEME_VERSION, 'all' );

		if ( class_exists( 'WooCommerce' ) ) { 
			wp_enqueue_style( 'xenial-woocommerce', $assets_url . 'css/woocommerce/woocommerce.css', NULL, XENIAL_THEME_VERSION, 'all' );
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

		$dynamic_css = xenial_dynamic_css();

		wp_add_inline_style( 'xenial-base', $dynamic_css );
	}
}



if ( ! function_exists( 'xenial_has_google_fonts' ) ) {
	function xenial_has_google_fonts() {

		return ( xenial_get_google_fonts() ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_google_fonts_url' ) ) {
	function xenial_google_fonts_url() {

		$google_font_url = 'https://fonts.googleapis.com/css2';

		$fonts_url = xenial_get_google_fonts_url();

		if ( $fonts_url ) {

			$google_font_url = add_query_arg( array(
                'family' => implode( '&family=', $fonts_url )
            ), 'https://fonts.googleapis.com/css2' );
		}

		return esc_url( $google_font_url );
	}
}


if ( ! function_exists( 'xenial_get_google_fonts_url' ) ) {
	function xenial_get_google_fonts_url() {

		$google_fonts = xenial_get_google_fonts();

		$google_font_url = []; 

		foreach ( $google_fonts as $google_font ) {

			$font = json_decode( $google_font, true );

			$font_url = '';

			$regular_variants = [];
			$italic_variants = [];

			foreach( $font['regularweight'] as $weight ) {
				if ( strpos($weight, 'italic') !== false ) {
					$italic_variants[] = $weight;
				} else {
					$regular_variants[] = $weight;
				}
			}

			if ( $regular_variants ) {

				$regular_variants_copy = $regular_variants;

				foreach ( $regular_variants_copy as $key => $value ) {
					if ( $value == 'regular' ) {
						$regular_variants[$key] = '400';
					}
				}
			}

			if ( $italic_variants ) {

				$italic_variantss_copy = $italic_variants;

				foreach ( $italic_variantss_copy as $key => $value ) {
					if ( $value == 'italic' ) {
						$italic_variants[$key] = '400';
					} else {
						$value = str_replace( 'italic', '', $value );
						$italic_variants[$key] = $value;
					}
				}
			}


			$regular_variants_count = count( $regular_variants );

			$italic_variants_count = count( $italic_variants );


			if ( 
				$regular_variants_count > 0 && 
				$italic_variants_count == 0  
			) {
				if ( 
					$regular_variants_count == 1 &&
					$regular_variants[0] == '400'
				) {
					$font_url = str_replace( ' ', '+', $font['font'] );
				} else {
					$weights = implode( ';', $regular_variants );
					$font_url = str_replace( ' ', '+', $font['font'] ) . ':wght@' . $weights;
				}
			} else if ( 
				$regular_variants_count == 0 && 
				$italic_variants_count > 0
			) {
				if ( 
					$italic_variants_count == 1 &&
					$italic_variants[0] == '400'
				) {
					$font_url = str_replace( ' ', '+', $font['font'] ) . ':ital@1';
				} else {
					$font_url = str_replace( ' ', '+', $font['font'] ) . ':ital,wght@';
					foreach ( $italic_variants as $key => $value ) {
						$font_url .= '1,' . $value . ( ( $key != array_key_last( $italic_variants ) ) ? ';' : '' );
					}
				}
			} else {
				if ( 
					( $regular_variants_count == 1 && $regular_variants[0] == '400' ) && 
					( $italic_variants_count == 1 && $italic_variants[0] == '400' ) 
				) {
					$font_url = str_replace( ' ', '+', $font['font'] ) . ':ital@0;1';
				} else {
					$font_url = str_replace( ' ', '+', $font['font'] ) . ':ital,wght@';
					foreach ( $regular_variants as $key => $value ) {
						$font_url .= '0,' . $value . ';';
					}
					foreach ( $italic_variants as $key => $value ) {
						$font_url .= '1,' . $value . ( ( $key != array_key_last( $italic_variants ) ) ? ';' : '' );
					}
				}
			}

			$google_font_url[] = $font_url;
		}

		return $google_font_url;
	}
}


if ( ! function_exists( 'xenial_get_google_fonts' ) ) {

	function xenial_get_google_fonts() {

		$fonts = [];

		$body_font_type = xenial_get_option( 'body_font_type' );

        if ( $body_font_type == 'google_font' ) {

            $fonts[] = xenial_get_option( 'body_google_font' );
        }

        $headings_font_type = xenial_get_option( 'headings_font_type' );

        if ( $headings_font_type == 'google_font' ) {

            $fonts[] = xenial_get_option( 'headings_google_font' );
        }

        $logo_font_type = xenial_get_option( 'site_identity_font_type' );

        if ( $logo_font_type == 'google_font' ) {

            $fonts[] = xenial_get_option( 'site_identity_google_font' );
        }

        $fonts = array_unique( $fonts );

        return $fonts;
	}
}






