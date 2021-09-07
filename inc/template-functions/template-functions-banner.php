<?php

if ( ! function_exists( 'xenial_banner_template' ) ) {

	function xenial_banner_template() {

		if ( xenial_get_option( 'enable_banner_slider' ) ) {

			$banner_enabled_page = xenial_get_option( 'banner_slider_enable_on' );

			if ( ! ( is_home() && ( $banner_enabled_page == 'blog_page' || $banner_enabled_page == 'blog_and_front' ) ) || ! ( is_front_page() && ( $banner_enabled_page == 'blog_page' || $banner_enabled_page == 'blog_and_front' ) ) ) {

				return;
			}

		} else {

			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array(),
			'width' => $customizer_defaults['banner_slider_width']
		);

		$args['width'] = xenial_get_option( 'banner_slider_width' );

		$args['classes'][] = xenial_get_option( 'banner_slider_width' );

		$args['classes'][] = xenial_get_option( 'banner_slider_visibility' );

		$args['classes'] = apply_filters( 'xenial_main_header_classes', $args['classes'] );

		get_template_part( 'template-parts/banner/base', '', $args );
	}
}
add_action( 'xenial_banner', 'xenial_banner_template' );


if ( ! function_exists( 'xenial_slider_banner_template' ) ) {

	function xenial_slider_banner_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-banner-background'),
			'content' => array(
				'posts_no' => $customizer_defaults['banner_slider_post_no'],
				'post_categories' => $customizer_defaults['banner_slider_post_category'],
				'post_meta' => $customizer_defaults['banner_slider_post_meta'],
				'show_meta_icons' => $customizer_defaults['banner_slider_enable_meta_icons'],
				'show_post_categories' => $customizer_defaults['banner_slider_display_categories'],
				'show_post_excerpt' => $customizer_defaults['banner_slider_display_excerpt']
			),
			'button' => array(
				'show_button' => $customizer_defaults['banner_slider_enable_button'],
				'button_label' => $customizer_defaults['banner_slider_button_title'],
				'open_in_new_tab' => $customizer_defaults['banner_slider_open_link_in_new_tab']
			),
			'thumbnail_size' => $customizer_defaults['banner_slider_image_size'],
			'enable_image_overlay' => $customizer_defaults['banner_slider_enable_overlay']
		);

		$args['classes'][] = xenial_get_option( 'banner_slider_content_width' );

		$content_position = xenial_get_option( 'banner_slider_content_position' );

		switch ( $content_position ) {
			case 'top' :
				$args['classes'][] = 'xenial-banner-content-top';
				break;
			case 'bottom' :
				$args['classes'][] = 'xenial-banner-content-bottom';
				break;
			default :
				$args['classes'][] = 'xenial-banner-content-center';
		}

		$text_alignment = xenial_get_option( 'banner_slider_content_alignment' );

		switch ( $text_alignment ) {
			case 'left' :
				$args['classes'][] = 'xenial-text-left';
				break;
			case 'right' :
				$args['classes'][] = 'xenial-text-right';
				break;
			default :
				$args['classes'][] = 'xenial-text-center';
		}

		$args['content']['posts_no'] = xenial_get_option( 'banner_slider_post_no' );

		$args['content']['post_categories'] = xenial_get_option( 'banner_slider_post_category' );

		$args['content']['post_meta'] = xenial_get_option( 'banner_slider_post_meta' );

		$args['content']['show_meta_icons'] = xenial_get_option( 'banner_slider_enable_meta_icons' ) ? true : false;

		$args['content']['show_post_categories'] = xenial_get_option( 'banner_slider_display_categories' ) ? true : false;

		$args['content']['show_post_excerpt'] = xenial_get_option( 'banner_slider_display_excerpt' ) ? true : false;

		$args['button']['show_button'] = xenial_get_option( 'banner_slider_enable_button' ) ? true : false;

		if ( $args['button']['show_button'] ) { 

			$args['button']['button_label'] = xenial_get_option( 'banner_slider_button_title' );

			$args['button']['open_in_new_tab'] = xenial_get_option( 'banner_slider_open_link_in_new_tab' ) ? true : false;
		}

		$args['enable_image_overlay'] = xenial_get_option( 'banner_slider_enable_overlay' ) ? true : false;

		$args['set_image_in_background'] = xenial_get_option( 'banner_slider_set_image_in_background' ) ? true : false;

		$args['image_size'] = xenial_get_option( 'banner_slider_image_size' );

		$args = apply_filters( 'xenial_slider_banner_args', $args );

		get_template_part( 'template-parts/banner/banner', 'slider', $args );
	}
}
add_action( 'xenial_slider_banner', 'xenial_slider_banner_template' );