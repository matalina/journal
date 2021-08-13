import moment from 'moment';

let getters = {
    add_types(state) {
        return state.types.filter(type => {
            return type.is_edit_only == 0 && type.is_signifier == 0;
        });
    },
    signifier_types(state) {
        return state.types.filter(type => {
            return type.is_signifier == 1;
        });
    },
    bullet_types(state) {
        return state.types.filter(type => {
            return type.is_signifier == 0;
        });
    },
    type_by_id: (state) => (id) => {
        return state.types.find(type => {
            if (id === null) return undefined;
            id = parseInt(id);
            return type.id === id;
        });
    },

    bullets_by_date: (state) => (date) =>  {
        let bullets = state.bullets;

        if (bullets.length === 0) return bullets;
        
        return bullets.filter(bullet => {
            return moment(date).isSame(moment(bullet.date),'day');
        });
    }
};

export default getters;