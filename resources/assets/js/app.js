/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./foundation');
$(document).foundation();






/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('top-bar-component', require('./components/top-bar-component.vue'));
Vue.component('contact-form-component', require('./components/contact-form-component.vue'));

const app = new Vue().$mount('#app');
