<script setup>

import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <div>
        <div class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-6 flex items-center justify-between">
                <div class="shrink-0 flex items-center">
                    <Link :href="route('dashboard')">
                        <ApplicationLogo
                            class="block h-9 w-auto fill-current text-gray-800"
                        />
                    </Link>
                </div>
                <div class="flex items-center space-x-4">
<!--                    <img src="https://www.apple.com/ac/globalnav/6/en_US/images/globalnav/apple/image_large.svg" alt="Apple Logo" class="h-8">-->
                    <nav class="space-x-4">
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300">¿QUIENES SOMOS?</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300">NUESTRAS EMPRESAS</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300">NUESTRO EQUIPO DE TRABAJO</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300">CONTÁCTANOS</a>
                        <!-- Agrega más elementos del menú -->
                    </nav>
                </div>
                <div>
                    <button class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
