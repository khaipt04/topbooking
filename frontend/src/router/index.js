import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '@/views/Client/HomePage.vue'
import Test1 from "@/views/Client/Test1.vue";
import Test2 from "@/views/Client/Test2.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage,
    },
    {
      path: '/test1',
      name: 'test1',
      component: Test1,
    },
    {
      path: '/test2',
      name: 'test2',
      component: Test2,
    }
  ],
})

export default router
