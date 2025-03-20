<script setup>
import {ref} from "vue";

let image = ref(null)
const handleFileUpload = (event) => {
  const file = event.target.files[0]
  if (file) {
    image.value = file.name
  }
}
</script>

<template>
  <form>
    <div class="w-full mt-5">
      <label for="hotel-name" class="block text-sx font-medium text-gray-900">Tên khách sạn</label>
      <div class="mt-2">
        <input type="text" id="hotel-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>
    </div>
    <div class="w-full mt-3">
      <label for="hotel-address" class="block text-sx font-medium text-gray-900">Địa chỉ khách sạn</label>
      <div class="mt-2">
        <input type="text" id="hotel-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>
    </div>
    <div class="w-full mt-3">
      <label for="email" class="block text-sx font-medium text-gray-900">Email</label>
      <div class="mt-2">
        <input type="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>
    </div>
    <div class="w-full mt-3">
      <label for="phone-number" class="block text-sx font-medium text-gray-900">Số điện thoại</label>
      <div class="mt-2">
        <input type="email" id="phone-number" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>
    </div>
    <div class="w-full mt-3">
      <label for="note" class="block text-sx font-medium text-gray-900">Ghi chú</label>
      <div class="mt-2">
        <textarea id="note" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>
    </div>
    <div class="w-full mt-3">
      <label class="block text-sx font-medium text-gray-900">Giấy phép dăng kí kinh doanh</label>
      <div class="mt-2">
        <label for="image" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50 cursor-pointer">
          Tải lên hình ảnh
          <input type="file" id="image" class="sr-only" @change="handleFileUpload">
        </label>
        <p v-if="image" class="mt-2">Đã tải lên: {{ image }}</p>
      </div>
    </div>
    <div class="w-full mt-5">
      <input class="focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-blue-900 transition-all mt-2 sm:mt-2 lg:mt-0 cursor-pointer w-full" type="submit" value="ĐĂNG KÍ">
    </div>
  </form>
</template>

<style scoped>

</style>