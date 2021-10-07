<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_post_single',
	[
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Post Single', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_post_single_tab',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_post_single_tab_1_controls', 
	        	[
	        		'post_single_breadcrumbs_general' => '',
	        		'post_single_display_breadcrumbs' => '',
	        		'post_single_breadcrumbs_divider_1' => '',
            		'post_single_breadcrumbs_width' => '',
            		'post_single_breadcrumbs_divider_2' => '',

            		'post_single_content_general' => '',
            		'post_single_content_width' => '',
            		'post_single_content_divider_1' => '',
		            'post_single_content_elements' => '',
		            'post_single_content_divider_2' => '',
		            'post_single_meta_elements' => '',
		            'post_single_content_divider_3' => '',
		            'post_single_show_icons_in_post_meta' => '',

            		'post_single_author_box_general' => '',
            		'post_single_display_author_box' => '',

            		'post_single_posts_navigation_general' => '',
            		'post_single_display_posts_navigation' => '',
            		'post_single_posts_navigation_divider_1' => '',
            		'post_single_display_post_image_in_post_navigation' => '',
            		'post_single_posts_navigation_divider_2' => '',
		            'post_single_prev_post_link_title_label' => '',		            
		            'post_single_next_post_link_title_label' => '', 
		            'post_single_posts_navigation_divider_3' => '',		             
		            'post_single_posts_navigation_divider_4' => '',

		            'post_single_comments_general' => '',
		            'post_single_display_comments' => '',
		            'post_single_comments_divider_1' => '',
		            'post_single_comments_toggle_heading' => '',
		            'post_single_show_toggle_comments_btn' => '',
		            'post_single_comment_toggle_btn_title' => '',
		            'post_single_comment_toggled_state_toggle_btn_title' => '',

		            'post_single_related_posts_general' => '',
		            'post_single_display_related_posts' => '',
		            'post_single_related_posts_divider_1' => '',
		            'post_single_related_posts_section_title' => '',
		            'post_single_related_posts_divider_2' => '',
		            'post_single_related_posts_section_title_alignment' => '',
		            'post_single_related_posts_divider_3' => '',
		            'post_single_related_posts_elements' => '',
		            'post_single_related_posts_divider_4' => '',
		            'post_single_related_posts_meta' => '',
		            'post_single_related_posts_divider_5' => '',
		            'post_single_related_posts_number' => '',
		            'post_single_related_posts_divider_6' => '',
		            'post_single_related_posts_content_alignment' => '',
		            'post_single_related_posts_divider_7' => '',
		            'post_single_related_posts_by' => ''
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_tab_2_controls', 
	        	[
	        		'post_single_breadcrumbs_styles' => '',
	        		'post_single_breadcrumb_background_color' => '',
		            'post_single_breadcrumb_text_color' => '',
		            'post_single_breadcrumb_link_hover_color' => '',
	        	] 
	        )
		]
	]
);


$wp_customize->add_setting( 
	'single_content_width',
	array(
		'default' => $xenial_customizer_defaults['single_content_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'single_content_width',
		array(
			'label' => esc_html__( 'Content Width', 'xenial' ),
			'section' => 'xenial_single',
			'choices' => xenial_content_widths(),
			'priority' => 10,
		) 
	)
);





$wp_customize->add_setting( 
	'single_narrow_width', 
	array(
		'default' => $xenial_customizer_defaults['single_narrow_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'single_narrow_width', 
		array(
			'label' 			=> esc_html__( 'Narrow Width (px)', 'xenial' ),
			'section'  			=> 'xenial_single',
            'input_attrs' 		=> array(
                'min'		=> 500,
                'max' 		=> 1500,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_single_content_width_narrow_width'
		) 
	) 
);





$wp_customize->add_setting( 
	'single_title_header_alignment',
	array(
		'default' => $xenial_customizer_defaults['single_title_header_alignment'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'single_title_header_alignment',
		array(
			'label' => esc_html__( 'Title Header Alignment', 'xenial' ),
			'section' => 'xenial_single',
			'choices' => xenial_get_alignments(),
		) 
	)
);

$wp_customize->add_setting(
	'single_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'single_header_info_1',
		array(
			'label' => esc_html__( 'Post Elements', 'xenial' ),
			'section' => 'xenial_single',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'single_post_elements',
	array(
		'default'           => $xenial_customizer_defaults['single_post_elements'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'single_post_elements',
		array(
			'label'   => esc_html__( 'Post Elements', 'xenial' ),
			'section' => 'xenial_single',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => xenial_get_single_post_elements(),
			'priority' => 10,
		)
	)
);




$wp_customize->add_setting(
	'single_post_meta',
	array(
		'default'           => $xenial_customizer_defaults['single_post_meta'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'single_post_meta',
		array(
			'label'   => esc_html__( 'Post Meta', 'xenial' ),
			'section' => 'xenial_single',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => xenial_get_post_meta_structure(),
			'priority' => 10,
		)
	)
);




$wp_customize->add_setting( 
	'single_show_icons_in_post_meta', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['single_show_icons_in_post_meta'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'single_show_icons_in_post_meta', 
		array(
			'label' => esc_html__( 'Display Icons In Post Meta', 'xenial' ),
			'section' => 'xenial_single',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);




$wp_customize->add_setting( 
	'single_show_toggle_comments_btn', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['single_show_toggle_comments_btn'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'single_show_toggle_comments_btn', 
		array(
			'label' => esc_html__( 'Show Comments Toggle Button', 'xenial' ),
			'section' => 'xenial_single',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'single_comment_toggle_btn_title', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['single_comment_toggle_btn_title'],
	) 
);

$wp_customize->add_control( 
	'single_comment_toggle_btn_title', 
	array(
		'label' => esc_html__( 'Comments Toggle Button Title', 'xenial' ),
		'section' => 'xenial_single',
		'type' => 'text',
	) 
);



$wp_customize->add_setting( 
	'prev_post_link_title_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['prev_post_link_title_label'],
	) 
);

$wp_customize->add_control( 
	'prev_post_link_title_label', 
	array(
		'label' => esc_html__( 'Previous Post Link Title Label', 'xenial' ),
		'section' => 'xenial_single',
		'type' => 'text',
	) 
);



$wp_customize->add_setting( 
	'next_post_link_title_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['next_post_link_title_label'],
	) 
);

$wp_customize->add_control( 
	'next_post_link_title_label', 
	array(
		'label' => esc_html__( 'Next Post Link Title Label', 'xenial' ),
		'section' => 'xenial_single',
		'type' => 'text',
	) 
);