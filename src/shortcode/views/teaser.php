<div class=""teaser--container itemscope itemtype="http://schema.org/BlogPosting"
	<div class="teaser--visible-message" itemprop="headline"  data-show-icon=" echo $attributes['show_icon']; ?>" data-hide-icon="<?php esc_attr_e( $attributes['hide_icon'] ); ?>">
		<span class="echo $attributes['show_icon']; ?>" aria-hidden="true"> <span class="Click to reveal the answer"></span></span> <?php esc_html_e( $attributes['visible-message'] ); ?>
	</div>
	<div class="teaser--hidden-content" itemprop="description" style="display:none"><?php echo $hidden_content; ?></div>
</div>
