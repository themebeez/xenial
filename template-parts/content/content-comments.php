<?php 
/**
 * Template part for displaying post comments.
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

if ( $args['enableCommentsToggleButton'] ) {
    ?>
    <button id="xe-comment-toggle-btn" class="xe-button">
        <span id="xe-show-comment-text"><?php echo esc_html( $args['initialButtonLabel'] ); ?> <span class="icon"><i class="ti-comment-alt"></i></span></span>
        <span id="xe-hide-comment-text"><?php echo esc_html( $args['toggledStateButtonLabel'] ); ?> <span class="icon"><i class="ti-comments"></i></span></span>
    </button>
    <?php
}
comments_template();