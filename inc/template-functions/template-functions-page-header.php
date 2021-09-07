<?php

if ( ! function_exists( 'xenial_page_header_template' ) ) {

	function xenial_page_header_template() {

		if ( xenial_is_page_header_activated() == true ) {

			$customizer_defaults = xenial_get_customizer_defaults();

			$args = array(
				'classes' => array(),
				'is_breadcrumb_enabled' => false,
				'breadcrumbs_position' => 'before-title',
				'display_background_overlay' => false
			);

			if ( xenial_is_breadcrumbs_activated() == true ) {

				$breadcrumbs_position = xenial_get_option( 'breadcrumbs_position' ) ? xenial_get_option( 'breadcrumbs_position' )  : $customizer_defaults['breadcrumbs_position'];

				if ( $breadcrumbs_position == 'page_header' ) {

					$args['classes'][] = 'xenial-page-header-breadcrumbs-enabled';

					$args['is_breadcrumb_enabled'] = true;

					$inner_breadcrumbs_position = xenial_get_option( 'breadcrumbs_position_inside_page_header' ) ? xenial_get_option( 'breadcrumbs_position_inside_page_header' ) : $customizer_defaults['breadcrumbs_position_inside_page_header'];

					if ( $inner_breadcrumbs_position == 'before' ) {
						$args['classes'][] = 'xenial-page-header-breadcrumbs-before';
						$args['breadcrumbs_position'] = 'before-title';
					} else {
						$args['classes'][] = 'xenial-page-header-breadcrumbs-after';
						$args['breadcrumbs_position'] = 'after-title';
					}
				}
			}

			$args['classes'][] = xenial_get_option( 'page_header_content_width' ) ? xenial_get_option( 'page_header_content_width' ) : $customizer_defaults['page_header_content_width'];

			$content_position = xenial_get_option( 'page_header_content_position' ) ? xenial_get_option( 'page_header_content_position' ) : $customizer_defaults['page_header_content_position'];

			switch ( $content_position ) {
				case 'top' :
					$args['classes'][] = 'xenial-page-header-content-top';
					break;
				case 'bottom' :
					$args['classes'][] = 'xenial-page-header-content-bottom';
					break;
				default :
					$args['classes'][] = 'xenial-page-header-content-center';
			}

			$content_alignment = xenial_get_option( 'page_header_text_alignments' ) ? xenial_get_option( 'page_header_text_alignments' ) : $customizer_defaults['page_header_text_alignments'];

			switch ( $content_alignment ) {
				case 'left' :
					$args['classes'][] = 'xenial-text-left';
					break;
				case 'right' :
					$args['classes'][] = 'xenial-text-right';
					break;
				default :
					$args['classes'][] = 'xenial-text-center';
			}

			$background_type = xenial_get_option( 'page_header_background_type' ) ? xenial_get_option( 'page_header_background_type' ) : $customizer_defaults['page_header_background_type'];

			switch ( $background_type ) {
				case 'gradient' :
					$args['classes'][] = 'xenial-page-header-background-gradient';
					break;
				case 'image' :
					$args['classes'][] = 'xenial-page-header-background-img';
					$args['display_background_overlay'] = true;
					break;
				default :
					$args['classes'][] = 'xenial-page-header-background-color';
			}

			$args = apply_filters( 'xenial_page_header_args', $args );

			get_template_part( 'template-parts/content/content', 'page-header', $args );
		} else {

			return;
		}
	}
}
add_action( 'xenial_page_header', 'xenial_page_header_template' );


if ( ! function_exists( 'xenial_page_header_title_action' ) ) {

	function xenial_page_header_title_action() {

		if ( is_home() || is_search() || is_archive() ) {			
			do_action( 'xenial_archive_title' );
		}

		if ( is_single() || is_page() ) {
			do_action( 'xenial_singular_title' );
		}

		if ( is_404() ) {
			do_action( 'xenial_404_title' );
		}
	}
}
add_action( 'xenial_page_header_title', 'xenial_page_header_title_action' );


if ( ! function_exists( 'xenial_archive_title_template' ) ) {

	function xenial_archive_title_template() {

		$args = array(
			'title' => '',
			'description' => '',
			'tag' => 'h1'
		);

		if ( is_home() ) {
			$args['title'] = esc_html__( 'Blog', 'xenial' );
			if ( xenial_is_page_header_activated() == true ) {
				$args['tag'] = 'h1';
			} else {
				$args['tag'] = 'h2';
			}
		}

		if ( is_archive() ) {
			$args['title'] = get_the_archive_title();
			$args['description'] = get_the_archive_description();
			$args['tag'] = 'h1';
		}

		if ( is_search() ) {
			$args['title'] = sprintf( 
				/* translators: %s: search query. */
				__( 'Search Results for: %s', 'xenial' ), '<span>' . get_search_query() . '</span>' 
			);
			$args['tag'] = 'h1';
		}

		get_template_part( 'template-parts/header', 'archive-title', $args );
	}
}
add_action( 'xenial_archive_title', 'xenial_archive_title_template' );


if ( ! function_exists( 'xenial_singular_title_template' ) ) {

	function xenial_singular_title_template() {

		get_template_part( 'template-parts/header', 'single-title' );
	}
}
add_action( 'xenial_singular_title', 'xenial_singular_title_template' );

if ( ! function_exists( 'xenial_404_title_template' ) ) {

	function xenial_404_title_template() {

		$args = array(
			'title' => esc_html__( '404', 'xenial' ),
			'tag' => 'h1'
		);

		get_template_part( 'template-parts/header', '404-title', $args );
	}
}
add_action( 'xenial_404_title', 'xenial_404_title_template' );