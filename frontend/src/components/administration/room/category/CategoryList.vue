<script setup>
import {ref} from "vue";
import CategoryListItems from "@/components/administration/room/category/CategoryListItems.vue";
import EditCategory from "@/components/administration/room/category/EditCategory.vue";

//sate
const categories = ref([
  { id: 1, name: "Khách sạn"},
  { id: 2, name: "Căn hộ chung cư"},
  { id: 3, name: "Homestay"},
])
const selectedCategory = ref(null)
const isModalOpen = ref(false)

//action
const openEditModal = (category) => {
  selectedCategory.value = category
  isModalOpen.value = true
}
</script>

<template>
  <div class="overflow-x-auto">
    <table class="table">
      <thead>
      <tr>
        <th class="w-5/100">Stt</th>
        <th class="w-80/100">Tên loại</th>
        <th class="w-15/100">Tùy chọn</th>
      </tr>
      </thead>

      <tbody>

        <CategoryListItems
            v-for="(category, index) in categories"
            :key="category.id"
            :category="category"
            :index="index + 1"
            @edit="openEditModal"
        />

      </tbody>
    </table>
  </div>

  <EditCategory v-model="isModalOpen" :category="selectedCategory"/>
</template>

<style scoped>

</style>