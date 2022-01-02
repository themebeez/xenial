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

			$script_data = array(
				'enableSwitch' => $this->input_attrs['enable_switch']
			);

			wp_localize_script(
				XENIAL_THEME_SLUG . '-section-link',
				'xenialSectionLinkScriptData', 
				$script_data
			);
		}

		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			$switch_value = $this->value();

			$button_label = $this->input_attrs['button_label'];
			$section_link = $this->input_attrs['section_link'];

			$enable_switch = $this->input_attrs['enable_switch'];
			
			if ( $this->label ) {
				?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php
			}

			$wrapper_classes = array( 'xenial-section-link-control-wrapper', 'xenial-section-link-button' );

			if ( $enable_switch ) {
				$wrapper_classes[] = 'xenial-has-switch';
				if ( $switch_value ) {
					$wrapper_classes[] = 'xenial-switch-enabled';
				}
			} else {
				$wrapper_classes[] = 'xenial-has-no-switch';
			}

			if ( $button_label && $section_link ) {
				?>
				<div class="<?php echo esc_attr( implode( ' ', $wrapper_classes ) ); ?>" data-section="<?php echo esc_attr( $section_link ); ?>">
					<span class="xenial-section-link-label"><?php echo esc_html( $button_label ); ?></span>
					<div class="checkbox-and-icon-wrapper">
						<?php if ( $enable_switch ) { ?>
							<label class="switch">
							  	<input class="xenial-section-link-input-checkbox" type="checkbox" name="xenial-section-link-<?php echo esc_attr( $this->id ); ?>" value="" <?php $this->link(); ?> <?php checked( true, $this->value() ); ?>>
							  	<span class="slider round"></span>
							</label>
						<?php } ?>
						<span class="xenial-section-link-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12.172 12L9.343 9.172l1.414-1.415L15 12l-4.243 4.243-1.414-1.415z"/></svg></span>						
					</div>					
				</div>
				<?php
			}		
		}
	}
}