<?php

if ( ! function_exists( 'xenial_is_theme_header_active' ) ) {

	function xenial_is_theme_header_active() {

		if ( 
			is_single() && 
			get_post_type() == 'post' 
		) {

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



if ( ! function_exists( 'xenial_is_transparent_header_active' ) ) {

	function xenial_is_transparent_header_active() {

		if ( ! xenial_is_theme_header_active() ) {
			return false;
		}

		$t_header_enabled_pages = xenial_get_option( 'enable_transparent_header_on_pages' );

		if ( 
			is_home() && 
			xenial_is_transparent_header_active_on_blog( $t_header_enabled_pages ) 
		) {
			return true;
		}

		if ( 
			is_archive() && 
			xenial_is_transparent_header_active_on_archive( $t_header_enabled_pages ) 
		) {
			return true;
		}

		if ( 
			is_search() && 
			xenial_is_transparent_header_active_on_search( $t_header_enabled_pages ) 
		) {
			return true;
		}

		if ( 
			is_single() && 
			xenial_is_transparent_header_active_on_post( $t_header_enabled_pages ) 
		) {
			return true;
		}

		if ( 
			is_page() && 
			xenial_is_transparent_header_active_on_page( $t_header_enabled_pages ) 
		) {
			return true;	
		}

		if ( 
			is_404() && 
			xenial_is_transparent_header_active_on_404( $t_header_enabled_pages ) 
		) {
			return true;
		}

		return false;
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



if ( ! function_exists( 'xenial_is_transparent_header_active_on_blog' ) ) {

	function xenial_is_transparent_header_active_on_blog( $enabled_pages ) {

		$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

		return ( in_array( 'blog', $enabled_pages ) && $t_header_enabled == true ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_is_transparent_header_active_on_archive' ) ) {

	function xenial_is_transparent_header_active_on_archive( $enabled_pages ) {

		$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

		return ( in_array( 'archive', $enabled_pages ) && $t_header_enabled == true ) ? true : false;
	}
}

if ( ! function_exists( 'xenial_is_transparent_header_active_on_search' ) ) {

	function xenial_is_transparent_header_active_on_search( $enabled_pages ) {

		$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

		return ( in_array( 'search', $enabled_pages ) && $t_header_enabled == true ) ? true : false;
	}
}

if ( ! function_exists( 'xenial_is_transparent_header_active_on_post' ) ) {

	function xenial_is_transparent_header_active_on_post( $enabled_pages ) {

		$t_header_meta_value = get_post_meta( get_the_ID(), 'xenial_transparent_header_display', true );

		if ( $t_header_meta_value == 'default' || $t_header_meta_value == '' ) {

			$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

			return ( $t_header_enabled == true && in_array( 'post', $enabled_pages ) ) ? true : false;
		} else {

			return ( $t_header_meta_value == 'enable' ) ? true : false;
		}
	}
}


if ( ! function_exists( 'xenial_is_transparent_header_active_on_page' ) ) {

	function xenial_is_transparent_header_active_on_page( $enabled_pages ) {

		$t_header_meta_value = get_post_meta( get_the_ID(), 'xenial_transparent_header_display', true );

		if ( $t_header_meta_value == 'default' || $t_header_meta_value == '' ) {

			$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

			return ( $t_header_enabled == true && in_array( 'page', $enabled_pages ) ) ? true : false;
		} else {

			return ( $t_header_meta_value == 'enable' ) ? true : false;
		}
	}
}

if ( ! function_exists( 'xenial_is_transparent_header_active_on_404' ) ) {

	function xenial_is_transparent_header_active_on_404( $enabled_pages ) {

		$t_header_enabled = xenial_get_option( 'enable_transparent_header' );

		return ( in_array( 'page_404', $enabled_pages ) && $t_header_enabled == true ) ? true : false;
	}
}




if ( ! function_exists( 'xenial_theme_header_has_element' ) ) {

	function xenial_theme_header_has_element( $device, $element ) {

		if ( xenial_is_header_row_active( 'desktop', 'top' ) ) {

		}

		if ( xenial_is_header_row_active( 'desktop', 'middle' ) ) {
			
		}
	}
}