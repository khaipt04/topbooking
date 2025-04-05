<script setup>
import { PencilSquareIcon, TrashIcon } from '@heroicons/vue/24/outline/index.js'

const props = defineProps({
  category: Object,
  index: Number,
})
</script>

<template>
  <tr class="hover:bg-base-300">
    <th>{{ props.index }}</th>
    <td>
      <img :src="props.category.image" :alt="props.category.name" class="w-full bg-cover rounded">
    </td>
    <td>{{ props.category.name }}</td>
    <td class="flex gap-2 items-center">
      <button @click="$emit('edit', props.category)" class="btn bg-blue-600 cursor-pointer">
        <PencilSquareIcon class="h-5 w-5 text-white" />
      </button>

      <button class="btn bg-red-600 cursor-pointer">
        <TrashIcon class="h-5 w-5 text-white" />
      </button>
    </td>
  </tr>
</template>

<style scoped></style>