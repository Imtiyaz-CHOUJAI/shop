import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    // states
    state: {
        campaigns: []
    },
    // mutations
    mutations: {
        throwSuccess(state, message) {
            swal(message, {
                icon: "success",
                timer: 2000,
                buttons: false
            });
        },
        throwError(state, message = "Please Try again in a minute") {
            swal({
                title: "Something went wrong",
                text: message,
                icon: "warning",
                // buttons: true,
                dangerMode: true
            });
        }
    },
    // getters
    getters: {},
    //actions
    actions: {}
});
