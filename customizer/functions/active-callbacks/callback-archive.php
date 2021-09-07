<?php

/**
 * Checks if archive content's width is narrow width.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_archive_width_a_narrow_width' ) ) {

	function xenial_is_archive_width_a_narrow_width( $control ) {

		$content_width = $control->manager->get_setting( 'archive_content_width' )->value();

		return ( $content_width === 'xenial-narrow-width' ) ? true : false;
	}
}


/**
 * Checks if post thumbnail is enabled to be displayed in archive page.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_post_thumbnail_enabled_in_archive' ) ) {

	function xenial_is_post_thumbnail_enabled_in_archive( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		switch ( $archive_layout ) {

			case 'fullwidth' :

				$fullwidth_content_structure = $control->manager->get_setting( 'archive_fullwidth_post_structure' )->value();

				return ( in_array( 'image', $fullwidth_content_structure ) ) ? true : false;
				break;

			case 'horizontal-list' :

				$display_post_thumbnail = $control->manager->get_setting( 'archive_show_post_thumbnail' )->value();

				return ( $display_post_thumbnail ) ? true : false;
				break;

			default:

				return false;
				break;
		}

		return false;
	}
}


/**
 * Checks if post thumbnail is enabled to be displayed in archive page with horizontal layout.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_post_thumbnail_enabled_in_archive_horizontal_layout' ) ) {

	function xenial_is_post_thumbnail_enabled_in_archive_horizontal_layout( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		$display_post_thumbnail = $control->manager->get_setting( 'archive_show_post_thumbnail' )->value();

		return ( $archive_layout === 'horizontal-list' && $display_post_thumbnail === true ) ? true : false;
	}
}



/**
 * Checks if post meta is enabled to be displayed in archive page.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_post_meta_enabled_in_archive' ) ) {

	function xenial_is_post_meta_enabled_in_archive( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		switch ( $archive_layout ) {

			case 'fullwidth' :

				$fullwidth_post_structure = $control->manager->get_setting( 'archive_fullwidth_post_structure' )->value();

				return ( in_array( 'meta', $fullwidth_post_structure ) ) ? true : false;
				break;

			case 'horizontal-list' :

				$horizontal_post_structure = $control->manager->get_setting( 'archive_horizontal_list_post_structure' )->value();

				return ( in_array( 'meta', $horizontal_post_structure ) ) ? true : false;
				break;

			default:

				return false;
				break;
		}

		return false;
	}
}


/**
 * Checks if post excerpt is enabled to be displayed in archive page.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_post_excerpt_enabled_in_archive' ) ) {

	function xenial_is_post_excerpt_enabled_in_archive( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		switch ( $archive_layout ) {

			case 'fullwidth' :

				$fullwidth_post_structure = $control->manager->get_setting( 'archive_fullwidth_post_structure' )->value();

				return ( in_array( 'excerpt', $fullwidth_post_structure ) ) ? true : false;
				break;

			case 'horizontal-list' :

				$horizontal_post_structure = $control->manager->get_setting( 'archive_horizontal_list_post_structure' )->value();

				return ( in_array( 'excerpt', $horizontal_post_structure ) ) ? true : false;
				break;

			default:

				return false;
				break;
		}

		return false;
	}
}



/**
 * Checks if read more button enabled to be displayed in archive page.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_read_more_enabled_in_archive' ) ) {

	function xenial_is_read_more_enabled_in_archive( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		switch ( $archive_layout ) {

			case 'fullwidth' :

				$fullwidth_post_structure = $control->manager->get_setting( 'archive_fullwidth_post_structure' )->value();

				$is_read_more_button_enabled = $control->manager->get_setting( 'archive_enable_read_more_button' )->value();

				return ( in_array( 'excerpt', $fullwidth_post_structure ) && $is_read_more_button_enabled === true ) ? true : false;
				break;

			case 'horizontal-list' :

				$horizontal_post_structure = $control->manager->get_setting( 'archive_horizontal_list_post_structure' )->value();

				$is_read_more_button_enabled = $control->manager->get_setting( 'archive_enable_read_more_button' )->value();

				return ( in_array( 'excerpt', $horizontal_post_structure ) && $is_read_more_button_enabled === true ) ? true : false;
				break;

			default:

				return false;
				break;
		}

		return false;
	}
}


/**
 * Checks if pagination in archive page set default.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_pagination_set_default_in_archive' ) ) {

	function xenial_is_pagination_set_default_in_archive( $control ) {

		$pagination_type = $control->manager->get_setting( 'archive_pagination_type' )->value();

		return ( $pagination_type === 'default' ) ? true : false;
	}
}


/**
 * Checks if pagination in archive page set numeric.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_pagination_set_numeric_in_archive' ) ) {

	function xenial_is_pagination_set_numeric_in_archive( $control ) {

		$pagination_type = $control->manager->get_setting( 'archive_pagination_type' )->value();

		return ( $pagination_type === 'numeric' ) ? true : false;
	}
}



/**
 * Checks if archive layout is fullwidth.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_archive_layout_fullwidth' ) ) {

	function xenial_is_archive_layout_fullwidth( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		return ( $archive_layout === 'fullwidth' ) ? true : false;
	}
}

/**
 * Checks if archive layout is horizontal.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_archive_layout_horizontal' ) ) {

	function xenial_is_archive_layout_horizontal( $control ) {

		$archive_layout = $control->manager->get_setting( 'archive_layout' )->value();

		return ( $archive_layout === 'horizontal-list' ) ? true : false;
	}
}
