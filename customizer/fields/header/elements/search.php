<?php 
xenial_section_field( 
	'xenial_header_search',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Search', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_header_search_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters(
				'xenial_filter_header_search_tab_1_controls',
				array(
					'header_search_display' => '',
					'header_search_visibility' => '',
					'header_search_alignment' => '',
					'header_search_placeholder_text' => '',
					'xenial_header_search_general_divider_1' => '',
					'xenial_header_search_general_divider_2' => '',
					'xenial_header_search_general_divider_3' => '',
					'xenial_header_search_general_divider_4' => ''
				)
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_search_tab_2_controls',
				array(	
					'header_search_bar_wrapper' => '',
					'header_search_bar_width' => '',
					'header_search_bar_height' => '',
					'header_search_bar_background_color' => '',
					'header_search_bar_border' => '',
					'header_search_bar_border_color' => '',
					'header_search_bar_font_size' => '',
					'header_search_bar_text_color' => '',
					'header_search_bar_divider_1' => '',
					'header_search_bar_divider_2' => '',
					'header_search_bar_divider_3' => '',
					'header_search_bar_divider_4' => '',
					'header_search_bar_divider_5' => '',

					'header_search_modal_toggle_button_wrapper' => '',
					'header_search_modal_toggle_button_padding' => '',
		            'header_search_modal_toggle_button_border' => '',  
		            'header_search_modal_toggle_button_font_size' => '',
		            'header_search_modal_toggle_button_text_color' => '',
		            'header_search_modal_toggle_button_background_color' => '',	            
		            'header_search_modal_toggle_button_divider_1' => '',
		            'header_search_modal_toggle_button_divider_2' => '',
		            'header_search_modal_toggle_button_divider_3' => '',
		            'header_search_modal_toggle_button_divider_4' => '',

		            'header_search_bar_submit_button_wrapper' => '',  
		            'header_search_bar_submit_button_font_size' => '',
		            'header_search_bar_submit_button_text_color' => '',
		            'header_search_bar_submit_button_divider_1' => '',

		            'header_search_modal_background_color' => '',

		            'header_search_modal_close_button_wrapper' => '',
		            'header_search_modal_close_button_padding' => '',
		            'header_search_modal_close_button_border' => '', 
		            'header_search_modal_close_button_font_size' => '',
		            'header_search_modal_close_button_text_color' => '',
		            'header_search_modal_close_button_background_color' => '',
		            'header_search_modal_close_button_divider_1' => '',
		            'header_search_modal_close_button_divider_2' => '',
		            'header_search_modal_close_button_divider_3' => '',
		            'header_search_modal_close_button_divider_4' => ''
				)
			)
		)
	)
);





xenial_radio_button_group_field(
	'header_search_display',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Display Option', 'xenial' ),
		'choices' => array(
			'default' => array(
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-1.png',
				'name' => esc_html__( 'Search Bar', 'xenial' )
			),
			'toggle' => array(
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-2.png',
				'name' => esc_html__( 'Search Modal', 'xenial' )
			)
		),
		'item' => 'image',
		'columns' => 2,
		'default' => xenial_get_customize_default( 'header_search_display' )
	),
	false
);


xenial_divider_field( 
	'xenial_header_search_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);



xenial_button_checkbox_field(
	'header_search_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_search_visibility' )
	)
);



xenial_divider_field( 
	'xenial_header_search_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_radio_button_group_field(
	'header_search_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'header_search_alignment' )
	),
	true
);

xenial_divider_field( 
	'xenial_header_search_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_text_field(
	'header_search_placeholder_text',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Placeholder Text', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_search_placeholder_text' )
	)
);



xenial_divider_field( 
	'xenial_header_search_general_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_modal_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Modal Background Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'header_search_modal_background_color' )
	)
);


xenial_controls_wrapper_field(
	'header_search_bar_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Bar', 'xenial' )
	),
	false
);


xenial_range_control_field(
	'header_search_bar_width',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 100, 
			'max' => 1920, 
			'step' => 1,
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_bar_width' )
	)
);


xenial_divider_field( 
	'header_search_bar_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_range_control_field(
	'header_search_bar_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Height (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 35, 
			'max' => 100, 
			'step' => 1,
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_bar_height' )
	)
);


xenial_divider_field( 
	'header_search_bar_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_bar_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_bar_background_color' )
	)
);


xenial_divider_field( 
	'header_search_bar_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_box_border_field(
	'header_search_bar_border',
	array(
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Bar Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left' )
			)
		),
		'default' => xenial_get_customize_default( 'header_search_bar_border' )
	)
);


xenial_divider_field( 
	'header_search_bar_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_range_control_field(
	'header_search_bar_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1,
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_bar_font_size' )
	)
);


xenial_divider_field( 
	'header_search_bar_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_bar_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_bar_text_color' )
	)
);


xenial_controls_wrapper_field(
	'header_search_modal_toggle_button_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Modal Toggle Button', 'xenial' )
	),
	false
);

xenial_box_dimension_field(
	'header_search_modal_toggle_button_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => true,
		),
		'defaults' => xenial_get_customize_default( 'header_search_modal_toggle_button_padding' )
	),
	true
);


xenial_divider_field( 
	'header_search_modal_toggle_button_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_box_border_field(
	'header_search_modal_toggle_button_border',
	array(
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Button Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			)
		),
		'default' => xenial_get_customize_default( 'header_search_modal_toggle_button_border' )
	)
);


xenial_divider_field( 
	'header_search_modal_toggle_button_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_range_control_field(
	'header_search_modal_toggle_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_modal_toggle_button_font_size' )
	)
);

xenial_divider_field( 
	'header_search_modal_toggle_button_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_color_picker_field(
	'header_search_modal_toggle_button_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_modal_toggle_button_text_color' )
	)
);

xenial_divider_field( 
	'header_search_modal_toggle_button_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_modal_toggle_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_modal_toggle_button_background_color' )
	)
);




xenial_controls_wrapper_field(
	'header_search_bar_submit_button_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Submit Button', 'xenial' )
	),
	false
);


xenial_range_control_field(
	'header_search_bar_submit_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1,
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_bar_submit_button_font_size' )
	)
);

xenial_divider_field( 
	'header_search_bar_submit_button_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_bar_submit_button_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_bar_submit_button_text_color' )
	)
);









xenial_controls_wrapper_field(
	'header_search_modal_close_button_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Search Modal Close Button', 'xenial' )
	),
	false
);


xenial_box_dimension_field(
	'header_search_modal_close_button_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => true,
		),		
		'defaults' => xenial_get_customize_default( 'header_search_modal_close_button_padding' )
	),
	true
);

xenial_divider_field( 
	'header_search_modal_close_button_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_box_border_field(
	'header_search_modal_close_button_border',
	array(
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Button Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			)
		),
		'default' => xenial_get_customize_default( 'header_search_modal_close_button_border' )
	)
);


xenial_divider_field( 
	'header_search_modal_close_button_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);


xenial_range_control_field(
	'header_search_modal_close_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_search_modal_close_button_font_size' )
	)
);

xenial_divider_field( 
	'header_search_modal_close_button_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_modal_close_button_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_modal_close_button_text_color' )
	)
);

xenial_divider_field( 
	'header_search_modal_close_button_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_search', 
	) 
);

xenial_color_picker_field(
	'header_search_modal_close_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_search',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_search_modal_close_button_background_color' )
	)
);