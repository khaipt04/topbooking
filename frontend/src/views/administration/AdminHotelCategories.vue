<script setup>
import AddCategoryForm from "@/components/administration/hotel/category/AddCategoryForm.vue";
import CategoryList from "@/components/administration/hotel/category/CategoryList.vue";
</script>

<template>
  <h1 class="font-bold text-xl">Quản lí loại chỗ nghỉ</h1>

  <div class="mt-10">
    <span class="font-medium text-lg">Thêm</span>
    <div class="mt-5">
      <AddCategoryForm/>
    </div>
  </div>

  <div class="mt-10">
    <span class="font-medium text-lg">Danh sách</span>
    <div class="mt-5">
      <CategoryList/>
    </div>
  </div>
</template>

<style scoped>

</style>