<?php 

xenial_section_link_field(
	'post_single_display_related_posts',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'section_link' => 'xenial_post_single_related_posts',
		'button_label' => esc_html__( 'Related Posts', 'xenial' ),
		'enable_switch' => true,
		'default' => xenial_get_customize_default( 'post_single_display_related_posts' )
	)
);

xenial_section_field( 
	'xenial_post_single_related_posts',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Related Posts', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_post_single_related_posts_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_post_single_related_posts_tab_1_controls', 
	        	array(
	        		'post_single_related_posts_section_title' => '',
	        		'post_single_related_posts_divider_1' => '',
	        		'post_single_related_posts_section_title_alignment' => '',
	        		'post_single_related_posts_divider_2' => '',
	        		'post_single_related_posts_elements' => '',
	        		'post_single_related_posts_divider_3' => '',
	        		'post_single_related_posts_meta' => '',
	        		'post_single_related_posts_divider_4' => '',
	        		'post_single_related_posts_number_of_cols' => '',
	        		'post_single_related_posts_divider_5' => '',
	        		'post_single_related_posts_number' => '',
	        		'post_single_related_posts_divider_6' => '',
	        		'post_single_related_posts_content_alignment' => '',
	        		'post_single_related_posts_divider_7' => '',
	        		'post_single_related_posts_by' => '',
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_related_posts_tab_2_controls', 
	        	array(	
	        		
	        	) 
	        )
		)
	)
);


xenial_text_field(
	'post_single_related_posts_section_title',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Section Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_related_posts_section_title' )
	)
);


xenial_divider_field( 
	'post_single_related_posts_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);



xenial_radio_button_group_field(
	'post_single_related_posts_section_title_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Section Title Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'post_single_related_posts_section_title_alignment' )
	),
	false
);


xenial_divider_field( 
	'post_single_related_posts_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);


xenial_sortable_checkbox_field(
	'post_single_related_posts_elements',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_filter_related_posts_content_structure',  
			array(
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'read_more' => esc_html__( 'Read More', 'xenial' ),
			)
		),
		'input_attrs' => array( 'sortable' => false, 'fullwidth' => true )
	)
);


xenial_divider_field( 
	'post_single_related_posts_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);


xenial_sortable_checkbox_field(
	'post_single_related_posts_meta',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Meta Elements', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => array( 'sortable' => true, 'fullwidth' => true )
	)
);


xenial_divider_field( 
	'post_single_related_posts_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);


xenial_range_control_field(
	'post_single_related_posts_number_of_cols',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Number of Columns', 'xenial' ),
		'responsive' => true,
		'responsive_input_attrs' => array(
			'desktop' => array(
				'min' => 1, 
				'max' => 4, 
				'step' => 1
			),
			'tablet' => array(
				'min' => 1, 
				'max' => 3, 
				'step' => 1
			),
			'mobile' => array(
				'min' => 1, 
				'max' => 2, 
				'step' => 1
			)
		),
		'default' => xenial_get_customize_default( 'post_single_related_posts_number_of_cols' )
	)
);


xenial_divider_field( 
	'post_single_related_posts_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);

xenial_range_control_field(
	'post_single_related_posts_number',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Number of Posts', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 12, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'post_single_related_posts_number' )
	)
);


xenial_divider_field( 
	'post_single_related_posts_divider_6', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);


xenial_radio_button_group_field(
	'post_single_related_posts_content_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Content Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'post_single_related_posts_content_alignment' )
	),
	false
);


xenial_divider_field( 
	'post_single_related_posts_divider_7', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts', 
	) 
);

xenial_radio_button_group_field(
	'post_single_related_posts_by',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_related_posts',
		'label' => esc_html__( 'Related Posts By', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'categories' => esc_html__( 'Categories', 'xenial' ),
			'tag' => esc_html__( 'Tags', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'post_single_related_posts_by' )
	),
	false
);