<script setup>
import {ref} from "vue";

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

const props = defineProps({
  hotel_utilities: Array
})

let selectedUtilities = ref([...props.hotel_utilities.map(utility => utility.id)])

//action
const toggleUtility = (id) => {
  if (selectedUtilities.value.includes(id)) {
    selectedUtilities.value = selectedUtilities.value.filter(utilityID => utilityID !== id)
  } else {
    selectedUtilities.value.push(id)
  }
}
</script>

<template>
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
</template>

<style scoped>

</style>