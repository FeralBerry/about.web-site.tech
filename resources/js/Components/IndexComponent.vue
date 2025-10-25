<template>
    <header-component></header-component>
    <router-view>

    </router-view>
    <footer-component></footer-component>
</template>
<script>

import {defineComponent} from "vue";
import HeaderComponent from "@/Components/front/Markup/HeaderComponent.vue";
import FooterComponent from "@/Components/front/Markup/FooterComponent.vue";

export default defineComponent({
    data(){
        return {
            auth: false
        }
    },
    components: {FooterComponent, HeaderComponent},
    mounted() {
        this.checkAuth();
    },
    methods:{
        checkAuth(){
            axios.post('/check_auth')
                .then((res) => {
                    this.auth = res.data !== 0;
                })
        }
    }
})
</script>
<style>

</style>
