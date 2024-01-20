<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import {ref} from "vue";


const dash = ref([
    {type: "Configuracion", route: "config.main", imagen: "/storage/img/tool.png"},
    {type: "Vacantes", route: "config.main", imagen: "/storage/img/trabajo.jpg"}
])
</script>

<template>

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                    <div v-for='(menu, index) in dash' :key="index" class="w-full sm:w-2/3 lg:w-1/2 xl:w-1/5">
                        <Link :href="route(menu.route)" as="button">
                            <div class="h-full w-52 rounded overflow-hidden shadow-lg relative transition-transform transform hover:scale-105 hover:bg-red-500 hover:ring-red-500 hover:text-white" @click="menu.route">
                                <div class="flex items-center justify-center">
                                    <img :src="menu.imagen" alt="">
                                </div>
                                <div class="px-6 py-4 flex justify-center items-center">
                                    <p class="text-gray-700 text-base hover:text-white text-4xl">
                                        {{menu.type}}
                                    </p>
                                </div>
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
