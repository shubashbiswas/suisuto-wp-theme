<?php
/**
 * Title: Cinematic Fullscreen Hero
 * Slug: suisuto/hero-fullscreen
 * Description: Immersive full-height cover hero with atmospheric overlay, editorial typography, and call to action.
 * Categories: suisuto-components, suisuto-luxury
 * Keywords: hero, fullscreen, campaign, cinematic, luxury, cover, lookbook, banner
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg","dimRatio":40,"overlayColor":"deep-ink","minHeight":85,"minHeightUnit":"vh","align":"full","className":"suisuto-hero-fullscreen"} -->
<div class="wp-block-cover alignfull is-light suisuto-hero-fullscreen" style="min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-deep-ink-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Sui Suto Autumn Winter Campaign" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/dhaka_muslin_jamdani_1788370602515.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"820px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.35em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
		<p class="has-antique-brass-color has-text-color has-text-align-center" style="font-size:0.75rem;font-weight:600;letter-spacing:0.35em;text-transform:uppercase">MAISON SUI SUTO &bull; BENGAL HERITAGE</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"center","level":1,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(3rem, 6.5vw, 5.5rem)","lineHeight":"1.05","fontWeight":"400"}},"color":{"text":"var(--wp--preset--color--warm-ivory)"}} -->
		<h1 class="has-warm-ivory-color has-text-color has-text-align-center" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(3rem, 6.5vw, 5.5rem);font-weight:400;line-height:1.05;margin:1rem 0">The Quiet Art of Bengal</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.7"}},"color":{"text":"#E2DDD4"}} -->
		<p class="has-text-align-center" style="color:#E2DDD4;font-size:1.1rem;line-height:1.7;max-width:640px;margin:0 auto 2.5rem auto">Centuries of handloom mastery and fine muslin weaving, distilled into contemporary luxury silhouettes.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"var(--wp--preset--color--warm-ivory)","text":"var(--wp--preset--color--deep-ink)"},"border":{"radius":"0px"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-deep-ink-color has-warm-ivory-background-color has-text-color has-background" href="/shop" style="border-radius:0px">DISCOVER THE EDIT</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--warm-ivory)"},"border":{"radius":"0px","color":"rgba(251,249,245,0.4)"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warm-ivory-color has-text-color" href="/craft" style="border-color:rgba(251,249,245,0.4);border-radius:0px">THE ATELIER</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->
