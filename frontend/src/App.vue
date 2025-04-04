<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
import router from "@/router/index.js";
import DefaultLayout from "@/views/layouts/DefaultLayout.vue";
import AdminLayout from "@/views/layouts/AdminLayout.vue";
import Error404 from "@/views/client/Error404.vue";

const route = useRoute()

const validRoutes = router.getRoutes().map((r) => r.path)

const layout = computed(() => {
  if (!validRoutes.includes(route.path)) {
    return Error404
  }
  return route.path.startsWith("/administration") ? AdminLayout : DefaultLayout
})
</script>

<template>
  <component :is="layout"/>
</template>

<style scoped></style>
