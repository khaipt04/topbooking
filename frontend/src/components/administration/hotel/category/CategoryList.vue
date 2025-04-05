<script setup>
import {ref} from "vue";
import CategoryListItems from "@/components/administration/hotel/category/CategoryListItems.vue";
import EditCategory from "@/components/administration/hotel/category/EditCategory.vue";

//sate
const categories = ref([
  { id: 1, name: "Khách sạn", image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/528409170.jpg?k=eb84cf4b8a1d632190b4b9b71842577a1fd9ce49a779dcb3bb2987d4bece0d00&o=" },
  { id: 2, name: "Căn hộ chung cư", image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/528409170.jpg?k=eb84cf4b8a1d632190b4b9b71842577a1fd9ce49a779dcb3bb2987d4bece0d00&o=" },
  { id: 3, name: "Homestay", image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/528409170.jpg?k=eb84cf4b8a1d632190b4b9b71842577a1fd9ce49a779dcb3bb2987d4bece0d00&o=" },
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
        <th class="w-15/100">Hình ảnh</th>
        <th class="w-65/100">Tên loại</th>
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