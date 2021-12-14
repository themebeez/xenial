<?php 

?>
<aside id="xe-mobile-canvas" xe-canvas-position="<?php echo esc_attr( $args['slide_position'] ); ?>">
	<div class="canvas-header">
		<button class="xe-button xe-false-button" id="xe-mobile-canvas-close-button">
			<?php if ( $args['close_button_label'] ) { ?>
				<span class="label">Close</span>
			<?php } ?>
			<?php echo $args['close_button_icon']; ?>
		</button>
	</div><!-- // canvas-header -->
	<div class="canvas-inner">
		<?php
		foreach ( $args['elements'] as $element ) {
			xenial_print_header_element( $element );
		}
		?>
	</div><!-- // canvas-inner -->
</aside><!-- // #mobile-canvas -->
<aside id="xe-mobile-canvas-mask"></aside>