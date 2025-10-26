<template>
    <section id="section-skill" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">{{ this.$parent.$parent.$parent.skills }}</h2>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft">
                    <template v-if="skills_desc !== null">
                        <div class="skill-desc" v-if="this.$parent.$parent.$parent.lang === 'ru'">
                            <template v-html="skills_desc.description_ru"></template>
                        </div>
                        <div class="skill-desc" v-else>
                            <template v-html="skills_desc.description_en"></template>
                        </div>
                    </template>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInRight" >
                    <template v-if="skills_progress !== null">
                        <template v-for="(key,progress) in skills_progress">
                            <div class="skill-box wow fadeInDown" :data-wow-delay="'.'+(key+1)*2+'s'">
                                <label> {{ progress.name }}</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progress-bar" aria-valuemin="0" :aria-valuenow="progress.percent" aria-valuemax="100" :style="'width: '+progress.percent +'%;'" >
                                        {{ progress.percent }}%
                                    </div>
                                </div>
                            </div>
                        </template>
                    </template>
<!--

                    <div class="skill-box wow fadeInDown" data-wow-delay=".4s">
                        <label> Photoshop</label>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="85" aria-valuemax="100" style="width: 85%;" >
                                85%
                            </div>
                        </div>
                    </div>
                    <div class="skill-box wow fadeInDown" data-wow-delay=".6s">
                        <label> HTML5 / CSS3</label>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="90" aria-valuemax="100" style="width: 90%;" >
                                90%
                            </div>
                        </div>
                    </div>
                    <div class="skill-box wow fadeInDown" data-wow-delay=".8s">
                        <label> JavaScript </label>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="65" aria-valuemax="100" style="width: 65%;" >
                                65%
                            </div>
                        </div>
                    </div>-->
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
            skills_desc:null,
            skills_progress:null
        }
    },
    components: {},
    mounted() {
        this.getSkillDesc()
        this.getSkillProgress()
    },
    methods:{
        getSkillDesc(){
            axios.post('/api/skills_desc')
                .then((res) => {
                    if(res.data.length > 0){
                        this.skills_desc = res.data[0]
                    }

                })
        },
        getSkillProgress(){
            axios.post('/api/skills_progress')
                .then((res) => {
                    if(res.data.length > 0){
                        this.skills_progress = res.data
                    }
                })
        }
    }
})
</script>
<style scoped>

</style>
