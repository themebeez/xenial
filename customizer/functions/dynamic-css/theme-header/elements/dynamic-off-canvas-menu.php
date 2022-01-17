<?php 


if ( ! function_exists( 'xenial_dynamic_header_off_canvas_menu_css' ) ) {

	function xenial_dynamic_header_off_canvas_menu_css() {

		$header_off_canvas_menu_items_padding = array(
			'padding-top' => xenial_get_option( 'offcanvas_menu_item_padding_top' ),
			'padding-right' => xenial_get_option( 'offcanvas_menu_item_padding_right' ),
			'padding-bottom' => xenial_get_option( 'offcanvas_menu_item_padding_bottom' ),
			'padding-left' => xenial_get_option( 'offcanvas_menu_item_padding_left' )
		);

		$display_header_off_canvas_menu_items_divider = xenial_get_option( 'display_offcanvas_menu_item_divider' );

		$header_off_canvas_menu_items_font = array(
			'font-size' => xenial_get_option( 'offcanvas_menu_item_font_size' ),
			'line-height' => xenial_get_option( 'offcanvas_menu_item_line_height' ),
			'font-weight' => xenial_get_option( 'offcanvas_menu_item_font_weight' ),
			'font-style' => xenial_get_option( 'offcanvas_menu_item_font_style' ),
			'text-transform' => xenial_get_option( 'offcanvas_menu_item_text_transform' )
		);

		$header_off_canvas_menu_items_font_colors = xenial_json_decode( xenial_get_option( 'offcanvas_menu_item_color' ) );



		$header_off_canvas_menu_submenu_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'offcanvas_menu_submenu_toggle_button_background_color' ) );

		$header_off_canvas_menu_submenu_toggle_button_font_colors = xenial_json_decode( xenial_get_option( 'offcanvas_menu_submenu_toggle_button_label_color' ) );

		$header_off_canvas_menu_submenu_toggle_button_top_offset = xenial_get_option( 'offcanvas_menu_submenu_toggle_button_top_offset' );

		$header_off_canvas_menu_submenu_toggle_button_borders = xenial_json_decode( xenial_get_option( 'offcanvas_menu_submenu_toggle_button_border' ) );

		$css = '';

		$css .= ':root {';
			if ( $header_off_canvas_menu_items_font_colors['initial'] ) {
				$css .= '--xe_canvas_menu_item_color: ' . esc_attr( $header_off_canvas_menu_items_font_colors['initial'] ) . ';';
			}
			
			if ( $header_off_canvas_menu_items_font['font-size'] ) {
				$css .= '--xe_canvas_menu_item_font_size: ' . esc_attr( $header_off_canvas_menu_items_font['font-size'] ) . 'px;';
			}
			
			if ( $header_off_canvas_menu_items_font['font-weight'] ) {
				$css .= '--xe_canvas_menu_item_font_weight: ' . esc_attr( $header_off_canvas_menu_items_font['font-weight'] ) . ';';
			}
			
			if ( $header_off_canvas_menu_items_font['line-height'] ) {
				$css .= '--xe_canvas_menu_item_line_height: ' . esc_attr( $header_off_canvas_menu_items_font['line-height'] ) . ';';
			}
			
			if ( $header_off_canvas_menu_items_padding['padding-top'] ) {
				$css .= '--xe_canvas_menu_item_top_padding: ' . esc_attr( $header_off_canvas_menu_items_padding['padding-top'] ) . 'px;';
			}
			
			if ( $header_off_canvas_menu_items_padding['padding-bottom'] ) {
				$css .= '--xe_canvas_menu_item_bottom_padding: ' . esc_attr( $header_off_canvas_menu_items_padding['padding-bottom'] ) . 'px;';
			}	

			if ( $header_off_canvas_menu_submenu_toggle_button_background_colors['initial'] )	{
				$css .= '--xe_canvas_menu_submenu_toggle_button_background_color: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_background_colors['initial'] ) . ';';
			}

			if ( $header_off_canvas_menu_submenu_toggle_button_font_colors['initial'] )	{
				$css .= '--xe_canvas_menu_submenu_toggle_button_color: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_font_colors['initial'] ) . ';';
			}

			if ( $header_off_canvas_menu_submenu_toggle_button_top_offset )	{
				$css .= '--xe_canvas_menu_submenu_toggle_button_distance: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_top_offset ) . 'px;';
			}	

			if ( $display_header_off_canvas_menu_items_divider ) {
				$header_off_canvas_menu_items_divider_width = xenial_get_option( 'offcanvas_menu_item_divider_width' );
				$header_off_canvas_menu_items_divider_color = xenial_json_decode( xenial_get_option( 'offcanvas_menu_item_divider_color' ) );

				if ( $header_off_canvas_menu_items_divider_width ) {
					$css .= '--xe_canvas_menu_item_seperator_width: ' . esc_attr( $header_off_canvas_menu_items_divider_width ) . 'px;';
				}
				
				if ( $header_off_canvas_menu_items_divider_color['initial'] ) {
					$css .= '--xe_canvas_menu_item_seperator_color: ' . esc_attr( $header_off_canvas_menu_items_divider_color['initial'] ) . ';';
				}				
			} else {
				$css .= '--xe_canvas_menu_item_seperator_width: 0;';
			}
		$css .= '}';

		if ( $header_off_canvas_menu_items_font_colors['initial'] ) {
			$css .= '[xe-submenu-style="revealing"] .xe-button.xe-canvassubmenu-goback-button {';
				$css .= 'color: ' . esc_attr( $header_off_canvas_menu_items_font_colors['initial'] ) . ';';
			$css .= '}';	
		}		

		if ( $header_off_canvas_menu_items_font_colors['initial'] ) {
			$css .= '[xe-submenu-style="revealing"] .xe-button.xe-canvassubmenu-goback-button svg {';
				$css .= 'fill: ' . esc_attr( $header_off_canvas_menu_items_font_colors['initial'] ) . ';';
			$css .= '}';
		}		

		if ( $header_off_canvas_menu_items_padding['padding-left'] || $header_off_canvas_menu_items_padding['padding-right'] ) {
			$css .= '.xe-offcanvas-navigation ul li {';
				if ( $header_off_canvas_menu_items_padding['padding-left'] ) {
					$css .= 'padding-left: ' . esc_attr( $header_off_canvas_menu_items_padding['padding-left'] ) . 'px;';
				}
				
				if ( $header_off_canvas_menu_items_padding['padding-right'] ) {
					$css .= 'padding-right: ' . esc_attr( $header_off_canvas_menu_items_padding['padding-right'] ) . 'px;';
				}				
			$css .= '}';	
		}
		

		if ( $header_off_canvas_menu_items_font['font-style'] || $header_off_canvas_menu_items_font['text-transform'] ) {
			$css .= '.xe-offcanvas-navigation ul li a {';
				if ( $header_off_canvas_menu_items_font['font-style'] ) {
					$css .= 'font-style: ' . esc_attr( $header_off_canvas_menu_items_font['font-style'] ) . ';';
				}
				
				if ( $header_off_canvas_menu_items_font['text-transform'] ) {
					$css .= 'text-transform: ' . esc_attr( $header_off_canvas_menu_items_font['text-transform'] ) . ';';
				}				
			$css .= '}';
		}		

		if ( $header_off_canvas_menu_items_font_colors['hover'] ) {
			$css .= '.xe-offcanvas-navigation ul li a:hover {';
				$css .= 'color: ' . esc_attr( $header_off_canvas_menu_items_font_colors['hover'] ) . ';';
			$css .= '}';	
		}		

		if ( $header_off_canvas_menu_items_font_colors['active'] ) {
			$css .= '.xe-offcanvas-navigation ul li.current-menu-item a {';
				$css .= 'color: ' . esc_attr( $header_off_canvas_menu_items_font_colors['active'] ) . ';';
			$css .= '}';	
		}



		$css .= '.xe-offcanvas-navigation .xe-toggle-canvassubmenu {';
			$css .= xenial_dynamic_border_css( $header_off_canvas_menu_submenu_toggle_button_borders );
		$css .= '}';

		$css .= '.xe-offcanvas-navigation .xe-toggle-canvassubmenu:hover {';
			if ( $header_off_canvas_menu_submenu_toggle_button_background_colors['hover'] ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_background_colors['hover'] ) . ';';
			}
			if ( $header_off_canvas_menu_submenu_toggle_button_font_colors['hover'] ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_font_colors['hover'] ) . ';';
			}	
			if ( $header_off_canvas_menu_submenu_toggle_button_borders['border_colors']['hover'] ) {
				$css .= 'border-color: ' . esc_attr( $header_off_canvas_menu_submenu_toggle_button_borders['border_colors']['hover'] ) . ';';
			}		
		$css .= '}';

		return $css;
	}
}