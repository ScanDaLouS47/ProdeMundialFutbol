
let mix = require('laravel-mix');

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', 'js').css('resources/css/app.css', 'css');