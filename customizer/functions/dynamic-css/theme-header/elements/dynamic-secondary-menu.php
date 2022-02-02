<?php 
/**
 * Dyynamic CSS for header secondary menu element.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_secondary_menu_css' ) ) {

	function xenial_dynamic_header_secondary_menu_css( $css ) {

		if ( ! xenial_is_header_element_active( 'menu_2' ) ) {
			return $css;
		}

		$header_secondary_menu_font_colors = xenial_json_decode( xenial_get_option( 'header_secondary_menu_link_color' ) );

		$header_secondary_menu_items_spacing_desktop = xenial_get_option( 'header_secondary_menu_items_spacing_desktop' );

		$header_secondary_menu_font_desktop = array(
			'font-size' => xenial_get_option( 'header_secondary_menu_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_desktop' ),
			'font-weight' => xenial_get_option( 'header_secondary_menu_font_weight' ),
			'font-style' => xenial_get_option( 'header_secondary_menu_font_style' ),
			'text-transform' => xenial_get_option( 'header_secondary_menu_text_transform' )
		);

		if ( $header_secondary_menu_items_spacing_desktop ) {
			$css .= '.is-secondary .xe-site-navigation {';
				$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_desktop ) . 'px;';
			$css .= '}';
		}		

		$css .= '.is-secondary .xe-site-navigation ul > li > a {';
			$css .= xenial_dynamic_font_css( $header_secondary_menu_font_desktop );
			if ( $header_secondary_menu_font_colors['desktop']['initial'] ) {
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['desktop']['initial'] ) . ';';
			}			
		$css .= '}';

		if ( $header_secondary_menu_font_colors['desktop']['hover'] ) {
			$css .= '.is-secondary .xe-site-navigation ul > li > a:hover {';
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		$header_secondary_menu_items_spacing_tablet = xenial_get_option( 'header_secondary_menu_items_spacing_tablet' );

		$header_secondary_menu_font_tablet = array(
        	'font-size' => xenial_get_option( 'header_secondary_menu_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_tablet' )
        );

        $css .= '@media screen and (max-width: 768px) {';

        	if ( $header_secondary_menu_items_spacing_tablet ) {
        		$css .= '.is-secondary .xe-site-navigation {';
					$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_tablet ) . 'px;';
				$css .= '}';
			}        	

			$css .= '.is-secondary .xe-site-navigation ul > li > a {';
				$css .= xenial_dynamic_font_css( $header_secondary_menu_font_tablet );
				if ( $header_secondary_menu_font_colors['tablet']['initial'] ) {
					$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['tablet']['initial'] ) . ';';
				}				
			$css .= '}';

			if ( $header_secondary_menu_font_colors['tablet']['hover'] ) {
				$css .= '.is-secondary .xe-site-navigation ul > li > a:hover {';
					$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['tablet']['hover'] ) . ';';
				$css .= '}';
			}			

        $css .= '}';

        $header_secondary_menu_items_spacing_mobile = xenial_get_option( 'header_secondary_menu_items_spacing_mobile' );

        $header_secondary_menu_font_mobile = array(
        	'font-size' => xenial_get_option( 'header_secondary_menu_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_mobile' )
        );

        $css .= '@media screen and (max-width: 576px) {';

        	if ( $header_secondary_menu_items_spacing_mobile ) {
        		$css .= '.is-secondary .xe-site-navigation {';
					$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_mobile ) . 'px;';
				$css .= '}';
			}
        	
			$css .= '.is-secondary .xe-site-navigation ul > li > a {';
				$css .= xenial_dynamic_font_css( $header_secondary_menu_font_mobile );
				if ( $header_secondary_menu_font_colors['mobile']['initial'] ) {
					$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['mobile']['initial'] ) . ';';
				}
				
			$css .= '}';

			if ( $header_secondary_menu_font_colors['mobile']['hover'] ) {
				$css .= '.is-secondary .xe-site-navigation ul > li > a:hover {';
					$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['mobile']['hover'] ) . ';';
				$css .= '}';
			}

        $css .= '}';

        return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_secondary_menu_css' );