<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_header_search',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Search', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_search_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters(
				'xenial_filter_header_search_tab_1_controls',
				[
					'header_search_display' => '',
					'header_search_visibility' => '',
					'header_search_alignment' => '',
					'header_search_placeholder_text' => '',
					'xenial_header_search_general_divider_1' => '',
					'xenial_header_search_general_divider_2' => '',
					'xenial_header_search_general_divider_3' => '',
					'xenial_header_search_general_divider_4' => ''
				]
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_search_tab_2_controls',
				[	
					'header_search_bar_wrapper' => '',
					'header_search_bar_width' => '',
					'header_search_bar_height' => '',
					'header_search_bar_background_color' => '',
					'header_search_bar_border_style' => '',
					'header_search_bar_border_width' => '',
					'header_search_bar_border_radius' => '',
					'header_search_bar_border_color' => '',
					'header_search_bar_font_size' => '',
					'header_search_bar_line_height' => '',
					'header_search_bar_text_color' => '',
					'header_search_bar_divider_1' => '',
					'header_search_bar_divider_2' => '',
					'header_search_bar_divider_3' => '',
					'header_search_bar_divider_4' => '',
					'header_search_bar_divider_5' => '',

					'header_search_modal_toggle_button_wrapper' => '',
					'header_search_modal_toggle_button_height' => '',
		            'header_search_modal_toggle_button_width' => '',
		            'header_search_modal_toggle_button_border_style' => '',
		            'header_search_modal_toggle_button_border_width' => '',
		            'header_search_modal_toggle_button_border_radius' => '',  
		            'header_search_modal_toggle_button_font_size' => '',
		            'header_search_modal_toggle_button_line_height' => '',
		            'header_search_modal_toggle_button_default_state_color' => '',
		            'header_search_modal_toggle_button_text_color' => '',
		            'header_search_modal_toggle_button_background_color' => '',
		            'header_search_modal_toggle_button_border_color' => '', 
		            'header_search_modal_toggle_button_hover_state_color' => '',
		            'header_search_modal_toggle_button_hover_text_color' => '',
		            'header_search_modal_toggle_button_hover_background_color' => '',
		            'header_search_modal_toggle_button_hover_border_color' => '',		            
		            'header_search_modal_toggle_button_divider_1' => '',
		            'header_search_modal_toggle_button_divider_2' => '',
		            'header_search_modal_toggle_button_divider_3' => '',
		            'header_search_modal_toggle_button_divider_4' => '',

		            'header_search_bar_submit_button_wrapper' => '',
		            'header_search_bar_submit_button_height' => '',
		            'header_search_bar_submit_button_width' => '',
		            'header_search_bar_submit_button_border_style' => '',
		            'header_search_bar_submit_button_border_width' => '',
		            'header_search_bar_submit_button_border_radius' => '',  
		            'header_search_bar_submit_button_font_size' => '',
		            'header_search_bar_submit_button_line_height' => '',
		            'header_search_bar_submit_button_default_state_color' => '',
		            'header_search_bar_submit_button_text_color' => '',
		            'header_search_bar_submit_button_background_color' => '',
		            'header_search_bar_submit_button_border_color' => '',
		            'header_search_bar_submit_button_hover_state_color' => '',
		            'header_search_bar_submit_button_hover_text_color' => '',
		            'header_search_bar_submit_button_hover_background_color' => '',   
		            'header_search_bar_submit_button_hover_border_color' => '',  
		            'header_search_bar_submit_button_divider_1' => '',
		            'header_search_bar_submit_button_divider_2' => '',
		            'header_search_bar_submit_button_divider_3' => '',
		            'header_search_bar_submit_button_divider_4' => '',

		            'header_search_modal_background_color' => '',

		            'header_search_modal_close_button_wrapper' => '',
		            'header_search_modal_close_button_height' => '',
		            'header_search_modal_close_button_width' => '',
		            'header_search_modal_close_button_border_style' => '',
		            'header_search_modal_close_button_border_width' => '',
		            'header_search_modal_close_button_border_radius' => '',  
		            'header_search_modal_close_button_font_size' => '',
		            'header_search_modal_close_button_line_height' => '',
		            'header_search_modal_close_button_default_state_color' => '',
		            'header_search_modal_close_button_text_color' => '',
		            'header_search_modal_close_button_background_color' => '',
		            'header_search_modal_close_button_border_color' => '',
		            'header_search_modal_close_button_hover_state_color' => '',
		            'header_search_modal_close_button_hover_text_color' => '',
		            'header_search_modal_close_button_hover_background_color' => '',
		            'header_search_modal_close_button_hover_border_color' => '',
		            'header_search_modal_close_button_divider_1' => '',
		            'header_search_modal_close_button_divider_2' => '',
		            'header_search_modal_close_button_divider_3' => '',
		            'header_search_modal_close_button_divider_4' => ''
				]
			)
		]
	]
);





xenial_radio_button_group_field(
	'header_search_display',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Display Option', 'xenial' ),
		'choices' => [
			'default' => [
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-1.png',
				'name' => esc_html__( 'Search Bar', 'xenial' )
			],
			'toggle' => [
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-2.png',
				'name' => esc_html__( 'Search Modal', 'xenial' )
			]
		],
		'item' => 'image',
		'columns' => 2,
		'default' => $xenial_customizer_defaults['header_search_display']
	],
	false
);


xenial_divider_field( 
	'xenial_header_search_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);



xenial_button_checkbox_field(
	'header_search_visibility',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		],
		'default' => $xenial_customizer_defaults['header_search_visibility']
	]
);



xenial_divider_field( 
	'xenial_header_search_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_radio_button_group_field(
	'header_search_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_search_alignment']
	],
	true
);

xenial_divider_field( 
	'xenial_header_search_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_text_field(
	'header_search_placeholder_text',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Placeholder Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_placeholder_text']
	]
);



xenial_divider_field( 
	'xenial_header_search_general_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_color_field(
	'header_search_modal_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Modal Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_background_color']
	],
	true
);


xenial_controls_wrapper_field(
	'header_search_bar_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Bar', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'header_search_bar_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 100, 'max' => 1920, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_width']
	]
);


xenial_divider_field( 
	'header_search_bar_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_range_control_field(
	'header_search_bar_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Height (px)', 'xenial' ),
		'input_attrs' => ['min' => 35, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_height']
	]
);


xenial_divider_field( 
	'header_search_bar_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_color_field(
	'header_search_bar_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_background_color']
	],
	false
);


xenial_divider_field( 
	'header_search_bar_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_select_field(
	'header_search_bar_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_search_bar_border_style']
	]
);


xenial_box_dimension_field(
	'header_search_bar_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_search_bar_border_width']
	],
	false
);


xenial_range_control_field(
	'header_search_bar_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 200, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['header_search_bar_border_radius']
	]
);


xenial_color_field(
	'header_search_bar_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_border_color']
	],
	false
);


xenial_divider_field( 
	'header_search_bar_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_range_control_field(
	'header_search_bar_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 35, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_font_size']
	]
);


xenial_range_control_field(
	'header_search_bar_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_line_height']
	]
);


xenial_divider_field( 
	'header_search_bar_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_color_field(
	'header_search_bar_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_text_color']
	],
	false
);


xenial_controls_wrapper_field(
	'header_search_modal_toggle_button_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Modal Toggle Button', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'header_search_modal_toggle_button_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Height (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_toggle_button_height']
	]
);


xenial_range_control_field(
	'header_search_modal_toggle_button_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_search_modal_toggle_button_width']
	]
);

xenial_divider_field( 
	'header_search_modal_toggle_button_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);

xenial_select_field(
	'header_search_modal_toggle_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_border_style']
	]
);


xenial_box_dimension_field(
	'header_search_modal_toggle_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1],
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_border_width']
	],
	false
);


xenial_range_control_field(
	'header_search_modal_toggle_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 200, 'step' => 0.01, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_search_modal_toggle_button_border_radius']
	]
);


xenial_divider_field( 
	'header_search_modal_toggle_button_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_range_control_field(
	'header_search_modal_toggle_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_toggle_button_font_size']
	]
);

xenial_range_control_field(
	'header_search_modal_toggle_button_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_toggle_button_line_height']
	]
);

xenial_divider_field( 
	'header_search_modal_toggle_button_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);



xenial_info_field(
	'header_search_modal_toggle_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Default State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_modal_toggle_button_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_text_color']
	],
	false
);


xenial_color_field(
	'header_search_modal_toggle_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_background_color']
	],
	true
);


xenial_color_field(
	'header_search_modal_toggle_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_border_color']
	],
	true
);


xenial_divider_field( 
	'header_search_modal_toggle_button_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_info_field(
	'header_search_modal_toggle_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_modal_toggle_button_hover_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_hover_text_color']
	],
	false
);


xenial_color_field(
	'header_search_modal_toggle_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'header_search_modal_toggle_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_toggle_button_hover_border_color']
	],
	true
);









xenial_controls_wrapper_field(
	'header_search_bar_submit_button_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Submit Button', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'header_search_bar_submit_button_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Height (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_submit_button_height']
	]
);


xenial_range_control_field(
	'header_search_bar_submit_button_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_submit_button_width']
	]
);

xenial_divider_field( 
	'header_search_bar_submit_button_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);

xenial_select_field(
	'header_search_bar_submit_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_border_style']
	]
);


xenial_box_dimension_field(
	'header_search_bar_submit_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1],
		'defaults' => $xenial_customizer_defaults['header_search_bar_submit_button_border_width']
	],
	false
);


xenial_range_control_field(
	'header_search_bar_submit_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 200, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_border_radius']
	]
);


xenial_divider_field( 
	'header_search_bar_submit_button_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_range_control_field(
	'header_search_bar_submit_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_submit_button_font_size']
	]
);

xenial_range_control_field(
	'header_search_bar_submit_button_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_bar_submit_button_line_height']
	]
);

xenial_divider_field( 
	'header_search_bar_submit_button_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_info_field(
	'header_search_bar_submit_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Default State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_bar_submit_button_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_text_color']
	],
	false
);


xenial_color_field(
	'header_search_bar_submit_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_background_color']
	],
	true
);


xenial_color_field(
	'header_search_bar_submit_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_border_color']
	],
	true
);


xenial_divider_field( 
	'header_search_bar_submit_button_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_info_field(
	'header_search_bar_submit_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_bar_submit_button_hover_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_hover_text_color']
	],
	false
);



xenial_color_field(
	'header_search_bar_submit_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'header_search_bar_submit_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_bar_submit_button_hover_border_color']
	],
	true
);






xenial_controls_wrapper_field(
	'header_search_modal_close_button_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Modal Close Button', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'header_search_modal_close_button_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Height (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_close_button_height']
	]
);


xenial_range_control_field(
	'header_search_modal_close_button_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_close_button_width']
	]
);

xenial_divider_field( 
	'header_search_modal_close_button_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);

xenial_select_field(
	'header_search_modal_close_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_border_style']
	]
);


xenial_box_dimension_field(
	'header_search_modal_close_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1],
		'defaults' => $xenial_customizer_defaults['header_search_modal_close_button_border_width']
	],
	false
);


xenial_range_control_field(
	'header_search_modal_close_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 200, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_border_radius']
	]
);


xenial_divider_field( 
	'header_search_modal_close_button_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_range_control_field(
	'header_search_modal_close_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_close_button_font_size']
	]
);

xenial_range_control_field(
	'header_search_modal_close_button_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_search_modal_close_button_line_height']
	]
);

xenial_divider_field( 
	'header_search_modal_close_button_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_info_field(
	'header_search_modal_close_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Default State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_modal_close_button_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_text_color']
	],
	false
);


xenial_color_field(
	'header_search_modal_close_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_background_color']
	],
	true
);


xenial_color_field(
	'header_search_modal_close_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_border_color']
	],
	true
);


xenial_divider_field( 
	'header_search_modal_close_button_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	] 
);


xenial_info_field(
	'header_search_modal_close_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Hover State', 'xenial' )
	]
);


xenial_color_field(
	'header_search_modal_close_button_hover_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_hover_text_color']
	],
	false
);

xenial_color_field(
	'header_search_modal_close_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'header_search_modal_close_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_search_modal_close_button_hover_border_color']
	],
	true
);