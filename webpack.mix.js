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
// To keep ckeditor up to date, I use it as a nodemodule from now on.
mix.copyDirectory('node_modules/ckeditor4', 'public/js/ckeditor');
mix.copyDirectory('resources/fonts', 'public/fonts');

mix.js('resources/js/theme2020.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/theme2020.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css').options({processCssUrls: false});
