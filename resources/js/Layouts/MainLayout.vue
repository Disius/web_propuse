<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import LogoNaercris from "@/Components/LogoNaercris.vue";
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
            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-28">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('main')">
                                    <LogoNaercris
                                        class="mt-2 block h-32 w-32 fill-current text-gray-800 scale-50 "
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 lg:flex">
                                <button
                                    class="text-red-600 hover:text-gray-900 transition duration-300 text-lg"
                                    @mouseover="toggleMenu" @click="toggleMenu"
                                >
                                    CONOCENOS
                                </button>
                                <div v-if="menu" class="absolute mt-16 w-96 bg-white border-t border-gray-300 z-20">
<!--                                    <Link :href="route('quienes.somos')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">¿QUIENES SOMOS?</Link>-->
                                    <Link :href="route('mision.vision')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">MISIÓN Y VISIÓN</Link>
                                    <Link :href="route('nuestra.historia')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">NUESTRA HISTORIA</Link>
<!--                                    <Link :href="route('nuestros.valores')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">VALORES</Link>-->
                                </div>
                                <Link :href="route('index.empresas')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">EMPRESAS</Link>
                                <Link :href="route('equipo.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">NUESTRO EQUIPO</Link>
                                <Link :href="route('bolsa.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">BOLSA DE TRABAJO</Link>
                                <Link :href="route('informacion.contacto')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">CONTÁCTANOS</Link>
                            </div>
                        </div>

                        <div class="hidden mt-5 lg:ml-5 lg:flex mt-9">
                            <div>
                                <Link :href="route('login')" as="button">
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-full shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>
                                </Link>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="mr-2 flex items-center lg:hidden">
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
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="lg:hidden"
                >
                    <div class="pt-5 pb-3 space-y-1">
<!--                        :active="route().current('dashboard')"-->
                        <ResponsiveNavLink href="#">
                            Inicio
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Misión y vision
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Nuestra historia
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Empresas
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Nuestro equipo
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Bolsa de trabajo
                        </ResponsiveNavLink>
                        <ResponsiveNavLink href="#">
                            Contacto
                        </ResponsiveNavLink>

                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">

                            </div>
                            <div class="font-medium text-sm text-gray-500"></div>
                        </div>

                        <div class="mt-3 space-y-1">

                        </div>
                    </div>
                </div>

            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow w-full pt-16" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

<!--             Page Content -->
            <main class="">
                <slot />
            </main>
<!--            <div class="relative h-screen bg-cover bg-center w-full h-full mt-12" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">-->
<!--                <div class="container mx-auto flex items-center justify-center h-full">-->
<!--                    <main class="">-->
<!--                        <slot/>-->
<!--                    </main>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="relative bg-cover bg-center w-full h-screen mt-12" style="background-image: linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)), url('/storage/img/FONDODEIMAGEN.png');">-->
<!--                <div class="absolute inset-0">-->
<!--                    <div class="container mx-auto flex items-center justify-center h-full">-->
<!--                        <main>-->
<!--                            <slot/>-->
<!--                        </main>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="relative bg-cover bg-center w-full min-h-screen" style="background-image: linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)), url('/storage/img/FONDODEIMAGEN.png');">-->
<!--                <div class="container mx-auto flex items-center justify-center pt-12 pb-40">-->
<!--                    <main>-->
<!--                        <slot/>-->
<!--                    </main>-->
<!--                </div>-->
<!--            </div>-->

            <footer class="bg-gray-900 text-white py-6 relative bottom-0 w-full py-16">
                <div class="container mx-auto text-center">
                    <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
                </div>
            </footer>
<!--bg-gray-900 text-white py-6 absolute -bottom-12 w-full-->
<!--            <footer class="bg-gray-900 text-white py-6">-->
<!--               <div class="container mx-auto text-center ma-5">-->
<!--                  <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>-->
<!--               </div>-->
<!--            </footer>-->
<!--            <footer class="bg-gray-900 text-white py-6 relative bottom-0 w-full">-->
<!--                <div class="container mx-auto text-center ma-5">-->
<!--                    <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>-->
<!--                </div>-->
<!--            </footer>-->
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
