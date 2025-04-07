<script setup>
import EditInfoForm from "@/components/client/myaccount/EditInfoForm.vue";
import {
  Dialog,
  DialogPanel,
  TransitionChild,
  TransitionRoot
} from "@headlessui/vue";
import {
  XMarkIcon
} from '@heroicons/vue/24/outline';

const props = defineProps({
  modelValue: Boolean,
})
</script>

<template>
  <TransitionRoot as="template" :show="props.modelValue">
    <Dialog class="relative z-10">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-2/3 lg:w-1/2 p-3">
              <div class="flex justify-between items-center">
                <h1 class="text-lg font-medium">Thông tin cá nhân</h1>
                <XMarkIcon @click="$emit('update:modelValue', false)" class="h-6 w-6 text-gray-500 cursor-pointer" />
              </div>
              <div class="mt-10">
                <div class="w-full flex justify-center items-center relative">
                  <img
                      @click="$emit('open')"
                      class="w-30 h-30 rounded-full border border-yellow-400 cursor-pointer"
                      src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/1f/1f923ac2381b0d8af9fadf5f51bb9e072044de94.jpg"
                      alt=""
                  >
                </div>
                <div class="w-full flex justify-center items-center mt-2">
                  <button @click="$emit('open')" class="btn" type="button">Thay đổi ảnh</button>
                </div>

                <EditInfoForm/>

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