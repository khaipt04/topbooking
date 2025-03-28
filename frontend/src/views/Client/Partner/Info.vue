<script setup>
import {ref, computed} from "vue";
import {locations} from "@/constants/locations.js";
import ChangeImageHotel from "@/components/Client/HotelManagement/Info/ChangeImageHotel.vue";
import ChangeUtilitiesHotel from "@/components/Client/HotelManagement/Info/ChangeUtilitiesHotel.vue";
import {
  useOpenChangeImageHotelStore,
  useOpenChangeUtilitiesHotel
} from "@/stores/useAppStore.js";
import {
  StarIcon,
  CameraIcon
} from "@heroicons/vue/24/outline/index.js";
import {utilities} from "daisyui/imports.js";

//state
let initialHotel = ref({
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

let hotel = ref({ ...initialHotel.value });

let changeName = ref(false)
let changeAddress = ref(false)
let changeCategory = ref(false)
let changePhone = ref(false)
let changeEmail = ref(false)

const openChangeImageHotel = useOpenChangeImageHotelStore()
const openChangeUtilitiesHotel = useOpenChangeUtilitiesHotel()

//action
const isChanged = computed(() => {
  return JSON.stringify(hotel.value) !== JSON.stringify(initialHotel.value);
});
</script>

<template>
  <div>
    <div class="flex items-center gap-5">
      <div @click="openChangeImageHotel.open()" class="relative w-25 sm:w-30 lg:w-40 rounded-full border border-gray-300 overflow-hidden group">
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

    <form class="mt-10">
      <div class="flex flex-row justify-between gap-5">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Tên</p>
          <p v-show="!changeName" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotel.name }}</p>
          <div v-show="changeName" class="col-span-10 sm:col-span-8">
            <input v-model="hotel.name" type="text" class="input w-full">
          </div>
        </div>

        <div v-show="!changeName" class="flex justify-center items-center">
          <span
              @click="changeName = true"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Chỉnh sửa
          </span>
        </div>
        <div v-show="changeName" class="flex justify-center items-center">
          <span
              @click="changeName = false"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Hoàn tất
          </span>
        </div>
      </div>

      <div class="flex flex-row justify-between gap-5 mt-2">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Địa chỉ</p>
          <p v-show="!changeAddress" class="text-lg col-span-10 sm:col-span-8 flex items-center">
            {{ hotel.address }}, {{ hotel.city }}
          </p>
          <div v-show="changeAddress" class="col-span-10 sm:col-span-8 flex gap-3">
            <input v-model="hotel.address" type="text" class="input w-full">
            <select v-model="hotel.city" class="select w-full">
              <option
                  v-for="location in locations"
                  :key="location"
                  :value="location"
              >
                {{location}}
              </option>
            </select>
          </div>
        </div>

        <div v-show="!changeAddress" class="flex justify-center items-center">
          <span
              @click="changeAddress = true"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Chỉnh sửa
          </span>
        </div>
        <div v-show="changeAddress" class="flex justify-center items-center">
          <span
              @click="changeAddress = false"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Hoàn tất
          </span>
        </div>
      </div>

      <div class="flex flex-row justify-between gap-5 mt-2">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Loại hình</p>
          <p v-show="!changeCategory" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotel.category }}</p>
          <div v-show="changeCategory" class="col-span-10 sm:col-span-8">
            <select v-model="hotel.category" class="select w-full">
              <option value="Khách sạn">Khách sạn</option>
              <option value="Căn hộ chung cư">Căn hộ chung cư</option>
            </select>
          </div>
        </div>

        <div v-show="!changeCategory" class="flex justify-center items-center">
          <span
              @click="changeCategory = true"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Chỉnh sửa
          </span>
        </div>
        <div v-show="changeCategory" class="flex justify-center items-center">
          <span
              @click="changeCategory = false"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Hoàn tất
          </span>
        </div>
      </div>

      <div class="flex flex-row justify-between gap-5 mt-2">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Số điện thoại</p>
          <p v-show="!changePhone" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotel.phone }}</p>
          <div v-show="changePhone" class="col-span-10 sm:col-span-8">
            <input v-model="hotel.phone" type="text" class="input w-full">
          </div>
        </div>

        <div v-show="!changePhone" class="flex justify-center items-center">
          <span
              @click="changePhone = true"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Chỉnh sửa
          </span>
        </div>
        <div v-show="changePhone" class="flex justify-center items-center">
          <span
              @click="changePhone = false"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Hoàn tất
          </span>
        </div>
      </div>

      <div class="flex flex-row justify-between gap-5 mt-2">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Email</p>
          <p v-show="!changeEmail" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotel.email }}</p>
          <div v-show="changeEmail" class="col-span-10 sm:col-span-8">
            <input v-model="hotel.email" type="email" class="input w-full">
          </div>
        </div>

        <div v-show="!changeEmail" class="flex justify-center items-center">
          <span
              @click="changeEmail = true"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Chỉnh sửa
          </span>
        </div>
        <div v-show="changeEmail" class="flex justify-center items-center">
          <span
              @click="changeEmail = false"
              v-show="changeEmail"
              class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer"
          >
            Hoàn tất
          </span>
        </div>
      </div>

      <div class="flex flex-row justify-between gap-5 mt-2">
        <div class="flex-1 grid grid-cols-10">
          <p class="text-lg col-span-2 hidden sm:flex items-center">Các tiện ích</p>
          <p @click="openChangeUtilitiesHotel.open()" class="text-lg text-blue-500 cursor-pointer col-span-10 sm:col-span-8 flex items-center">Xem & chỉnh sửa</p>
        </div>

        <div class="flex justify-center items-center">
          <span @click="openChangeUtilitiesHotel.open()" class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer">
            Chỉnh sửa
          </span>
        </div>
      </div>

      <div v-show="isChanged" class="text-end">
        <input type="submit" class="btn bg-green-600 text-white mt-3" value="Lưu các thay đổi">
      </div>
    </form>
  </div>

  <ChangeImageHotel/>

  <ChangeUtilitiesHotel :hotel_utilities = "hotel.hotel_utilities"/>

</template>

<style scoped>

</style>