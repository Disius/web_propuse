<script setup>

import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    show: Boolean
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
</script>

<template>
    <teleport to="body">
        <div v-if="show" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
          <div class="bg-white p-8 rounded-md shadow-lg w-full md:w-9/12">
              <form @submit.prevent="submit">
                  <!-- Campos del formulario -->
                  <!-- ... -->
                  <InputLabel for="quienes" value="Ingresar Quienes somos" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.quienesSomos"
                      autofocus
                      required
                  />

                  <InputLabel for="mision" value="Ingresar la misión" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.mision"
                      autofocus
                      required
                  />
                  <InputLabel for="vision" value="Ingresar visión" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.vision"
                      autofocus
                      required
                  />
                  <InputLabel for="valores" value="Ingresar valores" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.valores"
                      autofocus
                      required
                  />
                  <InputLabel for="historia" value="Ingresar la historia" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.historia"
                      autofocus
                      required
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

</style>
