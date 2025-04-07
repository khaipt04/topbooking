<script setup>
import {computed, ref} from "vue";
import {Dialog, DialogPanel, TransitionChild, TransitionRoot} from "@headlessui/vue";

//state
const totalSlides = computed(() => images.value.length)
const currentIndex = ref(0)

//action
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
  <TransitionRoot as="template" :show="false">
    <Dialog class="relative z-10" @close="">
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