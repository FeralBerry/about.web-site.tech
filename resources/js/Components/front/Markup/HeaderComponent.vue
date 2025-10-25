<template>
    <main-banner></main-banner>
    <main-menu></main-menu>
</template>
<script>
import {defineComponent} from "vue";
import MainMenu from "@/Components/front/Sections/MainMenu.vue";
import MainBanner from "@/Components/front/Sections/MainBanner.vue";

export default defineComponent({
    data(){
        return {

        }
    },
    components: {MainMenu,MainBanner},
    mounted() {

    },
    methods:{

    }
})
</script>
<style scoped>

</style>
