<script setup>
import {ref} from "vue";

const props = defineProps({
  utility: Object
})

let utility = ref({ ...props.utility })
</script>

<template>
  <form>
    <div>
      <label for="utility_icon" class="block mb-2">Icon</label>
      <input v-model="utility.icon" id="utility_icon" type="text" class="input w-full">
    </div>
    <div class="mt-2">
      <label for="utility_name" class="block mb-2">Tên tiện nghi</label>
      <input v-model="utility.name" id="utility_name" type="text" class="input w-full">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-primary" value="Lưu">
    </div>
  </form>
</template>

<style scoped>

</style>