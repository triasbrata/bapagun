var elixir = require('laravel-elixir');
var vendorLoadPath =   './'

/*
|--------------------------------------------------------------------------
| Elixir Asset Management
|--------------------------------------------------------------------------
|
| Elixir provides a clean, fluent API for defining some basic Gulp tasks
| for your Laravel application. By default, we are compiling the Less
| file for our application, as well as publishing vendor resources.
|
*/

elixir(function(mix) {
    mix.scripts([
        'vendor/jquery/jquery-1.11.2.min.js',
        'vendor/raphael/raphael-min.js',
        'vendor/morris.js/morris.min.js',
        'vendor/DataTables/jquery.dataTables.min.js',
        'vendor/materialize/materialize.min.js',
        /**
         * own resorce
         */
        'init.js',
    ]);
    mix.sass([
        '../vendor/materialize-src/sass/materialize.scss',
        'style.scss'
    ]);
    mix.copy('resources/assets/imgs','public/imgs');
    
});
