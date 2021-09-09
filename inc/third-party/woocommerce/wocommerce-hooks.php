<?php 

if ( ! function_exists( 'xenial_woocommerce_product_loop_thumbnail' ) ) {

	function xenial_woocommerce_product_loop_thumbnail() {

		echo woocommerce_get_product_thumbnail();
	}
}