<?php
/**
 * Trucking Services functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Trucking Services
 * @since Trucking Services 1.0
 */

if ( ! function_exists( 'trucking_services_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function trucking_services_setup() {
	load_theme_textdomain( 'trucking-services', get_template_directory() . '/languages' );

	/**
	 * Load TGM.
	 */
	require get_template_directory() . '/inc/tgm/tgm.php';
	
	/**
	 * Notice.
	 */
	require_once get_template_directory() . '/inc/notice/notice.php';

	/**
	 * Theme Info Page.
	 */
	require get_template_directory() . '/inc/addon.php';

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';
}
endif;
add_action( 'after_setup_theme', 'trucking_services_setup' );

function trucking_services_block_assets(){
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '7.1.0' );
	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'trucking-services-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'));
	wp_enqueue_script('trucking-services-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_style_add_data( 'trucking-services-style', 'rtl', 'replace' );
}
add_action('enqueue_block_assets', 'trucking_services_block_assets');

function trucking_services_setup_theme() {
	if ( ! defined( 'TRUCKING_SERVICES_PREMIUM_PAGE' ) ) {
		define('TRUCKING_SERVICES_PREMIUM_PAGE',__('https://www.theclassictemplates.com/products/trucking-wordpress-theme','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_PRO_NAME' ) ) {
		define( 'TRUCKING_SERVICES_PRO_NAME', __( 'About Trucking Services', 'trucking-services' ));
	}
	if ( ! defined( 'TRUCKING_SERVICES_THEME_PAGE' ) ) {
		define('TRUCKING_SERVICES_THEME_PAGE',__('https://www.theclassictemplates.com/collections/best-wordpress-templates','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_SUPPORT' ) ) {
		define('TRUCKING_SERVICES_SUPPORT',__('https://wordpress.org/support/theme/trucking-services/','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_REVIEW' ) ) {
		define('TRUCKING_SERVICES_REVIEW',__('https://wordpress.org/support/theme/trucking-services/reviews/','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_PRO_DEMO' ) ) {
		define('TRUCKING_SERVICES_PRO_DEMO',__('https://live.theclassictemplates.com/trucking-services-pro/','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_THEME_DOCUMENTATION' ) ) {
		define('TRUCKING_SERVICES_THEME_DOCUMENTATION',__('https://live.theclassictemplates.com/demo/docs/trucking-services-free/','trucking-services'));
	}
	if ( ! defined( 'TRUCKING_SERVICES_BUNDLE_PAGE' ) ) {
		define('TRUCKING_SERVICES_BUNDLE_PAGE',__('https://www.theclassictemplates.com/products/wordpress-theme-bundle','trucking-services'));
	}
}
add_action('after_setup_theme', 'trucking_services_setup_theme');

function trucking_services_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('trucking-services-welcome-notice', get_template_directory_uri() . '/inc/notice/notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('trucking-services-welcome-notice', 'trucking_services_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('trucking_services_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('trucking_services_welcome_nonce'), 
        'redirect_url' => admin_url('themes.php?page=trucking-services')
    ));
}
add_action('admin_enqueue_scripts', 'trucking_services_enqueue_admin_script');