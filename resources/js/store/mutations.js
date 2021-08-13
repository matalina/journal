const mutations = {
    get_types(state, data) {
        state.types = data;
    },


    get_bullets(state, data) {
        state.bullets = data;
    },
    add_bullets(state, data) {
        state.bullets.push(data);
    }
};

export default mutations;