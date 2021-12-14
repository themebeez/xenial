<?php 


?>
<div class="xe-header-element is-social">
	<ul class="xe-header-element-social">
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