<?php

/**
 * Checks if footer widgets is enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_footer_widgets_enabled' ) ) {

	function xenial_is_footer_widgets_enabled( $control ) {

		$display_footer_widgets = $control->manager->get_setting( 'display_footer_widgets' )->value();

		return ( $display_footer_widgets ) ? true : false;
	}
}


/**
 * Checks if footer widgets column is set to 2.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_footer_widgets_columns_2' ) ) {

	function xenial_is_footer_widgets_columns_2( $control ) {

		$display_footer_widgets = $control->manager->get_setting( 'display_footer_widgets' )->value();

		$widget_columns = $control->manager->get_setting( 'footer_widgets_columns' )->value();

		return ( $display_footer_widgets === true && $widget_columns === '2' ) ? true : false;
	}
}



/**
 * Checks if footer widgets column is set to 3.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_footer_widgets_columns_3' ) ) {

	function xenial_is_footer_widgets_columns_3( $control ) {

		$display_footer_widgets = $control->manager->get_setting( 'display_footer_widgets' )->value();

		$widget_columns = $control->manager->get_setting( 'footer_widgets_columns' )->value();

		return ( $display_footer_widgets === true && $widget_columns === '3' ) ? true : false;
	}
}



/**
 * Checks if footer copyright layout is one.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_footer_copyright_section_layout_one' ) ) {

	function xenial_is_footer_copyright_section_layout_one( $control ) {

		$copyright_layout = $control->manager->get_setting( 'footer_copyright_bar_layout' )->value();

		return ( $copyright_layout === 'variation_1' ) ? true : false;
	}
}



/**
 * Checks if text element is enabled in copyright section.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_text_element_enabled_in_copyright_section' ) ) {

	function xenial_is_text_element_enabled_in_copyright_section( $control ) {

		$element = $control->manager->get_setting( 'footer_copyright_bar_extra_element' )->value();

		return ( $element === 'text' ) ? true : false;
	}
}



/**
 * Checks if nav menu element is enabled in copyright section.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_nav_menu_element_enabled_in_copyright_section' ) ) {

	function xenial_is_nav_menu_element_enabled_in_copyright_section( $control ) {

		$element = $control->manager->get_setting( 'footer_copyright_bar_extra_element' )->value();

		return ( $element === 'nav_menu' ) ? true : false;
	}
}



/**
 * Checks if social links element is enabled in copyright section.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_social_links_element_enabled_in_copyright_section' ) ) {

	function xenial_is_social_links_element_enabled_in_copyright_section( $control ) {

		$element = $control->manager->get_setting( 'footer_copyright_bar_extra_element' )->value();

		return ( $element === 'social_links' ) ? true : false;
	}
}
