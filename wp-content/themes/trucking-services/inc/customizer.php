<?php
/**
 * Space Exploration: Customizer
 *
 * @subpackage Space Exploration
 * @since 1.0
 */

 function trucking_services_upgrade_pro_options( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customize-controls.css');

	$wp_customize->add_section(
		'upgrade_premium',
		array(
			'title'    => esc_html__( 'About Trucking Services', 'trucking-services' ),
			'priority' => 1,
		)
	);

	class Trucking_Services_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
					<li><a class="upgrade-to-pro pro-btn" href="<?php echo esc_url( TRUCKING_SERVICES_PREMIUM_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade Pro', 'trucking-services' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( TRUCKING_SERVICES_PRO_DEMO ); ?>" target="_blank"><i class="dashicons dashicons-awards"></i><?php esc_html_e( 'Premium Demo', 'trucking-services' ); ?> </a></li>
					
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( TRUCKING_SERVICES_REVIEW ); ?>" target="_blank"><i class="dashicons dashicons-star-filled"></i><?php esc_html_e( 'Rate Us', 'trucking-services' ); ?> </a></li>
					
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( TRUCKING_SERVICES_SUPPORT ); ?>" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php esc_html_e( 'Support Forum', 'trucking-services' ); ?> </a></li>	
					
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( TRUCKING_SERVICES_THEME_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-admin-appearance"></i><?php esc_html_e( 'Theme Page', 'trucking-services' ); ?> </a></li>
				
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( TRUCKING_SERVICES_THEME_DOCUMENTATION ); ?>" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Theme Documentation', 'trucking-services' ); ?> </a></li>
				</ul>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'trucking_services_sanitize_text',
		)
	);

	$wp_customize->add_control(
		new Trucking_Services_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'upgrade_premium',
			)
		)
	);
}
add_action( 'customize_register', 'trucking_services_upgrade_pro_options' );