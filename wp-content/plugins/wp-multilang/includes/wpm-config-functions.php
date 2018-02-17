<?php
/**
 * Config functions
 *
 * @author   Valentyn Riaboshtan
 */

use WPM\Includes\WPM_Setup;

/**
 * Get config
 *
 * @see WPM_Setup::get_config()
 *
 * @return array
 */
function wpm_get_config() {
	return WPM_Setup::instance()->get_config();
}

/**
 * Get post type config
 *
 * @param $post_type
 *
 * @return array
 */
function wpm_get_post_config( $post_type ) {
	$config       = wpm_get_config();
	$posts_config = apply_filters( 'wpm_posts_config', $config['post_types'] );
	$post_config  = apply_filters( "wpm_post_{$post_type}_config", isset( $posts_config[ $post_type ] ) ? $posts_config[ $post_type ] : null );

	if ( ! is_null( $post_config ) ) {
		$default_fields = array(
			'post_title'   => array(),
			'post_excerpt' => array(),
			'post_content' => array(),
		);

		$post_config = wpm_array_merge_recursive( $default_fields, $post_config );
	}

	return $post_config;
}

/**
 * Get taxonomy config
 *
 * @param $taxonomy
 *
 * @return array
 */
function wpm_get_taxonomy_config( $taxonomy ) {
	$config            = wpm_get_config();
	$taxonomies_config = apply_filters( 'wpm_taxonomies_config', $config['taxonomies'] );
	$taxonomy_config   = apply_filters( "wpm_taxonomy_{$taxonomy}_config", isset( $taxonomies_config[ $taxonomy ] ) ? $taxonomies_config[ $taxonomy ] : null );

	if ( ! is_null( $taxonomy_config ) ) {
		$default_fields = array(
			'name'        => array(),
			'description' => array(),
		);

		$taxonomy_config = wpm_array_merge_recursive( $default_fields, $taxonomy_config );
	}

	return $taxonomy_config;
}

/**
 * Get widget config
 *
 * @param $widget
 *
 * @return array
 */
function wpm_get_widget_config( $widget ) {
	$config         = wpm_get_config();
	$widgets_config = apply_filters( 'wpm_widgets_config', $config['widgets'] );
	$widget_config  = apply_filters( "wpm_widget_{$widget}_config", isset( $widgets_config[ $widget ] ) ? $widgets_config[ $widget ] : null );

	if ( ! is_null( $widget_config ) ) {

		$default_fields = array(
			'title' => array(),
			'text'  => array(),
		);

		$widget_config = wpm_array_merge_recursive( $default_fields, $widget_config );
	}

	return $widget_config;
}