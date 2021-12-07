<?php

xenial_section_field( 
	'xenial_off_canvas',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Off-Canvas', 'xenial' )
	)
); 


// xenial_tab_field(
// 	'xenial_header_off_canvas_tab',
// 	array(
// 		'priority' => 10,
// 		'section' => 'xenial_off_canvas',
// 		'tabs' => xenial_get_tab_control_2_labels(),
// 		'controls' => array(
// 			'tab_1' => apply_filters( 
// 	        	'xenial_header_off_canvas_tab_1_controls', 
// 	        	array(
	        		
// 	        	) 
// 	        ),
// 	        'tab_2' => apply_filters( 
// 	        	'xenial_header_off_canvas_tab_2_controls', 
// 	        	array(	
	        		
// 	        	) 
// 	        )
// 		)
// 	)
// );


xenial_range_control_field(
	'header_canvas_width',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Width', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1,
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'header_canvas_width' )
	)
);