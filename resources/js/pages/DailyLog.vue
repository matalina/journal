<template>
    <div id="daily-log">
        <form>
            <select
                class="form-select"
                v-model="signifier"
            >
                <option
                    v-for="type in signifier_types"
                    :key="`sig_${type.id}`"
                    v-html="`${type.icon} ${type.type}`"
                >
                </option>
            </select>
            <select
                class="form-select"
                v-model="type_id"
            >
                <option
                    v-for="type in add_types"
                    :key="`type_${type.id}`"
                     v-html="`${type.icon} ${type.type}`"
                >
                </option>
            </select>
            <input 
                type="date" 
                class="form-input"
                v-model="date"
            />
            <input 
                type="text" 
                class="form-input"
                v-model="content"
            />
        </form>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    name: 'daily-log',
    data() {
        return {
            content: '',
            type_id: null,
            signifier: null,
            date: moment(),
        };
    },
    computed: {
        types() {
            return this.$store.state.types;
        },
        add_types() {
            return types.filter(type => {
                return type.is_edit_only === 0 && type.is_signifier === 0;
            });
        },
        signifier_types() {
            return types.filter(type => {
                return type.is_signifier === 1;
            });
        },
        bullet_types() {
            return types.filter(type => {
                return type.is_signifier === 0;
            });
        }
    }
};
</script>
