<div class="xe-header-element xe-header-element-search-bar">
	<div class="xe-header-element-search-bar-inner">
		<?php 
		$enable_woocommerce_search = false;
		if ( class_exists( 'WooCommerce' ) ) {
			$enable_woocommerce_search = xenial_get_option( 'header_search_replace_with_woocommerce_search' );
		}

		if ( $enable_woocommerce_search ) {
			get_product_search_form();
		} else {
			get_search_form();
		}
		?>
	</div>
</div>
