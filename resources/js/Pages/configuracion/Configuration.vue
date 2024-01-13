<script setup>
import ApplicationLogoGuest from "@/Components/ApplicationLogoGuest.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from '@inertiajs/vue3'
import {ref} from "vue";
import FormularioEmpresa from "@/Components/forms/empresa/FormularioEmpresa.vue";
import Snackbar from "@/Components/Snackbar.vue";
// import CrearEmpresa from "@/Components/formularios/empresa/CrearEmpresa.vue";

const openFormEmpresa = ref(false)
const snackbar = ref(false)
const messege = ref("")
const arr = 4
const props = defineProps({
    errors: Object
})
// const dialog_form = ref(false)

function submitEmpresa(form){
    form.post(route('create.empresa'), {
        onSuccess: () => {
            console.log("Guardado")
            openFormEmpresa.value = false
            messege.value = "El recurso se creo con exito"
            snackbar.value = true
        }, onError: () => {
            console.log('Error')
            messege.value = props.errors[0]
            snackbar.value = true
        }
    })
}
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="boton-volver">
                <i class="material-icons">arrow_back</i>
            </Link>
        </template>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
<!--            <div v-for="i in arr" :key="i">-->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                    <div class="flex justify-start">
                        <div class="max-w-6xl mx-auto">
                            <div class="w-full sm:w-2/3 lg:w-1/12 xl:w-11/12 h-48 sm:h-2/3 lg:h-1/2 xl:h-1/2" @click="openFormEmpresa = !openFormEmpresa">
                                <!--                        <Link :href="route('config.main')" as="button">-->
                                <div class="max-w-full rounded overflow-hidden shadow-lg relative transition-transform transform hover:scale-105 hover:bg-red-500 hover:ring-red-500">
                                    <div class="flex items-center justify-center">
                                        <img src="/storage/img/add_img.png" alt="">
                                    </div>

                                    <div class="px-6 py-4 flex justify-center">
                                        <p class="text-gray-700 text-base">
                                            Crear empresa.
                                        </p>
                                    </div>
                                    <FormularioEmpresa :show="openFormEmpresa" @update:show="openFormEmpresa = $event" @form:empresa="submitEmpresa"></FormularioEmpresa>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--            </div>-->
<!--            <Snackbar :show="snackbar" :mensaje="messege" @update:show="snackbar = $event"></Snackbar>-->
        </div>
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
