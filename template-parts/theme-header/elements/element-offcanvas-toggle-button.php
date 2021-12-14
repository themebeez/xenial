<?php 

?>
<div class="xe-header-element is-canvas-button <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<button id="xe-mobile-canvas-trigger-button" class="xe-button xe-false-button">
		<span class="menu-bar"></span>
		<span class="menu-bar"></span>
		<span class="menu-bar"></span>
	</button>
	<?php if ( $args['label'] ) { ?>
		<span class="xe-mobile-canvas-trigger-button-label"><?php echo esc_html( $args['label'] ); ?></span>
	<?php } ?>
</div><!-- // xe-header-element -->