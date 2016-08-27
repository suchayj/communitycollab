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

	var npmDir  =   'node_modules/',
        jsDir   =   'resources/assets/js',
        cssDir  =   'resources/assets/css';

    mix.copy(npmDir + 'sweetalert/dist/sweetalert.min.js', jsDir);
    mix.copy(npmDir + 'sweetalert/dist/sweetalert.css', cssDir);

	mix.scripts([
        'sweetalert.min.js'
    ], 'public/js/app.js');

    mix.styles([
        'sweetalert.css',
    ], 'public/css/app.css');

});
