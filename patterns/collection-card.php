<?php
/**
 * Title: Luxury Collection Card
 * Slug: suisuto/collection-card
 * Description: Standalone luxury collection card item with image framing, collection title, and subtle explore link.
 * Categories: suisuto-components, suisuto-luxury
 * Keywords: collection, card, luxury, editorial, capsule, category
 * Block Types: core/post-content, core/group
 * Inserter: true
 */
?>
<!-- wp:group {"className":"suisuto-collection-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group suisuto-collection-card">
	<!-- wp:group {"className":"suisuto-collection-card-image-wrap","layout":{"type":"constrained"}} -->
	<div class="wp-block-group suisuto-collection-card-image-wrap">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image size-full"><a href="/product-category/handloom-saris"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="The Jamdani Edit" class="suisuto-collection-image"/></a></figure>
		<!-- /wp:image -->
		
		<div class="suisuto-collection-card-overlay">
			<!-- wp:paragraph {"className":"suisuto-collection-subtitle"} -->
			<p class="suisuto-collection-subtitle">AUTUMN / WINTER 2026</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"suisuto-collection-title"} -->
			<h3 class="wp-block-heading suisuto-collection-title"><a href="/product-category/handloom-saris">The Jamdani Edit</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"suisuto-collection-cta"} -->
			<p class="suisuto-collection-cta"><a href="/product-category/handloom-saris">EXPLORE COLLECTION &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
