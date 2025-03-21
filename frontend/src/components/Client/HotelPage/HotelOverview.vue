<script setup>
import { ref } from "vue";
import ImagesHotel from "@/components/Client/HotelPage/ImagesHotel.vue";
import UtilitiesHotel from "@/components/Client/HotelPage/UtilitiesHotel.vue";
import {useScrollStore} from "@/stores/extensions.js";

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

const scroll = useScrollStore()
const scrollToTarget = () => {
  scroll.triggerScroll()
}
</script>

<template>
  <ImagesHotel :images = "images"/>

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
          <button @click="scrollToTarget"
                  class="btn bg-orange-500 text-white font-medium rounded-md w-full mt-3"
          >
            LỰA CHỌN PHÒNG
          </button>
        </div>
      </div>
    </div>
  </div>

  <UtilitiesHotel/>
</template>

<style scoped>

</style>