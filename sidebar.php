<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 */

if ( ! xenial_is_sidebar_active() ) {
	
	return;
}

$xenial_sidebar_classes = array( 'widget-area site-sidebar' );

if ( xenial_get_option( 'sidebar_widget_style' ) ) {
	$xenial_sidebar_classes[] = xenial_get_option( 'sidebar_widget_style' );
}
?>
<aside id="secondary" class="<?php echo esc_attr( implode( ' ', $xenial_sidebar_classes ) ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
