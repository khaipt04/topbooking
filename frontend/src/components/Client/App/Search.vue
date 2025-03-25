<script setup>
import {ref, computed, onMounted} from 'vue';
import Pikaday from 'pikaday';
import moment from "moment";
import {useRoute} from "vue-router";
import {vietnameseLang} from "@/constants/i18n.js";
import {locations} from "@/constants/locations.js";
import unorm from 'unorm';
import {
  MinusIcon,
  PlusIcon
} from '@heroicons/vue/24/outline';

//sate
let searchData = ref({
  location: '',
  checkin: '',
  checkout: '',
  adult: 2,
  children: 0
})

let checkin = ref(null)
let checkout = ref(null)

let showDropdownPeople = ref(false)
let showDropdownLocations = ref(false)

const route = useRoute()

//action
onMounted(() => {
  if (checkin.value) {
    new Pikaday({
      field: checkin.value,
      format: "DD/MM/YYYY",
      i18n: vietnameseLang,
      onSelect: (date) => {
        checkin.value.value = moment(date).format("DD/MM/YYYY")
        searchData.value.checkin = checkin.value.value
      },
    })
  }
  if (checkout.value) {
    new Pikaday({
      field: checkout.value,
      format: "DD/MM/YYYY",
      i18n: vietnameseLang,
      onSelect: (date) => {
        checkout.value.value = moment(date).format("DD/MM/YYYY")
        searchData.value.checkout = checkout.value.value
      },
    })
  }
})

const hideDropdownLocations = () => {
  setTimeout(() => {
    showDropdownLocations.value = false;
  }, 200);
};

const selectLocation = (location) => {
  searchData.value.location = location
  showDropdownLocations.value = false
}
const filteredLocations = computed(() => {
  return locations.filter((location) =>
      unorm.nfd(location).replace(/[\u0300-\u036f]/g, '').toLowerCase()
          .includes(unorm.nfd(searchData.value.location).replace(/[\u0300-\u036f]/g, '').toLowerCase())
  ).slice(0, 5)
})

const increaseAdult = () => {
  searchData.value.adult++
}
const diminishAdult = () => {
  if(searchData.value.adult <= 0){
    searchData.value.adult = 0
  } else {
    searchData.value.adult--
  }
}
const increaseChildren = () => {
  searchData.value.children++
}
const diminishChildren = () => {
  if(searchData.value.children <= 0){
    searchData.value.children = 0
  } else {
    searchData.value.children--
  }
}

const isTrue = (path) => route.path === path
</script>

<template>
  <div
      :class="[
        isTrue('/') ?
        'sm:relative lg:relative bt-4 sm:mb-15 lg:mb-15' :
        ''
      ]"
  >
    <img v-if="isTrue('/')" class="w-full" src="/images/banners/home-page-banner.jpg" alt="" srcset="" />
    <div
        :class="[
          isTrue('/') ? 'mx-auto max-w-7xl mt-2 sm:mt-2 lg:mt-0 px-4 sm:px-6 lg:px-20 lg:absolute -bottom-8 left-0 right-0' :
          'mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-15'
        ]"
    >
      <div class="bg-yellow-400 p-3 rounded-xl shadow shadow-amber-300">
        <form @submit.prevent class="block sm:block lg:flex gap-2 justify-between items-center">
          <div class="relative w-full mb-2 sm:mb-2 lg:mb-0 mt-2 sm:mt-2 lg:mt-0">
            <input
                v-model="searchData.location"
                type="text"
                id="location"
                placeholder="Bạn muốn đến đâu?"
                autocomplete="off"
                class="block w-full px-4 py-2 border outline-none bg-white border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                @focus="showDropdownLocations = true"
                @blur="hideDropdownLocations"
            />

            <ul v-if="showDropdownLocations" class="absolute w-full z-50 bg-white border border-gray-300 rounded-lg shadow-md mt-1">
              <li
                  v-for="(location, index) in filteredLocations"
                  :key="index"
                  class="px-4 py-2 hover:bg-gray-200 cursor-pointer"
                  @click="selectLocation(location)"
              >
                {{ location }}
              </li>
            </ul>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0">
            <input type="button" ref="checkin" class="input pika-single text-start cursor-pointer bg-white w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500 focus:outline-0" value="Ngày nhận phòng"/>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0">
            <input type="button" ref="checkout" class="input pika-single text-start cursor-pointer bg-white w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500 focus:outline-0" value="Ngày trả phòng"/>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0 relative">
            <div @click="showDropdownPeople = !showDropdownPeople" class="bg-white flex justify-between w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 cursor-pointer">
              {{ searchData.adult }} người lớn - {{ searchData.children }} trẻ em
            </div>

            <div v-if="showDropdownPeople" class="absolute w-full z-50 bg-white border border-gray-300 rounded-lg shadow-md mt-1 px-3 py-4">
              <div class="flex justify-between items-center">
                <span>Người lớn:</span>
                <div class="flex justify-between items-center w-1/2 p-2 border border-gray-500 rounded-lg">
                  <MinusIcon @click="diminishAdult" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                  <span>{{ searchData.adult }}</span>
                  <PlusIcon @click="increaseAdult" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                </div>
              </div>
              <div class="flex justify-between items-center mt-3">
                <span>Trẻ em:</span>
                <div class="flex justify-between items-center w-1/2 p-2 border border-gray-500 rounded-lg">
                  <MinusIcon @click="diminishChildren" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                  <span>{{ searchData.children }}</span>
                  <PlusIcon @click="increaseChildren" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                </div>
              </div>
              <div class="mt-2">
                <input @click="showDropdownPeople = false" class="focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-blue-900 transition-all mt-2 sm:mt-2 lg:mt-0 cursor-pointer text-center w-full" value="Đóng">
              </div>
            </div>
          </div>

          <div class="text-center">
            <input class="focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-blue-900 transition-all mt-2 sm:mt-2 lg:mt-0 cursor-pointer text-center" type="submit" value="Tìm kiếm">
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
