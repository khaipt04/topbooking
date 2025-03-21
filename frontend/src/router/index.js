import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '@/views/Client/HomePage.vue';
import RegisterPartnerPage from "@/views/Client/RegisterPartnerPage.vue";
import AuthLayout from "@/views/Client/Auth/AuthLayout.vue";
import LoginPage from "@/views/Client/Auth/LoginPage.vue";
import RegisterPage from "@/views/Client/Auth/RegisterPage.vue";
import HotelPage from "@/views/Client/HotelPage.vue";
import HotelsFiltersPage from "@/views/Client/HotelsFiltersPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: HomePage,
      meta: { title: 'TopBooking - Tìm chỗ nghỉ' }
    },
    {
      path: '/home',
      redirect: '/',
      component: HomePage,
    },
    {
      path: '/register-partner-hotel',
      component: RegisterPartnerPage,
      meta: { title: 'TopBooking - Đăng kí đối tác' }
    },
    {
      path: '/auth',
      component: AuthLayout,
      redirect: '/auth/login',
      children: [
        {
          path: 'login',
          component: LoginPage,
          meta: { title: 'TopBooking - Đăng nhập' }
        },
        {
          path: 'register',
          component: RegisterPage,
          meta: { title: 'TopBooking - Đăng kí' }
        }
      ]
    },
    {
      path: '/hotel/slug',
      component: HotelPage,
    },
    {
      path: '/hotels/filters',
      component: HotelsFiltersPage,
    }
  ]
})

router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = to.meta.title;
  }
  next();
});
export default router
