<?php
/**
 * Accommodation Archive Template
 *
 * @package     PurpleProdigy\Module\Accommodation\Template
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PurpleProdigy\Module\Accommodation\Template;
d('I am loaded');
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', __NAMESPACE__ . '\do_accommodation_archive_loop' );
/**
 * Do the Accommodation Archive loop and render out the HTML.
 *
 * NOTE: The variables are set to call the right HTML
 * markup in the container.php view file.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_accommodation_archive_loop() {
	$records = get_posts_grouped_by_term( 'accommodation', 'accommodation' );
	if ( ! $records ) {
		echo '<p>Sorry, there is no Accommodation to display.</p>';
		return;
	}

	$use_term_container = true;
	$show_term_name     = true;
	$is_calling_source  = 'template';

	foreach ( $records as $record ) {
		$term_slug = $record['term_slug'];

		include( ACCOMMODATION_MODULE_DIR . '/views/container.php' );
	}
}

/**
 * Loop through and render out the FAQs.
 *
 * @since 1.0.0
 *
 * @param array $accommodations
 *
 * @return void
 */
function loop_and_render_accommodations( array $accommodations ) {
	$attributes = array(
		'show_icon' => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon' => 'dashicons dashicons-arrow-up-alt2',
	);

	foreach ( $accommodations as $accommodation ) {
		$hidden_content = do_shortcode( $accommodation['post_content'] );
		$post_title     = $accommodation['post_title'];

		include( ACCOMMODATION_MODULE_DIR . '/views/accommodation.php' );
	}
}

genesis();