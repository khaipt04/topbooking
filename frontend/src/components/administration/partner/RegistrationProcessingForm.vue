<script setup>
import {computed, ref} from "vue";

//state
let dataProcessing = ref('');
</script>

<template>
  <form>
    <div>
      <label for="approve" class="mr-2">Đồng ý yêu cầu</label>
      <input v-model="dataProcessing" value="approve" id="approve" type="radio" name="action_submit" class="radio radio-success"/>
    </div>
    <div class="mt-2">
      <label for="reject" class="mr-2">Từ chối yêu cầu</label>
      <input v-model="dataProcessing" value="reject" id="reject" type="radio" name="action_submit" class="radio radio-error"/>
    </div>

    <input type="submit" class="btn btn-primary mt-3" value="Thực hiện">
  </form>
</template>

<style scoped>

</style>