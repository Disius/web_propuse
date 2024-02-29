<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import {ref} from "vue";

const props = defineProps({
    acceder_usuarios: Boolean,
    vacantes: Boolean,
})

const dash = ref([
    {type: "Configuracion", route: "config.main", imagen: "/storage/img/tool.png", permiso: true},
    {type: "Usuarios", route: "users.view", imagen: "/storage/img/usuarios.png", permiso: props.acceder_usuarios},
    {type: "Vacantes", route: "vacante.index", imagen: "/storage/img/trabajo.jpg", permiso: props.vacantes},
])
</script>

<template>

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ml-16">
                <div class="grid gap-4 grid-cols-1 md:grid-cols-4 flex flex-col justify-center items-center">
                    <div v-for='(menu, index) in dash' :key="index" class="w-full sm:w-2/3 lg:w-1/2 xl:w-1/5">
                        <div v-if="menu.permiso">
                            <Link :href="route(menu.route)" as="button">
                            <div class="flex flex-col justify-center items-center h-full ml-5 md:ml-10 w-52 rounded-xl overflow-hidden shadow-lg relative transition-transform transform hover:scale-105 hover:bg-red-500 hover:ring-red-500 hover:text-white" @click="menu.route">
                                <div class="flex items-center justify-center">
                                    <img :src="menu.imagen" alt="">
                                </div>
                                <div class="px-6 py-4 flex justify-center items-center">
                                    <p class="text-gray-500 hover:text-white text-2xl text-center">
                                        {{menu.type}}
                                    </p>
                                </div>
                            </div>
                        </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
