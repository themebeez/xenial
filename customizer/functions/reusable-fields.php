<?php 


if ( ! function_exists( 'xenial_panel_field' ) ) {

	function xenial_panel_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_panel(
			$id,
			[
				'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
				'title' => $args['title'],
				'description' => isset( $args['description'] ) ? $args['description'] : '',
				'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
			]
		);
	}
}


if ( ! function_exists( 'xenial_section_field' ) ) {

	function xenial_section_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_section(
			$id,
			[
				'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
				'panel' => isset( $args['panel'] ) ? $args['panel'] : '',
				'title' => isset( $args['title'] ) ? $args['title'] : '',
				'description' => isset( $args['description'] ) ? $args['description'] : '',
				'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
			]
		);
	}
}



if ( ! function_exists( 'xenial_color_field' ) ) {

	function xenial_color_field( $id, $args, $alpha = false ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => ( $alpha == false ) ? 'sanitize_hex_color' : ''
			]
		);

		if ( $alpha == false ) {
			$wp_customize->add_control( 
				new WP_Customize_Color_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
					]
				) 
			);
		} else {
			$wp_customize->add_control( 
				new Xenial_Customize_Alpha_Color_Picker_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
					] 
				) 
			);
		}
	}
}


if ( ! function_exists( 'xenial_text_field' ) ) {

	function xenial_text_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'sanitize_text_field'
			]
		);

		$wp_customize->add_control(
			$id,
			[
				'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
				'section' => isset( $args['section'] ) ? $args['section'] : '',
				'label' => isset( $args['label'] ) ? $args['label'] : '',
				'description' => isset( $args['description'] ) ? $args['description'] : '',
				'type' => 'text',
				'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
			]
		);
	}
}



if ( ! function_exists( 'xenial_url_field' ) ) {

	function xenial_url_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'esc_url_raw'
			]
		);

		$wp_customize->add_control(
			$id,
			[
				'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
				'section' => isset( $args['section'] ) ? $args['section'] : '',
				'label' => isset( $args['label'] ) ? $args['label'] : '',
				'description' => isset( $args['description'] ) ? $args['description'] : '',
				'type' => 'url',
				'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
			]
		);
	}
}



if ( ! function_exists( 'xenial_switch_field' ) ) {

	function xenial_switch_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'wp_validate_boolean'
			]
		);

		$wp_customize->add_control( 
			new Xenial_Customize_Toggle_Switch_Control( 
				$wp_customize,
				$id, 
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'type' => 'ios',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				] 
			) 
		);
	}
}


if ( ! function_exists( 'xenial_select_field' ) ) {

	function xenial_select_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'xenial_sanitize_select'
			]
		);

		$wp_customize->add_control( 
			new Xenial_Customize_SlimSelect_Control(
				$wp_customize, 
				$id,
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'choices' => isset( $args['choices'] ) ? $args['choices'] : [],
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			)
		);

	}
}


if ( ! function_exists( 'xenial_box_dimension_field' ) ) {

	function xenial_box_dimension_field( $id, $args, $responsive = false ) {

		global $wp_customize;

		$settings = [];

		if ( $responsive == false ) {

			$dimensions = [ 'top', 'right', 'bottom', 'left' ];

			foreach( $dimensions as $dimension  ) {	

				$settings[$dimension] = $id . '_' . $dimension;
			}
			
		} else {
			$dimensions = [ 'desktop_top', 'desktop_right', 'desktop_bottom', 'desktop_left', 'tablet_top', 'tablet_right', 'tablet_bottom', 'tablet_left', 'mobile_top', 'mobile_right', 'mobile_bottom', 'mobile_left' ];

			foreach( $dimensions as $dimension  ) {	

				$settings[$dimension] = $id . '_' . $dimension;
			}
		}

		if ( $settings ) {

			foreach ( $settings as $index => $setting ) {
				$wp_customize->add_setting(
					$setting,
					[
						'default' => isset( $args['defaults'][$index] ) ? $args['defaults'][$index] : '',
						'sanitize_callback' => isset( $args['sanitize_callback'] ) ? $args['sanitize_callback'] : ''
					]
				);
			}

			$wp_customize->add_control( 
				new Xenial_Customize_Dimensions_Control( 
					$wp_customize, 
					$id, 
					[
						'settings' => $settings,
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
					] 
				) 
			);
		}

	}
}


if ( ! function_exists( 'xenial_tab_field' ) ) {

	function xenial_tab_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id, 
			[
		    	'sanitize_callback' => null,
			] 
		);

		$wp_customize->add_control( 
			new Xenial_Customize_Tab_Control( 
				$wp_customize, 
				$id, 
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
				    'tabs'=> isset( $args['tabs'] ) ? $args['tabs'] : [],
				    'controls' => isset( $args['controls'] ) ? $args['controls'] : []
				]
			) 
		);
	}
}


if ( ! function_exists( 'xenial_controls_wrapper_field' ) ) {

	function xenial_controls_wrapper_field( $id, $args, $expandable = false ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => false,
				'sanitize_callback' => 'wp_validate_boolean'
			]
		);

		if ( $expandable == false ) {
			$wp_customize->add_control( 
				new Xenial_Customize_Wrapper_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'type' => 'xenial-wrapper',
						'class' => isset( $args['class'] ) ? $args['class'] : '',
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : '',
					    'accordion' => false
					] 
				) 
			);
		} else {
			$wp_customize->add_control( 
				new Xenial_Customize_Wrapper_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'type' => 'xenial-wrapper',
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : '',
					    'accordion' => true,
					    'class' => isset( $args['class'] ) ? $args['class'] : '',
					    'controls_to_wrap' => isset( $args['controls_to_wrap'] ) ? $args['controls_to_wrap'] : 0,
					    'expanded' => ( isset( $args['expanded'] ) && $args['expanded'] == true ) ? true : false
					] 
				) 
			);
		}
	}
}


if ( ! function_exists( 'xenial_sortable_checkbox_field' ) ) {

	function xenial_sortable_checkbox_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting(
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
			]
		);

		$wp_customize->add_control(
			new Xenial_Customize_Sortable_Checkbox_Control(
				$wp_customize,
				$id,
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'choices' => isset( $args['choices'] ) ? $args['choices'] : [],
					'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : ['sortable' => true, 'fullwidth' => true],
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			)
		);

	}
}


if ( ! function_exists( 'xenial_google_font_field' ) ) {

	function xenial_google_font_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id,
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => ''
			]
		);

		$wp_customize->add_control( 
			new Xenial_Customize_Google_Font_Selector_Control( 
				$wp_customize, 
				$id,
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : ['font_count' => 'all', 'orderby' => 'alpha'],
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			) 
		);

	}
}


if ( ! function_exists( 'xenial_range_control_field' ) ) {

	function xenial_range_control_field( $id, $args ) {

		global $wp_customize;

		$default_input_attrs = [
			'min' => 0,
			'max' => 1000,
			'step' => 1,
			'responsive' => false
		];

		if ( isset( $args['input_attrs']['responsive'] ) && $args['input_attrs']['responsive'] == true ) {
			
			$settings = [];

			$devices = [ 'desktop', 'tablet', 'mobile' ];

			foreach ( $devices as $device ) {
				$settings[$device] = $id . '_' . $device;
			}

			if ( $settings ) {

				foreach ( $settings as $device => $setting ) {
					$wp_customize->add_setting(
						$setting,
						[
							'default' => isset( $args['defaults'][$device] ) ? $args['defaults'][$device] : '',
							'sanitize_callback' => isset( $args['sanitize_callback'] ) ? $args['sanitize_callback'] : ''
						]
					);
				}

				$wp_customize->add_control( 
					new Xenial_Customize_Slider_Control( 
						$wp_customize, 
						$id, 
						[
							'settings' => $settings,
							'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
							'section' => isset( $args['section'] ) ? $args['section'] : '',
							'label' => isset( $args['label'] ) ? $args['label'] : '',
							'description' => isset( $args['description'] ) ? $args['description'] : '',
							'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : $default_input_attrs,
							'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
						]
					) 
				);
			}
		} else {

			$wp_customize->add_setting( 
				$id, 
				[
					'default' => isset( $args['default'] ) ? $args['default'] : '',
					'sanitize_callback' => isset( $args['sanitize_callback'] ) ? $args['sanitize_callback'] : ''
				] 
			);

			$wp_customize->add_control( 
				new Xenial_Customize_Slider_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : $default_input_attrs,
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
					]
				) 
			);
		}
	}
}



if ( ! function_exists( 'xenial_image_upload_field' ) ) {

	function xenial_image_upload_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id, 
			array(
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'esc_url_raw'				
			)
		);


		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 
				$id, 
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			) 
		);
	}
}



if ( ! function_exists( 'xenial_tinymce_editor_field' ) ) {

	function xenial_tinymce_editor_field( $id, $args ) {

		global $wp_customize;

		$input_attrs = [
			'toolbar1' => 'bold italic bullist numlist alignleft aligncenter alignright link',
			'toolbar2' => 'formatselect outdent indent | blockquote charmap',
			'mediaButtons' => true
		];

		$wp_customize->add_setting( 
			$id, 
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => 'wp_kses_post'				
			]
		);


		$wp_customize->add_control( 
			new Xenial_Customize_TinyMCE_Editor_Control( 
				$wp_customize, 
				$id, 
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'input_attrs' => isset( $args['input_attrs'] ) ? $args['input_attrs'] : $input_attrs,
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			) 
		);
	}
}



if ( ! function_exists( 'xenial_radio_button_group_field' ) ) {

	function xenial_radio_button_group_field( $id, $args, $responsive ) {

		global $wp_customize;

		if ( $responsive ) {

			$settings = [];

			$devices = [ 'desktop', 'tablet', 'mobile' ];

			foreach ( $devices as $device ) {
				$settings[$device] = $id . '_' . $device;
			}

			if ( $settings ) {

				foreach ( $settings as $device => $setting ) {
					$wp_customize->add_setting(
						$setting,
						[
							'default' => isset( $args['defaults'][$device] ) ? $args['defaults'][$device] : '',
							'sanitize_callback' => ''
						]
					);
				}

				$wp_customize->add_control( 
					new Xenial_Customize_Radio_Button_Group_Control( 
						$wp_customize, 
						$id, 
						[
							'settings' => $settings,
							'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
							'section' => isset( $args['section'] ) ? $args['section'] : '',
							'label' => isset( $args['label'] ) ? $args['label'] : '',
							'description' => isset( $args['description'] ) ? $args['description'] : '',
							'input_attrs' => [
								'responsive' => true,
								'item' => isset( $args['item'] ) ? $args['item']: 'text',
								'columns' => isset( $args['columns'] ) ? $args['columns'] : 3
							],
							'choices' => ( isset( $args['choices'] ) ) ? $args['choices'] : [],
							'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
						]
					) 
				);
			}
			
		} else {

			$wp_customize->add_setting( 
				$id, 
				[
					'default' => isset( $args['default'] ) ? $args['default'] : '',
					'sanitize_callback' => ''				
				]
			);

			$wp_customize->add_control( 
				new Xenial_Customize_Radio_Button_Group_Control( 
					$wp_customize, 
					$id, 
					[
						'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
						'section' => isset( $args['section'] ) ? $args['section'] : '',
						'label' => isset( $args['label'] ) ? $args['label'] : '',
						'description' => isset( $args['description'] ) ? $args['description'] : '',
						'input_attrs' => [
							'resposive' => false,
							'item' => isset( $args['item'] ) ? $args['item']: 'text',
							'columns' => isset( $args['columns'] ) ? $args['columns'] : 3
						],					
						'choices' => isset( $args['choices'] ) ? $args['choices'] : [],
						'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
					] 
				) 
			);
		}
	}
}



if ( ! function_exists( 'xenial_button_checkbox_field' ) ) {

	function xenial_button_checkbox_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id, 
			[
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => ''				
			]
		);

		$wp_customize->add_control( 
			new Xenial_Customize_Button_Checkbox_Control( 
				$wp_customize, 
				$id, 
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'input_attrs' => [
						'item' => isset( $args['item'] ) ? $args['item']: 'text',
						'columns' => isset( $args['columns'] ) ? $args['columns'] : 3
					],					
					'choices' => isset( $args['choices'] ) ? $args['choices'] : [],
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			) 
		);
	}
}



if ( ! function_exists( 'xenial_divider_field' ) ) {

	function xenial_divider_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id, 
			[
				'default' => '',
				'sanitize_callback' => ''
			]
		);

		$wp_customize->add_control(
			new Xenial_Customize_Divider_Control (
				$wp_customize,
				$id,
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'type' => 'xenial-divider',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			)			
		);
	}
}



if ( ! function_exists( 'xenial_info_field' ) ) {

	function xenial_info_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( 
			$id, 
			[
				'default' => '',
				'sanitize_callback' => ''
			]
		);

		$wp_customize->add_control(
			new Xenial_Customize_Info_Control (
				$wp_customize,
				$id,
				[
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'type' => 'xenial-info',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : ''
				]
			)			
		);
	}
}


if ( ! function_exists( 'xenial_sortable_selector_field' ) ) {

	function xenial_sortable_selector_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( $id,
			array(
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => ''
			)
		);
		$wp_customize->add_control( 
			new Xenial_Customize_Sortable_Selector_Control( 
				$wp_customize, 
				$id,
				array(
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : '',
					'choices' => isset( $args['choices'] ) ? $args['choices'] : array(),
				)
			) 
		);
	}
}




if ( ! function_exists( 'xenial_header_elements_selector_field' ) ) {

	function xenial_header_elements_selector_field( $id, $args ) {

		global $wp_customize;

		$wp_customize->add_setting( $id,
			array(
				'default' => isset( $args['default'] ) ? $args['default'] : '',
				'sanitize_callback' => ''
			)
		);
		
		$wp_customize->add_control( 
			new Xenial_Customize_Header_Elements_Selector_Control( 
				$wp_customize, 
				$id,
				array(
					'priority' => isset( $args['priority'] ) ? $args['priority'] : 10,
					'section' => isset( $args['section'] ) ? $args['section'] : '',
					'label' => isset( $args['label'] ) ? $args['label'] : '',
					'description' => isset( $args['description'] ) ? $args['description'] : '',
					'active_callback' => isset( $args['active_callback'] ) ? $args['active_callback'] : '',
					'choices' => isset( $args['choices'] ) ? $args['choices'] : array(),
				)
			) 
		);
	}
}