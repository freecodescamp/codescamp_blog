<?php
/**
 * Front to the CodesCamp application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells CodesCamp to load the theme.
 *
 * @package CodesCamp
 */

/**
 * Tells CodesCamp to load the CodesCamp theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the CodesCamp Environment and Template */
require __DIR__ . '/wp-blog-header.php';
