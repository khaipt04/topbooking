<script setup>
import ChangeUtilitiesForm from "@/components/partner/info/ChangeUtilitiesForm.vue";
import {
  Dialog,
  DialogPanel,
  TransitionChild,
  TransitionRoot
} from "@headlessui/vue";
import {
  XMarkIcon
} from "@heroicons/vue/24/outline/index.js";

//state
const props = defineProps({
  modelValue: Boolean,
  hotel_utilities: Array
})
</script>

<template>
  <TransitionRoot as="template" :show="props.modelValue">
    <Dialog class="relative z-10" @close="$emit('update:modelValue', false)">
      <TransitionChild
        as="template"
        enter="ease-out duration-300"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="ease-in duration-200"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild
            as="template"
            enter="ease-out duration-300"
            enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            enter-to="opacity-100 translate-y-0 sm:scale-100"
            leave="ease-in duration-200"
            leave-from="opacity-100 translate-y-0 sm:scale-100"
            leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          >
            <DialogPanel
              class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-full sm:w-2/3 lg:w-3/5 p-3"
            >
              <div class="flex justify-between items-center">
                <h1 class="text-lg font-medium">Quản lí tiện ích</h1>
                <XMarkIcon
                  @click="$emit('update:modelValue', false)"
                  class="h-6 w-6 text-gray-500 cursor-pointer"
                />
              </div>
              <div class="mt-4">

                <ChangeUtilitiesForm :hotel_utilities="props.hotel_utilities"/>

              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<style scoped></style>