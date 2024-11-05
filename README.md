# BittnerKrull25 WordPress Block Theme
BittnerKrull25 is a custom WordPress block theme developed by Studio Leismann for Bittner+Krull Softwaresysteme GmbH, tailored for seamless integration with WordPress's block editor.

## Features
- **Full Site Editing (FSE):** Enables comprehensive site customization using WordPress's block editor.
- **Custom Templates and Patterns:** Provides unique templates and block patterns specific to client needs.
- **Theme Settings:** Configurable options available via the theme.json file and a build process.
- **Custom Blocks Styles:** Includes custom-designed blocks and styles for a cohesive look.
- **Enhanced Asset Management:** Efficiently manages JavaScript and CSS with Webpack.
- **GSAP Animations:** Smooth animations using GSAP, enhancing interactivity and engagement.

## Recommended Plugins
- [Create Block Theme Plugin](https://wordpress.org/plugins/create-block-theme/): Recommended for easy exporting and customization of block themes.

## Development
This theme utilizes modern development tools and workflows to manage and bundle assets.

### Prerequisites
- **Node.js & npm:** For package management and build processes.
- **Webpack:** Manages and optimizes assets.

### Setup
The theme employs `@wordpress/scripts` for the build process, streamlining the development workflow.

1. Ensure Node.js is installed.
2. Navigate to the theme directory and run:
   `npm install`
4. To build assets, execute:
   `npm run build`
5. For development with live reloading:
   `npm start`

## File Structure
Here’s an overview of the primary folders relevant to development:

```
bittnerkrull25/
├── build/                     # Compiled theme files from /src
├── inc/                       # PHP files for theme functionality
├── src/                       # Source files for SCSS, JS, and other assets
│   ├── scss/                  # SCSS files for styling
│   ├── js/                    # JavaScript files
│   ├── block-styles.scss      # Registering custom block styles
│   ├── block-variations.scss  # Registering custom block variations
│   ├── global.scss            # Global styles
│   ├── script.scss            # Styles for scripts
│   └── editor.scss            # Editor-specific styles
├── theme.json                 # WordPress theme configuration
└── webpack.config.js          # Webpack configuration
```

### SCSS Files
- **global.scss:** Contains global styles applied across the entire theme.
- **script.scss:** Defines styles associated with JavaScript functionalities.
- **editor.scss:** Provides styles specific to the WordPress block editor, ensuring a consistent editing experience.


## Custom Block Styles
This process allows the custom style to be selectable in the block editor.
In this theme, custom block styles are defined and registered as follows:

1. Register the Block Style in `/src/block-style.js`
```
wp.blocks.registerBlockStyle('core/button', {
	name: 'button--bittnerkrull-elevated',
	label: 'BK Elevated',
});
```
2. Define the Style in SCSS:
Within the src/scss/ directory, create SCSS files corresponding to specific blocks. For example, to add a custom style to the Button block, define the styles in src/scss/core-button.scss.
```
.is-style-button--bittnerkrull-elevated {
  border-bottom: 4px solid black;
}
```
3. Import the SCSS File:
In `src/scss/global.scss`, import the new SCSS file:
`@use "./scss/core-button.scss";`

## License
This theme is licensed under the GNU General Public License v2.0, with proprietary elements exclusive to Studio Leismann. See LICENSE.md

## Credits
*   **Design and Development:** [Studio Leismann](https://www.studioleismann.com/)
*   **Client:** [Bittner+Krull Softwaresysteme GmbH](https://www.bittner-krull.de/)

For more information, visit the GitHub repository.


### Fonts

```
Open Sans
Copyright 2020 The Open Sans Project Authors (https://github.com/googlefonts/opensans)
Source: http://www.google.com/get/noto/
License: This Font Software is licensed under the SIL Open Font License, Version 1.1. This license is available with a FAQ at: https://scripts.sil.org/OFL
```
