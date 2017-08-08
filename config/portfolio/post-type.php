<?php
/**
 * Runtime configuration for the Portfolio custom post type.
 *
 * @package     PurpleProdigy\Module\Portfolio\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\Portfolio\Custom;

return array(
	'post_type' => 'portfolio',

	'labels' => array(
		'post_type' => 'portfolio',
		'singular_label' => 'Portfolio',
		'plural_label' => 'Portfolios',
		'in_sentence_label' => 'portfolio',
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
		'description'   => 'Portfolio',
		'label'         => __( 'Portfolio', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'public'        => true,
		'supports'      => '', // automatically generate the support features.
		'menu_icon'     => 'dashicons-portfolio',
		'has_archive'   => true,

	)
);