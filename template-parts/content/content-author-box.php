<?php 
/**
 * Template part for displaying post author box.
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
<section class="xe-author-box">
    <div class="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'email' ), 75 ); ?>
    </div><!-- .author-avatar -->
    <div class="author-meta-data">
        <div class="name">
            <h4 class="author-display-name"><?php echo esc_html( get_the_author() ); ?></h4><!-- .author-display-name -->
        </div><!-- .name -->
        <?php if( get_the_author_meta( 'description' ) ) { ?>
            <div class="bio">
                <p>
                    <?php echo esc_html( get_the_author_meta( 'description' ) ); ?>
                    <?php if ( is_user_logged_in() && is_author( get_current_user_id() ) ) { ?>
                        <a href="<?php echo esc_url( get_edit_profile_url( get_current_user_id() ) ); ?>"><?php echo esc_html__( 'Edit your Profile now.', 'xenial' ); ?></a>
                    <?php } ?>

                    
                </p>
            </div><!-- .bio -->
        <?php } ?>
        <div class="author-archive">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="xe-link xe-button xe-false-button has-underline"><?php echo esc_html__( 'View all posts', 'xenial' ); ?></a><!-- .author-archive -->
        </div>
    </div><!-- .author-meta-data -->
</section><!-- .xe-author-box -->