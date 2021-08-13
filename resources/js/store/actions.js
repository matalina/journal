import { countBy } from 'lodash';
import api from '../api';

const actions = {
    get_types({ commit }) {
        api.send('get', 'types')
            .then(response => {;
                commit('get_types', response.data.data);
            })
            .catch(error => {
                EventBus.fire('error-received', error.response);
            })
    },

    get_bullets({ commit }) {
         api.send('get', 'bullets')
            .then(response => {;
                commit('get_bullets', response.data.data);
            })
            .catch(error => {
                EventBus.fire('error-received', error.response);
            })
    },
    add_bullet({ commit, state }, data) {
        api.send('post', 'bullets', data)
            .then(response => {
                data.id = response.data.data.id;
                commit('add_bullets', data);
            })
            .catch(error => {
                EventBus.fire('error-received', error.response);
            });
    },
    
};

export default actions;