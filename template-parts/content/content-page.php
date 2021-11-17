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

$xenialPageContents = xenial_get_option( 'page_single_content_elements' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    if ( in_array( 'image', $xenialPageContents ) ) {
        do_action( 'xenial_single_post_thumbnail', array( 'thumbnail_size' => apply_filters( 'xenial_page_size_thumbnail_size', 'full' ) ) );
    }
    ?>
    <div class="xe-entry-content">
        <?php do_action( 'xenial_post_content' ); ?>
    </div><!-- .xe-entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->