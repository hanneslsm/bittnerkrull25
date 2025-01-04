[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)

# BittnerKrull25 WordPress Block Theme
BittnerKrull25 is a custom WordPress block theme developed by Studio Leismann for Bittner+Krull Softwaresysteme GmbH, tailored for seamless integration with WordPress's block editor.

## Features
- **Full Site Editing (FSE):** Enables comprehensive site customization using WordPress's block editor.
- **Custom Templates and Patterns:** Provides unique templates and block patterns specific to client needs.
- **Theme Settings:** Configurable options available via the theme.json file and a build process.
- **Custom Blocks Styles:** Includes custom-designed blocks and styles for a cohesive look.
- **Enhanced Asset Management:** Efficiently manages JavaScript and CSS with Webpack.

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

bittnerkrull25/
├── .github/workflows/         # GitHub Actions workflows
├── assets/                    # Additional assets
├── build/                     # Compiled theme files from /src
├── inc/                       # PHP files for theme functionality
├── parts/                     # WordPress parts
├── patterns/                  # WordPress patterns
├── src/                       # Source files for SCSS, JS, and other assets
│   ├── fonts/                 # Font files
│   ├── images/                # Image files
│   ├── js/                    # JavaScript files
│   ├── scss/                  # SCSS files for styling
│   ├── block-styles.js        # Registering custom block styles
│   ├── block-variations.js    # Registering custom block variations
│   ├── global.js              # Global scripts
│   ├── global.scss            # Global styles
│   ├── screen.scss            # Frontend-specific styles, not rendered in the editor
│   └── editor.scss            # Editor-specific styles
├── styles/                    # Block and section styles in .json format
├── templates/                 # WordPress templates
├── theme.json                 # WordPress theme configuration
├── webpack.config.js          # Webpack configuration
└── README.md                  # Project documentation



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

## Deplyoment

This repository includes an automated GitHub Actions workflow to deploy the project to the staging server whenever changes are pushed to the `main` branch. 
The workflow:

1. Pulls the latest code from the `main` branch.
2. Installs dependencies and builds the project.
3. Deploys the built files to the server via FTP.

### Prerequisites
- Configure the following GitHub repository secrets:
 - `DEV_FTP_USER`: FTP username.
 - `DEV_FTP_PASSWORD`: FTP password.

### How It Works
1. Push changes to the main branch
2. The workflow runs automatically and deploys to the configured server.
3. The build process will be run by the action and uploaded via FTP

### Excluded Files
Some files and folders are are excluded from deployment, e.g. `.git`, `node_modules/` or `src/`.

Check the Actions tab in GitHub for more information.


## License

This theme is licensed under the [GNU General Public License v2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html), with proprietary elements exclusive to Studio Leismann. See [LICENSE.md](LICENSE.md) for details.


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
