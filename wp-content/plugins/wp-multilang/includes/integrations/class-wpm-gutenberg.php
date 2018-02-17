<?php
/**
 * Class for capability with Gutenberg editor
 */

namespace WPM\Includes\Integrations;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WPM_Gutenberg
 * @package  WPM/Includes/Integrations
 * @category Integrations
 * @author   Valentyn Riaboshtan
 */
class WPM_Gutenberg {

	/**
	 * WPM_Gutenberg constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'add_language_switcher' ), 11 );
	}


	/**
	 * Translate some field without PHP filters by javascript for displaying
	 */
	public function add_language_switcher() {
		$screen       = get_current_screen();
		$screen_id    = $screen ? $screen->id : '';

		if ( is_null( $screen ) || ! $screen->post_type || is_null( wpm_get_post_config( $screen->post_type ) ) || ( $screen_id !== $screen->post_type ) ) {
			return;
		}

		if ( count( wpm_get_languages() ) <= 1 ) {
			return;
		}

		add_action( 'admin_print_footer_scripts', 'wpm_admin_language_switcher_customizer' );

		wp_add_inline_script( 'wp-editor', "
			(function( $ ) {
			  'use strict';
			  
			  $(function() {
				wp.api.init().done( function() {
				if ($('#wpm-language-switcher').length === 0) {
				      var language_switcher = wp.template( 'wpm-ls-customizer' );
				      $('.editor-header-toolbar').prepend(language_switcher);
				    }
			    });
			    
			    $(document).on('click', '#wpm-language-switcher .lang-dropdown a', function(){
			        var switch_lang_url = $(this).attr('href'),
			            current_request = $(location)[0].href;
			        if ( (switch_lang_url.search(/(post=)/i) == -1) && (current_request.search(/(post=)/i) !== -1)) {
			            $(this).attr('href', current_request + '&edit_lang=' + $(this).data('lang'));
			        }
			    });
			  });
			})( jQuery, wp );
		");
	}
}
