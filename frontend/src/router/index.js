import { createRouter, createWebHistory } from 'vue-router';

//client
import Home from '@/views/client/Home.vue';
import RegisterPartner from "@/views/client/RegisterPartner.vue";
import AuthLayout from "@/views/client/auth/AuthLayout.vue";
import Login from "@/views/client/auth/Login.vue";
import Register from "@/views/client/auth/Register.vue";
import Hotel from "@/views/client/Hotel.vue";
import HotelsFilters from "@/views/client/HotelsFilters.vue";
import MyAccount from "@/views/client/MyAccount.vue";
import Error404 from "@/views/client/Error404.vue";
import RoomsBooked from "@/views/client/RoomsBooked.vue";

//partner
import HotelMgmtLayout from "@/views/partner/HotelMgmtLayout.vue";
import Info from "@/views/partner/Info.vue";
import ViewRoomList from "@/views/partner/room/ViewRoomList.vue";
import AddRoom from "@/views/partner/room/AddRoom.vue";
import CustomizeRoom from "@/views/partner/room/CustomizeRoom.vue";
import Booking from "@/views/partner/Booking.vue";
import Notification from "@/views/partner/Notification.vue";
import Dashboard from "@/views/partner/Dashboard.vue";
import Feedback from "@/views/partner/Feedback.vue";
import Setting from "@/views/partner/Setting.vue";

//admin
import AdminDashboard from "@/views/administration/AdminDashboard.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: Home,
      meta: { title: 'TopBooking - Tìm chỗ nghỉ' }
    },
    {
      path: '/home',
      redirect: '/',
      component: Home,
    },
    {
      path: '/register-partner-hotel',
      component: RegisterPartner,
      meta: { title: 'TopBooking - Đăng kí đối tác' }
    },
    {
      path: '/auth',
      component: AuthLayout,
      redirect: '/auth/login',
      children: [
        {
          path: 'login',
          component: Login,
          meta: { title: 'TopBooking - Đăng nhập' }
        },
        {
          path: 'register',
          component: Register,
          meta: { title: 'TopBooking - Đăng kí' }
        }
      ]
    },
    {
      path: '/myaccount',
      component: MyAccount,
    },
    {
      path: '/hotel/slug',
      component: Hotel,
    },
    {
      path: '/hotels/filters',
      component: HotelsFilters,
    },
    {
      path: '/roomsbooked',
      component: RoomsBooked,
    },
    {
      path: '/hotel-management',
      component: HotelMgmtLayout,
      redirect: '/hotel-management/info',
      children: [
        {
          path: 'info',
          component: Info,
          meta: { title: 'Quản lí chỗ nghỉ - Thông tin cơ bản' }
        },
        {
          path: 'rooms',
          component: ViewRoomList,
          meta: { title: 'Quản lí chỗ nghỉ - Quản lí phòng' }
        },
        {
          path: 'room/add',
          component: AddRoom,
          meta: { title: 'Quản lí chỗ nghỉ - Thêm phòng' }
        },
        {
          path: 'room/customize',
          component: CustomizeRoom,
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
      path: '/administration',
      redirect: '/administration/dashboard',
      children: [
        {
          path: 'dashboard',
          component: AdminDashboard,
          meta: { title: 'Admin - Tổng quan' }
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
