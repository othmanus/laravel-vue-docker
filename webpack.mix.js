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
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/build/js')
    .sass('resources/sass/app.scss', 'public/build/css')
    .sass('resources/sass/bootstrap.scss', 'public/build/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('tailwind.config.js') ],
    });

mix.js('resources/js/admin.js', 'public/build/js')
    .options({
        processCssUrls: false,
    });
