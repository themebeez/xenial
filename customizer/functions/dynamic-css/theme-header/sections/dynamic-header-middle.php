<?php 
/**
 * Dyynamic CSS for header middle section.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_middle_css' ) ) {

	function xenial_dynamic_header_middle_css( $css ) {

		$middle_header_height_desktop = xenial_get_option( 'header_middle_section_min_width_desktop' );
		$middle_header_height_tablet = xenial_get_option( 'header_middle_section_min_width_tablet' );
		$middle_header_height_mobile = xenial_get_option( 'header_middle_section_min_width_mobile' );

		$middle_header_background_color = xenial_json_decode( xenial_get_option( 'header_middle_section_background_color' ) );

		$middle_header_border = xenial_json_decode( xenial_get_option( 'header_middle_section_border' ) );

		$css .= '.xe-middle-header {';

			if ( $middle_header_height_desktop ) {
				$css .= '
					min-height: ' . esc_attr( $middle_header_height_desktop ) . 'px;
				';
			}

			if ( $middle_header_background_color['desktop']['initial'] ) {
				$css .= '
					background-color: ' . esc_attr( $middle_header_background_color['desktop']['initial'] ) . ';
				';
			}

			if ( $middle_header_border['desktop'] ) {
				$css .= xenial_dynamic_border_css( $middle_header_border['desktop'] );
			}

		$css .= '}';

		// Start of dynamic theme header bottom for tablet responsive

		$css .= '@media screen and (max-width: 768px) {';

			$css .= '.xe-middle-header {';

				if ( $middle_header_height_tablet ) {
					$css .= '
						min-height: ' . esc_attr( $middle_header_height_tablet ) . 'px;
					';
				}

				if ( $middle_header_background_color['tablet']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $middle_header_background_color['tablet']['initial'] ) . ';
					';
				}

				if ( $middle_header_border['tablet'] ) {
					$css .= xenial_dynamic_border_css( $middle_header_border['tablet'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header bottom for tablet responsive


		// Start of dynamic theme header bottom for mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			$css .= '.xe-middle-header {';

				if ( $middle_header_height_mobile ) {
					$css .= '
						min-height: ' . esc_attr( $middle_header_height_mobile ) . 'px;
					';
				}

				if ( $middle_header_background_color['mobile']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $middle_header_background_color['mobile']['initial'] ) . ';
					';
				}

				if ( $middle_header_border['mobile'] ) {
					$css .= xenial_dynamic_border_css( $middle_header_border['mobile'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header bottom for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_middle_css' );