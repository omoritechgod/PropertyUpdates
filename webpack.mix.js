const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/custom.js', 'public/js')
    .js('resources/js/plugin.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/lightbox.js', 'public/js')
    .js('resources/js/jquery.easypiechart.min.js', 'public/js')
    .styles([
        'resources/css/custom.css',
        'resources/css/bootstrap-datetimepicker.css',
        'resources/css/style.css',
        'resources/css/lightbox.css',
        'resources/css/emoji.css',
        'resources/css/themify-icons.css'
    ], 'public/css/all.css')
    .sass('resources/css/app.scss', 'public/css')
    .version();
