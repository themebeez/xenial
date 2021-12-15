<?php 


if ( ! class_exists( 'Xenial_Customize_Section_Link_Control' ) ) {

	class Xenial_Customize_Section_Link_Control extends WP_Customize_Control {


		/**
		 * Control type
		 *
		 * @var string
		 */
		public $type = 'xenial-section-link';

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/section-link/';

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-section-link',
				$asset_uri . 'section-link.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-section-link',
				$asset_uri . 'section-link.js',
				array(),
				XENIAL_THEME_VERSION,
				true
			);
		}

		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			$button_label = isset( $this->input_attrs['button_label'] ) ? $this->input_attrs['button_label'] : '';
			$section_link = isset( $this->input_attrs['section_link'] ) ? $this->input_attrs['section_link'] : '';
			
			if ( $this->label ) {
				?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php
			}

			if ( $button_label && $section_link ) {
				?>
				<button id="xenial-section-link-button-<?php echo esc_attr( $this->id ); ?>" class="xenial-section-link-button" data-section="<?php echo esc_attr( $section_link ); ?>">
					<?php echo esc_html( $button_label ); ?>
					<span class="xenial-section-link-button-icon">
						<span class="dashicons dashicons-arrow-right-alt2"></span>
					</span>
				</button>
				<?php
			}		
		}
	}
}