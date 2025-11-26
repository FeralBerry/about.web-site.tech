cd<template>
    <header-component></header-component>
    <router-view>

    </router-view>
    <footer-component></footer-component>
</template>
<script>

import {defineComponent} from "vue";
import HeaderComponent from "@/Components/front/Markup/HeaderComponent.vue";
import FooterComponent from "@/Components/front/Markup/FooterComponent.vue";
import DisableDevtool from 'disable-devtool';

/*DisableDevtool({
    disableMenu:false,
    disableSelect: false, // Whether to disable selection text Default is false
    disableInputSelect: false, // Whether to disable Input selection text Default is false
    disableCopy: false, // Whether to disable copying, default is false
    disableCut: true, // Whether to disable cutting, default is false
    disablePaste: true, // Whether to disable paste, default is false
})*/

export default defineComponent({
    data(){
        return {
            auth: false,
            lang: navigator.language,
        }
    },
    components: {FooterComponent, HeaderComponent},
    mounted() {
        this.contentMenu()
    },
    methods:{
        checkAuth(){
            axios.post('/check_auth')
                .then((res) => {
                    this.auth = res.data !== 0;
                })
        },
        contentMenu(){
            document.onclick = hideMenu;
            document.oncontextmenu = rightClick;

            function hideMenu() {
                document.getElementById(
                    "contextMenu").style.display = "none"
            }
            function rightClick(e) {
                e.preventDefault();

                if (document.getElementById(
                    "contextMenu").style.display == "block")
                    hideMenu();
                else {
                    let menu = document
                        .getElementById("contextMenu")

                    menu.style.display = 'block';
                    menu.style.left = e.pageX + "px";
                    menu.style.top = e.pageY + "px";
                }
            }
        }
    }
})
</script>
<style>

</style>
