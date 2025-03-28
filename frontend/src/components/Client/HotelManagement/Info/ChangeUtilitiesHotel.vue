<script setup>
import {defineProps, ref} from "vue";
import {
  useOpenChangeUtilitiesHotel
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
const utilities = ref([
  {id: 1, icon: 'fa-solid fa-wifi', name: 'Wifi miễn phí'},
  {id: 2, icon: 'fa-solid fa-water', name: 'Nhìn ra biển'},
  {id: 3, icon: 'fa-solid fa-person-swimming', name: 'Hồ bơi'},
  {id: 4, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
  {id: 5, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
  {id: 6, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
  {id: 7, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
  {id: 8, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
  {id: 9, icon: 'fa-solid fa-dumbbell', name: 'Phòng gym'},
])

const openChangeUtilitiesHotel = useOpenChangeUtilitiesHotel()

const props = defineProps({
  hotel_utilities: Array
})

let hotelUtilities = ref(props.hotel_utilities)
let selectedUtilities = ref([...props.hotel_utilities.map(util => util.utility_id)])

//action
const toggleUtility = (id) => {
  if (selectedUtilities.value.includes(id)) {
    selectedUtilities.value = selectedUtilities.value.filter(utilID => utilID !== id)
  } else {
    selectedUtilities.value.push(id)
  }
  console.log(selectedUtilities.value)
  console.log(hotelUtilities.value)
}
</script>

<template>
  <TransitionRoot as="template" :show="openChangeUtilitiesHotel.openChangeUtilitiesHotel">
    <Dialog class="relative z-10" @close="openChangeUtilitiesHotel.close()">
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
                  @click="openChangeUtilitiesHotel.close()"
                  class="h-6 w-6 text-gray-500 cursor-pointer"
                />
              </div>
              <div class="mt-4">
                <form>
                  <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    <div v-for="utility in utilities" :key="utility.id" class="flex items-center gap-2">
                      <input type="checkbox" class="checkbox" :checked="selectedUtilities.includes(utility.id)" @change="toggleUtility(utility.id)"/>
                      <i :class="utility.icon"></i>
                      <label>{{ utility.name }}</label>
                    </div>
                  </div>
                  <input type="submit" class="btn bg-green-700 text-white mt-3" value="Cập nhật">
                </form>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<style scoped></style>