<script setup>
import {ref} from "vue";
import {PencilSquareIcon} from "@heroicons/vue/24/outline/index.js";

let test = ref(true)
</script>

<template>
  <tr class="hover:bg-base-300">
    <td>KS812712</td>
    <td>Khách sạn The Sóng Vũng Tàu</td>
    <td>thesongvungtau@gmail.com</td>
    <td>09876543212</td>
    <td>
      <div class="flex items-center gap-2">
        <div :class="[test ? 'bg-green-500' : 'bg-red-500']" class="w-3 h-3 rounded-full"></div>
        <span :class="[test ? 'text-green-500' : 'text-red-500']">
              {{ test ? 'Đã duyệt' : 'Chưa duyệt' }}
            </span>
      </div>
    </td>
    <td>
      <div class="flex items-center">
        <button @click="$emit('openModal')" class="btn bg-blue-600 cursor-pointer text-white">
          <PencilSquareIcon class="h-5 w-5 text-white" />
          Chi tiết thông tin
        </button>
      </div>
    </td>
  </tr>
</template>

<style scoped>

</style>