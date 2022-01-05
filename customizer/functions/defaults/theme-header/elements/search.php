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
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => '',
	            ),
	            'header_search_bar_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),   
	            'header_search_bar_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',       
	            'header_search_bar_background_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),
	            'header_search_bar_text_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)
	            ),
	            'header_search_bar_font_size' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_bar_line_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),



	            'header_search_modal_toggle_button_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_toggle_button_width' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_toggle_button_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
	            'header_search_modal_toggle_button_font_size' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_toggle_button_line_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_toggle_button_text_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),         
	            'header_search_modal_toggle_button_background_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),
	            
	            'header_search_bar_submit_button_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_bar_submit_button_width' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),

	            'header_search_bar_submit_button_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}', 
	            'header_search_bar_submit_button_font_size' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_bar_submit_button_line_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_bar_submit_button_text_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),          
	            'header_search_bar_submit_button_background_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),

	            'header_search_modal_background_color' => array(
	                'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
	            ),

	            'header_search_modal_close_button_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_close_button_width' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_close_button_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
	            'header_search_modal_close_button_font_size' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_close_button_line_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'header_search_modal_close_button_text_color' => array(
	                'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	
	            ),          
	            'header_search_modal_close_button_background_color' => array(
	            	'desktop' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'tablet' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	),
	            	'mobile' => array(
	            		'initial' => array(
		                    'display' => true,
		                    'default' => ''
		                ),
		                'hover' => array(
		                    'display' => true,
		                    'default' => ''
		                )
	            	)	                
	            ),
			)
		);
	}
}