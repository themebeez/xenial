<?php 

if ( ! function_exists( 'xenial_get_customizer_default_post_single_page_values' ) ) {

    function xenial_get_customizer_default_post_single_page_values( $customize_defaults ) {

        $post_single_customize_defaults = apply_filters(
            'xenial_post_single_customize_defaults_filter', 
            array(
                'post_single_display_breadcrumbs' => true,
                'post_single_breadcrumbs_width' => 'container',

                'post_single_breadcrumb_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'post_single_breadcrumb_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',

                'post_single_content_width' => 'container',
                'post_single_content_elements' => array( 'title', 'image', 'categories', 'tags', 'meta', 'updated_date', 'content' ),
                'post_single_meta_elements' => array( 'author', 'date', 'comment', 'categories' ),
                'post_single_show_icons_in_post_meta' => false,

                'post_single_display_comments' => true,
                'post_single_show_toggle_comments_btn' => false,
                'post_single_comment_toggle_btn_title' => esc_html__( 'Leave a Comment', 'xenial' ),
                'post_single_comment_toggled_state_toggle_btn_title' => esc_html__( 'Hide Comments', 'xenial' ),

                'post_single_display_author_box' => false,

                'post_single_display_posts_navigation' => true,
                'post_single_prev_post_link_title_label' => esc_html__( 'Previous Post', 'xenial' ),
                'post_single_next_post_link_title_label' => esc_html__( 'Next Post', 'xenial' ), 
                'post_single_display_post_image_in_post_navigation' => true, 

                'post_single_display_related_posts' => false,
                'post_single_related_posts_section_title' => esc_html__( 'Related Posts', 'xenial' ),
                'post_single_related_posts_section_title_alignment' => 'left',
                'post_single_related_posts_elements' => array( 'image', 'title', 'read_more' ),
                'post_single_related_posts_meta' => array( 'author', 'date', 'comment', 'categories' ),
                'post_single_related_posts_number_of_cols' => array(
                    'desktop'   => '4',
                    'tablet'    => '3',
                    'mobile'    => '2'
                ),
                'post_single_related_posts_posts' => 3,
                'post_single_related_posts_content_alignment' => 'left',
                'post_single_related_posts_by' => 'categories'
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $post_single_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_post_single_page_values' );
}