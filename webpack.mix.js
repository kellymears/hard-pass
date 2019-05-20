const mix = require('laravel-mix')
require('laravel-mix-wp-blocks')

// 🥣
mix.block('assets/scripts/blacklist.js', 'dist/blacklist.js')
   .setPublicPath('./dist')

mix.inProduction ? mix.version() : mix.sourceMaps()
