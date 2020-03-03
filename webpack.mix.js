const mix = require('laravel-mix');
// require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/book/css');

mix.browserSync({
   proxy: 'http://localhost:8000'
})
   .styles([
      'node_modules/@tarekraafat/autocomplete.js/dist/css/autoComplete.css',
      'node_modules/@fortawesome/fontawesome-pro/web/css/all.min.css',
      'node_modules/@glidejs/glide/dist/css/glide.core.min.css',
      'node_modules/@glidejs/glide/dist/css/glide.theme.min.css',
      'node_modules/flexboxgrid/css/flexboxgrid.min.css',
      'node_modules/simple-keyboard/build/css/index.css',
      'public/book/css/vendor.css',
      'public/book/css/rebook.css',
      'public/book/css/custom.css',
   ], 'public/book/css/app.css')
   // .sass('public/book/css/app.css', 'public/css')
   // .purgeCss()
   .js([
      'public/book/js/common.js',
   ], 'public/book/js/app.js');
