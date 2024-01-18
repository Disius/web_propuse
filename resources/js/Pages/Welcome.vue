<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {computed, onMounted, onUnmounted, ref, watch, watchEffect} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import ApplicationLogoNECBlanco from "@/Components/ApplicationLogoNECBlanco.vue";

</script>

<template>
    <MainLayout>
        <div class="container mx-auto flex items-center justify-center h-full">
            <ApplicationLogoNECBlanco
                class="block h-64 w-96 fill-current text-gray-800 mb-5"
            />
        </div>
    </MainLayout>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
