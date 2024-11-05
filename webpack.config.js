const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const imagemin = require("imagemin");
const imageminGifsicle = require("imagemin-gifsicle");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");

module.exports = {
  ...defaultConfig,
  entry: {
    "css/global": path.resolve(process.cwd(), "src", "global.scss"),
    "css/screen": path.resolve(process.cwd(), "src", "screen.scss"),
    "css/editor": path.resolve(process.cwd(), "src", "editor.scss"),
    "js/global": path.resolve(process.cwd(), "src", "global.js"),
  },
  output: {
    ...defaultConfig.output,
    path: path.resolve(__dirname, "build"),
  },
  resolve: {
    alias: {
      scss: path.resolve(__dirname, "src/scss"), // Ensures imports work correctly
    },
  },
  plugins: [
    ...defaultConfig.plugins,
    // Copy and optimize images from src/images to build/images
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, "src/images"),
          to: "images", // This will resolve to build/images
          transform: async (content, absoluteFrom) => {
            const { ext } = path.parse(absoluteFrom);
            // Only optimize image files
            if (/\.(jpe?g|png|gif|svg)$/i.test(ext)) {
              const data = await imagemin.buffer(content, {
                plugins: [
                  imageminGifsicle({ interlaced: true }),
                  imageminMozjpeg({ quality: 75 }),
                  imageminPngquant({ quality: [0.65, 0.9], speed: 4 }),
                  imageminSvgo({
                    plugins: [
                      {
                        name: "preset-default",
                        params: {
                          overrides: {
                            removeViewBox: false,
                          },
                        },
                      },
                    ],
                  }),
                ],
              });
              return data;
            }
            return content;
          },
        },
      ],
    }),
  ],
};
