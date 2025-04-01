<script setup>
import {ref} from "vue";
import {XMarkIcon, PlusIcon} from '@heroicons/vue/24/outline';

//sate
let seeMoreutilities = ref(false)
let imagesRoomPreview = ref([])

//action
const handleFileUpload = (event) => {
  const files = event.target.files

  if (files) {
    for (const file of files) {
      const reader = new FileReader()
      reader.readAsDataURL(file)

      reader.onload = () => {
        imagesRoomPreview.value.push({ name: file.name, src: reader.result });
      }
    }
  }
}

const deleteImageReview = (image) => {
  const index = imagesRoomPreview.value.indexOf(image)
  imagesRoomPreview.value.splice(index, 1)
}
</script>

<template>
  <h1 class="text-2xl font-bold">Thêm phòng</h1>
  <form class="mt-7">
    <div>
      <h1 class="text-lg font-medium mb-3">Tùy chọn phòng</h1>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <label for="room_type" class="block">
            Loại phòng
          </label>
          <select class="select w-full mt-2" id="room_type">
            <option>Phòng Deluxe</option>
            <option>Phòng Suite</option>
            <option>Phòng Luxury</option>
          </select>
        </div>

        <div>
          <label for="room_quantity" class="block">
            Số lượng phòng (loại này)
          </label>
          <input type="number" class="input w-full mt-2" id="room_quantity">
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-3">Tùy chọn giường</h1>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <label for="bed_type" class="block">
            Loại giường
          </label>
          <select class="select w-full mt-2" id="bed_type">
            <option>Giường đơn / 90 - 120cm × 190 - 200cm</option>
            <option>Giường đôi nhỏ / 120 - 140cm × 190 - 200cm</option>
            <option>Giường đôi tiêu chuẩn / 151 - 160cm × 200cm</option>
            <option>Giường cỡ lớn / 181 - 200cm × 200 - 210cm</option>
            <option>Giường siêu lớn / 200 - 240cm × 200 - 220cm</option>
          </select>
        </div>

        <div>
          <label for="bed_quantity" class="block">
            Số lượng giường
          </label>
          <input type="number" class="input w-full mt-2" id="bed_quantity">
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-3">Số lượng khách</h1>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <label for="adult_quantity" class="block">
            Người lớn
          </label>
          <input type="number" class="input w-full mt-2" id="adult_quantity">
        </div>

        <div>
          <label for="children_quantity" class="block">
            Trẻ em
          </label>
          <input type="number" class="input w-full mt-2" id="children_quantity">
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-3">Kích thước phòng</h1>
      <div class="join">
        <input type="number" class="input join-item" placeholder="Kích thước phòng" />
        <span class="btn join-item">Mét vuông (m<sup>2</sup>)</span>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-3">Giá cơ bản cho mỗi đêm</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="join">
          <input type="number" class="input join-item appearance-none" placeholder="Giá phòng" />
          <span class="btn join-item">VNĐ / đêm</span>
        </div>

        <div class="bg-gray-200 rounded p-4">
          <span class="font-medium">Tóm tắt giá:</span>
          <div class="flex justify-between mt-2">
            <div>
              <span>
                x2 người lớn
                <i class="fa-solid fa-person"></i>
              </span>
              <span class="ml-4">
                x1 trẻ em
                <i class="fa-solid fa-child"></i>
              </span>
            </div>
            <div>
              <span class="font-medium text-yellow-500">
                2000000
              </span>
              <span>VNĐ / đêm</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-2">Tiện nghi và dịch vụ</h1>
      <p class="mb-4 text-gray-500">Chỗ nghỉ của bạn cung cấp các tiện nghi và dịch vụ nào?</p>
      <div v-show="!seeMoreutilities">
        <div class="grid grid-cols-2 gap-5">
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
        </div>
        <div class="mt-3">
          <button @click="seeMoreutilities = true" class="btn" type="button">Xem thêm tiện nghi</button>
        </div>
      </div>
      <div v-show="seeMoreutilities">
        <div class="grid grid-cols-2 gap-5">
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
          <div class="flex items-center gap-2">
            <input type="checkbox" class="checkbox" id="">
            <label for="">Wifi miễn phí</label>
          </div>
        </div>
        <div class="mt-3">
          <button @click="seeMoreutilities = false" class="btn" type="button">Thu gọn</button>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-3">Hình ảnh</h1>
      <div v-if="imagesRoomPreview.length <= 0">
        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
          <div class="text-center">
            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
            </svg>
            <div class="mt-4 flex justify-center text-sm/6 text-gray-600">
              <label for="room_images" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                <span>Tải lên ảnh</span>
                <input @change="handleFileUpload" id="room_images" type="file" multiple class="sr-only">
              </label>
              <p class="pl-1">hoặc kéo thả vào đây</p>
            </div>
            <p class="text-sm text-gray-600 italic mt-2">Đề xuất: để hình ảnh được đẹp nhất hãy tải lên ảnh có tỉ lệ 16:9.</p>
          </div>
        </div>
        <p class="text-sm text-red-500 italic mt-2">Vui lòng tải lên ít nhất 5 hình ảnh *</p>
      </div>
      <div v-if="imagesRoomPreview.length > 0" class="grid grid-cols-5 gap-3">
        <div v-for="image in imagesRoomPreview" :key="image.name" class="rounded relative overflow-hidden">
          <img :src="image.src" :alt="image.name" class="rounded w-full h-full object-cover aspect-16/9">
          <XMarkIcon @click="deleteImageReview(image)" class="h-6 w-6 text-gray-900 absolute top-2 right-2 hover:bg-gray-400 transition-all rounded cursor-pointer"/>
        </div>
        <div class="flex justify-center items-center">
          <label for="room_images_2" class="flex justify-center items-center w-full max-h-full min-h-30 bg-gray-200 rounded cursor-pointer">
            <PlusIcon class="h-8 w-8 text-gray-500" />
            <input @change="handleFileUpload" id="room_images_2" type="file" multiple class="sr-only">
          </label>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h1 class="text-lg font-medium mb-2">Thanh toán</h1>
      <p class="mb-4 text-gray-500">Phòng này chấp nhận các hình thức thanh toán nào?</p>
      <div class="flex items-center gap-2">
        <input type="checkbox" class="checkbox" id="">
        <label for="">Thanh toán khi nhận phòng</label>
      </div>
      <div class="flex items-center gap-2 mt-2">
        <input type="checkbox" class="checkbox" id="">
        <label for="">Thanh toán chuyển khoản</label>
      </div>
    </div>

    <div class="mt-5">
      <input type="submit" class="btn btn-primary" value="Hoàn tất thêm phòng">
    </div>
  </form>
</template>

<style scoped>

</style>