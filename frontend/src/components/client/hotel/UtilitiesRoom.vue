<script setup>

import {Dialog, DialogPanel, TransitionChild, TransitionRoot} from "@headlessui/vue";
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
</template>

<style scoped>

</style>