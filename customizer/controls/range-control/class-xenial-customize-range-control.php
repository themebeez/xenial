<?php
/**
 * Slider Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {

	return;
}

class Xenial_Customize_Range_Control extends WP_Customize_Control {

	/**
	 * The type of control being rendered
	 */
	public $type = 'slider_control';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = MAXIMO_THEME_URI . '/customizer/controls/range-control/';

		wp_enqueue_style(
			MAXIMO_THEME_SLUG . '-range-control',
			$asset_uri . 'range-control.css',
			null,
			MAXIMO_THEME_VERSION,
			'all'
		);

		wp_enqueue_script(
			MAXIMO_THEME_SLUG . '-range-control',
			$asset_uri . 'range-control.js',
			array('jquery', 'jquery-ui-core'),
			MAXIMO_THEME_VERSION,
			'all'
		);
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {
	?>
		<div class="slider-custom-control">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
			<div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
		</div>
	<?php
	}
}