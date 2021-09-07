<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_buttons',
	array(
		'title' => esc_html__( 'Buttons', 'xenial' ),
		'panel' => 'xenial_general_panel'
	)
);

$wp_customize->add_setting(
	'buttons_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'buttons_info_1',
		array(
			'label' => esc_html__( 'Primary Button', 'xenial' ),
			'section' => 'xenial_buttons',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'button_style',
	array(
		'default' => $xenial_customizer_defaults['button_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'button_style',
		array(
			'label' => esc_html__( 'Style', 'xenial' ),
			'section' => 'xenial_buttons',
			'choices' => xenial_button_styles()
		) 
	)
);


$wp_customize->add_setting( 
	'btn_txt_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_txt_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_txt_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_txt_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_txt_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_txt_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_bg_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_bg_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_bg_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_border_width', 
	array(
		'default' => $xenial_customizer_defaults['btn_border_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'btn_border_width', 
		array(
			'label' 			=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  			=> 'xenial_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 15,
                'step' 		=> 1,
            ),
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_border_radius', 
	array(
		'default' => $xenial_customizer_defaults['btn_border_radius'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'btn_border_radius', 
		array(
			'label' 			=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  			=> 'xenial_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_button_rounded'
		) 
	) 
);



$wp_customize->add_setting( 
	'btn_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);




$wp_customize->add_setting( 
	'btn_border_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['btn_border_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_border_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);






$wp_customize->add_setting(
	'buttons_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'buttons_info_2',
		array(
			'label' => esc_html__( 'Text Button', 'xenial' ),
			'section' => 'xenial_buttons',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'txt_button_style',
	array(
		'default' => $xenial_customizer_defaults['txt_button_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'txt_button_style',
		array(
			'label' => esc_html__( 'Style', 'xenial' ),
			'section' => 'xenial_buttons',
			'choices' => xenial_button_styles()
		) 
	)
);





$wp_customize->add_setting( 
	'txt_btn_txt_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_txt_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_txt_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'txt_btn_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);





$wp_customize->add_setting( 
	'txt_btn_txt_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_txt_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_txt_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'txt_btn_bg_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_bg_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_bg_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'txt_btn_border_width', 
	array(
		'default' => $xenial_customizer_defaults['txt_btn_border_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'txt_btn_border_width', 
		array(
			'label' 			=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  			=> 'xenial_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 15,
                'step' 		=> 1,
            ),
		) 
	) 
);



$wp_customize->add_setting( 
	'txt_btn_border_radius', 
	array(
		'default' => $xenial_customizer_defaults['txt_btn_border_radius'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'txt_btn_border_radius', 
		array(
			'label' 			=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  			=> 'xenial_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_text_button_rounded'
		) 
	) 
);



$wp_customize->add_setting( 
	'txt_btn_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);




$wp_customize->add_setting( 
	'txt_btn_border_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['txt_btn_border_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_border_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_buttons',
			'priority' 	=> 10,
		) 
	) 
);