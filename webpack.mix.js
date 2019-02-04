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

mix
    .styles([
        'public/vendor/bootstrap/css/bootstrap.css',
        'public/vendor/fontawesome-free/css/all.css',
        'public/vendor/datatables/dataTables.bootstrap4.css',
        'public/css/sb-admin.css',
    ], 'public/css/admin-all.css')
    .styles([
        'public/vendor/bootstrap/css/bootstrap.css',
        'public/css/blog-home.css',
        'public/css/blog-post.css'
    ], 'public/css/all.css')
    .scripts([
        'public/vendor/jquery/jquery.js',
        'public/vendor/bootstrap/js/bootstrap.bundle.js',
        'public/vendor/jquery-easing/jquery.easing.js',
        'public/js/sb-admin.js'
    ], 'public/js/admin-all.js')
    .scripts([
        'public/vendor/jquery/jquery.js',
        'public/vendor/bootstrap/js/bootstrap.bundle.js',
    ], 'public/js/all.js');
