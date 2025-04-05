<script setup>
import EditCategoryForm from "@/components/administration/hotel/category/EditCategoryForm.vue";
import {Dialog, DialogPanel, TransitionChild, TransitionRoot} from "@headlessui/vue";
import {XMarkIcon} from "@heroicons/vue/24/outline/index.js";

const props = defineProps({
  modelValue: Boolean,
  category: Object,
})
</script>

<template>
  <TransitionRoot as="template" :show="modelValue">
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
                  <h1 class="text-xl font-medium mb-5">Chỉnh sửa</h1>
                  <XMarkIcon @click="$emit('update:modelValue', false)" class="h-6 w-6 text-gray-500 cursor-pointer" />
                </div>

                <EditCategoryForm :category="props.category"/>
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