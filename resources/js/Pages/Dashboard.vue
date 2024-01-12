<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
<!--        <template #header>-->
<!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Inicio</h2>-->
<!--        </template>-->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                    <div class="flex justify-start">
                        <div class="max-w-6xl mx-auto">
                            <div class="w-full sm:w-2/3 lg:w-1/12 xl:w-11/12">
                                <Link href="#" as="button">
                                    <div class="max-w-full rounded overflow-hidden shadow-lg relative transition-transform transform hover:scale-105">
                                        <div class="flex items-center justify-center">
                                            <!-- Imagen centrada y grande -->
                                            <img src="/storage/img/tool.png" alt="">
                                        </div>
                                        <!-- Contenido de la tarjeta -->
                                        <!--            <img class="w-full" src="imagen.jpg" alt="Imagen">-->
                                        <div class="px-6 py-4 flex justify-center">
                                            <p class="text-gray-700 text-base">
                                                Establecer parametros.
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-start">
                        <div class="max-w-4xl mx-auto">
                            <div class="w-full sm:w-2/3 lg:w-1/2 xl:w-11/12">
                                <div class="max-w-full rounded overflow-hidden shadow-lg">
                                    <!--            <img class="w-full" src="imagen.jpg" alt="Imagen">-->
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                                        <p class="text-gray-700 text-base">
                                            Contenido de la tarjeta. Puedes agregar aquí información adicional sobre la tarjeta.
                                        </p>
                                    </div>
                                    <div class="px-6 py-4">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Tag1</span>
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Tag2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
