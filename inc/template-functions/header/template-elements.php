<?php 

if ( ! function_exists( 'xenial_print_header_element' ) ) {

	function xenial_print_header_element( $element ) {

		switch ( $element ) {
			case 'site_identity' :
				do_action( 'xenial_header_element_site_identity' );
				break;
			case 'button' :
				do_action( 'xenial_header_element_button' );
				break;
			case 'html' :
				do_action( 'xenial_header_element_html' );
				break;
			case 'menu_1' :
				do_action( 'xenial_header_element_menu_1' );
				break;
			case 'menu_2' :
				do_action( 'xenial_header_element_menu_2' );
				break;
			case 'search' :
				$search_layout = xenial_get_option( 'header_search_display' );
				if ( $search_layout == 'default' ) {
					do_action( 'xenial_header_element_search_bar' );
				} else {
					do_action( 'xenial_header_element_search' );
				}				
				break;
			case 'social_links' :
				do_action( 'xenial_header_element_social_links' );
				break;
			case 'offcanvas_menu' :
				do_action( 'xenial_header_element_offcanvas_menu' );
				break;
			case 'offcanvas_toggle_button' :
				do_action( 'xenial_header_element_offcanvas_toggle_button' );
				break;
			case 'edd_minicart' :
				do_action( 'xenial_header_element_edd_minicart' );
				break;
			default :
				break;
		}
	}
}



if ( ! function_exists( 'xenial_header_element_button_template' ) ) {

	function xenial_header_element_button_template() {

		$template_args = array(
			'label' 			=> xenial_get_option( 'header_button_title' ),
			'link' 				=> xenial_get_option( 'header_button_link' ),
			'open_in_new_tab' 	=> xenial_get_option( 'header_button_link_open_in_new_tab' ),
			'classes' 			=> array()
		);

		$device_visibilities 	= xenial_get_option( 'header_button_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		}

		$device_alignment_desktop 	= xenial_get_option( 'header_button_alignment_desktop' );

		if ( $device_alignment_desktop ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'desktop', $device_alignment_desktop );
		} 

		$device_alignment_tablet 	= xenial_get_option( 'header_button_alignment_tablet' );

		if ( $device_alignment_tablet ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'tablet', $device_alignment_tablet );
		} 

		$device_alignment_mobile 	= xenial_get_option( 'header_button_alignment_mobile' );

		if ( $device_alignment_mobile ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'mobile', $device_alignment_mobile );
		} 		

		$template_args = apply_filters( 'xenial_header_element_button_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'button', $template_args );	
	}
}



if ( ! function_exists( 'xenial_header_element_html_template' ) ) {

	function xenial_header_element_html_template() {

		$template_args = array(
			'content' 			=> xenial_get_option( 'header_html_content' ),
			'classes' 			=> array()
		);

		$device_visibilities 	= xenial_get_option( 'header_html_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		} 

		$device_alignment_desktop 	= xenial_get_option( 'header_html_alignment_desktop' );
		if ( $device_alignment_desktop ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'desktop', $device_alignment_desktop );
		} 
		$device_alignment_tablet 	= xenial_get_option( 'header_html_alignment_tablet' );
		if ( $device_alignment_tablet ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'tablet', $device_alignment_tablet );
		}
		$device_alignment_mobile 	= xenial_get_option( 'header_html_alignment_mobile' );
		if ( $device_alignment_mobile ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'mobile', $device_alignment_mobile );
		}

		$template_args = apply_filters( 'xenial_header_element_html_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'html', $template_args );	
	}
}



if ( ! function_exists( 'xenial_header_element_offcanvas_toggle_button_template' ) ) {

	function xenial_header_element_offcanvas_toggle_button_template() {

		$template_args = array(
			'label'				=> xenial_get_option( 'offcanvas_toggle_button_label' ),
			'classes' 			=> array(),
			'button-style'		=> ''
		);

		$icon 	= xenial_get_option( 'offcanvas_toggle_button_icon' );

		if ( $icon ) {
			$template_args['button-style'] = 'xe-' . $icon;
		}

		$template_args = apply_filters( 'xenial_header_element_offcanvas_toggle_button_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'offcanvas-toggle-button', $template_args );	
	}
}





if ( ! function_exists( 'xenial_header_element_site_identity_template' ) ) {

	function xenial_header_element_site_identity_template() {

		$template_args = array(
			'container_classes' => array(),
			'site_title_classes' => array( 'site-title' ),
			'tagline_classes' => array( 'site-description' ),
			'logo_position' => 'none'
		);

		$site_title_device_visibility = xenial_get_option( 'site_title_visibility' );

		if ( $site_title_device_visibility ) {
			$site_title_device_visibility = explode( ',', $site_title_device_visibility );
			foreach ( $site_title_device_visibility as $device_visibility ) {
				$template_args['site_title_classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		}  

		$tagline_device_visibility = xenial_get_option( 'site_description_visibility' );

		if ( $tagline_device_visibility ) {
			$tagline_device_visibility = explode( ',', $tagline_device_visibility );
			foreach ( $tagline_device_visibility as $device_visibility ) {
				$template_args['tagline_classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		}  		

		$logo_position = xenial_get_option( 'logo_position' );

		if ( $logo_position != 'left' ) {
			$template_args['logo_position'] = $logo_position;
		}

		$content_alignment = xenial_get_option( 'site_identity_alignment' );

		$template_args = apply_filters( 'xenial_header_element_site_identity_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'site-identity-logo', $template_args );	
	}
}



if ( ! function_exists( 'xenial_header_element_offcanvas_menu_template' ) ) {

	function xenial_header_element_offcanvas_menu_template() {

		$menu_id = xenial_get_option( 'offcanvas_menu' );

		if ( ! $menu_id ) {
			return;
		}

		$template_args = array(
			'menu_slug' => ''
		);

		$menu_slug = xenial_get_nav_menu_slug( $menu_id );

		if ( $menu_slug ) {
			$template_args['menu_slug'] = $menu_slug;
		}

		$template_args = apply_filters( 'xenial_offcanvas_menu_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'offcanvas-menu', $template_args );	
	}
}


if ( ! function_exists( 'xenial_header_element_menu_1_template' ) ) {

	function xenial_header_element_menu_1_template() {

		$menu_id = xenial_get_option( 'primary_menu' );

		if ( ! $menu_id ) {
			return;
		}

		$template_args = array(
			'menu_slug' => ''
		);

		$menu_slug = xenial_get_nav_menu_slug( $menu_id );

		if ( $menu_slug ) {
			$template_args['menu_slug'] = $menu_slug;
		}

		$template_args = apply_filters( 'xenial_header_element_menu_1_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'menu-1', $template_args );	
	}
}


if ( ! function_exists( 'xenial_header_element_menu_2_template' ) ) {

	function xenial_header_element_menu_2_template() {

		$menu_id = xenial_get_option( 'header_secondary_menu' );

		if ( ! $menu_id ) {
			return;
		}

		$template_args = array(
			'menu_slug' => '',
			'classes' => array()
		);

		$menu_slug = xenial_get_nav_menu_slug( $menu_id );

		if ( $menu_slug ) {
			$template_args['menu_slug'] = $menu_slug;
		}

		$device_visibilities = xenial_get_option( 'header_secondary_menu_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		} 

		$device_alignment_desktop 	= xenial_get_option( 'header_secondary_menu_alignment_desktop' );
		if ( $device_alignment_desktop ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'desktop', $device_alignment_desktop );
		} 
		$device_alignment_tablet 	= xenial_get_option( 'header_secondary_menu_alignment_tablet' );
		if ( $device_alignment_tablet ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'tablet', $device_alignment_tablet );
		}
		$device_alignment_mobile 	= xenial_get_option( 'header_secondary_menu_alignment_mobile' );
		if ( $device_alignment_mobile ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'mobile', $device_alignment_mobile );
		} 

		$template_args = apply_filters( 'xenial_header_element_menu_2_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'menu-2', $template_args );	
	}
}

if ( ! function_exists( 'xenial_header_element_search_bar_template' ) ) {

	function xenial_header_element_search_bar_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'search-bar', $template_args );	
	}
}



if ( ! function_exists( 'xenial_header_element_search_icon_template' ) ) {

	function xenial_header_element_search_icon_template() {

		$template_args = array(
			'classes' => array()
		);

		$device_visibilities = xenial_get_option( 'header_search_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		} 

		$device_alignment_desktop 	= xenial_get_option( 'header_search_alignment_desktop' );
		if ( $device_alignment_desktop ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'desktop', $device_alignment_desktop );
		} 
		$device_alignment_tablet 	= xenial_get_option( 'header_search_alignment_tablet' );
		if ( $device_alignment_tablet ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'tablet', $device_alignment_tablet );
		}
		$device_alignment_mobile 	= xenial_get_option( 'header_search_alignment_mobile' );
		if ( $device_alignment_mobile ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'mobile', $device_alignment_mobile );
		}

		$template_args = apply_filters( 'xenial_header_element_search_icon_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'search-icon', $template_args );	
	}
}


if ( ! function_exists( 'xenial_header_element_search_modal_template' ) ) {

	function xenial_header_element_search_modal_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'search-modal', $template_args );
	}
}


if ( ! function_exists( 'xenial_header_element_social_links_template' ) ) {

	function xenial_header_element_social_links_template() {

		$social_links = xenial_get_option( 'header_social_links' );

		$social_links = explode( ',', $social_links );

		$template_args = array(
			'social_links' => $social_links,
			'display_social_title' => xenial_get_option( 'header_social_link_display_title' ),
			'icon_color_type' => xenial_get_option( 'header_social_link_icon_color_type' ),
			'classes' => array()
		);

		$device_visibilities = xenial_get_option( 'header_social_link_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		} 

		$device_alignment_desktop 	= xenial_get_option( 'header_social_link_alignment_desktop' );
		if ( $device_alignment_desktop ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'desktop', $device_alignment_desktop );
		} 
		$device_alignment_tablet 	= xenial_get_option( 'header_social_link_alignment_tablet' );
		if ( $device_alignment_tablet ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'tablet', $device_alignment_tablet );
		}
		$device_alignment_mobile 	= xenial_get_option( 'header_social_link_alignment_mobile' );
		if ( $device_alignment_mobile ) {
			$template_args['classes'][] = xenial_get_device_alignment_class( 'mobile', $device_alignment_mobile );
		} 

		$template_args = apply_filters( 'xenial_header_element_social_links_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'social-links', $template_args );
	}
}


if ( ! function_exists( 'xenial_header_element_edd_minicart_template' ) ) {

	function xenial_header_element_edd_minicart_template() {

		$template_args = array(
			'edd-cart-items-count' => edd_get_cart_quantity(),
			'edd-cart-content-details' => edd_get_cart_contents()
		);

		$template_args = apply_filters( 'xenial_header_element_edd_minicart_template_args', $template_args );
		
		get_template_part( 'template-parts/theme-header/elements/element', 'edd-minicart', $template_args );
	}
}