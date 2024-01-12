<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogoGuest from "@/Components/ApplicationLogoGuest.vue";
</script>

<template>
        <div class="min-h-screen flex flex-col sm:justify-center justify-center items-center bg-gray-100"
             style="background-image: url('/storage/img/FONDODEIMAGEN.png'); background-size: cover;  height: 100vh;"
        >
            <div>
                <Link href="/">
                    <ApplicationLogoGuest class="w-20 h-20 fill-current text-gray-500" />
                </Link>
            </div>

            <div
                class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <slot />
            </div>
        </div>
</template>

<style>

</style>
