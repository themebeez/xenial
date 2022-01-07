<?php
xenial_section_field( 
	'xenial_buttons',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Buttons', 'xenial' )
	)
);


xenial_controls_wrapper_field(
	'general_button',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'General Button', 'xenial' )
	),
	false
);


xenial_box_dimension_field(
	'btn_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false),
		'defaults' => xenial_get_customize_default( 'btn_padding' )
	),
	false
);


xenial_divider_field( 
	'general_button_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	) 
);

xenial_color_picker_field(
	'btn_txt_color',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'btn_txt_color' ),
		'default' => xenial_get_customize_default( 'btn_txt_color' )
	)
);

xenial_divider_field( 
	'general_button_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	) 
);

xenial_color_picker_field(
	'btn_bg_color',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'btn_bg_color' ),
		'default' => xenial_get_customize_default( 'btn_bg_color' )
	)
);

xenial_divider_field( 
	'general_button_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	) 
);

xenial_box_border_field(
	'btn_border',
	array(
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' ),
		'is_responsive' => false,
		'allowed_fields' => array(
			'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
			'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			'border_colors' => array( 'initial', 'hover' )
		),
		'default' => xenial_get_customize_default( 'btn_border' )
	)
);











xenial_controls_wrapper_field(
	'text_button',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text Button', 'xenial' )
	),
	false
);




xenial_color_picker_field(
	'txt_btn_txt_color',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'txt_btn_txt_color' ),
		'default' => xenial_get_customize_default( 'txt_btn_txt_color' )
	)
);


xenial_divider_field( 
	'text_button_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	) 
);



xenial_range_control_field(
	'txt_btn_border_width',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'default' => xenial_get_customize_default( 'txt_btn_border_width' )
	)
);

xenial_divider_field( 
	'text_button_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	) 
);


xenial_color_picker_field(
	'txt_btn_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'txt_btn_border_color' ),
		'default' => xenial_get_customize_default( 'txt_btn_border_color' )
	)
);