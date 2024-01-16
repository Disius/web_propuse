<script setup>

import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
import TextArea from "@/Components/TextArea.vue";

const props = defineProps({
    show: Boolean,
    empresa: Array,
})

const emit = defineEmits([
    'update:show',
    'form:empresa'
])
const form = useForm({
    quienesSomos: "",
    mision: "",
    vision: "",
    valores: "",
    historia: "",
})

function submit(){
    emit('form:empresa', form)
}


onMounted(() => {
    props.empresa[0].quienesSomos !== null ? form.quienesSomos = props.empresa[0].quienesSomos : form.quienesSomos
    props.empresa[0].mision !== null ? form.mision = props.empresa[0].mision : form.mision
    props.empresa[0].vision !== null ? form.vision = props.empresa[0].vision : form.vision
    props.empresa[0].valores !== null ? form.valores = props.empresa[0].valores : form.valores
    props.empresa[0].historia !== null ? form.historia = props.empresa[0].historia : form.vision
})
</script>

<template>
    <teleport to="body">
        <div v-if="show" class="fixed inset-0 flex items-center justify-center bg-opacity-50" scroll-region>
          <div class="bg-white p-8 rounded-md shadow-lg w-full md:w-9/12 form-container">
              <form @submit.prevent="submit">
                  <!-- Campos del formulario -->
                  <!-- ... -->
                  <InputLabel for="quienes" value="Ingresar Quienes somos" />
                  <TextArea
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.quienesSomos"
                      autofocus
                      required
                      :rows="4"
                  />

                  <InputLabel for="mision" value="Ingresar la misión" />
                  <TextArea
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.mision"
                      autofocus
                      required
                      :rows="4"
                  />
                  <InputLabel for="vision" value="Ingresar visión" />
                  <TextArea
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.vision"
                      autofocus
                      required
                      :rows="4"
                  />
                  <InputLabel for="valores" value="Ingresar valores" />
                  <TextArea
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.valores"
                      autofocus
                      required
                      :rows="4"
                  />
                  <InputLabel for="historia" value="Ingresar la historia" />
                  <TextArea
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.historia"
                      autofocus
                      required
                      :rows="4"
                  />
                  <!-- Botones del formulario -->
                  <div class="flex justify-end mt-2">
                      <button @click="emit('update:show', false)" type="button" class="px-4 py-2 mr-2 text-white bg-gray-500 rounded-md">Cancelar</button>
                      <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md">Subir</button>
                  </div>
              </form>
          </div>
        </div>
    </teleport>
</template>

<style scoped>
.form-container {
    max-height: 80vh; /* Altura máxima del formulario */
    overflow-y: auto; /* Añadir scroll si el contenido excede la altura máxima */
}
</style>
