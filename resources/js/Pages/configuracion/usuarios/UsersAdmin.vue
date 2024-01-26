<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Link, router} from "@inertiajs/vue3";

const props = defineProps({
    usuarios: Array
})

</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="rounded-full h-12 w-12">
                <i class="material-icons">arrow_back</i>
            </Link>
        </template>
        <div class="container mx-auto mt-8">
            <div class="flex justify-center mb-4 text-center text-4xl">Usuarios, roles y permisos</div>
            <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg sm:ml-8 lg:ml-6 ml-16">
                    <table class="table-fixed border-separate border-spacing-10">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in usuarios" :key="user.id">
                                <td >
                                    <template v-if="user.name !== null">
                                        {{ user.name }}
                                    </template>
                                    <template v-if="user.name === null">
                                        SIN ASIGNAR
                                    </template>
                                </td>
                                <td >{{ user.email }}</td>
                                <td class="">
                                    <PrimaryButton>
                                        <li class="material-symbols-outlined flex items-center space-x-2">
                                        <span class="material-icons">edit</span>

                                        </li>
                                    </PrimaryButton>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
