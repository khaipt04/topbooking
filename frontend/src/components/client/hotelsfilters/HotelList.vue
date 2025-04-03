<script setup>
import HotelListItems from "@/components/client/hotelsfilters/HotelListItems.vue";
import { StarIcon } from '@heroicons/vue/24/outline';
</script>

<template>
  <div class="w-full">
    <h1 class="text-xl font-medium">Tìm thấy 101 chỗ nghỉ</h1>
    <div class="mt-4">
      <HotelListItems/>
      <HotelListItems/>
      <HotelListItems/>
      <HotelListItems/>
      <HotelListItems/>
    </div>
  </div>
</template>

<style scoped>

</style>