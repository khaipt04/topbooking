<script setup>
import {ref} from "vue";
import RegistrationListItems from "@/components/administration/partner/RegistrationListItems.vue";
import RegistrationDetail from "@/components/administration/partner/RegistrationDetail.vue";

let isModalOpen = ref(false);
</script>

<template>
  <div class="overflow-x-auto">
    <table class="table">
      <thead>
      <tr>
        <th class="w-10/100">Mã</th>
        <th class="w-30/100">Tên chỗ nghỉ</th>
        <th class="w-15/100">Email</th>
        <th class="w-10/100">Điện thoại</th>
        <th class="w-15/100">Trạng thái</th>
        <th class="w-20/100">Tùy chọn</th>
      </tr>
      </thead>

      <tbody>

        <RegistrationListItems @openModal="isModalOpen = true"/>

      </tbody>
    </table>
  </div>

  <RegistrationDetail v-model="isModalOpen"/>
</template>

<style scoped>

</style>