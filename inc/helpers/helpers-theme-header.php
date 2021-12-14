<?php


if ( ! function_exists( 'xenial_get_theme_header_row_elements' ) ) {

	function xenial_get_theme_header_row_elements( $device, $row  ) {

		$header_elements = xenial_get_option( 'theme_header_elements' );

		$header_elements = json_decode( $header_elements, true );

		return $header_elements[$device][$row];
	}
}


if ( ! function_exists( 'xenial_is_header_row_active' ) ) {

	function xenial_is_header_row_active( $device, $row ) {

		$row_elements = xenial_get_theme_header_row_elements( $device, $row );

		return ( $row_elements['left'] || $row_elements['middle'] || $row_elements['right'] ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_is_offcanvas_section_active' ) ) {

	function xenial_is_offcanvas_section_active() {

		$offcanvas_elements = xenial_get_theme_header_row_elements( 'mobile', 'offcanvas' );

		return ( $offcanvas_elements ) ? true : false;
	}
}