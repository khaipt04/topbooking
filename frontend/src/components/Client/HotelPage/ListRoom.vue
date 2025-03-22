<script setup>
import {computed, ref} from 'vue'
import {Dialog, DialogPanel, TransitionChild, TransitionRoot} from "@headlessui/vue";

//state
const images = ref([
  {
    id: 1,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
  {
    id: 2,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg',
  },
  {
    id: 3,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg',
  },
  {
    id: 4,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg',
  },
  {
    id: 5,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg',
  },
  {
    id: 6,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg',
  },
  {
    id: 7,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
  {
    id: 8,
    url: 'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg',
  },
])

const currentIndex = ref(0)

let openImages = ref(false)
let openUtilities = ref(false)

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
  <div v-if="true" class="bg-gray-200 rounded-md p-3 mt-5">
    <h1 class="text-xl font-bold">Phòng Deluxe</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-3 mt-3">
      <div>
        <img
          @click="openImages = true"
          src="/images/room_images/test-images.jpg"
          class="rounded-md w-full cursor-pointer"
          alt=""
        />
        <div class="mt-3">
          <i class="fa-solid fa-warehouse text-gray-400"></i>
          <span class="ml-2 text-sm">30 m<sup>2</sup></span>
        </div>
        <div class="mt-3">
          <i class="fa-solid fa-bed text-gray-400"></i>
          <span class="ml-2 text-sm">1 giường đôi / 2 giường đơn</span>
        </div>
        <div
            @click="openUtilities = true"
            class="mt-3 text-blue-400 cursor-pointer"
        >
          <i class="fa-solid fa-circle-plus"></i>
          Các tiện ích phòng
        </div>
      </div>
      <div class="sm:col-span-2 lg:col-span-2 bg-white rounded-md p-4 flex flex-col">
        <div class="flex-1">
          <div class="border-b border-b-gray-400 pb-4">
            <span>Tối đa:</span>
            <span class="ml-4">
              <i class="fa-solid fa-person"></i>
              x 2 người lớn
            </span>
            <span class="ml-4">
              <i class="fa-solid fa-child"></i>
              x 1 trẻ em
            </span>
          </div>
          <p class="mt-3">
            <i class="fa-solid fa-building mr-2"></i>
            Số phòng còn trống: 4
          </p>
          <p class="mt-3">
            <i class="fa-solid fa-money-check-dollar mr-2"></i>
            Hình thức thanh toán:
          </p>
          <div class="mt-2">
            <div class="badge badge-primary mr-2">Thanh toán trước</div>
            <div class="badge badge-primary">Thanh toán khi nhận phòng</div>
          </div>
        </div>
        <div class="mt-5">
          <span class="text-2xl text-orange-500 font-bold">800.000 VNĐ </span><span>/ đêm</span>
          <button class="btn bg-orange-500 text-white font-medium rounded-md w-full mt-3">
            ĐẶT PHÒNG NGAY
          </button>
        </div>
      </div>
    </div>

    <!-- Image Modal -->
    <TransitionRoot as="template" :show="openImages">
      <Dialog class="relative z-10" @close="openImages = false">
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

    <!-- Utilities Modal -->
    <TransitionRoot as="template" :show="openUtilities">
      <Dialog class="relative z-10" @close="openUtilities = false">
        <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
        </TransitionChild>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
          <div class="flex min-h-full justify-center p-4 text-center items-center">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
              <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-2/3 lg:w-1/2">
                <div class="grid grid-cols-2 p-5 gap-5">
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-wifi"></i>
                    <p class="ml-2">Wifi miễn phí</p>
                  </div>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </div>
</template>

<style scoped></style>
