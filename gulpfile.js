const elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass([
        './node_modules/normalize.css/normalize.css',
        './node_modules/glidejs/dist/css/glide.core.min.css',
        './node_modules/glidejs/dist/css/glide.theme.min.css',
        './node_modules/select2/dist/css/select2.min.css',
        'app.sass'
    ], 'public/css/app.css');

    mix.scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/glidejs/dist/glide.min.js',
        './node_modules/select2/dist/js/select2.min.js',
        'app.js'
    ], 'public/js/app.js');

    mix.livereload();
});
