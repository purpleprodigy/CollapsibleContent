<?php
/**
 * Runtime configuration for a  taxonomy.
 *
 * @package     PurpleProdigy\Module\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Module\Custom;

return array(
	/**=============================================================
	 * The taxonomy name.
	 *============================================================*/
	'taxonomy' => '',

	/**=============================================================
	 * The label configuration.
	 *============================================================*/
	'labels' => array(
		'custom_type' => '', // the taxonomy name from above
		'singular_label' => '',
		'plural_label' => '',
		'in_sentence_label' => '',
		'text_domain' => '',
		'specific_labels' => array(),
	),

	/**=============================================================
	 * These are the arguments for registering the taxonomy.
	 *============================================================*/
	'args'     => array(
		'label'             => '',
		'labels'        => '', // automatically generate the labels.
	),

	/**=============================================================
	 * These are the post types to bind the taxonomy to.
	 *============================================================*/
	'post_types' => array ( '' ),
);