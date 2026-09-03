<?php
/**
 * Title: Craft Story Spotlight
 * Slug: suisuto/craft-story
 * Description: Editorial two-column feature detailing artisanal heritage, handloom weaving techniques, and tactile provenance.
 * Categories: suisuto-luxury, media
 * Keywords: craft, loom, textile, story, artisan, handloom, jamdani, heritage, provenance, quiet luxury
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2rem","right":"2rem"}},"color":{"background":"var(--wp--preset--color--soft-white)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="background-color:var(--wp--preset--color--soft-white);padding-top:6rem;padding-bottom:6rem;padding-left:2rem;padding-right:2rem">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"5rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/craft-loom.jpg" alt="Artisan handloom weaving process Bengal" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.25em","fontWeight":"500"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
			<p class="has-muted-clay-color has-text-color" style="font-size:0.78rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase">THE HAND &bull; THE LOOM</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2rem, 3.5vw, 3rem)","lineHeight":"1.15"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2rem, 3.5vw, 3rem);line-height:1.15">Tactile Mastery in Every Thread.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
			<p class="has-charcoal-color has-text-color" style="font-size:1rem;line-height:1.8">Every piece in the Sui Suto archive passes through the hands of master weavers across Bengal's historic textile clusters. From fine Jamdani motifs to rich Mulberry silk weaves, our garments preserve human touch and rare artisanal techniques.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"1rem"} -->
			<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.2em","fontWeight":"600"}}} -->
			<p style="font-size:0.78rem;font-weight:600;letter-spacing:0.2em"><a href="/craft" style="border-bottom:1px solid var(--wp--preset--color--deep-ink);padding-bottom:3px">READ THE CRAFT ARCHIVE &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
