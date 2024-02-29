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
                <div class="grid gap-10 bg-gradient-to-b from-red-950 to-blue-950">
                    <div class="relative bg-cover bg-center w-full h-full mt-16">
                        <div class="relative bg-cover bg-center flex items-center justify-center h-full bg-white sm:rounded-2xl ma-10" style="background-image: url('/storage/img/FONDODEIMAGEN.png');">
                            <div class="grid grid-cols-1">
                                <div class="container mx-auto ml-5">
                                    <div class="relative rounded-full">
                                    <span class="text-justify md:ml-5 text-center text-xl font-semibold md:text-7xl text-white bg-red ma-10">
                                        CORPORATIVO NAERCRIS
                                    </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center mt-10 mb-5 ma-8 ml-10">
                                    <div class="text-justify text-2xl font-semibold md:text-3xl text-white ma-2">Nuestro grupo empresarial busca satisfacer las necesidades de nuestros clientes al ofrecer
                                        los más altos estándares de calidad, seguridad y servicio.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl hover:brightness-100 z-10">
                        <div class="md:flex">
                            <div class="container mx-auto mr-5">
                                <div class="flex place-items-center justify-center mt-5 mb-5 ma-8 ml-10">
                                    <div class="text-justify font-semibold text-4xl text-black ma-2 mt-10">Nuestras empresas</div>
                                </div>
                                <div class="relative overflow-hidden">
                                    <div class="">
                                      <div class="flex justify-center">
                                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 ml-16">
                                          <div v-for="(image, index) in images" :key="index" class="w-48 h-48 flex-shrink-0">
                                            <!-- Contenido del slider -->
                                            <div class="flex items-center justify-center">
                                              <div class="w-full h-full overflow-hidden group-hover:after:bg-red-500">
                                                <img :src="image" :alt="'Empresa ' + (index + 1)" class="w-full h-full object-cover transform hover:scale-110 transition-all duration-300 scale-90">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1">
                                    <p class="ma-5 text-center text-3xl">
                                        A lo largo de los años, hemos evolucionado y diversificado nuestras actividades
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mb-5 ma-8 ml-10">
                        <div class="text-justify font-semibold text-4xl text-white ma-2">Cada una busca contribuir en el desarrollo económico y social de las
                            localidades en las que tienen operaciones.</div>
                    </div>
                    <div class="max-w-lg mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl w-full hover:brightness-100 ma-10" @click="showingNavigationDropdown = !showingNavigationDropdown">
                        <div class="flex justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-2">
                                <p class="ma-10 text-center text-2xl">Valores</p>
                                <div class="mt-11">
                                    <v-icon>mdi-arrow-down-drop-circle-outline</v-icon>
                                </div>
                            </div>
                        </div>
                        <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }">
                            <div class="ma-10">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 sm:px-4">
                                    <div class="flex justify-center">
                                        <div class="text-justify text-7xl bg-red-500 text-white h-36 w-58 mt-16">Nuestros Valores</div>
                                    </div>
                                    <div class="flex justify-center">
                                        <div v-html="formatValue(props.empresa[0].valores)" class="text-black text-3xl sm:ml-12"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
