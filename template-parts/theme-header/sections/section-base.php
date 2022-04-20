<?php 

?>
<div id="xe-mastheader">
	<header class="xe-desktop-header hidden-tablet-device hidden-mobile-device">
		<?php do_action( 'xenial_header_top_row', 'desktop' );  ?>
		<?php do_action( 'xenial_header_middle_row', 'desktop' );  ?>
		<?php do_action( 'xenial_header_bottom_row', 'desktop' );  ?>
	</header><!-- // # mastheader -->
	<header class="xe-mobile-header hidden-desktop-device visible-tablet-device visible-mobile-device">
		<?php do_action( 'xenial_header_top_row', 'mobile' );  ?>
		<?php do_action( 'xenial_header_middle_row', 'mobile' );  ?>
		<?php do_action( 'xenial_header_bottom_row', 'mobile' );  ?>
	</header><!-- // # mastheader -->
</div>


<?php do_action( 'xenial_offcanvas' ); ?>

<?php do_action( 'xenial_header_element_search_modal' ); ?>