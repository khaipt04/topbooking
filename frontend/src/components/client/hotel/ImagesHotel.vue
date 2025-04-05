<script setup>
import {ref, computed} from 'vue'
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue'

//state
const props = defineProps({
    images: Object
})

const currentIndex = ref(0)

const images = ref(props.images)
const countImage = images.value.length - 6

let open = ref(false)

//action
const totalSlides = computed(() => images.value.length)

const nextSlide = () => {
  if (currentIndex.value < totalSlides.value - 1) {
    currentIndex.value++
  }
}

const prevSlide = () => {
  if (currentIndex.value > 0) {
    currentIndex.value--
  }
}
</script>

<template>
  <div class="grid gap-4">
    <div @click="open = true" class="cursor-pointer">
      <img class="h-auto max-w-full rounded-lg" :src="images[0].url" :alt="images[0].url">
    </div>
    <div @click="open = true" class="grid grid-cols-5 gap-4">
      <div v-for="(image, index) in images.slice(1, 6)" :key="image.id" class="relative cursor-pointer">
        <img class="h-auto max-w-full rounded-lg" :src="image.url" :alt="image.url">
        <div v-if="index === images.slice(1, 6).length - 1" class="bg-[rgba(0,0,0,0.4)] absolute top-0 w-full h-full rounded-lg flex justify-center items-center">
          <span class="text-white font-bold">+ {{ countImage }}</span>
        </div>
      </div>
    </div>
  </div>

  <TransitionRoot as="template" :show="open">
    <Dialog class="relative z-10" @close="open = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-9/10 lg:w-9/10">
              <div class="relative w-full mx-auto my-auto">
                <div class="overflow-hidden rounded-lg">
                  <div class="flex transition-transform duration-500" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                    <div v-for="(image, index) in images" :key="image.id" class="flex-shrink-0 w-full">
                      <img :src="image.url" alt="image.url" class="h-full rounded-lg shadow-lg mx-auto" />
                    </div>
                  </div>
                </div>

                <button
                    @click="prevSlide"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                    :class="{ 'opacity-50 cursor-not-allowed': currentIndex === 0 }"
                    :disabled="currentIndex === 0"
                >
                  ❮
                </button>

                <button
                    @click="nextSlide"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                    :class="{ 'opacity-50 cursor-not-allowed': currentIndex === totalSlides - 1 }"
                    :disabled="currentIndex === totalSlides - 1"
                >
                  ❯
                </button>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<style scoped>

</style>