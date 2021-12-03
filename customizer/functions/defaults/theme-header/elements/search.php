<?php 


if ( ! function_exists( 'xenial_get_header_search_customize_defaults' ) ) {

	function xenial_get_header_search_customize_defaults() {

		return apply_filters(
			'xenial_header_search_customize_defaults_filter',
			array(
				'header_search_display' => 'search-bar',
	            'header_search_placeholder_text' => esc_html__( 'Search', 'xenial' ),
	            'header_search_visibility' => 'desktop,tablet,mobile',
	            'header_search_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),

	            'header_search_bar_width' => array(
	                'desktop' => 300,
	                'tablet' => 250,
	                'mobile' => 200,
	            ),
	            'header_search_bar_height' => array(
	                'desktop' => 40,
	                'tablet' => 35,
	                'mobile' => 30
	            ),            
	            'header_search_bar_border_style' => 'none',
	            'header_search_bar_border_width' => array(
	                'top' => 1,
	                'right' => 1,
	                'bottom' => 1,
	                'left' => 1
	            ),
	            'header_search_bar_border_radius' => 0,  
	            'header_search_bar_border_color' => '',          
	            'header_search_bar_background_color' => '',
	            'header_search_bar_text_color' => '',
	            'header_search_bar_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_bar_line_height' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1
	            ),



	            'header_search_modal_toggle_button_height' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_modal_toggle_button_width' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_modal_toggle_button_border_style' => 'none',
	            'header_search_modal_toggle_button_border_width' => array(
	                'top' => 1,
	                'right' => 1,
	                'bottom' => 1,
	                'left' => 1
	            ),
	            'header_search_modal_toggle_button_border_radius' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),  
	            'header_search_modal_toggle_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_modal_toggle_button_line_height' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1
	            ),
	            'header_search_modal_toggle_button_text_color' => '',
	            'header_search_modal_toggle_button_hover_text_color' => '',
	            'header_search_modal_toggle_button_border_color' => '',          
	            'header_search_modal_toggle_button_hover_border_color' => '',          
	            'header_search_modal_toggle_button_background_color' => '',
	            'header_search_modal_toggle_button_hover_background_color' => '',
	            
	            'header_search_bar_submit_button_height' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_bar_submit_button_width' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_bar_submit_button_border_style' => 'none',
	            'header_search_bar_submit_button_border_width' => array(
	                'top' => 1,
	                'right' => 1,
	                'bottom' => 1,
	                'left' => 1
	            ),
	            'header_search_bar_submit_button_border_radius' => 0,  
	            'header_search_bar_submit_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_bar_submit_button_line_height' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_bar_submit_button_text_color' => '',
	            'header_search_bar_submit_button_hover_text_color' => '',
	            'header_search_bar_submit_button_border_color' => '',          
	            'header_search_bar_submit_button_hover_border_color' => '',          
	            'header_search_bar_submit_button_background_color' => '',
	            'header_search_bar_submit_button_hover_background_color' => '',

	            'header_search_modal_background_color' => '',

	            'header_search_modal_close_button_height' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_modal_close_button_width' => array(
	                'desktop' => 50,
	                'tablet' => 50,
	                'mobile' => 50
	            ),
	            'header_search_modal_close_button_border_style' => 'none',
	            'header_search_modal_close_button_border_width' => array(
	                'top' => 1,
	                'right' => 1,
	                'bottom' => 1,
	                'left' => 1
	            ),
	            'header_search_modal_close_button_border_radius' => 0,  
	            'header_search_modal_close_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_modal_close_button_line_height' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_search_modal_close_button_text_color' => '',
	            'header_search_modal_close_button_hover_text_color' => '',
	            'header_search_modal_close_button_border_color' => '',          
	            'header_search_modal_close_button_hover_border_color' => '',          
	            'header_search_modal_close_button_background_color' => '',
	            'header_search_modal_close_button_hover_background_color' => '',
			)
		);
	}
}