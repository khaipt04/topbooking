<script setup>
import Banner from "@/components/Client/RegisterPartnerPage/Banner.vue";
import FormRegisterPartner from "@/components/Client/RegisterPartnerPage/FormRegisterPartner.vue";
</script>

<template>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-10">
    <div class="w-full grid grid-cols-1 sm:grid-cols-5 lg:grid-cols-5 bg-white border border-gray-200 shadow rounded-xl">
      <div class="w-full h-full block col-span-3 p-5">
        <h1 class="text-2xl font-bold">ĐĂNG KÝ ĐỐI TÁC KHÁCH SẠN</h1>
        <p class="text-gray-400">Dịch vụ dành riêng cho các đối tác của TopBooking giúp tối ưu hóa việc quản lý hoạt động của khách sạn.</p>

        <FormRegisterPartner/>
      </div>

      <Banner/>
    </div>
  </div>
</template>

<style scoped>

</style>