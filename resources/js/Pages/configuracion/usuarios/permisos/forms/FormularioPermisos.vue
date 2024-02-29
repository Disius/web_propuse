<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
import TextArea from "@/Components/TextArea.vue";

const props = defineProps({
    show: Boolean,
})

const emit = defineEmits([
    'update:show',
    'form:permiso'
])
const form = useForm({
    permiso: ""
})

function submit(){
    emit('form:permiso', form)
}


onMounted(() => {

})
</script>

<template>
    <teleport to="body">
        <div v-if="show" class="fixed inset-0 flex items-center justify-center bg-opacity-50" scroll-region>
          <div class="bg-white p-8 rounded-md shadow-lg w-full md:w-9/12 form-container">
              <form @submit.prevent="submit">
                  <InputLabel for="permiso" value="Nombre del permiso" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full mb-5"
                      v-model="form.permiso"
                      autofocus
                      required
                  />
                  <div class="flex justify-end mt-2">
                      <button @click="emit('update:show', false)" type="button" class="px-4 py-2 mr-2 text-white bg-gray-500 rounded-md">Cancelar</button>
                      <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md">Guardar</button>
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
