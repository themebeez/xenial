<?php 

$xenial_display_site_title = xenial_get_option( 'display_site_title' );

$xenial_display_tagline = get_bloginfo( 'description', 'display' );
?>
<div class="xe-header-element is-site-title-logo">
	<div class="xe-site-branding" xe-logo-position="<?php echo esc_attr( $args['logo_position'] ); ?>">
		<?php 
		do_action( 'xenial_header_logo' );		

		if ( $xenial_display_site_title || $xenial_display_tagline ) { 
			?>
			<div class="site-title-block">
				<?php 
				if ( $xenial_display_site_title ) { 
					?>
					<span class="<?php echo esc_attr( implode( ' ', $args['site_title_classes'] ) ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
					<?php
				} 

				if ( $args['display-site-description'] ) {
					?>
					<p class="<?php echo esc_attr( implode( ' ', $args['tagline_classes'] ) ); ?>"><?php echo $xenial_display_tagline; // phpcs:ignore. ?></p>
					<?php
				}
				?>
			</div><!-- // site-title-block -->
			<?php 
		}
		?>
	</div><!-- // xe-site-branding -->
</div><!-- // xe-header-element -->