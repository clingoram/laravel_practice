/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
// router
import router from './router.js';
// import auth from './auth.js';

window.Vue = require('vue').default;

// bootstrap vue
import { NavbarPlugin, FormPlugin, FormInputPlugin, ButtonPlugin, FormGroupPlugin, CarouselPlugin, FormCheckboxPlugin } from 'bootstrap-vue';
// fontawesome
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faShoppingCart, faSearch } from '@fortawesome/free-solid-svg-icons';


Vue.use(router);
// Vue.use(auth);
Vue.use(NavbarPlugin);
Vue.use(FormPlugin);
Vue.use(FormInputPlugin);
Vue.use(FormGroupPlugin);
Vue.use(ButtonPlugin);
Vue.use(CarouselPlugin);
Vue.use(FormCheckboxPlugin);

library.add(faShoppingCart, faSearch);
Vue.component('font-awesome-icon', FontAwesomeIcon);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


// 首頁
Vue.component('index-component', require('./components/Index.vue').default);
// Header
Vue.component('header-component', require('./components/Header.vue').default);
// 上傳商品頁面
// Vue.component('upload-component', require('./components/Uploadproduct.vue').default);
// 購物車
// Vue.component('shoplist-component', require('./components/Shoplist.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router,
    // auth: auth,
});
