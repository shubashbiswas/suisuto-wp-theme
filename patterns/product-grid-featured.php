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

	<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":8,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"div","dimensions":{"widthType":"fill","fixedWidth":""},"displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"convertedFromProducts":false,"queryContextIncludes":["collection"],"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"className":"suisuto-archive-product-card suisuto-home-product-card","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group suisuto-archive-product-card suisuto-home-product-card">
				<!-- wp:group {"className":"suisuto-product-card-image-wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group suisuto-product-card-image-wrap">
					<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"right","imageSizing":"full-size","isDescendentOfQueryLoop":true} /-->
					<!-- wp:group {"className":"suisuto-product-image-banner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group suisuto-product-image-banner">
						<!-- wp:woocommerce/product-price {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->
						<!-- wp:woocommerce/product-button /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-terms {"term":"product_cat","textAlign":"left","separator":"","className":"suisuto-product-category-pills","style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.35rem"}}}} /-->
				<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"1.15rem","lineHeight":"1.3","fontWeight":"500"},"spacing":{"margin":{"top":"0.2rem","bottom":"0.25rem"}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

</div>
<!-- /wp:group -->
