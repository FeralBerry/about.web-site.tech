<template>
    <portfolio-modal :item="portfolio_item" :visible="visible" :text="text"></portfolio-modal>
    <section id="section-portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <div class="section-heading">
                        <h2 class="heading-title">{{ this.$parent.$parent.$parent.portfolio }}</h2>
                        <p v-html="this.$parent.$parent.$parent.portfolio_desc"></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <template v-for="(item,key) in portfolio">
                    <div class="col-md-4 col-sm-4">
                        <div class="portfolio-box">
                            <img :src="'/front/img/portfolio/' + item.id + '/' + item.base_img" alt="" class="img-responsive">
                            <div class="image-overlay text-center">
                                <a @click="this.openModal(item)" ><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div> <!-- col-md-4 end -->
                </template>
            </div>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";
import PortfolioModal from "@/Components/front/Sections/PortfolioModal.vue";
export default defineComponent({
    data(){
        return{
            portfolio:null,
            portfolio_item:null,
            text:null,
            visible:false
        }
    },
    components: {PortfolioModal},
    mounted() {
        this.getPortfolio()
    },
    methods:{
        getPortfolio(){
            axios.post('/api/get/portfolio')
                .then((res) => {
                    if(res.data.length > 0){
                        this.portfolio = res.data
                    }
            })
        },
        openModal(item)
        {
            this.portfolio_item = item.imgs
            this.visible = true
            this.text = item.text
        }
    }
})
</script>
<style scoped>

</style>
