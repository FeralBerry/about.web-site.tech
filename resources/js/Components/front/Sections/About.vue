<template>
    <section id="section-profile" class="section-padding">
        <div class="profile-bg visible-md visible-lg"></div>
        <div class="container">
            <template v-if="about !== null">
                <div class="row" v-if="this.$parent.$parent.$parent.lang === 'ru'">
                    <div class="col-md-7 col-sm-12 pull-right">
                        <div class="profile-desc wow fadeInRight" v-html="about.about_ru">

                        </div>
                    </div>
                </div> <!-- row end -->
                <div class="row" v-else >
                    <div class="col-md-7 col-sm-12 pull-right">
                        <div class="profile-desc wow fadeInRight" v-html="about.about_en">

                        </div>
                    </div>
                </div>
            </template>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {
            about:null
        }
    },
    components: {},
    mounted() {
        this.getAbout()
    },
    methods:{
        getAbout(){
            axios.post('/api/get/about')
                .then((res) => {
                    if(res.data !== null){
                        this.about = res.data[0]
                    }
                })
        }

    }
})
</script>
<style scoped>

</style>
