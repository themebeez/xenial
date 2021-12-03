<?php 


xenial_section_field( 
	'xenial_footer_menu',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'Footer Menu', 'xenial' )
	)
);


xenial_select_field(
	'footer_menu',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Select Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => xenial_get_customize_default( 'footer_menu' )
	)
);




xenial_radio_button_group_field(
	'footer_menu_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'footer_menu_alignment' )
	),
	true
);


xenial_button_checkbox_field(
	'footer_menu_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'footer_menu_visibility' )
	)
);


xenial_select_field(
	'footer_menu_display',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Display Style', 'xenial' ),
		'choices' => array(
			'horizontal'	=> esc_html__( 'Horizontal', 'xenial' ),
			'vertical'		=> esc_html__( 'Vertical', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'footer_menu_display' )
	)
);


xenial_range_control_field(
	'footer_menu_items_spacing',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_menu_items_spacing' )
	)
);


xenial_info_field(
	'footer_menu_typography',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'footer_menu_font_size',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_menu_font_size')
	)
);

xenial_range_control_field(
	'footer_menu_line_height',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array( 
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_menu_line_height' )
	)
);


xenial_select_field(
	'footer_menu_font_weight',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'footer_menu_font_weight' )
	)
);


xenial_radio_button_group_field(
	'footer_menu_font_style',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array( 
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'footer_menu_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'footer_menu_text_transform',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array( 
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'footer_menu_text_transform' )
	),
	false
);



xenial_info_field(
	'footer_menu_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Colors', 'xenial' )
	)
);


xenial_color_field(
	'footer_menu_link_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_menu_link_color' )
	),
	false
);



xenial_color_field(
	'footer_menu_link_hover_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_menu',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_menu_link_hover_color' )
	),
	false
);