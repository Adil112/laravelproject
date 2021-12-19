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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.styles('resources/css/font-awesome.css', 'public/css/font-awesome.css')
mix.styles('resources/css/font-awesome.min.css', 'public/css/font-awesome.min.css')
mix.styles('resources/css/allrequest.css', 'public/css/allrequest.css')
mix.styles('resources/css/apphome.css', 'public/css/apphome.css')
mix.styles('resources/css/auth.css', 'public/css/auth.css')
mix.styles('resources/css/book.css', 'public/css/book.css')
mix.styles('resources/css/cart.css', 'public/css/cart.css')
mix.styles('resources/css/contacts.css', 'public/css/contacts.css')
mix.styles('resources/css/fh.css', 'public/css/fh.css')
mix.styles('resources/css/filters.css', 'public/css/filters.css')
mix.styles('resources/css/fonts.css', 'public/css/fonts.css')
mix.styles('resources/css/reg.css', 'public/css/reg.css')
mix.styles('resources/css/requestconfirm.css', 'public/css/requestconfirm.css')
mix.styles('resources/css/support.css', 'public/css/support.css')
mix.styles('resources/css/user.css', 'public/css/user.css')
mix.styles('resources/css/bookcrud.css', 'public/css/bookcrud.css')
