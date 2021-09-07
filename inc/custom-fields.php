<?php
/**
 * Class for creating custom meta fields for page and post.
 *
 * @package Xenial
 */

if( ! class_exists( 'Xenial_Custom_Fields' ) ) :

	class Xenial_Custom_Fields {

		public function __construct() {

			// Register post meta fields and save meta fields values.
			add_action( 'admin_init', array( $this, 'register_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_theme_post_meta' ) );
		}

		/**
		 * Register post custom meta fields.
		 *
		 * @since    1.0.0
		 */
		public function register_post_meta() {   

		    add_meta_box( 
		    	'theme_post_meta', 
		    	__( 'Post Options', 'xenial' ), 
		    	array( $this, 'theme_post_meta_template' ), 
		    	array( 'post', 'page' ), 
		    	'side', 
		    	'default' 
		    );
		}

		/**
		 * Custom Sidebar Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function theme_post_meta_template() {

			global $post;

			$sidebar_position = get_post_meta( $post->ID, 'xenial_post_sidebar_position', true );

			$content_layout = get_post_meta( $post->ID, 'xenial_post_content_layout', true );

			$disable_default_header = get_post_meta( $post->ID, 'xenial_post_disable_default_header', true );

			$disable_default_footer = get_post_meta( $post->ID, 'xenial_post_disable_default_footer', true );

			$disable_breadcrumb = get_post_meta( $post->ID, 'xenial_post_disable_breadcrumb', true );

			$disable_tranparent_header = get_post_meta( $post->ID, 'xenial_post_disable_transparent_header', true );

			$disable_page_header = get_post_meta( $post->ID, 'xenial_post_disable_page_header', true );

			$disable_featured_img = get_post_meta( $post->ID, 'xenial_post_disable_featured_image', true );

		    wp_nonce_field( 'xenial_post_meta_nonce', 'xenial_post_meta_nonce_id' );

		    $sidebar_choices = array(
		    	'default' => __( 'Default (From Customizer)', 'xenial' ),
		        'right-sidebar' => esc_html__( 'Right', 'xenial' ),
		        'left-sidebar' => esc_html__( 'Left', 'xenial' ),
		        'no-sidebar' => esc_html__( 'Fullwidth', 'xenial' ),
		    );

		    $content_layout_choices = array(
		    	'default' => __( 'Default (From Customizer)', 'xenial' ),
		        'xenial-fullwidth-contained' => __( 'Fullwidth: Contained', 'xenial' ),
				'xenial-fullwidth-stretched' => __( 'Fullwidth: Stretched', 'xenial' ),
				'xenial-boxed-contain' => __( 'Boxed: Contain', 'xenial' ),
				'xenial-boxed' => __( 'Boxed', 'xenial' ),
		    );
		    ?>
		    <table width="100%" border="0" class="options" cellspacing="5" cellpadding="5">
		        <tr>
		        	<td>
		        		<label for="xenial-sidebar-position-meta"><?php echo __( 'Sidebar Position', 'xenial' ); ?></label>
			        	<select name="xenial-sidebar-position-meta" id="xenial-sidebar-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $sidebar_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $sidebar_position, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-content-layout-position-meta"><?php echo __( 'Content Layout', 'xenial' ); ?></label>
			        	<select name="xenial-content-layout-position-meta" id="xenial-content-layout-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $content_layout_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $content_layout, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-default-header-meta">
		        			<input type="checkbox" name="xenial-default-header-meta" id="xenial-default-header-meta" <?php checked( $disable_default_header, true ); ?>>
		        			<?php echo __( 'Disable Default Header', 'xenial' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-default-footer-meta">
		        			<input type="checkbox" name="xenial-default-footer-meta" id="xenial-default-footer-meta" <?php checked( $disable_default_footer, true ); ?>>
		        			<?php echo __( 'Disable Default Footer', 'xenial' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-breadcrumb-meta">
		        			<input type="checkbox" name="xenial-breadcrumb-meta" id="xenial-breadcrumb-meta" <?php checked( $disable_breadcrumb, true ); ?>>
		        			<?php echo __( 'Disable Breadcrumb', 'xenial' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-transparent-header-meta">
		        			<input type="checkbox" name="xenial-transparent-header-meta" id="xenial-transparent-header-meta" <?php checked( $disable_tranparent_header, true ); ?>>
		        			<?php echo __( 'Disable Transparent Header', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-page-header-meta">
		        			<input type="checkbox" name="xenial-page-header-meta" id="xenial-page-header-meta" <?php checked( $disable_page_header, true ); ?>>
		        			<?php echo __( 'Disable Page Header', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-featured-img-meta">
		        			<input type="checkbox" name="xenial-featured-img-meta" id="xenial-featured-img-meta" <?php checked( $disable_featured_img, true ); ?>>
		        			<?php echo __( 'Disable Featured Image', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr> 
		    </table>   
		    <?php   
		}

		/**
		 * Save Custom Sidebar Position Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function save_theme_post_meta() {

		    global $post;  

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['xenial_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['xenial_post_meta_nonce_id'] ), 'xenial_post_meta_nonce' ) ) {

		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post->ID ) ) {

		        return;
		    } 

		    if ( isset( $_POST['xenial-sidebar-position-meta'] ) ) {

				update_post_meta( $post->ID, 'xenial_post_sidebar_position', sanitize_text_field( wp_unslash( $_POST['xenial-sidebar-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-content-layout-position-meta'] ) ) {

				update_post_meta( $post->ID, 'xenial_post_content_layout', sanitize_text_field( wp_unslash( $_POST['xenial-content-layout-position-meta'] ) ) ); 
			}

			update_post_meta( $post->ID, 'xenial_post_disable_default_header', ( ( isset( $_POST['xenial-default-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'xenial_post_disable_default_footer', ( ( isset( $_POST['xenial-default-footer-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'xenial_post_disable_breadcrumb', ( ( isset( $_POST['xenial-breadcrumb-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'xenial_post_disable_transparent_header', ( ( isset( $_POST['xenial-transparent-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'xenial_post_disable_page_header', ( ( isset( $_POST['xenial-page-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'xenial_post_disable_featured_image', ( ( isset( $_POST['xenial-featured-img-meta']  ) ) ? true : false ) );
		}
	}
endif;

$xenial_custom_fields = new Xenial_Custom_Fields();