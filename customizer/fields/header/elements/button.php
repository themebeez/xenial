<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


$wp_customize->add_section( 
	'xenial_header_button', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Button', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'xenial_header_button_tab', 
	array(
    	'sanitize_callback'        => 'wp_filter_nohtml_kses',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Tab_Control( 
		$wp_customize, 
		'xenial_header_button_tab', 
		array(
		    'section'                  => 'xenial_header_button',
		    'tabs'                     => xenial_get_tab_control_2_labels(),
		    'controls'                 => array(
		        'tab_1' => apply_filters( 
		        	'xenial_header_button_tab_1_controls', 
		        	[
		        		'header_button_title' => [],
		        		'header_button_link' => [],
		        		'header_button_link_open_in_new_tab' => [],
		        		'header_button_visibility' => []
		        	] 
		        ),
		        'tab_2' => apply_filters( 
		        	'xenial_header_button_tab_2_controls', 
		        	[
		        		'header_button_padding' => [],
		        		'header_button_label_wrapper' => [],
		        		'header_button_font_color' => [],
		        		'header_button_hover_font_color' => [],
		        		'header_button_font_size' => [],
		        		'header_button_line_height' => [],
		        		'header_button_font_weight' => [],
		        		'header_button_font_style' => [],
		        		'header_button_text_transform' => [],
		        		'header_button_background_color_wrapper' => [],
		        		'header_button_background_color' => [],
		        		'header_button_hover_background_color' => [],
		        		'header_button_border_wrapper' => [],
		        		'header_button_border_radius' => [],
		        		'header_button_border_style' => [],
		        		'header_button_border_width' => [],
		        		'header_button_border_color' => [],
		        		'header_button_hover_border_color' => []
		        	] 
		        )
		    ),
		    'priority'                 => 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_title', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['header_button_title'],
	) 
);

$wp_customize->add_control( 
	'header_button_title', 
	array(
		'label' => esc_html__( 'Label', 'xenial' ),
		'section' => 'xenial_header_button',
		'type' => 'text'
	) 
);




$wp_customize->add_setting( 
	'header_button_link', 
	array(
		'sanitize_callback' => 'esc_url_raw',
		'default' => $xenial_customizer_defaults['header_button_link'],
	) 
);

$wp_customize->add_control( 
	'header_button_link', 
	array(
		'label' => esc_html__( 'Link', 'xenial' ),
		'section' => 'xenial_header_button',
		'type' => 'url'
	) 
);





$wp_customize->add_setting( 
	'header_button_link_open_in_new_tab', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['header_button_link_open_in_new_tab'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'header_button_link_open_in_new_tab', 
		array(
			'label' => esc_html__( 'Open in New Tab', 'xenial' ),
			'section' => 'xenial_header_button',
			'type' => 'ios'
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_visibility',
	array(
		'default' => $xenial_customizer_defaults['header_button_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'header_button_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_header_button',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10
		)
	)
);




$wp_customize->add_setting( 
	'header_button_padding_desktop_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['desktop_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_desktop_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['desktop_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_desktop_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['desktop_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_desktop_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['desktop_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_tablet_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['tablet_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_tablet_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['tablet_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_tablet_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['tablet_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_tablet_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['tablet_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_mobile_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['mobile_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_mobile_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['mobile_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_mobile_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['mobile_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_padding_mobile_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_padding']['mobile_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Dimensions_Control( 
		$wp_customize, 
		'header_button_padding', 
		array(
			'label'	   				=> esc_html__( 'Padding (px)', 'xenial' ),
			'section'  				=> 'xenial_header_button',				
			'settings'   => array(
		        'desktop_top' 		=> 'header_button_padding_desktop_top',
		        'desktop_right' 	=> 'header_button_padding_desktop_right',
		        'desktop_bottom' 	=> 'header_button_padding_desktop_bottom',
		        'desktop_left' 		=> 'header_button_padding_desktop_left',
		        'tablet_top' 		=> 'header_button_padding_tablet_top',
		        'tablet_right' 		=> 'header_button_padding_tablet_right',
		        'tablet_bottom' 	=> 'header_button_padding_tablet_bottom',
		        'tablet_left' 		=> 'header_button_padding_tablet_left',
		        'mobile_top' 		=> 'header_button_padding_mobile_top',
		        'mobile_right' 		=> 'header_button_padding_mobile_right',
		        'mobile_bottom' 	=> 'header_button_padding_mobile_bottom',
		        'mobile_left' 		=> 'header_button_padding_mobile_left',
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    )
		) 
	) 
);




$wp_customize->add_setting( 
	'header_button_label_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'header_button_label_wrapper', 
		array(
		    'label'                    => esc_html__( 'Label', 'xenial' ),
		    'section'                  => 'xenial_header_button',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'header-button-label-color' ),
		    'controls_to_wrap'         => 7,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_font_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['header_button_font_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'header_button_font_color', 
		array(
			'label'	   	=> esc_html__( 'Initial Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_hover_font_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['header_button_hover_font_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'header_button_hover_font_color', 
		array(
			'label'	   	=> esc_html__( 'Hover Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'header_button_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_header_button',
			'settings' => array(
		        'desktop' 	=> 'header_button_font_size_desktop',
		        'tablet' 	=> 'header_button_font_size_tablet',
		        'mobile' 	=> 'header_button_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'header_button_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_header_button',
			'settings' => array(
		        'desktop' 	=> 'header_button_line_height_desktop',
		        'tablet' 	=> 'header_button_line_height_tablet',
		        'mobile' 	=> 'header_button_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_font_weight',
	array(
		'default' => $xenial_customizer_defaults['header_button_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'header_button_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_header_button',
			'choices' => xenial_get_standard_font_weights(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'header_button_font_style',
	array(
		'default' => $xenial_customizer_defaults['header_button_font_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'header_button_font_style',
		array(
			'label' => esc_html__( 'Font Style', 'xenial' ),
			'section' => 'xenial_header_button',
			'choices' => xenial_get_font_styles(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'header_button_text_transform',
	array(
		'default' => $xenial_customizer_defaults['header_button_text_transform'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'header_button_text_transform',
		array(
			'label' => esc_html__( 'Text Transform', 'xenial' ),
			'section' => 'xenial_header_button',
			'choices' => xenial_get_text_transforms(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'header_button_background_color_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'header_button_background_color_wrapper', 
		array(
		    'label'                    => esc_html__( 'Background', 'xenial' ),
		    'section'                  => 'xenial_header_button',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'header-button-background-color' ),
		    'controls_to_wrap'         => 2,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['header_button_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'header_button_background_color', 
		array(
			'label'	   	=> esc_html__( 'Initial Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_hover_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['header_button_hover_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'header_button_hover_background_color', 
		array(
			'label'	   	=> esc_html__( 'Hover Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_border_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'header_button_border_wrapper', 
		array(
		    'label'                    => esc_html__( 'Border', 'xenial' ),
		    'section'                  => 'xenial_header_button',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'header-button-border' ),
		    'controls_to_wrap'         => 6,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_border_radius', 
	array(
		'default' => $xenial_customizer_defaults['header_button_border_radius'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'header_button_border_radius', 
		array(
			'label' 			=> esc_html__( 'Radius', 'xenial' ),
			'section'  			=> 'xenial_header_button',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_border_radius_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_radius']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_radius_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_radius']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_radius_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_radius']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_radius_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_radius']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'header_button_border_radius', 
		array(
			'label'	   				=> esc_html__( 'Radius (px)', 'xenial' ),
			'section'  				=> 'xenial_header_button',				
			'settings'   => array(
		        'top' 		=> 'header_button_border_radius_top',
		        'right' 	=> 'header_button_border_radius_right',
		        'bottom' 	=> 'header_button_border_radius_bottom',
		        'left' 		=> 'header_button_border_radius_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);



$wp_customize->add_setting( 
	'header_button_border_style',
	array(
		'default' => $xenial_customizer_defaults['header_button_border_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control(
		$wp_customize, 
		'header_button_border_style',
		array(
			'label' => esc_html__( 'Type', 'xenial' ),
			'section' => 'xenial_header_button',
			'choices' => xenial_get_border_styles()
		) 
	)
);


$wp_customize->add_setting( 
	'header_button_border_width_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_width']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_width_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_width']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_width_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_width']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'header_button_border_width_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['header_button_border_width']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'header_button_border_width', 
		array(
			'label'	   				=> esc_html__( 'Width (px)', 'xenial' ),
			'section'  				=> 'xenial_header_button',				
			'settings'   => array(
		        'top' 		=> 'header_button_border_width_top',
		        'right' 	=> 'header_button_border_width_right',
		        'bottom' 	=> 'header_button_border_width_bottom',
		        'left' 		=> 'header_button_border_width_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['header_button_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'header_button_border_color', 
		array(
			'label'	   	=> esc_html__( 'Initial Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'header_button_hover_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['header_button_hover_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'header_button_hover_border_color', 
		array(
			'label'	   	=> esc_html__( 'Hover Color', 'xenial' ),
			'section'  	=> 'xenial_header_button',
			'priority' 	=> 10
		) 
	) 
);