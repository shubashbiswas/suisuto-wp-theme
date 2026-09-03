<?php
/**
 * Title: Luxury Newsletter
 * Slug: suisuto/newsletter
 * Description: Sophisticated newsletter signup inviting patrons into the private Sui Suto dispatch for private viewings and textile stories.
 * Categories: suisuto-forms, suisuto-components
 * Keywords: newsletter, subscribe, luxury, form, dispatch, journal, email, private salon
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-newsletter-section","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"2rem","right":"2rem"}},"color":{"background":"var(--wp--preset--color--deep-ink)","text":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-newsletter-section" style="background-color:var(--wp--preset--color--deep-ink);color:var(--wp--preset--color--warm-ivory);padding-top:6.5rem;padding-bottom:6.5rem;padding-left:2rem;padding-right:2rem">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.3em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--antique-brass)"}} -->
		<p class="has-antique-brass-color has-text-color has-text-align-center" style="font-size:0.72rem;font-weight:600;letter-spacing:0.3em;text-transform:uppercase">PRIVATE JOURNAL &amp; RELEASES</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"center","level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
		<h2 class="has-text-align-center" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400;margin:0.75rem 0 1rem 0">Join the Sui Suto Circle</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.75"}},"color":{"text":"#C5BEB3"}} -->
		<p style="color:#C5BEB3;font-size:0.95rem;line-height:1.75;margin-bottom:2.5rem" class="has-text-align-center">Receive private invitations to seasonal collection previews, artisanal documentations, and regional trunk shows.</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<form class="suisuto-newsletter-form" action="#" method="post">
			<div class="suisuto-newsletter-input-group">
				<input type="email" name="email" class="suisuto-input" placeholder="ENTER YOUR EMAIL ADDRESS" required aria-label="Email address for private dispatches" />
				<button type="submit" class="suisuto-button-submit">SUBSCRIBE</button>
			</div>
			<div class="suisuto-form-feedback" aria-live="polite"></div>
			<p class="suisuto-newsletter-disclaimer">Restrained communications. We honor your privacy.</p>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
