<script setup>
import Title from "@/components/Client/HomePage/Title.vue";
defineProps({
  title: String,
  sub_title: String
})
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-5">
    <Title :message = "title" :sub_message="sub_title"/>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-5">
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">Vũng tàu</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/vung-tau.jpg" alt="" srcset="">
      </router-link>
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">Nha Trang</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/nha-trang.jpg" alt="" srcset="">
      </router-link>
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">TP. Hồ Chí Minh</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/ho-chi-minh.jpg" alt="" srcset="">
      </router-link>
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">Đà Nẵng</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/da-nang.jpg" alt="" srcset="">
      </router-link>
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">Mũi Né</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/mui-ne.jpg" alt="" srcset="">
      </router-link>
      <router-link to="" class="rounded-lg border border-yellow-400 hover:scale-105 transition ease-in-out delay-100 duration-300 relative">
        <h2 class="absolute top-3 left-3 text-white font-medium text-xl">Đà Lạt</h2>
        <img class="w-full h-full rounded-lg" src="/images/locations/da-lat.jpg" alt="" srcset="">
      </router-link>
    </div>
  </div>
</template>

<style scoped>

</style>