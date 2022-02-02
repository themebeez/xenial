<?php 
/**
 * Call hook actions for header elements.
 * 
 * @param void
 * @return void
 */
if ( ! function_exists( 'xenial_print_header_element' ) ) {

	function xenial_print_header_element( $element ) {

		do_action( "xenial_header_element_{$element}" );
	}
}


/**
 * Prints HTML template for header button.
 * 
 * @param void
 * @return void
 */
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

		$alignments = array(
			'desktop' 	=> xenial_get_option( 'header_button_alignment_desktop' ),
			'tablet' 	=> xenial_get_option( 'header_button_alignment_tablet' ),
			'mobile'	=> xenial_get_option( 'header_button_alignment_mobile' )
		);

		foreach ( $alignments as $device => $alignment ) {
			if ( $alignment ) {
				$template_args['classes'][] = xenial_get_device_alignment_class( $device, $alignment );
			}
		}  		

		$template_args = apply_filters( 'xenial_header_element_button_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'button', $template_args );	
	}
}


/**
 * Prints HTML template for header HTML/Text.
 * 
 * @param void
 * @return void
 */
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

		$alignments = array(
			'desktop' 	=> xenial_get_option( 'header_html_alignment_desktop' ),
			'tablet' 	=> xenial_get_option( 'header_html_alignment_tablet' ),
			'mobile'	=> xenial_get_option( 'header_html_alignment_mobile' )
		);

		foreach ( $alignments as $device => $alignment ) {
			if ( $alignment ) {
				$template_args['classes'][] = xenial_get_device_alignment_class( $device, $alignment );
			}
		}

		$template_args = apply_filters( 'xenial_header_element_html_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'html', $template_args );	
	}
}


/**
 * Prints HTML template for header offcanvas toggle button.
 * 
 * @param void
 * @return void
 */
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


/**
 * Prints HTML template for offcanvas menu.
 * 
 * @param void
 * @return void
 */
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


/**
 * Prints HTML template for header primary navigation.
 * 
 * @param void
 * @return void
 */
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


/**
 * Prints HTML template for header secondary navigation.
 * 
 * @param void
 * @return void
 */
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

		$alignments = array(
			'desktop' 	=> xenial_get_option( 'header_secondary_menu_alignment_desktop' ),
			'tablet' 	=> xenial_get_option( 'header_secondary_menu_alignment_tablet' ),
			'mobile'	=> xenial_get_option( 'header_secondary_menu_alignment_mobile' )
		);

		foreach ( $alignments as $device => $alignment ) {
			if ( $alignment ) {
				$template_args['classes'][] = xenial_get_device_alignment_class( $device, $alignment );
			}
		} 

		$template_args = apply_filters( 'xenial_header_element_menu_2_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'menu-2', $template_args );	
	}
}


/**
 * Prints HTML template for header seach element.
 * 
 * @param void
 * @return void
 */
if ( ! function_exists( 'xenial_header_element_search_template' ) ) {

	function xenial_header_element_search_template() {

		$search_layout = xenial_get_option( 'header_search_display' );

		$template_args = array();

		if ( $search_layout == 'default' ) {

			get_template_part( 'template-parts/theme-header/elements/element', 'search-bar', $template_args );
		} else {
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

			$alignments = array(
				'desktop' 	=> xenial_get_option( 'header_search_alignment_desktop' ),
				'tablet' 	=> xenial_get_option( 'header_search_alignment_tablet' ),
				'mobile'	=> xenial_get_option( 'header_search_alignment_mobile' )
			);

			foreach ( $alignments as $device => $alignment ) {
				if ( $alignment ) {
					$template_args['classes'][] = xenial_get_device_alignment_class( $device, $alignment );
				}
			}

			$template_args = apply_filters( 'xenial_header_element_search_icon_template_args', $template_args );

			get_template_part( 'template-parts/theme-header/elements/element', 'search-icon', $template_args );
		}
	}
}


/**
 * Prints HTML template for search modal.
 * 
 * @param void
 * @return void
 */
if ( ! function_exists( 'xenial_header_element_search_modal_template' ) ) {

	function xenial_header_element_search_modal_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'search-modal', $template_args );
	}
}


/**
 * Prints HTML template for social links.
 * 
 * @param void
 * @return void
 */
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


		$alignments = array(
			'desktop' 	=> xenial_get_option( 'header_social_link_alignment_desktop' ),
			'tablet' 	=> xenial_get_option( 'header_social_link_alignment_tablet' ),
			'mobile'	=> xenial_get_option( 'header_social_link_alignment_mobile' )
		);

		foreach ( $alignments as $device => $alignment ) {
			if ( $alignment ) {
				$template_args['classes'][] = xenial_get_device_alignment_class( $device, $alignment );
			}
		} 

		$template_args = apply_filters( 'xenial_header_element_social_links_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'social-links', $template_args );
	}
}


/**
 * Prints HTML template for Site Identity.
 *  
 * Displays logo, site title, and site description. 
 * 
 * @param void
 * @return void
 */
if ( ! function_exists( 'xenial_header_element_site_identity_template' ) ) {

	function xenial_header_element_site_identity_template() {

		$template_args = array(
			'classes' => array( 'xe-site-branding' ),
			'site_title_classes' => array( 'site-title' ),
			'tagline_classes' => array( 'site-description' ),
			'logo_position' => 'none',
			'display-site-title' => xenial_get_option( 'display_site_title' ),
			'display-site-description' => xenial_get_option( 'display_site_description' )
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


		$content_alignments = array(
			'desktop' => xenial_get_option( 'site_identity_alignment_desktop' ),
			'tablet' => xenial_get_option( 'site_identity_alignment_tablet' ),
			'mobile' => xenial_get_option( 'site_identity_alignment_mobile' ),
		);

		foreach ( $content_alignments as $device => $alignment ) {
			if ( $alignment ) {
				$template_args['classes'][] = xenial_get_content_alignment_class( $device, $alignment );
			}
		}


		$template_args = apply_filters( 'xenial_header_element_site_identity_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/elements/element', 'site-identity-logo', $template_args );	
	}
}


/**
 * Prints HTML template for logo.
 * 
 * Checks for active transparent header, and mobile logo and then displays required logo.
 * 
 * @param void
 * @return void
 */
if ( ! function_exists( 'xenial_header_logo_template' ) ) {

	function xenial_header_logo_template() {

		$default_logo_id = get_theme_mod( 'custom_logo' );

		$default_mobile_header_logo_url = xenial_get_option( 'mobile_logo' );

		$desktop_logo_width = xenial_get_option( 'site_identity_logo_width_desktop' );

		$tablet_logo_width = xenial_get_option( 'site_identity_logo_width_tablet' ) ? xenial_get_option( 'site_identity_logo_width_tablet' ) : $desktop_logo_width;

		$mobile_logo_width = xenial_get_option( 'site_identity_logo_width_mobile' ) ? xenial_get_option( 'site_identity_logo_width_mobile' ) : $desktop_logo_width;

		if ( xenial_is_transparent_header_active() ) {

			$enable_transparent_logo = xenial_get_option( 'enable_transparent_header_logo' );

			$transparent_desktop_header_logo_url = xenial_get_option( 'transparent_desktop_header_logo' );

			$transparent_mobile_header_logo_url = xenial_get_option( 'transparent_mobile_header_logo' );
			?>
			<a href="<?php echo esc_attr( home_url() ); ?>" class="xe-transparent-header-logo-link" rel="home" aria-current="page">
				<?php
				$transparent_desktop_header_logo = '';
				if ( $transparent_desktop_header_logo_url && $enable_transparent_logo ) {
					// If transparent header desktop logo is present and transparent header logo enabled get transparent header desktop logo data
					$transparent_desktop_header_logo = xenial_get_attachment_src( $transparent_desktop_header_logo_url, '', $desktop_logo_width );
				} else {
					// If transparent header desktop logo is not present or transparent header logo is not enabled get default header desktop logo data
					if ( $default_logo_id ) {
						$transparent_desktop_header_logo = xenial_get_attachment_src( '', $default_logo_id, $desktop_logo_width );
					}
				} 

				// Print transparent header desktop logo
				if ( $transparent_desktop_header_logo ) {
					?>
					<img src="<?php echo esc_url( $transparent_desktop_header_logo[0] ); ?>" class="xe-logo xe-transparent-desktop-logo hidden-tablet-device hidden-mobile-device" width="<?php echo esc_attr( $transparent_desktop_header_logo[1] ); ?>" height="<?php echo esc_attr( $transparent_desktop_header_logo[2] ) ?>">
					<?php
				}

				
				$transparent_tablet_header_logo = '';
				$transparent_mobile_header_logo = '';
				if ( $transparent_mobile_header_logo_url && $enable_transparent_logo ) {
					// If transparent header mobile logo is present and transparent header logo enabled get transparent header mobile logo data
					$transparent_tablet_header_logo = xenial_get_attachment_src( $transparent_mobile_header_logo_url, '', $tablet_logo_width );
					$transparent_mobile_header_logo = xenial_get_attachment_src( $transparent_mobile_header_logo_url, '', $mobile_logo_width );
				} else {
					// If transparent header desktop logo is present and transparent header logo is enabled get transparent header desktop logo data
					if ( $transparent_desktop_header_logo_url && $enable_transparent_logo ) {
						$transparent_tablet_header_logo = xenial_get_attachment_src( $transparent_desktop_header_logo_url, '', $tablet_logo_width );
						$transparent_mobile_header_logo = xenial_get_attachment_src( $transparent_desktop_header_logo_url, '', $mobile_logo_width );
					} else {
						// If transparent header tablet logo is not present or transparent header logo is not enabled get default header tablet logo data
						if ( $default_logo_id ) {
							$transparent_tablet_header_logo = xenial_get_attachment_src( '', $default_logo_id, $tablet_logo_width );
							$transparent_mobile_header_logo = xenial_get_attachment_src( '', $default_logo_id, $mobile_logo_width );
						}
					}
				} 

				// Print transparent header logo for tablet device
				if ( $transparent_tablet_header_logo ) {
					?>
					<img src="<?php echo esc_url( $transparent_tablet_header_logo[0] ); ?>" class="xe-logo xe-transparent-tablet-logo hidden-desktop-device visible-tablet-device hidden-mobile-device" width="<?php echo esc_attr( $transparent_tablet_header_logo[1] ); ?>" height="<?php echo esc_attr( $transparent_tablet_header_logo[2] ); ?>">
					<?php 
				}

				// Print transparent header logo for mobile device
				if ( $transparent_mobile_header_logo ) {
					?>
					<img src="<?php echo esc_url( $transparent_mobile_header_logo[0] ); ?>" class="xe-logo xe-transparent-mobile-logo hidden-desktop-device hidden-tablet-device visible-mobile-device" width="<?php echo esc_attr( $transparent_mobile_header_logo[1] ); ?>" height="<?php echo esc_attr( $transparent_mobile_header_logo[2] ); ?>">
					<?php
				}
				?>
			</a>
			<?php
		}

		if ( $default_logo_id || $default_mobile_header_logo_url ) {
			?>
			<a href="<?php echo esc_attr( home_url() ); ?>" class="custom-logo-link" rel="home" aria-current="page">
				<?php
				// If default header logo is present, print default header logo.
				if ( $default_logo_id ) {

					$default_deskop_header_logo = xenial_get_attachment_src( '', $default_logo_id, $desktop_logo_width );

					// Print default header logo for desktop device
					 if ( $default_deskop_header_logo ) {
						?>
						<img src="<?php echo esc_url( $default_deskop_header_logo[0] ); ?>" class="xe-logo xe-default-desktop-logo hidden-tablet-device hidden-mobile-device" width="<?php echo esc_attr( $default_deskop_header_logo[1] ); ?>" height="<?php echo esc_attr( $default_deskop_header_logo[2] ) ?>">
						<?php
					}
				}

				$default_tablet_header_logo = '';
				$default_mobile_header_logo = '';

				if ( $default_mobile_header_logo_url ) {
					// Get and assign default mobile header logo if found.
					$default_tablet_header_logo = xenial_get_attachment_src( $default_mobile_header_logo_url, '', $tablet_logo_width );
					$default_mobile_header_logo = xenial_get_attachment_src( $default_mobile_header_logo_url, '', $mobile_logo_width );
				} else {
					// Get and assign default header logo if found.
					if ( $default_logo_id ) {
						$default_tablet_header_logo = xenial_get_attachment_src( '', $default_logo_id, $tablet_logo_width );
						$default_mobile_header_logo = xenial_get_attachment_src( '', $default_logo_id, $mobile_logo_width );
					}
				}

				// Print default header logo for tablet device
				if ( $default_tablet_header_logo ) {
					?>
					<img src="<?php echo esc_url( $default_tablet_header_logo[0] ); ?>" class="xe-logo xe-default-tablet-logo hidden-desktop-device visible-tablet-device hidden-mobile-device" width="<?php echo esc_attr( $default_tablet_header_logo[1] ); ?>" height="<?php echo esc_attr( $default_tablet_header_logo[2] ); ?>">
					<?php 
				}

				// Print default header logo for tablet device
				if ( $default_mobile_header_logo ) {
					?>
					<img src="<?php echo esc_url( $default_mobile_header_logo[0] ); ?>" class="xe-logo xe-default-mobile-logo hidden-desktop-device hidden-tablet-device visible-mobile-device" width="<?php echo esc_attr( $default_mobile_header_logo[1] ); ?>" height="<?php echo esc_attr( $default_mobile_header_logo[2] ); ?>">
					<?php
				}
				?>
			</a>
			<?php
		}
	}
}