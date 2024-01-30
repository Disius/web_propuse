<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
import {computed, onMounted, ref, watch} from "vue";
import estados from '@/estadosMexico/estados.json'
import estados_municipios from '@/estadosMexico/estados-municipios.json'


const form = useForm({
    cargo: "",
    cargo_complemento: "",
    area: null,
    descripcion_tareas: "",
    estado: null,
    cuidad: null,
    codigo_postal: null,
    jornada: "",
    lugar_trabajo: "",
    tipo_contrato: "",
    salario: null,
    experiencia: "",
    edad_minima: null,
    edad_maxima: null,
    escolaridad: null,
    idiomas: "",
    nivel_idioma: "",
    destrezas_conocimientos: "",
    licencia_conducir: null,
    disponibilidad_viajar: null,
    cambio_residencia: null,
    personas_discapacidad: null,
})

const titulo = ref("")
const municipio_seleccionado = ref([])
const area = [
    {value: 1, title: "Administración y Gestión"},
    {value: 2, title: "Ventas"},
    {value: 3, title: "Marketing"},
    {value: 4, title: "Tecnología de la Información (TI)"},
    {value: 5, title: "Ingeniería"},
]
const nivelesExperiencia = [
        { etiqueta: 'Sin experiencia', valor: 'Sin experiencia' },
        { etiqueta: '1 año', valor: '1 año' },
        { etiqueta: '+1 año', valor: 'Mas de un año' }
]


watch([() => form.cargo, () => form.cargo_complemento], ([newCargo, newComplemento]) => {
    titulo.value = newCargo + " " + newComplemento;
});

watch(() => form.estado, (newEstado, oldEstado) => {
    let mayuscula = newEstado.charAt(0).toUpperCase()
    let minuscula = newEstado.slice(1).toLowerCase()
    let estado = mayuscula + minuscula
    municipio_seleccionado.value = estados_municipios[estado]
})

onMounted(() => {
    // console.log(estados_municipios[form.estado])
})
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('vacante.index')" as="button" class="rounded-full h-12 w-12">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="grid grid-cols-3 sm:grid-cols-1 md:grid-cols-3">
                        <div class="flex justify-start">
                            <div>
                                <InputLabel for="cargo" value="Cargo" />

                                <TextInput
                                    id="cargo"
                                    type="text"
                                    class="mt-1 block w-80"
                                    v-model="form.cargo"
                                    required
                                    autofocus
                                    autocomplete="cargo"
                                    placeholder="Ej Enfermera, Arquitecto, Contador, Ingeniero"
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-start">
                            <div>
                                <InputLabel for="complemento" value="Complemento al titulo" />

                                <TextInput
                                    id="complemento_cargo"
                                    type="text"
                                    class="mt-1 block w-80"
                                    v-model="form.cargo_complemento"
                                    required
                                    autofocus
                                    autocomplete="cargo_complemento"
                                    placeholder="Ej Turno de noche, con experiencia"
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-center sm:justify-start md:justify-center">
                            <div>
                                <InputLabel for="titulo" value="Titulo de la oferta" />

                                <TextInput
                                    id="titulo"
                                    type="text"
                                    class="mt-1 block w-96"
                                    v-model="titulo"
                                    required
                                    autofocus
                                    autocomplete="titulo"
                                    disabled
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
<!--                    <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 mt-10">-->
                        <div class="flex justify-center mt-10 w-full">
                            <div>
                                <InputLabel for="area" value="Área" />

                                <v-select v-model="form.area" variant="solo" :items="area" item-title="title" item-value="value" class="w-96"></v-select>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
<!--                    </div>-->
                    <div class="grid grid-cols-3 gap-8">
                        <div>
                            <div class="grid grid-cols-2">
                                <InputLabel for="tareas" value="Descripción de tareas" class="mt-3"/>
                                <div class="mb-3">
                                    <v-tooltip location="right">
                                        <template v-slot:activator="{ props }">
                                            <v-btn icon v-bind="props" color="warning" size="small">
                                                <v-icon>
                                                    mdi-help
                                                </v-icon>
                                            </v-btn>
                                        </template>
                                        <span>NO DEBE AGREGAR ENLACES, LINKS NI NINGUN NÚMERO TELEFONICO</span>
                                    </v-tooltip>
                                </div>
                            </div>
                            <TextArea
                                id="name"
                                type="text"
                                class="mt-1 block w-96 mb-5"
                                v-model="form.descripcion_tareas"
                                autofocus
                                required
                                :rows="4"
                            />
                        </div>
                        <div class="flex justify-start mt-10">
                            <div>
                                <InputLabel for="estados" value="Estado" />

                                <v-select v-model="form.estado" variant="solo" :items="estados" item-title="nombre" item-value="nombre" class="w-96"></v-select>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-start mt-10">
                            <div>
                                <InputLabel for="municipios" value="Municipios" />

                                <v-select v-model="form.cuidad" variant="solo" :items="municipio_seleccionado" item-title="id" item-value="name" class="w-96"></v-select>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
