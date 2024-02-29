<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";

const currentSlide = ref(0)
const itemsPerPage = ref(4)
const images = ref([
    '/storage/img/logomuebleria.png',
    '/storage/img/LOGOMARPIN01.png',
    '/storage/img/LOGOGASOLINERASGP.png',
    '/storage/img/LOGOPinedaReal.png',
    // '/storage/img/PNG.png',
]);


const nextSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value + 1) % (lastSlideIndex + 1);
}
const prevSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value - 1 + (lastSlideIndex + 1)) % (lastSlideIndex + 1);
}
</script>

<template>
    <MainLayout>
        <div class="grid grid-cols-1">
            <div class="flex mx-auto justify-center">
                <div class="text-white text-center text-4xl">Empresas</div>
            </div>
            <div class="flex mx-auto justify-center">
                <div class="text-white text-center text-xl"></div>
            </div>
        </div>
        <div class="container mx-auto mt-8">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform ease-in-out duration-300" :style="{ transform: `translateX(-${currentSlide * (100 / itemsPerPage)}%)` }">
                    <div v-for="(image, index) in images" :key="index" class="w-48 h-48 mr-4 ml-14 flex-shrink-0">
                        <!-- Contenido del slider -->
                        <div class="flex items-center justify-center">
                            <div class="w-full h-full overflow-hidden rounded-md group-hover:after:bg-red-500">
                                <img :src="image" :alt="'Trabajador ' + (index + 1)" class="w-full h-full object-cover rounded-md hover:brightness-110 transform hover:scale-105 hover:bg-white hover:ring-white transition-all duration-300">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botones de navegación -->
                <button @click="prevSlide" class="bg-black rounded-full absolute top-1/2 left-4 transform -translate-y-1/2 text-2xl text-gray-700 sm:mr-5"><i class="mdi mdi-arrow-left-bold mdi-24px"></i></button>
                <button @click="nextSlide" class="bg-black rounded-full absolute top-1/2 right-4 transform -translate-y-1/2 text-2xl text-gray-700"><i class="mdi mdi-arrow-right-bold mdi-24px"></i></button>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
