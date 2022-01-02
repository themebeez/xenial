<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_post_single',
	[
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'	=> esc_html__( 'Post Single', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_post_single_tab',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_post_single_tab_1_controls', 
	        	[
	        		'post_single_breadcrumbs_general' => '',
	        		'post_single_display_breadcrumbs' => '',
	        		'post_single_breadcrumbs_divider_1' => '',
            		'post_single_breadcrumbs_width' => '',
            		'post_single_breadcrumbs_divider_2' => '',

            		'post_single_content_general' => '',
            		'post_single_content_width' => '',
            		'post_single_content_divider_1' => '',
		            'post_single_content_elements' => '',
		            'post_single_content_divider_2' => '',
		            'post_single_meta_elements' => '',
		            'post_single_content_divider_3' => '',
		            'post_single_show_icons_in_post_meta' => '',
		            'post_single_content_divider_4' => '',

		            'post_single_display_author_box' => '',
		            'post_single_display_posts_navigation' => '',
		            'post_single_display_comments' => '',
		            'post_single_display_related_posts' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_post_single_tab_2_controls', 
	        	[
	        		'post_single_breadcrumbs_styles' => '',
	        		'post_single_breadcrumb_background_color' => '',
		            'post_single_breadcrumb_text_color' => '',
		            'post_single_breadcrumb_link_hover_color' => '',
	        	] 
	        )
		]
	]
);


