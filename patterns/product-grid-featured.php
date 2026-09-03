<?php
/**
 * Title: Featured Products Grid
 * Slug: suisuto/product-grid-featured
 * Description: Clean e-commerce query loop featuring curated garments, archival pieces, and luxury handloom creations with pricing and buy actions.
 * Categories: suisuto-woocommerce, query
 * Keywords: products, woocommerce, grid, shop, store, luxury garments, handloom catalog, apparel
 * Block Types: core/query, core/post-content
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
			<p class="has-muted-clay-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.25em;text-transform:uppercase">CURATED ARCHIVE</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400">Signature Creations</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
		<p style="font-size:0.75rem;font-weight:600;letter-spacing:0.2em"><a href="/shop" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">VIEW ALL CREATIONS &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-new {"columns":4,"rows":2,"align":"wide"} /-->

</div>
<!-- /wp:group -->
