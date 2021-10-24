<?php
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_SlimSelect_Control extends WP_Customize_Control {

		/**
		 * The type of control being rendered
		 */
		public $type = 'xenial-slimselect-dropdown';

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/select2/';

			$select_asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

			wp_enqueue_style(
				'slimselect',
				$select_asset_uri . 'css/slimselect.min.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-slimselect-control',
				XENIAL_THEME_URI . '/customizer/controls/slimselect/slimselect-control.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				'slimselect',
				$select_asset_uri . 'js/slimselect.min.js',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-slimselect-control',
				XENIAL_THEME_URI . '/customizer/controls/slimselect/slimselect-control.js',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);
		}
		
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			$attrs = array(
				'multiselect' => ( isset( $this->input_attrs['multiselect'] ) && $this->input_attrs['multiselect'] ) ? true : false,
				'showsearch' => ( isset( $this->input_attrs['showsearch'] ) && $this->input_attrs['showsearch'] ) ? true : false
			);

			if ( $this->label ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php
			}
			?>
			<select name="slimselect-<?php echo esc_attr( $this->id ); ?>" id="slimselect-<?php echo esc_attr( $this->id ); ?>" <?php echo ( $attrs['multiselect'] ) ? 'multiple' : ''; ?> <?php echo ( $attrs['multiselect'] ) ? 'data-showsearch="enable"' : 'data-showsearch="disable"'; ?> <?php $this->link(); ?>>
				<?php if ( $this->choices ) {
					$saved_values = $this->value();
					if ( $attrs['multiselect'] ) {
						foreach ( $this->choices as $value => $label ) {
							?>
							<option value="<?php echo esc_attr( $value ); ?>" <?php if ( $saved_values ) { selected( in_array( $value, $saved_values ) ); } ?>><?php echo esc_html( $label ); ?></option>
							<?php
						}
					} else {
						$saved_value = $this->value();
						foreach ( $this->choices as $value => $label ) {
							?>
							<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $saved_value ); ?>><?php echo esc_html( $label ); ?></option>
							<?php
						}
					}					
				} ?>
			</select>
			<?php
			if ( $this->description ) {
				?>
				<span class="description customize-control-description">
					<?php echo wp_kses_post( $this->description ); ?>
				</span>
				<?php
			}
		}
	}