<script setup>
import Search from "@/components/Client/HomePage/Search.vue";
import ListHotel from "@/components/Client/HomePage/ListHotel.vue";
import TrendingLocations from "@/components/Client/HomePage/TrendingLocations.vue";
import CarouselLocations from "@/components/Client/HomePage/CarouselLocations.vue";
import CarouselCategories from "@/components/Client/HomePage/CarouselCategories.vue";
</script>

<template>
  <Search/>
  <ListHotel title="Có thể bạn quan tâm"/>
  <TrendingLocations title="Điểm đến đang thịnh hành" sub_title="Du khách tìm kiếm về Việt Nam cũng đặt chỗ ở những nơi này"/>
  <CarouselLocations title="Khám phá Việt Nam" sub_title="Các điểm đến phổ biến này có nhiều điều chờ đón bạn"/>
  <CarouselCategories title="Tìm theo loại chỗ nghỉ"/>
</template>

<style scoped>

</style>