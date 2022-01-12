<?php 


if ( ! function_exists( 'xenial_dynamic_header_social_links_css' ) ) {

	function xenial_dynamic_header_social_links_css() {

		$header_social_links_items_background_colors = xenial_json_decode( xenial_get_option( 'header_social_link_background_color' ) );

		$header_social_links_items_borders = xenial_json_decode( xenial_get_option( 'header_social_link_icon_border' ) );

		$header_social_links_icon_color_type = xenial_get_option( 'header_social_link_icon_color_type' );

		$header_social_links_icon_colors = xenial_json_decode( xenial_get_option( 'header_social_link_icon_color' ) );

		$header_social_links_title_colors = xenial_json_decode( xenial_get_option( 'header_social_link_title_color' ) );


		$header_social_links_desktop = array(
			'items-spacing' => xenial_get_option( 'header_social_link_item_spacing_desktop' ),
			'background-spacing' => xenial_get_option( 'header_social_link_icon_background_spacing_desktop' ),
			'icon-size' => xenial_get_option( 'header_social_link_icon_size_desktop' )
		);

		$header_social_links_title_font_desktop = array(
			'font-size' => xenial_get_option( 'header_social_link_title_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_social_link_title_line_height_desktop' )
		);	

		
		$css = '';

		$css .= '.xe-header-element-social {';
			$css .= 'gap: ' . esc_attr( $header_social_links_desktop['items-spacing'] ) . 'px;';
		$css .= '}';
		

		$css .= '.xe-header-element-social li a {';
			$css .= 'padding: ' . esc_attr( $header_social_links_desktop['background-spacing'] ) . 'px;';

			if ( $header_social_links_icon_color_type == 'custom' ) {
				$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['desktop']['initial'] ) . ';';
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['initial'] ) . ';';
			} else {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['initial'] ) . ';';
			}

			$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['desktop']['initial'] ) . ';';

			$css .= xenial_dynamic_border_css( $header_social_links_items_borders['desktop'] );

			$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['desktop']['border_colors']['initial'] ) . ';';
		$css .= '}';

		$css .= '.xe-header-element-social li a:hover {';
			if ( $header_social_links_icon_color_type == 'custom' ) {
				$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['desktop']['hover'] ) . ';';
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['hover'] ) . ';';
			} else {
				$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['desktop']['hover'] ) . ';';
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['hover'] ) . ';';
			}

			$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['desktop']['hover'] ) . ';';

			$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['desktop']['border_colors']['hover'] ) . ';';
		$css .= '}';

		$css .= '.xe-header-element-social li a svg {';
			$css .= 'height: ' . esc_attr( $header_social_links_desktop['icon-size'] ) . 'px;';
			$css .= 'width: ' . esc_attr( $header_social_links_desktop['icon-size'] ) . 'px;';
		$css .= '}';

		$css .= '.xe-header-element-social li a .xe-social-title {';
			$css .= xenial_dynamic_font_css( $header_social_links_title_font_desktop );
		$css .= '}';

		$header_social_links_tablet = array(
			'items-spacing' => xenial_get_option( 'header_social_link_item_spacing_tablet' ),
			'background-spacing' => xenial_get_option( 'header_social_link_icon_background_spacing_tablet' ),
			'icon-size' => xenial_get_option( 'header_social_link_icon_size_tablet' )
		);

		$header_social_links_title_font_tablet = array(
			'font-size' => xenial_get_option( 'header_social_link_title_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_social_link_title_line_height_tablet' )
		);	


        $css .= '@media screen and (max-width: 768px) {';    

        	$css .= '.xe-header-element-social {';
				$css .= 'gap: ' . esc_attr( $header_social_links_tablet['items-spacing'] ) . 'px;';
			$css .= '}';
			

			$css .= '.xe-header-element-social li a {';
				$css .= 'padding: ' . esc_attr( $header_social_links_tablet['background-spacing'] ) . 'px;';

				if ( $header_social_links_icon_color_type == 'custom' ) {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['tablet']['initial'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['initial'] ) . ';';
				} else {
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['initial'] ) . ';';
				}

				$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['tablet']['initial'] ) . ';';

				$css .= xenial_dynamic_border_css( $header_social_links_items_borders['tablet'] );

				$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['tablet']['border_colors']['initial'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element-social li a:hover {';
				if ( $header_social_links_icon_color_type == 'custom' ) {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['tablet']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['hover'] ) . ';';
				} else {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['tablet']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['hover'] ) . ';';
				}

				$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['tablet']['hover'] ) . ';';

				$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['tablet']['border_colors']['hover'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element-social li a svg {';
				$css .= 'height: ' . esc_attr( $header_social_links_tablet['icon-size'] ) . 'px;';
				$css .= 'width: ' . esc_attr( $header_social_links_tablet['icon-size'] ) . 'px;';
			$css .= '}';

			$css .= '.xe-header-element-social li a .xe-social-title {';
				$css .= xenial_dynamic_font_css( $header_social_links_title_font_tablet );
			$css .= '}';

        $css .= '}';


        $header_social_links_mobile = array(
			'items-spacing' => xenial_get_option( 'header_social_link_item_spacing_mobile' ),
			'background-spacing' => xenial_get_option( 'header_social_link_icon_background_spacing_mobile' ),
			'icon-size' => xenial_get_option( 'header_social_link_icon_size_mobile' )
		);

		$header_social_links_title_font_mobile = array(
			'font-size' => xenial_get_option( 'header_social_link_title_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_social_link_title_line_height_mobile' )
		);	

        $css .= '@media screen and (max-width: 576px) {';

        	$css .= '.xe-header-element-social {';
				$css .= 'gap: ' . esc_attr( $header_social_links_mobile['items-spacing'] ) . 'px;';
			$css .= '}';
			

			$css .= '.xe-header-element-social li a {';
				$css .= 'padding: ' . esc_attr( $header_social_links_mobile['background-spacing'] ) . 'px;';

				if ( $header_social_links_icon_color_type == 'custom' ) {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['mobile']['initial'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['initial'] ) . ';';
				} else {
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['initial'] ) . ';';
				}

				$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['mobile']['initial'] ) . ';';

				$css .= xenial_dynamic_border_css( $header_social_links_items_borders['mobile'] );

				$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['mobile']['border_colors']['initial'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element-social li a:hover {';
				if ( $header_social_links_icon_color_type == 'custom' ) {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['mobile']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['hover'] ) . ';';
				} else {
					$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['mobile']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['hover'] ) . ';';
				}

				$css .= 'background-color: ' . esc_attr( $header_social_links_items_background_colors['mobile']['hover'] ) . ';';

				$css .= 'border-color: ' . esc_attr( $header_social_links_items_borders['mobile']['border_colors']['hover'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element-social li a svg {';
				$css .= 'height: ' . esc_attr( $header_social_links_mobile['icon-size'] ) . 'px;';
				$css .= 'width: ' . esc_attr( $header_social_links_mobile['icon-size'] ) . 'px;';
			$css .= '}';

			$css .= '.xe-header-element-social li a .xe-social-title {';
				$css .= xenial_dynamic_font_css( $header_social_links_title_font_mobile );
			$css .= '}';

        $css .= '}';

        return $css;
	}
}