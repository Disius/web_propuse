<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import ApplicationLogoNECBlanco from "@/Components/ApplicationLogoNECBlanco.vue";
import LogoNaercris from "@/Components/LogoNaercris.vue";
import ApplicationLogoGuest from "@/Components/ApplicationLogoGuest.vue";


const props = defineProps({
    empresa: Array,
})
const showingNavigationDropdown = ref(false);
const currentSlide = ref(0)
const itemsPerPage = ref(4)
const images = ref([
    '/storage/img/logomuebleria.png',
    '/storage/img/LOGOMARPIN01.png',
    '/storage/img/LOGOGASOLINERASGP.png',
    '/storage/img/LOGOPinedaReal.png',
    '/storage/img/GPDISTRIBUIDORA.png',
    // '/storage/img/PNG.png',
]);
const fondo_imagen = '/storage/img/FONDODEIMAGEN.png'

// const images_i = computed(() => {
//     return images.value.unshift(fondo_imagen)
// })
const formatValue = (text) => {
    const valuesArray = text.split('·')
    return valuesArray.join("<br>· ")
}
const nextSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value + 1) % (lastSlideIndex + 1);
}
const prevSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value - 1 + (lastSlideIndex + 1)) % (lastSlideIndex + 1);
}

// console.log(props.empresa)
</script>

<template>
    <MainLayout>
        <div class="py-16 md:mt-16 ma-5 object-cover">
<!--            <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-7xl">-->
                <div class="max-w-lg mx-auto rounded-xl shadow-md overflow-hidden md:max-w-7xl">
                    <div class="flex justify-center relative bg-red-500">
                        <div class=" tracking-wide text-lg md:text-8xl text-white font-semibold text-center">Corporativo Naercris</div>
                    </div>
                    <div class="flex justify-center items-center text-white text-2xl bg-red-500 mt-10">
                        <p class="ma-5">Somos un grupo empresarial que opera en varios sectores, ofreciendo una amplia gama de productos y servicios para todos nuestros clientes.</p>
                    </div>
<!--                    <div class="grid grid-cols-1 md:grid-cols-2 mr-16 mt-10">-->
                        <div class="flex justify-center ma-10">
                            <v-card width="500">
                                <v-carousel
                                    height="400"
                                    show-arrows="hover"
                                    color="red-lighten-5"
                                    cycle
                                    hide-delimiter-background
                                    progress
                                >
                                    <v-carousel-item
                                        v-for="(image, index) in images"
                                        :key="index"
                                    >
                                        <v-sheet
                                            height="100%"
                                        >
                                            <div class="d-flex fill-height justify-center align-center">
                                                <img :src="image" alt="" class="h-54 w-full object-cover md:h-full md:w-96 scale-125 rounded-xl">
                                            </div>
                                        </v-sheet>
                                    </v-carousel-item>
                                </v-carousel>
                            </v-card>
                        </div>
                        <div class="flex justify-center items-center text-white text-2xl bg-red-500">
                            <p class="ma-5">Como parte de la globalización buscamos que nuestras marcas tengan mas impacto.</p>
                        </div>
<!--                    </div>-->
                </div>
<!--                <div class="grid grid-cols-2 mr-16 mt-10">-->
<!--                    <div class="flex justify-center">-->
<!--                        <v-card width="500">-->
<!--                            <v-carousel-->
<!--                                height="400"-->
<!--                                show-arrows="hover"-->
<!--                                color="red-lighten-5"-->
<!--                                cycle-->
<!--                            >-->
<!--                                <v-carousel-item-->
<!--                                    v-for="(image, index) in images"-->
<!--                                    :key="index"-->
<!--                                >-->
<!--                                    <v-sheet-->
<!--                                        height="100%"-->
<!--                                    >-->
<!--                                        <div class="d-flex fill-height justify-center align-center">-->
<!--                                            <img :src="image" alt="" class="h-54 w-full object-cover md:h-full md:w-96 scale-125 rounded-xl">-->
<!--                                        </div>-->
<!--                                    </v-sheet>-->
<!--                                </v-carousel-item>-->
<!--                            </v-carousel>-->
<!--                        </v-card>-->
<!--                    </div>-->
<!--                    <div class="flex justify-center items-center text-white text-xl">-->
<!--                        <p>Como parte de la globalización buscamos que nuestras marcas tengan mas impacto.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </MainLayout>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
