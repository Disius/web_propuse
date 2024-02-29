<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    mision: String,
    vision: String,
})
// console.log(props.mision)
</script>

<template>
    <MainLayout>
      <div class="min-h-screen bg-gradient-to-b from-red-950 to-blue-950 flex flex-col items-center justify-center">
        <div class="relative flex-grow flex items-center justify-center">
          <div class="mt-16 pt-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
              <div class="bg-white rounded-xl shadow-md overflow-hidden max-w-md mx-auto hover:brightness-100">
                <div class="grid grid-cols-1">
                  <div class="flex justify-center">
                    <div class="grid grid-cols-1">
                      <p class="font-weight-bold text-white text-6xl text-center bg-red-500">Misión</p>
                      <p class="font-weight-black text-justify ma-10">Somos un grupo empresarial a lograr la satisfacción de nuestros clientes al ofrecer los más altos estándares de calidad, seguridad y servicio en todos los trabajos que realizamos, así como contribuir en el desarrollo económico y social de las localidades en las que realizamos operaciones.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-white rounded-xl shadow-md overflow-hidden max-w-md mx-auto hover:brightness-100">
                <div class="grid grid-cols-1">
                  <div class="flex justify-center">
                    <div class="grid grid-cols-1">
                      <p class="font-weight-bold text-white text-6xl text-center bg-red-500">Visión</p>
                      <p class="font-weight-black text-justify ma-10">Ser los principales proveedores de nuestros productos en la zona, impulsando el desarrollo de las familias de la zona y brindar los productos y servicios de mayor calidad en el mercado.</p>
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
