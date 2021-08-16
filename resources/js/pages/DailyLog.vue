<template>
    <div id="daily-log">
        <form class="flex" @submit.prevent=submit()>
            <select
                class="form-select"
                v-model="signifier"
            >
                <option value="">normal</option>
                <option
                    v-for="type in signifier_types"
                    :key="`sig_${type.id}`"
                    v-html="`${type.icon} ${type.type}`"
                    :value="type.id"
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
                    :value="type.id"
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
                class="form-input flex-grow"
                v-model="content"
                placeholder="Add Task/Event/Note"
            />
        </form>
        <section id="log">
            <h1>Daily Log</h1>
            <empty-list name="daily log" v-if="bullets_by_date(display_date).length === 0"/>
            <ul>
                <li
                    v-for="bullet in bullets_by_date(display_date)"
                    :key='`bullet_${bullet.id}`'
                >
                <bullet :bullet="bullet"></bullet>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
import moment from 'moment';
import { mapGetters } from 'vuex';
import api from '../api';
import Bullet from '../components/Bullet.vue';
import EmptyList from '../components/EmptyList.vue';

export default {
    name: 'daily-log',
    components: { bullet: Bullet, 'empty-list': EmptyList },
    data() {
        return {
            display_date: moment(),
            // Daily Log Form
            content: '',
            type_id: 1,
            signifier: '',
            date: moment().format('YYYY-MM-DD'),
            // Todays List
        };
    },
    computed: {
        ...mapGetters([
            'add_types',
            'signifier_types',
            'bullet_types',
            'bullets_by_date'
        ]),
    },
    methods: {
        resetRapidLogForm() {
            this.content = '';
            this.type_id = 1;
            this.signifier = '';
            this.date = moment().format('YYYY-MM-DD');
        },
        submit() {
            this.$store.dispatch('add_bullet', {
                content: this.content,
                date: this.date,
                signifier: this.signifier,
                type_id: this.type_id,
            });

            this.resetRapidLogForm();
        }
        
        
    }
};
</script>
