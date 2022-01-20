<?php

if ( ! function_exists( 'xenial_is_theme_header_active' ) ) {

	function xenial_is_theme_header_active() {

		if ( is_single() && get_post_type() == 'post' ) {

			return xenial_is_theme_header_active_on_post();
		}

		if ( is_page() ) {

			return xenial_is_theme_header_active_on_page();
		}

		$enable_theme_header = true;

		$enable_theme_header = ( xenial_get_option( 'disable_theme_header' ) == false ) ? true : false;

		return $enable_theme_header;
	}
}


if ( ! function_exists( 'xenial_is_theme_header_active_on_page' ) ) {

	function xenial_is_theme_header_active_on_page() {

		$enable_theme_header = true;

		$header_display_meta = get_post_meta( get_the_ID(), 'xenial_theme_header_display', true );

		if ( $header_display_meta ) {
			switch ( $header_display_meta ) {
				case 'default' :
					$enable_theme_header = ( xenial_get_option( 'disable_theme_header' ) == true ) ? false : true;
					break;
				default :
					$enable_theme_header = ( $header_display_meta == 'enable' ) ? true : false;
					break;
			}
		} else {
			$enable_theme_header = xenial_get_option( 'disable_theme_header' );
		}

		return $enable_theme_header;
	}
}

if ( ! function_exists( 'xenial_is_theme_header_active_on_post' ) ) {

	function xenial_is_theme_header_active_on_post() {

		$enable_theme_header = true;

		$header_display_meta = get_post_meta( get_the_ID(), 'xenial_theme_header_display', true );

		if ( $header_display_meta ) {
			switch ( $header_display_meta ) {
				case 'default' :
					$enable_theme_header = ( xenial_get_option( 'disable_theme_header' ) == true ) ? false : true;
					break;
				default :
					$enable_theme_header = ( $header_display_meta == 'enable' ) ? true : false;
					break;
			}
		} else {
			$enable_theme_header = xenial_get_option( 'disable_theme_header' );
		}

		return $enable_theme_header;
	}
}


if ( ! function_exists( 'xenial_get_theme_header_row_elements' ) ) {

	function xenial_get_theme_header_row_elements( $device, $row  ) {

		$header_elements = xenial_json_decode( xenial_get_option( 'theme_header_elements' ) );

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



if ( ! function_exists( 'xenial_get_header_section_args' ) ) {

	function xenial_get_header_section_args( $row_elements ) {

		$return_data = array(
			'display-section' => false,
			'col-container-classes' => array( 'xe-flex', 'xe-grid', 'xe-flex-center' )
 		);

 		$is_left_col_active = ( ! empty( $row_elements['left'] ) ) ? true : false;

		$is_middle_col_active = ( ! empty( $row_elements['middle'] ) ) ? true : false;

		$is_right_col_active = ( ! empty( $row_elements['right'] ) ) ? true : false;

		if ( 
			$is_left_col_active == true && 
			$is_middle_col_active == true && 
			$is_right_col_active == true ) {

			$return_data['display-section'] = true;
			$return_data['col-container-classes'][] = 'xe-grid-columns-three';
		} else {

			if (
				( 
					$is_left_col_active == true &&
					$is_middle_col_active == false &&
					$is_right_col_active == false 
				) || (
					$is_left_col_active == false &&
					$is_middle_col_active == true &&
					$is_right_col_active == false 
				) || (
					$is_left_col_active == false &&
					$is_middle_col_active == false &&
					$is_right_col_active == true 
				)
			) {
				$return_data['display-section'] = true;
				$return_data['col-container-classes'][] = 'xe-grid-columns-one';
			} elseif (
				( 
					$is_left_col_active == false &&
					$is_middle_col_active == true &&
					$is_right_col_active == true 
				) || (
					$is_left_col_active == true &&
					$is_middle_col_active == false &&
					$is_right_col_active == true 
				) || (
					$is_left_col_active == true &&
					$is_middle_col_active == true &&
					$is_right_col_active == false 
				)
			) {
				$return_data['display-section'] = true;
				$return_data['col-container-classes'][] = 'xe-grid-columns-two';
			} else {
				$return_data['display-section'] = false;
			}
		}

		return $return_data;
	}
}