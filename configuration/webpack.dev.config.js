/* eslint-disable import/no-extraneous-dependencies */
const { merge } = require('webpack-merge');
const path = require('path');

const webpackConfiguration = require('../webpack.config');
const environment = require('./environment');

module.exports = merge(webpackConfiguration, {
  output: {
    path: path.resolve(environment.paths.output),
    filename: 'js/app.js',
  },
  target: 'web',
  devServer: {
    devMiddleware: {
      writeToDisk: true
    },
    static: {
      directory: path.resolve(environment.paths.source)
    },
    open: true,
    host: 'localhost',
    port: 3000,
    proxy: {
      '**': {
        target: environment.proxy_host,
        changeOrigin: true,
      }
    }
  }
});
