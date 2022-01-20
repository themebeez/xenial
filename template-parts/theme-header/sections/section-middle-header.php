<?php 
 
?>
<div class="xe-middle-header">
	<div class="<?php echo esc_attr( implode( ' ', $args['container_classes'] ) ); ?>">
		<div class="xe-header-inner">
			<div class="xe-flex xe-grid xe-grid-columns-three xe-flex-center">
				<?php 
				if ( $args['left_column']['elements'] ) { 
					?>
					<div class="xe-column xe-flex-alt xe-justify-start xe-left-column">
						<?php
						xenial_header_column_inner_wrapper_begin_template( $args['left_column']['elements'] );
						foreach ( $args['left_column']['elements'] as $element ) {

							xenial_print_header_element( $element );
						}
						xenial_header_column_inner_wrapper_end_template( $args['left_column']['elements'] );
						?>	
					</div><!-- // col -->
					<?php 
				}

				if ( $args['middle_column']['elements'] ) {
					?>
					<div class="xe-column xe-flex-alt xe-flex-center xe-justify-center xe-middle-column">
						<?php 
						
						xenial_header_column_inner_wrapper_begin_template( $args['middle_column']['elements'] );
						foreach ( $args['middle_column']['elements'] as $element ) {

							xenial_print_header_element( $element );
						}
						xenial_header_column_inner_wrapper_end_template( $args['middle_column']['elements'] );
						?>
					</div><!-- // xe-column -->
					<?php 
				}

				if ( $args['right_column']['elements'] ) {
					?>
					<div class="xe-column xe-flex-alt xe-flex-center xe-justify-end xe-right-column">
						<?php
						xenial_header_column_inner_wrapper_begin_template( $args['right_column']['elements'] );
						foreach ( $args['right_column']['elements'] as $element ) {

							xenial_print_header_element( $element );
						}
						xenial_header_column_inner_wrapper_end_template( $args['right_column']['elements'] );
						?>
					</div><!-- // col -->
					<?php
				}
				?>
			</div><!-- // xe-flex -->
		</div><!-- // xe-header-inner -->
	</div><!-- // xe-container -->
</div><!-- // xe-middle-header -->