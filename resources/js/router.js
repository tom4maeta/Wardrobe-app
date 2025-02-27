
import { createRouter, createWebHistory } from 'vue-router';
import Clothing_ItemsIndex from '@/Pages/Clothing_Items/Index.vue';

const routes = [
  {
    path: '/',
    component: Clothing_ItemsIndex,
    meta: { requiresAuth: true },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;