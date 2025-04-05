<script setup>
import AddUtilityForm from "@/components/administration/hotel/utility/AddUtilityForm.vue";
import UtilityList from "@/components/administration/hotel/utility/UtilityList.vue";

</script>

<template>
  <h1 class="font-bold text-xl">Quản lí tiện nghi chỗ nghỉ</h1>

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