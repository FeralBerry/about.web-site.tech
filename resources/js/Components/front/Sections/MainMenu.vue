<template>
    <section class="section-menu">
        <div class="navbar navbar-default main-nav" role="navigation" id="main-menu">
            <div class="container" >
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#" class="navbar-brand">I am ~</a>
                </div>  <!-- navbar-header end -->
                <!-- main nav  -->

                <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#section-banner">Home </a></li>
                        <li><a href="#section-profile">About me </a></li>
                        <li><a href="#section-skill">Skills </a></li>
                        <li><a href="#section-resume">Resume </a></li>
                        <li><a href="#section-testimonial">Testimonials </a></li>
                        <li><a href="#section-portfolio">Portfolio </a></li>
                        <li><a href="#section-contact">Contact me </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
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
        window.addEventListener('scroll', () => {
            let section_banner = document.getElementById('section-banner')
            let element = document.getElementById('main-menu')
            if(section_banner.offsetHeight < -section_banner.getBoundingClientRect().top){
                element.style.cssText = 'position:fixed;top:0;';
            } else {
                element.style.cssText = '';
            }
        })
    },
    methods:{

    }
})
</script>
<style scoped>

</style>
