// import modules
import Vue from "vue";
import router from "./router";
import store from "./store";

// // Import global scss
import './scss/main.scss';
// import font awesome
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'

// import components 
import App from "./App.vue";

// disable production mode warnings
Vue.config.productionTip = false;

// Create a new vue instance
new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
