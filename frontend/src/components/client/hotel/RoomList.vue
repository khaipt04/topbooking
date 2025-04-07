<script setup>
import {ref} from 'vue'
import RoomListItems from "@/components/client/hotel/RoomListItems.vue";

//state
const images = ref([
  {
    id: 1,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
  {
    id: 2,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg',
  },
  {
    id: 3,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg',
  },
  {
    id: 4,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg',
  },
  {
    id: 5,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg',
  },
  {
    id: 6,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg',
  },
  {
    id: 7,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
  {
    id: 8,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
])
</script>

<template>
  <div class="mt-10">
    <h1 class="text-xl font-bold">Danh sách phòng trống</h1>

    <div v-if="false" role="alert" class="alert alert-error mt-5">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>Xin lỗi, hiện tại không còn phòng nào trống.</span>
    </div>

    <RoomListItems v-if="true"/>
  </div>
</template>

<style scoped></style>
