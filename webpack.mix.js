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

mix.js('resources/assets/js/app.js', 'public/js')
    .extract([
        'jquery',
        'patternfly/node_modules/bootstrap',
        'patternfly/node_modules/c3',
        'patternfly/node_modules/d3',
        'patternfly/node_modules/datatables',
        'patternfly/node_modules/drmonty-datatables-colvis',
        'patternfly/node_modules/datatables.net-colreorder',
        'patternfly/dist/js/patternfly',
        'patternfly/node_modules/patternfly-bootstrap-combobox/js/bootstrap-combobox',
        'patternfly/node_modules/bootstrap-datepicker',
        'patternfly/node_modules/moment',
        'patternfly/node_modules/eonasdan-bootstrap-datetimepicker',
        'patternfly/node_modules/bootstrap-select',
        'patternfly/node_modules/bootstrap-switch',
        'patternfly/node_modules/bootstrap-touchspin',
        'patternfly/node_modules/patternfly-bootstrap-treeview/src/js/bootstrap-treeview',
        'patternfly/node_modules/google-code-prettify/src/prettify',
        'patternfly/node_modules/jquery-match-height',
        'lodash',
        'vue',
        'axios'
    ]).sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/patternfly/dist/css/patternfly.min.css','public/css')
    .copy('node_modules/patternfly/dist/css/patternfly-additions.min.css','public/css')
    .combine(['resources/assets/css/appcss.css'],'public/css/so2platform/styles.css');