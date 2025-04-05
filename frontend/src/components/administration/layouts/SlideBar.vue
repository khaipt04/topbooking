<script setup>
import {ref} from "vue";

//sate
let dropDownHotel = ref(false)
let dropDownRoom = ref(false)
let dropDownPartner = ref(false)
</script>

<template>
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <router-link to="/administration/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <span class="">Tổng quan</span>
          </router-link>
        </li>
        <li>
          <button @click="dropDownHotel = !dropDownHotel" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer">
            <span class="flex-1 text-left rtl:text-right whitespace-nowrap">Quản lí chỗ nghỉ</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <ul v-show="dropDownHotel" class="py-2 space-y-2">
            <li >
              <router-link to="/administration/hotel/utilities" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tiện nghi</router-link>
            </li>
            <li >
              <router-link to="/administration/hotel/categories" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Loại chỗ nghỉ</router-link>
            </li>
          </ul>
        </li>
        <li>
          <button @click="dropDownRoom = !dropDownRoom" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer">
            <span class="flex-1 text-left rtl:text-right whitespace-nowrap">Quản lí phòng</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <ul v-show="dropDownRoom" class="py-2 space-y-2">
            <li >
              <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tiện nghi</a>
            </li>
            <li >
              <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Loại phòng</a>
            </li>
          </ul>
        </li>
        <li>
          <button @click="dropDownPartner = !dropDownPartner" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer">
            <span class="flex-1 text-left rtl:text-right whitespace-nowrap">Đối tác</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <ul v-show="dropDownPartner" class="py-2 space-y-2">
            <li >
              <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Đơn đăng kí</a>
            </li>
            <li >
              <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Chỗ nghỉ</a>
            </li>
            <li >
              <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Phòng</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <span class="flex-1 whitespace-nowrap">Quản lí tài khoản</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <span class="flex-1 whitespace-nowrap">Thanh toán</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</template>

<style scoped>

</style>