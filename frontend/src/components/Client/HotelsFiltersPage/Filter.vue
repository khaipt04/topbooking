<script setup>

</script>

<template>
  <form>
    <ul class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
      <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <span class="text-xl font-medium">Chọn lọc theo:</span>
      </li>
      <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
        <span class="text-lg font-medium">Loại hình</span>
        <div class="mt-3">
          <div class="flex justify-start items-center py-1">
            <input id="khach-san" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="khach-san" class="ml-2">Khách sạn</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="can-ho-chung-cu" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="can-ho-chung-cu" class="ml-2">Căn hộ chung cư</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="resort" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="resort" class="ml-2">Resort</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="homestay" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="homestay" class="ml-2">Homestay</label>
          </div>
        </div>
      </li>

      <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
        <span class="text-lg font-medium">Giá / 1 đêm</span>
        <div class="mt-3">
          <div class="w-full">
            <input type="range" min="0" max="6" value="6" class="range range-primary w-full" step="1"/>
            <div class="flex justify-between mt-2 text-sm">
              <span class="text-center">--0</span>
              <span class="text-center">1tr</span>
              <span class="text-center">2tr</span>
              <span class="text-center">3tr</span>
              <span class="text-center">4tr</span>
              <span class="text-center">5tr</span>
              <span class="text-center">ALL</span>
            </div>
          </div>
        </div>
      </li>

      <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
        <span class="text-lg font-medium">Tiện nghi</span>
        <div class="mt-3">
          <div class="flex justify-start items-center py-1">
            <input id="wifi-mien-phi" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="wifi-mien-phi" class="ml-2">Wifi miễn phí</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="cho-do-xe" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="cho-do-xe" class="ml-2">Chỗ đỗ xe</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="mang-theo-thu-cung" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="mang-theo-thu-cung" class="ml-2">Mang theo thú cưng</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="ho-boi" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="ho-boi" class="ml-2">Hồ bơi</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="ho-boi-rieng" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="ho-boi-rieng" class="ml-2">Hồ bơi riêng</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="view-bien" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="view-bien" class="ml-2">Nhìn ra biển</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="dieu-hoa" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="dieu-hoa" class="ml-2">Điều hòa không khí</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="may-giac" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="may-giac" class="ml-2">Máy giặc</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="may-say" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="may-say" class="ml-2">Máy sấy tóc</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="tu-lanh" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="tu-lanh" class="ml-2">Tủ lạnh</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="may-pha-cafe" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="may-pha-cafe" class="ml-2">Máy pha cafe</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="ban-cong" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="ban-cong" class="ml-2">Ban công</label>
          </div>
          <div class="flex justify-start items-center py-1">
            <input id="khong-thanh-toan-truoc" type="checkbox" class="checkbox checkbox-sm"/>
            <label for="khong-thanh-toan-truoc" class="ml-2">Không cần thanh toán trước</label>
          </div>
        </div>
      </li>
    </ul>
  </form>
</template>

<style scoped>

</style>