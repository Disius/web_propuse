<script setup>
import ApplicationLogoGuest from "@/Components/ApplicationLogoGuest.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from '@inertiajs/vue3'
import {ref} from "vue";
import FormularioEmpresa from "@/Components/forms/empresa/FormularioEmpresa.vue";
import CustomSnackbar from "@/Components/CustomSnackbar.vue";

const openFormEmpresa = ref(false)
const snackbar = ref(false)
const messege = ref("")
const timeout = ref()
const color = ref("")

const props = defineProps({
    errors: Object,
    empresa: Array
})
const snackSuccess = () => {
    messege.value = "¡Operación completada con éxito!"
    timeout.value = 5000
    color.value = 'success'
    snackbar.value = true
    setTimeout(() => {
        snackbar.value = false
    }, timeout.value)
}
const snackError = () => {
    messege.value = 'Ops, algo salió mal. Por favor, inténtalo nuevamente.'
    timeout.value = 5000
    color.value = 'error'
    snackbar.value = true
    setTimeout(() => {
        snackbar.value = false
    }, timeout.value)
}

function submitEmpresa(form){
    if (!props.empresa){
        form.post(route('create.empresa'), {
            onSuccess: () => {
                openFormEmpresa.value = false
                snackSuccess()

            }, onError: () => {
                openFormEmpresa.value = false
                snackError()
            }
        })
    }else {
        form.post(route('update.empresa', props.empresa[0].id), {
            onSuccess: () => {
                openFormEmpresa.value = false
                snackSuccess()
            }, onError: () => {
                messege.value = props.errors[0]
                snackError()
            }
        })
    }
}
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="boton-volver">
                <i class="material-icons">arrow_back</i>
            </Link>
        </template>
       <div :class="{ 'filter blur-sm': openFormEmpresa }">
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
                                           Crear datos de la empresa.
                                       </p>
                                   </div>
                                   <FormularioEmpresa :empresa="props.empresa" :show="openFormEmpresa" @update:show="openFormEmpresa = $event" @form:empresa="submitEmpresa"></FormularioEmpresa>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <CustomSnackbar v-model="snackbar" :message="messege" :color="color" @update:show="snackbar = $event"/>
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

.blur-sm {
    filter: blur(4px); /* Ajusta el valor según sea necesario */
    transition: filter 0.5s ease-out;
}
</style>
