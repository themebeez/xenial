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


	if ( is_single() && xenial_get_option( 'post_single_show_toggle_comments_btn' ) ) {
		$classes[] = 'xe-comment-toggle-btn-enabled';
	}

	$classes[] = ( xenial_is_transparent_header_active() ) ? 'xe-transparent-header-enabled' : '';

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

if ( ! function_exists( 'xenial_get_text_align_class' ) ) {

	function xenial_get_text_align_class( $align ) {

		if ( ! $align ) {
			return;
		}

		$class = '';

		switch ( $align ) {
			case 'left' :
				$class = 'text-align-left';
				break;
			case 'center' :
				$class = 'text-align-center';
				break;
			case 'right' :
				$class = 'text-align-right';
				break;
			default :
				break;
		}

		return $class;
	}
}  

if ( ! function_exists( 'xenial_primary_menu_items_wrap' ) ) {

	function xenial_primary_menu_items_wrap() {

		$dropdown_animation = ( xenial_get_option( 'primary_menu_dropdown_reveal_effect' ) != 'none' ) ? xenial_get_option( 'primary_menu_dropdown_reveal_effect' ) : 'FadeIn'; // Available options: None, FadeIn, FadeInUp & FadeInDown
		
		return '<nav class="xe-site-navigation" xe-dropdown-animation="' . esc_attr( $dropdown_animation ) . '"><ul id="%1$s" class="%2$s">%3$s</ul></nav>';
	}
}


if ( ! function_exists( 'xenial_woo_dropdown_menu_items_wrap' ) ) {

	function xenial_woo_dropdown_menu_items_wrap() {

		$dropdown_toggle_animation = ( xenial_get_option( 'header_ele_woo_dropdown_toggle_animation' ) != 'none' ) ? xenial_get_option( 'header_ele_woo_dropdown_toggle_animation' ) : 'FadeInDown'; // Available options: None, FadeIn, FadeInUp & FadeInDown
		$dropdown_toggle_direction = xenial_get_option( 'header_ele_woo_dropdown_toggle_direction' );

		return '<ul id="%1$s" class="xe-woo-vertical-menu %2$s" xe-woo-navigation-dropdown-direction="' . esc_attr( $dropdown_toggle_direction ) .'" xe-woo-navigation-dropdown-animation="' . esc_attr( $dropdown_toggle_animation ) . '">%3$s</ul>';
	}
}