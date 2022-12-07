import { createRouter, createWebHistory } from 'vue-router'
import Annonces from '../views/Annonces.vue';
import Profil from '../views/Profile.vue';
import Home from '../views/Home.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/annonces',
      name: 'annonces',
      component: Annonces
    },
    {
      path: '/profile',
      name: 'profile',
      component: Profil

    },

  ]
})

export default router;
