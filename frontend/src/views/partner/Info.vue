<script setup>
import {ref, computed} from "vue";
import ChangeThumbail from "@/components/partner/info/ChangeThumbail.vue";
import ChangeUtilities from "@/components/partner/info/ChangeUtilities.vue";
import EditInfoForm from "@/components/partner/info/EditInfoForm.vue";

import {
  StarIcon,
  CameraIcon
} from "@heroicons/vue/24/outline/index.js";

//state
let hotel = ref({
  name: 'Khách Sạn The Sóng Vũng Tàu',
  address: '123 Bà Trưng, Hoàng Hoa Thám',
  city: 'Bà Rịa - Vũng Tàu',
  category: 'Khách sạn',
  hotel_utilities: [
    {id: 1, hotel_id: 1, utility_id: 1, icon: 'fa-solid fa-wifi', name: 'Wifi miễn phí'},
    {id: 2, hotel_id: 1, utility_id: 2, icon: 'fa-solid fa-water', name: 'Nhìn ra biển'},
  ],
  phone: '0987654321',
  email: 'thesong@gmail.com'
})

let isChangeThumbnailModalOpen = ref(false)
let isChangeUtilitiesModalOpen = ref(false)
</script>

<template>
  <div>
    <div class="flex items-center gap-5">
      <div @click="isChangeThumbnailModalOpen = true" class="relative w-25 sm:w-30 lg:w-40 rounded-full border border-gray-300 overflow-hidden group">
        <img
            class="w-full h-full object-cover transition duration-300 ease-in-out group-hover:opacity-75 group-hover:scale-105"
            src="/images/hotel_images/621776883.webp"
            alt=""
        >
        <div
            class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-50 transition duration-300 ease-in-out flex justify-center items-center cursor-pointer"
        >
          <CameraIcon class="h-8 w-8 text-gray-200" />
        </div>
      </div>
      <div>
        <h1 class="font-bold text-lg sm:text-2xl mt-2">Khách Sạn The Sóng Vũng Tàu</h1>
        <div class="flex items-center mt-3">
          <span class="font-medium text-lg">4.8</span>
          <StarIcon class="h-7 w-7 text-yellow-400 fill-yellow-400 ml-2"/>
        </div>
      </div>
    </div>

    <EditInfoForm :hotel = "hotel" @openModal = "isChangeUtilitiesModalOpen = true"/>
  </div>

  <ChangeThumbail v-model="isChangeThumbnailModalOpen"/>

  <ChangeUtilities :hotel_utilities="hotel.hotel_utilities" v-model="isChangeUtilitiesModalOpen"/>

</template>

<style scoped>

</style>