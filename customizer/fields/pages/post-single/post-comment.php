<?php 

xenial_section_link_field(
	'post_single_display_comments',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'section_link' => 'xenial_post_single_comments',
		'button_label' => esc_html__( 'Comments Box', 'xenial' ),
		'enable_switch' => true,
		'default' => xenial_get_customize_default( 'post_single_display_comments' )
	)
);

xenial_section_field( 
	'xenial_post_single_comments',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Comments', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_post_single_comments_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_comments',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_post_single_comments_tab_1_controls', 
	        	array(
	        		'post_single_show_toggle_comments_btn' => '',
	        		'post_single_comments_divider_1' => '',
	        		'post_single_comment_toggle_btn_title' => '',
	        		'post_single_comments_divider_2' => '',
	        		'post_single_comment_toggled_state_toggle_btn_title' => '',
	        		'post_single_comments_divider_3' => '',
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_comments_tab_2_controls', 
	        	array(	
	        		
	        	) 
	        )
		)
	)
);


xenial_switch_field(
	'post_single_show_toggle_comments_btn',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_comments',
		'label' => esc_html__( 'Enable Comments Toggle Button', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_show_toggle_comments_btn' )
	)
);

xenial_divider_field( 
	'post_single_comments_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_comments', 
	) 
);


xenial_text_field(
	'post_single_comment_toggle_btn_title',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_comments',
		'label' => esc_html__( 'Initial State Button Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_comment_toggle_btn_title' )
	)
);

xenial_divider_field( 
	'post_single_comments_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_comments', 
	) 
);

xenial_text_field(
	'post_single_comment_toggled_state_toggle_btn_title',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single_comments',
		'label' => esc_html__( 'Toggled State Button Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_comment_toggled_state_toggle_btn_title' )
	)
);

xenial_divider_field( 
	'post_single_comments_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single_comments', 
	) 
);