<script setup>
import { ref } from "vue";
import ImagesHotel from "@/components/client/hotel/ImagesHotel.vue";

//state
const images = ref([
  {
    id: 1,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg"
  },
  {
    id: 2,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
  },
  {
    id: 3,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
  },
  {
    id: 4,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
  },
  {
    id: 5,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
  },
  {
    id: 6,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
  },
  {
    id: 7,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg"
  },
  {
    id: 8,
    url: "https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg"
  }
])

let seeMore = ref(false)
let isOpenImageModal = ref(false)

const countImage = images.value.length - 6

//action

</script>

<template>
  <div class="grid gap-4">
    <div @click="isOpenImageModal = true" class="cursor-pointer">
      <img class="h-auto max-w-full rounded-lg" :src="images[0].url" :alt="images[0].url">
    </div>
    <div @click="isOpenImageModal = true" class="grid grid-cols-5 gap-4">
      <div v-for="(image, index) in images.slice(1, 6)" :key="image.id" class="relative cursor-pointer">
        <img class="h-auto max-w-full rounded-lg" :src="image.url" :alt="image.url">
        <div v-if="index === images.slice(1, 6).length - 1" class="bg-[rgba(0,0,0,0.4)] absolute top-0 w-full h-full rounded-lg flex justify-center items-center">
          <span class="text-white font-bold">+ {{ countImage }}</span>
        </div>
      </div>
    </div>
  </div>

  <ImagesHotel v-model="isOpenImageModal" :images = "images"/>

  <div class="mt-5 sm:mt-10 lg:mt-10 border-b border-b-gray-400 pb-5">
    <div class="block sm:flex lg:flex justify-between">
      <div>
        <div>
          <span class="bg-gray-200 font-medium rounded-md p-2 uppercase">Khách sạn</span>
          <span class="ml-2 font-medium">Đánh giá: 4.9</span>
        </div>
        <div class="mt-5">
          <h1 class="text-2xl font-bold">Khách sạn Vung Tau Media</h1>
          <p class="text-gray-500 text-sm mt-2">03-05 Thùy Vân, Phường 2, Thành phố Vũng Tàu</p>
        </div>
      </div>
      <div class="mt-5 sm:mt-0 lg-mt-0">
        <p>Giá phòng từ:</p>
        <span class="text-2xl text-orange-500 font-bold">800.000 VNĐ </span><span>/ đêm</span>
        <div>
          <button class="btn bg-orange-500 text-white font-medium rounded-md w-full mt-3">
            LỰA CHỌN PHÒNG
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-10">
    <h1 class="text-xl font-bold">Tiện ích khách sạn</h1>
    <div v-show="!seeMore">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-6 mt-4">
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
      </div>
      <span @click="seeMore = true" class="text-blue-400 font-bold cursor-pointer block mt-3 text-center">Xem thêm tiện ích</span>
    </div>

    <div v-show="seeMore">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-6 mt-4">
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
        <div class="flex items-center">
          <i class="fa-solid fa-wifi"></i>
          <p class="ml-2">Wifi miễn phí</p>
        </div>
      </div>
      <span @click="seeMore = false" class="text-blue-400 font-bold cursor-pointer block mt-3 text-center">Thu gọn</span>
    </div>
  </div>
</template>

<style scoped>

</style>