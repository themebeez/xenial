<?php
/**
 * Info custom control
 *
 * @package WordPress
 * @subpackage inc/customizer
 * @version 1.1.0
 * @author  Denis Žoljom <http://madebydenis.com/>
 * @license https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link https://github.com/dingo-d/wordpress-theme-customizer-extra-custom-controls
 * @since  1.0.0
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_Info_Control extends WP_Customize_Control {

	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'info';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = XENIAL_THEME_URI . '/customizer/controls/info/';

		wp_enqueue_style(
			XENIAL_THEME_SLUG . '-info',
			$asset_uri . 'info.css',
			null,
			XENIAL_THEME_VERSION,
			'all'
		);
	}

	/**
	 * Control method
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		
		?>
		<div class="customize-control-info-wrapper">
			<div class="customize-control-info-wrapper-inner">
				<div class="customize-control-info-title-desc-wrapper">
					<span class="customize-control-info-title"><?php echo esc_html( $this->label ); ?></span>
					<?php
					if( $this->description ) {
						?>
						<p><?php echo esc_html( $this->description ); ?></p>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<?php
	}
}