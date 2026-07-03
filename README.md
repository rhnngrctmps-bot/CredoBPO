# Credo BPO WordPress Theme

A custom WordPress theme for a virtual-assistant / BPO outsourcing site, with a
page architecture (hero → trust bar → services → process → stats →
testimonials → blog → CTA → mega-footer) modeled on the general layout
pattern used by outsourceaccelerator.com, and a built-in **VA Cost
Calculator** modal.

> **Note on sourcing:** this build environment has no outbound internet
> access, so the live outsourceaccelerator.com markup could not be fetched
> for a pixel-for-pixel copy. The structure/sections below follow that
> site's general architecture and conventions from general knowledge. No
> hero reference image was received with the original request either — the
> hero currently ships with a placeholder illustration (see below for how to
> swap it once you have the real design).

## Requirements

- WordPress 6.0+
- PHP 7.4+

## Installation

1. Copy this theme folder into `wp-content/themes/credobpo` on your WordPress
   install (or zip it and upload via **Appearance → Themes → Add New →
   Upload Theme**).
2. Activate **Credo BPO** under **Appearance → Themes**.
3. Go to **Settings → Reading** and set:
   - **Homepage displays**: "A static page"
   - **Homepage**: create/select a page titled "Home"
   - **Posts page**: create/select a page titled "Blog"
4. Create the remaining pages and assign templates under **Page Attributes →
   Template**:
   - **About Us** → `About Us` template
   - **Services** → `Services` template
   - **Contact Us** → `Contact Us` template
5. Go to **Appearance → Menus**, create a menu with Home / About Us /
   Services / Blog / Contact Us, and assign it to the **Primary Menu**
   location.
6. Go to **Appearance → Customize → Theme Colors** to change the primary
   brand color (defaults to `#004ea8`).

## Pages included

| Page       | Template file                                |
|------------|-----------------------------------------------|
| Home       | `front-page.php` (hero, services, process, stats, calculator promo, testimonials, blog highlights, CTA) |
| About Us   | `page-templates/template-about.php`           |
| Services   | `page-templates/template-services.php`        |
| Blog       | `home.php` (standard WP posts page)           |
| Contact Us | `page-templates/template-contact.php` (native contact form, no plugin required) |

Blog single posts use `single.php`, archives use `archive.php`, search uses
`search.php`, and any other WP page uses `page.php`.

## VA Cost Calculator

The calculator is a **modal**, injected once via `footer.php` from
`template-parts/calculator-modal.php`, and can be opened from any page by
adding the class `js-open-calculator` to any button or link (already wired
up on the header, hero, services page, about page, contact page, and blog
sidebar).

- Rate/salary assumptions live in **`inc/calculator-data.php`** —
  edit the `$categories` array to change hourly rates or in-house salary
  comparisons per service category (General Admin, Customer Support,
  Marketing, Bookkeeping, Executive Assistant, Web/Dev). You can also hook
  the `credobpo_calculator_categories` filter from a child theme/plugin
  instead of editing core theme files.
- The math (in `assets/js/calculator.js`) is:
  - `monthly cost = hourly rate × hours/week × 4.33 × number of VAs`
  - `in-house comparison = category's fully-loaded salary (salary × 1.3
    overhead) × (hours/week ÷ 40) × number of VAs`
  - Savings = in-house cost − VA cost.
- All calculation happens client-side (no AJAX/database calls needed); PHP
  only localizes the rate config into JS via `wp_localize_script`.
- Figures are clearly labeled as estimates with a disclaimer in the modal.

## Services content

Services shown on the Home and Services pages come from
**`inc/services-data.php`**. Edit the `$services` array (icon key, title,
excerpt) to change what's listed — no custom post type is used since this is
static marketing copy.

## Contact form

`page-templates/template-contact.php` posts to `admin-post.php`, handled by
`inc/contact-form.php`. It sanitizes and validates input, checks a nonce and
a honeypot field, and sends via `wp_mail()` to the site's admin email. No
third-party plugin is required. Replace the Google Maps embed URL in that
template with your real business address.

## Design tokens

Colors, spacing, and radii are defined as CSS custom properties at the top
of `style.css` (`:root`). The primary brand color is `#004ea8`, exposed via
`--color-primary` and also editable at runtime through the Customizer
(**Appearance → Customize → Theme Colors**). Headings use "Plus Jakarta
Sans", body text uses "Inter" (loaded from Google Fonts in
`functions.php`).

## Replacing the placeholder hero image

The hero (`template-parts/hero.php`) and the About page currently render
`assets/images/hero-placeholder.svg`, an inline illustration standing in for
a real photo. To swap it:

1. Add your real hero image to `assets/images/` (e.g. `hero.jpg`).
2. In `template-parts/hero.php`, change the `<img src="...">` inside
   `.hero__media-frame` to point at the new file.
3. Adjust copy/CTAs/stat badges in the same file to match your reference
   design once available.

## File structure

```
credobpo/
├── style.css                     Theme header + full design system CSS
├── functions.php                 Theme setup, enqueues, customizer
├── header.php / footer.php       Site chrome (nav, footer, calculator modal include)
├── front-page.php                Home page
├── home.php                      Blog index (posts page)
├── single.php / archive.php      Blog post / archive
├── search.php / 404.php          Search results / not found
├── page.php                      Generic fallback page template
├── sidebar.php / searchform.php / comments.php
├── page-templates/
│   ├── template-about.php
│   ├── template-services.php
│   └── template-contact.php
├── template-parts/
│   ├── hero.php
│   ├── calculator-modal.php
│   └── content-card.php
├── inc/
│   ├── calculator-data.php       VA rate config
│   ├── services-data.php         Services list content
│   ├── contact-form.php          Native contact form handler
│   └── template-tags.php         Icon sprite, page header, pagination helpers
└── assets/
    ├── js/main.js                Mobile nav + modal open/close
    ├── js/calculator.js          Calculator math
    └── images/                   SVG placeholders
```
