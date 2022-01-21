<?php 

xenial_controls_wrapper_field(
	'post_single_content_general',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Post Content', 'xenial' ),
		'class' => esc_attr( 'post-single-content-general' ),
		'controls_to_wrap' => 4,
	),
	false
);


xenial_radio_button_group_field(
	'post_single_content_width',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Container Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'post_single_content_width' )
	),
	false
);

xenial_divider_field( 
	'post_single_content_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);


xenial_sortable_checkbox_field(
	'post_single_content_elements',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_filter_post_single_content_structure',  
			array(
				'categories' => esc_html__( 'Categories', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),			
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
				'content' => esc_html__( 'Content', 'xenial' ),
				'tags' => esc_html__( 'Tags', 'xenial' ),
				'updated_date' => esc_html__( 'Post Updated Date', 'xenial' )
			)
		),
		'input_attrs' => array( 'sortable' => false, 'fullwidth' => true )
	)
);

xenial_divider_field( 
	'post_single_content_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);


xenial_sortable_checkbox_field(
	'post_single_meta_elements',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Meta Elements', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => array( 'sortable' => true, 'fullwidth' => true )
	)
);

xenial_divider_field( 
	'post_single_content_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);


xenial_switch_field(
	'post_single_show_icons_in_post_meta',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Avatars And Icons', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_show_icons_in_post_meta' )
	)
);

xenial_divider_field( 
	'post_single_content_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);