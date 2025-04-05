<script setup>

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
          <label for="category_image" class="btn">Tải lên hình ảnh</label>
          <input id="category_image" type="file" class="sr-only">
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