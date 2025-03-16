<script setup>

</script>

<template>
  <footer class="bg-blue-900 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <router-link to="/" class="flex items-center">
            <img src="/TopBooking.png" class="h-8 me-3" alt="TopBooking" />
          </router-link>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">TopBooking</h2>
            <ul class="text-white dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Giới thiệu</a>
              </li>
              <li class="mb-4">
                <a href="#" class="hover:underline">Liên hệ</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Chính sách bảo mật</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Dịch vụ</h2>
            <ul class="text-white dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="" class="hover:underline ">Khách sạn trong nước</a>
              </li>
              <li>
                <a href="" class="hover:underline">Khách sạn nước ngoài</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Khác</h2>
            <ul class="text-white dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Hướng dẫn</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Đăng ký đối tác</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="flex items-center justify-center">
          <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2025 TopBooking. All Rights Reserved.</span>
      </div>
    </div>
  </footer>
</template>

<style scoped>

</style>