// import modules
import Vue from "vue";
import VueRouter from "vue-router";

// import views
import Home from "../views/Home.vue";
import Menu from "../views/Menu.vue";
import About from "../views/About.vue";
import Contact from "../views/Contact.vue";

// run routing system
Vue.use(VueRouter);

// define some routes
const routes = [
  {
    // Homepage
    path: "/",
    name: Home,
    component: () => import("../views/Home.vue"),
    meta: {
        title: 'African Dine Restaurant'
    }
  },
  {
    // About Page
    path: "/about",
    name: About,
    component: () => import("../views/About.vue"),
    meta: {
        title: 'About | African Dine Restaurant'
    }
  },
  {
    // Menu Page
    path:"/menu",
    name:Menu,
    component: () => import("../views/Menu.vue"),
    meta: {
      title: 'Menu | African Dine Restaurant'
    }
  },
  {
    // Contact Page
    path: "/contact",
    name: Contact,
    component: () => import("../views/Contact.vue"),
    meta: {
      title: 'Contact | African Dine Restaurant'
    }
  }
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

export default router;
