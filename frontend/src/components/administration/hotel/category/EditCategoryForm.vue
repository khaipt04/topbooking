<script setup>
import {ref} from "vue";

//state
const props = defineProps({
  category: Object
})

let category = ref({ ...props.category })

//action
const handleFileUpload = (event) => {
  const file = event.target.files[0]
  if (file) {
    const reader = new FileReader()
    reader.onload = (e) => {
      category.value.image = e.target.result
    }
    reader.readAsDataURL(file)
  }
}
</script>

<template>
  <form>
    <div>
      <label for="category_name" class="block mb-2">Tên loại</label>
      <input v-model="category.name" id="category_name" type="text" class="input w-full">
    </div>
    <div class="mt-2">
      <label for="category_image_upload" class="block mb-2">Hình ảnh</label>
      <img :src="category.image" :alt="category.name" class="w-40 rounded">
      <label for="category_image_upload" class="btn mt-2">Thay đổi ảnh</label>
      <input type="file" @change="handleFileUpload" id="category_image_upload" class="sr-only">
    </div>
    <div class="mt-2">
      <input type="submit" class="btn btn-primary" value="Lưu">
    </div>
  </form>
</template>

<style scoped>

</style>