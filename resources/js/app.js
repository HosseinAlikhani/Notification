require('./bootstrap');
const Vue = require('vue');
Vue.component(
    'vue-notification',
    require('./components/notification').default
);
const app = new Vue({
    el: '#app',
});

