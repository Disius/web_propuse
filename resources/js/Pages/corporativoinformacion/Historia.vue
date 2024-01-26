<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationLogoMarpin from "@/Components/ApplicationLogoMarpin.vue";
import ApplicationLogoPivaz from "@/Components/ApplicationLogoPivaz.vue";
import ApplicationLogoDistrimex from "@/Components/ApplicationLogoDistrimex.vue";
import ApplicationLogoGPGaso from "@/Components/ApplicationLogoGPGaso.vue";
import ApplicationLogoHotel from "@/Components/ApplicationLogoHotel.vue";
import ApplicationLogoGP from "@/Components/ApplicationLogoGP.vue";

const props = defineProps({
    historia: String
})
</script>

<template>
    <MainLayout>
<!--        <div class="relative h-screen bg-cover bg-center w-full" style="background-image:  linear-gradient(rgba(0, 0, 255, 0.3), rgba(0, 0, 255, 0.3)),  url('/storage/img/FONDODEIMAGEN.png');">-->
            <div class="mx-auto max-w-screen-xl container flex items-center justify-center h-full">
                <div class="grid grid-cols-3 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                    <div class="flex items-center justify-center">
                        <div class="grid grid-rows-3">
                                <div class="h-48 w-48 flex items-center justify-end bg-white rounded-full transition-all duration-300 hover:brightness-110  hover:scale-105">
                                    <ApplicationLogoMarpin
                                        class="block h-48 w-52 fill-current text-gray-800 mb-5"
                                    />
                                </div>
                            <div class="rounded-full h-52 w-52 flex items-center justify-start bg-white transition-all duration-300 hover:brightness-110  hover:scale-105">
                                <ApplicationLogoPivaz
                                    class="block h-52 w-64 fill-current text-gray-800 mb-6"
                                />
                            </div>
                            <div class="mt-5 h-36 w-40 flex items-center justify-end bg-white transition-all duration-300 hover:brightness-110  hover:scale-105 rounded-full">
                                <ApplicationLogoDistrimex
                                    class="block h-40 w-48 fill-current text-gray-800 mb-5"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col max-w-screen-md w-full">
                            <div class="bg-red-500 font-semibold text-4xl text-white flex justify-center h-12">Conoce nuestra historia</div>
                            <div class="text-justify font-semibold text-white mt-4">
                                {{props.historia}}
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="grid grid-rows-3">
                            <div class="h-40 w-44 flex items-center justify-end mt-5 ml-4 bg-white transition-all duration-300 hover:brightness-110  hover:scale-105 rounded-full">
                                <ApplicationLogoGPGaso
                                    class="block h-40 w-52 fill-current text-gray-800 mt-1 mr-2"
                                />
                            </div>
                            <div class="h-52 w-52 flex items-center justify-start bg-white transition-all duration-300 hover:brightness-110  hover:scale-105 rounded-full">
                                <ApplicationLogoHotel
                                    class="block h-52 w-64 fill-current text-gray-800 mb-6"
                                />
                            </div>
                            <!-- <div class="flex items-start justify-start">
                                <ApplicationLogoGP
                                    class="block h-40 w-60 fill-current text-gray-800 mb-6"
                                />
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
    </MainLayout>
</template>

<style scoped>

</style>
