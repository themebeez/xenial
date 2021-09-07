<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->get_section( 'title_tagline' )->panel = 'xenial_site_header_panel';
$wp_customize->get_section( 'title_tagline' )->priority = 11;


$wp_customize->add_setting( 
	'xenial_header_title_tagline_tab', 
	array(
    	'sanitize_callback'        => 'wp_filter_nohtml_kses',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Tab_Control( 
		$wp_customize, 
		'xenial_header_title_tagline_tab', 
		array(
		    'section'                  => 'title_tagline',
		    'tabs'                     => xenial_get_tab_control_2_labels(),
		    'controls'                 => array(
		        'tab_1' => apply_filters( 
		        	'xenial_header_title_tagline_tab_1_controls', 
		        	[
		        		'custom_logo_wrapper' => [],
		        		'custom_logo' => [],
		        		'mobile_logo' => [],
		        		'site_identity_logo_height' => [],
		        		'site_title_wrapper' => [],
		        		'display_site_title' => [],
		        		'blogname' => [],
		        		'site_title_visibility' => [],
		        		'site_description_wrapper' => [],
		        		'blogdescription' => [],
		        		'display_header_text' => [],
		        		'site_description_visibility' => [],
		        		'logo_position' => []
		        	] 
		        ),
		        'tab_2' => apply_filters( 
		        	'xenial_header_title_tagline_tab_2_controls', 
		        	[
		        		'site_title_style_wrapper' => [],
		        		'site_title_color' => [],
		        		'site_title_typo_wrapper' => [],
		        		'site_identity_font_type' => [],
		        		'site_identity_system_font_family' => [],
			            'site_identity_system_font_weight' => [],
			            'site_identity_google_font' => [],
			            'site_identity_font_size' => [],
			            'site_identity_line_height' => [],
		        		'site_description_style_wrapper' => [],
		        		'header_textcolor' => [],
		        		'title_tagline_content_align_wrapper' => [],
		        		'title_tagline_content_align_desktop' => [],
		        		'title_tagline_content_align_tablet' => [],
		        		'title_tagline_content_align_mobile' => []
		        	] 
		        )
		    ),
		    'priority'                 => 10,
		) 
	) 
);





$wp_customize->add_setting( 
	'custom_logo_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'custom_logo_wrapper', 
		array(
		    'label'                    => esc_html__( 'Logo', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'custom-logo' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => true,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->get_control( 'custom_logo' )->priority = 11;
$wp_customize->get_control( 'custom_logo' )->label = esc_html__( 'Desktop Logo', 'xenial' );


$wp_customize->add_setting( 
	'mobile_logo', 
	array(
		'sanitize_callback'		=> 'esc_url_raw',
		'default'				=> $xenial_customizer_defaults['mobile_logo'],
	)
);


$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
		$wp_customize, 
		'mobile_logo', 
		array(
			'label' => esc_html__( 'Mobile Logo', 'xenial' ),
			'section' => 'title_tagline',
			'priority' => 11
		)
	) 
);




$wp_customize->add_setting( 
	'site_identity_logo_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_logo_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_logo_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_logo_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_logo_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_logo_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_logo_height', 
		array(
			'label' 			=> esc_html__( 'Height (px)', 'xenial' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_logo_height_desktop',
		        'tablet' 	=> 'site_identity_logo_height_tablet',
		        'mobile' 	=> 'site_identity_logo_height_mobile',
		    ),
			'priority' 				=> 11,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 400,
		        'step'  => 1,
		    )
		) 
	) 
);




$wp_customize->add_setting( 
	'site_title_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'site_title_wrapper', 
		array(
		    'label'                    => esc_html__( 'Site Title', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'site-title' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 12
		) 
	) 
);

$wp_customize->add_setting( 
	'display_site_title', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_site_title'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_site_title', 
		array(
			'label' => esc_html__( 'Display Site Title', 'xenial' ),
			'section' => 'title_tagline',
			'type' => 'ios',
			'priority' => 12
		) 
	) 
);





$wp_customize->get_control( 'blogname' )->priority = 13;


$wp_customize->add_setting( 
	'site_title_visibility',
	array(
		'default' => $xenial_customizer_defaults['site_title_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_title_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_device_visibility(),
			'priority' => 13
		)
	)
);



$wp_customize->add_setting( 
	'site_description_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'site_description_wrapper', 
		array(
		    'label'                    => esc_html__( 'Tagline', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'site-title' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 15
		) 
	) 
);

$wp_customize->get_control( 'display_header_text' )->priority = 16;
$wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Tagline', 'xenial' );


$wp_customize->get_control( 'blogdescription' )->priority = 17;


$wp_customize->add_setting( 
	'site_description_visibility',
	array(
		'default' => $xenial_customizer_defaults['site_description_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_description_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_device_visibility(),
			'priority' => 17
		)
	)
);


$wp_customize->add_setting( 
	'logo_position',
	array(
		'default' => $xenial_customizer_defaults['logo_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize, 
		'logo_position',
		array(
			'label' => esc_html__( 'Logo Position', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => apply_filters( 'xenial_filter_logo_position', [
				'top' => esc_html__( 'Top', 'xenial' ),
				'right' => esc_html__( 'Right', 'xenial' ),
				'bottom' => esc_html__( 'Bottom', 'xenial' ),
				'left' => esc_html__( 'Left', 'xenial' )
			] ),
			'priority' => 17,
		)
	)
);




$wp_customize->add_setting( 
	'site_title_style_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'site_title_style_wrapper', 
		array(
		    'label'                    => esc_html__( 'Site Title', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'site-title-style' ),
		    'controls_to_wrap'         => 8,
		    'expanded'                 => false,
		    'priority'                 => 18
		) 
	) 
);



$wp_customize->add_setting( 
	'site_title_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['site_title_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'site_title_color', 
		array(
			'label'	   	=> esc_html__( 'Color', 'xenial' ),
			'section'  	=> 'title_tagline',
			'priority' 	=> 18,
		) 
	) 
);

$wp_customize->add_setting( 
	'site_title_typo_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'site_title_typo_wrapper', 
		array(
		    'label'                    => esc_html__( 'Site Title Typography', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => false,
		    'class'                    => esc_attr( 'site-title-typography' ),
		    'priority'				   => 18
		) 
	) 
);


$wp_customize->add_setting( 
	'site_identity_font_type',
	array(
		'default' => $xenial_customizer_defaults['site_identity_font_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize, 
		'site_identity_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_font_types(),
			'priority' => 18,
		)
	)
);




$wp_customize->add_setting( 
	'site_identity_system_font_family',
	array(
		'default' => $xenial_customizer_defaults['site_identity_system_font_family'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_identity_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_standard_fonts(),
			'active_callback' => 'xenial_is_site_title_font_a_system_font',
			'priority' 	=> 18,
		)
	)
);

$wp_customize->add_setting( 
	'site_identity_system_font_weight',
	array(
		'default' => $xenial_customizer_defaults['site_identity_system_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_identity_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_standard_font_weights(),
			'active_callback' => 'xenial_is_site_title_font_a_system_font',
			'priority' 	=> 18,
		)
	)
);


$wp_customize->add_setting( 
	'site_identity_google_font',
	array(
		'default' => $xenial_customizer_defaults['site_identity_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'site_identity_google_font',
		array(
			'label' => '',
			'section' => 'title_tagline',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'xenial_is_site_title_font_a_google_font',
			'priority' 	=> 18,
		)
	) 
);



$wp_customize->add_setting( 
	'site_identity_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_font_size_desktop',
		        'tablet' 	=> 'site_identity_font_size_tablet',
		        'mobile' 	=> 'site_identity_font_size_mobile',
		    ),
			'priority' 				=> 18,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);



$wp_customize->add_setting( 
	'site_identity_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['site_identity_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_line_height_desktop',
		        'tablet' 	=> 'site_identity_line_height_tablet',
		        'mobile' 	=> 'site_identity_line_height_mobile',
		    ),
			'priority' 				=> 18,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);


$wp_customize->add_setting( 
	'site_description_style_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'site_description_style_wrapper', 
		array(
		    'label'                    => esc_html__( 'Tagline', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'tagline-style' ),
		    'controls_to_wrap'         => 1,
		    'expanded'                 => false,
		    'priority'                 => 19
		) 
	) 
);


$wp_customize->get_control( 'header_textcolor' )->section = 'title_tagline';
$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Tagline Color', 'xenial' );
$wp_customize->get_control( 'header_textcolor' )->priority = 20;



$wp_customize->add_setting( 
	'title_tagline_content_align_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'title_tagline_content_align_wrapper', 
		array(
		    'label'                    => esc_html__( 'Alignment', 'xenial' ),
		    'section'                  => 'title_tagline',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => 'title-tagline-alignment',
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 20
		) 
	) 
);


$wp_customize->add_setting( 
	'title_tagline_content_align_desktop',
	array(
		'default' => $xenial_customizer_defaults['title_tagline_content_align_desktop'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'title_tagline_content_align_desktop',
		array(
			'label' => esc_html__( 'Desktop', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_alignments(),
			'priority' => 20
		)
	)
);


$wp_customize->add_setting( 
	'title_tagline_content_align_tablet',
	array(
		'default' => $xenial_customizer_defaults['title_tagline_content_align_tablet'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'title_tagline_content_align_tablet',
		array(
			'label' => esc_html__( 'Tablet', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_alignments(),
			'priority' => 20
		)
	)
);


$wp_customize->add_setting( 
	'title_tagline_content_align_mobile',
	array(
		'default' => $xenial_customizer_defaults['title_tagline_content_align_mobile'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'title_tagline_content_align_mobile',
		array(
			'label' => esc_html__( 'Mobile', 'xenial' ),
			'section' => 'title_tagline',
			'choices' => xenial_get_alignments(),
			'priority' => 20
		)
	)
);