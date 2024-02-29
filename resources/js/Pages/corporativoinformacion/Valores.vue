<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    valores: String
})
const formatValue = (text) => {
    const valuesArray = text.split('·')
    return valuesArray.join("<br>· ")
}
</script>

<template>
    <MainLayout>
        <div class="relative h-screen bg-cover bg-center w-full bg-gradient-to-b from-red-950 to-blue-950 mt-16">
            <div class="grid md:grid-cols-2 sm:grid-cols-1 sm:px-4 mt-16 pt-16">
                <div class="flex justify-center">
                    <div class="text-justify text-7xl bg-red-500 text-white h-20 w-58 mt-16">Nuestros Valores</div>
                </div>
                <div class="flex justify-center">
                    <div v-html="formatValue(props.valores)" class="text-white text-3xl sm:ml-12"></div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
