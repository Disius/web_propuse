<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import MenuMain from "@/Components/MenuQuienes.vue";
import Dialogo from "@/Components/Dialogo.vue";
import Dropdown from "@/Components/Dropdown.vue";

const props = defineProps({
    empresa: Array,
});

const menu = ref(false)
const dialogo = ref(false)
const menuItemsConocenos = [
    {id: 1, title: "¿QUIENES SOMOS?"},
    {id: 2, title: "MISIÓN Y VISION"},
    {id: 3, title: "NUESTRA HISTORIA"},
    {id: 4, title: "VALORES"},
]
const selectData = ref("")
const year = computed(() => {
    let date = new Date();
    return date.getFullYear()
})

const leaveMenu = (e) => {
    console.log(e.target)
    menu.value = false
}
const handleHoverItem = (item) => {
    // Lógica para manejar el evento de hover-item aquí
    console.log(`Se ha hover sobre: ${item}`);
};

</script>

<template>
    <div>
        <div class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-6 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <Link :href="route('main')">
                        <ApplicationLogo
                            class="block h-16 w-32 fill-current text-gray-800 mb-5"
                        />
                    </Link>
                    <nav class="space-x-4">
                        <Link href="#" class="relative text-red-600 hover:text-gray-900 transition duration-300 text-lg"
                        @mouseover="menu = true"
                        >
                            CONOCENOS
                            <MenuMain :show="menu" @hover-item="handleHoverItem" @close="menu = false"></MenuMain>
                        </Link>
                        <Link href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRAS EMPRESAS</Link>
                        <Link href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRO EQUIPO DE TRABAJO</Link>
                        <Link href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">CONTÁCTANOS</Link>
                        <!-- Agrega más elementos del menú -->
                    </nav>
                </div>
                <div>
                    <Link :href="route('login')" as="button">
                        <button class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>
                    </Link>
                </div>
            </div>
        </div>
        <div class="relative h-screen bg-cover bg-center" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">
            <!-- Contenido de la sección con la imagen de fondo -->
            <div class="container mx-auto flex items-center justify-center h-full">
                <!-- Contenido adicional, como tu logo -->
<!--                <img src="/tu-ruta/logo.png" alt="Logo" class="h-24 w-auto" />-->
                <div style="background-image: url('/storage/img/LOGOENBLANCO.png');" class="w-96 h-96 bg-contain bg-no-repeat">

                </div>
                <!-- Contenido del main -->
                    <main class="mt-8">
                    <Dialogo :show="dialogo" @close="dialogo = false">
                        <div class="flex justify-center items-center">
                            <div class="p-4 text-justify font-semibold text-lg text-gray-800">
                                {{selectData}}
                            </div>
                        </div>
                    </Dialogo>
                </main>
            </div>
        </div>

        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
