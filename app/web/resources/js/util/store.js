import { reactive, readonly } from 'vue';
import { createStore } from 'vuex';

const state = reactive({
    loading: false
});

const mutations = {
    setLoading(value) {
        state.loading = value;
    }
};

const actions = {
    startLoading({ commit }) {
        commit('setLoading', true);
    },
    stopLoading({ commit }) {
        commit('setLoading', false);
    }
};

const getters = {
    isLoading: () => state.loading
};

export default createStore({
    state: readonly(state),
    mutations,
    actions,
    getters
});
