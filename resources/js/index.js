require('./bootstrap');

window.Vue = require('vue');

Vue.component('message-component', require('./components/AppComponent.vue').default);

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});