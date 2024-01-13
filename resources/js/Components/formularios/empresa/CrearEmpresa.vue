<script setup>
import {ref, watch} from "vue";

const props = defineProps({
    show: Boolean
})

const show_form = ref(false)

watch(() => {
    show_form.value = props.show

})
</script>

<template>
<!--    <div class="card">-->
    <Teleport to="body">
        <Transition class="absolute inset-0 bg-gray-500 opacity-75">
            <div v-show="show" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" scroll-region>
                <Transition

                >
                    <div v-show="show" class="fixed inset-0 transform transition-all" @click="close">
                        <div class="absolute inset-0 bg-gray-500 opacity-75" />
                    </div>
                </Transition>

                <Transition

                >
                    <div
                        v-show="show"
                        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto right-0"
                    >
                        <slot v-if="show" />
                    </div>
                </Transition>
            </div>
        </Transition>
    </Teleport>
<!--    </div>-->
</template>

<style scoped>

</style>
