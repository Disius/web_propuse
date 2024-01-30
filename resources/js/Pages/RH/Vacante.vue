<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavLink from "@/Components/NavLink.vue";



</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="rounded-full h-12 w-12">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>

        <div class="py-12">
            <div class="container mx-auto mt-8">
                <div class="flex justify-center mb-4 text-center text-4xl">Vacantes</div>
                <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <!--                        <v-data-table-->
                            <!--                            :items="props.usuarios" :headers="headers"-->
                            <!--                            fixed-header-->
                            <!--                            next-icon="mdi-arrow-right-bold-circle"-->
                            <!--                            prev-icon="mdi-arrow-left-bold-circle"-->
                            <!--                            items-per-page="5"-->
                            <!--                            items-per-page-text="Paginas"-->
                            <!--                        >-->
                            <!--                            <template v-slot:no-data>-->
                            <!--                                <v-alert :value="true" color="warning">-->
                            <!--                                    <v-icon left color="white">warning</v-icon>-->
                            <!--                                    No se encontraron datos-->
                            <!--                                </v-alert>-->
                            <!--                            </template>-->
                            <!--                            <template v-slot:item.actions="item">-->
                            <!--                                <secondary-button>-->
                            <!--                                    <i class="mdi mdi-pencil mdi-24px"></i>-->
                            <!--                                </secondary-button>-->
                            <!--                            </template>-->
                            <!--                        </v-data-table>-->
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1">
                        <div class="flex justify-center items-center mb-5 sm:mt-5 md:mt-5">
                            <NavLink :href="route('vacante.create')" as="button">
                                <SecondaryButton class="">
                                    <div class="flex justify-center">
                                        Crear Vacante
                                    </div>
                                </SecondaryButton>
                            </NavLink>
                        </div>
<!--                        <div class="flex justify-center items-center mb-5 sm:mt-5 md:mb-5">-->
<!--                            <Link :href="route('permisos.all')" as="button">-->
<!--                                <SecondaryButton>Permisos de usuarios</SecondaryButton>-->
<!--                            </Link>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
