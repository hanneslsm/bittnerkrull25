const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");
const glob = require("glob");

module.exports = {
	...defaultConfig,
	entry: {
	  'css/global': path.resolve(process.cwd(), "src", "global.scss"),
	  'css/screen': path.resolve(process.cwd(), "src", "screen.scss"),
	  'css/editor': path.resolve(process.cwd(), "src", "editor.scss"),
	  'js/global': path.resolve(process.cwd(), "src", "global.js"),
	},
	output: {
	  ...defaultConfig.output,
	  path: path.resolve(__dirname, "build"),
	},
	resolve: {
	  alias: {
		scss: path.resolve(__dirname, 'src/scss'), // Ensures imports work correctly
	  },
	},
  };
