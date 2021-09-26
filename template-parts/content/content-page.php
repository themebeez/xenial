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
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php do_action( 'xenial_post_title', [ 'titleTag' => 'h1', 'enableLink' => false, 'cssClass' => [ 'xe-entry-title' ] ] ); ?>
    <?php do_action( 'xenial_post_thumbnail', [ 'enableLink' => true, 'enableCaption' => true, 'cssClass' => [ 'xe-entry-thumbnail' ] ] ); ?>
    <div class="xe-entry-content">
        <?php do_action( 'xenial_post_content' ); ?>
    </div><!-- .xe-entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->