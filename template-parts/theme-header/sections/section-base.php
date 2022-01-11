<?php 

?>
<header id="xe-mastheader" class="xe-desktop-header hidden-tablet-device hidden-mobile-device">
	<?php do_action( 'xenial_header_top_row', 'desktop' );  ?>
	<?php do_action( 'xenial_header_middle_row', 'desktop' );  ?>
	<?php do_action( 'xenial_header_bottom_row', 'desktop' );  ?>
</header><!-- // # mastheader -->

<header id="xe-mastheader" class="xe-mobile-header hidden-desktop-device visible-tablet-device visible-mobile-device">
	<?php do_action( 'xenial_header_top_row', 'mobile' );  ?>
	<?php do_action( 'xenial_header_middle_row', 'mobile' );  ?>
	<?php do_action( 'xenial_header_bottom_row', 'mobile' );  ?>
</header><!-- // # mastheader -->

<?php do_action( 'xenial_offcanvas' ); ?>

<?php do_action( 'xenial_header_element_search_modal' ); ?>

<script>

	let body = document.body;

	let searchButton = document.getElementById('xe-header-element-search-button');
	let closeSearchBoxButton = document.getElementById('xe-close-search-box');

	function showSearchBox() {

		if ( searchButton && closeSearchBoxButton !== undefined || searchButton && closeSearchBoxButton !== null) {

			searchButton.addEventListener('click', function() {
				body.classList.add('xe-visible-search-form');
			});
			closeSearchBoxButton.addEventListener('click', function() {
				body.classList.remove('xe-visible-search-form');
			});
		}
	}

	let mobileCanavsTriggerButton = document.getElementById('xe-mobile-canvas-trigger-button');
	let mobileCanvasCloseButton = document.getElementById('xe-mobile-canvas-close-button');
	let mobileCanavs = document.getElementById('xe-mobile-canvas');
	let mobileCanavsMask = document.getElementById('xe-mobile-canvas-mask');

	function mobileCanvas() {

		if( mobileCanavsTriggerButton !== null && mobileCanavs !== null) {

			mobileCanavsTriggerButton.addEventListener('click', function() {

				body.classList.add('xe-visible-mobile-canvas');
			});
			mobileCanavsMask.addEventListener('click', function() {

				body.classList.remove('xe-visible-mobile-canvas');
			});
		}

		if( mobileCanvasCloseButton !== null ) {

			mobileCanvasCloseButton.addEventListener('click', function() {

				body.classList.remove('xe-visible-mobile-canvas');
			});
		}
	}

	showSearchBox();
	mobileCanvas();
</script>