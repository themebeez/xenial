<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_archive_pages',
	[
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'			=> esc_html__( 'Blog / Archive', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_archive_pages_button_tab',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_archive_pages_tab_1_controls', 
	        	[
	        		'archive_content_width' => '',
	        		'archive_narrow_width' => '',
	        		'xenial_archive_pages_general_divider_1' => '',
	        		'archive_post_structure_one' => '',
	        		'xenial_archive_pages_general_divider_2' => '',
	        		'archive_post_meta' => '',
	        		'archive_show_icons_in_post_meta' => '',
	        		'xenial_archive_pages_general_divider_3' => '',
	        		'archive_excerpt_heading' => '',
	        		'archive_excerpt_length' => '',
	        		'archive_excerpt_more' => '',
	        		'xenial_archive_pages_general_divider_4' => '',
	        		'archive_read_more_heading' => '',
	        		'archive_enable_read_more_button' => '',
	        		'archive_read_more_button_title' => '',
	        		'xenial_archive_pages_general_divider_5' => '',
	        		'archive_pagination_heading' => '',
	        		'archive_pagination_type' => '',
	        		'previous_posts_link_btn_label' => '',
	        		'next_posts_link_btn_label' => '',
	        		'pagination_mid_size' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_archive_pages_tab_2_controls', 
	        	[
	        		
	        	] 
	        )
		]
	]
);


xenial_radio_button_group_field(
	'archive_content_width',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Content Width', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => xenial_content_widths(),
		'default' => $xenial_customizer_defaults['archive_content_width']
	],
	false
);



xenial_range_control_field(
	'archive_narrow_width',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Narrow Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 500, 'max' => 1500, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['archive_narrow_width']
	]
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_sortable_checkbox_field(
	'archive_post_structure_one',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_archive_post_structure_one_array',  
			[
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
			]
		),
		'input_attrs' => [ 'sortable' => true, 'fullwidth' => true ]
	]
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_sortable_checkbox_field(
	'archive_post_meta',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Meta Structure', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => [ 'sortable' => true, 'fullwidth' => true ]
	]
);



xenial_switch_field(
	'archive_show_icons_in_post_meta',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Display Icons In Post Meta', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_show_icons_in_post_meta']
	]
);



xenial_divider_field( 
	'xenial_archive_pages_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_excerpt_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt', 'xenial' )
	]
);


xenial_range_control_field(
	'archive_excerpt_length',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Length', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['archive_excerpt_length']
	]
);


xenial_text_field(
	'archive_excerpt_more',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'More Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_excerpt_more']
	]
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_read_more_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Read More Button', 'xenial' )
	]
);


xenial_switch_field(
	'archive_enable_read_more_button',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Enable Button', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_enable_read_more_button']
	]
);


xenial_text_field(
	'archive_read_more_button_title',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_read_more_button_title']
	]
);



xenial_divider_field( 
	'xenial_archive_pages_general_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);



xenial_info_field(
	'archive_pagination_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Pagination', 'xenial' )
	]
);


xenial_select_field(
	'archive_pagination_type',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Type', 'xenial' ),
		'choices' => xenial_get_pagination_layouts(),
		'default' => $xenial_customizer_defaults['archive_pagination_type']
	]
);


xenial_text_field(
	'previous_posts_link_btn_label',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Previous Button Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['previous_posts_link_btn_label']
	]
);


xenial_text_field(
	'next_posts_link_btn_label',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Next Button Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['next_posts_link_btn_label']
	]
);



xenial_range_control_field(
	'pagination_mid_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Mid Size', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['pagination_mid_size']
	]
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
		        'responsive' => true
		    ),
		) 
	) 
);