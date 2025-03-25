<script setup>
import Search from "@/components/Client/App/Search.vue";
import ListHotel from "@/components/Client/HotelsFiltersPage/ListHotel.vue";
import Filter from "@/components/Client/HotelsFiltersPage/Filter.vue";
</script>

<template>
  <Search/>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-4">
      <div class="col-span-1">
        <Filter/>
      </div>
      <div class="col-span-1 sm:col-span-2 lg:col-span-2">
        <ListHotel/>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>