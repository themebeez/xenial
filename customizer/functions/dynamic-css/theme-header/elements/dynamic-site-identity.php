<?php 
/**
 * Dyynamic CSS for header site identity element.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_site_identity_css' ) ) {

	function xenial_dynamic_header_site_identity_css( $css ) {

		if ( ! xenial_is_header_element_active( 'site_identity' ) ) {
			return $css;
		}

		// Site title typography and colors

		$site_title_colors = xenial_json_decode( xenial_get_option( 'site_title_color' ) );

		$site_title_font_desktop = array(
			'font-family' => '',
			'font-weight' => '',
			'font-size' => xenial_get_option( 'site_identity_font_size_desktop' ),
			'line-height' => xenial_get_option( 'site_identity_line_height_desktop' ),
			'letter-spacing' => xenial_get_option( 'site_identity_letter_spacing_desktop' ),
			'font-style' => xenial_get_option( 'site_identity_font_style' ),
			'text-transform' => xenial_get_option( 'site_identity_text_transform' ),
			'color' => $site_title_colors['desktop']['initial'],
			'hover-color' => $site_title_colors['desktop']['hover']
		);

		$site_title_font_type = xenial_get_option( 'site_identity_font_type' );

		if ( $site_title_font_type == 'google_font' ) {

            $site_title_google_font = xenial_json_decode( xenial_get_option( 'site_identity_google_font' ) );

            $site_title_font_category = $site_title_google_font['category'];

            if ( $site_title_font_category ) {

            	$site_title_font_category = ',' . $site_title_font_category;
            }

            $site_title_font_desktop['font-family'] = $site_title_google_font["font"] . $site_title_font_category;

            $site_title_font_desktop['font-weight'] = xenial_google_font_weight( $site_title_google_font['boldweight'] );
        } else {

            $site_title_system_font_family = xenial_get_option( 'site_identity_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();

            $site_title_font_desktop['font-family'] = $websafe_fonts[ $site_title_system_font_family ]; 

            $site_title_font_desktop['font-weight'] = absint( xenial_get_option( 'site_identity_system_font_weight' ) );     	
        }

        // Site description typography and colors

        $site_description_colors = xenial_json_decode( xenial_get_option( 'site_description_color' ) );

        $site_description_font_desktop = array(
        	'font-size' => xenial_get_option( 'site_description_font_size_desktop' ),
        	'line-height' => xenial_get_option( 'site_description_line_height_desktop' ),
        	'letter-spacing' => xenial_get_option( 'site_description_letter_spacing_desktop' ),
        	'font-weight' => xenial_get_option( 'site_description_font_weight' ),
        	'font-style' => xenial_get_option( 'site_description_font_style' ),
        	'text-transform' => xenial_get_option( 'site_description_text_transform' ),
        	'color' => $site_description_colors['desktop']['initial']
        );

        $css .= ':root{';

        	if ( $site_title_font_desktop['font-family'] ) {
        		$css .= '--xe_site_title_font_family: ' . esc_attr( $site_title_font_desktop['font-family'] ) . ';';
        	}
        	
        	if ( $site_title_font_desktop['font-weight'] ) {
        		$css .= '--xe_site_title_font_weight: ' . esc_attr( $site_title_font_desktop['font-weight'] ) . ';';
        	}
        	
        	if ( $site_title_font_desktop['font-size'] ) {
        		$css .= '--xe_site_title_font_size: ' . esc_attr( $site_title_font_desktop['font-size'] ) . 'px;';
        	}
        	
        	if ( $site_title_font_desktop['line-height'] ) {
        		$css .= '--xe_site_title_line_height: ' . esc_attr( $site_title_font_desktop['line-height'] ) . ';';
        	}

        	if ( $site_title_font_desktop['letter-spacing'] ) {
        		$css .= '--xe_site_title_letter_spacing: ' . esc_attr( $site_title_font_desktop['letter-spacing'] ) . 'px;';
        	}
        	
        	if ( $site_title_font_desktop['font-style'] ) {
        		$css .= '--xe_site_title_font_syle: ' . esc_attr( $site_title_font_desktop['font-style'] ) . ';';
        	}
        	
        	if ( $site_title_font_desktop['text-transform'] ) {
        		$css .= '--xe_site_title_text_transform: ' . esc_attr( $site_title_font_desktop['text-transform'] ) . ';';
        	}
        	
        	if ( $site_title_font_desktop['color'] ) {
        		$css .= '--xe_site_title_color: ' . esc_attr( $site_title_font_desktop['color'] ) . ';';
        	}
        	
        	if ( $site_title_font_desktop['hover-color'] ) {
        		$css .= '--xe_site_title_hover_color: ' . esc_attr( $site_title_font_desktop['hover-color'] ) . ';';
        	}
        	
        	if ( $site_description_font_desktop['font-size'] ) {
        		$css .= '--xe_site_description_font_size: ' . esc_attr( $site_description_font_desktop['font-size'] ) . 'px;';
        	}
        	
        	if ( $site_description_font_desktop['font-weight'] ) {	
				$css .= '--xe_site_description_font_weight: ' . esc_attr( $site_description_font_desktop['font-weight'] ) . ';';
			}

			if ( $site_description_font_desktop['letter-spacing'] ) {	
				$css .= '--xe_site_description_letter_spacing: ' . $site_description_font_desktop['letter-spacing'] . 'px;';
			}

			if ( $site_description_font_desktop['line-height'] ) {
        		$css .= '--xe_site_description_line_height: ' . esc_attr( $site_description_font_desktop['line-height'] ) . ';';
        	}
			
			if ( $site_description_font_desktop['color'] ) {
        		$css .= '--xe_site_description_color: ' . esc_attr( $site_description_font_desktop['color'] ) . ';';
        	}
			
			if ( $site_description_font_desktop['font-style'] ) {
        		$css .= '--xe_site_description_font_syle: ' . esc_attr( $site_description_font_desktop['font-style'] ) . ';';
        	}
			
			if ( $site_description_font_desktop['text-transform'] ) {
        		$css .= '--xe_site_description_text_transform: ' . esc_attr( $site_description_font_desktop['text-transform'] ) . ';';
        	}
        				
        $css .= '}';

        $site_title_font_tablet = array(
        	'font-size' => xenial_get_option( 'site_identity_font_size_tablet' ),
			'line-height' => xenial_get_option( 'site_identity_line_height_tablet' ),
			'letter-spacing' => xenial_get_option( 'site_identity_letter_spacing_tablet' )
        );

        $site_description_font_tablet = array(
        	'font-size' => xenial_get_option( 'site_description_font_size_tablet' ),
        	'line-height' => xenial_get_option( 'site_description_line_height_tablet' ),
        	'letter-spacing' => xenial_get_option( 'site_description_letter_spacing_tablet' ),
        	'color' => $site_description_colors['tablet']['initial']
        );

        $css .= '@media screen and (max-width: 768px) {';

        	$css .= '.xe-site-branding .site-title {';
        		$css .= xenial_dynamic_font_css( $site_title_font_tablet );
        	$css .= '}';

        	if ( $site_title_colors['tablet']['initial'] ) {
        		$css .= '.xe-site-branding .site-title a {';
	        		$css .= 'color: ' . esc_attr( $site_title_colors['tablet']['initial'] ) . ';';
	        	$css .= '}';
        	}

        	if ( $site_title_colors['tablet']['hover'] ) {
        		$css .= '.xe-site-branding .site-title a:hover {';
	        		$css .= 'color: ' . esc_attr( $site_title_colors['tablet']['hover'] ) . ';';
	        	$css .= '}';
        	}        	

        	$css .= '.xe-site-branding .site-description {';
        		$css .= xenial_dynamic_font_css( $site_description_font_tablet );
        	$css .= '}';

        $css .= '}';

        $site_title_font_mobile = array(
        	'font-size' => xenial_get_option( 'site_identity_font_size_mobile' ),
			'line-height' => xenial_get_option( 'site_identity_line_height_mobile' ),
			'letter-spacing' => xenial_get_option( 'site_identity_letter_spacing_mobile' )
        );

        $site_description_font_mobile = array(
        	'font-size' => xenial_get_option( 'site_description_font_size_mobile' ),
        	'line-height' => xenial_get_option( 'site_description_line_height_mobile' ),
        	'letter-spacing' => xenial_get_option( 'site_description_letter_spacing_mobile' ),
        	'color' => $site_description_colors['mobile']['initial']
        );

        $css .= '@media screen and (max-width: 576px) {';

        	$css .= '.xe-site-branding .site-title {';
        		$css .= xenial_dynamic_font_css( $site_title_font_mobile );
        	$css .= '}';

        	if ( $site_title_colors['mobile']['initial'] ) {
        		$css .= '.xe-site-branding .site-title a {';
	        		$css .= 'color: ' . esc_attr( $site_title_colors['mobile']['initial'] ) . ';';
	        	$css .= '}';
        	}

        	if ( $site_title_colors['mobile']['hover'] ) {
        		$css .= '.xe-site-branding .site-title a:hover {';
	        		$css .= 'color: ' . esc_attr( $site_title_colors['mobile']['hover'] ) . ';';
	        	$css .= '}';
        	}

        	$css .= '.xe-site-branding .site-description {';
        		$css .= xenial_dynamic_font_css( $site_description_font_mobile );
        	$css .= '}';
        	

        $css .= '}';

        return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_site_identity_css' );