<?php
/**
 * Runtime configuration for the Accommodation Layout custom post type.
 *
 * @package     PurpleProdigy\Module\Accommodation
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\Accommodation;

return array(
	/**============================================
	 * Post Type name
	 *============================================*/
	'post_type' => 'accommodation',

	/**============================================
	 * Label configuration
	 *============================================*/
	'labels' => array(
		'custom_type' => 'accommodation',
		'singular_label' => 'Accommodation',
		'plural_label' => 'Accommodation',
		'in_sentence_label' => 'accommodation',
		'text_domain' => ACCOMMODATION_MODULE_TEXT_DOMAIN,
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
			'author',
			),
	),

	/**============================================
	 * Arguments for registering the post type
	 *============================================*/
	'args' => array(
		'description'   => 'Accommodation Layout',
		'label'         => __( 'Accommodation', ACCOMMODATION_MODULE_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'public'        => true,
		'supports'      => '', // automatically generate the support features.
		'menu_icon'     => 'dashicons-palmtree',
		'has_archive'   => true,
		'menu_position' => 20,

	)
);