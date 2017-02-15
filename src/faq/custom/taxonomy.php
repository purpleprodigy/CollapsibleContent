<?php
/**
 * Taxonomy Handler
 *
 * @package     PurpleProdigy\Module\Taxonomy
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\FAQ\Custom;

add_action( 'init', __NAMESPACE__ . '\register_custom_taxonomy' );
/**
 * Register the taxonomy.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_custom_taxonomy() {
	$args = array(
		'label'             => __( 'Topics', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'            => get_taxonomy_labels_config( 'Topic', 'Topics', 'topics' ),
		'hierarchical'      => true,
		'show_admin_column' => true,
	);

	register_taxonomy( 'topic', array( 'faq'), $args );
}

/**
 * Get the taxonomy labels configuration
 *
 * @since 1.0.0
 *
 * @param string $singular_label
 * @param string $plural_label
 * @param string $plural_label_lower_case
 * @param string $menu_label Menu label (optional)
 *
 * @return array
 */
function get_taxonomy_labels_config( $singular_label, $plural_label, $plural_label_lower_case, $menu_label = '' ) {
	if ( ! $menu_label ) {
		$menu_label = $plural_label;
	}

	return array(
		'name'                       => _x( $plural_label, 'taxonomy general name', FAQ_MODULE_TEXT_DOMAIN ),
		'singular_name'              => _x( $singular_label, 'taxonomy singular name', FAQ_MODULE_TEXT_DOMAIN ),
		'search_items'               => __( 'Search ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'popular_items'              => __( 'Popular ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'all_items'                  => __( 'All ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit ' . $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'view_item'                  => __( 'View ' . $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'update_item'                => __( 'Update ' . $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'add_new_item'               => __( 'Add New ' . $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'new_item_name'              => __( "New {$singular_label} Name", FAQ_MODULE_TEXT_DOMAIN ),
		'separate_items_with_commas' => __( "Separate {$plural_label_lower_case} with commas", FAQ_MODULE_TEXT_DOMAIN ),
		'add_or_remove_items'        => __( 'Add or remove ' . $plural_label_lower_case, FAQ_MODULE_TEXT_DOMAIN ),
		'choose_from_most_used'      => __( 'Choose from the most used ' . $plural_label_lower_case, FAQ_MODULE_TEXT_DOMAIN ),
		'not_found'                  => __( "No {$plural_label_lower_case} found.", FAQ_MODULE_TEXT_DOMAIN ),
		'menu_name'                  => $menu_label,
	);
}

add_filter( 'genesis_post_meta', __NAMESPACE__ . '\filter_genesis_footer_post_meta' );
/**
 * Filter the Genesis Footer Entry Post Meta
 * to add the post terms for our custom taxonomy to it.
 *
 * @since 1.0.0
 *
 * @param string $post_meta
 *
 * @return string
 */
function filter_genesis_footer_post_meta( $post_meta ) {

	$post_meta .= sprintf(
		' [post_terms taxonomy="topic" before="%s"]',
		__( '$singular_label: ', FAQ_MODULE_TEXT_DOMAIN )
	);

	return $post_meta;
}