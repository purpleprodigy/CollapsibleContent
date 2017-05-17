<?php
/**
 * Runtime configuration for the FAQ custom post type.
 *
 * @package     PurpleProdigy\Module\FAQ\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\FAQ\Custom;

return array(
	'post_type' => 'faq',

	'labels' => array(
		'post_type' => 'faq',
		'singular_label' => 'FAQ',
		'plural_label' => 'FAQs',
		'text_domain' => FAQ_MODULE_TEXT_DOMAIN,
	),

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