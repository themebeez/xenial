<?php

if( ! function_exists( 'xenial_top_header_template' ) ) {
	/**
	 * Outputs template for header's top header section.
	 */
	function xenial_top_header_template() {

		$display_top_header = xenial_get_option( 'display_top_header' );

		$display_top_header_right_elements = xenial_get_option( 'display_top_header_right_element' );

		$display_top_header_left_elements = xenial_get_option( 'display_top_header_left_element' );

		if ( ! $display_top_header || ( ! $display_top_header_left_elements && ! $display_top_header_right_elements ) ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = xenial_get_option( 'top_header_visibility' ) ? xenial_get_option( 'top_header_visibility' ) : $customizer_defaults['top_header_visibility'];

		$args['classes'][] = xenial_get_option( 'top_header_width' ) ? xenial_get_option( 'top_header_width' ) : $customizer_defaults['top_header_width'];

		$args['classes'][] = $display_top_header_left_elements ? '' : 'xenial-no-left-element';

		$args['classes'][] = $display_top_header_right_elements ? '' : 'xenial-no-right-element';

		$args['classes'] = apply_filters( 'xenial_top_header_classes', $args['classes'] );

		get_template_part( 'template-parts/top-header/top', 'header', $args );
	}
}
add_action( 'xenial_top_header', 'xenial_top_header_template' );


if ( ! function_exists( 'xenial_top_header_left_element_template' ) ) {

	function xenial_top_header_left_element_template() {

		$display_top_header_left_elements = xenial_get_option( 'display_top_header_left_element' );

		if ( ! $display_top_header_left_elements ) {
			return;
		}

		$elements = xenial_get_option( 'top_header_left_element' );

		if ( $elements ) {
			?>
			<div class="xenial-col-lg">
				<?php 
				do_action( 
					'xenial_' . $elements . '_element', 
					array(
						'section' => 'top-header',
						'position' => 'left'
					) 
				); ?>
			</div>
			<?php
		}
	}
}
add_action( 'xenial_top_header_left_element', 'xenial_top_header_left_element_template' );


if ( ! function_exists( 'xenial_top_header_right_element_template' ) ) {

	function xenial_top_header_right_element_template() {

		$display_top_header_right_elements = xenial_get_option( 'display_top_header_right_element' );

		if ( $display_top_header_right_elements === false ) {
			return;
		}

		$elements = xenial_get_option( 'top_header_right_element' );

		if ( $elements ) {
			?>
			<div class="xenial-col-lg">
				<?php 
				do_action( 
					'xenial_' . $elements . '_element', 
					array(
						'section' => 'top-header',
						'position' => 'right'
					) 
				); ?>
			</div>
			<?php
		}
	}
}
add_action( 'xenial_top_header_right_element', 'xenial_top_header_right_element_template' );


if ( ! function_exists( 'xenial_text_element_template' ) ) {

	function xenial_text_element_template( $location ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-text-element' ),
			'content' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'xenial-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'xenial-top-header-left-element' : 'xenial-top-header-right-element';

			$args['classes'][] = xenial_get_option( 'top_header_text_visibility' ) ? xenial_get_option( 'top_header_text_visibility' ) : $customizer_defaults['top_header_text_visibility'];

			$args['content'] = xenial_get_option( 'top_header_text' ) ? xenial_get_option( 'top_header_text' ) : $customizer_defaults['top_header_text'];
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'xenial-bottom-footer-element';

			$args['classes'][] = 'xenial-copyright-text-element';

			$args['content'] = xenial_get_option( 'footer_copyright_bar_text' ) ? xenial_get_option( 'footer_copyright_bar_text' ) : '';
		}


		$args['classes'] = apply_filters( 'xenial_text_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'text', $args );
	}
}
add_action( 'xenial_text_element', 'xenial_text_element_template' );


if ( ! function_exists( 'xenial_nav_menu_element_template' ) ) {

	function xenial_nav_menu_element_template( $location ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-nav-menu-element' ),
			'menu' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'xenial-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'xenial-top-header-left-element' : 'xenial-top-header-right-element';

			$args['classes'][] = xenial_get_option( 'top_header_nav_menu_visibility' ) ? xenial_get_option( 'top_header_nav_menu_visibility' ) : $customizer_defaults['top_header_nav_menu_visibility'];

			$nav_menu_id = xenial_get_option( 'top_header_nav_menu' );

			$nav_menu_slug = xenial_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'xenial-bottom-footer-element';

			$args['classes'][] = 'xenial-copyright-nav-menu-element';

			$nav_menu_id = xenial_get_option( 'footer_copyright_bar_nav_menu' );

			$nav_menu_slug = xenial_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		$args['classes'] = apply_filters( 'xenial_nav_menu_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'nav-menu', $args );
	}
}
add_action( 'xenial_nav_menu_element', 'xenial_nav_menu_element_template' );


if ( ! function_exists( 'xenial_social_menu_element_template' ) ) {

	function xenial_social_menu_element_template( $location ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-social-menu-element' ),
			'menu' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'xenial-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'xenial-top-header-left-element' : 'xenial-top-header-right-element';

			$args['classes'][] = xenial_get_option( 'top_header_social_menu_visibility' ) ? xenial_get_option( 'top_header_social_menu_visibility' ) : $customizer_defaults['top_header_social_menu_visibility'];


			$args['classes'][] = xenial_get_option( 'top_header_display_social_menu_title' ) ? 'xenial-social-menu-title-displayed' : '';

			$nav_menu_id = xenial_get_option( 'top_header_social_menu' );

			$nav_menu_slug = xenial_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'xenial-bottom-footer-element';

			$args['classes'][] = 'xenial-copyright-social-menu-element';

			$args['classes'][] = xenial_get_option( 'footer_copyright_bar_display_social_menu_title' ) ? 'xenial-social-menu-title-displayed' : '';

			$nav_menu_id = xenial_get_option( 'footer_copyright_bar_social_menu' );

			$nav_menu_slug = xenial_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		$args['classes'] = apply_filters( 'xenial_nav_menu_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'social-menu', $args );
	}
}
add_action( 'xenial_social_menu_element', 'xenial_social_menu_element_template' );