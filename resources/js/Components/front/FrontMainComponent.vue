<template>
    <!-- section menu end -->
    <section id="section-overview" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="service-wrapper">
                    <div class="service-inner wow fadeInRight" data-wow-delay=".2s">
                        <i class="fa fa-users"></i>
                        <div class="service-box">
                            <h3>User Story</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div> <!-- service -inner  -->
                    <div class="service-inner wow fadeInRight" data-wow-delay=".5s">
                        <i class="fa fa-bank"></i>
                        <div class="service-box">
                            <h3>Wireframe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>  <!-- service -inner  -->
                    <div class="service-inner wow fadeInRight" data-wow-delay=".8s">
                        <i class="fa fa-pencil"></i>
                        <div class="service-box">
                            <h3>Graphic Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div> <!-- service -inner  -->
                    <div class="service-inner wow fadeInRight" data-wow-delay="1.1s">
                        <i class="fa fa-globe"></i>
                        <div class="service-box">
                            <h3>Web Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>  <!-- service -inner  -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- section overview end -->
    <about></about>
    <skills></skills>
    <resume></resume>
    <!-- section testimonial start -->
    <section id="section-testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide text-center" id="testimonial-carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

                                <h4 class="client-name">Fedrer Venliy</h4>
                            </div>
                            <div class="item">
                                <p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

                                <h4 class="client-name">Markus Stephen</h4>
                            </div>
                            <div class="item ">
                                <p>“ Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam. ”</p>

                                <h4 class="client-name">John Deally</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section testimonial end -->
    <portfolio></portfolio>
    <contact></contact>
</template>
<script type="module">
import {defineComponent} from "vue";
import Contact from "@/Components/front/Sections/Contact.vue"
import About from "@/Components/front/Sections/About.vue"
import Skills from "@/Components/front/Sections/Skills.vue"
import Resume from "@/Components/front/Sections/Resume.vue"
import Portfolio from "@/Components/front/Sections/Portfolio.vue"
/*window.Echo.channel('posts')
    .listen('.create', (data) => {
        document.getElementById('mess').innerHTML = data.message
        console.log('Order status updated: ', data);
    });*/
export default defineComponent({
    components: {Contact,About,Skills,Resume,Portfolio},
    mounted() {

    },
    methods:{
        /*sendEvent(){
            axios.post('/posts',
                {}
            ).then(() => {
                console.log('post send')
            });
        }*/
    }
})
</script>
<style scoped>

</style>
