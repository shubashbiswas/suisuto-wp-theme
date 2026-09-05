<div align="center">

# 🧵 Sui Suto Studio (সুই সুতো) — `suisuto-studio`

> **70% Brand / 30% Ecommerce**  
> A fashion-forward, editorial ecommerce experience focused on brand identity, campaign storytelling, premium visual presentation, and contemporary fashion aesthetics. Designed to create desire and establish a strong luxury-oriented brand presence while maintaining a streamlined shopping experience.

**Short GitHub description:**
> Editorial fashion ecommerce experience focused on brand identity, storytelling, and premium visual design.

[![WordPress](https://img.shields.io/badge/WordPress-7.1%2B-21759b?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![Full Site Editing](https://img.shields.io/badge/FSE-Block_Theme-8b5cf6?style=for-the-badge&logo=wordpress&logoColor=white)](#)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-Ready-96588a?style=for-the-badge&logo=woocommerce&logoColor=white)](https://woocommerce.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.3%2B-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/License-GPLv2-f59e0b?style=for-the-badge)](#)

[Design Philosophy](#-design-philosophy) • [Key Features](#-key-features) • [Color & Typography](#-color-palette--typography) • [Pattern Library](#-block-pattern-library) • [AI Connector](#-ai-connector--block-bindings) • [Installation](#-installation)

</div>

---

## Overview

**Sui Suto Studio** (`suisuto-studio`) is engineered around a core philosophy:
> **"A fashion-forward, editorial ecommerce experience focused on brand identity, campaign storytelling, premium visual presentation, and contemporary fashion aesthetics."**

### 70% Brand / 30% Ecommerce
Designed to create desire and establish a strong luxury-oriented brand presence while maintaining a streamlined shopping experience.

---

## 🏛️ Design Philosophy

**Sui Suto (সুই সুতো)** brings centuries of Bengal textile artistry—Dhaka Muslin, Jamdani, Baluchari, Garad, Tangail Silk, Shibori Indigo, and handloom Khadi—into a contemporary quiet luxury fashion house.

Unlike conventional e-commerce themes burdened with visual noise and bloated frameworks, Sui Suto is built with **monastic restraint, editorial typography, generous whitespace, and pure native WordPress Gutenberg architecture**.

> *"Simplicity is not the absence of clutter, that's a consequence of simplicity. Simplicity is somehow essentially describing the purpose and place of an object and product."*

---

## ✨ Key Features

* **⚡ Pure Block Theme (Full Site Editing)**: 100% native WordPress block templates, template parts, and `theme.json` configuration. Zero page builder dependency.
* **🛍️ Quiet Luxury WooCommerce**: Bespoke product grids, editorial single-product showcase layouts, zoom hover states, and minimalist inquiry forms.
* **🌐 Multisite & Regional Store Ready**: Fully compatible with WordPress Multisite (subdirectories `/bd/`, `/in/`, etc.) featuring automatic subsite URL harmonization (`suisuto_multisite_fix_relative_urls`), query inheritance, and zero cross-store link leakage.
* **🎨 5 Curated Pattern Categories**: 17 custom block patterns spanning Brand Stories, Editorial Hero Banners, Curated Collection Grids, Journal Essays, and Bespoke Inquiry Forms.
* **🤖 WordPress AI Connector & Block Bindings**: Built-in dynamic block bindings (`suisuto/ai-product-meta`, `suisuto/craft-story`, `suisuto/artisan-origin`) connecting AI-assisted fashion narratives directly to native Gutenberg blocks.
* **📱 Responsive & Fluid Typography**: Fluid clamp-based scale ensuring graceful scaling from 4K cinema displays down to mobile screens.
* **💨 Ultra-Lightweight**: Zero external CSS frameworks (no Bootstrap, no Tailwind runtime). Pure modern CSS utilizing CSS variables and native Gutenberg presets.

---

## 🎨 Color Palette & Typography

### Color Palette

| Token | Name | Hex | Usage |
| :--- | :--- | :--- | :--- |
| `warm-ivory` | Warm Ivory | `#FBF9F5` | Primary background, clean canvas |
| `deep-ink` | Deep Ink | `#111111` | Primary typography & contrast |
| `antique-brass` | Antique Brass | `#C5A059` | Subtle luxury accents, borders, tags |
| `terracotta` | Bengal Terracotta | `#A94438` | Heritage highlight, seasonal banners |
| `indigo` | Handloom Indigo | `#1B263B` | Deep nocturnal accents, denim |
| `pure-white` | Pure White | `#FFFFFF` | Card surfaces, modal elevations |

### Editorial Typography

* **Headings & Editorial**: `Cormorant Garamond` (Serif) — Refined, timeless haute couture sensibility.
* **Body & Interface**: `Plus Jakarta Sans` (Sans-Serif) — Clean, legible modern geometric sans for optimal readability.

---

## 🧩 Block Pattern Library

Sui Suto Studio organizes 17 custom block patterns into 5 dedicated Gutenberg categories:

### 1. `suisuto-luxury` (Brand & Stories)

* **`hero-luxury`**: Split-screen editorial hero with asymmetric typography and seasonal campaign link.
* **`brand-intro`**: Centered brand manifesto celebrating Bengal's artisanal heritage.
* **`brand-story`**: Detailed narrative layout detailing brand origins, human craftsmanship, textile heritage metrics, and founder philosophy.
* **`craft-story`**: Detailed textile lineage narrative highlighting Dhaka Muslin, Jamdani, and handloom weaving.
* **`campaign-image`**: Full-width immersive campaign visual banner with subtle typographic overlay and delta coordinates.
* **`quote`**: Monastic quiet luxury editorial pull quote celebrating artisan dedication and Bengal textile philosophy.

### 2. `suisuto-components` (Core UI)

* **`hero-fullscreen`**: Immersive full-viewport campaign hero banner.
* **`featured-collection`**: Editorial showcase highlighting a flagship seasonal capsule with large campaign photography, narrative typography, and dual CTAs.
* **`collection-card`**: Elegant card layout with slow zoom hover micro-animation.
* **`collection-grid`**: Editorial masonry collection gallery.
* **`product-card`**: Minimalist product presentation card with clean pricing and material tags.
* **`image-text`**: Asymmetric editorial split section pairing framed craft photography with deep textile storytelling and material specifications.

### 3. `suisuto-woocommerce` (Commerce)

* **`product-grid`**: Pure Gutenberg 4-column catalog grid featuring curated artisanal creations with tags, prices, and slow zoom hover effects.
* **`product-grid-featured`**: Luxury curated product showcase with responsive columns and subtle hover elevation.

### 4. `suisuto-editorial` (Journal & Essays)

* **`journal-section`**: Three-column editorial story grid featuring curated essays on craft heritage, textile history, and artisanal methodology.

### 5. `suisuto-forms` (Refined Forms)

* **`newsletter`**: Minimalist luxury newsletter signup box.
* **`form-inquiry`**: Bespoke atelier customer inquiry and private consultation form.

---

## 🤖 AI Connector & Block Bindings

Located in [`inc/ai-connector.php`](file:///c:/Users/Ratan/Local%20Sites/multi/app/public/wp-content/themes/suisuto-studio/inc/ai-connector.php), Sui Suto leverages the **WordPress 7.1+ Block Bindings API**:

```php
// Registered Sources:
'suisuto/ai-product-meta' // Dynamic AI-generated product fabric origin and styling note
'suisuto/craft-story'     // Artisanal loom provenance and history
'suisuto/artisan-origin'  // Regional Bengal district artisan attribution
```

This allows native core blocks (Paragraphs, Headings) to dynamically pull AI-generated or meta-driven textile narratives without custom shortcodes or third-party plugins.

---

## 🌐 Multisite & Multi-Region Storefronts

Sui Suto is architected to power multi-region luxury houses using **WordPress Multisite (Subdirectories)**:

* **Global Store** (`/`) — International orders in USD ($).
* **Bangladesh Store** (`/bd/`) — Direct artisanal delivery in BDT (৳).
* **India Store** (`/in/`) — Regional delivery in INR (₹).

### Key Architectural Capabilities

* **Zero Subsite Link Leakage**: Built-in `suisuto_multisite_fix_relative_urls` dynamically filters rendered blocks so header navigation, footer links, and block patterns stay strictly within the current subsite (e.g. `/bd/shop`, `/in/craft`).
* **Query & Catalog Inheritance**: Modern `wp:woocommerce/product-collection` with `inherit: true` ensures product archives automatically display the respective region's catalog, currency, and local pricing.
* **Regional Switcher Integration**: Native support for the `[geo_regional_switcher]` shortcode in the sticky header tools bar.

---

## 📂 Theme Directory Structure

```
wp-content/themes/suisuto/
├── style.css                     # Theme metadata, core styling & WooCommerce luxury suite
├── theme.json                    # Global styles, palette, typography & layout settings
├── functions.php                 # Enqueue scripts, patterns & WooCommerce filters
├── screenshot.jpg                # WordPress admin theme preview image
├── README.md                     # Full theme documentation
├── readme.txt                    # WordPress.org standard theme readme
├── LICENSE                       # GNU GPLv2 License
├── assets/
│   ├── js/
│   │   └── theme.js              # Lightweight vanilla micro-interactions
│   └── images/                   # Curated high-res lookbook & product photography
├── inc/
│   └── ai-connector.php          # WordPress Block Bindings & AI integration
├── parts/
│   ├── header.html               # Minimalist sticky navigation header
│   └── footer.html               # Luxury four-column editorial footer
├── patterns/                     # 15 Custom Gutenberg block patterns
└── templates/
    ├── front-page.html           # Editorial brand homepage
    ├── page-home.html            # Alternate homepage template
    ├── page-collections.html     # Curated seasonal editions and capsules showcase
    ├── page-craft.html           # Bengal craft lineage, loom process & ethical attribution
    ├── page-about.html           # Atelier manifesto, brand story & commitment metrics
    ├── page-contact.html / contact.html # Private concierge & atelier bespoke inquiry
    ├── page-terms.html / terms.html     # Terms of service, commissions & craft standards
    ├── page-privacy-policy.html / privacy-policy.html # Client discretion & privacy protocols
    ├── page-journal.html / journal.html # High-fashion editorial journal & craft essays
    ├── archive-product.html      # Quiet luxury shop catalog & product archive
    ├── taxonomy-product_cat.html # Category archive with editorial term description
    ├── product-search-results.html# Product search results layout
    ├── single-product.html       # Editorial luxury single-product showcase & dossiers
    ├── page-cart.html / cart.html# Minimalist shopping bag experience
    ├── page-checkout.html / checkout.html # Distraction-free atelier checkout
    ├── order-confirmation.html   # Post-purchase receipt & concierge reassurance
    ├── page-my-account.html / my-account.html # Client atelier account portal
    ├── 404.html                  # Bespoke luxury 404 page
    └── index.html                # Universal fallback template
```


---

## 🚀 Installation & Setup

1. Copy or clone the `suisuto-studio` repository into your WordPress themes folder:

   ```bash
   wp-content/themes/suisuto-studio/
   ```

2. Navigate to **WordPress Admin** &rarr; **Appearance** &rarr; **Themes**.
3. Hover over **Sui Suto Studio** and click **Activate**.
4. **Recommended Companion**: Install [**DevForge**](file:///c:/Users/Ratan/Local%20Sites/multi/app/public/wp-content/plugins/devforge/) for instant cache busting, real-time template hierarchy inspection, and user switching.

---

## 📄 License

Sui Suto is distributed under the **GNU General Public License v2 or later**.
