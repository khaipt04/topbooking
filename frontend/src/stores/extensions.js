import { defineStore } from "pinia";
import {ref} from "vue";

export const useScrollStore = defineStore("scroll", () => {
    let shouldScroll = ref(false)

    const triggerScroll = () => {
        shouldScroll.value = true
    }

    const resetScroll = () => {
        shouldScroll.value = false
    }

    return { shouldScroll, triggerScroll, resetScroll }
})