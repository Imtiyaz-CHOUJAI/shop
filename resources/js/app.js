import Vue from "vue";
import swal from "sweetalert";
import router from "./router/index.js";
import store from "./store.js";
let App = require("./app.vue");

require("./bootstrap");

window.Vue = require("vue");

const app = new Vue({
    el: "#shop-app",
    router,
    store,
    render: h => h(App)
});
