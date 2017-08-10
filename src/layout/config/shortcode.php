<?php
/**
 * Accommodation Shortcode runtime configuration parameters.
 *
 * @package     PurpleProdigy\Module\Accommodation\Shortcode
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\Accommodation\Shortcode;

return array(

	/**============================================
	 * Shortcode name [accommodation]
	 *============================================*/
	'shortcode_name' => 'accommodation',

	/**============================================
	 * Specify if you want do_shortcode() to run
	 * on the content between the shortcode opening
	 * and closing brackets. Defaults to true.
	 *============================================*/
	'do_shortcode_within_content' => false,

	/**============================================
	 * Specify the processing function when you
	 * want your code to handle the output buffer,
	 * view, and processing.
	 *============================================*/
	'processing_function' => __NAMESPACE__ . '\process_the_accommodation_shortcode',

	/**============================================
	 * Paths to the view files
	 *============================================*/
	'view'    => array(
		'container_single' => ACCOMMODATION_MODULE_DIR . '/views/container.php',
		'container_topic'  => ACCOMMODATION_MODULE_DIR . '/views/container.php',
		'accommodation'    => ACCOMMODATION_MODULE_DIR . '/views/accommodation.php',
	),

	/**============================================
	 * Defined shortcode default attributes.
	 * Each can be overridable by the author.
	 *============================================*/
	'defaults' => array(
		'show_icon'               => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon'               => 'dashicons dashicons-arrow-up-alt2',
		'post_id'                 => 0,
		'topic'                   => '',
		'number_of_accommodations'          => - 1,
		'show_none_found_message' => 1,
		'none_found_by_topic'     => __( 'Sorry, no FAQs were found for that topic.', ACCOMMODATION_MODULE_TEXT_DOMAIN ),
		'none_found_single'       => __( 'Sorry, no FAQ found.', ACCOMMODATION_MODULE_TEXT_DOMAIN ),
	),
);