<?php
/**
 * Template part for displaying post content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$xenialPageContents = ( xenial_get_option( 'page_single_content_elements' ) ) ? xenial_get_option( 'page_single_content_elements' ) : array();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php // do_action( 'xenial_page_title' ); ?>
    <?php 
    if ( in_array( 'image', $xenialPageContents ) ) {
        if ( xenial_page_has_featured_image_enabled() ) {
            do_action( 'xenial_single_post_thumbnail', array( 'thumbnail_size' => apply_filters( 'xenial_page_size_thumbnail_size', 'full' ) ) );
        }
    }
    ?>
    <?php do_action( 'xenial_post_content' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->