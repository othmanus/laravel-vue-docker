require('./bootstrap');
import store from './store/index';
import Login from "./components/Login";
import Register from "./components/Register";
import Spinner from "./components/Spinner";

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("login", Login)
Vue.component("register", Register)
Vue.component("spinner", Spinner)

const app = new Vue({
    el: '#app',
    store
});
