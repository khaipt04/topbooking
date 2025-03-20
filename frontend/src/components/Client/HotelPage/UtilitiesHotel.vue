<script setup>
import {ref} from "vue";

let seeMore = ref(false)
</script>

<template>
  <div class="mt-10">
    <h1 class="text-xl font-bold">Tiện ích khách sạn</h1>
    <div v-show="!seeMore">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-6 mt-4">
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
      </div>
      <span @click="seeMore = true" class="text-blue-400 font-bold cursor-pointer block mt-3 text-center">Xem thêm tiện ích</span>
    </div>

    <div v-show="seeMore">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-6 mt-4">
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
      </div>
      <span @click="seeMore = false" class="text-blue-400 font-bold cursor-pointer block mt-3 text-center">Thu gọn</span>
    </div>
  </div>
</template>

<style scoped>

</style>