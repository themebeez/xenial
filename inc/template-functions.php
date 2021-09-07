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

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function xenial_body_classes( $classes ) {	

	// If transparent header is enabled, adds class name 'xenial-transparent-header-enabled'. Else, adds class name 'xenial-transparent-header-disabled'.
	$classes[] = xenial_is_transparent_header_activated() ? 'xenial-transparent-header-enabled' : 'xenial-transparent-header-disabled';

	// If dark mode switcher is enabled, adds class name 'xenial-dark-mode-switcher-enabled'. Else, adds class name 'xenial-dark-mode-switcher-disabled'.
	$classes[] = ( xenial_get_option( 'theme_skin' ) !== 'xenial-theme-dark' && xenial_get_option('display_dark_mode_toggle_button') === true ) ? 'xenial-dark-mode-switcher-enabled' : 'xenial-dark-mode-switcher-disabled';

	// If breadcrumb is enabled, adds class name 'xenial-breadcrumbs-enabled'. Else, adds class name 'xenial-breadcrumbs-disabled'.
	$classes[] = xenial_is_breadcrumbs_activated() ? 'xenial-breadcrumbs-enabled' : 'xenial-breadcrumbs-disabled';

	// If page header is enabled, adds class name 'xenial-page-header-enabled'. Else, adds class name 'xenial-page-header-disabled'.
	$classes[] = xenial_is_page_header_activated() ? 'xenial-page-header-enabled' : 'xenial-page-header-disabled';

	// If scroll top button is enabled, adds class name 'xenial-scroll-top-btn-enabled'.
	$classes[] = xenial_get_option( 'enable_scroll_top_button' ) ? 'xenial-scroll-top-btn-enabled' : '';

	// If banner/slider is enabled, adds class name 'xenial-page-header-enabled'.
	$classes[] = xenial_is_banner_activated() ? 'xenial-banner-slider-enabled' : '';

	// If sticky main navigation menu is enabled, adds class name 'xenial-sticky-main-navigation-enabled'.
	$classes[] = xenial_get_option( 'main_navigation_enable_sticky' ) ? 'xenial-sticky-main-navigation-enabled' : '';

	// Check for archive pages excluding WooCommerce pages.
	if ( ( is_home() || is_archive() || is_search() ) && ! xenial_is_woocommerce_page() ) {

		// Get layout used for archive pages.
		$archive_layout = xenial_get_option( 'archive_layout' );

		// Adds class with respective archive layout for archive pages.
		$classes[] = 'xenial-archive-layout-' . $archive_layout;

		// Adds class of 'xenial-content-width', if width of archive page is same as of the container.
		$classes[] =  xenial_get_option( 'archive_content_width' ) ? xenial_get_option( 'archive_content_width' ) : '';
	}

	// If sidebar is active, adds class name 'xenial-has-sidebar'. Else adds class name 'xenial-has-no-sidebar'.
	$classes[] = xenial_is_sidebar_active() ? 'xenial-has-sidebar' : 'xenial-has-no-sidebar';


	// Checks if sidebar is active.
	if ( xenial_is_sidebar_active() ) {

		// Gets sidebar position.
		$sidebar_position = xenial_get_sidebar_position();

		// Adds class names 'xenial-has-left-sidebar' and  'xenial-has-right-sidebar' for sidebar positioned left and right respectively. 
		if ( $sidebar_position == 'left-sidebar' ) {
			$classes[] = 'xenial-has-left-sidebar';
		}

		if ( $sidebar_position == 'right-sidebar' ) {
			$classes[] = 'xenial-has-right-sidebar';
		}

		// If sticky sidebar is enabled, adds class name 'xenial-sticky-sidebar-enabled'.
		$classes[] = xenial_get_option( 'enable_sticky_sidebar' ) ? 'xenial-sticky-sidebar-enabled' : '';

		// Gets sidebar position in mobile devices.
		$sidebar_responsive_position = xenial_get_option( 'sidebar_responsive_position' );

		switch ( $sidebar_responsive_position ) {
			case 'hide' :
				// If sidebar position is hidden in mobile devices, adds class name 'xenial-sidebar-responsive-hidden'.
				$classes[] = 'xenial-sidebar-responsive-hidden';
				break;
			case 'before' :
				// If sidebar position is before the content in mobile devices, adds class name 'xenial-sidebar-before-content'.
				$classes[] = 'xenial-sidebar-before-content';
				break;
			default:
				// If sidebar position is after the content in mobile devices, adds class name 'xenial-sidebar-before-content'.
				$classes[] = 'xenial-sidebar-after-content';
		}
	}

	// Check for no-singular pages.
	if ( ! is_singular() ) {
		// Adds a class of 'hfeed' to non-singular pages.
		$classes[] = 'hfeed';
	}

	// Gets global layout of the site.
	$site_layout = xenial_get_option( 'site_layout' );

	// Check for post and page single.
	if ( is_singular( 'post' ) || is_singular( 'page' ) ) {
		// If comment toggle button is enabled and button label is present, adds class 'xenial-has-togglable-comments-box'.
		$classes[] = ( xenial_get_option( 'single_show_toggle_comments_btn' ) && xenial_get_option( 'single_comment_toggle_btn_title' ) ) ? 'xenial-has-togglable-comments-box' : '';

		// Gets layout of post or page single.
		$single_layout = get_post_meta( get_the_ID(), 'xenial_post_content_layout', true );

		// Checks if single layout is empty or single layout is set to default.
		if ( ! $single_layout || $single_layout === 'default' ) {
			// Adds class of global site layout.
			$classes[] = $site_layout;
		} else {
			// Adds class of single layout.
			$classes[] = $single_layout;
		}
	} else {
		// Adds class of global site layout.
		$classes[] = $site_layout;
	}

	// Check if page is a singular.
	if ( is_singular() ) {
		// Adds necessary class for the selected page width.
		$classes[] = xenial_get_option( 'single_content_width' );
	} else {
		// Adds class name 'hfeed' to non-singular pages.
		$classes[] = 'hfeed';
	}

	if ( is_singular() ) {
		$classes[] = 'xenial-singular';
	}

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

		// Returns if page is the WooCommerce page.
		if ( xenial_is_woocommerce_page() ) {
			return $classes;
		}

		// Checks for blog page or archive page or search page.
		if ( is_home() || is_archive() || is_search() ) {

			// Gets selected archive layout.
			$layout = xenial_get_option( 'archive_layout' );

			// Adds needed class according to archive layout. 
			$classes[] = 'xenial-' . $layout . '-layout-item';


			// Adds needed class for post thumbnail positioning.
			$classes[] = 'xenial-thumbnail-' . xenial_get_option( 'archive_post_thumbnail_position' );


			// Gets global site layout.
			$site_layout = xenial_get_option( 'site_layout' );

			// Adds needed class if the site layout is 'xenial-boxed-contain'.
			$classes[] = ( $site_layout == 'xenial-boxed-contain' ) ? 'xenial-boxed-' . $layout . '-article' : '';
		}

		// Checks for singular pages.
		if ( is_singular() ) {

			// Adds class 'xenial-single-content-article'.
			$classes[] = 'xenial-single-content-article';
			
			// Gets the alignment of post title.
			$title_alignment = xenial_get_option( 'single_title_header_alignment' );

			switch ( $title_alignment ) {
				case 'left' :
					// Adds class 'xenial-single-title-left' if the title alignment is left.
					$classes[] = 'xenial-single-title-left';
					break;
				case 'center' :
					// Adds class 'xenial-single-title-center' if the title alignment is center.
					$classes[] = 'xenial-single-title-center';
					break;
				default :
					// By default adds class 'xenial-single-title-right'.
					$classes[] = 'xenial-single-title-right';
			}

			// Gets global site layout.
			$site_layout = xenial_get_option( 'site_layout' );

			// Adds class 'xenial-boxed' if the site layout is 'xenial-boxed-contain'.
			$classes[] = ( $site_layout == 'xenial-boxed-contain' ) ? 'xenial-boxed' : '';			
		}

		return $classes;
	}
}
add_filter( 'post_class', 'xenial_post_classes' );


if ( ! function_exists( 'xenial_get_active_theme_skin_data_attr' ) ) {

	function xenial_get_active_theme_skin_data_attr() {

		$theme_skin = xenial_get_option( 'theme_skin' );

		$theme_skin = apply_filters( 'xenial_theme_skin', $theme_skin );

		echo "data-skin='" . esc_attr( $theme_skin ) . "' data-active_skin='" . esc_attr( $theme_skin ) . "'";
	}
}


if ( ! function_exists( 'xenial_media_query_visibility_class' ) ) {

	function xenial_media_query_visibility_class( $visibility ) {

		$visibility_class = '';

		switch ( $visibility ) {
			case 'hide-tablet' :
				$visibility_class = 'xenial-hide-tablet xenial-show-mobile';
				break;
			case 'hide-mobile' :
				$visibility_class = 'xenial-hide-mobile';
				break;
			case 'hide-tablet-mobile' :
				$visibility_class = 'xenial-hide-tablet xenial-hide-mobile';
				break;
			default :
				$visibility_class = 'xenial-show-on-all';
		}

		return $visibility_class;
	}
}



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