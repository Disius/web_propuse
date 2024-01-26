<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="boton-volver">
                <i class="material-icons">arrow_back</i>
            </Link>
        </template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
