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
      <div class="min-h-screen bg-gradient-to-b from-red-950 to-blue-950 flex flex-col items-center justify-center">
        <div class="relative flex-grow flex items-center justify-center">
          <div class="mt-16 pt-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden max-w-md md:max-w-7xl mx-auto hover:brightness-100 ma-5">
              <div class="flex justify-center items-center mt-5">
                <div class="text-white text-4xl font-weight-bold bg-red-500">Dónde encontrarnos</div>
              </div>
              <div class="grid grid-cols-1 lg:grid-cols-1 mt-4">
                <div class="lg:ma-10 z-10">
                  <div ref="mapRef" style="height: 400px;" class="">

                  </div>
                </div>
                <div class="flex justify-center items-center md:ml-5 sm:ml-5">
                  <div>
                    <!-- Otras secciones de contacto aquí -->
                    <div class="text-black text-2xl ma-5">
                      <p>Dirección: Carr. Villaflores 1850, Lomas del Venado, 29080 Tuxtla Gutiérrez, Chis.</p>
                      <p>Teléfono: [Tu número de teléfono]</p>
                      <p>Email: [Tu dirección de correo electrónico]</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </MainLayout>
</template>

<style scoped>

</style>
