<?php 

xenial_section_field( 
	'xenial_header_primary_menu',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Primary Menu', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_header_primary_menu_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_primary_menu_tab_1_controls', 
	        	array(
	        		'primary_menu' => '',
	        		'primary_menu_general_divider_1' => '',
	        		'primary_desktop_top_level_menu_item_spacing' => '',
	        		'primary_menu_general_divider_2' => '',
	        		'primary_desktop_top_level_menu_item_stretch' => '',
	        		'primary_menu_dropdown_general_fields_title' => '',
	        		'primary_desktop_menu_dropdown_general_section_link' => ''	        		
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_primary_menu_tab_2_controls', 
	        	array(	
	        		'primary_menu_top_level_items_padding' => '',
	        		'primary_menu_top_level_divider_1' => '',

	        		'primary_menu_top_level_items_font_size' => '',
		            'primary_menu_top_level_items_font_weight' => '',
		            'primary_menu_top_level_items_line_height' => '',
		            'primary_menu_top_level_items_font_style' => '',
		            'primary_menu_top_level_items_text_transform' => '',
		            'primary_menu_top_level_divider_2' => '',

		            'primary_menu_top_level_items_border' => '',
		            'primary_menu_top_level_divider_3' => '',

		            'primary_menu_top_level_items_color' => '',
		            'primary_menu_top_level_divider_4' => '',
		            'primary_menu_top_level_items_background_color' => '',
		            'primary_menu_dropdown_styles_fields_title' => '',
		            'primary_desktop_menu_dropdown_styles_section_link' => ''
	        	) 
	        )
		)
	)
);

xenial_select_field(
	'primary_menu',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Primary Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => xenial_get_customize_default( 'primary_menu' )
	)
);

xenial_divider_field( 
	'primary_menu_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);

xenial_range_control_field(
	'primary_desktop_top_level_menu_item_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false ),
		'default' => xenial_get_customize_default( 'primary_desktop_top_level_menu_item_spacing' )
	)
);

xenial_divider_field( 
	'primary_menu_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);

xenial_switch_field(
	'primary_desktop_top_level_menu_item_stretch',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Stretch Menu', 'xenial' ),
		'default' => xenial_get_customize_default( 'primary_desktop_top_level_menu_item_stretch' )
	)
);


xenial_controls_wrapper_field(
	'primary_menu_dropdown_general_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Options', 'xenial' )
	),
	false
);

xenial_section_link_field(
	'primary_desktop_menu_dropdown_general_section_link',
	array(
		'section' => 'xenial_header_primary_menu',
		'section_link' => 'xenial_header_primary_menu_dropdown',
		'button_label' => esc_html__( 'Dropdown Options', 'xenial' ) 
	)
);





xenial_box_dimension_field(
	'primary_menu_top_level_items_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Items Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'primary_menu_top_level_items_padding' )
	),
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);


xenial_range_control_field(
	'primary_menu_top_level_items_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_font_size' )
	)
);

xenial_range_control_field(
	'primary_menu_top_level_items_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_line_height' )
	)
);


xenial_select_field(
	'primary_menu_top_level_items_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_font_weight' )
	)
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => xenial_get_font_styles(),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => xenial_get_text_transforms(),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_text_transform' )
	),
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);

xenial_box_border_field(
	'primary_menu_top_level_items_border',
	array(
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Menu Item Border', 'xenial' ),
		'is_responsive' => false,
		'allowed_fields' => array(
			'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
			'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			'border_colors' => array( 'initial', 'hover', 'active' )
		),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_border' )
	)
);


xenial_divider_field( 
	'primary_menu_top_level_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);

xenial_color_picker_field(
	'primary_menu_top_level_items_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Menu Item Font Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'primary_menu_top_level_items_color' ),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_color' )
	)
);

xenial_divider_field( 
	'primary_menu_top_level_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	) 
);

xenial_color_picker_field(
	'primary_menu_top_level_items_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Menu Item Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'primary_menu_top_level_items_background_color' ),
		'default' => xenial_get_customize_default( 'primary_menu_top_level_items_background_color' )
	)
);



xenial_controls_wrapper_field(
	'primary_menu_dropdown_styles_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Options', 'xenial' )
	),
	false
);

xenial_section_link_field(
	'primary_desktop_menu_dropdown_styles_section_link',
	array(
		'section' => 'xenial_header_primary_menu',
		'section_link' => 'xenial_header_primary_menu_dropdown',
		'button_label' => esc_html__( 'Dropdown Options', 'xenial' ) 
	)
);