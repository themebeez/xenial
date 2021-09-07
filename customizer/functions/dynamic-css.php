<?php

/**
 * Function to load dynamic styles.
 *
 * @since  1.0.0
 * @access public
 * @return null
 */
if ( ! function_exists( 'xenial_dynamic_css' ) ) {

	function xenial_dynamic_css() {

        $customizer_defaults = xenial_get_customizer_defaults();

		$css = '';

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
        } else {

            $body_system_font_family = xenial_get_option( 'body_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();

            $body_font_family = $websafe_fonts[ $body_system_font_family ];      	
        }

        $body_font_size = ( xenial_get_option( 'body_font_size_desktop' ) ) ? xenial_get_option( 'body_font_size_desktop' ) : $customizer_defaults['body_font_size']['desktop'];

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

        $accent_color = xenial_get_option( 'accent_color' );

        $css .= ':root {
        	--xenial-body-font-family: ' . esc_attr( $body_font_family ) . ';
			--xenial-body-font-size: ' . esc_attr( xenial_px_to_rem( $body_font_size ) ) . 'rem;
			--xenial-headings-font-family: ' . esc_attr( $headings_font_family ) . ';
			--xenial-font-size-small: ' . esc_attr( xenial_px_to_rem( absint( $body_font_size - ( 12.5 / 100 * $body_font_size ) ) ) ) . 'rem;
            --xenial-font-size-medium: ' . esc_attr( xenial_px_to_rem( $body_font_size + ( 12.5 / 100 * $body_font_size ) ) ) . 'rem;
            --xenial-font-size-large: ' . esc_attr( xenial_px_to_rem( $body_font_size + ( 25 / 100 * $body_font_size ) ) ) . 'rem;
            --xenial-icon-font-size: ' . esc_attr( xenial_px_to_rem( $body_font_size - ( 25 / 100 * $body_font_size ) ) ) . 'rem;
            --xenial-caption-font-size: ' . esc_attr( xenial_px_to_rem( $body_font_size - ( 18.75 / 100 * $body_font_size ) ) ) . 'rem;
            --xenial-accent-color: ' . esc_attr( $accent_color ) . ';
        }';


        $css .= '.xenial-btn, button, .button, .btn-general, .button-general, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button {';

            $css .= '
                color: ' . esc_attr( xenial_get_option( 'btn_txt_color' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( xenial_get_option( 'btn_bg_color' ) ) . ';
            ';

            $css .= '
                border-width: ' . esc_attr( xenial_get_option( 'btn_border_width' ) ) . 'px;
            ';

            $css .= '
                border-color: ' . esc_attr( xenial_get_option( 'btn_border_color' ) ) . ';
            ';

            $is_button_style_rounded = ( xenial_get_option( 'button_style' ) == 'rounded' ) ? true : false;

            if ( $is_button_style_rounded ) {
                $css .= '
                    border-radius: ' . esc_attr( xenial_get_option( 'btn_border_radius' ) ) . 'px;
                ';
            }

        $css .= '}';

        $css .= '.xenial-btn:hover, .xenial-btn:hover, button:hover, .button:hover, .btn-general:hover, .button-general:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .wp-block-search .wp-block-search__button:hover {';

            $css .= '
                color: ' . esc_attr( xenial_get_option( 'btn_border_radius' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( xenial_get_option( 'btn_border_radius' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( xenial_get_option( 'btn_border_hover_color' ) ) . ';
            ';

        $css .= '}';


        // Start Text Button CSS

        $css .= '
            .xenial-txt-btn,
            .widget.widget_calendar > .calendar_wrap > .wp-calendar-nav a {';

            $css .= '
                border-style: solid;
            ';

            $css .= '
                color: ' . esc_attr( xenial_get_option( 'txt_btn_txt_color' ) ) . ';
            ';

            $css .= '
                border-width: ' . esc_attr( xenial_get_option( 'txt_btn_border_width' ) ) . 'px;
            ';

            $css .= '
                background-color: ' . esc_attr( xenial_get_option( 'txt_btn_bg_color' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( xenial_get_option( 'txt_btn_border_color' ) ) . ';
            ';

            $is_txt_button_style_rounded = ( xenial_get_option( 'txt_button_style' ) == 'rounded' ) ? true : false;

            if ( $is_txt_button_style_rounded ) {
                $css .= '
                    border-radius: ' . esc_attr( xenial_get_option( 'txt_btn_border_radius' ) ) . 'px;
                ';
            }

        $css .= '}';

        $css .= '
            .xenial-txt-btn:hover,
            .widget.widget_calendar > .calendar_wrap > .wp-calendar-nav a:hover {';

            $css .= '
                color: ' . esc_attr( xenial_get_option( 'txt_btn_txt_hover_color' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( xenial_get_option( 'txt_btn_bg_hover_color' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( xenial_get_option( 'txt_btn_border_hover_color' ) ) . ';
            ';

        $css .= '}';

        // End Text Button CSS


		$css .= 'body {';

		$body_font_type = xenial_get_option( 'body_font_type' );

        if ( $body_font_type == 'google_font' ) {

            $body_google_font = xenial_get_option( 'body_google_font' );

            $body_google_font = json_decode( $body_google_font, true );

            $body_font_category = $body_google_font['category'];

            if ( $body_font_category ) {

            	$body_font_category = ',' . $body_font_category;
            }

            $body_font_family = $body_google_font["font"] . $body_font_category;

            $css .= '
            	font-weight: ' . xenial_google_font_weight( $body_google_font["boldweight"] ) . ';
            ';
        } else {

            $body_system_font_family = xenial_get_option( 'body_system_font_family' );

            $websafe_fonts = xenial_get_standard_fonts();

            $body_font_family = $websafe_fonts[ $body_system_font_family ];


            $css .= '
                font-weight: ' . absint( xenial_get_option( 'body_system_font_weight' ) ) . ';
            ';
        }

        $body_line_height_desktop = xenial_get_option( 'body_line_height_desktop' ) ? xenial_get_option( 'body_line_height_desktop' ) : $customizer_defaults['body_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $body_line_height_desktop ) . ';
        ';

        $css .= '}';


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
            font-size: ' . esc_attr( xenial_px_to_rem( $h1_desktop_font_size ) ) . 'rem;
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
            font-size: ' . esc_attr( xenial_px_to_rem( $h2_desktop_font_size ) ) . 'rem;
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
            font-size: ' . esc_attr( xenial_px_to_rem( $h3_desktop_font_size ) ) . 'rem;
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
            font-size: ' . esc_attr( xenial_px_to_rem( $h4_desktop_font_size ) ) . 'rem;
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
            font-size: ' . esc_attr( xenial_px_to_rem( $h5_desktop_font_size ) ) . 'rem;
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
            font-size: ' . esc_attr( xenial_px_to_rem( $h6_desktop_font_size ) ) . 'rem;
        ';

        $h6_desktop_line_height = ( xenial_get_option( 'h6_line_height_desktop' ) ) ? xenial_get_option( 'h6_line_height_desktop' ) : $customizer_defaults['h6_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h6_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // Site title typography

        $css .= '.site-title {';

		$site_identity_font_type = xenial_get_option( 'site_identity_font_type' );

        if ( $site_identity_font_type == 'google_font' ) {
            $site_identity_google_font = xenial_get_option( 'site_identity_google_font' );
            $site_identity_google_font = json_decode( $site_identity_google_font, true );
            $site_identity_font_category = $site_identity_google_font['category'];
            if ( $site_identity_font_category ) {
            	$site_identity_font_category = ',' . $site_identity_font_category;
            }
            $css .= '
            	font-family: ' . $site_identity_google_font["font"] . $site_identity_font_category  . ';
            	font-weight: ' . xenial_google_font_weight( $site_identity_google_font["boldweight"] ) . ';
            ';
        } else {

    		$css .= '
    			font-family: ' . esc_attr( xenial_get_option( 'site_identity_system_font_family' ) ) . ';
    		';

            $css .= '
                font-weight: ' . absint( xenial_get_option( 'site_identity_system_font_weight' ) ) . ';
            ';      	
        }

        // Site title font size and line height on desktop devices

        $site_identity_desktop_font_size = ( xenial_get_option( 'site_identity_font_size_desktop' ) ) ? xenial_get_option( 'site_identity_font_size_desktop' ) : $customizer_defaults['site_identity_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( xenial_px_to_rem( $site_identity_desktop_font_size ) ) . 'rem;
        ';

        $site_identity_desktop_line_height = ( xenial_get_option( 'site_identity_line_height_desktop' ) ) ? xenial_get_option( 'site_identity_line_height_desktop' ) : $customizer_defaults['site_identity_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $site_identity_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // Archive post title font size for desktop devices

        $css .= '.xenial-post-element-title .xenial-entry-title {';

        $archive_post_title_desktop_font_size = ( xenial_get_option( 'archive_post_title_font_size_desktop' ) ) ? xenial_get_option( 'archive_post_title_font_size_desktop' ) : $customizer_defaults['archive_post_title_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( xenial_px_to_rem( $archive_post_title_desktop_font_size ) ) . 'rem;
        ';

        $css .= '}';

        // Site layout and container width

        $site_layout = xenial_get_option( 'site_layout' );

        $site_container_width = xenial_get_option( 'container_width' );

        $sidebar_width = xenial_get_option( 'sidebar_width' );

        if ( $site_layout != 'xenial-fullwidth-stretched' ) {
        	if ( $site_layout === 'xenial-boxed' ) {
        		$css .= 'body.xenial-boxed #page {
        			max-width: ' . absint( $site_container_width ) . 'px;
        		}';
        	} else {
	        	if ( $site_container_width ) {
	        		$css .= '.xenial-container {
	        			max-width: ' . absint( $site_container_width ) . 'px;
	        		}';
	        	}
	        }
        }


        // Site Title color
        // $css .= '.site-title a {
        //     color: ' . esc_attr( xenial_get_option( 'site_title_color' ) ) . ';
        // }';

        $css .= 'body.xenial-dark-mode-disabled:not(.xenial-transparent-header-enabled) .site-title a {
            color: ' . esc_attr( xenial_get_option( 'site_title_color' ) ) . '
        }';

        $css .= 'body.xenial-dark-mode-enabled:not(.xenial-transparent-header-enabled) .site-title a {
            color: ' . esc_attr( xenial_get_option( 'dark_mode_site_title_color' ) ) . '
        }';

        $css .= 'body.xenial-dark-mode-enabled:not(.xenial-transparent-header-enabled) .site-description {
            color: ' . esc_attr( xenial_get_option( 'dark_mode_site_description_color' ) ) . '
        }';


        // Mobile navigation breakpoint
        $main_navigation_mobile_breakpoint = xenial_get_option( 'main_navigation_mobile_breakpoint' );

		$css .= '@media( max-width: ' . $main_navigation_mobile_breakpoint . 'px ) {';

    		$css .= '
        		.xenial-mobile-navigation-toggle-container {
        			display: block;
        		}
        		.site-navigation {
        			display: none;
        		}';
		$css .= '}';

        $css .= '.main-navigation-wrapper {
            text-align: ' . esc_attr( xenial_get_option( 'main_navigation_alignment' ) ) . ';
        }';


		if ( xenial_get_option( 'main_header_layout' ) == 'header_1' && xenial_get_option( 'main_header_enable_header_ad' ) == false ) {
			$css .= '.site-branding {
				text-align: ' . esc_attr( xenial_get_option( 'site_identity_alignment' ) ) . ';
			}';
		}


        // Site banner styles

		if ( xenial_get_option( 'enable_banner_slider' ) ) {

			$css .= '.xenial-banner-background {';

                $css .= '
                    background-repeat: ' . esc_attr( xenial_get_option( 'banner_slider_image_background_repeat' ) ) . ';
                ';
                $css .= '
                    background-size: ' . esc_attr( xenial_get_option( 'banner_slider_image_background_size' ) ) . ';
                ';

                $position = xenial_get_option( 'banner_slider_image_background_position' );

                $position = str_replace( '-', ' ', $position );

                $css .= '
                    background-position: ' . esc_attr( $position ) . ';
                ';

			$css .= '}';


            // Banner slider height on desktop devices

            $banner_slider_height_desktop = ( xenial_get_option( 'banner_slider_height_desktop' ) ) ? xenial_get_option( 'banner_slider_height_desktop' ) : $customizer_defaults['banner_slider_height']['desktop'];

			$css .= '
            .xenial-banner-content-wrapper {
				height: ' . absint( $banner_slider_height_desktop ) . 'vh;
			}';


            // Banner margin on desktop devices

            $css .= '#xenial-banner {';

            $banner_margin_desktop_top = ( xenial_get_option( 'banner_slider_margin_desktop_top' ) ) ? xenial_get_option( 'banner_slider_margin_desktop_top' ) : $customizer_defaults['banner_slider_margin']['desktop_top'];

            $css .= '
                margin-top: ' . absint( $banner_margin_desktop_top ) . 'px;
            ';

            $banner_margin_desktop_right = ( xenial_get_option( 'banner_slider_margin_desktop_right' ) ) ? xenial_get_option( 'banner_slider_margin_desktop_right' ) : $customizer_defaults['banner_slider_margin']['desktop_right'];

            $css .= '
                margin-right: ' . absint( $banner_margin_desktop_right ) . 'px;
            ';

            $banner_margin_desktop_bottom = ( xenial_get_option( 'banner_slider_margin_desktop_bottom' ) ) ? xenial_get_option( 'banner_slider_margin_desktop_bottom' ) : $customizer_defaults['banner_slider_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $banner_margin_desktop_bottom ) . 'px;
            ';

            $banner_margin_desktop_left = ( xenial_get_option( 'banner_slider_margin_desktop_left' ) ) ? xenial_get_option( 'banner_slider_margin_desktop_left' ) : $customizer_defaults['banner_slider_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $banner_margin_desktop_left ) . 'px;
            ';

            $css .= '}';


            // Banner slider content width on desktop devices

            $banner_slider_content_wrap_width_desktop = ( xenial_get_option( 'banner_slider_content_wrap_width_desktop' ) ) ? xenial_get_option( 'banner_slider_content_wrap_width_desktop' ) : $customizer_defaults['banner_slider_content_wrap_width']['desktop'];

            $css .= '
            .xenial-banner-content-inner {
                max-width: ' . absint( $banner_slider_content_wrap_width_desktop ) . '%;
            }';


            // Banner content margin and padding on desktop devices

			$css .= '.xenial-banner-content {';

            $banner_content_margin_desktop_top = ( xenial_get_option( 'banner_slider_content_margin_desktop_top' ) ) ? xenial_get_option( 'banner_slider_content_margin_desktop_top' ) : $customizer_defaults['banner_slider_content_margin']['desktop_top'];

			$css .= '
				margin-top: ' . absint( $banner_content_margin_desktop_top ) . 'px;
			';

			$banner_content_margin_desktop_right = ( xenial_get_option( 'banner_slider_content_margin_desktop_right' ) ) ? xenial_get_option( 'banner_slider_content_margin_desktop_right' ) : $customizer_defaults['banner_slider_content_margin']['desktop_right'];

            $css .= '
                margin-right: ' . absint( $banner_content_margin_desktop_right ) . 'px;
            ';

			$banner_content_margin_desktop_bottom = ( xenial_get_option( 'banner_slider_content_margin_desktop_bottom' ) ) ? xenial_get_option( 'banner_slider_content_margin_desktop_bottom' ) : $customizer_defaults['banner_slider_content_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $banner_content_margin_desktop_bottom ) . 'px;
            ';

			$banner_content_margin_desktop_left = ( xenial_get_option( 'banner_slider_content_margin_desktop_left' ) ) ? xenial_get_option( 'banner_slider_content_margin_desktop_left' ) : $customizer_defaults['banner_slider_content_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $banner_content_margin_desktop_left ) . 'px;
            ';

			$banner_content_padding_desktop_right = ( xenial_get_option( 'banner_slider_content_padding_desktop_right' ) ) ? xenial_get_option( 'banner_slider_content_padding_desktop_right' ) : $customizer_defaults['banner_slider_content_padding']['desktop_right'];

            $css .= '
                padding-right: ' . absint( $banner_content_padding_desktop_right ) . 'px;
            ';

            $banner_content_padding_desktop_bottom = ( xenial_get_option( 'banner_slider_content_padding_desktop_bottom' ) ) ? xenial_get_option( 'banner_slider_content_padding_desktop_bottom' ) : $customizer_defaults['banner_slider_content_padding']['desktop_bottom'];

            $css .= '
                padding-bottom: ' . absint( $banner_content_padding_desktop_bottom ) . 'px;
            ';

            $banner_content_padding_desktop_left = ( xenial_get_option( 'banner_slider_content_padding_desktop_left' ) ) ? xenial_get_option( 'banner_slider_content_padding_desktop_left' ) : $customizer_defaults['banner_slider_content_padding']['desktop_left'];

            $css .= '
                padding-left: ' . absint( $banner_content_padding_desktop_left ) . 'px;
            ';

			$css .= '}';

            // Banner slider overlay CSS

			if ( xenial_get_option( 'banner_slider_enable_overlay' ) ) {

                $css .= '
                    .xenial-banner-overlay {
                        background-color: ' . esc_attr( xenial_get_option( 'banner_slider_overlay_color' ) ) . ';
                    }
                ';
			}

            $css .= '
                .xenial-banner-content .xenial-banner-content-post-title a,
                .xenial-banner-content .xenial-post-meta-entries-inner,
                .xenial-banner-content .xenial-post-meta-entries-inner a,
                .xenial-banner-content .xenial-banner-post-excerpt {
                    color: ' . esc_attr( xenial_get_option( 'banner_slider_text_color' ) ) . ';
                }

                .xenial-banner-btn.xenial-read-more .xenial-rm-icon {
                    border-color: ' . esc_attr( xenial_get_option( 'banner_slider_text_color' ) ) . ';
                }

                .xenial-banner-btn.xenial-read-more:hover .xenial-rm-icon {
                    border-color: var(--xenial-accent-color);
                }
            ';
		}

		if ( xenial_is_page_header_activated() ) {

			$page_header_background_type = xenial_get_option( 'page_header_background_type' );

			if ( $page_header_background_type == 'image' ) {

				$css .= '.xenial-page-header-background-img {';

    				if ( ( is_archive() || is_home() || is_search() || is_404() ) && has_header_image() ) {
    					$css .= '
    						background-image: url(' . esc_url( get_header_image() ) . ');
    					';
    				}

    				if ( is_singular() ) {
    					if ( have_posts() ) :
    						while ( have_posts() ) :
    							the_post();
    							if ( has_post_thumbnail() ) {
    								$css .= '
    									background-image: url( ' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) . ' );
    								';
    							} else {
    								if ( has_header_image() ) {
    									$css .= '
    										background-image: url(' . esc_url( get_header_image() ) . ');
    									';
    								}
    							}
    						endwhile;
    						wp_reset_postdata();
    					endif;
    				}

                    $css .= '
                        background-repeat: ' . esc_attr( xenial_get_option( 'page_header_image_background_repeat' ) ) . ';
                    ';

                    $css .= '
                        background-size: ' . esc_attr( xenial_get_option( 'page_header_image_background_size' ) ) . ';
                    ';

                    $css .= '
                        background-attachment: ' . esc_attr( xenial_get_option( 'page_header_image_background_attachment' ) ) . ';
                    ';

                    $position = xenial_get_option( 'page_header_image_background_position' );
                    $position = str_replace( '-', ' ', $position );
                    $css .= '
                        background-position: ' . esc_attr( $position ) . ';
                    ';

				$css .= '}';

				if ( xenial_get_option( 'page_header_overlay_color' ) ) {
					$css .= '
						.xenial-page-header-overlay {
							background-color: ' . esc_attr( xenial_get_option( 'page_header_overlay_color' ) ) . ';
						}
					';
				}
			}

			if ( $page_header_background_type == 'color' ) {

				$css .= '.xenial-page-header-background-color {';

                    $css .= '
                        background-color: ' . esc_attr( xenial_get_option( 'page_header_bg_color' ) ) . ';
                    ';

				$css .= '}';
			}

			if ( $page_header_background_type == 'gradient' ) {
				$css .= '.xenial-page-header-background-gradient {';
				$page_header_gradient_type = xenial_get_option( 'page_header_gradient_type' );
				if ( $page_header_gradient_type == 'linear' ) {
					$css .= '
						background: linear-gradient(' . esc_attr( xenial_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -webkit-linear-gradient(' . esc_attr( xenial_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -o-linear-gradient(' . esc_attr( xenial_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
					';
				} else {
					$css .= '
						background: radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', xenial_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -webkit-radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', xenial_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -o-radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', xenial_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( xenial_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( xenial_get_option( 'page_header_gradient_location_2' ) ) . '%);
					';
				}
				$css .= '}';
			}

            // Page header height in desktop devices

			$page_header_height_desktop = ( xenial_get_option( 'page_header_height_desktop' ) ) ? xenial_get_option( 'page_header_height_desktop' ) : $customizer_defaults['page_header_height']['desktop'];

			$css .= '
			#xenial-page-header .xenial-page-header-content-wrapper {					
				height: ' . absint( $page_header_height_desktop ) . 'vh;
			}';

            // Page header content margins on desktop devices

			$css .= '.xenial-page-header-content {';            

            $page_header_content_margin_desktop_top = ( xenial_get_option( 'page_header_content_margin_desktop_top' ) ) ? xenial_get_option( 'page_header_content_margin_desktop_top' ) : $customizer_defaults['page_header_content_margin']['desktop_top'];

			$css .= '
				margin-top: ' . absint( $page_header_content_margin_desktop_top ) . 'px;
			';

            $page_header_content_margin_desktop_right = ( xenial_get_option( 'page_header_content_margin_desktop_right' ) ) ? xenial_get_option( 'page_header_content_margin_desktop_right' ) : $customizer_defaults['page_header_content_margin']['desktop_right'];

			$css .= '
				margin-right: ' . absint( $page_header_content_margin_desktop_right ) . 'px;
			';

            $page_header_content_margin_desktop_bottom = ( xenial_get_option( 'page_header_content_margin_desktop_bottom' ) ) ? xenial_get_option( 'page_header_content_margin_desktop_bottom' ) : $customizer_defaults['page_header_content_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $page_header_content_margin_desktop_bottom ) . 'px;
            ';

            $page_header_content_margin_desktop_left = ( xenial_get_option( 'page_header_content_margin_desktop_left' ) ) ? xenial_get_option( 'page_header_content_margin_desktop_left' ) : $customizer_defaults['page_header_content_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $page_header_content_margin_desktop_left ) . 'px;
            ';


            // Page header content paddings in desktop devices

            $page_header_content_padding_desktop_top = ( xenial_get_option( 'page_header_content_padding_desktop_top' ) ) ? xenial_get_option( 'page_header_content_padding_desktop_top' ) : $customizer_defaults['page_header_content_padding']['desktop_top'];

            $css .= '
                padding-top: ' . absint( $page_header_content_padding_desktop_top ) . 'px;
            ';

            $page_header_content_padding_desktop_right = ( xenial_get_option( 'page_header_content_padding_desktop_right' ) ) ? xenial_get_option( 'page_header_content_padding_desktop_right' ) : $customizer_defaults['page_header_content_padding']['desktop_right'];

            $css .= '
                padding-right: ' . absint( $page_header_content_padding_desktop_right ) . 'px;
            ';

            $page_header_content_padding_desktop_bottom = ( xenial_get_option( 'page_header_content_padding_desktop_bottom' ) ) ? xenial_get_option( 'page_header_content_padding_desktop_bottom' ) : $customizer_defaults['page_header_content_padding']['desktop_bottom'];

            $css .= '
                padding-bottom: ' . absint( $page_header_content_padding_desktop_bottom ) . 'px;
            ';

            $page_header_content_padding_desktop_left = ( xenial_get_option( 'page_header_content_padding_desktop_left' ) ) ? xenial_get_option( 'page_header_content_padding_desktop_left' ) : $customizer_defaults['page_header_content_padding']['desktop_left'];

            $css .= '
                padding-left: ' . absint( $page_header_content_padding_desktop_left ) . 'px;
            ';

			$css .= '}';


            // Page header text color

            $css .= '
                .xenial-page-header-content,
                .xenial-page-header-content a,
                .xenial-page-header-content .xenial-post-meta-entries-inner .xenial-post-meta-entry, 
                .xenial-page-header-content .xenial-post-meta-entries-inner .xenial-post-meta-entry a,
                body.xenial-theme-light.woocommerce .xenial-page-header-content .woocommerce-breadcrumb,
                body.xenial-theme-light.woocommerce .xenial-page-header-content .woocommerce-breadcrumb a,
                body.xenial-theme-dark.woocommerce .xenial-page-header-content .woocommerce-breadcrumb,
                body.xenial-theme-dark.woocommerce .xenial-page-header-content .woocommerce-breadcrumb a {
                    color: ' . esc_attr( xenial_get_option( 'page_header_text_color' ) ) . ';
                }
            ';

            $css .= '
                .xenial-page-header-content .xenial-post-meta-entries-inner a:hover,
                .xenial-page-header-content .trail-items a:hover,
                body.xenial-theme-light.woocommerce .xenial-page-header-content .woocommerce-breadcrumb a:hover,
                body.xenial-theme-dark.woocommerce .xenial-page-header-content .woocommerce-breadcrumb a:hover {
                    color: ' . esc_attr( xenial_get_option( 'page_header_link_hover_color' ) ) . ';
                }
            ';
		}


        // Sidebar width CSS

		if ( xenial_is_sidebar_active() ) {

			if ( $sidebar_width ) {

				$css .= '@media(min-width:992px) {';

				$css .= '
					#xenial-primary {
						max-width: ' . ( 100 - absint( $sidebar_width ) ) . '%;
					}';
				$css .= '
					#secondary {
						max-width: ' . absint( $sidebar_width ) . '%;
					}';

				$css .= '}';
			}	
		}


        if ( is_single() || is_page() ) {

            if ( xenial_get_option( 'single_content_width' ) === 'xenial-content-width' ) {

                if ( $site_container_width >= 1200 ) {
                    $ten_per_of_site_container_width = 1200 * 0.1;
                    $css .= '
                    @media ( min-width: 1200px ) {
                        body.xenial-has-no-sidebar.xenial-boxed-contain.xenial-content-width main#xenial-main {
                            padding-left: ' . absint( $ten_per_of_site_container_width ) . 'px;
                            padding-right: ' . absint( $ten_per_of_site_container_width ) . 'px;
                        }

                        body.xenial-has-no-sidebar.xenial-boxed-contain.xenial-content-width main#xenial-main > article > .xenial-entry-content .alignfull {
                            margin-left: -' . absint( $ten_per_of_site_container_width ) . 'px;
                            margin-right: -' . absint( $ten_per_of_site_container_width ) . 'px;
                        }

                        body.xenial-has-no-sidebar.xenial-boxed-contain.xenial-content-width main#xenial-main > article > .xenial-entry-content .alignwide {
                            margin-left: -' . absint( $ten_per_of_site_container_width / 2 ) . 'px;
                            margin-right: -' . absint( $ten_per_of_site_container_width / 2 ) . 'px;
                            width: calc(100% + ' . absint( $ten_per_of_site_container_width ) . 'px);
                        }
                    }';
                }

                if ( xenial_is_sidebar_active() ) {

                    $css .= '
                    body.xenial-has-sidebar.xenial-boxed-contain.xenial-content-width main#xenial-main > article > .xenial-entry-content .alignfull {
                        margin-left: -50px;
                        margin-right: -50px;
                    }

                    body.xenial-has-sidebar.xenial-boxed-contain.xenial-content-width main#xenial-main > article > .xenial-entry-content .alignwide {
                        margin-left: -25px;
                        margin-right: -25px;
                        width: calc(100% + 50px);
                    }
                    ';

                    if ( $site_container_width >= 1200 ) {
                        $css .= '

                        ';
                    }  
                } else {
                    
                }
            }

            if ( xenial_get_option( 'single_content_width' ) === 'xenial-narrow-width' && xenial_get_option( 'single_narrow_width' ) && ! xenial_is_woocommerce_page() ) {

                $single_content_width = xenial_get_option( 'single_narrow_width' );

                $css .= '
                    body.xenial-narrow-width main#xenial-main > article > .xenial-post-structure-categories,
                    body.xenial-narrow-width main#xenial-main > article > .xenial-page-title,
                    body.xenial-narrow-width main#xenial-main > article > .xenial-post-meta-entries,
                    body.xenial-narrow-width main#xenial-main > article > .xenial-entry-thumbnail-container,
                    body.xenial-narrow-width main#xenial-main > article > .xenial-entry-footer,
                    body.xenial-narrow-width main#xenial-main > article > .xenial-entry-content > :not([class*="align"]):not([class*="gallery"]):not(.wp-block-image):not(.quote-inner):not(.quote-post-bg) {
                        max-width: ' . absint( $single_content_width ) . 'px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                ';

                $actual_single_container_width = $site_container_width - $sidebar_width;

                if ( xenial_is_sidebar_active() ) {
                    if ( $single_content_width < $actual_single_container_width ) {
                        if ( $site_layout === 'xenial-fullwidth-contained' || $site_layout === 'xenial-fullwidth-stretched' ) {

                            $thirty_per_of_single_content_width_extra = $single_content_width + ( $single_content_width * 0.1 );

                            $css .= '
                                body.xenial-has-sidebar.xenial-fullwidth-contained main#xenial-main > article > .xenial-entry-content .alignwide,
                                body.xenial-has-sidebar.xenial-fullwidth-stretched main#xenial-main > article > .xenial-entry-content .alignwide {
                                    max-width: ' . absint( $thirty_per_of_single_content_width_extra ) . 'px;
                                    margin-left: auto;
                                    margin-right: auto;
                                }
                            ';
                        }
                    }
                }                
            }
        }        

        

        if ( xenial_get_option( 'archive_content_width' ) === 'xenial-narrow-width' && xenial_get_option( 'archive_narrow_width' ) && ! xenial_is_woocommerce_page() && ( is_archive() || is_home() || is_search() ) ) {
            $css .= '
                body.xenial-narrow-width #xenial-primary,
                body.xenial-narrow-width #xenial-breadcrumbs .xenial-container,
                body.xenial-page-header-enabled.xenial-narrow-width #xenial-page-header .xenial-container {
                    max-width: ' . absint( xenial_get_option( 'archive_narrow_width' ) ) . 'px;
                }';
        }


        // Logo height on desktop

        $site_identity_logo_height_desktop = ( xenial_get_option( 'site_identity_logo_height_desktop' ) ) ? xenial_get_option( 'site_identity_logo_height_desktop' ) : $customizer_defaults['site_identity_logo_height']['desktop'];

        $css .= '
            .custom-logo,
            .xenial-alternate-logo {
                height: ' . absint( $site_identity_logo_height_desktop ) . 'px !important;
                width: auto;
            }
        ';


		if ( xenial_is_transparent_header_activated() ) {

            $css .= '
                body.xenial-transparent-header-enabled .site-header #xenial-top-header, 
                body.xenial-transparent-header-enabled .site-header #xenial-top-header a, 
                body.xenial-transparent-header-enabled .site-header #xenial-main-header .xenial-main-header-container:not(.xenial-sticky-enabled), 
                body.xenial-transparent-header-enabled .site-header #xenial-main-header .xenial-main-header-container:not(.xenial-sticky-enabled) a {
                    color: ' . esc_attr( xenial_get_option( 'transparent_header_text_color' ) ) . ';
                }

                body.xenial-transparent-header-enabled .xenial-main-header-container:not(.xenial-sticky-enabled) .xenial-mobile-nav-toggle-btn .xenial-menu-icon-bar {
                    background-color: ' . esc_attr( xenial_get_option( 'transparent_header_text_color' ) ) . ';
                }
            ';

            $css .= ' 
                body.xenial-transparent-header-enabled .site-header .xenial-main-header-container:not(.xenial-sticky-enabled) #xenial-top-header a:hover,
                body.xenial-transparent-header-enabled .site-header #xenial-main-header .xenial-main-header-container:not(.xenial-sticky-enabled) a:hover {
                    color: ' . esc_attr( xenial_get_option( 'transparent_header_link_hover_color' ) ) . ';
                }

                body.xenial-transparent-header-enabled .xenial-main-header-container:not(.xenial-sticky-enabled) .xenial-mobile-nav-toggle-btn:hover .xenial-menu-icon-bar {
                    background-color: ' . esc_attr( xenial_get_option( 'transparent_header_link_hover_color' ) ) . ';
                }
            ';

            $css .= '
                .xenial-transparent-header-enabled .xenial-sticky-main-navigation:not(.xenial-sticky-enabled) .site-title a {
                    color: ' . esc_attr( xenial_get_option( 'transparent_header_site_title_color' ) ) . ';
                }

                .xenial-dark-mode-enabled.xenial-transparent-header-enabled .xenial-sticky-main-navigation.xenial-sticky-enabled .site-title a {
                    color: ' . esc_attr( xenial_get_option( 'dark_mode_site_title_color' ) ) . ';
                }

                .xenial-dark-mode-disabled.xenial-transparent-header-enabled .xenial-sticky-main-navigation.xenial-sticky-enabled .site-title a {
                    color: ' . esc_attr( xenial_get_option( 'site_title_color' ) ) . ';
                }
            ';

            $css .= '
                .xenial-transparent-header-enabled .xenial-sticky-main-navigation:not(.xenial-sticky-enabled.site-header) .site-description {
                    color: ' . esc_attr( xenial_get_option( 'transparent_header_tagline_color' ) ) . ';
                }

                .xenial-dark-mode-enabled.xenial-transparent-header-enabled .xenial-sticky-main-navigation.xenial-sticky-enabled .site-description {
                    color: ' . esc_attr( xenial_get_option( 'dark_mode_site_description_color' ) ) . ';
                }

                .xenial-dark-mode-disabled.xenial-transparent-header-enabled .xenial-sticky-main-navigation.xenial-sticky-enabled .site-description {
                    color: #' . esc_attr( get_header_textcolor() ) . ';
                }
            ';

            $css .= '
                body.xenial-transparent-header-enabled #xenial-top-header,
                body.xenial-transparent-header-enabled .xenial-main-header-2 {
                    border-color: ' . esc_attr( xenial_get_option( 'transparent_header_border_color' ) ) . ';
                }

                .xenial-main-header-navigation-elements-container {
                    border-top-color: ' . esc_attr( xenial_get_option( 'transparent_header_border_color' ) ) . ';
                    border-bottom-color: ' . esc_attr( xenial_get_option( 'transparent_header_border_color' ) ) . ';
                }
            ';
		}


		// Start styles for tablet devices

		$css .= '@media screen and (max-width: 768px) {';

            // Body font size and line height for tablet devices

			$css .= 'body {';

            $body_tablet_font_size = ( xenial_get_option( 'body_font_size_tablet' ) ) ? xenial_get_option( 'body_font_size_tablet' ) : $customizer_defaults['body_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $body_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h1_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h2_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h3_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h4_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h5_tablet_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h6_tablet_font_size ) ) . 'rem;
            ';

            $h6_tablet_line_height = ( xenial_get_option( 'h6_line_height_tablet' ) ) ? xenial_get_option( 'h6_line_height_tablet' ) : $customizer_defaults['h6_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h6_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // Site title font size and line height for tablet devices

	        $css .= '.site-title {';

	        $site_identity_tablet_font_size = ( xenial_get_option( 'site_identity_font_size_tablet' ) ) ? xenial_get_option( 'site_identity_font_size_tablet' ) : $customizer_defaults['site_identity_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $site_identity_tablet_font_size ) ) . 'rem;
            ';

            $site_identity_tablet_line_height = ( xenial_get_option( 'site_identity_line_height_tablet' ) ) ? xenial_get_option( 'site_identity_line_height_tablet' ) : $customizer_defaults['site_identity_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $site_identity_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // Archive post title font size for tablet devices

            $css .= '.xenial-post-element-title .xenial-entry-title {';

            $archive_post_title_tablet_font_size = ( xenial_get_option( 'archive_post_title_font_size_tablet' ) ) ? xenial_get_option( 'archive_post_title_font_size_tablet' ) : $customizer_defaults['archive_post_title_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $archive_post_title_tablet_font_size ) ) . 'rem;
            ';

            $css .= '}';

	        // Start page header styles for tablet

	        if ( xenial_is_page_header_activated() ) {

                // Page header height for talet devices

		        $page_header_height_tablet = ( xenial_get_option( 'page_header_height_tablet' ) ) ? xenial_get_option( 'page_header_height_tablet' ) : $customizer_defaults['page_header_height']['tablet'];

                $css .= '
                #xenial-page-header .xenial-page-header-content-wrapper {                    
                    height: ' . absint( $page_header_height_tablet ) . 'vh;
                }';

                // Page header content margins on tablet devices

                $css .= '.xenial-page-header-content {';            

                $page_header_content_margin_tablet_top = ( xenial_get_option( 'page_header_content_margin_tablet_top' ) ) ? xenial_get_option( 'page_header_content_margin_tablet_top' ) : $customizer_defaults['page_header_content_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $page_header_content_margin_tablet_top ) . 'px;
                ';

                $page_header_content_margin_tablet_right = ( xenial_get_option( 'page_header_content_margin_tablet_right' ) ) ? xenial_get_option( 'page_header_content_margin_tablet_right' ) : $customizer_defaults['page_header_content_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $page_header_content_margin_tablet_right ) . 'px;
                ';

                $page_header_content_margin_tablet_bottom = ( xenial_get_option( 'page_header_content_margin_tablet_bottom' ) ) ? xenial_get_option( 'page_header_content_margin_tablet_bottom' ) : $customizer_defaults['page_header_content_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $page_header_content_margin_tablet_bottom ) . 'px;
                ';

                $page_header_content_margin_tablet_left = ( xenial_get_option( 'page_header_content_margin_tablet_left' ) ) ? xenial_get_option( 'page_header_content_margin_tablet_left' ) : $customizer_defaults['page_header_content_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $page_header_content_margin_tablet_left ) . 'px;
                ';


                // Page header content paddings in tablet devices

                $page_header_content_padding_tablet_top = ( xenial_get_option( 'page_header_content_padding_tablet_top' ) ) ? xenial_get_option( 'page_header_content_padding_tablet_top' ) : $customizer_defaults['page_header_content_padding']['tablet_top'];

                $css .= '
                    padding-top: ' . absint( $page_header_content_padding_tablet_top ) . 'px;
                ';

                $page_header_content_padding_tablet_right = ( xenial_get_option( 'page_header_content_padding_tablet_right' ) ) ? xenial_get_option( 'page_header_content_padding_tablet_right' ) : $customizer_defaults['page_header_content_padding']['tablet_right'];

                $css .= '
                    padding-right: ' . absint( $page_header_content_padding_tablet_right ) . 'px;
                ';

                $page_header_content_padding_tablet_bottom = ( xenial_get_option( 'page_header_content_padding_tablet_bottom' ) ) ? xenial_get_option( 'page_header_content_padding_tablet_bottom' ) : $customizer_defaults['page_header_content_padding']['tablet_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $page_header_content_padding_tablet_bottom ) . 'px;
                ';

                $page_header_content_padding_tablet_left = ( xenial_get_option( 'page_header_content_padding_tablet_left' ) ) ? xenial_get_option( 'page_header_content_padding_tablet_left' ) : $customizer_defaults['page_header_content_padding']['tablet_left'];

                $css .= '
                    padding-left: ' . absint( $page_header_content_padding_tablet_left ) . 'px;
                ';

                $css .= '}';
			}

			// End page header styles for tablet


			// Start banner/slider styles for tablet

			if ( xenial_get_option( 'enable_banner_slider' ) ) {

				// Banner slider height on tablet devices

                $banner_slider_height_tablet = ( xenial_get_option( 'banner_slider_height_tablet' ) ) ? xenial_get_option( 'banner_slider_height_tablet' ) : $customizer_defaults['banner_slider_height']['tablet'];

                $css .= '
                .xenial-banner-content-wrapper {
                    height: ' . absint( $banner_slider_height_tablet ) . 'vh;
                }';


                // Banner margin on tablet devices

                $css .= '#xenial-banner {';

                $banner_margin_tablet_top = ( xenial_get_option( 'banner_slider_margin_tablet_top' ) ) ? xenial_get_option( 'banner_slider_margin_tablet_top' ) : $customizer_defaults['banner_slider_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $banner_margin_tablet_top ) . 'px;
                ';

                $banner_margin_tablet_right = ( xenial_get_option( 'banner_slider_margin_tablet_right' ) ) ? xenial_get_option( 'banner_slider_margin_tablet_right' ) : $customizer_defaults['banner_slider_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $banner_margin_tablet_right ) . 'px;
                ';

                $banner_margin_tablet_bottom = ( xenial_get_option( 'banner_slider_margin_tablet_bottom' ) ) ? xenial_get_option( 'banner_slider_margin_tablet_bottom' ) : $customizer_defaults['banner_slider_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_margin_tablet_bottom ) . 'px;
                ';

                $banner_margin_tablet_left = ( xenial_get_option( 'banner_slider_margin_tablet_left' ) ) ? xenial_get_option( 'banner_slider_margin_tablet_left' ) : $customizer_defaults['banner_slider_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $banner_margin_tablet_left ) . 'px;
                ';

                $css .= '}';


                // Banner slider content width on tablet devices

                $banner_slider_content_wrap_width_tablet = ( xenial_get_option( 'banner_slider_content_wrap_width_tablet' ) ) ? xenial_get_option( 'banner_slider_content_wrap_width_tablet' ) : $customizer_defaults['banner_slider_content_wrap_width']['tablet'];

                $css .= '
                .xenial-banner-content-inner {
                    max-width: ' . absint( $banner_slider_content_wrap_width_tablet ) . '%;
                }';


                // Banner content margin and padding on tablet devices

                $css .= '.xenial-banner-content {';

                $banner_content_margin_tablet_top = ( xenial_get_option( 'banner_slider_content_margin_tablet_top' ) ) ? xenial_get_option( 'banner_slider_content_margin_tablet_top' ) : $customizer_defaults['banner_slider_content_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $banner_content_margin_tablet_top ) . 'px;
                ';

                $banner_content_margin_tablet_right = ( xenial_get_option( 'banner_slider_content_margin_tablet_right' ) ) ? xenial_get_option( 'banner_slider_content_margin_tablet_right' ) : $customizer_defaults['banner_slider_content_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $banner_content_margin_tablet_right ) . 'px;
                ';

                $banner_content_margin_tablet_bottom = ( xenial_get_option( 'banner_slider_content_margin_tablet_bottom' ) ) ? xenial_get_option( 'banner_slider_content_margin_tablet_bottom' ) : $customizer_defaults['banner_slider_content_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_content_margin_tablet_bottom ) . 'px;
                ';

                $banner_content_margin_tablet_left = ( xenial_get_option( 'banner_slider_content_margin_tablet_left' ) ) ? xenial_get_option( 'banner_slider_content_margin_tablet_left' ) : $customizer_defaults['banner_slider_content_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $banner_content_margin_tablet_left ) . 'px;
                ';

                $banner_content_padding_tablet_right = ( xenial_get_option( 'banner_slider_content_padding_tablet_right' ) ) ? xenial_get_option( 'banner_slider_content_padding_tablet_right' ) : $customizer_defaults['banner_slider_content_padding']['tablet_right'];

                $css .= '
                    padding-right: ' . absint( $banner_content_padding_tablet_right ) . 'px;
                ';

                $banner_content_padding_tablet_bottom = ( xenial_get_option( 'banner_slider_content_padding_tablet_bottom' ) ) ? xenial_get_option( 'banner_slider_content_padding_tablet_bottom' ) : $customizer_defaults['banner_slider_content_padding']['tablet_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $banner_content_padding_tablet_bottom ) . 'px;
                ';

                $banner_content_padding_tablet_left = ( xenial_get_option( 'banner_slider_content_padding_tablet_left' ) ) ? xenial_get_option( 'banner_slider_content_padding_tablet_left' ) : $customizer_defaults['banner_slider_content_padding']['tablet_left'];

                $css .= '
                    padding-left: ' . absint( $banner_content_padding_tablet_left ) . 'px;
                ';

                $css .= '}';
			}

			// End banner/slider styles for tablet


            // Logo height on tablet

            $site_identity_logo_height_tablet = ( xenial_get_option( 'site_identity_logo_height_tablet' ) ) ? xenial_get_option( 'site_identity_logo_height_tablet' ) : $customizer_defaults['site_identity_logo_height']['tablet'];

            $css .= '
                .custom-logo,
                .xenial-alternate-logo {
                    height: ' . absint( $site_identity_logo_height_tablet ) . 'px !important;
                    width: auto;
                }
            ';

		$css .= '}';

		// End styles for tablet devices


		// Start styles for mobile devices

		$css .= '@media screen and (max-width: 576px) {';

			// Body font size and line height for mobile devices

            $css .= 'body {';

            $body_mobile_font_size = ( xenial_get_option( 'body_font_size_mobile' ) ) ? xenial_get_option( 'body_font_size_mobile' ) : $customizer_defaults['body_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $body_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h1_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h2_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h3_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h4_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h5_mobile_font_size ) ) . 'rem;
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
                font-size: ' . esc_attr( xenial_px_to_rem( $h6_mobile_font_size ) ) . 'rem;
            ';

            $h6_mobile_line_height = ( xenial_get_option( 'h6_line_height_mobile' ) ) ? xenial_get_option( 'h6_line_height_mobile' ) : $customizer_defaults['h6_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h6_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // Site title font size and line height for mobile devices

            $css .= '.site-title {';

            $site_identity_mobile_font_size = ( xenial_get_option( 'site_identity_font_size_mobile' ) ) ? xenial_get_option( 'site_identity_font_size_mobile' ) : $customizer_defaults['site_identity_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $site_identity_mobile_font_size ) ) . 'rem;
            ';

            $site_identity_mobile_line_height = ( xenial_get_option( 'site_identity_line_height_mobile' ) ) ? xenial_get_option( 'site_identity_line_height_mobile' ) : $customizer_defaults['site_identity_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $site_identity_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // Archive post title font size for mobile devices

            $css .= '.xenial-post-element-title .xenial-entry-title {';

            $archive_post_title_mobile_font_size = ( xenial_get_option( 'archive_post_title_font_size_mobile' ) ) ? xenial_get_option( 'archive_post_title_font_size_mobile' ) : $customizer_defaults['archive_post_title_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( xenial_px_to_rem( $archive_post_title_mobile_font_size ) ) . 'rem;
            ';

            $css .= '}';

	        // Start page header styles for mobile

	        if ( xenial_is_page_header_activated() ) {

		        // Page header height for talet devices

                $page_header_height_mobile = ( xenial_get_option( 'page_header_height_mobile' ) ) ? xenial_get_option( 'page_header_height_mobile' ) : $customizer_defaults['page_header_height']['mobile'];

                $css .= '
                #xenial-page-header .xenial-page-header-content-wrapper {                    
                    height: ' . absint( $page_header_height_mobile ) . 'vh;
                }';

                // Page header content margins on mobile devices

                $css .= '.xenial-page-header-content {';            

                $page_header_content_margin_mobile_top = ( xenial_get_option( 'page_header_content_margin_mobile_top' ) ) ? xenial_get_option( 'page_header_content_margin_mobile_top' ) : $customizer_defaults['page_header_content_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $page_header_content_margin_mobile_top ) . 'px;
                ';

                $page_header_content_margin_mobile_right = ( xenial_get_option( 'page_header_content_margin_mobile_right' ) ) ? xenial_get_option( 'page_header_content_margin_mobile_right' ) : $customizer_defaults['page_header_content_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $page_header_content_margin_mobile_right ) . 'px;
                ';

                $page_header_content_margin_mobile_bottom = ( xenial_get_option( 'page_header_content_margin_mobile_bottom' ) ) ? xenial_get_option( 'page_header_content_margin_mobile_bottom' ) : $customizer_defaults['page_header_content_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $page_header_content_margin_mobile_bottom ) . 'px;
                ';

                $page_header_content_margin_mobile_left = ( xenial_get_option( 'page_header_content_margin_mobile_left' ) ) ? xenial_get_option( 'page_header_content_margin_mobile_left' ) : $customizer_defaults['page_header_content_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $page_header_content_margin_mobile_left ) . 'px;
                ';


                // Page header content paddings in mobile devices

                $page_header_content_padding_mobile_top = ( xenial_get_option( 'page_header_content_padding_mobile_top' ) ) ? xenial_get_option( 'page_header_content_padding_mobile_top' ) : $customizer_defaults['page_header_content_padding']['mobile_top'];

                $css .= '
                    padding-top: ' . absint( $page_header_content_padding_mobile_top ) . 'px;
                ';

                $page_header_content_padding_mobile_right = ( xenial_get_option( 'page_header_content_padding_mobile_right' ) ) ? xenial_get_option( 'page_header_content_padding_mobile_right' ) : $customizer_defaults['page_header_content_padding']['mobile_right'];

                $css .= '
                    padding-right: ' . absint( $page_header_content_padding_mobile_right ) . 'px;
                ';

                $page_header_content_padding_mobile_bottom = ( xenial_get_option( 'page_header_content_padding_mobile_bottom' ) ) ? xenial_get_option( 'page_header_content_padding_mobile_bottom' ) : $customizer_defaults['page_header_content_padding']['mobile_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $page_header_content_padding_mobile_bottom ) . 'px;
                ';

                $page_header_content_padding_mobile_left = ( xenial_get_option( 'page_header_content_padding_mobile_left' ) ) ? xenial_get_option( 'page_header_content_padding_mobile_left' ) : $customizer_defaults['page_header_content_padding']['mobile_left'];

                $css .= '
                    padding-left: ' . absint( $page_header_content_padding_mobile_left ) . 'px;
                ';

                $css .= '}';
			}

			// End page header styles for mobile


			// Start banner/slider styles for mobile

			if ( xenial_get_option( 'enable_banner_slider' ) ) {

				// Banner slider height on mobile devices

                $banner_slider_height_mobile = ( xenial_get_option( 'banner_slider_height_mobile' ) ) ? xenial_get_option( 'banner_slider_height_mobile' ) : $customizer_defaults['banner_slider_height']['mobile'];

                $css .= '
                .xenial-banner-content-wrapper {
                    height: ' . absint( $banner_slider_height_mobile ) . 'vh;
                }';


                // Banner margin on mobile devices

                $css .= '#xenial-banner {';

                $banner_margin_mobile_top = ( xenial_get_option( 'banner_slider_margin_mobile_top' ) ) ? xenial_get_option( 'banner_slider_margin_mobile_top' ) : $customizer_defaults['banner_slider_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $banner_margin_mobile_top ) . 'px;
                ';

                $banner_margin_mobile_right = ( xenial_get_option( 'banner_slider_margin_mobile_right' ) ) ? xenial_get_option( 'banner_slider_margin_mobile_right' ) : $customizer_defaults['banner_slider_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $banner_margin_mobile_right ) . 'px;
                ';

                $banner_margin_mobile_bottom = ( xenial_get_option( 'banner_slider_margin_mobile_bottom' ) ) ? xenial_get_option( 'banner_slider_margin_mobile_bottom' ) : $customizer_defaults['banner_slider_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_margin_mobile_bottom ) . 'px;
                ';

                $banner_margin_mobile_left = ( xenial_get_option( 'banner_slider_margin_mobile_left' ) ) ? xenial_get_option( 'banner_slider_margin_mobile_left' ) : $customizer_defaults['banner_slider_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $banner_margin_mobile_left ) . 'px;
                ';

                $css .= '}';


                // Banner slider content width on mobile devices

                $banner_slider_content_wrap_width_mobile = ( xenial_get_option( 'banner_slider_content_wrap_width_mobile' ) ) ? xenial_get_option( 'banner_slider_content_wrap_width_mobile' ) : $customizer_defaults['banner_slider_content_wrap_width']['mobile'];

                $css .= '
                .xenial-banner-content-inner {
                    max-width: ' . absint( $banner_slider_content_wrap_width_mobile ) . '%;
                }';


                // Banner content margin and padding on mobile devices

                $css .= '.xenial-banner-content {';

                $banner_content_margin_mobile_top = ( xenial_get_option( 'banner_slider_content_margin_mobile_top' ) ) ? xenial_get_option( 'banner_slider_content_margin_mobile_top' ) : $customizer_defaults['banner_slider_content_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $banner_content_margin_mobile_top ) . 'px;
                ';

                $banner_content_margin_mobile_right = ( xenial_get_option( 'banner_slider_content_margin_mobile_right' ) ) ? xenial_get_option( 'banner_slider_content_margin_mobile_right' ) : $customizer_defaults['banner_slider_content_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $banner_content_margin_mobile_right ) . 'px;
                ';

                $banner_content_margin_mobile_bottom = ( xenial_get_option( 'banner_slider_content_margin_mobile_bottom' ) ) ? xenial_get_option( 'banner_slider_content_margin_mobile_bottom' ) : $customizer_defaults['banner_slider_content_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_content_margin_mobile_bottom ) . 'px;
                ';

                $banner_content_margin_mobile_left = ( xenial_get_option( 'banner_slider_content_margin_mobile_left' ) ) ? xenial_get_option( 'banner_slider_content_margin_mobile_left' ) : $customizer_defaults['banner_slider_content_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $banner_content_margin_mobile_left ) . 'px;
                ';

                $banner_content_padding_mobile_right = ( xenial_get_option( 'banner_slider_content_padding_mobile_right' ) ) ? xenial_get_option( 'banner_slider_content_padding_mobile_right' ) : $customizer_defaults['banner_slider_content_padding']['mobile_right'];

                $css .= '
                    padding-right: ' . absint( $banner_content_padding_mobile_right ) . 'px;
                ';

                $banner_content_padding_mobile_bottom = ( xenial_get_option( 'banner_slider_content_padding_mobile_bottom' ) ) ? xenial_get_option( 'banner_slider_content_padding_mobile_bottom' ) : $customizer_defaults['banner_slider_content_padding']['mobile_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $banner_content_padding_mobile_bottom ) . 'px;
                ';

                $banner_content_padding_mobile_left = ( xenial_get_option( 'banner_slider_content_padding_mobile_left' ) ) ? xenial_get_option( 'banner_slider_content_padding_mobile_left' ) : $customizer_defaults['banner_slider_content_padding']['mobile_left'];

                $css .= '
                    padding-left: ' . absint( $banner_content_padding_mobile_left ) . 'px;
                ';

                $css .= '}';
			}

			// End banner/slider styles for mobile


            // Logo height on mobile

            $site_identity_logo_height_mobile = ( xenial_get_option( 'site_identity_logo_height_mobile' ) ) ? xenial_get_option( 'site_identity_logo_height_mobile' ) : $customizer_defaults['site_identity_logo_height']['mobile'];

            $css .= '
                .custom-logo,
                .xenial-alternate-logo {
                    height: ' . absint( $site_identity_logo_height_mobile ) . 'px !important;
                    width: auto;
                }
            ';

            // End site logo height style for mobile

		$css .= '}';

		// End styles for mobile devices

		// Allow CSS to be filtered.
		$css = apply_filters( 'xenial_dynamic_css', $css ); 

		// Minify the CSS code.
		$css = xenial_minify_css( $css );

		return $css;
	}
}

/**
 * Simple minification of CSS codes.
 *
 * @since    2.0.8
 */
if ( ! function_exists( 'xenial_minify_css' ) ) {

	function xenial_minify_css( $css ) {
		$css = preg_replace( '/\s+/', ' ', $css );
		$css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
		$css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
		$css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
		$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
		$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );

		return trim( $css );
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


if ( ! function_exists( 'xenial_px_to_rem' ) ) {

	function xenial_px_to_rem( $px ) {

		return ( 1/16 * $px );
	}
}