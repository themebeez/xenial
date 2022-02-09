<?php 

xenial_section_field( 
	'xenial_header_primary_menu_dropdown',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Primary Menu Dropdown', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_header_primary_menu_dropdown_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_primary_menu_dropdown_tab_1_controls', 
	        	array(
	        		'primary_menu_dropdown_reveal_effect' => '',
	        		'primary_menu_dropdown_divider_1' => '',
	        		'primary_menu_dropdown_width' => '',
	        		'primary_menu_dropdown_divider_2' => '',
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_primary_menu_dropdown_tab_2_controls', 
	        	array(
	        		'primary_menu_dropdown_top_offset' => '',
	        		'primary_menu_dropdown_styles_divider_1' => '',
	        		'primary_menu_dropdown_padding' => '',
	        		'primary_menu_dropdown_styles_divider_2' => '',
	        		'primary_menu_dropdown_border' => '',
	        		

	        		'primary_menu_dropdown_styles_wrapper' => '',

	        		'primary_menu_dropdown_items_divider_width' => '',
	        		'primary_menu_dropdown_items_divider_color' => '',
	        		'primary_menu_dropdown_items_divider_1' => '',
	        		'primary_menu_dropdown_items_padding' => '',
	        		'primary_menu_dropdown_items_divider_2' => '',
	        		'primary_menu_dropdown_items_color' => '',
	        		'primary_menu_dropdown_items_divider_3' => '',
	        		'primary_menu_dropdown_items_background_color' => '',
	        		'primary_menu_dropdown_items_divider_4' => '',

	        		'primary_menu_dropdown_items_font_size' => '',
	        		'primary_menu_dropdown_items_font_weight' => '',
		            'primary_menu_dropdown_items_line_height' => '',
		            'primary_menu_dropdown_items_font_style' => '',
		            'primary_menu_dropdown_items_text_transform' => '',
	        	) 
	        )
		)
	)
);


xenial_select_field(
	'primary_menu_dropdown_reveal_effect',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Reveal Effect', 'xenial' ),
		'choices' => xenial_get_dropdown_reveal_effects(),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_reveal_effect' )
	)
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);


xenial_range_control_field(
	'primary_menu_dropdown_width',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 400, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_width' )
	)
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);


xenial_range_control_field(
	'primary_menu_dropdown_top_offset',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Top Offset (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_top_offset' )
	)
);

 
xenial_divider_field( 
	'primary_menu_dropdown_styles_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);


xenial_box_dimension_field(
	'primary_menu_dropdown_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'primary_menu_dropdown_padding' )
	),
	false
);

xenial_divider_field( 
	'primary_menu_dropdown_styles_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);

xenial_box_border_field(
	'primary_menu_dropdown_border',
	array(
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Border', 'xenial' ),
		'is_responsive' => false,
		'allowed_fields' => array(
			'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
			'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			'border_colors' => array( 'top', 'right', 'bottom', 'left' )
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_border' )
	)
);



xenial_controls_wrapper_field(
	'primary_menu_dropdown_styles_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Dropdown Items', 'xenial' )
	),
	false
);

xenial_range_control_field(
	'primary_menu_dropdown_items_divider_width',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Divider Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 5, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_divider_width' )
	)
);


xenial_color_picker_field(
	'primary_menu_dropdown_items_divider_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Divider Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_divider_color' )
	)
);

xenial_divider_field( 
	'primary_menu_dropdown_items_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);


xenial_box_dimension_field(
	'primary_menu_dropdown_items_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'primary_menu_dropdown_items_padding' )
	),
	false
);

xenial_divider_field( 
	'primary_menu_dropdown_items_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);



xenial_color_picker_field(
	'primary_menu_dropdown_items_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_color' )
	)
);


xenial_divider_field( 
	'primary_menu_dropdown_items_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);

xenial_color_picker_field(
	'primary_menu_dropdown_items_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_background_color' )
	)
);

xenial_divider_field( 
	'primary_menu_dropdown_items_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown', 
	)
);

xenial_range_control_field(
	'primary_menu_dropdown_items_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_font_size' )
	)
);

xenial_range_control_field(
	'primary_menu_dropdown_items_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_line_height' )
	)
);


xenial_select_field(
	'primary_menu_dropdown_items_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_font_weight' )
	)
);


xenial_radio_button_group_field(
	'primary_menu_dropdown_items_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'primary_menu_dropdown_items_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu_dropdown',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'primary_menu_dropdown_items_text_transform' )
	),
	false
);