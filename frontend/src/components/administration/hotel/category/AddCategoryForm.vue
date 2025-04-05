<script setup>
import {ref} from "vue";

let category = ref({
  name: "",
  image: ""
})
let imageUpload = ref(null)

const handleFileUpload = (event) => {
  const file = event.target.files[0]
  if (file) {
    category.value.image = file.name
    imageUpload.value = file
  }
}
</script>

<template>
  <form>
    <div class="flex flex-col sm:flex-row gap-5">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 flex-1">
        <div>
          <label for="category_name" class="block mb-2">Tên loại</label>
          <input id="category_name" type="text" class="input w-full">
        </div>
        <div>
          <label for="category_image" class="block mb-2">Hình ảnh</label>
          <div class="flex gap-2 items-center">
            <label for="category_image" class="btn">Tải lên hình ảnh</label>
            <input @change="handleFileUpload" id="category_image" type="file" class="sr-only">
            <p v-show="category.image !== ''">{{ category.image }}</p>
          </div>
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