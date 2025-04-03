<script setup>
import {ref} from "vue";
import {
  useOpenChangeImageStore,
  useOpenInfoStore
} from "@/stores/useAppStore.js";
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
const openChangeImage = useOpenChangeImageStore()
const openInfo = useOpenInfoStore()
let imagePreview = ref(null)

//action
const handleFileUpload = (event) => {
  const file = event.target.files[0]
  if (file) {
    const reader = new FileReader()
    reader.onload = (e) => {
      imagePreview.value = e.target.result
    }
    reader.readAsDataURL(file)
  }
}
</script>

<template>
  <TransitionRoot as="template" :show="openChangeImage.openChangeImage">
    <Dialog class="relative z-10">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-9/10 sm:w-80 lg:w-100 p-3">
              <div class="flex justify-between items-center">
                <h1 class="text-lg font-medium">Thay đổi ảnh</h1>
                <XMarkIcon @click="openChangeImage.close(); openInfo.open()" class="h-6 w-6 text-gray-500 cursor-pointer" />
              </div>
              <div class="mt-10">
                <div class="flex justify-center">
                  <img
                      class="w-50 h-50 rounded-full"
                      :src="imagePreview ? imagePreview : '/images/hotel_images/621776883.webp'"
                      alt="avatar"
                  >
                </div>
                <form>
                  <div class="text-center mt-3">
                    <label for="image_upload" class="btn">Chọn ảnh</label>
                    <input type="file" @change="handleFileUpload" id="image_upload" hidden>
                  </div>
                  <div class="text-center mt-3">
                    <input
                        :type="imagePreview ? 'submit' : 'button'"
                        :disabled="!imagePreview"
                        class="btn rounded-lg bg-green-700 text-white"
                        value="Lưu"
                    >
                  </div>
                </form>
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