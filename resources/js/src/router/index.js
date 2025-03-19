import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/home/HomeView.vue';
import ContactView from '../views/contact/ContactView.vue';
import RouteNotFoundView from '../views/route-not-fount/RouteNotFoundView.vue'



const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView
  },
  {
    path: '/:catchAll(.*)',
    name: 'not-found',
    component: RouteNotFoundView
  }
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes
});

export default router;