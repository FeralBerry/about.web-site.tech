<template>
    <div @click="this.$parent.visible = false" v-if="this.$parent.visible" style="background-color: rgba(44,44,44,0.5); width: 100%; height: 100%;z-index: 999; position: fixed; top: 0; left: 0">
        <div style="background-color: #fff;position: absolute;top: 10%;left: 10%;text-align: center; width: 80%;height: 80%; overflow-y: auto">
            <a @click="this.$parent.visible = false" style="font-size: 30px;right: 10px;top: 10px; position: absolute" title="Close Modal">X</a>
            <template v-for="i in item">
                <img :src="'/front/img/portfolio/' + i.portfolio_id + '/' + i.img" alt="" style="padding: 10px;max-height: 600px;max-width: 450px">
            </template>
            <p v-html="text"></p>
        </div>
    </div>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return{

        }
    },
    props:{
        item:{
            'type': Object,
            'require': true
        },
        visible:{
            'type': Boolean,
            'require': true
        },
        text:{
            'type': String,
            'require': true
        }
    },
    components: {},
    mounted() {

    },
    methods:{

    }
})
</script>
<style>

</style>
