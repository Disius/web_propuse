<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import InfoModal from "@/Components/InfoModal.vue";
import {da} from "vuetify/locale";

const props = defineProps({
    empresa: Array,
});

const menu = ref(false)
const dialogo = ref(false)
const HoverItem = ref("")
const year = computed(() => {
    let date = new Date();
    return date.getFullYear()
})
const toggleMenu = () => {
    menu.value = true
}
const handlerHoverItem = (item) => {
    HoverItem.value = item;
    // console.log(`Se ha hover sobre: ${item}`);
};
const resetHoverItem = () => {
    HoverItem.value = '';
};
const closeOnEscape = (e) => {
    menu.value = false
};

const formatValue = (text) => {
    const valuesArray = text.split('·')
    return valuesArray.join("<br>· ")
}

watch(
    () => menu.value,
    () => {
        if (menu.value) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = null;
        }
    }
);
onMounted(() => document.addEventListener('click', closeOnEscape));
onUnmounted(() => {
    document.removeEventListener('click', closeOnEscape);
    document.body.style.overflow = null;
});
</script>

<template>
    <div>
        <div class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-6 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <Link :href="route('main')">
                        <ApplicationLogo
                            class="block h-16 w-32 fill-current text-gray-800 mb-5"
                        />
                    </Link>
                    <div class="container mx-auto px-6">
                        <nav class="flex items-center justify-between space-x-4">
                            <div class="relative text-left inline-flex flex-col">
                                <button
                                    class="text-red-600 hover:text-gray-900 transition duration-300 text-lg"
                                    @mouseover="toggleMenu"
                                >
                                    CONOCENOS
                                </button>
                                <div v-if="menu" class="absolute mt-8 w-96 bg-white border-t border-gray-300 z-20">
                                    <a @mouseover="handlerHoverItem('quienesSomos')" @mouseleave="resetHoverItem" @click="dialogo = true" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">¿QUIENES SOMOS?</a>
                                    <a @mouseover="handlerHoverItem('misionVision')" @mouseleave="resetHoverItem" @click="dialogo = true" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">MISIÓN Y VISIÓN</a>
                                    <a @mouseover="handlerHoverItem('historia')" @mouseleave="resetHoverItem" @click="dialogo = true" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">NUESTRA HISTORIA</a>
                                    <a @mouseover="handlerHoverItem('valores')" @mouseleave="resetHoverItem" @click="dialogo = true" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">VALORES</a>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRAS EMPRESAS</button>
                            <button class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRO EQUIPO DE TRABAJO</button>
                            <button class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">CONTÁCTANOS</button>
                        </nav>
                    </div>
                </div>
                <div>
                    <Link :href="route('login')" as="button">
                        <button class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>
                    </Link>
                </div>
            </div>
        </div>
        <div class="relative h-screen bg-cover bg-center w-full" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">
            <div class="container mx-auto flex items-center justify-center h-full">
                <div style="background-image: url('/storage/img/LOGOENBLANCO.png');" class="w-96 h-96 bg-contain bg-no-repeat">

                </div>
                    <main class="mt-8">
                    <InfoModal :show="dialogo" @close="dialogo = false">
                        <div class="flex justify-center items-center">
                            <div class="p-4 text-justify font-semibold text-lg text-gray-800">
                                <template v-if="HoverItem === 'quienesSomos'">
                                    {{props.empresa[0].quienesSomos}}
                                </template>
                                <template v-if="HoverItem === 'misionVision'">
                                    <div class="flex justify-center items-center mt-2">
                                        Misión
                                    </div>
                                    {{props.empresa[0].mision}}
                                    <div class="flex justify-center items-center mt-4">
                                        Vision
                                    </div>
                                    <div class="text-justify">
                                        {{props.empresa[0].vision}}
                                    </div>
                                </template>
                                <template v-if="HoverItem === 'historia'">
                                    <div class="text-justify">
                                        {{props.empresa[0].historia}}
                                    </div>
                                </template>
                                <template v-if="HoverItem === 'valores'">
                                    <div class="text-justify" v-html="formatValue(props.empresa[0].valores)"></div>
                                </template>
                            </div>
                        </div>
                    </InfoModal>
                </main>
            </div>
        </div>

        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
