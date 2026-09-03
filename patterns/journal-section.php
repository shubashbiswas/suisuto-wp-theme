<?php
/**
 * Title: Luxury Editorial Journal Preview
 * Slug: suisuto/journal-section
 * Description: Three-column editorial story grid featuring curated essays on craft heritage, textile history, and artisanal methodology.
 * Categories: suisuto-luxury, suisuto-components
 * Keywords: journal, stories, essays, craft, muslin, indigo, baluchari, editorial, articles
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-journal-section","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-journal-section" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:6.5rem;padding-bottom:6.5rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:3.5rem">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.25em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
			<p class="has-muted-clay-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.25em;text-transform:uppercase">THE SUI SUTO CHRONICLE</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400">Essays in Craft &amp; Materiality</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
		<p style="font-size:0.75rem;font-weight:600;letter-spacing:0.2em"><a href="/journal" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">READ ALL STORIES &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2.5rem"}}} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-journal-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-journal-card">
				<div class="suisuto-journal-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/journal"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="The Revival of Dhaka Muslin" class="suisuto-journal-image"/></a></figure>
					<!-- /wp:image -->
				</div>
				<div class="suisuto-journal-card-body" style="margin-top:1.25rem">
					<p class="suisuto-journal-meta">TEXTILE ARCHAEOLOGY &bull; 5 MIN READ</p>
					<h3 class="wp-block-heading suisuto-journal-title"><a href="/journal">The Revival of Dhaka Muslin: Resurrecting the Phantom Fabric</a></h3>
					<p class="suisuto-journal-excerpt">Exploring the multi-decade effort to cultivate rare Phuti Karpas cotton along the Meghna banks and revive 300s-count handweaving.</p>
					<p class="suisuto-journal-link"><a href="/journal">READ ESSAY &rarr;</a></p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-journal-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-journal-card">
				<div class="suisuto-journal-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/journal"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/indigo_shibori_tunic_1788370731346.jpg" alt="Living Fermentation: The Ancient Indigo Vats of Bengal" class="suisuto-journal-image"/></a></figure>
					<!-- /wp:image -->
				</div>
				<div class="suisuto-journal-card-body" style="margin-top:1.25rem">
					<p class="suisuto-journal-meta">BOTANICAL PIGMENTS &bull; 4 MIN READ</p>
					<h3 class="wp-block-heading suisuto-journal-title"><a href="/journal">Living Fermentation: The Ancient Indigo Vats of Bengal</a></h3>
					<p class="suisuto-journal-excerpt">How true Indigofera tinctoria vats are nourished with molasses, lime, and morning river water to yield timeless nocturnal blues.</p>
					<p class="suisuto-journal-link"><a href="/journal">READ ESSAY &rarr;</a></p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"suisuto-journal-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-journal-card">
				<div class="suisuto-journal-card-image-wrap">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
					<figure class="wp-block-image size-full"><a href="/journal"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/baluchari_silk_robe_1788370639217.jpg" alt="The Architectural Geometry of Baluchari Weaving" class="suisuto-journal-image"/></a></figure>
					<!-- /wp:image -->
				</div>
				<div class="suisuto-journal-card-body" style="margin-top:1.25rem">
					<p class="suisuto-journal-meta">ARTISANAL FORM &bull; 6 MIN READ</p>
					<h3 class="wp-block-heading suisuto-journal-title"><a href="/journal">The Architectural Geometry of Baluchari Weaving</a></h3>
					<p class="suisuto-journal-excerpt">Deconstructing the intricate narrative borders woven across Murshidabad's historic silk looms without a single mechanical apparatus.</p>
					<p class="suisuto-journal-link"><a href="/journal">READ ESSAY &rarr;</a></p>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
