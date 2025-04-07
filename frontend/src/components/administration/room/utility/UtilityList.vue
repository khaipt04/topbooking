<script setup>
import {ref} from "vue";
import UtilityListItems from "@/components/administration/room/utility/UtilityListItems.vue";
import EditUtility from "@/components/administration/room/utility/EditUtility.vue";

//sate
const utilities = ref([
  { id: 1, name: "Wifi miễn phí", icon: "📶" },
  { id: 2, name: "Hồ bơi", icon: "🏊" },
  { id: 3, name: "Bãi đỗ xe", icon: "🚗" },
])
const selectedUtility = ref(null)
const isModalOpen = ref(false)

//action
const openEditModal = (utility) => {
  selectedUtility.value = utility
  isModalOpen.value = true
}
</script>

<template>
  <div class="overflow-x-auto">
    <table class="table">
      <thead>
      <tr>
        <th class="w-5/100">Stt</th>
        <th class="w-35/100">Icon</th>
        <th class="w-45/100">Tên tiện nghi</th>
        <th class="w-15/100">Tùy chọn</th>
      </tr>
      </thead>

      <tbody>

        <UtilityListItems
            v-for="(utility, index) in utilities"
            :key="utility.id"
            :utility="utility"
            :index="index + 1"
            @edit="openEditModal"
        />

      </tbody>
    </table>
  </div>

  <EditUtility v-model="isModalOpen" :utility="selectedUtility"/>
</template>

<style scoped>

</style>