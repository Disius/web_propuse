<script setup>
import {ref, watch} from "vue";

const props = defineProps({
    show: Boolean,
    message: String,
    color: String,
})
const emit = defineEmits([
    'update:show'
])

const esVisible = ref(false)

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

</script>

<template>
    <v-snackbar
        v-model="props.show"
        vertical
        :color="props.color"
    >
        <div class="text-subtitle-1 pb-2">{{props.message}}</div>

        <template v-slot:actions>
            <v-btn
                variant="text"
                @click="hideSnackbar"
            >
                Cerrar
            </v-btn>
        </template>
    </v-snackbar>
</template>

<style scoped>

</style>
