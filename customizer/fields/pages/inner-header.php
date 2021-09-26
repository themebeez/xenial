<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_page_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Page Header', 'xenial' ),
		'panel'			=> 'xenial_site_pages'
	) 
);


$wp_customize->add_setting( 
	'xenial_page_header_tab', 
	array(
    	'sanitize_callback'        => 'wp_filter_nohtml_kses',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Tab_Control( 
		$wp_customize, 
		'xenial_page_header_tab', 
		array(
		    'section'                  => 'xenial_page_header',
		    'tabs'                     => xenial_get_global_tab_control_labels(),
		    'controls'                 => array(
		        'tab_1' => apply_filters( 
		        	'xenial_page_header_tab_1_settings', 
		        	[
		        		'enable_page_header' => [],
		        		'page_header_display_pages' => [],
		        		'page_header_info_1' => [],
		        		'page_header_content_width' => [],
		        		'page_header_content_position' => [],
		        		'page_header_text_alignments' => []
		        	] 
		        ),
		        'tab_2' => apply_filters( 
		        	'xenial_page_header_tab_2_settings', 
		        	[
		        		'page_header_text_color' => [],
			            'page_header_link_hover_color' => [],
			            'page_header_background_wrapper' => [],
			            'page_header_background_type' => [],
			            'page_header_bg_color' => [],
			            'page_header_gradient_bg_color_1' => [],
			            'page_header_gradient_location_1' => [],
			            'page_header_gradient_bg_color_2' => [],
			            'page_header_gradient_location_2' => [],
			            'page_header_gradient_type' => [],
			            'page_header_gradient_linear_angle'	=> [],
			            'page_header_gradient_radial_position' => [],
			            'page_header_image_background_repeat' => [],
			            'page_header_image_background_size' => [],
			            'page_header_image_background_position' => [],
			            'page_header_image_background_attachment' => [],
			            'page_header_overlay_color' => []
		        	] 
		        ),
		        'tab_3' => apply_filters( 
		        	'xenial_page_header_tab_3_settings', 
		        	[
		        		'page_header_height' => [],
			            'page_header_content_margin' => [],
			            'page_header_content_padding' => [],
		        	] 
		        )
		    ),
		    'priority'                 => 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'enable_page_header',
	array(
		'default' => $xenial_customizer_defaults['enable_page_header'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_page_header',
		array(
			'label' => esc_html__( 'Enable Page header', 'xenial' ),
			'section' => 'xenial_page_header',
			'type' => 'ios'
		)
	) 
);


$wp_customize->add_setting(
	'page_header_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_1',
		array(
			'section' => 'xenial_page_header',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting(
	'page_header_display_pages',
	array(
		'default'           => $xenial_customizer_defaults['page_header_display_pages'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'page_header_display_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'xenial' ),
			'section' => 'xenial_page_header',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => xenial_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_content_width',
	array(
		'default' => $xenial_customizer_defaults['page_header_content_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_content_width',
		array(
			'label' => esc_html__( 'Container Width', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_info_1', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'page_header_info_1', 
		array(
		    'label'                    => esc_html__( 'Content', 'xenial' ),
		    'section'                  => 'xenial_page_header',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'page-header-content' ),
		    'controls_to_wrap'         => 2,
		    'expanded'                 => false,
		    'priority'                 => 10,
		    'active_callback'		   => 'xenial_is_page_header_enabled'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_content_position',
	array(
		'default' => $xenial_customizer_defaults['page_header_content_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_content_position',
		array(
			'label' => esc_html__( 'Content Position', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_content_positions(),
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_text_alignments',
	array(
		'default' => $xenial_customizer_defaults['page_header_text_alignments'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_text_alignments',
		array(
			'label' => esc_html__( 'Content Alignment', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_alignments(),
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'page_header_info_2',
		array(
			'label' => esc_html__( 'Design Settings', 'xenial' ),
			'section' => 'xenial_page_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_text_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['page_header_text_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'page_header_text_color', 
		array(
			'label'	   	=> esc_html__( 'Text/Link Color', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_4',
		array(
			'section' => 'xenial_page_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_link_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['page_header_link_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'page_header_link_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Link Color - On Hover', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	) 
);





$wp_customize->add_setting( 
	'page_header_background_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'page_header_background_wrapper', 
		array(
		    'label'                    => esc_html__( 'Background', 'influence-blog' ),
		    'section'                  => 'xenial_page_header',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'page-header-background' ),
		    'controls_to_wrap'         => 15,
		    'expanded'                 => false,
		    'priority'                 => 10,
		    'active_callback'		   => 'xenial_is_page_header_enabled'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_background_type',
	array(
		'default' => $xenial_customizer_defaults['page_header_background_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_background_type',
		array(
			'label' => esc_html__( 'Background Type', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_page_header_background_choices(),
			'active_callback' => 'xenial_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['page_header_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_page_header_background_a_color'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_gradient_bg_color_1', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['page_header_gradient_bg_color_1'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_gradient_bg_color_1', 
		array(
			'label'	   	=> esc_html__( 'Color 1', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_page_header_background_a_gradient'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_gradient_location_1', 
	array(
		'default' => $xenial_customizer_defaults['page_header_gradient_location_1'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_location_1', 
		array(
			'label' 			=> esc_html__( 'Location 1', 'xenial' ),
			'section'  			=> 'xenial_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_page_header_background_a_gradient'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_gradient_bg_color_2', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['page_header_gradient_bg_color_2'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_gradient_bg_color_2', 
		array(
			'label'	   	=> esc_html__( 'Color 2', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_page_header_background_a_gradient'
		) 
	) 
);


$wp_customize->add_setting( 
	'page_header_gradient_location_2', 
	array(
		'default' => $xenial_customizer_defaults['page_header_gradient_location_2'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_location_2', 
		array(
			'label' 			=> esc_html__( 'Location 2', 'xenial' ),
			'section'  			=> 'xenial_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_page_header_background_a_gradient'
		) 
	) 
);



$wp_customize->add_setting( 
	'page_header_gradient_type',
	array(
		'default' => $xenial_customizer_defaults['page_header_gradient_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_gradient_type',
		array(
			'label' => esc_html__( 'Background Type', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_gradient_choices(),
			'active_callback' => 'xenial_is_page_header_background_a_gradient'
		) 
	)
);



$wp_customize->add_setting( 
	'page_header_gradient_linear_angle', 
	array(
		'default' => $xenial_customizer_defaults['page_header_gradient_linear_angle'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_linear_angle', 
		array(
			'label' 			=> esc_html__( 'Angle', 'xenial' ),
			'section'  			=> 'xenial_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 360,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_page_header_gradient_background_linear'
		) 
	) 
);



$wp_customize->add_setting( 
	'page_header_gradient_radial_position',
	array(
		'default' => $xenial_customizer_defaults['page_header_gradient_radial_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_gradient_radial_position',
		array(
			'label' => esc_html__( 'Position', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_radial_gradient_positions(),
			'active_callback' => 'xenial_is_page_header_gradient_background_radial'
		) 
	)
);



$wp_customize->get_control( 'header_image' )->section = 'xenial_page_header';
$wp_customize->get_control( 'header_image' )->priority = 11;
$wp_customize->get_control( 'header_image' )->label = esc_html__( 'Normal Image', 'xenial' );
$wp_customize->get_control( 'header_image' )->active_callback = 'xenial_is_page_header_background_a_image';


$wp_customize->add_setting( 
	'page_header_image_background_repeat',
	array(
		'default' => $xenial_customizer_defaults['page_header_image_background_repeat'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_repeat',
		array(
			'label' => esc_html__( 'Background Repeat', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_background_repeat_choices(),
			'priority' => 12,
			'active_callback' => 'xenial_is_page_header_background_a_image'
		) 
	)
);




$wp_customize->add_setting( 
	'page_header_image_background_size',
	array(
		'default' => $xenial_customizer_defaults['page_header_image_background_size'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_size',
		array(
			'label' => esc_html__( 'Background Size', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_background_size_choices(),
			'priority' => 12,
			'active_callback' => 'xenial_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_position',
	array(
		'default' => $xenial_customizer_defaults['page_header_image_background_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_position',
		array(
			'label' => esc_html__( 'Background Repeat', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_background_position_choices(),
			'priority' => 12,
			'active_callback' => 'xenial_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_attachment',
	array(
		'default' => $xenial_customizer_defaults['page_header_image_background_attachment'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_attachment',
		array(
			'label' => esc_html__( 'Background Attachment', 'xenial' ),
			'section' => 'xenial_page_header',
			'choices' => xenial_get_background_attachment_choices(),
			'priority' => 12,
			'active_callback' => 'xenial_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting( 
	'page_header_overlay_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['page_header_overlay_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_overlay_color', 
		array(
			'label'	   	=> esc_html__( 'Overlay Color', 'xenial' ),
			'section'  	=> 'xenial_page_header',
			'priority' 	=> 12,
			'active_callback' => 'xenial_is_page_header_background_a_image'
		) 
	) 
);

$wp_customize->add_setting( 
	'page_header_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'page_header_height', 
		array(
			'label' 			=> esc_html__( 'Height (vh)', 'xenial' ),
			'section'  			=> 'xenial_page_header',
			'settings' => array(
		        'desktop' 	=> 'page_header_height_desktop',
		        'tablet' 	=> 'page_header_height_tablet',
		        'mobile' 	=> 'page_header_height_mobile',
		    ),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		        'responsive' => true
		    ),
		    'active_callback' => 'xenial_is_page_header_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'page_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'page_header_info_3',
		array(
			'label' => esc_html__( 'Margin &amp; Padding', 'xenial' ),
			'section' => 'xenial_page_header',
			'priority' => 12,
			'active_callback' => 'xenial_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_content_margin_desktop_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['desktop_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['desktop_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['desktop_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['desktop_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['tablet_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['tablet_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['tablet_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['tablet_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['mobile_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['mobile_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['mobile_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_margin']['mobile_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Dimensions_Control( 
		$wp_customize, 
		'page_header_content_margin', 
		array(
			'label'	   				=> esc_html__( 'Content Margin (px)', 'xenial' ),
			'section'  				=> 'xenial_page_header',				
			'settings'   => array(
		        'desktop_top' 		=> 'page_header_content_margin_desktop_top',
		        'desktop_right' 		=> 'page_header_content_margin_desktop_right',
		        'desktop_bottom' 	=> 'page_header_content_margin_desktop_bottom',
		        'desktop_left' 	=> 'page_header_content_margin_desktop_left',
		        'tablet_top' 		=> 'page_header_content_margin_tablet_top',
		        'tablet_right' 		=> 'page_header_content_margin_tablet_right',
		        'tablet_bottom' 	=> 'page_header_content_margin_tablet_bottom',
		        'tablet_left' 	=> 'page_header_content_margin_tablet_left',
		        'mobile_top' 		=> 'page_header_content_margin_mobile_top',
		        'mobile_right' 		=> 'page_header_content_margin_mobile_right',
		        'mobile_bottom' 	=> 'page_header_content_margin_mobile_bottom',
		        'mobile_left' 	=> 'page_header_content_margin_mobile_left',
			),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback'		=> 'xenial_is_page_header_enabled',
		) 
	) 
);




$wp_customize->add_setting( 
	'page_header_content_padding_desktop_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['desktop_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['desktop_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['desktop_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['desktop_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['tablet_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['tablet_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['tablet_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['tablet_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['mobile_top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['mobile_right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['mobile_bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['page_header_content_padding']['mobile_left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Dimensions_Control( 
		$wp_customize, 
		'page_header_content_padding', 
		array(
			'label'	   				=> esc_html__( 'Content Padding (px)', 'xenial' ),
			'section'  				=> 'xenial_page_header',				
			'settings'   => array(
		        'desktop_top' 		=> 'page_header_content_padding_desktop_top',
		        'desktop_right' 		=> 'page_header_content_padding_desktop_right',
		        'desktop_bottom' 	=> 'page_header_content_padding_desktop_bottom',
		        'desktop_left' 	=> 'page_header_content_padding_desktop_left',
		        'tablet_top' 		=> 'page_header_content_padding_tablet_top',
		        'tablet_right' 		=> 'page_header_content_padding_tablet_right',
		        'tablet_bottom' 	=> 'page_header_content_padding_tablet_bottom',
		        'tablet_left' 	=> 'page_header_content_padding_tablet_left',
		        'mobile_top' 		=> 'page_header_content_padding_mobile_top',
		        'mobile_right' 		=> 'page_header_content_padding_mobile_right',
		        'mobile_bottom' 	=> 'page_header_content_padding_mobile_bottom',
		        'mobile_left' 	=> 'page_header_content_padding_mobile_left',
			),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback'		=> 'xenial_is_page_header_enabled',
		) 
	) 
);