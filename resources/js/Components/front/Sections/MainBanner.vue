<template>
    <section id="section-banner">
        <div class="container">
            <div class="row">
                <div class="banner-content wow fadeInRight">
                    <h2 class="title" v-html="this.$parent.$parent.banner_text"></h2>
                    <a @click="this.$parent.$parent.changeLang()" class="btn btn-default">{{ this.$parent.$parent.learn_more }}</a>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {

        }
    },
    components: {},
    mounted() {

    },
    methods:{

    }
})
</script>
<style scoped>
    .banner-content{
        padding: 250px 15px 300px 15px;
    }
    @media (max-width: 600px) {
        .banner-content{
            padding: 70px 15px 100px 15px;
        }
    }
</style>
