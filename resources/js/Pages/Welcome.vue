<script setup>
import { Head, Link } from '@inertiajs/vue3';
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";
import {ref, watch, watchEffect} from "vue";
import Dialogo from "@/Components/Dialogo.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Modal from "@/Components/Modal.vue";
import TextInput from "@/Components/TextInput.vue";
import DangerButton from "@/Components/DangerButton.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const props = defineProps({
    empresa: Array
});
const modal = ref(false);
function CloseModal(){
    modal.value = false
}
function MouseOver(){
    modal.value = true
}
const isDropdownOpen = ref(false);

const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
};




</script>

<template>
    <WelcomeLayout :show="modal">

        <template #quienesomos>
            <Link href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 text-lg" @mouseover="MouseOver">¿QUIENES SOMOS?</Link>
        </template>
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/storage/img/FONDODEIMAGEN.png');">
            <div class="w-full h-full bg-blue-600 opacity-40"></div>
        </div>

        <!-- Contenido centrado (puede ser un título, subtítulo, etc.) -->
        <div class="absolute inset-0 flex items-center justify-center">
            <!--                <h1 class="text-white text-4xl font-bold">Título de la sección</h1>-->
        </div>

        <!-- Contenedor para el logo de la empresa -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div style="background-image: url('/storage/img/LOGOENBLANCO.png');" class="w-96 h-96 bg-contain bg-no-repeat">

            </div>
        </div>

        <Dialogo :show="modal" @close="CloseModal">
            <div class="p-6">


                <div class="text-justify">
                    {{props.empresa[0].quienesSomos}}
                </div>
<!--                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">-->
<!--                    <div class="flex justify-center w-full">-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 mt-5">
                    <div class="flex justify-center">
                        <button @click="toggleDropdown" class="bg-red-500 text-white px-4 py-2 rounded">
                            MISIÓN Y VISION
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <button @click="toggleDropdown" class="bg-red-500 text-white px-4 py-2 rounded">
                            NUESTRA HISTORIA
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <button @click="toggleDropdown" class="bg-red-500 text-white px-4 py-2 rounded">
                            VALORES
                        </button>
                    </div>
                </div>
<!--                <div class="relative mt-5">-->
<!--                    <transition name="fade">-->
<!--                        <div v-if="isDropdownOpen" @click="closeDropdown" class="fixed inset-0 z-10"></div>-->
<!--                    </transition>-->

<!--                    <transition name="fade">-->
<!--                        <div v-if="isDropdownOpen" class="absolute mt-2 bg-white rounded-md">-->
<!--                            &lt;!&ndash; Contenido del menú desplegable &ndash;&gt;-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <div class="text-justify">-->
<!--                                        ● {{props.empresa[0].mision}}-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="text-justify mt-4">-->
<!--                                        ● {{props.empresa[0].vision}}-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                &lt;!&ndash;                                <li><a href="#">Valores</a></li>&ndash;&gt;-->
<!--                                &lt;!&ndash; Puedes agregar más opciones según sea necesario &ndash;&gt;-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </transition>-->
<!--                </div>-->

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="CloseModal"> Cerrar </SecondaryButton>
                </div>
            </div>
        </Dialogo>
    </WelcomeLayout>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
