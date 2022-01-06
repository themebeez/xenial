<?php 
xenial_section_field( 
	'xenial_header_secondary_menu',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Secondary Menu', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_header_secondary_menu_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_secondary_menu_tab_1_controls', 
	        	array(
	        		'header_secondary_menu' => '',
	        		'header_secondary_menu_general_divider_1' => '',
	        		'header_secondary_menu_visibility' => '',
	        		'header_secondary_menu_general_divider_2' => '',
	        		'header_secondary_menu_alignment' => '',
	        		'header_secondary_menu_general_divider_3' => '',
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_secondary_menu_tab_2_controls', 
	        	array(
	        		'header_secondary_menu_items_spacing' => '',
	        		'header_secondary_menu_styles_divider_1' => '',

	        		'header_secondary_menu_typography' => '',
		            'header_secondary_menu_font_size' => '',
		            'header_secondary_menu_line_height' => '',
		            'header_secondary_menu_font_weight' => '',
		            'header_secondary_menu_font_style' => '',
		            'header_secondary_menu_text_transform' => '',
		            'header_secondary_menu_styles_divider_2' => '',

		            'header_secondary_menu_link_color' => '',
	        	) 
	        )
		)
	)
);


xenial_select_field(
	'header_secondary_menu',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Secondary Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => xenial_get_customize_default( 'header_secondary_menu' )
	)
);


xenial_divider_field( 
	'header_secondary_menu_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu', 
	) 
);


xenial_button_checkbox_field(
	'header_secondary_menu_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_secondary_menu_visibility' )
	)
);


xenial_divider_field( 
	'header_secondary_menu_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu', 
	) 
);


xenial_radio_button_group_field(
	'header_secondary_menu_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'header_secondary_menu_alignment' )
	),
	true
);

xenial_divider_field( 
	'header_secondary_menu_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu', 
	) 
);



xenial_range_control_field(
	'header_secondary_menu_items_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_secondary_menu_items_spacing' )
	)
);


xenial_divider_field( 
	'header_secondary_menu_styles_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu', 
	) 
);


xenial_info_field(
	'header_secondary_menu_typography',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'header_secondary_menu_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_secondary_menu_font_size' )
	)
);

xenial_range_control_field(
	'header_secondary_menu_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_secondary_menu_line_height' )
	)
);


xenial_select_field(
	'header_secondary_menu_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'header_secondary_menu_font_weight' )
	)
);


xenial_radio_button_group_field(
	'header_secondary_menu_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'header_secondary_menu_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'header_secondary_menu_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'header_secondary_menu_text_transform' )
	),
	false
);


xenial_divider_field( 
	'header_secondary_menu_styles_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu', 
	) 
);


xenial_color_picker_field(
	'header_secondary_menu_link_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_secondary_menu',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'header_secondary_menu_link_color' )
	)
);