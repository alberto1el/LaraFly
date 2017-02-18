
require('patternfly/node_modules/jquery');
require('patternfly/node_modules/bootstrap');
require('patternfly/node_modules/c3');
require('patternfly/node_modules/d3');
require('patternfly/node_modules/datatables');
require('patternfly/node_modules/drmonty-datatables-colvis');
require('patternfly/node_modules/datatables.net-colreorder');
require('patternfly/dist/js/patternfly');
require('patternfly/node_modules/patternfly-bootstrap-combobox/js/bootstrap-combobox');
require('patternfly/node_modules/bootstrap-datepicker');
require('patternfly/node_modules/moment');
require('patternfly/node_modules/eonasdan-bootstrap-datetimepicker');
require('patternfly/node_modules/bootstrap-select');
require('patternfly/node_modules/bootstrap-switch');
require('patternfly/node_modules/bootstrap-touchspin');
require('patternfly/node_modules/patternfly-bootstrap-treeview/src/js/bootstrap-treeview');
require('patternfly/node_modules/google-code-prettify/src/prettify');
require('patternfly/node_modules/jquery-match-height');

window._ = require('lodash');
window.Vue = require('vue');
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.component('so2platform-panel', require('./components/so2platform/panel.vue'));

