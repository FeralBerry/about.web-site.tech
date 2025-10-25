<template>
    <section id="section-resume" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h2 class="heading-title">{{ this.$parent.$parent.$parent.resume }}</h2>
                    <p v-html="this.$parent.$parent.$parent.resume_text"></p>
                </div>
            </div>
        </div>
    </section>
    <section id="resume-details" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <div class="resume-inner">
                        <h2 class="heading-title">{{ this.$parent.$parent.$parent.education_title }}</h2>
                        <p v-html="this.$parent.$parent.$parent.education_text"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="timeline-centered">
                    <article class="timeline-entry" v-for="(key,edu) in resumeEdu">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon" :style="'background-color:' + edu.color">
                                <i class="entypo-feather"></i>
                            </div>
                            <div class="timeline-label">
                                <template v-if="this.$parent.$parent.$parent.lang === 'ru'">
                                    <h3 class="resume-title" v-html="edu.title_ru"></h3>
                                    <p v-html="edu.text_ru"></p>
                                </template>
                                <template v-else>
                                    <h3 class="resume-title" v-html="edu.title_en"></h3>
                                    <p v-html="edu.text_en"></p>
                                </template>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-entry begin">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                <i class="entypo-flight"></i> +
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">

                    <div class="resume-inner">
                        <h2 class="heading-title">{{ this.$parent.$parent.$parent.work_exp_title }}</h2>
                        <p v-html="this.$parent.$parent.$parent.work_exp_text"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="timeline-centered">
                    <article class="timeline-entry" v-for="(key,work) in resumeWorkExp">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon" :style="'background-color:' + work.color">
                                <i class="entypo-feather"></i>
                            </div>
                            <div class="timeline-label">
                                <template v-if="this.$parent.$parent.$parent.lang === 'ru'">
                                    <h3 class="resume-title" v-html="work.title_ru"></h3>
                                    <p v-html="work.text_ru"></p>
                                </template>
                                <template v-else>
                                    <h3 class="resume-title" v-html="work.title_en"></h3>
                                    <p v-html="work.text_en"></p>
                                </template>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-entry begin">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                <i class="entypo-flight"></i> +
                            </div>
                        </div>
                    </article>
                </div>
                <a href="#" class="btn btn-default featured">Download Resume</a>
            </div>
        </div>

    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return{
            resumeEdu:null,
            resumeWorkExp:null,
        }
    },
    components: {},
    mounted() {
        this.getResumeEdu()
        this.getResumeWorkExp()
    },
    methods:{
        getResumeEdu(){
            axios.post('/api/resume/edu')
                .then((res) => {
                    if(res.data !== null){
                        this.resumeEdu = res.data
                    }
                })
        },
        getResumeWorkExp(){
            axios.post('/api/resume/work_exp')
                .then((res) => {
                    if(res.data !== null){
                        this.resumeWorkExp = res.data[0]
                    }
                })
        }
    }
})
</script>
<style scoped>

</style>
