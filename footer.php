<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 */

?>

	</div><!-- #content -->
	<?php 

	do_action( 'xenial_footer_base' );

	/**
	 * Hook: xenial_mobile_navigation.
	 *
	 * @hooked xenial_mobile_navigation_template - 10
	 */
	do_action( 'xenial_mobile_navigation' );

	/**
	 * Hook: xenial_search_section.
	 *
	 * @hooked xenial_search_section_template - 10
	 */
	do_action( 'xenial_search_section' );

	do_action( 'xenial_light_dark_mode_toggle_button' );

	/**
	 * Hook: xenial_scroll_top_button.
	 *
	 * @hooked xenial_scroll_top_button_template - 10
	 */
	do_action( 'xenial_scroll_top_button' );
	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
