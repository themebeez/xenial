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
	        		'page_single_header' => '',
	        		'page_single_header_width' => '',
	        		'page_single_header_general_divider_1' => '',
	        		'page_single_title_tag' => '',
	        		'page_single_header_general_divider_2' => '',
	        		'page_single_display_breadcrumbs' => '',
	        		'page_single_header_general_divider_3' => '',

	        		'page_single_content_general' => '',
            		'page_single_content_width' => '',
            		'page_single_content_divider_1' => '',
		            'page_single_content_elements' => '',
		            'page_single_content_divider_2' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_page_single_tab_2_controls', 
	        	[
	        		'page_single_header_styles' => '',
	        		'page_single_header_background_color' => '',
	        		'page_single_header_styles_divider_1' => '',

	        		'page_single_header_title_typography' => '',	
	        		'page_single_title_font_size' => '',
		            'page_single_title_line_height' => '',
		            'page_single_title_letter_spacing' => '',
		            'page_single_title_font_weight' => '',
		            'page_single_title_font_style' => '',
		            'page_single_title_text_transform' => '',   
		            'page_single_header_title_color_header' =>  '',    		
	        		'page_single_header_title_color' => '',

	        		'page_single_header_styles_divider_2' => '',
	        		'page_single_header_breadcrumb_styles' => '',
	        		'page_single_header_breadcrumb_text_color' => '',
	        		'page_single_header_breadcrumb_link_hover_color' => '',
	        	] 
	        )
		]
	]
);