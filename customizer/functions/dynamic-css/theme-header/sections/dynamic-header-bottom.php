<?php 
/**
 * Dyynamic CSS for header bottom section.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_bottom_css' ) ) {

	function xenial_dynamic_header_bottom_css( $css ) {

		$bottom_header_top_bottom_padding_desktop = xenial_get_option( 'header_bottom_section_padding_desktop' );
		$bottom_header_top_bottom_padding_tablet = xenial_get_option( 'header_bottom_section_padding_tablet' );
		$bottom_header_top_bottom_padding_mobile = xenial_get_option( 'header_bottom_section_padding_mobile' );

		$bottom_header_background_color = xenial_json_decode( xenial_get_option( 'header_bottom_section_background_color' ) );

		$bottom_header_border = xenial_json_decode( xenial_get_option( 'header_bottom_section_border' ) );

		$css .= '.xe-bottom-header {';

			if ( $bottom_header_top_bottom_padding_desktop ) {
				$css .= '
					padding-top: ' . esc_attr( $bottom_header_top_bottom_padding_desktop ) . 'px;
					padding-bottom: ' . esc_attr( $bottom_header_top_bottom_padding_desktop ) . 'px;
				';
			}

			if ( $bottom_header_background_color['desktop']['initial'] ) {
				$css .= '
					background-color: ' . esc_attr( $bottom_header_background_color['desktop']['initial'] ) . ';
				';
			}

			if ( $bottom_header_border['desktop'] ) {
				$css .= xenial_dynamic_border_css( $bottom_header_border['desktop'] );
			}

		$css .= '}';

		// Start of dynamic theme header bottom for tablet responsive

		$css .= '@media screen and (max-width: 768px) {';

			$css .= '.xe-bottom-header {';

				if ( $bottom_header_top_bottom_padding_tablet ) {
					$css .= '
						padding-top: ' . esc_attr( $bottom_header_top_bottom_padding_tablet ) . 'px;
						padding-bottom: ' . esc_attr( $bottom_header_top_bottom_padding_tablet ) . 'px;
					';
				}

				if ( $bottom_header_background_color['tablet']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $bottom_header_background_color['tablet']['initial'] ) . ';
					';
				}

				if ( $bottom_header_border['tablet'] ) {
					$css .= xenial_dynamic_border_css( $bottom_header_border['tablet'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header bottom for tablet responsive


		// Start of dynamic theme header bottom for mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			$css .= '.xe-bottom-header {';

				if ( $bottom_header_top_bottom_padding_mobile ) {
					$css .= '
						padding-top: ' . esc_attr( $bottom_header_top_bottom_padding_mobile ) . 'px;
						padding-bottom: ' . esc_attr( $bottom_header_top_bottom_padding_mobile ) . 'px;
					';
				}

				if ( $bottom_header_background_color['mobile']['initial'] ) {
					$css .= '
						background-color: ' . esc_attr( $bottom_header_background_color['mobile']['initial'] ) . ';
					';
				}

				if ( $bottom_header_border['mobile'] ) {
					$css .= xenial_dynamic_border_css( $bottom_header_border['mobile'] );
				}

			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header bottom for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_bottom_css' );