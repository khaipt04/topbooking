<script setup>
import RoomListItems from "@/components/partner/room/RoomListItems.vue";
import {
  PlusCircleIcon
} from '@heroicons/vue/24/outline';
</script>

<template>
  <div class="flex justify-between items-center">
    <span class="text-xl font-medium">Quản lí phòng</span>
    <button class="btn btn-primary">
      <PlusCircleIcon class="h-6 w-6 text-white" />
      Thêm mới
    </button>
  </div>

  <div class="mt-5">
    <RoomListItems/>
  </div>
</template>

<style scoped>

</style>