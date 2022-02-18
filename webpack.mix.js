const mix = require('laravel-mix');

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
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/fonts', 'public/fonts');
mix.js('resources/js/admin.js', 'public/js')
.js('resources/js/theme2022.js','public/js')
    .sass('resources/sass/theme2022.scss','public/css')
    .sass('resources/sass/admin.scss', 'public/css').version();

