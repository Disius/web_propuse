<script setup>

import {onBeforeUnmount, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";

const props = defineProps({
    show: Boolean,
    items: Array,
    closeable: {
        type: Boolean,
        default: true,
    }
})
watch(
    () => props.show,
    () => {
        if (props.show) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = null;
        }
    }
);
const hoverItem = ref('');
const emit = defineEmits(['hover-item', 'close']);

const emitHoverEvent = (item) => {
    hoverItem.value = item;
    emit('hover-item', item);
};

const resetHoverItem = () => {
    hoverItem.value = '';
};
watchEffect(() => {
    if (props.show) {
        const handleDocumentClick = (event) => {
            if (!event.target.closest('[data-menu]')) {
                emit('close');
            }
        };

        document.addEventListener('click', handleDocumentClick);
    }
});
onBeforeUnmount(() => {
    document.removeEventListener('click', handleDocumentClick);
});
</script>

<template>
    <v-menu v-model="props.show" open-on-hover transition="slide-y-transition" location="bottom">
        <v-list>
            <v-list-item @mouseover="emitHoverEvent('quienesSomos')" @mouseleave="resetHoverItem">
                <v-list-item-title :class="{ 'bg-red-500': hoverItem === 'quienesSomos', 'text-white': hoverItem === 'quienesSomos' }">
                    ¿QUIENES SOMOS?
                </v-list-item-title>
            </v-list-item>
            <v-list-item @mouseover="emitHoverEvent('misionVision')" @mouseleave="resetHoverItem">
                <v-list-item-title :class="{ 'bg-red-500': hoverItem === 'misionVision', 'text-white': hoverItem === 'quienesSomos' } ">
                    MISIÓN Y VISIÓN
                </v-list-item-title>
            </v-list-item>
            <v-list-item @mouseover="emitHoverEvent('nuestraHistoria')" @mouseleave="resetHoverItem">
                <v-list-item-title :class="{ 'bg-red-500': hoverItem === 'nuestraHistoria', 'text-white': hoverItem === 'quienesSomos' } ">
                    NUESTRA HISTORIA
                </v-list-item-title>
            </v-list-item>
            <v-list-item @mouseover="emitHoverEvent('valores')" @mouseleave="resetHoverItem">
                <v-list-item-title :class="{ 'bg-red-500': hoverItem === 'valores', 'text-white': hoverItem === 'quienesSomos' } ">
                    VALORES
                </v-list-item-title>
            </v-list-item>
            <!-- Agrega más elementos según tus necesidades -->
        </v-list>
    </v-menu>
</template>

<style scoped>
.menu-position {
    top: 50px; /* Ajusta la posición superior según sea necesario */
    right: 0; /* Ajusta la posición derecha según sea necesario */
}
</style>
