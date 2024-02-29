<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {ref} from "vue";
import FormularioPermisos from "@/Pages/configuracion/usuarios/permisos/forms/FormularioPermisos.vue";

const openFormCreate = ref(false)
const show = ref(false)

const submit = (form) => {
    form.post(route('create.permiso'), {
        onSuccess: () => {
            form.reset()
        },
        onError: () => {
            console.log('Error')
        }
    })
}
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('users.view')" as="button" class="boton-volver">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>
        <div :class="{ 'filter blur-md': openFormCreate }">
            <div class="container mx-auto mt-8">
                <div class="flex justify-center mb-4 text-center text-4xl">Permisos</div>
                <div class="flex justify-start items-center mb-5 sm:mt-5 md:mt-5">
                    <PrimaryButton class="" @click="show = true">
                        <div class="flex justify-center">
                            Crear permiso
                        </div>
                    </PrimaryButton>
                </div>
                <FormularioPermisos :show="show" @update:show="show = $event" @form:permiso="submit">

                </FormularioPermisos>
                <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg sm:ml-8 lg:ml-6 ml-16">
                        <!--                    <v-data-table-->
                        <!--                        :items="props.usuarios" :headers="headers"-->
                        <!--                        fixed-header-->
                        <!--                        next-icon="mdi-arrow-right-bold-circle"-->
                        <!--                        prev-icon="mdi-arrow-left-bold-circle"-->
                        <!--                        items-per-page="5"-->
                        <!--                        items-per-page-text="Paginas"-->
                        <!--                    >-->
                        <!--                        <template v-slot:no-data>-->
                        <!--                            <v-alert :value="true" color="warning">-->
                        <!--                                <v-icon left color="white">warning</v-icon>-->
                        <!--                                No se encontraron datos-->
                        <!--                            </v-alert>-->
                        <!--                        </template>-->
                        <!--                        <template v-slot:item.actions="item">-->
                        <!--                            <secondary-button>-->
                        <!--                                <i class="mdi mdi-pencil mdi-24px"></i>-->
                        <!--                            </secondary-button>-->
                        <!--                        </template>-->
                        <!--                    </v-data-table>-->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
