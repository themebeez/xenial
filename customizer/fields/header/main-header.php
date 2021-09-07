<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_main_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Main Header', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'main_header_layout', 
	array(
		'sanitize_callback'		=> 'xenial_sanitize_select',
		'default'				=> $xenial_customizer_defaults['main_header_layout'],
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Radio_Image_Control( 
		$wp_customize, 
		'main_header_layout', 
		array( 
			'label' => esc_html__( 'Header Layout', 'xenial' ),
			'type'	=> 'select',
			'choices' => xenial_get_header_layouts(),
			'section' => 'xenial_main_header',
		)
	) 
);





$wp_customize->add_setting( 
	'main_header_width',
	array(
		'default' => $xenial_customizer_defaults['main_header_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_width',
		array(
			'label' => esc_html__( 'Width', 'xenial' ),
			'section' => 'xenial_main_header',
			'choices' => xenial_get_container_widths(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'main_header_info_1',
		array(
			'label' => esc_html__( 'Header AD', 'xenial' ),
			'section' => 'xenial_main_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_main_header_one_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_enable_header_ad', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['main_header_enable_header_ad'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_enable_header_ad', 
		array(
			'label' => esc_html__( 'Enable Header AD', 'xenial' ),
			'section' => 'xenial_main_header',
			'type' => 'ios',
			'active_callback' => 'xenial_is_main_header_one_enabled'
		) 
	) 
);





$wp_customize->add_setting( 
	'main_header_ad_notice',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Simple_Notice_Control( 
		$wp_customize, 
		'main_header_ad_notice',
		array(
			'label' => esc_html__( 'AD Info', 'xenial' ),
			'description' => esc_html__('Go to <strong><i>Appearance > Widgets </strong></i> and add a widget inside <strong><i>Header AD </strong></i> widget area.', 'xenial' ),
			'section' => 'xenial_main_header',
			'active_callback' => 'xenial_is_ad_element_enabled_on_main_header'
		)
	) 
);





$wp_customize->add_setting( 
	'main_header_ad_visibility',
	array(
		'default' => $xenial_customizer_defaults['main_header_ad_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_ad_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_main_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_ad_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'main_header_info_2',
		array(
			'label' => esc_html__( 'Header Elements', 'xenial' ),
			'section' => 'xenial_main_header',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'main_header_enable_header_elements', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['main_header_enable_header_elements'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_enable_header_elements', 
		array(
			'label' => esc_html__( 'Enable Header Elements', 'xenial' ),
			'section' => 'xenial_main_header',
			'type' => 'ios',
		) 
	) 
);




$wp_customize->add_setting(
	'main_header_elements',
	array(
		'default'           => $xenial_customizer_defaults['main_header_elements'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'main_header_elements',
		array(
			'label'   => esc_html__( 'Elements', 'xenial' ),
			'section' => 'xenial_main_header',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => xenial_get_main_header_elements(),
			'priority' => 10,
			'active_callback' => 'xenial_is_main_header_elements_section_enabled'
		)
	)
);




$wp_customize->add_setting( 
	'main_header_elements_separator',
	array(
		'default' => $xenial_customizer_defaults['main_header_elements_separator'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_elements_separator',
		array(
			'label' => esc_html__( 'Elements Separator', 'xenial' ),
			'section' => 'xenial_main_header',
			'choices' => xenial_get_main_header_elements_separators(),
			'priority' => 10,
			'active_callback' => 'xenial_is_main_header_elements_section_enabled'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'main_header_info_3',
		array(
			'label' => esc_html__( 'Element - Search', 'xenial' ),
			'section' => 'xenial_main_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_search_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_search_visibility',
	array(
		'default' => $xenial_customizer_defaults['main_header_search_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_search_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_main_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_search_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'main_header_info_4',
		array(
			'label' => esc_html__( 'Element - Button', 'xenial' ),
			'section' => 'xenial_main_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_button_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_button_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['main_header_button_text'],
	) 
);

$wp_customize->add_control( 
	'main_header_button_text', 
	array(
		'label' => esc_html__( 'Title', 'xenial' ),
		'section' => 'xenial_main_header',
		'type' => 'text',
		'active_callback' => 'xenial_is_button_element_enabled_on_main_header'
	) 
);




$wp_customize->add_setting( 
	'main_header_button_link', 
	array(
		'sanitize_callback' => 'esc_url_raw',
		'default' => $xenial_customizer_defaults['main_header_button_link'],
	) 
);

$wp_customize->add_control( 
	'main_header_button_link', 
	array(
		'label' => esc_html__( 'Link', 'xenial' ),
		'section' => 'xenial_main_header',
		'type' => 'url',
		'active_callback' => 'xenial_is_button_element_enabled_on_main_header'
	) 
);





$wp_customize->add_setting( 
	'main_header_button_link_in_new_tab', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['main_header_button_link_in_new_tab'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_button_link_in_new_tab', 
		array(
			'label' => esc_html__( 'Open In A New Tab', 'xenial' ),
			'section' => 'xenial_main_header',
			'type' => 'ios',
			'active_callback' => 'xenial_is_button_element_enabled_on_main_header'
		) 
	) 
);



$wp_customize->add_setting( 
	'main_header_button_visibility',
	array(
		'default' => $xenial_customizer_defaults['main_header_button_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_button_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_main_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_button_element_enabled_on_main_header'
		)
	)
);


if ( class_exists( 'WooCommerce' ) ) {

	$wp_customize->add_setting(
		'main_header_info_5',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);

	$wp_customize->add_control(
		new Xenial_Customize_Info_Control(
			$wp_customize,
			'main_header_info_5',
			array(
				'label' => esc_html__( 'Element - Cart', 'xenial' ),
				'section' => 'xenial_main_header',
				'priority' => 10,
				'active_callback' => 'xenial_is_cart_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_display_cart_items_no', 
		array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => $xenial_customizer_defaults['main_header_display_cart_items_no'],
		) 
	);

	$wp_customize->add_control( 
		new Xenial_Customize_Toggle_Switch_Control( 
			$wp_customize,
			'main_header_display_cart_items_no', 
			array(
				'label' => esc_html__( 'Display Cart Items Number', 'xenial' ),
				'section' => 'xenial_main_header',
				'type' => 'ios',
				'active_callback' => 'xenial_is_cart_element_enabled_on_main_header'
			) 
		) 
	);

	

	$wp_customize->add_setting( 
		'main_header_cart_visibility',
		array(
			'default' => $xenial_customizer_defaults['main_header_cart_visibility'],
			'sanitize_callback' => 'xenial_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Xenial_Customize_SlimSelect_Control( 
			$wp_customize,
			'main_header_cart_visibility',
			array(
				'label' => esc_html__( 'Device Visibility', 'xenial' ),
				'section' => 'xenial_main_header',
				'choices' => xenial_get_device_visibility(),
				'priority' => 10,
				'active_callback' => 'xenial_is_cart_element_enabled_on_main_header'
			)
		)
	);
}


if ( class_exists( 'WooCommerce' ) && ( class_exists( 'Addonify_Wishlist' ) || defined( 'YITH_WCWL' ) ) ) {

	$wp_customize->add_setting(
		'main_header_info_6',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);

	$wp_customize->add_control(
		new Xenial_Customize_Info_Control(
			$wp_customize,
			'main_header_info_6',
			array(
				'label' => esc_html__( 'Element - Wishlist', 'xenial' ),
				'section' => 'xenial_main_header',
				'priority' => 10,
				'active_callback' => 'xenial_is_wishlist_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_display_wishlist_items_no', 
		array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => $xenial_customizer_defaults['main_header_display_wishlist_items_no'],
		) 
	);

	$wp_customize->add_control( 
		new Xenial_Customize_Toggle_Switch_Control( 
			$wp_customize,
			'main_header_display_wishlist_items_no', 
			array(
				'label' => esc_html__( 'Display Wishlist Items Number', 'xenial' ),
				'section' => 'xenial_main_header',
				'type' => 'ios',
				'active_callback' => 'xenial_is_wishlist_element_enabled_on_main_header'
			) 
		) 
	);

	

	$wp_customize->add_setting( 
		'main_header_wishlist_visibility',
		array(
			'default' => $xenial_customizer_defaults['main_header_wishlist_visibility'],
			'sanitize_callback' => 'xenial_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Xenial_Customize_SlimSelect_Control( 
			$wp_customize,
			'main_header_wishlist_visibility',
			array(
				'label' => esc_html__( 'Device Visibility', 'xenial' ),
				'section' => 'xenial_main_header',
				'choices' => xenial_get_device_visibility(),
				'priority' => 10,
				'active_callback' => 'xenial_is_wishlist_element_enabled_on_main_header'
			)
		)
	);
}