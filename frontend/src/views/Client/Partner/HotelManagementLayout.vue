<script setup>
import MenuNav from "@/components/Client/HotelManagement/MenuNav.vue";
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-15">
    <MenuNav/>
    <div class="bg-white border border-gray-300 shadow-md shadow-gray-200 rounded p-5 mt-10">
      <router-view></router-view>
    </div>
  </div>
</template>

<style scoped>

</style>