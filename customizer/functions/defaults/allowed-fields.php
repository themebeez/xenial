<?php 


if ( ! function_exists( 'xenial_get_customize_allowed_fields' ) ) {

	function xenial_get_customize_allowed_fields( $customize_id ) {

		$allowed_fields = array(
			'primary_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'secondary_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'text_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'headings_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'link_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'border_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'input_fields_border_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
			'btn_txt_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'btn_bg_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'txt_btn_txt_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'txt_btn_border_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
			'breadcrumbs_text_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'header_button_font_color' => array(
                'desktop' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'tablet' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'mobile' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	)
            ),
            'header_button_background_color' => array(
                'desktop' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'tablet' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'mobile' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	)
            ),
            'header_html_text_color' => array(
                'desktop' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'link' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'tablet' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'link' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'mobile' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'link' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	)
            ),
            'primary_menu_top_level_items_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'active' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'primary_menu_top_level_items_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'active' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'primary_menu_dropdown_items_divider_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),            
            'primary_menu_dropdown_items_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'active' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'primary_menu_dropdown_items_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'active' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'header_secondary_menu_link_color' => array(
            	'desktop' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'tablet' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'mobile' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	)
            ),
            'offcanvas_menu_item_divider_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_menu_item_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'active' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_menu_submenu_toggle_button_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_menu_submenu_toggle_button_label_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_toggle_button_label_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_toggle_button_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'header_search_bar_background_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),
            'header_search_bar_text_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)
            ),
            'header_search_modal_toggle_button_text_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),         
            'header_search_modal_toggle_button_background_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),
            'header_search_bar_submit_button_text_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),          
            'header_search_bar_submit_button_background_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),
            'header_search_modal_background_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                )
            ),
            'header_search_modal_close_button_text_color' => array(
                'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	
            ),          
            'header_search_modal_close_button_background_color' => array(
            	'desktop' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'tablet' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	),
            	'mobile' => array(
            		'initial' => array(
	                    'display' => true,
	                    'default' => ''
	                ),
	                'hover' => array(
	                    'display' => true,
	                    'default' => ''
	                )
            	)	                
            ),
            'site_title_color' => array(
            	'desktop' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'tablet' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'mobile' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	)
            ),
            'site_description_color' => array(
            	'desktop' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'tablet' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	),
            	'mobile' => array(
            		'initial' => array(
	            		'display' => true,
	            		'default' => '#000000'
	            	)
            	)
            ),
            'header_social_link_icon_color' => array(
            	'desktop' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'tablet' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'mobile' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	)
            ),
            'header_social_link_title_color' => array(
            	'desktop' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'tablet' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'mobile' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	)
            ),
            'header_social_link_background_color' => array(
            	'desktop' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'tablet' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'mobile' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	)
            ),
            'header_social_link_border_color' => array(
        		'desktop' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'tablet' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	),
            	'mobile' => array(
            		'initial' => array(
            			'display' => true,
            			'default' => ''
            		),
            		'hover' => array(
            			'display' => true,
            			'default' => ''
            		)
            	)
        	),
        	'header_bottom_section_background_color' => array(
				'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
			),
			'header_background_color' => array(
				'initial' => array(
                    'display' => true,
                    'default' => ''
                )
			),
            'header_gradient_background_color_1' => array(
				'initial' => array(
                    'display' => true,
                    'default' => ''
                )
			),
			'header_gradient_background_color_2' => array(
				'initial' => array(
                    'display' => true,
                    'default' => ''
                )
			),
			'header_middle_section_background_color' => array(
				'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
			),
			'offcanvas_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_gradient_background_color_1' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_gradient_background_color_2' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_overlay_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_close_button_label_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'offcanvas_close_button_background_color' => array(
            	'initial' => array(
            		'display' => true,
            		'default' => ''
            	),
            	'hover' => array(
            		'display' => true,
            		'default' => ''
            	)
            ),
            'header_top_section_background_color' => array(
				'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
			),
			'archive_page_header_background_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_page_header_title_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_page_header_breadcrumb_text_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_post_title_font_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_post_card_background_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_post_excerpt_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_post_meta_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_post_meta_separator_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_pagination_item_background_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'archive_pagination_item_font_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'active' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'page_single_header_background_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'page_single_header_title_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'page_single_header_breadcrumb_text_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'post_single_breadcrumb_background_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
            'post_single_breadcrumb_text_color' => array(
                'desktop' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'tablet' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                ),
                'mobile' => array(
                    'initial' => array(
                        'display' => true,
                        'default' => ''
                    ),
                    'hover' => array(
                        'display' => true,
                        'default' => ''
                    )
                )
            ),
		);

		$allowed_fields = apply_filters( 'xenial_get_customize_allowed_fields_filter', $allowed_fields);

		return $allowed_fields[$customize_id];
	}
}