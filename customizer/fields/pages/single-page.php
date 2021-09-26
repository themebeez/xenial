<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_page_single',
	[
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title' => esc_html__( 'Page Single', 'xenial' )
	]
);



xenial_tab_field(
	'xenial_page_single_tab',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_page_single_tab_1_controls', 
	        	[
	        		'page_single_enable_breadcrumb' => '',
	        		'page_single_enable_title' => '',
	        		'page_single_enable_featured_image' => '',

	        		'page_single_general_divider_1' => '',
	        		'page_single_general_divider_2' => '',
	        		'page_single_general_divider_3' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_page_single_tab_2_controls', 
	        	[
	        		
	        	] 
	        )
		]
	]
);


xenial_switch_field(
	'page_single_enable_breadcrumb',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Display Breadcrumbs', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_enable_breadcrumb']
	]
);


xenial_divider_field( 
	'page_single_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);


xenial_switch_field(
	'page_single_enable_title',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Display Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_enable_title']
	]
);


xenial_divider_field( 
	'page_single_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);


xenial_switch_field(
	'page_single_enable_featured_image',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Display Featured Image', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_enable_featured_image']
	]
);


xenial_divider_field( 
	'page_single_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);