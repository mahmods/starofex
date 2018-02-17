<?php
/**
 * Class for capability with Max Mega Menu
 */

namespace WPM\Includes\Integrations;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WPM_Megamenu
 * @package  WPM/Includes/Integrations
 * @category Integrations
 * @author   Valentyn Riaboshtan
 */
class WPM_Megamenu {

	/**
	 * WPM_Megamenu constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'add_language_switcher' ), 11 );
	}


	/**
	 * Add language switcher
	 *
	 * @param $hook
	 */
	public function add_language_switcher( $hook ) {

		if ( count( wpm_get_languages() ) <= 1 || ( 'mega-menu_page_maxmegamenu_theme_editor' !== $hook ) ) {
			return;
		}

		add_action( 'admin_print_footer_scripts', 'wpm_admin_language_switcher' );

		wpm_enqueue_js( "
			(function ( $ ) {
			    if ($('#wpm-language-switcher').length === 0) {
					var language_switcher = wp.template( 'wpm-ls' );
					$('#wpbody-content .megamenu_outer_wrap').first().prepend(language_switcher);
			    }
			})( window.jQuery );
		" );
	}
}
