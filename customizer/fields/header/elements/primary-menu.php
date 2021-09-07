<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_header_primary_menu', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Primary Menu', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'xenial_header_primary_menu_tab', 
	array(
    	'sanitize_callback'        => 'wp_filter_nohtml_kses',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Tab_Control( 
		$wp_customize, 
		'xenial_header_primary_menu_tab', 
		array(
		    'section'                  => 'xenial_header_primary_menu',
		    'tabs'                     => xenial_get_tab_control_2_labels(),
		    'controls'                 => array(
		        'tab_1' => apply_filters( 
		        	'xenial_header_primary_menu_tab_1_controls', 
		        	[
		        		'primary_desktop_menu_wrapper' => [],
		        		'primary_menu_top_level_items_wrapper' => [],
		        		'primary_menu_top_level_items_hover_effect' => [],
		        		'primary_menu_top_level_items_spacing' => [],
		        		'primary_menu_dropdown_items_wrapper' => [],
		        		'primary_menu_dropdown_items_hover_effect' => [],
		        		'primary_menu_dropdown_items_divider_width' => [],
		        		'primary_menu_dropdown_width' => [],
		        		'primary_menu_dropdown_top_offset' => [],
		        		'primary_mobile_menu_wrapper' => [],
		        		'mobile_menu_breakpoint' => [],
		        		'mobile_menu_toggle_button_label' => [],
		        		'mobile_menu_items_divider_width' => [],
		        		'mobile_offcanvas_menu_position' => [],
            			'mobile_menu_enable_offcanvas_overlay' => [],
 		        	] 
		        ),
		        'tab_2' => apply_filters( 
		        	'xenial_header_primary_menu_tab_2_controls', 
		        	[
		        		'primary_desktop_menu_style_wrapper' => [],
		        		'primary_menu_top_level_items_style_wrapper' => [],
		        		'primary_menu_top_level_items_colors_wrapper' => [],
		        		'primary_menu_top_level_items_color' => [],
		        		'primary_menu_top_level_items_hover_color' => [],
		        		'primary_menu_top_level_items_active_color' => [],
		        		'primary_menu_top_level_items_background_colors_wrapper' => [],
		        		'primary_menu_top_level_items_background_color' => [],
		        		'primary_menu_top_level_items_hover_background_color' => [],
		        		'primary_menu_top_level_items_active_background_color' => [],
		        		'primary_menu_top_level_items_padding' => [],
		        		'primary_menu_top_level_items_border_wrapper' => [],
		        		'primary_menu_top_level_items_border_style' => [],
			            'primary_menu_top_level_items_border_width' => [],
			            'primary_menu_top_level_items_border_radius' => [],
			            'primary_menu_top_level_items_border_colors_wrapper' => [],
			            'primary_menu_top_level_items_border_color' => [],
			            'primary_menu_top_level_items_hover_border_color' => [],
			            'primary_menu_top_level_items_active_border_color' => [],
			            'primary_menu_dropdown_style_wrapper' => [],
			            'primary_menu_dropdown_border_width' => [],
			            'primary_menu_dropdown_border_radius' => [],
			            'primary_menu_dropdown_border_color' => [],
		        		'primary_menu_dropdown_items_divider_color' => [],            
			            'primary_menu_dropdown_font_color_wrapper' => [],
			            'primary_menu_dropdown_items_color' => [],
			            'primary_menu_dropdown_items_hover_color' => [],
			            'primary_menu_dropdown_items_active_color' => [],
			            'primary_menu_dropdown_items_background_color_wrapper' => [],
			            'primary_menu_dropdown_items_background_color' => [],
			            'primary_menu_dropdown_items_hover_background_color' => [],
			            'primary_menu_dropdown_items_active_background_color' => [],
			            'primary_menu_top_level_items_typo_wrapper' => [],
			            'primary_menu_top_level_items_font_size' => [],
			            'primary_menu_top_level_items_font_weight' => [],
			            'primary_menu_top_level_items_line_height' => [],
			            'primary_menu_dropdown_items_typo_wrapper' => [],
			            'primary_menu_top_level_items_font_style' => [],
			            'primary_menu_top_level_items_text_transform' => [],
			            'primary_menu_dropdown_items_font_size' => [],
			            'primary_menu_dropdown_items_font_weight' => [],
			            'primary_menu_dropdown_items_line_height' => [],
			            'primary_menu_dropdown_items_font_style' => [],
			            'primary_menu_dropdown_items_text_transform' => [],
			            'mobile_menu_styles_wrapper' => [],
			            'offcanvas_menu_toggle_button_styles_wrapper' => [],
			            'mobile_menu_toggle_button_label_color' => [],
			            'mobile_menu_toggle_button_hover_label_color' => [],
			            'mobile_menu_toggle_button_background_color' => [],
			            'mobile_menu_toggle_button_hover_background_color' => [],
			            'mobile_menu_toggle_button_border_radius' => [],
			            'mobile_menu_toggle_button_border_style' => [],
			            'mobile_menu_toggle_button_border_width' => [],
			            'mobile_menu_toggle_button_border_color' => [],
			            'mobile_menu_toggle_button_hover_border_color' => [],
			            'mobile_menu_toggle_button_padding' => [],	
			            'offcanvas_menu_styles_wrapper' => [],		            
			            'mobile_offcanvas_menu_background' => [],
			            'offcanvas_menu_borders_wrapper' => [],
			            'mobile_offcanvas_menu_border_width' => [],
			            'mobile_offcanvas_menu_border_radius' => [],
			            'mobile_offcanvas_menu_border_color' => [],
			            'offcanvas_menu_items_styles_wrapper' => [],
			            'offcanvas_menu_items_colors_wrapper' => [],
			            'mobile_offcanvas_menu_item_color' => [],
			            'mobile_offcanvas_menu_item_hover_color' => [],
			            'mobile_offcanvas_menu_active_item_color' => [],
			            'offcanvas_menu_items_typos_wrapper' => [],
			            'mobile_menu_items_font_size' => [],
			            'mobile_menu_items_font_weight' => [],
			            'mobile_menu_items_line_height' => [],
			            'mobile_menu_items_font_style' => [],
			            'mobile_menu_items_text_transform' => [],			            
			            'mobile_menu_offcanvas_overlay_color' => [],
			            
		        	] 
		        )
		    ),
		    'priority'                 => 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_desktop_menu_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_desktop_menu_wrapper', 
		array(
		    'label'                    => esc_html__( 'Desktop Options', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-desktop-menu' ),
		    'controls_to_wrap'         => 7,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_wrapper', 
		array(
		    'label'                    => esc_html__( 'Top Level', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items' ),
		    'controls_to_wrap'         => 2,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_hover_effect',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_effect'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_top_level_items_hover_effect',
		array(
			'label' => esc_html__( 'Items Hover Effect', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_top_level_menu_items_hover_effects(),
			'priority' => 10
		)
	)
);



$wp_customize->add_setting( 
	'primary_menu_top_level_items_spacing', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_spacing'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_spacing', 
		array(
			'label' 			=> esc_html__( 'Items Spacing (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_dropdown_items_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_wrapper', 
		array(
		    'label'                    => esc_html__( 'Dropdown', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown' ),
		    'controls_to_wrap'         => 4,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_width', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_dropdown_width', 
		array(
			'label' 			=> esc_html__( 'Dropdown Width (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 300,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_top_offset', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_top_offset'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_dropdown_top_offset', 
		array(
			'label' 			=> esc_html__( 'Dropdown Top Offset (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_hover_effect',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_hover_effect'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_dropdown_items_hover_effect',
		array(
			'label' => esc_html__( 'Items Hover Effect', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_dropdown_menu_items_hover_effects(),
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_divider_width', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_divider_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_divider_width', 
		array(
			'label' 			=> esc_html__( 'Items Divider Width (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 5,
                'step' 		=> 1,
            )
		) 
	) 
);




$wp_customize->add_setting( 
	'primary_mobile_menu_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_mobile_menu_wrapper', 
		array(
		    'label'                    => esc_html__( 'Mobile Options', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-mobile-menu' ),
		    'controls_to_wrap'         => 5,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'mobile_menu_breakpoint', 
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_breakpoint'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'mobile_menu_breakpoint', 
		array(
			'label' 			=> esc_html__( 'Offcanvas Menu Toggle Breakpoint (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 320,
                'max' 		=> 1920,
                'step' 		=> 1,
            )
		) 
	) 
);



$wp_customize->add_setting( 
	'mobile_menu_toggle_button_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_label'],
	) 
);

$wp_customize->add_control( 
	'mobile_menu_toggle_button_label', 
	array(
		'label' => esc_html__( 'Offcanvas Menu Toggle Button Label', 'xenial' ),
		'section' => 'xenial_header_primary_menu',
		'type' => 'text'
	) 
);



$wp_customize->add_setting( 
	'mobile_offcanvas_menu_position',
	array(
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'mobile_offcanvas_menu_position',
		array(
			'label' => esc_html__( 'Offcanvas Menu Position', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_offcanvas_menu_positions(),
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'mobile_menu_enable_offcanvas_overlay', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['mobile_menu_enable_offcanvas_overlay'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'mobile_menu_enable_offcanvas_overlay', 
		array(
			'label' => esc_html__( 'Display Offcanvas Background Overlay', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'type' => 'ios'
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_items_divider_width', 
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_divider_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'mobile_menu_items_divider_width', 
		array(
			'label' 			=> esc_html__( 'Menu Items Divider Width (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 5,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_desktop_menu_style_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_desktop_menu_style_wrapper', 
		array(
		    'label'                    => esc_html__( 'Desktop Options', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-desktop-menu-styles' ),
		    'controls_to_wrap'         => 43,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_top_level_items_style_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_style_wrapper', 
		array(
		    'label'                    => esc_html__( 'Top Level', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-styles' ),
		    'controls_to_wrap'         => 23,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_padding_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_padding']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_padding_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_padding']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_padding_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_padding']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_padding_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_padding']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_padding', 
		array(
			'label'	   				=> esc_html__( 'Items Padding (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'primary_menu_top_level_items_padding_top',
		        'right' 	=> 'primary_menu_top_level_items_padding_right',
		        'bottom' 	=> 'primary_menu_top_level_items_padding_bottom',
		        'left' 		=> 'primary_menu_top_level_items_padding_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_colors_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_colors_wrapper', 
		array(
		    'label'                    => esc_html__( 'Font Colors', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items-colors' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_top_level_items_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_top_level_items_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_top_level_items_active_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_active_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_background_colors_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_background_colors_wrapper', 
		array(
		    'label'                    => esc_html__( 'Background Colors', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items-background-colors' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_background_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_hover_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_hover_background_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_active_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_active_background_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_border_wrapper', 
		array(
		    'label'                    => esc_html__( 'Border Styles', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items-border' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_style',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control(
		$wp_customize, 
		'primary_menu_top_level_items_border_style',
		array(
			'label' => esc_html__( 'Style', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_border_styles()
		) 
	)
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_width_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_width']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_width_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_width']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_width_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_width']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_width_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_width']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_border_width', 
		array(
			'label'	   				=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'primary_menu_top_level_items_border_width_top',
		        'right' 	=> 'primary_menu_top_level_items_border_width_right',
		        'bottom' 	=> 'primary_menu_top_level_items_border_width_bottom',
		        'left' 		=> 'primary_menu_top_level_items_border_width_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_radius_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_radius_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_radius_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_radius_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_border_radius', 
		array(
			'label'	   				=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'primary_menu_top_level_items_border_radius_top',
		        'right' 	=> 'primary_menu_top_level_items_border_radius_right',
		        'bottom' 	=> 'primary_menu_top_level_items_border_radius_bottom',
		        'left' 		=> 'primary_menu_top_level_items_border_radius_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_colors_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_border_colors_wrapper', 
		array(
		    'label'                    => esc_html__( 'Border Colors', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items-border-colors' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_border_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_hover_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_hover_border_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_active_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_active_border_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_typo_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_typo_wrapper', 
		array(
		    'label'                    => esc_html__( 'Typography', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-top-level-items_typo' ),
		    'controls_to_wrap'         => 5,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_font_weight',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_top_level_items_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_standard_font_weights(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_font_size', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_size'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_line_height', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_line_height'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_top_level_items_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 0.1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_font_style',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_top_level_items_font_style',
		array(
			'label' => esc_html__( 'Font Style', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_font_styles(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_top_level_items_text_transform',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_text_transform'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_top_level_items_text_transform',
		array(
			'label' => esc_html__( 'Text Transform', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_text_transforms(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_style_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_dropdown_style_wrapper', 
		array(
		    'label'                    => esc_html__( 'Dropdown', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-style' ),
		    'controls_to_wrap'         => 18,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_width_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_width']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_width_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_width']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_width_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_width']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_width_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_width']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'primary_menu_dropdown_border_width', 
		array(
			'label'	   				=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'primary_menu_dropdown_border_width_top',
		        'right' 	=> 'primary_menu_dropdown_border_width_right',
		        'bottom' 	=> 'primary_menu_dropdown_border_width_bottom',
		        'left' 		=> 'primary_menu_dropdown_border_width_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_border_radius_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_radius']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_radius_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_radius']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_radius_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_radius']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'primary_menu_dropdown_border_radius_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['primary_menu_dropdown_border_radius']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'primary_menu_dropdown_border_radius', 
		array(
			'label'	   				=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'primary_menu_dropdown_border_radius_top',
		        'right' 	=> 'primary_menu_dropdown_border_radius_right',
		        'bottom' 	=> 'primary_menu_dropdown_border_radius_bottom',
		        'left' 		=> 'primary_menu_dropdown_border_radius_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_dropdown_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_divider_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_divider_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_divider_color', 
		array(
			'label'	   	=> esc_html__( 'Divider Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_font_color_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_dropdown_font_color_wrapper', 
		array(
		    'label'                    => esc_html__( 'Font Color', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-font-color' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_dropdown_items_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_dropdown_items_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'primary_menu_dropdown_items_active_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_active_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_active_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_background_color_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_background_color_wrapper', 
		array(
		    'label'                    => esc_html__( 'Background Color', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-items-background-color' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_background_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_hover_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_hover_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_hover_background_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_active_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_active_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_active_background_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_typo_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_typo_wrapper', 
		array(
		    'label'                    => esc_html__( 'Typography', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-items-typo' ),
		    'controls_to_wrap'         => 5,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_font_weight',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_dropdown_items_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_standard_font_weights(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_font_size', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_size'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_line_height', 
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_line_height'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'primary_menu_dropdown_items_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 0.1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_font_style',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_dropdown_items_font_style',
		array(
			'label' => esc_html__( 'Font Style', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_font_styles(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'primary_menu_dropdown_items_text_transform',
	array(
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_text_transform'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'primary_menu_dropdown_items_text_transform',
		array(
			'label' => esc_html__( 'Text Transform', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_text_transforms(),
			'priority' 	=> 10,
		)
	)
);




$wp_customize->add_setting( 
	'mobile_menu_styles_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'mobile_menu_styles_wrapper', 
		array(
		    'label'                    => esc_html__( 'Mobile Options', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'mobile-menu-styles' ),
		    'controls_to_wrap'         => 26,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'offcanvas_menu_toggle_button_styles_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_toggle_button_styles_wrapper', 
		array(
		    'label'                    => esc_html__( 'Offcanvas Toggle Button', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'offcanvas-menu-toggle-button-styles' ),
		    'controls_to_wrap'         => 8,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_padding_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_padding']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_padding_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_padding']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_padding_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_padding']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_padding_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_padding']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_padding', 
		array(
			'label'	   				=> esc_html__( 'Padding (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_menu_toggle_button_padding_top',
		        'right' 	=> 'mobile_menu_toggle_button_padding_right',
		        'bottom' 	=> 'mobile_menu_toggle_button_padding_bottom',
		        'left' 		=> 'mobile_menu_toggle_button_padding_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_label_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_label_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_label_color', 
		array(
			'label'	   	=> esc_html__( 'Label Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'mobile_menu_toggle_button_hover_label_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_label_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_hover_label_color', 
		array(
			'label'	   	=> esc_html__( 'On Hover Label Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_background_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_hover_background_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_background_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_hover_background_color', 
		array(
			'label'	   	=> esc_html__( 'On Hover Background Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_style',
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control(
		$wp_customize, 
		'mobile_menu_toggle_button_border_style',
		array(
			'label' => esc_html__( 'Border Style', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_border_styles()
		) 
	)
);



$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_width_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_width']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_width_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_width']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_width_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_width']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_width_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_width']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_border_width', 
		array(
			'label'	   				=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_menu_toggle_button_border_width_top',
		        'right' 	=> 'mobile_menu_toggle_button_border_width_right',
		        'bottom' 	=> 'mobile_menu_toggle_button_border_width_bottom',
		        'left' 		=> 'mobile_menu_toggle_button_border_width_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_radius_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_radius']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_radius_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_radius']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_radius_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_radius']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_radius_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_menu_toggle_button_border_radius']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_border_radius', 
		array(
			'label'	   				=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_menu_toggle_button_border_radius_top',
		        'right' 	=> 'mobile_menu_toggle_button_border_radius_right',
		        'bottom' 	=> 'mobile_menu_toggle_button_border_radius_bottom',
		        'left' 		=> 'mobile_menu_toggle_button_border_radius_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_hover_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_hover_border_color', 
		array(
			'label'	   	=> esc_html__( 'On Hover Border Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);



$wp_customize->add_setting( 
	'offcanvas_menu_styles_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_styles_wrapper', 
		array(
		    'label'                    => esc_html__( 'Offcanvas Menu', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-styles' ),
		    'controls_to_wrap'         => 17,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);

$wp_customize->add_setting( 
	'mobile_menu_offcanvas_overlay_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_offcanvas_overlay_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_offcanvas_overlay_color', 
		array(
			'label'	   	=> esc_html__( 'Background Overlay Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_padding_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_padding']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_padding_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_padding']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_padding_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_padding']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_padding_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_padding']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_padding', 
		array(
			'label'	   				=> esc_html__( 'Padding (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_offcanvas_menu_padding_top',
		        'right' 	=> 'mobile_offcanvas_menu_padding_right',
		        'bottom' 	=> 'mobile_offcanvas_menu_padding_bottom',
		        'left' 		=> 'mobile_offcanvas_menu_padding_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_offcanvas_menu_margin_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_margin']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_margin_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_margin']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_margin_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_margin']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_margin_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_margin']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_margin', 
		array(
			'label'	   				=> esc_html__( 'Margin (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_offcanvas_menu_margin_top',
		        'right' 	=> 'mobile_offcanvas_menu_margin_right',
		        'bottom' 	=> 'mobile_offcanvas_menu_margin_bottom',
		        'left' 		=> 'mobile_offcanvas_menu_margin_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_offcanvas_menu_background', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_background'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_background', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'offcanvas_menu_borders_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_borders_wrapper', 
		array(
		    'label'                    => esc_html__( 'Border Styles', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'primary-menu-dropdown-styles' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_width_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_width']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_width_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_width']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_width_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_width']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_width_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_width']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_border_width', 
		array(
			'label'	   				=> esc_html__( 'Border Width (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_offcanvas_menu_border_width_top',
		        'right' 	=> 'mobile_offcanvas_menu_border_width_right',
		        'bottom' 	=> 'mobile_offcanvas_menu_border_width_bottom',
		        'left' 		=> 'mobile_offcanvas_menu_border_width_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_radius_top', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_radius']['top'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_radius_right', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_radius']['right'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_radius_bottom', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_radius']['bottom'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'mobile_offcanvas_menu_border_radius_left', 
	array(
		'default'           	=> $xenial_customizer_defaults['mobile_offcanvas_menu_border_radius']['left'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Box_Dimension_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_border_radius', 
		array(
			'label'	   				=> esc_html__( 'Border Radius (px)', 'xenial' ),
			'section'  				=> 'xenial_header_primary_menu',				
			'settings'   => array(
		        'top' 		=> 'mobile_offcanvas_menu_border_radius_top',
		        'right' 	=> 'mobile_offcanvas_menu_border_radius_right',
		        'bottom' 	=> 'mobile_offcanvas_menu_border_radius_bottom',
		        'left' 		=> 'mobile_offcanvas_menu_border_radius_left'
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_toggle_button_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'mobile_menu_toggle_button_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10
		) 
	) 
);


$wp_customize->add_setting( 
	'offcanvas_menu_items_styles_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_items_styles_wrapper', 
		array(
		    'label'                    => esc_html__( 'Menu Items Styles', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'offcanvas-menu-items-styles' ),
		    'controls_to_wrap'         => 10,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'offcanvas_menu_items_colors_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_items_colors_wrapper', 
		array(
		    'label'                    => esc_html__( 'Font Color', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'offcanvas-menu-items-colors' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_offcanvas_menu_item_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_item_color', 
		array(
			'label'	   	=> esc_html__( 'Initial', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'mobile_offcanvas_menu_item_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_item_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Hover', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);



$wp_customize->add_setting( 
	'mobile_offcanvas_menu_active_item_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_active_item_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'mobile_offcanvas_menu_active_item_color', 
		array(
			'label'	   	=> esc_html__( 'Active', 'xenial' ),
			'section'  	=> 'xenial_header_primary_menu',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'offcanvas_menu_items_typos_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'offcanvas_menu_items_typos_wrapper', 
		array(
		    'label'                    => esc_html__( 'Typography', 'xenial' ),
		    'section'                  => 'xenial_header_primary_menu',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'offcanvas-menu-items-typos' ),
		    'controls_to_wrap'         => 5,
		    'expanded'                 => false,
		    'priority'                 => 10
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_items_font_weight',
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'mobile_menu_items_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_standard_font_weights(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'mobile_menu_items_font_size', 
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_font_size'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'mobile_menu_items_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_items_line_height', 
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_line_height'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'mobile_menu_items_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_header_primary_menu',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 0.1,
            )
		) 
	) 
);


$wp_customize->add_setting( 
	'mobile_menu_items_font_style',
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_font_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'mobile_menu_items_font_style',
		array(
			'label' => esc_html__( 'Font Style', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_font_styles(),
			'priority' 	=> 10,
		)
	)
);


$wp_customize->add_setting( 
	'mobile_menu_items_text_transform',
	array(
		'default' => $xenial_customizer_defaults['mobile_menu_items_text_transform'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'mobile_menu_items_text_transform',
		array(
			'label' => esc_html__( 'Text Transform', 'xenial' ),
			'section' => 'xenial_header_primary_menu',
			'choices' => xenial_get_text_transforms(),
			'priority' 	=> 10,
		)
	)
);