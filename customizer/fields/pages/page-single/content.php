<?php 
xenial_controls_wrapper_field(
	'page_single_content_general',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Post Content', 'xenial' ),
		'class' => esc_attr( 'page-single-content-general' ),
		'controls_to_wrap' => 4,
	),
	false
);


xenial_radio_button_group_field(
	'page_single_content_width',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Container Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'page_single_content_width' )
	),
	false
);

xenial_divider_field( 
	'page_single_content_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);


xenial_sortable_checkbox_field(
	'page_single_content_elements',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_filter_page_single_content_structure',  
			array(
				'image' => esc_html__( 'Featured Image', 'xenial' ),	
			)
		),
		'input_attrs' => array( 'sortable' => false, 'fullwidth' => true )
	)
);

xenial_divider_field( 
	'page_single_content_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);