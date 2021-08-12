import Vue from 'vue';
import createPersistedState from "vuex-persistedstate";
import Vuex from 'vuex';
import state from './state';
import mutations from './mutations';
import actions from './actions';

Vue.use(Vuex);

const store = new Vuex.Store({
    plugins: [createPersistedState()],
    state: state(),
    mutations,
    actions,
});

export default store;