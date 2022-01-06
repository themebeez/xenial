<?php 
xenial_controls_wrapper_field(
	'archive_pagination',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Pagination', 'xenial' ),
		'class' => esc_attr( 'archive-pagination' ),
		'controls_to_wrap' => 3,
	),
	false
);


xenial_select_field(
	'archive_pagination_type',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Type', 'xenial' ),
		'choices' => xenial_get_pagination_layouts(),
		'default' => xenial_get_customize_default( 'archive_pagination_type' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_text_field(
	'previous_posts_link_btn_label',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Previous Nav Link Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'previous_posts_link_btn_label' )
	)
);


xenial_text_field(
	'next_posts_link_btn_label',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Next Nav Link Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'next_posts_link_btn_label' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_range_control_field(
	'pagination_mid_size',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Mid Size', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'pagination_mid_size' )
	)
);




xenial_controls_wrapper_field(
	'archive_page_header_pagination_styles',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Pagination', 'xenial' ),
		'class' => esc_attr( 'archive-pagination-styles' ),
		'controls_to_wrap' => 4,
	),
	false
);



xenial_range_control_field(
	'archive_pagination_top_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Top Spacing (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_pagination_top_spacing' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_range_control_field(
	'archive_pagination_items_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_pagination_items_spacing' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_box_dimension_field(
	'archive_pagination_items_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Items Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_pagination_items_padding' )
	),
	true
);


xenial_divider_field( 
	'archive_pagination_general_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_range_control_field(
	'archive_pagination_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default('archive_pagination_font_size' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_6', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_pagination_border_heading',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border', 'xenial' )
	)
);

xenial_box_border_field(
	'archive_pagination_item_border',
	array(
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Item Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover', 'active' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover', 'active' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover', 'active' )
			)
		),
		'default' => xenial_get_customize_default( 'archive_pagination_item_border' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_7', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_color_picker_field(
	'archive_pagination_item_font_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Item Font Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'archive_pagination_item_font_color' )
	)
);

xenial_divider_field( 
	'archive_pagination_general_divider_8', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_color_picker_field(
	'archive_pagination_item_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Item Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'archive_pagination_item_background_color' )
	)
);


xenial_divider_field( 
	'archive_pagination_general_divider_9', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);