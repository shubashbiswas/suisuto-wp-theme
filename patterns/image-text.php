<?php
/**
 * Title: Editorial Image & Narrative Section
 * Slug: suisuto/image-text
 * Description: Asymmetric editorial split section pairing framed craft photography with deep textile storytelling, material breakdown, and collection link.
 * Categories: suisuto-luxury, suisuto-components
 * Keywords: image text, split, editorial, tangail, silk, textile, craft, story, narrative
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-image-text-section","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--soft-white)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-image-text-section" style="background-color:var(--wp--preset--color--soft-white);padding-top:6.5rem;padding-bottom:6.5rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"5rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"className":"suisuto-editorial-media-container","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-editorial-media-container">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-editorial-frame"} -->
				<figure class="wp-block-image size-full is-style-editorial-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/tangail_silk_shirt_1788370710648.jpg" alt="Tangail Handloom Silk Shirt Editorial Showcase" style="aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.28em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
				<p class="has-muted-clay-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.28em;text-transform:uppercase">TEXTILE IN FOCUS &bull; ARCHIVE SERIES</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 3.8vw, 3.25rem)","lineHeight":"1.15","fontWeight":"400"}},"color":{"text":"var(--wp--preset--color--deep-ink)"}} -->
				<h2 class="has-deep-ink-color has-text-color" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 3.8vw, 3.25rem);font-weight:400;line-height:1.15;margin:0.75rem 0 1.25rem 0">The Whispering Weft of Tangail Silk</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.02rem","lineHeight":"1.8"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
				<p class="has-charcoal-color has-text-color" style="font-size:1.02rem;line-height:1.8;margin-bottom:1.5rem">Rooted in Tangail's heritage weaving colonies along the Jamuna river, this garment honors the delicate dance of silk filaments hand-reeled from mulberry cocoons. Subtle rib textures and featherweight drape create a tactile sensation reserved for those who value quiet luxury.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"suisuto-spec-list","style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group suisuto-spec-list" style="margin-bottom:2rem">
					<div class="suisuto-spec-row">
						<span class="suisuto-spec-key">MATERIAL</span>
						<span class="suisuto-spec-value">100% Hand-Reeled Mulberry Silk</span>
					</div>
					<div class="suisuto-spec-row">
						<span class="suisuto-spec-key">LOOM TYPE</span>
						<span class="suisuto-spec-value">Traditional Pit Loom with Supplementary Weft</span>
					</div>
					<div class="suisuto-spec-row">
						<span class="suisuto-spec-key">FINISH</span>
						<span class="suisuto-spec-value">Cold River Wash &bull; Chemical-Free Luster</span>
					</div>
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.22em","fontWeight":"600"}}} -->
				<p style="font-size:0.78rem;font-weight:600;letter-spacing:0.22em"><a href="/shop" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">DISCOVER THE SILK ARCHIVE &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
