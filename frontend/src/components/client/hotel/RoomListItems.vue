<script setup>

</script>

<template>
  <div class="bg-gray-200 rounded-md p-3 mt-5">
    <h1 class="text-xl font-bold">Phòng Deluxe</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-3 mt-3">
      <div>
        <img
            @click=""
            src="/images/room_images/test-images.jpg"
            class="rounded-md w-full cursor-pointer"
            alt=""
        />
        <div class="mt-3">
          <i class="fa-solid fa-warehouse text-gray-400"></i>
          <span class="ml-2 text-sm">30 m<sup>2</sup></span>
        </div>
        <div class="mt-3">
          <i class="fa-solid fa-bed text-gray-400"></i>
          <span class="ml-2 text-sm">1 giường đôi / 2 giường đơn</span>
        </div>
        <div
            @click=""
            class="mt-3 text-blue-400 cursor-pointer"
        >
          <i class="fa-solid fa-circle-plus"></i>
          Các tiện ích phòng
        </div>
      </div>
      <div class="sm:col-span-2 lg:col-span-2 bg-white rounded-md p-4 flex flex-col">
        <div class="flex-1">
          <div class="border-b border-b-gray-400 pb-4">
            <span>Tối đa:</span>
            <span class="ml-4">
              <i class="fa-solid fa-person"></i>
              x 2 người lớn
            </span>
            <span class="ml-4">
              <i class="fa-solid fa-child"></i>
              x 1 trẻ em
            </span>
          </div>
          <p class="mt-3">
            <i class="fa-solid fa-building mr-2"></i>
            Số phòng còn trống: 4
          </p>
          <p class="mt-3">
            <i class="fa-solid fa-money-check-dollar mr-2"></i>
            Hình thức thanh toán:
          </p>
          <div class="mt-2">
            <div class="badge badge-primary mr-2">Thanh toán trước</div>
            <div class="badge badge-primary">Thanh toán khi nhận phòng</div>
          </div>
        </div>
        <div class="mt-5">
          <span class="text-2xl text-orange-500 font-bold">800.000 VNĐ </span><span>/ đêm</span>
          <button class="btn bg-orange-500 text-white font-medium rounded-md w-full mt-3">
            ĐẶT PHÒNG NGAY
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>