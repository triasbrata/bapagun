var elixir = require('laravel-elixir');

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
    mix.less('main.less');
    mix.scripts([
        'vendor/jquery/jquery-1.11.2.min.js',
        'vendor/bootstrap/bootstrap.min.js',
        'vendor/raphael/raphael-min.js',
        'vendor/morris.js/morris.min.js',
        'vendor/moment/moment.min.js',
        'vendor/bootstrap-datepicker/bootstrap-datepicker.js',
        'vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'vendor/typeahead/bloodhound.min.js',
        'vendor/inputmask/jquery.inputmask.bundle.min.js',
        'vendor/typeahead/typeahead.bundle.min.js',
        'vendor/typeahead/typeahead.jquery.min.js',
        'vendor/summernote/summernote.min.js',
        'vendor/select2/select2.min.js',
        'vendor/spin.js/spin.min.js',
        'vendor/autosize/jquery.autosize.min.js',
        'vendor/flot/jquery.flot.min.js',
        'vendor/flot/jquery.flot.time.min.js',
        'vendor/flot/jquery.flot.pie.min.js',
        'vendor/flot/jquery.flot.resize.min.js',
        'vendor/flot/jquery.flot.orderBars.js',
        'vendor/flot/curvedLines.js',
        'vendor/skycons/skycons.js',
        'vendor/d3/d3.min.js',
        'vendor/d3/d3.layout.min.js',
        'vendor/d3/d3.v3.js',
        'vendor/rickshaw/rickshaw.js',
        'vendor/sparkline/jquery.sparkline.min.js',
        'vendor/nanoscroller/jquery.nanoscroller.min.js',
        'vendor/nanoscroller/overthrow.min.js',
        'vendor/toastr/toastr.js',
        'vendor/DataTables/jquery.dataTables.min.js',
      
        /*core js*/
        'core/source/App.min.js',
        'core/source/AppCard.js',
        'core/source/AppForm.js',
        'core/source/AppNavSearch.js',
        'core/source/AppNavigation.js',
        'core/source/AppVendor.js',
          /**
         * own resorce
         */
        'app.js',
        ]);
    mix.scripts(['ajax_rombel.js'],'public/js/ajax_rombel.js')
    mix.scripts([
        'vendor/utils/html5shiv.js',
        'vendor/utils/respond.min.js',
        ],'public/js/ie.js');
    mix.copy('resources/assets/vendor/roboto-fontface/fonts','public/vendor/roboto-fontface/fonts');
});
