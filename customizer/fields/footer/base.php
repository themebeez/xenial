<?php 

xenial_section_field( 
	'xenial_footer_general',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'General', 'xenial' )
	)
);


xenial_text_field(
	'theme_footer_elements',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Footer Elements', 'xenial' ),
		'default' => ''
	)
);


xenial_controls_wrapper_field(
	'footer_spacing_field_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Spacing', 'xenial' )
	),
	false
);


xenial_box_dimension_field(
	'footer_margin',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Margin (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_margin' )
	),
	true
);


xenial_divider_field( 
	'footer_field_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general', 
	)
);

xenial_box_dimension_field(
	'footer_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_padding' )
	),
	true
);


xenial_controls_wrapper_field(
	'footer_background_fields_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background', 'xenial' )
	),
	false
);


xenial_select_field(
	'footer_background_type',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Type', 'xenial' ),
		'choices' => xenial_get_background_choices(),
		'default' => xenial_get_customize_default( 'footer_background_type' )
	)
);


xenial_divider_field( 
	'footer_field_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general', 
	)
);


xenial_color_field(
	'footer_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_background_color')
	),
	true
);


xenial_divider_field( 
	'footer_field_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general', 
	)
);


xenial_color_field(
	'footer_gradient_background_color_1',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Gradient Color One', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_gradient_background_color_1')
	),
	true
);


xenial_range_control_field(
	'footer_gradient_location_1',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Color One Location', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'footer_gradient_location_1' )
	)
);


xenial_color_field(
	'footer_gradient_background_color_2',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Gradient Color Two', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_gradient_background_color_2')
	),
	true
);


xenial_range_control_field(
	'footer_gradient_location_2',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Color Two Location', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'footer_gradient_location_2' )
	)
);


xenial_select_field(
	'footer_gradient_type',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Gradient Type', 'xenial' ),
		'choices' => xenial_get_gradient_choices(),
		'default' => xenial_get_customize_default( 'footer_gradient_type' )
	)
);


xenial_range_control_field(
	'footer_gradient_linear_angle',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Angle', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 360, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'footer_gradient_linear_angle' )
	)
);


xenial_divider_field( 
	'footer_field_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general', 
	)
);


xenial_image_upload_field(
	'footer_background_image',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Image', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_background_image' )
	)
);


xenial_select_field(
	'footer_image_background_repeat',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Repeat', 'xenial' ),
		'choices' => xenial_get_background_repeat_choices(),
		'default' => xenial_get_customize_default( 'footer_image_background_repeat' )
	)
);


xenial_select_field(
	'footer_image_background_size',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Size', 'xenial' ),
		'choices' => xenial_get_background_size_choices(),
		'default' => xenial_get_customize_default( 'footer_image_background_size' )
	)
);


xenial_select_field(
	'footer_image_background_position',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Position', 'xenial' ),
		'choices' => xenial_get_background_position_choices(),
		'default' => xenial_get_customize_default( 'footer_image_background_position' )
	)
);


xenial_select_field(
	'footer_image_background_attachment',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Background Attachment', 'xenial' ),
		'choices' => xenial_get_background_attachment_choices(),
		'default' => xenial_get_customize_default( 'footer_image_background_attachment' )
	)
);