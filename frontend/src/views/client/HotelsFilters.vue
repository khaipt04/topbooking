<script setup>
import Search from "@/components/client/common/Search.vue";
import HotelList from "@/components/client/hotelbyfilter/HotelList.vue";
import FilterForm from "@/components/client/hotelbyfilter/FilterForm.vue";
</script>

<template>
  <Search/>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-4">
      <div class="col-span-1">
        <FilterForm/>
      </div>
      <div class="col-span-1 sm:col-span-2 lg:col-span-2">
        <HotelList/>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>