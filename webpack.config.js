// NodeJS modules
const path = require('node:path');
const fs = require('node:fs');
// Webpack plugins
const HtmlWebpackPlugin = require('html-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const TerserWebpackPlugin = require('terser-webpack-plugin')
const CssMinimizerWebpackPlugin = require('css-minimizer-webpack-plugin')

// Access the fields to configure webpack
//const ejsLoader = require('ejs-loader')
/*

	at readDirRecursively (C:\Users\Timber\Development\webpack-5-templating-with-ejs-and-multiple-html-pages\webpack.config.js:37:6)
	at ejsPagesArray (C:\Users\Timber\Development\webpack-5-templating-with-ejs-and-multiple-html-pages\webpack.config.js:60:2)

*/
// Destructure variables from pkgVars.config
// destruct vars from pkg.json
const {
	entry,
	sourceDir,
	buildDir,
	viewsDir,
	port,
	pageTitle
} = require('./package.json').config;

// Get the script name, how to execute webpack, dev or build
const currentTask = process.env.npm_lifecycle_event;

const ejsPagesArray = () => {

	// creating views dir
	const sourceViewsDir = `${sourceDir}/${viewsDir}`;

	// read all files in views dir
	const readDirRecursively = (dirPath = sourceViewsDir, relativeFilePathArray = []) => {
		// fs.readdirSync(path[, options])
		fs.readdirSync(dirPath).forEach(file => {
			//create folder and file name
			const dirPathFile = dirPath + path.sep + file;
			// for nested files/folders
			if (fs.statSync(dirPathFile).isDirectory()) {
				relativeFilePathArray = readDirRecursively(dirPathFile, relativeFilePathArray)
			} else {
				relativeFilePathArray.push(path.join(dirPath, path.sep, file))
			}
		})
		return relativeFilePathArray;
	}


	const htmlWebpackPluginArray = []


	const firstCharacterUpperCase = string => string.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ')
	const titleFromRelativeFilePath = title => firstCharacterUpperCase(title.split('/').pop().replaceAll('-', ' '))

	readDirRecursively()
		.filter(file => file.endsWith('.ejs'))
		.map(file => file
			.replace(/\\/g, '/')
			.replace(`${sourceViewsDir}/`, '')
			.replace('.ejs', ''))
		.forEach(relativeFilePath => {

			// if page is index.html set title from pkg.json
			// else generate title
			const title = (relativeFilePath == 'index') ? pageTitle : titleFromRelativeFilePath(relativeFilePath)
			htmlWebpackPluginArray.push(
				new HtmlWebpackPlugin({
					filename: `./${relativeFilePath}.html`,
					template: `./${sourceDir}/assets/layout/template.js`,
					templateParameters: {
						'title': title,
						'page': relativeFilePath,
					}
				})
			)
		})
	return htmlWebpackPluginArray
}
// Common style configuration
const styleConfig = {
	test: /\.less$/i,
	use: [
		'css-loader',
		{
			loader: 'postcss-loader',
			options: {
				postcssOptions: {
					plugins: [
						'autoprefixer'
					]
				}
			}
		},
		"less-loader"
	]
}

// Common webpack configuration
const config = {
	entry: `./${sourceDir}/assets/js/${entry}.js`,
	plugins: ejsPagesArray(),
	module: {
		rules: [
			styleConfig, {
				test: /\.ejs$/i,
				loader: 'ejs-loader',
				options: {
					esModule: false,
				}
			},
			{
				test: /\.(woff2?|ttf|eot)(\?v=\w+)?$/,
				exclude: /(node_modules)/,
				type: 'asset/resource',
				generator: {
					filename: 'fonts/[name][ext][query]',
				},
			},
			{
				test: /\.(png|jpg|gif|ico|svg)(\?.*)?$/,
				exclude: /(node_modules)/,
				type: 'asset/resource',
			},
			{
				test: /\.(xml|json|webmanifest|txt)/,
				exclude: /(node_modules)/,
				type: 'asset/resource',
			},
			{
				test: /\.html$/i,
				loader: "html-loader",
				options: {
					esModule: false,
				},
			},
		]
	}
};

// Webpack development configuration
if (currentTask === 'dev') {

	// Output for the bundles
	config.output = {
		// optional
		filename: `${entry}.js`,
		path: path.resolve(__dirname, sourceDir),
		assetModuleFilename: './assets/images/[name][ext]'
		//assetModuleFilename: 'images/[name][ext][query]'
	};

	// Dev server
	config.devServer = {
		static: {
			directory: path.join(__dirname, sourceDir)
		},
		port
	};

	// Add the style-loader, to add styles to the DOM
	styleConfig.use.unshift('style-loader');

}

// Webpack production configuration
if (currentTask === 'build') {

	// Output for the bundles
	config.output = {
		path: path.resolve(__dirname, buildDir),
		filename: `./assets/js/${entry}.[chunkhash].js`,
		assetModuleFilename: './assets/images/[name][ext]'
	};

	// Babel configuration
	config.module.rules.push(
		{
			test: /\.js$/i,
			exclude: /(node_modules)/,
			use: {
				loader: 'babel-loader',
				options: {
					presets: [
						'@babel/preset-env'
					]
				}
			},
		},
	);

	// Add a loader to extract the styles in css file
	styleConfig.use.unshift({
		loader: MiniCssExtractPlugin.loader
	});

	// Code optimization
	config.optimization = {
		minimize: true,
		minimizer: [
			new TerserWebpackPlugin,
			new CssMinimizerWebpackPlugin
		]
	}

	// Plugins
	config.plugins.push(
		new CleanWebpackPlugin(),
		new MiniCssExtractPlugin({
			filename: './assets/css/styles.[chunkhash].css'
		}),
		new CopyWebpackPlugin({
			patterns: [
				{
					from: `./${sourceDir}/assets/images/`,
					to: './assets/images/'
				}
			]
		})
	);

}

// Export the config object
module.exports = config;

