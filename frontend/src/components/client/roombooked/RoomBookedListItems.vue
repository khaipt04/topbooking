<script setup>
import {ref} from "vue";
import {
  Dialog,
  DialogPanel,
  TransitionChild,
  TransitionRoot
} from "@headlessui/vue";
import {
  CheckIcon ,
  CalendarDaysIcon,
  EnvelopeIcon,
  PhoneIcon
} from '@heroicons/vue/24/outline';
import {XMarkIcon} from "@heroicons/vue/24/outline/index.js";

let open = ref(false)
</script>

<template>
  <div
      @click="open = true"
      class="block sm:flex lg:flex justify-between rounded-md border gap-5 border-gray-300 shadow-md shadow-gray-200 p-5 cursor-pointer hover:border-blue-300 hover:shadow-md hover:shadow-blue-200 transition-all my-5"
  >
    <div class="flex">
      <div class="w-30 h-30 rounded-md">
        <img class="rounded-md" src="/images/hotel_images/621776883.webp" alt="">
      </div>
      <div class="ml-5">
        <h2 class="font-medium text-lg">Vung Tau Hotel Luxury</h2>
        <p class="mt-2">12/05/2024 - 15/05/2025 - Vũng Tàu</p>
        <p class="text-green-500 mt-2">Đã xác nhận</p>
      </div>
    </div>
    <div class="mt-4 text-end sm:mt-0">
      <span class="text-xl font-medium">
        800.000 VND
      </span>
      <p class="text-red-500 mt-1">Chưa thanh toán</p>
    </div>
  </div>

  <!--Modal room Booked Detail-->
  <TransitionRoot as="template" :show="open">
    <Dialog class="relative z-10" @close="open = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-2/3 lg:w-1/2 p-3">
              <div>
                <div class="flex justify-between items-center">
                  <p class="text-green-500">Đã xác nhận</p>
                  <XMarkIcon @click="open = false" class="h-6 w-6 text-gray-500 cursor-pointer" />
                </div>
                <p class="font-medium">Đặt phòng của bạn đã được xác nhận</p>
                <div class="bg-green-200 border border-green-400 rounded p-2 mt-4">
                  <p>Mã xác nhận: <span class="font-medium">1278361287523</span></p>
                  <p>Mã đặt phòng: <span class="font-medium">7123621534657</span></p>
                </div>

                <div class="mt-4">
                  <div class="flex items-center">
                    <CheckIcon class="h-5 w-5 text-gray-500 mr-2" />
                    <p>Mọi thứ đã xong chúng tôi đã gửi xác nhận qua abcxyz@gmail.com</p>
                  </div>
                  <div class="flex items-center mt-2">
                    <CheckIcon class="h-5 w-5 text-gray-500 mr-2" />
                    <p>
                      Thanh toán của bạn sẽ được xử lí bởi
                      <span class="font-medium">The Sóng Vũng Tàu City</span>
                    </p>
                  </div>
                </div>

                <div class="mt-5">
                  <h1 class="font-medium text-lg">The Sóng Vũng Tàu City</h1>
                  <p class="text-gray-400 text-lg font-medium">Loại: Phòng Luxury</p>
                  <div class="mt-4 grid grid-cols-2 gap-5">
                    <div class="text-start">
                      <div class="flex">
                        <CalendarDaysIcon class="h-6 w-6 text-gray-500 mr-2" />
                        <span>Nhận phòng: </span>
                      </div>
                      <p class="mt-2">14h Ngày 13/05/2025</p>
                    </div>
                    <div class="text-start">
                      <div class="flex">
                        <CalendarDaysIcon class="h-6 w-6 text-gray-500 mr-2" />
                        <span>Trả phòng: </span>
                      </div>
                      <p class="mt-2">12h Ngày 16/05/2025</p>
                    </div>
                  </div>
                  <p class="font-medium mt-3">Lưu ý: chỗ nghỉ sẽ liên hệ lại với bạn để xác nhận đặt phòng.</p>
                </div>

                <div class="bg-yellow-100 border border-yellow-300 rounded p-2 mt-4">
                  <span class="font-medium">Liên hệ chỗ nghỉ:</span>
                  <div class="flex items-center mt-2">
                    <EnvelopeIcon class="h-6 w-6 text-gray-500 mr-2" />
                    <p>thesong@gmail.com</p>
                  </div>
                  <div class="flex items-center mt-2">
                    <PhoneIcon class="h-6 w-6 text-gray-500 mr-2" />
                    <p>0987654321</p>
                  </div>
                </div>

                <button class="btn bg-red-500 text-white mt-4 w-full">HỦY ĐẶT PHÒNG</button>
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