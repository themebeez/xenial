<?php

$wp_customize->get_section( 'title_tagline' )->panel = 'xenial_site_header_panel';
$wp_customize->get_section( 'title_tagline' )->priority = 11;


xenial_tab_field(
	'xenial_header_title_tagline_tab',
	array(
		'priority' => 10,
		'section' => 'title_tagline',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_title_tagline_tab_1_controls', 
	        	array(
	        		'site_identity_logo' => '',
	        		'custom_logo' => '',
	        		'mobile_logo' => '',
	        		'site_identity_logo_divider_1' => '',

	        		'transparent_header_state_site_identity_logo' => '',
	        		'transparent_desktop_logo' => '',
	        		'transparent_mobile_logo' => '',
	        		'site_identity_logo_divider_2' => '',

	        		'site_identity_logo_width' => '',

	        		'site_identity_title' => '',
	        		'display_site_title' => '',
	        		'blogname' => '',
	        		'site_title_visibility' => '',

	        		'site_identity_tagline' => '',
	        		'blogdescription' => '',
	        		'display_site_description' => '',
	        		'site_description_visibility' => '',

	        		'site_identity_logo_divider_3' => '',
	        		'logo_position' => '',
	        		'site_identity_logo_divider_4' => '',

	        		'site_identity_alignment' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_title_tagline_tab_2_controls', 
	        	array(
	        		'site_title_style' => '',
	        		'site_title_typo' => '',
	        		'site_identity_font_type' => '',
	        		'site_identity_system_font_family' => '',
		            'site_identity_system_font_weight' => '',
		            'site_identity_google_font' => '',
		            'site_identity_font_size' => '',
		            'site_identity_line_height' => '',
		            'site_identity_font_style' => '',
		            'site_identity_text_transform' => '',

		            'site_title_style_divider_1' => '',
		            'site_title_default_state_color' => '',
	        		'site_title_color' => '',

	        		'site_title_style_divider_2' => '',
	        		'site_title_hover_state_color' => '',
	        		'site_title_hover_color' => '',
	        		
	        		'site_description_style' => '',
	        		'site_description_typo' => '',
	        		'site_description_font_size' => '',
		            'site_description_line_height' => '',
		            'site_description_font_style' => '',
		            'site_description_text_transform' => '',

		            'site_description_style_divider_1' => '',
		            'site_description_color' => '',
	        		'header_textcolor' => ''
	        	) 
	        )
		)
	)
);

xenial_controls_wrapper_field(
	'site_identity_logo',
	array(
		'priority' => 10,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Logo', 'xenial' )
	),
	false
);


$wp_customize->get_control( 'custom_logo' )->priority = 11;
$wp_customize->get_control( 'custom_logo' )->label = esc_html__( 'Desktop Logo', 'xenial' );

xenial_image_upload_field(
	'mobile_logo',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Mobile Logo', 'xenial' ),
		'default' => xenial_get_customize_default( 'mobile_logo' )
	)
);


xenial_divider_field( 
	'site_identity_logo_divider_1', 
	array( 
		'priority' => 11,
		'section' => 'title_tagline', 
	) 
);


xenial_info_field(
	'transparent_header_state_site_identity_logo',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Transparent Header State', 'xenial' )
	)
);


xenial_image_upload_field(
	'transparent_desktop_logo',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Desktop Logo', 'xenial' ),
		'default' => xenial_get_customize_default( 'transparent_desktop_logo' )
	)
);


xenial_image_upload_field(
	'transparent_mobile_logo',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Mobile Logo', 'xenial' ),
		'default' => xenial_get_customize_default( 'transparent_mobile_logo' )
	)
);


xenial_divider_field( 
	'site_identity_logo_divider_2', 
	array( 
		'priority' => 11,
		'section' => 'title_tagline', 
	) 
);


xenial_range_control_field(
	'site_identity_logo_width',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Logo Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 500, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'site_identity_logo_width' )
	)
);


xenial_controls_wrapper_field(
	'site_identity_title',
	array(
		'priority' => 11,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Title', 'xenial' )
	),
	false
);


xenial_switch_field(
	'display_site_title',
	array(
		'priority' => 12,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Display Site Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'display_site_title' )
	)
);


$wp_customize->get_control( 'blogname' )->priority = 13;


xenial_button_checkbox_field(
	'site_title_visibility',
	array(
		'priority' => 13,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'site_title_visibility' )
	)
);


xenial_controls_wrapper_field(
	'site_identity_tagline',
	array(
		'priority' => 13,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Tagline', 'xenial' )
	),
	false
);


xenial_switch_field(
	'display_site_description',
	array(
		'priority' => 16,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Display Tagline', 'xenial' ),
		'default' => xenial_get_customize_default( 'display_site_description' )
	)
);


$wp_customize->get_control( 'blogdescription' )->priority = 17;


xenial_button_checkbox_field(
	'site_description_visibility',
	array(
		'priority' => 17,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'site_description_visibility' )
	)
);


xenial_divider_field( 
	'site_identity_logo_divider_3', 
	array( 
		'priority' => 17,
		'section' => 'title_tagline', 
	) 
);



xenial_radio_button_group_field(
	'logo_position',
	array(
		'priority' => 17,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Logo Position', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => apply_filters( 'xenial_filter_logo_position', 
			array(
				'top' => esc_html__( 'Top', 'xenial' ),
				'right' => esc_html__( 'Right', 'xenial' ),
				'bottom' => esc_html__( 'Bottom', 'xenial' ),
				'left' => esc_html__( 'Left', 'xenial' )
			)
		),
		'default' => xenial_get_customize_default( 'logo_position' )
	),
	false
);


xenial_divider_field( 
	'site_identity_logo_divider_4', 
	array( 
		'priority' => 17,
		'section' => 'title_tagline', 
	) 
);


xenial_radio_button_group_field(
	'site_identity_alignment',
	array(
		'priority' => 17,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'site_identity_alignment' )
	),
	true
);



xenial_controls_wrapper_field(
	'site_title_style',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Title', 'xenial' )
	),
	false
);


xenial_info_field(
	'site_title_typo',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);


xenial_select_field(
	'site_identity_font_type',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Type', 'xenial' ),
		'choices' => xenial_font_types(),
		'default' => xenial_get_customize_default( 'site_identity_font_type' )
	)
);


xenial_select_field(
	'site_identity_system_font_family',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Family', 'xenial' ),
		'choices' => xenial_get_standard_fonts(),
		'active_callback' => 'xenial_is_site_title_font_a_system_font',
		'default' => xenial_get_customize_default( 'site_identity_system_font_family' )
	)
);


xenial_select_field(
	'site_identity_system_font_weight',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'active_callback' => 'xenial_is_site_title_font_a_system_font',
		'default' => xenial_get_customize_default( 'site_identity_system_font_weight' )
	)
);

xenial_google_font_field(
	'site_identity_google_font',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => '',
		'input_attrs' => array(
			'font_count' => 'all',
			'orderby' => 'alpha',
		),
		'active_callback' => 'xenial_is_site_title_font_a_google_font',
		'default' => xenial_get_customize_default( 'site_identity_google_font' )
	)
);


xenial_range_control_field(
	'site_identity_font_size',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'site_identity_font_size' )
	)
);


xenial_range_control_field(
	'site_identity_line_height',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'site_identity_line_height' )
	)
);


xenial_radio_button_group_field(
	'site_identity_font_style',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'site_identity_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'site_identity_text_transform',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'site_identity_text_transform' )
	),
	false
);

xenial_divider_field( 
	'site_title_style_divider_1', 
	array( 
		'priority' => 18,
		'section' => 'title_tagline', 
	) 
);

xenial_color_picker_field(
	'site_title_color',
	array(
		'priority' => 18,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Title Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'site_title_color' )
	)
);




xenial_controls_wrapper_field(
	'site_description_style',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Tagline', 'xenial' )
	),
	false
);


xenial_info_field(
	'site_description_typo',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'site_description_font_size',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'site_description_font_size' )
	)
);


xenial_range_control_field(
	'site_description_line_height',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'site_description_line_height' )
	)
);


xenial_radio_button_group_field(
	'site_description_font_style',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'site_description_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'site_description_text_transform',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'site_description_text_transform' )
	),
	false
);


xenial_divider_field( 
	'site_description_style_divider_1', 
	array( 
		'priority' => 19,
		'section' => 'title_tagline', 
	) 
);

xenial_color_picker_field(
	'site_description_color',
	array(
		'priority' => 19,
		'section' => 'title_tagline',
		'label' => esc_html__( 'Site Tagline Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'site_description_color' )
	)
);