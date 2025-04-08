<script setup>
import {ref} from "vue";
import RegistrationProcessingForm from "@/components/administration/partner/RegistrationProcessingForm.vue";
import {Dialog, DialogPanel, TransitionChild, TransitionRoot} from "@headlessui/vue";
import {XMarkIcon} from "@heroicons/vue/24/outline/index.js";

const props = defineProps({
  modelValue: Boolean,
})
</script>

<template>
  <TransitionRoot as="template" :show="props.modelValue">
    <Dialog class="relative z-50" @close="$emit('update:modelValue', false)">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-2/3 lg:w-1/2">
              <div class="p-4">
                <div class="flex justify-between">
                  <h1 class="text-xl font-medium mb-5">Chi tiết</h1>
                  <XMarkIcon @click="$emit('update:modelValue', false)" class="h-6 w-6 text-gray-500 cursor-pointer" />
                </div>

                <span class="badge badge-error">Chưa xử lí</span>

                <div class="my-5">
                  <h1 class="text-lg font-medium mb-3">Khách hàng đăng kí</h1>
                  <p>Tên: Phan Thanh Khai</p>
                  <p class="mt-2">Email: khaipt04@gmail.com</p>
                  <p class="mt-2">Điện thoại: 0987654321</p>

                  <h1 class="text-lg font-medium mt-5 mb-3">Chỗ nghỉ</h1>
                  <p>Tên chỗ nghỉ: Khách sạn The Sóng Vũng Tàu</p>
                  <p class="mt-2">Địa chỉ chỗ nghỉ: Abc, Xyz, Kncks, nákcnkcnknkns</p>
                  <p class="mt-2">Email: thesong@gmail.com</p>
                  <p class="mt-2">Điện thoại: 0999217231234</p>
                  <p class="mt-2">Giấy phép đăng kí</p>
                  <img src="https://viettinlaw.com/wp-content/uploads/2019/11/giay-phep-dia-diem-kinh-doanh-compressed-1.jpg" alt="" class="mt-2">
                </div>

                <RegistrationProcessingForm/>
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