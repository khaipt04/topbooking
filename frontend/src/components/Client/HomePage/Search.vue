<script setup>
import { ref, computed, watch } from 'vue'
import {
  MinusIcon,
  PlusIcon
} from '@heroicons/vue/24/outline'

const location = ref('')
const checkin_date = ref('')
const checkout_date = ref('')
const adult = ref(2)
const children = ref(0)

const options = ref([
    "Ho Chi Minh",
    "Ha Noi",
    "Ha Giang",
    "Phu Quoc",
    "Con Dao",
    "Ben Tre",
    "Tien Giang"
])

const showDropdown = ref(false)
const filteredOptions = computed(() => {
  return options.value.filter((option) =>
      option.toLowerCase().includes(location.value.toLowerCase())
  ).slice(0, 5);
})
const selectOption = (option) => {
  location.value = option
  showDropdown.value = false
}
const hideDropdown = () => {
  setTimeout(() => {
    showDropdown.value = false
  }, 200)
}

const showDropdownPeople = ref(false)
const increaseAdult = () => {
  adult.value++
}
const diminishAdult = () => {
  if(adult.value <= 0){
    adult.value = 0
  } else {
    adult.value--
  }
}

const increaseChildren = () => {
  children.value++
}
const diminishChildren = () => {
  if(children.value <= 0){
    children.value = 0
  } else {
    children.value--
  }
}
</script>

<template>
  <div class="sm:relative lg:relative bt-4 sm:mb-15 lg:mb-15">
    <img class="w-full" src="/images/banners/home-page-banner.jpg" alt="" srcset="" />
    <div class="mx-auto max-w-7xl mt-2 sm:mt-2 lg:mt-0 px-4 sm:px-6 lg:px-20 lg:absolute -bottom-12 left-0 right-0">
      <div class="bg-yellow-400 p-3 rounded-xl shadow shadow-amber-300">
        <form class="block sm:block lg:flex gap-2 justify-between items-center">
          <div class="relative w-full mb-2 sm:mb-2 lg:mb-0 mt-2 sm:mt-2 lg:mt-0">
            <label for="location" class="text-gray-700 font-semibold">Bạn muốn đến đâu?</label>
            <input
                v-model="location"
                type="text"
                id="location"
                placeholder="Bạn muốn đến đâu?"
                class="block w-full px-4 py-2 border outline-none bg-white border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 mt-2"
                @focus="showDropdown = true"
                @blur="hideDropdown"
            />

            <ul v-if="showDropdown" class="absolute w-full bg-white border border-gray-300 rounded-lg shadow-md mt-1">
              <li
                  v-for="(option, index) in filteredOptions"
                  :key="index"
                  class="px-4 py-2 hover:bg-gray-200 cursor-pointer"
                  @click="selectOption(option)"
              >
                {{ option }}
              </li>
            </ul>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0">
            <label for="checkin_date" class="text-gray-700 font-semibold">Ngày nhận phòng</label>
            <div class="bg-white flex justify-between w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 mt-2">
              <input type="date" class="w-full" id="checkin_date"/>
            </div>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0">
            <label for="checkout_date" class="text-gray-700 font-semibold">Ngày trả phòng</label>
            <div class="bg-white flex justify-between w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 mt-2">
              <input type="date" class="w-full" id="checkout_date"/>
            </div>
          </div>

          <div class="w-full mb-2 sm:mb-2 lg:mb-0 relative">
            <label class="text-gray-700 font-semibold">Số người</label>
            <div @click="showDropdownPeople = !showDropdownPeople" class="bg-white flex justify-between w-full px-4 py-2 rounded-md border border-gray-300 hover:ring-blue-500 hover:border-blue-500 mt-2 cursor-pointer">
              {{ adult }} người lớn - {{ children }} trẻ em
            </div>

            <div v-if="showDropdownPeople" class="absolute w-full bg-white border border-gray-300 rounded-lg shadow-md mt-1 px-3 py-4">
              <div class="flex justify-between items-center">
                <span>Người lớn:</span>
                <div class="flex justify-between items-center w-1/2 p-2 border border-gray-500 rounded-lg">
                  <MinusIcon @click="diminishAdult" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                  <span>{{ adult }}</span>
                  <PlusIcon @click="increaseAdult" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                </div>
              </div>
              <div class="flex justify-between items-center mt-3">
                <span>Trẻ em:</span>
                <div class="flex justify-between items-center w-1/2 p-2 border border-gray-500 rounded-lg">
                  <MinusIcon @click="diminishChildren" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                  <span>{{ children }}</span>
                  <PlusIcon @click="increaseChildren" class="h-6 w-6 text-blue-500 cursor-pointer"/>
                </div>
              </div>
              <div class="mt-2">
                <input @click="showDropdownPeople = !showDropdownPeople" class="focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-blue-900 transition-all mt-2 sm:mt-2 lg:mt-0 cursor-pointer text-center w-full" value="Đóng">
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
