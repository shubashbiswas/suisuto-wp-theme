<?php
/**
 * Sui Suto - WordPress 7.0+ AI Connector & Block Bindings Integration
 *
 * Exclusively engineered for WordPress 7.0+ (current 7.1) and PHP 8.3+.
 * Zero backward-compatibility overhead.
 *
 * Connects the Sui Suto quiet luxury theme with the WordPress 7.x core AI layer
 * (Core AI Client, Connectors API, and Block Bindings), enforcing quiet luxury
 * brand voice, Bengal textile terminology, and dynamic artisan provenance.
 *
 * @package SuiSuto
 * @since 1.2.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * --------------------------------------------------------------------------
 * 1. Brand System Prompt & Core AI Context
 * --------------------------------------------------------------------------
 * Exposes Sui Suto's luxury brand guidelines, aesthetic rules, and craft glossary
 * to the WordPress 7.0+ AI Client, Connectors API, and editorial pipelines.
 */
function suisuto_get_ai_brand_context(): array {
	return array(
		'brand_name'        => 'Sui Suto',
		'tagline'           => 'Quiet Luxury Rooted in Bengal',
		'design_philosophy' => 'Restraint, fine typography, rich materiality, and reverence for Bengal handloom craftsmanship. Never generic e-commerce, never noisy marketing.',
		'tone_of_voice'     => array(
			'adjectives'  => array( 'Poetic', 'Understated', 'Authentic', 'Refined', 'Tactile', 'Timeless' ),
			'avoid_words' => array( 'Cheap', 'Deal', 'Flash Sale', 'Hurry', 'Must-have', 'Super fast', 'Trending now' ),
			'key_themes'  => array(
				'Human touch & artisan mastery',
				'Slow fashion & archival quality',
				'Textile heritage & geographic provenance',
			),
		),
		'textile_glossary'  => array(
			'Jamdani'       => 'Historic figured muslin technique with discontinuous weft patterns woven entirely by hand.',
			'Kantha'        => 'Intricate running-stitch embroidery traditionally practiced across rural Bengal.',
			'Baluchari'     => 'Silk textiles depicting mythological or pastoral narratives in dense woven borders.',
			'Tussar Silk'   => 'Wild textured silk renowned for its natural gold sheen and breathable structure.',
			'Mulberry Silk' => 'Ultra-fine cultivated silk with soft drape and natural luster.',
			'Khadi'         => 'Hand-spun and hand-woven natural cotton representing self-reliance and organic luxury.',
			'Zari'          => 'Real silver and gold-electroplated metallic thread woven into motifs.',
		),
		'color_palette'     => array(
			'Warm Ivory'    => '#FBF9F5',
			'Deep Ink'      => '#111111',
			'Soft White'    => '#FFFFFF',
			'Charcoal'      => '#2B2B2B',
			'Deep Indigo'   => '#1E2430',
			'Muted Clay'    => '#A87C6D',
			'Antique Brass' => '#C4A47C',
		),
	);
}

/**
 * Filter: Hook into WordPress 7.0+ core AI Client context.
 * Exposes brand context to AI Connectors, Gutenberg Site Editor, and autonomous agents.
 */
function suisuto_filter_ai_connector_context( array $context = array() ): array {
	$context['suisuto_brand'] = suisuto_get_ai_brand_context();
	return $context;
}
add_filter( 'wp_ai_context', 'suisuto_filter_ai_connector_context', 10, 1 );

add_filter( 'wp_ai_system_instruction', function( string $instruction ): string {
	$brand = suisuto_get_ai_brand_context();
	$extra = sprintf(
		"\n[Brand Rule]: Always uphold '%s' (%s). Use refined prose with textile integrity. Avoid aggressive promotional language.",
		$brand['brand_name'],
		$brand['tagline']
	);
	return $instruction . $extra;
}, 10, 1 );

/**
 * --------------------------------------------------------------------------
 * 2. Custom Post & Product Meta Registration for AI & Block Editor
 * --------------------------------------------------------------------------
 * Registers structured meta for textile provenance, artisan notes, and care.
 * Marked with show_in_rest => true so Gutenberg, AI connectors, and REST API
 * can seamlessly read and update them.
 */
function suisuto_register_ai_product_meta(): void {
	$meta_keys = array(
		'_suisuto_textile_craft' => array(
			'type'              => 'string',
			'description'       => __( 'Craft technique (e.g., Hand-woven Jamdani, Kantha embroidery)', 'suisuto' ),
			'single'            => true,
			'show_in_rest'      => true,
			'default'           => 'Bengal Handloom Craft',
			'sanitize_callback' => 'sanitize_text_field',
		),
		'_suisuto_artisan_notes' => array(
			'type'              => 'string',
			'description'       => __( 'Narrative describing the artisan, loom cluster, and weave hours', 'suisuto' ),
			'single'            => true,
			'show_in_rest'      => true,
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		),
		'_suisuto_weave_origin'  => array(
			'type'              => 'string',
			'description'       => __( 'Geographic cluster (e.g., Nadia, Murshidabad, Burdwan, Dhaka)', 'suisuto' ),
			'single'            => true,
			'show_in_rest'      => true,
			'default'           => 'Bengal Craft Cluster',
			'sanitize_callback' => 'sanitize_text_field',
		),
		'_suisuto_garment_care'  => array(
			'type'              => 'string',
			'description'       => __( 'Luxury garment longevity and care instructions', 'suisuto' ),
			'single'            => true,
			'show_in_rest'      => true,
			'default'           => 'Dry clean only. Store in breathable muslin bags away from direct sunlight.',
			'sanitize_callback' => 'sanitize_textarea_field',
		),
	);

	$post_types = array( 'product', 'post', 'page' );
	foreach ( $post_types as $post_type ) {
		foreach ( $meta_keys as $key => $args ) {
			register_post_meta( $post_type, $key, $args );
		}
	}
}
add_action( 'init', 'suisuto_register_ai_product_meta' );

/**
 * --------------------------------------------------------------------------
 * 3. Native WordPress 7.0+ Block Bindings API Integration
 * --------------------------------------------------------------------------
 * Directly binds core Gutenberg blocks (Paragraph, Heading) to dynamic
 * textile provenance attributes with zero polyfill or fallback overhead.
 */
function suisuto_register_block_bindings(): void {
	// 1. Textile Provenance & Craft Technique
	register_block_bindings_source(
		'suisuto/textile-provenance',
		array(
			'label'              => __( 'Sui Suto Textile Provenance', 'suisuto' ),
			'get_value_callback' => function( array $source_args, $block_instance ): string {
				$post_id = ! empty( $source_args['post_id'] ) ? (int) $source_args['post_id'] : get_the_ID();
				if ( ! $post_id ) {
					return '';
				}
				$craft  = (string) get_post_meta( $post_id, '_suisuto_textile_craft', true );
				$origin = (string) get_post_meta( $post_id, '_suisuto_weave_origin', true );

				if ( $craft !== '' && $origin !== '' ) {
					return sprintf( '%s — %s', esc_html( $craft ), esc_html( $origin ) );
				}
				return $craft !== '' ? esc_html( $craft ) : __( 'Bengal Handloom Heritage', 'suisuto' );
			},
		)
	);

	// 2. Artisan Narrative Note
	register_block_bindings_source(
		'suisuto/artisan-narrative',
		array(
			'label'              => __( 'Sui Suto Artisan Narrative', 'suisuto' ),
			'get_value_callback' => function( array $source_args, $block_instance ): string {
				$post_id = ! empty( $source_args['post_id'] ) ? (int) $source_args['post_id'] : get_the_ID();
				if ( ! $post_id ) {
					return '';
				}
				$notes = (string) get_post_meta( $post_id, '_suisuto_artisan_notes', true );
				if ( $notes !== '' ) {
					return wp_strip_all_tags( $notes );
				}
				// Quiet luxury fallback
				return __( 'Woven on traditional frame pit looms by master artisans across Bengal. Each piece reflects minor variations authentic to human hands.', 'suisuto' );
			},
		)
	);

	// 3. Garment Care & Preservation
	register_block_bindings_source(
		'suisuto/garment-care',
		array(
			'label'              => __( 'Sui Suto Garment Care', 'suisuto' ),
			'get_value_callback' => function( array $source_args, $block_instance ): string {
				$post_id = ! empty( $source_args['post_id'] ) ? (int) $source_args['post_id'] : get_the_ID();
				if ( ! $post_id ) {
					return '';
				}
				$care = (string) get_post_meta( $post_id, '_suisuto_garment_care', true );
				return $care !== '' ? esc_html( $care ) : __( 'Dry clean only. Store wrapped in breathable unbleached muslin.', 'suisuto' );
			},
		)
	);
}
add_action( 'init', 'suisuto_register_block_bindings' );

/**
 * --------------------------------------------------------------------------
 * 4. AI Media Description & Vision Prompt Guidance
 * --------------------------------------------------------------------------
 * Hooks into WordPress 7.0+ AI vision / media analysis pipeline to inject
 * Bengal textile craft vocabulary into generated image descriptions.
 */
function suisuto_ai_media_alt_instruction( string $instruction, int $attachment_id = 0 ): string {
	$brand       = suisuto_get_ai_brand_context();
	$craft_terms = implode( ', ', array_keys( $brand['textile_glossary'] ) );

	$guidance = sprintf(
		' When analyzing luxury fashion imagery for %s, prioritize describing textile weave structure, silhouette, fabric drape, and artisan techniques (%s). Keep alt text succinct, objective, and accessible.',
		$brand['brand_name'],
		$craft_terms
	);

	return $instruction . $guidance;
}
add_filter( 'wp_ai_image_alt_prompt', 'suisuto_ai_media_alt_instruction', 10, 2 );
