<script setup>
import {ref} from "vue";
import MyInfo from "@/components/client/myaccount/MyInfo.vue";
import ChangeAvatar from "@/components/client/myaccount/ChangeAvatar.vue";
import {
  UserIcon,
  ChevronRightIcon,
  LockClosedIcon,
  WalletIcon,
  ChatBubbleOvalLeftIcon,
  Cog6ToothIcon,
  BuildingOffice2Icon
} from '@heroicons/vue/24/outline';

let isModalInfoOpen = ref(false)
let isModalChangeAvatarOpen = ref(false)
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <div class="w-full flex justify-center items-center">
      <img class="w-30 h-30 rounded-full border border-yellow-400" src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/1f/1f923ac2381b0d8af9fadf5f51bb9e072044de94.jpg" alt="">
    </div>
    <div class="text-center">
      <h5 class="mt-5 mb-2 text-2xl font-bold">Phan Thanh Khai</h5>
      <span class="text-sm text-yellow-500 p-2 rounded-md bg-gray-200">Khách hàng</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mt-15">
      <div class="bg-white border border-gray-300 rounded-md p-3 shadow-xl shadow-gray-200">
        <h3 class="font-medium text-lg">Quản lí tài khoản</h3>
        <div class="mt-3">
          <div @click="isModalInfoOpen = true" class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
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
          <router-link to="/roomsbooked">
            <div class="hover:bg-gray-200 p-2 my-1 rounded transition-all cursor-pointer flex justify-between items-center">
              <div class="flex">
                <WalletIcon class="h-6 w-6 text-gray-500 mr-2" />
                Phòng đã đặt
              </div>
              <ChevronRightIcon class="h-6 w-6 text-gray-500" />
            </div>
          </router-link>

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

    <MyInfo v-model="isModalInfoOpen" @open="isModalChangeAvatarOpen = true; isModalInfoOpen = false"/>
    <ChangeAvatar v-model="isModalChangeAvatarOpen" @open="isModalInfoOpen = true"/>
  </div>
</template>

<style scoped>

</style>