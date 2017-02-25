
window.$ = window.jQuery = require('patternfly/node_modules/jquery');
/*require('script-loader!patternfly/node_modules/jquery/dist/jquery.min');*/
require('patternfly/node_modules/bootstrap');

require('script-loader!patternfly/node_modules/c3/c3.min');
require('script-loader!patternfly/node_modules/d3/d3.min');

window.$.fn.DataTable = window.$.fn.dataTable = require('patternfly/node_modules/datatables/media/js/jquery.dataTables.min');
require('patternfly/node_modules/drmonty-datatables-colvis/js/dataTables.colVis');
require('patternfly/node_modules/datatables.net-colreorder/js/dataTables.colReorder');

require('patternfly/src/js/patternfly-settings');
require('patternfly/src/js/patternfly-functions');
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