<script setup>
import {computed, ref} from "vue";
import {locations} from "@/constants/locations.js";

//state
const props = defineProps({
  hotel: Object
})

let hotelData = ref({ ...props.hotel })

let changeName = ref(false)
let changeAddress = ref(false)
let changeCategory = ref(false)
let changePhone = ref(false)
let changeEmail = ref(false)

//action
const isChanged = computed(() => {
  return JSON.stringify(hotelData.value) !== JSON.stringify(props.hotel)
})
</script>

<template>
  <form class="mt-10">
    <div class="flex flex-row justify-between gap-5">
      <div class="flex-1 grid grid-cols-10">
        <p class="text-lg col-span-2 hidden sm:flex items-center">Tên</p>
        <p v-show="!changeName" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotelData.name }}</p>
        <div v-show="changeName" class="col-span-10 sm:col-span-8">
          <input v-model="hotelData.name" type="text" class="input w-full">
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
          {{ hotelData.address }}, {{ hotelData.city }}
        </p>
        <div v-show="changeAddress" class="col-span-10 sm:col-span-8 flex gap-3">
          <input v-model="hotelData.address" type="text" class="input w-full">
          <select v-model="hotelData.city" class="select w-full">
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
        <p v-show="!changeCategory" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotelData.category }}</p>
        <div v-show="changeCategory" class="col-span-10 sm:col-span-8">
          <select v-model="hotelData.category" class="select w-full">
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
        <p v-show="!changePhone" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotelData.phone }}</p>
        <div v-show="changePhone" class="col-span-10 sm:col-span-8">
          <input v-model="hotelData.phone" type="text" class="input w-full">
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
        <p v-show="!changeEmail" class="text-lg col-span-10 sm:col-span-8 flex items-center">{{ hotelData.email }}</p>
        <div v-show="changeEmail" class="col-span-10 sm:col-span-8">
          <input v-model="hotelData.email" type="email" class="input w-full">
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
        <p @click="$emit('openModal')" class="text-lg text-blue-500 cursor-pointer col-span-10 sm:col-span-8 flex items-center">Xem & chỉnh sửa</p>
      </div>

      <div class="flex justify-center items-center">
          <span @click="$emit('openModal')" class="p-2 text-blue-500 font-medium hover:bg-gray-100 rounded cursor-pointer">
            Chỉnh sửa
          </span>
      </div>
    </div>

    <div v-if="isChanged" class="text-end">
      <input type="submit" class="btn btn-primary mt-3" value="Lưu các thay đổi">
    </div>
  </form>
</template>

<style scoped>

</style>