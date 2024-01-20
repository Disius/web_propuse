<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
const props = defineProps({
    empresa: Array,
});

const menu = ref(false)
const dialogo = ref(false)
const HoverItem = ref("")
const currentTab = ref(null)
const isVisible = ref(false)
const showingNavigationDropdown = ref(false);

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
        <div class="min-h-screen bg-gray-100">
            <div class="bg-white shadow-md">
                <div class="container mx-auto px-4 py-1 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <Link :href="route('main')">
                            <ApplicationLogo
                                class="block h-16 w-32 fill-current text-gray-800 mb-5"
                            />
                        </Link>
                        <div class="container mx-auto px-6">
                            <nav class="flex items-center justify-between space-x-4">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-5 sm:flex">
<!--                                    <div class="relative text-left inline-flex flex-col">-->
                                        <button
                                            class="text-red-600 hover:text-gray-900 transition duration-300 text-lg"
                                            @mouseover="toggleMenu" @click="toggleMenu"
                                        >
                                            CONOCENOS
                                        </button>
                                        <div v-if="menu" class="absolute mt-8 w-96 bg-white border-t border-gray-300 z-20">
                                            <Link :href="route('quienes.somos')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">¿QUIENES SOMOS?</Link>
                                            <Link :href="route('mision.vision')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">MISIÓN Y VISIÓN</Link>
                                            <Link :href="route('nuestra.historia')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">NUESTRA HISTORIA</Link>
                                            <Link :href="route('nuestros.valores')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">VALORES</Link>
                                        </div>
<!--                                    </div>-->
                                    <Link :href="route('index.empresas')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRAS EMPRESAS</Link>
                                    <Link :href="route('equipo.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">NUESTRO EQUIPO</Link>
                                    <Link :href="route('bolsa.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">BOLSA DE TRABAJO</Link>
                                    <Link :href="route('informacion.contacto')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">CONTÁCTANOS</Link>
                                </div>
                                <div class="ml-16 pl-16 flex items-center sm:hidden">
                                    <button
                                        @click="showingNavigationDropdown = !showingNavigationDropdown"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                    >
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path
                                                :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16"
                                            />
                                            <path
                                                :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            />
                                        </svg>
                                    </button>
                                </div>
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
<!--                    <div style="background-image: url('/storage/img/LOGOENBLANCO.png'); background-size: contain; background-position: center center;" class="w-4/5 h-4/5 bg-contain bg-no-repeat flex items-center justify-center">-->

<!--                    </div>-->
                    <main class="">
                        <slot/>
                    </main>
                </div>
            </div>

            <footer class="bg-gray-900 text-white py-6">
                <div class="container mx-auto text-center">
                    <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>
</template>

<style scoped>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

.page-container {
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

main {
    flex: 1; /* Esto hace que el main ocupe el espacio disponible */
}
</style>
