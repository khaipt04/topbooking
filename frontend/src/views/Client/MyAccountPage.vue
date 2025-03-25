<script setup>
import NameBox from "@/components/Client/App/NameBox.vue";
import MyInfo from "@/components/Client/MyAccountPage/MyInfo.vue";
import {useOpenInfoStore} from "@/stores/useAppStore.js";
import {
  UserIcon,
  ChevronRightIcon,
  LockClosedIcon,
  WalletIcon,
  ChatBubbleOvalLeftIcon,
  Cog6ToothIcon,
  BuildingOffice2Icon
} from '@heroicons/vue/24/outline';

const openInfo = useOpenInfoStore()

</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <NameBox/>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mt-15">
      <div class="bg-white border border-gray-300 rounded-md p-3 shadow-xl shadow-gray-200">
        <h3 class="font-medium text-lg">Quản lí tài khoản</h3>
        <div class="mt-3">
          <div @click="openInfo.open()" class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <UserIcon class="h-6 w-6 text-gray-500 mr-2" />
              Thông tin cá nhân
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>

          <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <LockClosedIcon class="h-6 w-6 text-gray-500 mr-2" />
              Cài đặt bảo mật
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-300 rounded-md p-3 shadow-xl shadow-gray-200">
        <h3 class="font-medium text-lg">Chỗ nghỉ</h3>
        <div class="mt-3">
          <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <WalletIcon class="h-6 w-6 text-gray-500 mr-2" />
              Phòng đã đặt
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>

          <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <ChatBubbleOvalLeftIcon class="h-6 w-6 text-gray-500 mr-2" />
              Đánh giá của tôi
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-300 rounded-md p-3 shadow-xl shadow-gray-200">
        <h3 class="font-medium text-lg">Cài đặt</h3>
        <div class="mt-3">
          <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <Cog6ToothIcon  class="h-6 w-6 text-gray-500 mr-2" />
              Cài đặt chung
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-300 rounded-md p-3 shadow-xl shadow-gray-200">
        <h3 class="font-medium text-lg">Dành cho chủ khách sạn</h3>
        <div class="mt-3">
          <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
            <div class="flex">
              <BuildingOffice2Icon  class="h-6 w-6 text-gray-500 mr-2" />
              Quản lí khách sạn
            </div>
            <ChevronRightIcon class="h-6 w-6 text-gray-500" />
          </div>
        </div>
      </div>
    </div>

    <MyInfo/>
  </div>
</template>

<style scoped>

</style>