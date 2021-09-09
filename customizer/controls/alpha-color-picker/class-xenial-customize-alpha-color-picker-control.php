<?php
/**
 * Alpha Color Picker Custom Control
 *
 * @author Braad Martin <http://braadmartin.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 * @link https://github.com/BraadMartin/components/tree/master/customizer/alpha-color-picker
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

class Xenial_Customize_Alpha_Color_Picker_Control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'xenial-alpha-color';

		/**
		 * Add support for palettes to be passed in.
		 *
		 * Supported palette values are true, false, or an array of RGBa and Hex colors.
		 */
		public $palette;

		/**
		 * Add support for showing the opacity value on the slider handle.
		 */
		public $show_opacity;

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/alpha-color-picker/';

			wp_enqueue_style( 'wp-color-picker' );

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-alpha-color-picker',
				$asset_uri . 'alpha-color-picker.css',
				array('wp-color-picker'),
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script( 'wp-color-picker' );

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-alpha-color-picker',
				$asset_uri . 'alpha-color-picker.js',
				array('jquery', 'wp-color-picker'),
				XENIAL_THEME_VERSION,
				true
			);
		}

		
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			// Process the palette
			if ( is_array( $this->palette ) ) {
				$palette = implode( '|', $this->palette );
			} else {
				// Default to true.
				$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
			}

			// Support passing show_opacity as string or boolean. Default to true.
			$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

			?>
			<label>
				<?php // Output the label and description if they were passed in.
				if ( isset( $this->label ) && '' !== $this->label ) {
					echo '<span class="customize-control-title">' . sanitize_text_field( $this->label ) . '</span>';
				}
				if ( isset( $this->description ) && '' !== $this->description ) {
					echo '<span class="description customize-control-description">' . sanitize_text_field( $this->description ) . '</span>';
				} ?>
			</label>
			<input class="alpha-color-control" type="text" data-show-opacity="<?php echo esc_attr( $show_opacity ); ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
			<?php
		}
	}