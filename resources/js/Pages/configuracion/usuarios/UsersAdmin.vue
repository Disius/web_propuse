<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Link, router} from "@inertiajs/vue3";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    usuarios: Array
})

const headers = [
    {key: 'name', title: "Nombre"},
    {key: 'email', title: "Correo electronico"},
    {key: 'actions', title: "Acciones"},
]
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="rounded-full h-12 w-12">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>
        <div class="container mx-auto mt-8">
            <div class="flex justify-center mb-4 text-center text-4xl">Usuarios, roles y permisos</div>
            <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg sm:ml-8 lg:ml-6 ml-16">
                    <v-data-table
                    :items="props.usuarios" :headers="headers"
                    fixed-header
                    next-icon="mdi-arrow-right-bold-circle"
                    prev-icon="mdi-arrow-left-bold-circle"
                    items-per-page="5"
                    items-per-page-text="Paginas"
                    >
                        <template v-slot:no-data>
                            <v-alert :value="true" color="warning">
                                <v-icon left color="white">warning</v-icon>
                                No se encontraron datos
                            </v-alert>
                        </template>
                        <template v-slot:item.actions="item">
                            <secondary-button>
                                <i class="mdi mdi-pencil mdi-24px"></i>
                            </secondary-button>
                        </template>
                    </v-data-table>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1">
                        <div class="flex justify-center items-center mb-5 sm:mt-5 md:mt-5">
                            <PrimaryButton class="">
                                <div class="flex justify-center">
                                    Roles de usuarios
                                </div>
                            </PrimaryButton>
                        </div>
                        <div class="flex justify-center items-center mb-5 sm:mt-5 md:mb-5">
                            <Link :href="route('permisos.all')" as="button">
                                <PrimaryButton>Permisos de usuarios</PrimaryButton>
                            </Link>
                        </div>
                    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
