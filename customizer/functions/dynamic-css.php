<?php

/**
 * Function to load dynamic styles.
 *
 * @since  1.0.0
 * @access public
 * @return null
 */
if ( ! function_exists( 'xenial_dynamic_css' ) ) {

	function xenial_dynamic_css() {

        $customizer_defaults = xenial_get_customizer_defaults();

		$css = '';
		
        $css .= xenial_dynamic_typo_css();

        $css .= xenial_dynamic_color_css();

        $css .= xenial_dynamic_sidebar_css();

		// End styles for mobile devices

		// Allow CSS to be filtered.
		$css = apply_filters( 'xenial_dynamic_css', $css ); 

		// Minify the CSS code.
		$css = xenial_minify_css( $css );

		return $css;
	}
}

/**
 * Simple minification of CSS codes.
 *
 * @since    2.0.8
 */
if ( ! function_exists( 'xenial_minify_css' ) ) {

	function xenial_minify_css( $css ) {
		$css = preg_replace( '/\s+/', ' ', $css );
		$css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
		$css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
		$css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
		$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
		$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );

		return trim( $css );
	}
}





if ( ! function_exists( 'xenial_px_to_rem' ) ) {

	function xenial_px_to_rem( $px ) {

		return ( 1/16 * $px );
	}
}