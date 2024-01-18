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
<!--        <div class="container mx-auto flex items-center justify-center h-full">-->
            <div class="grid md:grid-cols-2 sm:grid-cols-1 sm:px-4">
                <div class="flex justify-center">
                    <div class="text-justify text-7xl bg-red-500 text-white h-20 w-58 mt-16">Nuestros Valores</div>
                </div>
                <div class="flex justify-center">
                    <div v-html="formatValue(props.valores)" class="text-white text-3xl sm:ml-12"></div>
                </div>
            </div>
<!--        </div>-->
    </MainLayout>
</template>

<style scoped>

</style>
