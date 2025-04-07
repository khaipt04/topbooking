<script setup>
import {ref} from "vue";

//state
const props = defineProps({
  category: Object
})

let category = ref({ ...props.category })
</script>

<template>
  <form>
    <div>
      <label for="category_name" class="block mb-2">Tên loại</label>
      <input v-model="category.name" id="category_name" type="text" class="input w-full">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-primary" value="Lưu">
    </div>
  </form>
</template>

<style scoped>

</style>