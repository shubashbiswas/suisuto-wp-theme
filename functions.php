<?php
/**
 * Sui Suto Theme Functions and Definitions
 *
 * Engineered exclusively for WordPress 7.0+ (current 7.1) and PHP 8.3+.
 * Zero backward-compatibility overhead.
 *
 * @package SuiSuto
 * @since 1.2.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for WordPress 7.0+ and WooCommerce features.
 */
function suisuto_setup(): void {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Enable Block Styles & Align Wide
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	// HTML5 markup support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// WooCommerce Support
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'suisuto_setup' );

/**
 * Enqueue scripts and styles.
 */
function suisuto_scripts(): void {
	// Google Fonts
	wp_enqueue_style(
		'suisuto-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap',
		array(),
		null
	);

	// Theme Main Stylesheet (Auto cache-busting in development)
	wp_enqueue_style( 'suisuto-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Theme Core Vanilla JS
	wp_enqueue_script(
		'suisuto-theme-js',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/theme.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'suisuto_scripts' );

/**
 * Register Sui Suto Custom Block Pattern Categories
 */
function suisuto_register_pattern_categories(): void {
	register_block_pattern_category(
		'suisuto-luxury',
		array(
			'label'       => __( 'Sui Suto Brand & Stories', 'suisuto' ),
			'description' => __( 'Quiet luxury patterns for Sui Suto brand storytelling', 'suisuto' ),
		)
	);

	register_block_pattern_category(
		'suisuto-components',
		array(
			'label'       => __( 'Sui Suto Components', 'suisuto' ),
			'description' => __( 'Core UI components: heroes, cards, banners', 'suisuto' ),
		)
	);

	register_block_pattern_category(
		'suisuto-woocommerce',
		array(
			'label'       => __( 'Sui Suto Commerce', 'suisuto' ),
			'description' => __( 'Minimalist luxury WooCommerce layouts and product displays', 'suisuto' ),
		)
	);

	register_block_pattern_category(
		'suisuto-forms',
		array(
			'label'       => __( 'Sui Suto Forms', 'suisuto' ),
			'description' => __( 'Refined luxury forms for newsletter and bespoke inquiry', 'suisuto' ),
		)
	);

	register_block_pattern_category(
		'suisuto-editorial',
		array(
			'label'       => __( 'Sui Suto Editorial & Journal', 'suisuto' ),
			'description' => __( 'Editorial storytelling, articles, and craft narratives', 'suisuto' ),
		)
	);
}
add_action( 'init', 'suisuto_register_pattern_categories' );

/**
 * Register Block Styles for Native Gutenberg Blocks
 */
function suisuto_register_block_styles(): void {
	// Button Styles
	register_block_style(
		'core/button',
		array(
			'name'       => 'fill',
			'label'      => __( 'Luxury Solid (Default)', 'suisuto' ),
			'is_default' => true,
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'outline',
			'label' => __( 'Luxury Outline', 'suisuto' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'underline',
			'label' => __( 'Minimalist Underline', 'suisuto' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'brass',
			'label' => __( 'Antique Brass Accent', 'suisuto' ),
		)
	);

	// Image Styles
	register_block_style(
		'core/image',
		array(
			'name'  => 'luxury-zoom',
			'label' => __( 'Slow Zoom Hover', 'suisuto' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'editorial-frame',
			'label' => __( 'Editorial Framing', 'suisuto' ),
		)
	);
}
add_action( 'init', 'suisuto_register_block_styles' );

/**
 * Load WordPress 7.0+ AI Connector & Block Bindings integration.
 */
require_once get_template_directory() . '/inc/ai-connector.php';

/**
 * Multisite Subsite URL Harmonization
 *
 * Automatically adjusts root-relative internal links in rendered blocks
 * so they stay within the current subsite (e.g., /bd/shop, /in/shop)
 * instead of leaking to the root site.
 */
function suisuto_multisite_fix_relative_urls( string $block_content, array $block ): string {
	if ( ! is_multisite() || is_main_site() ) {
		return $block_content;
	}

	$subsite_path = get_blog_details()->path; // e.g. "/bd/" or "/in/"
	if ( empty( $subsite_path ) || '/' === $subsite_path ) {
		return $block_content;
	}

	$subsite_path_trimmed = rtrim( $subsite_path, '/' ); // e.g. "/bd"
	$subsite_slug         = ltrim( $subsite_path, '/' ); // e.g. "bd/"

	// Rewrite root-relative links like href="/shop" to href="/bd/shop"
	$pattern     = '/href="\/((?!' . preg_quote( $subsite_slug, '/' ) . '|#|\/|wp-content|wp-includes|wp-admin|wp-json)[^"]*)"/i';
	$replacement = 'href="' . $subsite_path_trimmed . '/$1"';

	return (string) preg_replace( $pattern, $replacement, $block_content );
}
add_filter( 'render_block', 'suisuto_multisite_fix_relative_urls', 10, 2 );

/**
 * Custom WooCommerce Breadcrumb Styling
 */
function suisuto_woocommerce_breadcrumbs( array $defaults ): array {
	$defaults['delimiter']   = ' <span class="suisuto-sep" style="opacity:0.4;margin:0 0.5rem">/</span> ';
	$defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'suisuto' ) . '">';
	$defaults['wrap_after']  = '</nav>';
	$defaults['home']        = _x( 'HOME', 'breadcrumb', 'suisuto' );
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'suisuto_woocommerce_breadcrumbs' );

/**
 * Luxury Single Product Add to Cart Button Text
 */
function suisuto_custom_single_add_to_cart_text(): string {
	return __( 'ADD TO BAG', 'suisuto' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'suisuto_custom_single_add_to_cart_text' );

/**
 * Luxury Checkout Place Order Button Text
 */
function suisuto_custom_order_button_text(): string {
	return __( 'PLACE ORDER &amp; DISPATCH', 'suisuto' );
}
add_filter( 'woocommerce_order_button_text', 'suisuto_custom_order_button_text' );
