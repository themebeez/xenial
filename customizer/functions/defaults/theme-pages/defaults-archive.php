<?php 

if ( ! function_exists( 'xenial_get_customizer_default_archive_page_values' ) ) {
    function xenial_get_customizer_default_archive_page_values() {
        return array(
            // 'enable_archive_page_header' => false,
            'archive_page_header_width' => 'container',
            // 'archive_page_header_layout' => 'default',
            // 'archive_page_header_elements' => array( 'title', 'breadcrumbs' ),
            // 'archive_page_header_content_horizontal_alignment' => 'middle',
            // 'archive_page_header_content_verticle_alignment' => 'center',
            // 'archive_page_header_height' => '',
            // 'archive_page_header_content_margin' => array(
            //     'desktop_top' => '',
            //     'desktop_right' => '',
            //     'desktop_bottom' => '',
            //     'desktop_left' => '',
            //     'tablet_top' => '',
            //     'tablet_right' => '',
            //     'tablet_bottom' => '',
            //     'tablet_left' => '',
            //     'mobile_top' => '',
            //     'mobile_right' => '',
            //     'mobile_bottom' => '',
            //     'mobile_left' => '',
            // ),
            // 'archive_page_header_content_padding' => array(
            //     'desktop_top' => '',
            //     'desktop_right' => '',
            //     'desktop_bottom' => '',
            //     'desktop_left' => '',
            //     'tablet_top' => '',
            //     'tablet_right' => '',
            //     'tablet_bottom' => '',
            //     'tablet_left' => '',
            //     'mobile_top' => '',
            //     'mobile_right' => '',
            //     'mobile_bottom' => '',
            //     'mobile_left' => '',
            // ),

            'archive_title_tag' => 'h1',
            // 'archive_page_header_bottom_spacing' => array(
            //     'desktop' => '',
            //     'tablet' => '',
            //     'mobile' => ''
            // ),
            'archive_page_display_breadcrumbs' => true,
            'archive_page_header_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'archive_page_header_title_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'archive_page_header_breadcrumb_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',

            'archive_content_container_width' => 'container',
            'archive_post_structure_one' => array( 'image', 'category', 'title', 'meta', 'excerpt', 'read_more' ),
            'archive_post_meta' => array( 'author', 'date', 'comment', 'categories', 'read_time' ),
            'archive_show_icons_in_post_meta' => false,
            'archive_post_thumbnail_size' => 'large',
            'archive_excerpt_length' => 30,
            'archive_excerpt_more' => '',
            'archive_read_more_button_title' => esc_html__( 'Read More', 'xenial' ),
            'archive_pagination_type' => 'default',
            'previous_posts_link_btn_label' => esc_html__( 'Newer Posts', 'xenial' ),
            'next_posts_link_btn_label' => esc_html__( 'Older Posts', 'xenial' ),
            'pagination_mid_size' => 2,

            'archive_page_title_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_page_title_line_height' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_page_title_letter_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_page_title_font_weight' => '400',
            'archive_page_title_font_style' => 'normal',
            'archive_page_title_text_transform' => 'inherit',

            'archive_post_card_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'archive_post_card_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',

            'archive_post_title_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_title_line_height' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_title_letter_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_title_font_weight' => '400',
            'archive_post_title_font_style' => 'normal',
            'archive_post_title_text_transform' => 'inherit',
            'archive_post_title_font_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',

            'archive_post_excerpt_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => ''
            ),
            'archive_post_excerpt_line_height' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_excerpt_letter_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_excerpt_font_weight' => '400',
            'archive_post_excerpt_font_style' => 'normal',
            'archive_post_excerpt_text_transform' => 'inherit',
            'archive_post_excerpt_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',


            'archive_post_meta_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => ''
            ),
            'archive_post_meta_line_height' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_meta_letter_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'archive_post_meta_font_weight' => '400',
            'archive_post_meta_font_style' => 'normal',
            'archive_post_meta_text_transform' => 'inherit',
            'archive_post_meta_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'archive_post_meta_separator_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',



            'archive_pagination_top_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => ''
            ),
            'archive_pagination_items_spacing' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => ''
            ),
            'archive_pagination_items_padding' => array(
                'desktop_top' => '',
                'desktop_right' => '',
                'desktop_bottom' => '',
                'desktop_left' => '',
                'tablet_top' => '',
                'tablet_right' => '',
                'tablet_bottom' => '',
                'tablet_left' => '',
                'mobile_top' => '',
                'mobile_right' => '',
                'mobile_bottom' => '',
                'mobile_left' => ''
            ),
            'archive_pagination_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => ''
            ),
            'archive_pagination_item_background_color' => '{"desktop":{"initial":"","hover":"","active":""},"tablet":{"initial":"","hover":"","active":""},"mobile":{"initial":"","hover":"","active":""}}',
            'archive_pagination_item_font_color' => '{"desktop":{"initial":"","hover":"","active":""},"tablet":{"initial":"","hover":"","active":""},"mobile":{"initial":"","hover":"","active":""}}',
            'archive_pagination_item_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}'
        );
    }
}