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

mix.styles([
    'vendor/bootstrap/css/bootstrap.css',
    'vendor/fontawesome-free/css/all.css',
    'vendor/datatables/dataTables.bootstrap4.css',
    'public/css/sb-admin.css',
], 'public/css/all.css')
    .scripts([
        'vendor/jquery/jquery.js',
        'vendor/bootstrap/js/bootstrap.bundle.js',
        'vendor/jquery-easing/jquery.easing.js',
        'public/js/sb-admin.js'
    ], 'public/js/all.js');
