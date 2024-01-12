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

defineProps({

});
const modal = ref(false);
const info = ref("Somos una empresa mamalona")
function CloseModal(){
    modal.value = false
}
function MouseOver(){
    modal.value = true
}
// console.log(modal.value)

// watchEffect(() => {
//     console.log(modal.value);
//     // Realizar acciones adicionales aquí cuando modal cambie
// });

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



                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="CloseModal"> Cerrar </SecondaryButton>
                </div>
            </div>
        </Dialogo>
    </WelcomeLayout>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
