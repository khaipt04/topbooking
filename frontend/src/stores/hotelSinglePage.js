import { defineStore } from "pinia";
import {ref} from "vue";

export const useScroll = defineStore("scroll", () => {
    let shouldScroll = ref(false)

    const triggerScroll = () => {
        shouldScroll.value = true
    }

    const resetScroll = () => {
        shouldScroll.value = false
    }

    return { shouldScroll, triggerScroll, resetScroll }
})

export const useOpenImages = defineStore('openImages', () => {
    let openImages = ref(false)

    const open = () => {
        openImages.value = true
    }

    const close = () => {
        openImages.value = false
    }

    return { openImages, open, close }
})

export const useOpenUtilities = defineStore('openUtilities', () => {
    let openUtilities = ref(false)

    const open = () => {
        openUtilities.value = true
    }

    const close = () => {
        openUtilities.value = false
    }

    return { openUtilities, open, close }
})