<?php
/**
 * Title: Private Concierge Inquiry Form
 * Slug: suisuto/form-inquiry
 * Description: Private concierge and bespoke atelier inquiry form for custom handloom commissions, bridal consultations, and styling.
 * Categories: suisuto-forms, suisuto-components
 * Keywords: contact, form, inquiry, concierge, bespoke, atelier, custom, commission, styling
 * Block Types: core/post-content
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"suisuto-form-section","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"2rem","right":"2rem"}},"color":{"background":"var(--wp--preset--color--warm-ivory)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull suisuto-form-section" style="background-color:var(--wp--preset--color--warm-ivory);padding-top:6rem;padding-bottom:6rem;padding-left:2rem;padding-right:2rem">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.25em","fontWeight":"600"}},"color":{"text":"var(--wp--preset--color--muted-clay)"}} -->
		<p class="has-muted-clay-color has-text-color has-text-align-center" style="font-size:0.75rem;font-weight:600;letter-spacing:0.25em;text-transform:uppercase">CLIENT ADVISORY &bull; PRIVATE COMMISSIONS</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"center","level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--serif)","fontSize":"clamp(2.25rem, 4vw, 3.25rem)","fontWeight":"400"}}} -->
		<h2 class="has-text-align-center" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.25rem, 4vw, 3.25rem);font-weight:400;margin:0.75rem 0 1rem 0">Inquire with Sui Suto</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.75"}},"color":{"text":"var(--wp--preset--color--charcoal)"}} -->
		<p class="has-charcoal-color has-text-color has-text-align-center" style="font-size:0.95rem;line-height:1.75;margin-bottom:3rem">Our private client advisor assists with bespoke sizing, custom bridal handloom commissions, and international styling consultations.</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<form class="suisuto-concierge-form" action="#" method="post">
			<div class="suisuto-form-row">
				<div class="suisuto-form-field">
					<label for="concierge-name" class="suisuto-label">YOUR FULL NAME</label>
					<input type="text" id="concierge-name" name="name" class="suisuto-input" required placeholder="e.g. Maya Sen" />
				</div>
				<div class="suisuto-form-field">
					<label for="concierge-email" class="suisuto-label">EMAIL ADDRESS</label>
					<input type="email" id="concierge-email" name="email" class="suisuto-input" required placeholder="e.g. maya@example.com" />
				</div>
			</div>

			<div class="suisuto-form-row">
				<div class="suisuto-form-field">
					<label for="concierge-subject" class="suisuto-label">NATURE OF INQUIRY</label>
					<select id="concierge-subject" name="subject" class="suisuto-select">
						<option value="bespoke">Bespoke Handloom Commission</option>
						<option value="bridal">Bridal &amp; Ceremonial Consultation</option>
						<option value="sizing">Fit &amp; Made-to-Measure Guidance</option>
						<option value="press">Press &amp; Editorial Inquiries</option>
					</select>
				</div>
				<div class="suisuto-form-field">
					<label for="concierge-region" class="suisuto-label">CITY / REGION</label>
					<input type="text" id="concierge-region" name="region" class="suisuto-input" placeholder="e.g. London, Dhaka, New York" />
				</div>
			</div>

			<div class="suisuto-form-field">
				<label for="concierge-message" class="suisuto-label">YOUR MESSAGE OR REQUIREMENTS</label>
				<textarea id="concierge-message" name="message" class="suisuto-textarea" rows="5" required placeholder="Tell us about the piece or occasion you envision..."></textarea>
			</div>

			<div class="suisuto-form-actions">
				<button type="submit" class="wp-block-button__link suisuto-btn-primary">SUBMIT INQUIRY</button>
			</div>
			
			<div class="suisuto-form-feedback" aria-live="polite"></div>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
