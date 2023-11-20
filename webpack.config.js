const webpack = require('webpack');
const path = require('path');
const StylelintPlugin = require('stylelint-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const TerserPlugin = require('terser-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
require('dotenv').config();

const build = {
  mode: 'development',
  optimization: {
    minimize: true,
    minimizer: [
      new TerserPlugin({
        extractComments: false,
        terserOptions: {
          ecma: 6,
          compress: true,
          output: {
            comments: false,
            beautify: false,
          },
        },
      }),
    ],
  },
  entry: {
    index: path.resolve(__dirname, './src/js/index.js'),
    'style.css': path.resolve(__dirname, './src/scss/style.scss'),
  },
  //ソース元のjs
  output: {
    path: path.resolve(__dirname, './assets/'), // 出力先フォルダを絶対パスで指定
    filename: 'js/[name].js', // [name]にはentry:で指定したキーが入る
  },
  //出力先のフォルダ
  module: {
    rules: [
      {
        test: /\.(scss|sass|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              url: false,
            },
            //cssをjsに読み込ませられるやつ
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  [
                    'autoprefixer',
                    {
                      grid: 'autoplace',
                      // gridありでベンダープレフィックス付与
                    },
                  ],
                  ['css-declaration-sorter', { order: 'alphabetical' }],
                  ['postcss-sort-media-queries', { sort: 'mobile-firstl' }],
                ],
                //cssをアルファベット順・メディアクエリの並び替え
              },
            },
          },
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, 'src/images'),
          to: path.resolve(__dirname, 'assets/images'),
        },
      ],
    }),
    new RemoveEmptyScriptsPlugin(),
    new MiniCssExtractPlugin({
      filename: 'css/[name]',
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3002,
      files: ['./**/*.php'],
      proxy: process.env.LOCAL_URL,
    }),
    //new StylelintPlugin(),
  ],

  watchOptions: {
    ignored: /node_modules/,
  },
};

module.exports = [build];
