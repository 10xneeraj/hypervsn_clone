# Component Architecture

This project has been refactored to use a component-based directory structure.
Each major section of the website has its own folder in `assets/components/`.

## Structure Per Component

Each component folder (e.g., `assets/components/hero/`) contains:

1.  **[name].html**: The isolated HTML markup for that section.
2.  **[name].css**: Specific styles for that section.
3.  **[name].js**: Specific JavaScript logic (animations, interactions).
4.  **[name].php**: A PHP template part if you want to use `include` in WordPress.

## How it works

### HTML (index.html)

The `index.html` file now links to the individual CSS and JS files for each component.

- CSS links are in the `<head>`.
- JS scripts are at the bottom of `<body>`.

### CSS (style.css vs component.css)

- `style.css` contains global variables, reset, and shared utilities.
- Component CSS files (`hero.css`, `roi.css`) contain styles _only_ for that section.
- This makes it easier to maintain styles without breaking other parts of the site.

### JavaScript (script.js vs component.js)

- `script.js` was handling everything. We have commented out the logic that was moved to components.
- New component JS files (e.g., `roi.js`) handle their own specific logic.

## Migrated Sections

We have successfully migrated:

- **Hero Section**
- **Use Cases (Marquee)**
- **ROI (Business Value)**
- **Contact Form**

To migrate other sections (like Footer, Technology, etc.), simply create a new folder and move the relevant code following this pattern.
