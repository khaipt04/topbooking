<script setup>

</script>

<template>
  <form>
    <div class="flex flex-col sm:flex-row gap-5">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 flex-1">
        <div>
          <label for="utility_icon" class="block mb-2">Icon</label>
          <input id="utility_icon" type="text" class="input w-full">
        </div>
        <div>
          <label for="utility_name" class="block mb-2">Tên tiện nghi</label>
          <input id="utility_name" type="text" class="input w-full">
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