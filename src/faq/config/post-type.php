<?php
/**
 * Runtime configuration for the FAQ custom post type.
 *
 * @package     PurpleProdigy\Module\FAQ
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\FAQ;

return array(
	/**============================================
	 * Post Type name
	 *============================================*/
	'post_type' => 'faq',

	/**============================================
	 * Label configuration
	 *============================================*/
	'labels' => array(
		'custom_type' => 'faq',
		'singular_label' => 'FAQ',
		'plural_label' => 'FAQs',
		'in_sentence_label' => 'frequently asked questions',
		'text_domain' => FAQ_MODULE_TEXT_DOMAIN,
	),

	/**============================================
	 * Supported features for this post type
	 *============================================*/
	'features' => array(
		'base_post_type' => 'post',
		'exclude' => array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
			'thumbnail',
			),
		'additional' => array(
			'page-attributes',
		),
	),

	/**============================================
	 * Arguments for registering the post type
	 *============================================*/
	'args' => array(
		'description'   => 'Frequently Asked Questions (FAQ)',
		'label'         => __( 'FAQs', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'public'        => true,
		'supports'      => '', // automatically generate the support features.
		'menu_icon'     => 'dashicons-editor-help',
		'has_archive'   => true,

	)
);