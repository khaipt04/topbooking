<script setup>
import { ref } from "vue";
import Title from "@/components/Client/HomePage/Title.vue";
import {
  ChevronRightIcon,
  ChevronLeftIcon
} from "@heroicons/vue/24/outline";

defineProps({
  title: String,
  sub_title: String
})

const slider = ref(null)
const scrollLeft = () => {
  if (slider.value) {
    slider.value.scrollBy({ left: -250, behavior: "smooth" })
  }
}
const scrollRight = () => {
  if (slider.value) {
    slider.value.scrollBy({ left: 250, behavior: "smooth" })
  }
}
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-5">
    <Title :message = "title" :sub_message="sub_title"></Title>
    <div class="relative w-full">
      <button class="absolute left-0 top-2/5 -translate-y-1/2 bg-white opacity-75 hover:opacity-100 text-gray-700 p-2 rounded-full z-10 cursor-pointer" @click="scrollLeft">
        <ChevronLeftIcon class="h-6 w-6"/>
      </button>

      <div ref="slider" class="flex overflow-hidden snap-x snap-mandatory space-x-4 scroll-smooth">
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
        <router-link to="" class="snap-start flex-shrink-0 w-45">
          <img class="w-full rounded-lg" src="https://picsum.photos/200" alt=""/>
          <h4 class="font-medium text-lg mt-2">Phan Thiết</h4>
          <p class="text-xs text-gray-500">Có 1234 chỗ nghỉ</p>
        </router-link>
      </div>

      <button class="absolute right-0 top-2/5 -translate-y-1/2 bg-white opacity-75 hover:opacity-100 text-gray-700 p-2 rounded-full z-10 cursor-pointer" @click="scrollRight">
        <ChevronRightIcon class="h-6 w-6"/>
      </button>
    </div>
  </div>
</template>

<style scoped></style>
