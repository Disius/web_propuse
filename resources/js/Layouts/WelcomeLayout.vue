<script setup>
function changeColor(b) {

}

import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";
import {computed} from "vue";


const year = computed(() => {
    let anio = new Date()
    return anio.getFullYear()
})

let isHovered = false;

// function HoverMouse(isHover) {
//     isHovered = isHover;
//     // Aquí puedes realizar acciones basadas en el estado del hover
//     if (isHover) {
//         // Si está en hover, cambia el color a text-gray-900
//         document.querySelector('a').classList.add('hover:text-gray-900');
//         document.querySelector('a').classList.remove('text-gray-600');
//     } else {
//         // Si no está en hover, regresa al color original
//         document.querySelector('a').classList.add('text-gray-600');
//         document.querySelector('a').classList.remove('hover:text-gray-900');
//     }
// }
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
                        <a href="#" class="text-gray-600" onmouseover="changeColor(true)" onmouseout="changeColor(false)">¿QUIENES SOMOS?</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRAS EMPRESAS</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRO EQUIPO DE TRABAJO</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 text-lg">CONTÁCTANOS</a>
                        <!-- Agrega más elementos del menú -->
                    </nav>
                </div>
                <div>
                    <button class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>
                </div>
            </div>
        </div>
        <div class="relative h-screen">
            <!-- Imagen de fondo -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/storage/img/FONDODEIMAGEN.png');"></div>

            <!-- Contenido centrado (puede ser un título, subtítulo, etc.) -->
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-white text-4xl font-bold">Título de la sección</h1>
            </div>

            <!-- Contenedor para el logo de la empresa -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div style="background-image: url('/storage/img/LOGOENBLANCO.png');" class="w-96 h-96 bg-contain bg-no-repeat">

                </div>
            </div>
        </div>
        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy; {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</template>

<style scoped>

</style>
