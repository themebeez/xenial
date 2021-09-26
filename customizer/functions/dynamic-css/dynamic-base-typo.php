<?php 


if ( ! function_exists( 'xenial_dynamic_typo_css' ) ) {
	function xenial_dynamic_typo_css() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$css = '';

		$body_font_weight = null;
		$body_line_height = null;
		$body_font_size = null;
		$body_font_family = null;
		$headings_font_family = null;

		$body_font_type = xenial_get_option( 'body_font_type' );

		if ( $body_font_type == 'google_font' ) {

            $body_google_font = xenial_get_option( 'body_google_font' );

            $body_google_font = json_decode( $body_google_font, true );

            $body_font_category = $body_google_font['category'];

            if ( $body_font_category ) {

            	$body_font_category = ',' . $body_font_category;
            }

            $body_font_family = $body_google_font["font"] . $body_font_category;

            $body_font_weight = xenial_google_font_weight( $body_google_font['boldweight'] );
        } else {

            $body_system_font_family = xenial_get_option( 'body_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();

            $body_font_family = $websafe_fonts[ $body_system_font_family ]; 

            $body_font_weight = absint( xenial_get_option( 'body_system_font_weight' ) );     	
        }

        $body_font_size = ( xenial_get_option( 'body_font_size_desktop' ) ) ? xenial_get_option( 'body_font_size_desktop' ) : $customizer_defaults['body_font_size']['desktop'];

        $body_line_height = xenial_get_option( 'body_line_height_desktop' ) ? xenial_get_option( 'body_line_height_desktop' ) : $customizer_defaults['body_line_height']['desktop'];

    	$headings_font_type = xenial_get_option( 'headings_font_type' );

    	if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = xenial_get_option( 'headings_google_font' );

            $headings_google_font = json_decode( $headings_google_font, true );

            $headings_font_category = $headings_google_font['category'];

            if ( $headings_font_category ) {

            	$headings_font_category = ',' . $headings_font_category;
            }

            $headings_font_family = $headings_google_font["font"] . $headings_font_category;
        } else {

            $headings_system_font_family = xenial_get_option( 'headings_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();
            
            $headings_font_family = $websafe_fonts[ $headings_system_font_family ];
        }


         $css .= ':root {
         	--xe_base_font_size: ' . esc_attr( $body_font_size ) . 'px;
			--xe_base_font_weight: ' . esc_attr( $body_font_weight ) . ';
			--xe_base_letter_spacing: -0.0311em;
			--xe_base_font_line_height: ' . esc_attr( $body_line_height ) . ';
			--xe_base_font_family: ' . esc_attr( $body_font_family ) . ';

			--xe_heading_font_weight: bold;
			--xe_heading_letter_spacing: -0.0415625em;
			--xe_heading_line_height: 1.2em;
			--xe_heading_font_family: ' . esc_attr( $headings_font_family ) . ';
        }';


        // Headings CSS

        $css .= 'h1,h2,h3,h4,h5,h6 {';

        if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = xenial_get_option( 'headings_google_font' );

            $headings_google_font = json_decode( $headings_google_font, true );

            $headings_font_category = $headings_google_font['category'];

            if ( $headings_font_category ) {
            	$headings_font_category = ',' . $headings_font_category;
            }

            $headings_font_family = $headings_google_font["font"] . $headings_font_category;

            $css .= '
            	font-weight: ' . xenial_google_font_weight( $headings_google_font["boldweight"] ) . ';
            ';
        } else {

            $headings_system_font_family = xenial_get_option( 'headings_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();

            $headings_font_family = $websafe_fonts[ $headings_system_font_family ];
        	
            $css .= '
                font-weight: ' . absint( xenial_get_option( 'headings_system_font_weight' ) ) . ';
            ';
        }

        $css .= '}';

        // H1 font size and line height on desktop devices

        $css .= 'h1 {';

        $h1_desktop_font_size = ( xenial_get_option( 'h1_font_size_desktop' ) ) ? xenial_get_option( 'h1_font_size_desktop' ) : $customizer_defaults['h1_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h1_desktop_font_size ) . 'px;
        ';

        $h1_desktop_line_height = ( xenial_get_option( 'h1_line_height_desktop' ) ) ? xenial_get_option( 'h1_line_height_desktop' ) : $customizer_defaults['h1_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h1_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H2 font size and line height on desktop devices

        $css .= 'h2 {';

        $h2_desktop_font_size = ( xenial_get_option( 'h2_font_size_desktop' ) ) ? xenial_get_option( 'h2_font_size_desktop' ) : $customizer_defaults['h2_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h2_desktop_font_size ) . 'px;
        ';

        $h2_desktop_line_height = ( xenial_get_option( 'h2_line_height_desktop' ) ) ? xenial_get_option( 'h2_line_height_desktop' ) : $customizer_defaults['h2_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h2_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H3 font size and line height on desktop devices

        $css .= 'h3 {';

        $h3_desktop_font_size = ( xenial_get_option( 'h3_font_size_desktop' ) ) ? xenial_get_option( 'h3_font_size_desktop' ) : $customizer_defaults['h3_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h3_desktop_font_size ) . 'px;
        ';

        $h3_desktop_line_height = ( xenial_get_option( 'h3_line_height_desktop' ) ) ? xenial_get_option( 'h3_line_height_desktop' ) : $customizer_defaults['h3_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h3_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H4 font size and line height on desktop devices

        $css .= 'h4 {';

        $h4_desktop_font_size = ( xenial_get_option( 'h4_font_size_desktop' ) ) ? xenial_get_option( 'h4_font_size_desktop' ) : $customizer_defaults['h4_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h4_desktop_font_size ) . 'px;
        ';

        $h4_desktop_line_height = ( xenial_get_option( 'h4_line_height_desktop' ) ) ? xenial_get_option( 'h4_line_height_desktop' ) : $customizer_defaults['h4_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h4_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // H5 font size and line height on desktop devices

        $css .= 'h5 {';

        $h5_desktop_font_size = ( xenial_get_option( 'h5_font_size_desktop' ) ) ? xenial_get_option( 'h5_font_size_desktop' ) : $customizer_defaults['h5_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h5_desktop_font_size ) . 'px;
        ';

        $h5_desktop_line_height = ( xenial_get_option( 'h5_line_height_desktop' ) ) ? xenial_get_option( 'h5_line_height_desktop' ) : $customizer_defaults['h5_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h5_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H6 font size and line height on desktop devices

        $css .= 'h6 {';

        $h6_desktop_font_size = ( xenial_get_option( 'h6_font_size_desktop' ) ) ? xenial_get_option( 'h6_font_size_desktop' ) : $customizer_defaults['h6_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( $h6_desktop_font_size ) . 'px;
        ';

        $h6_desktop_line_height = ( xenial_get_option( 'h6_line_height_desktop' ) ) ? xenial_get_option( 'h6_line_height_desktop' ) : $customizer_defaults['h6_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h6_desktop_line_height  ) . ';
        ';

        $css .= '}';





        $css .= '@media screen and (max-width: 768px) {';

            // Body font size and line height for tablet devices

			$css .= 'body {';

            $body_tablet_font_size = ( xenial_get_option( 'body_font_size_tablet' ) ) ? xenial_get_option( 'body_font_size_tablet' ) : $customizer_defaults['body_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $body_tablet_font_size ) . 'px;
            ';

            $body_tablet_line_height = ( xenial_get_option( 'body_line_height_tablet' ) ) ? xenial_get_option( 'body_line_height_tablet' ) : $customizer_defaults['body_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $body_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // H1 font size and line height for tablet devices

			$css .= 'h1 {';

	        $h1_tablet_font_size = ( xenial_get_option( 'h1_font_size_tablet' ) ) ? xenial_get_option( 'h1_font_size_tablet' ) : $customizer_defaults['h1_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h1_tablet_font_size ) . 'px;
            ';

            $h1_tablet_line_height = ( xenial_get_option( 'h1_line_height_tablet' ) ) ? xenial_get_option( 'h1_line_height_tablet' ) : $customizer_defaults['h1_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h1_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H2 font size and line height for tablet devices

	        $css .= 'h2 {';

	        $h2_tablet_font_size = ( xenial_get_option( 'h2_font_size_tablet' ) ) ? xenial_get_option( 'h2_font_size_tablet' ) : $customizer_defaults['h2_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h2_tablet_font_size ) . 'px;
            ';

            $h2_tablet_line_height = ( xenial_get_option( 'h2_line_height_tablet' ) ) ? xenial_get_option( 'h2_line_height_tablet' ) : $customizer_defaults['h2_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h2_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H3 font size and line height for tablet devices

	        $css .= 'h3 {';

	        $h3_tablet_font_size = ( xenial_get_option( 'h3_font_size_tablet' ) ) ? xenial_get_option( 'h3_font_size_tablet' ) : $customizer_defaults['h3_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h3_tablet_font_size ) . 'px;
            ';

            $h3_tablet_line_height = ( xenial_get_option( 'h3_line_height_tablet' ) ) ? xenial_get_option( 'h3_line_height_tablet' ) : $customizer_defaults['h3_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h3_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H4 font size and line height for tablet devices

	        $css .= 'h4 {';

	        $h4_tablet_font_size = ( xenial_get_option( 'h4_font_size_tablet' ) ) ? xenial_get_option( 'h4_font_size_tablet' ) : $customizer_defaults['h4_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h4_tablet_font_size ) . 'px;
            ';

            $h4_tablet_line_height = ( xenial_get_option( 'h4_line_height_tablet' ) ) ? xenial_get_option( 'h4_line_height_tablet' ) : $customizer_defaults['h4_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h4_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H5 font size and line height for tablet devices

	        $css .= 'h5 {';

	        $h5_tablet_font_size = ( xenial_get_option( 'h5_font_size_tablet' ) ) ? xenial_get_option( 'h5_font_size_tablet' ) : $customizer_defaults['h5_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h5_tablet_font_size ) . 'px;
            ';

            $h5_tablet_line_height = ( xenial_get_option( 'h5_line_height_tablet' ) ) ? xenial_get_option( 'h5_line_height_tablet' ) : $customizer_defaults['h5_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h5_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H6 font size and line height for tablet devices

	        $css .= 'h6 {';

	        $h6_tablet_font_size = ( xenial_get_option( 'h6_font_size_tablet' ) ) ? xenial_get_option( 'h6_font_size_tablet' ) : $customizer_defaults['h6_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( $h6_tablet_font_size ) . 'px;
            ';

            $h6_tablet_line_height = ( xenial_get_option( 'h6_line_height_tablet' ) ) ? xenial_get_option( 'h6_line_height_tablet' ) : $customizer_defaults['h6_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h6_tablet_line_height  ) . ';
            ';

	        $css .= '}';

	    $css .= '}';



	    // Start styles for mobile devices

		$css .= '@media screen and (max-width: 576px) {';

			// Body font size and line height for mobile devices

            $css .= 'body {';

            $body_mobile_font_size = ( xenial_get_option( 'body_font_size_mobile' ) ) ? xenial_get_option( 'body_font_size_mobile' ) : $customizer_defaults['body_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $body_mobile_font_size ) . 'px;
            ';

            $body_mobile_line_height = ( xenial_get_option( 'body_line_height_mobile' ) ) ? xenial_get_option( 'body_line_height_mobile' ) : $customizer_defaults['body_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $body_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // H1 font size and line height for mobile devices

            $css .= 'h1 {';

            $h1_mobile_font_size = ( xenial_get_option( 'h1_font_size_mobile' ) ) ? xenial_get_option( 'h1_font_size_mobile' ) : $customizer_defaults['h1_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h1_mobile_font_size ) . 'px;
            ';

            $h1_mobile_line_height = ( xenial_get_option( 'h1_line_height_mobile' ) ) ? xenial_get_option( 'h1_line_height_mobile' ) : $customizer_defaults['h1_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h1_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H2 font size and line height for mobile devices

            $css .= 'h2 {';

            $h2_mobile_font_size = ( xenial_get_option( 'h2_font_size_mobile' ) ) ? xenial_get_option( 'h2_font_size_mobile' ) : $customizer_defaults['h2_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h2_mobile_font_size ) . 'px;
            ';

            $h2_mobile_line_height = ( xenial_get_option( 'h2_line_height_mobile' ) ) ? xenial_get_option( 'h2_line_height_mobile' ) : $customizer_defaults['h2_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h2_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H3 font size and line height for mobile devices

            $css .= 'h3 {';

            $h3_mobile_font_size = ( xenial_get_option( 'h3_font_size_mobile' ) ) ? xenial_get_option( 'h3_font_size_mobile' ) : $customizer_defaults['h3_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h3_mobile_font_size ) . 'px;
            ';

            $h3_mobile_line_height = ( xenial_get_option( 'h3_line_height_mobile' ) ) ? xenial_get_option( 'h3_line_height_mobile' ) : $customizer_defaults['h3_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h3_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H4 font size and line height for mobile devices

            $css .= 'h4 {';

            $h4_mobile_font_size = ( xenial_get_option( 'h4_font_size_mobile' ) ) ? xenial_get_option( 'h4_font_size_mobile' ) : $customizer_defaults['h4_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h4_mobile_font_size ) . 'px;
            ';

            $h4_mobile_line_height = ( xenial_get_option( 'h4_line_height_mobile' ) ) ? xenial_get_option( 'h4_line_height_mobile' ) : $customizer_defaults['h4_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h4_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H5 font size and line height for mobile devices

            $css .= 'h5 {';

            $h5_mobile_font_size = ( xenial_get_option( 'h5_font_size_mobile' ) ) ? xenial_get_option( 'h5_font_size_mobile' ) : $customizer_defaults['h5_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h5_mobile_font_size ) . 'px;
            ';

            $h5_mobile_line_height = ( xenial_get_option( 'h5_line_height_mobile' ) ) ? xenial_get_option( 'h5_line_height_mobile' ) : $customizer_defaults['h5_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h5_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H6 font size and line height for mobile devices

            $css .= 'h6 {';

            $h6_mobile_font_size = ( xenial_get_option( 'h6_font_size_mobile' ) ) ? xenial_get_option( 'h6_font_size_mobile' ) : $customizer_defaults['h6_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( $h6_mobile_font_size ) . 'px;
            ';

            $h6_mobile_line_height = ( xenial_get_option( 'h6_line_height_mobile' ) ) ? xenial_get_option( 'h6_line_height_mobile' ) : $customizer_defaults['h6_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h6_mobile_line_height  ) . ';
            ';

            $css .= '}';

        $css .= '}';

        return $css;
	}
}



if ( ! function_exists( 'xenial_google_font_weight' ) ) {

	function xenial_google_font_weight( $weight ) {

		if ( $weight === 'regular' || $weight === 'italic' ) {
			return 400;
		} else {
			return absint( str_replace( 'italic', '', $weight ) );
		}
	}
}