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
<!--    <div>-->
    <div class="h-screen flex flex-col">
        <nav class="fixed w-full bg-white py-2 shadow-xl dark:bg-body-dark z-20">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <Link :href="route('main')">
                        <LogoNaercris class="h-24 w-40 fill-current text-gray-800" />
                    </Link>
                </div>

                <!-- Menú para pantallas grandes -->
                <div class="hidden lg:flex flex-grow justify-center lg:justify-end ml-16">
                    <ul class="flex space-x-8">
                        <li>
                            <a
                                class="text-red-600 hover:text-gray-900 transition duration-300 text-lg"
                                :href="route('quienes.somos')"
                            >
                                ¿Quienes somos?
                            </a>
                        </li>
                        <li><a href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">Empresas</a></li>
                        <li><a href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">Nuestro equipo</a></li>
                        <li><a href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">Bolsa de trabajo</a></li>
                        <li><a href="#" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg">Contáctanos</a></li>
                    </ul>
                </div>

                <!-- Menú para pantallas pequeñas -->
                <div class="lg:hidden">
                    <button class="block text-xl text-black hover:text-black/80 focus:text-black/80 active:text-black/80 mr-5" @click="showingNavigationDropdown = !showingNavigationDropdown">
                        <v-icon>mdi-menu</v-icon>
                    </button>
                </div>
            </div>

            <!--         Dropdown para pantallas pequeñas -->
            <div
                :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                class="lg:hidden bg-white"
            >
                <div class="pt-5 pb-3 space-y-1">
                    <!--                        :active="route().current('dashboard')"-->
                    <ResponsiveNavLink :href="route('main')" :active="route().current('main')">
                        Inicio
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('quienes.somos')" :active="route().current('quienes.somos')">
                        ¿Quienes somos?
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('index.empresas')" :active="route().current('index.empresas')">
                        Empresas
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('equipo.trabajo')" :active="route().current('equipo.trabajo')">
                        Nuestro equipo
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('bolsa.trabajo')" :active="route().current('bolsa.trabajo')">
                        Bolsa de trabajo
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('informacion.contacto')" :active="route().current('informacion.contacto')">
                        Contacto
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('login')" :active="route().current('login')">
                        Iniciar Sesión
                    </ResponsiveNavLink>

                </div>
            </div>
        </nav>
<!--        bg-gradient-to-b from-red-950 to-blue-950-->
                    <main class="mt-15 bg-gradient-to-b from-red-950 to-blue-950">
                        <slot />
                    </main>
<!--        <footer class="flex h-54 shadow-lg bg-gray-200">Footer</footer>-->
                    <footer class="bg-gray-900 text-white py-6">
                       <div class="container mx-auto text-center ma-5">
                          <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>
                       </div>
                    </footer>
    </div>
<!--        <div class="min-h-screen bg-gray-100">-->
<!--            <nav class="bg-white dark:bg-gray-900 fixed w-full h-32 z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">-->
<!--                &lt;!&ndash; Primary Navigation Menu &ndash;&gt;-->
<!--                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">-->
<!--                    <div class="flex justify-between h-28">-->
<!--                        <div class="flex">-->
<!--                            &lt;!&ndash; Logo &ndash;&gt;-->
<!--                            <div class="shrink-0 flex items-center">-->
<!--                                <Link :href="route('main')">-->
<!--                                    <LogoNaercris-->
<!--                                        class="mt-2 block h-32 w-32 fill-current text-gray-800 scale-50 "-->
<!--                                    />-->
<!--                                </Link>-->
<!--                            </div>-->

<!--                            &lt;!&ndash; Navigation Links &ndash;&gt;-->
<!--                            <div class="hidden space-x-16 sm:-my-px sm:ml-16 lg:flex">-->
<!--&lt;!&ndash;                                <button&ndash;&gt;-->
<!--&lt;!&ndash;                                    class="text-red-600 hover:text-gray-900 transition duration-300 text-lg"&ndash;&gt;-->
<!--&lt;!&ndash;                                    @mouseover="toggleMenu" @click="toggleMenu"&ndash;&gt;-->
<!--&lt;!&ndash;                                >&ndash;&gt;-->
<!--&lt;!&ndash;                                    CONOCENOS&ndash;&gt;-->
<!--&lt;!&ndash;                                </button>&ndash;&gt;-->
<!--&lt;!&ndash;                                <div v-if="menu" class="absolute mt-16 w-96 bg-white border-t border-gray-300 z-20">&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    <Link :href="route('quienes.somos')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">¿QUIENES SOMOS?</Link>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                                    <Link :href="route('mision.vision')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">MISIÓN Y VISIÓN</Link>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <Link :href="route('nuestra.historia')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">NUESTRA HISTORIA</Link>&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    <Link :href="route('nuestros.valores')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">VALORES</Link>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                                <Link :href="route('main')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">¿Quienes somos?</Link>-->
<!--                                <Link :href="route('index.empresas')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">Empresas</Link>-->
<!--                                <Link :href="route('equipo.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">Nuestro Equipo</Link>-->
<!--                                <Link :href="route('bolsa.trabajo')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">Bolsa de trabajo</Link>-->
<!--                                <Link :href="route('informacion.contacto')" class="text-red-600 hover:text-gray-900 transition duration-300 text-lg" as="button">Contáctanos</Link>-->
<!--                            </div>-->
<!--                        </div>-->

<!--&lt;!&ndash;                        <div class="hidden mt-5 lg:ml-5 lg:flex mt-9">&ndash;&gt;-->
<!--&lt;!&ndash;                            <div>&ndash;&gt;-->
<!--&lt;!&ndash;                                <Link :href="route('login')" as="button">&ndash;&gt;-->
<!--&lt;!&ndash;                                    <button class="bg-red-500 text-white px-4 py-2 rounded-full shadow-md hover:bg-red-500 transition duration-300">INICIAR SESIÓN</button>&ndash;&gt;-->
<!--&lt;!&ndash;                                </Link>&ndash;&gt;-->
<!--&lt;!&ndash;                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                        </div>&ndash;&gt;-->

<!--                        &lt;!&ndash; Hamburger &ndash;&gt;-->
<!--                        <div class="mr-2 flex items-center lg:hidden">-->
<!--                            <button-->
<!--                                @click="showingNavigationDropdown = !showingNavigationDropdown"-->
<!--                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"-->
<!--                            >-->
<!--                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">-->
<!--                                    <path-->
<!--                                        :class="{-->
<!--                                            hidden: showingNavigationDropdown,-->
<!--                                            'inline-flex': !showingNavigationDropdown,-->
<!--                                        }"-->
<!--                                        stroke-linecap="round"-->
<!--                                        stroke-linejoin="round"-->
<!--                                        stroke-width="2"-->
<!--                                        d="M4 6h16M4 12h16M4 18h16"-->
<!--                                    />-->
<!--                                    <path-->
<!--                                        :class="{-->
<!--                                            hidden: !showingNavigationDropdown,-->
<!--                                            'inline-flex': showingNavigationDropdown,-->
<!--                                        }"-->
<!--                                        stroke-linecap="round"-->
<!--                                        stroke-linejoin="round"-->
<!--                                        stroke-width="2"-->
<!--                                        d="M6 18L18 6M6 6l12 12"-->
<!--                                    />-->
<!--                                </svg>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                &lt;!&ndash; Responsive Navigation Menu &ndash;&gt;-->
<!--                <div-->
<!--                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"-->
<!--                    class="lg:hidden bg-white"-->
<!--                >-->
<!--                    <div class="pt-5 pb-3 space-y-1">-->
<!--&lt;!&ndash;                        :active="route().current('dashboard')"&ndash;&gt;-->
<!--                        <ResponsiveNavLink :href="route('main')" :active="route().current('main')">-->
<!--                            Inicio-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('mision.vision')" :active="route().current('mision.vision')">-->
<!--                            Misión y vision-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('nuestra.historia')" :active="route().current('nuestra.historia')">-->
<!--                            Nuestra historia-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('index.empresas')" :active="route().current('index.empresas')">-->
<!--                            Empresas-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('equipo.trabajo')" :active="route().current('equipo.trabajo')">-->
<!--                            Nuestro equipo-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('bolsa.trabajo')" :active="route().current('bolsa.trabajo')">-->
<!--                            Bolsa de trabajo-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('informacion.contacto')" :active="route().current('informacion.contacto')">-->
<!--                            Contacto-->
<!--                        </ResponsiveNavLink>-->
<!--                        <ResponsiveNavLink :href="route('login')" :active="route().current('login')">-->
<!--                            Iniciar Sesión-->
<!--                        </ResponsiveNavLink>-->

<!--                    </div>-->

<!--                    &lt;!&ndash; Responsive Settings Options &ndash;&gt;-->
<!--                    <div class="pt-4 pb-1 border-t border-gray-200">-->
<!--                        <div class="px-4">-->
<!--                            <div class="font-medium text-base text-gray-800">-->

<!--                            </div>-->
<!--                            <div class="font-medium text-sm text-gray-500"></div>-->
<!--                        </div>-->

<!--                        <div class="mt-3 space-y-1">-->

<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </nav>-->

<!--            &lt;!&ndash; Page Heading &ndash;&gt;-->
<!--            <header class="bg-white shadow w-full pt-16" v-if="$slots.header">-->
<!--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">-->
<!--                    <slot name="header" />-->
<!--                </div>-->
<!--            </header>-->

<!--&lt;!&ndash;             Page Content &ndash;&gt;-->
<!--            <main class="">-->
<!--                <slot />-->
<!--            </main>-->
<!--&lt;!&ndash;            <div class="relative h-screen bg-cover bg-center w-full h-full mt-12" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="container mx-auto flex items-center justify-center h-full">&ndash;&gt;-->
<!--&lt;!&ndash;                    <main class="">&ndash;&gt;-->
<!--&lt;!&ndash;                        <slot/>&ndash;&gt;-->
<!--&lt;!&ndash;                    </main>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->
<!--&lt;!&ndash;            <div class="relative bg-cover bg-center w-full h-screen mt-12" style="background-image: linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)), url('/storage/img/FONDODEIMAGEN.png');">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="absolute inset-0">&ndash;&gt;-->
<!--&lt;!&ndash;                    <div class="container mx-auto flex items-center justify-center h-full">&ndash;&gt;-->
<!--&lt;!&ndash;                        <main>&ndash;&gt;-->
<!--&lt;!&ndash;                            <slot/>&ndash;&gt;-->
<!--&lt;!&ndash;                        </main>&ndash;&gt;-->
<!--&lt;!&ndash;                    </div>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->
<!--&lt;!&ndash;            <div class="relative bg-cover bg-center w-full min-h-screen" style="background-image: linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)), url('/storage/img/FONDODEIMAGEN.png');">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="container mx-auto flex items-center justify-center pt-12 pb-40">&ndash;&gt;-->
<!--&lt;!&ndash;                    <main>&ndash;&gt;-->
<!--&lt;!&ndash;                        <slot/>&ndash;&gt;-->
<!--&lt;!&ndash;                    </main>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->

<!--            <footer class="bg-gray-900 text-white py-6 relative bottom-0 w-full py-16 fixed">-->
<!--                <div class="container mx-auto text-center">-->
<!--                    <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>-->
<!--                </div>-->
<!--            </footer>-->
<!--&lt;!&ndash;bg-gray-900 text-white py-6 absolute -bottom-12 w-full&ndash;&gt;-->
<!--&lt;!&ndash;            <footer class="bg-gray-900 text-white py-6">&ndash;&gt;-->
<!--&lt;!&ndash;               <div class="container mx-auto text-center ma-5">&ndash;&gt;-->
<!--&lt;!&ndash;                  <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>&ndash;&gt;-->
<!--&lt;!&ndash;               </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </footer>&ndash;&gt;-->
<!--&lt;!&ndash;            <footer class="bg-gray-900 text-white py-6 relative bottom-0 w-full">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="container mx-auto text-center ma-5">&ndash;&gt;-->
<!--&lt;!&ndash;                    <p>&copy;  {{year}} CORPORATIVO NAERCRIS S.A. DE C.V. Todos los derechos reservados.</p>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </footer>&ndash;&gt;-->
<!--        </div>-->
<!--    </div>-->
    <!--                                                            <div v-if="menu" class="absolute w-96 bg-white border-t border-gray-300 z-20">-->
    <!--                                                                <Link :href="route('quienes.somos')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">¿QUIENES SOMOS?</Link>-->
    <!--                                                                <Link :href="route('mision.vision')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">MISIÓN Y VISIÓN</Link>-->
    <!--                                                                <Link :href="route('nuestra.historia')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">NUESTRA HISTORIA</Link>-->
    <!--                                                                <Link :href="route('nuestros.valores')" class="block p-3 border-b border-gray-300 hover:bg-red-500 hover:text-white">VALORES</Link>-->
    <!--                                                            </div>-->

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
