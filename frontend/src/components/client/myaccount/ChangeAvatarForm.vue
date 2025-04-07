<script setup>
import {ref} from "vue";

//state
let imagePreview = ref(null)

//action
const handleFileUpload = (event) => {
  const file = event.target.files[0]
  if (file) {
    const reader = new FileReader()
    reader.onload = (e) => {
      imagePreview.value = e.target.result
    }
    reader.readAsDataURL(file)
  }
}
</script>

<template>
  <form>
    <div class="flex justify-center">
      <img
          class="w-50 h-50 rounded-full"
          :src="imagePreview ? imagePreview : '/images/hotel_images/621776883.webp'"
          alt="avatar"
      >
    </div>
    <div>
      <div class="text-center mt-3">
        <label for="image_upload" class="btn">Chọn ảnh</label>
        <input type="file" @change="handleFileUpload" id="image_upload" hidden>
      </div>
      <div class="text-center mt-3">
        <input
            :type="imagePreview ? 'submit' : 'button'"
            :disabled="!imagePreview"
            class="btn btn-primary"
            value="Lưu"
        >
      </div>
    </div>
  </form>
</template>

<style scoped>

</style>