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

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for WordPress 7.0+ and WooCommerce features.
 */
function suisuto_setup(): void
{
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// Enable Block Styles & Align Wide
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('editor-styles');
	add_editor_style('style.css');

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
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	// Disable background telemetry tracking
	add_filter('woocommerce_apply_tracking', '__return_false');
}
add_action('after_setup_theme', 'suisuto_setup');

/**
 * Enqueue scripts and styles.
 */
function suisuto_scripts(): void
{
	// Google Fonts
	wp_enqueue_style(
		'suisuto-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap',
		array(),
		null
	);

	// Theme Main Stylesheet (Auto cache-busting in development)
	wp_enqueue_style('suisuto-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

	// Theme Core Vanilla JS
	wp_enqueue_script(
		'suisuto-theme-js',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		filemtime(get_template_directory() . '/assets/js/theme.js'),
		true
	);
}
add_action('wp_enqueue_scripts', 'suisuto_scripts');

/**
 * Register Sui Suto Custom Block Pattern Categories
 */
function suisuto_register_pattern_categories(): void
{
	register_block_pattern_category(
		'suisuto-luxury',
		array(
			'label'       => __('Sui Suto Brand & Stories', 'suisuto'),
			'description' => __('Quiet luxury patterns for Sui Suto brand storytelling', 'suisuto'),
		)
	);

	register_block_pattern_category(
		'suisuto-components',
		array(
			'label'       => __('Sui Suto Components', 'suisuto'),
			'description' => __('Core UI components: heroes, cards, banners', 'suisuto'),
		)
	);

	register_block_pattern_category(
		'suisuto-woocommerce',
		array(
			'label'       => __('Sui Suto Commerce', 'suisuto'),
			'description' => __('Minimalist luxury WooCommerce layouts and product displays', 'suisuto'),
		)
	);

	register_block_pattern_category(
		'suisuto-forms',
		array(
			'label'       => __('Sui Suto Forms', 'suisuto'),
			'description' => __('Refined luxury forms for newsletter and bespoke inquiry', 'suisuto'),
		)
	);

	register_block_pattern_category(
		'suisuto-editorial',
		array(
			'label'       => __('Sui Suto Editorial & Journal', 'suisuto'),
			'description' => __('Editorial storytelling, articles, and craft narratives', 'suisuto'),
		)
	);
}
add_action('init', 'suisuto_register_pattern_categories');

/**
 * Register Block Styles for Native Gutenberg Blocks
 */
function suisuto_register_block_styles(): void
{
	// Button Styles
	register_block_style(
		'core/button',
		array(
			'name'       => 'fill',
			'label'      => __('Luxury Solid (Default)', 'suisuto'),
			'is_default' => true,
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'outline',
			'label' => __('Luxury Outline', 'suisuto'),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'underline',
			'label' => __('Minimalist Underline', 'suisuto'),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'brass',
			'label' => __('Antique Brass Accent', 'suisuto'),
		)
	);

	// Image Styles
	register_block_style(
		'core/image',
		array(
			'name'  => 'luxury-zoom',
			'label' => __('Slow Zoom Hover', 'suisuto'),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'editorial-frame',
			'label' => __('Editorial Framing', 'suisuto'),
		)
	);
}
add_action('init', 'suisuto_register_block_styles');

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
function suisuto_multisite_fix_relative_urls(string $block_content, array $block): string
{
	if (! is_multisite() || is_main_site()) {
		return $block_content;
	}

	$subsite_path = get_blog_details()->path; // e.g. "/bd/" or "/in/"
	if (empty($subsite_path) || '/' === $subsite_path) {
		return $block_content;
	}

	$subsite_path_trimmed = rtrim($subsite_path, '/'); // e.g. "/bd"
	$subsite_slug         = ltrim($subsite_path, '/'); // e.g. "bd/"

	// Rewrite root-relative links like href="/shop" to href="/bd/shop"
	$pattern     = '/href="\/((?!' . preg_quote($subsite_slug, '/') . '|#|\/|wp-content|wp-includes|wp-admin|wp-json)[^"]*)"/i';
	$replacement = 'href="' . $subsite_path_trimmed . '/$1"';

	return (string) preg_replace($pattern, $replacement, $block_content);
}
add_filter('render_block', 'suisuto_multisite_fix_relative_urls', 10, 2);

/**
 * Custom WooCommerce Breadcrumb Styling
 */
function suisuto_woocommerce_breadcrumbs(array $defaults): array
{
	$defaults['delimiter']   = '<span class="suisuto-sep" aria-hidden="true">/</span>';
	$defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb suisuto-luxury-breadcrumbs" aria-label="' . esc_attr__('Breadcrumbs', 'suisuto') . '"><div class="suisuto-breadcrumb-pill">';
	$defaults['wrap_after']  = '</div></nav>';
	$defaults['before']      = '<span class="suisuto-breadcrumb-current">';
	$defaults['after']       = '</span>';
	$defaults['home']        = _x('HOME', 'breadcrumb', 'suisuto');
	return $defaults;
}
add_filter('woocommerce_breadcrumb_defaults', 'suisuto_woocommerce_breadcrumbs');

/**
 * Luxury Single Product Add to Cart Button Text
 */
function suisuto_custom_single_add_to_cart_text(): string
{
	return __('ADD TO BAG', 'suisuto');
}
add_filter('woocommerce_product_single_add_to_cart_text', 'suisuto_custom_single_add_to_cart_text');

/**
 * Luxury Catalog Product Card Add to Cart Button Text
 */
function suisuto_custom_archive_add_to_cart_text(string $text, $product = null): string
{
	if ($product && $product->is_type('variable')) {
		return __('SELECT OPTIONS', 'suisuto');
	}
	if ($product && ! $product->is_in_stock()) {
		return __('READ MORE', 'suisuto');
	}
	return __('+ ADD TO BAG', 'suisuto');
}
add_filter('woocommerce_product_add_to_cart_text', 'suisuto_custom_archive_add_to_cart_text', 10, 2);

/**
 * Luxury Checkout Place Order Button Text
 */
function suisuto_custom_order_button_text(): string
{
	return __('PLACE ORDER &amp; DISPATCH', 'suisuto');
}
add_filter('woocommerce_order_button_text', 'suisuto_custom_order_button_text');

/**
 * Fallback Favicon Support
 */
function suisuto_fallback_favicon(): void
{
	if (! has_site_icon()) {
		$favicon_url = get_template_directory_uri() . '/assets/images/logo/favicon-b.webp';
		echo '<link rel="icon" type="image/webp" href="' . esc_url($favicon_url) . '">' . "\n";
	}
}
add_action('wp_head', 'suisuto_fallback_favicon', 100);

/**
 * --------------------------------------------------------------------------
 * Quiet Luxury Interactive Price Filter Component
 * --------------------------------------------------------------------------
 */
function suisuto_render_price_filter(array $attributes = array(), string $content = ''): string
{
	if (is_admin()) {
		return '';
	}

	global $wpdb;
	$min_max = $wpdb->get_row("SELECT MIN(min_price) as min, MAX(max_price) as max FROM {$wpdb->prefix}wc_product_meta_lookup WHERE stock_status = 'instock' AND min_price > 0");
	$catalog_min = ! empty($min_max->min) ? (int) floor((float) $min_max->min) : 0;
	$catalog_max = ! empty($min_max->max) ? (int) ceil((float) $min_max->max) : 1000;

	$currency_symbol = function_exists('get_woocommerce_currency_symbol') ? get_woocommerce_currency_symbol() : '$';

	$current_min = isset($_GET['min_price']) ? (int) sanitize_text_field(wp_unslash($_GET['min_price'])) : $catalog_min;
	$current_max = isset($_GET['max_price']) ? (int) sanitize_text_field(wp_unslash($_GET['max_price'])) : $catalog_max;

	$is_filtered = (isset($_GET['min_price']) || isset($_GET['max_price']));

	$current_url = remove_query_arg(array('min_price', 'max_price', 'paged', 'page'));

	ob_start();
?>
	<div class="suisuto-price-filter-widget">
		<!-- Quick Curated Price Tier Pills -->
		<div class="suisuto-price-tiers">
			<?php
			$tiers = array(
				array('label' => 'ALL', 'min' => null, 'max' => null),
				array('label' => 'UNDER $250', 'min' => null, 'max' => 250),
				array('label' => '$250–$500', 'min' => 250, 'max' => 500),
				array('label' => '$500+', 'min' => 500, 'max' => null),
			);
			foreach ($tiers as $tier) {
				$tier_url = $current_url;
				if (null !== $tier['min']) {
					$tier_url = add_query_arg('min_price', $tier['min'], $tier_url);
				}
				if (null !== $tier['max']) {
					$tier_url = add_query_arg('max_price', $tier['max'], $tier_url);
				}
				$is_active = false;
				if (null === $tier['min'] && null === $tier['max'] && ! $is_filtered) {
					$is_active = true;
				} elseif (null !== $tier['min'] && null !== $tier['max'] && $current_min === $tier['min'] && $current_max === $tier['max']) {
					$is_active = true;
				} elseif (null === $tier['min'] && null !== $tier['max'] && ! isset($_GET['min_price']) && $current_max === $tier['max']) {
					$is_active = true;
				} elseif (null !== $tier['min'] && null === $tier['max'] && ! isset($_GET['max_price']) && $current_min === $tier['min']) {
					$is_active = true;
				}
			?>
				<a href="<?php echo esc_url($tier_url); ?>" class="suisuto-price-tier-pill <?php echo $is_active ? 'is-active' : ''; ?>">
					<?php echo esc_html($tier['label']); ?>
				</a>
			<?php
			}
			?>
		</div>

		<!-- Fine Dual Slider Form -->
		<form method="get" action="<?php echo esc_url($current_url); ?>" class="suisuto-price-slider-form">
			<?php
			foreach ($_GET as $key => $val) {
				if (! in_array($key, array('min_price', 'max_price', 'paged', 'page'), true) && is_scalar($val)) {
					echo '<input type="hidden" name="' . esc_attr($key) . '" value="' . esc_attr(wp_unslash($val)) . '">';
				}
			}
			?>
			<div class="suisuto-slider-track-wrap">
				<div class="suisuto-slider-track-bg"></div>
				<div class="suisuto-slider-track-highlight" id="suisutoSliderHighlight"></div>
				<input type="range" class="suisuto-range-input suisuto-range-min"
					name="min_price" id="suisutoMinRange"
					min="<?php echo esc_attr($catalog_min); ?>"
					max="<?php echo esc_attr($catalog_max); ?>"
					value="<?php echo esc_attr($current_min); ?>"
					step="10">
				<input type="range" class="suisuto-range-input suisuto-range-max"
					name="max_price" id="suisutoMaxRange"
					min="<?php echo esc_attr($catalog_min); ?>"
					max="<?php echo esc_attr($catalog_max); ?>"
					value="<?php echo esc_attr($current_max); ?>"
					step="10">
			</div>

			<div class="suisuto-price-inputs-row">
				<div class="suisuto-price-input-box">
					<span class="suisuto-currency"><?php echo esc_html($currency_symbol); ?></span>
					<input type="number" id="suisutoMinInput" value="<?php echo esc_attr($current_min); ?>" min="<?php echo esc_attr($catalog_min); ?>" max="<?php echo esc_attr($catalog_max); ?>">
				</div>
				<span class="suisuto-price-sep">&mdash;</span>
				<div class="suisuto-price-input-box">
					<span class="suisuto-currency"><?php echo esc_html($currency_symbol); ?></span>
					<input type="number" id="suisutoMaxInput" value="<?php echo esc_attr($current_max); ?>" min="<?php echo esc_attr($catalog_min); ?>" max="<?php echo esc_attr($catalog_max); ?>">
				</div>
			</div>

			<div class="suisuto-price-actions">
				<button type="submit" class="suisuto-apply-price-btn">APPLY FILTER</button>
				<?php if ($is_filtered) : ?>
					<a href="<?php echo esc_url($current_url); ?>" class="suisuto-reset-price-btn">RESET</a>
				<?php endif; ?>
			</div>
		</form>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var minR = document.getElementById('suisutoMinRange');
				var maxR = document.getElementById('suisutoMaxRange');
				var minI = document.getElementById('suisutoMinInput');
				var maxI = document.getElementById('suisutoMaxInput');
				var hl = document.getElementById('suisutoSliderHighlight');
				if (!minR || !maxR || !hl) return;

				var cMin = parseInt(minR.min, 10);
				var cMax = parseInt(minR.max, 10);
				var range = (cMax - cMin) || 1;

				function updateHighlight() {
					var vMin = Math.min(parseInt(minR.value, 10), parseInt(maxR.value, 10));
					var vMax = Math.max(parseInt(minR.value, 10), parseInt(maxR.value, 10));
					var pLeft = ((vMin - cMin) / range) * 100;
					var pRight = 100 - (((vMax - cMin) / range) * 100);
					hl.style.left = pLeft + '%';
					hl.style.right = pRight + '%';
					if (minI) minI.value = vMin;
					if (maxI) maxI.value = vMax;
				}

				minR.addEventListener('input', function() {
					if (parseInt(minR.value, 10) > parseInt(maxR.value, 10)) {
						minR.value = maxR.value;
					}
					updateHighlight();
				});

				maxR.addEventListener('input', function() {
					if (parseInt(maxR.value, 10) < parseInt(minR.value, 10)) {
						maxR.value = minR.value;
					}
					updateHighlight();
				});

				if (minI) {
					minI.addEventListener('change', function() {
						var val = Math.max(cMin, Math.min(parseInt(minI.value, 10) || cMin, parseInt(maxR.value, 10)));
						minR.value = val;
						updateHighlight();
					});
				}

				if (maxI) {
					maxI.addEventListener('change', function() {
						var val = Math.min(cMax, Math.max(parseInt(maxI.value, 10) || cMax, parseInt(minR.value, 10)));
						maxR.value = val;
						updateHighlight();
					});
				}

				updateHighlight();
			});
		</script>
	</div>
<?php
	return ob_get_clean();
}

function suisuto_register_price_filter_block(): void
{
	register_block_type('suisuto/price-filter', array(
		'render_callback' => 'suisuto_render_price_filter',
	));
}
add_action('init', 'suisuto_register_price_filter_block');


/**
 * --------------------------------------------------------------------------
 * Core Editorial Pages Auto-Provisioning & Routing (Phase 5)
 * --------------------------------------------------------------------------
 * Ensures pages for 'craft', 'about', 'journal', and 'collections' exist
 * in the WordPress database so block templates resolve natively (200 OK).
 */
function suisuto_auto_provision_core_pages(): void
{
	$core_pages = array(
		'craft'       => array(
			'title'   => 'Craft & Heritage',
			'content' => '<!-- wp:paragraph --><p>Living wefts of Bengal. Five centuries of human dexterity, riverine climate, and handloom mastery.</p><!-- /wp:paragraph -->',
		),
		'about'       => array(
			'title'   => 'About the Atelier',
			'content' => '<!-- wp:paragraph --><p>Quiet luxury rooted in Bengal. Reclaiming centuries of textile majesty for the contemporary world.</p><!-- /wp:paragraph -->',
		),
		'journal'     => array(
			'title'   => 'Journal & Dispatches',
			'content' => '<!-- wp:paragraph --><p>Reflections on slow fashion, textile archaeology, human craftsmanship, and the living arts of Bengal.</p><!-- /wp:paragraph -->',
		),
		'collections' => array(
			'title'   => 'Curated Collections',
			'content' => '<!-- wp:paragraph --><p>Handloom saris, tailored couture, and rare heirloom textiles woven in rhythmic cadence with Bengal seasonal cycles.</p><!-- /wp:paragraph -->',
		),
		'contact'     => array(
			'title'   => 'Client Advisory & Concierge',
			'content' => '<!-- wp:paragraph --><p>Private appointments, bespoke bridal handloom commissions, and atelier concierge inquiries.</p><!-- /wp:paragraph -->',
		),
		'terms'       => array(
			'title'   => 'Terms of Service',
			'content' => '<!-- wp:paragraph --><p>The protocols, client commitments, and craftsmanship standards governing commissions, orders, and services with the House of Sui Suto.</p><!-- /wp:paragraph -->',
		),
		'privacy-policy' => array(
			'title'   => 'Privacy Policy',
			'content' => '<!-- wp:paragraph --><p>How the House of Sui Suto safeguards client discretion, personal measurements, transactional records, and private communications.</p><!-- /wp:paragraph -->',
		),
	);

	$needs_flush = false;

	foreach ($core_pages as $slug => $data) {
		$page = get_page_by_path($slug, OBJECT, 'page');
		if (! $page) {
			$page_id = wp_insert_post(
				array(
					'post_title'     => $data['title'],
					'post_name'      => $slug,
					'post_content'   => $data['content'],
					'post_status'    => 'publish',
					'post_type'      => 'page',
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
				)
			);
			if ($page_id && ! is_wp_error($page_id)) {
				$needs_flush = true;
			}
		}
	}

	if ($needs_flush) {
		flush_rewrite_rules(false);
	}
}
add_action('init', 'suisuto_auto_provision_core_pages', 20);

/**
 * Intercept 404s for core editorial pages and resolve directly to block templates.
 */
function suisuto_fallback_core_pages_404(bool $preempt, \WP_Query $query): bool
{
	if (! $query->is_main_query()) {
		return $preempt;
	}

	$request_path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '', '/');
	$parts        = explode('/', $request_path);
	$slug         = end($parts);

	$core_slugs = array('craft', 'about', 'journal', 'collections', 'contact', 'terms', 'privacy-policy');
	if (in_array($slug, $core_slugs, true)) {
		$page = get_page_by_path($slug, OBJECT, 'page');
		if (! $page) {
			$page_id = wp_insert_post(
				array(
					'post_title'     => ucwords(str_replace('-', ' ', $slug)),
					'post_name'      => $slug,
					'post_status'    => 'publish',
					'post_type'      => 'page',
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
				)
			);
			if ($page_id && ! is_wp_error($page_id)) {
				$page = get_post($page_id);
				flush_rewrite_rules(false);
			}
		}

		if ($page instanceof \WP_Post) {
			$query->query(
				array(
					'page_id'   => $page->ID,
					'post_type' => 'page',
				)
			);
			$query->is_page           = true;
			$query->is_singular       = true;
			$query->is_404            = false;
			$query->queried_object    = $page;
			$query->queried_object_id = $page->ID;
			status_header(200);
			return true;
		}
	}

	return $preempt;
}
add_filter('pre_handle_404', 'suisuto_fallback_core_pages_404', 10, 2);
