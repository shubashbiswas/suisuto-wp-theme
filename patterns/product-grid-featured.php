<?php
/**
 * Title: Featured Products Grid
 * Slug: suisuto/product-grid-featured
 * Categories: suisuto-woocommerce, query
 * Keywords: products, woocommerce, grid, shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2rem","right":"2rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:6rem;padding-bottom:6rem;padding-left:2rem;padding-right:2rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:3rem">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.25em","fontWeight":"500"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
			<p class="has-muted-clay-color has-text-color" style="font-size:0.78rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase">CURATED SELECTION</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2rem, 3.5vw, 3rem)"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2rem, 3.5vw, 3rem)">Signature Creations</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
		<p style="font-size:0.78rem;font-weight:600;letter-spacing:0.2em"><a href="/shop" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">VIEW ALL CREATIONS &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"align":"wide"} /-->

</div>
<!-- /wp:group -->
