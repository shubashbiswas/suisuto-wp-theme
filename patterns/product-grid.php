<?php
/**
 * Title: Luxury Product Grid
 * Slug: suisuto/product-grid
 * Description: Editorial four-column catalog grid featuring curated artisanal creations with tags, prices, and slow zoom hover effects.
 * Categories: suisuto-woocommerce, suisuto-components
 * Keywords: product, grid, catalog, luxury, handloom, apparel, garments, shop
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-product-grid-section","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-product-grid-section" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:6.5rem;padding-bottom:6.5rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:3.5rem">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.25em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
			<p class="has-muted-clay-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.25em;text-transform:uppercase">CURATED ATELIER ARCHIVE</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400">Signature Creations</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
		<p style="font-size:0.75rem;font-weight:600;letter-spacing:0.2em"><a href="/shop" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">VIEW COMPLETE CATALOG &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-product-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-product-card">
				<div class="suisuto-product-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/shop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="Dhaka Muslin Jamdani Sari — Neelambari" class="suisuto-product-primary-image"/></a></figure>
					<!-- /wp:image -->
					<p class="suisuto-product-card-tag">HANDWOVEN JAMDANI</p>
					<p class="suisuto-product-quick-view"><a href="/shop">DISCOVER PIECE &rarr;</a></p>
				</div>
				<div class="wp-block-group suisuto-product-card-meta" style="margin-top:1rem">
					<h3 class="wp-block-heading suisuto-product-title" style="font-family:var(--wp--preset--font-family--serif);font-size:1.15rem;font-weight:500;margin:0 0 0.25rem 0"><a href="/shop">Dhaka Muslin Jamdani Sari</a></h3>
					<p class="suisuto-product-price has-charcoal-color has-text-color" style="font-size:0.88rem;letter-spacing:0.04em;margin:0">$680.00</p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-product-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-product-card">
				<div class="suisuto-product-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/shop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/mens_raw_silk_kurta_1788370624085.jpg" alt="Raw Silk Handloom Kurta — Kora Ivory" class="suisuto-product-primary-image"/></a></figure>
					<!-- /wp:image -->
					<p class="suisuto-product-card-tag">TASSAR SILK</p>
					<p class="suisuto-product-quick-view"><a href="/shop">DISCOVER PIECE &rarr;</a></p>
				</div>
				<div class="wp-block-group suisuto-product-card-meta" style="margin-top:1rem">
					<h3 class="wp-block-heading suisuto-product-title" style="font-family:var(--wp--preset--font-family--serif);font-size:1.15rem;font-weight:500;margin:0 0 0.25rem 0"><a href="/shop">Raw Silk Tailored Kurta</a></h3>
					<p class="suisuto-product-price has-charcoal-color has-text-color" style="font-size:0.88rem;letter-spacing:0.04em;margin:0">$340.00</p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-product-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-product-card">
				<div class="suisuto-product-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/shop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/indigo_shibori_tunic_1788370731346.jpg" alt="Bengal Indigo Shibori Tunic" class="suisuto-product-primary-image"/></a></figure>
					<!-- /wp:image -->
					<p class="suisuto-product-card-tag">BOTANICAL INDIGO</p>
					<p class="suisuto-product-quick-view"><a href="/shop">DISCOVER PIECE &rarr;</a></p>
				</div>
				<div class="wp-block-group suisuto-product-card-meta" style="margin-top:1rem">
					<h3 class="wp-block-heading suisuto-product-title" style="font-family:var(--wp--preset--font-family--serif);font-size:1.15rem;font-weight:500;margin:0 0 0.25rem 0"><a href="/shop">Indigo Shibori Draped Tunic</a></h3>
					<p class="suisuto-product-price has-charcoal-color has-text-color" style="font-size:0.88rem;letter-spacing:0.04em;margin:0">$290.00</p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-product-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-product-card">
				<div class="suisuto-product-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/shop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/baluchari_silk_robe_1788370639217.jpg" alt="Baluchari Narrative Silk Robe" class="suisuto-product-primary-image"/></a></figure>
					<!-- /wp:image -->
					<p class="suisuto-product-card-tag">BALUCHARI JACQUARD</p>
					<p class="suisuto-product-quick-view"><a href="/shop">DISCOVER PIECE &rarr;</a></p>
				</div>
				<div class="wp-block-group suisuto-product-card-meta" style="margin-top:1rem">
					<h3 class="wp-block-heading suisuto-product-title" style="font-family:var(--wp--preset--font-family--serif);font-size:1.15rem;font-weight:500;margin:0 0 0.25rem 0"><a href="/shop">Baluchari Narrative Silk Robe</a></h3>
					<p class="suisuto-product-price has-charcoal-color has-text-color" style="font-size:0.88rem;letter-spacing:0.04em;margin:0">$720.00</p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
