const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin")
const TerserPlugin = require("terser-webpack-plugin")


const path = require('path')

module.exports = {
	mode: 'production',
	devtool: 'source-map',
	entry: './script.js',
	output: {
		path: path.resolve(__dirname, '/'),
		filename: 'scripts.js',
		publicPath: '/'
	},
	stats: {
		colors: true,
		modules: true,
		reasons: true,
		errorDetails: true
	},

	module: {
		rules: [{
			test: /\.js$/,
			exclude: /(node_modules)/,
			use: {
				loader: 'babel-loader',
				options: {
					presets: ['@babel/preset-env']
				}
			}
		},
		{
			test: /\.(css)$/,
			use: [MiniCssExtractPlugin.loader, 'css-loader', 'less-loader']
		},
{
        test: /\.less$/,
        use: [
        MiniCssExtractPlugin.loader,
          'style-loader',
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  // Autoprefixer removes outdated/legacy prefixes by default based on your browserslist config
                  ['autoprefixer', { remove: true }]
                ],
              },
            },
          },
          'less-loader',
        ],
      },
		{
			test: /\.(ttf)$/,
			use: [
				{
					loader: 'file-loader',
					options: {
						name: '[name].[ext]',
						//resourcePath: '/global/fonts/'
					}
				}
			]
		}]
	},

	optimization: {
		minimize: true,

		minimizer: [
			new TerserPlugin({
				terserOptions: {
					parse: {
						ecma: 8
					},
					compress: {
						ecma: 5,
						warnings: false,
						comparisons: false,
						inline: 2
					},
					output: {
						ecma: 5,
						comments: false,
						ascii_only: true
					}
				},
				//sourceMap: shouldUseSourceMap
			}),
			new CssMinimizerPlugin()
		],
	},

	plugins: [
		new MiniCssExtractPlugin({ filename: 'styles.css' }),
	],
	externals: {
		jquery: "jQuery",
		jqueryui: "jqueryui"
	},
}