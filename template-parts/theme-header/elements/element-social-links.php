<?php 


?>
<div class="xe-header-element is-social">
	<ul class="xe-header-element-social" xe-icon-color-type="<?php echo esc_attr( $args['icon_color_type'] ); ?>" xe-has-icon-label="false">
	<!-- Attribute "xe-icon-color-type": default, official -->
	<!-- Attribute "xe-has-icon-label": true, false -->
		<?php 
		foreach ( $args['social_links'] as $social_network ) {
			?>
			<li>
				<a href="<?php echo esc_url( xenial_get_option( $social_network . '_link' ) ); ?>">
					<?php echo xenial_get_social_networks_icon( $social_network ); ?>
					<?php 
					if ( $args['display_social_title'] ) { 
						?>
						<span class="xe-social-title">
							<?php echo xenial_get_social_networks_title( $social_network ); ?>
						</span>
						<?php 
					} 
					?>
				</a>
			</li>
			<?php
		}
		?>
	</ul>
</div><!-- // xe-header-element -->