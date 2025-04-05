<script setup>
import {useRoute} from "vue-router";
import SearchForm from "@/components/client/common/SearchForm.vue";

const route = useRoute()

const isTrue = (path) => route.path === path
</script>

<template>
  <div
      :class="[
        isTrue('/') ?
        'sm:relative lg:relative bt-4 sm:mb-15 lg:mb-15' :
        ''
      ]"
  >
    <img v-if="isTrue('/')" class="w-full" src="/images/banners/home-page-banner.jpg" alt="" srcset="" />
    <div
        :class="[
          isTrue('/') ? 'mx-auto max-w-7xl mt-2 sm:mt-2 lg:mt-0 px-4 sm:px-6 lg:px-20 lg:absolute -bottom-8 left-0 right-0' :
          'mx-auto max-w-7xl px-4 sm:px-6 lg:px-20 mt-15'
        ]"
    >
      <div class="bg-yellow-400 p-3 rounded-xl shadow shadow-amber-300">

        <SearchForm/>

      </div>
    </div>
  </div>
</template>

<style scoped></style>
