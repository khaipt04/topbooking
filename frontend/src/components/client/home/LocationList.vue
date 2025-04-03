<script setup>
import { ref } from "vue";
import LocationListItems from "@/components/client/home/LocationListItems.vue";
import {
  ChevronRightIcon,
  ChevronLeftIcon
} from "@heroicons/vue/24/outline";

//state
const slider = ref(null)

//action
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
  <div class="relative w-full">
    <button class="absolute left-0 top-2/5 -translate-y-1/2 bg-white opacity-75 hover:opacity-100 text-gray-700 p-2 rounded-full z-10 cursor-pointer" @click="scrollLeft">
      <ChevronLeftIcon class="h-6 w-6"/>
    </button>

    <div ref="slider" class="flex overflow-hidden snap-x snap-mandatory space-x-4 scroll-smooth">
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
      <LocationListItems/>
    </div>

    <button class="absolute right-0 top-2/5 -translate-y-1/2 bg-white opacity-75 hover:opacity-100 text-gray-700 p-2 rounded-full z-10 cursor-pointer" @click="scrollRight">
      <ChevronRightIcon class="h-6 w-6"/>
    </button>
  </div>
</template>

<style scoped></style>
