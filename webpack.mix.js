const mix = require('laravel-mix');

mix
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');
