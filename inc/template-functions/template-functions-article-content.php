<?php

if ( ! function_exists( 'xenial_post_structure_categories_template' ) ) {

	function xenial_post_structure_categories_template() {

		if ( ! xenial_is_categories_in_post_structure() ) {
			return;
		}

		$args = array(
			'sep' => '',
			'display_icon' => false			
		);
		?>
		<div class="xenial-post-structure-categories">
			<?php get_template_part( 'template-parts/entry/entry', 'categories', $args ); ?>
		</div>
		<?php	
	}
}
add_action( 'xenial_post_structure_categories', 'xenial_post_structure_categories_template' );


if ( ! function_exists( 'xenial_post_meta_template' ) ) {

	function xenial_post_meta_template() {

		if ( ! xenial_is_post_meta_active() ) {
			return;
		}

		$args = array(
			'post_meta_elements' => array()
		);

		if ( is_archive() || is_home() || is_search() ) {
			$args['post_meta_elements'] = xenial_get_option( 'archive_post_meta' );
		}

		if ( is_single() ) {
			$args['post_meta_elements'] = xenial_get_option( 'single_post_meta' );
		}

		$args = apply_filters( 'xenial_post_meta_structure', $args );

		get_template_part( 'template-parts/entry/entry', 'meta', $args );
	}
}
add_action( 'xenial_post_meta', 'xenial_post_meta_template' );


if ( ! function_exists( 'xenial_post_meta_categories_template' ) ) {

	function xenial_post_meta_categories_template() {

		if ( ! xenial_is_meta_in_post_meta( 'categories' ) ) {
			return;
		}

		$args = array(
			'sep' => ', ',
			'display_icon' => false
		);

		$args['display_icon'] = xenial_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'categories', $args );	
	}
}
add_action( 'xenial_post_meta_categories', 'xenial_post_meta_categories_template' );


if ( ! function_exists( 'xenial_post_meta_author_template' ) ) {

	function xenial_post_meta_author_template() {

		if ( ! xenial_is_meta_in_post_meta( 'author' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = xenial_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'author', $args );	
	}
}
add_action( 'xenial_post_meta_author', 'xenial_post_meta_author_template' );

if ( ! function_exists( 'xenial_post_meta_comments_template' ) ) {

	function xenial_post_meta_comments_template() {

		if ( ! xenial_is_meta_in_post_meta( 'comment' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = xenial_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'comment', $args );	
	}
}
add_action( 'xenial_post_meta_comments', 'xenial_post_meta_comments_template' );


if ( ! function_exists( 'xenial_post_meta_date_template' ) ) {

	function xenial_post_meta_date_template() {

		if ( ! xenial_is_meta_in_post_meta( 'date' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = xenial_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'date', $args );	
	}
}
add_action( 'xenial_post_meta_date', 'xenial_post_meta_date_template' );

if ( ! function_exists( 'xenial_loop_content_template' ) ) {

	function xenial_loop_content_template() {

		$args = array(
			'post_content_elements' => array(),
			'display_post_thumbnail' => false
		);

		$archive_layout = xenial_get_option( 'archive_layout' );

		switch ( $archive_layout ) {
			case 'horizontal-list':
				$args['post_content_elements'] = xenial_get_option( 'archive_horizontal_list_post_structure' );
				break;
			default:
				$args['post_content_elements'] = xenial_get_option( 'archive_fullwidth_post_structure' );
				break;
		}

		$args['display_post_thumbnail'] = xenial_get_option( 'archive_show_post_thumbnail' ) ? true : false;

		$args = apply_filters( 'xenial_archive_args', $args );

		get_template_part( 'template-parts/content/content', $archive_layout, $args );
	}
}
add_action( 'xenial_loop_content', 'xenial_loop_content_template' );


if ( ! function_exists( 'xenial_post_thumbnail_template' ) ) {

	function xenial_post_thumbnail_template() {

		if ( is_singular() && ! xenial_is_post_content_element_enabled( 'image' ) ) {
			return;
		}

		get_template_part( 'template-parts/entry/entry', 'thumbnail' );
	}
}
add_action( 'xenial_post_thumbnail', 'xenial_post_thumbnail_template' );


if ( ! function_exists( 'xenial_post_title_template' ) ) {

	function xenial_post_title_template() {

		get_template_part( 'template-parts/entry/entry', 'header' );	
	}
}
add_action( 'xenial_post_title', 'xenial_post_title_template' );


if ( ! function_exists( 'xenial_post_excerpt_template' ) ) {

	function xenial_post_excerpt_template() {

		get_template_part( 'template-parts/entry/entry', 'summary' );	
	}
}
add_action( 'xenial_post_excerpt', 'xenial_post_excerpt_template' );


if ( ! function_exists( 'xenial_post_read_more_button_template' ) ) {

	function xenial_post_read_more_button_template() {

		if ( ! xenial_get_option( 'archive_enable_read_more_button' ) ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'read_more_button_label' => $customizer_defaults['archive_read_more_button_title']
		);

		$args['read_more_button_label'] = xenial_get_option( 'archive_read_more_button_title' );

		$args = apply_filters( 'xenial_read_more_button_args', $args );

		get_template_part( 'template-parts/entry/entry', 'summary-footer', $args );	
	}
}
add_action( 'xenial_post_read_more_button', 'xenial_post_read_more_button_template' );


if ( ! function_exists( 'xenial_post_footer_template' ) ) {

	function xenial_post_footer_template() {

		if ( ! xenial_is_post_content_element_enabled( 'tags' ) && ! xenial_is_post_content_element_enabled( 'updated_date' ) ) {
			return;
		}

		get_template_part( 'template-parts/entry/entry', 'footer' );
	}
}
add_action( 'xenial_post_footer', 'xenial_post_footer_template' );


if ( ! function_exists( 'xenial_posts_navigation_template' ) ) {

	function xenial_posts_navigation_template() {

		if ( ! xenial_is_post_content_element_enabled( 'post_nav' ) ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

	    $args = array(
	    	'prev_post_link_title' => $customizer_defaults['prev_post_link_title_label'],
	    	'next_post_link_title' => $customizer_defaults['next_post_link_title_label']
	    );

	    $args['prev_post_link_title'] = xenial_get_option( 'prev_post_link_title_label' );

	    $args['next_post_link_title'] = xenial_get_option( 'next_post_link_title_label' );

	    $args = apply_filters( 'xenial_posts_navigation_args', $args );

	    get_template_part( 'template-parts/entry/entry', 'navigation', $args );
	}
}
add_action( 'xenial_posts_navigation', 'xenial_posts_navigation_template' );


if ( ! function_exists( 'xenial_post_author_box_template' ) ) {

	function xenial_post_author_box_template() {

		if ( ! xenial_is_post_content_element_enabled( 'author_box' ) ) {
			return;
		}

		get_template_part( 'template-parts/content/content', 'author-box' );
	}
}
add_action( 'xenial_post_author_box', 'xenial_post_author_box_template' );

if ( ! function_exists( 'xenial_post_comments_box_template' ) ) {

	function xenial_post_comments_box_template() {

		$args = [
			'show_cmnts_toggle_btn' => false,
			'cmnts_toggle_btn_label' => '',
		];

		if ( xenial_get_option( 'single_show_toggle_comments_btn' ) && xenial_get_option( 'single_comment_toggle_btn_title' ) ) {

			$args['show_cmnts_toggle_btn'] = true;

			$args['cmnts_toggle_btn_label'] = xenial_get_option( 'single_comment_toggle_btn_title' );
		}

		$args = apply_filters( 'xenial_post_comments_box_args', $args );

		get_template_part( 'template-parts/content/content', 'comments', $args );
	}
}
add_action( 'xenial_post_comments_box', 'xenial_post_comments_box_template' );

if ( ! function_exists( 'xenial_pagination_template' ) ) {

	function xenial_pagination_template() {

		$pagination_args = [];

		$pagination_template = xenial_get_option( 'archive_pagination_type' );

		$pagination_args['type'] = $pagination_template;

		if ( xenial_get_option( 'previous_posts_link_btn_label' ) ) {
			$pagination_args['prev_btn_label'] = xenial_get_option( 'previous_posts_link_btn_label' );
		}

		if ( xenial_get_option( 'next_posts_link_btn_label' ) ) {
			$pagination_args['next_btn_label'] = xenial_get_option( 'next_posts_link_btn_label' );
		}

		if ( xenial_get_option( 'pagination_mid_size' ) ) {
			$pagination_args['mid_size'] = xenial_get_option( 'pagination_mid_size' );
		}

		$pagination_args = apply_filters( 'xenial_pagination_args', $pagination_args );

		get_template_part( 'template-parts/content/content', 'pagination', $pagination_args );
	}
}
add_action( 'xenial_pagination', 'xenial_pagination_template' );


if ( ! function_exists( 'xenial_content_single_template' ) ) {

	function xenial_content_single_template() {

		get_template_part( 'template-parts/content/content', 'single' );
	}
}
add_action( 'xenial_content_single', 'xenial_content_single_template' );




if ( ! function_exists( 'xenial_archive_page_title_template' ) ) {

	function xenial_archive_page_title_template() {

		if ( xenial_is_page_header_activated() ) {
			return;
		}

		$archive_description = get_the_archive_description();
		?>
		<div class="xenial-archive-title-wrapper <?php if ( $archive_description ) { echo 'xenial-has-archive-description'; } ?>">
			<div class="xenial-archive-title-wrapper-inner">
				<?php do_action( 'xenial_archive_title' ); ?>
			</div>
		</div>
		<?php
	}
}
add_action( 'xenial_archive_page_title', 'xenial_archive_page_title_template' );


if ( ! function_exists( 'xenial_post_format_icon_template' ) ) {
	function xenial_post_format_icon_template() {
		$post_format = get_post_format();
		switch ( $post_format ) {
			case 'audio':
				get_template_part( 'template-parts/entry/format/media', 'audio' );
				break;
			case 'gallery':
				get_template_part( 'template-parts/entry/format/media', 'gallery' );
				break;
			case 'image':
				get_template_part( 'template-parts/entry/format/media', 'image' );
				break;
			case 'link':
				get_template_part( 'template-parts/entry/format/media', 'link' );
				break;
			case 'quote':
				get_template_part( 'template-parts/entry/format/media', 'quote' );
				break;
			case 'video':
				get_template_part( 'template-parts/entry/format/media', 'video' );
				break;
			default:
				break;
		}
	}
}
add_action( 'xenial_post_format_icon', 'xenial_post_format_icon_template' );