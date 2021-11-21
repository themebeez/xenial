<?php
/**
 * Sortable Selector Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */
class Xenial_Customize_Sortable_Selector_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'xenial-sortable-selector';

	/**
	 * Selector Options
	 */
	public $choices = array();

	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {

		parent::__construct( $manager, $id, $args );

		$this->choices = wp_parse_args( $this->choices, array() );
	}

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = XENIAL_THEME_URI . '/customizer/controls/sortable-selector/';

		wp_enqueue_script( 
			XENIAL_THEME_SLUG . '-sortable-selector',
			$asset_uri . 'sortable-selector.js', 
			array( 'jquery', 'jquery-ui-core' ), 
			XENIAL_THEME_VERSION, 
			true 
		);

		wp_enqueue_style( 
			XENIAL_THEME_SLUG . '-sortable-selector',
			$asset_uri . 'sortable-selector.css', 
			null, 
			XENIAL_THEME_VERSION 
		);
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		$sortable_elements = array();

		if ( $this->value() ) {
			$sortable_elements = explode( ',', $this->value() );
		}

		$choices = $this->choices;
		?>
	  	<div class="xenial-sortable-selector-control">
			<?php if( !empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if( !empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>	

			<div class="selector-select-add-wrapper">
				<select id="<?php echo esc_attr( $this->id ); ?>" class="sortable-selector-select">
					<?php 
					if ( $choices ) {
						foreach ( $choices as $value => $label ) {
							$disabled = '';

							if ( $sortable_elements && in_array( $value, $sortable_elements ) ) {
								$disabled = 'disabled="disabled"';
							}
							?>
							<option value="<?php echo esc_attr( $value ); ?>" data-label="<?php echo esc_attr( $label ); ?>" <?php echo $disabled; ?>><?php echo esc_html( $label ); ?></option>
							<?php
						} 
					} else { 
						?>
						<option value=""><?php echo esc_html__( 'Nothing To Select', 'xenial' ); ?></option>
						<?php 
					} 
					?>
				</select>
				<button class="button sortable-selector-input-add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"/></svg></button>
			</div>

			<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="sortable-selector-value customize-control-sortable-repeater" <?php $this->link(); ?> />
			<div class="sortable-elements-wrapper sortable_repeater sortable">
				<?php 
				if ( $sortable_elements ) {
					foreach ( $sortable_elements as $value ) {
						?>
						<div class="sortable-element">
							<input type="hidden" value="<?php echo esc_attr( $value ); ?>" class="sortable-selector-input" />
							<span class="item-label"><?php echo esc_html( $choices[$value] ); ?></span>
							<span class="sortable-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V5.828L9.172 7.657 7.757 6.243 12 2l4.243 4.243-1.415 1.414L13 5.828V11h5.172l-1.829-1.828 1.414-1.415L22 12l-4.243 4.243-1.414-1.415L18.172 13H13v5.172l1.828-1.829 1.415 1.414L12 22l-4.243-4.243 1.415-1.414L11 18.172V13H5.828l1.829 1.828-1.414 1.415L2 12l4.243-4.243 1.414 1.415L5.828 11z"/></svg></span>
							<a class="sortable-selector-input-delete" href="#">
								<span class="dashicons dashicons-no-alt"></span>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	<?php
	}
}