import Vue from 'vue'
import Vuex from 'vuex'
import global from './modules/global'
import auth from './modules/auth'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        global,
        auth,
    },
    strict: debug
})