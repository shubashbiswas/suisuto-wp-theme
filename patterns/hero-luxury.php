<?php
/**
 * Title: Luxury Hero
 * Slug: suisuto/hero-luxury
 * Categories: suisuto-luxury, header
 * Keywords: hero, luxury, campaign, header
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-hero-pattern","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2rem","right":"2rem"}},"color":{"background":"var(--wp--preset--color--deep-ink)","text":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-hero-pattern" style="background-color:var(--wp--preset--color--deep-ink);color:var(--wp--preset--color--warm-ivory);padding-top:6rem;padding-bottom:6rem;padding-left:2rem;padding-right:2rem">
	
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.3em","fontStyle":"normal","fontWeight":"500"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
			<p class="has-antique-brass-color has-text-color" style="font-size:0.78rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase">SUI SUTO &bull; BENGAL AUTUMN / WINTER</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.75rem, 5.5vw, 4.5rem)","lineHeight":"1.08","fontWeight":"400"}}} -->
			<h1 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.75rem, 5.5vw, 4.5rem);font-weight:400;line-height:1.08">The Art of Handwoven Heritage.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.8"}},"color":{"text":"#D5CEC2"}} -->
			<p style="color:#D5CEC2;font-size:1.05rem;line-height:1.8">An ode to traditional handloom mastery. Elegant silhouettes born from Bengal craftsmanship, refined for contemporary global living.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"1.5rem"} -->
			<div style="height:1.5rem" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var(--wp--preset--color--warm-ivory)","text":"var(--wp--preset--color--deep-ink)"},"border":{"radius":"0px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-deep-ink-color has-warm-ivory-background-color has-text-color has-background" href="/shop" style="border-radius:0px">DISCOVER COLLECTION</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--warm-ivory)"},"border":{"radius":"0px","color":"rgba(251,249,245,0.3)"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warm-ivory-color has-text-color" href="/craft" style="border-color:rgba(251,249,245,0.3);border-radius:0px">EXPLORE CRAFT</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-campaign.jpg" alt="Sui Suto Luxury Bengali Fashion Campaign" style="aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
