<script setup>
import {
  Menu,
  MenuButton,
  MenuItems,
  MenuItem
} from '@headlessui/vue';
import {ArrowLeftCircleIcon, BuildingOffice2Icon, UserCircleIcon, WalletIcon} from "@heroicons/vue/24/outline/index.js";
</script>

<template>
  <nav class="fixed top-0 z-50 w-full bg-blue-800 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
          </button>
          <a href="#" class="flex ms-2 md:me-24">
            <img src="/TopBooking.png" class="h-8 me-3" alt="TopBooking Logo" />
          </a>
        </div>
        <div class="flex items-center">
          <Menu as="div" class="relative inline-block ms-3">
            <MenuButton>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </MenuButton>

            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
              <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden">
                <div class="py-1">
                  <MenuItem v-slot="{ active }">
                    <span class="cursor-pointer" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                      Phan Thanh Khai
                    </span>
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <span class="cursor-pointer" :class="[active ? 'bg-gray-100 text-gray-900 outline-hidden' : 'text-gray-700',
                      'px-4 py-2 text-sm flex items-center gap-2']">
                      khaipt04@gmail.com
                    </span>
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
    </div>
  </nav>
</template>

<style scoped>

</style>