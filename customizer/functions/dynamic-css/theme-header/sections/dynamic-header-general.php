<?php 
/**
 * Dyynamic CSS for header general.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_general_css' ) ) {

	function xenial_dynamic_header_general_css( $css ) {

		$header_margin_desktop = array(
			'margin-top' => xenial_get_option( 'header_margin_desktop_top' ),
			'margin-right' => xenial_get_option( 'header_margin_desktop_right' ),
			'margin-bottom' => xenial_get_option( 'header_margin_desktop_bottom' ),
			'margin-left' => xenial_get_option( 'header_margin_desktop_left' )
		);

		$header_margin_tablet = array(
			'margin-top' => xenial_get_option( 'header_margin_tablet_top' ),
			'margin-right' => xenial_get_option( 'header_margin_tablet_right' ),
			'margin-bottom' => xenial_get_option( 'header_margin_tablet_bottom' ),
			'margin-left' => xenial_get_option( 'header_margin_tablet_left' )
		);

		$header_margin_mobile = array(
			'margin-top' => xenial_get_option( 'header_margin_mobile_top' ),
			'margin-right' => xenial_get_option( 'header_margin_mobile_right' ),
			'margin-bottom' => xenial_get_option( 'header_margin_mobile_bottom' ),
			'margin-left' => xenial_get_option( 'header_margin_mobile_left' )
		);


		$header_padding_desktop = array(
			'padding-top' => xenial_get_option( 'header_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_padding_desktop_left' )
		);

		$header_padding_tablet = array(
			'padding-top' => xenial_get_option( 'header_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_padding_tablet_left' )
		);

		$header_padding_mobile = array(
			'padding-top' => xenial_get_option( 'header_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_padding_mobile_left' )
		);


		$header_background_type = xenial_get_option( 'header_background_type' );

		$css .= '#xe-mastheader {';
			if ( $header_margin_desktop ) {
				$css .= xenial_dynamic_spacing_css( $header_margin_desktop );
			}
			if ( $header_padding_desktop ) {
				$css .= xenial_dynamic_spacing_css( $header_padding_desktop );
			}
			if ( $header_background_type ) {
				switch ( $header_background_type ) {
					case 'color' :
						$header_background_color = xenial_get_option( 'header_background_color' ); 
						$header_background_color = xenial_json_decode( $header_background_color ); 
						$css .= '
							background-color: ' . esc_attr( $header_background_color['initial'] ) . ';
						';
						break;
					case 'gradient' :
						$gradient_color_1 = xenial_json_decode( xenial_get_option( 'header_gradient_background_color_1' ) );
						$gradient_color_2 = xenial_json_decode( xenial_get_option( 'header_gradient_background_color_2' ) );
						$background_gradient_values = array(
							'color-1' => $gradient_color_1['initial'],
							'location-1' => xenial_get_option( 'header_gradient_location_1' ),
							'color-2' => $gradient_color_2['initial'],
							'location-2' => xenial_get_option( 'header_gradient_location_2' ),
							'gradient-type' => xenial_get_option( 'header_gradient_type' ),
							'angle' => xenial_get_option( 'header_gradient_linear_angle' ),
						);
						$css .= xenial_dynamic_gradient_css( $background_gradient_values );
						break;
					case 'image' :
						$background_image_values = array(
							'background-image' => esc_url( xenial_get_option( 'header_background_image' ) ),
							'background-repeat' => xenial_get_option( 'header_image_background_repeat' ),
							'background-size' => xenial_get_option( 'header_image_background_size' ),
							'background-position' => xenial_get_option( 'header_image_background_position' ),
							'background-attachment' => xenial_get_option( 'header_image_background_attachment' ),
						);
						$css .= xenial_dynamic_background_image_css( $background_image_values );
						break;
					default :
						break;
				}
			}
		$css .= '}';

		// Start of dynamic theme header general for tablet responsive

		$css .= '@media screen and (max-width: 768px) {';

			$css .= '#xe-mastheader {';
				if ( $header_margin_desktop ) {
					$css .= xenial_dynamic_spacing_css( $header_margin_desktop );
				}
				if ( $header_padding_desktop ) {
					$css .= xenial_dynamic_spacing_css( $header_padding_desktop );
				}
			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header general for tablet responsive


		// Start of dynamic theme header general for mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			$css .= '#xe-mastheader {';
				if ( $header_margin_desktop ) {
					$css .= xenial_dynamic_spacing_css( $header_margin_desktop );
				}
				if ( $header_padding_desktop ) {
					$css .= xenial_dynamic_spacing_css( $header_padding_desktop );
				}
			$css .= '}';

		$css .= '}'; 

		// End of dynamic theme header general for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_general_css' );