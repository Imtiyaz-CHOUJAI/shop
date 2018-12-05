import Vue from 'vue'
import swal from 'sweetalert'
import router from './router/index.js'
import store from './store.js'

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    router,
    store
});
