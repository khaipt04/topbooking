<script setup>
import Search from "@/components/Client/Search.vue";
import ListHotel from "@/components/Client/ListHotel.vue";
import TrendingLocations from "@/components/Client/TrendingLocations.vue";
import CarouselLocations from "@/components/Client/CarouselLocations.vue";
import CarouselCategories from "@/components/Client/CarouselCategories.vue";
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