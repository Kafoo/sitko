require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('posts', require('./components/Posts.vue').default)
Vue.component('categories', require('./components/Categories.vue').default)
Vue.component('createPost', require('./components/CreatePost.vue').default)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    store
});