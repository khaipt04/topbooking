<script setup>
import {ref} from "vue";

let category = ref({
  name: "",
})
</script>

<template>
  <form>
    <div class="flex flex-col sm:flex-row gap-5">
      <div class="grid grid-cols-1 flex-1">
        <div>
          <label for="category_name" class="block mb-2">Tên loại</label>
          <input id="category_name" type="text" class="input w-full">
        </div>
      </div>
      <div class="flex items-end">
        <input type="submit" class="btn btn-primary" value="Thêm">
      </div>
    </div>
  </form>
</template>

<style scoped>

</style>