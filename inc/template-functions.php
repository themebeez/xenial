<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Xenial
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function xenial_pingback_header() {

	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'xenial_pingback_header' );



function xenial_google_fonts_header() {

	if ( xenial_has_google_fonts() ) {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<?php
	}

}
add_action( 'wp_head', 'xenial_google_fonts_header', 5 );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function xenial_body_classes( $classes ) {	

	// Adds class name 'hfeed' to non-singular pages.
	$classes[] = 'hfeed';

	if ( xenial_has_sidebar() ) {
		$sidebar_position = xenial_get_sidebar_position();

		$classes[] = ( $sidebar_position == 'left-sidebar' ) ? 'xe-sidebar-position-left' : 'xe-sidebar-position-right';
	} else {
		$classes[] = 'xe-has-no-sidebar';
	}

	$siteLayout = xenial_get_option( 'site_layout' );

	$classes[] = ( $siteLayout == 'default' ) ? 'xe-site-layout-default' : 'xe-site-layout-boxed';

	return $classes;
}
add_filter( 'body_class', 'xenial_body_classes' );


if( ! function_exists( 'xenial_post_classes' ) ) {
	/**
	 * Adds custom classes to the array of post classes.
	 *
	 * @param array $classes Classes for the article element.
	 * @return array
	 */
	function xenial_post_classes( $classes ) {

		if ( is_singular() ) {
			$classes[] = 'xe-article';
		}		

		return $classes;
	}
}
add_filter( 'post_class', 'xenial_post_classes' );


if ( ! function_exists( 'xenial_get_thumbnail_size_array' ) ) {

	function xenial_get_thumbnail_size_array( $default_thumbnail_size, $thumbnail_size ) {

		if ( $thumbnail_size ) {
			$dimensions = explode( 'x', $thumbnail_size );
			if ( is_array( $dimensions ) && count( $dimensions ) > 1 ) {
				$int_array = array();
				foreach ($dimensions  as $value) {
					$int_array[] = (int) $value;
				}
				$default_thumbnail_size = $int_array;
			}
		}

		return $default_thumbnail_size;
	}
}