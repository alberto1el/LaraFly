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

mix.js('resources/assets/js/patternfly.js', 'public/js')
    //.sass('resources/assets/sass/app.scss', 'public/css')
    //.less('resources/assets/less/styles.less','public/css')
    .copy('node_modules/patternfly/dist/css/patternfly.min.css','public/css')
    .copy('node_modules/patternfly/dist/css/patternfly-additions.min.css','public/css')
    .copy('node_modules/patternfly/dist/fonts/*','public/fonts/')
    .copy('node_modules/patternfly/dist/img/*','public/img/')
    //.combine(['resources/assets/css/appcss.css'],'public/css/so2platform/styles.css')
    ;