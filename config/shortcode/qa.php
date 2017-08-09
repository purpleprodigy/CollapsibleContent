<?php
/**
 * QA Shortcode runtime configuration parameters.
 *
 * @package     NAMESPACE
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\QA\Shortcode;

return array(

	/**============================================
	 * Shortcode name [qa]
	 *============================================*/
	'shortcode_name' => 'qa',

	/**============================================
	 * Paths to the view files
	 *============================================*/
	'view'    => COLLAPSIBLE_CONTENT_DIR . 'src/shortcode/views/qa.php',

	/**============================================
	 * Defined shortcode default attributes.
	 * Each can be overridable by the author.
	 *============================================*/
	'defaults' => array(
		'show_icon' => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon' => 'dashicons dashicons-arrow-up-alt2',
		'question' => '',
	),
);
