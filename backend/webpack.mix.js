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
    .js('resources/js/showItemModal.js', 'public/js')
    .js('resources/js/deleteItem.js', 'public/js')
    .js('resources/js/deleteAccount.js', 'public/js')
    .js('resources/js/imagePreview.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: {
            target: 'http://127.0.0.1:10080',
        },
        files: [
            './resources/**/*',
            './public/**/*',
        ],
        open: false,
        reloadOnRestart: true,
    });
