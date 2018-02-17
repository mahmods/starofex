<?php
/**
 * WPM Admin
 *
 * @class      WPM_Admin
 * @category   Admin
 * @package    WPM/Includes/Admin
 */

namespace WPM\Includes\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * WPM_Admin class.
 */
class WPM_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'includes' ) );
		add_action( 'admin_init', array( $this, 'buffer' ), 1 );
		add_action( 'admin_init', array( $this, 'set_edit_lang' ) );
		add_action( 'admin_footer', 'wpm_print_js', 25 );
	}

	/**
	 * Output buffering allows admin screens to make redirects later on.
	 */
	public function buffer() {
		ob_start();
	}

	/**
	 * Include any classes we need within admin.
	 */
	public function includes() {
		include_once( dirname( __FILE__ ) . '/wpm-admin-functions.php' );

		new WPM_Admin_Menus();
		new WPM_Admin_Edit_Menus();
		new WPM_Admin_Customizer();
		if ( ! WPM_Admin_Notices::get_notices() ) {
			WPM_Admin_Notices::init();
		}
		new WPM_Admin_Posts();
		new WPM_Admin_Taxonomies();
		new WPM_Admin_Settings();
		new WPM_Admin_Widgets();
		new WPM_Admin_Assets();
		new WPM_Admin_Qtranslate();
	}

	/**
	 * Set edit lang
	 */
	public function set_edit_lang() {
		$user_id = get_current_user_id();

		if ( isset( $_GET['edit_lang'] ) || ! get_user_meta( $user_id, 'edit_lang', true ) ) {
			update_user_meta( $user_id, 'edit_lang', wpm_get_language() );
		}
	}
}
