<?php
/**
 * Title: Full-Width Campaign Visual
 * Slug: suisuto/campaign-image
 * Description: Immersive full-viewport campaign visual banner with subtle editorial overlay typography, coordinates, and haute couture framing.
 * Categories: suisuto-luxury, suisuto-components
 * Keywords: campaign, image, fullwidth, visual, banner, editorial, lookbook, silence, luxury
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-campaign.jpg","dimRatio":35,"overlayColor":"deep-ink","minHeight":70,"minHeightUnit":"vh","align":"full","className":"suisuto-campaign-banner"} -->
<div class="wp-block-cover alignfull is-light suisuto-campaign-banner" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-deep-ink-background-color has-background-dim-35 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Sui Suto Haute Couture Editorial Campaign" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-campaign.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.35em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
		<p class="has-antique-brass-color has-text-color has-text-align-center" style="font-size:0.75rem;font-weight:600;letter-spacing:0.35em;text-transform:uppercase">HAUTE HANDLOOM EDITORIAL &bull; EDITION 2026</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"center","level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.75rem, 5.5vw, 4.5rem)","lineHeight":"1.08","fontWeight":"400"}},"color":{"text":"var(--wp--preset--color--warm-ivory)"}} -->
		<h2 class="has-warm-ivory-color has-text-color has-text-align-center" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.75rem, 5.5vw, 4.5rem);font-weight:400;line-height:1.08;margin:0.75rem 0 1.25rem 0">Poetry in Woven Silence</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","letterSpacing":"0.18em","fontWeight":"400"}},"color":{"text":"rgba(251, 249, 245, 0.85)"}} -->
		<p class="has-text-align-center" style="color:rgba(251, 249, 245, 0.85);font-size:1rem;letter-spacing:0.18em;margin-bottom:2.25rem;text-transform:uppercase">23° 42' N, 90° 24' E &bull; THE BENGAL RIVER BASIN</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--warm-ivory)"},"border":{"radius":"0px","color":"rgba(251,249,245,0.45)"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warm-ivory-color has-text-color" href="/shop" style="border-color:rgba(251,249,245,0.45);border-radius:0px">VIEW CAMPAIGN EDIT &rarr;</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->
