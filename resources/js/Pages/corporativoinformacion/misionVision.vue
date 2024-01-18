<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    mision: String,
    vision: String,
})
console.log(props.mision)
</script>

<template>
    <MainLayout>
<!--        <div class="relative h-screen bg-cover bg-center w-full" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">-->
            <div class="container mx-auto flex items-center justify-center h-full">
                <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4 md:mx-4 sm:mx-5 sm:ma-16">
                    <div class="flex items-center justify-center mb-16 pb-16 md:mt-5">
                        <div class="grid grid-rows-2 sm:px-6 md:px-5">
                            <div class=" bg-red-500 text-justify font-semibold text-7xl text-white flex justify-center">Misión</div>
                            <div class="text-justify font-semibold text-xl text-white mt-4 h-12">{{props.mision}}</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mb-16 pb-16 md:mt-5 lg:mt-6">
                        <div class="grid grid-rows-2">
                            <div class=" bg-red-500 text-justify font-semibold text-7xl text-white flex justify-center">Vision</div>
                            <div class="text-justify font-semibold text-xl text-white mt-4 h-12">{{props.vision}}</div>
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
    </MainLayout>
</template>

<style scoped>

</style>
