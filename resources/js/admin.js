require('./bootstrap');
import store from './store/index'

window.Vue = require('vue');

const admin = new Vue({
    el: '#admin',
    store
});
