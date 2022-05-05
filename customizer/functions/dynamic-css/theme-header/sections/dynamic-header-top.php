<?php 
/**
 * Dyynamic CSS for header top section.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_top_css' ) ) {

	function xenial_dynamic_header_top_css( $css ) {

		$top_header_top_bottom_padding_desktop = xenial_get_option( 'header_top_section_padding_desktop' );
		$top_header_top_bottom_padding_tablet = xenial_get_option( 'header_top_section_padding_tablet' );
		$top_header_top_bottom_padding_mobile = xenial_get_option( 'header_top_section_padding_mobile' );

		$top_header_background_color = xenial_json_decode( xenial_get_option( 'header_top_section_background_color' ) );

		$top_header_border = xenial_json_decode( xenial_get_option( 'header_top_section_border' ) );

		$css .= '.xe-top-header {';

			if ( $top_header_top_bottom_padding_desktop ) {
				$css .= '
					padding-top: ' . esc_attr( $top_header_top_bottom_padding_desktop ) . 'px;
					padding-bottom: ' . esc_attr( $top_header_top_bottom_padding_desktop ) . 'px;
				';
			}

			if ( $top_header_background_color['desktop']['initial'] ) {
				$css .= '
					background-color: ' . esc_attr( $top_header_background_color['desktop']['initial'] ) . ';
				';
			}

			if ( $top_header_border['desktop'] ) {
				$css .= xenial_dynamic_border_css( $top_header_border['desktop'] );
			}

		$css .= '}';

		// Start of dynamic theme header top for tablet responsive

		$css .= '@media (max-width: 768px) {';

			$css .= '.xe-top-header {';

				if ( $top_header_top_bottom_padding_tablet ) {
					$css .= '
						padding-top: ' . esc_attr( $top_header_top_bottom_padding_tablet ) . 'px;
						padding-bottom: ' . esc_attr( $top_header_top_bottom_padding_tablet ) . 'px;
					';
				}

				if ( $top_header_background_color['tablet']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $top_header_background_color['tablet']['initial'] ) . ';
					';
				}

				if ( $top_header_border['tablet'] ) {
					$css .= xenial_dynamic_border_css( $top_header_border['tablet'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header top for tablet responsive


		// Start of dynamic theme header top for mobile responsive

		$css .= '@media (max-width: 575px) {';

			$css .= '.xe-top-header {';

				if ( $top_header_top_bottom_padding_mobile ) {
					$css .= '
						padding-top: ' . esc_attr( $top_header_top_bottom_padding_mobile ) . 'px;
						padding-bottom: ' . esc_attr( $top_header_top_bottom_padding_mobile ) . 'px;
					';
				}

				if ( $top_header_background_color['mobile']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $top_header_background_color['mobile']['initial'] ) . ';
					';
				}

				if ( $top_header_border['mobile'] ) {
					$css .= xenial_dynamic_border_css( $top_header_border['mobile'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header top for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_top_css' );