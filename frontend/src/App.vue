<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
import DefaultLayout from "@/views/layouts/DefaultLayout.vue";
import AdminLayout from "@/views/layouts/AdminLayout.vue";

const route = useRoute();

const layout = computed(() => (route.path.startsWith("/admin") ? AdminLayout : DefaultLayout));
</script>

<template>
  <component :is="layout"/>
</template>

<style scoped></style>
