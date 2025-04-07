<script setup>
import AddUtilityForm from "@/components/administration/room/utility/AddUtilityForm.vue";
import UtilityList from "@/components/administration/room/utility/UtilityList.vue";
</script>

<template>
  <h1 class="font-bold text-xl">Quản lí tiện nghi phòng</h1>

  <div class="mt-10">
    <span class="font-medium text-lg">Thêm</span>
    <div class="mt-5">
      <AddUtilityForm/>
    </div>
  </div>

  <div class="mt-10">
    <span class="font-medium text-lg">Danh sách</span>
    <div class="mt-5">
      <UtilityList/>
    </div>
  </div>
</template>

<style scoped>

</style>