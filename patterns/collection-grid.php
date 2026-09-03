<?php
/**
 * Title: Curated Collections Grid
 * Slug: suisuto/collection-grid
 * Description: Editorial three-card grid showcasing seasonal collections, artisanal capsules, and curated edits with refined typography.
 * Categories: suisuto-components, suisuto-luxury
 * Keywords: collections, grid, editorial, campaign, lookbook, showcase, luxury fashion, categories
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-collection-grid-section","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-collection-grid-section" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:6rem;padding-bottom:6rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:3.5rem">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.25em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
			<p class="has-muted-clay-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.25em;text-transform:uppercase">SEASONAL CURATION</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400">Featured Collections</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
		<p style="font-size:0.75rem;font-weight:600;letter-spacing:0.2em"><a href="/shop" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">ALL COLLECTIONS &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2.5rem"}}} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-collection-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-collection-card">
				<div class="suisuto-collection-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/product-category/handloom-saris"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="The Jamdani Edit" class="suisuto-collection-image"/></a></figure>
					<!-- /wp:image -->
					<div class="suisuto-collection-card-overlay">
						<p class="suisuto-collection-subtitle">HERITAGE WEAVE</p>
						<h3 class="wp-block-heading suisuto-collection-title"><a href="/product-category/handloom-saris">The Jamdani Edit</a></h3>
						<p class="suisuto-collection-cta"><a href="/product-category/handloom-saris">DISCOVER &rarr;</a></p>
					</div>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-collection-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-collection-card">
				<div class="suisuto-collection-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/product-category/tailored-couture"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/baluchari_silk_robe_1788370639217.jpg" alt="Tailored Couture" class="suisuto-collection-image"/></a></figure>
					<!-- /wp:image -->
					<div class="suisuto-collection-card-overlay">
						<p class="suisuto-collection-subtitle">CONTEMPORARY COUTURE</p>
						<h3 class="wp-block-heading suisuto-collection-title"><a href="/product-category/tailored-couture">Narrative Silks</a></h3>
						<p class="suisuto-collection-cta"><a href="/product-category/tailored-couture">DISCOVER &rarr;</a></p>
					</div>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-collection-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-collection-card">
				<div class="suisuto-collection-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/product-category/indigo-edit"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/indigo_shibori_tunic_1788370731346.jpg" alt="The Indigo Edit" class="suisuto-collection-image"/></a></figure>
					<!-- /wp:image -->
					<div class="suisuto-collection-card-overlay">
						<p class="suisuto-collection-subtitle">BOTANICAL VATS</p>
						<h3 class="wp-block-heading suisuto-collection-title"><a href="/product-category/indigo-edit">The Indigo Edit</a></h3>
						<p class="suisuto-collection-cta"><a href="/product-category/indigo-edit">DISCOVER &rarr;</a></p>
					</div>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
