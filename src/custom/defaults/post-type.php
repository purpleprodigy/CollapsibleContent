<?php
/**
 * Runtime configuration for a default custom post type.
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
	 * Post Type name
	 *============================================*/
	'post_type' => '',

	/**============================================
	 * Label configuration
	 *============================================*/
	'labels' => array(
		'custom_type' => '', // the post type from above
		'singular_label' => '',
		'plural_label' => '',
		'in_sentence_label' => '', // the label used within a sentence
		'text_domain' => '',
	),

	/**============================================
	 * Supported features for this post type
	 *============================================*/
	'features' => array(
		'base_post_type' => 'post',
		'exclude' => array(),
		'additional' => array(),
	),

	/**============================================
	 * Arguments for registering the post type
	 *============================================*/
	'args' => array(
		'description'   => '',
		'label'         => '',
		'labels'        => '', // automatically generate the labels.
		'public'        => true,
		'supports'      => '', // automatically generate the support features.
		'menu_icon'     => '',
		'has_archive'   => false,

	)
);