<?php 

// if ( ! $args || empty( $args['label'] ) ) {
// 	return;
// }
?>
<div class="xe-header-element is-button <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<a class="xe-button xe-header-element-button" href="<?php echo esc_url( $args['link'] ); ?>" <?php echo ( $args['open_in_new_tab'] == true ) ? 'target="_blank"' : 'target="_self"'; ?>><?php echo esc_html( $args['label'] ); ?></a>
</div><!-- // xe-header-element -->