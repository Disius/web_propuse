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
            <div class="flex justify-center items-center md:ml-5">
                <div class="grid gap-5 md:gap-12 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div v-for='(menu, index) in dash' :key="index" class="">
                        <div v-if="menu.permiso">
                            <Link :href="route(menu.route)" as="button">
                                <div class="max-w-md mx-auto bg-white w-52 h-64 rounded-xl overflow-hidden shadow-lg relative transition-transform transform hover:scale-110">
                                    <div class="">
                                        <div class="ma-4">
                                            <div class="flex items-center justify-center">
                                                <img :src="menu.imagen" alt="">
                                            </div>
                                            <div class="px-6 py-4 flex justify-center items-center">
                                                <p class="text-black text-2xl text-center">
                                                    {{menu.type}}
                                                </p>
                                            </div>
                                        </div>
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
