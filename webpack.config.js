const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );
const ImageMinimizerPlugin = require( 'image-minimizer-webpack-plugin' );
const { merge } = require( 'webpack-merge' );

module.exports = function ( env ) {
	const isProduction = env && env.production;
	console.log(`#### isProduction: ${isProduction} ####`);

	// Define plugins array and conditionally push plugins
	const plugins = [ ...( defaultConfig.plugins || [] ) ];

	if ( isProduction ) {
		// Copy images and minimize them only in production
		plugins.push(
			new CopyWebpackPlugin( {
				patterns: [
					{
						from: path.resolve( __dirname, 'src/images' ),
						to: path.resolve( __dirname, 'build/images' ),
					},
				],
			} ),
			new ImageMinimizerPlugin( {
				minimizer: {
					implementation: ImageMinimizerPlugin.sharpMinify,
					options: {
						resize: {
							width: 2560,
							withoutEnlargement: true,
						},
						encodeOptions: {
							jpeg: { quality: 70 },
							png: { quality: 70 },
							webp: { quality: 70 },
							avif: { quality: 70 },
						},
					},
				},
			} )
		);
	}

	// Merge with defaultConfig
	return merge( defaultConfig, {
		entry: {
			'css/global': path.resolve( __dirname, 'src', 'global.scss' ),
			'css/screen': path.resolve( __dirname, 'src', 'screen.scss' ),
			'css/editor': path.resolve( __dirname, 'src', 'editor.scss' ),
			'js/global': path.resolve( __dirname, 'src', 'global.js' ),
		},
		plugins, // Use the plugins array
		mode: isProduction ? 'production' : 'development',
	} );
};
