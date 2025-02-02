<?php
/**
 * Loads the CodesCamp environment and template.
 *
 * @package CodesCamp
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the CodesCamp library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the CodesCamp query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
