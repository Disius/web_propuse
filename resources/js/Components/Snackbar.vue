<script setup>
import {ref, watch} from "vue";

const props = defineProps({
    show: Boolean,
    mensaje: String
})
const emit = defineEmits([
    'update:show'
])

const esVisible = ref(false)
const message = ref("")

function shootSnackbar(msg){
    message.value = msg
    esVisible.value = true
    setTimeout(() => {
        esVisible.value = false
    }, 5000)
}

function hideSnackbar(){
    emit('update:show', false)
}

watch(() => props.mensaje, (newValor) => {
    if (newValor){
        shootSnackbar(newValor)
    }
})
</script>

<template>
    <div class="fixed bottom-4 left-4 bg-screen-500 text-white p-4 rounded-md shadow-md">
        <span>{{mensaje}}</span>
        <button class="ml-2 focus:outline-none" @click="hideSnackbar">Cerrar</button>
    </div>
</template>

<style scoped>

</style>
