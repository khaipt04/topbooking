<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from "@/components/Client/Layout/Header.vue";
import Footer from "@/components/Client/Layout/Footer.vue";

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

<style scoped></style>
