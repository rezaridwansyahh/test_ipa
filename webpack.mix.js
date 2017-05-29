const { mix } = require('laravel-mix');

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

mix.styles([
	'resources/assets/template/css/font-awesome.min.css',
    'resources/assets/template/css/mmenu.css',
    'resources/assets/template/css/mmenu.positioning.css',
    'resources/assets/template/style.css'
], 'public/css/bundle.css')
.options({
  	processCssUrls: false
});

mix.scripts([
	'resources/assets/js/jquery-1.12.4.min.js',
	'resources/assets/template/js/jquery-ui.min.js',
	'resources/assets/template/js/jquery.easing.1.3.js',
	'resources/assets/template/js/bootstrap.min.js',
	'resources/assets/template/js/mmenu.min.js',
	'resources/assets/template/js/harvey.min.js',
	'resources/assets/template/js/waypoints.min.js',
	'resources/assets/template/js/facts.counter.min.js',
	'resources/assets/template/js/mixitup.min.js',
	'resources/assets/template/js/owl.carousel.min.js',
	'resources/assets/template/js/accordion.min.js',
	'resources/assets/template/js/responsive.tabs.min.js',
	'resources/assets/template/js/responsive.table.min.js',
	'resources/assets/template/js/masonry.min.js',
	'resources/assets/template/js/carousel.swipe.min.js',
	'resources/assets/template/js/bxslider.min.js',
	'resources/assets/js/main.js',
    'resources/assets/js/jquery-validation/jquery.validate.min.js',
    'resources/assets/js/jquery-validation/additional-methods.min.js',
    'resources/assets/js/login.js'
], 'public/js/bundle.js')
.options({
	processCssUrls: false
});

if (mix.config.inProduction) {
    mix.version();
}

mix.browserSync('localhost:9400');
