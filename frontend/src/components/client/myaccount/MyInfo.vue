<script setup>
import ChangeAvatar from "@/components/client/myaccount/ChangeAvatar.vue";
import {
  useOpenInfoStore,
  useOpenChangeImageStore
} from "@/stores/useAppStore.js";
import {
  Dialog,
  DialogPanel,
  TransitionChild,
  TransitionRoot
} from "@headlessui/vue";
import {
  XMarkIcon
} from '@heroicons/vue/24/outline';

const openChangeImage = useOpenChangeImageStore()
const openInfo = useOpenInfoStore()
</script>

<template>
  <TransitionRoot as="template" :show="openInfo.openInfo">
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
                <XMarkIcon @click="openInfo.close()" class="h-6 w-6 text-gray-500 cursor-pointer" />
              </div>
              <div class="mt-10">
                <div class="w-full flex justify-center items-center relative">
                  <img
                      @click="openChangeImage.open(); openInfo.close()"
                      class="w-30 h-30 rounded-full border border-yellow-400 cursor-pointer"
                      src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/1f/1f923ac2381b0d8af9fadf5f51bb9e072044de94.jpg"
                      alt=""
                  >
                </div>
                <div class="w-full flex justify-center items-center mt-2">
                  <button @click="openChangeImage.open(); openInfo.close()" class="btn" type="button">Thay đổi ảnh</button>
                </div>
                <form class="mt-5">
                  <div class="mb-3">
                    <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Họ và tên</label>
                    <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Họ vè tên" required />
                  </div>
                  <div class="mb-3">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại</label>
                    <input type="text" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Số điện thoại" required />
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giới tính</label>
                    <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Chọn giới tính</option>
                      <option value="male">Nam</option>
                      <option value="female">Nữ</option>
                      <option value="unknown">Không xác định</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
                    <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Địa chỉ" required />
                  </div>

                  <input type="submit" class="btn rounded-lg bg-green-700 text-white" value="Lưu">
                  <button @click="openInfo.close()" type="button" class="btn rounded-lg bg-red-700 text-white">Đóng</button>
                </form>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>

  <ChangeAvatar/>
</template>

<style scoped>

</style>