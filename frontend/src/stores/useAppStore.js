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

export const useOpenInfoStore = defineStore('openInfo', () => {
    let openInfo = ref(false)

    const open = () => {
        openInfo.value = true
    }

    const close = () => {
        openInfo.value = false
    }

    return { openInfo, open, close }
})

export const useOpenChangeImageStore = defineStore('openChangeImage', () => {
    let openChangeImage = ref(false)

    const open = () => {
        openChangeImage.value = true
    }

    const close = () => {
        openChangeImage.value = false
    }

    return { openChangeImage, open, close }
})

export const useOpenChangeImageHotelStore = defineStore('openChangeImageHotel', () => {
    let openChangeImageHotel = ref(false)

    const open = () => {
        openChangeImageHotel.value = true
    }

    const close = () => {
        openChangeImageHotel.value = false
    }

    return { openChangeImageHotel, open, close }
})

export const useOpenChangeUtilitiesHotel = defineStore('openChangeUtilitiesHotel', () => {
    let openChangeUtilitiesHotel = ref(false)

    const open = () => {
        openChangeUtilitiesHotel.value = true
    }

    const close = () => {
        openChangeUtilitiesHotel.value = false
    }

    return { openChangeUtilitiesHotel, open, close }
})