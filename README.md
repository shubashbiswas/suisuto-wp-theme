<div align="center">

# 🧵 Sui Suto — সুই সুতো
### *Quiet Luxury Rooted in Bengal*

**A contemporary high-fashion WordPress Block Theme (Full Site Editing) built for WooCommerce and artisanal luxury storytelling.**

[![WordPress](https://img.shields.io/badge/WordPress-6.5%2B-21759b?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![Full Site Editing](https://img.shields.io/badge/FSE-Block_Theme-8b5cf6?style=for-the-badge&logo=wordpress&logoColor=white)](#)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-Ready-96588a?style=for-the-badge&logo=woocommerce&logoColor=white)](https://woocommerce.com)
[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/License-GPLv2-f59e0b?style=for-the-badge)](#)

[Design Philosophy](#-design-philosophy) • [Key Features](#-key-features) • [Color & Typography](#-color-palette--typography) • [Pattern Library](#-block-pattern-library) • [AI Connector](#-ai-connector--block-bindings) • [Installation](#-installation)

</div>

---

## 🏛️ Design Philosophy

**Sui Suto (সুই সুতো)** brings centuries of Bengal textile artistry—Dhaka Muslin, Jamdani, Baluchari, Garad, Tangail Silk, Shibori Indigo, and handloom Khadi—into a contemporary quiet luxury fashion house. 

Unlike conventional e-commerce themes burdened with visual noise and bloated frameworks, Sui Suto is built with **monastic restraint, editorial typography, generous whitespace, and pure native WordPress Gutenberg architecture**.

> *"Simplicity is not the absence of clutter, that's a consequence of simplicity. Simplicity is somehow essentially describing the purpose and place of an object and product."*

---

## ✨ Key Features

* **⚡ Pure Block Theme (Full Site Editing)**: 100% native WordPress block templates, template parts, and `theme.json` configuration. Zero page builder dependency.
* **🛍️ Quiet Luxury WooCommerce**: Bespoke product grids, editorial single-product showcase layouts, zoom hover states, and minimalist inquiry forms.
* **🎨 4 Curated Pattern Categories**: Over 10 custom block patterns spanning Brand Stories, Editorial Hero Banners, Curated Collection Grids, and Bespoke Inquiry Forms.
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

Sui Suto organizes patterns into 4 dedicated Gutenberg categories:

### 1. `suisuto-luxury` (Brand & Stories)
* **`hero-luxury`**: Split-screen editorial hero with asymmetric typography and seasonal campaign link.
* **`brand-intro`**: Centered brand manifesto celebrating Bengal's artisanal heritage.
* **`craft-story`**: Detailed textile lineage narrative highlighting Dhaka Muslin, Jamdani, and handloom weaving.

### 2. `suisuto-components` (Core UI)
* **`hero-fullscreen`**: Immersive full-viewport campaign hero banner.
* **`collection-card`**: Elegant card layout with slow zoom hover micro-animation.
* **`collection-grid`**: Editorial masonry collection gallery.
* **`product-card`**: Minimalist product presentation card with clean pricing and material tags.

### 3. `suisuto-woocommerce` (Commerce)
* **`product-grid-featured`**: Luxury curated product showcase with responsive columns and subtle hover elevation.

### 4. `suisuto-forms` (Refined Forms)
* **`newsletter`**: Minimalist luxury newsletter signup box.
* **`form-inquiry`**: Bespoke atelier customer inquiry and private consultation form.

---

## 🤖 AI Connector & Block Bindings

Located in [`inc/ai-connector.php`](file:///c:/Users/Ratan/Local%20Sites/multi/app/public/wp-content/themes/suisuto/inc/ai-connector.php), Sui Suto leverages the **WordPress 6.5+ Block Bindings API**:

```php
// Registered Sources:
'suisuto/ai-product-meta' // Dynamic AI-generated product fabric origin and styling note
'suisuto/craft-story'     // Artisanal loom provenance and history
'suisuto/artisan-origin'  // Regional Bengal district artisan attribution
```

This allows native core blocks (Paragraphs, Headings) to dynamically pull AI-generated or meta-driven textile narratives without custom shortcodes or third-party plugins.

---

## 📂 Theme Directory Structure

```
wp-content/themes/suisuto/
├── style.css                 # Theme metadata & core CSS styling
├── theme.json                # Global styles, palette, typography & layout settings
├── functions.php             # Enqueue scripts, patterns & block style definitions
├── screenshot.jpg            # WordPress admin theme preview image
├── README.md                 # Full theme documentation
├── readme.txt                # WordPress.org standard theme readme
├── LICENSE                   # GNU GPLv2 License
├── assets/
│   ├── js/
│   │   └── theme.js          # Lightweight vanilla micro-interactions
│   └── images/               # Curated high-res lookbook & product photography
├── inc/
│   └── ai-connector.php      # WordPress Block Bindings & AI integration
├── parts/
│   ├── header.html           # Minimalist sticky navigation header
│   └── footer.html           # Luxury four-column editorial footer
├── patterns/                 # Custom Gutenberg block patterns
└── templates/
    ├── front-page.html       # Editorial brand homepage
    ├── page-home.html        # Alternate homepage template
    ├── single-product.html   # Editorial luxury WooCommerce product page
    └── index.html            # Fallback template
```

---

## 🚀 Installation & Setup

1. Copy or clone the `suisuto` directory into your WordPress themes folder:
   ```bash
   wp-content/themes/suisuto/
   ```
2. Navigate to **WordPress Admin** &rarr; **Appearance** &rarr; **Themes**.
3. Hover over **Sui Suto** and click **Activate**.
4. **Recommended Companion**: Install [**DevForge**](file:///c:/Users/Ratan/Local%20Sites/multi/app/public/wp-content/plugins/devforge/) for instant cache busting, real-time template hierarchy inspection, and user switching.

---

## 📄 License

Sui Suto is distributed under the **GNU General Public License v2 or later**.
