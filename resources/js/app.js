require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('posts', require('./components/Posts.vue').default)
Vue.component('createPost', require('./components/CreatePost.vue').default)

const app = new Vue({
    el: '#app',
    store
});