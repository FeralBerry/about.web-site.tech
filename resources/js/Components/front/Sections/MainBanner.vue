<template>
    <section id="section-banner">
        <div class="container">
            <div class="row">
                <div class="banner-content wow fadeInRight">
                    <h2 class="title" v-html="this.$parent.$parent.banner_text"></h2>
                    <a href="#section-contact" class="btn btn-default">{{ this.$parent.$parent.learn_more }}</a><br>
                    <a style="margin-top: 10px;" @click="getQuiz()" class="btn btn-default">{{ this.$parent.$parent.quiz_survey }}</a>
                </div>
            </div>
        </div>
    </section>
    <quiz-modal></quiz-modal>
</template>
<script>
import {defineComponent} from "vue";
import QuizModal from "@/Components/front/Sections/QuizModal.vue";

export default defineComponent({
    data(){
        return {
            visible:false,
            quiz_id:null
        }
    },
    components: {QuizModal},
    mounted() {

    },
    methods:{
        getQuiz(){
            this.visible = true
            this.quiz_id = '1'
        }
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
