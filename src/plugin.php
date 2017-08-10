<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\CollapsibleContent;
 * @since       1.3.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\CollapsibleContent;

use PurpleProdigy\Module\Custom as CustomModule;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets');
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script(
		'collapsible-content-plugin-script',
		COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.project.min.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
}
/**
 * Autoload plugin files.
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'custom/module.php',
		'layout/module.php',
	);

	foreach( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\setup_plugin' );
/**
 * Setup the plugin.
 *
 * @since 1.3.0
 *
 * @return void
 */
function setup_plugin() {
	foreach( array( 'qa', 'teaser' ) as $shortcode ) {
		$path_to_configuration_file = sprintf( '%s/config/shortcode/%s.php',
			COLLAPSIBLE_CONTENT_DIR,
			$shortcode
		);

		CustomModule\register_shortcode( $path_to_configuration_file );
	}
}
autoload();