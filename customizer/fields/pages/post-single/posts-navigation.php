<?php 

xenial_section_link_field(
	'post_single_display_posts_navigation',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'section_link' => 'xenial_post_single_navigation',
		'button_label' => esc_html__( 'Posts Navigation', 'xenial' ),
		'enable_switch' => true,
		'default' => xenial_get_customize_default( 'post_single_display_posts_navigation' )
	)
);

xenial_section_field( 
	'xenial_post_single_navigation',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Posts Navigation', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_post_single_navigation_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_navigation',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_post_single_navigation_tab_1_controls', 
	        	array(
	        		'post_single_display_post_image_in_post_navigation' => '',
	        		'post_single_posts_navigation_divider_1' => '',
	        		'post_single_prev_post_link_title_label' => '',
	        		'post_single_posts_navigation_divider_2' => '',
	        		'post_single_next_post_link_title_label' => '',
	        		'post_single_posts_navigation_divider_3' => '',
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_navigation_tab_2_controls', 
	        	array(	
	        		
	        	) 
	        )
		)
	)
);


xenial_switch_field(
	'post_single_display_post_image_in_post_navigation',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_navigation',
		'label' => esc_html__( 'Display Posts Image', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_display_post_image_in_post_navigation' )
	)
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_navigation', 
	) 
);


xenial_text_field(
	'post_single_prev_post_link_title_label',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_navigation',
		'label' => esc_html__( 'Previous Post Link Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_prev_post_link_title_label' )
	)
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_navigation', 
	) 
);


xenial_text_field(
	'post_single_next_post_link_title_label',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_navigation',
		'label' => esc_html__( 'Previous Next Link Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_next_post_link_title_label' )
	)
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_navigation', 
	) 
);