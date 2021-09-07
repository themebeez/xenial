<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_archive_pages', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Blog / Archive', 'xenial' ),
		'description' 	=> esc_html__( 'Archive includes default post listing page, category page, tag page, and search page.', 'xenial' ),
		'panel'			=> 'xenial_site_pages'
	) 
);


$wp_customize->add_setting( 
	'archive_layout',
	array(
		'default' => $xenial_customizer_defaults['archive_layout'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'archive_layout',
		array(
			'label' => esc_html__( 'Layout', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'choices' => xenial_get_archive_layouts(),
			'priority' => 10,
		)
	)
);




$wp_customize->add_setting( 
	'archive_content_width',
	array(
		'default' => $xenial_customizer_defaults['archive_content_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'archive_content_width',
		array(
			'label' => esc_html__( 'Content Width', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'choices' => xenial_content_widths(),
			'priority' => 10,
		) 
	)
);



$wp_customize->add_setting( 
	'archive_narrow_width', 
	array(
		'default' => $xenial_customizer_defaults['archive_narrow_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'archive_narrow_width', 
		array(
			'label' 			=> esc_html__( 'Narrow Width (px)', 'xenial' ),
			'section'  			=> 'xenial_archive_pages',
            'input_attrs' 		=> array(
                'min'		=> 500,
                'max' 		=> 1500,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_archive_width_a_narrow_width'
		) 
	) 
);



$wp_customize->add_setting(
	'archive_fullwidth_post_structure',
	array(
		'default'           => $xenial_customizer_defaults['archive_fullwidth_post_structure'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'archive_fullwidth_post_structure',
		array(
			'label'   => esc_html__( 'Post Elements', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => xenial_get_archive_post_structure_fullwidth(),
			'priority' => 10,
			'active_callback' => 'xenial_is_archive_layout_fullwidth'
		)
	)
);


$wp_customize->add_setting(
	'archive_horizontal_list_post_structure',
	array(
		'default'           => $xenial_customizer_defaults['archive_horizontal_list_post_structure'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'archive_horizontal_list_post_structure',
		array(
			'label'   => esc_html__( 'Post Elements', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => xenial_get_archive_post_structure_horizontal_list(),
			'priority' => 10,
			'active_callback' => 'xenial_is_archive_layout_horizontal'
		)
	)
);

$wp_customize->add_setting(
	'archive_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'archive_info_1',
		array(
			'label' => esc_html__( 'Post Meta', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'priority' => 10,
			'active_callback' => 'xenial_is_post_meta_enabled_in_archive'
		)
	)
);

$wp_customize->add_setting(
	'archive_post_meta',
	array(
		'default'           => $xenial_customizer_defaults['archive_post_meta'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'archive_post_meta',
		array(
			'label'   => esc_html__( 'Meta Structure', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => xenial_get_post_meta_structure(),
			'priority' => 10,
			'active_callback' => 'xenial_is_post_meta_enabled_in_archive'
		)
	)
);



$wp_customize->add_setting( 
	'archive_show_icons_in_post_meta', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['archive_show_icons_in_post_meta'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'archive_show_icons_in_post_meta', 
		array(
			'label' => esc_html__( 'Display Icons In Post Meta', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_post_meta_enabled_in_archive'
		) 
	) 
);




$wp_customize->add_setting( 
	'archive_show_post_thumbnail', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['archive_show_post_thumbnail'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'archive_show_post_thumbnail', 
		array(
			'label' => esc_html__( 'Display Featured Image', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_archive_layout_horizontal'
		) 
	) 
);


$wp_customize->add_setting(
	'archive_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'archive_info_2',
		array(
			'label' => esc_html__( 'Featured Image', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'priority' => 10,
			'active_callback' => 'xenial_is_post_thumbnail_enabled_in_archive'
		)
	)
);

$wp_customize->add_setting( 
	'archive_post_thumbnail_size',
	array(
		'default' => $xenial_customizer_defaults['archive_post_thumbnail_size'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'archive_post_thumbnail_size',
		array(
			'label' => esc_html__( 'Image Size', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'choices' => xenial_get_thumbnail_sizes(),
			'priority' => 10,
			'active_callback' => 'xenial_is_post_thumbnail_enabled_in_archive'
		)
	)
);





$wp_customize->add_setting( 
	'archive_post_thumbnail_position',
	array(
		'default' => $xenial_customizer_defaults['archive_post_thumbnail_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'archive_post_thumbnail_position',
		array(
			'label' => esc_html__( 'Image Position', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'choices' => xenial_get_archive_post_thumbnail_position(),
			'priority' => 10,
			'active_callback' => 'xenial_is_post_thumbnail_enabled_in_archive_horizontal_layout'
		)
	)
);


$wp_customize->add_setting(
	'archive_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'archive_info_3',
		array(
			'label' => esc_html__( 'Post Excerpt', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'priority' => 10,
			'active_callback' => 'xenial_is_post_excerpt_enabled_in_archive'
		)
	)
);


$wp_customize->add_setting( 
	'archive_excerpt_length', 
	array(
		'default' => $xenial_customizer_defaults['archive_excerpt_length'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'archive_excerpt_length', 
		array(
			'label' 			=> esc_html__( 'Excerpt Length', 'xenial' ),
			'section'  			=> 'xenial_archive_pages',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_post_excerpt_enabled_in_archive'
		) 
	) 
);





$wp_customize->add_setting( 
	'archive_excerpt_more', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['archive_excerpt_more'],
	) 
);

$wp_customize->add_control( 
	'archive_excerpt_more', 
	array(
		'label' => esc_html__( 'Excerpt More', 'xenial' ),
		'section' => 'xenial_archive_pages',
		'type' => 'text',
		'active_callback' => 'xenial_is_post_excerpt_enabled_in_archive'
	) 
);



$wp_customize->add_setting( 
	'archive_enable_read_more_button', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['archive_enable_read_more_button'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'archive_enable_read_more_button', 
		array(
			'label' => esc_html__( 'Enable Read More Button', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_post_excerpt_enabled_in_archive'
		) 
	) 
);



$wp_customize->add_setting( 
	'archive_read_more_button_title', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['archive_read_more_button_title'],
	) 
);

$wp_customize->add_control( 
	'archive_read_more_button_title', 
	array(
		'label' => esc_html__( 'Read More Button Title', 'xenial' ),
		'section' => 'xenial_archive_pages',
		'type' => 'text',
		'active_callback' => 'xenial_is_read_more_enabled_in_archive'
	) 
);



$wp_customize->add_setting(
	'archive_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'archive_info_4',
		array(
			'label' => esc_html__( 'Pagination', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'archive_pagination_type',
	array(
		'default' => $xenial_customizer_defaults['archive_pagination_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'archive_pagination_type',
		array(
			'label' => esc_html__( 'Pagination Type', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'choices' => xenial_get_pagination_layouts(),
			'priority' => 10,
		) 
	)
);




$wp_customize->add_setting( 
	'previous_posts_link_btn_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['previous_posts_link_btn_label'],
	) 
);

$wp_customize->add_control( 
	'previous_posts_link_btn_label', 
	array(
		'label' => esc_html__( 'Previous Posts Button Label', 'xenial' ),
		'section' => 'xenial_archive_pages',
		'type' => 'text',
		'active_callback' => 'xenial_is_pagination_set_default_in_archive'
	) 
);



$wp_customize->add_setting( 
	'next_posts_link_btn_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['next_posts_link_btn_label'],
	) 
);

$wp_customize->add_control( 
	'next_posts_link_btn_label', 
	array(
		'label' => esc_html__( 'Next Posts Button Label', 'xenial' ),
		'section' => 'xenial_archive_pages',
		'type' => 'text',
		'active_callback' => 'xenial_is_pagination_set_default_in_archive'
	) 
);





$wp_customize->add_setting( 
	'pagination_mid_size', 
	array(
		'default' => $xenial_customizer_defaults['pagination_mid_size'],
		'sanitize_callback' 	=> '',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'pagination_mid_size', 
		array(
			'label' 			=> esc_html__( 'Pagination Mid Size', 'xenial' ),
			'section'  			=> 'xenial_archive_pages',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 10,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_pagination_set_numeric_in_archive'
		) 
	) 
);



$wp_customize->add_setting(
	'archive_info_5',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'archive_info_5',
		array(
			'label' => esc_html__( 'Typography', 'xenial' ),
			'section' => 'xenial_archive_pages',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'archive_post_title_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['archive_post_title_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'archive_post_title_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['archive_post_title_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'archive_post_title_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['archive_post_title_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'archive_post_title_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_archive_pages',
			'settings' => array(
		        'desktop' 	=> 'archive_post_title_font_size_desktop',
		        'tablet' 	=> 'archive_post_title_font_size_tablet',
		        'mobile' 	=> 'archive_post_title_font_size_mobile',
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