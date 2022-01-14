<?php 



if ( ! function_exists( 'xenial_dynamic_header_search_css' ) ) {

	function xenial_dynamic_header_search_css() {

		$css = '';

		$search_modal_background_colors = xenial_json_decode( xenial_get_option( 'header_search_modal_background_color' ) );

		if ( $search_modal_background_colors['initial'] ) {
			$css .= '#xe-search-form {';
				$css .= 'background-color: ' . esc_attr( $search_modal_background_colors['initial'] ) . ';';  
			$css .= '}';
		}
		

		// Search bar
		$search_bar_font_colors = xenial_json_decode( xenial_get_option( 'header_search_bar_text_color' ) );

		$search_bar_borders = xenial_json_decode( xenial_get_option( 'header_search_bar_border' ) );

		$search_bar_background_colors = xenial_json_decode( xenial_get_option( 'header_search_bar_background_color' ) );

		$search_bar_width_desktop = xenial_get_option( 'header_search_bar_width_desktop' );

		$search_bar_height_desktop = xenial_get_option( 'header_search_bar_height_desktop' );		

		$search_bar_font_desktop = array(
			'font-size' => xenial_get_option( 'header_search_bar_font_size_desktop' )
		);

		// Search bar dynamic CSS.
		$css .= 'input.xe-search-form-search-bar {';
			if ( $search_bar_background_colors['desktop']['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $search_bar_background_colors['desktop']['initial'] ) . ';';
			}
			
			if ( $search_bar_font_colors['desktop']['initial'] ) {
				$css .= 'color: ' . esc_attr( $search_bar_font_colors['desktop']['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_font_css( $search_bar_font_desktop );
			$css .= xenial_dynamic_border_css( $search_bar_borders['desktop'] ); 
		$css .= '}';

		if ( $search_bar_height_desktop || $search_bar_width_desktop ) {
			$css .= '.xe-header-element-search-bar form input.xe-search-form-search-bar {';
				if ( $search_bar_height_desktop ) {
					$css .= 'height: ' . esc_attr( $search_bar_height_desktop ) . 'px;'; 
				}
				
				if ( $search_bar_width_desktop ) {
					$css .= 'width: ' . esc_attr( $search_bar_width_desktop ) . 'px;';
				}
				
			$css .= '}';
		}
		

		


		// Search modal toggle button
		$search_modal_toggle_button_label_colors = xenial_json_decode( xenial_get_option( 'header_search_modal_toggle_button_text_color' ) );

		$search_modal_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'header_search_modal_toggle_button_background_color' ) );

		$search_modal_toggle_button_borders = xenial_json_decode( xenial_get_option( 'header_search_modal_toggle_button_border' ) );

		$search_modal_toggle_button_font_desktop = array(
			'font-size' => xenial_get_option( 'header_search_modal_toggle_button_font_size_desktop' )
		);

		$search_modal_toggle_button_padding_desktop = array(
			'padding-top' => xenial_get_option( 'header_search_modal_toggle_button_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_toggle_button_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_toggle_button_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_toggle_button_padding_desktop_right' )
		);

		// Search modal toggle button dynamic CSS.
		$css .= '#xe-header-element-search-button {';
			if ( $search_modal_toggle_button_background_colors['desktop']['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['desktop']['initial'] ) . ';';
			}
			
			if ( $search_modal_toggle_button_label_colors['desktop']['initial'] ) {
				$css .= 'color: ' . esc_attr( $search_modal_toggle_button_label_colors['desktop']['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_font_css( $search_modal_toggle_button_font_desktop );
			$css .= xenial_dynamic_border_css( $search_modal_toggle_button_borders['desktop'] );
			$css .= xenial_dynamic_spacing_css( $search_modal_toggle_button_padding_desktop );
		$css .= '}';

		if ( $search_modal_toggle_button_label_colors['desktop']['initial'] || $search_modal_toggle_button_font_desktop['font-size'] || $search_modal_toggle_button_font_desktop['font-size'] ) {
			$css .= '#xe-header-element-search-button svg {';
				if ( $search_modal_toggle_button_label_colors['desktop']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['desktop']['initial'] ) . ';';
				}
				
				if ( $search_modal_toggle_button_font_desktop['font-size'] ) {
					$css .= 'height: ' . esc_attr( $search_modal_toggle_button_font_desktop['font-size'] ) . 'px;';
				}
				
				if ( $search_modal_toggle_button_font_desktop['font-size'] ) {
					$css .= 'width: ' . esc_attr( $search_modal_toggle_button_font_desktop['font-size'] ) . 'px;';
				}
				
			$css .= '}';
		}
		

		if ( $search_modal_toggle_button_background_colors['desktop']['hover'] || $search_modal_toggle_button_label_colors['desktop']['hover'] || $search_modal_toggle_button_borders['desktop']['border_colors']['hover'] ) {
			$css .= '#xe-header-element-search-button:hover {';
				if ( $search_modal_toggle_button_background_colors['desktop']['hover'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['desktop']['hover'] ) . ';';
				}
				
				if ( $search_modal_toggle_button_label_colors['desktop']['hover'] ) {
					$css .= 'color: ' . esc_attr( $search_modal_toggle_button_label_colors['desktop']['hover'] ) . ';';
				}
				
				if ( $search_modal_toggle_button_borders['desktop']['border_colors']['hover'] ) {
					$css .= 'border-color: ' . esc_attr( $search_modal_toggle_button_borders['desktop']['border_colors']['hover'] ) . ';';
				}
				
			$css .= '}';
		}
		

		if ( $search_modal_toggle_button_label_colors['desktop']['hover'] ) {
			$css .= '#xe-header-element-search-button:hover svg {';
				$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}
		

		


		// Search submit button
		$search_modal_submit_button_label_colors = xenial_json_decode( xenial_get_option( 'header_search_bar_submit_button_text_color' ) );

		$search_modal_submit_button_font_desktop = array(
			'font-size' => xenial_get_option( 'header_search_bar_submit_button_font_size_desktop' )
		);

		// Search submit button dynamic CSS.
		$css .= '.xe-search-form-submit-btn, #xe-search-form form .xe-button {';
			if ( $search_modal_submit_button_label_colors['desktop']['initial'] ) {
				$css .= 'color: ' . esc_attr( $search_modal_submit_button_label_colors['desktop']['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_font_css( $search_modal_submit_button_font_desktop );
		$css .= '}';

		if ( $search_modal_submit_button_font_desktop['font-size'] || $search_modal_submit_button_label_colors['desktop']['initial'] || $search_modal_submit_button_font_desktop['font-size'] ) {
			$css .= '.xe-search-form-submit-btn svg, #xe-search-form form .xe-button svg {';
				if ( $search_modal_submit_button_font_desktop['font-size'] ) {
					$css .= 'height: ' . esc_attr( $search_modal_submit_button_font_desktop['font-size'] ) . 'px;';
				}
				
				if ( $search_modal_submit_button_label_colors['desktop']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['desktop']['initial'] ) . ';';
				}
				
				if ( $search_modal_submit_button_font_desktop['font-size'] ) {
					$css .= 'width: ' . esc_attr( $search_modal_submit_button_font_desktop['font-size'] ) . 'px;';
				}
				
			$css .= '}';
		}
		

		if ( $search_modal_submit_button_label_colors['desktop']['hover'] ) {
			$css .= '.xe-search-form-submit-btn:hover svg, #xe-search-form form .xe-button:hover svg {';
				$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}
		


		// Search modal close button
		$search_modal_close_button_label_colors = xenial_json_decode( xenial_get_option( 'header_search_modal_close_button_text_color' ) );

		$search_modal_close_button_background_colors = xenial_json_decode( xenial_get_option( 'header_search_modal_close_button_background_color' ) );

		$search_modal_close_button_borders = xenial_json_decode( xenial_get_option( 'header_search_modal_close_button_border' ) );

		$search_modal_close_button_font_desktop = array(
			'font-size' => xenial_get_option( 'header_search_modal_close_button_font_size_desktop' )
		);

		$search_modal_close_button_padding_desktop = array(
			'padding-top' => xenial_get_option( 'header_search_modal_close_button_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_close_button_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_close_button_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_close_button_padding_desktop_left' )
		);

		// Search modal close button dynamic CSS.
		$css .= '#xe-search-form #xe-close-search-box {';
			if ( $search_modal_close_button_background_colors['desktop']['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['desktop']['initial'] ) . ';';
			}
			
			if ( $search_modal_close_button_label_colors['desktop']['initial'] ) {
				$css .= 'color: ' . esc_attr( $search_modal_close_button_label_colors['desktop']['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_font_css( $search_modal_close_button_font_desktop );
			$css .= xenial_dynamic_border_css( $search_modal_close_button_borders['desktop'] );
			$css .= xenial_dynamic_spacing_css( $search_modal_close_button_padding_desktop );
		$css .= '}';

		if ( $search_modal_close_button_label_colors['desktop']['initial'] ) {
			$css .= '#xe-search-form #xe-close-search-box svg {';
				$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}
		

		if ( $search_modal_close_button_font_desktop['font-size'] || $search_modal_close_button_font_desktop['font-size'] ) {
			$css .= '#xe-search-form #xe-close-search-box svg {';
				if ( $search_modal_close_button_font_desktop['font-size'] ) {
					$css .= 'height: ' . esc_attr( $search_modal_close_button_font_desktop['font-size'] ) . 'px;';
				}
				
				if ( $search_modal_close_button_font_desktop['font-size'] ) {
					$css .= 'width: ' . esc_attr( $search_modal_close_button_font_desktop['font-size'] ) . 'px;';
				}
				
			$css .= '}';
		}
		

		if ( $search_modal_close_button_background_colors['desktop']['hover'] || $search_modal_close_button_label_colors['desktop']['hover'] || $search_modal_close_button_borders['desktop']['border_colors']['hover'] ) {
			$css .= '#xe-search-form #xe-close-search-box:hover {';
				if ( $search_modal_close_button_background_colors['desktop']['hover'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['desktop']['hover'] ) . ';';
				}
				
				if ( $search_modal_close_button_label_colors['desktop']['hover'] ) {
					$css .= 'color: ' . esc_attr( $search_modal_close_button_label_colors['desktop']['hover'] ) . ';';
				}
				
				if ( $search_modal_close_button_borders['desktop']['border_colors']['hover'] ) {
					$css .= 'border-color: ' . esc_attr( $search_modal_close_button_borders['desktop']['border_colors']['hover'] ) . ';';
				}
				
			$css .= '}';
		}
		

		if ( $search_modal_close_button_label_colors['desktop']['hover'] ) {
			$css .= '#xe-search-form #xe-close-search-box:hover svg {';
				$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}
		



		$search_bar_width_tablet = xenial_get_option( 'header_search_bar_width_tablet' );

		$search_bar_height_tablet = xenial_get_option( 'header_search_bar_height_tablet' );		

		$search_bar_font_tablet = array(
			'font-size' => xenial_get_option( 'header_search_bar_font_size_tablet' )
		);

		$search_modal_toggle_button_font_tablet = array(
			'font-size' => xenial_get_option( 'header_search_modal_toggle_button_font_size_tablet' )
		);

		$search_modal_submit_button_font_tablet = array(
			'font-size' => xenial_get_option( 'header_search_bar_submit_button_font_size_tablet' )
		);

		$search_modal_close_button_font_tablet = array(
			'font-size' => xenial_get_option( 'header_search_modal_close_button_font_size_tablet' )
		);

		$search_modal_toggle_button_padding_tablet = array(
			'padding-top' => xenial_get_option( 'header_search_modal_toggle_button_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_toggle_button_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_toggle_button_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_toggle_button_padding_tablet_right' )
		);

		$search_modal_close_button_padding_tablet = array(
			'padding-top' => xenial_get_option( 'header_search_modal_close_button_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_close_button_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_close_button_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_close_button_padding_tablet_left' )
		);

		// Dynamic CSS tablet responsive

		$css .= '@media screen and (max-width: 768px) {';
			// Search bar dynamic CSS tablet responsive
			$css .= '.xe-search-form-search-bar {';
				if ( $search_bar_background_colors['tablet']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_bar_background_colors['tablet']['initial'] ) . ';';
				}
				
				if ( $search_bar_font_colors['tablet']['initial'] ) {
					$css .= 'color: ' . esc_attr( $search_bar_font_colors['tablet']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_bar_font_tablet );
				$css .= xenial_dynamic_border_css( $search_bar_borders['tablet'] ); 
			$css .= '}';

			if ( $search_bar_height_tablet || $search_bar_width_tablet ) {
				$css .= '.xe-header-element-search-bar form input.xe-search-form-search-bar {';
					if ( $search_bar_height_tablet ) {
						$css .= 'height: ' . esc_attr( $search_bar_height_tablet ) . 'px;'; 
					}
					
					if ( $search_bar_width_tablet ) {
						$css .= 'width: ' . esc_attr( $search_bar_width_tablet ) . 'px;';
					}
					
				$css .= '}';
			}
			

			// Search modal toggle button dynamic CSS tablet responsive
			$css .= '#xe-header-element-search-button {';
				if ( $search_modal_toggle_button_background_colors['tablet']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['tablet']['initial'] ) . ';';
				}
				
				if ( $search_modal_toggle_button_label_colors['tablet']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['tablet']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_toggle_button_font_tablet );
				$css .= xenial_dynamic_border_css( $search_modal_toggle_button_borders['tablet'] );
				$css .= xenial_dynamic_spacing_css( $search_modal_toggle_button_padding_tablet );
			$css .= '}';

			if ( $search_modal_toggle_button_font_tablet['font-size'] || $search_modal_toggle_button_font_tablet['font-size'] ) {
				$css .= '#xe-header-element-search-button svg {';
					if ( $search_modal_toggle_button_font_tablet['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_toggle_button_font_tablet['font-size'] ) . 'px;';
					}	
					
					if ( $search_modal_toggle_button_font_tablet['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_toggle_button_font_tablet['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_toggle_button_background_colors['tablet']['hover'] || $search_modal_toggle_button_label_colors['tablet']['hover'] || $search_modal_toggle_button_borders['tablet']['border_colors']['hover'] ) {
				$css .= '#xe-header-element-search-button:hover {';
					if ( $search_modal_toggle_button_background_colors['tablet']['hover'] ) {
						$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['tablet']['hover'] ) . ';';
					}
					
					if ( $search_modal_toggle_button_label_colors['tablet']['hover'] ) {
						$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['tablet']['hover'] ) . ';';
					}
					
					if ( $search_modal_toggle_button_borders['tablet']['border_colors']['hover'] ) {
						$css .= 'border-color: ' . esc_attr( $search_modal_toggle_button_borders['tablet']['border_colors']['hover'] ) . ';';
					}
					
				$css .= '}';
			}
			


			// Search submit button dynamic CSS tablet responsive
			$css .= '.xe-search-form-submit-btn, #xe-search-form form .xe-button {';
				if ( $search_modal_submit_button_label_colors['tablet']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['tablet']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_submit_button_font_tablet );
			$css .= '}';

			if ( $search_modal_submit_button_font_tablet['font-size'] || $search_modal_submit_button_font_tablet['font-size'] ) {
				$css .= '.xe-search-form-submit-btn svg, #xe-search-form form .xe-button svg {';
					if ( $search_modal_submit_button_font_tablet['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_submit_button_font_tablet['font-size'] ) . 'px;';
					}
					
					if ( $search_modal_submit_button_font_tablet['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_submit_button_font_tablet['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_submit_button_label_colors['tablet']['hover'] ) {
				$css .= '.xe-search-form-submit-btn:hover svg, #xe-search-form form .xe-button:hover svg {';
					$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['tablet']['hover'] ) . ';';
				$css .= '}';
			}
			

			// Search modal close button dynamic CSS tablet responsive
			$css .= '#xe-close-search-box {';
				if ( $search_modal_close_button_background_colors['tablet']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['tablet']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_close_button_font_tablet );
				$css .= xenial_dynamic_border_css( $search_modal_close_button_borders['tablet'] );
				$css .= xenial_dynamic_spacing_css( $search_modal_close_button_padding_tablet );
			$css .= '}';

			if ( $search_modal_close_button_label_colors['tablet']['initial'] || $search_modal_close_button_font_tablet['font-size'] || $search_modal_close_button_font_tablet['font-size'] ) {
				$css .= '#xe-close-search-box svg {';
					if ( $search_modal_close_button_label_colors['tablet']['initial'] ) {
						$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['tablet']['initial'] ) . ';';
					}
					
					if ( $search_modal_close_button_font_tablet['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_close_button_font_tablet['font-size'] ) . 'px;';
					}
					
					if ( $search_modal_close_button_font_tablet['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_close_button_font_tablet['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_close_button_background_colors['tablet']['hover'] || $search_modal_close_button_borders['tablet']['border_colors']['hover'] ) {
				$css .= '#xe-close-search-box:hover {';
					if ( $search_modal_close_button_background_colors['tablet']['hover'] ) {
						$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['tablet']['hover'] ) . ';';
					}
					
					if ( $search_modal_close_button_borders['tablet']['border_colors']['hover'] ) {
						$css .= 'border-color: ' . esc_attr( $search_modal_close_button_borders['tablet']['border_colors']['hover'] ) . ';';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_close_button_label_colors['tablet']['hover'] ) {
				$css .= '#xe-close-search-box:hover svg {';
					$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['tablet']['hover'] ) . ';';
				$css .= '}';
			}
			
		$css .= '}';


		$search_bar_width_mobile = xenial_get_option( 'header_search_bar_width_mobile' );

		$search_bar_height_mobile = xenial_get_option( 'header_search_bar_height_mobile' );		

		$search_bar_font_mobile = array(
			'font-size' => xenial_get_option( 'header_search_bar_font_size_mobile' )
		);

		$search_modal_toggle_button_font_mobile = array(
			'font-size' => xenial_get_option( 'header_search_modal_toggle_button_font_size_mobile' )
		);

		$search_modal_submit_button_font_mobile = array(
			'font-size' => xenial_get_option( 'header_search_bar_submit_button_font_size_mobile' )
		);

		$search_modal_close_button_font_mobile = array(
			'font-size' => xenial_get_option( 'header_search_modal_close_button_font_size_mobile' )
		);

		$search_modal_toggle_button_padding_mobile = array(
			'padding-top' => xenial_get_option( 'header_search_modal_toggle_button_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_toggle_button_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_toggle_button_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_toggle_button_padding_mobile_right' )
		);

		$search_modal_close_button_padding_mobile = array(
			'padding-top' => xenial_get_option( 'header_search_modal_close_button_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_search_modal_close_button_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_search_modal_close_button_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_search_modal_close_button_padding_mobile_left' )
		);


		// Dynamic CSS mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			// Search bar dynamic CSS mobile responsive
			$css .= 'input.xe-search-form-search-bar {';
				if ( $search_bar_background_colors['mobile']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_bar_background_colors['mobile']['initial'] ) . ';';
				}
				
				if ( $search_bar_font_colors['mobile']['initial'] ) {
					$css .= 'color: ' . esc_attr( $search_bar_font_colors['mobile']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_bar_font_mobile );
				$css .= xenial_dynamic_border_css( $search_bar_borders['mobile'] );
			$css .= '}';

			if ( $search_bar_height_mobile || $search_bar_width_mobile ) {
				$css .= '.xe-header-element-search-bar form input.xe-search-form-search-bar {';
					if ( $search_bar_height_mobile ) {
						$css .= 'height: ' . esc_attr( $search_bar_height_mobile ) . 'px;'; 
					}
					
					if ( $search_bar_width_mobile ) {
						$css .= 'width: ' . esc_attr( $search_bar_width_mobile ) . 'px;';
					}
					
				$css .= '}';
			}
			

			// Search modal toggle button dynamic CSS mobile responsive
			$css .= '#xe-header-element-search-button {';
				if ( $search_modal_toggle_button_background_colors['mobile']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['mobile']['initial'] ) . ';';
				}
				
				if ( $search_modal_toggle_button_label_colors['mobile']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['mobile']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_toggle_button_font_mobile );
				$css .= xenial_dynamic_border_css( $search_modal_toggle_button_borders['mobile'] );
				$css .= xenial_dynamic_spacing_css( $search_modal_toggle_button_padding_mobile );
			$css .= '}';

			if ( $search_modal_toggle_button_font_mobile['font-size'] || $search_modal_toggle_button_font_mobile['font-size'] ) {
				$css .= '#xe-header-element-search-button svg {';
					if ( $search_modal_toggle_button_font_mobile['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_toggle_button_font_mobile['font-size'] ) . 'px;';
					}
					
					if ( $search_modal_toggle_button_font_mobile['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_toggle_button_font_mobile['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_toggle_button_background_colors['mobile']['hover'] || $search_modal_toggle_button_label_colors['mobile']['hover'] || $search_modal_toggle_button_borders['mobile']['border_colors']['hover'] ) {
				$css .= '#xe-header-element-search-button:hover {';
					if ( $search_modal_toggle_button_background_colors['mobile']['hover'] ) {
						$css .= 'background-color: ' . esc_attr( $search_modal_toggle_button_background_colors['mobile']['hover'] ) . ';';
					}
					
					if ( $search_modal_toggle_button_label_colors['mobile']['hover'] ) {
						$css .= 'fill: ' . esc_attr( $search_modal_toggle_button_label_colors['mobile']['hover'] ) . ';';
					}
					
					if ( $search_modal_toggle_button_borders['mobile']['border_colors']['hover'] ) {
						$css .= 'border-color: ' . esc_attr( $search_modal_toggle_button_borders['mobile']['border_colors']['hover'] ) . ';';
					}
					
				$css .= '}';
			}
			


			// Search submit button dynamic CSS mobile responsive
			$css .= '.xe-search-form-submit-btn, #xe-search-form form .xe-button {';
				if ( $search_modal_submit_button_label_colors['mobile']['initial'] ) {
					$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['mobile']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_submit_button_font_mobile );
			$css .= '}';

			if ( $search_modal_submit_button_font_mobile['font-size'] || $search_modal_submit_button_font_mobile['font-size'] ) {
				$css .= '.xe-search-form-submit-btn svg, #xe-search-form form .xe-button svg {';
					if ( $search_modal_submit_button_font_mobile['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_submit_button_font_mobile['font-size'] ) . 'px;';
					}
					
					if ( $search_modal_submit_button_font_mobile['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_submit_button_font_mobile['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_submit_button_label_colors['mobile']['hover'] ) {
				$css .= '.xe-search-form-submit-btn:hover svg, #xe-search-form form .xe-button:hover svg {';
					$css .= 'fill: ' . esc_attr( $search_modal_submit_button_label_colors['mobile']['hover'] ) . ';';
				$css .= '}';
			}
			

			// Search modal close button dynamic CSS mobile responsive
			$css .= '#xe-close-search-box {';
				if ( $search_modal_close_button_background_colors['mobile']['initial'] ) {
					$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['mobile']['initial'] ) . ';';
				}
				
				$css .= xenial_dynamic_font_css( $search_modal_close_button_font_mobile );
				$css .= xenial_dynamic_border_css( $search_modal_close_button_borders['mobile'] );
				$css .= xenial_dynamic_spacing_css( $search_modal_close_button_padding_mobile );
			$css .= '}';

			if ( $search_modal_close_button_label_colors['mobile']['initial'] || $search_modal_close_button_font_mobile['font-size'] || $search_modal_close_button_font_mobile['font-size'] ) {

				$css .= '#xe-close-search-box svg {';

					if ( $search_modal_close_button_label_colors['mobile']['initial'] ) {
						$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['mobile']['initial'] ) . ';';
					}
					
					if ( $search_modal_close_button_font_mobile['font-size'] ) {
						$css .= 'height: ' . esc_attr( $search_modal_close_button_font_mobile['font-size'] ) . 'px;';
					}
					
					if ( $search_modal_close_button_font_mobile['font-size'] ) {
						$css .= 'width: ' . esc_attr( $search_modal_close_button_font_mobile['font-size'] ) . 'px;';
					}
					
				$css .= '}';
			}
			

			if ( $search_modal_close_button_background_colors['mobile']['hover'] || $search_modal_close_button_borders['mobile']['border_colors']['hover'] ) {

				$css .= '#xe-close-search-box:hover {';

					if ( $search_modal_close_button_background_colors['mobile']['hover'] ) {
						$css .= 'background-color: ' . esc_attr( $search_modal_close_button_background_colors['mobile']['hover'] ) . ';';
					}
					
					if ( $search_modal_close_button_borders['mobile']['border_colors']['hover'] ) {
						$css .= 'border-color: ' . esc_attr( $search_modal_close_button_borders['mobile']['border_colors']['hover'] ) . ';';
					}
					
				$css .= '}';
			}			

			if ( $search_modal_close_button_label_colors['mobile']['hover'] ) {
				$css .= '#xe-close-search-box:hover svg {';
					$css .= 'fill: ' . esc_attr( $search_modal_close_button_label_colors['mobile']['hover'] ) . ';';
				$css .= '}';
			}
			
		$css .= '}';

		return $css;
		
	}
}