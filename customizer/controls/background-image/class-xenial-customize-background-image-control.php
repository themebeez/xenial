<?php
/**
 * Customize API: Xenial_Customize_Background_Image_Control class
 *
 * 
 * @since 1.0.0
 */

/**
 * Xenial Customize Custom Background Control class.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Upload_Control
 */
class Xenial_Customize_Background_Image_Control extends WP_Customize_Upload_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'xenial-background-image';

	/**
	 * Mime type for upload control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $mime_type = 'image';

	/**
	 * Labels for upload control buttons.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    array
	 */
	public $button_labels = array();

	/**
	 * Field labels
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    array
	 */
	public $field_labels = array();

	/**
	 * Background choices for the select fields.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    array
	 */
	public $background_choices = array();

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 * @uses WP_Customize_Upload_Control::esc_html__construct()
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      Control ID.
	 * @param array                $args    Optional. Arguments to override class property defaults.
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Calls the parent esc_html__construct
		parent::__construct( $manager, $id, $args );

		// Set button labels for image uploader
		$button_labels = $this->get_button_labels();
		$this->button_labels = apply_filters( 'customizer_background_button_labels', $button_labels, $id );

		// Set field labels
		$field_labels = $this->get_field_labels();
		$this->field_labels = apply_filters( 'customizer_background_field_labels', $field_labels, $id );

		// Set background choices
		$background_choices = $this->get_background_choices();
		$this->background_choices = apply_filters( 'customizer_background_choices', $background_choices, $id );

	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {

		parent::enqueue();

		$asset_uri = XENIAL_THEME_URI . '/customizer/controls/background-image/';

		wp_enqueue_script(
			XENIAL_THEME_SLUG . '-background-image',
			$asset_uri . 'background-image.js',
			array( 'customize-controls' ),
			XENIAL_THEME_VERSION,
			'all'
		);

	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {

		parent::to_json();

		$background_choices = $this->background_choices;
		$field_labels = $this->field_labels;

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $field_labels[ $setting_key ] ) ? $field_labels[ $setting_key ] : ''
			);

			if ( 'image_url' === $setting_key ) {
				if ( $this->value( $setting_key ) ) {
					// Get the attachment model for the existing file.
					$attachment_id = attachment_url_to_postid( $this->value( $setting_key ) );
					if ( $attachment_id ) {
						$this->json['attachment'] = wp_prepare_attachment_for_js( $attachment_id );
					}
				}
			}
			elseif ( 'repeat' === $setting_key ) {
				$this->json[ $setting_key ]['choices'] = $background_choices['repeat'];
			}
			elseif ( 'size' === $setting_key ) {
				$this->json[ $setting_key ]['choices'] = $background_choices['size'];
			}
			elseif ( 'position' === $setting_key ) {
				$this->json[ $setting_key ]['choices'] = $background_choices['position'];
			}
			elseif ( 'attachment' === $setting_key ) {
				$this->json[ $setting_key ]['choices'] = $background_choices['attachment'];
			}
		}

	}

	/**
	 * Render a JS template for the content of the media control.
	 *
	 * @since 1.0.0
	 */
	public function content_template() {

		parent::content_template();
		?>

		<div class="background-image-fields">
		<# if ( data.attachment && data.repeat && data.repeat.choices ) { #>
			<li class="background-image-repeat">
				<# if ( data.repeat.label ) { #>
					<span class="customize-control-title">{{ data.repeat.label }}</span>
				<# } #>
				<select {{{ data.repeat.link }}}>
					<# _.each( data.repeat.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.repeat.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>
				</select>
			</li>
		<# } #>

		<# if ( data.attachment && data.size && data.size.choices ) { #>
			<li class="background-image-size">
				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }}</span>
				<# } #>
				<select {{{ data.size.link }}}>
					<# _.each( data.size.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.size.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>
				</select>
			</li>
		<# } #>

		<# if ( data.attachment && data.position && data.position.choices ) { #>
			<li class="background-image-position">
				<# if ( data.position.label ) { #>
					<span class="customize-control-title">{{ data.position.label }}</span>
				<# } #>
				<select {{{ data.position.link }}}>
					<# _.each( data.position.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.position.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>
				</select>
			</li>
		<# } #>

		<# if ( data.attachment && data.attachment && data.attachment.choices ) { #>
			<li class="background-image-attach">
				<# if ( data.attachment.label ) { #>
					<span class="customize-control-title">{{ data.attachment.label }}</span>
				<# } #>
				<select {{{ data.attachment.link }}}>
					<# _.each( data.attachment.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.attachment.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>
				</select>
			</li>
		<# } #>

		</div>

		<?php
	}

	/**
	 * Returns button labels.
	 *
	 * @since 1.0.0
	 */
	public static function get_button_labels() {

		$button_labels = array(
			'select'       => esc_html__( 'Select Image', 'xenial' ),
			'change'       => esc_html__( 'Change Image', 'xenial' ),
			'remove'       => esc_html__( 'Remove', 'xenial' ),
			'default'      => esc_html__( 'Default', 'xenial' ),
			'placeholder'  => esc_html__( 'No image selected', 'xenial' ),
			'frame_title'  => esc_html__( 'Select Image', 'xenial' ),
			'frame_button' => esc_html__( 'Choose Image', 'xenial' ),
		);

		return $button_labels;

	}

	/**
	 * Returns field labels.
	 *
	 * @since 1.0.0
	 */
	public static function get_field_labels() {

		$field_labels = array(
			'repeat'		=> esc_html__( 'Background Repeat', 'xenial' ),
			'size'			=> esc_html__( 'Background Size', 'xenial' ),
			'position'		=> esc_html__( 'Background Position', 'xenial' ),
			'attachment'	=> esc_html__( 'Background Attachment', 'xenial' )
		);

		return $field_labels;

	}

	/**
	 * Returns the background choices.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_background_choices() {

		$choices = array(
			'repeat' => array(
				'no-repeat' => esc_html__( 'No Repeat', 'xenial' ),
				'repeat'    => esc_html__( 'Tile', 'xenial' ),
				'repeat-x'  => esc_html__( 'Tile Horizontally', 'xenial' ),
				'repeat-y'  => esc_html__( 'Tile Vertically', 'xenial' )
			),
			'size' => array(
				'auto'    => esc_html__( 'Default', 'xenial' ),
				'cover'   => esc_html__( 'Cover', 'xenial' ),
				'contain' => esc_html__( 'Contain', 'xenial' )
			),
			'position' => array(
				'left-top'      => esc_html__( 'Left Top', 'xenial' ),
				'left-center'   => esc_html__( 'Left Center', 'xenial' ),
				'left-bottom'   => esc_html__( 'Left Bottom', 'xenial' ),
				'right-top'     => esc_html__( 'Right Top', 'xenial' ),
				'right-center'  => esc_html__( 'Right Center', 'xenial' ),
				'right-bottom'  => esc_html__( 'Right Bottom', 'xenial' ),
				'center-top'    => esc_html__( 'Center Top', 'xenial' ),
				'center-center' => esc_html__( 'Center Center', 'xenial' ),
				'center-bottom' => esc_html__( 'Center Bottom', 'xenial' )
			),
			'attachment' => array(
				'fixed'   => esc_html__( 'Fixed', 'xenial' ),
				'scroll'  => esc_html__( 'Scroll', 'xenial' )
			)
		);

		return $choices;

	}

}