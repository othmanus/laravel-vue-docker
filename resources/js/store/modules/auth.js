// initial state
const state = {
}

// getters
const getters = {
}

// actions
const actions = {
    async logout({ commit }) {
        await axios.post('/logout')
            .then(response => commit('postLogout'))
            .catch(error => console.log(error));
    }
}

// mutations
const mutations = {
    postLogout({ state }) {
        window.location.href = "/"
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}