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
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-4 gap-4">
      <router-link to="" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2 cursor-pointer">
        <a href="#">
          <img class="rounded-t-lg w-full" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/464640824.jpg?k=2ce1467d833309a6d9e4f1e5d35ba87454a50bcf620cc5926b410aca8148c219&o=" alt="" />
        </a>
        <div class="p-2">
          <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Saigon Hotel Luxury</h5>
          <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Ho Chi Minh, Viet Nam</p>
          <div class="flex items-center">
            <span class="bg-blue-900 text-white rounded-t-md rounded-br-md p-1">4.8</span>
            <p class="text-xs ml-1">Xuất xắc</p>
            <p class="text-xs text-gray-600 mr-1 ml-1">-</p>
            <p class="text-xs text-gray-600">1000 đánh giá</p>
          </div>
        </div>
      </router-link>

      <router-link to="" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2 cursor-pointer">
        <a href="#">
          <img class="rounded-t-lg w-full" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/464640824.jpg?k=2ce1467d833309a6d9e4f1e5d35ba87454a50bcf620cc5926b410aca8148c219&o=" alt="" />
        </a>
        <div class="p-2">
          <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Saigon Hotel Luxury</h5>
          <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Ho Chi Minh, Viet Nam</p>
          <div class="flex items-center">
            <span class="bg-blue-900 text-white rounded-t-md rounded-br-md p-1">4.8</span>
            <p class="text-xs ml-1">Xuất xắc</p>
            <p class="text-xs text-gray-600 mr-1 ml-1">-</p>
            <p class="text-xs text-gray-600">1000 đánh giá</p>
          </div>
        </div>
      </router-link>

      <router-link to="" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2 cursor-pointer">
        <a href="#">
          <img class="rounded-t-lg w-full" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/464640824.jpg?k=2ce1467d833309a6d9e4f1e5d35ba87454a50bcf620cc5926b410aca8148c219&o=" alt="" />
        </a>
        <div class="p-2">
          <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Saigon Hotel Luxury</h5>
          <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Ho Chi Minh, Viet Nam</p>
          <div class="flex items-center">
            <span class="bg-blue-900 text-white rounded-t-md rounded-br-md p-1">4.8</span>
            <p class="text-xs ml-1">Xuất xắc</p>
            <p class="text-xs text-gray-600 mr-1 ml-1">-</p>
            <p class="text-xs text-gray-600">1000 đánh giá</p>
          </div>
        </div>
      </router-link>

      <router-link to="" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2 cursor-pointer">
        <a href="#">
          <img class="rounded-t-lg w-full" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/464640824.jpg?k=2ce1467d833309a6d9e4f1e5d35ba87454a50bcf620cc5926b410aca8148c219&o=" alt="" />
        </a>
        <div class="p-2">
          <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Saigon Hotel Luxury</h5>
          <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Ho Chi Minh, Viet Nam</p>
          <div class="flex items-center">
            <span class="bg-blue-900 text-white rounded-t-md rounded-br-md p-1">4.8</span>
            <p class="text-xs ml-1">Xuất xắc</p>
            <p class="text-xs text-gray-600 mr-1 ml-1">-</p>
            <p class="text-xs text-gray-600">1000 đánh giá</p>
          </div>
        </div>
      </router-link>
    </div>
  </div>
</template>

<style scoped>

</style>