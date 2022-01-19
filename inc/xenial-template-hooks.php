<?php 
/**
 * Xenial Template Hooks
 *
 * Action/filter hooks used for Xenial functions/templates.
 *
 * @package Xenial
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;


/**
 * Theme header hooks.
 * 
 */
add_action( 'xenial_theme_header', 'xenial_theme_header_template' ); 

add_action( 'xenial_header_top_row', 'xenial_header_top_row_template' );
add_action( 'xenial_header_middle_row', 'xenial_header_middle_row_template' );
add_action( 'xenial_header_bottom_row', 'xenial_header_bottom_row_template' );
add_action( 'xenial_offcanvas', 'xenial_offcanvas_template' );

add_action( 'xenial_header_element_site_identity', 'xenial_header_element_site_identity_template' );
add_action( 'xenial_header_element_html', 'xenial_header_element_html_template' );
add_action( 'xenial_header_element_button', 'xenial_header_element_button_template' );
add_action( 'xenial_header_element_offcanvas_toggle_button', 'xenial_header_element_offcanvas_toggle_button_template' );
add_action( 'xenial_header_element_offcanvas_menu', 'xenial_header_element_offcanvas_menu_template' );
add_action( 'xenial_header_element_social_links', 'xenial_header_element_social_links_template' );
add_action( 'xenial_header_element_search', 'xenial_header_element_search_icon_template' );
add_action( 'xenial_header_element_search_bar', 'xenial_header_element_search_bar_template' );
add_action( 'xenial_header_element_search_modal', 'xenial_header_element_search_modal_template' );
add_action( 'xenial_header_element_menu_1', 'xenial_header_element_menu_1_template' );
add_action( 'xenial_header_element_menu_2', 'xenial_header_element_menu_2_template' );


add_action( 'xenial_post_title', 'xenial_post_title_template' );

add_action( 'xenial_linked_post_thumbnail', 'xenial_linked_post_thumbnail_template' );

add_action( 'xenial_single_post_thumbnail', 'xenial_single_thumbnail_template' );

/**
 * 
 * Post meta.
 *  
 * @see xenial_grouped_post_metas_template()
 * @see xenial_post_categories_meta_template()
 */
add_action( 'xenial_grouped_post_metas', 'xenial_grouped_post_metas_template' );
add_action( 'xenial_post_categories_meta', 'xenial_post_categories_meta_template' );


/**
 * Post excerpt and read more.
 *
 * @see xenial_post_content_template()
 * @see xenial_post_wp_page_links_template()
 * @see xenial_edit_post_link_template()
 */
add_action( 'xenial_post_excerpt', 'xenial_post_excerpt_template' );
add_action( 'xenial_post_read_more', 'xenial_post_read_more_template' );


add_action( 'xenial_pagination', 'xenial_pagination_template' );
add_action( 'xenial_archive_navigation', 'xenial_archive_navigation_template' );


/**
 * Article content.
 *
 * @see xenial_post_content_wrapper_before_template()
 * @see xenial_post_content_template()
 * @see xenial_post_wp_page_links_template()
 * @see xenial_edit_post_link_template()
 * @see xenial_post_content_wrapper_after_template()
 */
add_action( 'xenial_post_content', 'xenial_post_content_wrapper_before_template' );
add_action( 'xenial_post_content', 'xenial_post_content_template' );
add_action( 'xenial_post_content', 'xenial_post_wp_page_links_template' );
add_action( 'xenial_post_content', 'xenial_edit_post_link_template' );
add_action( 'xenial_post_content', 'xenial_post_content_wrapper_after_template' );


/**
 * Article footer.
 *
 * @see xenial_post_content_footer_template()
 */





add_action( 'xenial_post_author_box', 'xenial_author_box_template' );
add_action( 'xenial_post_navigation', 'xenial_post_navigation_template' );
add_action( 'xenial_post_comments', 'xenial_post_comments_template' );
add_action( 'xenial_related_posts', 'xenial_related_posts_template' );



add_action( 'xenial_breadcrumbs', 'xenial_breadcrumbs_template' );




add_action( 'xenial_archive_page_header', 'xenial_archive_page_header_template' );
add_action( 'xenial_archive_grouped_post_meta', 'xenial_archive_grouped_post_meta_template' );
add_action( 'xenial_archive_read_more', 'xenial_archive_read_more_template' );




add_action( 'xenial_single_header', 'xenial_single_header_template' );
add_action( 'xenial_single_grouped_post_meta', 'xenial_single_grouped_post_meta_template' );
add_action( 'xenial_single_content_footer', 'xenial_single_content_footer_template' );


add_action( 'xenial_single_page_header', 'xenial_single_page_header_template' );
add_action( 'xenial_page_title', 'xenial_page_title_template' );

add_action( 'wp_body_open', 'xenial_scroll_top_template' );


add_action( 'xenial_header_element_edd_minicart', 'xenial_header_element_edd_minicart_template' );