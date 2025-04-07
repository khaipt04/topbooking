<script setup>

</script>

<template>
  <form class="mt-5">
    <div class="mb-3">
      <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Họ và tên</label>
      <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Họ vè tên" required />
    </div>
    <div class="mb-3">
      <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại</label>
      <input type="text" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Số điện thoại" required />
    </div>
    <div class="mb-3">
      <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giới tính</label>
      <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Chọn giới tính</option>
        <option value="male">Nam</option>
        <option value="female">Nữ</option>
        <option value="unknown">Không xác định</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
      <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Địa chỉ" required />
    </div>

    <input type="submit" class="btn btn-primary" value="Lưu">
    <button @click="$emit('update:modelValue', false)" type="button" class="btn ms-2">Đóng</button>
  </form>
</template>

<style scoped>

</style>