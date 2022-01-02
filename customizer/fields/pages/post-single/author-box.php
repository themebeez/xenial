<?php 

xenial_section_link_field(
	'post_single_display_author_box',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'section_link' => 'xenial_post_single_author_box',
		'button_label' => esc_html__( 'Author Box', 'xenial' ),
		'enable_switch' => true,
		'default' => xenial_get_customize_default( 'post_single_display_author_box' )
	)
);

xenial_section_field( 
	'xenial_post_single_author_box',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Author Box', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_post_single_author_box_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_author_box',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_post_single_author_box_tab_1_controls', 
	        	array(
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_author_box_tab_2_controls', 
	        	array(	
	        		
	        	) 
	        )
		)
	)
);