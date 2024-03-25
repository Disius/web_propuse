<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    quienessomos: String
})
</script>

<template>
    <MainLayout>
        <div class="py-16">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl">
                <div class="md:flex">
                    <div class="md:shrink-0">
<!--                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/img/building.jpg" alt="Modern building architecture">-->
                    </div>
                    <div class="p-8">
                        <p class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Somos un grupo de empresas que se ubica mayormente en la costa
                            del estado de Chiapas ofreciendo los mas altos estándares de calidad, seguridad y servicio logrando asi la satisfacción de cada uno de nuestros clientes</p>
                    </div>
                </div>
<!--                <div class="md:flex">-->
                    <div class="p-5">
                        <div class="flex justify-center">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="flex justify-center">
                                    <img src="/storage/img/marpinFerre.jpg" alt="marpin_ferreteria" class="h-3/5 rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
<!--                </div>-->
                <div class="flex justify-center">
                    <p></p>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
