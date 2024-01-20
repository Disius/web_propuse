<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import L from 'leaflet'
import 'leaflet/dist/leaflet.css'
import {onMounted, ref} from "vue";

const mapRef = ref(null)


const initialize = () => {
    const coordinates = [16.738041656078323, -93.112694483751]

    let map = L.map(mapRef.value).setView(coordinates, 16)
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map)
    L.marker(coordinates).addTo(map)
}

onMounted(() => {
    initialize()
})
</script>

<template>
    <MainLayout>
        <div class="flex justify-center items-center mb-16">
            <div class="text-white text-4xl">Dónde encontrarnos</div>
        </div>
        <div class="grid grid-cols-2">
            <div ref="mapRef" style="height: 400px; margin-left: 50px">

            </div>
            <div class="flex justify-center items-center md:ml-5 sm:ml-5">
                <div>
                    <!-- Otras secciones de contacto aquí -->
                    <div class="text-white text-2xl">
                        <p>Dirección: Carr. Villaflores 1850, Lomas del Venado, 29080 Tuxtla Gutiérrez, Chis.</p>
                        <p>Teléfono: [Tu número de teléfono]</p>
                        <p>Email: [Tu dirección de correo electrónico]</p>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
