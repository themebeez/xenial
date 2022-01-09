<?php 


if ( ! function_exists( 'xenial_dynamic_header_bottom_css' ) ) {

	function xenial_dynamic_header_bottom_css() {

		$bottom_header_height_desktop = xenial_get_option( 'header_bottom_section_min_width_desktop' );
		$bottom_header_height_tablet = xenial_get_option( 'header_bottom_section_min_width_tablet' );
		$bottom_header_height_mobile = xenial_get_option( 'header_bottom_section_min_width_mobile' );

		$bottom_header_background_color = xenial_json_decode( xenial_get_option( 'header_bottom_section_background_color' ) );

		$bottom_header_border = xenial_json_decode( xenial_get_option( 'header_bottom_section_border' ) );

		$css = '.xe-bottom-header {';

			if ( $bottom_header_height_desktop ) {
				$css .= '
					min-height: ' . esc_attr( $bottom_header_height_desktop ) . 'px;
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

				if ( $bottom_header_height_tablet ) {
					$css .= '
						min-height: ' . esc_attr( $bottom_header_height_tablet ) . 'px;
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

				if ( $bottom_header_height_mobile ) {
					$css .= '
						min-height: ' . esc_attr( $bottom_header_height_mobile ) . 'px;
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