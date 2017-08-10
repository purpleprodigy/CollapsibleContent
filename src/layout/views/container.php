<?php
use PurpleProdigy\Module\Accommodation\Shortcode as Shortcode;
use PurpleProdigy\Module\Accommodation\Template as Template;

?>
<?php
if ( isset ( $use_term_container ) && $use_term_container ) : ?>
<div class="collapsible-content--term-container accommodation accommodation-topic--<?php esc_attr_e( $term_slug ); ?>">
	<?php endif; ?>

	<?php if ( isset( $show_term_name ) && $show_term_name ) : ?>
        <h2><?php esc_html_e( $record['term_name'] ); ?></h2>
	<?php endif; ?>

    <dl class="collapsible-content--container accommodation">
		<?php
		if ( $is_calling_source === 'template' ) {
			Template\loop_and_render_accommodations( $record['posts'] );

		} elseif ( $is_calling_source === 'shortcode-by-topic' ) {
			Shortcode\loop_and_render_accommodations_by_topic( $query, $attributes, $config );

		} else {
			include( __DIR__ . '/accommodation.php' );
		}
		?>
    </dl>

	<?php if ( isset ( $use_term_container ) && $use_term_container ) : ?>
</div>
<?php endif; ?>

