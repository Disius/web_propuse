<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('users.view')" as="button" class="boton-volver">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
