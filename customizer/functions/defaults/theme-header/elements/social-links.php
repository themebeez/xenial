<?php 


if ( ! function_exists( 'xenial_get_header_social_links_customize_defaults' ) ) {

	function xenial_get_header_social_links_customize_defaults() {

		return apply_filters(
			'xenial_header_social_links_customize_defaults_filter',
			array(
				'header_social_links' => '',
	            'header_social_link_visibility' => 'desktop,tablet,mobile',
	            'header_social_link_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'header_social_link_display_title' => false,
	            'header_social_link_item_spacing' => array(
	                'desktop' => 10,
	                'tablet' => 10,
	                'mobile' => 10,
	            ),
	            'header_social_link_icon_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'header_social_link_icon_background_spacing' => array(
	                'desktop' => 15,
	                'tablet' => 15,
	                'mobile' => 15,
	            ),
	            'header_social_link_icon_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
	            'header_social_link_title_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'header_social_link_title_line_height' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1,
	            ),
	            'header_social_link_icon_color_type' => 'custom',
	            'header_social_link_icon_color' => array(
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
	            'header_social_link_title_color' => array(
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
	            'header_social_link_background_color' => array(
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
	            'header_social_link_border_color' => array(
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