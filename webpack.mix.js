const mix = require('laravel-mix')
require('laravel-mix-wp-blocks')

// 🥣
mix.js('assets/scripts/blacklist.js', 'dist/blacklist.js')
   .setPublicPath('./dist')

mix.inProduction ? mix.version() : mix.sourceMaps()
