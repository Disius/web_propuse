<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    quienessomos: String
})
</script>

<template>
    <MainLayout>
<!--        <div class="relative h-screen bg-cover bg-center w-full" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">-->
            <div class="container mx-auto flex items-center justify-center h-full">
                <div class="grid grid-cols-2 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                    <div class="flex items-center justify-center">
                        <div class="text-justify font-semibold text-7xl text-white">¿Quiénes somos?</div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="sm:flex sm:flex-col text-justify font-semibold text-lg text-white sm:pr-4 md:pr-6">
                            {{quienessomos}}
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
    </MainLayout>
</template>

<style scoped>

</style>
