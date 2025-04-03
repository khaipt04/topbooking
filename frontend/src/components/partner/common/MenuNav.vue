<script setup>
import { useRoute } from 'vue-router';
import {
  PencilSquareIcon,
  BuildingOfficeIcon,
  CalendarIcon,
  BellIcon,
  ChartPieIcon,
  ChatBubbleOvalLeftIcon,
  Cog8ToothIcon
} from '@heroicons/vue/24/outline';

//state
const route = useRoute()

//action
const isActive = (path) => route.path === path
</script>

<template>
  <div class="bg-blue-800 grid grid-cols-7">
    <router-link
        to="/hotel-management/info"
        :class="[isActive('/hotel-management/info') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <PencilSquareIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Chỗ nghỉ
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/rooms"
        :class="[isActive('/hotel-management/rooms') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <BuildingOfficeIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Các phòng
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/booking"
        :class="[isActive('/hotel-management/booking') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <CalendarIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Đặt phòng
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/notification"
        :class="[isActive('/hotel-management/notification') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <BellIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Thông báo
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/dashboard"
        :class="[isActive('/hotel-management/dashboard') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <ChartPieIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Thống kê
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/feedback"
        :class="[isActive('/hotel-management/feedback') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <ChatBubbleOvalLeftIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Đánh giá
        </span>
      </div>
    </router-link>

    <router-link
        to="/hotel-management/setting"
        :class="[isActive('/hotel-management/setting') ? 'bg-[rgba(255,255,255,0.2)]' : '']"
        class="text-white hover:bg-[rgba(255,255,255,0.2)] transition-all py-4 flex justify-center items-center"
    >
      <div class="flex items-center">
        <Cog8ToothIcon class="h-6 w-6 text-white mr-1" />
        <span class="hidden lg:block">
          Cài đặt
        </span>
      </div>
    </router-link>
  </div>
</template>

<style scoped>

</style>