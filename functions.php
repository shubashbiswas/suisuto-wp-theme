<?php
/**
 * Sui Suto Theme Functions and Definitions
 *
 * @package SuiSuto
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'suisuto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function suisuto_setup() {
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
endif;
add_action( 'after_setup_theme', 'suisuto_setup' );

/**
 * Enqueue scripts and styles.
 */
function suisuto_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'suisuto-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap',
		array(),
		null
	);

	// Theme Main Stylesheet
	wp_enqueue_style( 'suisuto-style', get_stylesheet_uri(), array(), '1.1.0' );

	// Theme Core Vanilla JS
	wp_enqueue_script(
		'suisuto-theme-js',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		'1.1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'suisuto_scripts' );

/**
 * Register Sui Suto Custom Block Pattern Categories
 */
function suisuto_register_pattern_categories() {
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
}
add_action( 'init', 'suisuto_register_pattern_categories' );

/**
 * Register Block Styles for Native Gutenberg Blocks
 */
function suisuto_register_block_styles() {
	// Button Styles
	register_block_style(
		'core/button',
		array(
			'name'  => 'fill',
			'label' => __( 'Luxury Solid (Default)', 'suisuto' ),
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
 * Load WordPress AI Connector & Block Bindings integration.
 */
require_once get_template_directory() . '/inc/ai-connector.php';

