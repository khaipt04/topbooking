<script setup>
import {ref} from "vue";
import { useRoute } from 'vue-router';
import {
  Dialog,
  DialogPanel,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
  Tab,
  TabGroup,
  TabList,
  TabPanel,
  TabPanels,
  TransitionChild,
  TransitionRoot,
  Menu,
  MenuButton,
  MenuItems,
  MenuItem
} from '@headlessui/vue'

import {
  Bars3Icon,
  ArrowLeftCircleIcon,
  UserPlusIcon,
  KeyIcon,
  BuildingOffice2Icon,
  UserCircleIcon,
  XMarkIcon
} from '@heroicons/vue/24/outline'

const route = useRoute();
const isActive = (path) => route.path === path;
const open = ref(false)
</script>

<template>
  <div class="bg-white">
    <!-- Mobile menu -->
    <TransitionRoot as="template" :show="open">
      <Dialog class="relative z-40 lg:hidden" @close="open = false">
        <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-black/25" />
        </TransitionChild>

        <div class="fixed inset-0 z-40 flex">
          <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
            <DialogPanel class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="absolute -inset-0.5" />
                  <span class="sr-only">Close menu</span>
                  <XMarkIcon class="size-6" aria-hidden="true" />
                </button>
              </div>

              <!-- Links -->

              <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div class="flow-root">
                  <router-link to="/" class="-m-2 my-2 block p-2 font-medium text-gray-900">Trang chủ</router-link>
                  <router-link to="/test1" class="-m-2 my-2 block p-2 font-medium text-gray-900">Khách sạn</router-link>
                  <router-link to="/test2" class="-m-2 my-2 block p-2 font-medium text-gray-900">Hướng dẫn</router-link>
                  <router-link to="/test1" class="-m-2 my-2 block p-2 font-medium text-gray-900">Đối tác khách sạn</router-link>
                </div>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </Dialog>
    </TransitionRoot>

    <header class="relative bg-blue-800">
      <p class="flex h-10 items-center justify-center bg-white px-4 text-sm font-medium text-gray-500 sm:px-6 lg:px-8">Chào mừng bạn đến với TopBooking</p>

      <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div>
          <div class="flex h-16 items-center">
            <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden cursor-pointer" @click="open = true">
              <span class="absolute -inset-0.5" />
              <span class="sr-only">Open menu</span>
              <Bars3Icon class="size-6" aria-hidden="true" />
            </button>

            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <a href="#">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="/TopBooking.png" alt="" />
              </a>
            </div>

            <!-- Flyout menus -->
            <PopoverGroup class="hidden lg:ml-8 lg:block lg:self-stretch">
              <div class="flex h-full space-x-8">
                <Popover class="flex">
                  <div class="relative flex">
                    <RouterLink to="/" :class="[isActive('/') ? 'border-white text-white' : 'border-transparent text-white',
                    'relative z-10 -mb-px flex items-center border-b-2 pt-px text-base font-medium transition-colors' +
                    'duration-200 ease-out outline-none cursor-pointer']">Trang chủ</RouterLink>
                  </div>
                </Popover>

                <Popover class="flex">
                  <div class="relative flex">
                    <RouterLink to="test1" :class="[isActive('/test1') ? 'border-white text-white' : 'border-transparent text-white',
                    'relative z-10 -mb-px flex items-center border-b-2 pt-px text-base font-medium transition-colors' +
                    'duration-200 ease-out outline-none cursor-pointer']">Khách sạn</RouterLink>
                  </div>
                </Popover>

                <Popover class="flex">
                  <div class="relative flex">
                    <RouterLink to="test2" :class="[isActive('/test2') ? 'border-white text-white' : 'border-transparent text-white',
                    'relative z-10 -mb-px flex items-center border-b-2 pt-px text-base font-medium transition-colors' +
                    'duration-200 ease-out outline-none cursor-pointer']">Hướng dẫn</RouterLink>
                  </div>
                </Popover>

                <Popover class="flex">
                  <div class="relative flex">
                    <RouterLink to="test2" :class="[isActive('/test3') ? 'border-white text-white' : 'border-transparent text-white',
                    'relative z-10 -mb-px flex items-center border-b-2 pt-px text-base font-medium transition-colors' +
                    'duration-200 ease-out outline-none cursor-pointer']">Đối tác khách sạn</RouterLink>
                  </div>
                </Popover>
              </div>
            </PopoverGroup>

            <Menu as="div" class="relative inline-block text-left ml-auto">
              <div>
                <MenuButton class="w-full justify-center rounded-full border-2 border-yellow-500 cursor-pointer">
                  <img class="rounded-full" src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/1f/1f923ac2381b0d8af9fadf5f51bb9e072044de94.jpg" alt="" srcset="">
                </MenuButton>
              </div>

              <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden">
                  <div class="py-1">
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <UserPlusIcon class="h-6 w-6 text-gray-500" />
                        Đăng ký
                      </RouterLink>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <KeyIcon class="h-6 w-6 text-gray-500" />
                        Đăng nhập
                      </RouterLink>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <UserCircleIcon class="h-6 w-6 text-gray-500" />
                        Tài khoản
                      </RouterLink>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <BuildingOffice2Icon class="h-6 w-6 text-gray-500" />
                        Quản lí khách sạn
                      </RouterLink>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <Bars3Icon class="h-6 w-6 text-gray-500" />
                        Phòng đã đặt
                      </RouterLink>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                      <RouterLink to="" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                        <ArrowLeftCircleIcon class="h-6 w-6 text-gray-500" />
                        Đăng xuất
                      </RouterLink>
                    </MenuItem>
                  </div>
                </MenuItems>
              </transition>
            </Menu>
          </div>
        </div>
      </nav>
    </header>
  </div>
</template>