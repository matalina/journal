<template>
    <div class="flex p-1">
         <template v-html="prefix" />
            <span v-html="signifier" class="w-6 text-center"></span> 
            <span v-html="icon" class="w-6 text-center"></span> 
            <span class="ml-4">{{ bullet.content}}</span>
         <template v-html="suffix" />
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    name: 'bullet',
    props: ['bullet'],
    data() {
        return {

        };
    },
    computed: {
        ...mapGetters([
            'type_by_id',
        ]),
        icon() {
            if(this.type_by_id(this.bullet.type_id)) {
                return this.type_by_id(this.bullet.type_id).icon;
            }
            return '';
        },
        signifier() {
            if(this.type_by_id(this.bullet.signifier)) {
                return this.type_by_id(this.bullet.signifier).icon;
            }
            return '';
        },
        prefix() {
            if(this.type_by_id(this.bullet.type_id)) {
                return this.type_by_id(this.bullet.type_id).prefix;
            }
            return '';
        },
        suffix() {
            if(this.type_by_id(this.bullet.type_id)) {
                return this.type_by_id(this.bullet.type_id).suffix;
            }
            return '';
        },
    }
}
</script>