<?php 

?>
<div class="xe-header-element is-canvas-button">
	<button id="xe-mobile-canvas-trigger-button" class="xe-button xe-false-button" xe-button-style="<?php echo esc_attr( $args['button-style'] ); ?>">
		<?php if ( $args['label'] || is_customize_preview() ) { ?>
			<span class="xe-mobile-canvas-trigger-button-label"><?php echo esc_html( $args['label'] ); ?></span>
		<?php } ?>
		<span class="menu-bar"></span>
		<span class="menu-bar"></span>
		<span class="menu-bar"></span>
	</button>
	
</div><!-- // xe-header-element -->