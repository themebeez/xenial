<?php

if ( ! function_exists( 'xenial_woocommerce_result_count_catalog_ordering_wrapper_start' ) ) {

	function xenial_woocommerce_result_count_catalog_ordering_wrapper_start() {
		?>
		<div class="woocommerce-result-count-catalog-ordering-wrapper">
		<?php
	}
}
add_action( 'woocommerce_before_shop_loop', 'xenial_woocommerce_result_count_catalog_ordering_wrapper_start', 19 );

if ( ! function_exists( 'xenial_woocommerce_result_count_catalog_ordering_wrapper_end' ) ) {

	function xenial_woocommerce_result_count_catalog_ordering_wrapper_end() {
		?>
		</div>
		<?php
	}
}
add_action( 'woocommerce_before_shop_loop', 'xenial_woocommerce_result_count_catalog_ordering_wrapper_end', 31 );


if ( ! function_exists( 'xenial_woocommerce_sidebar_template' ) ) {

	function xenial_woocommerce_sidebar_template() {

		$sidebar_position = xenial_get_sidebar_position();

		// var_dump($sidebar_position);

		if ( ! is_active_sidebar( 'xenial-woocommerce-sidebar' ) || $sidebar_position === 'no-sidebar' ) {
			return;
		}

		$sidebar_classes = array( 'widget-area xenial-woocommerce-sidebar site-sidebar' );

		if ( xenial_get_option( 'sidebar_widget_style' ) ) {
			$sidebar_classes[] = xenial_get_option( 'sidebar_widget_style' );
		}
		?>
		<aside id="secondary" class="<?php echo esc_attr( implode( ' ', $sidebar_classes ) ); ?>">
			<?php dynamic_sidebar( 'xenial-woocommerce-sidebar' ); ?>
		</aside><!-- #secondary -->
		<?php
	}
} 
add_action( 'xenial_woocommerce_sidebar', 'xenial_woocommerce_sidebar_template' );