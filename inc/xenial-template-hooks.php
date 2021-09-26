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


add_action( 'xenial_post_title', 'xenial_post_title_template' );

add_action( 'xenial_post_thumbnail', 'xenial_post_thumbnail_template' );

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
 * @see xenial_post_content_footer_before_template()
 * @see xenial_post_tags_meta_template()
 * @see xenial_post_updated_date_meta_template()
 * @see xenial_post_content_footer_after_template()
 */
add_action( 'xenial_post_content_footer', 'xenial_post_content_footer_before_template' );
add_action( 'xenial_post_content_footer', 'xenial_post_tags_meta_template' );
add_action( 'xenial_post_content_footer', 'xenial_post_updated_date_meta_template' );
add_action( 'xenial_post_content_footer', 'xenial_post_content_footer_after_template' );




add_action( 'xenial_post_author_box', 'xenial_author_box_template' );
add_action( 'xenial_post_navigation', 'xenial_post_navigation_template' );
add_action( 'xenial_post_comments', 'xenial_post_comments_template' );
add_action( 'xenial_related_posts', 'xenial_related_posts_template' );