<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <Link :href="route('dashboard')" as="button" class="rounded-full h-12 w-12">
                <i class="mdi mdi-arrow-left-bold mdi-36px"></i>
            </Link>
        </template>

        <div class="py-12">
            <div class="grid grid-rows-1">
                <div class="flex justify-center items-center">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
