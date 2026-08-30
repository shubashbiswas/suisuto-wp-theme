# SUI SUTO — LUXURY FASHION WORDPRESS THEME

## 1. Project Overview

Build a **production-quality luxury fashion e-commerce website** for **Sui Suto**, an Indo-Bengali clothing brand rooted in Bengal's textile and craft heritage.

Sui Suto aims to bring regional craftsmanship to the regional market while establishing a distinctive presence in the global fashion market.

The website must feel like a **contemporary luxury fashion house**, not a generic WooCommerce store and not a traditional ethnic-fashion website.

The central design principle is:

> **Quiet luxury rooted in Bengal.**

The website should communicate craftsmanship, refinement, authenticity, rarity and contemporary fashion through restraint, typography, photography, materiality and exceptional attention to detail.

---

# 2. Core Technology

Use:

- WordPress
- Gutenberg / WordPress Block Editor
- WordPress Block Theme architecture
- WooCommerce
- `theme.json`
- Modern CSS
- Minimal JavaScript
- Semantic HTML

### Do NOT use initially:

- Tailwind CSS
- Bootstrap
- Elementor
- Divi
- Heavy page builders
- Heavy multipurpose themes
- JavaScript SPA architecture
- Unnecessary UI frameworks

We will evaluate Tailwind later only if the project demonstrates a genuine need for it.

The goal is to keep the theme **lightweight, native to WordPress, maintainable and performant**.

---

# 3. Theme Foundation

Do not use a commercial fashion theme as the foundation.

Do not build on top of a heavily opinionated multipurpose theme.

Create a **minimal custom WordPress block theme**.

Use WordPress's current block-theme architecture and, where useful, Create Block Theme tooling as the starting point.

The resulting theme should become an independent Sui Suto theme rather than a customized commercial theme.

Theme architecture should follow modern WordPress conventions.

Expected structure should be approximately:

```text
sui-suto/
│
├── style.css
├── theme.json
├── functions.php
│
├── templates/
│   ├── index.html
│   ├── front-page.html
│   ├── page.html
│   ├── archive.html
│   ├── single.html
│   ├── archive-product.html
│   ├── single-product.html
│   └── ...
│
├── parts/
│   ├── header.html
│   ├── footer.html
│   └── ...
│
├── patterns/
│   ├── hero.php
│   ├── collection.php
│   ├── product-grid.php
│   ├── craft-story.php
│   ├── brand-story.php
│   └── newsletter.php
│
├── assets/
│   ├── fonts/
│   ├── images/
│   └── icons/
│
└── src/
    ├── css/
    └── js/
```

Adjust the structure when WordPress best practices make a different organization more appropriate.

Do not create unnecessary files simply to make the architecture appear sophisticated.

---

# 4. Brand Positioning

Sui Suto represents:

**Bengal × craftsmanship × contemporary luxury**

The website should communicate:

- Quiet luxury
- Craftsmanship
- Authenticity
- Cultural depth
- Modernity
- Sophistication
- Rarity
- Human craftsmanship
- Global relevance

The visual identity should feel confident and understated.

The customer should feel:

> "This is beautifully made."

before feeling:

> "This is a traditional Bengali clothing brand."

The regional identity should emerge through **materials, craftsmanship, stories, photography and details**, rather than stereotypical decorative motifs.

---

# 5. Visual Direction

The design language is:

### Contemporary luxury fashion

Not:

### Editorial magazine

Editorial photography and storytelling can be used, but they are supporting elements.

The primary experience should feel like a **luxury fashion boutique**.

Prioritize:

- Generous whitespace
- Elegant typography
- Large, beautiful photography
- Restrained color
- Precise alignment
- Sophisticated product presentation
- Subtle interaction
- High-quality imagery
- Tactile visual language
- Calm navigation

Avoid:

- Visual clutter
- Excessive text
- Excessive animations
- Loud gradients
- Excessive gold
- Decorative borders everywhere
- Generic South Asian motifs
- Overly ornamental layouts
- Marketplace-style product grids
- Cheap-looking badges
- Excessive rounded cards
- Excessive shadows

---

# 6. Color System

Create a restrained luxury palette.

### Primary

- Deep black / ink
- Warm ivory
- Soft white
- Charcoal

### Secondary

- Deep indigo
- Muted clay
- Earth tones
- Subtle botanical tones

### Metallic accent

A restrained antique brass may be used sparingly.

Do not make gold the dominant brand color.

The identity must work beautifully in monochrome.

All colors must be defined centrally through `theme.json` and the design system.

Do not scatter arbitrary hexadecimal values throughout the theme.

---

# 7. Typography

Typography is a major component of the brand identity.

Use:

### Display

A sophisticated high-contrast or fashion-oriented serif.

### Interface/body

A refined, highly readable sans-serif.

Use typography to establish:

- Luxury
- Hierarchy
- Calm
- Precision
- Contemporary fashion

Define global typography tokens for:

- Display
- H1
- H2
- H3
- Body
- Small text
- Navigation
- Product name
- Product price
- Metadata
- Buttons
- Labels

Use responsive typography.

Prefer CSS functions such as `clamp()` where appropriate.

Typography should never become excessively large simply for visual impact.

---

# 8. Logo

The Sui Suto logo system will be developed separately, but the theme must support a flexible luxury identity.

The header should accommodate:

- Primary SUI SUTO wordmark
- Optional abstract emblem
- Optional compact logo/monogram
- Mobile logo
- Favicon

Do not create a fake final logo.

Use a clearly marked temporary placeholder until the approved logo assets are supplied.

The theme should make replacing the logo assets straightforward.

---

# 9. Design System

Build a coherent design system before creating every page individually.

Define:

### Layout

- Site width
- Content width
- Wide width
- Full width
- Grid
- Gutters
- Section spacing
- Responsive breakpoints

### Typography

- Font families
- Font sizes
- Weight
- Line height
- Letter spacing

### Color

- Background
- Foreground
- Muted
- Border
- Accent
- Interactive states

### Components

- Buttons
- Links
- Header
- Navigation
- Footer
- Product card
- Collection card
- Image treatment
- Form fields
- Search
- Cart
- Breadcrumbs
- Pagination
- Filters

Use `theme.json` as the primary WordPress design-system layer.

Use custom CSS only where it provides functionality or styling that cannot be cleanly expressed through `theme.json` and native block controls.

---

# 10. Gutenberg Strategy

Gutenberg must remain a first-class part of the architecture.

A non-technical content manager should be able to manage:

- Homepage content
- Collection pages
- Craft stories
- Journal articles
- About page
- Campaign pages

without editing PHP.

Use native Gutenberg blocks whenever practical.

Use reusable patterns for recurring Sui Suto layouts.

Potential patterns:

- Luxury hero
- Collection hero
- Featured collection
- Product grid
- Craft story
- Image + text
- Full-width campaign image
- Brand statement
- Editorial/campaign split
- Newsletter
- Featured journal
- Quote
- Product recommendation

Do not create custom blocks when a native block + pattern provides an adequate solution.

---

# 11. Luxury Homepage

The homepage should be visually restrained.

Suggested structure:

## Hero

Large campaign photography.

Minimal copy.

Example:

**SUI SUTO**

**The Art of Bengal**

**DISCOVER**

The actual final copy will be provided later.

Do not overcrowd the hero with text or multiple calls to action.

---

## Brand Introduction

A concise statement.

Example conceptual direction:

**Born from Bengal. Crafted for the world.**

Keep the section elegant and spacious.

---

## Featured Collection

Large, immersive campaign imagery.

Show:

- Collection name
- Short supporting statement
- CTA

---

## Craft

Introduce the craftsmanship behind Sui Suto.

Photography should focus on:

- Textile
- Thread
- Hands
- Loom
- Stitching
- Material
- Making

The craft section should feel premium and human.

---

## Featured Products

Use a refined product grid.

Product photography should dominate.

Avoid excessive UI around each product.

---

## Brand Story

A concise, emotionally compelling introduction to Sui Suto.

---

## Journal / Stories

Include selectively.

The homepage should not feel like a magazine homepage.

---

## Newsletter

Minimal luxury treatment.

---

# 12. Header

The header must be exceptionally polished.

Desktop structure should be approximately:

```text
SUI SUTO

NEW   COLLECTIONS   WOMEN   MEN   CRAFT   JOURNAL

                         SEARCH   ACCOUNT   BAG
```

The final navigation can be adjusted based on UX testing.

Potential behavior:

- Transparent over hero
- Transition to solid background when scrolling
- Minimal sticky navigation

Do not introduce complicated header animations.

Mobile navigation must be equally refined.

---

# 13. Product Cards

Product cards should feel like luxury retail.

Prioritize:

1. Product image
2. Product name
3. Price
4. Optional minimal metadata

Avoid:

- Huge badges
- Excessive buttons
- Card shadows
- Marketplace-style UI
- Excessive borders

Hover interactions should be subtle.

Potential interaction:

First image → secondary image on hover.

Keep animation restrained.

---

# 14. Product Page

The product page is one of the most important experiences.

It must combine:

**Luxury presentation + excellent commerce UX.**

Desktop should provide:

- Large product gallery
- Product information
- Product name
- Price
- Color
- Size
- Add to Bag
- Availability
- Shipping information

Then provide carefully structured information:

### The Story

### The Craft

### Material

### Details

### Fit & Measurements

### Care

### Shipping & Returns

These sections should be easy to scan without making the page feel like a technical specification sheet.

---

# 15. Product Story Architecture

The theme should support rich product storytelling.

Products may contain:

- Craft technique
- Textile
- Material
- Region
- Maker/artisan information
- Construction
- Inspiration
- Collection
- Care instructions

Where possible, structure this information so it can be managed through WooCommerce fields, attributes, taxonomies or Gutenberg-compatible content rather than hard-coding it into templates.

Do not invent cultural information.

Use placeholders when real information is unavailable.

---

# 16. WooCommerce

WooCommerce is the commerce engine.

Support:

- Simple products
- Variable products
- Attributes
- Variations
- Categories
- Tags
- Inventory
- Pricing
- Sale pricing
- Product galleries
- Related products
- Upsells
- Cross-sells
- Cart
- Checkout
- My Account
- Order functionality

Use WooCommerce's modern block-based architecture where appropriate.

Do not unnecessarily replace WooCommerce functionality with custom implementations.

The theme should style WooCommerce so the commerce experience feels native to Sui Suto.

---

# 17. Cart

The cart should feel extremely simple.

Prioritize:

- Product
- Quantity
- Price
- Remove
- Subtotal
- Shipping information
- Checkout CTA

Avoid unnecessary distractions.

---

# 18. Checkout

Checkout should prioritize conversion.

Do not introduce unnecessary visual elements.

Make it:

- Clean
- Trustworthy
- Fast
- Accessible
- Mobile-friendly

Do not customize WooCommerce checkout logic unless there is a clear business requirement.

Focus primarily on presentation and usability.

---

# 19. Craft Section

Create a dedicated content experience for Sui Suto's regional craft identity.

Possible taxonomy:

- Textile
- Technique
- Region
- Material
- Artisan
- Collection

Potential subjects may eventually include Bengali handloom and textile traditions.

Do not make historical or cultural claims without verified information.

The architecture should allow detailed craft stories to be added later.

---

# 20. About

The About page should feel like a luxury fashion house's brand story.

Do not create a corporate "About Us" page full of generic marketing language.

Focus on:

- Why Sui Suto exists
- Bengal
- Craft
- People
- Design philosophy
- Contemporary interpretation
- Global ambition

Use strong imagery and restrained copy.

---

# 21. Journal

The Journal is secondary to commerce.

It can contain:

- Craft stories
- Textile stories
- Collections
- Places
- Makers
- Design
- Styling
- Brand stories

Maintain a luxury fashion tone.

Do not turn the site into a content-heavy magazine.

---

# 22. Responsive Design

Design mobile-first.

Test:

- Small mobile
- Large mobile
- Tablet
- Laptop
- Desktop
- Large desktop

Do not simply shrink desktop layouts.

Mobile should receive deliberate UX decisions.

Particular attention should be given to:

- Header
- Navigation
- Product gallery
- Product purchase controls
- Size selection
- Cart
- Checkout
- Typography
- Image cropping

---

# 23. Accessibility

Target WCAG 2.2 AA where reasonably applicable.

Implement:

- Semantic HTML
- Correct heading hierarchy
- Keyboard navigation
- Visible focus states
- Accessible menus
- Accessible buttons
- Accessible forms
- Appropriate alt text
- Color contrast
- Screen-reader-friendly controls
- Reduced-motion support

Never use animation as the only way to communicate information.

---

# 24. Performance

Performance is a core requirement.

Prioritize:

- Minimal JavaScript
- Minimal dependencies
- Responsive images
- Proper image sizing
- Lazy loading
- Efficient CSS
- Good Core Web Vitals
- Avoid unnecessary third-party scripts

Do not sacrifice performance for visual effects.

Luxury should feel **fast and effortless**.

---

# 25. SEO

Build a technically sound foundation.

Support:

- Semantic HTML
- Correct headings
- Clean URLs
- Canonical compatibility
- Product structured data compatibility
- Open Graph metadata compatibility
- Internal linking
- XML sitemap compatibility
- Fast loading

Do not generate artificial SEO copy.

---

# 26. Security

Follow WordPress and WooCommerce security practices.

- Sanitize input
- Escape output
- Use WordPress APIs
- Use nonces where required
- Check capabilities
- Avoid exposing secrets
- Do not commit credentials
- Keep dependencies minimal
- Keep environment configuration separate

---

# 27. Development Environment

Development happens locally first.

Recommended environments:

```text
LOCAL
  ↓
STAGING
  ↓
PRODUCTION
```

The theme/code should be version-controlled using Git.

The theme must not depend on hard-coded local URLs.

Environment-specific configuration must remain outside the theme where appropriate.

---

# 28. Deployment Philosophy

Separate:

### CODE

Theme files, templates, patterns, CSS, JavaScript and other development assets.

Move through:

```text
Git
↓
Staging
↓
Production
```

### CONTENT

Products, pages, collections, media and editorial content.

Use appropriate WordPress/WooCommerce export/import or controlled content migration.

### PRODUCTION DATA

Customers, orders and real commerce activity belong to production.

Never overwrite a production database with a local development database after launch.

Demo users and test orders must never be migrated into production.

---

# 29. Avoid Overengineering

This is important.

Do not introduce a framework, package, build system, plugin or abstraction simply because it is popular.

Before adding a dependency, ask:

1. Is it necessary?
2. Does WordPress already provide this?
3. Does WooCommerce already provide this?
4. Can modern CSS solve it?
5. Does it improve maintainability?
6. Does it increase long-term complexity?

Prefer the simplest solution that satisfies the requirement.

---

# 30. Tailwind Decision

Do not install Tailwind during the initial foundation phase.

First determine whether:

- `theme.json`
- native Gutenberg styles
- modern CSS
- reusable patterns

are sufficient.

If Tailwind is later proposed, document:

- Why it is necessary
- What problem it solves
- What additional build complexity it introduces
- Which parts of the site will use it
- How it will coexist with `theme.json`
- How WooCommerce block styles will be handled

Do not introduce Tailwind merely because it is familiar.

---

# 31. Brand Authenticity

Never invent:

- Artisan identities
- Cultural claims
- Historical facts
- Geographic origins
- Sustainability certifications
- Ethical certifications
- Material claims
- Production statistics
- Awards
- Press mentions

Use clearly marked placeholder content until verified brand information is supplied.

The website must eventually allow verified stories to replace placeholders without requiring architectural changes.

---

# 32. Initial Development Milestone

Do NOT build the entire website immediately.

First build the foundation.

### Phase 1 — Foundation

Create:

- Custom Sui Suto block theme
- `theme.json`
- Typography system
- Color system
- Layout system
- Responsive system
- Global styles
- Gutenberg compatibility
- WooCommerce compatibility

### Phase 2 — Core Components

Create:

- Header
- Navigation
- Footer
- Buttons
- Product card
- Collection card
- Hero
- Image treatment
- Newsletter
- Basic forms

### Phase 3 — Gutenberg Patterns

Create:

- Luxury hero
- Featured collection
- Product grid
- Craft story
- Brand story
- Campaign image
- Image/text section
- Journal section

### Phase 4 — WooCommerce

Implement and style:

- Shop archive
- Product archive
- Product page
- Cart
- Checkout
- Account

### Phase 5 — Core Pages

Build:

- Homepage
- Shop
- Product
- Collections
- Craft
- About
- Journal

Use placeholder content and imagery where necessary.

---

# 33. Quality Standards

Before considering a milestone complete, verify:

### Design

- Does it feel like luxury fashion?
- Is the design restrained?
- Is there enough whitespace?
- Does typography feel premium?
- Is the visual hierarchy clear?
- Does it avoid generic ethnic-fashion aesthetics?

### UX

- Is navigation intuitive?
- Is shopping frictionless?
- Is the product information easy to understand?
- Is mobile UX excellent?

### Technical

- No unnecessary dependencies
- No console errors
- No PHP errors
- No broken blocks
- No broken WooCommerce functionality
- No hard-coded environment URLs
- No duplicated code

### Accessibility

- Keyboard navigation
- Focus states
- Contrast
- Semantic structure
- Forms
- Screen-reader compatibility

### Performance

- Image optimization
- Minimal JavaScript
- Efficient CSS
- No unnecessary third-party resources

---

# 34. Agent Working Method

Work incrementally.

Before major implementation:

1. Inspect the current codebase/environment.
2. Understand existing WordPress and WooCommerce architecture.
3. Identify what WordPress already provides.
4. Propose the simplest implementation.
5. Implement one coherent unit.
6. Test it.
7. Check responsive behavior.
8. Check accessibility.
9. Check WooCommerce compatibility.
10. Document important decisions.

Do not rewrite working code without a clear reason.

Do not introduce dependencies without justification.

Do not build speculative functionality.

---

# 35. First Task

Your first task is **not to build the complete website**.

First:

1. Inspect the local development environment.
2. Establish the minimal custom block-theme foundation.
3. Set up `theme.json`.
4. Establish the Sui Suto design tokens.
5. Establish typography.
6. Establish color.
7. Establish responsive layout rules.
8. Establish basic Gutenberg styling.
9. Establish WooCommerce compatibility.
10. Build the header, footer and one luxury hero pattern.
11. Create a minimal homepage proof of concept.
12. Test the result on desktop and mobile.

Then stop.

Report:

- What was implemented
- Folder/file structure
- Dependencies introduced
- Why each dependency was introduced
- Design decisions
- WordPress/WooCommerce decisions
- Any assumptions
- Any unresolved issues
- Recommended next step

Do not proceed into full page development until the foundation has been reviewed and is coherent.

---

# FINAL DESIGN PRINCIPLE

Every implementation decision should pass this test:

> **Does this make Sui Suto feel more like a distinctive contemporary luxury fashion house?**

If not, simplify it.