<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationLogoMarpin from "@/Components/ApplicationLogoMarpin.vue";
import ApplicationLogoPivaz from "@/Components/ApplicationLogoPivaz.vue";
import ApplicationLogoDistrimex from "@/Components/ApplicationLogoDistrimex.vue";
import ApplicationLogoGPGaso from "@/Components/ApplicationLogoGPGaso.vue";
import ApplicationLogoHotel from "@/Components/ApplicationLogoHotel.vue";
import ApplicationLogoGP from "@/Components/ApplicationLogoGP.vue";
import {ref} from "vue";

const props = defineProps({
    historia: String
})

const images = ref([
    '/storage/img/logomuebleria.png',
    '/storage/img/LOGOMARPIN01.png',
    '/storage/img/LOGOGASOLINERASGP.png',
    '/storage/img/LOGOPinedaReal.png',
    '/storage/img/GPDISTRIBUIDORA.png',
    // '/storage/img/PNG.png',
]);
</script>

<template>
    <MainLayout>
<!--        <div class="relative h-screen bg-cover bg-center w-full" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">-->
<!--        style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');"-->
        <div class="grid gap-10">
            <div class="mt-16">
                <div class="flex justify-center mt-16 ma-5">
                    <div class="font-semibold text-5xl md:text-7xl text-white flex text-center md:mb-5 lg:mb-0 mt-16 bg-red-500">
                        Conoce nuestra historia
                    </div>
                </div>
            </div>
            <div class="ma-5">
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl hover:brightness-100">
                    <div class="md:flex">
                        <div class="grid grid-cols-1">
                            <div class="p-6">
                                <!--                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"></div>-->
                                <!--                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>-->
                                <p class="mt-2 text-slate-500 text-2xl text-justify"> En el año de 1987, en el municipio de Mapastepec, Chiapas, México, se creó la primera sucursal dedicada a la venta de muebles y electrodomésticos al público en general, posteriormente se apertura una sucursal más en Mapastepec, dedicada a la venta de productos de ferretería y materiales para la construcción.
                                    Ya posicionados en Mapastepec, se abrieron nuevas sucursales, además de los municipios de Tonalá, Escuintla y Pijijiapan.
                                </p>
                            </div>
                            <div class="md:shrink-0">
                                <div class="grid grid-cols-1 sm:grid-cols-2">
                                    <div class="flex justify-center">
                                        <img class="h-54 w-full object-cover md:h-48 md:w-48" src="/storage/img/logomuebleria.png" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <img class="h-54 w-full object-cover md:h-48 md:w-48" src="/storage/img/LOGOMARPIN01.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="flex justify center lg:ml-16 lg:pl-5">
                    <div class="ma-8">
                        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl lg:max-w-xl hover:brightness-100 mt-6">
                            <div class="md:flex">
                                <div class="p-8 lg:pt-16 lg:mt-16">
                                    <p class="mt-2 text-slate-500 text-2xl text-justify">De igual manera se realizó la construcción de un hotel ubicado en el municipio de Tonalá.</p>
                                </div>
                                <div class="md:shrink-0">
                                    <img class="h-54 w-full object-cover md:h-48 md:w-48 lg:mt-16" src="/storage/img/LOGOPinedaReal.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify center sm:mr-10">
<!--                    <div class="">-->
                        <div class="w-4/5 h-96 mx-auto bg-cover bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl hover:brightness-100 mt-5" style="background-image: url('/storage/img/Hotel.jpg');">

                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class="ma-5">
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl hover:brightness-100 mt-10 sm:mt-10">
                    <div class="md:flex">
                        <div class="p-8">
                            <!--                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"></div>-->
                            <!--                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>-->
                            <p class="mt-2 text-slate-500 text-2xl md:text-justify">En el AÑO se creó la empresa dedicada al transporte terrestre de carga</p>
                        </div>
                        <div class="md:shrink-0">
                            <div class="grid grid-cols-1 lg:grid-cols-2">
                                <img class="h-54 w-full object-cover md:h-48 md:w-54 scale-50" src="/storage/img/LOGOGP.jpg" alt="">
                                <!--                            <img class="h-54 w-full object-cover md:h-48 md:w-48" src="/storage/img/LOGOMARPIN01.png" alt="">-->
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 mt-5">
                        <div class="p-8">
                            <!--                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"></div>-->
                            <!--                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>-->
                            <p class="mt-2 text-slate-500 text-2xl text-center">Y en 2011 se creó la empresa dedicada a la venta de combustibles en Mapastepec.</p>
                        </div>
                        <div class="flex justify-center">
                            <img class="h-48 w-40 object-cover md:h-48 md:w-54" src="/storage/img/LOGOGASOLINERASGP.png" alt="">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="p-8">
                            <!--                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"></div>-->
                            <!--                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>-->
                            <p class="mt-2 text-slate-500 text-2xl text-justify">Unos años después se creó una nueva razón social Comercializadora de combustibles y lubricantes Criserna SA de CV, que también operaría una nueva gasolinera ubicada en Ulapa (autopista).
                                Las empresas se fueron desarrollando con el paso del tiempo y el esfuerzo de muchas personas hasta llegar a ser lo que son hoy en día, <b>empresas con gran potencial.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
