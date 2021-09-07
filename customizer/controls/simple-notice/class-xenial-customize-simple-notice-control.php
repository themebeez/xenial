<?php
/**
 * Simple Notice Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_Simple_Notice_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'simple-notice';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = MAXIMO_THEME_URI . '/customizer/controls/simple-notice/';

		wp_enqueue_style( 
			MAXIMO_THEME_SLUG . '-simple-notice',
			$asset_uri . 'simple-notice.css', 
			null, 
			MAXIMO_THEME_VERSION 
		);
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		$allowed_html = array(
			'a' => array(
				'href' => array(),
				'title' => array(),
				'class' => array(),
				'target' => array(),
			),
			'br' => array(),
			'em' => array(),
			'strong' => array(),
			'i' => array(
				'class' => array()
			),
			'span' => array(
				'class' => array(),
			),
			'code' => array(),
		);
		?>
		<div class="simple-notice-custom-control">
			<?php 
			if( !empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php 
			} 

			if( !empty( $this->description ) ) { 
				?>
				<span class="customize-control-description"><?php echo wp_kses( $this->description, $allowed_html ); ?></span>
				<?php 
			} 
			?>
		</div>
		<?php
	}
}