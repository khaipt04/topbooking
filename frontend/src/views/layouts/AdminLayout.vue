<script setup>
import Nav from "@/components/administration/layouts/Nav.vue";
import SlideBar from "@/components/administration/layouts/SlideBar.vue";
</script>

<template>
  <Nav/>

  <SlideBar/>

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <router-view></router-view>
    </div>
  </div>
</template>

<style scoped>

</style>