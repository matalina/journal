import api from '../api';

const actions = {
    get_types({ commit }) {
        api.send('get', 'types')
            .then(response => {
                commit('get_types', response);
            })
            .catch(error => {
                EventBus.fire('error-received', error.response);
            })
    }
};

export default actions;