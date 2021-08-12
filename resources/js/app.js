import Vue from 'vue';
import router from './router';
import store from './store';
import EventBus from './event';

window._ = require('lodash');
window.EventBus = EventBus;

const app = new Vue({
    el: '#app',
    router,
    store,
});