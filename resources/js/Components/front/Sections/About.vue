<template>
    <section id="section-profile" class="section-padding">
        <div class="profile-bg visible-md visible-lg"></div>
        <div class="container">
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
        </div><!-- container end -->
    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {
            about:''
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
                    this.about = res.data[0]
                })
        }

    }
})
</script>
<style scoped>

</style>
