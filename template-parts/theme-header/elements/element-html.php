<?php 

?>
<div class="xe-header-element is-html <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<span><?php echo wp_kses_post( $args['content'] ); ?></span>
</div><!-- // xe-header-element -->