import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '@/views/Client/HomePage.vue';
import RegisterPartnerPage from "@/views/Client/RegisterPartnerPage.vue";
import AuthLayout from "@/views/Client/Auth/AuthLayout.vue";
import LoginPage from "@/views/Client/Auth/LoginPage.vue";
import RegisterPage from "@/views/Client/Auth/RegisterPage.vue";
import HotelPage from "@/views/Client/HotelPage.vue";
import HotelsFiltersPage from "@/views/Client/HotelsFiltersPage.vue";
import MyAccountPage from "@/views/Client/MyAccountPage.vue";
import Error404 from "@/views/Client/Error404.vue";
import RoomsBookedPage from "@/views/Client/RoomsBookedPage.vue";
import HotelManagementLayout from "@/views/Client/Partner/HotelManagementLayout.vue";
import Info from "@/views/Client/Partner/Info.vue";
import Rooms from "@/views/Client/Partner/Room/Rooms.vue";
import Add from "@/views/Client/Partner/Room/Add.vue";
import Customize from "@/views/Client/Partner/Room/Customize.vue";
import Booking from "@/views/Client/Partner/Booking.vue";
import Notification from "@/views/Client/Partner/Notification.vue";
import Dashboard from "@/views/Client/Partner/Dashboard.vue";
import Feedback from "@/views/Client/Partner/Feedback.vue";
import Setting from "@/views/Client/Partner/Setting.vue";

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
      path: '/myaccount',
      component: MyAccountPage,
    },
    {
      path: '/hotel/slug',
      component: HotelPage,
    },
    {
      path: '/hotels/filters',
      component: HotelsFiltersPage,
    },
    {
      path: '/roomsbooked',
      component: RoomsBookedPage,
    },
    {
      path: '/hotel-management',
      component: HotelManagementLayout,
      redirect: '/hotel-management/info',
      children: [
        {
          path: 'info',
          component: Info,
          meta: { title: 'Quản lí chỗ nghỉ - Thông tin cơ bản' }
        },
        {
          path: 'rooms',
          component: Rooms,
          meta: { title: 'Quản lí chỗ nghỉ - Quản lí phòng' }
        },
        {
          path: 'room/add',
          component: Add,
          meta: { title: 'Quản lí chỗ nghỉ - Thêm phòng' }
        },
        {
          path: 'room/customize',
          component: Customize,
          meta: { title: 'Quản lí chỗ nghỉ - Tùy chỉnh phòng' }
        },
        {
          path: 'booking',
          component: Booking,
          meta: { title: 'Quản lí chỗ nghỉ - Quản lí đặt phòng' }
        },
        {
          path: 'notification',
          component: Notification,
          meta: { title: 'Quản lí chỗ nghỉ - Thông báo' }
        },
        {
          path: 'dashboard',
          component: Dashboard,
          meta: { title: 'Quản lí chỗ nghỉ - Thống kê' }
        },
        {
          path: 'feedback',
          component: Feedback,
          meta: { title: 'Quản lí chỗ nghỉ - Đánh giá' }
        },
        {
          path: 'setting',
          component: Setting,
          meta: { title: 'Quản lí chỗ nghỉ - Cài đặt' }
        }
      ]
    },
    {
      path: '/:pathMatch(.*)*',
      component: Error404,
    }
  ]
})

router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = to.meta.title
  }
  next()
})
export default router
