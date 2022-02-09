<?php
xenial_controls_wrapper_field(
	'page_single_header',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Page Header', 'xenial' ),
		'class' => esc_attr( 'page-single-header' ),
		'controls_to_wrap' => 4,
	),
	false
);

xenial_radio_button_group_field(
	'page_single_header_width',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'page_single_header_width' )
	),
	false
);


xenial_divider_field( 
	'page_single_header_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);


xenial_select_field(
	'page_single_title_tag',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Heading Tag', 'xenial' ),
		'choices' => xenial_get_heading_tags(),
		'default' => xenial_get_customize_default( 'page_single_title_tag' )
	)
);


xenial_divider_field( 
	'page_single_header_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);

xenial_switch_field(
	'page_single_display_breadcrumbs',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Display Breadcrumbs', 'xenial' ),
		'default' => xenial_get_customize_default( 'page_single_display_breadcrumbs' )
	)
);



xenial_controls_wrapper_field(
	'page_single_header_styles',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Page Header', 'xenial' ),
		'class' => esc_attr( 'archive-page-header-styles' ),
		'controls_to_wrap' => 4,
	),
	false
);

xenial_color_picker_field(
	'page_single_header_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'page_single_header_background_color' )
	)
);


xenial_divider_field( 
	'page_single_header_styles_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);


xenial_info_field(
	'page_single_header_title_typography',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Title Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'page_single_title_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'page_single_title_font_size' )
	)
);

xenial_range_control_field(
	'page_single_title_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01,
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'page_single_title_line_height' )
	)
);


xenial_range_control_field(
	'page_single_title_letter_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 0.01, 
		),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'page_single_title_letter_spacing' )
	)
);


xenial_select_field(
	'page_single_title_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'page_single_title_font_weight' )
	)
);


xenial_radio_button_group_field(
	'page_single_title_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'page_single_title_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'page_single_title_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'page_single_title_text_transform' )
	),
	false
);



xenial_info_field(
	'page_single_header_title_color_header',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Title Color', 'xenial' )
	)
);


xenial_color_picker_field(
	'page_single_header_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Header Page Title Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'page_single_header_title_color' )
	)
);

xenial_divider_field( 
	'page_single_header_styles_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	) 
);


xenial_info_field(
	'page_single_header_breadcrumb_styles',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' )
	)
);


xenial_color_picker_field(
	'page_single_header_breadcrumb_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Breadcrumbs Font Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'page_single_header_breadcrumb_text_color' )
	)
);