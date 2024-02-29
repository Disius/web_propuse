<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {onBeforeUnmount, onMounted, ref} from "vue";

//tomar referencia para vacantes

const currentSlide = ref(0)
const itemsPerPage = ref(1)
let intervalId = ref(null)
const images = ref([
    '/storage/img/equipo1.jpg',
    '/storage/img/equipo2.jpg',
    '/storage/img/equipo3.jpg',
    '/storage/img/equipo4.jpg',
    '/storage/img/equipo5.jpg',
    '/storage/img/equipo6.jpg',
    '/storage/img/equipo7.jpg',
]);


const nextSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value + 1) % (lastSlideIndex + 1);
}
const prevSlide = () => {
    const lastSlideIndex = images.value.length - itemsPerPage.value;
    currentSlide.value = (currentSlide.value - 1 + (lastSlideIndex + 1)) % (lastSlideIndex + 1);
}
const goToSlide = (index) => {
    currentSlide.value = index;
}
onMounted(() => {
    // intervalId = setInterval(nextSlide, 5000)
})

onBeforeUnmount(() => {
    // clearInterval(intervalId)
})
</script>

<template>
    <MainLayout>
        <div class="mt-16 pt-16 bg-gradient-to-b from-red-950 to-blue-950">
            <div class="block max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl hover:brightness-100">
                <div class="md:flex">
                    <div class="grid grid-cols-1">
                        <div class="flex mx-auto justify-center bg-red mt-5 rounded-xl">
                            <div class="text-white text-center text-4xl ma-5">Equipo de trabajo</div>
                        </div>
                        <div class="flex mx-auto justify-center">
                            <div class="text-black text-center text-xl ma-5">Somos un equipo profesional comprometidos con cada uno de nuestros socios comerciales, con la responsabilidad de cubrir todas y cada unas de sus necesidades y requerimientos</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ma-10 gap-5">
                        <div v-for="(image, index) in images" :key="index" class="w-48 h-48 rounded-full flex-shrink-0">
                            <!-- Contenido del slider -->
                            <div class="flex items-center justify-center">
                                <div class="w-full h-full rounded-full overflow-hidden group-hover:after:bg-red-500">
                                    <img :src="image" :alt="'Empresa ' + (index + 1)" class="w-full h-48 rounded-full object-cover transform hover:scale-110 transition-all duration-300 scale-90">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>
 group-hover::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50%;
}
</style>
