const path = require('path');

module.exports = {
  mode: 'development',
  entry: {
    index: './wp-content/themes/zoepix/src/assets/js/index.js'
  },
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'wp-content/themes/zoepix/dist')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  }
};