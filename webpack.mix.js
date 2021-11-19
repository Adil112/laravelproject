const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.copyDirectory('resources/images', 'public/images');

mix.styles('resources/css/app.css', 'public/css/app.css')
mix.styles('resources/css/apphome.css', 'public/css/apphome.css')
mix.styles('resources/css/fonts.css', 'public/css/fonts.css')
mix.styles('resources/css/filters.css', 'public/css/filters.css')



