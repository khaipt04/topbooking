<script setup>
defineProps({
  message: String,
  sub_message: String
});

</script>

<template>
  <h1 :class="[sub_message ? '' : 'mb-3', ' text-2xl font-bold']">{{ message }}</h1>
  <p v-if="sub_message" :class="[sub_message ? 'mb-3' : '', ' text-md text-gray-500']">{{ sub_message }}</p>
</template>

<style scoped>

</style>