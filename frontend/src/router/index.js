import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '@/views/Client/HomePage.vue'
import Test1 from "@/views/Client/Test1.vue";
import Test2 from "@/views/Client/Test2.vue";
import AuthLayout from "@/views/Client/Auth/AuthLayout.vue";
import LoginPage from "@/views/Client/Auth/LoginPage.vue";
import RegisterPage from "@/views/Client/Auth/RegisterPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage,
    },
    {
      path: '/test2',
      name: 'test2',
      component: Test2,
    },
    {
      path: '/auth',
      component: AuthLayout,
      redirect: '/auth/login',
      children: [
        {
          path: 'login',
          component: LoginPage
        },
        {
          path: 'register',
          component: RegisterPage
        }
      ]
    },
  ],
})

export default router
