<?php
/**
 * Custom Module Handler - bootstrap file for the module.
 *
 * @package     PurpleProdigy\Module\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Module\Custom;

define( 'CUSTOM_MODULE_DIR', __DIR__ );

/**
 * Autoload plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'label-generator.php',
		'post-type.php',
		'taxonomy.php',
		'shortcode.php',
	);

	foreach ( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}

autoload();
/**
 * Register a plugin with the Custom Module.
 *
 * @since 1.0.0
 *
 * @param string $plugin_file
 *
 * @return void
 */
function register_plugin( $plugin_file ) {
	register_activation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_deactivation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_uninstall_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
}

/**
 * Delete the rewrite rules on plugin status change.
 *
 * @since 1.0.0
 *
 * @return void
 */
function delete_rewrite_rules_on_plugin_status_change() {
	delete_option( 'rewrite_rules' );
}