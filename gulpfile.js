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
    mix.sass('bootstrap.scss');

	mix.styles([
		'bootstrap.css',
		'theme.css'
	]);

	mix.scripts([
		'jquery.js',
		'bootstrap.js',
		'theme.js'
	]);

});


