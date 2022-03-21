const path = require('path');

module.exports = {
  proxy_host: 'http://frontend-ferma.loc/',
  paths: {
    source: path.resolve(__dirname, '../src/'),
    output: path.resolve(__dirname, '../public_html/dist/'),
  },
  limits: {
    images: 8192,
    fonts: 8192,
  },
};
