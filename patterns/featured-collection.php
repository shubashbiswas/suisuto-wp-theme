<?php
/**
 * Title: Featured Collection Showcase
 * Slug: suisuto/featured-collection
 * Description: Editorial showcase highlighting a flagship seasonal capsule with large campaign photography, narrative typography, and dual call-to-action buttons.
 * Categories: suisuto-luxury, suisuto-components
 * Keywords: collection, featured, capsule, lookbook, campaign, luxury, muslin, editorial
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-featured-collection-section","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"2.5rem","right":"2.5rem"}},"color":{"background":"var(--wp--preset--color--soft-white)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-featured-collection-section" style="background-color:var(--wp--preset--color--soft-white);padding-top:7rem;padding-bottom:7rem;padding-left:2.5rem;padding-right:2.5rem">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"5rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:group {"className":"suisuto-featured-collection-media","layout":{"type":"constrained"}} -->
			<div class="wp-block-group suisuto-featured-collection-media">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-luxury-zoom"} -->
				<figure class="wp-block-image size-full is-style-luxury-zoom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/collection-look.jpg" alt="Sui Suto Monsoon Muslin Capsule Collection" style="aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<div class="suisuto-featured-collection-tag">
					<span>CAPSULE NO. 01 &bull; EDITION OF 50</span>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.3em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
				<p class="has-antique-brass-color has-text-color" style="font-size:0.75rem;font-weight:600;letter-spacing:0.3em;text-transform:uppercase">SEASONAL CAPSULE</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.5rem, 4.5vw, 3.75rem)","lineHeight":"1.1","fontWeight":"400"}},"color":{"text":"var(--wp--preset--color--deep-ink)"}} -->
				<h2 class="has-deep-ink-color has-text-color" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.5rem, 4.5vw, 3.75rem);font-weight:400;line-height:1.1;margin:0.75rem 0 1.25rem 0">The Architecture of Lightness</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.8"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
				<p class="has-charcoal-color has-text-color" style="font-size:1.05rem;line-height:1.8;margin-bottom:1.5rem">Spun from fine Gossypium arboreum cotton along the Meghana river basin, our Monsoon Muslin series revives Bengal's famed diaphanous weave. Each silhouette balances monastic simplicity with intricate supplementary weft geometry.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"suisuto-collection-attributes","style":{"spacing":{"margin":{"bottom":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group suisuto-collection-attributes" style="margin-bottom:2.5rem">
					<div class="suisuto-attribute-pill">
						<span class="suisuto-pill-label">WEAVE</span>
						<span class="suisuto-pill-value">Hand-Spun 300s Count</span>
					</div>
					<div class="suisuto-attribute-pill">
						<span class="suisuto-pill-label">PIGMENT</span>
						<span class="suisuto-pill-value">Unbleached Raw Ivory</span>
					</div>
					<div class="suisuto-attribute-pill">
						<span class="suisuto-pill-label">CLUSTER</span>
						<span class="suisuto-pill-value">Demra, Bengal Delta</span>
					</div>
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var(--wp--preset--color--deep-ink)","text":"var(--wp--preset--color--warm-ivory)"},"border":{"radius":"0px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-warm-ivory-color has-deep-ink-background-color has-text-color has-background" href="<?php echo esc_url( home_url( '/shop' ) ); ?>" style="border-radius:0px">EXPLORE CAPSULE</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-underline","style":{"color":{"text":"var(--wp--preset--color--deep-ink)"}}} -->
					<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-deep-ink-color has-text-color" href="<?php echo esc_url( home_url( '/craft' ) ); ?>">VIEW LOOKBOOK &rarr;</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
