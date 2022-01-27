<?php 
?>
<div class="xe-header-element is-site-title-logo">
	<div class="xe-site-branding" xe-logo-position="<?php echo esc_attr( $args['logo_position'] ); ?>">
		<?php 
		do_action( 'xenial_header_logo' );		

		if ( $args['display-site-title'] || $args['display-site-description'] ) { 
			?>
			<div class="site-title-block">
				<?php 
				if ( $args['display-site-title'] ) { 
					?>
					<span class="<?php echo esc_attr( implode( ' ', $args['site_title_classes'] ) ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
					<?php
				} 

				if ( $args['display-site-description'] ) {
					?>
					<p class="<?php echo esc_attr( implode( ' ', $args['tagline_classes'] ) ); ?>"><?php bloginfo( 'description' ); // phpcs:ignore. ?></p>
					<?php
				}
				?>
			</div><!-- // site-title-block -->
			<?php 
		}
		?>
	</div><!-- // xe-site-branding -->
</div><!-- // xe-header-element -->