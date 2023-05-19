const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/css/blog.scss', 'public/assets/css/blog.css')
    .sass('resources/css/blog-home.scss', 'public/assets/css/blog-home.css')
    .sass('resources/css/contact.scss', 'public/assets/css/contact.css')
    .sass('resources/css/parallax-empreendimentos.scss', 'public/assets/css/parallax-empreendimentos.css');
