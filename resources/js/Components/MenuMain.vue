<script setup>

 const props = defineProps({
    show: Boolean,
 })

 const closeDropdown = () => {
     // if (props.)
 }
</script>

<template>
                    <div class="relative mt-5">
                        <transition name="fade">
                            <div v-if="show" @click="closeDropdown" class="fixed inset-0 z-10"></div>
                        </transition>

                        <transition name="fade">
                            <div v-if="isDropdownOpen" class="absolute mt-2 bg-white rounded-md">
                                <!-- Contenido del menú desplegable -->
                                <ul>
                                    <li>
                                        <div class="text-justify">
                                            ●
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-justify mt-4">
                                            ●
                                        </div>
                                    </li>
                                    <!--                                <li><a href="#">Valores</a></li>-->
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </ul>
                            </div>
                        </transition>
                    </div>
</template>

<style scoped>

</style>
