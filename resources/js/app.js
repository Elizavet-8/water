
require('./bootstrap');

window.Vue = require('vue').default;
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//страницы
// Vue.component('terminals-page', require('./components/pages/TerminalsPage.vue').default);
Vue.component('device-page', require('./components/pages/DevicePage.vue').default);
Vue.component('device-edit-page', require('./components/pages/DeviceEditPage.vue').default);
Vue.component('device-create-page', require('./components/pages/DeviceCreatePage.vue').default);

Vue.component('terminals-page', require('./components/pages/TerminalsPage').default);

const app = new Vue({
    el: '#app',
});
import Vue from 'vue'
// import { BootstrapVue } from 'bootstrap-vue';
// Vue.use(BootstrapVue)

// Vue.use(VueApexCharts)
//
// Vue.component('apexchart', VueApexCharts)
