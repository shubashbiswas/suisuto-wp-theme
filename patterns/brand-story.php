<?php
/**
 * Title: Brand Story Narrative
 * Slug: suisuto/brand-story
 * Description: Editorial narrative layout detailing the brand origin, human craftsmanship, textile heritage metrics, and founder philosophy.
 * Categories: suisuto-luxury, text
 * Keywords: brand, story, heritage, artisan, Bengal, loom, craft, philosophy, editorial
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-brand-story-section","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-brand-story-section" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:7rem;padding-bottom:7rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"5rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:group {"className":"suisuto-brand-story-media","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-brand-story-media">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-editorial-frame"} -->
				<figure class="wp-block-image size-full is-style-editorial-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/craft-loom.jpg" alt="Master artisan working on traditional Bengal wooden pit loom" style="aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<figcaption style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:0.85rem;color:#777777;margin-top:0.75rem;text-align:center">Handloom pit-loom workshop &bull; Nadia, Bengal Delta</figcaption>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.3em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
				<p class="has-antique-brass-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.3em;text-transform:uppercase">OUR LINEAGE &bull; THE BENGAL DELTA</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.5rem)","lineHeight":"1.12","fontWeight":"400"}},"color":{"text":"var(--wp--preset--color--deep-ink)"}} -->
				<h2 class="has-deep-ink-color has-text-color" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.5rem);font-weight:400;line-height:1.12;margin:0.75rem 0 1.5rem 0">Preserving the Human Rhythm of the Loom</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.85"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
				<p class="has-charcoal-color has-text-color" style="font-size:1.05rem;line-height:1.85;margin-bottom:1.5rem">Sui Suto (সুই সুতো) was conceived as a pilgrimage back to tactile authenticity. For over four centuries, Bengal's river delta fostered the world's most coveted textile arts—where handloom rhythms were dictated not by industrial machines, but by the breath and patience of master weavers.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.85"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
				<p class="has-charcoal-color has-text-color" style="font-size:1.05rem;line-height:1.85;margin-bottom:2rem">We unite these heritage craft clusters with monastic contemporary tailoring. Every seam is intentional. Every fold honors the quiet luxury of human time.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"suisuto-story-metrics","style":{"spacing":{"margin":{"bottom":"2.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group suisuto-story-metrics" style="margin-bottom:2.5rem">
					<div class="suisuto-metric-item">
						<span class="suisuto-metric-number">400+</span>
						<span class="suisuto-metric-label">Years of Lineage</span>
					</div>
					<div class="suisuto-metric-item">
						<span class="suisuto-metric-number">100%</span>
						<span class="suisuto-metric-label">Handloom Woven</span>
					</div>
					<div class="suisuto-metric-item">
						<span class="suisuto-metric-number">Zero</span>
						<span class="suisuto-metric-label">Synthetic Blends</span>
					</div>
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.22em","fontWeight":"600"}}} -->
				<p style="font-size:0.78rem;font-weight:600;letter-spacing:0.22em"><a href="/about" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:4px">READ THE FULL MANIFESTO &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
