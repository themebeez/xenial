<?php

if ( ! function_exists( 'xenial_color_themes' ) ) {

	function xenial_color_themes() {
		return apply_filters(
			'xenial_color_themes_list',
			array(
				'xenial-theme-light' => esc_html__( 'Default (Light)', 'xenial' ),
				'xenial-theme-dark' => esc_html__( 'Dark', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_button_styles' ) ) {

	function xenial_button_styles() {
		return apply_filters(
			'xenial_button_styles_list',
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'rounded' => esc_html__( 'Rounded', 'xenial' ),
			)
		);
	}
}

if ( ! function_exists( 'xenial_banner_display_choices' ) ) {
	/**
     * Get banner display choices on different pages
     *
     * @since 1.0.0
     *
     * @param null.
     * @return array.
     */
	function xenial_banner_display_choices() {

		return array(
			'blog_page' => esc_html__( 'Blog Page', 'xenial' ),
			'front_page' => esc_html__( 'Static Front Page', 'xenial' ),
			'blog_and_front' => esc_html__( 'Blog Page &amp; Static Front Page', 'xenial' ),
		);
	}
}


if ( ! function_exists( 'xenial_banner_width_choices' ) ) {

	function xenial_banner_width_choices() {

		$banner_widths = array(
			'xenial-banner-content-width' => esc_html__( 'Content Width', 'xenial' ),
			'xenial-banner-fullwidth' => esc_html__( 'Full Width', 'xenial' )
		);

		if ( xenial_get_option( 'site_layout' ) !== 'xenial-fullwidth-stretched' || xenial_get_option( 'site_layout' ) !== 'xenial-boxed' ) {
			$banner_widths['xenial-banner-wide-width'] = esc_html__( 'Wide Width', 'xenial' );
		}

		return apply_filters( 'xenial_banner_widths', $banner_widths );
	}
}


if( ! function_exists( 'xenial_get_header_layouts' ) ) {
	/**
     * Get sidebar positions.
     *
     * @since 1.0.0
     *
     * @param null.
     * @return array.
     */
	function xenial_get_header_layouts() {

		return apply_filters( 
			'xenial_header_layouts_array', 
			array(
				'header_1' 	=> get_template_directory_uri() . '/customizer/assets/images/header-layout-1.png',
				'header_2' => get_template_directory_uri() . '/customizer/assets/images/header-layout-2.png',
			)
		);
	}
}


if ( ! function_exists( 'xenial_font_types' ) ) {

	function xenial_font_types() {

		return array(
			'system_font' => esc_html__( 'Web Safe Font', 'xenial' ),
			'google_font' => esc_html__( 'Google Font', 'xenial' )
		);
	}
}


if ( ! function_exists( 'xenial_get_standard_fonts' ) ) {

	function xenial_get_standard_fonts() {

		return apply_filters( 
			'xenial_standard_fonts_array',  
			array(
				'arial' => 'Arial, Helvetica Neue, Helvetica, sans-serif',
				'baskerville' => 'Baskerville, Baskerville Old Face, Garamond, Times New Roman, serif',
				'bodoni' => 'Bodoni MT, Bodoni 72, Didot, Didot LT STD, Hoefler Text, Garamond, Times New Roman, serif',
				'bookman_old_style' => 'Bookman Old Style, serif',
				'calibri' => 'Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif',
				'calisto_mt' => 'Calisto MT, Bookman Old Style, Bookman, Goudy Old Style, Garamond, Hoefler Text, Bitstream Charter, Georgia, serif',
				'cambria' => 'Cambria, Georgia, serif',
				'candara' => 'Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif',
				'century_gothic' => 'Century Gothic, CenturyGothic, AppleGothic, sans-serif',
				'consolas' => 'Consolas, monaco, monospace',
				'copperplate' => 'Copperplate, Copperplate Gothic Light, fantasy',
				'courier_new' => 'Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace',
				'dejavu_sans' => 'Dejavu Sans, Arial, Verdana, sans-serif',
				'didot' => 'Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif',
				'franklin_gothic' => 'Franklin Gothic, Arial Bold',
				'garamond' => 'Garamond, Baskerville, Baskerville Old Face, Hoefler Text, Times New Roman, serif',
				'georgia' => 'Georgia, Times, Times New Roman, serif',
				'gill_sans' => 'Gill Sans, Gill Sans MT, Calibri, sans-serif',
				'goudy_old_style' => 'Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif',
				'helvetica' => 'Helvetica Neue, Helvetica, Arial, sans-serif',
				'impact' => 'Impact, Charcoal, Helvetica Inserat, Bitstream Vera Sans Bold, Arial Black, sans serif',
				'lucida_bright' => 'Lucida Bright, Georgia, serif',
				'lucida_sans' => 'Lucida Sans, Helvetica, Arial, sans-serif',
				'ms_sans_serif' => 'MS Sans Serif, sans-serif',
				'optima' => 'Optima, Segoe, Segoe UI, Candara, Calibri, Arial, sans-serif',
				'palatino' => 'Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, Georgia, serif',
				'perpetua' => 'Perpetua, Baskerville, Big Caslon, Palatino Linotype, Palatino, serif',
				'rockwell' => 'Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif',
				'segoe_ui' => 'Segoe UI, Frutiger, Dejavu Sans, Helvetica Neue, Arial, sans-serif',
				'tahoma' => 'Tahoma, Verdana, Segoe, sans-serif',
				'times_new_roman' => 'Times New Roman, Times, serif',
				'trebuchet_ms' => ' Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif',
				'Verdana' => 'Verdana, Geneva, sans-serif'
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_standard_font_weights' ) ) {

	function xenial_get_standard_font_weights() {

		return apply_filters( 
			'xenial_standard_font_weights_array',  
			array(
				'inherit' => esc_html__( 'Inherit', 'xenial' ),
				'300' => esc_html__( 'Light', 'xenial' ),
				'400' => esc_html__( 'Regular', 'xenial' ),
				'500' => esc_html__( 'Medium', 'xenial' ),
				'600' => esc_html__( 'Semi Bold', 'xenial' ),
				'700' => esc_html__( 'Bold', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_text_transforms' ) ) {

	function xenial_get_text_transforms() {

		return apply_filters( 
			'xenial_text_transforms_array',  
			array(
				'inherit' => esc_html__( '-', 'xenial' ),
				'uppercase' => esc_html__( 'AA', 'xenial' ),
				'lowercase' => esc_html__( 'aa', 'xenial' ),
				'capitalize' => esc_html__( 'Aa', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_font_styles' ) ) {

	function xenial_get_font_styles() {

		return apply_filters( 
			'xenial_filter_font_styles',  
			[
				'normal' => 'Aa',
				'italic' => '<i>Aa</i>'
			]
		);
	}
}


if ( ! function_exists( 'xenial_get_site_layouts' ) ) {

	function xenial_get_site_layouts() {

		return apply_filters( 
			'xenial_site_layouts_array',  
			array(
				'xenial-fullwidth-contained' => esc_html__( 'Fullwidth: Contained', 'xenial' ),
				'xenial-fullwidth-stretched' => esc_html__( 'Fullwidth: Stretched', 'xenial' ),
				'xenial-boxed-contain' => esc_html__( 'Boxed: Contain', 'xenial' ),
				'xenial-boxed' => esc_html__( 'Boxed', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_device_visibility' ) ) {

	function xenial_get_device_visibility() {

		return apply_filters( 
			'xenial_device_visibility_array',  
			array(
				'default' => esc_html__( 'Show On All Devices', 'xenial' ),
				'hide-mobile' => esc_html__( 'Hide On Mobile', 'xenial' ),
				'hide-tablet' => esc_html__( 'Hide On Tablet', 'xenial' ),
				'hide-mobile-tablet' => esc_html__( 'Hide On Mobile And Tablet', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_general_pages' ) ) {

	function xenial_get_general_pages() {

		$general_pages = array(
			'blog_page' => esc_html__( 'Blog Page', 'xenial' ),
			'archive_page' => esc_html__( 'Archive Page', 'xenial' ),
			'search_page' => esc_html__( 'Search Page', 'xenial' ),
			'post_single' => esc_html__( 'Post Single', 'xenial' ),
			'page_single' => esc_html__( 'Page Single', 'xenial' ),
			'page_404' => esc_html__( '404 Page', 'xenial' ),
		);

		if ( class_exists( 'WooCommerce' ) ) {

			$woocommerce_pages = array(
				'product_archive' => esc_html__( 'Product Archive', 'xenial' ),
				'product_single' => esc_html__( 'Product Single', 'xenial' ),
			);

			$general_pages = array_merge( $general_pages, $woocommerce_pages );
		}

		return apply_filters( 
			'xenial_general_pages_array',
			$general_pages
		);
	}
}

if ( ! function_exists( 'xenial_get_page_header_background_choices' ) ) {

	function xenial_get_page_header_background_choices() {

		return apply_filters( 
			'xenial_page_header_background_choices_array', 
			array(
				'color' => esc_html__( 'Color', 'xenial' ),
				'gradient' => esc_html__( 'Gradient', 'xenial' ),
				'image' => esc_html__( 'Image', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_background_repeat_choices' ) ) {

	function xenial_get_background_repeat_choices() {

		return apply_filters( 
			'xenial_background_repeat_choices_array', 
			array(
				'no-repeat' => esc_html__( 'No Repeat', 'xenial' ),
				'repeat' => esc_html__( 'Repeat', 'xenial' ),
				'repeat-x' => esc_html__( 'Tile Horizontally', 'xenial' ),
				'repeat-y' => esc_html__( 'Tile Vertically', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_background_size_choices' ) ) {

	function xenial_get_background_size_choices() {

		return apply_filters( 
			'xenial_get_background_size_choices_array', 
			array(
				'auto' => esc_html__( 'Default', 'xenial' ),
				'cover' => esc_html__( 'Cover', 'xenial' ),
				'contain' => esc_html__( 'Contain', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_background_attachment_choices' ) ) {

	function xenial_get_background_attachment_choices() {

		return apply_filters( 
			'xenial_get_background_attachment_choices_array', 
			array(
				'scroll' => esc_html__( 'Scroll', 'xenial' ),
				'fixed' => esc_html__( 'Fixed', 'xenial' ),
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_background_position_choices' ) ) {

	function xenial_get_background_position_choices() {

		return apply_filters( 
			'xenial_get_background_position_choices_array', 
			array(
				'left-top' => esc_html__( 'Left Top', 'xenial' ),
				'left-center' => esc_html__( 'Left Center', 'xenial' ),
				'left-right' => esc_html__( 'Left Right', 'xenial' ),
				'right-top' => esc_html__( 'Right Top', 'xenial' ),
				'right-center' => esc_html__( 'Right Center', 'xenial' ),
				'right-bottom' => esc_html__( 'Right Bottom', 'xenial' ),
				'center-top' => esc_html__( 'Center Top', 'xenial' ),
				'center-center' => esc_html__( 'Center Center', 'xenial' ),
				'center-bottom' => esc_html__( 'Center Bottom', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_content_positions' ) ) {

	function xenial_get_content_positions() {

		return apply_filters( 
			'xenial_content_positions_array', 
			array(
				'top' => esc_html__( 'Top', 'xenial' ),
				'center' => esc_html__( 'Center', 'xenial' ),
				'bottom' => esc_html__( 'Bottom', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_alignments' ) ) {

	function xenial_get_alignments() {

		return apply_filters( 
			'xenial_get_alignments_array', 
			array(
				'left' => esc_html__( 'Left', 'xenial' ),
				'center' => esc_html__( 'Center', 'xenial' ),
				'right' => esc_html__( 'Right', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_page_header_image_choices' ) ) {

	function xenial_get_page_header_image_choices() {

		return apply_filters( 
			'xenial_get_page_header_background_image_choices_array', 
			array(
				'page-image' => esc_html__( 'Page&rsquo;s Image', 'xenial' ),
				'normal-image' => esc_html__( 'Header Image', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_page_header_background_image_choices' ) ) {

	function xenial_get_page_header_background_image_choices() {

		return apply_filters( 
			'xenial_get_page_header_background_image_choices_array', 
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'normal-image' => esc_html__( 'Header Image', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_slider_pagination_styles' ) ) {

	function xenial_get_slider_pagination_styles() {

		return apply_filters( 
			'xenial_slider_pagination_styles_array',  
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'dynamic' => esc_html__( 'Dynamic', 'xenial' ),
				'progress' => esc_html__( 'Progress', 'xenial' ),
				'fraction' => esc_html__( 'Fraction', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_overlay_styles' ) ) {

	function xenial_get_overlay_styles() {

		return apply_filters( 
			'xenial_overlay_style_array',  
			array(
				'full' => esc_html__( 'Full', 'xenial' ),
				'partial' => esc_html__( 'Partial', 'xenial' ),
				'none' => esc_html__( 'None', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_container_widths' ) ) {

	function xenial_get_container_widths() {

		return apply_filters( 
			'xenial_container_widths_array',  
			array(
				'xenial-content-width' => esc_html__( 'Content Width', 'xenial' ),
				'xenial-fullwidth' => esc_html__( 'Full Width', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_content_widths' ) ) {

	function xenial_content_widths() {

		return apply_filters( 
			'xenial_content_widths_array',  
			array(
				'xenial-content-width' => esc_html__( 'Content Width', 'xenial' ),
				'xenial-narrow-width' => esc_html__( 'Narrow Width', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_top_header_elements' ) ) {

	function xenial_get_top_header_elements() {

		return apply_filters( 
			'xenial_top_header_elements_array',  
			array(
				'text' => esc_html__( 'Text', 'xenial' ),
				'nav_menu' => esc_html__( 'Navigation Menu', 'xenial' ),
				'social_menu' => esc_html__( 'Social Links', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_main_header_elements' ) ) {

	function xenial_get_main_header_elements() {

		$main_header_elements = array(
			'search' => esc_html__( 'Search', 'xenial' ),
			'button' => esc_html__( 'Button', 'xenial' ),
		);

		if ( class_exists( 'WooCommerce' ) ) {

			$main_header_elements['cart'] = esc_html__( 'Cart', 'xenial' );
		}

		if ( class_exists( 'Addonify_Wishlist' ) || defined( 'YITH_WCWL' ) ) {

			$main_header_elements['wishlist'] = esc_html__( 'Wishlist', 'xenial' );
		}

		return apply_filters( 
			'xenial_main_header_elements_array',  
			$main_header_elements
		);
	}
}

if ( ! function_exists( 'xenial_get_main_header_elements_separators' ) ) {

	function xenial_get_main_header_elements_separators() {

		return apply_filters( 
			'xenial_main_header_elements_separators_array',  
			array(
				'none' => esc_html__( 'None', 'xenial' ),
				'bar' => esc_html__( 'Bar', 'xenial' ),
				'slanted-bar' => esc_html__( 'Slanted Bar', 'xenial' ),
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_banner_slider_choices' ) ) {

	function xenial_get_banner_slider_choices() {

		return apply_filters( 
			'xenial_banner_slider_choices_array',  
			array(
				'banner' => esc_html__( 'Banner', 'xenial' ),
				'slider' => esc_html__( 'Slider', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_archive_layouts' ) ) {

	function xenial_get_archive_layouts() {

		return apply_filters( 
			'xenial_archive_layouts_array',  
			array(
				'horizontal-list' => esc_html__( 'Horizontal List', 'xenial' ),
				'fullwidth' => esc_html__( 'Full Width', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_pagination_layouts' ) ) {

	function xenial_get_pagination_layouts() {

		return apply_filters( 
			'xenial_pagination_layouts_array',  
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'numeric' => esc_html__( 'Numeric', 'xenial' )
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_archive_post_structure_fullwidth' ) ) {

	function xenial_get_archive_post_structure_fullwidth() {

		return apply_filters( 
			'xenial_archive_post_structure_fullwidth_array',  
			array(
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'category' => esc_html__( 'Categories', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_archive_post_structure_horizontal_list' ) ) {

	function xenial_get_archive_post_structure_horizontal_list() {

		return apply_filters( 
			'xenial_archive_post_structure_horizontal_list_array',  
			array(
				'category' => esc_html__( 'Categories', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_archive_post_thumbnail_position' ) ) {

	function xenial_get_archive_post_thumbnail_position() {

		return apply_filters( 
			'xenial_archive_post_thumbnail_position_array',  
			array(
				'left' => esc_html__( 'Left', 'xenial' ),
				'right' => esc_html__( 'Right', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_single_content_widths' ) ) {

	function xenial_get_single_content_widths() {

		return apply_filters( 
			'xenial_single_content_widths_array',  
			array(
				'content_width' => esc_html__( 'Content Width', 'xenial' ),
				'narrow_width' => esc_html__( 'Narrow Width', 'xenial' ),
			)
		);
	}
}



if ( ! function_exists( 'xenial_get_inner_container_widths' ) ) {

	function xenial_get_inner_container_widths() {

		return apply_filters( 
			'xenial_filter_inner_container_widths',  
			array(
				'wide' => esc_html__( 'Wide', 'xenial' ),
				'container' => esc_html__( 'Container', 'xenial' ),
				'narrow' => esc_html__( 'Narrow', 'xenial' )
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_single_post_elements' ) ) {

	function xenial_get_single_post_elements() {

		return apply_filters( 
			'xenial_single_post_elements_array',  
			array(
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'category' => esc_html__( 'Post Categories', 'xenial' ),
				'tags' => esc_html__( 'Post Tags', 'xenial' ),
				'updated_date' => esc_html__( 'Last Updated Date', 'xenial' ),
				'author_box' => esc_html__( 'Author Box', 'xenial' ),
				'post_nav' => esc_html__( 'Post Navigation Links', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_post_meta_structure' ) ) {

	function xenial_get_post_meta_structure() {

		return apply_filters( 
			'xenial_post_meta_structure_array',  
			array(
				'author' => esc_html__( 'Author', 'xenial' ),
				'date' => esc_html__( 'Publish Date', 'xenial' ),
				'comment' => esc_html__( 'Comments', 'xenial' ),
				'categories' => esc_html__( 'Categories', 'xenial' ),
				'read_time' => esc_html__( 'Read Time', 'xenial' ),
			)
		);
	}
}

if ( ! function_exists( 'xenial_breadcrumb_sources' ) ) {

	function xenial_breadcrumb_sources() {

		$sources = array(
			'default' => esc_html__( 'Default', 'xenial' ),
		);

		if ( function_exists( 'yoast_breadcrumb' ) ) {
			$sources['yoast'] = esc_html__( 'Yoast SEO', 'xenial' );
		}

		if ( function_exists( 'rank_math' ) && rank_math()->settings->get( 'general.breadcrumbs' ) ) {
			$sources['rank_math'] = esc_html__( 'Rank Math', 'xenial' );
		}

		if ( function_exists( 'bcn_display' ) ) {
			$sources['bcn'] = esc_html__( 'Breadcrumb NavXT', 'xenial' );
		}

		return apply_filters( 'xenial_breadcrumb_sources', $sources );
	}
}

if ( ! function_exists( 'xenial_get_breadcrumb_positions' ) ) {

	function xenial_get_breadcrumb_positions() {

		return apply_filters( 
			'xenial_breadcrumb_positions_array',  
			array(
				'default' => esc_html__( 'Default (Separate Container)', 'xenial' ),
				'page_header' => esc_html__( 'Inside Page Header', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_breadcrumb_page_header_positions' ) ) {

	function xenial_get_breadcrumb_page_header_positions() {

		return apply_filters( 
			'xenial_breadcrumb_page_header_positions_array',  
			array(
				'before' => esc_html__( 'Before Post Header', 'xenial' ),
				'after' => esc_html__( 'After Post Header', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_gradient_choices' ) ) {

	function xenial_get_gradient_choices() {

		return apply_filters(
			'xenial_gradient_choices',
			array(
				'linear' => esc_html__( 'Linear', 'xenial' ),
				'radial' => esc_html__( 'Radial', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_radial_gradient_positions' ) ) {

	function xenial_get_radial_gradient_positions() {

		return apply_filters(
			'xenial_get_radial_gradient_positions',
			array(
				'center_center' => esc_html__( 'Center Center', 'xenial' ),
				'center_left' => esc_html__( 'Center Left', 'xenial' ),
				'center_right' => esc_html__( 'Center Right', 'xenial' ),
				'top_center' => esc_html__( 'Top Center', 'xenial' ),
				'top_left' => esc_html__( 'Top Left', 'xenial' ),
				'top_right' => esc_html__( 'Top Right', 'xenial' ),
				'bottom_center' => esc_html__( 'Bottom Center', 'xenial' ),
				'bottom_left' => esc_html__( 'Bottom Left', 'xenial' ),
				'bottom_right' => esc_html__( 'Bottom Right', 'xenial' )
			)
		);
	}
}	


if ( ! function_exists( 'xenial_get_default_sidebar_positions' ) ) {

	function xenial_get_default_sidebar_positions() {

		return apply_filters( 
			'xenial_sidebar_default_positions_array',  
			array(
				'no-sidebar' => esc_html__( 'No Sidebar', 'xenial' ),
				'left-sidebar' => esc_html__( 'Left Sidebar', 'xenial' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_sidebar_positions' ) ) {

	function xenial_get_sidebar_positions() {

		return apply_filters( 
			'xenial_sidebar_positions_array',  
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'no-sidebar' => esc_html__( 'No Sidebar', 'xenial' ),
				'left-sidebar' => esc_html__( 'Left Sidebar', 'xenial' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'xenial' ),
			)
		);
	}
}



if ( ! function_exists( 'xenial_get_sidebar_styles' ) ) {

	function xenial_get_sidebar_styles() {

		return apply_filters( 
			'xenial_sidebar_styles_array',  
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'widget-separated' => esc_html__( 'Widget Separated', 'xenial' ),
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_responsive_sidebar_positions' ) ) {

	function xenial_get_responsive_sidebar_positions() {

		return apply_filters( 
			'xenial_responsive_sidebar_positions_array',  
			array(
				'hide' => esc_html__( 'Hide', 'xenial' ),
				'before' => esc_html__( 'Before Content', 'xenial' ),
				'after' => esc_html__( 'After Content', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_footer_widget_columns' ) ) {

	function xenial_get_footer_widget_columns() {

		return apply_filters( 
			'xenial_footer_widget_columns_array',  
			array(
				'2' => esc_html__( 'Two', 'xenial' ),
				'3' => esc_html__( 'Three', 'xenial' ),
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_footer_widget_2_columns_variations' ) ) {

	function xenial_get_footer_widget_2_columns_variations() {

		return apply_filters( 
			'xenial_footer_widget_2_columns_variations_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-2-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/footer-2-2.png',
				'variation_3' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-2-3.png',
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_footer_widget_3_columns_variations' ) ) {

	function xenial_get_footer_widget_3_columns_variations() {

		return apply_filters( 
			'xenial_footer_widget_3_columns_variations_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/footer-3-2.png',
				'variation_3' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-3.png',
				'variation_4' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-4.png',
			)
		);
	}
}

if ( ! function_exists( 'xenial_get_footer_copyright_bar_layouts' ) ) {

	function xenial_get_footer_copyright_bar_layouts() {

		return apply_filters( 
			'xenial_footer_copyright_bar_layouts_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/copyright-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/copyright-2.png',
			)
		);
	}
}


if ( ! function_exists( 'xenial_get_categories' ) ) {

	function xenial_get_categories() {

		$taxonomy = 'category';

		$cat_terms = get_terms( $taxonomy );

		$categories = array();

		foreach( $cat_terms as $cat_term ) {

			$categories[$cat_term->term_id] = $cat_term->name;
		}

		return apply_filters( 'xenial_categories_dropdown_array', $categories );
	}
}


if ( ! function_exists( 'xenial_get_nav_menus' ) ) {

	function xenial_get_nav_menus() {

		$nav_menus = array();

		$nav_terms = wp_get_nav_menus();

		foreach ( $nav_terms as $menu ) {

			$nav_menus[ $menu->term_id ] = ucwords( $menu->name );
		}

		return apply_filters( 'xenial_nav_menus_array', $nav_menus );
	}
}


if ( ! function_exists( 'xenial_get_thumbnail_sizes' ) ) {

	function xenial_get_thumbnail_sizes() {

		global $_wp_additional_image_sizes;

		$default_image_sizes = get_intermediate_image_sizes();

		foreach ( $default_image_sizes as $size ) {
			$image_sizes[ $size ]['width']  = intval( get_option( "{$size}_size_w" ) );
			$image_sizes[ $size ]['height'] = intval( get_option( "{$size}_size_h" ) );
			$image_sizes[ $size ]['crop']   = get_option( "{$size}_crop" ) ? get_option( "{$size}_crop" ) : false;
		}

		if ( isset( $_wp_additional_image_sizes ) && count( $_wp_additional_image_sizes ) ) {
			$image_sizes = array_merge( $image_sizes, $_wp_additional_image_sizes );
		}

		$image_sizes['full'] = array(
			'width'  => '',
			'height' => '',
			'crop'   => '',
		);

		$size_choices = array();

		if ( ! empty( $image_sizes ) ) {
			foreach ( $image_sizes as $key => $value ) {
				$name = ucwords( str_replace( array( '-', '_' ), ' ', $key ) );

				$size_choices[ $key ] = $name;

				if ( $value['width'] || $value['height'] ) {
					$size_choices[ $key ] .= ' (' . $value['width'] . 'x' . $value['height'] . ')';
				}
			}
		}

		return apply_filters(  
			'xenial_thumbnail_sizes_array', 
			$size_choices 
		);
	}
}



if ( ! function_exists( 'xenial_copyright_position_choices' ) ) {

	function xenial_copyright_position_choices() {

		return array(
			'left' => esc_html__( 'Left', 'xenial' ),
			'right' => esc_html__( 'Right', 'xenial' )
		);
	}
}




if ( ! function_exists( 'xenial_get_border_styles' ) ) {

	function xenial_get_border_styles() {

		return apply_filters(  
			'xenial_filter_border_styles',
			[
				'none' => esc_html__( 'None', 'xenial' ),
				'solid'	=> esc_html__( 'Solid', 'xenial' ),
				'dotted' => esc_html__( 'Dotted', 'xenial' ),
				'dashed' => esc_html__( 'Dashed', 'xenial' ),
				'double' => esc_html__( 'Double', 'xenial' ),
				'groove' => esc_html__( 'Groove', 'xenial' ),
				'ridge' => esc_html__( 'Ridge', 'xenial' ),
				'inset' => esc_html__( 'Inset', 'xenial' ),
				'outset' => esc_html__( 'Outset', 'xenial' )
			]
		);
	}
}







if ( ! function_exists( 'xenial_get_global_tab_control_labels' ) ) {

	/*
	 * 
	 */
	function xenial_get_global_tab_control_labels() {

		return apply_filters( 
			'xenial_filter_global_tab_control_labels', 
			[
				'tab_1'			=> [
					'label'		=> esc_html__( 'General', 'xenial' ),
					'icon'		=> 'admin-generic'
				],
				'tab_2'			=> [
					'label'		=> esc_html__( 'Style', 'xenial' ),
					'icon'		=> 'admin-appearance'
				],
				'tab_3'			=> [
					'label'		=> esc_html__( 'Advanced', 'xenial' ),
					'icon'		=> 'layout'
				]
			] 
		);
    }
}


if ( ! function_exists( 'xenial_get_tab_control_2_labels' ) ) {

	/*
	 * 
	 */
	function xenial_get_tab_control_2_labels() {

		return apply_filters( 
			'xenial_filter_tab_control_two_labels', 
			[
				'tab_1'			=> [
					'label'		=> esc_html__( 'General', 'xenial' ),
					'icon'		=> 'admin-generic'
				],
				'tab_2'			=> [
					'label'		=> esc_html__( 'Style', 'xenial' ),
					'icon'		=> 'admin-appearance'
				]
			] 
		);
    }
}



if ( ! function_exists( 'xenial_get_top_level_menu_items_hover_effects' ) ) {

	function xenial_get_top_level_menu_items_hover_effects() {

		return apply_filters( 
			'xenial_filter_top_level_menu_items_hover_effects', 
			[
				'default' => esc_html__( 'Default', 'xenial' ),
				'border-bottom' => esc_html__( 'Border Bottom', 'xenial' ),
				'background-color' => esc_html__( 'Background Color', 'xenial' )
			] 
		);
    }
}


if ( ! function_exists( 'xenial_get_dropdown_menu_items_hover_effects' ) ) {

	function xenial_get_dropdown_menu_items_hover_effects() {

		return apply_filters( 
			'xenial_filter_top_level_menu_items_hover_effects', 
			[
				'default' => esc_html__( 'Default', 'xenial' ),
				'background-color' => esc_html__( 'Background Color', 'xenial' )
			] 
		);
    }
}



if ( ! function_exists( 'xenial_get_offcanvas_menu_positions' ) ) {

	function xenial_get_offcanvas_menu_positions() {

		return apply_filters(
			'xenial_filter_offcanvas_menu_positions',
			[
				'left' => esc_html__( 'Left', 'xenail' ),
				'right' => esc_html__( 'Right', 'xenial' )
			]
		);
	}
}


if ( ! function_exists( 'xenial_get_heading_tags' ) ) {

	function xenial_get_heading_tags() {
		return array(
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6'
		);
	}
}



if ( ! function_exists( 'xenial_get_social_networks' ) ) {

	function xenial_get_social_networks() {

		return apply_filters( 'xenial_social_networks_filter', array(
			'behance'		=> 'Behance',
			'codepen'		=> 'CodePen',
			'discord'		=> 'Discord',
			'dribble'		=> 'Dribble',
			'email'			=> 'Email',
			'facebook'		=> 'Facebook',
			'flickr'		=> 'Flickr',
			'foursquare'	=> 'Foursquare',
			'github'		=> 'Github',
			'gitlab'		=> 'GitLab',
			'instagram'		=> 'Instagram',
			'line'			=> 'Line',
			'linkedin'		=> 'LinkedIn',
			'medium'		=> 'Medium',
			'odnoklassniki'	=> 'Odnoklassniki',
			'patreon'		=> 'Patreon',
			'phone'			=> 'Phone',
			'pinterest'		=> 'Pinterest',
			'qq'			=> 'QQ',
			'rss'			=> 'RSS',
			'reddit'		=> 'Reddit',
			'skype'			=> 'Skype',
			'slack'			=> 'Slack',
			'snapchat'		=> 'Snapchat',
			'soundcloud'	=> 'SoundCloud',
			'spotify'		=> 'Spotify',
			'telegram'		=> 'Telegram',
			'tiktok'		=> 'TikTok',
			'tripadvisor'	=> 'TripAdvisor',
			'tumblr'		=> 'Tumblr',
			'twitch'		=> 'Twitch',
			'twitter'		=> 'Twitter',
			'unsplash'		=> 'Unsplash',
			'vk'			=> 'VK',
			'viber'			=> 'Viber',
			'vimeo'			=> 'Vimeo',
			'wechat'		=> 'WeChat',
			'weibo'			=> 'Weibo',
			'whatsapp'		=> 'WhatsApp',
			'xing'			=> 'Xing',
			'yelp'			=> 'Yelp',
			'youtube'		=> 'YouTube'
		) );
	}
}