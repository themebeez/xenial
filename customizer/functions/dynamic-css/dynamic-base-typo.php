<?php 
/**
 * Dyynamic CSS for general typography.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_typo_css' ) ) {

	function xenial_dynamic_typo_css( $css ) {

		$customizer_defaults = xenial_get_customizer_defaults();

        $body_font_family = null;
        $body_font_size = null;
        $body_line_height = null;
		$body_font_weight = null;
				
		
		$headings_font_family = null;
        $headings_font_weight = null;

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

    	$headings_font_type = xenial_get_option( 'headings_font_type' );

    	if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = xenial_get_option( 'headings_google_font' );

            $headings_google_font = json_decode( $headings_google_font, true );

            $headings_font_category = $headings_google_font['category'];

            if ( $headings_font_category ) {

            	$headings_font_category = ',' . $headings_font_category;
            }

            $headings_font_family = $headings_google_font["font"] . $headings_font_category;

            $headings_font_weight = xenial_google_font_weight( $headings_google_font["boldweight"] );
        } else {

            $headings_system_font_family = xenial_get_option( 'headings_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();
            
            $headings_font_family = $websafe_fonts[ $headings_system_font_family ];

            $headings_font_weight = absint( xenial_get_option( 'headings_system_font_weight' ) );
        }


        $body_font_size = ( xenial_get_option( 'body_font_size_desktop' ) ) ? xenial_get_option( 'body_font_size_desktop' ) : $customizer_defaults['body_font_size']['desktop'];

        $body_line_height = xenial_get_option( 'body_line_height_desktop' ) ? xenial_get_option( 'body_line_height_desktop' ) : $customizer_defaults['body_line_height']['desktop'];

        $body_letter_spacing = xenial_get_option( 'body_letter_spacing_desktop' ) ? xenial_get_option( 'body_letter_spacing_desktop' ) : $customizer_defaults['body_letter_spacing']['desktop'];

        $css .= ':root {';

            if ( $body_font_family ) {
                $css .= '--xe_base_font_family: ' . esc_attr( $body_font_family ) . ';';
            }

            if ( $body_font_size ) {
                $css .= '--xe_base_font_size: ' . esc_attr( $body_font_size ) . 'px;';
            }

            if ( $body_font_weight ) {
                $css .= '--xe_base_font_weight: ' . esc_attr( $body_font_weight ) . ';';
            }

            if ( $body_letter_spacing ) {
                $css .= '--xe_base_letter_spacing: ' . esc_attr( $body_letter_spacing ) . 'px;';
            }

            if ( $body_line_height ) {
                $css .= '--xe_base_font_line_height: ' . esc_attr( $body_line_height ) . 'em;';
            }            

            if ( $headings_font_family ) {
                $css .= '--xe_heading_font_family: ' . esc_attr( $headings_font_family ) . ';';
            }

            if ( $headings_font_weight ) {
                $css .= '--xe_heading_font_weight: ' . esc_attr( $headings_font_weight ) . ';';
            }

        $css .= '}';

        // H1 font size and line height on desktop devices

        $css .= 'h1 {';

            $h1_desktop_font_size = ( xenial_get_option( 'h1_font_size_desktop' ) ) ? xenial_get_option( 'h1_font_size_desktop' ) : $customizer_defaults['h1_font_size']['desktop'];

            if ( $h1_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h1_desktop_font_size ) . 'px;
                ';
            }

            $h1_desktop_line_height = ( xenial_get_option( 'h1_line_height_desktop' ) ) ? xenial_get_option( 'h1_line_height_desktop' ) : $customizer_defaults['h1_line_height']['desktop'];

            if ( $h1_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h1_desktop_line_height  ) . ';
                ';
            }

            $h1_desktop_letter_spacing = ( xenial_get_option( 'h1_letter_spacing_desktop' ) ) ? xenial_get_option( 'h1_letter_spacing_desktop' ) : $customizer_defaults['h1_letter_spacing']['desktop'];

            if ( $h1_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h1_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';

        // H2 font size and line height on desktop devices
        $css .= 'h2 {';

            $h2_desktop_font_size = ( xenial_get_option( 'h2_font_size_desktop' ) ) ? xenial_get_option( 'h2_font_size_desktop' ) : $customizer_defaults['h2_font_size']['desktop'];

            if ( $h2_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h2_desktop_font_size ) . 'px;
                ';
            }

            $h2_desktop_line_height = ( xenial_get_option( 'h2_line_height_desktop' ) ) ? xenial_get_option( 'h2_line_height_desktop' ) : $customizer_defaults['h2_line_height']['desktop'];

            if ( $h2_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h2_desktop_line_height  ) . ';
                ';
            }

            $h2_desktop_letter_spacing = ( xenial_get_option( 'h2_letter_spacing_desktop' ) ) ? xenial_get_option( 'h2_letter_spacing_desktop' ) : $customizer_defaults['h2_letter_spacing']['desktop'];

            if ( $h2_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h2_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';

        // H3 font size and line height on desktop devices

        $css .= 'h3 {';

            $h3_desktop_font_size = ( xenial_get_option( 'h3_font_size_desktop' ) ) ? xenial_get_option( 'h3_font_size_desktop' ) : $customizer_defaults['h3_font_size']['desktop'];

            if ( $h3_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h3_desktop_font_size ) . 'px;
                ';
            }

            $h3_desktop_line_height = ( xenial_get_option( 'h3_line_height_desktop' ) ) ? xenial_get_option( 'h3_line_height_desktop' ) : $customizer_defaults['h3_line_height']['desktop'];

            if ( $h3_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h3_desktop_line_height  ) . ';
                ';
            }

            $h3_desktop_letter_spacing = ( xenial_get_option( 'h3_letter_spacing_desktop' ) ) ? xenial_get_option( 'h3_letter_spacing_desktop' ) : $customizer_defaults['h3_letter_spacing']['desktop'];

            if ( $h3_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h3_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';

        // H4 font size and line height on desktop devices

        $css .= 'h4 {';

            $h4_desktop_font_size = ( xenial_get_option( 'h4_font_size_desktop' ) ) ? xenial_get_option( 'h4_font_size_desktop' ) : $customizer_defaults['h4_font_size']['desktop'];

            if ( $h4_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h4_desktop_font_size ) . 'px;
                ';
            }

            $h4_desktop_line_height = ( xenial_get_option( 'h4_line_height_desktop' ) ) ? xenial_get_option( 'h4_line_height_desktop' ) : $customizer_defaults['h4_line_height']['desktop'];

            if ( $h4_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h4_desktop_line_height  ) . ';
                ';
            }

            $h4_desktop_letter_spacing = ( xenial_get_option( 'h4_letter_spacing_desktop' ) ) ? xenial_get_option( 'h4_letter_spacing_desktop' ) : $customizer_defaults['h4_letter_spacing']['desktop'];

            if ( $h4_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h4_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';


        // H5 font size and line height on desktop devices

        $css .= 'h5 {';

            $h5_desktop_font_size = ( xenial_get_option( 'h5_font_size_desktop' ) ) ? xenial_get_option( 'h5_font_size_desktop' ) : $customizer_defaults['h5_font_size']['desktop'];

            if ( $h5_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h5_desktop_font_size ) . 'px;
                ';
            }

            $h5_desktop_line_height = ( xenial_get_option( 'h5_line_height_desktop' ) ) ? xenial_get_option( 'h5_line_height_desktop' ) : $customizer_defaults['h5_line_height']['desktop'];

            if ( $h5_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h5_desktop_line_height  ) . ';
                ';
            }

            $h5_desktop_letter_spacing = ( xenial_get_option( 'h5_letter_spacing_desktop' ) ) ? xenial_get_option( 'h5_letter_spacing_desktop' ) : $customizer_defaults['h5_letter_spacing']['desktop'];

            if ( $h5_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h5_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';

        // H6 font size and line height on desktop devices

        $css .= 'h6 {';

            $h6_desktop_font_size = ( xenial_get_option( 'h6_font_size_desktop' ) ) ? xenial_get_option( 'h6_font_size_desktop' ) : $customizer_defaults['h6_font_size']['desktop'];

            if ( $h6_desktop_font_size ) {
                $css .= '
                    font-size: ' . esc_attr( $h6_desktop_font_size ) . 'px;
                ';
            }

            $h6_desktop_line_height = ( xenial_get_option( 'h6_line_height_desktop' ) ) ? xenial_get_option( 'h6_line_height_desktop' ) : $customizer_defaults['h6_line_height']['desktop'];

            if ( $h6_desktop_line_height ) {
                $css .= '
                    line-height: ' . esc_attr( $h6_desktop_line_height  ) . ';
                ';
            }

            $h6_desktop_letter_spacing = ( xenial_get_option( 'h6_letter_spacing_desktop' ) ) ? xenial_get_option( 'h6_letter_spacing_desktop' ) : $customizer_defaults['h6_letter_spacing']['desktop'];

            if ( $h6_desktop_letter_spacing ) {
                $css .= '
                    letter-spacing: ' . esc_attr( $h6_desktop_letter_spacing  ) . 'px;
                ';
            }

        $css .= '}';





        $css .= '@media screen and (max-width: 768px) {';

            // Body font size and line height for tablet devices

			$css .= 'body {';

                $body_tablet_font_size = ( xenial_get_option( 'body_font_size_tablet' ) ) ? xenial_get_option( 'body_font_size_tablet' ) : $customizer_defaults['body_font_size']['tablet'];

                if ( $body_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $body_tablet_font_size ) . 'px;
                    ';
                }

                $body_tablet_line_height = ( xenial_get_option( 'body_line_height_tablet' ) ) ? xenial_get_option( 'body_line_height_tablet' ) : $customizer_defaults['body_line_height']['tablet'];

                if ( $body_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $body_tablet_line_height  ) . ';
                    ';
                }

                $body_tablet_letter_spacing = xenial_get_option( 'body_letter_spacing_tablet' ) ? xenial_get_option( 'body_letter_spacing_tablet' ) : $customizer_defaults['body_letter_spacing']['tablet'];

                if ( $body_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $body_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';


            // H1 font size and line height for tablet devices

			$css .= 'h1 {';

    	        $h1_tablet_font_size = ( xenial_get_option( 'h1_font_size_tablet' ) ) ? xenial_get_option( 'h1_font_size_tablet' ) : $customizer_defaults['h1_font_size']['tablet'];

                if ( $h1_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h1_tablet_font_size ) . 'px;
                    ';
                }

                $h1_tablet_line_height = ( xenial_get_option( 'h1_line_height_tablet' ) ) ? xenial_get_option( 'h1_line_height_tablet' ) : $customizer_defaults['h1_line_height']['tablet'];

                if ( $h1_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h1_tablet_line_height  ) . ';
                    ';
                }

                $h1_tablet_letter_spacing = xenial_get_option( 'h1_letter_spacing_tablet' ) ? xenial_get_option( 'h1_letter_spacing_tablet' ) : $customizer_defaults['h1_letter_spacing']['tablet'];

                if ( $h1_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h1_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

            // H2 font size and line height for tablet devices

	        $css .= 'h2 {';

    	        $h2_tablet_font_size = ( xenial_get_option( 'h2_font_size_tablet' ) ) ? xenial_get_option( 'h2_font_size_tablet' ) : $customizer_defaults['h2_font_size']['tablet'];

                if ( $h2_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h2_tablet_font_size ) . 'px;
                    ';
                }

                $h2_tablet_line_height = ( xenial_get_option( 'h2_line_height_tablet' ) ) ? xenial_get_option( 'h2_line_height_tablet' ) : $customizer_defaults['h2_line_height']['tablet'];

                if ( $h2_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h2_tablet_line_height  ) . ';
                    ';
                }

                $h2_tablet_letter_spacing = xenial_get_option( 'h2_letter_spacing_tablet' ) ? xenial_get_option( 'h2_letter_spacing_tablet' ) : $customizer_defaults['h2_letter_spacing']['tablet'];

                if ( $h2_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h2_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

            // H3 font size and line height for tablet devices

	        $css .= 'h3 {';

    	        $h3_tablet_font_size = ( xenial_get_option( 'h3_font_size_tablet' ) ) ? xenial_get_option( 'h3_font_size_tablet' ) : $customizer_defaults['h3_font_size']['tablet'];

                if ( $h3_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h3_tablet_font_size ) . 'px;
                    ';
                }

                $h3_tablet_line_height = ( xenial_get_option( 'h3_line_height_tablet' ) ) ? xenial_get_option( 'h3_line_height_tablet' ) : $customizer_defaults['h3_line_height']['tablet'];

                if ( $h3_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h3_tablet_line_height  ) . ';
                    ';
                }

                $h3_tablet_letter_spacing = xenial_get_option( 'h3_letter_spacing_tablet' ) ? xenial_get_option( 'h3_letter_spacing_tablet' ) : $customizer_defaults['h3_letter_spacing']['tablet'];

                if ( $h3_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h3_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

            // H4 font size and line height for tablet devices

	        $css .= 'h4 {';

    	        $h4_tablet_font_size = ( xenial_get_option( 'h4_font_size_tablet' ) ) ? xenial_get_option( 'h4_font_size_tablet' ) : $customizer_defaults['h4_font_size']['tablet'];

                if ( $h4_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h4_tablet_font_size ) . 'px;
                    ';
                }

                $h4_tablet_line_height = ( xenial_get_option( 'h4_line_height_tablet' ) ) ? xenial_get_option( 'h4_line_height_tablet' ) : $customizer_defaults['h4_line_height']['tablet'];

                if ( $h4_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h4_tablet_line_height  ) . ';
                    ';
                }

                $h4_tablet_letter_spacing = xenial_get_option( 'h4_letter_spacing_tablet' ) ? xenial_get_option( 'h4_letter_spacing_tablet' ) : $customizer_defaults['h4_letter_spacing']['tablet'];

                if ( $h4_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h4_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

            // H5 font size and line height for tablet devices

	        $css .= 'h5 {';

    	        $h5_tablet_font_size = ( xenial_get_option( 'h5_font_size_tablet' ) ) ? xenial_get_option( 'h5_font_size_tablet' ) : $customizer_defaults['h5_font_size']['tablet'];

                if ( $h5_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h5_tablet_font_size ) . 'px;
                    ';
                }

                $h5_tablet_line_height = ( xenial_get_option( 'h5_line_height_tablet' ) ) ? xenial_get_option( 'h5_line_height_tablet' ) : $customizer_defaults['h5_line_height']['tablet'];

                if ( $h5_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h5_tablet_line_height  ) . ';
                    ';
                }

                $h5_tablet_letter_spacing = xenial_get_option( 'h5_letter_spacing_tablet' ) ? xenial_get_option( 'h5_letter_spacing_tablet' ) : $customizer_defaults['h5_letter_spacing']['tablet'];

                if ( $h5_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h5_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

            // H6 font size and line height for tablet devices

	        $css .= 'h6 {';

    	        $h6_tablet_font_size = ( xenial_get_option( 'h6_font_size_tablet' ) ) ? xenial_get_option( 'h6_font_size_tablet' ) : $customizer_defaults['h6_font_size']['tablet'];

                if ( $h6_tablet_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h6_tablet_font_size ) . 'px;
                    ';
                }

                $h6_tablet_line_height = ( xenial_get_option( 'h6_line_height_tablet' ) ) ? xenial_get_option( 'h6_line_height_tablet' ) : $customizer_defaults['h6_line_height']['tablet'];

                if ( $h6_tablet_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h6_tablet_line_height  ) . ';
                    ';
                }

                $h6_tablet_letter_spacing = xenial_get_option( 'h6_letter_spacing_tablet' ) ? xenial_get_option( 'h6_letter_spacing_tablet' ) : $customizer_defaults['h6_letter_spacing']['tablet'];

                if ( $h6_tablet_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h6_tablet_letter_spacing  ) . 'px;
                    ';
                }

	        $css .= '}';

	    $css .= '}';



	    // Start styles for mobile devices

		$css .= '@media screen and (max-width: 576px) {';

			// Body font size and line height for mobile devices

            $css .= 'body {';

                $body_mobile_font_size = ( xenial_get_option( 'body_font_size_mobile' ) ) ? xenial_get_option( 'body_font_size_mobile' ) : $customizer_defaults['body_font_size']['mobile'];

                if ( $body_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $body_mobile_font_size ) . 'px;
                    ';
                }

                $body_mobile_line_height = ( xenial_get_option( 'body_line_height_mobile' ) ) ? xenial_get_option( 'body_line_height_mobile' ) : $customizer_defaults['body_line_height']['mobile'];

                if ( $body_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $body_mobile_line_height  ) . ';
                    ';
                }

                $body_mobile_letter_spacing = xenial_get_option( 'body_letter_spacing_mobile' ) ? xenial_get_option( 'body_letter_spacing_mobile' ) : $customizer_defaults['body_letter_spacing']['mobile'];

                if ( $body_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $body_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';


            // H1 font size and line height for mobile devices

            $css .= 'h1 {';

                $h1_mobile_font_size = ( xenial_get_option( 'h1_font_size_mobile' ) ) ? xenial_get_option( 'h1_font_size_mobile' ) : $customizer_defaults['h1_font_size']['mobile'];

                if ( $h1_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h1_mobile_font_size ) . 'px;
                    ';
                }

                $h1_mobile_line_height = ( xenial_get_option( 'h1_line_height_mobile' ) ) ? xenial_get_option( 'h1_line_height_mobile' ) : $customizer_defaults['h1_line_height']['mobile'];

                if ( $h1_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h1_mobile_line_height  ) . ';
                    ';
                }

                $h1_mobile_letter_spacing = xenial_get_option( 'h1_letter_spacing_mobile' ) ? xenial_get_option( 'h1_letter_spacing_mobile' ) : $customizer_defaults['h1_letter_spacing']['mobile'];

                if ( $h1_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h1_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

            // H2 font size and line height for mobile devices

            $css .= 'h2 {';

                $h2_mobile_font_size = ( xenial_get_option( 'h2_font_size_mobile' ) ) ? xenial_get_option( 'h2_font_size_mobile' ) : $customizer_defaults['h2_font_size']['mobile'];

                if ( $h2_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h2_mobile_font_size ) . 'px;
                    ';
                }

                $h2_mobile_line_height = ( xenial_get_option( 'h2_line_height_mobile' ) ) ? xenial_get_option( 'h2_line_height_mobile' ) : $customizer_defaults['h2_line_height']['mobile'];

                if ( $h2_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h2_mobile_line_height  ) . ';
                    ';
                }

                $h2_mobile_letter_spacing = xenial_get_option( 'h2_letter_spacing_mobile' ) ? xenial_get_option( 'h2_letter_spacing_mobile' ) : $customizer_defaults['h2_letter_spacing']['mobile'];

                if ( $h2_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h2_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

            // H3 font size and line height for mobile devices

            $css .= 'h3 {';

                $h3_mobile_font_size = ( xenial_get_option( 'h3_font_size_mobile' ) ) ? xenial_get_option( 'h3_font_size_mobile' ) : $customizer_defaults['h3_font_size']['mobile'];

                if ( $h3_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h3_mobile_font_size ) . 'px;
                    ';
                }

                $h3_mobile_line_height = ( xenial_get_option( 'h3_line_height_mobile' ) ) ? xenial_get_option( 'h3_line_height_mobile' ) : $customizer_defaults['h3_line_height']['mobile'];

                if ( $h3_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h3_mobile_line_height  ) . ';
                    ';
                }

                $h3_mobile_letter_spacing = xenial_get_option( 'h3_letter_spacing_mobile' ) ? xenial_get_option( 'h3_letter_spacing_mobile' ) : $customizer_defaults['h3_letter_spacing']['mobile'];

                if ( $h3_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h3_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

            // H4 font size and line height for mobile devices

            $css .= 'h4 {';

                $h4_mobile_font_size = ( xenial_get_option( 'h4_font_size_mobile' ) ) ? xenial_get_option( 'h4_font_size_mobile' ) : $customizer_defaults['h4_font_size']['mobile'];

                if ( $h4_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h4_mobile_font_size ) . 'px;
                    ';
                }

                $h4_mobile_line_height = ( xenial_get_option( 'h4_line_height_mobile' ) ) ? xenial_get_option( 'h4_line_height_mobile' ) : $customizer_defaults['h4_line_height']['mobile'];

                if ( $h4_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h4_mobile_line_height  ) . ';
                    ';
                }

                $h4_mobile_letter_spacing = xenial_get_option( 'h4_letter_spacing_mobile' ) ? xenial_get_option( 'h4_letter_spacing_mobile' ) : $customizer_defaults['h4_letter_spacing']['mobile'];

                if ( $h4_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h4_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

            // H5 font size and line height for mobile devices

            $css .= 'h5 {';

                $h5_mobile_font_size = ( xenial_get_option( 'h5_font_size_mobile' ) ) ? xenial_get_option( 'h5_font_size_mobile' ) : $customizer_defaults['h5_font_size']['mobile'];

                if ( $h5_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h5_mobile_font_size ) . 'px;
                    ';
                }

                $h5_mobile_line_height = ( xenial_get_option( 'h5_line_height_mobile' ) ) ? xenial_get_option( 'h5_line_height_mobile' ) : $customizer_defaults['h5_line_height']['mobile'];

                if ( $h5_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h5_mobile_line_height  ) . ';
                    ';
                }

                $h5_mobile_letter_spacing = xenial_get_option( 'h5_letter_spacing_mobile' ) ? xenial_get_option( 'h5_letter_spacing_mobile' ) : $customizer_defaults['h5_letter_spacing']['mobile'];

                if ( $h5_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h5_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

            // H6 font size and line height for mobile devices

            $css .= 'h6 {';

                $h6_mobile_font_size = ( xenial_get_option( 'h6_font_size_mobile' ) ) ? xenial_get_option( 'h6_font_size_mobile' ) : $customizer_defaults['h6_font_size']['mobile'];

                if ( $h6_mobile_font_size ) {
                    $css .= '
                        font-size: ' . esc_attr( $h6_mobile_font_size ) . 'px;
                    ';
                }

                $h6_mobile_line_height = ( xenial_get_option( 'h6_line_height_mobile' ) ) ? xenial_get_option( 'h6_line_height_mobile' ) : $customizer_defaults['h6_line_height']['mobile'];

                if ( $h6_mobile_line_height ) {
                    $css .= '
                        line-height: ' . esc_attr( $h6_mobile_line_height  ) . ';
                    ';
                }

                $h6_mobile_letter_spacing = xenial_get_option( 'h6_letter_spacing_mobile' ) ? xenial_get_option( 'h6_letter_spacing_mobile' ) : $customizer_defaults['h6_letter_spacing']['mobile'];

                if ( $h6_mobile_letter_spacing ) {
                    $css .= '
                        letter-spacing: ' . esc_attr( $h6_mobile_letter_spacing  ) . 'px;
                    ';
                }

            $css .= '}';

        $css .= '}';

        return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_typo_css' );


if ( ! function_exists( 'xenial_google_font_weight' ) ) {

	function xenial_google_font_weight( $weight ) {

		if ( $weight === 'regular' || $weight === 'italic' ) {
			return 400;
		} else {
			return absint( str_replace( 'italic', '', $weight ) );
		}
	}
}