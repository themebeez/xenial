<?php 
/**
 * Template part for displaying post content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php do_action( 'xenial_post_categories_meta' ); ?>
    <?php do_action( 'xenial_post_title', [ 'titleTag' => 'h1', 'enableLink' => false, 'cssClass' => [ 'xe-entry-title' ] ] ); ?>
    <?php do_action( 'xenial_grouped_post_metas' ); ?>
    <?php do_action( 'xenial_post_thumbnail', [ 'currentPage' => 'single', 'thumbSize' => 'full' ] ); ?>
    <?php do_action( 'xenial_post_excerpt' ); ?>
    <?php do_action( 'xenial_post_content' ); ?>
    <?php do_action( 'xenial_post_content_footer' ); ?>
    <?php do_action( 'xenial_post_author_box' ); ?>
    <?php do_action( 'xenial_post_navigation' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->