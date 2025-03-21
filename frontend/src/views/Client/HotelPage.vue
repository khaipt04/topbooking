<script setup>
import {ref, watch} from "vue";
import HotelOverview from "@/components/Client/HotelPage/HotelOverview.vue";
import ListRoom from "@/components/Client/HotelPage/ListRoom.vue";
import {useScrollStore} from "@/stores/extensions.js";

const scroll = useScrollStore()
const targetSection = ref(null)
watch(() => scroll.shouldScroll, (newValue) => {
  if (newValue) {
    targetSection.value?.scrollIntoView({ behavior: 'smooth' })
    scroll.resetScroll()
  }
})
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <HotelOverview/>

    <div ref="targetSection" class="mt-10">
      <h1 class="text-xl font-bold">Danh sách phòng trống</h1>

      <div v-if="false" role="alert" class="alert alert-error mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Xin lỗi, hiện tại không còn phòng nào trống.</span>
      </div>

      <ListRoom/>
    </div>
  </div>
</template>

<style scoped>

</style>