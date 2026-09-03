<?php
/**
 * Title: Luxury Split Hero
 * Slug: suisuto/hero-luxury
 * Description: Editorial split-screen campaign hero featuring serene typography, brand statement, and seasonal editorial imagery.
 * Categories: suisuto-components, suisuto-luxury
 * Keywords: hero, luxury, campaign, split, header, editorial, bengal, handloom, couture
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-hero-pattern","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--deep-ink)","text":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-hero-pattern" style="background-color:var(--wp--preset--color--deep-ink);color:var(--wp--preset--color--warm-ivory);padding-top:6rem;padding-bottom:6rem;padding-left:2.5rem;padding-right:2.5rem">
	
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"4.5rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.3em","fontStyle":"normal","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
			<p class="has-antique-brass-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.3em;text-transform:uppercase">SUI SUTO &bull; BENGAL AUTUMN / WINTER</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.75rem, 5.5vw, 4.5rem)","lineHeight":"1.06","fontWeight":"400"}}} -->
			<h1 style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.75rem, 5.5vw, 4.5rem);font-weight:400;line-height:1.06;margin:1rem 0 1.25rem 0">The Art of Handwoven Heritage.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.8"}},"color":{"text":"#D5CEC2"}} -->
			<p style="color:#D5CEC2;font-size:1.05rem;line-height:1.8;margin-bottom:2rem">An ode to traditional handloom mastery. Elegant silhouettes born from Bengal craftsmanship, refined for contemporary global living.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var(--wp--preset--color--warm-ivory)","text":"var(--wp--preset--color--deep-ink)"},"border":{"radius":"0px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-deep-ink-color has-warm-ivory-background-color has-text-color has-background" href="/shop" style="border-radius:0px">DISCOVER COLLECTION</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--warm-ivory)"},"border":{"radius":"0px","color":"rgba(251,249,245,0.35)"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warm-ivory-color has-text-color" href="/craft" style="border-color:rgba(251,249,245,0.35);border-radius:0px">EXPLORE CRAFT</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"suisuto-hero-image-frame"} -->
			<figure class="wp-block-image size-full suisuto-hero-image-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" alt="Sui Suto Luxury Bengali Fashion Campaign" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
