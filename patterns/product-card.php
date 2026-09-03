<?php
/**
 * Title: Luxury Product Card
 * Slug: suisuto/product-card
 * Description: Individual quiet luxury product item featuring image zoom container, textile category badge, title, price, and inquiry action.
 * Categories: suisuto-woocommerce, suisuto-components
 * Keywords: product, card, luxury, woocommerce, garment, craft item, lookbook item
 * Block Types: core/post-content, core/group
 * Inserter: true
 */
?>
<!-- wp:group {"className":"suisuto-product-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group suisuto-product-card">
	<!-- wp:group {"className":"suisuto-product-card-image-wrap","layout":{"type":"constrained"}} -->
	<div class="wp-block-group suisuto-product-card-image-wrap">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image size-full"><a href="/shop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="Dhaka Muslin Jamdani Sari — Neelambari" class="suisuto-product-primary-image"/></a></figure>
		<!-- /wp:image -->
		
		<!-- wp:paragraph {"className":"suisuto-product-card-tag"} -->
		<p class="suisuto-product-card-tag">HANDWOVEN JAMDANI</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"suisuto-product-quick-view"} -->
		<p class="suisuto-product-quick-view"><a href="/shop">DISCOVER PIECE &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"suisuto-product-card-meta","layout":{"type":"constrained"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-group suisuto-product-card-meta" style="margin-top:1rem">
		<!-- wp:heading {"level":3,"className":"suisuto-product-title","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"1.15rem","fontWeight":"500"}}} -->
		<h3 class="wp-block-heading suisuto-product-title" style="font-family:var(--wp--preset--font-family--serif);font-size:1.15rem;font-weight:500;margin:0 0 0.25rem 0"><a href="/shop">Dhaka Muslin Jamdani Sari — Neelambari</a></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"suisuto-product-price","style":{"typography":{"fontSize":"0.88rem"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
		<p class="suisuto-product-price has-charcoal-color has-text-color" style="font-size:0.88rem;letter-spacing:0.04em;margin:0">$680.00</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
