<?php
/**
 * The template for displaying search form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form role="search" method="get" class="xenial-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s"><?php echo esc_html__( 'Search for:', 'xenial' ); ?></label>
	<input type="search" name="s" placeholder="<?php echo esc_html_x( 'Type here to search', 'placeholder', 'xenial' )?>" value="<?php echo get_search_query(); ?>">
	<button type="submit" class="xenial-search-form-submit"><i class="fi fi-search" aria-hidden="true"></i></button>
</form>
