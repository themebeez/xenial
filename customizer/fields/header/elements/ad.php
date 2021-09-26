<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


$wp_customize->add_section( 
	'xenial_header_ad', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Ad Banner', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'radio_button_group_setting_row', 
	array(
		'default'           	=> 'left',
		'sanitize_callback' 	=> '',
	) 
);

// $wp_customize->add_setting( 
// 	'radio_button_group_setting_2', 
// 	array(
// 		'default'           	=> '2',
// 		'sanitize_callback' 	=> '',
// 	) 
// );

// $wp_customize->add_setting( 
// 	'radio_button_group_setting_3', 
// 	array(
// 		'default'           	=> '3',
// 		'sanitize_callback' 	=> '',
// 	) 
// );

$wp_customize->add_control( 
	new Xenial_Customize_Radio_Button_Group_Control( 
		$wp_customize, 
		'radio_button_group_setting_row', 
		array(
			'label'	   				=> esc_html__( 'Radio Settings', 'xenial' ),
			'section'  				=> 'xenial_header_ad',				
			// 'settings'   => array(
		 //        'desktop' 		=> 'radio_button_group_setting_1',
		 //        'tablet' 	=> 'radio_button_group_setting_2',
		 //        'mobile' 	=> 'radio_button_group_setting_3'
			// ),
			'input_attrs' => [
				'responsive' => false,
				'item' => 'icon',
				'columns' => 3,
			],			
			'choices' => [
				'left' => 'dashicons-align-left',
				'center' => 'dashicons-align-center',
				'right' => 'dashicons-align-right'
			],
			'priority' 				=> 10
		) 
	) 
);