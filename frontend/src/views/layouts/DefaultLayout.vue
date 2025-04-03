<script setup>
import {RouterView} from "vue-router";
import Footer from "@/components/client/layouts/Footer.vue";
import Header from "@/components/client/layouts/Header.vue";
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <Header/>

    <main class="flex-1">
      <RouterView/>
    </main>

    <Footer/>
  </div>
</template>

<style scoped>

</style>