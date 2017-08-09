<?php
/**
 * The default shortcode runtime configuration parameters.
 *
 * @package     PurpleProdigy\Module\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\Custom;

return array(

	/**============================================
	 * Shortcode name, the name with the square
	 * brackets [name]
	 *============================================*/
	'shortcode_name' => '',

	/**============================================
	 * Specify if you want do_shortcode() to run
	 * on the content between the shortcode opening
	 * and closing brackets. Defaults to true.
	 *============================================*/
	'do_shortcode_within_content' => true,

	/**============================================
	 * Specify the processing function when you
	 * want your code to handle the output buffer,
	 * view, and processing. Defaults to null.
	 *============================================*/
	'processing_function' => null,

	/**============================================
	 * The absolute path to the view file.
	 * If more than one file, use an array.
	 *============================================*/
	'view'    => '',

	/**============================================
	 * Defined shortcode default attributes.
	 * Each can be overridable by the author.
	 *============================================*/
	'defaults' => array(),
);
