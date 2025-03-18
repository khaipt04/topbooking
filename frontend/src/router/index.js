import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '@/views/Client/HomePage.vue'
import RegisterPartnerPage from "@/views/Client/RegisterPartnerPage.vue";
import AuthLayout from "@/views/Client/Auth/AuthLayout.vue";
import LoginPage from "@/views/Client/Auth/LoginPage.vue";
import RegisterPage from "@/views/Client/Auth/RegisterPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: HomePage,
    },
    {
      path: '/home',
      redirect: '/',
      component: HomePage,
    },
    {
      path: '/register-partner-hotel',
      component: RegisterPartnerPage,
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
