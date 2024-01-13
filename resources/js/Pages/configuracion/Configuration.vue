<script setup>
import ApplicationLogoGuest from "@/Components/ApplicationLogoGuest.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from '@inertiajs/vue3'
import {ref} from "vue";
import CrearEmpresa from "@/Components/formularios/empresa/CrearEmpresa.vue";


const dialog_form = ref(false)
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="boton-volver">
                <i class="material-icons">arrow_back</i>
            </Link>
        </template>

<!--        <div>-->
<!--            <h1 class="text-3xl font-bold mb-6">Lista de Tarjetas</h1>-->
<!--            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">-->
<!--                &lt;!&ndash; Utiliza el componente de tarjeta en un bucle v-for &ndash;&gt;-->
<!--                <div class="w-full sm:w-2/3 lg:w-5/12 xl:w-5/12 sm:h-2/3 lg:h-5/12 xl:h-4/12">-->
<!--&lt;!&ndash;                    <Link :href="route('config.main')" as="button">&ndash;&gt;-->
<!--                        <div class="max-w-full rounded overflow-hidden shadow-lg relative transition-transform transform hover:scale-105 hover:bg-red-500 hover:ring-red-500">-->
<!--                            <div class="flex items-center justify-center">-->
<!--                                &lt;!&ndash; Imagen centrada y grande &ndash;&gt;-->
<!--                                <img src="/storage/img/tool.png" alt="">-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Contenido de la tarjeta &ndash;&gt;-->
<!--                            &lt;!&ndash;            <img class="w-full" src="imagen.jpg" alt="Imagen">&ndash;&gt;-->
<!--                            <div class="px-6 py-4 flex justify-center">-->
<!--                                <p class="text-gray-700 text-base">-->
<!--                                    Configuración.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--&lt;!&ndash;                    </Link>&ndash;&gt;-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                <div class="flex justify-start">
                    <div class="max-w-6xl mx-auto">
                        <div class="w-full sm:w-2/3 lg:w-1/12 xl:w-11/12 h-48 sm:h-2/3 lg:h-1/2 xl:h-1/2" @click="dialog_form = !dialog_form">
                            <!--                        <Link :href="route('config.main')" as="button">-->
                            <div class="max-w-full rounded overflow-hidden shadow-lg relative transition-transform transform hover:scale-105 hover:bg-red-500 hover:ring-red-500">
                                <div class="flex items-center justify-center">
                                    <!-- Imagen centrada y grande -->
                                    <img src="/storage/img/add_img.png" alt="">
                                </div>
                                <!-- Contenido de la tarjeta -->
                                <!--            <img class="w-full" src="imagen.jpg" alt="Imagen">-->
                                <div class="px-6 py-4 flex justify-center">
                                    <p class="text-gray-700 text-base">
                                        Crear empresa.
                                    </p>
                                </div>
                            </div>
                            <!--                        </Link>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <CrearEmpresa :show="dialog_form"></CrearEmpresa>
    </AuthenticatedLayout>
</template>

<style scoped>
.boton-volver {
    padding: 10px 20px;
    border-radius: 100px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

.boton-volver:hover {
    background-color: red;
}
</style>
