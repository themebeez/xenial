<?php

if ( ! function_exists( 'xenial_main_header_template' ) ) {

	function xenial_main_header_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array()
		);

		$main_header_layout = xenial_get_option( 'main_header_layout' );

		if ( $main_header_layout === 'header_1' ) {

			$args['classes'][] = 'xenial-main-header-1';

			$args['classes'][] = xenial_get_option( 'main_header_enable_header_ad' ) ? 'xenial-main-header-ad-enabled' : '';
		} else {

			$args['classes'][] = 'xenial-main-header-2';
		}

		$main_header_elements_enabled = xenial_get_option( 'main_header_enable_header_elements' );

		if ( $main_header_elements_enabled ) {

			$args['classes'][] = 'xenial-main-header-elements-enabled';

			$main_header_elements = xenial_get_option( 'main_header_elements' );

			foreach( $main_header_elements as $element ) {

				switch ( $element ) {

					case 'search' :

						$args['classes'][] = 'xenial-main-header-search-enabled';
						break;

					case 'button' :

						$args['classes'][] = 'xenial-main-header-button-enabled';
						break;

					case 'cart' :

						$args['classes'][] = 'xenial-main-header-cart-enabled';
						break;

					case 'wishlist' :

						$args['classes'][] = 'xenial-main-header-wishlist-enabled';
						break;

					default :
						break; 
				}
			}

			$main_header_elements_separator = xenial_get_option( 'main_header_elements_separator' ) ? xenial_get_option( 'main_header_elements_separator' ) : $customizer_defaults['main_header_elements_separator'];

			switch ( $main_header_elements_separator ) {
				case 'bar' :
					$args['classes'][] = 'xenial-main-header-elements-separator-bar';
					break;
				case 'slanted-bar' :
					$args['classes'][] = 'xenial-main-header-elements-separator-slanted-bar';
					break;
				default :
					$args['classes'][] = 'xenial-main-header-elements-separator-none';
			}
		}

		$args['classes'][] = xenial_get_option( 'main_header_width' ) ? xenial_get_option( 'main_header_width' ) : $customizer_defaults['main_header_width'];

		$args['classes'] = apply_filters( 'xenial_main_header_classes', $args['classes'] );

		get_template_part( 'template-parts/header/main', 'base', $args );

	}
}
add_action( 'xenial_main_header', 'xenial_main_header_template' );


if ( ! function_exists( 'xenial_main_header_content_template' ) ) {

	function xenial_main_header_content_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'header_elements_enabled' => false,
			'enable_sticky_navigation' => $customizer_defaults['main_navigation_enable_sticky'],
			'display_ad' => $customizer_defaults['main_header_enable_header_ad']
		);

		$main_header_elements = xenial_get_option( 'main_header_elements' );

		if ( $main_header_elements ) {
			$args['header_elements_enabled'] = true;
		}

		$args['enable_sticky_navigation'] = xenial_get_option( 'main_navigation_enable_sticky' ) ? true : false;

		$main_header_layout = xenial_get_option( 'main_header_layout' ) ? xenial_get_option( 'main_header_layout' ) : $customizer_defaults['main_header_layout'];

		if ( $main_header_layout === 'header_1' ) {
			$is_ad_enabled = xenial_get_option( 'main_header_enable_header_ad' ) ? true : false;
			$args['display_ad'] = ( is_active_sidebar( 'xenial-header-ad-area' ) && $is_ad_enabled === true ) ? true : false;
			get_template_part( 'template-parts/header/main', 'header-layout-one', $args );
		} else {
			get_template_part( 'template-parts/header/main', 'header-layout-two', $args );
		}
	}
}
add_action( 'xenial_main_header_content', 'xenial_main_header_content_template' );



if ( ! function_exists( 'xenial_main_header_site_identity_template' ) ) {

	function xenial_main_header_site_identity_template() {

		$args = array(
			'classes' => array( 'xenial-main-header-element', 'xenial-main-header-logo-element' )
		);

		$args['classes'] = apply_filters( 'xenial_main_header_logo_classes', $args['classes'] );

		get_template_part( 'template-parts/header/elements/element', 'logo', $args );
	}
}
add_action( 'xenial_site_identity', 'xenial_main_header_site_identity_template' );


if ( ! function_exists( 'xenial_main_header_ad_template' ) ) {

	function xenial_main_header_ad_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-main-header-element', 'xenial-main-header-ad-element' )
		);

		$args['classes'][] = xenial_get_option( 'main_header_ad_visibility' ) ? xenial_get_option( 'main_header_ad_visibility' ) : $customizer_defaults['main_header_ad_visibility'];

		$args['classes'] = apply_filters( 'xenial_main_header_ad_classes', $args['classes'] );

		get_template_part( 'template-parts/header/elements/element', 'ad', $args );
	}
}
add_action( 'xenial_header_ad', 'xenial_main_header_ad_template' );


if ( ! function_exists( 'xenial_main_header_navigation_template' ) ) {

	function xenial_main_header_navigation_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-main-header-element', 'xenial-main-header-navigation-element' ),
			'menu_label' => $customizer_defaults['main_navigation_mobile_menu_button_label']
		);

		$args['menu_label'] = xenial_get_option( 'main_navigation_mobile_menu_button_label' );

		$args = apply_filters( 'xenial_main_header_navigation_args', $args );

		get_template_part( 'template-parts/header/elements/element', 'navigation', $args );
	}
}
add_action( 'xenial_main_navigation', 'xenial_main_header_navigation_template' );


if ( ! function_exists( 'xenial_main_header_elements_template' ) ) {

	function xenial_main_header_elements_template() {

		$main_header_elements = xenial_get_option( 'main_header_elements' );

		if ( $main_header_elements ) {

			$customizer_defaults = xenial_get_customizer_defaults();

			?>
			<div class="xenial-main-header-elements-inner">
				<?php
				foreach( $main_header_elements as $element ) {

					switch ( $element ) {

						case 'search' :

							$search_args = array(
								'classes' => array( 'xenial-main-header-element', 'xenial-main-header-search-element' ) 
							);

							$search_args['classes'][] = xenial_get_option( 'main_header_search_visibility' ) ? xenial_get_option( 'main_header_search_visibility' ) : $customizer_defaults['main_header_search_visibility'];

							$search_args['classes'] = apply_filters( 'xenial_main_header_search_classes', $search_args['classes'] );

							get_template_part( 'template-parts/header/elements/element', 'search', $search_args );

							break;

						case 'button' :

							$button_args = array(
								'classes' => array( 'xenial-main-header-element', 'xenial-main-header-button-element' ),
								'open_in_new_tab' => $customizer_defaults['main_header_button_link_in_new_tab'],
								'label' => $customizer_defaults['main_header_button_text'],
								'link' => $customizer_defaults['main_header_button_link']
							);

							$button_args['classes'][] = xenial_get_option( 'main_header_button_visibility' ) ? xenial_get_option( 'main_header_button_visibility' ) : $customizer_defaults['main_header_button_visibility'];

							$button_args['classes'] = apply_filters( 'xenial_main_header_button_classes', $button_args['classes'] );

							$button_args['label'] = xenial_get_option( 'main_header_button_text' );

							$button_args['link'] = xenial_get_option( 'main_header_button_link' );

							$button_args['open_in_new_tab'] = xenial_get_option( 'main_header_button_link_in_new_tab' ) ? true : false;

							get_template_part( 'template-parts/header/elements/element', 'button', $button_args );

							break;

						case 'cart' :

							$cart_args = array(
								'classes' => array( 'xenial-main-header-element', 'xenial-main-header-cart-element' ),
								'enable_cart_items_no' => false
							);

							$cart_items_no_enabled = xenial_get_option( 'main_header_display_cart_items_no' );

							if ( $cart_items_no_enabled ) {
								$cart_args['enable_cart_items_no'] = true;
								$cart_args['classes'][] = 'xenial-cart-count-present';
							}

							$cart_args['classes'][] = xenial_get_option( 'main_header_cart_visibility' ) ? xenial_get_option( 'main_header_cart_visibility' ) : $customizer_defaults['main_header_cart_visibility'];

							$cart_args['classes'] = apply_filters( 'xenial_main_header_cart_classes', $cart_args['classes'] );

							get_template_part( 'template-parts/header/elements/element', 'cart', $cart_args );

							break;

						case 'wishlist' :

							$wishlist_args = array(
								'classes' => array( 'xenial-main-header-element', 'xenial-main-header-wishlist-element' ),
								'enable_wishlist_items_no' => false,
							);

							$wishlist_items_no_enabled = xenial_get_option( 'main_header_display_wishlist_items_no' );

							if ( $wishlist_items_no_enabled ) {
								$wishlist_args['enable_wishlist_items_no'] = true;
								$wishlist_args['classes'][] = 'xenial-wishlist-count-present';
							}

							$wishlist_args['classes'][] = xenial_get_option( 'main_header_wishlist_visibility' ) ? xenial_get_option( 'main_header_wishlist_visibility' ) : $customizer_defaults['main_header_wishlist_visibility'];

							$wishlist_args['classes'] = apply_filters( 'xenial_main_header_wishlist_classes', $wishlist_args['classes'] );

							get_template_part( 'template-parts/header/elements/element', 'wishlist', $wishlist_args );
							break;

						default :
							break; 
					}
				}
				?>
			</div>
			<?php
		}
	}
}
add_action( 'xenial_main_header_elements', 'xenial_main_header_elements_template' );



if ( ! function_exists( 'xenial_mobile_navigation_template' ) ) {

	function xenial_mobile_navigation_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'menu_label' => $customizer_defaults['main_navigation_mobile_menu_button_label']
		);

		$args['menu_label'] = xenial_get_option( 'main_navigation_mobile_menu_button_label' );

		get_template_part( 'template-parts/header/elements/element', 'mobile-nav', $args );
	}
}
add_action( 'xenial_mobile_navigation', 'xenial_mobile_navigation_template' );





if ( ! function_exists( 'xenial_search_section_template' ) ) {

	function xenial_search_section_template() {

		get_template_part( 'template-parts/header/section', 'search' );
	}
}
add_action( 'xenial_search_section', 'xenial_search_section_template' );




if ( ! function_exists( 'xenial_custom_logo_template' ) ) {
	/**
	 * Display the custom logo template.
	 */
	function xenial_custom_logo_template( $site_title_extra_class ) {

		if ( ! has_custom_logo() ) {
			return;
		}

		$site_title_extra_class = ( $site_title_extra_class ) ? $site_title_extra_class : 'xenial-default-logo-wrapper';

		if ( is_home() ) {
			?>
			<h1 class="site-logo <?php echo esc_attr( $site_title_extra_class ) ?>"><?php the_custom_logo(); ?></h1>
			<?php
		} else {
			?>
			<span class="site-logo <?php echo esc_attr( $site_title_extra_class ) ?>"><?php the_custom_logo(); ?></span>
			<?php
		}
	}
}
add_action( 'xenial_custom_logo', 'xenial_custom_logo_template' );



if ( ! function_exists( 'xenial_transparent_logo_template' ) ) {
	/**
	 * Display the logo template when transparent header is active.
	 */
	function xenial_transparent_logo_template() {

		$is_transparent_header_active = xenial_is_transparent_header_activated();

		if ( $is_transparent_header_active === false ) {
			return;
		}

		$transparent_logo = xenial_get_option( 'transparent_header_alternative_logo' );

		if ( $transparent_logo ) {
			if ( is_home() ) {
				?>
				<h1 class="site-logo xenial-alternate-logo-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<img class="xenial-alternate-logo" src="<?php echo esc_url( $transparent_logo ); ?>">
					</a>
				</h1>
				<?php
			} else {
				?>
				<span class="site-logo xenial-alternate-logo-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<img class="xenial-alternate-logo" src="<?php echo esc_url( $transparent_logo ); ?>">
					</a>
				</span>
				<?php
			}
		} else {
			do_action( 'xenial_custom_logo', 'xenial-alternate-logo-wrapper' );
		}
	}
}
add_action( 'xenial_transparent_logo', 'xenial_transparent_logo_template' );


if ( ! function_exists( 'xenial_dark_mode_logo_template' ) ) {
	/**
	 * Display the logo template when dark mode is active.
	 */
	function xenial_dark_mode_logo_template() {

		$theme_skin = xenial_get_option( 'theme_skin' );

		$is_dark_mode_switcher_displayed = xenial_get_option( 'display_dark_mode_toggle_button' );

		if ( $theme_skin === 'xenial-theme-dark' || $is_dark_mode_switcher_displayed === false ) {
			return;
		}

		$dark_mode_logo = xenial_get_option( 'dark_mode_logo' );

		if ( $dark_mode_logo ) {
			if ( is_home() ) {
				?>
				<h1 class="site-logo xenial-dark-mode-logo-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<img class="xenial-dark-mode-logo" src="<?php echo esc_url( $dark_mode_logo ); ?>">
					</a>
				</h1>
				<?php
			} else {
				?>
				<span class="site-logo xenial-dark-mode-logo-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<img class="xenial-dark-mode-logo" src="<?php echo esc_url( $dark_mode_logo ); ?>">
					</a>
				</span>
				<?php
			}
		} else {
			do_action( 'xenial_custom_logo', 'xenial-dark-mode-logo-wrapper' );
		}
	}
}
add_action( 'xenial_dark_mode_logo', 'xenial_dark_mode_logo_template' );


if ( ! function_exists( 'xenial_site_title_template' ) ) {
	/**
	 * Display the site title.
	 */
	function xenial_site_title_template() {

		if ( is_home() ) {
			?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<?php
		} else {
			?>
			<span class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</span>
			<?php
		}
	}
}
add_action( 'xenial_site_title', 'xenial_site_title_template' );


if ( ! function_exists( 'xenial_site_description_template' ) ) {
	/**
	 * Display the site title.
	 */
	function xenial_site_description_template() {

		if ( get_bloginfo( 'description', 'display' ) || is_customize_preview() ) {
			?>
			<p class="site-description"><?php echo esc_html( get_bloginfo( 'description', 'display' ) ); // phpcs:ignore. ?></p><!-- .site-description -->
			<?php
		}
	}
}
add_action( 'xenial_site_description', 'xenial_site_description_template' );