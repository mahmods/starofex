<?php
/**
 * Languages
 *
 * @author   Valentyn Riaboshtan
 * @category      Admin
 * @package       WPM/Admin/Meta Boxes
 */

namespace WPM\Includes\Admin\Meta_Boxes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * WPM_Meta_Box_Languages Class.
 */
class WPM_Meta_Box_Languages {

	/**
	 * Output the metabox.
	 *
	 * @param \WP_Post $post
	 */
	public static function output( $post ) {
		$post_languages = get_post_meta( $post->ID, '_languages', true );

		if ( ! is_array( $post_languages ) ) {
			$post_languages = array();
		}

		$languages = wpm_get_languages();
		$i         = 0;
		?>
		<h4><?php _e( 'Show post only in:', 'wp-multilang' ); ?></h4>
		<ul class="languagechecklist">
			<?php foreach ( $languages as $lang => $language ) { ?>
				<li>
					<label>
						<input type="checkbox" name="wpm_languages[<?php esc_attr_e( $i ); ?>]" id="wpm-languages-<?php echo $lang; ?>" value="<?php esc_attr_e( $lang ); ?>"<?php checked( in_array( $lang, $post_languages ) ); ?>>
						<?php esc_attr_e( $language['name'] ); ?>
					</label>
				</li>
				<?php $i++; } ?>
		</ul>
		<?php
		wp_nonce_field( 'wpm_save_data', 'wpm_meta_nonce' );
	}

	/**
	 * Save meta box data.
	 *
	 * @param int $post_id
	 */
	public static function save( $post_id ) {
		if ( $languages = wpm_get_post_data_by_key( 'wpm_languages' ) ) {
			update_post_meta( $post_id, '_languages', $languages );
		} else {
			delete_post_meta( $post_id, '_languages' );
		}
	}
}
