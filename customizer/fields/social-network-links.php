<?php 


$xenialSocialNewtworks = xenial_get_social_networks();

if ( $xenialSocialNewtworks ) {

	xenial_section_field( 
		'xenial_social_network_links',
		[
			'priority' => 10,
			'panel' => 'xenial_general_panel',
			'title' => esc_html__( 'Social Network Links', 'xenial' )
		]
	);

	foreach ( $xenialSocialNewtworks as $key => $label ) {

		$customize_id = $key . '_link';

		xenial_url_field(
			$customize_id,
			array(
				'priority' => 10,
				'section' => 'xenial_social_network_links',
				'label' => esc_html( $label ),
				'default' => ''
			)
		);
	}
}