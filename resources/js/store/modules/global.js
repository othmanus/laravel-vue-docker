// initial state
const state = {
    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
}

// getters
const getters = {
    csrf: state => { return state.csrf },
}

// actions
const actions = {
    redirectTo({ commit }, page) {
        let link = ""
        switch (page) {
            default:
                link = "/"
        }

        if (link !== "") {
            window.location.href = link
        }
    }
}

// mutations
const mutations = {

}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}