<script setup>
import Search from "@/components/client/common/Search.vue";
import HotelList from "@/components/client/home/HotelList.vue";
import TrendingLocationList from "@/components/client/home/TrendingLocationList.vue";
import LocationList from "@/components/client/home/LocationList.vue";
import CategoryList from "@/components/client/home/CategoryList.vue";
</script>

<template>

  <Search/>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-5">
    <div class="mt-5">
      <h1 class="text-2xl font-bold mb-3">Có thể bạn quan tâm</h1>
      <HotelList/>
    </div>

    <div class="mt-5">
      <h1 class="text-2xl font-bold">Các điểm đến đang thịnh hành</h1>
      <p class="text-md text-gray-500 mb-3">Du khách tìm kiếm về Việt Nam cũng đặt chỗ ở những nơi này</p>
      <TrendingLocationList/>
    </div>

    <div class="mt-5">
      <h1 class="text-2xl font-bold">Khám phá Việt Nam</h1>
      <p class="text-md text-gray-500 mb-3">Các điểm đến phổ biến này có nhiều điều chờ đón bạn</p>
      <LocationList/>
    </div>

    <div class="mt-5">
      <h1 class="text-2xl font-bold">Tìm theo loại chỗ nghỉ</h1>
      <CategoryList/>
    </div>
  </div>

</template>

<style scoped>

</style>