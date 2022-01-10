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
    .sass('resources/sass/admin.scss', 'public/css').version();

mix.js("resources/js/app.js", "public/js").postCss("resources/css/app.css", "public/css", [require("tailwindcss"),]);