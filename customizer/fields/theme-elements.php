<?php 

xenial_section_field( 
	'xenial_theme_elements',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Theme Elements', 'xenial' )
	)
);


xenial_switch_field(
	'disable_theme_header',
	array(
		'priority' => 10,
		'section' => 'xenial_theme_elements',
		'label' => esc_html__( 'Disable Theme Header', 'xenial' ),
		'default' => xenial_get_customize_default( 'disable_theme_header' )
	)
);


xenial_divider_field( 
	'theme_elements_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_theme_elements', 
	) 
);


xenial_switch_field(
	'disable_theme_footer',
	array(
		'priority' => 10,
		'section' => 'xenial_theme_elements',
		'label' => esc_html__( 'Disable Theme Footer', 'xenial' ),
		'default' => xenial_get_customize_default( 'disable_theme_footer' )
	)
);

xenial_divider_field( 
	'theme_elements_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_theme_elements', 
	) 
);


xenial_box_border_field(
	'box_border_test_setting',
	array(
		'section' => 'xenial_theme_elements',
		'label' => 'Border Control',
		'is_responsive' => true,
		'allowed_fields' => array(
			// For responsive controls
			'desktop' => array(
				'border_widths' => array( 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left', 'initial', 'hover' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
			)
			// 'border_widths' => array( 'top', 'bottom' ),
			// 'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			// 'border_colors' => array( 'initial' )
		),
		'default' => '{"expanded":true,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":false},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":false},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":false},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":false},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":false},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":false},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":""}}}'
		// 'default' => '{"expanded":true,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":false},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":false},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":""}}'
	)
);