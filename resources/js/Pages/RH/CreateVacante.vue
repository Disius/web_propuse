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
import TextInputNumber from "@/Components/TextInputNumber.vue";


const form = useForm({
    cargo: "",
    cargo_complemento: "",
    area: null,
    descripcion_tareas: "",
    estado: null,
    cuidad: null,
    codigo_postal: 0,
    jornada: "",
    lugar_trabajo: "",
    tipo_contrato: "",
    salario: null,
    experiencia: "",
    edad_minima: 0,
    edad_maxima: 0,
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
        { etiqueta: '+1 año', valor: 'mas de un año' }
]
const jornada = [
        { etiqueta: 'Por turnos', valor: 'turnos' },
        { etiqueta: 'Medio tiempo', valor: 'medio' },
        { etiqueta: 'Tiempo completo', valor: 'completa' }
]
const contrato = [
        { etiqueta: '3 Meses', valor: '3 meses' },
        { etiqueta: 'Indefinido', valor: 'indefinido' },
]
const escuela = [
        { etiqueta: 'Preparatoria', valor: 'prepa' },
        { etiqueta: 'Licenciatura', valor: 'licenciatura' },
        { etiqueta: 'Mestria', valor: 'maestria' },
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
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-4xl hover:brightness-100">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-5">
                        <div class="flex justify-center items-center">
                            <div>
                                <InputLabel for="cargo" value="Cargo" />

                                <TextInput
                                    id="cargo"
                                    type="text"
                                    class="mt-1 block w-80"
                                    v-model="form.cargo"
                                    required
                                    autofocus
                                    placeholder="Ej Enfermera, Arquitecto, Contador, Ingeniero"
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div>
                                <InputLabel for="complemento" value="Complemento al titulo" />

                                <TextInput
                                    id="complemento_cargo"
                                    type="text"
                                    class="mt-1 block w-80"
                                    v-model="form.cargo_complemento"
                                    required
                                    autofocus
                                    placeholder="Ej Turno de noche, con experiencia"
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div>
                                <InputLabel for="titulo_oferta" value="Titulo de la oferta" />

                                <TextInput
                                    id="oferta_titulo"
                                    type="text"
                                    class="mt-1 block w-80"
                                    v-model="titulo"
                                    required
                                    autofocus
                                    placeholder=""
                                    disabled
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8">
                        <div class="w-full max-w-md">
                            <InputLabel for="area" value="Área" />

                            <v-select v-model="form.area" variant="solo" :items="area" item-title="title" item-value="value" :select-props="{ menuProps: 'max-height: 200px; overflow-y: auto;', class: 'w-full' }"></v-select>

                            <InputError class="mt-2" />
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-center mt-7">
                            <div class="grid grid-cols-2">
                                <InputLabel for="tareas" value="Descripción de tareas" class="mt-3"/>
                                <div class="flex justify-start ml-5">
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
                            </div>
                        </div>
                        <div class="flex justify-center ma-5">
                            <TextArea
                                id="name"
                                type="text"
                                class="mt-1 block w-96"
                                v-model="form.descripcion_tareas"
                                autofocus
                                required
                                :rows="4"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-5">
                        <div class="flex justify-center mt-10">
                            <div>
                                <InputLabel for="estados" value="Estado" />

                                <v-select v-model="form.estado" variant="solo" :items="estados" item-title="nombre" item-value="nombre" class="w-96"></v-select>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-center mt-10">
                            <div>
                                <InputLabel for="municipios" value="Municipio" />

                                <v-select v-model="form.cuidad" variant="solo" :items="municipio_seleccionado" item-title="id" item-value="name" class="w-96"></v-select>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-10 ma-10">
                        <div>
                            <InputLabel for="codigo_postal" value="Codigo postal" />

                            <TextInputNumber
                                id="postal"
                                type="text"
                                class="mt-1 block w-96"
                                v-model="form.codigo_postal"
                                required
                                autofocus
                            />

                            <InputError class="mt-2"  />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 mt-8">
                        <div class="flex justify-center">
                            <div>
                                <InputLabel for="jornada" value="Jornada" />

                                <div class="grid grid-cols-3">
                                    <v-checkbox
                                        v-for="(j, i) in jornada" :key="i" :value="j.etiqueta" :title="j.etiqueta"
                                        v-model="form.jornada" :label="j.etiqueta"
                                    >

                                    </v-checkbox>
                                </div>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
<!--                    Contrato por 3 meses y el contrato indefinido -->
<!--                    <div class="grid grid-cols-1 md:grid-cols-2 mt-5">-->
                        <div class="flex justify-center">
                            <div>
                                <InputLabel for="contrato" value="Tipo de contrato" />

<!--                                <div class="grid grid-cols-3">-->
                                    <v-select
                                        class="w-96" variant="solo"
                                        :items="contrato" item-value="valor" item-title="etiqueta"
                                    >

                                    </v-select>
<!--                                </div>-->

                                <InputError class="mt-2"  />
                            </div>
                        </div>
<!--                    </div>-->
                    <div class="grid grid-cols-1">
                        <div class="flex justify-center mt-5">
                            <div>
                                <InputLabel for="experiencia" value="Nivel de experiencia" />

                                <div class="grid grid-cols-2 md:grid-cols-3">
                                    <v-checkbox
                                        v-for="(e, i) in nivelesExperiencia" :key="i" :value="e.etiqueta" :title="e.etiqueta"
                                        v-model="form.experiencia" :label="e.etiqueta"
                                    >

                                    </v-checkbox>
                                </div>

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="flex justify-start mt-10 ml-10">
                            <div>
                                <InputLabel for="edad_minima" value="Edad minima" />

                                <TextInputNumber
                                    id="minima_edad"
                                    type="text"
                                    class="mt-1 block w-48"
                                    v-model="form.edad_minima"
                                    required
                                    autofocus
                                />

                                <InputError class="mt-2"  />
                            </div>
                        </div>
                        <div class="flex justify-start mt-10 ml-10">
                            <div>
                                <InputLabel for="edad_maxima" value="Edad maxima" />

                                <TextInputNumber
                                    id="maxima_edad"
                                    type="text"
                                    class="mt-1 block w-48"
                                    v-model="form.edad_maxima"
                                    required
                                    autofocus
                                />

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
