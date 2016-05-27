var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('styles.less', 'public/css/styles.css')
        .scripts([
            'vendor/jquery-1.11.3.min.js',
            'vendor/uikit-2.25.0/uikit.js',
            'vendor/uikit-2.25.0/components/slideset.js',
            'vendor/uikit-2.25.0/components/lightbox.js',
            'vendor/marked.js',
            'scripts.js',
        ], 'public/js/scripts.js')
        .version(['public/css/styles.css', 'public/js/scripts.js'])
});
