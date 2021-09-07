<?php
/**
 * Sortable Pill Checkbox Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_Sortable_Checkbox_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'sortable-checkbox';
	/**
	 * Define whether the pills can be sorted using drag 'n drop. Either false or true. Default = false
	 */
	private $sortable = false;
	/**
	 * The width of the pills. Each pill can be auto width or full width. Default = false
	 */
	private $fullwidth = false;
	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
		// Check if these pills are sortable
		if ( isset( $this->input_attrs['sortable'] ) && $this->input_attrs['sortable'] ) {
			$this->sortable = true;
		}
		// Check if the pills should be full width
		if ( isset( $this->input_attrs['fullwidth'] ) && $this->input_attrs['fullwidth'] ) {
			$this->fullwidth = true;
		}
	}		

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = MAXIMO_THEME_URI . '/customizer/controls/sortable-checkbox/';

		wp_enqueue_script( 
			MAXIMO_THEME_SLUG . '-sortable-checkbox',
			$asset_uri . 'sortable-checkbox.js', 
			array( 'jquery', 'jquery-ui-core' ), 
			MAXIMO_THEME_VERSION, 
			true 
		);

		wp_enqueue_style( 
			MAXIMO_THEME_SLUG . '-sortable-checkbox',
			$asset_uri . 'sortable-checkbox.css', 
			null, 
			MAXIMO_THEME_VERSION 
		);
	}
	
	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		$saved_values = '';

		$reordered_choices = array();

		$saved_choices = $this->value();

		if ( ! is_array( $saved_choices ) ) {
			$saved_choices = explode( ',', esc_attr( $this->value() ) );
		} else {
			$saved_values = implode(',', $saved_choices);
		}

		// Order the checkbox choices based on the saved order
		if( $this->sortable ) {
			foreach ( $saved_choices as $key => $value ) {
				if( isset( $this->choices[$value] ) ) {
					$reordered_choices[$value] = $this->choices[$value];
				}
			}
			$reordered_choices = array_merge( $reordered_choices, array_diff_assoc( $this->choices, $reordered_choices ) );
		} else {
			$reordered_choices = $this->choices;
		}
		?>
		<div class="sortable-checkbox_control">
			<?php if( !empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if( !empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>
			<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $saved_values ); ?>" class="customize-control-sortable-checkbox" <?php $this->link(); ?> />
			<div class="sortable_pills<?php echo ( $this->sortable ? ' sortable' : '' ) . ( $this->fullwidth ? ' fullwidth_pills' : '' ); ?>">
			<?php foreach ( $reordered_choices as $key => $value ) { ?>
				<label class="checkbox-label">
					<input type="checkbox" name="<?php echo esc_attr( $key ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php checked( in_array( esc_attr( $key ), $saved_choices, true ), true ); ?> class="sortable-pill-checkbox"/>
					<span class="sortable-pill-title"><?php echo esc_attr( $value ); ?></span>
					<?php if( $this->sortable && $this->fullwidth ) { ?>
						<span class="dashicons dashicons-sort"></span>
					<?php } ?>
				</label>
			<?php	} ?>
			</div>
		</div>
	<?php
	}
}