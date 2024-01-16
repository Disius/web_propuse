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
// watchEffect(() => {
//     if (props.show) {
//         const handleDocumentClick = (event) => {
//             if (!event.target.closest('[data-menu]')) {
//                 emit('close');
//             }
//         };
//
//         document.addEventListener('click', handleDocumentClick);
//     }
// });
// onBeforeUnmount(() => {
//     document.removeEventListener('click', handleDocumentClick);
// });
</script>

<template>
    <div class="container mx-auto px-6">
        <div class="relative text-left inline-flex flex-col">
            <!--         Aqui el el boton para activar el menu   -->
            <div class="absolute w-full mt-12 bg-white border-t border-gray-300">
                <a class="block p-3 border-b border-g"></a>
            </div>
        </div>
    </div>
</template>

<style scoped>
.menu-position {
    top: 50px; /* Ajusta la posición superior según sea necesario */
    right: 0; /* Ajusta la posición derecha según sea necesario */
}
</style>
