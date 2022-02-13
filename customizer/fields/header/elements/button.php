<?php 

xenial_section_field( 
	'xenial_header_button',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Button', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_header_button_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_button_tab_1_controls', 
	        	array(
	        		'header_button_title' => '',
	        		'header_button_link' => '',
	        		'header_button_link_open_in_new_tab' => '',
	        		'header_button_visibility' => '',
	        		'header_button_alignment' => '',

	        		'xenial_header_button_general_divider_1' => '',
	        		'xenial_header_button_general_divider_2' => '',
	        		'xenial_header_button_general_divider_3' => '',
	        		'xenial_header_button_general_divider_4' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_button_tab_2_controls', 
	        	array(
	        		'header_button_padding' => '',
	        		'header_button_font_color' => '',
	        		'header_button_font_size' => '',
	        		'header_button_line_height' => '',
	        		'header_button_font_weight' => '',
	        		'header_button_font_style' => '',
	        		'header_button_text_transform' => '',
	        		'header_button_background_color' => '',

	        		'header_button_typo' => '',
	        		'header_button_border' => '',

	        		'xenial_header_button_style_divider_1' => '',
	        		'xenial_header_button_style_divider_2' => '',
	        		'xenial_header_button_style_divider_3' => '',
	        		'xenial_header_button_style_divider_4' => '',
	        	) 
	        )
		)
	)
);


xenial_text_field(
	'header_button_title',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_button_title' )
	)
);


xenial_divider_field( 
	'xenial_header_button_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_url_field(
	'header_button_link',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Link', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_button_link' )
	)
);


xenial_switch_field(
	'header_button_link_open_in_new_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Open in New Tab', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_button_link_open_in_new_tab' )
	)
);


xenial_divider_field( 
	'xenial_header_button_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_button_checkbox_field(
	'header_button_visibility',
array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Hide On Devices', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_button_visibility' )
	)
);

xenial_divider_field( 
	'xenial_header_button_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_radio_button_group_field(
	'header_button_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'header_button_alignment' )
	),
	true
);

xenial_divider_field( 
	'xenial_header_button_general_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_box_dimension_field(
	'header_button_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_button_padding' )
	),
	true
);


xenial_divider_field( 
	'xenial_header_button_style_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_info_field(
	'header_button_typo',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);



xenial_range_control_field(
	'header_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_button_font_size' )
	)
);

xenial_range_control_field(
	'header_button_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_button_line_height' )
	)
);


xenial_select_field(
	'header_button_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'header_button_font_weight' )
	)
);


xenial_radio_button_group_field(
	'header_button_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'header_button_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'header_button_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'header_button_text_transform' )
	),
	false
);

xenial_divider_field( 
	'xenial_header_button_style_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);

xenial_box_border_field(
	'header_button_border',
	array(
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Button Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
			)
		),
		'default' => xenial_get_customize_default( 'header_button_border' )
	)
);


xenial_divider_field( 
	'xenial_header_button_style_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);

xenial_color_picker_field(
	'header_button_font_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Label Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_button_font_color' )
	)
);

xenial_divider_field( 
	'xenial_header_button_style_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	) 
);


xenial_color_picker_field(
	'header_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_button_background_color' )
	)
);