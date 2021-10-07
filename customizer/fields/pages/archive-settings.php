<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_archive_pages',
	[
		'priority' => 10,
		'panel' => 'xenial_site_pages',
		'title'			=> esc_html__( 'Blog / Archive', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_archive_pages_button_tab',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_archive_pages_tab_1_controls', 
	        	[
	        		'archive_page_header' => '',
	        		'archive_page_header_width' => '',
	        		'archive_page_header_general_divider_1' => '',
	        		'archive_title_tag' => '',
	        		'archive_page_header_general_divider_2' => '',
	        		'archive_page_display_breadcrumbs' => '',
	        		'archive_page_header_general_divider_3' => '',
	        		
	        		'archive_content_container_width' => '',
	        		'archive_post_cards' => '',
	        
	        		'archive_post_structure_one' => '',
	        		'xenial_archive_pages_general_divider_1' => '',
	        		'archive_post_meta' => '',
	        		'archive_show_icons_in_post_meta' => '',
	        		'xenial_archive_pages_general_divider_2' => '',
	        		'archive_excerpt_heading' => '',
	        		'archive_excerpt_length' => '',
	        		'archive_excerpt_more' => '',
	        		'xenial_archive_pages_general_divider_3' => '',
	        		'archive_read_more_heading' => '',
	        		'archive_enable_read_more_button' => '',
	        		'archive_read_more_button_title' => '',
	        		'xenial_archive_pages_general_divider_4' => '',

	        		'archive_pagination' => '',
	        		'archive_pagination_type' => '',
	        		'archive_pagination_general_divider_1' => '',
	        		'previous_posts_link_btn_label' => '',
	        		'next_posts_link_btn_label' => '',
	        		'archive_pagination_general_divider_2' => '',
	        		'pagination_mid_size' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_archive_pages_tab_2_controls', 
	        	[
	        		'archive_page_header_styles' => '',
	        		'archive_page_header_background_color' => '',
	        		'archive_page_header_styles_divider_1' => '',

	        		'archive_page_header_title_typography' => '',	
	        		'archive_page_title_font_size' => '',
		            'archive_page_title_line_height' => '',
		            'archive_page_title_letter_spacing' => '',
		            'archive_page_title_font_weight' => '',
		            'archive_page_title_font_style' => '',
		            'archive_page_title_text_transform' => '',   
		            'archive_page_header_title_color_header' =>  '',    		
	        		'archive_page_header_title_color' => '',

	        		'archive_page_header_styles_divider_2' => '',
	        		'archive_page_header_breadcrumb_styles' => '',
	        		'archive_page_header_breadcrumb_text_color' => '',
	        		'archive_page_header_breadcrumb_link_hover_color' => '',


	        		'archive_page_header_post_cards_styles' => '',
	        		'archive_post_card_background_color' => '',
	        		'archive_page_header_post_card_divider_1' => '',
		            'archive_post_card_border_style' => '',
		            'archive_post_card_border_width' => '',
		            'archive_post_card_border_radius' => '',
		            'archive_post_card_border_color' => '',
		            'archive_page_header_post_card_divider_2' => '',

		            'archive_page_header_post_title_typography' => '',
		            'archive_post_title_font_size' => '',
		            'archive_post_title_line_height' => '',
		            'archive_post_title_letter_spacing' => '',
		            'archive_post_title_font_weight' => '',
		            'archive_post_title_font_style' => '',
		            'archive_post_title_text_transform' => '',
		            'archive_page_header_post_card_divider_3' => '',
		            'archive_page_header_post_title_color' => '',
		            'archive_post_title_font_color' => '',
		            'archive_post_title_font_hover_color' => '',
		            'archive_page_header_post_card_divider_4' => '',

		            'archive_page_header_post_card_divider_4' => '',
		            'archive_page_header_post_meta_typography' => '',
		            'archive_post_meta_font_size' => '',
		            'archive_post_meta_line_height' => '',
		            'archive_post_meta_letter_spacing' => '',
		            'archive_post_meta_font_weight' => '',
		            'archive_post_meta_font_style' => '',
		            'archive_post_meta_text_transform' => '',
		            'archive_page_header_post_card_divider_5' => '',
		            'archive_page_header_post_meta_color' => '',
		            'archive_post_meta_color' => '',
		            'archive_post_meta_hover_color' => '',
		            'archive_post_meta_separator_color' => '',


		            'archive_page_header_post_card_divider_6' => '',
		            'archive_page_header_post_excerpt_typography' => '',
		            'archive_post_excerpt_font_size' => '',
		            'archive_post_excerpt_line_height' => '',
		            'archive_post_excerpt_letter_spacing' => '',
		            'archive_post_excerpt_font_weight' => '',
		            'archive_post_excerpt_font_style' => '',
		            'archive_post_excerpt_text_transform' => '',
		            'archive_page_header_post_card_divider_7' => '',
		            'archive_page_header_post_excerpt_color' => '',
		            'archive_post_excerpt_color' => '',

		            'archive_page_header_pagination_styles' => '',
		            'archive_pagination_top_spacing' => '',
		            'archive_pagination_items_spacing' => '',
		            'archive_pagination_items_padding' => '',
		            'archive_pagination_font_size' => '',
		            'archive_pagination_item_initial_background_color' => '',
		            'archive_pagination_item_active_background_color' => '',
		            'archive_pagination_item_hover_background_color' => '',
		            'archive_pagination_item_initial_font_color' => '',
		            'archive_pagination_item_active_font_color' => '',
		            'archive_pagination_item_hover_font_color' => '',
		            'archive_pagination_item_border_style' => '',
		            'archive_pagination_item_border_width' => '',
		            'archive_pagination_item_border_radius' => '',
		            'archive_pagination_item_border_color' => '',
		            'archive_pagination_item_border_hover_color' => ''
	        	] 
	        )
		]
	]
);