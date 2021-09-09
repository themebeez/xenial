<?php
/**
 * Toggle Switch Custom Control
 *
 * @author Mauricio Allende
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/soderlind/class-customizer-toggle-control
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_Toggle_Switch_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'ios';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = XENIAL_THEME_URI . '/customizer/controls/toggle-switch/';

		wp_enqueue_script( 
			XENIAL_THEME_SLUG . '-toggle-switch',
			$asset_uri . 'toggle-switch.js', 
			array( 'jquery' ), 
			XENIAL_THEME_VERSION, 
			true 
		);

		wp_enqueue_style( 
			XENIAL_THEME_SLUG . '-toggle-switch',
			$asset_uri . 'toggle-switch.css', 
			null, 
			XENIAL_THEME_VERSION 
		);

		$css = '
			input[type=checkbox].tgl-light:checked + .tgl-btn {
				background: #0085ba;
			}

			input[type=checkbox].tgl-light + .tgl-btn {
			  background: #a0a5aa;
			}

			input[type=checkbox].tgl-light + .tgl-btn:after {
			  background: #f7f7f7;
			}

			input[type=checkbox].tgl-ios:checked + .tgl-btn {
			  background: #0085ba;
			}

			input[type=checkbox].tgl-flat:checked + .tgl-btn {
			  border: 4px solid #0085ba;
			}
			
			input[type=checkbox].tgl-flat:checked + .tgl-btn:after {
			  background: #0085ba;
			}

		';

		wp_add_inline_style( 
			XENIAL_THEME_SLUG . '-toggle-switch', 
			$css 
		);

		
	}
	

	/**
	 * Render the control's content.
	 *
	 * @author soderlind
	 * @version 1.2.0
	 */
	public function render_content() {
		?>
		<label class="customize-toogle-label">
			<div style="display:flex;flex-direction: row;justify-content: flex-start;">
				<span class="customize-control-title" style="flex: 2 0 0; vertical-align: middle;"><?php echo esc_html( $this->label ); ?></span>
				<input id="cb<?php echo esc_attr( $this->instance_number ); ?>" type="checkbox" class="tgl tgl-<?php echo esc_attr( $this->type ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>
				 />
				<label for="cb<?php echo esc_attr( $this->instance_number ); ?>" class="tgl-btn"></label>
			</div>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
		</label>
		<?php
	}
}